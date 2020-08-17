<section>
</section>
<section>
    <div id="wrap-form">
        <div class="row">
        <div class="col-xl">
            <div class="card">
                <div class="card-title">
                    <center><h3><b> INPUT EVENT</b></h3></center>
                </div>
                <div class="card-body text-white">
                    <?php if (!empty($this->session->userdata('typeNotif'))) : ?>
                        <div id="alerttype" class="alert p-3 mb-2">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" required> <span aria-hidden="true">×</span> </button>
                            <h5 id="alerttitle"></h5>
                            <span id="alertmessage"></span>
                            <i id="alerticon"></i>
                        </div>
                        <?php endif; ?>
                        <h5 class="card-title"> Form Article</h5>
                        <?php echo form_open_multipart('Event/insert/');?>
                        <div class="form-group text-black" >
                            <label class="col-sm-4 form-control-label" > Judul Event:</label>  
                            <input type="text" class="form-control " name="judul" placeholder="Judul Event" required >                                                                        
                        </div>
                        <div class="form-group text-black">
                            <label class="col-sm-4 form-control-label" >Gambar 1 :</label>
                            <input type="file" class="form-control" name="foto1" id="foto1" required="true"  >        
                        </div>
                        <div class="form-group">
                            <div class="image-preview" name="imagePreview" id="imagePreview">
                                <img src="" alt="Image Preview " class="image-preview__image" width="200px" height="250px">
                                <span class="image-preview_default-text text-black">Image Preview</span>
                            </div>
                        </div>            
                        <br>                     
                        <div class="form-group text-black">
                            <label for="keterangan" class="col-sm-4 form-control-label" >Keterangan <small class="text-gray-400">(optional)</small>  :</label>
                            <textarea class="ckeditor" id ="keterangan" name="keterangan" required ></textarea>        
                        </div>
                        <div class="text-right">
                            <input type="text" hidden id="submit" name="submit" value="submit">
                            <button type="button" class="btn btn-secondary" onclick="history.back();">Batal</button>                                        
                            <button type="submit" class="btn btn-success"> Simpans</button>
                        </div>
                        <?php echo form_close();?>
                    </div>      
                </div>
            </div>
        </div>
    </div>
</section>
    