@extends('layouts.admin')

@section('title')
Key Initiatives
@endsection


@section('content')
<div class="container">
    <h1>Key Initiatives</h1>

    <a href="{{ route('key_initiatives.create') }}" class="btn btn-primary mb-3">Create New Initiative</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="card mb-3">
      
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Year</th>
                        <th>Impact</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($initiatives as $initiative)
                        <tr>
                            <td>{{ $initiative->title }}</td>
                            <td>{{ $initiative->year }}</td>
                            <td>{{ Str::limit($initiative->impact, 50) }}</td>
                            <td>
                                {{-- <a href="{{ route('key_initiatives.show', $initiative->slug) }}" class="btn btn-info btn-sm">View</a> --}}
                                
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('key_initiatives.edit', $initiative->slug) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('key_initiatives.destroy', $initiative->slug) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                  </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4">No key initiatives found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
   
</div>
@endsection
