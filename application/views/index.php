

<div id="myCarousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    
    <div class="carousel-inner">
     <?php $slider_info=$this->banners_model->slider_info();?>
            <?php $i=1;
            foreach($slider_info as $slider){
                if($i==1)
                {
                    echo " <div class='item active'>";
                }
                else 
                {
                      echo "<div class='item'>";
                }
            ?>
            <img src="<?php echo base_url().$slider->baners_image;?>">
        </div>
           <?php $i++; }?>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="fa fa-arrow-left" area-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="fa fa-arrow-right" area-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
</div>
</section>

<section class="info-area">
    <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="col-info">
            <div class="sideber-menu">
                <div class="head-bar">
                    <h2><i class="fa fa-link"></i>Usefull Link</h2>
                    <img alt="" src="img/interface/head-dot.png">
                </div>
                <div class="scroll-category">
                    <?php foreach ($link as $key=> $value) {?>
                    <li><a target="_blank" href="<?php echo $value->link; ?>"><i class="fa fa-hand-o-right"></i><?php echo $value->title ?></a></li>
                    <?php } ?>
                </div>
            </div>
            <div class="add-box">
                <a  target="_blank" href="<?php echo $adverstiment->link; ?>"><img alt="" src="<?php echo $adverstiment->file_name; ?>"></a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="col-info">
            <div class="middle-info">
                <h2>Welcome &nbsp;to &nbsp;Bangladesh &nbsp;Jewellers &nbsp;Samity !</h2>
                <p><?php echo read_more($about->description, 80); ?><a href="<?php echo base_url() ?>home/about">Read More</a></p>
            </div>
            <div class="middle-info bottom-middle">
                <h2>Membership &nbsp;Benifits!</h2>
                <p><?php echo read_more($membershipbenifits->description, 90); ?><a href="<?php echo base_url() ?>home/membershipbenifits">Read More</a></p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="col-info">
            <div class="sideber-menu">
                <div class="head-bar">
                    <h2><i class="fa fa-file"></i>News & Events</h2>
                    <img alt="" src="img/interface/head-dot.png">
                </div>
                <div class="scroll-category">
                    <?php foreach ($news as $key=>$row){ ?>
                    <li><h5><span><?php echo $row->date; ?></span><br/><?php echo $row->title; ?> <a href="<?php echo base_url().'home/news_details/'.$row->news_id; ?>">Read More</a></h5></li>
                    <?php }?>
                </div>
            </div>
            <div class="add-box">
                <a target="_blank" href="<?php echo $adverstiment->adverstiment; ?>"><img alt="" src="<?php echo $adverstiment->file_name1; ?>"></a>
            </div>
        </div>
    </div>
</section>

<section class="client-inner">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="client-area">
            <h2>Our Partners</h2>
            <ul id="flexiselDemo3" style=" overflow:hidden; height:120px">
                <?php foreach ($partner as $key=>$row) {?>
                <li>
                    <div class="client-box"><a class="client-box-middle" href="http://www.venusjewelers.com/" target="_blank"><img alt="" src="<?php echo $row->image; ?>"></a></div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>


