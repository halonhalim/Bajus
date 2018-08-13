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
           
            <th>Manufacture ID</th>
            <th>Manufacture Name</th>
            <th>Manufacture Descrition</th>
            <th>Status</th>
            <th  class="center"  style="width:150px;">Action</th>
          </tr>
        </thead>
        <tbody>
            <?Php foreach ($all_manufacture_info as $v_manufacture){ ?>
          <tr>
            <td><?php echo $v_manufacture->manufacture_id ?></td>
            <td><?php echo $v_manufacture->manufacture_name ?></td>
            <td><?php echo $v_manufacture->manufacture_description ?></td>
            <td class="center">
                <?php
                if($v_manufacture->publication_status==1){ 
                ?>
                
                <span class="label label-success">Active</span>
                <?php }  else {?>
                
                <span class="label label-danger">Inactive</span>
                <?php } ?>
           
                </td>
           
                <td class="center">
                    <?php
                    if($v_manufacture->publication_status == 1){
                        
                    ?> 
                    <span><a href="<?php echo base_url() ?>unpublish-manufacture/<?php echo  $v_manufacture->manufacture_id; ?>" class=" btn btn-danger  glyphicon glyphicon-thumbs-down" > </a></span>
                    <?php } else{ ?>  
                <span><a href="<?php echo base_url() ?>publish-manufacture/<?php echo  $v_manufacture->manufacture_id; ?>" class=" btn btn-success glyphicon glyphicon-thumbs-up" > </a></span>
            <?php }?>
               
                <span><a href="<?php echo base_url() ?>edit-manufacture/<?php echo  $v_manufacture->manufacture_id; ?>" class="glyphicon glyphicon-edit" > </a></span>
                <span><a href="<?php echo base_url() ?>delete-manufacture/<?php echo  $v_manufacture->manufacture_id; ?>" onclick="return checkDelete();" class="glyphicon glyphicon-remove"></a></span>
            </td>
          </tr>
         <?php } ?>
         
        </tbody>
      </table>
    </div>

