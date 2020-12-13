
<style>

.boxcontent{
  width:100%;
} 

.text_title_product{
  color:#ff6634;
  font-size:25px;
  font-weight:bold;
}
.text_price_cut{
  color:#666666;
  font-size:15px;
  font-weight:bold;
}
.text_price{
  color:#ff6634;
  font-size:20px;
  font-weight:bold;
}
.text_left{
  display:block;
    -webkit-transform: rotate(-90deg); 
    -moz-transform: rotate(-90deg); 
    transform: rotate(-90deg); 
    position:relative;
    white-space:nowrap;
    color:#FFF;
    bottom:0px;
    font-size:100px;
    font-weight:bold;
    min-height:100px;
    margin-top: 31px;
    margin-right: 95px;
}
.text_right{
  display:block;
    -webkit-transform: rotate(-90deg); 
    -moz-transform: rotate(-90deg); 
    transform: rotate(-90deg); 
    position:relative;
    white-space:nowrap;
    color:#fff;
    font-size:50px;
    font-weight:bold;
    min-height:100px;
    margin-left: 158px;
    margin-top: 488px;
}
.csall_bar{
  width:350px;
  height:280px;
  overflow: auto;
  border-top:1px solid #e0e0e0;
  border-bottom:1px solid #e0e0e0;
}

.box_cart{
  margin-left:-20px;
  margin-top:50px;
  font-size:13px;
  padding:15px;
  border:1px solid #ff6634;
  font-weight:bold;
  color: #ff6634;
}

.img{
    position: relative;
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
}

.boximage{
  width:100%;
  height:250px;
  display: inline-block;
}


.container {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 287px;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 13px;
  right: 0;
  height: %;
  width: 287px;
  opacity: 0;
  transition: .5s ease;
  background-color: #f35a24;
}

.container:hover .overlay {
  opacity: 0.8;
}

.text {
  width:200px;
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
}

span{
  color:#ff6634;
  font-size:20px;
  font-weight:bold;
}

</style>

<?php
$this->db->select("*");
$this->db->from("bike_for_sell");
$query = $this->db->get();
$bike = $query->result();
?>

<?php
$this->db->select("*");
$this->db->from("brand");
$query = $this->db->get();
$brand = $query->result();
?>



<div class="bg" style="margin-top:120px;"></div>
<div class="row"> <!--  ROW --->
<div class="col-1"></div>
<div class="col-10">
<div class="top" style="min-height:700px; background-color:#000;">
<br><br>

<img src="<?php echo base_url();?>img/product/02_3-18-07-2020_bike-for-sell_02.png" width="100%" alt=""/>

<br>
<br>
<br>

<div class="row"> <!--  ROW --->
  <div class="col-1"></div>
  <div class="col-11">
      <div id="owl-demo" class="owl-carousel owl-theme"> 
      <ul class="nav nav-tabs">
        <?php foreach($bike as $bikes): ?>

          <li><a data-toggle="tab" href="#home<?php echo $bikes->id; ?>">
                  <img src="<?php echo base_url();?>assets/uploads/img_promotion_product/<?php echo $bikes->img1;?>" width="10%" alt="" />
              </a>
          </li>    

        <?php endforeach; ?>
      </ul>
      
      </div>
  </div>
  <div class="col-2"></div>
  <div class="col-6" style="font-size:20px; font-weight:bold; color:#fff;">
  &nbsp; &nbsp;   01/<span>05</span><br>
  </div>
</div> <!--  ROW --->

</div> <!--- End col-10 ----->
</div> <!-- End TOP  -->
</div><!-- End ROW --->
<img src="<?php echo base_url();?>img/product/bike/02_3-18-07-2020_bike-for-sell_06.png"  width="100%" alt=""/>
<div class="container">


<div class="tab-content">
  <?php foreach($bike as $bikes): ?>




    <div id="home<?php echo $bikes->id;?>" class="tab-pane fade">
    <div class="row">
      <div class="boxcontent2" style="position:relative;">
      <img src="<?php echo base_url();?>img/product/bike/bg_boke.png" width="100%" alt=""/ >
      </div>
 <!-- boxcontent -->
 <div class="boxcontent" style="min-height:800px; position:absolute;">
 <div class="row" style="margin-top:115px;">
      <div class="col-3">
        <div class="text_right"><i>PANIGALE V4S 2018</i></div>
        <div class="text_left"><i>DUCATI</i></div>
      </div>
        <!-- box scall-->
        <div class="col-8"> 
          <!-- row scall -->
          <div class="row">
            <div class="col-6">
                <img src="<?php echo base_url();?>assets/uploads/img_promotion_product/<?php echo $bikes->img1;?>" width="100%" style="margin-left:20px;" alt="" />
            </div>
            <div class="col-1"></div>
            <div class="col-5">
            <div class="row"><!---- row  ----->
              <div class="col-12">
                  <div class="text_title_product"> <?php echo $bikes->brand;?> <br> <?php echo $bikes->model;?> </div>
                  <div class="text_price_cut"> <s><?php echo $bikes->discount;?> BAHT</s> </div>
                  <div class="text_price"> <?php echo $bikes->prict;?> BAHT </div>
                  <br><br>
              </div> 
              <div class="col-11 csall_bar"> <!----  csall_bar  ----->
                        <p>
                          <div style="font-weight:bold; font-size:20px;">DESCRIPTION</div><br>
                          <?php echo $bikes->descripion;?>
                        </p>
              </div> <!---- End Row  ----->
            </div><!---- End csall_bar  ----->
            <div class="col-12"> <!---- col-12  ----->
              <div class="row">
                  <div class="col-9">
                    <div class="box_cart"> + ADD TO CART
                      <img src="<?php echo base_url();?>img/product/bike/cart.png" width="25px" alt=""/ >
                    </div>
                      <br><br>
                  </div> 
              </div>
            </div><!---- End col-12  ----->



            </div>
          </div>
          <!--End row scall -->
        </div>
        <!-- End box scall-->
        <div class="row"  style="margin-top:-140px;">
          <div class="col-3"></div>
          <div class="col-8"><!--col-8-->
          <div class="col-12"> <!--col-12-->
          <div class="row"> <!--row-->

          <!-- box gallery 1-->
          <div class="boximage col-3">
            <div class="container">
              <a data-fancybox="gallery" href ="<?php echo base_url();?>assets/uploads/img_promotion_product/<?php echo $bikes->img2;?>"> 
              <img src="<?php echo base_url();?>assets/uploads/img_promotion_product/<?php echo $bikes->img2;?>" width="100%" class="image" alt="" />
                <div class="overlay">
                  <div class="text">FULL IMAGE</div>
                </div>
                </a>  
            </div>
          </div>
          <!-- box gallery 1-->

          <!-- box gallery 2-->
          <div class="boximage col-3">
            <div class="container">
              <a data-fancybox="gallery" href ="<?php echo base_url();?>assets/uploads/img_promotion_product/<?php echo $bikes->img3;?>"> 
              <img src="<?php echo base_url();?>assets/uploads/img_promotion_product/<?php echo $bikes->img3;?>" width="100%" class="image" alt="" />
                <div class="overlay">
                  <div class="text">FULL IMAGE</div>
                </div>
                </a>  
            </div>
          </div>
          <!-- box gallery 2-->
          <!-- box gallery 3-->
          <!-- <div class="boximage col-3">
            <div class="container">
              <a data-fancybox="gallery" href ="<?php echo base_url();?>assets/uploads/img_promotion_product/<?php echo $bikes->img4;?>"> 
              <img src="<?php echo base_url();?>assets/uploads/img_promotion_product/<?php echo $bikes->img4;?>" width="100%" class="image" alt="" />
                <div class="overlay">
                  <div class="text">FULL IMAGE</div>
                </div>
                </a>  
            </div>
          </div> -->
          <!-- box gallery 3-->
          <!-- box gallery 3-->
          <!-- <div class="boximage col-3">
            <div class="container">
              <a data-fancybox="gallery" href ="<?php echo base_url();?>assets/uploads/img_promotion_product/<?php echo $bikes->img5;?>"> 
              <img src="<?php echo base_url();?>assets/uploads/img_promotion_product/<?php echo $bikes->img5;?>" width="100%" class="image" alt="" />
                <div class="overlay">
                  <div class="text">FULL IMAGE</div>
                </div>
                </a>  
            </div>
          </div> -->
          <!-- box gallery 3-->

          </div><!-- end row -->
          </div><!-- end  col-12-->
        </div><!-- end col-8 -->

        </div>


 </div>
 </div>
  
  



    </div>

    </div>
    <?php endforeach; ?>    
</div>
</div>
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