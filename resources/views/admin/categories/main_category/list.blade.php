@extends('layouts.dashboard')

@section('content')
<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
            <div>
                <h1>Main Category</h1>
                <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Main Category
                </p>
            </div>
            <div>
                <a class="btn btn-primary" href="{{route('admin_categories_main_create')}}"> Add Category</a>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-12 col-lg-12">
                <div class="ec-cat-list card card-default">
                    @if ($errors->any())
                    <div class="col-sm-12">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            @foreach ($errors->all() as $error)
                            <span>
                                <p>{{ $error }}</p>
                            </span>
                            @endforeach
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @endif

                    @if (session('success'))
                    <div class="col-sm-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="responsive-data-table" class="table">
                                <thead>
                                    <tr>
                                        <th>Thumb</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Main Categories</th>
                                        {{-- <th>Link Product</th> --}}
                                        <th>Status</th>
                                        {{-- <th>Trending</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if($categories->count())
                                    @foreach($categories as $category)
                                    <tr>
                                        <td><img class="cat-thumb"
                                                src="{{ $category->image != '' ? asset('uploads/category/'.$category->image) : asset('admin/assets/img/category/clothes.png') }}"
                                                alt="Product Image" /></td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td>
                                            <span class="ec-sub-cat-list">
                                                <span
                                                    class="ec-sub-cat-tag">{{$category->parent_id != 0 ? $category->parents->name : 'NULL'}}</span>
                                            </span>
                                        </td>
                                        @if($category->status == 1)
                                        <td>ACTIVE</td>
                                        @else
                                        <td>INACTIVE</td>
                                        @endif
                                        {{-- <td><span class="badge badge-success">Top</span></td> --}}
                                        <td>
                                           <a class="success" href="{{route('admin_categories_main_edit', encrypt($category->id))}}"><i class="fa fa-edit"></i></a>
                                           <button class="danger" onclick="ConfirmDelete('{{$category->id}}')"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Content -->
</div> <!-- End Content Wrapper -->
<script>
function ConfirmDelete(id) {
    var confirmation = confirm("are you sure you want to remove the item?");
    if (confirmation) {
        $.ajax({
            url: "{{route('admin_categories_main_delete')}}",
            data: {
                id: id,
                _token: window.Laravel.csrfToken
            },
            type: 'post',
            success: function(data) {
                location.reload();
            },

            // Error handling 
            error: function(error) {
                console.log(`Error ${error}`);
            }
        });
    }
}
</script>
@endsection