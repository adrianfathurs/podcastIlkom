<!-- Script css content -->
<?php
if (isset($css)) {
$this->load->view($css);
}
?>

<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
    <div  id="carousel-items" class="carousel-item active" data-interval="1000">
      <img class="image-carousel-size" src="<?php echo base_url(); ?>assets/images/thumbnail/1.jpg"  style="width: 100%; "  alt="...">  
      </img>
    </div>

    <div id="carousel-items" class="carousel-item " data-interval="2000">
      <img class="image-carousel-size" src="<?php echo base_url(); ?>assets/images/thumbnail/2.jpg" style="width: 100%; "   alt="...">
      </img>
    </div>

    <div id="carousel-items"  class="carousel-item" data-interval="2000">
      <img class="image-carousel-size" src="<?php echo base_url(); ?>assets/images/thumbnail/3.jpg" style="width: 100%;"  alt="...">
    </div>

    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="bg-mustard" data-aos="fade">
    <div class="container">
        <div class="row">
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
            <a href="https://www.twitter.com/CrastFM/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
            <a href="https://www.instagram.com/crast1078fm/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
            <a href=""  class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
            <a href="https://www.youtube.com/channel/UCVw2hX3tXPK44WR7a-qXAVg/featured" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
        </div>
    </div>
</div>

<div class="site-section bg-dark">
    <div class="container-fluid bg-dark" data-aos="fade-up">
        <div class="site-section-heading text-center mb-5 w-border mx-auto">
            <h2>Daily of Schedule Shows</h2>
        </div>
            <div class="row ">
                <div class="col-lg-1 "></div>
                <div class="col-lg-11">
                    <div class="row">
                        <div class="col-md col-3 pb-2"><button class="btn btn-outline-info" id="btnSenin" >Senin</button></div>
                        <div class="col-md col-3 pb-2"><button class="btn btn-outline-info" id="btnSelasa">Selasa</button></div>
                        <div class="col-md col-3 pb-2"><button class="btn btn-outline-info" id="btnRabu">Rabu</button></div>
                        <div class="col-md col-3 pb-2"><button class="btn btn-outline-info" id="btnKamis">Kamis</button></div>
                        <div class="col-md col-4 pb-2"><button class="btn btn-outline-info" id="btnJumat">Jumat</button></div>
                        <div class="col-md col-4 pb-2"><button class="btn btn-outline-info" id="btnSabtu">Sabtu</button></div>
                        <div class="col-md col-4 pb-2"><button class="btn btn-outline-info" id="btnMinggu">Minggu</button></div>     
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="table-responsive">
                <table class="table mt-4 text-white table-striped table-dark tableSenin">
                    <thead>
                        <th class="text-center">ACARA</th>
                        <th class="text-center">NAMA</th>
                        <th class="text-center">JAM</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><img  src='<?php echo base_url()?>assets/images/schedule/Isu_Morsun_4Agt.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Morning Sunshine</td>
                            <td class="text-center">08.00-10.00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src='<?php echo base_url()?>assets/images/schedule/Isu_CH_5Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Crast Hour</td>
                            <td class="text-center">10.00-12.00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src='<?php echo base_url()?>assets/images/schedule/Isu_SP_6Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Speaker</td>
                            <td class="text-center">12.00-13.00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img  src='<?php echo base_url()?>assets/images/schedule/Isu_TZ_7Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Traffic Zone</td>
                            <td class="text-center">13.00-15.00</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table mt-4 text-white table-striped table-dark tableSelasa" >
                    <thead>
                        <th class="text-center">ACARA</th>
                        <th class="text-center">NAMA</th>
                        <th class="text-center">JAM</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><img  src='<?php echo base_url()?>assets/images/schedule/Isu_Morsun_4Agt.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Morning Sunshine</td>
                            <td class="text-center">08.00-10.00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src='<?php echo base_url()?>assets/images/schedule/Isu_CH_5Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Crast Hour</td>
                            <td class="text-center">10.00-12.00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src='<?php echo base_url()?>assets/images/schedule/Isu_SP_6Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Speaker</td>
                            <td class="text-center">12.00-13.00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img  src='<?php echo base_url()?>assets/images/schedule/Isu_TZ_7Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Traffic Zone</td>
                            <td class="text-center">13.00-15.00</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table mt-4 text-white table-striped table-dark tableRabu" >
                    <thead>
                        <th class="text-center">ACARA</th>
                        <th class="text-center">NAMA</th>
                        <th class="text-center">JAM</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><img  src='<?php echo base_url()?>assets/images/schedule/Isu_Morsun_4Agt.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Morning Sunshine</td>
                            <td class="text-center">08.00-10.00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src='<?php echo base_url()?>assets/images/schedule/Isu_CH_5Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Crast Hour</td>
                            <td class="text-center">10.00-12.00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src='<?php echo base_url()?>assets/images/schedule/Isu_SP_6Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Speaker</td>
                            <td class="text-center">12.00-13.00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img  src='<?php echo base_url()?>assets/images/schedule/Isu_TZ_7Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Traffic Zone</td>
                            <td class="text-center">13.00-15.00</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table mt-4 text-white table-striped table-dark tableKamis" >
                    <thead>
                        <th class="text-center">ACARA</th>
                        <th class="text-center">NAMA</th>
                        <th class="text-center">JAM</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><img  src='<?php echo base_url()?>assets/images/schedule/Isu_Morsun_4Agt.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Morning Sunshine</td>
                            <td class="text-center">08.00-10.00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src='<?php echo base_url()?>assets/images/schedule/Isu_CH_5Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Crast Hour</td>
                            <td class="text-center">10.00-12.00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src='<?php echo base_url()?>assets/images/schedule/Isu_SP_6Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Speaker</td>
                            <td class="text-center">12.00-13.00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img  src='<?php echo base_url()?>assets/images/schedule/Isu_TZ_7Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Traffic Zone</td>
                            <td class="text-center">13.00-15.00</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table mt-4 text-white table-striped table-dark tableJumat" >
                    <thead>
                        <th class="text-center">ACARA</th>
                        <th class="text-center">NAMA</th>
                        <th class="text-center">JAM</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><img  src='<?php echo base_url()?>assets/images/schedule/Isu_Morsun_4Agt.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Morning Sunshine</td>
                            <td class="text-center">08.00-10.00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src='<?php echo base_url()?>assets/images/schedule/Isu_CH_5Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Crast Hour</td>
                            <td class="text-center">10.00-12.00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img src='<?php echo base_url()?>assets/images/schedule/Isu_SP_6Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Speaker</td>
                            <td class="text-center">12.00-13.00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><img  src='<?php echo base_url()?>assets/images/schedule/Isu_TZ_7Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Traffic Zone</td>
                            <td class="text-center">13.00-15.00</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table mt-4 text-white table-striped table-dark tableSabtu" >
                    <thead>
                        <th class="text-center">ACARA</th>
                        <th class="text-center">NAMA</th>
                        <th class="text-center">JAM</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><img  src='<?php echo base_url()?>assets/images/schedule/Isu_BD_8Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Breakdown</td>
                            <td class="text-center">19.30</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table mt-4 text-white table-striped table-dark tableMinggu" >
                    <thead>
                        <th class="text-center">ACARA</th>
                        <th class="text-center">NAMA</th>
                        <th class="text-center">JAM</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><img  src='<?php echo base_url()?>assets/images/schedule/Isu_BD_8Agt-copy.png'  width="150px;" height="150px;"></td>
                            <td class="text-center">Breakdown</td>
                            <td class="text-center">16.00</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
    </div>
</div>

<div class="bg-mustard" data-aos="fade">
    <div class="container">
        <div class="row">
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
            <a href="https://www.twitter.com/CrastFM/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
            <a href="https://www.instagram.com/crast1078fm/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
            <a href=""   class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
            <a href="https://www.youtube.com/channel/UCVw2hX3tXPK44WR7a-qXAVg/featured" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
        </div>
    </div>
</div>

<!-- Script Js Content -->
<?php
    if (isset($js)) {
        $this->load->view($js);
    }
?>