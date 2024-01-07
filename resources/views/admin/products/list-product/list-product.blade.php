@extends('layouts.dashboard')

@section('content')


<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Product</h1>
                <p class="breadcrumbs"><span><a href="{{route('admin_dashboard')}}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Product
                </p>
            </div>
            <div>
                <a href="{{route('admin_product_add')}}" class="btn btn-primary"> Add Porduct</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- <div class="card card-default">
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
                            <table id="responsive-data-table" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Name</th>
                                        <th>Code/Model</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>SKU</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if($products->count())
                                    @foreach($products as $product)
                                    <tr>
                                        <td>
                                            @if($product->main_image)
                                            <img class="tbl-thumb" src="{{asset($product->main_image)}}"
                                                alt="Product Image" />
                                            @else
                                            <img class="tbl-thumb" src="{{asset('admin/assets/img/products/p1.jpg')}}"
                                                alt="Product Image" />
                                            @endif
                                        </td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->code}}</td>
                                        <td>{{$product->category_id ? $product->getCategory->name : ''}}</td>
                                        <td>₹ {{$product->price}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>{{$product->sku}}</td>
                                        @if($product->status)
                                        <td>ACTIVE</td>
                                        @else
                                        <td>INACTIVE</td>
                                        @endif
                                        <td>
                                           <a class="success" href="{{route('admin_product_edit', encrypt($product->id))}}"><i class="fa fa-edit"></i></a>
                                           <button class="danger" onclick="ConfirmDelete('{{$product->id}}')"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->

                <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Product Listing</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Product Linking</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <div class="card card-default">
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
                            <table id="responsive-data-table" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Name</th>
                                        <th>Code/Model</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>SKU</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if($products->count())
                                    @foreach($products as $product)
                                    <tr>
                                        <td>
                                            @if($product->main_image)
                                            <img class="tbl-thumb" src="{{asset($product->main_image)}}"
                                                alt="Product Image" />
                                            @else
                                            <img class="tbl-thumb" src="{{asset('admin/assets/img/products/p1.jpg')}}"
                                                alt="Product Image" />
                                            @endif
                                        </td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->code}}</td>
                                        <td>{{$product->category_id ? $product->getCategory->name : ''}}</td>
                                        <td>₹ {{$product->price}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>{{$product->sku}}</td>
                                        @if($product->status)
                                        <td>ACTIVE</td>
                                        @else
                                        <td>INACTIVE</td>
                                        @endif
                                        <td>
                                           <a class="success" href="{{route('admin_product_edit', encrypt($product->id))}}"><i class="fa fa-edit"></i></a>
                                           <button class="danger" onclick="ConfirmDelete('{{$product->id}}')"><i class="fa fa-trash"></i></button>
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
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="card card-default">
  <div class="card-body">
  <div class="table-responsive">
    <div id="responsive-data-table_wrapper" class="dataTables_wrapper no-footer">
      <div class="row justify-content-between top-information">
        <div class="dataTables_length" id="responsive-data-table_length">
          <label>Show <select name="responsive-data-table_length" aria-controls="responsive-data-table" class="">
              <option value="20">20</option>
              <option value="30">30</option>
              <option value="50">50</option>
              <option value="75">75</option>
              <option value="-1">All</option>
            </select> entries </label>
        </div>
        <div id="responsive-data-table_filter" class="dataTables_filter">
          <label>Search: <input type="search" class="" placeholder="" aria-controls="responsive-data-table">
          </label>
        </div>
      </div>
      <table id="responsive-data-table" class="table dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="responsive-data-table_info">
        <thead>
          <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Product: activate to sort column descending" style="width: 79px;">Product</th>
            <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 335px;">Name</th>
            <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="SKU: activate to sort column ascending" style="width: 106px;">SKU</th>
            <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Code/Model: activate to sort column ascending" style="width: 119px;">Checkbox</th>
            <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 89px;">Checkbox</th>
            <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 68px;">Checkbox</th>
            <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending" style="width: 83px;">Checkbox</th>
            <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 75px;">Checkbox</th>
            <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 66px;">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr role="row" class="odd">
            <td class="sorting_1">
              <img class="tbl-thumb" src="http://localhost/ecommerceMLM/public/uploads/product//1704295685.jpg" alt="Product Image">
            </td>
            <td>Revolution 6 Running Shoes For Men</td>
            <td>NIKE6</td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td>
              <a class="success" href="http://localhost/ecommerceMLM/public/admin/products/edit/eyJpdiI6ImRQdGhHeVVVNk9vQVl2WWFkcUhjQ3c9PSIsInZhbHVlIjoiN0VWaDBHUzJmUkFBMUNhSHlEQWtSQT09IiwibWFjIjoiZWM3MGFkOGU1MGMxOTdiZmExNmEwODIyN2EwZWE3ODMxY2ExNTk3M2VjYjE5YTkyZjg5MjIxZmZhYTk1ZGY0NyIsInRhZyI6IiJ9">
                <i class="fa fa-edit"></i>
              </a>
              <button class="danger" onclick="ConfirmDelete('1')">
                <i class="fa fa-trash"></i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="row justify-content-between bottom-information">
        <div class="dataTables_info" id="responsive-data-table_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
        <div class="dataTables_paginate paging_simple_numbers" id="responsive-data-table_paginate">
          <a class="paginate_button previous disabled" aria-controls="responsive-data-table" data-dt-idx="0" tabindex="0" id="responsive-data-table_previous">Previous</a>
          <span>
            <a class="paginate_button current" aria-controls="responsive-data-table" data-dt-idx="1" tabindex="0">1</a>
          </span>
          <a class="paginate_button next disabled" aria-controls="responsive-data-table" data-dt-idx="2" tabindex="0" id="responsive-data-table_next">Next</a>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
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
            url: "{{route('admin_product_delete')}}",
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