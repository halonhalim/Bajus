<br/><br/><br/><br/><div class="row">
    <div class="col-lg-12">
        <section class="panel">

            <header class="panel-heading">
                Edit  Link
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
                <form class="form-horizontal bucket-form" method="post"  action="<?php echo base_url() ?>update-link">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Link Title</label>
                        <div class="col-sm-4">
                            <input  name="title" type="text" class="form-control" value="<?php echo $link_info->title;; ?>">
                            <input  name="link_id" type="hidden" class="form-control" value="<?php echo $link_info->link_id; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Web Link </label>
                        <div class="col-sm-4">
                          <input  name="link" type="text" class="form-control" value="<?php echo $link_info->link;; ?>">
                            
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


