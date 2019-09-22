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
        <!-- End Header Style -->
        <!-- Start Bradcaump area           <div class="ht__bradcaump__area bg-5" data-black-overlay="7">
-->
          <div class="hslide slider__bg--3 htc__slider__animation--center" data-black-overlay="9">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">About US</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="<?php echo base_url();?>">Home</a>
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
        <section class="htc__about__area ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="htc__about__details pt-100 pb-70">
                            <div class="htc__about__inner">
                                <h2>about <span class="text-theme"><?php echo $deskperusahaan->judul_perusahaan?></span></h2>
                                  <p><?php echo $deskperusahaan->deskripsi_perusahaan?></p>
                            </div>
                            <div class="about__sig">
                                <!-- <img src="" alt="images"> --> tandatangan
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
        <hr>
        <!-- End About Area -->
        <!-- Start Our Service area -->
        <section class="our__service__area pt-100 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <!-- Start Our Service -->
                        <div class="service__inner">
                          <P>
                            Assalamualaikum Warahmatullah Wabarakatuh</p>
                            <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac elementum erat, ut ultricies elit. Morbi et justo ut magna pulvinar faucibus vel id ante. Ut non nibh volutpat, imperdiet ligula rhoncus, placerat lacus. Curabitur maximus justo tortor, feugiat maximus turpis placerat non. Suspendisse tempor nibh ipsum, quis dignissim nisl consectetur sodales. Phasellus condimentum lectus non ligula eleifend gravida. Ut ut ante purus. Aenean ultrices magna dictum, placerat ipsum in, lobortis ex. Etiam accumsan luctus sapien non lacinia. Duis ac aliquet ipsum. Nullam non quam at nunc sollicitudin tempus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac elementum erat, ut ultricies elit. Morbi et justo ut magna pulvinar faucibus vel id ante. Ut non nibh volutpat, imperdiet ligula rhoncus, placerat lacus. Curabitur maximus justo tortor, feugiat maximus turpis placerat non. Suspendisse tempor nibh ipsum, quis dignissim nisl consectetur sodales. Phasellus condimentum lectus non ligula eleifend gravida. Ut ut ante purus. Aenean ultrices magna dictum, placerat ipsum in, lobortis ex. Etiam accumsan luctus sapien non lacinia. Duis ac aliquet ipsum. Nullam non quam at nunc sollicitudin tempus.
                            <p>
                              <hr>
                            (nama pemilik)
                          </p>
                            Direktur DreamWorld
                          </p>
                          </p>
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
                                    <h2>DreamWorld</h2>
                                    <p><?php echo $deskperusahaan->deskripsi_perusahaan?></p>
                                    <ul class="tab__list">

                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="mission" class="single__tab__content tab-pane fade bg-cat-1">
                                <div class="tab__content__inner">
                                    <h2>DreamWorld</h2>
                                                <p><?php echo $getvisimisi->misi?></p>
                                    <ul class="tab__list">

                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="vision" class="single__tab__content tab-pane fade bg-cat-1">
                                <div class="tab__content__inner">
                                    <h2>DreamWorld</h2>
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
<BR>
  <BR>
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
                                      <?php endforeach ?>                                </div>
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
