

<br/><br/><br/><br/><div class="row">
    <div class="col-lg-12">
        <section class="panel">

            <header class="panel-heading">
                Edit  News
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
                <form class="form-horizontal bucket-form" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>update-news">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">News Published Date</label>
                        <div class="col-sm-4">
                            <input class="input-file uniform_on" id="fileInput"  value="<?php echo $news_info->date; ?>" name="date" type="date">
                            <input  name="news_id" type="hidden" class="form-control" value="<?php  echo $news_info->news_id; ?>">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">News Title</label>
                        <div class="col-sm-6">
                           <input  name="title" type="text" class="form-control" value="<?php echo $news_info->title; ?>">
                            
                        </div>
                    </div>
                     <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">New Deatails</label>
                                        <div class="col-lg-6">
                                            <textarea rows="20" name="description" class="form-control " id="ccomment" name="comment" required="">
                                                <?php echo $news_info->description; ?>
                                            </textarea>
                                        </div>
                   </div>
                     
                        
                       
                   
                     <div class="form-group">
                        <label class="col-sm-3 control-label">News Image</label>
                        <div class="col-sm-4">
                            <?php $manage_news=$this->news_model->introduce();?>
                            <input  name="images" type="file"  value="<?php echo $manage_news->images; ?>"class="form-control">
                        </div>
                        <P style="color:red;"> image size 1163*361 px</P>
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
</div><br/>


