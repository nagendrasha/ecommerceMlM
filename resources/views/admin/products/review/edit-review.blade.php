@extends('layouts.dashboard')

@section('content')
<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
            <h1>Edit {{$nav}}</h1>
            <p class="breadcrumbs"><span><a href="{{route('admin_dashboard')}}">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Main {{$nav}}
            </p>
        </div>
        <div class="row">

            <div class="col-xl-12 col-lg-12">
                <div class="ec-cat-list card card-default mb-24px">
                    <div class="card-body">
                        <div class="ec-cat-form">
                            <h4>Edit {{$nav}}</h4>

                            <form action="{{route('admin_product_save_review')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="id" value="{{$review ? $review->id : ''}}">

                                    <div class="col-12">
                                        <label for="name" class="col-6 col-form-label">Product Name </label>
                                        <div class="col-12">
                                            <input id="name" name="name" class="form-control here slug-title"
                                                type="text" value="{{$review ? $review->getProduct->name : ''}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="name" class="col-6 col-form-label">Name </label>
                                        <div class="col-12">
                                            <input id="name" name="name" class="form-control here slug-title"
                                                type="text" value="{{$review ? $review->name : ''}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="col-6 col-form-label">Email </label>
                                        <div class="col-12">
                                            <input id="email" name="email" class="form-control here slug-title"
                                                type="text" value="{{$review ? $review->email : ''}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="rating" class="col-6 col-form-label">Rating </label>
                                        <div class="col-12">
                                            <input id="rating" name="rating" class="form-control here slug-title"
                                                type="text" value="{{$review ? $review->rating : ''}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="comment" class="col-6 col-form-label">Comment </label>
                                        <div class="col-12">
                                            <textarea name="comment" id="comment" class="form-control" readonly>{{$review->comment}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="status" class="col-6 col-form-label">Status </label>
                                        <div class="col-12">
                                            <select name="status" id="status" class="form-control">
                                                <option value="1" {{$review->status == 1 ? 'selected' : ''}}>Enabled</option>
                                                <option value="0" {{$review->status == 0 ? 'selected' : ''}}>Disabled</option>
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