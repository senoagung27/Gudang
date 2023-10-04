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
                <h1>Data Stok FF</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Stok FF</div>
                </div>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            {{-- <div class="card-header">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-6">
                                    <a href="#" class="btn btn-icon btn-primary"><i class="far fa-file">
                                            export</i></a>
                                </div>
                            </div> --}}
                            <div class="card-body p-4">
                                <div class="table-responsive">
                                    {{-- <table class="table table-bordered table-striped mb-0"> --}}
                                    <table  id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>SKU</th>
                                                <th>Nama Barang</th>
                                                <th>Nama tenant</th>
                                                <th>Total Stok</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($data1 as $item)
                                            @foreach ($data3 as $itemtenant)
                                            {{-- @foreach ($meta as $itemstok) --}}
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    {{-- <td>{{ dd($data3) }}</td> --}}
                                                    {{-- <td>{{ dd( $item->skuNumber) }}</td> --}}
                                                    <td>{{ $item->skuNumber }}</td>
                                                    <td>{{ $item->productName }}</td>
                                                    <td>{{ $itemtenant->company_name }}</td>
                                                    <td>{{  $item->stock }}</td>
                                                    {{-- <td>{{ $item->ikubku }}</td> --}}
                                                    {{-- <td>{{ $item->place }}</td>
                                                <td>{{ $item->tenant }}</td> --}}
                                                    {{-- <td> <a href="" class="btn btn-primary btn-action mr-1"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                    <a href="" class="btn btn-danger btn-action"><i
                                                            class="fas fa-trash"></i></a>
                                                </td> --}}
                                                </tr>
                                            @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{-- {{ $dataPegawai->links() }} --}}
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
@section('ff')
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
@endsection
