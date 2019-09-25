<?php if($this->session->flashdata('message')) {
      $flashMessage=$this->session->flashdata('message');
    echo "<script>alert('$flashMessage')</script>";
    } ?>
     <section id="basic-datatable">
         <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header">
                         <h4 class="card-title">Data Hasil Simulasi </h4>

                         <!-- 'jumlah_jamaah' => $this->input->post('banyak_jamaah'),
                         'hotel_mekah' => $this->input->post('hotelmekah'),
                         'hotel_madinah' => $this->input->post('hotelmadinah'),
                         'hotel_jeddah' => $this->input->post('hoteljeddah'),
                         'paket' => $this->input->post('program_hari'),
                         'malammekah'=>$this->input->post('malammekah'),
                         'malammadinah'=>$this->input->post('malammadinah'),
                         'malamjeddah'=>$this->input->post('malamjeddah'), -->
                     </div>
                     <div class="card-header">
                         <h6 class="card-title">Print = Export PDF </h6>

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
                                 <table class="table crudtable" id="data">
                                     <thead>
                                       <tr>
                                            <th>JENIS</th>
                                             <th>QUAD</th>
                                             <th>TRIPLE</th>
                                             <th>DOUBLE</th>
                                       </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                               <td>REG</td>
                                             <td><?php echo $quad_reguler ?></td>
                                           <td><?php echo $triple_reguler ?></td>
                                           <td><?php echo $double_reguler ?></td>
                                         </tr>
                                         <tr>
                                                <td>HIGH</td>
                                             <td><?php echo "$quad_high" ?></td>
                                           <td><?php echo "$triple_high" ?></td>
                                           <td><?php echo "$double_high" ?></td>
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
