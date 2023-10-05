{{-- @extends('layouts.app')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Hitung Produksi</h2>
        <div class="lead">
            Hitung Produksi.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('produksi.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="jumlah">Jumlah Mobil:</label>
                    <input type="number" id="jumlah" name="jumlah">
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('produksi.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection --}}

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
                                            <label for="jumlah" class="form-label">Jumlah Mobil:</label>
                                            <input value="{{ old('jumlah') }}"
                                                type="text"
                                                class="form-control"
                                                name="jumlah"
                                                placeholder="jumlah" required>
                        
                                            @if ($errors->has('jumlah'))
                                                <span class="text-danger text-left">{{ $errors->first('jumlah') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{ route('produksi.index') }}" class="btn btn-default">Back</a>
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

