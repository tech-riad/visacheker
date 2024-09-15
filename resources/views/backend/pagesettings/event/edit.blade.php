@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Create</h1>

    <form action="{{route('admin.events.update',$event->id)}}" method="post" enctype="multipart/form-data"  >
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Eent Name *</label>
                        <input type="text" name="event_name" class="form-control" value="{{@$event->event_name ?? @old('event_name')}}" autofocus="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Eent Title *</label>
                        <input type="text" name="event_title" class="form-control" value="{{@$event->event_title ?? @old('event_title')}}" autofocus="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Event Cost *</label>
                        <input type="number" name="event_cost" class="form-control" value="{{@$event->event_cost ?? @old('event_cost')}}" autofocus="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Contact Number For Event *</label>
                        <input type="text" name="event_contact" class="form-control" value="{{@$event->event_contact ?? @old('event_contact')}}" autofocus="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Contact Email For Event *</label>
                        <input type="email" name="event_mail" class="form-control" value="{{@$event->event_mail ?? @old('event_mail')}}" autofocus="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Event Location *</label>
                        <input type="text" name="event_location" class="form-control" value="{{@$event->event_location ?? @old('event_location')}}" autofocus="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Event Map Location *</label>
                        <input type="text" name="event_map_location" class="form-control" value="{{@$event->event_map_location ?? @old('event_map_location')}}" autofocus="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Event Date *</label>
                        <input type="date" name="event_date" class="form-control" value="{{@$event->event_date ?? @old('event_date')}}" autofocus="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Event Time *</label>
                        <input type="text" name="event_time" class="form-control" value="{{@$event->event_time ?? @old('event_time')}}" autofocus="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Button Name *</label>
                        <input type="text" name="btn_name" class="form-control" value="{{@$event->btn_name ?? @old('btn_name')}}" autofocus="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Event Image Front*</label>

                            <div>
                                <input type="file" name="event_front_image" class="custom-file-input" id="customFile" onchange="document.getElementById('event_front_image_preview').src = window.URL.createObjectURL(this.files[0])">
                                <br>
                                <img class="mt-2" id="event_front_image_preview"  alt="Slider Image" width="100" height="100" />
                                @if ($event->event_front_image)
                                <div class="old_event_front_image mt-2">
                                    <label class="mb-0" for="old_event_front_image">Old Image:</label><br>
                                    <img class="mt-2" id="old_event_front_image" src="{{ asset($event->event_front_image) }}" alt="Old Slider Image" width="100" height="100" />
                                </div>
                                @endif
                            </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Event Image For Details*</label>
                        <div>
                            <input type="file" name="event_details_image[]" class="custom-file-input" id="customProfileImage" multiple>
                        <br>
                        @if ($event->event_details_image)
                            <div class="old_profile_images mt-2">
                                <label class="mb-0" for="old_profile_images">Old Images:</label><br>
                                @foreach (json_decode($event->event_details_image) as $profileImage)
                                    <img class="mt-2" src="{{ asset($profileImage) }}" alt="Old Profile Image" width="100" height="100" />
                                @endforeach
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Description *</label>
                <textarea class="editor" name="description" class="form-control h_100" cols="30" rows="10">{{@$event->description ?? @old('description')}}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>


</div>

@endsection


