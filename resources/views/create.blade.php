<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Product</div>

                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis kelamin</label>
                                <input type="text" name="jk" id="jk" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="tgllhr">Tanggal lahir</label>
                                <input type="text" name="tglhr" id="tgllhr" class="form-control" required>
                            </div>
                            <!-- tambahkan input sesuai kebutuhan -->
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
