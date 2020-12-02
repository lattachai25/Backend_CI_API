
<style>
.bx-viewport, .bx-wrapper{
    position:relative;
    width:100%;
    height:auto!important;
    top:0;
    left:0;
}
.bx-wrapper .bx-controls-direction a {
    position: absolute;
    top: 50%;
    margin-top: -16px;
    outline: 0;
    width: 40px !important;
    height: 40px !important;
    text-indent: -9999px;
    z-index: 9999;
}
.bxslider, .bxslider li{
    height: 100% !important;
}
.bxslider li{
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;
}
.bx-wrapper .bx-viewport{
    border: none !important;
}
.bx-wrapper {
    -moz-box-shadow: 0 0 0px #ccc !important;
    -webkit-box-shadow: 0 0 0px #ccc !important;
    box-shadow: 0 0 9px #ccc !important;
    border: 0px solid #fff !important;
    background: #fff !important;
}

.bx-wrapper .bx-prev {
    left: 22px;
    background: url(img/promotion/previous_black.png) no-repeat 6px -1px;
}
.bx-wrapper .bx-next {
    right: 10px;
    background: url(img/promotion/next_black.png) no-repeat 0px 5px;
}

.bx-wrapper {
    position: relative;
    margin-bottom: 0px!important;
    padding: 0;
    zoom: 1;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
}
.bx-pager.bx-default-pager a.active, .bx-wrapper .bx-pager.bx-default-pager a:focus {
    background: #ff6634 !important;
}
.bx-pager.bx-default-pager a {
    color: #ff6634 !important;
    text-decoration: none;
    background-color: transparent;
}
.bx-wrapper .bx-pager.bx-default-pager a {
    background: #6660;
    text-indent: -9999px;
    display: block;
    width: 10px;
    height: 10px;
    margin: 0 5px;
    outline: 0;
    border: 2px solid;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

.container {
  position: relative;
  width: 270px;
  height: 270px;
  border:1px solid #bbbbbb;
  padding: 5px;
}

.image {
  display: block;
  width: 230px;
  margin-top:30px;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #ff5e0d;
}

.container:hover .overlay {
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

.show_top{
    width:150px;
    margin-top: -5px;
    margin-left: -5px;
    position: absolute;
    color:#FFF;
    font-size: 15px;
    font-weight: 700;
    background-image:url("<?php echo base_url();?>img/promotion/orange.png");
    background-repeat: no-repeat, repeat;
}
.show_top2{
    width:150px;
    margin-top: -5px;
    margin-left: -5px;
    position: absolute;
    color:#FFF;
    font-size: 15px;
    font-weight: 700;
    background-image:url("<?php echo base_url();?>img/promotion/red.png");
    background-repeat: no-repeat, repeat;
}

.show_top3{
    width:150px;
    margin-top: -5px;
    margin-left: -5px;
    position: absolute;
    color:#FFF;
    font-size: 15px;
    font-weight: 700;
    background-image:url("<?php echo base_url();?>img/promotion/blue.png");
    background-repeat: no-repeat, repeat;
}



.text_title{
    margin-top:10px;
    font-size:17px;
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

span{
   color:#ff6633; 
}

.bg{
    margin-top:0px;
}


</style>


<div class="bg"></div>
<img src="<?php echo base_url();?>img/promotion/2_01_02.png" width="100%" alt=""/>
<br><br>
<div class="row">
<div class="col-1"></div>
<div class="col-10">
        <div class="bxslider">
        @for ($i = 0; $i < 10; $i++)
        <div><img src="<?php echo base_url();?>img/promotion/1_03.png" width="100%" alt=""/></div>
        @endfor
        </div>
</div>
</div>
    <img src="<?php echo base_url();?>img/promotion/bar_top.png" width="100%" alt=""/>

<div class="row">
        <div class="col-1"></div>
        <div class="col-10" style="min-height:500px;">
            <div class="row justify-content-center">
                <div class="col-11" style="min-height:500px;">

                    <div class="row">
             
                 <div class="col-12" style="margin-top:30px; text-align: right; color:#999999; font-weight:700;"> <span>1</span> / 3 < | > </div>                   
                 <?php for ($i = 1; $i < 6; $i++) {?>
                        <div class="col-3">
                        <a href="{{ url('Promotion_show') }}">
                        <br>
                            <div class="container">
                                <div class="show_top"> &nbsp; &nbsp; HOT DEAL</div>
                                <center>
                                <img src="<?php echo base_url();?>img/promotion/item/3.png" class="image" />
                                </center>
                                <div class="overlay">
                                    <div class="text">READ MORD <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                            </a> 

                            <div class="row">
                                <div class="col-12 text_title">BRAKE DISC 321X6 EWC S1000 RR 2019</div>
                                <div class="col-12" style="height:10px;"></div>
                                <div class="col-2 text_price1"><s>฿3,210</s></div>
                                <div class="col-2 text_price2">฿1,234</div>
                                <div class="col-5"></div>
                                <div class="col-2"><img src="<?php echo base_url();?>img/promotion/cart.png" width="20px"></div>
                            </div>
                        </div>
                    <?php  }  ?>

                    <?php for ($i = 1; $i < 6; $i++) {?>
                        <div class="col-3">
                        <a href="{{ url('Promotion_show') }}">
                        <br>
                            <div class="container">
                                <div class="show_top2"> &nbsp; &nbsp; SAVE</div>
                                <center>
                                <img src="<?php echo base_url();?>img/promotion/item/11.png" class="image">
                                </center>
                                <div class="overlay">
                                    <div class="text">READ MORD <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                            </a>

                            <div class="row">
                                <div class="col-12 text_title">BRAKE DISC 321X6 EWC S1000 RR 2019</div>
                                <div class="col-12" style="height:10px;"></div>
                                <div class="col-2 text_price1"><s>฿3,210</s></div>
                                <div class="col-2 text_price2">฿1,234</div>
                                <div class="col-5"></div>
                                <div class="col-2"><img src="<?php echo base_url();?>img/promotion/cart.png" width="20px"></div>
                            </div>
                        </div>
                    <?php } ?>

                    <?php for ($i = 1; $i < 6; $i++) {?>
                        <div class="col-3">
                        <a href="{{ url('Promotion_show') }}">
                        <br>
                            <div class="container">
                                <div class="show_top3"> &nbsp; &nbsp; NEW</div>
                                <center>
                                <img src="<?php echo base_url();?>img/promotion/item/12.png" class="image">
                                </center>
                                <div class="overlay">
                                    <div class="text">READ MORD <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </a>
                            <div class="row">
                                <div class="col-12 text_title">BRAKE DISC 321X6 EWC S1000 RR 2019</div>
                                <div class="col-12" style="height:10px;"></div>
                                <div class="col-2 text_price1"><s>฿3,210</s></div>
                                <div class="col-2 text_price2">฿1,234</div>
                                <div class="col-5"></div>
                                <div class="col-2"><img src="<?php echo base_url();?>img/promotion/cart.png" width="20px"></div>
                            </div>
                            
                        </div>
                    <?php } ?>

                    <?php for ($i = 1; $i < 6; $i++) {?>
                        <div class="col-3">
                        <a href="{{ url('Promotion_show') }}">
                        <br>
                            <div class="container">
                                
                                <center>
                                <img src="<?php echo base_url();?>img/promotion/item/13.png" class="image" style="width:90%">
                                </center>
                                <div class="overlay">
                                    <div class="text">READ MORD <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                       </a> 
                            <div class="row">
                                <div class="col-12 text_title">BRAKE DISC 321X6 EWC S1000 RR 2019</div>
                                <div class="col-12" style="height:10px;"></div>
                                <div class="col-2 text_price1"><s>฿3,210</s></div>
                                <div class="col-2 text_price2">฿1,234</div>
                                <div class="col-5"></div>
                                <div class="col-2"><img src="<?php echo base_url();?>img/promotion/cart.png" width="20px"></div>
                            </div>
                        
                        </div>
                    <?php } ?>


                    </div>
                </div>
            </div>
        </div>
</div>

<br><br>
<div class="row">
<div class="col-4"></div>
<div class="col-4"><center> <img src="<?php echo base_url();?>img/promotion/poit.png" width="250px" alt=""/> </center></div>
<div class="col-4"></div>
</div>
<br>


<img src="<?php echo base_url();?>img/promotion/03-13-06-2020_promotion_10.png" width="100%" alt=""/>


   <script>
        $('.bxslider').bxSlider({
        pager: true,
        boolean:true,
        
        });
  </script>