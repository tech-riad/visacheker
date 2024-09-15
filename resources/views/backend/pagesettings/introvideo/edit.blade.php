@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Intro Video</h1>

    <form action="{{route('admin.introvideo.update',$introVideo->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Intro Video</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.introvideo') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Video Title *</label>
                    <input type="text" name="video_title" class="form-control" value="{{@$introVideo->video_title ?? @old('video_title')}}" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Video URL * <span style="color: red">Only Youtube</span></label>
                    <input type="text" name="video_url" class="form-control" value="{{@$introVideo->video_url ?? @old('video_url')}}" autofocus="">
                </div>

                <div class="form-group">
                    <label for="">Video Description</label>
                    <textarea class="editor" name="video_description" class="form-control h_100" cols="30" rows="10">{{@$introVideo->video_description ?? @old('video_description')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Intro Video Photo *</label>
                    <div>
                        <input type="file" name="video_image" class="custom-file-input" id="customFile"
                        onchange="document.getElementById('video_image').src = window.URL.createObjectURL(this.files[0])"
                        class="@error('video_image') is-invalid @enderror"><br>

                        <img class="mt-2" id="video_image" alt="video_image" width="100" height="100" />

                        @if (isset($introVideo) && $introVideo->video_image)
                        <div class="old_video_image mt-2">
                            <label class="mb-0" for="">Old Member Image:</label><br>
                            <img class="mt-2" id="oldvideo_image" src="{{ asset($introVideo->video_image) }}"
                                alt="video_image" width="100" height="100" />
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
