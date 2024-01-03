@extends('layouts.dashboard')

@section('content')
<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
            <h1>Create {{$nav}}</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Main {{$nav}}
            </p>
        </div>
        <div class="row">

            <div class="col-xl-12 col-lg-12">
                <div class="ec-cat-list card card-default mb-24px">
                    <div class="card-body">
                        <div class="ec-cat-form">
                            @if($manufacturer && $manufacturer->id)
                            <h4>Edit New {{$nav}}</h4>
                            @else
                            <h4>Add New {{$nav}}</h4>
                            @endif

                            <form action="{{route('admin_manufacturer_add')}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="id" value="{{$manufacturer ? $manufacturer->id : ''}}">

                                    <div class="col-4">
                                        <label for="name" class="col-6 col-form-label">Name <span
                                                style="color:red">*</span></label>
                                        <div class="col-12">
                                            <input id="name" name="name" class="form-control here slug-title"
                                                type="text"
                                                value="{{$manufacturer ? $manufacturer->name : old('name')}}"
                                                placeholder="Enter Name" required>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <label for="phone" class="col-6 col-form-label">Phone/Mobile <span
                                                style="color:red">*</span></label>
                                        <div class="col-12">
                                            <input id="phone" name="phone"
                                                class="form-control @error('phone') is-invalid @enderror" type="text"
                                                value="{{$manufacturer ? $manufacturer->phone : old('phone')}}"
                                                placeholder="Enter Mobile" required>
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <label for="email" class="col-6 col-form-label">Email <span
                                                style="color:red">*</span></label>
                                        <div class="col-12">
                                            <input id="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror" type="email"
                                                value="{{$manufacturer ? $manufacturer->email : old('email')}}"
                                                placeholder="Enter Email" required>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-12 col-form-label">Address</label>
                                    <div class="col-12">
                                        <textarea id="address" name="address" cols="40" rows="2"
                                            placeholder="Enter Address"
                                            class="form-control">{{$manufacturer ? $manufacturer->address : old('address')}}</textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label for="image" class="col-6 col-form-label">Manufacturer Image</label>
                                        <div class="col-12">
                                            <input id="image" name="image" class="form-control" type="file">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="status" class="col-6 col-form-label">Status</label>
                                        <div class="col-12">
                                            <select id="status" name="status" class="custom-select">
                                                <option value="1"
                                                    {{$manufacturer && $manufacturer->status == 1 ? 'selected' : ''}}>
                                                    Active</option>
                                                <option value="0"
                                                    {{$manufacturer && $manufacturer->status == 0 ? 'selected' : ''}}>
                                                    Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Content -->
</div> <!-- End Content Wrapper -->
@endsection