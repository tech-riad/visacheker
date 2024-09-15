@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Intro Video</h1>

    <form action="{{route('admin.introvideo.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Intro Video</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.introvideo') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Video Title *</label>
                    <input type="text" name="video_title" class="form-control" value="" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Video URL * <span style="color: red">Only Youtube</span></label>
                    <input type="text" name="video_url" class="form-control" value="" autofocus="">
                </div>

                <div class="form-group">
                    <label for="">Video Description</label>
                    <textarea class="editor" name="video_description" class="form-control h_100" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Intro Image *</label>
                    <div>
                        <input type="file" name="video_image">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>


</div>

@endsection
