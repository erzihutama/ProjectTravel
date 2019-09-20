

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

        .map-responsive{
            overflow:hidden;
            padding-bottom:40%;
            position:relative;
            height:0;
        }
        .map-responsive iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
        </style>
<!-- Start Bradcaump area -->
<div class="hslide slider__bg--1  " data-black-overlay="7">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Contact Us</h2>
                        <nav class="bradcaump-inner">
                          <a class="breadcrumb-item" href="<?php echo base_url();?>">Home</a>
                          <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i><i class="zmdi zmdi-chevron-right"></i></span>
                          <span class="breadcrumb-item active">Contact Us</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Contact Form Area -->
<div class="conntact__from bg-white ptb-100">
    <div class="container">
        <div class="row">
            <div class="contact__form__wrap clearfix">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="contact__img">
                        <img src="images/others/contact/1.jpg" alt="contact iamges">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="contact-form-wrap bg-cat-3">
                        <h2 class="contact__title">contact <span class="text-theme">form</span></h2>
                        <form id="contact-form" action="mail.php" method="post">
                            <div class="single-contact-form">
                                <div class="contact-box">
                                    <input type="text" name="name" placeholder="Your Nme*">
                                    <input type="email" name="email" placeholder="Mail*">
                                </div>
                            </div>
                            <div class="single-contact-form">
                                <div class="contact-box subject">
                                    <input type="text" name="subject" placeholder="Subject*">
                                </div>
                            </div>
                            <div class="single-contact-form">
                                <div class="contact-box message">
                                    <textarea name="message"  placeholder="Type Your Massage..."></textarea>
                                </div>
                            </div>
                            <div class="contact-btn">
                                <button type="submit" class="htc__contact__btn">SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>
                    <div class="form-output">
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Form Area -->
<!-- Start Our Information Area -->
<section class="our__information__area pb-100 bg-white">
    <div class="container">
        <!-- Start Our Section Title area -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="section__title text-center">
                    <h2 class="title__line">get <span class="text-theme">informed</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utllaf</p>
                </div>
            </div>
        </div>
        <!-- End Our Section Title area -->
        <div class="row">
            <div class="our__information__team clearfix mt-50 xs--mt--10">
                <!-- Start Single Staf -->
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="information__inner text-center">
                        <div class="information__thumb">
                            <img src="images/contact-info-img/1.png" alt="information images">
                        </div>
                        <div class="information_details">
                            <h4><a href="#">kolince jon</a></h4>
                            <h6>manager of RAMBLE</h6>
                            <p><i class="zmdi zmdi-phone-paused"></i>Phone :<a href="phone:+66025644424857">+660 256444 24857</a></p>
                            <p><i class="zmdi zmdi-email"></i><a href="mailto:www.anikamollik@outlook.com">anikamollik@outlook.com</a></p>
                        </div>
                    </div>
                </div>
                <!-- End Single Staf -->
                <!-- Start Single Staf -->
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="information__inner text-center">
                        <div class="information__thumb">
                            <img src="images/contact-info-img/3.png" alt="information images">
                        </div>
                        <div class="information_details">
                            <h4><a href="#">anika mollik</a></h4>
                            <h6>designer of stuff</h6>
                            <p><i class="zmdi zmdi-phone-paused"></i>Phone :<a href="phone:+66025644424857">+660 256444 24857</a></p>
                            <p><i class="zmdi zmdi-email"></i><a href="mailto:www.anikamollik@outlook.com">anikamollik@outlook.com</a></p>
                        </div>
                    </div>
                </div>
                <!-- End Single Staf -->
                <!-- Start Single Staf -->
                <div class="col-md-4 col-lg-4 hidden-sm col-xs-12">
                    <div class="information__inner text-center">
                        <div class="information__thumb">
                            <img src="images/contact-info-img/2.png" alt="information images">
                        </div>
                        <div class="information_details">
                            <h4><a href="#">sam smith</a></h4>
                            <h6>ceo of stuff</h6>
                            <p><i class="zmdi zmdi-phone-paused"></i>Phone :<a href="phone:+66025644424857">+660 256444 24857</a></p>
                            <p><i class="zmdi zmdi-email"></i><a href="mailto:www.anikamollik@outlook.com">anikamollik@outlook.com</a></p>
                        </div>
                    </div>
                </div>
                <!-- End Single Staf -->
            </div>
        </div>
    </div>
</section>
<!-- End Our Information Area -->
<!-- Start Map Area -->
<!-- <div class="map-contacts">
    <div id="googleMap"></div>
    <div class="map__hover__info">
        <div class="map__hover__inner">
            <h2 class="finds__title">how to <span class="text-theme">find us</span></h2>
            <h4 class="text-theme">ramble travel agency</h4>
            <p>House No 08, Road No 08,<br>
            Mah Hya, Dhaka, Bangladesh</p>
            <div class="single__find__address">
                <p><a href="mailto:www.anikamollik@outlook.com">anikamollik@outlook.com</a></p>
                <p><a href="mailto:www.anikamollik@outlook.com">anikamollik@outlook.com</a></p>
            </div>
            <div class="single__find__address">
                <p><a href="phone:+66025644424857">+660 256444 24857</a></p>
                <p><a href="phone:+66025644424857">+660 256444 24857</a></p>
            </div>
     </div>
    </div>
 </div> -->
<!-- End Map Area --><!-- Body main wrapper end -->

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
                    <form method="post" action="#">
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
<div class="map-responsive">
<!-- Placed js at the end of the document so the pages load faster -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0871443662795!2d107.59926281388238!3d-6.880163095028257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f3afb900a7%3A0x2c5eeca05d826561!2sJl.%20Hegarmanah%20No.20A%2C%20Hegarmanah%2C%20Kec.%20Cidadap%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040141!5e0!3m2!1sid!2sid!4v1568956381168!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
