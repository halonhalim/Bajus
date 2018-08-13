
<script type="text/javascript">

    function checkDelete() {
        var chk = confirm('Are you sure to Delete ?');
        if (chk) {
            return true;

        } else {
            return false;
        }
    }
</script>


<br/><br/><br/><br/><div class="table-responsive">
    <table class="table table-striped b-t b-light" style="width:800px;" >
        <thead>
            <tr>

                <th>Category Name</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Company Name</th>
                <th>Mobile/Phone</th>
                <th>Eamil</th>
                <th>Adress</th>
                <th>Image</th>
                <th  class="center"  style="width:150px;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?Php foreach ($all_comitee_info as $v_comitee) { ?>
                <tr>
                    <td><?php echo $v_comitee->category; ?></td>

                    <td><?php echo $v_comitee->name; ?></td>
                    <td><?php echo $v_comitee->designation; ?></td>
                    <td><?php echo $v_comitee->company; ?></td>
                    <td><?php echo $v_comitee->mobile; ?></td>
                    <td><?php echo $v_comitee->email; ?></td>
                    <td><?php echo $v_comitee->adress; ?></td>
                    <td><img style="width: 50px; height: 50px" src="<?php echo base_url() . $v_comitee->file_name; ?>"></td>

                    <td class="center">          
                        <span><a href="<?php echo base_url() ?>edit-comitee/<?php echo  $v_comitee->id; ?>" class="glyphicon glyphicon-edit" > </a></span>
                        <span><a href="<?php echo base_url() ?>delete-comitee/<?php echo $v_comitee->id; ?>" onclick="return checkDelete();" class="glyphicon glyphicon-remove"></a></span>
                        
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>



