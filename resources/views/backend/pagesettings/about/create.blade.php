@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Add Service</h1>

    <form action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Service</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.about') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <!-- About Title Input -->
                <div class="form-group">
                    <label for="about_title">About Title *</label>
                    <input type="text" name="about_title" id="about_title"
                        class="form-control @error('about_title') is-invalid @enderror"
                        value="{{ old('about_title') }}" autofocus>
                    @error('about_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- About Description Input -->
                <div class="form-group">
                    <label for="about_description">About Description *</label>
                    <textarea class="editor form-control @error('about_description') is-invalid @enderror"
                        name="about_description" id="about_description" cols="30" rows="10">{{ old('about_description') }}</textarea>
                    @error('about_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- About Photo Input -->
                <div class="form-group">
                    <label for="about_image">About Photo *</label>
                    <div>
                        <input type="file" name="about_image" id="about_image"
                            class="form-control-file @error('about_image') is-invalid @enderror">
                        @error('about_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Additional Image Input -->
                <div class="form-group">
                    <label for="about_image_additional">Additional Image *</label>
                    <div>
                        <input type="file" name="about_image_additional" id="about_image_additional"
                            class="form-control-file @error('about_image_additional') is-invalid @enderror">
                        @error('about_image_additional')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>



</div>

@endsection
