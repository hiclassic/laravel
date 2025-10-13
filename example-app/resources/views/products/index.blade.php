@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product List</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">+ Add Product</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Categories</th>
                <th>Tags</th>
                <th>Actions</th> <!-- Action column -->
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @foreach($product->categories as $category)
                            <span class="badge bg-info">{{ $category->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        @foreach($product->tags as $tag)
                            <span class="badge bg-warning">{{ $tag->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-success">Edit</a>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
