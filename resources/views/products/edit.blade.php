@extends('layouts')

@section('content')
    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="mb-3">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}">
        </div>
        <div class="mb-3">
            <label for="product_des" class="form-label">Product Description</label>
            <textarea class="form-control" id="product_des" name="product_des">{{ $product->product_des }}</textarea>
        </div>
        <div class="mb-3">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="number" class="form-control" id="product_price" name="product_price" value="{{ $product->product_price }}">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection