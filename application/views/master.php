<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootstrap E-commerce Templates</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
        <!-- bootstrap -->
        <link href="<?php echo base_url();?>front_end/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
        <link href="<?php echo base_url();?>front_end/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

        <link href="<?php echo base_url();?>front_end/themes/css/bootstrappage.css" rel="stylesheet"/>

        <!-- global styles -->
        <link href="<?php echo base_url();?>front_end/themes/css/flexslider.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>front_end/themes/css/main.css" rel="stylesheet"/>

        <!-- scripts -->
        <script src="<?php echo base_url();?>front_end/themes/js/jquery-1.7.2.min.js"></script>
        <script src="<?php echo base_url();?>front_end/bootstrap/js/bootstrap.min.js"></script>				
        <script src="<?php echo base_url();?>front_end/themes/js/superfish.js"></script>	
        <script src="<?php echo base_url();?>front_end/themes/js/jquery.scrolltotop.js"></script>
        <!--[if lt IE 9]>			
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>		
        <div id="top-bar" class="container">
            <div class="row">
                <div class="span4">
                    <form method="POST" class="search_form">
                        <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
                    </form>
                </div>
                <div class="span8">
                    <div class="account pull-right">
                        <ul class="user-menu">				
                            <li><a href="#">My Account</a></li>
                            <li><a href="cart.html">Your Cart</a></li>
                            <li><a href="<?php echo base_url()?>home/checkout">Checkout</a></li>					
                            <li><a href="register.html">Login</a></li>		
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="wrapper" class="container">
            <section class="navbar main-menu">
                <div class="navbar-inner main-menu">				
                    <a href="<?php echo base_url(); ?>" class="logo pull-left"><img src="<?php echo base_url();?>front_end/themes/images/logo.png" class="site_logo" alt=""></a>
                    <nav id="menu" class="pull-right">
                        <ul>
                            <?php 
                           $category_info =  $this->super_admin_model->select_all_published_category();
                           foreach ($category_info as $v_category){
                               
                          
                            ?>
                            
                            <li><a href="<?php echo base_url()?>home/category_product/<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></a></li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </section>
            <section  class="homepage-slider" id="home-slider">
                <div class="flexslider">
                    <ul class="slides">
                        <?php foreach ($all_featured_image as $row){ ?>
                        <li>
                            <img src="<?php echo base_url().$row->product_image;?>" style="height: 400px;  align:center;" alt="" />
                        </li>
                        <?php }?>
                       
                    </ul>
                </div>			
            </section>
            <section class="header_text">
                We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates. 
                <br/>Don't miss to use our cheap abd best bootstrap templates.
            </section>
            <section class="main-content">
                <div class="row">
                    <div class="span12">													
                     <?php echo $main_content; ?>
                        <div class="row feature_box">						
                            <div class="span4">
                                <div class="service">
                                    <div class="responsive">	
                                        <img src="<?php echo base_url();?>front_end/themes/images/feature_img_2.png" alt="" />
                                        <h4>MODERN <strong>DESIGN</strong></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
                                    </div>
                                </div>
                            </div>
                            <div class="span4">	
                                <div class="service">
                                    <div class="customize">			
                                        <img src="<?php echo base_url();?>front_end/themes/images/feature_img_1.png" alt="" />
                                        <h4>FREE <strong>SHIPPING</strong></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="service">
                                    <div class="support">	
                                        <img src="<?php echo base_url();?>front_end/themes/images/feature_img_3.png" alt="" />
                                        <h4>24/7 LIVE <strong>SUPPORT</strong></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
                                    </div>
                                </div>
                            </div>	
                        </div>		
                    </div>				
                </div>
            </section>
            <section class="our_client">
                <h4 class="title"><span class="text">Manufactures</span></h4>
                <div class="row">					
                    
                         <?php 
                           $manufacture_info =  $this->super_admin_model->select_all_published_manufacture();
                           foreach ($manufacture_info as $v_manufacture){
                               
                          
                            ?>
                            
                    <div style="display:block; float: left;font-size: 20px; padding-left:60px;"><a href="#"><?php echo $v_manufacture->manufacture_name; ?></a></div>
                            <?php } ?>
                       
                    
                   
                </div>
            </section>
            <section id="footer-bar">
                <div class="row">
                    <div class="span3">
                        <h4>Navigation</h4>
                        <ul class="nav">
                            <li><a href="./index.html">Homepage</a></li>  
                            <li><a href="./about.html">About Us</a></li>
                            <li><a href="./contact.html">Contac Us</a></li>
                            <li><a href="./cart.html">Your Cart</a></li>
                            <li><a href="./register.html">Login</a></li>							
                        </ul>					
                    </div>
                    <div class="span4">
                        <h4>My Account</h4>
                        <ul class="nav">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </div>
                    <div class="span5">
                        <p class="logo"><img src="<?php echo base_url();?>front_end/themes/images/logo.png" class="site_logo" alt=""></p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
                        <br/>
                        <span class="social_icons">
                            <a class="facebook" href="#">Facebook</a>
                            <a class="twitter" href="#">Twitter</a>
                            <a class="skype" href="#">Skype</a>
                            <a class="vimeo" href="#">Vimeo</a>  
                        </span>
                    </div>					
                </div>	
            </section>
            <section id="copyright">
                <span>Copyright 2013 bootstrappage template  All right reserved.</span>
            </section>
        </div>
        <script src="<?php echo base_url();?>front_end/themes/js/common.js"></script>
        <script src="<?php echo base_url();?>front_end/themes/js/jquery.flexslider-min.js"></script>
        <script type="text/javascript">
            $(function () {
                $(document).ready(function () {
                    $('.flexslider').flexslider({
                        animation: "fade",
                        slideshowSpeed: 4000,
                        animationSpeed: 600,
                        controlNav: false,
                        directionNav: true,
                        controlsContainer: ".flex-container" // the container that holds the flexslider
                    });
                });
            });
        </script>
    </body>
</html>