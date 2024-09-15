@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Edit Member Info</h1>

    <form action="{{route('admin.memberinfo.update',$memberinfo->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Member </h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.memberinfo') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Member name *</label>
                    <input type="text" name="member_name" class="form-control" value="{{@$memberinfo->member_name ?? @old('member_name')}}" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Member Position *</label>
                    <input type="text" name="member_position" class="form-control" value="{{@$memberinfo->member_position ?? @old('member_position')}}" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Member Photo *</label>
                    <div>
                        <input type="file" name="member_image" class="custom-file-input" id="customFile"
                        onchange="document.getElementById('member_image').src = window.URL.createObjectURL(this.files[0])"
                        class="@error('member_image') is-invalid @enderror"><br>

                        <img class="mt-2" id="member_image" alt="member_image" width="100" height="100" />

                        @if (isset($memberinfo) && $memberinfo->member_image)
                        <div class="old_member_image mt-2">
                            <label class="mb-0" for="">Old Member Image:</label><br>
                            <img class="mt-2" id="oldmember_image" src="{{ asset($memberinfo->member_image) }}"
                                alt="member_image" width="100" height="100" />
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
