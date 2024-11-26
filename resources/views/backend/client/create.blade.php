@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Add Client</h1>

    <form action="{{route('clients.store')}}" method="post" enctype="multipart/form-data">
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
                                value="{{ old('passport_number') }}" autofocus>
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
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                autofocus>
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="files">Client Images/PDFs *</label>
                            <div>
                                <input type="file" name="files[]" class="custom-file-input @error('files') is-invalid @enderror" id="customFiles" multiple
                                    accept="image/*,application/pdf" onchange="previewFiles(this.files)">
                                <div id="filePreviewContainer" class="mt-2"></div>
                            </div>
                        </div>

                        <script>
                            function previewFiles(files) {
                                const container = document.getElementById('filePreviewContainer');
                                container.innerHTML = ''; // Clear previous previews

                                Array.from(files).forEach((file, index) => {
                                    const fileType = file.type;
                                    const div = document.createElement('div');
                                    div.classList.add('file-preview', 'mr-2', 'mb-2');

                                    if (fileType.startsWith('image/')) {
                                        // Preview image files
                                        const img = document.createElement('img');
                                        img.src = URL.createObjectURL(file);
                                        img.alt = `Image ${index + 1}`;
                                        img.width = 100;
                                        img.height = 100;
                                        div.appendChild(img);
                                    } else if (fileType === 'application/pdf') {
                                        // Preview PDF files
                                        const pdfIcon = document.createElement('div');
                                        pdfIcon.innerHTML = `<span class="badge badge-primary">PDF ${index + 1}</span>`;
                                        div.appendChild(pdfIcon);
                                    } else {
                                        // For other file types, show a placeholder
                                        const placeholder = document.createElement('div');
                                        placeholder.innerHTML = `<span class="badge badge-secondary">File ${index + 1}</span>`;
                                        div.appendChild(placeholder);
                                    }

                                    container.appendChild(div);
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
                                rows="10">{{ old('short_description') }}</textarea>
                            @error('short_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>



</div>

@endsection
