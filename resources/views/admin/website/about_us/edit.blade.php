@extends('layouts.dashboard')

@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>{{ $nav }}</h1>
                    <p class="breadcrumbs"><span><a href="{{ route('admin_dashboard') }}">Home</a></span>
                        <a href="{{ route('admin_slider_list') }}"><span><i
                                    class="mdi mdi-chevron-right"></i></span>{{ $nav }}</a>
                        {{-- <span><i class="mdi mdi-chevron-right"></i></span>Edit {{ $nav }} --}}
                    </p>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>{{ $nav }}</h2>
                        </div>

                        <div class="card-body">
                            <form  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row ec-vendor-uploads">
                                    <div class="col-lg-4">
                                        <div class="ec-vendor-img-upload">
                                            <div class="ec-vendor-main-img">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type='file' id="imageUpload" class="ec-image-upload"
                                                            accept=".png, .jpg, .jpeg" name="image" />
                                                        <label for="imageUpload"><img
                                                                src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    @error('image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="avatar-preview ec-preview">
                                                        
                                                        <div class="imagePreview ec-div-preview">
                                                            @if (File::exists($data->image))
                                                                <img class="ec-image-preview"
                                                                    src="{{ url('/') }}/{{ $data->image }}"
                                                                    alt="edit" />
                                                            @else
                                                                <img class="ec-image-preview"
                                                                    src="{{ asset('admin/assets/img/products/vender-upload-preview.jpg') }}"
                                                                    alt="edit" />
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="ec-vendor-upload-detail">
                                            <div class="row form-c g-3">
                                                <div class="col-md-12">
                                                    <label for="name" class="form-label">Name <span
                                                            style="color:red">*</span></label>
                                                    <input type="text"
                                                        class="form-control  slug-name @error('name') is-invalid @enderror"
                                                        id="name" name="name" placeholder="Name.."
                                                        value="{{ $data->name }}">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="form-label" for="meta_description">Short Description</label>
                                                    <input type="text"
                                                        class="form-control @error('short_description') is-invalid @enderror"
                                                        id="short_description" name="short_description" placeholder="Short Description.."
                                                        value="{{ $data->short_description }}" >
                                                </div>
                                                

                                                <div class="col-md-12">
                                                    <label class="form-label" for="description">Description</label>
                                                    <textarea class="form-control" rows="2" name="description" id="textarea-editor">{{ $data->description }}</textarea>
                                                </div>

                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
@endsection
