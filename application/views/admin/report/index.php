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
           
            
            <th>Report Title</th>
            <th style="width: 200px;">Report File</th>
            <th  class="center"  style="width:150px;">Action</th>
          </tr>
        </thead>
        <tbody>
            <?Php foreach ($all_report_info as $v_report){ ?>
          <tr>
            <td><?php echo $v_report->title ?></td>
            
            <td ><a target="_blank" href="<?php echo base_url(). $v_report->file_name; ?>"><img src="<?php echo base_url() ?>admin_asset/images/pdf.jpg"></a></td>
           
                <td class="center">          
               
                <span><a href="<?php echo base_url() ?>delete-report/<?php echo  $v_report->id; ?>" onclick="return checkDelete();" class="glyphicon glyphicon-remove"></a></span>
            </td>
          </tr>
         <?php } ?>
         
        </tbody>
      </table>
    </div>


