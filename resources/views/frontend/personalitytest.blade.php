@extends('layout.masters')    
@section('title')
Personality Test || SmartTeens Home
@endsection

@section('content')
<!-- Header Area Start Here -->
        <header>
            <div class="header-area sticky">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                            <div class="logo-area">
                                <a href="#"><img src="assets/images/logo.png" alt="image" width="120px" height="50px"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="{{ route('homepage') }}">Home</a></li>
                                        <li><a href="{{ route('aboutus') }}">About</a></li>
                                        <li><a href="{{ route('libary') }}">Libaries</a></li>
                                        <li><a href="{{ route('careertest') }}">Career Test</a></li>
                                        <li class="active"><a href="{{ route('personalitytest') }}">Personality Test</a></li>
                                        <li><a href="{{ route('contactus') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 acurate">
                            <div class="menu-right">
                                <nav>
                                    <ul>
                                    
                                        <li class="right-slide" id="slideBotton"><i class="fa fa-bars" aria-hidden="true"></i></li>                               
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area mob-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="{{ route('homepage') }}">Home</a></li>
                                        <li class="active"><a href="{{ route('aboutus') }}">About</a></li>
                                        <li><a href="{{ route('libary') }}">Libaries</a></li>
                                        <li><a href="{{ route('careertest') }}">Career Test</a></li>
                                        <li><a href="{{ route('personalitytest') }}">Personality Test</a></li>
                                        <li><a href="{{ route('contactus') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>                  
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->
        </header>
        <!-- Header Area End Here -->
        <!-- Page Header Section breadcumb Start Here -->
        <div class="page-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-page">
                            <h1>Personality Test</h1>
                            <ul>
                                <li> <a href="{{ route('homepage') }}">Home</a> </li>
                                <li>Test</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header Section breadcumb End Here -->
        <!-- Error Page Start Here -->
        <div class="error-page-area">
          <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                  <div class="error-page">
                    <h1>404</h1>
                    <h3>Sorry Page Was Not Found</h3>
                    <p>The page you are looking is not available.Try going to Home Page by using the button below.</p>
                    <a href="{{ route('homepage') }}">Go To Home Page</a>
                  </div>
                </div> 
            </div>
          </div>
        </div>
        <!-- Error Page End Here -->

        <!-- Slide Menu Section Start Here -->
        <div class="slide-menu-area" id="sideSlide" style="background: #5795f9;">
        <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <h3>Quick Support</h3>
            <ul>     
                <li><a href="{{ route('contactus') }}"><i class="fa fa-phone" aria-hidden="true"></i> ( + 243) 808 3522 835 </a></li>
                <li><a href="{{ route('contactus') }}"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@smartteenshome.com</a></li>
                <li><a href="{{ route('contactus') }}"><i class="fa fa-clock-o" aria-hidden="true"></i> Monday - Friday</a></li>
            </ul>
            <img src="assets/images/support.png" alt="image">
        </div>
        <!-- Slide Menu Section EndHere -->
@endsection