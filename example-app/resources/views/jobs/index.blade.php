@extends('layouts.app')

@section('title', 'Jobs')

@section('content')
<div class="container">
    <h1 class="mb-3">Job List</h1>

    <a href="{{ route('jobs.create') }}" class="btn btn-primary mb-3">+ Add Job</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Company</th>
                <th>Location</th>
                <th>Description</th>
                <th>Actions</th> {{-- Action column --}}
            </tr>
        </thead>
        <tbody>
            @forelse ($jobs as $job)
                <tr>
                    <td>{{ $job->title }}</td>
                    <td>{{ $job->company }}</td>
                    <td>{{ $job->location }}</td>
                    <td>{{ $job->description }}</td>
                    <td>
                        <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        
                        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this job?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No jobs found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination --}}
    {{ $jobs->links() }}
</div>
@endsection
