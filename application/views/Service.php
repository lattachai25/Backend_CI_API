<style>
html {
  scroll-behavior: smooth;
}
.bom_m{
    width:200px;
    height:200px;
    padding:10px;
-webkit-box-shadow: 0px 0px 11px 0px rgba(0,0,0,0.93);
-moz-box-shadow: 0px 0px 11px 0px rgba(0,0,0,0.93);
box-shadow: 0px 0px 11px 0px rgba(0,0,0,0.93);
margin:10px;
}
.icon_m{
    padding:22px;
    text-align: center;
}

.text{
    color:#000;
    font-family:'helvetica';
    text-align: right;
    font-weight:bold;
    text-align: center;
    font-size:20px;
}
.text:hover{
    color:red;
    font-family:'helvetica';
    text-align: right;
    font-weight:bold;
    text-align: center;
    font-size:20px;
}





.card {
        width: 200px;
        height:180px;
        position: relative;
        display: inline-block;
    }
    .card .img-top {
        display: none;
        position: absolute;
        top: 0;
        left: 41px !important;
        z-index: 99;
    }
    .card:hover .img-top {
        display: inline;
    }
    .card:hover .text{
    color:#fc9d44;
    font-family:'helvetica';
    text-align: right;
    font-weight:bold;
    text-align: center;
    font-size:20px;
}


.card {
    position: relative;
    display: -ms-flex;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    box-shadow: 5px 5px 10px  rgba(0,0,0,0.2);
    
    border: 0px solid rgba(0,0,0,.125) !important;
    border-radius: 0rem !important;
}

.card .img-top2 {
        display: none;
        position: absolute;
        top: 0;
        left: 46px !important;
        z-index: 99;
    }

    .card:hover .img-top2 {
        display: inline;
    }

    .card .img-top3 {
        display: none;
        position: absolute;
        top: 0;
        left: 38px !important;
        z-index: 99;
    }

    .card:hover .img-top3 {
        display: inline;
    }

    .card .img-top4 {
        display: none;
        position: absolute;
        top: 0;
        left: 30px !important;
        z-index: 99;
    }

    .card:hover .img-top4 {
        display: inline;
    }

    .card .img-top5 {
        display: none;
        position: absolute;
        top: 0;
        left: 14px !important;
        z-index: 99;
    }

    .card:hover .img-top5 {
        display: inline;
    }
    .service{

    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    }

    .service .serviceItem{
            width: 200px;
    height: 200px;
    margin:12px 24px;
    }

    .service .serviceItem .card img{
       
        filter: none;
    }
    .serviceItem:hover .card img{
        filter:invert(72%) sepia(13%) saturate(3211%) hue-rotate(331deg) brightness(98%) contrast(112%);
    }

</style>


<?php
$this->db->select("*");
$this->db->from("service");
// $this->db->order_by('id','desc');
$query = $this->db->get();
$service = $query->result();
?>


<div class="col-md-12" style="margin-top:120px;">
<div class="row">
<div class="col-1"></div>
<div class="col-10">
<div class="row">
<img src="<?php echo base_url(); ?>img/service/topbar.png" width="100%" alt=""/>

<div class="row"></div>

    <div class="col-12">
    <div class="row" style="display:flex; justify-content:center;">
    <div class="col-10">
        <div class=" service">


        <div class="serviceItem ">
        <a href="#service1" style="text-decoration:none">
            <div class="card">
            <center>
                 <img src="<?php echo base_url(); ?>img/service/icon/installation.png" class="icon_m"/> 
                 <!-- <img src="<?php echo base_url(); ?>img/service/icon_orange/installation.png" class="icon_m img-top"/>  -->
                 <!-- <img src="<?php echo base_url(); ?>img/service/icon_orange/installation.png" class="icon_m img-top"/>  -->
                 <div class="text">INSTALLATION<br> SERVICE</div>
            </center>                
            </div> 
        </a>                   
        </div>


        <div class="serviceItem">
        <a href="#service2" style="text-decoration:none">
        <div class="card">
            <center> 
                 <img src="<?php echo base_url(); ?>img/service/icon/maintenance.png" class="icon_m"/> 
                 <!-- <img src="<?php echo base_url(); ?>img/service/icon_orange/maintenance.png" class="icon_m img-top"/>  -->
            </center>
                 <div class="text">MAINTENANCE</div>
        </div>
        </a>
        </div>

        <div class="serviceItem">
        <a href="#service3" style="text-decoration:none">
        <div class="card">
            <center> 
                 <img src="<?php echo base_url(); ?>img/service/icon/insurance.png" class="icon_m"/> 
                 <!-- <img src="<?php echo base_url(); ?>img/service/icon_orange/insurance.png" class="icon_m img-top2"/>  -->
            </center>
                 <div class="text">INSURANCE</div>
        </div>
        </a>         
        </div>

        <div class="serviceItem">
        <a href="#service4" style="text-decoration:none">
        <div class="card">
            <center> 
                 <img src="<?php echo base_url(); ?>img/service/icon/bike_hotel.png" class="icon_m"/> 
                 <!-- <img src="<?php echo base_url(); ?>img/service/icon_orange/bike_hotel.png" class="icon_m img-top3"/>  -->
            </center>
                 <div class="text">BIKE HOTEL</div>
        </div>
        </a>         
        </div>

        <div class="serviceItem">
        <a href="#service5" style="text-decoration:none">
        <div class="card">
            <center> 
                 <img src="<?php echo base_url(); ?>img/service/icon/designconsult.png" class="icon_m"/> 
                 <!-- <img src="<?php echo base_url(); ?>img/service/icon_orange/designconsult.png" class="icon_m img-top4"/>  -->
            </center>
                 <div class="text">DESIGN CONSULT</div>
        </div>
        </a>         
        </div>

        <div class="serviceItem">
        <a href="#service6" style="text-decoration:none">
        <div class="card">
            <center> 
                 <img src="<?php echo base_url(); ?>img/service/icon/delivery.png" class="icon_m"/> 
                 <!-- <img src="<?php echo base_url(); ?>img/service/icon_orange/delivery.png" class="icon_m img-top5"/>  -->
            </center>
                 <div class="text">DELIVERY SERVICE</div>
        </div>
        </a>
        </div>


    </div>
        <div class="col-1"></div>
    </div>    
    </div>
<br>
<br>
<br>
</div>


<?php foreach($service as $service2): ?>
<div class="row" id="service<?php echo $service2->id;?>">
<img src="<?php echo base_url();?>assets/uploads/img_service/<?php echo $service2->img;?>" width="100%" alt="" />
<!-- <img src="<?php echo base_url(); ?>img/service/bg_01.png" width="100%" alt=""/> -->
</div>
<?php endforeach; ?>  
<!-- <div class="row" id="service2">
<img src="<?php echo base_url(); ?>img/service/bg_02.png" width="100%" alt=""/>
</div>
<div class="row" id="service3">
<img src="<?php echo base_url(); ?>img/service/bg_03.png" width="100%" alt=""/>
</div>
<div class="row" id="service4">
<img src="<?php echo base_url(); ?>img/service/bg_04.png" width="100%" alt=""/>
</div>
<div class="row" id="service5">
<img src="<?php echo base_url(); ?>img/service/bg_05.png" width="100%" alt=""/>
</div>
<div class="row" id="service6">
<img src="<?php echo base_url(); ?>img/service/bg_06.png" width="100%" alt=""/>
</div> -->

</div>
</div>
</div>
</div>