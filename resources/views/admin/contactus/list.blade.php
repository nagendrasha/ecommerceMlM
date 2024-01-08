@extends('layouts.dashboard')

@section('content')
<div class="ec-content-wrapper ec-ec-content-wrapper mb-m-24px">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>{{$nav}} List</h1>
                <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>{{$nav}}
                </p>
            </div>
            <div>
                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-contact"
                    onclick="resetForm()"> Add {{$nav}}
                </button> --}}
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
                                        <th>Sr. no</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact No</th>
                                        <th>Created Date</th>
                                        {{-- <th>Message</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if($contactuses->count())
                                    <?php $i= 0;?>
                                    @foreach($contactuses as $data)
                                    <?php $i++;
                                        // print_r($data);
                                    ?>
                                    <tr>
                                        <td>{{$i}}</td>
                                        
                                        <td>{{$data->first_name}} {{$data->last_name}}</td>
                                        <td>{{$data->email_id}}</td>
                                        <td>{{$data->phone_number}}</td>
                                        <td>{{$data->created_at}}</td>
                                        
                                        <td>
                                           
                                              <button type="button" class="success" data-bs-toggle="modal" data-bs-target="#detail_{{ $data->id}}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                              </button>
                                              
                                              <!-- Modal -->
                                              <!-- Modal -->
                                                <div class="modal fade" id="detail_{{ $data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">{{$data->first_name}} {{$data->last_name}}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {{$data->comment}}
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                              {{-- <div class="modal fade" id="detail_{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">{{$data->first_name}} {{$data->last_name}}</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                      <h6>Detail</h6>
                                                      <p>{{$data->comment}}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                      <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div> --}}
                                            <a class="danger" href="{{route('admin_contactus_delete',encrypt($data->id))}}"><i class="fa fa-trash"></i></a>
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

        <!-- Add Contact Button  -->
        <div class="modal fade modal-add-contact" id="modal-add-contact" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <form action="{{route('admin_brand_save')}}" method="POST" id="brand-group-form" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="brand_id">
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Brand</h5>
                        </div>

                        <div class="modal-body px-4">
                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="name">Brand Name <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="name" value="" name="name"
                                            placeholder="Enter Name" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">Image</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer px-4">
                            <button type="button" class="btn btn-secondary btn-pill" data-bs-dismiss="modal"
                                onclick="resetForm()">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-pill">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- End Content -->
</div>

<script>
function editBrand(id) {
    $.ajax({
        url: "{{route('admin_brand_fetch_single')}}",
        data: {
            id: id,
            _token: window.Laravel.csrfToken
        },
        type: 'post',
        success: function(data) {
            $('#brand_id').val(data.id);
            $('#name').val(data.name);
            $('#modal-add-contact').modal('show');
        },

        // Error handling 
        error: function(error) {
            console.log(`Error ${error}`);
        }
    });
}

function deleteBrand(id) {
    var confirmation = confirm("are you sure you want to remove the item?");
    if (confirmation) {
        $.ajax({
            url: "{{route('admin_brand_delete')}}",
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

function resetForm() {
    $('#brand-group-form')[0].reset();
}
</script>

@endsection