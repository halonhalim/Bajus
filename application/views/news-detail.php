

<div class="banner-top">
    <img alt="" src="<?php echo base_url().'assets/site/' ?>img/slider/banner.png">
</div>
</section>

<section class="inner-pages-area">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="txtarea-field">
            <h3><?php echo $news_details->date; ?></h3> 
            <h1><?php echo $news_details->title; ?></h1>

            <p><img alt="" src="<?php echo base_url().$news_details->images; ?>"><?php echo $news_details->description; ?></p>
        </div>
    </div>
</section>


