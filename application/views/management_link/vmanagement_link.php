<section>
  <div class="row">
    <div class="col-xl">
        <div class="card">		
            <div class="card-body">
			<div class=" container text-center  ">
	<div >
		<div class="" role="tabpanel">
            <div class="">
                <!-- Nav tabs -->
                <ul class=" nav nav-justified " id="nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#dustin" aria-controls="dustin" role="tab" data-toggle="tab">                            
                            <img class="img-circle" src="<?php echo base_url(); ?>assets/images/logo_sp.png" style="width: 120px; height: 120px;" title="Link PlayList"/>
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#edit-chart"  aria-controls="daksh" role="tab" data-toggle="tab">
						<img class="open-modal img-circle" data-toggle="modal" data-target="#edit-youtube" src="<?php echo base_url(); ?>assets/images/logo_yt.png" style="width: 120px; height: 120px;" title="Link Youtube" />
                        
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
							<p class="lead text-white">.....................................................................................................................</p>
							<hr>
							<div class="table-responsive">
								<table class="table table-striped table-bordered text-black">
									<thead>
										<tr class="text-center">
										
											<th class="text-black">Link</th>
											<th class="text-black">Kategori</th>										
											<th class="text-black">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; ?>
										<?php foreach($Spotify as $lagu) : ?>
										<tr>											
											<td class="text-black"><?php echo $lagu->link_spotify; ?></td>
											<?php if($lagu->role==1){?>
												<td><p> PlayList Podcast</p></td>
												<?php } else{?>
													<td><p> PlayList Lagu</p></td>
													<?php } ?>											
													<td class="text-center">
														<button type="button"  class="open-modal btn btn-warning"
														title="Ubah"
														data-id_spt="<?php echo $lagu->id_spotify; ?>"
														data-link_spt="<?php echo $lagu->link_spotify; ?>"
														data-rolespt="<?php echo $lagu->role; ?>"																									
														data-toggle="modal"
														data-tt="tooltip"
														data-target="#edit-spotify"> Edit
													</button>												 
											</td>																																											
										</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div> 
                           
                        </div>
                    </div>                    
                    <div role="tabpanel" class="tab-pane fade" id="daksh">
						<div class="tab-inner">
							<p class="lead">Suspendisse dictum gravida est, nec consequat tortor venenatis a. Suspendisse vitae venenatis sapien.</p>
							<hr>
							<div class="table-responsive">
								
								</div> 
								
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
											<input id="modal-kate" class="form-control" type="text" required=" " placeholder="kategori lagu" name="kategori" value="">
										</div>
									</div>									
									<div class="form-group row">
										<div class="col-12 ">
											<label>status</label>
											<select id="select-status" class="form-control" name="status">
												<option  disabled selected> --- Pilih hak akses ---</option>
												<option value="0"> Bertahan </option>
												<option value="1"> Naik </option>
												<option value="2"> Turun </option>
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
				
				<div id="edit-youtube" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content text-black">
							<div class="modal-header">
								<h4 class="modal-title">Edit untuk Link Youtube </h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>							
								<div class="modal-body">
									<form id="form-modal-edit-ytb" class="form-horizontal m-t-20 " action="" method="post">																									
										<div class="form-group row">
											<div class="col-12 ">
												<label>link</label>
												<?php foreach ($Youtube as $Y ) : ?>
												
												<input id="modal-links" class="form-control" type="text" required=" " placeholder="id lagu spotify" name="linkytb" value="<?php echo $Y['link_youtube'] ?>">										
												<?php endforeach;?>
												<small >Contoh Submit Link Playlist  : https://www.youtube.com/embed/<span><b>haxkJKkdTac</b></span></small>
												<small >Contoh Submit Link Videoseries : https://www.youtube.com/embed/videoseries?list=<span><b>PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG</b></b></span></small>
												<br>
												<br>
												<small >NB : Huruf yg di Bold = Id(dapat ditemukan disaat anda mengklik video tersebut di YT)</small>
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
<div id="edit-spotify" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
						<div class="modal-content text-black">
							<div class="modal-header">
								<h4 class="modal-title">Edit untuk Link  <span id="modal-name-edits" style="color: red;"></span></h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>							
							<div class="modal-body">
								<form id="form-modal-edit-spt" class="form-horizontal m-t-20 " action="" method="post">																									
									<div class="form-group row">
										<div class="col-12 ">
											<label>link</label>
											<input id="modal-linkspt" class="form-control" type="text" required=" " placeholder="Link lagu spotify" name="link_spotify" value="">										
										</div>
									</div>																									
									<div class="row d-flex">
										<div id="dataSubmit" class="ml-auto mr-2">
											
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
											<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
										</div>
									</div>
								</form>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>

</section>	

<section>	