<section>
  <div class="row">
    <div class="col-xl">
        <div class="card">		
            <div class="card-body">
				<div class="row">
				<h4 class="col card-title">Daftar Semua Komentar</h4>
					<button type="button" class="col-md-2 btn btn-warning mt-10 mb-3 float-left text-white" data-toggle="modal" data-target="#add-peringatan">Petunjuk !</button>
				</div>
            <div class="table-responsive">
					<table id="zero_config" class="table table-striped table-bordered text-black">
						<thead>
						<tr class="text-center">
							<th class="text-black">No</th>
							<th class="text-black">Username</th>
							<th class="text-black">Email</th>
							<th class="text-black">Komentar</th>							
							<th class="text-black">Letak Komentar</th>
							<th class="text-black">Aksi</th>
						</tr>
						</thead>
						<tbody>
							<?php $no = 1; ?>
							<?php foreach($komentar as $komen) : ?>
							<tr>
								<td class="text-black" ><?php echo $no; ?></td>
								<td class="text-black"><?php echo $komen['username']; ?></td>
								<td class="text-black"><?php echo $komen['email']; ?></td>
								<td class="text-black"><?php echo $komen['komentar']; ?></td>
								<?php if($komen['jenis_artikel']==1){?>
                                <td class="text-black">Feature</td>
                                <?php } elseif ($komen['jenis_artikel']==2) {?>
                                <td class="text-black">Hype</td>
                                <?php } elseif ($komen['jenis_artikel']==3) {?>
                                <td class="text-black">Review</td>
                                <?php } elseif ($komen['jenis_artikel']==4){?>
                                <td class="text-black">Info Music</td>
                                <?php } else {?>
                                <td class="text-black">TIDAK ADA</td>
                                <?php } ?>
								<td><a type="button" id="btnHapus"class="btn "  data-toggle="modal" data-target="#staticBackdrop" data-id="<?php echo $komen['id_komentar']?>" ><img src="<?php echo base_url('assets/images/trash.png')?>" style="height:30px;width:30px;" alt=""></a></td>
								<?php $no++; ?>
							</tr>
							<?php endforeach ?> 
						</tbody>
					</table>
				</div>   
        </div>
		
    </div>
</div>

<!-- Modal Peringatan-->
<div class="modal fade" id="add-peringatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>PERINGATAN !!!</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        KOMENTAR YANG TELAH DIHAPUS TIDAK DAPAT DIKEMBALIKAN
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Paham</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Remove Koment -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Delete Komentar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Apakah Anda yakin Mengahapus komentar ini?
      </div>
      <div class="modal-footer">
       <form id="formHapus" method="POST" action="<?php echo base_url('Komen_management/deleteKomen');?>">
        <input type="hidden" name="idKomentar" id="idKomentar"> 
      
        <button type="submit"  class="btn btn-danger" id="btnSubmit">Delete</button>
      </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>