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
    <table class="table table-striped b-t b-light" style="width:1000px;">
        <thead>
          <tr>
           
            <th>News Date</th>
            <th>News Title</th>
            <th >News Deatails</th>
            <th>News Image</th>
            <th  class="center"  style="width:150px;">Action</th>
          </tr>
        </thead>
        <tbody>
            <?Php foreach ($all_news_info as $v_news){ ?>
          <tr>
              <td style="width:150px;"><?php echo $v_news->date ?></td>
            <td ><?php echo $v_news->title; ?></td>
            <td ><?php echo $v_news->description; ?></td>
            <?php $manage_news=$this->news_model->introduce();?>
            <td><img style="width: 100px; height: 50px" src="<?php echo base_url().$manage_news->images;?>"></td>
            <td class="center">          
                <span><a href="<?php echo base_url() ?>news/edit_news/<?php echo  $v_news->news_id; ?>" class="glyphicon glyphicon-edit" > </a></span>
                <span><a href="<?php echo base_url() ?>delete-news/<?php echo  $v_news->news_id; ?>" onclick="return checkDelete();" class="glyphicon glyphicon-remove"></a></span>
            </td>
               
          </tr>
         <?php } ?>
         
        </tbody>
      </table>
    </div>


