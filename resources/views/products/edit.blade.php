@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Product</div>
                    <div class="card-body">
                        <form action="{{ route('product.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name Product</label>
                                <input type="text" class="form-control" name="name_product"
                                    value="{{ $product->name_product }}">
                                    <label for="exampleInputEmail1" class="form-label">Price</label>
                                    <input type="text" class="form-control" name="price"
                                        value="{{ $product->price }}">
                                        <label for="exampleInputEmail1" class="form-label">Description</label>
                                        <input type="text" class="form-control" name="description"
                                            value="{{ $product->description }}">
                                            <label for="exampleInputEmail1" class="form-label">Id Brand</label>
                                            <input type="text" class="form-control" name="id_brand"
                                                value="{{ $product->id_brand }}">
                            </div>
                            <button type="submit" class="btn btn-success">Edit</button>
                            <a href="{{ url('product') }}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
