@extends('layout.masters')    
@section('title')
Libary || SmartTeens Home
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
                                        <li class="active"><a href="{{ route('libary') }}">Libaries</a></li>
                                        <li><a href="{{ route('careertest') }}">Career Test</a></li>
                                        <li><a href="{{ route('personalitytest') }}">Personality Test</a></li>
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
                                        <li><a href="{{ route('aboutus') }}">About</a></li>
                                        <li class="active"><a href="{{ route('libary') }}">Libaries</a></li>
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
                            <h1>Libary</h1>
                            <ul>
                                <li> <a href="index.html">Home</a> </li>
                                <li>Libary</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header Section breadcumb End Here -->
        <!-- Home advertise start Here -->
        <div class="home-advertise-area" style="background-color: #5795f9;color: #fff;line-height: 25px;height: 200px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8  text-center">
                        <div class="advertise-content">
                            <p>Are you a trainer, sign up here to upload books</p>
                             
                        </div>
                        
                    </div>
                    <div class="col-md-4 text-center acurate">
                      <div class="form-group">
                        <button class="btn-primary " type="submit">Sign Up Now</button>
                      </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Home advertise end Here -->
        <!-- Services Page Start Here -->
        <div class="services-page">
          <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="single-service">
                    <div class="service-image">
                      <a href="https://goo.gl/forms/64ExseXi836RrqnC3"><img src="assets/images/services/book.jpg" alt=""></a>
                    </div>
                    <h3><a href="#">360 Smart Teen</a></h3>
                    <p>Joshua Oshowo is the Founder and Present Dean of Smart Teens Home.He is also the Founder of PELEGUIN Group which launched Smart Teens Home...</p>
                    <div class="read-more">
                      <a href="https://goo.gl/forms/64ExseXi836RrqnC3"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-480">
                  <div class="single-service">
                    <div class="service-image">
                      <a href="#"><img src="assets/images/services/book.jpg" alt=""></a>
                    </div>
                    <h3><a href="#">How To Raise A Smart Teenager</a></h3>
                    <p>when an unknown printer tookgalley  type and scrambled make type specimen book survived not only five centuries.</p>
                    <div class="read-more">
                      <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-768 padding-480">
                  <div class="single-service">
                    <div class="service-image">
                      <a href="#"><img src="assets/images/you are not dull.jpg" alt=""></a>
                    </div>
                    <h3><a href="#">You Are Not Dull</a></h3>
                    <p>when an unknown printer tookgalley  type and scrambled make type specimen book survived not only five centuries.</p>
                    <div class="read-more">
                      <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                  </div>
               </div>
              
              
              
            </div>
           
          </div>
        </div>
 
        <!-- Services Page End Here -->
       
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
@endsection