@extends('Front.layout.app')

@section('content')

@push('extra_links')
    <link rel="stylesheet" href="{{asset('Front/assets/css/style.css')}}" />
@endpush



<!-- ekka Cart Start -->
<div class="ec-side-cart-overlay"></div>
<div id="ec-side-cart" class="ec-side-cart">
    <div class="ec-cart-inner">
        <div class="ec-cart-top">
            <div class="ec-cart-title">
                <span class="cart_title">My Cart</span>
                <button class="ec-close">×</button>
            </div>
            <ul class="eccart-pro-items">
                <li>
                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                            src="{{asset('Front/assets/images/product-image/6_1.jpg')}}" alt="product"></a>
                    <div class="ec-pro-content">
                        <a href="product-left-sidebar.html" class="cart_pro_title">T-shirt For Women</a>
                        <span class="cart-price"><span>$76.00</span> x 1</span>
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                        </div>
                        <a href="javascript:void(0)" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                            src="{{asset('Front/assets/images/product-image/12_1.jpg')}}" alt="product"></a>
                    <div class="ec-pro-content">
                        <a href="product-left-sidebar.html" class="cart_pro_title">Women Leather Shoes</a>
                        <span class="cart-price"><span>$64.00</span> x 1</span>
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                        </div>
                        <a href="javascript:void(0)" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                            src="{{asset('Front/assets/images/product-image/3_1.jpg')}}" alt="product"></a>
                    <div class="ec-pro-content">
                        <a href="product-left-sidebar.html" class="cart_pro_title">Girls Nylon Purse</a>
                        <span class="cart-price"><span>$59.00</span> x 1</span>
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                        </div>
                        <a href="javascript:void(0)" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="ec-cart-bottom">
            <div class="cart-sub-total">
                <table class="table cart-table">
                    <tbody>
                        <tr>
                            <td class="text-left">Sub-Total :</td>
                            <td class="text-right">$300.00</td>
                        </tr>
                        <tr>
                            <td class="text-left">VAT (20%) :</td>
                            <td class="text-right">$60.00</td>
                        </tr>
                        <tr>
                            <td class="text-left">Total :</td>
                            <td class="text-right primary-color">$360.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cart_btn">
                <a href="cart.html" class="btn btn-primary">View Cart</a>
                <a href="checkout.html" class="btn btn-secondary">Checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- ekka Cart End -->

<!-- Ec breadcrumb start -->
<div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row ec_breadcrumb_inner">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="ec-breadcrumb-title">Single Products</h2>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- ec-breadcrumb-list start -->
                        <ul class="ec-breadcrumb-list">
                            <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="ec-breadcrumb-item active">Products</li>
                        </ul>
                        <!-- ec-breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ec breadcrumb end -->

<!-- Sart Single product -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-pro-rightside ec-common-rightside col-lg-12 col-md-12">

                <!-- Single product content Start -->
                <div class="single-pro-block">
                    <div class="single-pro-inner">
                        <div class="row">
                            <div class="single-pro-img single-pro-img-no-sidebar">
                                <div class="single-product-scroll">
                                    <div class="single-product-cover">
                                        @if($product->main_image)
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive" src="{{asset($product->main_image)}}" alt="">
                                        </div>
                                        @endif
                                        @if($product->getImage)
                                        @foreach($product->getImage as $images)
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive" src="{{asset($images->image)}}" alt="">
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                    <div class="single-nav-thumb">
                                        @if($product->main_image)
                                        <div class="single-slide">
                                            <img class="img-responsive" src="{{asset($product->main_image)}}" alt="">
                                        </div>
                                        @endif
                                        @if($product->getImage)
                                        @foreach($product->getImage as $images)
                                        <div class="single-slide">
                                            <img class="img-responsive" src="{{asset($images->image)}}" alt="">
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="single-pro-desc single-pro-desc-no-sidebar">
                                <div class="single-pro-content">
                                    <h5 class="ec-single-title">{{$product->name}}</h5>
                                    {{-- <div class="ec-single-rating-wrap">
                                        <div class="ec-single-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star-o"></i>
                                        </div>
                                        <span class="ec-read-review"><a href="#ec-spt-nav-review">Be the first to
                                                review this product</a></span>
                                    </div> --}}
                                    <div class="ec-single-desc">{{$product->short_description}}</div>

                                    {{-- <div class="ec-single-sales">
                                        <div class="ec-single-sales-inner">
                                            <div class="ec-single-sales-title">sales accelerators</div>
                                            <div class="ec-single-sales-visitor">real time <span>24</span> visitor
                                                right now!</div>
                                            <div class="ec-single-sales-progress">
                                                <span class="ec-single-progress-desc">Hurry up!left 29 in
                                                    stock</span>
                                                <span class="ec-single-progressbar"></span>
                                            </div>
                                            <div class="ec-single-sales-countdown">
                                                <div class="ec-single-countdown"><span id="ec-single-countdown"></span>
                                                </div>
                                                <div class="ec-single-count-desc">Time is Running Out!</div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="ec-single-price-stoke">
                                        <div class="ec-single-price">
                                            <span class="ec-single-ps-title">As low as</span>
                                            @if($product->discount > 0)
                                            <span class="old-price">₹ {{$product->price}}</span>
                                            <span class="new-price">₹ {{$product->price - $product->discount}}</span>
                                            @else
                                            <span class="new-price">₹ {{$product->price}}</span>
                                            @endif
                                        </div>
                                        <div class="ec-single-stoke">
                                            <span class="ec-single-ps-title">IN STOCK</span>
                                            <span class="ec-single-sku">SKU#: {{$product->sku}}</span>
                                        </div>
                                    </div>
                                    <div class="ec-single-qty">
                                        <div class="qty-plus-minus">
                                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                        </div>
                                        <div class="ec-single-cart ">
                                            <button class="btn btn-primary change">Buy Now</button>
                                        </div>
                                        <div class="ec-single-cart ">
                                            <button class="btn btn-primary change">Add To Cart</button>
                                        </div>
                                        <div class="ec-single-wishlist">
                                            <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                    class="fi-rr-heart"></i></a>
                                        </div>
                                    </div>
                                    @if($option_groups->count())
                                    @foreach($option_groups as $option_group)
                                    @if(count($option_group->getOption) > 0)
                                    <div class="ec-pro-variation">
                                        <div
                                            class="ec-pro-variation-inner ec-pro-variation-{{strtolower($option_group->name)}}">
                                            <span>{{$option_group->name}}</span>
                                            <div class="ec-pro-variation-content">
                                                <ul>
                                                    @foreach($option_group->getOption as $option)
                                                    @if($option->option_type == "color")
                                                    <li><span style="background-color:{{$option->option_name}};"></span>
                                                    </li>
                                                    @else
                                                    <li><span>{{$option->option_name}}</span></li>
                                                    @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        {{-- <div class="ec-pro-variation-inner ec-pro-variation-color">
                                            <span>Color</span>
                                            <div class="ec-pro-variation-content">
                                                <ul>
                                                    <li class="active"><span style="background-color:#23839c;"></span>
                                                    </li>
                                                    <li><span style="background-color:#000;"></span></li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                    </div>
                                    @endif
                                    @endforeach
                                    @endif
                                    
                                    {{-- <div class="ec-single-social">
                                        <ul class="mb-0">
                                            <li class="list-inline-item facebook"><a href="#"><i
                                                        class="ecicon eci-facebook"></i></a></li>
                                            <li class="list-inline-item twitter"><a href="#"><i
                                                        class="ecicon eci-twitter"></i></a></li>
                                            <li class="list-inline-item instagram"><a href="#"><i
                                                        class="ecicon eci-instagram"></i></a></li>
                                            <li class="list-inline-item youtube-play"><a href="#"><i
                                                        class="ecicon eci-youtube-play"></i></a></li>
                                            <li class="list-inline-item behance"><a href="#"><i
                                                        class="ecicon eci-behance"></i></a></li>
                                            <li class="list-inline-item whatsapp"><a href="#"><i
                                                        class="ecicon eci-whatsapp"></i></a></li>
                                            <li class="list-inline-item plus"><a href="#"><i
                                                        class="ecicon eci-plus"></i></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Single product content End -->
                <section class="mt-5 tab-section">
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Detail</button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')">More Information</button>
                        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Reviews</button>
                    </div>
                    <div id="London" class="tabcontent">
                        <div class="ec-single-pro-tab-desc">
                            {{$product->description}}
                        </div>
                    </div>

                    <div id="Paris" class="tabcontent">
                        <div class="ec-single-pro-tab-moreinfo">
                            <ul>
                                @if($product->weight)
                                <li><span>Weight</span> {{$product->weight}} {{$product->weight_class}}</li>
                                @endif
                                @if($product->length)
                                <li><span>Length</span> {{$product->length}} {{$product->length_class}}</li>
                                @endif
                                @if($product->width)
                                <li><span>Width</span> {{$product->width}} {{$product->length_class}}</li>
                                @endif
                                @if($product->height)
                                <li><span>Height</span> {{$product->height}} {{$product->length_class}}</li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    <div id="Tokyo" class="tabcontent">
                        <div class="row">
                            <div class="ec-t-review-wrapper">
                                @foreach($product->getReview as $review)
                                <div class="ec-t-review-item">
                                    <div class="ec-t-review-avtar">
                                        <img src="{{asset('Front/assets/images/review-image/1.jpg')}}" alt="" />
                                    </div>
                                    <div class="ec-t-review-content">
                                        <div class="ec-t-review-top">
                                            <div class="ec-t-review-name">{{$review->name}}</div>
                                            <div class="ec-t-review-rating">
                                                @for($i = 0; $i < $review->rating; $i++)
                                                <i class="ecicon eci-star fill"></i>
                                                @endfor
                                                @for($i = $review->rating; $i < 5; $i++)
                                                <i class="ecicon eci-star-o"></i>
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="ec-t-review-bottom">
                                            <p>{{$review->comment}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="ec-ratting-content">
                                <h3>Add a Review</h3>
                                <div class="ec-ratting-form">
                                    <form class="form-group" action="{{route('frontend_save_review')}}" method="POST">
                                        @csrf
                                        <input type="hidden" class="form-control" name="product_id"
                                            value="{{encrypt($product->id)}}">
                                        <div class="ec-ratting-star mb-4">
                                            <span>*Your rating:</span>
                                            <div class="star-rating">
                                                <span class="fa-solid fa-star" data-rating="1"></span>
                                                <span class="fa-solid fa-star" data-rating="2"></span>
                                                <span class="fa-solid fa-star" data-rating="3"></span>
                                                <span class="fa-solid fa-star" data-rating="4"></span>
                                                <span class="fa-solid fa-star" data-rating="5"></span>
                                                <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                                            </div>
                                        </div>
                                        <div class="ec-ratting-input mb-4">
                                            <input name="name" placeholder="Name*"
                                                class="@error('name') is-invalid @enderror form-control" type="text"
                                                value="{{old('name')}}" required />
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="ec-ratting-input mb-4">
                                            <input name="email" placeholder="Email*"
                                                class="@error('email') is-invalid @enderror form-control" type="email"
                                                value="{{old('email')}}" required />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="ec-ratting-input form-submit mb-4">
                                            <textarea name="comment" placeholder="Enter Your Comment*"
                                                class="@error('comment') is-invalid @enderror form-control"
                                                required>{{old('comment')}}</textarea>
                                            @error('comment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            
                                        </div>
                                        <button class="btn btn-primary" type="submit"
                                                value="Submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Single product tab start -->
               
                <!-- product details description area end -->
            </div>

        </div>
    </div>
</section>
<!-- End Single product -->

<!-- Related Product Start -->
<section class="section ec-releted-product section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">Related products</h2>
                    <h2 class="ec-title">Related products</h2>
                    <p class="sub-title">Browse The Collection of Top Products</p>
                </div>
            </div>
        </div>
        <div class="row margin-minus-b-30">
            <!-- Related Product Content -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                <div class="ec-product-inner">
                    <div class="ec-pro-image-outer">
                        <div class="ec-pro-image">
                            <a href="product-left-sidebar.html" class="image">
                                <img class="main-image" src="{{asset('Front/assets/images/product-image/6_1.jpg')}}"
                                    alt="Product" />
                                <img class="hover-image" src="{{asset('Front/assets/images/product-image/6_2.jpg')}}"
                                    alt="Product" />
                            </a>
                            <span class="percentage">20%</span>
                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                    class="fi-rr-eye"></i></a>
                            <div class="ec-pro-actions">
                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                        class="fi fi-rr-arrows-repeat"></i></a>
                                <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i>
                                    Add To Cart</button>
                                <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec-pro-content">
                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Round Neck T-Shirt</a></h5>
                        <div class="ec-pro-rating">
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star"></i>
                        </div>
                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer
                            took a galley.</div>
                        <span class="ec-price">
                            <span class="old-price">$27.00</span>
                            <span class="new-price">$22.00</span>
                        </span>
                        <div class="ec-pro-option">
                            <div class="ec-pro-color">
                                <span class="ec-pro-opt-label">Color</span>
                                <ul class="ec-opt-swatch ec-change-img">
                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('Front/assets/images/product-image/6_1.jpg')}}"
                                            data-src-hover="assets/images/product-image/6_1.jpg')}}"
                                            data-tooltip="Gray"><span style="background-color:#e8c2ff;"></span></a></li>
                                    <li><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('Front/assets/images/product-image/6_2.jpg')}}"
                                            data-src-hover="assets/images/product-image/6_2.jpg')}}"
                                            data-tooltip="Orange"><span style="background-color:#9cfdd5;"></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-pro-size">
                                <span class="ec-pro-opt-label">Size</span>
                                <ul class="ec-opt-size">
                                    <li class="active"><a href="#" class="ec-opt-sz" data-old="$25.00" data-new="$20.00"
                                            data-tooltip="Small">S</a></li>
                                    <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00"
                                            data-tooltip="Medium">M</a></li>
                                    <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$30.00"
                                            data-tooltip="Extra Large">XL</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                <div class="ec-product-inner">
                    <div class="ec-pro-image-outer">
                        <div class="ec-pro-image">
                            <a href="product-left-sidebar.html" class="image">
                                <img class="main-image" src="{{asset('Front/assets/images/product-image/7_1.jpg')}}"
                                    alt="Product" />
                                <img class="hover-image" src="{{asset('Front/assets/images/product-image/7_2.jpg')}}"
                                    alt="Product" />
                            </a>
                            <span class="percentage">20%</span>
                            <span class="flags">
                                <span class="sale">Sale</span>
                            </span>
                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                    class="fi-rr-eye"></i></a>
                            <div class="ec-pro-actions">
                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                        class="fi fi-rr-arrows-repeat"></i></a>
                                <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i>
                                    Add To Cart</button>
                                <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec-pro-content">
                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                        <div class="ec-pro-rating">
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star"></i>
                        </div>
                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer
                            took a galley.</div>
                        <span class="ec-price">
                            <span class="old-price">$12.00</span>
                            <span class="new-price">$10.00</span>
                        </span>
                        <div class="ec-pro-option">
                            <div class="ec-pro-color">
                                <span class="ec-pro-opt-label">Color</span>
                                <ul class="ec-opt-swatch ec-change-img">
                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('Front/assets/images/product-image/7_1.jpg')}}"
                                            data-src-hover="assets/images/product-image/7_1.jpg')}}"
                                            data-tooltip="Gray"><span style="background-color:#01f1f1;"></span></a></li>
                                    <li><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('Front/assets/images/product-image/7_2.jpg')}}"
                                            data-src-hover="assets/images/product-image/7_2.jpg')}}"
                                            data-tooltip="Orange"><span style="background-color:#b89df8;"></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-pro-size">
                                <span class="ec-pro-opt-label">Size</span>
                                <ul class="ec-opt-size">
                                    <li class="active"><a href="#" class="ec-opt-sz" data-old="$12.00" data-new="$10.00"
                                            data-tooltip="Small">S</a></li>
                                    <li><a href="#" class="ec-opt-sz" data-old="$15.00" data-new="$12.00"
                                            data-tooltip="Medium">M</a></li>
                                    <li><a href="#" class="ec-opt-sz" data-old="$20.00" data-new="$17.00"
                                            data-tooltip="Extra Large">XL</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                <div class="ec-product-inner">
                    <div class="ec-pro-image-outer">
                        <div class="ec-pro-image">
                            <a href="product-left-sidebar.html" class="image">
                                <img class="main-image" src="{{asset('Front/assets/images/product-image/1_1.jpg')}}"
                                    alt="Product" />
                                <img class="hover-image" src="{{asset('Front/assets/images/product-image/1_2.jpg')}}"
                                    alt="Product" />
                            </a>
                            <span class="percentage">20%</span>
                            <span class="flags">
                                <span class="sale">Sale</span>
                            </span>
                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                    class="fi-rr-eye"></i></a>
                            <div class="ec-pro-actions">
                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                        class="fi fi-rr-arrows-repeat"></i></a>
                                <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i>
                                    Add To Cart</button>
                                <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec-pro-content">
                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cute Baby Toy's</a></h5>
                        <div class="ec-pro-rating">
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star"></i>
                        </div>
                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer
                            took a galley.</div>
                        <span class="ec-price">
                            <span class="old-price">$40.00</span>
                            <span class="new-price">$30.00</span>
                        </span>
                        <div class="ec-pro-option">
                            <div class="ec-pro-color">
                                <span class="ec-pro-opt-label">Color</span>
                                <ul class="ec-opt-swatch ec-change-img">
                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('Front/assets/images/product-image/1_1.jpg')}}"
                                            data-src-hover="assets/images/product-image/1_1.jpg')}}"
                                            data-tooltip="Gray"><span style="background-color:#90cdf7;"></span></a></li>
                                    <li><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('Front/assets/images/product-image/1_2.jpg')}}"
                                            data-src-hover="assets/images/product-image/1_2.jpg')}}"
                                            data-tooltip="Orange"><span style="background-color:#ff3b66;"></span></a>
                                    </li>
                                    <li><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('Front/assets/images/product-image/1_3.jpg')}}"
                                            data-src-hover="assets/images/product-image/1_3.jpg')}}"
                                            data-tooltip="Green"><span style="background-color:#ffc476;"></span></a>
                                    </li>
                                    <li><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('Front/assets/images/product-image/1_4.jpg')}}"
                                            data-src-hover="assets/images/product-image/1_4.jpg')}}"
                                            data-tooltip="Sky Blue"><span style="background-color:#1af0ba;"></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-pro-size">
                                <span class="ec-pro-opt-label">Size</span>
                                <ul class="ec-opt-size">
                                    <li class="active"><a href="#" class="ec-opt-sz" data-old="$40.00" data-new="$30.00"
                                            data-tooltip="Small">S</a></li>
                                    <li><a href="#" class="ec-opt-sz" data-old="$50.00" data-new="$40.00"
                                            data-tooltip="Medium">M</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                <div class="ec-product-inner">
                    <div class="ec-pro-image-outer">
                        <div class="ec-pro-image">
                            <a href="product-left-sidebar.html" class="image">
                                <img class="main-image" src="{{asset('Front/assets/images/product-image/2_1.jpg')}}"
                                    alt="Product" />
                                <img class="hover-image" src="{{asset('Front/assets/images/product-image/2_2.jpg')}}"
                                    alt="Product" />
                            </a>
                            <span class="percentage">20%</span>
                            <span class="flags">
                                <span class="new">New</span>
                            </span>
                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                    class="fi-rr-eye"></i></a>
                            <div class="ec-pro-actions">
                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                        class="fi fi-rr-arrows-repeat"></i></a>
                                <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i>
                                    Add To Cart</button>
                                <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec-pro-content">
                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Jumbo Carry Bag</a></h5>
                        <div class="ec-pro-rating">
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star"></i>
                        </div>
                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer
                            took a galley.</div>
                        <span class="ec-price">
                            <span class="old-price">$50.00</span>
                            <span class="new-price">$40.00</span>
                        </span>
                        <div class="ec-pro-option">
                            <div class="ec-pro-color">
                                <span class="ec-pro-opt-label">Color</span>
                                <ul class="ec-opt-swatch ec-change-img">
                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('Front/assets/images/product-image/2_1.jpg')}}"
                                            data-src-hover="assets/images/product-image/2_2.jpg')}}"
                                            data-tooltip="Gray"><span style="background-color:#fdbf04;"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related Product end -->


@endsection