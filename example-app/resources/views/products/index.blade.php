@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product List</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">+ Add Product</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Categories</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @foreach($product->categories as $category)
                            <span class="badge bg-info text-dark">{{ $category->name }}</span>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
