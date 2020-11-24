<div class="header">
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <ul>
            <li style="margin-left:30px;"><img src="<?php echo base_url();?>img/icon_menu/MPK_logo-02.png" width="180" alt=""></li>
            <li style="margin-left:80px; margin-right:80px;"></li>
            <li class="active"><a href="<?php echo base_url('Home');?>">HOME</a></li>

            <li><a href="">PRODUCT</a>
           
            <ul>
                <li><a href="<?php echo base_url('select_your_bike');?>">SELECT YOUR BIKE</a></li>
                <li><a href="<?php echo base_url('category');?>">CATEGORY</a>
      
              <ul>
                    <li><a href="<?php echo base_url('Promotion');?>">HTML/CSS</a></li>
                    <li><a href="<?php echo base_url('Promotion');?>">jQuery</a></li>
                    <li><a href="<?php echo base_url('Promotion');?>">Other</a>
              </ul>      
              
              </li>
                <li><a href="<?php echo base_url('bike_for_sell');?>">BIKE FOR SELL</a></li>
            </ul>
            </li>
 
            <li><a href="<?php echo base_url('Promotion');?>">PROMOTION</a></li>
            <li><a href="<?php echo base_url('Service');?>">SERVICE</a></li>
            <li><a href="<?php echo base_url('News');?>">NEWS</a></li>
            <li><a href="<?php echo base_url('Gallery');?>">GALLERY</a></li>
            <li><a href="<?php echo base_url('About');?>">ABOUT</a></li>
            <li style="width:170px;">
            <input type="text" class="search_input_top" name="search" style="width:170px;">
            <i class="fas fa-search search_top" style="margin-left:-20px; position: absolute; fone-size:20px; z-imdex:1;"></i>
            </li>
            <li><a href="<?php echo base_url('Register');?>">Register</a></li>
            <li><a href="<?php echo base_url('Contact');?>"><i class="fas fa-map-marker-alt" style="color:#ff6634;"></i></a></li>
            <li><img src="<?php echo base_url();?>/img/icon_menu/menu1_14.png" width="90px" /></li>
        </ul>
    </nav>
</div>


<script>
$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 300) {
        $("#mainNav").css("background" , "#f7f7f7");  
	  }

	  else{
        $("#mainNav").css("background" , "transparent");	
	  }
  })
})
</script>