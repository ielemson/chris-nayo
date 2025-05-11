@extends('layouts.admin')

@section('title')
Key Initiatives
@endsection


@section('content')
<div class="container">
    <h1>Key Initiatives</h1>

    <a href="{{ route('key_focus_areas.create') }}" class="btn btn-primary mb-3">Create New Initiative</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="card mb-3">
      
        <div class="card-body">
          <section id="focus-areas" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Key Focus Areas</h2>
        <div class="row">
  @foreach($focusAreas as $area)
        <div class="card mb-2">
            <div class="card-body">
                <h5>{{ $area->title }}</h5>
                <p>{{ $area->description }}</p>
                <a href="{{ route('key_focus_areas.edit', $area->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('key_focus_areas.destroy', $area->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
        </div>
    </div>
</section>

        </div>
    </div>
   
</div>
@endsection
