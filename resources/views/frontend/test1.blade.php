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
                
                    <div class="col-md-1">
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 wow fadeInRight" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;" data-wow-delay="0.4s">
                    
                          <div class="panel fill1">
                          <div class="panel-heading" style="background-color:#337ab7;color:#fff;"><strong>QUESTIONAIRE</strong></div>
                              <div class="panel-body">
                                <form  method="post" >
                                  <div class="list-group">
                                               <a href="#" class="list-group-item list-group-item-success"><strong>V.I</strong> - Very Interested</a>
                                               <a href="#" class="list-group-item list-group-item-info"><strong>I</strong> - Interested</a>
                                               <a href="#" class="list-group-item list-group-item-warning"><strong>S.I</strong> - Slightly Interested</a>
                                               <a href="#" class="list-group-item list-group-item-danger"><strong> N.I</strong> - Not Interested</a>
                                               <a href="#" class="list-group-item list-group-item-danger"><strong> D.U</strong> - Don’t Understand</a>
                                  </div>

                                  <table class="table">
                                      <thead class="col">
                                        <th>S/N</th>
                                        <th>Questions</th>
                                        <th>VI</th>
                                        <th>I</th>
                                        <th>SI</th>
                                        <th>NI</th>
                                        <th>DU</th>
                                      </thead>
                                     <tbody class="col">
                                      <tr>
                                        <td>1</td>
                                        <td>To maintain, install and repair computers</td>
                                        <td><input type="radio" name="q1" value="1" required></td>
                                        <td><input type="radio" name="q1" value="0" required></td>
                                        <td><input type="radio" name="q1" value="0" required></td>
                                        <td><input type="radio" name="q1" value="0" required></td>
                                        <td><input type="radio" name="q1" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>2</td>
                                        <td>To try new food recipes</td>
                                        <td><input type="radio" name="q2" value="1" required></td>
                                        <td><input type="radio" name="q2" value="0" required></td>
                                        <td><input type="radio" name="q2" value="0" required></td>
                                        <td><input type="radio" name="q2" value="0" required></td>
                                        <td><input type="radio" name="q2" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>3</td>
                                        <td>To take care of people, even strangers</td>
                                        <td><input type="radio" name="q3" value="1" required></td>
                                        <td><input type="radio" name="q3" value="0" required></td>
                                        <td><input type="radio" name="q3" value="0" required></td>
                                        <td><input type="radio" name="q3" value="0" required></td>
                                        <td><input type="radio" name="q3" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>4</td>
                                        <td>To write books, articles, essays/plays</td>
                                        <td><input type="radio" name="q4" value="1" required></td>
                                        <td><input type="radio" name="q4" value="0" required></td>
                                        <td><input type="radio" name="q4" value="0" required></td>
                                        <td><input type="radio" name="q4" value="0" required></td>
                                        <td><input type="radio" name="q4" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>5</td>
                                        <td>To interpret numbers and solve mathematical problems</td>
                                        <td><input type="radio" name="q5" value="1" required></td>
                                        <td><input type="radio" name="q5" value="0" required></td>
                                        <td><input type="radio" name="q5" value="0" required></td>
                                        <td><input type="radio" name="q5" value="0" required></td>
                                        <td><input type="radio" name="q5" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>6</td>
                                        <td>To discover why and how chemicals react to one another</td>
                                        <td><input type="radio" name="q6" value="1" required></td>
                                        <td><input type="radio" name="q6" value="0" required></td>
                                        <td><input type="radio" name="q6" value="0" required></td>
                                        <td><input type="radio" name="q6" value="0" required></td>
                                        <td><input type="radio" name="q6" value="0" required></td>
                                     </tr>
                                    
                                     <tr>
                                        <td>7</td>
                                        <td>To investigate crimes</td>
                                        <td><input type="radio" name="q7" value="1" required></td>
                                        <td><input type="radio" name="q7" value="0" required></td>
                                        <td><input type="radio" name="q7" value="0" required></td>
                                        <td><input type="radio" name="q7" value="0" required></td>
                                        <td><input type="radio" name="q7" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>8</td>
                                        <td>To learn about human relations and psychology</td>
                                        <td><input type="radio" name="q8" value="1" required></td>
                                        <td><input type="radio" name="q8" value="0" required></td>
                                        <td><input type="radio" name="q8" value="0" required></td>
                                        <td><input type="radio" name="q8" value="0" required></td>
                                        <td><input type="radio" name="q8" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>9</td>
                                        <td>To design costume/stage set</td>
                                        <td><input type="radio" name="q9" value="1" required></td>
                                        <td><input type="radio" name="q9" value="0" required></td>
                                        <td><input type="radio" name="q9" value="0" required></td>
                                        <td><input type="radio" name="q9" value="0" required></td>
                                        <td><input type="radio" name="q9" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>10</td>
                                        <td>To motivate, encourage and help others to fulfill their goals</td>
                                        <td><input type="radio" name="q10" value="1" required></td>
                                        <td><input type="radio" name="q10" value="0" required></td>
                                        <td><input type="radio" name="q10" value="0" required></td>
                                        <td><input type="radio" name="q10" value="0" required></td>
                                        <td><input type="radio" name="q10" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>11</td>
                                        <td>To learn computer software programs</td>
                                        <td><input type="radio" name="q11" value="1" required></td>
                                        <td><input type="radio" name="q11" value="0" required></td>
                                        <td><input type="radio" name="q11" value="0" required></td>
                                        <td><input type="radio" name="q11" value="0" required></td>
                                        <td><input type="radio" name="q11" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>12</td>
                                        <td>To learn what fruits and vegetables are in season</td>
                                        <td><input type="radio" name="q12" value="1" required></td>
                                        <td><input type="radio" name="q12" value="0" required></td>
                                        <td><input type="radio" name="q12" value="0" required></td>
                                        <td><input type="radio" name="q12" value="0" required></td>
                                        <td><input type="radio" name="q12" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>13</td>
                                        <td>To learn how to start a business</td>
                                        <td><input type="radio" name="q13" value="1" required></td>
                                        <td><input type="radio" name="q13" value="0" required></td>
                                        <td><input type="radio" name="q13" value="0" required></td>
                                        <td><input type="radio" name="q13" value="0" required></td>
                                        <td><input type="radio" name="q13" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>14</td>
                                        <td>To train employees</td>
                                        <td><input type="radio" name="q14" value="1" required></td>
                                        <td><input type="radio" name="q14" value="0" required></td>
                                        <td><input type="radio" name="q14" value="0" required></td>
                                        <td><input type="radio" name="q14" value="0" required></td>
                                        <td><input type="radio" name="q14" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>15</td>
                                        <td>To learn how the body functions</td>
                                        <td><input type="radio" name="q15" value="1" required></td>
                                        <td><input type="radio" name="q15" value="0" required></td>
                                        <td><input type="radio" name="q15" value="0" required></td>
                                        <td><input type="radio" name="q15" value="0" required></td>
                                        <td><input type="radio" name="q15" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>16</td>
                                        <td>To research and create reports</td>
                                        <td><input type="radio" name="q16" value="1" required></td>
                                        <td><input type="radio" name="q16" value="0" required></td>
                                        <td><input type="radio" name="q16" value="0" required></td>
                                        <td><input type="radio" name="q16" value="0" required></td>
                                        <td><input type="radio" name="q16" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>17</td>
                                        <td>To serve your community and keep it safe</td>
                                        <td><input type="radio" name="q17" value="1" required></td>
                                        <td><input type="radio" name="q17" value="0" required></td>
                                        <td><input type="radio" name="q17" value="0" required></td>
                                        <td><input type="radio" name="q17" value="0" required></td>
                                        <td><input type="radio" name="q17" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>18</td>
                                        <td>To understand the world events and politics</td>
                                        <td><input type="radio" name="q18" value="1" required></td>
                                        <td><input type="radio" name="q18" value="0" required></td>
                                        <td><input type="radio" name="q18" value="0" required></td>
                                        <td><input type="radio" name="q18" value="0" required></td>
                                        <td><input type="radio" name="q18" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>19</td>
                                        <td>To do critique art/music/performances</td>
                                        <td><input type="radio" name="q19" value="1" required></td>
                                        <td><input type="radio" name="q19" value="0" required></td>
                                        <td><input type="radio" name="q19" value="0" required></td>
                                        <td><input type="radio" name="q19" value="0" required></td>
                                        <td><input type="radio" name="q19" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>20</td>
                                        <td>To train people to meet fitness goals</td>
                                        <td><input type="radio" name="q20" value="1" required></td>
                                        <td><input type="radio" name="q20" value="0" required></td>
                                        <td><input type="radio" name="q20" value="0" required></td>
                                        <td><input type="radio" name="q20" value="0" required></td>
                                        <td><input type="radio" name="q20" value="0" required></td>
                                      </tr>
                    
                                      <tr>
                                        <td>21</td>
                                        <td>To troubleshoot technological issues</td>
                                        <td><input type="radio" name="q21" value="1" required></td>
                                        <td><input type="radio" name="q21" value="0" required></td>
                                        <td><input type="radio" name="q21" value="0" required></td>
                                        <td><input type="radio" name="q21" value="0" required></td>
                                        <td><input type="radio" name="q21" value="0" required></td>
                                     </tr>
                    
                                     <tr>
                                        <td>22</td>
                                        <td>To ensure a business meets the standard</td>
                                        <td><input type="radio" name="q22" value="1" required></td>
                                        <td><input type="radio" name="q22" value="0" required></td>
                                        <td><input type="radio" name="q22" value="0" required></td>
                                        <td><input type="radio" name="q22" value="0" required></td>
                                        <td><input type="radio" name="q22" value="0" required></td>
                                     </tr>
                    
                                     <tr>
                                        <td>23</td>
                                        <td>To develop lesson plans for classes</td>
                                        <td><input type="radio" name="q23" value="1" required></td>
                                        <td><input type="radio" name="q23" value="0" required></td>
                                        <td><input type="radio" name="q23" value="0" required></td>
                                        <td><input type="radio" name="q23" value="0" required></td>
                                        <td><input type="radio" name="q23" value="0" required></td>
                                     </tr>
                    
                                     <tr>
                                        <td>24</td>
                                        <td>To help those who are dying/sick/depressed</td>
                                        <td><input type="radio" name="q24" value="1" required></td>
                                        <td><input type="radio" name="q24" value="0" required></td>
                                        <td><input type="radio" name="q24" value="0" required></td>
                                        <td><input type="radio" name="q24" value="0" required></td>
                                        <td><input type="radio" name="q24" value="0" required></td>
                                     </tr>
                    
                                        
                                              </tbody>
            
                                            </table>


                                <div class="login-buttons" align="center">
                                  <button class="btn btn-danger col">Cancel</button>
                                  <button class="btn btn-success col">Submit</button>
                                </div>
                               
                            </form>
                              </div>
                          </div>
                        
                        
                    </div>
                    <div class="col-md-1">
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