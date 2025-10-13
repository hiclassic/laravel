<!-- resources/views/products/index.blade.php -->
@extends('layouts.app')

@section('title', 'Products & Categories')

@section('content')
<div class="container">
    <h1 class="mb-4">Products & Categories</h1>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- 1️⃣ Products Table --}}
    <h2>Products</h2>
    <table class="table table-bordered mb-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr>
                <td>{{ $loop->iteration + ($products->currentPage()-1) * $products->perPage() }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No products found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination for Products --}}
    <div class="d-flex justify-content-center mb-5">
        {{ $products->links() }}
    </div>

    {{-- 2️⃣ Categories Table --}}
    <h2>Categories</h2>
    <table class="table table-bordered mb-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="2" class="text-center">No categories found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{-- 3️⃣ Pivot Table: Product-Category Relations --}}
    <h2>Product-Category Relations</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Category Name</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                @foreach($product->categories as $category)
                <tr>
                    <td>{{ $loop->parent->iteration }}.{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $category->name }}</td>
                </tr>
                @endforeach
            @empty
            <tr>
                <td colspan="3" class="text-center">No relations found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
