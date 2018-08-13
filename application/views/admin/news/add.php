<br/><br/><br/><br/><div class="row">
    <div class="col-lg-12">
        <section class="panel">

            <header class="panel-heading">
                Category
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
                <form class="form-horizontal bucket-form" enctype="multipart/form-data"  method="post" action="<?php echo base_url() ?>news/save_news">
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">News Published Date</label>
                        <div class="col-sm-6">
                            <input class="input-file uniform_on" id="fileInput" name="date" type="date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">News Title</label>
                        <div class="col-sm-5">
                            <input  name="title" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="comment" class="control-label col-lg-3"> News Details</label>
                        <div class="col-lg-5">
                            <textarea rows="20" name="description" class="form-control " id="ccomment" required=""></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">News Image</label>
                        <div class="col-sm-4">
                            <input  name="images" type="file" class="form-control">
                        </div>
                        <P style="color:red;"> image size 286*246 px</P>
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