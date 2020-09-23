  <?php 
  include_once("./includes/header.php");

  ?>
 
 

 

  <center>

<section class="our_team_wrap wow fadeInUp ">
  <div class="container">
    <p class="  text-center subscribe-header pb-3 text-white">Subscribe below to know when a new project is available</p>
 
    <div class="row border d-lg-block d-none" style="width: 70%">
 <nav class=" col-lg-12 col-md-12 shadow">
  <div class="nav nav-tabs row border-0" id="nav-tab" role="tablist">
    <a class="nav-link active col-lg-4  text-center text-log" id="nav-login-tab" data-toggle="tab" href="#login-nav" role="tab" aria-controls="nav-home" aria-selected="true" style="font-szie: 15px; font-weight: 500;  color: #000">Login</a>
    <a class="nav-link col-lg-4 text-center text-log" id="nav-signup-tab" data-toggle="tab" href="#signup-nav" role="tab" aria-controls="nav-profile" aria-selected="false" style="font-szie: 15px; font-weight: 400; color: #000">Sign Up</a>
    <a class="nav-link col-lg-4 text-center text-log" id="nav-forgot-tab" data-toggle="tab" href="#forgot-nav" role="tab" aria-controls="nav-contact" aria-selected="false" style="font-szie: 15px; font-weight: 400;  color: #000">Forgot Password?</a>
  </div>
</nav>
  
<div class="tab-content col-lg-12 border-0" id="nav-tabContent">
  <div class="tab-pane fade show active border-0" id="login-nav" role="tabpanel" aria-labelledby="nav-login-tab">
      <div class="row">
        <div class="col-md-4 image-house  align-center bg-light" >
          <img src="images/house.svg" alt="home" class="img-fluid align-middle" width="50%" style="padding-top: 60%"/>
        </div>
        <div class="col-lg-8 border-0 bg-white">
          <div class="row">
            <div class="col-lg-12">
            <p class="boarding pt-5 text-left font-weight-bold ml-3" style="color:#272a69">Welcome Back Onboard </p>

            <h6 class="boarding-second text-left ml-3" style="font-weight:400;">Please, login to continue your journey.</h6>
              <form class="ml-auto border-0">
   <div class="form-group  border-0">
    <label for="inputPassword" class="col-sm-12 col-form-label text-left ml-auto" style="font-size:14px">Email</label>
    <div class="col-sm-12" style="padding-right: 30%">
      <input type="Email" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-12 col-form-label text-left" style="font-size:14px">Password</label>
    <div class="col-sm-12" style="padding-right: 30%">
      <input type="password" class="form-control" id="inputPassword" required>
    </div>
  </div>
    <div class="form-group py-3">
    <div class="text-left ml-3 ">
     <button class="account-btn"style="width: 40%">LOGIN</button>
    </div>
  </div>
</form>
            </div>
          </div>
        </div>
    </div>
    </div>
  <div class="tab-pane fade" id="signup-nav" role="tabpanel" aria-labelledby="nav-signup-tab">
  <div class="row">
        
        <div class="col-lg-8 border-0 bg-white">
          <div class="row">
            <div class="col-lg-12">
            <p class="boarding pt-5 text-left font-weight-bold ml-3  " style="color:#272a69">Sign Up Now </p>

            <h6 class="boarding-second text-left ml-3  " style="font-weight:400;">Please, register to start your journey.</h6>
              <form class="ml-auto border-0">
   <div class="form-group  border-0">
    <label for="inputPassword" class="col-sm-12 col-form-label text-left ml-auto" style="font-size:14px">First Name</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword">
    </div>
  </div>
   <div class="form-group  border-0">
    <label for="inputPassword" class="col-sm-12 col-form-label text-left ml-auto" style="font-size:14px">Last Name</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword">
    </div>
  </div>
   <div class="form-group  border-0">
    <label for="inputPassword" class="col-sm-12 col-form-label text-left ml-auto" style="font-size:14px">Email</label>
    <div class="col-sm-12">
      <input type="Email" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-12 col-form-label text-left" style="font-size:14px">Password</label>
    <div class="col-sm-12">
      <input type="password" class="form-control" id="inputPassword" required>
    </div>
  </div>
    <div class="form-group py-3">
    <div class="  text-left ml-3">
     <button class="account-btn"style="width: 40%">SIGN UP </button>
    </div>
  </div>
</form>
            </div>
          </div>
        </div>
        <div class="col-md-4 image-house  align-center bg-light">
          <img src="images/sign.svg" alt="home" class="img-fluid align-middle" width="50%" style="padding-top: 60%"/>
        </div>
    </div>
    </div>
  <div class="tab-pane fade" id="forgot-nav" role="tabpanel" aria-labelledby="nav-forgot-tab">
    <div class="row">
        
        <div class="col-lg-12 border-0 bg-white">
          <div class="row">
              <div class="col-lg-4 bg-light ">
          <img src="images/key.svg" alt="home" class="img-fluid align-middle" width="50%" style="padding-top: 60%"/>
             
            </div>
            <div class="col-lg-8">
            <p class="boarding pt-5 text-left font-weight-bold ml-3" style="color:#272a69">Password Reset</p>
                        <h6 class="boarding-second text-left ml-3  " style="font-weight:400;">Please, enter your email below.</h6>


              <form class="ml-auto border-0">
   <div class="form-group  border-0">
    <label for="inputPassword" class="col-sm-12 col-form-label text-left ml-auto" style="font-size:14px">Email</label>
    <div class="col-sm-12">
      <input type="Email" class="form-control" id="inputPassword"   >
    </div>
  </div>
 
    <div class="form-group py-3">
    <div class=" text-left  ml-3" >
     <button class="account-btn"style="width: 40%">SEND RESET LINK</button>
    </div>
  </div>
</form>
            </div>
          </div>
        </div>
        
    </div>
  </div>

    
  </div>
    </div>
    <!-- mobile devices -->
        <div class="row border d-lg-none d-md-block" style="width: 100%">
 <nav class=" col-lg-12 col-md-12 shadow">
  <div class="nav nav-tabs row border" id="nav-tab" role="tablist">
    <a class="nav-link active   col-2 float-left  border  " id="nav-login-tab" data-toggle="tab" href="#login-nav" role="tab" aria-controls="nav-home" aria-selected="true" style="font-szie: 15px; font-weight: 500;  color: #000">Login</a>
    <a class="nav-link col-4  border " id="nav-signup-tab" data-toggle="tab" href="#signup-nav" role="tab" aria-controls="nav-profile" aria-selected="false" style="font-szie: 15px; font-weight: 400; color: #000">Sign Up</a>
    <a class="nav-link col-6  border " id="nav-forgot-tab" data-toggle="tab" href="#forgot-nav" role="tab" aria-controls="nav-contact" aria-selected="false" style="font-szie: 15px; font-weight: 400;  color: #000">Forgot Password?</a>
  </div>
</nav>
  
<div class="tab-content col-lg-12 border-0" id="nav-tabContent">
  <div class="tab-pane fade show active border-0" id="login-nav" role="tabpanel" aria-labelledby="nav-login-tab">
      <div class="row">
        <div class="col-md-12  text-left">
          <img src="images/house.svg" alt="home" class="img-fluid  py-2  " width="20%" style="padding-top: 10%"/>
        </div>
        <div class="col-lg-8 border-0 bg-white">
          <div class="row">
            <div class="col-lg-12">
            <p class="boarding pt-5 text-left font-weight-bold ml-3" style="color:#272a69">Welcome Back Onboard </p>

            <h6 class="boarding-second text-left ml-3" style="font-weight:400;">Please, login to continue your journey.</h6>
              <form class="ml-auto border-0">
   <div class="form-group  border-0">
    <label for="inputPassword" class="col-sm-12 col-form-label text-left ml-auto" style="font-size:14px">Email</label>
    <div class="col-sm-12" style="padding-right: 30%">
      <input type="Email" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-12 col-form-label text-left" style="font-size:14px">Password</label>
    <div class="col-sm-12" style="padding-right: 30%">
      <input type="password" class="form-control" id="inputPassword" required>
    </div>
  </div>
    <div class="form-group py-3">
    <div class="text-left ml-3 ">
     <button class="account-btn"style="width: 40%">LOGIN</button>
    </div>
  </div>
</form>
            </div>
          </div>
        </div>
    </div>
    </div>
  <div class="tab-pane fade" id="signup-nav" role="tabpanel" aria-labelledby="nav-signup-tab">
  <div class="row">
        
        <div class="col-lg-8 border-0 bg-white">
          <div class="row">
            <div class="col-lg-12">
            <p class="boarding pt-5 text-left font-weight-bold ml-3  " style="color:#272a69">Sign Up Now </p>

            <h6 class="boarding-second text-left ml-3  " style="font-weight:400;">Please, register to start your journey.</h6>
              <form class="ml-auto border-0">
   <div class="form-group  border-0">
    <label for="inputPassword" class="col-sm-12 col-form-label text-left ml-auto" style="font-size:14px">First Name</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword">
    </div>
  </div>
   <div class="form-group  border-0">
    <label for="inputPassword" class="col-sm-12 col-form-label text-left ml-auto" style="font-size:14px">Last Name</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword">
    </div>
  </div>
   <div class="form-group  border-0">
    <label for="inputPassword" class="col-sm-12 col-form-label text-left ml-auto" style="font-size:14px">Email</label>
    <div class="col-sm-12">
      <input type="Email" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-12 col-form-label text-left" style="font-size:14px">Password</label>
    <div class="col-sm-12">
      <input type="password" class="form-control" id="inputPassword" required>
    </div>
  </div>
    <div class="form-group py-3">
    <div class="  text-left ml-3">
     <button class="account-btn"style="width: 40%">SIGN UP </button>
    </div>
  </div>
</form>
            </div>
          </div>
        </div>
        <div class="col-md-4 image-house  align-center bg-light">
          <img src="images/sign.svg" alt="home" class="img-fluid align-middle" width="50%" style="padding-top: 60%"/>
        </div>
    </div>
    </div>
  <div class="tab-pane fade" id="forgot-nav" role="tabpanel" aria-labelledby="nav-forgot-tab">
    <div class="row">
        
        <div class="col-lg-12 border-0 bg-white">
          <div class="row">
              <div class="col-lg-4 bg-light ">
          <img src="images/key.svg" alt="home" class="img-fluid align-middle" width="50%" style="padding-top: 60%"/>
             
            </div>
            <div class="col-lg-8">
            <p class="boarding pt-5 text-left font-weight-bold ml-3" style="color:#272a69">Password Reset</p>
                        <h6 class="boarding-second text-left ml-3  " style="font-weight:400;">Please, enter your email below.</h6>


              <form class="ml-auto border-0">
   <div class="form-group  border-0">
    <label for="inputPassword" class="col-sm-12 col-form-label text-left ml-auto" style="font-size:14px">Email</label>
    <div class="col-sm-12">
      <input type="Email" class="form-control" id="inputPassword"   >
    </div>
  </div>
 
    <div class="form-group py-3">
    <div class=" text-left  ml-3" >
     <button class="account-btn"style="width: 40%">SEND RESET LINK</button>
    </div>
  </div>
</form>
            </div>
          </div>
        </div>
        
    </div>
  </div>

    
  </div>
    </div>
  </div>
</section>
      
  </center>
 <?php 
  include_once('./includes/footer.php')

  ?>

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="js/jquery.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="js/owl.carousel.js"></script> 
<!-- wow js --> 
<script src="js/animate.js"></script> 
<script src="js/jquery.nice-select.js"></script> 
<script>
  new WOW().init();
</script> 
<!-- general script file --> 
<script src="js/wow.js"></script> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from malikhassan.com/html/evernest/index_video.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Sep 2020 19:28:16 GMT -->
</html>