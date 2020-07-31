@extends('layout.masters')    
@section('title')
Career Test || SmartTeens Home
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
                                        <li class="active"><a href="{{ route('careertest') }}">Career Assessment</a></li>
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
                                        <li class="active"><a href="{{ route('aboutus') }}">About</a></li>
                                        <li><a href="{{ route('libary') }}">Libaries</a></li>
                                        <li><a href="{{ route('careertest') }}">Career Assessment</a></li>
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
         <div class="bg">
         <!-- start login -->
              <div class="container">
                <div class="row" align="Center">
                    <div class="header">
                        <span class="logo col1">Career Test <i class="fa fa-sign-in"></i></span><br>
                        <small class="col2">Have you discoverd your career,login now to discover yours</small>
                    </div>
                
                    <div class="col-md-3">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;" data-wow-delay="0.4s">
                    
                          <div class="panel fill">
                            <div class="panel-heading" style="background-color:#337ab7;color:#fff;">USER LOGIN</div>
                              <div class="panel-body">
                                <form  method="post" >
                                <div class="form-group m-b-20">
                                  <input type="text" name="" class="form-control" placeholder="Email/Phone">
                                </div>

                                <div class="form-group m-b-20">
                                    <input type="password" name="" class="form-control" placeholder="password">
                                </div>
                                <div class="m-b-20">
                                 <label>
                                  <input type="checkbox" > <em class="col">Remember Me</em>
                                 </label>
                                </div>
                                <div class="login-buttons">
                                  <button class="btn btn-primary btn-block btn-lg col">Submit</button>
                                </div>
                                <div class="m-t-20 col">
                                  Not a member yet? Click <a href="#">here</a> to register.
                                </div>
                            </form>
                              </div>
                          </div>
                        
                        
                    </div>
                    <div class="col-md-3">
                    </div>
                
              </div>
          </div>

         <!-- end login -->

      </div>

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