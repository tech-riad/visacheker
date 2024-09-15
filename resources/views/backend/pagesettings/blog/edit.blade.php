@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Blog</h1>

    <form action="{{ route('admin.blogsection.update', $blogs->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Assuming you are updating the record -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Update Blog</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.blogsection') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <!-- Title Input -->
                <div class="form-group">
                    <label for="title">Title *</label>
                    <input type="text" name="title" id="title"
                        class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title', @$blogs->title) }}" autofocus>
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Thumbnail Image Input -->
                <div class="form-group">
                    <label for="image">Thumbnail Image *</label>
                    <div>
                        <input type="file" name="image" class="custom-file-input" id="customFile"
                        onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                        class="@error('image') is-invalid @enderror"><br>

                        <img class="mt-2" id="image" alt="image" width="100" height="100" />

                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        @if (isset($blogs) && $blogs->image)
                        <div class="old_image mt-2">
                            <label class="mb-0" for="">Old Member Image:</label><br>
                            <img class="mt-2" id="oldimage" src="{{ asset($blogs->image) }}"
                                alt="image" width="100" height="100" />
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Blog View Image Input -->
                <div class="form-group">
                    <label for="blog_view_image">Blog View Image *</label>
                    <div>
                        <input type="file" name="blog_view_image" class="custom-file-input" id="customFile" onchange="document.getElementById('blog_view_image').src = window.URL.createObjectURL(this.files[0])">
                        <br>
                        <img class="mt-2" id="blog_view_image" name="blog_view_image"  alt="blog_view_image Image" width="100" height="100" />
                        @if ($blogs->blog_view_image)
                        <div class="blog_view_image mt-2">
                            <label class="mb-0" for="blog_view_image">Old Image:</label><br>
                            <img class="mt-2" name="blog_view_image" id="blog_view_image" src="{{ asset($blogs->blog_view_image) }}" alt="Old portfolio Image" width="100" height="100" />
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Description Input -->
                <div class="form-group">
                    <label for="description">Description *</label>
                    <textarea class="editor form-control @error('description') is-invalid @enderror"
                        name="description" id="description" cols="30" rows="10">{{ old('description', @$blogs->description) }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>



</div>

@endsection
