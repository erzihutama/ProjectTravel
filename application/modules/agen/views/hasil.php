<?php if($this->session->flashdata('message')) {
      $flashMessage=$this->session->flashdata('message');
    echo "<script>alert('$flashMessage')</script>";
    } ?>
     <section id="basic-datatable">
         <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header">
                         <h4 class="card-title">Data Hasil Simulasi Regular</h4>

                         <!-- 'jumlah_jamaah' => $this->input->post('banyak_jamaah'),
                         'hotel_mekah' => $this->input->post('hotelmekah'),
                         'hotel_madinah' => $this->input->post('hotelmadinah'),
                         'hotel_jeddah' => $this->input->post('hoteljeddah'),
                         'paket' => $this->input->post('program_hari'),
                         'malammekah'=>$this->input->post('malammekah'),
                         'malammadinah'=>$this->input->post('malammadinah'),
                         'malamjeddah'=>$this->input->post('malamjeddah'), -->
                     </div>
                     <br>
                     <div class="col-sm-10">
                       <!-- <h6>Jumlah Jamaah ada <?php echo $jumlah_jamaah ?></h6>
                          <br>
                      <h6>Hotel Di  mekah  <?php echo $hotel_mekah ?></h6>
                          <br>
                      <h6>Hotel Di  madinah  <?php echo $hotel_madinah ?></h6>
                      <br>
                      <h6>Hotel Di  jedah  <?php echo $hotel_jeddah ?></h6>
                      <br>
                      <h6>Paket Yang Di Pilih  <?php echo $paket ?></h6>
                      <br>
                      <h6>Di Mekah <?php echo $malammekah ?> malam</h6>
                      <br>
                      <h6>Di  madinah  <?php echo $malammadinah ?> malam</h6>
                      <br>
                      <h6>Di Jeddah  <?php echo $malamjeddah ?> malam</h6> -->
              </div>
                     <div class="card-content">

                         <div class="card-body card-dashboard">
                             <div class="table-responsive">
                                 <table class="table crudtable">
                                     <thead>
                                       <tr>
                                             <th>QUAD</th>
                                             <th>TRIPLE</th>
                                             <th>DOUBLE</th>
                                       </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td><?php echo $quad ?></td>
                                           <td><?php echo $triple ?></td>
                                           <td><?php echo $double ?></td>
                                         </tr>
                                       </tbody>
                                     <tfoot>
                                     </tfoot>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section id="basic-datatable">
         <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header">
                         <h4 class="card-title">Data Hasil Simulasi Hight Session</h4>

                         <!-- 'jumlah_jamaah' => $this->input->post('banyak_jamaah'),
                         'hotel_mekah' => $this->input->post('hotelmekah'),
                         'hotel_madinah' => $this->input->post('hotelmadinah'),
                         'hotel_jeddah' => $this->input->post('hoteljeddah'),
                         'paket' => $this->input->post('program_hari'),
                         'malammekah'=>$this->input->post('malammekah'),
                         'malammadinah'=>$this->input->post('malammadinah'),
                         'malamjeddah'=>$this->input->post('malamjeddah'), -->
                     </div>
                     <br>
                     <div class="col-sm-10">
                       <!-- <h6>Jumlah Jamaah ada <?php echo $jumlah_jamaah ?></h6>
                          <br>
                      <h6>Hotel Di  mekah  <?php echo $hotel_mekah ?></h6>
                          <br>
                      <h6>Hotel Di  madinah  <?php echo $hotel_madinah ?></h6>
                      <br>
                      <h6>Hotel Di  jedah  <?php echo $hotel_jeddah ?></h6>
                      <br>
                      <h6>Paket Yang Di Pilih  <?php echo $paket ?></h6>
                      <br>
                      <h6>Di Mekah <?php echo $malammekah ?> malam</h6>
                      <br>
                      <h6>Di  madinah  <?php echo $malammadinah ?> malam</h6>
                      <br>
                      <h6>Di Jeddah  <?php echo $malamjeddah ?> malam</h6> -->
              </div>
                     <div class="card-content">

                         <div class="card-body card-dashboard">
                             <div class="table-responsive">
                                 <table class="table crudtable">
                                     <thead>
                                       <tr>
                                             <th>QUAD</th>
                                             <th>TRIPLE</th>
                                             <th>DOUBLE</th>
                                       </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td><?php echo $quad ?></td>
                                           <td><?php echo $triple ?></td>
                                           <td><?php echo $double ?></td>
                                         </tr>
                                       </tbody>
                                     <tfoot>
                                     </tfoot>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

    <div id="responsive-modal" class="modal fade" tabindex="-1" intenary="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                  <p id="modalMsg"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                    <a id="modalHref" href="#">
                    <button type="button" class="btn btn-danger waves-effect waves-light">Ya!</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
