@extends('layouts.dashboard')

@section('content')


<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>{{$nav}} List</h1>
                <p class="breadcrumbs"><span><a href="{{route('admin_dashboard')}}">Dashboard</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>{{$nav}} List
                </p>
            </div>
            <div>
                <a href="{{route('admin_blogs_create')}}" class="btn btn-primary"> Add {{$nav}}</a>
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
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if($about->count())
                                    @foreach($about as $data)
                                    <tr>
                                        <td>
                                            @if(File::exists($data->image))
                                            <img src="{{url('/')}}/{{$data->image}}" width="50px" alt="{{$data->name}}">
                                            @else
                                            No Image
                                            @endif
                                        </td>
                                        <td>{{$data->name}}</td>
                                        <td>
                                           <a class="success" href="{{route('admin_blogs_edit',encrypt($data->id))}}"><i class="fa fa-edit"></i></a>
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

@endsection