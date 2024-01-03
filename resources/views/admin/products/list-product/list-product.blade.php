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