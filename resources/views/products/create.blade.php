@extends('layouts')

@section('content')
    <h2 class="text-center mb-3">Product Create</h2>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Your Product Name">
        </div>
        <div class="mb-3">
            <label for="product_des" class="form-label">Product Description</label>
            <textarea class="form-control" id="product_des" name="product_des" placeholder="Enter Your Product Description Name"></textarea>
        </div>
        <div class="mb-3">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="number" class="form-control" id="product_price" name="product_price" placeholder="Enter Your Product Price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection