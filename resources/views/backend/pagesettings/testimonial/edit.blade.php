@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Add Testiminial</h1>

    <form action="{{route('admin.testimonialsection.update',$testimonial->id)}}" method="post" >
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Testiminial</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.testimonialsection') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name *</label>
                    <input type="text" name="name" class="form-control" value="{{@$testimonial->name ?? @old('name')}}" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Position *</label>
                    <input type="text" name="position" class="form-control" value="{{@$testimonial->position ?? @old('position')}}" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Testimonial Description</label>
                    <textarea class="editor" name="description" class="form-control h_100" cols="30" rows="10">{{@$testimonial->description ?? @old('description')}}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>


</div>

@endsection
