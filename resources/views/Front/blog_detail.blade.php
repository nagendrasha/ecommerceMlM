@extends('Front.layout.app')

@section('content')



<!-- ekka Cart End -->

<!-- Ec breadcrumb start -->
<div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row ec_breadcrumb_inner">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="ec-breadcrumb-title">{{ucwords($detail->title)}}</h2>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- ec-breadcrumb-list start -->
                        <ul class="ec-breadcrumb-list">
                            <li class="ec-breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="ec-breadcrumb-item"><a href="{{route('frontend_blogs')}}">Blog List</a></li>
                            <li class="ec-breadcrumb-item active">{{ucwords($detail->title)}}</li>
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
            <div class="ec-blogs-rightside col-lg-8 col-md-12">

                <!-- Blog content Start -->
                <div class="ec-blogs-content">
                    <div class="ec-blogs-inner">
                        <div class="ec-blog-main-img">
                            <h3 class="mb-2"><b>{{ucwords($detail->title)}}</b></h3>
                            <img class="blog-image" src="{{url('/')}}/{{$detail->image}}" alt="Blog" />
                        </div>
                        <div class="ec-blog-date mb-4">
                            <p class="date">{{date('d F-Y',strtotime($detail->created_at))}} - @if($detail->author)<b>By : {{$detail->author}}</b>@endif</p>
                            
                        </div>
                        <div class="ec-blog-detail">
                            {!! $detail->description !!}
                        </div>
                        
                        
                
                    </div>
                </div>
                <!--Blog content End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="ec-blogs-leftside col-lg-4 col-md-12">
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
                            <div class="ec-sidebar-block-item">
                                <h5 class="ec-blog-title"><a href="blog-detail-left-sidebar.html">The best fashion influencers.</a></h5>
                                <div class="ec-blog-date">February 10, 2021-2022</div>
                            </div>
                           
                        </div>
                    </div>
                    <!-- Sidebar Recent Blog Block -->
                    <!-- Sidebar Category Block -->
                    
                </div>
            </div>
        </div>
    </div>
</section>




@endsection