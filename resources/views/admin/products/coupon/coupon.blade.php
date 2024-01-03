@extends('layouts.dashboard')

@section('content')


<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Coupon</h1>
                <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Coupon
                </p>
            </div>
            <div>
                <a class="btn btn-primary" href="{{route('admin_coupon_add')}}"> Add {{$nav}}
                </a>
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
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Type</th>
                                        <th>Discount</th>
                                        <th>Date Start</th>
                                        <th>Date End</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
									@if($coupon)
									@foreach($coupon as $data)
                                    <tr>
                                        <td>{{$data->coupon_name}}</td>
                                        <td>{{$data->coupon_code}}</td>
                                        <td>{{$data->type}}</td>
                                        <td>{{$data->discount}}</td>
                                        <td>{{$data->s_date}}</td>
                                        <td>{{$data->e_date}}</td>
										@if($data->status)
                                        <td>ACTIVE</td>
										@else
										<td>INACTIVE</td>
										@endif
                                        <td>
                                           <a class="success" href="{{route('admin_coupon_edit',encrypt($data->id))}}"><i class="fa fa-edit"></i></a>
                                           <button class="danger" onclick="ConfirmDelete('{{$data->id}}')"><i class="fa fa-trash"></i></button>
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
            url: "{{route('admin_coupon_delete')}}",
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