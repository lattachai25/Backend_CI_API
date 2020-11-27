<style>
.top_img{
    position:relative;
}
.slide_bar{
    padding-top: 20px;
    height:230px;
    background:#000;
    color:#fff;
}
/* background-image: url("{{asset('img/gallery/box_03.png')}}"); */


div {margin: 0 auto}

.item img  {
      filter: gray;
      -webkit-filter: grayscale(1);
      -webkit-transition: all .0s ease-in-out;  
      background-color: #252525; 
    }

    .item img:hover {
    filter: none;
      -webkit-filter: grayscale(0);
      -webkit-transform: scale(1);
      display: inline-block;
    }

#owl-demo .item{
  width: 185px;
  border-left:1px solid #fff;
  border-right:1px solid #fff;
  padding: 0px 0px;
  margin: 0px;
  color: #FFF;
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
  text-align: center;
}
.customNavigation{
  text-align: center;
}

.customNavigation a{
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

.slide_top_bg{
        padding-right:0px !important;
        padding-left: 0px !important;
        background-color: #252525;
    }
    
.image_logo_show{
        filter: grayscale(100%);
        margin-top:2px;
        height:180px;
        width:180px;
        z-index: -1;
    }


    .image_logo_show:hover{
        filter: grayscale(0%);
        background-image: url("{{asset('img/gallery/box_03.png')}}");
        background-repeat:no-repeat;
    }
.owl-item{
    width: 185px !important;
}
.itembox{
    color:#fff;
    font-weight:bold;
    padding:10px;
    padding-left:50px;
    height:50px;
}
.itembox:hover{
    background-color:#ff6634;
}

.avction{
    background-color:#ff6634;
}




.container {
  position: relative;
  width: 100%;
  height:220px;
  border:0px solid #bbbbbb;
  padding: 0px;
}

.image {
  display: block;
  width: 100%;
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
    background-image:url("{{asset('img/promotion/orange.png')}}");
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
    background-image:url("{{asset('img/promotion/red.png')}}");
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
    background-image:url("{{asset('img/promotion/blue.png')}}");
    background-repeat: no-repeat, repeat;
}



.text_title{
    margin-top:10px;
    font-size:17px;
    color:#000;
    font-weight: bold;
}


.text_page{
    width:2px;
    font-size:18px;
    font-weight: bold;
}
span{
    color: #ff5e0d;
}
</style>

<div class="bg" style="margin-top:0px;"></div>
      
    <!-- img_top -->
    <div class="top_img"> 
        <img src="{{asset('img/gallery/bar_top.png')}}" width="50%" style="position:absolute;" alt=""/>
        <img src="{{asset('img/gallery/head.jpg')}}" width="100%" alt=""/>  
    </div>    
    <!-- img_top -->  
    <div class="slide_bar">
        <!-- div slide -->
        <div class="row">
        <div style="width:90%; margin-left:120px;>
                <div style="width:80%; margin-left:200px; display: inline-block;">
                        <div class="row"> <!--  row   -->

                            <div style="width:20px; display: inline-block;">
                                <div class="customNavigation">
                                <a class="btn prev" style="margin-top:50px; margin-right: -30px;">
                                <img src="{{asset('img/gallery/back_orange_slide.png')}}" width="40px" />
                                </a>
                                </div>
                            </div>
                            <div class="box_logo1" style="width:1110px; display:inline-block;">
                                <div id="owl-demo" class="owl-carousel owl-theme">
                                <div class="item"><img class="image_logo_show" src="{{asset('img/gallery/icon_color/bmw.png ')}}" /></div>
                                <div class="item"><img class="image_logo_show" src="{{asset('img/gallery/icon_color/ducati.png ')}}" /></div>
                                <div class="item"><img class="image_logo_show" src="{{asset('img/gallery/icon_color/honda.png ')}}" /></div>
                                <div class="item"><img class="image_logo_show" src="{{asset('img/gallery/icon_color/kawasaki.png ')}}" /></div>
                                <div class="item"><img class="image_logo_show" src="{{asset('img/gallery/icon_color/norton.png ')}}" /></div>
                                <div class="item"><img class="image_logo_show" src="{{asset('img/gallery/icon_color/suzuki.png ')}}" /></div>
                                </div>
                            </div>
                            <div style="width:20px; display: inline-block;> 
                                <div class="customNavigation">
                                <a class="btn next" style="margin-top:50px;float: left; margin-left: -70px;">
                                <img src="{{asset('img/gallery/next_orange_slide.png')}}"  width="40px" />
                                </a>
                            </div>
                            </div>

                        </div>  <!--  Row End  -->

                </div>
        </div>        
        </div>
        <!-- div slide -->
    </div>

<!-- div menu  -->

<div class="row">
    <!-- menu_left -->  
    <div class="col-2" style="min-height:600px; background:#000;">
        <div class="row">
            <div class="col-12 itembox"> &nbsp; &nbsp; C 650 SPORT GT </div>
            <div class="col-12 itembox"> &nbsp; &nbsp; R 1200 1250 GS </div>
            <div class="col-12 itembox"> &nbsp; &nbsp; R NINE T </div>
            <div class="col-12 itembox"> &nbsp; &nbsp; S 1000 R </div>
            <div class="col-12 itembox"> &nbsp; &nbsp; S 1000 RR 2015-2018 </div>
            <div class="col-12 itembox avction"> &nbsp; &nbsp; S 1000 RR 2020 </div>
            <div class="col-12 itembox"> &nbsp; &nbsp; S 1000 XR </div>
        </div>

    </div>
    <!-- menu_left -->
    <!-- menu item show  -->
  
    <div class="col-10 itemshow" style="min-height:600px; background:#fff;">
<br><br>
        <div class="row">

            <div class="col-10" style="min-height:600px; border:1px solid #red; background:#FFF; margin-left:50px;">
            <div class="row">
            @for ($i = 1; $i < 16; $i++)
            <div class="col-4">
                <a href="http://">
                        <br>
                    <div class="container">
                    <img src="{{asset('img/gallery/'.$i.'.png')}}" class="image" />
                    <div class="overlay"><div class="text">FUll IMAGE</div></div>
                    </div>
                </a> 
            </div>
            @endfor
            </div>
            </div>


        </div>

      <div class="row" style="min-height:80px; margin-top:50px;">
        <div class="col-12">
            <div class="row">
                <div class="col-3"></div>
                    <div class="col-3">
                    <img src="{{asset('img/gallery/back_orange.png')}}"  width="10px" />
                     &nbsp; &nbsp; 1 &nbsp; &nbsp; 2 &nbsp; &nbsp; 3 &nbsp; &nbsp; 4 &nbsp; &nbsp; 5 &nbsp; &nbsp; <span> 6 </span>&nbsp; &nbsp; 
                    <img src="{{asset('img/gallery/next_orange.png')}}"  width="10px" />
                     </div>
                <div class="col-4"></div>     
            </div>        
        </div>
        <img src="{{asset('img/gallery/bat_footer.png')}}"  width="100%" />
        </div>

    </div>
    <!-- menu item show  -->
</div>
<!-- div menu  -->
</div>






 


<script>
$(document).ready(function() {
 
 var owl = $("#owl-demo");

 owl.owlCarousel({
     items : 5,
     itemsDesktop : [1000,5],
     itemsDesktopSmall : [900,5],
     itemsTablet: [600,5],
     itemsMobile : false,
     pagination: false,
     dots: false,
 });

 // Custom Navigation Events
 $(".next").click(function(){
   owl.trigger('owl.next');
 })
 $(".prev").click(function(){
   owl.trigger('owl.prev');
 })

});
</script>