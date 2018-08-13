<br/><br/><br/><br/><div class="row">
        <div class="col-lg-12">
        <section class="panel">
             
            <header class="panel-heading">
               Manufacture
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
                <form class="form-horizontal bucket-form" method="post" action="<?php echo base_url() ?>save-manufacture">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Manufacture Name</label>
                        <div class="col-sm-6">
                            <input  name="manufacture_name" type="text" class="form-control">
                        </div>
                    </div>
                   
                   <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">Manufacture Description</label>
                                        <div class="col-lg-6">
                                            <textarea rows="20" name="manufacture_description" class="form-control " id="ccomment"  required=""></textarea>
                                        </div>
                   </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Selects</label>
                        <div class="col-lg-4">
                            <select class="form-control m-bot15" name="publication_status">
                                <option>Select Published</option>
                                <option value="1">Published</option>
                                <option value="2">Unpublished</option>
                                
                            </select>

                           
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