<?php if($this->session->flashdata('message')) {
      $flashMessage=$this->session->flashdata('message');
    echo "<script>alert('$flashMessage')</script>";
    } ?>
     <section id="basic-datatable">
         <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header">
                         <h4 class="card-title">Data Itenerary</h4>
      		    		<a href="<?= site_url($module.'/intenary/create') ?>"><button type="button" class="btn btn-primary round waves-effect waves-light">
      	               	 Tambah Data
      	              	</button>
                      </a>
                     </div>
                     <div class="card-content">

                         <div class="card-body card-dashboard">
                             <div class="table-responsive">
                                 <table class="table crudtable">
                                     <thead>
                                       <tr>
                                             <th>no</th>
                                             <th>Hari</th>
                                             <th>Keterangan</th>
                                             <th>Nama Paket</th>
                                             <th>Aksi</th>
                                       </tr>
                                     </thead>
                                     <tbody>
                                       <?php $no = 1; foreach ($datafield as $d): ?>
                                         <tr>
                                             <td><?php echo $no ?></td>
                                             <td><?php echo $d->hari ?></td>
                                             <td><?php echo $d->keterangan ?></td>
                                             <td><?php echo $d->nama_paket?></td>
                                           <td>
                                             <a href="<?php echo base_url().$module?>/intenary/edit/<?php echo $d->id_intenary ?>"><i class="m-1 feather icon-edit-2"></i></a>
                                             <a class="modalDelete" data-toggle="modal" data-target="#responsive-modal" value="<?php echo $d->id_intenary ?>" href="#"><i class="feather icon-trash"></i></a>
                                           </td>

                                         </tr>
                                         <?php $no++ ?>
                                       <?php endforeach; ?>
                                       </tbody>
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
