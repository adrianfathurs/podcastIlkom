<!DOCTYPE html>
<html lang="en">
  <head>    
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
  <div class="row">
    <div class="col-xl">
        <div class="card">
            <div class="card-body text-black">
                <h5 class="card-title"> Form Article</h5>
               <?php echo form_open_multipart('Article/insert/');?>
                    <div class="form-group" >
                        <label class="col-sm-4 form-control-label"> Judul Artikel:</label>  
                        <input type="text" class="form-control " name="judul" placeholder="Judul Artikel">                                                                        
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 form-control-label"> Jenis Artikel:</label>  
                        <select class="custom-select mb-3 required" name="jenis_artikel">
                        <option disabled selected>Pilih Jenis Artikel</option>
                        <option value="1">Feature</option>
                        <option value="2">Hype</option>
                        <option value="3">Review</option>
                        <option value="4">Music Info</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 form-control-label" >Gambar 1 :</label>
                        <input type="file" class="form-control" name="foto1" >  
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 form-control-label" >Gambar 2 :</label>
                        <input type="file" class="form-control" name="foto2" >  
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 form-control-label" >Gambar 3 :</label>
                        <input type="file" class="form-control" name="foto3" >  
                    </div>                                                          
                    <div class="form-group">
                        <label class="col-sm-4 form-control-label" >Isi Artikel :</label>
                        <textarea id="mytextarea" name="essay"></textarea>        
                                          
                    </div>  
                    <div class="text-right">
                    <!-- <input type="button" class="btn btn-warning" onclick="history.back();" value="Batal"> -->
                    <button type="button" class="btn btn-secondary" onclick="history.back();">Batal</button>                                        
                    <button type="submit" class="btn btn-success"> Simpans</button>
                    </div>
                <?php echo form_close();?>
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
