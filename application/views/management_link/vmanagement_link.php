


<div class="container text-center ">
    <div class="row">
       
    </div>
</div>
<div class="card">
<section>
<div class=" container text-center  ">
	<div class=" row ">
		<div class="" role="tabpanel">
            <div class="">
                <!-- Nav tabs -->
                <ul class=" nav nav-justified " id="nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#dustin" aria-controls="dustin" role="tab" data-toggle="tab">
                            <img class="img-circle" src="<?php echo base_url(); ?>assets/images/logo_yt.png" style="width: 120px; height: 120px;" title="Link Youtube" />
                            
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#daksh" aria-controls="daksh" role="tab" data-toggle="tab">
                            <img class="img-circle" src="<?php echo base_url(); ?>assets/images/logo_sp.png" style="width: 120px; height: 120px;" title="Link PlayList"/>
                            
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#anna" aria-controls="anna" role="tab" data-toggle="tab">
                            <img class="img-circle" src="<?php echo base_url(); ?>assets/images/logo_song.png" style="width: 120px; height: 120px;" title="Link Tangga Lagu"/>
                            
                        </a>
                    </li>
                    
                </ul>
            </div>
			</div>
			
            <div class=" text-black">
                <!-- Tab panes -->
                <div class="tab-content " id="tabs-collapse">            
                    <div role="tabpanel" class="tab-pane fade in active" id="dustin">
					<div class="tab-inner">
                            <p class="lead">Suspendisse dictum gravida est, nec consequat tortor venenatis a. Suspendisse vitae venenatis sapien.</p>
							<hr>
							<div class="table-responsive">
								<table class="table table-striped table-bordered text-black">
									<thead>
									<tr class="text-center">
										<th class="text-black">No</th>
										<th class="text-black">Username</th>
										<th class="text-black">password</th>
										<th class="text-black">Hak Akses</th>							
										<th class="text-black">Aksi</th>
									</tr>
									</thead>
									<tbody>
										
									</tbody>
								</table>
							</div> 
                            <p><strong class="text-uppercase">Daksh Bhagya</strong></p>
                            <p><em class="text-capitalize"> UX designer</em> at <a href="#">Google</a></p>
                        </div>
                    </div>                    
                    <div role="tabpanel" class="tab-pane fade" id="daksh">
                        <div class="tab-inner">
                            <p class="lead">Suspendisse dictum gravida est, nec consequat tortor venenatis a. Suspendisse vitae venenatis sapien.</p>
							<hr>
							<div class="table-responsive">
								<table class="table table-striped table-bordered text-black">
									<thead>
									<tr class="text-center">
										<th class="text-black">No</th>
										<th class="text-black">Username</th>
										<th class="text-black">password</th>
										<th class="text-black">Hak Akses</th>							
										<th class="text-black">Aksi</th>
									</tr>
									</thead>
									<tbody>
										
									</tbody>
								</table>
							</div> 
                            <p><strong class="text-uppercase">Daksh Bhagya</strong></p>
                            <p><em class="text-capitalize"> UX designer</em> at <a href="#">Google</a></p>
                        </div>
                    </div>
                    
                    <div role="tabpanel" class="tab-pane fade" id="anna">
					<div class="tab-inner">
                            <p ><strong class="text-uppercase">Update Untuk Tangga Lagu</strong></p>
							<hr>
							<div class="table-responsive">
								<table  class="table table-striped table-bordered text-black">
									<thead>
									<tr class="text-center">
										<th class="text-black">No</th>
										<th class="text-black">Link Lagu</th>
										<th class="text-black">Judul Lagu</th>
										<th class="text-black">Genre Lagu</th>							
										<th class="text-black">Artis</th>
										<th class="text-black">Kategori Lagu</th>
										<th class="text-black">Status Lagu</th>
										<th class="text-black">Aksi</th>
									</tr>
									</thead>
									<tbody>
									<?php $no = 1; ?>
										<?php foreach($TanggaLagu as $lagu) : ?>
										<tr>
											<td class="text-black" ><?php echo $no; ?></td>
											<td class="text-black"><?php echo $lagu->link_lagu; ?></td>
											<td class="text-black"><?php echo $lagu->judul_lagu	; ?></td>
											<td class="text-black"><?php echo $lagu->genre_lagu; ?></td>
											<td class="text-black"><?php echo $lagu->artist_lagu; ?></td>
											<td class="text-black"><?php echo $lagu->kategori_lagu; ?></td>
																					
												<?php if($lagu->status_lagu==1){?>
												<td class="visibility1" title="Naik" ><p class="text-center"><img src="<?php echo base_url()?>assets/images/up-arrow.png" alt="up" width="20px" height="20px"></p></td>
												<?php } elseif ($lagu->status_lagu==2){?>
												<td class="visibility1" title="Turun"><p class="text-center"><img src="<?php echo base_url()?>assets/images/down-arrow.png" alt="up" width="20px" height="20px"></p></td>
												<?php } else {?>
												<td class="visibility1" title="Bertahan"><p class="text-center"><img src="<?php echo base_url()?>assets/images/sort.png" alt="up" width="30px" height="30px"></p></td>
												<?php };?>											
										
											<td class="text-center">
												<button type="button" class="open-modal btn btn-warning"
														title="Ubah"
														data-id="<?php echo $lagu->id_lagu; ?>"
														data-link="<?php echo $lagu->link_lagu; ?>"
														data-judul="<?php echo $lagu->judul_lagu; ?>"
														data-genre="<?php echo $lagu->genre_lagu; ?>"
														data-artis="<?php echo $lagu->artist_lagu; ?>"
														data-kategori="<?php echo $lagu->kategori_lagu; ?>"
														data-status="<?php echo $lagu->status_lagu; ?>"											
														data-toggle="modal"
														data-tt="tooltip"
														data-target="#edit-chart"> Edit
													</button>												 
											</td>																					
											<?php $no++; ?>
										</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div> 
                            
                        </div> 
                    </div>
                    
                    
                </div>
            </div>        
        </div>
	</div>
</div>
</section>
<div id="edit-chart" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content text-black">
							<div class="modal-header">
								<h4 class="modal-title">Edit untuk Lagu <span id="modal-name-edit" style="color: red;"></span></h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<div class="modal-body">
								<form id="form-modal-edit" class="form-horizontal m-t-20 " action="" method="post">									
									<div class="form-group row ">
										<div class="col-12 ">
											<label>Judul</label>
											<input id="modal-judul" class="form-control" type="text" required=" " placeholder="judul lagu" name="judul" value="">
										</div>
									</div>								
									<div class="form-group row">
										<div class="col-12 ">
											<label>link</label>
											<input id="modal-links" class="form-control" type="text" required=" " placeholder="id lagu spotify" name="links" value="">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-12 ">
											<label>genre</label>
											<input id="modal-genre" class="form-control" type="text" required=" " placeholder="genre lagu" name="genre" value="">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-12 ">
											<label>artis</label>
											<input id="modal-artis" class="form-control" type="text" required=" " placeholder="artis lagu" name="artis" value="">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-12 ">
											<label>kategori</label>
											<input id="modal-kategori" class="form-control" type="text" required=" " placeholder="kategori lagu" name="kategori" value="">
										</div>
									</div>									
									<div class="form-group row">
										<div class="col-12 ">
											<label>status</label>
											<select id="select-status" class="form-control" name="status">
												<option  disabled selected> --- Pilih hak akses ---</option>
												<option value="1"> Admin </option>
												<option value="2"> Member </option>
											</select>
										</div>
									</div>																			
									<div class="row d-flex">
										<div class="ml-auto mr-2">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
											<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
										</div>
									</div>
								</form>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>
 

				