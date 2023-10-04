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
                <h1>Data Stok Jubelio</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Stok Jubelio</div>
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
                                    <a href="#" class="btn btn-icon btn-primary"><i class="far fa-file"> export</i></a>
                                </div>
                            </div> --}}
                            {{-- <div class="card-body p-4">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>SKU</th>
                                                <th>Nama Barang</th>
                                                <th>Nama MP</th>
                                                <th>Nama Toko</th>
                                                <th>Nama Gudang</th>
                                                <th>Lokasi Gudang</th>
                                                <th>Total Stok</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($channels as $itemchannels)
                                                @foreach ($locations as $itemlocations)
                                                    @foreach ($data as $itemdata)
                                                    @foreach ($tenant as $itemtenat)
                                                        <tr>
                                                            {{$dataTable->table()}}
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $itemdata->item_code }}</td>
                                                            <td>{{ $itemdata->item_name }}</td>
                                                            <td>{{ json_encode($itemdata->total_stocks) }}</td>
                                                            <td>{{ $itemchannels->channel_name }}</td>
                                                            <td>{{ $itemchannels->store_name }}</td>
                                                            <td>{{ $itemtenat->company_name }}</td>
                                                            <td>{{ $itemlocations->location_name }}</td>
                                                            <td>{{ $itemdata->total_stocks->available }}</td>
                                                        </tr>
                                                        @endforeach
                                                    @endforeach
                                                @endforeach
                                            @endforeach
                                            {{ $data->links() }}
                                        </tbody>
                                    </table>
                                    <div class="card-footer text-right">
                                        <nav class="d-inline-block">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1"><i
                                                            class="fas fa-chevron-left"></i></a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1 <span
                                                            class="sr-only">(current)</span></a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><i
                                                            class="fas fa-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="card-body p-4">
                                <div class="table-responsive">
                                    {{-- <table class="table table-bordered table-striped mb-0"> --}}
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>SKU</th>
                                                <th>Nama Barang</th>
                                                <th>Nama Tenant</th>
                                                <th>Lokasi Gudang</th>
                                                <th>Total Stok</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data1 as $item)
                                                {{-- @foreach ($data2 as $itemtenant) --}}
                                                    @foreach ($item->location_stocks as $values)
                                                        {{-- @foreach ($data2 as $itemstok) --}}
                                                        {{-- @foreach ($results3 as $itemchannels) --}}
                                                        {{-- @foreach ($results5 as $itemtenant) --}}
                                                        {{-- @foreach ($meta as $itemstok) --}}
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            {{-- <td>{{ dd($item) }}</td> --}}
                                                            <td>{{ $item->item_code }}</td>
                                                            <td>{{ $item->item_name }}</td>
                                                            {{-- <td>{{ $itemtenant->company_name }}</td> --}}
                                                            <td></td>
                                                            <td>{{ $values->location_code }}</td>
                                                            <td>{{ $values->available }}</td>
                                                            {{-- <td>{{ $item['location_stocks'][0]['available'] }}</td> --}}
                                                            {{-- <td>{{$itemstok->location_code}}</td> --}}
                                                            {{-- <td>{{ $itemstok->available }}</td> --}}
                                                            {{-- <td>{{ dd($item->available) }}</td> // this will work --}}
                                                            {{-- <td>{{ $item->location_stocks }}</td> --}}
                                                            {{-- <td>{{ $results5->company_name }}</td>
                                                    <td>{{ $results3->store_name }}</td>
                                                    <td>{{ $results3->channel_name }}</td> --}}
                                                            {{-- <td>{{ $itemstock->location_name }}</td> --}}
                                                            {{-- <td>{{ $itemstock->available }}</td> --}}

                                                            {{-- <td>{{ $item->ikubku }}</td> --}}
                                                            {{-- <td>{{ $item->place }}</td>
                                                <td>{{ $item->tenant }}</td> --}}
                                                            {{-- <td> <a href="" class="btn btn-primary btn-action mr-1"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                    <a href="" class="btn btn-danger btn-action"><i
                                                            class="fas fa-trash"></i></a>
                                                </td> --}}
                                                        </tr>
                                                    {{-- @endforeach
                                                @endforeach --}}
                                                @endforeach
                                            {{-- @endforeach --}}
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{-- {{ $paginatedResults1->links() }} --}}
                                    {{-- {{ $data->links() }} --}}
                                    {{-- {!! $data->links() !!} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('bawah')
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
