<br/><br/><br/><br/><div class="row">
        <div class="col-lg-12">
        <section class="panel">
             
            <header class="panel-heading">
               About Us
            </header>
            <h3 style="color:green;">
                
                <?php
                $massage = $this->session->userdata('massage');
                if($massage){
                    echo $massage;
                    $this->session->unset_userdata('massage');
                }
                
                    
                    
                ?>
                
            </h3>
           
            <div class="panel-body">
                <form class="form-horizontal bucket-form" method="post" action="<?php echo base_url() ?>aboutus/save_aboutus" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Aboutus Title</label>
                        <div class="col-sm-4">
                            <input  name="aboutus_title" type="text" value= "<?php echo $aboutus_info->about_title; ?>" class="form-control">
                        </div>
                    </div>
                   
                   <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">Aboutus Details</label>
                                        <div class="col-lg-6">
                                            <textarea rows="20"  name="description"  class="form-control " id="ccomment" name="comment" required=""><?php echo $aboutus_info->description; ?></textarea>
                                        </div>
                   </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Aboutus Image</label>
                        <div class="col-sm-4">
                            <input  name="file_name" type="file" class="form-control">
                        </div>
                        <P style="color:red;"> image size 286*246 px</P>
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