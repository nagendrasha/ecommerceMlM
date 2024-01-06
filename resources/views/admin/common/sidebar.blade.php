<!-- LEFT MAIN SIDEBAR -->
<div class="ec-left-sidebar ec-bg-sidebar">
    <div id="sidebar" class="sidebar ec-sidebar-footer">

        <div class="ec-brand">
            <a href="{{route('admin_dashboard')}}" title="Ekka">
                <img class="ec-brand-icon" src="{{asset('admin/assets/img/logo/main-logo.png')}}" alt="" />
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="ec-navigation" data-simplebar>
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <!-- Dashboard -->
                <li class="active">
                    <a class="sidenav-item-link" href="{{route('admin_dashboard')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <hr>
                </li>



                <!-- Users -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{route('admin_user_list')}}">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Users</span> <b class="caret"></b>
                    </a>
                    {{-- <div class="collapse">
								<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="#">
											<span class="nav-text">User List</span>
										</a>
									</li>
									
								</ul>
							</div> --}}
                    <hr>
                </li>

                <!-- Category -->
                {{-- <li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-dns-outline"></i>
								<span class="nav-text">Categories</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="{{route('admin_categories_main_list')}}">
                <span class="nav-text">Main Category</span>
                </a>
                </li>
                <li class="">
                    <a class="sidenav-item-link" href="{{route('admin_categories_sub')}}">
                        <span class="nav-text">Sub Category</span>
                    </a>
                </li>
            </ul>
        </div>
        </li> --}}

        <!-- Products -->
        <li class="has-sub">
            <a class="sidenav-item-link" href="javascript:void(0)">
                <i class="mdi mdi-palette-advanced"></i>
                <span class="nav-text">Products</span> <b class="caret"></b>
            </a>
            <div class="collapse">
                <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                    <li class="">
                        <a class="sidenav-item-link" href="{{route('admin_categories_main_list')}}">
                            <span class="nav-text">Category</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="sidenav-item-link" href="{{route('admin_product_list')}}">
                            <span class="nav-text">Product</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="sidenav-item-link" href="{{route('admin_coupon_coupon')}}">
                            <span class="nav-text">Coupon</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="sidenav-item-link" href="{{route('admin_manufacturer_manufacturer')}}">
                            <span class="nav-text">Manufacturer</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="sidenav-item-link" href="{{route('admin_option_option_group')}}">
                            <span class="nav-text">Option Group</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="sidenav-item-link" href="{{route('admin_options_list')}}">
                            <span class="nav-text">Options</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="sidenav-item-link" href="{{route('admin_product_review_list')}}">
                            <span class="nav-text">Reviews</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Orders -->
        <li class="has-sub">
            <a class="sidenav-item-link" href="javascript:void(0)">
                <i class="mdi mdi-cart"></i>
                <span class="nav-text">Orders</span> <b class="caret"></b>
            </a>
            <div class="collapse">
                <ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
                    <li class="">
                        <a class="sidenav-item-link" href="{{route('admin_order_new')}}">
                            <span class="nav-text">New Order</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="sidenav-item-link" href="{{route('admin_order_detail')}}">
                            <span class="nav-text">Order History</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="sidenav-item-link" href="{{route('admin_order_history')}}">
                            <span class="nav-text">Order Detail</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="sidenav-item-link" href="{{route('admin_order_invoice')}}">
                            <span class="nav-text">Invoice</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="has-sub">
            <hr>
            <a class="sidenav-item-link" href="javascript:void(0)">
                <i class="mdi mdi-account-plus-outline"></i>
                <span class="nav-text">Leads</span> <b class="caret"></b>
            </a>
            <div class="collapse">
                <ul class="sub-menu" id="otherpages" data-parent="#sidebar-menu">
                    <li class="has-sub">
                        <a href="{{route('admin_contactus_list')}}">Contact Us</a>
                    </li>
                    <li class="has-sub">
                        <a href="{{route('admin_newsletter_list')}}">Newsletter</a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="has-sub">
            <a class="sidenav-item-link" href="javascript:void(0)">
                <i class="mdi mdi-web"></i>
                <span class="nav-text">Website</span> <b class="caret"></b>
            </a>
            <div class="collapse">
                <ul class="sub-menu" id="otherpages" data-parent="#sidebar-menu">
                    <li class="has-sub">
                        <a href="{{route('admin_blogs_list')}}">Blog</a>
                    </li>
                    <li class="has-sub">
                        <a href="{{route('admin_faq_list')}}">FAQ</a>
                    </li>
                    <li class="has-sub">
                        <a href="{{route('admin_slider_list')}}">Slider</a>
                    </li>
                    <li class="has-sub">
                        <a href="{{route('admin_service_list')}}">Services</a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="has-sub">
            <a class="sidenav-item-link" href="javascript:void(0)">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">Other Pages</span> <b class="caret"></b>
            </a>
            <div class="collapse">

                <ul class="sub-menu" id="otherpages" data-parent="#sidebar-menu">

                    <li class="has-sub">
                        <a href="{{route('admin_banner_list','four')}}">Discount Banner (4-Col)</a>
                    </li>
                    <li class="has-sub">
                        <a href="{{route('admin_banner_list','six')}}">Discount Banner (6-Col)</a>
                    </li>
                    <li class="has-sub">
                        <a href="{{route('admin_banner_list','twelve')}}">Discount Banner (12-Col)</a>
                    </li>
                    <li class="has-sub">
                        <a href="{{route('admin_tagline_list')}}">Tagline</a>
                    </li>
                    <li class="has-sub">
                        <a href="#">Testimonials</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-sub">
            <hr>
            <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
							document.getElementById('logout-form-sidebar').submit();" class="sidenav-item-link">
                <i class="mdi mdi-login"></i>
                <span class="nav-text">Logout</span> <b class="caret"></b>
            </a>
        </li>
        </ul>
    </div>
</div>
</div>