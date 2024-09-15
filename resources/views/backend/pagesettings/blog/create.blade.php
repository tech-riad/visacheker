@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Blog</h1>

    <form action="{{ route('admin.blogsection.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Blog</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.blogsection') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title *</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title') }}" autofocus>
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Thumbnail Image *</label>
                    <div>
                        <input type="file" name="image"  class="form-control-file @error('image') is-invalid @enderror">
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="blog_image">Blog View Image *</label>
                    <div>
                        <input type="file" name="blog_view_image" id="blog_image"
                            class="form-control-file @error('blog_view_image') is-invalid @enderror">
                        @error('blog_view_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Description *</label>
                    <textarea class="editor form-control @error('description') is-invalid @enderror" name="description"
                        id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>



</div>

@endsection
