<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>DMR</title>
    <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">
    
   <!-- site Favicon -->
   <link rel="icon" href="{{asset('Front/assets/images/logo/logo.png')}}" sizes="32x32" />
   <link rel="apple-touch-icon" href="{{asset('Front/assets/images/favicon/favicon-5.png')}}" />
   <meta name="msapplication-TileImage" content="{{asset('Front/assets/images/favicon/favicon-5.png')}}" />

   <!-- css Icon Font -->
   <link rel="stylesheet" href="{{asset('Front/assets/css/vendor/ecicons.min.css')}}" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- css All Plugins Files -->
   <link rel="stylesheet" href="{{asset('Front/assets/css/plugins/animate.css')}}" />
   <link rel="stylesheet" href="{{asset('Front/assets/css/plugins/swiper-bundle.min.css')}}" />
   <link rel="stylesheet" href="{{asset('Front/assets/css/plugins/jquery-ui.min.css')}}" />
   <link rel="stylesheet" href="{{asset('Front/assets/css/plugins/countdownTimer.css')}}" />
   <link rel="stylesheet" href="{{asset('Front/assets/css/plugins/slick.min.css')}}" />
   <link rel="stylesheet" href="{{asset('Front/assets/css/plugins/bootstrap.css')}}" />

   <!-- Main Style -->
   <link rel="stylesheet" href="{{asset('Front/assets/css/style.css')}}" />

   <link rel="stylesheet" href="{{asset('Front/assets/css/responsive.css')}}" />
   <link rel="stylesheet" href="{{asset('Front/assets/css/demo5.css')}}" />

   @stack('extra_links')
   <style>
       .slick-arrow:before{
           color:#fff;
       }
   </style>
</head>
<body>
   <div id="ec-overlay">
       <div class="ec-ellipsis">
           <div></div>
           <div></div>
           <div></div>
           <div></div>
       </div>
   </div>

   <!-- Header start  -->
   <header class="ec-header">
       <!--Ec Header Top Start -->
                    <div class="container-fluid tt">
                    <div class="row">
                    <div class="col header-top-center d-md-none d-block">
                       <!-- Language Start -->
                       <section id="aviso-urgente" class="aviso-urgente js-aviso-urgente ">
                            <div class="aviso-urgente-interno">
                            
                            <ul class="aviso-urgente-interno-circular">
                                @foreach(getTaglines() as $tagline)
                                <li class="aviso-urgente-interno-circular-item aviso-urgente-interno-circular-item-um" style="color:{{ $tagline->color }};">
                                  <a href="{{ $tagline->link }}">{{ $tagline->title }}</a>
                                </li>
                                @endforeach
                                {{-- <li class="aviso-urgente-interno-circular-item aviso-urgente-interno-circular-item-um">
                                CUPOM PRIMEIRA VEZ
                                </li>
                             --}}
                            </ul>
                            
                            </div>
                        </section>
                       <!-- Currency End -->

                   </div>
            </div>
                    </div>
       <div class="header-top d-md-none d-block">
                    
           <div class="container">
            
               <div class="row align-items-center tb">
                    
                   
                   <!-- Header Top phone End -->
                   <!-- Header Top call Start -->
                   
                   <div class="col header-top-center d-md-none d-block">
                        <div class="header-logo  mb-0">
                           <a href="{{url('/')}}"><img src="{{asset('Front/assets/images/logo/logo.png')}}" alt="Site Logo"/><img
                                   class="dark-logo" src="{{asset('Front/assets/images/logo/logo.png')}}" alt="Site Logo"
                                   style="display: none;" /></a>
                       </div>
                   </div>
                   <div class="col header-top-center d-md-block d-none">
                       <!-- Language Start -->
                       <section id="aviso-urgente" class="aviso-urgente js-aviso-urgente ">
                            <div class="aviso-urgente-interno">
                                <ul class="aviso-urgente-interno-circular">
                                    @foreach(getTaglines() as $tagline)
                                    <li class="aviso-urgente-interno-circular-item aviso-urgente-interno-circular-item-um" >
                                      <a href="{{ $tagline->link }}" style="color:{{ $tagline->color }};">{{ $tagline->title }}</a>
                                    </li>
                                    @endforeach
                                    {{-- <li class="aviso-urgente-interno-circular-item aviso-urgente-interno-circular-item-um">
                                    CUPOM PRIMEIRA VEZ
                                    </li>
                                 --}}
                                </ul>
                            {{-- <ul class="aviso-urgente-interno-circular">
                                <li class="aviso-urgente-interno-circular-item aviso-urgente-interno-circular-item-um">
                                CUPOM PRIMEIRA VEZ
                                </li>
                            <li class="aviso-urgente-interno-circular-item aviso-urgente-interno-circular-item-dois">
                                FRETE GRÁTIS EM COMPRAS ACIMA DE R$ 649
                                </li>
                                <li class="aviso-urgente-interno-circular-item aviso-urgente-interno-circular-item-tres">
                                DESCONTO DE 5% NO PIX 
                                </li>

                                <li class="aviso-urgente-interno-circular-item aviso-urgente-interno-circular-item-quatro">
                                COMPRAS ACIMA DE R$ 499 T_SHIRT
                                </li>
                            </ul> --}}
                            
                            </div>
                        </section>
                       <!-- Currency End -->

                   </div>
                   <!-- Header Top call End -->
                  
                   <!-- Header Top responsive Action -->
                   <div class="col header-top-res d-lg-none">
                       <div class="ec-header-bottons">
                           <!-- Header User Start -->
                           <div class="ec-header-user dropdown">
                               <button class="dropdown-toggle" data-bs-toggle="dropdown"><i class="fi-rr-user"></i></button>
                               <ul class="dropdown-menu dropdown-menu-right">
                                   <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                                   <li><a class="dropdown-item" href="{{route('frontend_checkout')}}">Checkout</a></li>
                                   <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                               </ul>
                           </div>
                           <!-- Header User End -->
                           <!-- Header Cart Start -->
                           <a href="#" class="ec-header-btn ec-header-wishlist">
                               <div class="header-icon"><i class="fi-rr-heart"></i></div>
                               <span class="ec-header-count ec-wishlist-count">0</span>
                           </a>
                           <!-- Header Cart End -->
                           <!-- Header Cart Start -->
                           <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                               <div class="header-icon"><i class="fi-rr-shopping-basket"></i></div>
                               <span class="ec-header-count ec-cart-count">3</span>
                           </a>
                           <!-- Header Cart End -->
                           <!-- Header menu Start -->
                           <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                               <i class="ecicon eci-bars"></i>
                           </a>
                           <!-- Header menu End -->
                       </div>
                   </div>
                   <!-- Header Top responsive Action -->
               </div>
           </div>
       </div>
       <!-- Ec Header Top  End -->
       <!-- Ec Header Bottom  Start -->
       <div class="ec-header-bottom d-none d-lg-block">
           <div class="container position-relative">
               <div class="row">
                   <div class="ec-flex">
                       <!-- Ec Header Logo Start -->
                       <div class="align-self-center ec-header-logo ">
                           <div class="header-logo">
                               <a href="{{url('/')}}"><img src="{{asset('Front/assets/images/logo/logo.png')}}" alt="Site Logo" /><img
                                       class="dark-logo" src="{{asset('Front/assets/images/logo/logo.png')}}" alt="Site Logo"
                                       style="display: none;" /></a>
                           </div>
                       </div>
                       <!-- Ec Header Logo End -->

                       <!-- Ec Header Search Start -->
                       <div class="align-self-center ec-header-search">
                           <div class="header-search">
                               <form class="ec-search-group-form" action="#">
                                   
                                   <input class="form-control" placeholder="Search Here..." type="text">
                                   <button class="search_submit" type="submit"><i class="ecicon eci-search"></i></button>
                               </form>
                           </div>
                       </div>
                       <!-- Ec Header Search End -->

                       <!-- Ec Header Button Start -->
                       <div class="align-self-center ec-header-bottons">
                                
                           <div class="ec-header-bottons">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                   @if(!Auth::check()) Login @else {{ucwords(Auth::User()->name)}} @endif
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    @if(!Auth::check())
                                    <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                                    <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                                    @elseif(Auth::check() && Auth::User()->role == 1)
                                    <li><a class="dropdown-item" href="{{route('admin_dashboard')}}">Dashboard</a></li>
                                    @elseif(Auth::check() && Auth::User()->role == 2)
                                    <li><a class="dropdown-item" href="{{route('frontend_user_dashboard')}}">My Profile</a></li>
                                    <li><a class="dropdown-item" href="#">My Orders</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend_wishlist')}}">My Wishlist</a></li>
                                    @endif
                                </ul>

                            
                            </div>
                               <!-- Header wishlist End -->
                               <!-- Header Cart Start -->
                               <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                   <div class="header-icon"><i class="fa-solid fa-cart-plus"></i></div>
                                   <span class="ec-btn-title"><span class="ec-cart-count">3</span> item(s)</span>

                               </a>
                               <!-- Header Cart End -->
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Ec Header Button End -->
       <!-- Header responsive Bottom  Start -->
       <div class="ec-header-bottom d-lg-none">
           <div class="container position-relative">
               <div class="row ">

                   <!-- Ec Header Logo Start -->
                   <div class="col">
                       <div class="header-logo d-md-block d-none">
                           <a href="{{url('/')}}"><img src="{{asset('Front/assets/images/logo/logo.png')}}" alt="Site Logo" /><img
                                   class="dark-logo" src="{{asset('Front/assets/images/logo/logo.png')}}" alt="Site Logo"
                                   style="display: none;" /></a>
                       </div>
                   </div>
                   <!-- Ec Header Logo End -->
                   <!-- Ec Header Search Start -->
                   <div class="col align-self-center ec-header-search">
                       <div class="header-search">
                           <form class="ec-search-group-form" action="#">
                               <div class="ec-search-select-inner">
                                   <div class="ec-search-cat-title">All</div>
                                   <ul class="ec-search-cat-block">
                                       <li><a href="#">Cloths</a></li>
                                       <li><a href="#">Bag</a></li>
                                       <li><a href="#">Shoes</a></li>
                                   </ul>
                               </div>
                               <input class="form-control" placeholder="Search Here..." type="text">
                               <button class="search_submit" type="submit"><i class="ecicon eci-search"></i></button>
                           </form>
                       </div>
                   </div>
                   <!-- Ec Header Search End -->
               </div>
           </div>
       </div>
       <!-- Header responsive Bottom  End -->
       <!-- EC Main Menu Start -->
       <div id="ec-main-menu-desk" id="myHeader">
           <div class="container position-relative">
               <div class="row">
                   <div class="col ec-category-block">
                       <div class="ec-cat-menu">
                           <div class="ec-category-toggle">
                               <span class="ec-category-icon"></span>
                               <span class="ec-category-title">all categories</span>
                           </div>
                           <div class="ec-category-content">
                               <div id="ec-category-menu" class="ec-category-menu">
                                   <ul class="ec-category-wrapper">
                                       <li><a title="" class="ec-cat-menu-link" href="#">Home & Kitchen</a></li>
                                       <li><a title="" class="ec-cat-menu-link" href="#">Electronics & Digital</a></li>
                                       <li><a title="" class="ec-cat-menu-link" href="#">Home Accessories</a></li>
                                       <li><a title="" class="ec-cat-menu-link" href="#">Electronics</a></li>
                                       <li><a title="" class="ec-cat-menu-link" href="#">Office Furniture</a></li>
                                       <li><a title="" class="ec-cat-menu-link" href="#">Hotel Furniture</a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col ec-main-menu-block align-self-center d-none d-lg-block p-0">
                       <div class="ec-main-menu">
                           <ul>
                               <li ><a href="{{url('/')}}">Home</a>
                               </li>
                               <li><a href="{{route('frontend_aboutus')}}">About Us</a></li>
                               <li class="dropdown position-static"><a href="{{route('frontend_product_list')}}">Products</a>
                                   <ul class="mega-menu d-block">
                                       <li class="d-flex">
                                           <ul class="d-block">
                                               <li class="menu_title"><a href="javascript:void(0)">Classic</a></li>
                                               <li><a href="#">Left sidebar 3 column</a>
                                               </li>
                                               <li><a href="#">Left sidebar 4 column</a>
                                               </li>
                                               <li><a href="#">Right sidebar 3 column</a>
                                               </li>
                                               <li><a href="#">Right sidebar 4 column</a>
                                               </li>
                                               <li><a href="#">Full width 4 column</a></li>
                                           </ul>
                                           <ul class="d-block">
                                               <li class="menu_title"><a href="javascript:void(0)">Headphone</a></li>
                                               <li><a href="#">Edoor Headphone</a></li>
                                               <li><a href="#">Cooga Headphone</a></li>
                                               <li><a href="#">Aring Headphone</a></li>
                                               <li><a href="#">Boats Headphone</a></li>
                                               <li><a href="#">Futura Headphone</a></li>
                                           </ul>
                                           <ul class="d-block">
                                               <li class="menu_title"><a href="javascript:void(0)">Laptop</a></li>
                                               <li><a href="#">Acer Laptop</a></li>
                                               <li><a href="#">Dell Laptop</a></li>
                                               <li><a href="#">HP Laptop</a></li>
                                               <li><a href="#">Lenovo Laptop</a></li>
                                               <li><a href="#">Macbook</a></li>
                                           </ul>
                                           <ul class="d-block">
                                               <li class="menu_title"><a href="javascript:void(0)">Speaker</a>
                                               </li>
                                               <li><a href="#">Mind Booster</a></li>
                                               <li><a href="#">Loudify</a></li>
                                               <li><a href="#">Higher</a>
                                               </li>
                                               <li><a href="#">Rock Station</a></li>
                                               <li><a href="#">Krazzy rhythm</a></li>
                                           </ul>
                                       </li>
                                       <li>
                                           <ul class="ec-main-banner w-100">
                                               <li><a class="p-0" href="{{route('frontend_product_list')}}"><img
                                                           class="img-responsive" src="{{asset('Front/assets/images/menu-banner/1.jpg')}}"
                                                           alt=""></a></li>
                                               <li><a class="p-0" href="{{route('frontend_product_list')}}"><img
                                                           class="img-responsive" src="{{asset('Front/assets/images/menu-banner/2.jpg')}}"
                                                           alt=""></a></li>
                                               <li><a class="p-0" href="{{route('frontend_product_list')}}"><img
                                                           class="img-responsive" src="{{asset('Front/assets/images/menu-banner/3.jpg')}}"
                                                           alt=""></a></li>
                                               <li><a class="p-0" href="{{route('frontend_product_list')}}"><img
                                                           class="img-responsive" src="{{asset('Front/assets/images/menu-banner/4.jpg')}}"
                                                           alt=""></a></li>
                                           </ul>
                                       </li>
                                   </ul>
                               </li>
                               
                               
                               <li><a href="{{route('frontend_faq')}}">FAQ</a></li>
                               <li><a href="#">Track Order</a></li>
                              
                              
                               <li class=""><a href="{{route('frontend_blogs')}}">Blog</a>

                                  
                               </li>
                               <li><a href="{{route('frontend_contactus')}}">Contact Us</a></{{route('frontend_cart_list')}}               
                           </ul>
                       </div>
                   </div>
                   <div class="col ec-spe-offer-block">
                       <div class="ec-spe-offer-link">
                           <a href="#" class="ec-spe-offer-title">Special offer</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Ec Main Menu End -->
       <!-- Menu Start -->
    
       <!-- Menu End -->
   </header>
   <style>
    .aviso-urgente{
    align-items: center;
    color: #000;
    display: flex;
    font-family: Arial;
    font-size: 14px;
    justify-content: center;
    height: 36px;
    position: relative;
    text-align: center;
    z-index: 300; 
}

.aviso-urgente-interno {
  width: 100%;
}

.aviso-urgente-interno-circular {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relavite;
}

.aviso-urgente-interno-circular-item {
  position: absolute;
  text-align: center;
/*   border: solid 1px red; */
}

.aviso-urgente-interno-circular li {
  animation: avisoAlterFadeInOut 10s infinite ease-in-out;
}

.aviso-urgente-interno-circular li:nth-of-type(2) {animation-delay: 2s; opacity: 0; }
.aviso-urgente-interno-circular li:nth-of-type(3) {animation-delay: 6s; opacity: 0; }
.aviso-urgente-interno-circular li:nth-of-type(4) {animation-delay: 8s; opacity: 0; }


@keyframes avisoAlterFadeInOut {
  0% {opacity:1;}
  17% {opacity:0;}
  25% {opacity:0;}
  92% {opacity:0;}
  100% {opacity:1;}
}
.col.header-top-center{
    display:block;
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