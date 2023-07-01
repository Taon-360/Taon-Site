<!doctype html>
<html lang="en">
<?php include('components/head.php'); ?>

<body>

<?php include('components/preloader.php'); ?>

<?php include('components/nav.php'); ?>

<div class="social-media">
  <div class="layer"> </div>
  <!-- end layer -->
  <div class="inner">
    <h5>Social Share </h5>
    <ul>
      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
      <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
    </ul>
  </div>
</div>
<!-- end social-media -->
<div class="all-cases">
  <div class="layer"> </div>
  <!-- end layer -->
  <div class="inner">
    <ul>
      <li><a href="#">Darkness</a></li>
      <li><a href="#">Goddes</a></li>
      <li><a href="#">Employee</a></li>
      <li><a href="#">Berry</a></li>
      <li><a href="#">Roosters</a></li>
      <li><a href="#">Primero</a></li>
    </ul>
  </div>
  <!-- end inner --> 
</div>
<!-- end all-cases -->
<main>
  
<?php include('components/aside.php'); ?>

  <div class="all-cases-link"> <span>ALL CASES</span> <b>+</b> </div>
  <!-- end all-cases-link -->
  <header class="page-header">
  <div class="video-bg">
  	<video src="videos/video02.mp4" muted loop autoplay></video>
  </div>
  <!-- end video-bg -->
  <div class="inner">
  	<div class="container">
  		<h1>CONTACT</h1>
  		<p>We provide a free day to experience our benefits of digital world</p>
  	</div>
  	<!-- end container -->
  </div>
  <!-- end inner -->
  </header>
  <!-- end page-header -->
	 <section class="contact">
    <div class="container">
    	<div class="row">
    	<div class="col-lg-5">
    		<h3 class="section-title">SAY HELLO <br>TO REACH US</h3>
    	</div>
    	<!-- end col-5 -->
    	<div class="col-lg-4 col-md-6">
    		<h6>HEAD OFFICE</h6>
    		<address>
    			Boryssa Himry 124 B Block Pozniaky<br>
Kiev - UKRAINE
    		</address>
    	</div>
    	<!-- end col-4 -->
    	<div class="col-lg-3 col-md-6">
    		<h6>REACH US</h6>
    		<address>
    			<p>+38 02 237 24 21</p>
    			<a href="#">hello@tourog.com.ua</a>
    		</address>
    	</div>
    	<!-- end col-3 -->
    	<div class="col-lg-5">
    		 <div class="map">
    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325518.68780316407!2d30.252511957059642!3d50.4016990487754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNGX0LIsINCj0LrRgNCw0ZfQvdCwLCAwMjAwMA!5e0!3m2!1suk!2str!4v1555663203384!5m2!1suk!2str"></iframe>
    		</div>
    		<!-- end map -->
    	</div>
    	<!-- end col-5 -->
    	<div class="col-lg-7">
    		<div class="contact-form">
			 <form id="contact" name="contact" method="post">
          <div class="form-group">
            <input type="text" name="name" id="name" autocomplete="off" required>
             <span>Your name</span>
          </div>
          <!-- end form-group -->
          <div class="form-group"> 
            <input type="text" name="email" id="email" autocomplete="off" required>
            <span>Your e-mail</span>
          </div>
          <!-- end form-group -->
          <div class="form-group"> 
            <input type="text" name="subject" id="subject" autocomplete="off" required>
            <span>Subject</span>
          </div>
          <!-- end form-group -->
          <div class="form-group"> 
            <textarea name="message" id="message" autocomplete="off" required></textarea>
            <span>Your message</span>
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <button id="submit" type="submit" name="submit">
<strong>Submit Now<b></b> <i></i></strong>
         </button>
          </div>
          <!-- end form-group -->
        </form>
        <!-- end form --> 
         <div class="form-group">
          <div id="success" class="alert alert-success" role="alert"> Your message was sent successfully! We will be in touch as soon as we can. </div>
        <!-- end success -->
        <div id="error" class="alert alert-danger" role="alert"> Something went wrong, try refreshing and submitting the form again. </div>
        <!-- end error --> 
        </div>
        <!-- end form-group -->
        </div>
        <!-- end contact-form -->
    	</div>
    	<!-- col-7 -->
    	</div>
    	<!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end blog -->
</main>
<!-- end main -->
<?php include('components/footer.php'); ?>
</body>
</html>