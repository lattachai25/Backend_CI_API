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
    background: url(<?php base_url();?>img/home/prev.png) no-repeat !important;
}
.bx-wrapper .bx-next {
    right: 113px;
    background: url(<?php base_url();?>img/home/next.png) no-repeat !important;
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
    background-image:url(<?php base_url();?>img/product/BG_Selectyourvehicle.png);
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
    background-image:url(<?php base_url();?>img/home/bg_play.png);
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





</style>
 <!-- slide -->

    <div class="bxslider">
       <?php for ($i = 0; $i < 10; $i++) { ?>
        <div><img src="<?php base_url();?>img/home/slider_bar.png" width="100%" alt=""/></div>
         <div><img src="<?php base_url();?>img/home/slider_bar.png" width="100%" alt=""/></div>
       <?php }?>
    </div>

 <!-- slide -->


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