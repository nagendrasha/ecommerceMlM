@extends('Front.layout.app')

@section('content')

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
                        <h2 class="ec-breadcrumb-title">Cart</h2>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- ec-breadcrumb-list start -->
                        <ul class="ec-breadcrumb-list">
                            <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="ec-breadcrumb-item active">Cart</li>
                        </ul>
                        <!-- ec-breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ec breadcrumb end -->

<!-- Ec cart page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-cart-leftside col-lg-8 col-md-12 ">
                <!-- cart content Start -->
                <div class="ec-cart-content">
                    <div class="ec-cart-inner">
                        <div class="row">
                            <form action="#">
                                <div class="table-content cart-table-content">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th style="text-align: center;">Quantity</th>
                                                <th>Total</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="Product" class="ec-cart-pro-name"><a
                                                        href="product-left-sidebar.html"><img
                                                            class="ec-cart-pro-img mr-4"
                                                            src="{{asset('Front/assets/images/product-image/1.jpg')}}" alt="" />Stylish
                                                        Baby Shoes</a></td>
                                                <td data-label="Price" class="ec-cart-pro-price"><span
                                                        class="amount">$56.00</span></td>
                                                <td data-label="Quantity" class="ec-cart-pro-qty"
                                                    style="text-align: center;">
                                                    <div class="cart-qty-plus-minus">
                                                        <input class="cart-plus-minus" type="text"
                                                            name="cartqtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td data-label="Total" class="ec-cart-pro-subtotal">$56.00</td>
                                                <td data-label="Remove" class="ec-cart-pro-remove">
                                                    <a href="#"><i class="ecicon eci-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Product" class="ec-cart-pro-name"><a
                                                        href="product-left-sidebar.html"><img
                                                            class="ec-cart-pro-img mr-4"
                                                            src="{{asset('Front/assets/images/product-image/2.jpg')}}" alt="" />Unisex
                                                        Fully Solid Hoodie</a></td>
                                                <td data-label="Price" class="ec-cart-pro-price"><span
                                                        class="amount">$75.00</span></td>
                                                <td data-label="Quantity" class="ec-cart-pro-qty"
                                                    style="text-align: center;">
                                                    <div class="cart-qty-plus-minus">
                                                        <input class="cart-plus-minus" type="text"
                                                            name="cartqtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td data-label="Total" class="ec-cart-pro-subtotal">$75.00</td>
                                                <td data-label="Remove" class="ec-cart-pro-remove">
                                                    <a href="#"><i class="ecicon eci-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Product" class="ec-cart-pro-name"><a
                                                        href="product-left-sidebar.html"><img
                                                            class="ec-cart-pro-img mr-4"
                                                            src="{{asset('Front/assets/images/product-image/3.jpg')}}"
                                                            alt="" />Beautiful T-shirt For Women</a></td>
                                                <td data-label="Price" class="ec-cart-pro-price"><span
                                                        class="amount">$48.00</span></td>
                                                <td data-label="Quantity" class="ec-cart-pro-qty"
                                                    style="text-align: center;">
                                                    <div class="cart-qty-plus-minus">
                                                        <input class="cart-plus-minus" type="text"
                                                            name="cartqtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td data-label="Total" class="ec-cart-pro-subtotal">$48.00</td>
                                                <td data-label="Remove" class="ec-cart-pro-remove">
                                                    <a href="#"><i class="ecicon eci-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Product" class="ec-cart-pro-name"><a
                                                        href="product-left-sidebar.html"><img
                                                            class="ec-cart-pro-img mr-4"
                                                            src="{{asset('Front/assets/images/product-image/4.jpg')}}" alt="" />Wool
                                                        Hat For Men</a></td>
                                                <td data-label="Price" class="ec-cart-pro-price"><span
                                                        class="amount">$95.00</span></td>
                                                <td data-label="Quantity" class="ec-cart-pro-qty"
                                                    style="text-align: center;">
                                                    <div class="cart-qty-plus-minus">
                                                        <input class="cart-plus-minus" type="text"
                                                            name="cartqtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td data-label="Total" class="ec-cart-pro-subtotal">$95.00</td>
                                                <td data-label="Remove" class="ec-cart-pro-remove">
                                                    <a href="#"><i class="ecicon eci-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ec-cart-update-bottom">
                                            <a href="#">Continue Shopping</a>
                                            <button class="btn btn-primary">Check Out</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--cart content End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="ec-cart-rightside col-lg-4 col-md-12">
                <div class="ec-sidebar-wrap">
                    <!-- Sidebar Summary Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Summary</h3>
                        </div>
                        <div class="ec-sb-block-content">
                            <h4 class="ec-ship-title">Estimate Shipping</h4>
                            <div class="ec-cart-form">
                                <p>Enter your destination to get a shipping estimate</p>
                                <form action="#" method="post">
                                    <span class="ec-cart-wrap">
                                        <label>Country *</label>
                                        <span class="ec-cart-select-inner">
                                            <select name="ec_cart_country" id="ec-cart-select-country"
                                                class="ec-cart-select">
                                                <option selected="" disabled="">United States</option>
                                                <option value="1">Country 1</option>
                                                <option value="2">Country 2</option>
                                                <option value="3">Country 3</option>
                                                <option value="4">Country 4</option>
                                                <option value="5">Country 5</option>
                                            </select>
                                        </span>
                                    </span>
                                    <span class="ec-cart-wrap">
                                        <label>State/Province</label>
                                        <span class="ec-cart-select-inner">
                                            <select name="ec_cart_state" id="ec-cart-select-state"
                                                class="ec-cart-select">
                                                <option selected="" disabled="">Please Select a region, state
                                                </option>
                                                <option value="1">Region/State 1</option>
                                                <option value="2">Region/State 2</option>
                                                <option value="3">Region/State 3</option>
                                                <option value="4">Region/State 4</option>
                                                <option value="5">Region/State 5</option>
                                            </select>
                                        </span>
                                    </span>
                                    <span class="ec-cart-wrap">
                                        <label>Zip/Postal Code</label>
                                        <input type="text" name="postalcode" placeholder="Zip/Postal Code">
                                    </span>
                                </form>
                            </div>
                        </div>

                        <div class="ec-sb-block-content">
                            <div class="ec-cart-summary-bottom">
                                <div class="ec-cart-summary">
                                    <div>
                                        <span class="text-left">Sub-Total</span>
                                        <span class="text-right">$80.00</span>
                                    </div>
                                    <div>
                                        <span class="text-left">Delivery Charges</span>
                                        <span class="text-right">$80.00</span>
                                    </div>
                                    <div>
                                        <span class="text-left">Coupan Discount</span>
                                        <span class="text-right"><a class="ec-cart-coupan">Apply Coupan</a></span>
                                    </div>
                                    <div class="ec-cart-coupan-content">
                                        <form class="ec-cart-coupan-form" name="ec-cart-coupan-form" method="post"
                                            action="#">
                                            <input class="ec-coupan" type="text" required=""
                                                placeholder="Enter Your Coupan Code" name="ec-coupan" value="">
                                            <button class="ec-coupan-btn button btn-primary" type="submit"
                                                name="subscribe" value="">Apply</button>
                                        </form>
                                    </div>
                                    <div class="ec-cart-summary-total">
                                        <span class="text-left">Total Amount</span>
                                        <span class="text-right">$80.00</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Summary Block -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- New Product Start -->
<section class="section ec-new-product section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">New Arrivals</h2>
                    <h2 class="ec-title">New Arrivals</h2>
                    <p class="sub-title">Browse The Collection of Top Products</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- New Product Content -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                <div class="ec-product-inner">
                    <div class="ec-pro-image-outer">
                        <div class="ec-pro-image">
                            <a href="product-left-sidebar.html" class="image">
                                <img class="main-image" src="{{asset('Front/assets/images/product-image/6_1.jpg')}}" alt="Product" />
                                <img class="hover-image" src="{{asset('Front/assets/images/product-image/6_2.jpg')}}" alt="Product" />
                            </a>
                            <span class="percentage">20%</span>
                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                    class="fi-rr-eye"></i></a>
                            <div class="ec-pro-actions">
                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                        class="fi fi-rr-arrows-repeat"></i></a>
                                <button title="Add To Cart" class="add-to-cart"><i
                                        class="fi-rr-shopping-basket"></i> Add To Cart</button>
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
                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an
                            unknown printer took a galley.</div>
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
                                            data-tooltip="Gray"><span style="background-color:#e8c2ff;"></span></a>
                                    </li>
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
                                <img class="main-image" src="{{asset('Front/assets/images/product-image/7_1.jpg')}}" alt="Product" />
                                <img class="hover-image" src="{{asset('Front/assets/images/product-image/7_2.jpg')}}" alt="Product" />
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
                                <button title="Add To Cart" class="add-to-cart"><i
                                        class="fi-rr-shopping-basket"></i> Add To Cart</button>
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
                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an
                            unknown printer took a galley.</div>
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
                                            data-tooltip="Gray"><span style="background-color:#01f1f1;"></span></a>
                                    </li>
                                    <li><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('Front/assets/images/product-image/7_2.jpg')}}"
                                            data-src-hover="assets/images/product-image/7_2.jpg')}}"
                                            data-tooltip="Orange"><span
                                                style="background-color:#b89df8;"></span></a></li>
                                </ul>
                            </div>
                            <div class="ec-pro-size">
                                <span class="ec-pro-opt-label">Size</span>
                                <ul class="ec-opt-size">
                                    <li class="active"><a href="#" class="ec-opt-sz" data-old="$12.00"
                                            data-new="$10.00" data-tooltip="Small">S</a></li>
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
                                <img class="main-image" src="{{asset('Front/assets/images/product-image/1_1.jpg')}}" alt="Product" />
                                <img class="hover-image" src="{{asset('Front/assets/images/product-image/1_2.jpg')}}" alt="Product" />
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
                                <button title="Add To Cart" class="add-to-cart"><i
                                        class="fi-rr-shopping-basket"></i> Add To Cart</button>
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
                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an
                            unknown printer took a galley.</div>
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
                                            data-tooltip="Gray"><span style="background-color:#90cdf7;"></span></a>
                                    </li>
                                    <li><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('Front/assets/images/product-image/1_2.jpg')}}"
                                            data-src-hover="assets/images/product-image/1_2.jpg')}}"
                                            data-tooltip="Orange"><span
                                                style="background-color:#ff3b66;"></span></a></li>
                                    <li><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('Front/assets/images/product-image/1_3.jpg')}}"
                                            data-src-hover="assets/images/product-image/1_3.jpg')}}"
                                            data-tooltip="Green"><span style="background-color:#ffc476;"></span></a>
                                    </li>
                                    <li><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('Front/assets/images/product-image/1_4.jpg')}}"
                                            data-src-hover="assets/images/product-image/1_4.jpg')}}"
                                            data-tooltip="Sky Blue"><span
                                                style="background-color:#1af0ba;"></span></a></li>
                                </ul>
                            </div>
                            <div class="ec-pro-size">
                                <span class="ec-pro-opt-label">Size</span>
                                <ul class="ec-opt-size">
                                    <li class="active"><a href="#" class="ec-opt-sz" data-old="$40.00"
                                            data-new="$30.00" data-tooltip="Small">S</a></li>
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
                                <img class="main-image" src="{{asset('Front/assets/images/product-image/2_1.jpg')}}" alt="Product" />
                                <img class="hover-image" src="{{asset('Front/assets/images/product-image/2_2.jpg')}}" alt="Product" />
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
                                <button title="Add To Cart" class="add-to-cart"><i
                                        class="fi-rr-shopping-basket"></i> Add To Cart</button>
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
                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an
                            unknown printer took a galley.</div>
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
                                            data-tooltip="Gray"><span style="background-color:#fdbf04;"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 shop-all-btn"><a href="#">Shop All Collection</a></div>
        </div>
    </div>
</section>
<!-- New Product end -->


@endsection