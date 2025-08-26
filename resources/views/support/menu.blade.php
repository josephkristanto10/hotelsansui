  <div class="container-fluid px-0" id = "navs" style = "background-color:#a6833d !important; position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      padding: 7px;
      background: rgba(0,0,0,0.8);
      height:fit-content;
      text-align: center;
     
      transition: transform 0.3s ease-in-out;
      z-index: 999;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <div class="row gx-0">
                <div class="col-lg-3  d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        {{-- <h1 class="m-0 text-primary text-uppercase">San Sui Hotel</h1> --}}
                        <h1 class=" animated slideInDown" style= "font-size:30px; color:white;; font-family: 'the_seasons_regular';"><img src = "{{asset('img/logo/logo_header.png')}}" style = "height:70px;"></h1> 
                    </a>
                </div>
                <div class="col-lg-9">
                   
                    <nav class="navbar navbar-expand-lg  navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0" style="margin-left: auto;">
                                <a href="#thetops" class="nav-item nav-link active">Home</a>
                                <a href="#therooms" class="nav-item nav-link">Kamar</a>
                                <a href="#thefacility" class="nav-item nav-link">Fasilitas</a>
                                <a href="#theabout" class="nav-item nav-link">Tentang Kami</a>
                                {{-- <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="booking.html" class="dropdown-item">Booking</a>
                                        <a href="team.html" class="dropdown-item">Our Team</a>
                                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    </div>
                                </div> --}}
                                <a href="#thefooter" class="nav-item nav-link">Hubungi Kami</a>
                                   <a  class="nav-item nav-link notranslate" id = "gantibahasa" onclick = "gantibahasaclick()" >EN / IND</a>
                            </div>
                            {{-- <a href="https://htmlcodex.com/hotel-html-template-pro" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Premium Version<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </nav>
                </div>
            </div>
        </div>