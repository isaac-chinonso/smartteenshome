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
                                        <td>25</td>
                                        <td>To prepare a press release</td>
                                        <td><input type="radio" name="q25" value="1" required></td>
                                        <td><input type="radio" name="q25" value="0" required></td>
                                        <td><input type="radio" name="q25" value="0" required></td>
                                        <td><input type="radio" name="q25" value="0" required></td>
                                        <td><input type="radio" name="q25" value="0" required></td>
                                     </tr>
                    
                                     <tr>
                                        <td>26</td>
                                        <td>To understand and observe the changes in weather patterns/animal migrations</td>
                                        <td><input type="radio" name="q26" value="1" required></td>
                                        <td><input type="radio" name="q26" value="0" required></></td>
                                        <td><input type="radio" name="q26" value="0" required></></td>
                                        <td><input type="radio" name="q26" value="0" required></></td>
                                        <td><input type="radio" name="q26" value="0" required></></td>
                                     </tr>
                    
                                     <tr>
                                        <td>27</td>
                                        <td>To help community during a natural disaster/emergency</td>
                                        <td><input type="radio" name="q27" value="1" required></></td>
                                        <td><input type="radio" name="q27" value="0" required></td>
                                        <td><input type="radio" name="q27" value="0" required></td>
                                        <td><input type="radio" name="q27" value="0" required></td>
                                        <td><input type="radio" name="q27" value="0" required></td>
                                     </tr>
                    
                                     <tr>
                                        <td>28</td>
                                        <td>To study ethics and philosophy</td>
                                        <td><input type="radio" name="q28" value="1" required></td>
                                        <td><input type="radio" name="q28" value="0" required></td>
                                        <td><input type="radio" name="q28" value="0" required></td>
                                        <td><input type="radio" name="q28" value="0" required></td>
                                        <td><input type="radio" name="q28" value="0" required></td>
                                     </tr>
                    
                                     <tr>
                                        <td>29</td>
                                        <td>To play an instrument/compose music on a computer</td>
                                        <td><input type="radio" name="q29" value="1" required></td>
                                        <td><input type="radio" name="q29" value="0" required></td>
                                        <td><input type="radio" name="q29" value="0" required></td>
                                        <td><input type="radio" name="q29" value="0" required></td>
                                        <td><input type="radio" name="q29" value="0" required></td>
                                     </tr>
                    
                                     <tr>
                                        <td>30</td>
                                        <td>To lead recreational activities</td>
                                        <td><input type="radio" name="q30" value="1" required></td>
                                        <td><input type="radio" name="q30" value="0" required></td>
                                        <td><input type="radio" name="q30" value="0" required></td>
                                        <td><input type="radio" name="q30" value="0" required></td>
                                        <td><input type="radio" name="q30" value="0" required></td>
                                     </tr>
                    
                                     <tr>
                                        <td>31</td>
                                        <td>To develop a website / software application</td>
                                        <td><input type="radio" name="q31" value="1" required></td>
                                        <td><input type="radio" name="q31" value="0" required></td>
                                        <td><input type="radio" name="q31" value="0" required></td>
                                        <td><input type="radio" name="q31" value="0" required></td>
                                        <td><input type="radio" name="q31" value="0" required></td>
                                     </tr>
                    
                                     <tr>
                                        <td>32</td>
                                        <td>To design a wedding cake</td>
                                        <td><input type="radio" name="q32" value="1" required></td>
                                        <td><input type="radio" name="q32" value="0" required></td>
                                        <td><input type="radio" name="q32" value="0" required></td>
                                        <td><input type="radio" name="q32" value="0" required></td>
                                        <td><input type="radio" name="q32" value="0" required></td>
                                     </tr>
                    
                                     <tr>
                                        <td>33</td>
                                        <td>To supervise, hire and mentor others</td>
                                        <td><input type="radio" name="q33" value="1" required></td>
                                        <td><input type="radio" name="q33" value="0" required></td>
                                        <td><input type="radio" name="q33" value="0" required></td>
                                        <td><input type="radio" name="q33" value="0" required></td>
                                        <td><input type="radio" name="q33" value="0" required></td>
                                     </tr>
                    
                                     <tr>
                                        <td>34</td>
                                        <td>To teach a large group “How to do”</td>
                                        <td><input type="radio" name="q34" value="1" required></td>
                                        <td><input type="radio" name="q34" value="0" required></td>
                                        <td><input type="radio" name="q34" value="0" required></td>
                                        <td><input type="radio" name="q34" value="0" required></td>
                                        <td><input type="radio" name="q34" value="0" required></td>
                                     </tr>
                    
                                     <tr>
                                        <td>35</td>
                                        <td>To observe, record and report a patient’s condition</td>
                                        <td><input type="radio" name="q35" value="1" required></td>
                                        <td><input type="radio" name="q35" value="0" required></td>
                                        <td><input type="radio" name="q35" value="0" required></td>
                                        <td><input type="radio" name="q35" value="0" required></td>
                                        <td><input type="radio" name="q35" value="0" required></td>
                                     </tr>
                    
                                     <tr>
                                        <td>36</td>
                                        <td>To read books and articles</td>
                                        <td><input type="radio" name="q36" value="1" required></td>
                                        <td><input type="radio" name="q36" value="0" required></td>
                                        <td><input type="radio" name="q36" value="0" required></td>
                                        <td><input type="radio" name="q36" value="0" required></td>
                                        <td><input type="radio" name="q36" value="0" required></td>
                                     </tr>
                    
                                     <tr>
                                        <td>37</td>
                                        <td>To analyze statistical data and patterns/trends</td>
                                        <td><input type="radio" name="q37" value="1" required></td>
                                        <td><input type="radio" name="q37" value="0" required></td>
                                        <td><input type="radio" name="q37" value="0" required></td>
                                        <td><input type="radio" name="q37" value="0"></td>
                                        <td><input type="radio" name="q37" value="0"></td>
                                     </tr>
                    
                                     <tr>
                                        <td>38</td>
                                        <td>To research environmental effects on wildlife</td>
                                        <td><input type="radio" name="q38" value="1"></td>
                                        <td><input type="radio" name="q38" value="0"></></td>
                                        <td><input type="radio" name="q38" value="0"></></td>
                                        <td><input type="radio" name="q38" value="0"></></td>
                                        <td><input type="radio" name="q38" value="0"></></td>
                                     </tr>
                    
                                     <tr>
                                        <td>39</td>
                                        <td>To ensure federal, state and local laws are obeyed</td>
                                        <td><input type="radio" name="q39" value="1"></></td>
                                        <td><input type="radio" name="q39" value="0"></td>
                                        <td><input type="radio" name="q39" value="0"></td>
                                        <td><input type="radio" name="q39" value="0"></td>
                                        <td><input type="radio" name="q39" value="0"></td>
                                     </tr>
                    
                                     <tr>
                                        <td>40</td>
                                        <td>To research into other cultures and religions</td>
                                        <td><input type="radio" name="q40" value="1"></td>
                                        <td><input type="radio" name="q40" value="0"></td>
                                        <td><input type="radio" name="q40" value="0"></td>
                                        <td><input type="radio" name="q40" value="0"></td>
                                        <td><input type="radio" name="q40" value="0"></td>
                                     </tr>
                    
                                     <tr>
                                        <td>41</td>
                                        <td>To work at a theater as a performer, stagehand/director</td>
                                        <td><input type="radio" name="q41" value="1"></td>
                                        <td><input type="radio" name="q41" value="0"></td>
                                        <td><input type="radio" name="q41" value="0"></td>
                                        <td><input type="radio" name="q41" value="0"></td>
                                        <td><input type="radio" name="q41" value="0"></td>
                                     </tr>
                    
                                     <tr>
                                        <td>42</td>
                                        <td>To advice people about healthy lifestyle habits</td>
                                        <td><input type="radio" name="q42" value="1"></td>
                                        <td><input type="radio" name="q42" value="0"></td>
                                        <td><input type="radio" name="q42" value="0"></td>
                                        <td><input type="radio" name="q42" value="0"></td>
                                        <td><input type="radio" name="q42" value="0"></td>
                                     </tr>
                    
                                     <tr>
                                        <td>43</td>
                                        <td>To use technology everyday</td>
                                        <td><input type="radio" name="q43" value="1"></td>
                                        <td><input type="radio" name="q43" value="0"></td>
                                        <td><input type="radio" name="q43" value="0"></td>
                                        <td><input type="radio" name="q43" value="0"></td>
                                        <td><input type="radio" name="q43" value="0"></td>
                                     </tr>
                    
                                     <tr>
                                        <td>44</td>
                                        <td>To work outside most of the time</td>
                                        <td><input type="radio" name="q44" value="1"></td>
                                        <td><input type="radio" name="q44" value="0"></td>
                                        <td><input type="radio" name="q44" value="0"></td>
                                        <td><input type="radio" name="q44" value="0"></td>
                                        <td><input type="radio" name="q44" value="0"></td>
                                     </tr>
                    
                                     <tr>
                                        <td>45</td>
                                        <td>To help those who are in need</td>
                                        <td><input type="radio" name="q45" value="1"></td>
                                        <td><input type="radio" name="q45" value="0"></td>
                                        <td><input type="radio" name="q45" value="0"></td>
                                        <td><input type="radio" name="q45" value="0"></td>
                                        <td><input type="radio" name="q45" value="0"></td>
                                     </tr>
                    
                                     <tr>
                                        <td>46</td>
                                        <td>To teach people new skills</td>
                                        <td><input type="radio" name="q46" value="1"></td>
                                        <td><input type="radio" name="q46" value="0"></td>
                                        <td><input type="radio" name="q46" value="0"></td>
                                        <td><input type="radio" name="q46" value="0"></td>
                                        <td><input type="radio" name="q46" value="0"></td>
                                     </tr>
                    
                                     <tr>
                                        <td>47</td>
                                        <td>To build/fix new things</td>
                                        <td><input type="radio" name="q47" value="1"></td>
                                        <td><input type="radio" name="q47" value="0"></td>
                                        <td><input type="radio" name="q47" value="0"></td>
                                        <td><input type="radio" name="q47" value="0"></td>
                                        <td><input type="radio" name="q47" value="0"></td>
                                     </tr>
                    
                                     <tr>
                                        <td>48</td>
                                        <td>To help a business meet financial goals</td>
                                        <td><input type="radio" name="q48" value="1" required></td>
                                        <td><input type="radio" name="q48" value="0" required></td>
                                        <td><input type="radio" name="q48" value="0" required></td>
                                        <td><input type="radio" name="q48" value="0" required></td>
                                        <td><input type="radio" name="q48" value="0" required></td>
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