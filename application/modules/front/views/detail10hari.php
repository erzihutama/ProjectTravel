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
<?php echo $tagline->taglineweb3?>

    </style>
<div class="hslide slider__bg--2 htc__slider__animation--center" data-black-overlay="9">
<div class="ht__bradcaump__wrap">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title"><?php echo $paket10->nama_paket?></h2>
                    <nav class="bradcaump-inner">
                      <a class="breadcrumb-item" href="<?php echo base_url();?>">Home</a>
                      <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i><i class="zmdi zmdi-chevron-right"></i></span>
                      <span class="breadcrumb-item active"><?php echo $paket10->nama_paket?></span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Bradcaump area -->
<!-- Start Service Area -->
<section class="service__area ptb-100 bg-white">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="section__title text-center">
                <h2 class="title__line"><span class="text-theme"><?php echo $paket10->nama_paket?></span></h2>
                <p><?php echo $paket10->keterangan?> </p>
            </div>
        </div>
    </div>
    <div class="map-responsive">


        <img src="<?= base_url() ?>xfile/taglineimg/<?php echo "$taglineimg->taglineimage1"; ?>" alt="about images">
       </div>

</div>

</section>
<!-- End Service Area -->
<!-- Start Funfact Area -->


<div id="exTab1" class="container">
<ul  class="nav nav-pills">
<li class="active">
  <a  href="#1a" data-toggle="tab">INTENERARY</a>
</li>
<li><a href="#2a" data-toggle="tab">HOTEL</a>
</li>
<li><a href="#3a" data-toggle="tab">PEMESANAN</a>
</li>

</ul>

<div class="tab-content clearfix">
  <div class="tab-pane active" id="1a">
    <div class="card-content">

        <div class="card-body card-dashboard">
            <div class="table-responsive">
                <table class="table crudtable">
                    <thead>
                      <tr>
                            <th>HARI</th>
                            <th>KETERANGAN</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php foreach ($dataintenerary as $d): ?>
                        <tr>
                            <td><?php echo $d->hari?> </td>
                            <td><?php echo $d->keterangan?> </td>
                        </tr>
                            <?php endforeach; ?>
                      </tbody>

                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

  </div>
  <div class="tab-pane" id="2a">
    <div class="tab-content clearfix">


            <div class="card-body card-dashboard">
                <div class="table-responsive">
                    <table class="table crudtable">
                        <thead>
                          <tr>
                                <th>NAMA HOTEL</th>
                                <th>KOTA</th>
                                  <th>KETERANGAN</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php foreach ($datahotel as $d): ?>
                            <tr>
                                <td><?php echo $d->namahotel?> </td>
                                <td><?php echo $d->nama_kota?> </td>
                                <td><?php echo $d->deskripsi?> </td>
                            </tr>
                                <?php endforeach; ?>
                          </tbody>

                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

      </div>

  <div class="tab-pane" id="3a">
    <hr>
    <h2>Hubungi <a href="<?php echo base_url();?>contact"> Contact Dreamworld</h2>
<hr>
  </div>
  
</div>
</div>



<!-- End Funfact Area -->

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
<br>
<br>
<br>
<br>
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
