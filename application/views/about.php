

<div class="banner-top">
    <img alt="" src="<?php echo base_url()."/assets/site/"; ?>img/slider/banner.png">
</div>
</section>

<section class="inner-pages-area">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="txtarea-field">
            <h2><?php echo $about->about_title;?></h2>
            <?php $manage_image=$this->aboutus_model->index();?>
            <p><img alt="" src="<?php echo base_url().$manage_image->file_name;?>"><?php echo $about->description;?></p>
        </div>
    </div>
</section>


