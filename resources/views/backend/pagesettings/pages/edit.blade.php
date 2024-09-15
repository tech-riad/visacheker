@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Page</h1>

    <form action="{{route('admin.pages.update',$pages->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Update Page</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.pages') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title *</label>
                    <input type="text" name="title" class="form-control" value="{{@$pages->title ?? @old('title')}}" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Thumbnail Image *</label>
                    <div>
                        <input type="file" name="image" class="custom-file-input" id="customFile"
                        onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                        class="@error('image') is-invalid @enderror"><br>

                        <img class="mt-2" id="image" alt="image" width="100" height="100" />

                        @if (isset($pages) && $pages->image)
                        <div class="old_image mt-2">
                            <label class="mb-0" for="">Old Member Image:</label><br>
                            <img class="mt-2" id="oldimage" src="{{ asset($pages->image) }}"
                                alt="image" width="100" height="100" />
                        </div>
                    @endif
                    </div>
                </div>



                <div class="form-group">
                    <label for=""> Description*</label>
                    <textarea class="editor" name="description" class="editor" class="form-control h_100" cols="30" rows="10">{{@$pages->description ?? @old('description')}}</textarea>
                </div>


                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>


</div>

@endsection
