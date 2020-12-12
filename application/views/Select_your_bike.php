<style>
.bg_select{
    height:500px;
    background-image:url('<?php echo base_url();?>img/product/BG_Selectyourvehicle.png');
    background-repeat: no-repeat;
    background-size:cover;
    background-size:100% 100%;
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
.bar_item{
    width:100%;
    min-height:180px;
    background-image:url('<?php echo base_url();?>img/product/bar_top2.png');
    background-repeat: no-repeat;
    background-size:100% 100%;
}
.textbrand{
    margin-top:0px;
    font-size:35px;
    text-align:center;
    font-weight:bold;
    color:#ff6634;
}
.textbrand_sub{
    margin-top:10px;
    font-size:18px;
    text-align:center;
    font-weight:bold;
    color:#666666;  
}
.text_bmw{
    margin-left:50px;
    margin-top:100px;
    font-size:18px;
    text-align:left;
    font-weight:bold;
    color:#666666;   
}



.container {
  position: relative;
  width: 270px;
  height: 270px;
  border:1px solid #bbbbbb;
  padding: 0px;
}

.image {
  margin-top:0px;
  display: block;
  width: 268px;
  height: 268px;
  background-size: cover;
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

.textmenu{
    font-size:14.5px;
}

.sizemenu{
    color:#666666; 
    font-weight:bold; 
    padding-top:8px; 
    padding-bottom:8px;
}
.search{
    color:#ff6634;
    margin-top:25px;
}

.search_input{
  margin-top:20px;
  width:111%;
  height:30px;  
  border: none;
  border-bottom: 2px solid #ff6634;
  float:left;
  margin-left: -13px;
}
.search_input:focus {
    outline: none;
}
.unline{
    width:100%;
    border-bottom:1px solid #000;
    margin-bottom:10px;
}
</style>
<?php
$this->db->select("*");
$this->db->from("brand");
$query = $this->db->get();
$brand = $query->result();
?>
<?php
$this->db->select("*");
$this->db->from("model");
$query = $this->db->get();
$model = $query->result();
?>

<?php
$this->db->select("*");
$this->db->from("year");
$query = $this->db->get();
$year = $query->result();
?>



<div class="bg" style="margin-top:120px;"></div>
<div class="row">
    <div class="col-12 bg_select">

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
            <?php foreach($brand as $brands): ?>
            <option><?php echo $brands->name;?></option>
            <?php endforeach; ?>
        </select>
        </div>

        <div class="form-group col-md-3">
        <select id="inputState" class="form-control">
            <option selected> MODEL <i class="far fa-caret-circle-down"></i></option>
            <?php foreach($model as $models): ?>
            <option><?php echo $models->name;?></option>
            <?php endforeach; ?>
        </select>
        </div>

        <div class="form-group col-md-3">
        <select id="inputState" class="form-control">
            <option selected> YEAR <i class="far fa-caret-circle-down"></i></option>
            <?php foreach($year as $years): ?>
            <option><?php echo $years->name_year;?></option>
            <?php endforeach; ?>
            
        </select>
        </div>

        <div class="form-group col-md-2 bottom_searce">
        <a href="" type="submit" > SEARCE </a>
        </div>
    </div>
    </div>
</div>


    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="bar_item">
        <br><br>
                <div class="col-12 textbrand"><center> BMW - S1000RR - 2020 </center></div>
                <div class="col-12 textbrand_sub"><center> 25 ITEMS FOUND </center></div>

        </div>
    </div>    
</div>



<!-- row min-height -->
<div class="row">
<div class="col-12" style="background:#fff; min-height:800px;">
    <div class="row">
        <div class="col-4 text_bmw">
        HOME / BMW / S1000RR / 2020 
        </div>
    </div>

<!-- barBMW -->
<div class="row" style="margin-top:50px;">
<div class="col-1"></div>
<div class="col-2">
<div class="row">
    <div class="col-12">

        <div class="row">
        <div class="col-12"><br></div> 
            <div class="unline">
                <div class="row">  
                <div class="col-6" style="color:#ff6634; font-weight:bold; font-size:18px; ">FILTERS</div>
                <div class="col-6" style="color:#ff6634; font-weight:bold; font-size:12px; margin-bottom:-10px; text-align: right;">RESET FILTERS</div>
                </div> 
            </div>
           
        </div>
        <div class="row" style="background:#000; font-weight:bold;color:#fff; padding-top:6px; padding-bottom:5px;"> 
            <div class="col-10 textmenu"> CATEGORY </div>
            <div class="col-1"> - </div>
        </div>

        <div class="row" style="color:#666666; font-weight:bold; margin-top:15px; padding-top:8px; padding-bottom:8px;"> 
            <div class="col-10 textmenu"> BRAKE SYSTEM </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> ENGINE & CLUTCH </div>
            <div class="col-1"> + </div>
        </div>

        <div class="row sizemenu"> 
            <div class="col-10 textmenu" style="color:#ff6634;"> EXHAUST </div>
            <div class="col-1">  </div>
        </div>

        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> FLUID TANK</div>
            <div class="col-1">  </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> GRIPS & HANDLEBAR </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> INDICATOR LIGHT </div>
            <div class="col-1">  </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> MAINTENANCE & CARE </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> MIRROR</div>
            <div class="col-1">  </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu" style="color:#ff6634;"> PARTS & ACCESSORIES </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> PROTECTION </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> STEERING & SUSPENSION </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> TRANSMISSION </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> WHEELS </div>
            <div class="col-1"> + </div>
        </div>
        <div class="row sizemenu"> 
            <div class="col-10 textmenu"> OTHER </div>
            <div class="col-1"> + </div>
        </div>
    </div>


    <div class="col-12" style="background:#000; color:#fff; font-weight:bold; font-size:14px; padding-top:8px; padding-bottom:8px;">BRAND</div>
    <div class="col-12 input">

    <input type="text" class="search_input" name="search" width="48">
    <i class="fas fa-search search" style="margin-left:-20px; position: absolute; fone-size:20px; z-imdex:1;"></i>
    </div>

</div>


</div>
<div class="col-8">
    <div class="row"><!-- row Bar -->
        <div class="col-2" style="color:#666666; font-size:14px; font-weight:bold; padding-top:60px;"> 11 ITEMS </div>
        <div class="col-10"><img src="<?php echo base_url();?>img/product/bar_right.png" style="float:right;" width="100%" alt=""/> </div>
    </div><!-- row Bar -->



    <!-- ROW BOX -->
    <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
    <div class="row">
                         <?php for ($i = 1; $i < 13; $i++) { ?>
                        <div class="col-4">
                        <a href="<?php echo base_url('Promotion_show'); ?>">
                        
                        <br>
                            <div class="container">
                                <center>
                                <img src="<?php echo base_url();?>img/product/<?php echo $i ?>.png" class="image" />
                                </center>
                                <div class="overlay">
                                    <div class="text">READ MORD <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                            </a> 

                            <div class="row">
                                <div class="col-12 text_title">SLIP ON CARBON S1000 RR 2019</div>
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
    <!-- ROW BOX -->
    <br>
    <div class="row">
                <div class="col-4"></div>
                    <div class="col-4">
                    <img src="<?php echo base_url();?>img/gallery/back_orange.png"  width="10px" />
                     &nbsp; &nbsp; 1 &nbsp; &nbsp; 2 &nbsp; &nbsp; 3 &nbsp; &nbsp; 4 &nbsp; &nbsp; 5 &nbsp; &nbsp; <span> 6 </span>&nbsp; &nbsp; 
                    <img src="<?php echo base_url();?>img/gallery/next_orange.png"  width="10px" />
                     </div>
                <div class="col-4"></div>     
            </div> 
    <br>       
    </div>
   
    <img src="<?php echo base_url();?>img/product/bat_footer.png" style="float:right;" width="100%" alt=""/>
</div>
</div>

</div>
</div><!-- row min-height -->