@extends('layouts.dashboard')

@section('content')

<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                @if($coupon && $coupon->id)
                <h1>Edit Coupon</h1>
                @else
                <h1>Add Coupon</h1>
                @endif
                <p class="breadcrumbs"><span><a href="{{route('admin_dashboard')}}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Coupon
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="ec-cat-list card card-default mb-24px">
                    <div class="card-body">
                        <div class="ec-cat-form">
                            @if($coupon && $coupon->id)
                            <h4>Edit Coupon</h4>
                            @else
                            <h4>Add Coupon</h4>
                            @endif

                            <form action="{{route('admin_coupon_save')}}" method="POST" id="coupon-form">
                                @csrf
                                <input type="hidden" name="id" value="{{$coupon ? $coupon->id : ''}}">
                                <div class="row mb-2">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Coupon Name <span style="color:red">*</span></label>
                                            <input type="text"
                                                class="form-control @error('coupon_name') is-invalid @enderror"
                                                id="coupon_name" value="{{$coupon ? $coupon->coupon_name : old('coupon_name')}}" name="coupon_name"
                                                placeholder="Enter Name" required>
                                            @error('coupon_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Coupon Code <span style="color:red">*</span></label>
                                            <input type="text"
                                                class="form-control @error('coupon_code') is-invalid @enderror"
                                                id="coupon_code" value="{{$coupon ? $coupon->coupon_code :old('coupon_code')}}" name="coupon_code"
                                                placeholder="Enter Code" required>
                                            @error('coupon_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="type">Type <span style="color:red">*</span></label>
                                            <select name="type" id="type"
                                                class="form-control @error('type') is-invalid @enderror" required>
                                                <option value="">Select</option>
                                                <option value="Fixed" {{$coupon && $coupon->type == 'Fixed' ? 'selected' : ''}}>Fixed</option>
                                                <option value="Percentage" {{$coupon && $coupon->type == 'Percentage' ? 'selected' : ''}}>Percentage</option>
                                            </select>
                                            @error('type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="discount">Discount <span style="color:red">*</span></label>
                                            <input type="number"
                                                class="form-control @error('discount') is-invalid @enderror"
                                                id="discount" value="{{$coupon ? $coupon->discount : old('discount')}}" name="discount"
                                                placeholder="Enter Discount" min="1" required>
                                            @error('discount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="s_date">Start Date <span style="color:red">*</span></label>
                                            <input type="date"
                                                class="form-control @error('s_date') is-invalid @enderror" id="s_date"
                                                value="{{$coupon ? $coupon->s_date : old('s_date')}}" name="s_date" placeholder="Enter Start Date"
                                                required>
                                            @error('s_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="e_date">End Date</label>
                                            <input type="date" class="form-control" id="e_date"
                                                value="{{$coupon ? $coupon->e_date : old('e_date')}}" name="e_date" placeholder="Enter End Date">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="1" {{$coupon && $coupon->status == '1' ? 'selected' : ''}}>Active</option>
                                                <option value="0" {{$coupon && $coupon->status == '0' ? 'selected' : ''}}>Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
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