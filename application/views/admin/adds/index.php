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
           
            <th>Adverstiment Left Link</th>
            <th>Adverstiment Left Image</th>
            <th>Adverstiment Right Link</th>
            <th>Adverstiment Right Image</th>
            <th  class="center"  style="width:150px;">Action</th>
          </tr>
        </thead>
        <tbody>
            <?Php foreach ($all_adverstiment_info as $v_adverstiment){ ?>
          <tr>
            <td><?php echo $v_adverstiment->link; ?></td>
            <td><img style="width: 100px; height: 50px" src="<?php echo base_url().$v_adverstiment->file_name;?>"></td>
            <td><?php echo $v_adverstiment->adverstiment; ?></td>
            <td><img style="width: 100px; height: 50px" src="<?php echo base_url().$v_adverstiment->file_name1;?>"></td>
           
                <td class="center">          
                
                <span><a href="<?php echo base_url() ?>delete-adverstiment/<?php echo  $v_adverstiment->id; ?>" onclick="return checkDelete();" class="glyphicon glyphicon-remove"></a></span>
            </td>
          </tr>
         <?php } ?>
         
        </tbody>
      </table>
    </div>



