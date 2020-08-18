<section>
  <div class="row">
    <div class="col-xl">
        <div class="card">		
            <div class="card-body">
				<div class="row">
				<h4 class="col card-title">Daftar Pengguna</h4>
					<button type="button" class="col-md-2 btn btn-success mt-10 mb-3 float-left text-white" data-toggle="modal" data-target="#add-user">Tambah Pengguna</button>
				</div>
            <div class="table-responsive">
					<table id="zero_config" class="table table-striped table-bordered text-black">
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
							<?php $no = 1; ?>
							<?php foreach($users as $user) : ?>
							<tr>
								<td class="text-black" ><?php echo $no; ?></td>
								<td class="text-black"><?php echo $user->username; ?></td>
								<td class="text-black"><?php echo $user->password; ?></td>
								<td class="text-black"><?php if($user->role == "1"){ ?> Admin
								<?php	}else{ ?> Member <?php } ?> </td>
								<td class="text-center">
									<button type="button" class="open-modal btn btn-warning"
											title="Ubah"
											data-id="<?php echo $user->id_akun; ?>"
											data-username="<?php echo $user->username; ?>"
											data-role="<?php echo $user->role; ?>"
											data-password="<?php echo $user->password; ?>"											
											data-toggle="modal"
											data-tt="tooltip"
											data-target="#edit-user"> Edit
										</button>
									<?php if($user->status == 1){ ?>
									<a type="button" href="<?php echo base_url('User_management/delete/').$user->id_akun ?>" class="btn btn-danger active" title="nonaktifkan user ini">Deactive</a> 
									<?php } else { ?>
										<a type="button" href="<?php echo base_url('User_management/delete/').$user->id_akun ?>" class="btn btn-success remove" title="aktifkan user ini">Active</a> 
									<?php }; ?>
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

<!-- modal add user -->
<div id="add-user" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Tambah Pengguna</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<div class="modal-body">
								<form class="form-horizontal m-t-20" action="<?php echo base_url(); ?>User_management/insert" method="post">
									<div class="form-group row ">
										<div class="col-12 ">
											<input class="form-control" type="text" required=" " placeholder="Username" name="username">
										</div>
									</div>									
									<div class="form-group row">
										<div class="col-12 ">
											<input id="text" class="form-control" type="text" pattern=".{8,}" title="minimum 8 karakter" required=" " placeholder="Password" name="password">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-12 ">
											<select class="form-control" id="role" name="role">
												<option  disabled selected> --- Pilih hak akses ---</option>
												<option value="1"> Admin </option>
												<option value="2"> Member </option>
											</select>
										</div>
									</div>																		
									<div class="row d-flex">
										<div class="ml-auto mr-2">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
											<button type="submit" class="btn btn-success"> Simpan</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
</div>


<!-- Modal Edit User -->
<div id="edit-user" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Edit untuk akun <span id="modal-name-edit" style="color: red;"></span></h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<div class="modal-body">
								<form id="form-modal-edit" class="form-horizontal m-t-20" action="" method="post">									
									<div class="form-group row ">
										<div class="col-12 ">
											<label>Username</label>
											<input id="modal-username" class="form-control" type="text" required=" " placeholder="Username" name="username" value="">
										</div>
									</div>								
									<div class="form-group row">
										<div class="col-12 ">
											<label>Password</label>
											<input id="modal-password" class="form-control" type="text" required=" " placeholder="password" name="password" value="">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-12 ">
											<label>Role</label>
											<select id="select-role" class="form-control" name="role">
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
 
