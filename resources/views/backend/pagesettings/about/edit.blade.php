@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Edit</h1>

    <form action="{{ route('admin.about.update', $aboutdata->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit About Data</h6>
            </div>
            <div class="card-body">
                <!-- About Title Input -->
                <div class="form-group">
                    <label for="about_title">About Title *</label>
                    <input type="text" name="about_title" id="about_title"
                        class="form-control @error('about_title') is-invalid @enderror"
                        value="{{ old('about_title', @$aboutdata->about_title) }}" autofocus>
                    @error('about_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- About Description Input -->
                <div class="form-group">
                    <label for="about_description">About Description *</label>
                    <textarea class="editor form-control @error('about_description') is-invalid @enderror"
                        name="about_description" id="about_description" cols="30"
                        rows="10">{{ old('about_description', @$aboutdata->about_description) }}</textarea>
                    @error('about_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Main Image Input -->
                <div class="form-group">
                    <label for="about_image">Main Image *</label>
                    <div>
                        <input type="file" name="about_image" id="about_image"
                            class="custom-file-input @error('about_image') is-invalid @enderror">
                        <br>
                        <img class="mt-2" id="about_image" alt="about_image" width="100" height="100" />

                        @error('about_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        @if (isset($aboutdata) && $aboutdata->about_image)
                        <div class="old_about_image mt-2">
                            <label class="mb-0" for="">Old about_image:</label><br>
                            <img class="mt-2" id="oldabout_image" src="{{ asset($aboutdata->about_image) }}"
                                alt="about_image" width="100" height="100" />
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Additional Image Input -->
                <div class="form-group">
                    <label for="about_image_additional">Additional Image *</label>
                    <div>
                        <input type="file" name="about_image_additional" class="custom-file-input" id="customFile"
                        onchange="document.getElementById('about_image_additional').src = window.URL.createObjectURL(this.files[0])"
                        class="@error('about_image_additional') is-invalid @enderror"><br>

                        <img class="mt-2" id="about_image_additional" alt="about_image_additional" width="100" height="100" />

                        @error('about_image_additional')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        @if (isset($aboutdata) && $aboutdata->about_image_additional)
                        <div class="old_about_image_additional mt-2">
                            <label class="mb-0" for="">Old about_image_additional:</label><br>
                            <img class="mt-2" id="oldabout_image_additional" src="{{ asset($aboutdata->about_image_additional) }}"
                                alt="about_image_additional" width="100" height="100" />
                        </div>
                        @endif
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>



</div>

@endsection
