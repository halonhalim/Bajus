<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>.:: BAJUS(Bangladesh Jewellers Samity)::.</title>
    <link rel="shortcut icon" href="<?php echo base_url().'assets/site/';?>img/interface/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/site/';?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/site/';?>css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/site/';?>css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/site/';?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/site/';?>css/client.css">
    <link href="<?php echo base_url().'assets/site/';?>https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    <script src="<?php echo base_url().'assets/site/';?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    
<body>
<div class="container">
    <div class="row">
        <div class="full-body-area">
            <!----------Top-Header--------------->
            <section class="header-wrapper">
                <div class="logo-area">
                    <?php $manage_logo=$this->contact_model->index();?>
                    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url().$manage_logo->logo;?>"></a>
                </div>
            </section>
            <!----------Middle-Header--------------->
            <section class="slider-area">   
                <div class="navigation">
                    <nav class="navbar navbar-default navbar-inverse" data-spy="affix" data-offset-top="197"> 
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a  href="<?php echo base_url() ?>">Home</a></li>
                                <img alt="" src="img/interface/nav-line.png">
                                <li><a  href="<?php echo base_url() ?>home/about">About Us</a></li>
                                <img alt="" src="img/interface/nav-line.png">
                                <li class="dropdown"><a  href="#" class="dropdown-toggle" data-toggle="dropdown">Committe<i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() ?>home/comitee">Central Committee</a></li>
                                        <li><a href="<?php echo base_url() ?>home/sub">Sub. Committee</a></li>   
                                        <li><a href="<?php echo base_url() ?>home/district">District Committee.</a></li>    
                                        <li><a href="<?php echo base_url() ?>home/office">Office Stuff.</a></li>    
                                    </ul>
                                </li>
                                <img alt="" src="img/interface/nav-line.png">
                                <li class="dropdown"><a  href="#" class="dropdown-toggle" data-toggle="dropdown">Members<i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() ?>home/ecmember">E.C. Members</a></li>
                                        <li><a href="<?php echo base_url() ?>home/general">General Members</a></li>   
                                        <li><a href="<?php echo base_url() ?>home/districtmember">Disrict Members</a></li>    
                                        <li><a href="<?php echo base_url() ?>home/newmember">New Members</a></li>    
                                    </ul>
                                </li>
                                <img alt="" src="img/interface/nav-line.png">
                                <li><a href="<?php echo base_url() ?>home/report">Annual Report</a></li>   
                                <img alt="" src="img/interface/nav-line.png">
                                <li><a href="<?php echo base_url() ?>home/govt">Govt. Circulars</a></li>
                                <img alt="" src="img/interface/nav-line.png">
                                <li><a href="<?php echo base_url() ?>home/market">Market Rates</a></li>     
                                <img alt="" src="img/interface/nav-line.png">
                                <li><a href="<?php echo base_url() ?>home/gold">Gold Price</a></li>   
                                <img alt="" src="img/interface/nav-line.png">
                                <li><a href="<?php echo base_url() ?>home/policy">Policy</a></li>   
                                <img alt="" src="img/interface/nav-line.png">
                                <li><a href="<?php echo base_url() ?>home/contact">Contact Us</a></li>                                             
                            </ul>
                        </div>
                    </nav>
                </div>


