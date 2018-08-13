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
           
            <th>Serial No</th>
            <th>Gold Name</th>
            <th>Gold Price</th>
            <th style="width: 200px;">Report File</th>
            <th  class="center"  style="width:150px;">Action</th>
          </tr>
        </thead>
        <tbody>
            <?Php foreach ($all_gold_info as $v_gold){ ?>
          <tr>
             <td><?php echo $v_gold->number ?></td>
            <td><?php echo $v_gold->title ?></td>
            <td><?php echo $v_gold->price; ?></td>
            
            <td ><a target="_blank" href="<?php echo base_url(). $v_gold->file_name; ?>"><img src="<?php echo base_url() ?>admin_asset/images/pdf.jpg"></a></td>
           
                <td class="center">          
               
                <span><a href="<?php echo base_url() ?>delete-gold/<?php echo  $v_gold->id; ?>" onclick="return checkDelete();" class="glyphicon glyphicon-remove"></a></span>
            </td>
          </tr>
         <?php } ?>
         
        </tbody>
      </table>
    </div>


