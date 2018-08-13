<br/><br/><br/><br/><div class="row">
    <div class="col-lg-12">
        <section class="panel">

            <header class="panel-heading">
                ADD product 
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
                <form class="form-horizontal bucket-form" method="post" action="<?php echo base_url() ?>save-products" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Products Name</label>
                        <div class="col-sm-6">
                            <input  name="product_name" type="text" class="form-control" required="">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Category Name</label>
                        <div class="col-lg-4">
                            <select class="form-control m-bot15" name="category_id">
                                <option>Select Option</option>
                                <?php foreach($published_category_info as $v_category) { ?>
                                <option value="<?php echo $v_category->category_id ?>"><?php echo $v_category->category_name ?></option>
                                <?php } ?>

                            </select>


                        </div>
                     </div>
                        <div class="form-group">
                        <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Manufacture Name</label>
                        <div class="col-lg-4">
                            <select class="form-control m-bot15" name="manufacture_id">
                                <option>Select Option</option>
                                <?php foreach($published_manufacture_info as $v_manufacture) { ?>
                                <option value="<?php echo $v_manufacture->manufacture_id ?>"><?php echo $v_manufacture->manufacture_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        </div>
                       <div class="form-group ">
                        <label for="comment" class="control-label col-lg-3">Product short Description</label>
                        <div class="col-lg-5">
                            <textarea rows="6" name="product_short_description" class="form-control " id="ccomment" required=""></textarea>
                        </div>
                    </div>
                        
                        
                  
                        <div class="form-group ">
                        <label for="comment" class="control-label col-lg-3">Product Long Description</label>
                        <div class="col-lg-5">
                            <textarea rows="20" name="product_long_description" class="form-control " id="ccomment" required=""></textarea>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Products Price</label>
                        <div class="col-sm-6">
                            <input  name="product_price" type="text" class="form-control">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Products New Price</label>
                        <div class="col-sm-6">
                            <input  name="product_new_price" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Products Quantity</label>
                        <div class="col-sm-6">
                            <input  name="product_quantity" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Is Featured</label>
                        <div class="col-sm-1">
                            <input  name="is_featured" type="checkbox" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Products Name</label>
                        <div class="col-sm-4">
                            <input  name="product_image" type="file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Products Name</label>
                        <div class="col-sm-4">
                            <input  name="pic1" type="file" class="form-control">
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
