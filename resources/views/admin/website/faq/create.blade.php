@extends('layouts.dashboard')

@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Add {{ $nav }}</h1>
                    <p class="breadcrumbs"><span><a href="{{ route('admin_dashboard') }}">Home</a></span>
                        <a href="{{ route('admin_slider_list') }}"><span><i
                                    class="mdi mdi-chevron-right"></i></span>{{ $nav }} List </a>
                        <span><i class="mdi mdi-chevron-right"></i></span>Add {{ $nav }}
                    </p>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Add {{ $nav }}</h2>
                        </div>

                        <div class="card-body">
                            <form  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row ec-vendor-uploads">
                                    
                                    <div class="col-lg-12">
                                        <div class="ec-vendor-upload-detail">
                                            <div class="row form-c g-3">
                                              
                                            
                                                <div class="col-md-12">
                                                    <label class="form-label" for="question">Question</label>
                                                    <input type="text"
                                                        class="form-control @error('question') is-invalid @enderror"
                                                        id="question" name="question" placeholder="Question.."
                                                        value="{{ old('question') }}" >
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="form-label" for="answer">Answer</label>
                                                    <input type="text"
                                                        class="form-control @error('answer') is-invalid @enderror"
                                                        id="answer" name="answer" placeholder="Answer.."
                                                        value="{{ old('answer') }}" >
                                                </div>

                                              

                                                <div class="col-md-6">
                                                    <label for="name" class="form-label">Sort </label>
                                                    <input type="number" class="form-control" id="sort" name="sort"
                                                        value="{{ old('sort') }}" placeholder="0">

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
