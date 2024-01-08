@extends('layouts.dashboard')

@section('content')

<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Add {{$nav}}</h1>
                <p class="breadcrumbs"><span><a href="{{route('admin_dashboard')}}">Home</a></span>
                    <a href="{{route('admin_service_list')}}"><span><i class="mdi mdi-chevron-right"></i></span>{{$nav}} List </a>
                    <span><i class="mdi mdi-chevron-right"></i></span>Add {{$nav}}
                </p>
            </div>
            
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default bgb bgb-n">
                    <div class="card-header card-header-border-bottom">
                        <h2>Add {{$nav}}</h2>
                    </div>

                    <div class="card-body">
                        <form action="{{route('admin_service_create')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row ec-vendor-uploads">
                                {{-- <div class="col-lg-4">
                                    <div class="ec-vendor-img-upload">
                                        <div class="ec-vendor-main-img">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="imageUpload" class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg" name="image" />
                                                    <label for="imageUpload"><img
                                                            src="{{asset('admin/assets/img/icons/edit.svg')}}"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <div class="avatar-preview ec-preview">
                                                    <div class="imagePreview ec-div-preview">
                                                        <img class="ec-image-preview"
                                                            src="{{asset('admin/assets/img/products/vender-upload-preview.jpg')}}"
                                                            alt="edit" />
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-lg-12">
                                    <div class="ec-vendor-upload-detail">
                                        <div class="row form-c g-3">
                                            <div class="col-md-4">
                                                <label for="name" class="form-label">Name </label>
                                                <input type="text"
                                                    class="form-control  @error('name') is-invalid @enderror"
                                                    id="name" name="name" value="{{old('name')}}" >
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="name" class="form-label">Title <span
                                                    style="color:red">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    id="title" name="title"
                                                    value="{{old('title')}}" required>
                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-4">
                                                <label for="name" class="form-label">Icon </label>
                                                <input type="text" class="form-control" id="icon" name="icon" 
                                                value="{{old('icon')}}" placeholder="icon" >
                                               
                                            </div>
                                            
                                            
                                            
                                            
                                            <div class="col-md-6">
                                                <label for="name" class="form-label">Sort </label>
                                                <input type="number" class="form-control" id="sort" name="sort" 
                                                value="{{old('sort')}}" placeholder="0" >
                                               
                                            </div>

                                            
                                           
                                            <div class="col-md-6">
                                                <label class="form-label" for="status">Status</label>
                                                <select name="status" id="status" class="form-select">
                                                    <option selected value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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