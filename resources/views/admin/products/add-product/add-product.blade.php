@extends('layouts.dashboard')

@section('content')

<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                @if($product && $product->id)
                <h1>Edit Product</h1>
                @else
                <h1>Add Product</h1>
                @endif
                <p class="breadcrumbs"><span><a href="{{route('admin_dashboard')}}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Product
                </p>
            </div>
            <div>
                <a href="{{route('admin_product_list')}}" class="btn btn-primary"> View All
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        @if($product && $product->id)
                        <h2>Edit Product</h2>
                        @else
                        <h2>Add Product</h2>
                        @endif
                    </div>

                    <div class="card-body">
                        <form action="{{route('admin_product_save')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$product ? $product->id : ''}}">
                            <div class="row ec-vendor-uploads">
                                <div class="col-lg-4">
                                    <div class="ec-vendor-img-upload">
                                        <div class="ec-vendor-main-img">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="imageUpload" class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg" name="main_image" />
                                                    <label for="imageUpload"><img
                                                            src="{{asset('admin/assets/img/icons/edit.svg')}}"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                <div class="avatar-preview ec-preview">
                                                    <div class="imagePreview ec-div-preview">
                                                        @if($product && $product->main_image)
                                                        <img class="ec-image-preview"
                                                            src="{{asset($product->main_image)}}" alt="edit" />
                                                        @else
                                                        <img class="ec-image-preview"
                                                            src="{{asset('admin/assets/img/products/vender-upload-preview.jpg')}}"
                                                            alt="edit" />
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="thumb-upload-set colo-md-12">
                                                @php
                                                $total_loop = 6;
                                                $count_image = 0;
                                                if($product) {
                                                $count_image = count($product->getImage);
                                                }
                                                $rest_image = $total_loop - $count_image;
                                                @endphp
                                                @if($count_image > 0)
                                                @for ($i = 0; $i < $count_image; $i++) <div class="thumb-upload">
                                                    <div class="thumb-edit">
                                                        <input type='file' id="thumbUpload0{{$i+1}}"
                                                            class="ec-image-upload" accept=".png, .jpg, .jpeg"
                                                            name="image{{$i+1}}" />
                                                        <label for="imageUpload"><img
                                                                src="{{asset('admin/assets/img/icons/edit.svg')}}"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="thumb-preview ec-preview">
                                                        <div class="image-thumb-preview">
                                                            <img class="image-thumb-preview ec-image-preview"
                                                                src="{{asset($product->getImage[$i]->image)}}"
                                                                alt="edit" />
                                                        </div>
                                                    </div>
                                            </div>
                                            @endfor
                                            @endif

                                            @for ($i = $count_image + 1; $i <= $total_loop; $i++) <div
                                                class="thumb-upload">
                                                <div class="thumb-edit">
                                                    <input type='file' id="thumbUpload0{{$i}}" class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg" name="image{{$i}}" />
                                                    <label for="imageUpload"><img
                                                            src="{{asset('admin/assets/img/icons/edit.svg')}}"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview">
                                                        <img class="image-thumb-preview ec-image-preview"
                                                            src="{{asset('admin/assets/img/products/vender-upload-thumb-preview.jpg')}}"
                                                            alt="edit" />
                                                    </div>
                                                </div>
                                        </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ec-vendor-upload-detail">
                            <div class="row form-c g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Product name <span
                                            style="color:red">*</span></label>
                                    <input type="text"
                                        class="form-control slug-title @error('name') is-invalid @enderror" id="name"
                                        name="name" value="{{$product ? $product->name : old('name')}}"
                                        placeholder="Enter Product Name" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input id="slug" name="slug" class="form-control here set-slug" type="text"
                                        value="{{$product ? $product->slug : old('slug')}}" placeholder="Slug" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="code" class="form-label">Code/Model <span
                                            style="color:red">*</span></label>
                                    <input id="code" name="code"
                                        class="form-control @error('code') is-invalid @enderror"
                                        value="{{$product ? $product->code : old('code')}}" type="text"
                                        placeholder="Enter Code/Model" required>
                                    @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="sku" class="form-label">SKU</label>
                                    <input id="sku" name="sku" class="form-control"
                                        value="{{$product ? $product->sku : old('sku')}}" type="text"
                                        placeholder="Enter SKU">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="short_description">Sort
                                        Description</label>
                                    <textarea class="form-control" rows="2" name="short_description"
                                        id="short_description"
                                        placeholder="Enter Sort Description">{{$product ? $product->short_description : old('short_description')}}</textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea class="form-control" rows="4" name="description" id="description"
                                        placeholder="Enter Description">{{$product ? $product->description : old('description')}}</textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label @error('category_id') is-invalid @enderror"
                                        for="category_id">Select Categories <span style="color:red">*</span></label>
                                    <select name="category_id" id="category_id" class="form-select" required>
                                        <option value="0">Select Category</option>
                                        @foreach($category as $data)
                                        <optgroup label="{{$data->name}}">
                                            @foreach($data->subcategory as $s_data)
                                            <option value="{{$s_data->id}}"
                                                {{$product && $product->category_id == $s_data->id ? 'selected' : ''}}>
                                                {{$s_data->name}}</option>
                                            @endforeach
                                        </optgroup>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="quantity" class="form-label">Quantity <span
                                            style="color:red">*</span></label>
                                    <input id="quantity" name="quantity"
                                        class="form-control @error('quantity') is-invalid @enderror" type="number"
                                        min="1" value="{{$product ? $product->quantity : old('quantity')}}"
                                        placeholder="Enter Quantity" required>
                                    @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="price">Price <span style="color:red">*</span></label>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror"
                                        name="price" id="price" value="{{$product ? $product->price : old('price')}}"
                                        placeholder="Enter Price" required>
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="discount">Discount</label>
                                    <input type="number" min="0" class="form-control" id="discount"
                                        value="{{$product ? $product->discount : old('discount')}}" name="discount"
                                        placeholder="Enter Discount">
                                </div>
                                <div class="col-md-4">
                                    <label for="length" class="form-label">Length</label>
                                    <input id="length" name="length" class="form-control"
                                        value="{{$product ? $product->length : old('length')}}" type="number" min="0"
                                        placeholder="Enter Length">
                                </div>
                                <div class="col-md-4">
                                    <label for="width" class="form-label">Width</label>
                                    <input id="width" name="width" class="form-control"
                                        value="{{$product ? $product->width : old('width')}}" type="number" min="0"
                                        placeholder="Enter Width">
                                </div>
                                <div class="col-md-4">
                                    <label for="height" class="form-label">Height</label>
                                    <input id="height" name="height" class="form-control"
                                        value="{{$product ? $product->height : old('height')}}" type="number" min="0"
                                        placeholder="Enter Height">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="length_class">Length Class</label>
                                    <select name="length_class" id="length_class" class="form-control">
                                        <option value="cm" {{$product && $product->length_class == 'cm' ? 'selected' : ''}}>Centimeter</option>
                                        <option value="ml" {{$product && $product->length_class == 'ml' ? 'selected' : ''}}>Milimeter</option>
                                        <option value="m" {{$product && $product->length_class == 'm' ? 'selected' : ''}}>Meter</option>
                                        <option value="in" {{$product && $product->length_class == 'in' ? 'selected' : ''}}>Inch</option>
                                    </select>
                                </div>
                                @if($option_groups->count())
                                @foreach($option_groups as $option_group)
                                @if(count($option_group->getOption) > 0)
                                <div class="col-md-12 mb-25">
                                    <label class="form-label">{{$option_group->name}}</label>
                                    <div class="form-checkbox-box">
                                        @foreach($option_group->getOption as $option)
                                        @php
                                        $checked = '';
                                        @endphp
                                        @if($product && $product->getOption)
                                        @foreach($product->getOption as $option_relation)
                                        @if($option_relation->option_id == $option->id &&
                                        $option_relation->option_group_id == $option_group->id)
                                        @php
                                        $checked = 'checked';
                                        @endphp
                                        @endif
                                        @endforeach
                                        @endif
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="option[{{$option_group->id}}][]"
                                                value="{{$option->id}}" {{$checked}}>
                                            @if($option->option_type == "color")
                                            <label><span
                                                    style="background-color:{{$option->option_name}}">{{$option->option_name}}</span></label>
                                            @else
                                            <label>{{$option->option_name}}</label>
                                            @endif
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @endif
                                <div class="col-md-6">
                                    <label for="weight" class="form-label">Weight</label>
                                    <input id="weight" name="weight" class="form-control"
                                        value="{{$product ? $product->weight : old('weight')}}" type="number" min="0"
                                        placeholder="Enter Weight">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="weight_class">Weight Class</label>
                                    <select name="weight_class" id="weight_class" class="form-control">
                                        <option value="kg" {{$product && $product->weight_class == 'kg' ? 'selected' : ''}}>Kilogram</option>
                                        <option value="g" {{$product && $product->weight_class == 'g' ? 'selected' : ''}}>Gram</option>
                                        <option value="pound" {{$product && $product->weight_class == 'pound' ? 'selected' : ''}}>Pound</option>
                                        <option value="ounce" {{$product && $product->weight_class == 'ounce' ? 'selected' : ''}}>Ounce</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="manufacturer_id" class="form-label">Manufacturer</label>
                                    <select name="manufacturer_id" id="manufacturer_id" class="form-select">
                                        <option value="">Select</option>
                                        @foreach($manufacturer as $data)
                                        <option value="{{$data->id}}"
                                            {{$product && $product->manufacturer_id == $data->id ? 'selected' : ''}}>
                                            {{$data->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="minimum_order">Minimum Order</label>
                                    <input type="number" class="form-control" id="minimum_order" name="minimum_order"
                                        min="1" value="{{$product ? $product->minimum_order : old('minimum_order')}}"
                                        placeholder="Enter Minimum Order">
                                </div>
                                {{-- <div class="col-md-6">
                                                <label class="form-label" for="brand_id">Brand</label>
                                                <select name="brand_id" id="brand_id" class="form-select">
                                                    <option value="">Select</option>
                                                    @foreach($brands as $data)
                                                    <option value="{{$data->id}}"
                                {{$product && $product->brand_id == $data->id ? 'selected' : ''}}>
                                {{$data->name}}</option>
                                @endforeach
                                </select>
                            </div> --}}
                            <div class="col-md-12">
                                <label class="form-label">Product Tags <span>( Type and
                                        make comma to separate tags )</span></label>
                                <input type="text" class="form-control" id="product_tag" name="product_tag"
                                    value="{{$product ? $tag_name : old('product_tag')}}"
                                    data-role="tagsinput" placeholder="Enter Product Tags" />
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="meta_title">Meta Title </label>
                                <input type="text" class="form-control" id="meta_title" name="meta_title"
                                    value="{{$product ? $product->meta_title : old('meta_title')}}"
                                    placeholder="Enter Meta Title" />
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="meta_keyword">Meta Keyword </label>
                                <input type="text" class="form-control" id="meta_keyword" name="meta_keyword"
                                    value="{{$product ? $product->meta_keyword : old('meta_keyword')}}"
                                    placeholder="Enter Meta Keyword" />
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="meta_description">Meta Description
                                </label>
                                <textarea class="form-control" rows="2" name="meta_description" id="meta_description"
                                    placeholder="Enter Meta Description">{{$product ? $product->meta_description : old('meta_description')}}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="sort_order" class="form-label">Sort Order</label>
                                <input type="text" class="form-control" id="sort_order" name="sort_order"
                                    value="{{$product ? $product->sort_order : old('sort_order')}}"
                                    placeholder="Enter Sort Order" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="status">Status</label>
                                <select name="status" id="status" class="form-select">
                                    <option value="1" {{$product && $product->status == 1 ? 'selected' : ''}}>Active
                                    </option>
                                    <option value="0" {{$product && $product->status == 0 ? 'selected' : ''}}>Inactive
                                    </option>
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