@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Edit Client</h1>

    <form action="{{route('clients.update',$client->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Client</h6>
                <div class="float-right d-inline">
                    <a href="{{route('clients.index')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>View
                        All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Passport Number Input -->
                        <div class="form-group">
                            <label for="passport_number">Passport Number *</label>
                            <input type="text" name="passport_number" id="passport_number"
                                class="form-control @error('passport_number') is-invalid @enderror"
                                value="{{$client->passport_number ?? @old('passport_number')}}" autofocus>
                            @error('passport_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Name Input -->
                        <div class="form-group">
                            <label for="name">Client Name *</label>
                            <input type="text" name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror" value="{{$client->name ?? @old('name')}}"
                                autofocus>
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="images">Client Images *</label>
                            <div>
                                <input type="file" name="images[]" class="custom-file-input" id="customFiles" multiple
                                       onchange="previewImages(this.files)" class="@error('images') is-invalid @enderror"><br>

                                <div id="imagePreviewContainer" class="mt-2"></div>

                                <!-- Display Old Images if Client Exists -->
                                @if (isset($client) && $client->images)
                                    <div class="old_images mt-2">
                                        <label class="mb-0" for="">Old Client Images:</label><br>
                                        @foreach (json_decode($client->images) as $image)
                                            <img class="mt-2" src="{{ asset($image) }}" alt="old image" width="100" height="100" />
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>

                        <script>
                            function previewImages(files) {
                                const container = document.getElementById('imagePreviewContainer');
                                container.innerHTML = ''; // Clear previous images
                                Array.from(files).forEach((file, index) => {
                                    const img = document.createElement('img');
                                    img.src = URL.createObjectURL(file);
                                    img.alt = `image ${index + 1}`;
                                    img.width = 100;
                                    img.height = 100;
                                    img.classList.add('mr-2', 'mb-2');
                                    container.appendChild(img);
                                });
                            }
                        </script>


                    </div>
                    <div class="col-lg-12">
                        <!-- About Description Input -->
                        <div class="form-group">
                            <label for="short_description">Short Description *</label>
                            <textarea class=" form-control @error('short_description') is-invalid @enderror"
                                name="short_description" id="short_description" cols="30"
                                rows="10">{{$client->short_description ?? @old('short_description')}}</textarea>
                            @error('short_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>



</div>

@endsection
