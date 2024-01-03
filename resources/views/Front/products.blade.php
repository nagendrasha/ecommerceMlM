@extends('Front.layout.app')

@section('content')


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
                        <h2 class="ec-breadcrumb-title">Shop</h2>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- ec-breadcrumb-list start -->
                        <ul class="ec-breadcrumb-list">
                            <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="ec-breadcrumb-item active">Shop</li>
                        </ul>
                        <!-- ec-breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ec breadcrumb end -->

<!-- Ec Shop page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-shop-rightside col-lg-9 order-lg-last col-md-12 order-md-first margin-b-30">
                <!-- Shop Top Start -->
                <div class="ec-pro-list-top d-flex">
                    <div class="col-md-6 ec-grid-list">
                        <div class="ec-gl-btn">
                            <button class="btn btn-grid active"><i class="fi-rr-apps"></i></button>
                            <button class="btn btn-list"><i class="fi-rr-list"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6 ec-sort-select">
                        <span class="sort-by">Sort by</span>
                        <div class="ec-select-inner">
                            <select name="ec-select" id="ec-select">
                                <option selected disabled>Position</option>
                                <option value="1">Relevance</option>
                                <option value="2">Name, A to Z</option>
                                <option value="3">Name, Z to A</option>
                                <option value="4">Price, low to high</option>
                                <option value="5">Price, high to low</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Shop Top End -->

                <!-- Shop content Start -->
                <div class="shop-pro-content">
                    <div class="shop-pro-inner">
                        <div class="row">
                            @if($products)
                            @foreach($products as $data)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="{{route('frontend_product_detail', encrypt($data->id))}}"
                                                class="image">
                                                <img class="main-image" src="{{asset($data->main_image)}}"
                                                    alt="Product" />
                                            </a>
                                            {{-- <span class="percentage">20%</span> --}}
                                            <a href="#" class="quickview" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                            <div class="ec-pro-actions">
                                                <a href="#" class="ec-btn-group compare" title="Compare"><i
                                                        class="fi fi-rr-arrows-repeat"></i></a>
                                                <button title="Add To Cart" class="add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                        class="fi-rr-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a
                                                href="{{route('frontend_product_detail', encrypt($data->id))}}">{{$data->name}}</a>
                                        </h5>
                                        <span class="ec-price">
                                            @if($data->discount > 0)
                                            <span class="old-price">₹ {{$data->price}}</span>
                                            <span class="new-price">₹ {{$data->price - $data->discount}}</span>
                                            @else
                                            <span class="new-price">₹ {{$data->price}}</span>
                                            @endif
                                        </span>
                                        {{-- <div class="ec-pro-option">
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
                                                data-tooltip="Orange"><span
                                                    style="background-color:#9cfdd5;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <span class="ec-pro-opt-label">Size</span>
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz" data-old="$25.00"
                                                    data-new="$20.00" data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00"
                                                    data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00"
                                                    data-tooltip="Large">X</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$30.00"
                                                    data-tooltip="Extra Large">XL</a></li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            <!-- Ec Pagination Start -->
            {{ $products->links() }}

            <!-- Ec Pagination End -->
        </div>
        <!--Shop content End -->
    </div>
    <!-- Sidebar Area Start -->
    <div class="ec-shop-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
        <div id="shop_sidebar">
            <div class="ec-sidebar-heading">
                <h1>Filter Products By</h1>
            </div>
            <div class="ec-sidebar-wrap">
                <!-- Sidebar Category Block -->
                <div class="ec-sidebar-block">
                    <div class="ec-sb-title">
                        <h3 class="ec-sidebar-title">Category</h3>
                    </div>
                    <div class="ec-sb-block-content">
                        <ul>
                            @if(count($categories))
                            @foreach($categories as $data)
                            <li>
                                <div class="ec-sidebar-block-item">
                                    <input type="checkbox" /> <a href="#">{{$data->name}}</a><span
                                        class="checked"></span>
                                </div>
                            </li>
                            @endforeach
                            <li>
                                <div class="ec-sidebar-block-item ec-more-toggle">
                                    <span class="checked"></span><span id="ec-more-toggle">More
                                        Categories</span>
                                </div>
                            </li>
                            @endif

                        </ul>
                    </div>
                </div>

                @if($option_groups->count())
                @foreach($option_groups as $option_group)
                @if(count($option_group->getOption) > 0)
                <!-- Sidebar Size Block -->
                <div class="ec-sidebar-block {{strtolower($option_group->name)}}">
                    <div class="ec-sb-title">
                        <h3 class="ec-sidebar-title">{{$option_group->name}}</h3>
                    </div>
                    <div class="ec-sb-block-content">
                        <ul>
                            @foreach($option_group->getOption as $option)
                            @if($option->option_type == "color")
                            <li>
                                <div class="ec-sidebar-block-item"><span style="background-color:{{$option->option_name}};"></span></div>
                            </li>
                            @else
                            <li>
                                <div class="ec-sidebar-block-item">
                                    <input type="checkbox" value="{{$option->id}}"/><a href="#">{{$option->option_name}}</a><span
                                        class="checked"></span>
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
                @endforeach
                @endif
                <!-- Sidebar Price Block -->
                <div class="ec-sidebar-block">
                    <div class="ec-sb-title">
                        <h3 class="ec-sidebar-title">Price</h3>
                    </div>
                    <div class="ec-sb-block-content es-price-slider">
                        <div class="ec-price-filter">
                            <div id="ec-sliderPrice" class="filter__slider-price" data-min="0" data-max="250"
                                data-step="10"></div>
                            <div class="ec-price-input">
                                <label class="filter__label"><input type="text" class="filter__input"></label>
                                <span class="ec-price-divider"></span>
                                <label class="filter__label"><input type="text" class="filter__input"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<!-- End Shop page -->

@endsection