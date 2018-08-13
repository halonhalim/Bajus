
<br/><br/><br/><br/><div class="row">
        <div class="col-lg-12">
        <section class="panel">
             
            <header class="panel-heading">
               Report
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
                <form class="form-horizontal bucket-form" method="post" action="<?php echo base_url() ?>report/save" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Report Title and Date</label>
                        <div class="col-sm-4">
                            <input  name="title" type="text" class="form-control">
                        </div>
                    </div>
                   
                  
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Report PDF File</label>
                        <div class="col-sm-4">
                            <input  name="file_name" type="file"  value="#"class="form-control">
                        </div>
                        <P style="color:red;"> 10MB</P>
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
        </div> <br/><br/>
