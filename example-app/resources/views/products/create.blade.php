@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input name="name" type="text" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input name="price" type="number" step="0.01" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Categories</label><br>
            @foreach($categories as $category)
                <label>
                    <input type="checkbox" name="category_ids[]" value="{{ $category->id }}"> {{ $category->name }}
                </label><br>
            @endforeach
        </div>

        <button class="btn btn-success">Save</button>
    </form>
</div>
@endsection
