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
        <form action="{{ route('admin.portfolios.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="">Portfolio Category *</label>
                    <input type="text" name="portfolio_category" class="form-control" value="" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Button Name* </label>
                    <input type="text" name="button_name" class="form-control" value="" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Thumbnail Image *</label>
                    <div>
                        <input type="file" name="portfolio_image">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Portfolio Main Image For View*</label>
                    <div>
                        <input type="file" name="portfolio_image_view">
                    </div>
                </div>

                <div class="form-group">
                    <label for="portfolio_description">Portfolio Description</label>
                    <textarea class="editor" name="portfolio_description" id="portfolio_description" class="form-control" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>


</div>

@endsection
