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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-contact"
                    onclick="resetForm()"> Add {{$nav}}
                </button>
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
                                        <th>Option Name</th>
                                        <th>Option Group Name</th>
                                        <th>Sort Order</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if($options->count())
                                    @foreach($options as $option)
                                    <tr>
                                        <td>{{$option->option_name}}</td>
                                        <td>{{$option->getGroup->name}}</td>
                                        <td>{{$option->sort_order}}</td>
                                        <td>
                                            <button class="success" onclick="editOption('{{$option->id}}')"><i
                                                    class="fa fa-edit"></i></button>
                                            <button class="danger" onclick="deleteOption('{{$option->id}}')"><i
                                                    class="fa fa-trash"></i></button>
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
                    <form action="{{route('admin_options_add')}}" method="POST" id="option-group-form">
                        @csrf
                        <input type="hidden" name="id" id="option_id">
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Option</h5>
                        </div>

                        <div class="modal-body px-4">
                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="name">Option Group Name <span style="color:red">*</span></label>
                                        <select class="form-control" name="option_group_id" required
                                            id="option_group_id">
                                            <option value="">Select</option>
                                            @foreach($option_groups as $group)
                                            <option value="{{$group->id}}">{{$group->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="name">Option Type <span style="color:red">*</span></label>
                                        <select name="option_type" id="option_type" class="form-control">
                                            <option value="">Select</option>
                                            <option value="text">Text</option>
                                            <option value="color">Color</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="replace_this"></div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="sort_order">Sort Order</label>
                                        <input type="number" class="form-control" id="sort_order" value=""
                                            name="sort_order" placeholder="Sort Order" min="0">
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

@endsection

@push('scripts')
<script>
    function editOption(id) {
        $.ajax({
            url: "{{route('admin_options_fetch_single')}}",
            data: {
                id: id,
                _token: window.Laravel.csrfToken
            },
            type: 'post',
            success: function(data) {
                setData(data.id, data.option_type);
                $('#option_id').val(data.id);
                $('#option_name').val(data.option_name);
                $('#option_type').val(data.option_type);
                $('#option_group_id').val(data.option_group_id);
                $('#sort_order').val(data.sort_order);
                $('#modal-add-contact').modal('show');
                
            },

            // Error handling 
            error: function(error) {
                console.log(`Error ${error}`);
            }
        });
    }

    function deleteOption(id) {
        var confirmation = confirm("are you sure you want to remove the item?");
        if (confirmation) {
            $.ajax({
                url: "{{route('admin_options_delete')}}",
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
        $('#option-group-form')[0].reset();
        $('.replace_this').html('');
    }

    function setData(id, type) {
        if(id != '' && type == 'text') {
            html = "<div class='col-lg-12'>";
            html += "<div class='form-group'>";
            html += "<label for='name'>Option Name <span style='color:red'>*</span></label>";
            html += "<input type='text' class='form-control' id='option_name' value='' name='option_name' placeholder='Enter Name' required>";
            html += "</div>";
            html += "</div>";
        } else if(id != '' && type == 'color') {
            html = "<div class='col-lg-12'>";
            html += "<div class='form-group'>";
            html += "<label for='name'>Option Name <span style='color:red'>*</span></label>";
            html += "<input type='color' class='form-control' id='option_name' value='' name='option_name' placeholder='Enter Name' required>";
            html += "</div>";
            html += "</div>";
        }
        $('.replace_this').html(html);
    }

    $("#option_type").change(function() {
        if($(this).val() == 'text') {
            html = "<div class='col-lg-12'>";
            html += "<div class='form-group'>";
            html += "<label for='name'>Option Name <span style='color:red'>*</span></label>";
            html += "<input type='text' class='form-control' id='option_name' value='' name='option_name' placeholder='Enter Name' required>";
            html += "</div>";
            html += "</div>";
        } else if($(this).val() == 'color') {
            html = "<div class='col-lg-12'>";
            html += "<div class='form-group'>";
            html += "<label for='name'>Option Name <span style='color:red'>*</span></label>";
            html += "<input type='color' class='form-control' id='option_name' value='' name='option_name' placeholder='Enter Name' required>";
            html += "</div>";
            html += "</div>";
        }
        $('.replace_this').html(html);
    });
</script>
@endpush