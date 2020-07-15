<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  

  </head>

  <body>
  <div class="row">
    <div class="col-xl">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> Form Article</h5>
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-4 form-control-label"> Judul Artikel:</label>  
                        <input type="text" class="form-control text-dark" placeholder="asdads">                                                                        
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 form-control-label"> Jenis Artikel:</label>  
                        <select class="custom-select mb-3 required" >
                        <option value="">Feature</option>
                        <option value="">Music Info</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 form-control-label" >Gambar 1 :</label>
                        <input type="file" class="form-control"  >  
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 form-control-label" >Gambar 2 :</label>
                        <input type="file" class="form-control"  >  
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 form-control-label" >Gambar 3 :</label>
                        <input type="file" class="form-control"  >  
                    </div>                                                          
                    <div class="form-groupo">
                        <label class="col-sm-4 form-control-label" >Isi Artikel :</label>
                        <textarea id="mytextarea">Artikel</textarea>        
                                          
                    </div>  
                    <div class="text-right">
                    <!-- <input type="button" class="btn btn-warning" onclick="history.back();" value="Batal"> -->
                    <button type="button" class="btn btn-secondary" onclick="history.back();">Batal</button>                    
                    <input type="text" hidden id="submitPresence" name="submitPresence" value="submitPresence">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
                    </div>
                </form>
            </div>      
        </div>
    </div>
</div>
  <script src="assets/tinymce/tinymce.min.js"></script>

    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
    
  </body>
</html>
