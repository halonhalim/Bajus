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
            <th>Report Title</th>
            <th style="width: 200px;">Report File</th>
            <th  class="center"  style="width:150px;">Action</th>
          </tr>
        </thead>
        <tbody>
            <?Php foreach ($all_market_info as $v_market){ ?>
          <tr>
             <td><?php echo $v_market->number ?></td>
            <td><?php echo $v_market->title ?></td>
            <td><?php echo $v_market->price ?></td>
                <td class="center">          
                <span><a href="<?php echo base_url() ?>delete-market/<?php echo  $v_market->id; ?>" onclick="return checkDelete();" class="glyphicon glyphicon-remove"></a></span>
            </td>
          </tr>
         <?php } ?>
         
        </tbody>
      </table>
    </div>


