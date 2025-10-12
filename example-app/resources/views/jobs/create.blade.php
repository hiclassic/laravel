@extends('layouts.app')

@section('title', 'Add Job')

@section('content')
<div class="container">
    <h1 class="mb-4">Add New Job</h1>

    {{-- Validation errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Job Title</label>
            <input type="text" name="title" id="title"
                   value="{{ old('title') }}"
                   class="form-control" placeholder="e.g. Laravel Developer" required>
        </div>

        <div class="mb-3">
            <label for="company" class="form-label">Company</label>
            <input type="text" name="company" id="company"
                   value="{{ old('company') }}"
                   class="form-control" placeholder="e.g. TechSoft Ltd." required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" id="location"
                   value="{{ old('location') }}"
                   class="form-control" placeholder="e.g. Dhaka, Bangladesh">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Job Description</label>
            <textarea name="description" id="description"
                      class="form-control" rows="4"
                      placeholder="Write job responsibilities...">{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Save Job</button>
        <a href="{{ route('jobs.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
