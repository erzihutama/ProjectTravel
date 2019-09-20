        <!-- End Header Style -->

<style type="text/css">

.slider__bg--1 {
  background: rgba(0, 0, 0, 0) url(<?= base_url() ?>xfile/taglineimg/<?php echo "$taglineimg->taglineimage1"; ?>) no-repeat scroll 0 0 / cover ;
}
.slider__bg--2 {
  background: rgba(0, 0, 0, 0) url(<?= base_url() ?>xfile/taglineimg/<?php echo "$taglineimg->taglineimage2"; ?>) no-repeat scroll 0 0 / cover ;
}

.slider__bg--3 {
  background: rgba(0, 0, 0, 0) url(<?= base_url() ?>xfile/taglineimg/<?php echo "$taglineimg->taglineimage3"; ?>) no-repeat scroll 0 0 / cover ;
}


</style>
        <!-- Start Slider Area -->

        <div class="slider__container slider__full--screen slider__position--relative">
            <div class="slider-activetion-wrap control__style--left  owl-carousel owl-theme">
                <!-- Start Single Slide -->
                <div class="slide slider__bg--1 htc__slider__animation--center" data-black-overlay="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="slide__align--center">
                                    <div class="slider__inner">
                                        <h2 class="wow"><?php echo $tagline->taglineweb1?></h2>
                                        <div class="slider__btn wow">
                                            <a class="rm__btn btn--transparent" <a href="<?php echo base_url();?>tour">View tours</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="slide slider__bg--2 htc__slider__animation--center" data-black-overlay="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="slide__align--center">
                                    <div class="slider__inner">
                                        <h2 class="wow"><?php echo $tagline->taglineweb2?></h2>

                                        <div class="slider__btn wow">
                                          <a class="rm__btn btn--transparent" <a href="<?php echo base_url();?>tour">View tours</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="slide slider__bg--3 htc__slider__animation--center" data-black-overlay="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="slide__align--center">
                                    <div class="slider__inner">
                                        <h2 class="wow"><?php echo $tagline->taglineweb3?></h2>

                                        <div class="slider__btn wow">
                                          <a class="rm__btn btn--transparent" <a href="<?php echo base_url();?>tour">View tours</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
            <!-- End Slider Area -->
            <!-- Start Select Option -->
            <!--  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Start Choose Area -->
        <section class="choose__area bg-white ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="section__title text-center">
                            <h2 class="title__line">why  <span class="text-theme">choose us</span></h2>
                            <p><?php echo $whychoose->whychoose_tagline ?> </p>
                        </div>
                    </div>
                </div>

                            <ul class="brand__list bg-white">

                                                    <?php foreach ($datachose as $d): ?>

                                                      <!-- Start Single Choose -->
                                                      <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                                          <div class="choose">
                                                              <div class="choose__inner text-center">
                                                                  <h4 class="text-theme"><a href="#"><?php echo $d->whychoose_judul ?> </a></h4>
                                                                  <p><?php echo $d->whychoose_deskripsi?></p>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <!-- End Single Choose -->

                                                    <?php endforeach; ?>
                            </ul>


                    </div>
                </div>
            </div>
        </section>
        <!-- End Choose Area -->
        <!-- Start Welcome Area -->
        <section class="welcome__area bg-gray">
            <div class="welcome__images">

                <div class="info-bg" style="background-image:url(<?= base_url() ?>xfile/taglineimg/<?php echo "$taglineimg->taglineimage2"; ?>)"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-6">
                        <div class="welcome__inner">
                            <h2 class="title__line">welcome to <span class="text-theme"><?php echo $deskperusahaan->judul_perusahaan?></span></h2>
                          <p><?php echo $deskperusahaan->deskripsi_perusahaan?></p>
                            <ul class="social__icon social--bg--color">
                                <li><a href="https://www.linkedin.com/"><i class="zmdi zmdi-linkedin"></i></a></li>
                                <li><a href="https://www.pinterest.com/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                <li><a href="https://www.tumblr.com/"><i class="zmdi zmdi-tumblr"></i></a></li>
                                <li><a href="https://plus.google.com/"><i class="zmdi zmdi-google"></i></a></li>
                                <li><a href="https://www.facebook.com/"><i class="zmdi zmdi-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Welcome Area -->
        <!-- Start Choose Area -->
        <section class="choose__area bg-white ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="section__title text-center">
                            <h2 class="title__line">OUR  <span class="text-theme">Services</span></h2>
                            <p><?php echo $whychoose->service_tagline ?> </p>
                        </div>
                    </div>
                </div>

                            <ul class="brand__list bg-white">
                                                    <?php foreach ($datachose as $d): ?>

                                                      <!-- Start Single Choose -->
                                                      <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                                          <div class="choose">
                                                              <div class="choose__inner text-center">
                                                                  <h4 class="text-theme"><a href="#"><?php echo $d->service_judul ?> </a></h4>
                                                                  <p><?php echo $d->service_deskripsi?></p>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <!-- End Single Choose -->
                                                    <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Choose Area -->
        <!-- Start Special Packages Area -->
        <section class="special__package ptb-100 bg-white">
            <div class="container">
                <!-- Start Our Section Title area -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="section__title text-center">
                            <h2 class="title__line">SPECIAL <span class="text-theme">PACKAGES</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utllaf </p>
                        </div>
                    </div>
                </div>
                <!-- End Our Section Title area -->
                <div class="row">
                    <div class="special__package__container clearfix mt-10">
                        <!-- Start Single Packages -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="packages">
                                <div class="package__thumb">
                                    <img src="images/special/1.jpg" alt="packages images">
                                    <div class="packages__hover__info">
                                        <div class="package__hover__inner">
                                            <h4><a href="#">australia</a></h4>
                                            <h6><i class="zmdi zmdi-alarm"></i>5 days 4 nights</h6>
                                            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididuntq thgf</p>
                                            <div class="package--rating--btn">
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                </ul>
                                                <div class="packages__btn">
                                                    <a class="view__btn" href="tour-details.html">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package__details">
                                    <div class="package__details__inner">
                                        <p>Offer Available</p>
                                        <p class="packg__prize">$300</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Packages -->
                        <!-- Start Single Packages -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="packages">
                                <div class="package__thumb">
                                    <img src="images/special/8.jpg" alt="packages images">
                                    <div class="packages__hover__info">
                                        <div class="package__hover__inner">
                                            <h4><a href="#">australia</a></h4>
                                            <h6><i class="zmdi zmdi-alarm"></i>5 days 4 nights</h6>
                                            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididuntq thgf</p>
                                            <div class="package--rating--btn">
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                </ul>
                                                <div class="packages__btn">
                                                    <a class="view__btn" href="tour-details.html">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package__details">
                                    <div class="package__details__inner">
                                        <p>Offer Available</p>
                                        <p class="packg__prize">$300</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Packages -->
                        <!-- Start Single Packages -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="packages">
                                <div class="package__thumb">
                                    <img src="images/special/3.jpg" alt="packages images">
                                    <div class="packages__hover__info">
                                        <div class="package__hover__inner">
                                            <h4><a href="#">australia</a></h4>
                                            <h6><i class="zmdi zmdi-alarm"></i>5 days 4 nights</h6>
                                            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididuntq thgf</p>
                                            <div class="package--rating--btn">
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                </ul>
                                                <div class="packages__btn">
                                                    <a class="view__btn" href="tour-details.html">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package__details">
                                    <div class="package__details__inner">
                                        <p>Offer Available</p>
                                        <p class="packg__prize">$300</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Packages -->
                        <!-- Start Single Packages -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="packages">
                                <div class="package__thumb">
                                    <img src="images/special/4.jpg" alt="packages images">
                                    <div class="packages__hover__info">
                                        <div class="package__hover__inner">
                                            <h4><a href="#">australia</a></h4>
                                            <h6><i class="zmdi zmdi-alarm"></i>5 days 4 nights</h6>
                                            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididuntq thgf</p>
                                            <div class="package--rating--btn">
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                </ul>
                                                <div class="packages__btn">
                                                    <a class="view__btn" href="tour-details.html">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package__details">
                                    <div class="package__details__inner">
                                        <p>Offer Available</p>
                                        <p class="packg__prize">$300</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Packages -->
                        <!-- Start Single Packages -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="packages">
                                <div class="package__thumb">
                                    <img src="images/special/5.jpg" alt="packages images">
                                    <div class="packages__hover__info">
                                        <div class="package__hover__inner">
                                            <h4><a href="#">australia</a></h4>
                                            <h6><i class="zmdi zmdi-alarm"></i>5 days 4 nights</h6>
                                            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididuntq thgf</p>
                                            <div class="package--rating--btn">
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                </ul>
                                                <div class="packages__btn">
                                                    <a class="view__btn" href="tour-details.html">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package__details">
                                    <div class="package__details__inner">
                                        <p>Offer Available</p>
                                        <p class="packg__prize">$300</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Packages -->
                        <!-- Start Single Packages -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="packages">
                                <div class="package__thumb">
                                    <img src="images/special/6.jpg" alt="packages images">
                                    <div class="packages__hover__info">
                                        <div class="package__hover__inner">
                                            <h4><a href="#">australia</a></h4>
                                            <h6><i class="zmdi zmdi-alarm"></i>5 days 4 nights</h6>
                                            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididuntq thgf</p>
                                            <div class="package--rating--btn">
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                </ul>
                                                <div class="packages__btn">
                                                    <a class="view__btn" href="tour-details.html">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package__details">
                                    <div class="package__details__inner">
                                        <p>Offer Available</p>
                                        <p class="packg__prize">$300</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Packages -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Special Packages Area -->
        <!-- Start Countdown Area -->
        <!-- <section class="countdown__area ptb-100 bg-2" data-black-overlay="7">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="count__down__inner text-center">
                            <h2>special tour in june, discover america for 100</h2>
                            <h4>customers with discount <span class="text-theme">40%</span></h4>

                            <div class="time-wrap ptb-50">
                                <div  data-countdown="2020/01/01"></div>
                            </div>

                            <div class="count__down__btn">
                                <a class="rm__btn btn--transparent" href="book-the-tour.html">get tour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Countdown Area -->
        <!-- Start our Team Area -->

        <!-- End our Team Area -->

        <!-- Start Brand Area -->
        <!-- <div class="brand__area pb-100 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <ul class="brand__list bg-white">
                            <li><a href="#"><img src="" alt="brand images"></a></li>
                            <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                            <li><a href="#"><img src="images/brand/3.png" alt="brand images"></a></li>
                            <li><a href="#"><img src="images/brand/4.png" alt="brand images"></a></li>
                            <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                            <li class="hidden-md hidden-lg"><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Brand Area -->
        <!-- Start Contact Area -->
        <div class="contact__address bg-white">
            <div class="container">
                <div class="row">
                    <div class="contact__wrap clearfix">
                        <!-- Start Single Address -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="contact bg-cat-1">
                                <div class="address__icon">
                                    <i class="zmdi zmdi-pin"></i>
                                </div>
                                <div class="address__details">
                                  <?php foreach ($alamat as $a): ?>
                                    <p><?php echo $a->alamat_perusahaan?></p>
                                      <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address -->
                        <!-- Start Single Address -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="contact bg-cat-1">
                                <div class="address__icon">
                                    <i class="zmdi zmdi-email"></i>
                                </div>
                                <div class="address__details">
                                   <?php foreach ($alamat as $a): ?>
                                    <p><a href="mailto:www.yourmail.com"><?php echo $a->email_perusahaan?></a></p>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address -->
                        <!-- Start Single Address -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="contact bg-cat-1">
                                <div class="address__icon">
                                    <i class="zmdi zmdi-phone"></i>
                                </div>
                                <div class="address__details">
                                   <?php foreach ($alamat as $a): ?>
                                    <p><a href="phone:+66025644424857"><?php echo $a->telepon_perusahaan?></a></p>
                                    <?php endforeach ?>
                                </div>
                            </div>

                        </div>
                        <!-- End Single Address -->
                        <!-- Start Single Address -->


                        <!-- End Single Address -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Area -->

        <!-- End Footer Area -->
        <!-- Start Newsletter Letter -->
        <!-- <div class="newsletter__area bg-cat-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="newsletter__wrap">
                            <div class="newsletter__inner">
                                <h4>join the newsletter</h4>
                                <input type="email" placeholder="Enter your E-mail">
                                <div class="news__letter__btn">
                                    <a class="rm__btn btn--transparent" href="#">subcribes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Newsletter Letter -->
    </div>
    <!-- Body main wrapper end -->

    <!--Start of Login Form-->
    <div id="login__form__wrap">
        <!-- Modal -->
        <div class="modal fade" id="loginform" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-pop-up-content">
                            <div class="text-center">
                                <h2 class="modal-title">Login Hare</h2>
                            </div>
                            <form method="post"  action="<?php base_url() ?>login/login_act">
                                <div class="form-box">
                                    <input type="text" name="username" placeholder="User Name">
                                    <input type="password" name="pass" placeholder="Password">
                                </div>
                                <div class="clearfix">
                                    <span class="remember pull-left">
                                      <input type="checkbox" id="pass_chack" value="pass_remb">
                                      <label for="pass_chack">Remember Me</label>
                                    </span>
                                    <span class="pull-right"><a href="#">Forget Password?</a></span>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="text-uppercase login__btn">login now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Login Form-->

    <!--Start of Registration Form-->
    <div id="register__form__wrap">
        <!-- Modal -->
        <div class="modal fade" id="registrationform" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-pop-up-content">
                            <div class="area-title text-center">
                                <h2>Register Now</h2>
                            </div>
                            <form method="post" action="#">
                                <div class="form-box">
                                    <input type="text" name="username" placeholder="Name">
                                    <input type="text" name="email" placeholder="Email">
                                    <input type="password" name="pass" placeholder="Password">
                                    <input type="text" name="age" placeholder="Age">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="text-uppercase register__btn">register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Registration Form-->
