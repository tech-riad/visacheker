@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Create</h1>

    <form action="{{route('admin.events.store')}}" method="post" enctype="multipart/form-data"  >
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Event</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.events') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Eent Name *</label>
                            <input type="text" name="event_name" class="form-control" value="" autofocus="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Eent Title *</label>
                            <input type="text" name="event_title" class="form-control" value="" autofocus="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Event Cost *</label>
                            <input type="number" name="event_cost" class="form-control" value="" autofocus="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Contact Number For Event *</label>
                            <input type="text" name="event_contact" class="form-control" value="" autofocus="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Contact Email For Event *</label>
                            <input type="email" name="event_mail" class="form-control" value="" autofocus="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Event Location *</label>
                            <input type="text" name="event_location" class="form-control" value="" autofocus="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Event Map Location *</label>
                            <input type="text" name="event_map_location" class="form-control" value="" autofocus="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Event Date *</label>
                            <input type="date" name="event_date" class="form-control" value="" autofocus="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Event Time *</label>
                            <input type="text" name="event_time" class="form-control" value="" autofocus="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Button Name *</label>
                            <input type="text" name="btn_name" class="form-control" value="" autofocus="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Event Image Front*</label>
                            <div>
                                <input type="file" name="event_front_image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Event Image For Details*</label>
                            <div>
                                <input type="file" name="event_details_image[]" multiple>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Description *</label>
                    <textarea class="editor" name="description" class="form-control h_100" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>


</div>

@endsection
