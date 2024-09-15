@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Add Slider</h1>

    <form action="{{ route('admin.slider.update', $slider->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Slider</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.slider') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="welcome_text">Welcome Text</label>
                    <input type="text" name="welcome_text" class="form-control" value="{{ old('welcome_text', $slider->welcome_text) }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="slider_title">Slider Title</label>
                    <input type="text" name="slider_title" class="form-control" value="{{ old('slider_title', $slider->slider_title) }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="slider_description">Slider Description</label>
                    <textarea class="editor" name="slider_description" class="form-control h_100" cols="30" rows="10">{{ old('slider_description', $slider->slider_description) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="slider_image">Slider Photo *</label>
                    <div>
                        <input type="file" name="slider_image" class="custom-file-input" id="customFile" onchange="document.getElementById('slider_image_preview').src = window.URL.createObjectURL(this.files[0])">
                        <br>
                        <img class="mt-2" id="slider_image_preview"  alt="Slider Image" width="100" height="100" />
                        @if ($slider->slider_image)
                        <div class="old_slider_image mt-2">
                            <label class="mb-0" for="old_slider_image">Old Slider Image:</label><br>
                            <img class="mt-2" id="old_slider_image" src="{{ asset($slider->slider_image) }}" alt="Old Slider Image" width="100" height="100" />
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="slider_profile_image">Slider Profile Image</label>
                    <div>
                        <input type="file" name="slider_profile_image[]" class="custom-file-input" id="customProfileImage" multiple>
                        <br>
                        @if ($slider->slider_profile_image)
                            <div class="old_profile_images mt-2">
                                <label class="mb-0" for="old_profile_images">Old Profile Images:</label><br>
                                @foreach (json_decode($slider->slider_profile_image) as $profileImage)
                                    <img class="mt-2" src="{{ asset($profileImage) }}" alt="Old Profile Image" width="100" height="100" />
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="slider_profile_button_name">Slider Profile Button Name</label>
                    <input type="text" name="slider_profile_button_name" class="form-control" value="{{ old('slider_profile_button_name', $slider->slider_profile_button_name) }}">
                </div>
                <div class="form-group">
                    <label for="slider_profile_button_url">Slider Profile Button URL</label>
                    <input type="text" name="slider_profile_button_url" class="form-control" value="{{ old('slider_profile_button_url', $slider->slider_profile_button_url) }}">
                </div>
                <div class="form-group">
                    <label for="slider_profile_short_desc">Profile Short Description</label>
                    <input type="text" name="slider_profile_short_desc" class="form-control" value="{{ old('slider_profile_short_desc', $slider->slider_profile_short_desc) }}">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>



</div>

@endsection
