@extends('layout.masters')    
@section('title')
Contact Us || SmartTeens Home
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
                                        <li><a href="{{ route('personalitytest') }}">Personality Test</a></li>
                                        <li class="active"><a href="{{ route('contactus') }}">Contact</a></li>
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
                                        <li><a href="{{ route('libary') }}">Libaries</a></li>
                                        <li><a href="{{ route('careertest') }}">Career Test</a></li>
                                        <li><a href="{{ route('personalitytest') }}">Personality Test</a></li>
                                        <li class="active"><a href="{{ route('contactus') }}">Contact</a></li>
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
                            <h1>Contact Us</h1>
                            <ul>
                                <li> <a href="{{ route('homepage') }}">Home</a> </li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header Section breadcumb End Here -->
        <!-- Contact Form Start Here -->
        <!-- Google Map Start Here -->
        <div id="map" style="width:100%;height:490px;"></div>
        <!-- Google Map End Here -->
        <div class="contact-page-area">
            <div class="container">
                <div class="row">
                   <div class="total-contact-form">
                       <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 acurate">
                           <div class="contact-form">
                               <h3>Send Us Message</h3>                           
                               <div class="main-contact-form">                   
                                     <form>
                                       <fieldset>
                                       <div class="col-sm-6">
                                         <div class="form-group">
                                           <input type="text" class="form-control" placeholder="Name*">
                                         </div>
                                       </div>
                                       <div class="col-sm-6">
                                         <div class="form-group">
                                           <input type="email" class="form-control" placeholder="E-mail*">
                                         </div>
                                       </div>
                                       <div class="col-sm-6">
                                         <div class="form-group">
                                           <input type="text" class="form-control" placeholder="You Phone*">
                                         </div>
                                       </div>
                                       <div class="col-sm-6">
                                         <div class="form-group">
                                           <input type="text" class="form-control" placeholder="Subject*">
                                         </div>
                                       </div>
                                       <div class="col-sm-12">
                                         <div class="form-group">
                                           <textarea cols="40" rows="10" class="textarea form-control" placeholder="Your Message"></textarea>
                                         </div>
                                       </div>
                                       <div class="col-sm-12">
                                         <div class="form-group">
                                           <button class="btn-send" type="submit">Send Message</button>
                                         </div>
                                       </div>
                                       </fieldset>
                                     </form>
                               </div>
                           </div>
                       </div> 
                       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 acurate">
                           <div class="contact-information">
                               <h3>Contact Info</h3>
                               <p>For More Information and Services, Contact Us</p>
                               <div class="more-contact-info">
                                   <ul>
                                       <li><i class="fa fa-map-marker" aria-hidden="true"></i>221c IJU Road Opposite Petrol Managers Filling Station, Ifako Ijaiye, Lagos</li>
                                       <li><i class="fa fa-phone" aria-hidden="true"></i>+234 817 4938 110</li>
                                       <li><i class="fa fa-fax" aria-hidden="true"></i>+234 808 3522 835</li>
                                       <li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@smartteenshome.com</li>
                                       <li><i class="fa fa-envelope-o" aria-hidden="true"></i>applications@smartteenshome.com</li>
                                       <li><i class="fa fa-envelope-o" aria-hidden="true"></i>dean@smartteenshome.com</li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div> 
                </div>
            </div>
        </div>
        <!-- Contact Form End Here -->
        
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
        <!-- all js here -->
        <!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- Nivo slider js
        ============================================ -->    
        <script src="inc/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="inc/custom-slider/home.js" type="text/javascript"></script>
        <!-- plugins js -->
        <script src="js/plugins.js"></script>
        <!-- jquery.mixitup.min js
        ============================================ -->
        <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- Counter Up Js -->
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhrdEzlfpnsnfq4MgU1e1CCsrvVx2d59s"></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(6.654894499999999,3.323791300000039), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [   {       "featureType":"landscape",      "stylers":[         {               "hue":"#FFA800"         },          {               "saturation":0          },          {               "lightness":0           },          {               "gamma":1           }       ]   },  {       "featureType":"road.highway",       "stylers":[         {               "hue":"#53FF00"         },          {               "saturation":-73            },          {               "lightness":40          },          {               "gamma":1           }       ]   },  {       "featureType":"road.arterial",      "stylers":[         {               "hue":"#FBFF00"         },          {               "saturation":0          },          {               "lightness":0           },          {               "gamma":1           }       ]   },  {       "featureType":"road.local",     "stylers":[         {               "hue":"#00FFFD"         },          {               "saturation":0          },          {               "lightness":30          },          {               "gamma":1           }       ]   },  {       "featureType":"water",      "stylers":[         {               "hue":"#00BFFF"         },          {               "saturation":6          },          {               "lightness":8           },          {               "gamma":1           }       ]   },  {       "featureType":"poi",        "stylers":[         {               "hue":"#679714"         },          {               "saturation":33.4           },          {               "lightness":-25.4           },          {               "gamma":1           }       ]   }]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(6.654894499999999,3.323791300000039),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>
        <!-- main js -->
        <script src="js/main.js"></script>
@endsection