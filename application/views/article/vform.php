<!DOCTYPE html>
<html lang="en">
  <head>    
  </head>

  <body>
  <div class="row">
    <div class="col-xl">
        <div class="card">
            <div class="card-body text-black">
                <h5 class="card-title"> Form Article</h5>
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group" >
                        <label class="col-sm-4 form-control-label"> Judul Artikel:</label>  
                        <input type="text" class="form-control "  placeholder="Judul Artikel">                                                                        
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 form-control-label"> Jenis Artikel:</label>  
                        <select class="custom-select mb-3 required" >
                        <option disabled selected>Pilih Jenis Artikel</option>
                        <option value="">Feature</option>
                        <option value="">Hype</option>
                        <option value="">Review</option>
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
