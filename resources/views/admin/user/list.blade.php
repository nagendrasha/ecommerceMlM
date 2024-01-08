@extends('layouts.dashboard')

@section('content')
<div class="ec-content-wrapper ec-ec-content-wrapper mb-m-24px">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>{{$nav}} List</h1>
                <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>User
                </p>
            </div>
            <div class="align-self-center ec-header-search">
                            <div class="header-search">
                                <form class="ec-search-group-form" action="#">
                                    <div class="ec-search-select-inner">
                                        <select class="ec-search-cat-title">All <i class="fa-solid fa-chevron-down"></i>
                                        
                                            <option><a href="#">All User</a></option>
                                            <option><a href="#">Delete User</a></option>
                                            <option><a href="#">Inactive User</a></option>
                                            <option><a href="#">Active User</a></option>
                                       
                                        </select>
                                        
                                    </div>
                                    <input class="form-control" placeholder="Search Here..." type="text">
                                    <button class="search_submit" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>
            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#modal-add-contact"> Add {{$nav}}
                </button>
            </div>
        </div>
                 
        <div class="row">
            @if(count($users) > 0)
            @foreach($users as $user)
            <div class="col-lg-6 col-xl-4 mb-24px">
                <div class="ec-user-card card card-default p-4">
                    <a href="javascript:0" data-bs-toggle="modal" data-bs-target="#edituser{{$user->id}}" class="view-detail"><i
                            class="mdi mdi-eye-plus-outline"></i>
                    </a>
                    
                    <a href="javascript:0" class="media text-secondary">
                        <img src="{{url('/')}}/{{$user->image}}" class="mr-3 img-fluid"
                            alt="{{ucwords($user->name)}}">

                        <div class="media-body">
                            <h5 class="mt-0 mb-2 text-dark">{{ucwords($user->name)}}</h5>

                            <ul class="list-unstyled">
                                <li class="d-flex mb-1">
                                    <i class="mdi mdi-email mr-1"></i>
                                    <span>{{$user->email}}</span>
                                </li>
                                <li class="d-flex mb-1">
                                    <i class="mdi mdi-phone mr-1"></i>
                                    <span>{{$user->phone}}</span>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
            
            
            <div class="modal fade modal-contact-detail" id="edituser{{$user->id}}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header justify-content-end border-bottom-0">
                            {{-- <button type="button" class="pr-2 btn-edit-icon" data-bs-dismiss="modal" aria-label="Close">
                                <i class="mdi mdi-pencil"></i>
                            </button> --}}
    
                            <button type="button" class="btn-close-icon" data-bs-dismiss="modal" aria-label="Close">
                                <i class="mdi mdi-close"></i>
                            </button>
                        </div>
    
                        <div class="modal-body pt-0">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="profile-content-left px-4">
                                        <div class="text-center widget-profile px-0 border-0">
                                            <div class="card-img mx-auto rounded-circle">
                                                <img src="{{url('/')}}/{{$user->image}}" alt="{{ucwords($user->name)}}">
                                            </div>
    
                                            <div class="card-body">
                                                <h4 class="py-2 text-dark">{{ucwords($user->name)}}</h4>
                                                <p>{{$user->email}}</p>
                                                <a class="d-none btn btn-primary btn-pill my-4" href="#">Follow</a>
                                            </div>
                                        </div>
    
                                        <div class="d-flex justify-content-between pt-4">
                                            <div class="text-center pb-4">
                                                <h6 class="text-dark pb-2">354</h6>
                                                <p>Bought</p>
                                            </div>
    
                                            <div class="text-center pb-4">
                                                <h6 class="text-dark pb-2">30</h6>
                                                <p>Wish List</p>
                                            </div>
    
                                            <div class="text-center pb-4">
                                                <h6 class="text-dark pb-2">1200</h6>
                                                <p>Following</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-6">
                                    <div class="contact-info px-4">
                                        <h4 class="text-dark mb-1">Contact Details</h4>
                                        <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                                        <p>{{$user->email}}</p>
                                        <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                                        <p>+{{$user->phone}}</p>
                                        <p class="text-dark font-weight-medium pt-4 mb-2">Address</p>
                                        <p>{{$user->address ? $user->address : 'No Address Added'}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach 
            @else 
            <div class="col-lg-12 col-xl-12 text-center">
            <h1>No User Found</h1>
            </div>
            @endif
            
        </div>

        <!-- Contact Modal -->
        

        <!-- Add Contact Button  -->
        <div class="modal fade modal-add-contact" id="modal-add-contact" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add New User</h5>
                        </div>

                        <div class="modal-body px-4">
                            <div class="form-group row mb-6">
                                <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User
                                    Image</label>

                                <div class="col-sm-8 col-lg-10">
                                    <div class="custom-file mb-1">
                                        <input type="file" class="custom-file-input" id="coverImage" required>
                                        <label class="custom-file-label" for="coverImage">Choose
                                            file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="firstName">First name</label>
                                        <input type="text" class="form-control" id="firstName" value="John">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="lastName">Last name</label>
                                        <input type="text" class="form-control" id="lastName" value="Deo">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="userName">User name</label>
                                        <input type="text" class="form-control" id="userName" value="johndoe">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            value="johnexample@gmail.com">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="Birthday">Birthday</label>
                                        <input type="text" class="form-control" id="Birthday" value="10-12-1991">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="event">Address</label>
                                        <input type="text" class="form-control" id="event" value="Address here">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer px-4">
                            <button type="button" class="btn btn-secondary btn-pill"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary btn-pill">Save Contact</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- End Content -->
</div>

@endsection