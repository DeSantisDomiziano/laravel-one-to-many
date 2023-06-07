@extends('layouts.admin')

@section('content')

<form action="{{ route('admin.projects.update') }}" method="post" class="my-5">
    @csrf
    @method('PUT')

    <h1 class="mb-4">Change New Project</h1>

    <div class="mb-3">
        <label for="title" class="form-label fw-bold">Title</label>
        <input type="text" name="title" id="title" placeholder="" aria-describedby="helpId"
        class="form-control form-control @error('title') is-invalid @enderror"
        value="{{ old('title', $project->title) }}" required>
        <small id="helpId" class="text-muted">Change Title</small>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="img_path" class="form-label fw-bold">Image Path</label>
        <input type="text" name="img_path" id="img_path" placeholder="" aria-describedby="helpId"
        class="form-control form-control @error('img_path') is-invalid @enderror"
        value="{{ old('img_path', $project->img_path) }}" required>
        <small id="helpId" class="text-muted">Change Image Path</small>
        @error('img_path')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="programming_language" class="form-label fw-bold">Programming Language</label>
        <input type="text" name="programming_language" id="programming_language" placeholder="" aria-describedby="helpId"
        class="form-control form-control @error('programming_language') is-invalid @enderror"
        value="{{ old('programming_language', $project->programming_language) }}" required>
        <small id="helpId" class="text-muted">Change Programming Language</small>
        @error('programming_language')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="link_code" class="form-label fw-bold">Link Code</label>
        <input type="text" name="link_code" id="link_code" placeholder="" aria-describedby="helpId"
        class="form-control form-control @error('link_code') is-invalid @enderror"
        value="{{ old('link_code', $project->link_code) }}" required>
        <small id="helpId" class="text-muted">Change Link Code</small>
        @error('link_code')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="link_website" class="form-label fw-bold">Link Website</label>
        <input type="text" name="link_website" id="link_website" placeholder="" aria-describedby="helpId"
        class="form-control form-control @error('link_website') is-invalid @enderror"
        value="{{ old('link_website', $project->link_website) }}" required>
        <small id="helpId" class="text-muted">Change Link Website</small>
        @error('link_website')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
      <label for="overview" class="form-label fw-bold">Overview</label>
      <textarea class="form-control @error('overview') is-invalid @enderror" name="overview" id="overview" rows="3">
        {{ old('overview', $project->overview) }}
      </textarea>
      <small id="helpId" class="text-muted">Change Overview</small>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success w-100 fw-bold fs-5">C R E A T E</button>

</form>

@endsection
