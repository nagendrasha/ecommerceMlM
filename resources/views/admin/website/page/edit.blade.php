@extends('layouts.dashboard')

@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Edit {{ $nav }}</h1>
                    <p class="breadcrumbs"><span><a href="{{ route('admin_dashboard') }}">Home</a></span>
                        <a href="{{ route('admin_pages_list') }}"><span><i
                                    class="mdi mdi-chevron-right"></i></span>{{ $nav }} List </a>
                        <span><i class="mdi mdi-chevron-right"></i></span>Edit {{ $nav }}
                    </p>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Edit {{ $nav }}</h2>
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
                                                <div class="col-md-6">
                                                    <label for="title" class="form-label">Title <span
                                                            style="color:red">*</span></label>
                                                    <input type="text"
                                                        class="form-control  slug-title @error('title') is-invalid @enderror"
                                                        id="title" name="title" placeholder="Title.."
                                                        value="{{ $data->title }}">
                                                    @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="slug" class="form-label">Slug <span
                                                            style="color:red">*</span></label>
                                                    <input type="text"
                                                        class="form-control slug-title set-slug @error('slug') is-invalid @enderror"
                                                        id="slug" name="slug" placeholder="Slug.."
                                                        value="{{ $data->slug }}" required>
                                                    @error('slug')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="name">Name<span
                                                            style="color:red">*</span></label>
                                                    <input type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        id="name" name="name" placeholder="Name.."
                                                        value="{{ $data->name }}" required>
                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label" for="meta_title">Meta Title</label>
                                                    <input type="text"
                                                        class="form-control @error('meta_title') is-invalid @enderror"
                                                        id="meta_title" name="meta_title" placeholder="Meta Title.."
                                                        value="{{ $data->meta_title }}" >
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label" for="meta_keywords">Meta Keywords</label>
                                                    <input type="text"
                                                        class="form-control @error('meta_keywords') is-invalid @enderror"
                                                        id="meta_keywords" name="meta_keywords" placeholder="Meta Keywords.."
                                                        value="{{ $data->meta_keywords }}" >
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label" for="meta_description">Meta Description</label>
                                                    <input type="text"
                                                        class="form-control @error('meta_description') is-invalid @enderror"
                                                        id="meta_description" name="meta_description" placeholder="Meta Description.."
                                                        value="{{ $data->meta_description }}" >
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="form-label" for="description">Description</label>
                                                    <textarea class="form-control" rows="2" name="description" id="textarea-editor">{{ $data->description }}</textarea>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="name" class="form-label">Sort </label>
                                                    <input type="number" class="form-control" id="sort" name="sort"
                                                        value="{{ $data->sort }}" placeholder="0" min="0">

                                                </div>


                                                <div class="col-md-6">
                                                    <label class="form-label" for="status">Status</label>
                                                    <select name="status" id="status" class="form-select">
                                                        <option @if($data->status) selected @endif value="1">Active</option>
                                                        <option @if(!$data->status) selected @endif value="0">Inactive</option>
                                                    </select>
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
