<!-- Header Start -->

<?php include 'header.php';?>
<!-- Header End -->

      <!-- slide image Start
       coded by :  k sai kumar
       Date : 09-10-2020
      -->

 <!-- Hero Area Start -->
 <style type="text/css">
  p, h2{
    font-family: HKGroteskPro,serif;

   }
   p{
    font-size: 15px;
   }
 </style>
<div id="hero-area" class="hero-area-bg">
        <div class="container">
          <div class="row mt-5">
            <div class="col-sm-12 mt-5"></div>
          </div>
            <div class="row">
              <div class="text-left wow fadeInUp col-sm-6">
                <h2 class="mt-5">START CAREER </h2>
                <h2>for your new life</h2><br>
                <p class="font-size-lg text-muted mb-6">Personalized lessons with live teachers.<br>
                In-person or online.</p><br><br>
                <button type="button" class="btn btn-primary ">Trail class <i class="fa fa-arrow-right"></i></button>
                <button type="button" class="btn btn-success">Details <i class="fa fa-arrow-right"></i></button>
              </div>
              <div class="img-thumb text-center wow fadeInUp col-sm-6" data-wow-delay="0.6s">
                <!--<img class="img-fluid banner" src="assets/img/banner.jpg" alt="">-->
              </div>
              
            </div>
            </div>
      </div>
<!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Courses Section Start -->
    <div id="feature"  style="background-image: linear-gradient(to bottom,#f9fbfd 0,#fff 100%);
}">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class=" pb-5 pt-5">
              <div>
              	 <h2 class="title-hl wow fadeInLeft text-center" data-wow-delay="0.3s"></h2>
                <div class="row">
                  <div class="col-lg-6">
                    <img class="img-fluid banner" src="assets/img/banner.jpg" alt="">
                  </div>

                  <div class="col-lg-6">
                    <h2>We teach 25+ topics including</h2>
                    <p>Students can select the types of projects they want to create.<br> 
                      Then, we recommend the languages based on their skill level and interests.
                      <br> Some of the programming languages we teach are
                    </p>
                    <div class="row">
                      <div class="col-12 col-lg-6">
                        <div class="d-flex">
                          <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4" style="width: 50px; height: 50px; background-color: white;">
                            <img src="https://codewithus.com/img/brands/pythonicon.png" alt="Python Coding" class="img-fluid screenshot" style="width: 50px;">
                          </div> 
                          <p class="text-success">
                            <b>Code Applications</b><br>
                            with Python
                          </p>
                        </div> 
                        <div class="d-flex">
                          <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4" style="width: 50px; height: 50px; background-color: white;">
                            <img src="https://codewithus.com/img/brands/minecrafticon.png" alt="Minecraft Coding" class="img-fluid screenshot" style="width: 50px;">
                          </div> 
                          <p class="text-success">
                            <b>Minecraft MODS</b><br>
                            with JavaScript
                          </p>
                        </div> 
                        <div class="d-flex">
                          <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4" style="width: 50px; height: 50px; background-color: white;">
                            <img src="https://codewithus.com/img/icons/scratchicon.png" alt="Scratch Coding" class="img-fluid screenshot" style="width: 50px;">
                          </div> 
                          <p class="text-success"><b>Create Games</b><br>
                           with Scratch
                          </p>
                        </div>
                      </div> 
                      <div class="col-12 col-lg-6 mb-6 mb-md-0">
                        <div class="d-flex">
                          <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4" style="width: 50px; height: 50px; background-color: white;">
                            <img src="https://codewithus.com/img/icons/unityicon.png" alt="Unity Coding Education" class="img-fluid screenshot" style="width: 50px;">
                          </div> 
                          <p class="text-success"><b>Virtual Reality</b><br>
                            with Unity
                          </p>
                        </div> 
                        <div class="d-flex">
                          <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4" style="width: 50px; height: 50px; background-color: white;">
                            <img src="https://codewithus.com/img/icons/tinkercadicon.png" alt="Tinkercad Coding" class="img-fluid screenshot" style="width: 50px;">
                          </div> 
                          <p class="text-success"><b>3D Printing</b><br>
                            with Tinkercad
                          </p>
                        </div> 
                        <div class="d-flex">
                          <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4" style="width: 50px; height: 50px; background-color: white;">
                            <img src="https://codewithus.com/img/icons/arduinoicon.png" alt="..." class="img-fluid screenshot" style="width: 50px;">
                          </div> 
                          <p class="text-success"><b>Robotics</b><br>
                            with Arduino C++
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Courses Section End -->

    <!-- Services Section Start -->
    <section id="services" class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Services</h2>
        </div>
        <div class="row">
          <?php for($i=0;$i<=5;$i++){ ?>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1s">
              <!-- <div class="icon">
                <i class="lni-cog"></i>
              </div> -->
              <div class="services-content text-center">
                <h3><a href="#"><b>Web Development</b></a></h3>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
        <?php } ?>
          <!-- Services item end-->
         </div>
      </div>
    </section>
    <!-- Services Section End -->


    <!-- Team Section Start -->
   <!--  <section id="team" class="section-padding text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-header text-center">
              <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Team</h2>
            </div>
          </div>
        </div>
        <div class="row"> -->
          <!-- Team Item Starts -->
          <!-- <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="team-item text-center">
              <div class="team-img">
                <img class="img-fluid m-2" src="assets/img/team/team-03.png" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#"></a></h3>
                <p>Front-end Developer, Dropbox</p>
              </div>
            </div>
          </div> -->
            <!-- Team Item Ends -->
            <!-- Team Item Starts -->
          <!-- <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="team-item text-center">
              <div class="team-img">
                <img class="img-fluid m-2" src="assets/img/team/team-03.png" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#"></a></h3>
                <p>Product Designer, Tesla</p>
              </div>
            </div>
          </div> -->
            <!-- Team Item Ends -->
            <!-- Team Item Starts -->
          <!-- <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="team-item text-center">
              <div class="team-img">
                <img class="img-fluid m-2" src="assets/img/team/team-03.png" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#"></a></h3>
                <p>Lead Designer, TNW</p>
              </div>
            </div>
          </div> -->
            <!-- Team Item Ends -->          
        <!-- </div>
      </div>
    </section> -->
    <!-- Team Section End -->

   
<!-- Features Section Start-->
   
    <section id="team" class="section-padding text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-header text-center">
              <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Get the job</h2>
            </div>
          </div>
        </div>
     <div class="col-lg-12">
        <div class="row">
        <?php for($i=0;$i<=5;$i++){ ?>
          <div class="col-lg-4 col-md-6  col-sm-offset- mr p-2">
            <img class="img-fluid h-50" src="
             alt="">
              <hr> 
                <p>360℃ Learning</p>
              <hr>
          </div>
        <?php } ?>
      </div>
  </div>
    </section>
    <!-- Feature Section End -->

<!-- section code for client section
     Coded By  k sai kumar
     Date  By  10-10-2020

    -->
      <!-- Clients Section Start -->
    <div id="clients" class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Waiting Clients</h2>
        </div>
        <div class="row text-align-">
          <?php for($i=0;$i<=5;$i++){ ?>
          <div class="col-lg-2 col-md-2 col-xs-12 wow fadeInUp" data-wow-delay="<?php echo ($i/2); ?>s">
            <div class="client-item-wrapper">
             <img class="img-fluid" src="
              alt="">
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
    
    <!-- Clients Section End -->
   


    <!-- Testimonial Section Start -->
    <section id="testimonial" class="testimonial section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description"> </p>
                  </div>
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img1.png" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">k sai kumar</a></h2>
                    <h3><a href="#">web developer</a></h3>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img1.png" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">sai</a></h2>
                    <h3><a href="#">Hello</a></h3>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/team-03.png" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#"></a></h2>
                    <h3><a href="#">Nesnal Design co.</a></h3>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/team-03.png" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#"></a>krishna</h2>
                    <h3><a href="#">Developer</a></h3>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img5.png" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#"></a></h2>
                    <h3><a href="#">Designer</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->  


   

    <!-- Owl Slider Section Start -->
    <!--
    <section class="sloder-img section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="slider-center slider">
              <div>
                <img class="img-fluid" src="assets/img/slide/img1.jpg" alt="">
              </div>
              <div>
                <img class="img-fluid" src="assets/img/slide/img2.jpg" alt="">
              </div>
              <div>
                <img class="img-fluid" src="assets/img/slide/img3.jpg" alt="">
              </div>
              <div>
                <img class="img-fluid" src="assets/img/slide/img4.jpg" alt="">
              </div>
              <div>
                <img class="img-fluid" src="assets/img/slide/img5.jpg" alt="">
              </div>
              <div>
                <img  class="img-fluid" src="assets/img/slide/img6.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    <!-- Owl Slider Section End -->  

    <!-- Map Section Start -->
            <div id="row">
			<div class="col-sm-12">
			<div style="height: 400px" class="embed-responsive embed-responsive-4by3">
			<iframe src="https://www.google.com/maps/place/Gandhi+Hill/@16.5190081,80.614757,15z/data=!4m5!3m4!1s0x3a35efe43be6e735:0xe48544f5a1456623!8m2!3d16.5200882!4d80.6168067" height="300" frameborder="0" style="border:0 ;height: 400px" ></iframe>
			</div>
			</div>
		   </div> 
		
    <!-- Map Section End -->
  

	  <!-- Footer Section Start -->
 
   <?php include 'footer.php';?>
  <!--Footer End  -->
