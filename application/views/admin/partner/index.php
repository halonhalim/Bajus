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
           
            
            <th>Partner Link</th>
            <th>Partner Image</th>
            <th  class="center"  style="width:150px;">Action</th>
          </tr>
        </thead>
        <tbody>
            <?Php foreach ($all_partner_info as $v_partner){ ?>
          <tr>
           
            <td><?php echo $v_partner->title ?></td>
            
            <td><img style="width: 100px; height: 50px" src="<?php echo base_url().$v_partner->image;?>"></td>
           
                <td class="center">          
                <span><a href="<?php echo base_url() ?>edit-partner/<?php echo  $v_partner->id; ?>" class="glyphicon glyphicon-edit" > </a></span>
                <span><a href="<?php echo base_url() ?>delete-partner/<?php echo  $v_partner->id; ?>" onclick="return checkDelete();" class="glyphicon glyphicon-remove"></a></span>
            </td>
          </tr>
         <?php } ?>
         
        </tbody>
      </table>
    </div>


