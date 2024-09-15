@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Portfolio</h1>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Portfolio</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.portfolios') }}" class="btn btn-primary btn-sm"><i
                        class="fa fa-plus"></i> View All</a>
            </div>
        </div>
        <form action="{{ route('admin.portfolios.update',$portfolios->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="">Portfolio Category *</label>
                    <input type="text" name="portfolio_category" class="form-control" value="{{@$portfolios->portfolio_category ?? @old('portfolio_category')}}" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Button Name* </label>
                    <input type="text" name="button_name" class="form-control" value="{{@$portfolios->button_name ?? @old('button_name')}}" autofocus="">
                </div>


                <div class="form-group">
                    <label for="">Thumbnail Image *</label>
                    <div>
                        <input type="file" name="portfolio_image" class="custom-file-input" id="customFile" onchange="document.getElementById('portfolio_image').src = window.URL.createObjectURL(this.files[0])">
                        <br>
                        <img class="mt-2" id="portfolio_image"  alt="portfolio_image Image" width="100" height="100" />
                        @if ($portfolios->portfolio_image)
                        <div class="portfolio_image mt-2">
                            <label class="mb-0" for="portfolio_image">Old Portfolio Image:</label><br>
                            <img class="mt-2" id="portfolio_image" src="{{ asset($portfolios->portfolio_image) }}" alt="Old portfolio Image" width="100" height="100" />
                        </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Portfolio Main Image For View*</label>
                    <div>
                        <input type="file" name="portfolio_image_view" class="custom-file-input" id="customFile" onchange="document.getElementById('portfolio_image_view').src = window.URL.createObjectURL(this.files[0])">
                        <br>
                        <img class="mt-2" id="portfolio_image_view"  alt="portfolio_image_view Image" width="100" height="100" />
                        @if ($portfolios->portfolio_image_view)
                        <div class="portfolio_image_view mt-2">
                            <label class="mb-0" for="portfolio_image_view">Old Image:</label><br>
                            <img class="mt-2" id="portfolio_image_view" src="{{ asset($portfolios->portfolio_image_view) }}" alt="Old portfolio Image" width="100" height="100" />
                        </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="portfolio_description">Portfolio Description</label>
                    <textarea class="editor" name="portfolio_description" id="portfolio_description" class="form-control" rows="5">{{@$portfolios->portfolio_description ?? @old('portfolio_description')}}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>


</div>

@endsection
