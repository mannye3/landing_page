<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="modinatheme">
    <!-- ======== Page title ============ -->
    <title>Onobello</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/logo35.jpg">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="assets/css/icons.css">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--  slick css plugins --> 
    <link rel="stylesheet" href="assets/css/slick.css">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- metis menu css file -->
    <link rel="stylesheet" href="assets/css/metismenu.css">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--  main style css file -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- template main style css file -->
    <link rel="stylesheet" href="style.css">
    
</head>

<body class="body-wrapper">    
    <!-- preloader -->
   

    <header class="header-1 style-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-2 col-sm-5 col-md-4 col-6">
                    
                    
                            <img src="assets/img/logo35.jpg">       
                      
                   
                </div>
                <div class="col-lg-10 text-end p-lg-0 d-none d-lg-flex justify-content-between align-items-center">
                    <div class="menu-wrap">
                        <div class="main-menu">
                            
                        </div>
                    </div>
                    <div class="header-right-element">
                        <a href="https://www.ubagroup.com/countries/ng/personalbanking/eproducts/mobile-banking" target="_blank"><img src="assets/img/234-x-60.gif"  alt="">  </a>
                    </div>
                </div>
                <div class="d-block d-lg-none col-sm-1 col-md-8 col-6">
                    <div class="mobile-nav-wrap">
                        <div id="hamburger"><i class="fal fa-bars"></i></div>
                        <!-- mobile menu - responsive menu  -->
                        <div class="mobile-nav">
                            <button type="button" class="close-nav">
                                <i class="fal fa-times-circle"></i>
                            </button>
                            <nav class="sidebar-nav">
                                <img src="assets/img/234-x-60.gif"  alt="xmoze"> 
                            </nav>
                        </div> 
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </header>

   <section class="content-block style-2 section-padding fw500">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mt-5 mt-xl-0 offset-xl-1 ps-xl-5">
                    <div class="block-contents">
                        <div class="section-title mb-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <center><h3>Website Under Construction</h3>
                             <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Subscribe to our newsletter</p></center>
                        </div>
                                                @if(Session::has('success')) 

                        <div class="alert alert-success"> 

                            {{ Session::get('success') }} 

                            @php 

                                Session::forget('success'); 

                            @endphp 

                        </div> 

                        @endif 
                          <form method="POST" action="{{ route('store') }}" class="contact-form">
                          {{ csrf_field() }} 
                       <div class="col-12">
                            <input value="{{ old('email') }}" type="text" name="email" placeholder="Email">
                            @if ($errors->has('email')) 

                        <span class="text-danger">{{ $errors->first('email') }}</span> 

                        @endif 
                        </div>
                        <div class="col-12">
                            <input   name="ima1" type="text" placeholder="I'm a">
                        </div>
                        <div class="col-12">
                            <input name="ima2" type="text" placeholder="I'm a">
                        </div>
                        <div class="col-12">
                         
                            <select name="intrestedin" class="form-control" placeholder="Intrested in">
                                <option value="" disabled selected>Intrested in</option>
                                 <option>option 1</option>
                                  <option>option 1</option>
                            </select>
                           
                        </div>
                          <div class="col-12">
                            <button class="theme-btn red-color" type="submit">subscribe to Newsletter</button>
                        </div>
                    </form>
                       
                    </div>
                </div>
                <div class="col-xl-5 pe-xl-0">
                    <div class="block-img">
                        <img src="assets/img/access.jpg" alt="">
                    </div>
                </div>
                
            </div>
        </div>
    </section>




    <!--  ALl JS Plugins
    ====================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imageload.min.js"></script>
    <script src="assets/js/scrollUp.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/metismenu.js"></script>
    <script src="assets/js/active.js"></script>
</body>


</html>