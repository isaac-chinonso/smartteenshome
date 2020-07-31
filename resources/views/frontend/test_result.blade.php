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

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;" data-wow-delay="0.4s">
                    
                        <div class="panel fill1">
                           <div class="panel-heading" style="background-color:#337ab7;color:#fff;"><strong>BIO DATA</strong></div>
                              <div class="panel-body">

                                <table class="table col" border="1">
                                <thead>
                                <tr  >
                                    <td><strong>NAME:</strong></td>
                              
                                    <td><strong>AGE:</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>EMAIL ADDRESS:</strong></td>
                               
                                    <td><strong>PHONE NUMBER:</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>DESIRED CAREER:</strong></td>
                                
                                    <td><strong>WHAT DO YOU DO WHEN BORED:</strong></td>
                                </tr>
                                    </thead>
                                </table>

                            
                              
                              </div>
                        </div>
                                  
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;" data-wow-delay="0.4s">

                       <div class="panel fill1">
                        <div class="panel-heading" style="background-color:#337ab7;color:#fff;"><strong>RESULT</strong></div>
                            <div class="panel-body">
                               <p class="col" style="font-size: 14px;text-align: justify;line-height: 25px;">Good day. I believe you enjoyed your test, Below are your results.
                               <strong>KINDLY MAKE GOOD USE OF IT, STUDY IT & TAKE ALONG TO CAMP.</strong>
                               </p><br>
                                
                                <table class="table col" border="1" style="font-size: 17px;">
                                    <thead>
                                        <th style="text-align:center;">FIELD/CAREER</th>
                                        <th style="text-align:center;">SUGGESTION</th>
                                    </thead>
                                    <tbody>


                                    </tbody>
            
                                </table>
                            </div>
                       </div>
                    </div>

                </div>

                <div class="row">
               
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInRight">
                    <div class="panel fill1">
                        <div class="panel-heading" style="background-color:#337ab7;color:#fff;"><strong>SUMMARY</strong></div>
                        <div class="panel-body col">
                        <p style="font-size:15px;text-align: center;"><strong>GENERAL ADVICE FOR ALL TEENAGERS</strong></p>
                               <ul style="font-size: 17px;">
                               <li>Study more books, learn and practice critical reasoning</li>
                               <li>Study wide and learn more</li>
                               <li>Study social & human psychology</li>
                               <li>Study social intelligence, emotional intelligence</li>
                               <li>Read wide, get volunteering jobs/experiences, get organizational skills</li>
                               <li>Keep details</li>
                               <li>Be creative</li>
                               <li>Be innovative</li>
                               <li>Learn &practice leadership skills</li>
                               <li>Stop memorizing, study to understand</li>
                               <li>Study financial intelligence.</li>
                               <li>Be critical about everything it until you redefine it (innovation)</li>
                               <li>The highest & best investment that you can make is in your head</li>
                               <li>The highest impact you can make is in people</li>
                               <li>The more you learn, the more you know, the better you lead</li>
                               <li>Time is constant, every other thing changes| <strong>INVEST YOUR TIME!</strong></li>
                               </ul>

                            
                              
                                    </div>
                                    </div>
                                  
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