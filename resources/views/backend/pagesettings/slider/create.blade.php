@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Add Slider</h1>

    <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data" multiple>
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Slider</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.slider') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="welcome_text">Welcome Text</label>
                    <input type="text" name="welcome_text" id="welcome_text" class="form-control" value="" autofocus>
                </div>
                <div class="form-group">
                    <label for="slider_title">Slider Title</label>
                    <input type="text" name="slider_title" id="slider_title" class="form-control" value="" autofocus>
                </div>
                <div class="form-group">
                    <label for="slider_description">Slider Description</label>
                    <textarea class="editor" name="slider_description" id="slider_description" class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="slider_image">Slider Photo *</label>
                    <input type="file" name="slider_image" id="slider_image">
                </div>
                <div class="form-group">
                    <label for="slider_profile_image">Profile Images *</label>
                    <input type="file" name="slider_profile_image[]" id="slider_profile_image" multiple>
                </div>
                <div class="form-group">
                    <label for="slider_profile_button_name">Profile Button Name</label>
                    <input type="text" name="slider_profile_button_name" id="slider_profile_button_name" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="slider_profile_button_url">Profile Button URL</label>
                    <input type="text" name="slider_profile_button_url" id="slider_profile_button_url" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="slider_profile_short_desc">Profile Short Description</label>
                    <input type="text" name="slider_profile_short_desc" id="slider_profile_short_desc" class="form-control" value="">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>



</div>

@endsection
