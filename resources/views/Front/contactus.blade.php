@extends('Front.layout.app')

@section('content')

<style>
    .invalid-feedback
    {
        color:red;
    }
</style>

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
                            src="assets/images/product-image/6_1.jpg" alt="product"></a>
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
                            src="assets/images/product-image/12_1.jpg" alt="product"></a>
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
                            src="assets/images/product-image/3_1.jpg" alt="product"></a>
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
                        <h2 class="ec-breadcrumb-title">Contact Us</h2>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- ec-breadcrumb-list start -->
                        <ul class="ec-breadcrumb-list">
                            <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="ec-breadcrumb-item active">Contact Us</li>
                        </ul>
                        <!-- ec-breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ec breadcrumb end -->

<!-- Ec Contact Us page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-common-wrapper">
                <div class="ec-contact-leftside">
                    <div class="ec-contact-container">
                        <div class="ec-contact-form">
                            {{-- <form action="#" method="post"> --}}
                                @if (session('success'))
                                    <div class="col-sm-12">
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div>
                                @endif
                                <form action="{{route('frontend_save_contact_us')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="recaptcha">

                                    <span class="ec-contact-wrap">
                                        <label>First Name*</label>
                                        <input type="text"
                                            class="@error('first_name') is-invalid @enderror"
                                            id="first_name" name="first_name" value="{{old('first_name')}}" placeholder="Enter your first name" >
                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </span>
                                    
                                    <span class="ec-contact-wrap">
                                        <label>Last Name*</label>
                                        <input type="text"
                                            class="@error('last_name') is-invalid @enderror"
                                            id="last_name" name="last_name" value="{{old('last_name')}}" placeholder="Enter your last name" >
                                        @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </span>
                                    
                                    <span class="ec-contact-wrap">
                                        <label>Email*</label>
                                        <input type="text"
                                            class="@error('email_id') is-invalid @enderror"
                                            id="email_id" name="email_id" value="{{old('email_id')}}" placeholder="Enter your Email" >
                                        @error('email_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </span>
                                    
                                    <span class="ec-contact-wrap">
                                        <label>Phone Number*</label>
                                        <input type="text"
                                            class="@error('phone_number') is-invalid @enderror"
                                            id="phone_number" name="phone_number" value="{{old('phone_number')}}" placeholder="Enter your Phone Number" >
                                        @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </span>

                                    <span class="ec-contact-wrap">
                                        <label>Comments/Questions*</label>
                                        <textarea name="comment"  value="{{old('comment')}}" placeholder="Please leave your comments here.."></textarea>
                                       
                                    </span>
                                    <span class="ec-contact-wrap">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </span>
                                    
                                
                                {{-- <span class="ec-contact-wrap">
                                    <label>First Name*</label>
                                    <input type="text" name="first_name" placeholder="Enter your first name" required />
                                </span>
                                <span class="ec-contact-wrap">
                                    <label>Last Name*</label>
                                    <input type="text" name="last_name" placeholder="Enter your last name" required />
                                </span>
                                <span class="ec-contact-wrap">
                                    <label>Email*</label>
                                    <input type="email" name="email_id" placeholder="Enter your email address" required />
                                </span>
                                <span class="ec-contact-wrap">
                                    <label>Phone Number*</label>
                                    <input type="text" name="phone_number" placeholder="Enter your phone number" required />
                                </span>
                                <span class="ec-contact-wrap">
                                    <label>Comments/Questions*</label>
                                    <textarea name="comments" placeholder="Please leave your comments here.."></textarea>
                                </span>
                                <span class="ec-contact-wrap ec-recaptcha">
                                    <span class="g-recaptcha"
                                        data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S"
                                        data-callback="verifyRecaptchaCallback"
                                        data-expired-callback="expiredRecaptchaCallback"></span>
                                    <input class="form-control d-none" data-recaptcha="true" required
                                        data-error="Please complete the Captcha">
                                    <span class="help-block with-errors"></span>
                                </span>
                                <span class="ec-contact-wrap ec-contact-btn">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </span> --}}
                            </form>
                        </div>
                    </div>
                </div>
                <div class="ec-contact-rightside">
                    <div class="ec_contact_map">
                        <div class="ec_map_canvas">
                            <iframe id="ec_map_canvas"
                                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d71263.65594328841!2d144.93151478652146!3d-37.8734290780509!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1615963387757!5m2!1sen!2sus"></iframe>
                            <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                        </div>
                    </div>
                    <div class="ec_contact_info">
                        <h1 class="ec_contact_info_head">Contact us</h1>
                        <ul class="align-items-center">
                            <li class="ec-contact-item"><i class="ecicon eci-map-marker"
                                    aria-hidden="true"></i><span>Address :</span>71 Pilgrim Avenue Chevy Chase, east california. east california. MD
                                20815, USA</li>
                            <li class="ec-contact-item align-items-center"><i class="ecicon eci-phone"
                                    aria-hidden="true"></i><span>Call Us :</span><a href="tel:+440123456789">+44 0123
                                    456 789</a></li>
                            <li class="ec-contact-item align-items-center"><i class="ecicon eci-envelope"
                                    aria-hidden="true"></i><span>Email :</span><a
                                    href="mailto:example@ec-email.com">example@ec-email.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection