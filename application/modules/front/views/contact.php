

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
<br>
<!-- Start Our Information Area -->
<section class="our__information__area pb-100 bg-white">
    <div class="container">
        <!-- Start Our Section Title area -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="section__title text-center">
                    <h2 class="title__line">Alamat  <span class="text-theme">DreamWorld</span></h2>


                      <p>Jl. Hegarmanah No.20A, Hegarmanah, Kec. Cidadap, Kota Bandung, Jawa Barat 40141</p>

                </div>
            </div>
        </div>
        <!-- End Our Section Title area -->
        <div class="row">
            <div class="our__information__team clearfix mt-50 xs--mt--10">
                <!-- Start Single Staf -->
                <<?php foreach ($perusahaan as $d): ?>

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="information__inner text-center">
                        <div class="information_details">
                            
                            <h6><?php echo $d->alamat_perusahaan?></h6>
                            <p><i class="zmdi zmdi-phone-paused"></i>Phone :<a href="phone:+66025644424857"><?php echo $d->telepon_perusahaan?></a></p>
                            <p><i class="zmdi zmdi-email"></i><a href="mailto:www.anikamollik@outlook.com"><?php echo $d->email_perusahaan?></a></p>
                        </div>

                    </div>
                </div>
                  <?php endforeach; ?>
                <!-- End Single Staf -->

                <!-- End Single Staf -->
            </div>
        </div>
    </div>
</section>
<!--End of Registration Form-->
<div class="map-responsive">
<!-- Placed js at the end of the document so the pages load faster -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0871443662795!2d107.59926281388238!3d-6.880163095028257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f3afb900a7%3A0x2c5eeca05d826561!2sJl.%20Hegarmanah%20No.20A%2C%20Hegarmanah%2C%20Kec.%20Cidadap%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040141!5e0!3m2!1sid!2sid!4v1568956381168!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
