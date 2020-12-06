<style>
.bx-wrapper {
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 0;
}



.bx-wrapper .bx-controls-direction a {
    position: absolute;
    top: 90%;
    margin-top: 0px;
    outline: 0;
    width: 146px;
    height: 55px;
    text-indent: -9999px;
    z-index: 9999;
}


.bx-wrapper .bx-prev {
    left: 134px;
    background: url(img/home/prev.png) no-repeat !important;
}
.bx-wrapper .bx-next {
    right: 113px;
    background: url(img/home/next.png) no-repeat !important;
}

.bx-wrapper {
    position: relative;
    margin-bottom: 0px !important;
    padding: 0;
    zoom: 1;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
}
.text4{
    color:#000;
    font-size: 18px;
    font-weight: bold;
}

.bg_select{
    height:500px;
    background-image:url('<?php echo base_url();?>img/product/BG_Selectyourvehicle.png');
    background-repeat: no-repeat;
    background-size:cover;
}
.text_select{
    color:#ffff;
    text-align: center;
    font-size:35px;
    font-weight: 600;
}

#inputState{
    text-align:center;
    font-weight:bold;
    color:#ff6634;
    padding-left: 60px;
}
.bottom_searce{
    text-align:center;
    font-weight:bold;
    color:#fff;
    background:#ff6634;
}
.bottom_searce a{
    padding-top:7px;
    color:#fff;
}
.bg_play{
    height:700px;
    background-image:url('<?php echo base_url();?>img/home/bg_play.png');
    background-repeat: no-repeat;
    background-size:cover;
    background-size:100% 100%;
    
}
.text_vdo{
    color:#fff;
    text-align:left;
    font-weight:bold;
    font-size:50px;
}
.play_vdo{
   margin-top:20%;
}
.icon_play{
    color:#fff;
    text-align:center;
    font-weight:300;
    font-size:18px;
}



.box_best{
  width: 290px;
  border:1px solid #bbbbbb;
  object-fit: cover;
}

.container2 {
  position: relative;
  padding-left:20px;
  padding-right:20px;
  width: 300px;
}

.image {
  display: block;
  width: 300px;
  height:300px;
  background-size: cover;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: -2px;
  right: 0;
  width: 139%;
  height: 350px;
  opacity: 0;
  transition: .5s ease;
  background-color: #ff5e0d;
}

.container2:hover .overlay {
  opacity: 0.8;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  border:2px solid #fff;
  padding:10px;
  width:200px;
}

.text_title{
    margin-top:10px;
    font-size:12px;
    color:#000;
    font-weight: bold;
}
.text_price1{
font-size:15px;
color:#bbbbbb;
font-weight: bold;
}
.text_price2{
  padding-left:30px;
  font-size:15px;
  color:#ff5e0d;
  font-weight: bold;
}

.text_price3{
  padding-left:13px;
  font-size:14px;
  color:#000;
  font-weight: bold;
}

.text_price4{
  padding-left:13px;
  font-size:12px;
  color:#000;
  font-weight: bold;
}



span{
  font-size:12px;
  color:#000; 
  font-weight: 500;
}

.bgcar{
    background: #fff;
    min-height: 500px;
}
.bg_slide{
    z-index:-9;
    position: relative;
}
.text_slide{
    left:100px;
    bottom: 260px;
    font-size:55px;
    font-weight:bold;
    color:#fff;
    position: absolute;
}
.box_o{
    border:1px solid #fff;
    padding-left:20px;
    padding-right:20px;
    left:102px;
    bottom: 215px;
    font-size:25px;
    font-weight:bold;
    color:#ff5e0d;
    position: absolute;
}


</style>
 <!-- slide -->

    <div class="bxslider">
        <!-- @for ($i = 0; $i < 10; $i++) -->
        
        <div>
        <div class="text_slide"> The Ultimate Race</div>
        <div class="box_o">Explore more</div>
        <div class="bg_slide">
        <img src="<?php echo base_url();?>img/home/slidebanner.jpg" width="100%" alt=""/>
        </div>
        </div>

        <div>
        <div class="text_slide"> The Ultimate Race</div>
        <div class="box_o">Explore more</div>
        <div class="bg_slide">
        <img src="<?php echo base_url();?>img/home/slidebanner.jpg" width="100%" alt=""/>
        </div>
        </div>

        <!-- @endfor -->
    </div>

 <!-- slide -->
<!-- Our Concept -->    
    <div class="row" style="background:#f5f5f5;">
    <div class="col-12">
        <div class="row" style="margin-top:80px; margin-bottom:80px;">
            <div class="col-1"></div>
            <div class="col-10">
      <img src="<?php echo base_url();?>img/home/MPK_Design_001_OK_150820_1A_create_10.png" width="100%" alt=""/>
               <br>
               <br>
               <br>
               <br>               
                <div class="row">
                    <div class="col-3">
                        <div class="row">
                            <div class="col-5"><img src="<?php echo base_url();?>img/home/back_icon/BestQuality.png" width="50px" alt=""></div>
                            <div class="col-7 text4">BEST <br> QUALITY</div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-5"><img src="<?php echo base_url();?>img/home/back_icon/Service.png" width="50px" alt=""></div>
                            <div class="col-7 text4">EXPERTISE <br> SERVICE</div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-5"><img src="<?php echo base_url();?>img/home/back_icon/Guarantee.png" width="50px" alt=""></div>
                            <div class="col-7 text4">AUTHENTIC <br> GUARANTEE</div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-5"><img src="<?php echo base_url();?>img/home/back_icon/SH_01.png" width="50px" alt=""></div>
                            <div class="col-7 text4">SHIPPING <br> WORLDWIDE</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
<!-- Our Concept -->    

<!-- SELECT YOUR BIKE -->    
<div class="col-12">
    <div class="row">
    <div class="col-1"> </div>
        <div class="col-10 bg_select">
            <div class="row">
                <div class="col-12" style="margin-top:160px;"></div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 text_select"> SELECT YOUR BIKE  </div>
                <div class="col-3"></div>
            </div>
            <div class="row" style="margin-top:100px;">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <select id="inputState" class="form-control">
                                <option selected> BRAND <i class="far fa-caret-circle-down"></i> </option>
                                <option>ADG</option>
                                <option>Aella</option>
                                <option>Alpha Racing</option>
                                <option>Austin Racing</option>
                                <option>Bonamici</option>
                                <option>Brembo</option>
                                <option>CNC RACING</option>
                                <option>Delight</option>
                                <option>Desmoworld</option>
                                <option>Dinavolt</option>
                                <option>DP</option>
                                <option>Far</option>
                                <option>Futurismoto</option>
                                <option>GB Racing</option>
                                <option>GIAMOTO</option>
                                <option>Hex escan</option>
                                <option>Jetprime</option>
                                <option>Kellermann</option>
                                <option>Kohken</option>
                                <option>Luimoto</option>
                                <option>Magical Racing</option>
                                <option>Motogadget</option>
                                <option>Motul</option>
                                <option>MPK</option>
                                <option>MRA</option>
                                <option>Nexzter</option>
                                <option>NRC</option>
                                <option>Optimate</option>
                                <option>PVM</option>
                                <option>Rizoma</option>
                                <option>RK CHAIN</option>
                                <option>STM Rock</option>
                                <option>Suter</option>
                                <option>Woodcraft</option>
                                <option>Yuasa</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <select id="inputState" class="form-control">
                                <option selected> MODEL <i class="far fa-caret-circle-down"></i></option>
                                <option> 1098/SF/Diavel</option>
                                <option>1199</option>
                                <option>1199/899</option>
                                <option>1299/959</option>
                                <option>748/848/916/996/998/1098/1198</option>
                                <option>795/796</option>
                                <option>899</option>
                                <option>899/1299</option>
                                <option>899/959/1199/1299 Panigale </option>
                                <option>959/899/1199/1299 panigale</option>
                                <option>BMW</option>
                                <option>BMW C600Sport /C650GT</option>
                                <option>BMW R9T</option>
                                <option>C600</option>
                                <option>C600/C650</option>
                                <option>CBR1000R 2018</option>
                                <option>CBR600R</option>
                                <option>CBR600RR</option>
                                <option>Classic</option>
                                <option>DIAVEL</option>
                                <option>Diavel / Monster</option>
                                <option>Diavel /1199</option>
                                <option>DIAVEL /M821/M1200</option>
                                <option>Diavel 2012</option>
                                <option>Diavel 2012-14</option>
                                <option>Diavel 2014</option>
                                <option>Diavel 2015</option>
                                <option>Diavel,1098-1198,Multi 1200,SF</option>
                                <option>Diavel,1098-1198,Multi 1200,SF/Panigale1199/1299/V4</option>
                                <option>Diavel/Hyper821/939,Monster797/821/1200,MTS950/1200/1260</option>
                                <option>Diavel/Xdiavel/Hyper1100</option>
                                <option>DUCATI</option>
                                <option>Ducati Scrambler </option>
                                <option>ER6N '09 up</option>
                                <option>ER-6N 2012</option>
                                <option>F800R/ R1200GS/ S1000RR</option>
                                <option>GS1200</option>
                                <option>gsxr1000 -9-11</option>
                                <option>hyp821</option>
                                <option>Hyper 1100</option>
                                <option>HYPER796</option>
                                <option>Hyper796/Monster796/1100/ MTS1200/1260/Scrambler</option>
                                <option>Hyper821</option>
                                <option>Hyper821/Monster821/Multistrada</option>
                                <option>Hyper821/MTS</option>
                                <option>Hypermotard 796/1100</option>
                                <option>Hypermotard 821</option>
                                <option>Hypermotard/Strada 2013</option>
                                <option>Kawasaki all</option>
                                <option>M795/796</option>
                                <option>M796/1100/848</option>
                                <option>M796/HYP821</option>
                                <option>M797/M1200 '17/M821 2018</option>
                                <option>M821 14-17</option>
                                <option>M821/795/796</option>
                                <option>Monster</option>
                                <option>Monster 696/796/1100</option>
                                <option>Monster 796/1100, Hyper796/821/939,SF848</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <select id="inputState" class="form-control">
                                <option selected> YEAR <i class="far fa-caret-circle-down"></i></option>
                                <option>2020</option>
                                <option>2019</option>
                                <option>2018</option>
                                <option>2017</option>
                                <option>2016</option>
                                <option>2015</option>
                                <option>2014</option>
                                <option>2013</option>
                                <option>2012</option>
                                <option>2011</option>
                                <option>2010</option>
                                <option>2000</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2 bottom_searce">
                            <a href="" type="submit" > SEARCH </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SELECT YOUR BIKE --> 
<!-- Best Seller -->
<div class="row">
<div class="col-1"></div>
<div class="col-10">
    <img src="<?php echo base_url();?>img/home/MPK_Design_001_OK_150820_1A_create_12.png" width="100%" height="100px" alt=""/>
</div>
<div class="col-1"></div>
</div>
<!-- Best Seller -->
 <!-- play -->
 <div class="col-1"></div>
<div class="col-10 bg_play">
    <div class="row play_vdo">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="row">
                <div class="col-8 text_vdo">
                S1000RR 2020 <br> Review
                </div>
                <div class="col-4 icon_play">
                <center>
                PLAY
                <img src="<?php echo base_url();?>img/home/Play_icon.png" width="100px;"/>                
                </center>

                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>

 <!-- play -->
 <div class="row">
 <div class="col-1"></div>
<div class="col-10" style="position:relative; margin-top:-150px;">
 <img src="<?php echo base_url();?>img/home/carbar.png" width="101%"/>
    <div class="row bgcar">
            <!-- ROW BOX -->
        <div class="col-2"></div>
        <div class="col-9">
        <div class="row">
           <?php for ($i = 1; $i < 4; $i++) { ?>
            <div class="col-4">
                <div class="row">
                    <div style="border:3px solid #e8e8e8; width:420px; height:450px; backgrount-color:#fff;">
                        <div class="container2">
                            <center>
                                <img src="<?php echo base_url();?>img/home/1/<?php echo $i ?>.jpg" width="120%" style="margin-left:10%;" />
                            </center>
                            <div class="overlay">
                                <div class="text">READ MORD <i class="fas fa-arrow-right"></i></div>
                            </div>
                        </div>
                    <div class="row" style="margin-top:0px;">
                    <div class="col-9 text_price4">
                    &nbsp; &nbsp; Alpha racing brake disc 320x6 EVO <br> 
                    &nbsp; &nbsp; BMW S1000RR 2019<br>
                    <span>&nbsp; &nbsp; จ่นเบรคหน้า Alpha</span>
                    </div>
                    <div class="col-2 text_price3">
                        28,500฿
                    </div>
                    </div>    
                    </div> 
                </div>   
            </div>
           <?php } ?>
        </div>
        <br>
        <center>
        <img src="<?php echo base_url();?>img/home/poit.png" alt="">
        </center>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- ROW BOX -->
</div>
</div>
<!-- play -->
<!-- New Arrivals -->
<div class="row">
<div class="col-1"></div>
<div class="col-10" style="min-height:700px;">
    <img src="<?php echo base_url();?>img/home/MPK_Design_001_OK_150820_1A_create_16.png" width="100%" alt=""/>

    <!-- ROW BOX -->
    <div class="row">
<div class="col-1"></div>
        <div class="col-10">

        <div class="row">
            <?php for ($i = 1; $i < 5; $i++) { ?>
            <div class="col-3">
                <div class="row">
                    <div style="border:3px solid #e8e8e8; margin:10px; height:400px; backgrount-color:#fff;">
                        <img src="<?php echo base_url();?>img/home/2/<?php echo $i ?>.png" width="100%" />
                    <div class="row" style="margin-top:10px;">
                    <div class="col-9 text_price3">
                    &nbsp; &nbsp; Brembo GP4 MS <br><br>
                    <span>&nbsp; &nbsp; Monoblock 100mm ปั้นเบรมโบ้</span>
                    </div>
                    <div class="col-2 text_price3">
                        9,999฿
                    </div>
                    </div>    
                    </div> 
                </div>   
            </div>
            <?php } ?>
        </div>
        <br>
        <center>
        <img src="<?php echo base_url();?>img/home/poit.png" alt="">
        </center>
        </div>
    </div>
    <!-- ROW BOX -->

    </div>
</div>
<!-- New Arrivals -->

<!-- bike for sell -->
<div class="row">
<div class="col-1"></div>
<div class="col-8">
    <div class="top" style="min-height:900px; background-color:#000;">
    <img src="<?php echo base_url();?>img/home/MPK_Design_001_OK_150820_1A_create_19.png" width="100%" alt=""/>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-11">
                <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item"><img src="<?php echo base_url();?>img/product/bike/01-1.png" width="100%" /></div>
                <div class="item"><img src="<?php echo base_url();?>img/product/bike/Bike_02.png" width="100%" /></div>
                <div class="item"><img src="<?php echo base_url();?>img/product/bike/Bike_03.png" width="100%" /></div>
                <div class="item"><img src="<?php echo base_url();?>img/product/bike/Bike_04.png" width="100%" /></div>
                </div>
            </div>
            <div class="col-2"></div>
            <div class="col-6" style="font-size:20px; font-weight:bold; color:#fff;">
            &nbsp; &nbsp;   01/05<br>
            <img src="<?php echo base_url();?>img/product/bike/barslide_top.png" width="50%" />
            </div>
        </div>

    </div>
</div>


</div>
<!-- bike for sell -->
<div class="row">
<img src="<?php echo base_url();?>img/home/MPK_Design_001_OK_150820_1A_create_21.png" width="98%" alt=""/>
</div>

    <script>
        $('.bxslider').bxSlider({
        pager: false,
        boolean:false,
        mode: 'fade',
        auto: true,
        pause: 100000
     });
    </script>
<script>
$(document).ready(function() {
 var owl = $("#owl-demo");
 owl.owlCarousel({
     items : 4,
     itemsDesktop : [1000,4],
     itemsDesktopSmall : [900,4],
     itemsTablet: [600,4],
     itemsMobile : false,
 });


});
</script>