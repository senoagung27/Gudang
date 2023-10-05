@extends('layouts.app')
@section('content')
    <div class="main-content">
        <section class="section">
            @if (('session')('edit'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Berhasil!!!!</h5>
                    {{-- {{ session('edit') }} --}}
                </div>
            @endif
            @if (('session')('tambah'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Berhasil!!!!</h5>
                    {{-- {{ session('tambah') }} --}}
                </div>
            @endif
            <div class="section-header">
                <h1>Tambah Data Material</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Data Material</a></div>
                    <div class="breadcrumb-item">Tambah Data Material</div>
                </div>
            </div>
            <div class="section-body">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <form method="POST" action="{{ route('produksi.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-4 mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input value="{{ old('name') }}"
                                                type="text"
                                                class="form-control"
                                                name="name"
                                                placeholder="Name" required>
                        
                                            @if ($errors->has('name'))
                                                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-4 mb-3">
                                            <label for="satuan" class="form-label">Satuan</label>
                                            <input value="{{ old('satuan') }}"
                                                type="text"
                                                class="form-control"
                                                name="satuan"
                                                placeholder="satuan" required>
                        
                                            @if ($errors->has('satuan'))
                                                <span class="text-danger text-left">{{ $errors->first('satuan') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-4 mb-3">
                                            <label for="stok" class="form-label">Stok</label>
                                            <input value="{{ old('stok') }}"
                                                type="number"
                                                class="form-control"
                                                name="stok"
                                                placeholder="stok" required>
                        
                                            @if ($errors->has('stok'))
                                                <span class="text-danger text-left">{{ $errors->first('stok') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="biaya" class="form-label">Biaya</label>
                                            <input value="{{ old('biaya') }}"
                                                type="number"
                                                class="form-control"
                                                name="biaya"
                                                placeholder="biaya" required>
                        
                                            @if ($errors->has('biaya'))
                                                <span class="text-danger text-left">{{ $errors->first('biaya') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="waktu_produksi" class="form-label">waktu produksi</label>
                                            <input value="{{ old('waktu_produksi') }}"
                                                type="time"
                                                class="form-control"
                                                name="waktu_produksi"
                                                placeholder="waktu_produksi" required>
                        
                                            @if ($errors->has('waktu_produksi'))
                                                <span class="text-danger text-left">{{ $errors->first('waktu_produksi') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{ route('material.index') }}" class="btn btn-default">Back</a>
                                        </div>
                                       
                                    </form>
                                    </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
{{-- @section('ff')
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
            });
        });
    </script>
@endsection --}}

