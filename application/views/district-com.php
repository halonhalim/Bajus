

<div class="banner-top">
    <img alt="" src="<?php echo base_url()."/assets/site/"; ?>img/slider/banner.png">
</div>
</section>

<section class="inner-pages-area">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="txtarea-field">
            <h2>District Committe</h2>
            <?php foreach ($this->comitee_model->district() as $key => $row) { ?>
            <div class="com-box">
                <div class="members-blog-photo">
                    <img src="<?php echo base_url().$row->file_name; ?>">
                    <div class="name-deg">
                        <h4><?php echo $row->name; ?></h4>
                        <h5><?php echo $row->designation; ?></h5>
                        <p><?php echo $row->company; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
            
           
           
           
            
          
        </div>
    </div>
</section>



