<style>
#mainNav{
  background:#f7f7f7;
}
nav a{
  color:#000;
}
.active {
  color:#000;
}
nav ul ul li {
    width: 175px !important;
    float: none;
    display: list-item;
    position: relative;
    background: #f7f7f7;
}
</style>


<?php
$this->db->select("*");
$this->db->from("main_category");
$query = $this->db->get();
$main_category = $query->result();
?>


<div class="row"></div>
<nav class="navbar fixed-top" id="mainNav">
<div class="col-1"></div>
<div class="col-11">
        <ul>
            <li><img src="<?php echo base_url();?>img/icon_menu/MPK_logo-02.png" width="150" alt=""></li>
    
            <li style="margin-left:50px;"></li>
            <li><a href="<?php echo base_url('Home');?>" style="color:#000;">HOME</a></li>

            <li <?php if($this->uri->segment(1)=="")
            {echo 'class="active"';}
            elseif ($this->uri->segment(1)=="")
            {echo 'class="active"';}
            elseif ($this->uri->segment(1)=="")
            {echo 'class="active"';}
            ?> ><a href="">PRODUCT</a>
           
            <ul>
                <li><a href="<?php echo base_url('select_your_bike');?>">SELECT YOUR BIKE</a></li>
                <li><a href="<?php echo base_url('category');?>">CATEGORY</a>
      
              <ul>
                <?php foreach($main_category as $main_categorys): ?>
                    <li><a href="<?php echo base_url('');?>"><?php echo $main_categorys->Name;?></a></li>
                <?php endforeach; ?>
              </ul>      
              
              </li>
                <li><a href="<?php echo base_url('bike_for_sell');?>">BIKE FOR SELL</a></li>
            </ul>
            </li>
 
            <li <?php if($this->uri->segment(1)=="Promotion"){echo 'class="active"';}?>><a href="<?php echo base_url('Promotion');?>">PROMOTION</a></li>
            <li  <?php if($this->uri->segment(1)=="Service"){echo 'class="active"';}?>><a href="<?php echo base_url('Service');?>">SERVICE</a></li>
            <!-- <li  <?php if($this->uri->segment(1)=="News"){echo 'class="active"';}?>><a href="<?php echo base_url('News');?>">NEWS</a></li> -->

            <li <?php if($this->uri->segment(1)=="")
            {echo 'class="active"';}
            elseif ($this->uri->segment(1)=="")
            {echo 'class="active"';}
            elseif ($this->uri->segment(1)=="")
            {echo 'class="active"';}
            ?> ><a href="">NEWS</a>
           
            <ul>
                <li><a href="<?php echo base_url('News');?>">NEWS & Update</a></li>
                <li><a href="<?php echo base_url('News_idea');?>">IDEA</a></li>
            </ul>
            </li>




            <li  <?php if($this->uri->segment(1)=="Gallery"){echo 'class="active"';}?>><a href="<?php echo base_url('Gallery');?>">GALLERY</a></li>
            <li  <?php if($this->uri->segment(1)=="About"){echo 'class="active"';}?>><a href="<?php echo base_url('About');?>">ABOUT</a></li>
            <li style="width:100px;">
            <input type="text" class="search_input_top" name="search" style="width:100px;">
            <i class="fas fa-search search_top" style="margin-left:-20px; position: absolute; fone-size:20px; z-imdex:1;"></i>
            </li>
            <li><a href="<?php echo base_url('Register');?>">Register</a></li>
            <li><a href="<?php echo base_url('Contact');?>"><i class="fas fa-map-marker-alt" onclick="
            this.style.Color = '#000'; 
            this.style.color = '#ff6634';
            <?php if($this->uri->segment(1)=="About"){echo "this.style.color = '#ff6634';";}?>
            "></i></a></li>
            <li><img src="<?php echo base_url();?>/img/icon_menu/menu1_14.png" width="70px" /></li>
        </ul>
</div>  
<div class="col-1"></div>
    </nav>


</div>

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
      $("#mainNav").css("background" , "#f7f7f7");  
        $("nav a").css("color","#000");
        $(".active").css("color","#000");
	  }
  })
})
</script>