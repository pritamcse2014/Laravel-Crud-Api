@extends('layouts')

@section('content')
    <h2 class="text-center mb-3">Product Store</h2>
    <table class="table table-bordered text-center">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            {{--  @php
                echo $products;
            @endphp --}}
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->product_des }}</td>
                <td>{{ $product->product_price }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">Edit</a>
                    ||
                    <form method="POST" action="{{ route('products.destroy', $product->id) }}"
                        style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="confirmDelete({{ $product->id }})" type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection