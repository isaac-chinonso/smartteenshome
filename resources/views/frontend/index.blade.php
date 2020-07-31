@extends('layout.masters')    
@section('title')
Welcome || SmartTeens Home
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
                                        <li class="active"><a href="{{ route('homepage') }}">Home</a></li>
                                        <li><a href="{{ route('aboutus') }}">About</a></li>
                                        <li><a href="{{ route('libary') }}">Libaries</a></li>
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
                                        <li class="active"><a href="{{ route('homepage') }}">Home</a></li>
                                        <li><a href="{{ route('aboutus') }}">About</a></li>
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
        <!-- slider area-->
        <div class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides"> 
                    <img src="assets/images/slider/train teens slider.jpg" alt="" title="#slider-direction-1"  />
                    <img src="assets/images/slider/career skills courses slider.jpg" alt="" title="#slider-direction-2"  />
                    <img src="assets/images/slider/Life skills slider.jpg" alt="" title="#slider-direction-3"  />
                    <img src="assets/images/slider/sponsor a smart teen s.jpg" alt="" title="#slider-direction-4"  />
                </div>
                <!-- direction 1-->
                <div id="slider-direction-1" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1">Become a Trainer</h1>
                            <div class="title2" >Train Teens Who are passionate in your field || Get Paid || Impact Lives</div>
                            <div class="slider-botton" >
                                <ul>
                                    <li class="acitve"><a href="#">Register </a></li>
                                    <li class="acitve"><a href="#">Read More </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1">Career Skills Courses</h1>
                            <div class="title2" >Take Your Career Assessment || Choose The Course That Makes You Fulfilled || Get A Trainer</div>
                            <div class="slider-botton" >
                                <ul>
                                    <li class="acitve"><a href="#">Start Now</a></li>
                                    <li class="acitve"><a href="#">Read More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
                <!-- direction 3 -->
                <div id="slider-direction-3" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1">Life Skills Courses</h1>
                            <div class="title2" >Take A Personality Assessment || Choose The Course That Best Improves Your Personality || Get A Trainer</div>
                            <div class="slider-botton" >
                                <ul>
                                    <li class="acitve"><a href="#">Start Now</a></li>
                                    <li class="acitve"><a href="#">Read More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
                <!-- direction 4 -->
                <div id="slider-direction-4" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1">Sponsor A Smart Teen</h1>
                            <div class="title2" >Trainings || Events</div>
                            <div class="slider-botton" >
                                <ul>
                                    <li class="acitve"><a href="#">Start Now</a></li>
                                    <li class="acitve"><a href="#">Read More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- slider end-->

        <!-- Home Page Service Start Here -->
        <div class="home-page-services-area">
            <div class="container">
                <div class="row">
                <h2 style="text-align: center;font-weight: bold;">How To Become A <span style="color: #5795f9;font-size: 40px;">SmartTeen</span></h2><br>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInUp" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;" data-wow-delay="0.1s">
                        <div class="single-service">
                            <a href="{{ route('careertest') }}"><img src="assets/images/Note-04-128.png"></a>
                            <h3><a href="{{ route('careertest') }}">Career Assessment</a></h3>
                            <p style="text-align: justify;">Oue Assessment helps you know the best career that fits you, what career skills you need to focus on and what life skills to get; so as to become a fulfilled expert.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInUp" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;" data-wow-delay="0.2s">
                        <div class="single-service">
                            <a href="#"><img src="assets/images/Teacher-01-128.png"></a>
                            <h3><a href="#">Training</a></h3>
                            <p style="text-align: justify;">Our trainings get you in contact with the best trainers in the fields resulting from your assessment. You also get your trainings at subsidized rates.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInUp" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;" data-wow-delay="0.3s">
                        <div class="single-service">
                            <a href="{{ route('careertest') }}"><img src="assets/images/Worker-128.png"></a>
                            <h3><a href="{{ route('careertest') }}">Internship</a></h3>
                            <p style="text-align: justify;">You get access to institutions (firms, companies…) that are in the line of your acquired trainings and provide you with the necessary experience to become a fulfilled expert.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInUp" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;" data-wow-delay="0.4s">
                        <div class="single-service padding-481">
                            <a href="#"><img src="assets/images/User-Group-128.png"></a>
                            <h3><a href="#">Super Smart Teens Home</a></h3>
                            <p style="text-align: justify;">This is a community where group mentoring and coaching are experienced between smart teens and mentors word wide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Page Service End Here -->

        <!-- Home Testimonial Start Here -->
        <div class="client-testimonial-area">
            <div class="single-testimonial">
                <div class="container">
                    <div class="row">
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                             <div class="testimonial-content">
                                 <h2 style="font-size: 30px;">How To Become A 360 Degrees <span style="color: #5795f9;font-size: 40px;">Smart Teenager</span></h2>
                                 <p><b>Audio|| E-copy|| Hard-cover</b></p>
                                 
                                 <a href="https://goo.gl/forms/64ExseXi836RrqnC3">Click To Get Yours Now</a>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
                    </div>
                </div>
            </div>
            <div class="single-testimonial single-testimonial-two">
                <div class="container">
                    <div class="row">
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                             <div class="testimonial-content">
                                 <h2>have you personally discovered your career?</h2>
                                 <p><b>If Yes, congrats! If No, start here and take your career assessment</b></p>
                                 
                                 <a href="{{ route('careertest') }}">Start Assessment</a>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
                    </div>
                </div>
            </div>
          <div class="single-testimonial single-testimonial-three">
                <div class="container">
                    <div class="row">
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                             <div class="testimonial-content">
                                 <h2> Do You Know Your Personality</h2>
                                 <p><b>Take A Personality Assessment</b></p>
                                
                                 <a href="{{ route('personalitytest') }}">Start Now</a>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Testimonial End Here -->

        <!-- Why Smartiot Today Area Start Here -->
        <div class="why-smartiot-today">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="smartiot-today-content">
                            <h2>Why <span>SmartTeens</span> Home!</h2>
                            <p>It’s the most versatile and fastest growing platform where teens get to know what their true person is, get people to believe in them for who they are, train them, mentor them and meet with other smart teens around the world.</p>
                            <ul>
                                <li>
                                    <div class="single-list">
                                        <ul>                                            
                                            <li>Career Skill Course</li>
                                            <li>Training</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-list">
                                        <ul>                                            
                                            <li>Live Skill Course</li>
                                            <li>Internship</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="smartiot-today-featured">
                            <img src="assets/images/smartteen.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Smartiot Today Area End Here -->
        
        
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