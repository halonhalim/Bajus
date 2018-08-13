<br/><br/><br/><br/><div class="row">
    <div class="col-lg-12">
        <section class="panel">

            <header class="panel-heading">
                Edit  Category
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
                <form class="form-horizontal bucket-form" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>update-baners">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Banners Title</label>
                        <div class="col-sm-4">
                            <input  name="baners_title" type="text" class="form-control" value="<?php echo $baners_info->baners_title;; ?>">
                            <input  name="baners_id" type="hidden" class="form-control" value="<?php echo $baners_info->baners_id; ?>">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Baners Image</label>
                        <div class="col-sm-4">
                            <?php $manage_baners=$this->banners_model->index();?>
                            <input  name="baners_image" type="file"  value="<?php echo $manage_baners->baners_image; ?>"class="form-control">
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
</div>


