
        <!-- End Header Style -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-5" data-black-overlay="7">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">About US</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="<?php echo base_url();?>front/index">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">About US</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start About Area -->
        <section class="htc__about__area bg-6">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="htc__about__details pt-100 pb-70">
                            <div class="htc__about__inner">
                                <h2>about <span class="text-theme"><?php echo $deskperusahaan->judul_perusahaan?></span></h2>
                                  <p><?php echo $deskperusahaan->deskripsi_perusahaan?></p>
                            </div>
                            <div class="about__sig">
                                <img src="" alt="images">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="about__images">
                            <img src="<?= base_url() ?>xfile/taglineimg/<?php echo "$taglineimg->taglineimage2"; ?>" alt="about images">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Area -->
        <!-- Start Our Service area -->
        <section class="our__service__area pt-100 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <!-- Start Our Service -->
                        <div class="service__inner">
                            <!-- Start Single Service -->
                            <div class="service">
                                <div class="service__icon">
                                    <i class="flaticon-telephone icon"></i>
                                </div>
                                <div class="service__details">
                                    <h4><a href="#">Online Booking Services</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dliluptatem sequi nesciunt. Neque porro quisquam est</p>
                                </div>
                            </div>
                            <!-- End Single Service -->
                            <!-- Start Single Service -->
                            <div class="service">
                                <div class="service__icon">
                                    <i class="flaticon-shape icon"></i>
                                </div>
                                <div class="service__details">
                                    <h4><a href="#">Book Cheap Online</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dliluptatem sequi nesciunt. Neque porro quisquam est</p>
                                </div>
                            </div>
                            <!-- End Single Service -->
                            <!-- Start Single Service -->
                            <div class="service">
                                <div class="service__icon">
                                    <i class="flaticon-sleeping icon"></i>
                                </div>
                                <div class="service__details">
                                    <h4><a href="#">Hotel Booking</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dliluptatem sequi nesciunt. Neque porro quisquam est</p>
                                </div>
                            </div>
                            <!-- End Single Service -->
                            <!-- Start Single Service -->
                            <div class="service">
                                <div class="service__icon">
                                    <i class="flaticon-transport icon"></i>
                                </div>
                                <div class="service__details">
                                    <h4><a href="#">Taxi Cap Booking</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dliluptatem sequi nesciunt. Neque porro quisquam est</p>
                                </div>
                            </div>
                            <!-- End Single Service -->
                        </div>
                        <!-- End Our Service -->
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 sm-mt-30 xs--mt--40">
                        <!-- Start Tab Menu -->
                        <ul class="view-mode" role="tablist">
                            <li role="presentation" class="about"><a href="#about" role="tab" data-toggle="tab">about us</a></li>
                            <li role="presentation" class="mission active"><a href="#mission" role="tab" data-toggle="tab">our mission</a></li>
                            <li role="presentation" class="vision"><a href="#vision" role="tab" data-toggle="tab">our vision</a></li>
                        </ul>
                        <!-- End Tab Menu -->
                        <!-- Start Tab Content -->
                        <div class="htc__tab__content">
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="about" class="single__tab__content tab-pane fade in active bg-cat-1">
                                <div class="tab__content__inner">
                                    <h2>Dreamwordl</h2>
                                    <p><?php echo $deskperusahaan->deskripsi_perusahaan?></p>
                                    <ul class="tab__list">

                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="mission" class="single__tab__content tab-pane fade bg-cat-1">
                                <div class="tab__content__inner">
                                    <h2>Dreamwordl</h2>
                                                <p><?php echo $getvisimisi->misi?></p>
                                    <ul class="tab__list">

                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="vision" class="single__tab__content tab-pane fade bg-cat-1">
                                <div class="tab__content__inner">
                                    <h2>Dreamwordl</h2>
                                    <p><?php echo $getvisimisi->visi?></p>
                                    <ul class="tab__list">

                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Content -->
                        </div>
                        <!-- End Tab Content -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Service area -->
        <!-- Start our Team Area -->
        <section class="team__area bg-white pt-100 pb-70">
            <div class="container">
                <!-- Start Our Section Title area -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="section__title text-center">
                            <h2 class="title__line">meet <span class="text-theme">the guys</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utllaf </p>
                        </div>
                    </div>
                </div>
                <!-- End Our Section Title area -->
                <div class="row">
                    <div class="team__wrap clearfix mt-50 xs--mt--20">
                        <!-- Start Single Team -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="team">
                                <div class="team__thumb bg-theme">
                                    <img src="images/team/1.jpg" alt="team images">
                                </div>
                                <div class="team__details">
                                    <div class="team__details__inner">
                                        <h4><a href="#">anika mollik</a></h4>
                                        <h6>Chief CEO Officer</h6>
                                        <ul class="social__icon icon--position--center">
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
                        <!-- End Single Team -->
                        <!-- Start Single Team -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="team">
                                <div class="team__thumb bg-theme">
                                    <img src="images/team/2.jpg" alt="team images">
                                </div>
                                <div class="team__details">
                                    <div class="team__details__inner">
                                        <h4><a href="#">jon smith</a></h4>
                                        <h6>Chief CEO Officer</h6>
                                        <ul class="social__icon icon--position--center">
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
                        <!-- End Single Team -->
                        <!-- Start Single Team -->
                        <div class="col-md-4 col-lg-4 hidden-sm col-xs-12">
                            <div class="team">
                                <div class="team__thumb bg-theme">
                                    <img src="images/team/3.jpg" alt="team images">
                                </div>
                                <div class="team__details">
                                    <div class="team__details__inner">
                                        <h4><a href="#">kolince jon</a></h4>
                                        <h6>Chief CEO Officer</h6>
                                        <ul class="social__icon icon--position--center">
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
                        <!-- End Single Team -->
                    </div>
                </div>
            </div>  
        </section>
        <!-- End our Team Area -->
        <label>Google Map</label>
   <textarea name="google_map" rows="5" class="form-control" placeholder="Kode dari Google Map"><p><?php echo $maps->maps?></p>
</textarea>
   </div>
        <!-- Start Brand Area -->
        <div class="brand__area pb-100 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <ul class="brand__list bg-white">
                            <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                            <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                            <li><a href="#"><img src="images/brand/3.png" alt="brand images"></a></li>
                            <li><a href="#"><img src="images/brand/4.png" alt="brand images"></a></li>
                            <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                            <li class="hidden-md hidden-lg"><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
                                    <p>Alcatraz Island Photo Albf dhaka ,<br>New York</p>
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
                                    <p><a href="mailto:www.yourmail.com">www.yourmail.com</a></p>
                                    <p><a href="mailto:www.yourmail.com">www.yourmail.com</a></p>
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
                                    <p><a href="phone:+66025644424857">+660 256444 24857</a></p>
                                    <p><a href="phone:+66025644424857">+660 256444 24857</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address -->
                        <!-- Start Single Address -->
                        <div class="hidden-md hidden-lg col-sm-6 hidden-xs">
                            <div class="contact bg-cat-1">
                                <div class="address__icon">
                                    <i class="zmdi zmdi-phone"></i>
                                </div>
                                <div class="address__details">
                                    <p><a href="phone:+66025644424857">+660 256444 24857</a></p>
                                    <p><a href="phone:+66025644424857">+660 256444 24857</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Area -->
        <!-- Start Footer Area -->
        <footer class="footer__area bg-4">
            <div class="footer__top ptb-70" data-black-overlay="8">
                <div class="container">
                    <div class="row">
                        <div class="footer__wrap clearfix">
                            <!-- Start Single Footer -->
                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                <div class="footer__wedget">
                                    <div class="footer__logo">
                                        <a href="#">
                                            <img src="images/logo/ramble.png" alt="logo">
                                        </a>
                                    </div>
                                    <p class="footer__dtl">Lorem ipsum dolor sit amet, consectetur adipisicing ejlit, sed do eiusmod tempor incididunt ut labore egtt dolore magna aliqua. Ut enim ad minim veniam, quisgt nostrud exercitation ullamco laboris.</p>
                                    <ul class="footer__social__icon">
                                        <li><a href="https://www.linkedin.com/"><i class="zmdi zmdi-linkedin"></i></a></li>
                                        <li><a href="https://www.pinterest.com/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        <li><a href="https://www.tumblr.com/"><i class="zmdi zmdi-tumblr"></i></a></li>
                                        <li><a href="https://plus.google.com/"><i class="zmdi zmdi-google"></i></a></li>
                                        <li><a href="https://www.facebook.com/"><i class="zmdi zmdi-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Footer -->
                            <!-- Start Single Footer -->
                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 xs--mt--40">
                                <div class="footer__wedget">
                                    <div class="footer__inner">
                                        <h2 class="footer__title">latest tweets</h2>
                                        <!-- Start tweets Feed -->
                                        <div class="tweets">
                                            <div class="tweets__icon">
                                                <i class="zmdi zmdi-twitter"></i>
                                            </div>
                                            <div class="tweets__details">
                                                <p>Lorem ipsum dolor sit am ectetur adip isicing elit, sed eiusmod ipsum dolo hgtfed</p>
                                                <a href="#">https://tweeterhrad.com</a>
                                            </div>
                                        </div>
                                        <!-- End tweets Feed -->
                                        <!-- Start tweets Feed -->
                                        <div class="tweets">
                                            <div class="tweets__icon">
                                                <i class="zmdi zmdi-twitter"></i>
                                            </div>
                                            <div class="tweets__details">
                                                <p>Lorem ipsum dolor sit am ectetur adip isicing elit, sed eiusmod ipsum dolo hgtfed</p>
                                                <a href="#">https://tweeterhrad.com</a>
                                            </div>
                                        </div>
                                        <!-- End tweets Feed -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Footer -->
                            <!-- Start Single Footer -->
                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 xs--mt--40">
                                <div class="footer__wedget sm--mt--40">
                                    <div class="footer__inner">
                                        <h2 class="footer__title">tag</h2>
                                        <ul class="tag_menu">
                                            <li><a href="#">Adventure</a></li>
                                            <li><a href="#">Traveling</a></li>
                                            <li><a href="#">Countries</a></li>
                                            <li><a href="#">Beach</a></li>
                                            <li><a href="#">Honeymoon</a></li>
                                            <li><a href="#">Island</a></li>
                                            <li><a href="#">Parks</a></li>
                                            <li><a href="#">Family</a></li>
                                            <li><a href="#">Travel</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Footer -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright__arera" data-black-overlay="9">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                            <div class="copyright__inner">
                                <div class="copyright__text">
                                    <p>Copyright © 2017<a href="https://devitems.com">devitems.com</a> All Right Reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        <!-- Start Newsletter Letter -->
        <div class="newsletter__area bg-cat-2">
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
        </div>
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

    <!-- Placed js at the end of the document so the pages load faster -->
