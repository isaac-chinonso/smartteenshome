@extends('layout.masters')    
@section('title')
About Us || SmartTeens Home
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
                                        <li class="active"><a href="{{ route('aboutus') }}">About</a></li>
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
                            <h1>About Us</h1>
                            <ul>
                                <li> <a href="{{ route('homepage') }}">Home</a> </li>
                                <li>About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header Section breadcumb End Here -->
        <!-- Home About Start Here -->
        <div class="home-about-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;" data-wow-delay="0.4s">
                        <div class="about-content">
                            <h3>About <span>Smart Teens Home</span></h3>
                            <p style="text-align: justify;">Smart Teens Home is a community online& offline where Teens learn career& life skills together,grow with great teens and mentors thereby leading in their worlds of influence.
                            </p>
                            <p style="text-align: justify;">
                             It first started as a corporate social responsibility of <strong>PELEGUIN</strong> Solutions then called <strong>PELEGUIN</strong> Capacity Development Institute on the 7th of Dec, 2013.
                            </p>
                            <p style="text-align: justify;">
                            It was born from an hunger for an education system that is fulfilling and aligned with the unique person’s area of interest.
                            </p>
                           
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;" data-wow-delay="0.4s">
                        <div class="about-featured-image">
                            <a href="#"><img src="assets/images/smartteen.png" alt="image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home About End Here -->
        <!-- About Page Skill Area Start Here -->
        <div class="about-page-srill-area">
            <div class="container">
                <div class="row">
                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                       <div class="about-title-section">
                           <h3>Feature Services</h3>
                           <div class="subtitle">
                                <p>Discover Our Facilities</p>
                           </div>
                       </div>
                       <div class="about-page-service">
                           <div class="single-services">
                                 <a href="#"><img src="assets/images/Note-04-128.png"></i></a>
                                 <h3><a href="#">Career Skill Courses</a></h3>
                                 <p>Career skills Courses are practical and most times physical skills courses learnt from trainers to boost your practical knowledge about your defined career.</p>
                           </div>
                           <div class="single-services">
                                 <a href="#"><img src="assets/images/User-Group-128.png"></a>
                                 <h3><a href="#">Life Skill Course</a></h3>
                                 <p>Life skills courses are practical and soft skills mostly left online to help build on your strengths, complement your career skills and improve on your weaknesses when handling life issues on a daily basis.</p>
                           </div>
                           <div class="single-services">
                             <a href="#"><img src="assets/images/Teacher-01-128.png"></a>
                             <h3><a href="#">Training</a></h3>
                             <p>Our trainings get you in contact with the best trainers in the fields resulting from your assessment. You also get your trainings at subsidized rates.</p>
                           </div>
                       </div>
                   </div> 
                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                       
                       <div class="about-title-section">
                           <h3>Our Skills</h3>
                           <div class="subtitle">
                                <p>Check out</p>
                           </div>
                       </div>
                       <div class="about-skrill-area">
                           <p>Smart teens home skills are not generic and static but dynamic and have variety.  They comprise of career and life skills.
                           Courses available are dependent on the results of the career or personality assessment, registered trainers, centers’ chosen and preferred mode of training.
                          </p>
                           <div class="skill-content-3">
                            <div class="skill">
                                <!-- PROGRESS START -->
                                <div class="progress">
                                    <div class="lead">Career Test </div>
                                    <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 90%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span></div>
                                </div>
                                <!-- PROGRESS END -->                       
                                <!-- PROGRESS START -->
                                <div class="progress">
                                    <div class="lead">Personality</div>
                                    <div class="progress-bar wow fadeInLeft" data-progress="70%" style="width: 80%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>70%</span> </div>
                                </div>
                                <!-- PROGRESS END -->
                                <!-- PROGRESS START -->                         
                                <div class="progress">
                                    <div class="lead">Expert Team</div>
                                    <div class="progress-bar wow fadeInLeft" data-progress="90%" style="width: 90%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>90%</span> </div>
                                </div>  
                                <!-- PROGRESS END --> 
                                <!-- PROGRESS START -->                         
                                <div class="progress">
                                    <div class="lead">Internship</div>
                                    <div class="progress-bar wow fadeInLeft" data-progress="85%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>85%</span> </div>
                                </div>  
                                <!-- PROGRESS END -->                                                   
                            </div>                      
                           </div>
                       </div>
                   </div> 
                </div>
            </div>
        </div>
        <!-- About Page Skill Area End Here -->
         
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