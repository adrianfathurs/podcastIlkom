<section></section>

<div class="card">
  
  <div class="card-body">
    <div class="row">
      <div class="col-lg-10 col-md-8 col-sm-2 col-xs-2">
        <h3><b> Daftar Event </b></h3>
      </div>
    <div class="col-lg-2 col-md-4 col-sm-2 col-xs-6 float-right">
      <a href="<?php echo site_url('event/insert')?>"><button class="btn btn-success">Tambah Event</button></a>  
    </div>
  </div>
    <div class="table-responsive">
  
        <table class="table bg-white table-hover">  
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php  $t=0 ; foreach ($event as $key ) :?>
        
                <tr>

                    <td><?php echo ++$t?></td>
                    <td><?php echo $key['judul']?></td>
                    <td><?php echo $key['foto']?></td>
                    <td><?php echo $key['keterangan']?></td>
                    <td>
                      <button class="btn btn-danger"  id="btnHapus" data-toggle="modal" data-target="#staticBackdrop" data-id="<?php echo $key['id_event']?>">Delete</button>
                      <a href="<?php echo site_url('event/viewEvent/').$key['id_event']?>"><button class="btn btn-info">Menuju Halaman</button></a>
                    </td>
                    
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
  </div>
</div>
    
    

    
    <!-- Modal Remove Koment -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Delete Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Apakah Anda yakin Mengahapus Event ini?
      </div>
      <div class="modal-footer">
       <form id="formHapus" method="POST" action="<?php echo base_url('event/deleteEvent');?>">
        <input type="hidden" name="idEvent" id="idEvent"> 
      
        <button type="submit"  class="btn btn-danger" id="btnSubmit">Delete</button>
      </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  
    