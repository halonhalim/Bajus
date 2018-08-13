<br/><br/><br/><br/><div class="row">
    <div class="col-lg-12">
        <section class="panel">

            <header class="panel-heading">
                Adverstiment
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
                <form class="form-horizontal bucket-form" method="post" enctype="multipart/form-data"  action="<?php echo base_url() ?>adverstiment/save">

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Adverstiment Left Image</label>
                        <div class="col-sm-4">
                            <input  name="file_name" type="file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Adverstiment Left Link</label>
                        <div class="col-sm-4">
                            <input  name="link" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Adverstiment Right Image</label>
                        <div class="col-sm-4">
                            <input  name="file_name1" type="file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Adverstiment Right Link</label>
                        <div class="col-sm-4">
                            <input  name="adverstiment" type="text" class="form-control">
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

