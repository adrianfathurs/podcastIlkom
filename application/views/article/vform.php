<!DOCTYPE html>
<html lang="en">
  <head>
  </head>

  <body>

  <div class="row">
    <div class="col-xl">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title"> Artikel</h1>
                <form method="POST" action="" >                
                    <div class="form-group">
                        <input type="file" class="form-control" id="foto">           
                    </div>                                      
                    <div class="form-group">
                        
                        
                    </div>
                    <div class="form-group">
                        
                        
                    </div>  
                    <div class="form-groupo">
                        <textarea id="mytextarea">Artikel</textarea>        
                    </div>  
                    <div class="text-right">
                    <!-- <input type="button" class="btn btn-warning" onclick="history.back();" value="Batal"> -->
                    <button type="button" class="btn btn-secondary" onclick="history.back();">Batal</button>                                        
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
