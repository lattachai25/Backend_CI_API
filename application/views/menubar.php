
<style>
nav ul ul li {
    width: 175px !important;
    float: none;
    display: list-item;
    position: relative;
    background: #f7f7f7;
}
</style>

<nav class="navbar fixed-top" id="mainNav">
  <div class="col-12" style="border:1px solid #000;">
    <div class="row" style="border:1px solid #000;">
      <div class="col-1"></div>
      <div class="col-10">
        <ul>
          <li><img src="<?php echo base_url();?>img/icon_menu/MPK_logo-02.png" width="150" alt=""></li>
          <li style="margin-left:25px;"></li>
          <li class="active" ><a href="<?php echo base_url('Home');?>" style="color:#000;">HOME</a></li>
          <li><a href="">PRODUCT</a>
            <ul>
              <li><a href="<?php echo base_url('select_your_bike');?>">SELECT YOUR BIKE</a></li>
              <li><a href="<?php echo base_url('category');?>">CATEGORY</a></li>
                <ul>
                  <li><a href="<?php echo base_url('Promotion');?>">HTML/CSS 1111</a></li>
                  <li><a href="<?php echo base_url('Promotion');?>">jQuery</a></li>
                  <li><a href="<?php echo base_url('Promotion');?>">Other</a></li>
                </ul>      
              <li><a href="<?php echo base_url('bike_for_sell');?>">BIKE FOR SELL</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('Promotion');?>">PROMOTION</a></li>
          <li><a href="<?php echo base_url('Service');?>">SERVICE</a></li>
          <li><a href="<?php echo base_url('News');?>">NEWS</a></li>
          <li><a href="<?php echo base_url('Gallery');?>">GALLERY</a></li>
          <li><a href="<?php echo base_url('About');?>">ABOUT</a></li>
          <li style="width:100px;">
            <input type="text" class="search_input_top" name="search" style="width:100px;">
              <i class="fas fa-search search_top" style="margin-left:-20px; position: absolute; font-size:20px; z-index:1;"></i>
          </li>
          <li><a href="<?php echo base_url('Register');?>">Register</a></li>
          <li><a href="<?php echo base_url('Contact');?>"><i class="fas fa-map-marker-alt" style="color:#ff6634;"></i></a></li>
          <li><img src="<?php echo base_url();?>/img/icon_menu/menu1_14.png" width="70px" /></li>
        </ul>
      </div>  
      <div class="col-1"></div>        
    </div>
  </div>
</nav>


<script>
$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 300) {
        $("#mainNav").css("background" , "#f7f7f7");  
        $("nav a").css("color","#000");
        $(".active").css("color","#000");
	  }

	  else{
        $("nav a").css("color","#FFF");
        $(".active a").css("color","#000");
        $("#mainNav").css("background" , "transparent");	
	  }
  })
})
</script>