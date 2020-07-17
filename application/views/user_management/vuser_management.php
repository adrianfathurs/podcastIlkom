<!DOCTYPE html>
<html lang="en">
  <head>
  </head>

  <body>
  <div class="row">
    <div class="col-xl">
        <div class="card">
            <div class="card-body">
				<div class="row">
				<h4 class="col card-title">Daftar Pengguna</h4>
					<button type="button" class="col-md-2 btn btn-success mt-10 mb-3 float-left" data-toggle="modal" data-target="#add-user">Tambah Pengguna</button>
				</div>
            <div class="table-responsive">
					<table id="zero_config" class="table table-striped table-bordered">
						<thead>
						<tr class="text-center">
							<th>No</th>
							<th>Nama</th>
							<th>Username</th>
							<th>password</th>
							<th>Hak Akses</th>							
							<th>Aksi</th>
						</tr>
						</thead>
						<tbody>
							
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
								<form class="form-horizontal m-t-20" action="" method="post">
									<div class="form-group row ">
										<div class="col-12 ">
											<input class="form-control" type="text" required=" " placeholder="Username" name="username">
										</div>
									</div>									
									<div class="form-group row">
										<div class="col-12 ">
											<input id="password" class="form-control" type="text" pattern=".{8,}" title="minimum 8 karakter" required=" " placeholder="Password" name="password">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-12 ">
											<select class="form-control" id="role" name="role" onChange="salary()">
												<option value="5" selected> --- Pilih hak akses ---</option>
												<option value=""> Admin </option>
												<option value=""> Member </option>
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
 
  </body>
</html>
