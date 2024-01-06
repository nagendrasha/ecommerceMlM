@extends('layouts.app')

@section('content')

<style>
    .card-header.bg-primary {
    background-color: #151515 !important;
}
.sign-inup .card{
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}
.btn.btn-primary{
    background-color: #11235A;
    border-color:#11235A;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}
.text-blue{
    color: #11235A;
}
.slideshow {
  list-style-type: none;
  opacity: 0.4;
}

/** SLIDESHOW **/
.slideshow,
.slideshow:after { 
    top: -16px; /*Not sure why I needed this fix*/
		position: fixed;
    width: 100%;
    height: 100%;
    left: 0px;
    z-index: 0; 
}

.slideshow li span { 
		position: absolute;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    color: transparent;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    opacity: 0;
    z-index: 0;
    animation: imageAnimation 30s linear infinite 0s; 
}



.slideshow li:nth-child(1) span { 
    background-image: url("https://www.simplilearn.com/ice9/free_resources_article_thumb/Use_Cases_for_Cyber_Security.jpg"); 
}
.slideshow li:nth-child(2) span { 
    background-image: url("https://www.kaspersky.com/content/en-global/images/repository/isc/2017-images/What-is-Cyber-Security.jpg");
    animation-delay: 6s; 
}
.slideshow li:nth-child(3) span { 
    background-image: url("https://assets-eu-01.kc-usercontent.com/77bbf83a-1306-0152-fea5-3b5eaf937634/7916661a-40c3-4d65-8ea8-6785dfe41ab8/GettyImages-1303567646.jpg");
    animation-delay: 12s; 
}
.slideshow li:nth-child(4) span { 
    background-image: url("https://www.digitalbusiness-cloud.de/wp-content/uploads/security-lermont51-adobestock-574743730-neu.jpg.webp");   
    animation-delay: 18s; 
}
.slideshow li:nth-child(5) span { 
    background-image: url("https://assets-eu-01.kc-usercontent.com/77bbf83a-1306-0152-fea5-3b5eaf937634/7916661a-40c3-4d65-8ea8-6785dfe41ab8/GettyImages-1303567646.jpg");
    animation-delay: 24s; 
}



@keyframes imageAnimation { 
    0% { opacity: 0; animation-timing-function: ease-in; }
    8% { opacity: 1; animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}


@keyframes titleAnimation { 
    0% { opacity: 0 }
    8% { opacity: 1 }
    17% { opacity: 1 }
    19% { opacity: 0 }
    100% { opacity: 0 }
}


.no-cssanimations .cb-slideshow li span {
	opacity: 1;
}
</style>
<ul class="slideshow">
	<li><span></span></li>
    <li><span>2</span></li>
	<li><span></span></li>
	<li><span></span></li>
	<li><span></span></li>
</ul>
<div class="container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="ec-brand">
                        <a href="{{url('/')}}" title="Ekka">
                            <img class="ec-brand-icon" src="{{asset('admin/assets/img/logo/main-logo.png')}}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="card-body p-5">
                    <h4 class="text-dark mb-5">Sign In</h4>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-12 ">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <div class="d-flex my-2 justify-content-between">
                                    <div class="d-inline-block mr-3">
                                        <div class="form-check"><label for="remember">Remember me</label>
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        </div>
                                    </div>

                                    @if (Route::has('password.request'))
                                    <p><a class="text-blue" href="{{ route('password.request') }}">Forgot Password?</a></p>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary btn-block mb-4">Sign In</button>

                                {{-- <p class="sign-upp">Don't have an account yet ?
                                    <a class="text-blue" href="#">Sign Up</a>
                                </p> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection