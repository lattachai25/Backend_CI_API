<style>
.circle {
  border-radius: 0%;
  width: 100%;
  height: auto;

  margin-left: 0px;
  /* width and height can be anything, as long as they're equal */
  margin-top: 25px;
  margin-bottom: 30px;
  position: relative;
}

.navbar-default {
    color:#ff6634; 
    background-color:#e2e0e1;
}

#page-wrapper {
    padding: 0 15px;
    min-height: 568px;
    background-color: #d2d2d2;
}
a {
    color: #090909  !important;
    text-decoration: none;
    font-size: 14px;
}

a:hover {
    color: #090909 !important;
    text-decoration: underline;
}

</style>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url($this->uri->segment(1).'/administrator');?>"  style="color:#ff6634 !important;">MPK Concept | Administrator </a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">

                <li><a href="<?php echo base_url('/admin/logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search" style='text-align:center;'>
                    <img class='circle' src='<?php echo base_url();?>/assets/images/logo.png'>
                        <div style="color:black; " >
                            USERNAME :  <font color='#ff7500'> <?php echo $this->session->userdata['logged_in']['username'];?> </font>
                        </div>
                </li>

                <li>
                    <a href="<?php echo base_url('administrator');?>"><i class="fa fa-home fa-fw"></i> HOME<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('administrator/homeslide');?>"> <i class="fa fa-circle-o fa-fw"></i>Home Slide</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/homeplaylist');?>">  <i class="fa fa-circle-o fa-fw"></i>Home Playlist</a>
                        </li>
						<li>
                            <a href="<?php echo base_url('administrator/homebike');?>">  <i class="fa fa-circle-o fa-fw"></i>Home Bike</a>
                        </li>
                    </ul>    
                </li>

			    <li>
                    <a href="#"><i class="glyphicon glyphicon-folder-open"></i> Product<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('administrator/product1');?>"> <i class="fa fa-circle-o fa-fw"></i>Product 1</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/product2');?>">  <i class="fa fa-circle-o fa-fw"></i>Product 2</a>
                        </li>
                    </ul>    
                </li>

                <li>
                    <a href="<?php echo base_url('administrator/promotion');?>"><i class="fa fa-fire fa-fw"></i>Promotion</a>
                </li>

				<li>
					<a href="<?php echo base_url('administrator/service');?>"><i class="fa fa-fire fa-fw"></i> Service</a>
				</li>
	             
                <li>
                    <a href="<?php echo base_url('administrator/news');?>"><i class="fa fa-fire fa-fw"></i>News</a>
                </li>

                <li>
                    <a href="<?php echo base_url('administrator/gallery');?>"><i class="fa fa-fire fa-fw"></i>Gallery</a>
                </li>

                <li>
                    <a href="<?php echo base_url('administrator/about');?>"><i class="glyphicon glyphicon-map-marker"></i> About</a>
                </li>

                <li>
                    <a href="<?php echo base_url('administrator/contactus');?>"><i class="fa fa-fire fa-fw"></i>Contact Us</a>
                </li> 

                <li>
                    <a href="<?php echo base_url('administrator/popup');?>"><i class="fa fa-fire fa-fw"></i>Pop-Up Button</a>
                </li>

                <li>
                    <a href="<?php echo base_url('administrator/social');?>"><i class="fa fa-fire fa-fw"></i>Social</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
