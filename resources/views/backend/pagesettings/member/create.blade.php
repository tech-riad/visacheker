@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Add Member Info</h1>

    <form action="{{route('admin.memberinfo.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Member Info</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.memberinfo') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Member name *</label>
                    <input type="text" name="member_name" class="form-control" value="" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Member Position *</label>
                    <input type="text" name="member_position" class="form-control" value="" autofocus="">
                </div>

                <div class="form-group">
                    <label for="">Member Photo *</label>
                    <div>
                        <input type="file" name="member_image">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>


</div>

@endsection
