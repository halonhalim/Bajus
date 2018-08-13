<br/><br/><br/><br/><div class="row">
    <div class="col-lg-12">
        <section class="panel">

            <header class="panel-heading">
                contact
            </header>
            <h3 style="color:green;">

                <?php
                $massage = $this->session->userdata('massage');
                if ($massage) {
                    echo $massage;
                    $this->session->unset_userdata('massage');
                }
                ?>

            </h3>

            <div class="panel-body">
                <form class="form-horizontal bucket-form" method="post" action="<?php echo base_url() ?>contact/save_contact" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">company  Name</label>
                        <div class="col-sm-4">
                            <input  name="company_name" type="text" value="<?php echo $contact_info->company_name; ?>"  class="form-control">
                            
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mobile No</label>
                        <div class="col-sm-4">
                            <input  name="mobile_no" type="text" value="<?php echo $contact_info->mobile_no; ?>"class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">phone No</label>
                        <div class="col-sm-4">
                            <input  name="phone_no" type="text" value="<?php echo $contact_info->phone_no; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-4">
                            <input  name="email" type="text" value="<?php echo $contact_info->email; ?>" class="form-control">
                        </div>
                    </div>


                    <div class="form-group ">
                        <label for="ccomment" class="control-label col-lg-3">Address</label>
                        <div class="col-lg-4">
                            <textarea rows="5" name="address" class="form-control " value="" id="ccomment" required=""><?php echo $contact_info->address; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Facebook</label>
                        <div class="col-sm-4">
                            <input  name="facebook" type="text" value="<?php echo $contact_info->facebook; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">twitter</label>
                        <div class="col-sm-4">
                            <input  name="twitter" type="text" value="<?php echo $contact_info->twitter; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">gooleplus</label>
                        <div class="col-sm-4">
                            <input  name="googleplus" type="text" value="<?php echo $contact_info->googleplus; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">youtube</label>
                        <div class="col-sm-4">
                            <input  name="youtube" type="text" value="<?php echo $contact_info->youtube; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">googlemap</label>
                        <div class="col-sm-4">
                            <input  name="googlemap" type="text" value="<?php echo $contact_info->googlemap; ?>" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Logo</label>
                        <div class="col-sm-4">
                            <input  name="logo" type="file"  value="<?php echo $contact_info->logo; ?>"class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Submit</button>
                        <div class="col-lg-4">
                        </div>
                </form>
            </div>
        </section>





    </div>
</div>