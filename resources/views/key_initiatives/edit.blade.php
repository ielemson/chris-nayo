@extends('layouts.admin')

@section('title')
Edit Key Initiative
@endsection


@section('content')
<div class="container">
    <h1>Edit Key Initiative</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        
        <div class="card-body">
    <form action="{{ route('key_initiatives.update', $keyInitiative->slug) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
         
       <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="title">Title *</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $keyInitiative->title) }}" required>
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
            <option value="published" {{ $keyInitiative->status == 'published' ? 'selected' : '' }}>
                Published</option>
            <option value="draft" {{ $keyInitiative->status == 'draft' ? 'selected' : '' }}>Draft
            </option>
        </select>
       </div>
   </div>
       </div>
    </div>

        <div class="form-group">
            <label for="description">Description *</label>
            <textarea name="description" class="form-control summernote" rows="5" required>{{ old('description', $keyInitiative->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="impact">Impact</label>
            <textarea name="impact" class="form-control summernote" rows="4">{{ old('impact', $keyInitiative->impact) }}</textarea>
        </div>

    

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="number" name="year" class="form-control" value="{{ old('year', $keyInitiative->year) }}" min="1900" max="{{ date('Y') }}">
                </div>
               
            </div>
    
            <div class="col-md-3">
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="url" name="project_link" class="form-control" value="{{ old('project_link', $keyInitiative->project_link) }}">
                </div>
               
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="year">Image Banner</label>
                    <input type="file" name="banner" class="form-control" id="banner">
                </div>
            </div>
           </div>

        <button type="submit" class="btn btn-success">Update Initiative</button>
    </form>
</div>
</div>
</div>

@push("js_app")
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <script>
            $('.summernote').summernote({
                placeholder: 'Please ensure to paste from MS word, Notepad. Avoid pasting directly from other websites.',
                tabsize: 2,
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        </script>
@endpush
@endsection
