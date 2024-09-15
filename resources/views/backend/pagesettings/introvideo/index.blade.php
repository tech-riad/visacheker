
@extends('backend.layouts.master')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Intro Video</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">View Intro Video</h6>
            <div class="float-right d-inline">
                <a href="{{route('admin.introvideo.create') }}" class="btn btn-primary btn-sm"><i
                        class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable_length"><label>Show <select
                                        name="dataTable_length" aria-controls="dataTable"
                                        class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="form-control form-control-sm" placeholder=""
                                        aria-controls="dataTable"></label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable no-footer" id="dataTable" width="100%"
                                cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">

                                        <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-sort="ascending">SL</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1">Image</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1">Title</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1">Url</th>

                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Action: activate to sort column ascending">Description
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Action: activate to sort column ascending">Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($introVideo as $item)
                                    <tr role="row" class="odd">
                                        <td>{{@$item->id}}</td>
                                        <td><img class="mt-2" id="oldlogo" src="{{ asset(@$item->video_image) }}"
                                            alt="logo" width="100" height="100" /></td>
                                        <td>{{Str::limit(@$item->video_title,20)}}</td>
                                        <td><a href="{{@$item->video_url}}"target="_blank">{{Str::limit(@$item->video_url,20)}}</a></td>
                                        <td>{!!Str::limit(@$item->video_description,20)!!}</td>

                                        <td>
                                            <a href="{{route('admin.introvideo.edit',@$item->id)}}" class="btn btn-success">Edit</a>
                                            {{-- <a href="{{route('admin.introvideo.delete',$item->id)}}" class="btn btn-danger deleteBtn">Delete</a> --}}
                                        </td>
                                    </tr>

                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1
                                to 5 of 5 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a
                                            href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0"
                                            class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable"
                                            data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item next disabled" id="dataTable_next"><a href="#"
                                            aria-controls="dataTable" data-dt-idx="2" tabindex="0"
                                            class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection



