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
                        <h2 class="ec-breadcrumb-title">Blog Page</h2>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- ec-breadcrumb-list start -->
                        <ul class="ec-breadcrumb-list">
                            <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="ec-breadcrumb-item active">Blog Page</li>
                        </ul>
                        <!-- ec-breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ec breadcrumb end -->

<!-- Ec Blog page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-blogs-rightside col-lg-8 order-lg-last col-md-12 order-md-first">

                <!-- Blog content Start -->
                <div class="ec-blogs-content">
                    <div class="ec-blogs-inner">
                        <div class="row">
                            @if(count($blogs) > 0)
                            @foreach($blogs as $blog)
                            <div class="col-md-6 col-sm-12 mb-6 ec-blog-block">
                                <div class="ec-blog-inner">
                                    <div class="ec-blog-image">
                                        <a href="#">
                                            <img class="blog-image" src="{{url('/')}}/{{$blog->image}}"
                                                alt="{{$blog->title}}" />
                                        </a>
                                    </div>
                                    <div class="ec-blog-content">
                                        <h5 class="ec-blog-title"><a
                                                href="#">{{$blog->title}}</a></h5>

                                        <div class="ec-blog-date">
                                            @if($blog->author)
                                            By <span>{{$blog->author}}</span>
                                            
                                             / @endif {{date('d F-Y',strtotime($blog->created_at))}}</div>
                                        <div class="ec-blog-desc">
                                        {{Str::limit(strip_tags($blog->description),200)}}    
                                        </div>

                                        <div class="ec-blog-btn">
                                            <a href="{{route('frontend_detail',$blog->slug)}}" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="col-md-12 col-sm-12 ec-blog-block">
                                <h2>No Blogs Found</h2>
                                <p>We Will publish our blog soon.</p>

                            </div>

                            
                            @endif
                            
                        </div>
                    </div>
                    <!-- Ec Pagination Start -->
                    <div class="ec-pro-pagination d-none">
                        <span>Showing 1-12 of 21 item(s)</span>
                        <ul class="ec-pro-pagination-inner">
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Ec Pagination End -->
                </div>
                <!--Blog content End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="ec-blogs-leftside col-lg-4 order-lg-first col-md-12 order-md-last">
                <div class="sidebar-fixed sticky-top">
                <div class="ec-blog-search">
                    <form class="ec-blog-search-form" action="#">
                        <input class="form-control" placeholder="Search Our Blog" type="text">
                        <button class="submit" type="submit"><i class="ecicon eci-search"></i></button>
                    </form>
                </div>
                <div class="ec-sidebar-wrap">
                    <!-- Sidebar Recent Blog Block -->
                    <div class="ec-sidebar-block ec-sidebar-recent-blog">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Recent Articles</h3>
                        </div>
                        <div class="ec-sb-block-content">
                            @if(count($latestBlogs) > 0)
                            @foreach($latestBlogs as $latest)
                            <div class="ec-sidebar-block-item" title="{{$latest->title}}">
                                <h5 class="ec-blog-title" ><a href="#">{{Str::limit($latest->title,'30')}}</a></h5>
                                <div class="ec-blog-date">{{date('d F-Y',strtotime($latest->created_at))}} <b> - {{$latest->author}}</b></div>
                            </div>
                            @endforeach
                            @else
                            <div class="ec-sidebar-block-item" >
                                <h5 class="ec-blog-title" >No Recent Blog Found</h5>
                            </div>
                            @endif
                           
                        </div>
                    </div>
                    <!-- Sidebar Recent Blog Block -->
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection