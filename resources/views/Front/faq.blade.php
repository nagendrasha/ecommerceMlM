@extends('Front.layout.app')

@section('content')

<div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row ec_breadcrumb_inner">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="ec-breadcrumb-title">FAQ</h2>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- ec-breadcrumb-list start -->
                        <ul class="ec-breadcrumb-list">
                            <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="ec-breadcrumb-item active">FAQ</li>
                        </ul>
                        <!-- ec-breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ec breadcrumb end -->

<!-- Ec FAQ page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    @if(count($faqs) > 0)
                    <h2 class="ec-bg-title">FAQ</h2>
                    <h2 class="ec-title">FAQ</h2>
                    @endif
                    {{-- <p class="sub-title mb-3">Customer service management</p> --}}
                </div>
            </div>
           
            <div class="accordion" id="accordionExample">
                @if(count($faqs) > 0)
                    @foreach($faqs as $index => $faq)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{$faq->id}}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapse{{$faq->id}}">
                       {{$faq->question}}
                    </button>
                    </h2>
                    <div id="collapse{{$faq->id}}" class="accordion-collapse collapse @if(!$index) show @endif" aria-labelledby="heading{{$faq->id}}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        {{$faq->answer}}
                    </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-md-12 col-sm-12 ec-blog-block">
                    
                    <h2 class="text-center">No Faqs Found</h2>
                    <p class="text-center">We Will publish our faq soon.</p>

                </div>
                @endif
                
            </div>
    </div>
</section>


@endsection