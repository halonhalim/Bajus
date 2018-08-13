

<div class="banner-top">
    <img alt="" src="<?php echo base_url().'assets/site/'?>img/slider/banner.png">
</div>
</section>

<section class="inner-pages-area">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="txtarea-field">
            <h2>Contact Us</h2>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-address">
                    <h3>View Us Map:</h3>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="600" height="500" id="gmap_canvas" src="<?php echo $contact->googlemap; ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://www.facebook.com/pureblackgmbh.webdesign.muenchen/"></a>
                        </div>
                    </div>
                    <h3>Address:</h3>
                    <div class="address-box">
                        <h5>
                        <b><?php echo $contact->address; ?></b><br>
                        <b>Phone:</b><?php echo $contact->phone_no; ?><br>
                        <b>Mobile:</b> <?php echo $contact->mobile_no; ?><br>
                        <b>Email:</b> <?php echo $contact->email; ?><br>
                        <b>Website:</b> www.bajus.org
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-address">
                    <h3>Get A Free Quote:</h3>
                    <?php echo $this->session->userdata('msg'); ?>
                    <form method="post" action="<?php echo base_url().'home/contactEmail' ?>">
                    <div class="form-group">
                        <input class="form-control con" id="name" name="name" placeholder="Name" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control con" id="email" name="phone" placeholder="Phone Number" >
                    </div>
                    <div class="form-group">
                        <input class="form-control con" id="email" name="email" placeholder="Email" type="email">
                    </div>
                    <div class="form-group">
                        <textarea rows="3" cols="3" name="comments" class="form-control con" placeholder="Comments"></textarea>
                    </div>
                    <div class="form-group">
                         <button type="submit" class="btn btn-submit btn-default"><i class="fa fa-check"></i>Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


