

 @include("support.header")
<head>
    <style>
        
/* @import url('https://fonts.googleapis.com/css?family=Roboto'); */


h2{
  margin:0px;
  text-transform: uppercase;
}

h6{
  margin:0px;
  color:#777;
}

.wrapper_navbar{
  text-align:center;
  margin:20px auto;
  position:fixed;
  top : 10px !important;
left: 50%;
width:100%;
transform: translateX(-50%);
  z-index:10000;
}

.tabs{
  margin-top:50px;
  font-size:15px;
  padding:0px;
  list-style:none;
  background:#fff;
  box-shadow:0px 5px 20px rgba(0,0,0,0.1);
  display:inline-block;
  border-radius:50px;
  position:relative;
}

.tabs a{
  text-decoration:none;
  color: #777;
  text-transform:uppercase;
  padding:10px 20px;
  display:inline-block;
  position:relative;
  z-index:1;
  transition-duration:0.6s;
}

.tabs a.active{
  color:#fff;
}

.tabs a i{
  margin-right:5px;
}

.tabs .selector{
  height:100%;
  display:inline-block;
  position:absolute;
  left:0px;
  top:0px;
  z-index:1;
  border-radius:50px;
  transition-duration:0.6s;
  transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
  
  background: #05abe0;
  background: -moz-linear-gradient(45deg, #936737 0%, #3d2610 100%);
  background: -webkit-linear-gradient(45deg, #936737 0%,#3d2610 100%);
  background: linear-gradient(45deg, #936737 0%,#3d2610 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#936737', endColorstr='#3d2610',GradientType=1 );
}

.btn-primary {
  color: #000;
  background-color: #8d4924;
  border-color: transparent !important;
}
.btn-primary:hover{
    
      background-color: #753816;
}
.carousel-caption{
     background-color: #02020288;
    
}

.facilities-item:hover  {
  background: #a6833d !important;
  color:white !important;

  
}

.facilities-item:hover h5  {
  /* background: #a6833d !important; */
  color:white !important;

  
}
.facilities-item {
 border-radius : 10px !important;
}
.facilities-item:hover {
 transition: .5s;
}


    </style>
</head>


 
<body>
        <div class="container-fluid bg-dark px-0" style = "position:fixed; display:none;">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+012 345 6789</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.html" class="nav-item nav-link active">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="service.html" class="nav-item nav-link">Services</a>
                                <a href="room.html" class="nav-item nav-link">Rooms</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="booking.html" class="dropdown-item">Booking</a>
                                        <a href="team.html" class="dropdown-item">Our Team</a>
                                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    </div>
                                </div>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            <a href="https://htmlcodex.com/hotel-html-template-pro" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Premium Version<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        @include("support.menu")
        <!-- Header End -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5" style = "z-index:7;" id = "thetops">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style = "margin-top:-120px;">
                        <img class="w-100" src="img/carousel/carousel-2.jpg" alt="Image" >
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">San Sui Hotel</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown" style= "font-family: 'the_seasons_regular';">Your <span class = "seasons_italic">S</span>anctuary of <span class = "seasons_italic">S</span>implicity</h1>
                                <a href="" id  class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft " id = "togglenavbar1">Our Rooms</a>
                                {{-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style = "margin-top:-120px;">
                        <img class="w-100" src="img/carousel/carousel-3.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                             <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">San Sui Hotel</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown" style= "font-family: 'the_seasons_regular';">Your <span class = "seasons_italic">S</span>anctuary of <span class = "seasons_italic">S</span>implicity</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft " id = "togglenavbar2">Our Rooms</a>
                                {{-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a> --}}
                            </div>
                        </div>
                    </div>
                     <div class="carousel-item" style = "margin-top:-120px;">
                        <img class="w-100" src="img/carousel/carousel-4.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                             <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">San Sui Hotel</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown" style= "font-family: 'the_seasons_regular';">Your <span class = "seasons_italic">S</span>anctuary of <span class = "seasons_italic">S</span>implicity</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft " id = "togglenavbar2">Our Rooms</a>
                                {{-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s" style = "z-index:7;" id = "togglenavbars">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" id = "text_date1" class="form-control datetimepicker-input"
                                            placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" />
                                            
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" id = "text_date2" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" id = "jumlah_dewasa">
                                        <option selected>Adult</option>
                                        <option value="1">Adult 1</option>
                                        <option value="2">Adult 2</option>
                                        <option value="3">Adult 3</option>
                                        <option value="2">Adult 4</option>
                                        <option value="3">Adult 5</option>
                                        <option value="2">Adult 6</option>
                                        <option value="3">Adult 7</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" id = "jumlah_anak">
                                        <option selected>Child</option>
                                        <option value="1">Child 1</option>
                                        <option value="2">Child 2</option>
                                        <option value="3">Child 3</option>
                                        <option value="1">Child 4</option>
                                        <option value="2">Child 5</option>
                                        <option value="3">Child 6</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100" id = "check_kamar">Cek Kamar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->


        <!-- About Start -->
        <div class="container-xxl py-5" id = "theabout">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        {{-- <h6 class="section-title text-start text-primary text-uppercase">About Us</h6> --}}
                        <h1 class="mb-4 seasons_regular"><span class="seasons_italic">W</span>elcome to <br><span class="text-primary text-uppercase warna_utama" style = "font-size:60px;">San Sui </span> Hotel</h1>
                        <p class="mb-4" style = "text-align:justify;">Menginap di San Sui Hotel akan memberikan pengalaman berbeda. Setelah sibuk dengan hiruk pikuk kota, Hotel San Sui adalah penginapan budget-friendly yang mengadirkan suasana yang tenang, udara sejuk, dan lokasi yang strategis di Raya Pasir Putih</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary warna_kedua mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">50</h2>
                                        <p class="mb-0">Rooms</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary warna_kedua mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">3</h2>
                                        <p class="mb-0">Functional Hall</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary warna_kedua mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">10.000</h2>
                                        <p class="mb-0">Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about/about1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about/about2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about/about3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about/about4.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Room Start -->
        <div class="container-xxl py-5" id = "therooms">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    {{-- <h6 class="section-title text-center  text-uppercase warna_kedua"></h6> --}}
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase warna_utama">Rooms</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('img/kamar/standard_1.jpg')}}" alt="">
                                {{-- <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4 background_kedua">IDR 80 / Malam</small> --}}
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Standard Room</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">
                                <ul>
                                <li>King / Twin Bed</li>
                                <li>Meja Rias</li>
                                <li>Hot Shower</li>
                                <li>Dan lain lain</li>
                                </ul></p>
                                <p style = "width:100%; text-align:right; font-size:1.2em; color:#1e1e1e !important;">IDR 180.000 / Malam</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm  rounded py-2 px-4" style = "color:black;text-decoration:underline;" href="">View Detail</a>
                                    <a class="btn btn-sm  rounded btn-dark py-2 px-4" style = "border:0px;border-radius : 20px !important;" href="">Book Now <i class = "fa fa-calendar"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('img/kamar/twin_1.jpg')}}" alt="">
                                {{-- <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4 background_kedua" >IDR 220k / Malam</small> --}}
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Superior Room</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                  <ul>
                                <li>Bed</li>
                                <li>Meja Rias</li>
                                <li>Hot Shower</li>
                                <li>Dan lain lain</li>
                                </ul></p>                             <p style = "width:100%; text-align:right; font-size:1.2em; color:#1e1e1e !important;">IDR 220.000 / Malam</p>
                               <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm  rounded py-2 px-4" style = "color:black;text-decoration:underline;" href="">View Detail</a>
                                    <a class="btn btn-sm  rounded btn-dark py-2 px-4" style = "border:0px;border-radius : 20px !important;" href="">Book Now <i class = "fa fa-calendar"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('img/kamar/twin_1.jpg')}}" alt="">
                                {{-- <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4 background_kedua">IDR 250k / Malam</small> --}}
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Deluxe Room</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary "></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                 <p class="text-body mb-3">
                                <ul>
                                <li>Twin Bed</li>
                                <li>Wardrobe</li>
                                <li>Meja Rias</li>
                                <li>Dan lain lain</li>
                                </ul></p>                                    <p style = "width:100%; text-align:right; font-size:1.2em; color:#1e1e1e !important;">IDR 250.000 / Malam</p>
                              <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm  rounded py-2 px-4" style = "color:black;text-decoration:underline;" href="">View Detail</a>
                                    <a class="btn btn-sm  rounded btn-dark py-2 px-4" style = "border:0px;border-radius : 20px !important;" href="">Book Now <i class = "fa fa-calendar"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                       <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('img/kamar/suite1.jpg')}}" alt="">
                                {{-- <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4 background_kedua">IDR 510k / Malam</small> --}}
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Family Suites </h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary "></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">
                                <ul>
                                <li>2 Bedroom AC</li>
                                <li>Dapur </li>
                                <li>Meja Makan</li>
                                <li>Dan lain lain</li>
                                </ul></p>                                 <p style = "width:100%; text-align:right; font-size:1.2em; color:#1e1e1e !important;">IDR 510.000 / Malam</p>
                              <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm  rounded py-2 px-4" style = "color:black;text-decoration:underline;" href="">View Detail</a>
                                    <a class="btn btn-sm  rounded btn-dark py-2 px-4" style = "border:0px;border-radius : 20px !important;" href="">Book Now <i class = "fa fa-calendar"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room End -->


        <!-- Video Start -->
        <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6 bg-dark background_kedua d-flex align-items-center">
                    <div class="p-5">
                        <h6 class="section-title text-start text-white text-uppercase mb-3">San Sui Hotel</h6>
                        {{-- <h1 class="text-white mb-4">Your Sanctuary of Simplicity</h1> --}}
                        <h1 class="display-3 text-white mb-4 animated slideInDown" style= "font-family: 'the_seasons_regular';font-size:40px;"> <span class = "seasons_italic">B</span>aramundi <span class = "seasons_italic">R</span>esto</h1>

                        <p class="text-white mb-4">Nikmati restaurant seafood kami di Barramundi Restaurant. Dengan akses ke pantai, menjadikan staycation anda lengkap dan kenyang.</p>
                        <a href="https://wa.me/6281215866788?text=Saya mau tanya tanya untuk baramundi resto." target="_blank"  class="btn btn-primary py-md-3 px-md-5 me-3">Reservasi</a>
                        {{-- <a href="" class="btn btn-light py-md-3 px-md-5">Contact Admin</a> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div> --}}
                    <img src = "{{asset('img/foto_resto/resto.jpg')}}" style = 'height:700px;width:100%;'>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Start -->


        <!-- Service Start -->
        <div class="container-xxl py-5" id = "thefacility">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-2">Explore Our <span class="text-primary warna_utama text-uppercase">Services</span></h1>
                </div>
                {{-- <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp"  data-wow-delay="0.1s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">

                                
                        
                            </div>
                            <img class="img-fluid" src="{{asset('img/fasilities/facitilies1.jpg')}}" style = "height:200px;width:100%;" alt="">

                               <h5 class="mb-3">Live Seafood Restaurant</h5>
                         
                            <p class="text-body mb-0">rumah makan seafood berkualitas, menyajikan hidangan mulai dari ikan hidup seperti kerapu, kakap, gurami, kepiting, dan masih banyak lagi,  berada tepat di depan hotel, dengan akses pantai
                          </p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-tint fa-2x text-primary warna_kedua"></i>
                                </div>
                            </div>
                               <h5 class="mb-3">Akses Pantai</h5>
                       
                            <p class="text-body mb-0">1 menit dari hotel / restaurant menuju Beach Forest Situbondo
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-spa fa-2x text-primary warna_kedua"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Free Parking & Wifi</h5>
                            <p class="text-body mb-0">lahan parkir yang sangat luas, dan area hotel dengan akses wifi
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-wifi fa-2x text-primary warna_kedua"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Kampung Kerapu</h5>
                            <p class="text-body mb-0">Destinasi eko wisata di Situbondo yang berfokus pada pengembangbiakan dan konservasi ikan kearpu. Nikmati wahana air, jogging track, dermaga, dan budaya nelayan</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-dumbbell fa-2x text-primary warna_kedua"></i>
                                </div>
                            </div>
                              <h5 class="mb-3">Baluran National Park
                            </h5>
                            <p class="text-body mb-0">Wisata alam yang sangat populer di Situbondo. Terkenal dengan ekosistem savana luas. Sering disebut “Africa van Java” cukup ditempuh 2 jam dari hotel 
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-suitcase fa-2x text-primary warna_kedua"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Grand Hall & Meeting Room</h5>
                            <p class="text-body mb-0">Memilik Hall yang sering dijadikan event seminar, workshop, pernikahan, dan acara lainnya
                            </p>
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- Service End -->

           <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                {{-- <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Hotel</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Facilities</span></h1>
                </div> --}}
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facilities-item rounded shadow overflow-hidden" style = "min-height:505px !important;" >
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('img/fasilities/facitilies1.jpg')}}" style = "height:200px;width:100%;" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    {{-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> --}}
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class=" mb-0">Free parking & wifi</h5>
                                <small><br>lahan parkir yang sangat luas, dan area hotel dengan akses wifi</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class=" facilities-item rounded shadow overflow-hidden" style = "min-height:480px !important;" >
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('img/fasilities/facitilies2.jpg')}}" style = "height:200px;width:100%;" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    {{-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> --}}
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class=" mb-0">live seafood restaurant
</h5>
                                <small><br>rumah makan seafood berkualitas, menyajikan hidangan mulai dari ikan hidup seperti kerapu, kakap, gurami, kepiting, dan masih banyak lagi,  berada tepat di depan hotel, dengan akses pantai</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facilities-item rounded shadow overflow-hidden" style = "min-height:505px !important;" >
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('img/fasilities/facitilies3.jpg')}}" style = "height:200px;width:100%;" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    {{-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> --}}
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Akses Pantai 
</h5>
                                <small><br>1 menit dari hotel / restaurant menuju Beach Forest Situbondo</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facilities-item rounded shadow overflow-hidden" style = "min-height:505px !important;" >
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('img/fasilities/facitilies4.jpg')}}" style = "height:200px;width:100%;" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    {{-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> --}}
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class=" mb-0">Grand Hall & Meeting Room
</h5>
                                <small><br>Memilik Hall yang sering dijadikan event seminar, workshop, pernikahan, dan acara lainnya</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facilities-item rounded shadow overflow-hidden" style = "min-height:505px !important;" >
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('img/fasilities/facitilies5.jpg')}}" style = "height:200px;width:100%;" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    {{-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> --}}
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class=" mb-0">Baluran National Park

</h5>
                                <small><br>Wisata alam yang sangat populer di Situbondo. Terkenal dengan ekosistem savana luas. Sering disebut “Africa van Java” cukup ditempuh 2 jam dari hotel </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facilities-item rounded shadow overflow-hidden" style = "min-height:505px !important;" >
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('img/fasilities/facitilies6.jpg')}}" style = "height:200px;width:100%;" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    {{-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> --}}
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="f mb-0 ">Kampung Kerapu

</h5>
                                <small><br>Destinasi eko wisata di Situbondo yang berfokus pada pengembangbiakan dan konservasi ikan kerapu. Nikmati wahana air, jogging track, dermaga, dan budaya nelayan</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary warna_kedua position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary warna_kedua position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary warna_kedua position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                </div>
            </div>
        </div>

        
        
        <!-- Testimonial End -->
        <div class = "section_end" style = "margin-bottom:70px;">.</div>

     


        <!-- Newsletter Start -->
        {{-- <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Newsletter Start -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn background_utama" id = "thefooter" data-wow-delay="0.1s">
            <div class="container pb-5" style = "font-size:0.9em;">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4" style = "background-color:transparent !important; text-align:center;">
                            
                            <img src = "{{asset('img/logo/logo.png')}}" style = "width:150px;height:150px;">
                            {{-- <a href="index.html"><h1 class="text-white text-uppercase seasons_regular mb-3">San Sui Hotel</h1></a> --}}
                            {{-- <p class="text-white mb-0">
								Download <a class="text-dark fw-medium" href="https://htmlcodex.com/hotel-html-template-pro">Hotelier – Premium Version</a>, build a professional website for your hotel business and grab the attention of new visitors upon your site’s launch.
							</p> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl Raya Pasir Putih, Gundit, Klatakan, Kec. Kendit, Kab. Situbondo, Jawa Timur.68352</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>081-336-666-660</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>sansui.situbondo@gmail.com</p>
                        <div class="d-flex pt-2">
                            {{-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                                <a class="btn btn-link" href="#thetops">Home</a>
                                <a class="btn btn-link" href="#therooms">Kamar</a>
                                <a class="btn btn-link" href="#thefacility">Fasilitas</a>
                                <a class="btn btn-link" href="#theabout">Tentang Kami</a>
                                <a class="btn btn-link" href="#thetops">Hubungi Kami</a>
                            </div>
                            {{-- <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                                <a class="btn btn-link" href="">Food & Restaurant</a>
                                <a class="btn btn-link" href="">Spa & Fitness</a>
                                <a class="btn btn-link" href="">Sports & Gaming</a>
                                <a class="btn btn-link" href="">Event & Party</a>
                                <a class="btn btn-link" href="">GYM & Yoga</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">San Sui Hotel</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							{{-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> --}}
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" id = "logo_wa" class="btn btn-lg btn-primary btn-lg-square back-to-top" style = "background:transparent;"> <img src = "{{asset('img/logo/logo_wa.png')}}" style = "width:75px;height:55px;"></a>
    </div>

 @include("support.footer")

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Show a second modal and hide this one with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>
{{-- <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a> --}}

 <script>
    var tabs = $('.tabs');
var selector = $('.tabs').find('a').length;
//var selector = $(".tabs").find(".selector");
var activeItem = tabs.find('.active');
var activeWidth = activeItem.innerWidth();
$(".selector").css({
  "left": activeItem.position.left + "px", 
  "width": activeWidth + "px"
});

$(".tabs").on("click","a",function(e){
  e.preventDefault();
  $('.tabs a').removeClass("active");
  $(this).addClass('active');
  var activeWidth = $(this).innerWidth();
  var itemPos = $(this).position();
  $(".selector").css({
    "left":itemPos.left + "px", 
    "width": activeWidth + "px"
  });
});
$(function () {
                $('#date1').datetimepicker({
                    // format: 'L',
                    format: 'DD MMM YYYY',
                    // Default: 'MMMM YYYY'
                });
            });

            $(function () {
                $('#date2').datetimepicker({
                    // format: 'L',
                    format: 'DD MMM YYYY',
                    // Default: 'MMMM YYYY'
                });
            });

            $("#check_kamar").click(function (e) { 
                e.preventDefault();
                
                var date1 = $("#text_date1").val();
                var date2 = $("#text_date2").val();
                var jumlahdewasa = $("#jumlah_dewasa").val();
                var jumlahanak = $("#jumlah_anak").val();
                var message = "Halo San Sui Hotel, Saya dapatkan infonya dari website, saya mau cek untuk ketersediaan kamar pada tanggal *" + date1 + "* , check out tanggal *" + date2 + "*, Dengan Jumlah Dewasa *" + jumlahdewasa + "* orang, Jumlah anak anak *"+ jumlahanak + "* orang";
                var wa_link = "https://wa.me/6281357610403?text="+message;
                 window.open(wa_link, '_blank');
                // alert(wa_link);
            });

               $("#logo_wa").click(function (e) { 
                e.preventDefault();
                
                var date1 = $("#text_date1").val();
                var date2 = $("#text_date2").val();
                var jumlahdewasa = $("#jumlah_dewasa").val();
                var jumlahanak = $("#jumlah_anak").val();
                var message = "Halo San Sui Hotel, Saya dapatkan infonya dari website, saya mau tanya tanya tentang hotelnya";
                var wa_link = "https://wa.me/6281357610403?text="+message;
                 window.open(wa_link, '_blank');
                // alert(wa_link);
            });


            
            window.addEventListener("scroll", () => {
          
      let scrollPos = $(window).scrollTop();
      let targetPos = $("#togglenavbars").offset().top;

     if (scrollPos >= targetPos) {
        $("#navs").addClass("show");
      } else {
        $("#navs").removeClass("show");
      }
    });

     $("#navs a").on("click", function(e) {
        e.preventDefault(); // cegah behaviour default (langsung loncat)

        let target = $(this).attr("href"); // ambil href (#id)
        $("html, body").animate({
          scrollTop: $(target).offset().top - $("#navs").outerHeight()
        }, 700); // 700ms durasi animasi
      });
// $('.datetimepicker-input').datepicker({
//     format: 'dd/mm/yyyy'
//  });
 </script>