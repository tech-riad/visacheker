@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Edit Service</h1>

    <form action="{{route('admin.services.update',$services->id)}}" method="post" >
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Service</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.services') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Service Title *</label>
                    <input type="text" name="service_title" class="form-control" value="{{@$services->service_title ?? @old('service_title')}}" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Service Icon Class* (<span style="color: red">Only Class Name</span>)</label>
                    <input type="text" name="service_icon_tag" class="form-control" value="{{@$services->service_icon_tag ?? @old('service_icon_tag')}}" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Service Sescription</label>
                    <textarea class="editor" name="service_description" class="form-control h_100" cols="30" rows="10">{{@$services->service_description ?? @old('service_description')}}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>


</div>

@endsection