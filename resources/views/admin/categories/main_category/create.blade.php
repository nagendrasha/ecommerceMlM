@extends('layouts.dashboard')

@section('content')
<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
            <h1>Create {{$nav}}</h1>
            <p class="breadcrumbs"><span><a href="{{route('admin_dashboard')}}">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Main {{$nav}}
            </p>
        </div>
        <div class="row">

            <div class="col-xl-12 col-lg-12">
                <div class="ec-cat-list card card-default mb-24px">
                    <div class="card-body">
                        <div class="ec-cat-form">
                            <h4>Add New {{$nav}}</h4>

                            <form action="{{route('admin_categories_main_create')}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="id" value="{{$category ? $category->id : ''}}">

                                    <div class="col-6">
                                        <label for="name" class="col-6 col-form-label">Name <span
                                                style="color:red">*</span></label>
                                        <div class="col-12">
                                            <input id="name" name="name" class="form-control here slug-title"
                                                type="text" value="{{$category ? $category->name : old('name')}}"
                                                placeholder="Enter Name" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="slug" class="col-6 col-form-label">Slug</label>
                                        <div class="col-12">
                                            <input id="slug" name="slug" class="form-control here set-slug" type="text"
                                                value="{{$category ? $category->slug : old('slug')}}" placeholder="Slug"
                                                readonly>
                                            <small>The “slug” is the URL-friendly version of the name. It is usually all
                                                lowercase and contains only letters, numbers, and hyphens.</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description" class="col-12 col-form-label">Description</label>
                                    <div class="col-12">
                                        <textarea id="description" name="description" cols="40" rows="2"
                                            placeholder="Enter Description"
                                            class="form-control">{{$category ? $category->description : old('description')}}</textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label for="parent_id" class="col-6 col-form-label">Parent Category</label>
                                        <div class="col-12">
                                            <select id="parent_id" name="parent_id" class="custom-select">
                                                <option value="0">Select</option>
                                                @if($all_parent)
                                                @foreach($all_parent as $data)
                                                <option value="{{$data->id}}"
                                                    {{$category && $category->parent_id == $data->id ? 'selected' : ''}}>
                                                    {{$data->name}}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="status" class="col-6 col-form-label">Status</label>
                                        <div class="col-12">
                                            <select id="status" name="status" class="custom-select">
                                                <option value="1"
                                                    {{$category && $category->status == 1 ? 'selected' : ''}}>Active
                                                </option>
                                                <option value="0"
                                                    {{$category && $category->status == 0 ? 'selected' : ''}}>Inactive
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label for="image" class="col-6 col-form-label">Category Image</label>
                                        <div class="col-12">
                                            <input id="image" name="image" class="form-control" type="file">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="icon" class="col-6 col-form-label">Category Icon</label>
                                        <div class="col-12">
                                            <input id="icon" name="icon" class="form-control" type="file">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="sort_order" class="col-6 col-form-label">Sort Order</label>
                                        <div class="col-12">
                                            <input type="number" id="sort_order" name="sort_order" min="0"
                                                value="{{$category ? $category->sort_order : old('sort_order')}}"
                                                class="form-control" placeholder="Enter Sort Order">
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