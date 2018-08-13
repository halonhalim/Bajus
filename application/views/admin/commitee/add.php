<br/><br/><br/><br/><div class="row">
        <div class="col-lg-12">
        <section class="panel">
             
            <header class="panel-heading">
              Comitee
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
                <form class="form-horizontal bucket-form" method="post" action="<?php echo base_url() ?>comitee/save_comitee" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" name="category">Category</label>
                        <div class="col-sm-4">
                            <select name="category">
                                <option value=""></option>
                            <option value="general comitee">General Comitee</option>
                            <option value="sub.comitee">Sub. Comitee</option>
                            <option value="district comitee">District Comitee</option>
                            <option value="office staff">Office Stuff</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-4">
                            <input  name="name" type="text"  class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Designation</label>
                        <div class="col-sm-4">
                            <input  name="designation" type="text"  class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Company Name</label>
                        <div class="col-sm-4">
                            <input  name="company" type="text"  class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mobile/Phone</label>
                        <div class="col-sm-4">
                            <input  name="mobile" type="number"  class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-4">
                            <input  name="email" type="text"  class="form-control">
                        </div>
                    </div>
                   
                   <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">Adress</label>
                                        <div class="col-lg-4">
                                            <textarea rows="5"  name="adress"  class="form-control " id="ccomment" name="comment" required=""></textarea>
                                        </div>
                   </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> Image</label>
                        <div class="col-sm-4">
                            <input  name="file_name" type="file" class="form-control">
                        </div>
                        <P style="color:red;"> image size 169*189 px</P>
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