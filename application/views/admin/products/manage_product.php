<script type="text/javascript">
    
    function checkDelete(){
        var chk = confirm('Are you sure to Delete ?');
        if(chk){
            return true;
            
        }else{
            return false;
        }
    }
    </script>
    

<br/><br/><br/><br/><div class="table-responsive">
      <table class="table table-striped b-t b-light" style="width:800px;">
        <thead>
          <tr>
           <th>Product Id</th>
            <th>Product Name</th>
            <th>Products Image</th>
            <th>Products Pic</th>
            <th>Status</th>
            <th  class="center"  style="width:150px;">Action</th>
          </tr>
        </thead>
        <tbody>
            <?Php foreach ($all_products_info as $v_products){ ?>
          <tr>
            <td><?php echo $v_products->product_id ?></td>
            <td><?php echo $v_products->product_name ?></td>
            <td> <img src="<?php echo base_url().$v_products->product_image ?>" height="70px" width="70px"/></td>
            <td><img src="<?php echo base_url().$v_products->pic1 ?>" height="70px" width="70px"/></td>
            <td class="center">
                <?php
                if($v_products->publication_status==1){ 
                ?>
                
                <span class="label label-success">Active</span>
                <?php }  else {?>
                
                <span class="label label-danger">Inactive</span>
                <?php } ?>
           
                </td>
           
                <td class="center">
                    <?php
                    if($v_products->publication_status == 1){
                        
                    ?> 
                    <span><a href="<?php echo base_url() ?>unpublish-products/<?php echo  $v_products->product_id; ?>" class=" btn btn-danger  glyphicon glyphicon-thumbs-down" > </a></span>
                    <?php } else{ ?>  
                <span><a href="<?php echo base_url() ?>publish-products/<?php echo  $v_products->product_id; ?>" class=" btn btn-success glyphicon glyphicon-thumbs-up" > </a></span>
            <?php }?>
               
                <span><a href="<?php echo base_url() ?>edit-products/<?php echo  $v_products->product_id; ?>" class="glyphicon glyphicon-edit" > </a></span>
                <span><a href="<?php echo base_url() ?>delete-products/<?php echo  $v_products->product_id; ?>" onclick="return checkDelete();" class="glyphicon glyphicon-remove"></a></span>
            </td>
          </tr>
         <?php } ?>
         
        </tbody>
      </table>
    </div>


