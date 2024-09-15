@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Setting</h1>

    <form action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Update Your Settings</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-6">
                        <div class="form-group">
                            <label for="">Phone </label>
                            <input type="number" name="phone" class="form-control" value="{{@$setting->phone ?? @old('phone')}}" autofocus="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="form-group">
                            <label for="">Email </label>
                            <input type="email" name="email" class="form-control" value="{{@$setting->email ?? @old('email')}}" autofocus="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="form-group">
                            <label for="">Logo </label>
                            <div>
                                <input type="file" name="logo" class="custom-file-input" id="customFile"
                                onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])"
                                class="@error('logo') is-invalid @enderror"><br>

                                <img class="mt-2" id="logo" alt="logo" width="100" height="100" />

                                @if (isset($setting) && $setting->logo)
                                <div class="old_logo mt-2">
                                    <label class="mb-0" for="">Old logo:</label><br>
                                    <img class="mt-2" id="oldlogo" src="{{ asset($setting->logo) }}"
                                        alt="logo" width="100" height="100" />
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="form-group">
                            <label for="">White Logo </label>
                            <div>
                                <input type="file" name="white_logo" class="custom-file-input" id="customWhiteLogo"
                                onchange="document.getElementById('white_logo').src = window.URL.createObjectURL(this.files[0])"
                                class="@error('white_logo') is-invalid @enderror"><br>

                                <img class="mt-2" id="white_logo" alt="white_logo" width="100" height="100" />

                                @if (isset($setting) && $setting->white_logo)
                                <div class="old_white_logo mt-2">
                                    <label class="mb-0" for="">Old white logo:</label><br>
                                    <img class="mt-2" id="oldwhite_logo" src="{{ asset($setting->white_logo) }}"
                                        alt="white_logo" width="100" height="100" />
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="form-group">
                            <label for="">Fav Icon</label>
                            <div>
                                <input type="file" name="favicon" class="custom-file-input" id="customFaviconFile"
                                onchange="document.getElementById('favicon').src = window.URL.createObjectURL(this.files[0])"
                                class="@error('favicon') is-invalid @enderror"><br>

                                <img class="mt-2" id="favicon" alt="favicon" width="100" height="100" />

                                @if (isset($setting) && $setting->favicon)
                                <div class="old_favicon mt-2">
                                    <label class="mb-0" for="">Old favicon:</label><br>
                                    <img class="mt-2" id="oldfavicon" src="{{ asset($setting->favicon) }}"
                                        alt="favicon" width="100" height="100" />
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="form-group">
                            <label for="">Facebook </label>
                            <input type="text" name="facebook_link" class="form-control" value="{{@$setting->facebook_link ?? @old('facebook_link')}}" autofocus="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="form-group">
                            <label for="">Twitter </label>
                            <input type="text" name="twitter_link" class="form-control" value="{{@$setting->twitter_link ?? @old('twitter_link')}}" autofocus="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="form-group">
                            <label for="">Instagram </label>
                            <input type="text" name="instagram_link" class="form-control" value="{{@$setting->instagram_link ?? @old('instagram_link')}}" autofocus="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="form-group">
                            <label for="">Linkdein </label>
                            <input type="text" name="linkdein_link" class="form-control" value="{{@$setting->linkdein_link ?? @old('linkdein_link')}}" autofocus="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea  name="address" class="form-control h_100" cols="30" rows="10">{{@$setting->address ?? @old('address')}}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
</div>

@endsection

@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $("#logo").hide();
    $("#favicon").hide();
    $("#white_logo").hide();
    $("#customFile").change(function () {
        $("#logo").show();

    });
    $("#customWhiteLogo").change(function () {
        $("#white_logo").show();
    });
    $("#customFaviconFile").change(function () {
        $("#favicon").show();
    });
</script>

@endpush
