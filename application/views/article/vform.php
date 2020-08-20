<div id="wrap-form">
    <div class="row">
        <div class="col-xl">
            <div class="card">
                <div class="card-body text-black">
            <?php if (!empty($this->session->userdata('typeNotif'))) : ?>
                <div id="alerttype" class="alert p-3 mb-2">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" required> <span aria-hidden="true">×</span> </button>
                    <h5 id="alerttitle"></h5>
                    <span id="alertmessage"></span>
                    <i id="alerticon"></i>
                </div>
                <?php endif; ?>
                <h5 class="card-title"> Form Article</h5>
                <?php echo form_open_multipart('Article/insert/');?>
                <div class="form-group" >
                    <label class="col-sm-4 form-control-label" > Judul Artikel:</label>  
                    <input type="text" class="form-control " name="judul" placeholder="Judul Artikel" required value="<?php echo $data->judul; ?>">                                                                        
                </div>
                <div class="form-group">
                    <label class="col-sm-4 form-control-label"> Jenis Artikel:</label>  
                    <select class="custom-select mb-3 required" name="jenis_artikel">
                        <?php if($data->jenis_artikel == "0") { ?>
                            <option value="0" disabled selected>Pilih Jenis Artikel</option>
                            <option value="1">Feature</option>
                            <option value="2">Hype</option>
                            <option value="3">Review</option>
                            <option value="4">Music Info</option>
                            <?php } else if ($data->jenis_artikel == "1"){ ?>
                                <option value="1">Feature</option>
                                <option value="2">Hype</option>
                                <option value="3">Review</option>
                                <option value="4">Music Info</option>
                                <?php } else if ($data->jenis_artikel == "2"){ ?>
                        <option value="2">Hype</option>                        
                        <option value="1">Feature</option>
                        <option value="3">Review</option>
                        <option value="4">Music Info</option>
                        <?php } else if ($data->jenis_artikel == "3"){ ?>
                            <option value="3">Review</option>
                            <option value="1">Feature</option>
                            <option value="2">Hype</option>                        
                            <option value="4">Music Info</option>
                            <?php } else if ($data->jenis_artikel == "4"){ ?>
                                <option value="4">Music Info</option>
                                <option value="1">Feature</option>
                                <option value="2">Hype</option>
                                <option value="3">Review</option>   
                                <?php } ?>                     
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 1 :</label>
                            <input type="file" class="form-control" name="foto1" id="foto1"  value="<?php echo $data->foto1; ?>" onchange="previewImage();">
                            <img src="<?php echo base_url('assets/upload/'.$data->foto1) ?>" name="foto1" id="image-preview" alt="image preview" style="width: 300px; height: 220px;"/>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 2 :</label>
                            <input type="file" class="form-control" name="foto2" id="foto2"  value="<?php echo $data->foto2; ?>" onchange="previewImage2();"> 
                            <img src="<?php echo base_url('assets/upload/'.$data->foto2) ?>" name="foto2" id="image-preview2" alt="image preview" style="width: 300px; height: 220px;"/>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Gambar 3 :</label>
                            <input type="file" class="form-control" name="foto3" id="foto3"  value="<?php echo $data->foto3; ?>" onchange="previewImage3();">  
                            <img src="<?php echo base_url('assets/upload/'.$data->foto3) ?>" name="foto3" id="image-preview3" alt="image preview" style="width: 300px; height: 220px;"/>
                        </div>                                                          
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Isi Artikel 1 :</label>
                            <textarea class="ckeditor" name="essay" required ><?php echo $data->essay; ?></textarea>        
                            
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Isi Artikel 2 :</label>
                            <textarea class="ckeditor" name="essay2" required ><?php echo $data->essay2; ?></textarea>        
                            
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 form-control-label" >Isi Artikel 3 :</label>
                            <textarea class="ckeditor" name="essay3" required ><?php echo $data->essay3; ?></textarea>        
                            
                        </div>  
                        <div class="text-right">
                            <input type="text" hidden id="creator" name="creator" value="<?php echo $id ?>">
                            <input type="text" hidden id="id_artikel" name="id_artikel" value="<?php echo $data->id_artikel ?>">
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
        