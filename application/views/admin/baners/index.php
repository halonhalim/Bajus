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
           
            <th>Banners ID</th>
            <th>Banners Title</th>
            <th>Banners Image</th>
            <th  class="center"  style="width:150px;">Action</th>
          </tr>
        </thead>
        <tbody>
            <?Php foreach ($all_baners_info as $v_baners){ ?>
          <tr>
            <td><?php echo $v_baners->baners_id ?></td>
            <td><?php echo $v_baners->baners_title ?></td>
            <?php $manage_baners=$this->banners_model->index();?>
            <td><img style="width: 100px; height: 50px" src="<?php echo base_url().$manage_baners->baners_image;?>"></td>
           
                <td class="center">          
                <span><a href="<?php echo base_url() ?>edit-baners/<?php echo  $v_baners->baners_id; ?>" class="glyphicon glyphicon-edit" > </a></span>
                <span><a href="<?php echo base_url() ?>delete-baners/<?php echo  $v_baners->baners_id; ?>" onclick="return checkDelete();" class="glyphicon glyphicon-remove"></a></span>
            </td>
          </tr>
         <?php } ?>
         
        </tbody>
      </table>
    </div>


