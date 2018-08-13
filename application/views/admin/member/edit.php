<br/><br/><br/><br/><div class="row">
    <div class="col-lg-12">
        <section class="panel">

            <header class="panel-heading">
                Member
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
                <form class="form-horizontal bucket-form" method="post" action="<?php echo base_url() ?>member/update_member" enctype="multipart/form-data">
                    <input  name="id" type="hidden" class="form-control" value="<?php echo $member_info->id; ?>">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" name="category">Category</label>
                        <div class="col-sm-4">
                            <select name="category"  >
                                <option value=""></option>
                            <option value="E.C.members">E.C.Members</option>
                            <option value="general-members">General Members</option>
                            <option value="district-members">District Members</option>
                            <option value="new-members">New Members</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-4">
                            <input  name="name" type="text" value="<?php echo $member_info->name; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Designation</label>
                        <div class="col-sm-4">
                            <input  name="designation" value="<?php echo $member_info->designation; ?>"  type="text"  class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Company Name</label>
                        <div class="col-sm-4">
                            <input  name="company" type="text" value="<?php echo $member_info->company; ?>"  class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Member Id</label>
                        <div class="col-sm-4">
                            <input  name="member" type="text" value="<?php echo $member_info->member; ?>"  class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mobile/Phone</label>
                        <div class="col-sm-4">
                            <input  name="mobile" type="number"value="<?php echo $member_info->mobile; ?>"   class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-4">
                            <input  name="email" type="text" value="<?php echo $member_info->email; ?>"   class="form-control">
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="ccomment" class="control-label col-lg-3">Adress</label>
                        <div class="col-lg-4">
                            <textarea rows="5"  name="adress"    class="form-control " id="ccomment" name="comment" required=""><?php echo $member_info->adress; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> Image</label>
                        <div class="col-sm-4">
                           <?php $manage_member=$this->member_model->index();?>
                            <input  name="file_name" type="file"  value="<?php echo $manage_member->file_name; ?>"class="form-control">
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