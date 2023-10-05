@extends('layouts.app')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Add new permission</h2>
        <div class="lead">
            Add new permission.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('produksi.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="quantity">Jumlah Mobil:</label>
                    <input type="number" id="quantity" name="quantity">
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('permissions.index') }}" class="btn btn-default">Back</a>
            </form>
            <form action="{{ route('materials.index') }}" method="POST">
                @csrf
              
            </form>
        </div>

    </div>
@endsection
