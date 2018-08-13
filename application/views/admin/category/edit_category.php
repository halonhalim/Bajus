<br/><br/><br/><br/><div class="row">
        <div class="col-lg-12">
        <section class="panel">
             
            <header class="panel-heading">
             Edit  Category
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
                <form class="form-horizontal bucket-form" method="post" action="<?php echo base_url() ?>update-category">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Category Name</label>
                        <div class="col-sm-6">
                            <input  name="category_name" type="text" class="form-control" value="<?php echo $category_info->category_name ?>">
                            <input  name="category_id" type="hidden" class="form-control" value="<?php echo $category_info->category_id ?>">
                        </div>
                    </div>
                   
                   <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">Category Description</label>
                                        <div class="col-lg-6">
                                            <textarea rows="20" name="category_description" class="form-control " id="ccomment" name="comment" required="">
                                                <?php echo $category_info->category_description ?>
                                            </textarea>
                                        </div>
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
