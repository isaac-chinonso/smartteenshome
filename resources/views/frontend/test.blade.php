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
                                        <li class="active"><a href="{{ route('test_result') }}">Test Result</a></li>
                                        <li><a href="{{ route('test') }}">Start New Test</a></li>
                                        <li><a href="{{ route('') }}">Logout</a></li>
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
                                        <li class="active"><a href="{{ route('test_result') }}">Test Result</a></li>
                                        <li><a href="{{ route('test') }}">Start New Test</a></li>
                                        <li><a href="{{ route('') }}">Logout</a></li>
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
        <div background="assets/images/bg-6.jpg" style="background: url(assets/images/bg-6.jpg);background-repeat: no-repeat;opacity: 1.0;filter: alpha(opacity=100);-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;background-attachment: fixed;}">
  >
         <!-- start login -->
              <div class="container" style="padding-top: 140px;">
                <div class="row">
                
                    <div class="col-md-2">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 wow fadeInRight" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;" data-wow-delay="0.4s">
                    
                          <div class="panel fill">
                          <div class="panel-heading" style="background-color:#337ab7;color:#fff;"><strong>QUESTIONAIRE</strong></div>
                              <div class="panel-body">
                                <h3 style="color: #fff;text-align: center;">Answer all question as they apply to you</h3>
                                <form  method="post" >
                              <div class="row">
                                <div class="form-group m-b-20">
                                  <div class="col-md-12">
                                      <label class="col">What is your full name? *</label>
                                      <input type="text" name="" class="form-control" placeholder="Enter Full Name" required>
                                  </div>
                                </div>
                              </div><br>

                              <div class="row">
                                <div class="form-group">
                                   <div class="col-md-6">
                                       <label class="col">Email Address *</label>
                                        <input type="text" name="" class="form-control" placeholder="Enter Email" required>
                                   </div>
                               
                                   <div class="col-md-6">
                                       <label class="col">How Old Are You *</label>
                                        <input type="text" name="" class="form-control" placeholder="Enter nAge" required>
                                   </div>
                                </div>
                              </div><br>


                              <div class="row">
                                <div class="form-group">
                                   <div class="col-md-6">
                                       <label class="col">What is your favourite Hobby *</label>
                                        <input type="text" name="" class="form-control" placeholder="Enter Hobby" required>
                                   </div>
                               
                                   <div class="col-md-6">
                                       <label class="col">Phone Number *</label>
                                        <input type="text" name="" class="form-control" placeholder="Enter Phone no" required>
                                   </div>
                                </div>
                              </div><br>

                              <div class="row">
                                <div class="form-group">
                                   <div class="col-md-6">
                                       <label class="col">What would You like to become *</label>
                                        <input type="text" name="" class="form-control" placeholder="Enter Desired career"required>
                                   </div>
                               
                                   <div class="col-md-6">
                                       <label class="col">who is your role model (favourite Personality) *</label>
                                        <input type="text" name="" class="form-control" placeholder="Enter Role model" required>
                                   </div>
                                </div>
                              </div><br>

                              <div class="row">
                                <div class="form-group">
                                   <div class="col-md-6">
                                       <label class="col">What work/business does your role model do? *</label>
                                        <input type="text" name="" class="form-control" placeholder="business role model" required>
                                   </div>
                               
                                   <div class="col-md-6">
                                       <label class="col">what work do you do aside school? *</label>
                                        <input type="text" name="" class="form-control" placeholder="Work aside school" required>
                                   </div>
                                </div>
                              </div><br>

                              <div class="row">
                                <div class="form-group">
                                   <div class="col-md-6">
                                       <label class="col">What do you love the most about your work? *</label>
                                        <input type="text" name="" class="form-control" placeholder="business role model" required>
                                   </div>
                               
                                   <div class="col-md-6">
                                       <label class="col">what do you do when you are bored? *</label>
                                        <input type="text" name="" class="form-control" placeholder="Work aside school" required>
                                   </div>
                                </div>
                              </div><br>
                                
                                <div class="login-buttons" align="center">
                                  <button class="btn btn-danger col">Cancel</button>
                                  <button class="btn btn-success col">Submit</button>
                                </div>
                               
                            </form>
                              </div>
                          </div>
                        
                        
                    </div>
                    <div class="col-md-2">
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