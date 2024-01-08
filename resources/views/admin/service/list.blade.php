@extends('layouts.dashboard')

@section('content')


<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>{{$nav}}</h1>
                <p class="breadcrumbs"><span><a href="{{route('admin_dashboard')}}">Dashboard</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>{{$nav}}
                </p>
            </div>
            <div>
                <a href="{{route('admin_service_create')}}" class="btn btn-primary"> Add {{$nav}}</a>
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
                    <div class="card-body bgb">
                        <div class="table-responsive">
                            <table id="responsive-data-table" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sr. No</th>
                                        <th>Icon</th>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Sort</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 0;?>
                                    @if($services->count())
                                    @foreach($services as $data)
                                    <?php $i++;?>
                                    <tr>
                                        <td>{{$i;}}</td>
                                        <td><i class="{{$data->icon}}" aria-hidden="true"></i></td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->title}}</td>
                                        <td>{{$data->sort}}</td>
                                        <td>{{$data->status ? 'Active' : 'Inactive'}}</td>
                                        <td>
                                           <a class="success" href="{{route('admin_service_edit',encrypt($data->id))}}"><i class="fa fa-edit"></i></a>
                                           <a class="danger" href="{{route('admin_service_delete',encrypt($data->id))}}"><i class="fa fa-trash"></i></a>
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