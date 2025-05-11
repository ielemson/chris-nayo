@extends('layouts.admin')

@section('title')
    Create Key Initiative
@endsection

@section('content')
    {{-- <div class="container">
<h1>Create Key Initiative</h1>


</div> --}}

    <section class="content">
        <div class="card">

            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="container">
                    <h2>Edit Focus Area</h2>
                    <form action="{{ route('key_focus_areas.update', $keyFocusArea->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                           <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ $keyFocusArea->title }}" required>
                        </div>     
                            </div>

                             <div class="col-md-6">
            <div class="mb-3">
           <label for="type" class="form-label">Status</label>
           {{-- <select name="status" id="status" class="form-control" required>
               <option value="published">Published</option>
               <option value="draft">Draft</option>
           </select> --}}
           <select name="status" id="status" class="form-control" required>
            <option value="published" {{ $keyFocusArea->status == 'published' ? 'selected' : '' }}>
                Published</option>
            <option value="draft" {{ $keyFocusArea->status == 'draft' ? 'selected' : '' }}>Draft
            </option>
        </select>
       </div>
   </div>
                        </div>
                        

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control">{{ $keyFocusArea->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('key_focus_areas.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
