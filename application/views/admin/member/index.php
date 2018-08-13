

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
                <th>ID No</th>
                <th>Mobile/Phone</th>
                <th>Eamil</th>
                <th>Adress</th>
                <th>Image</th>
                <th  class="center"  style="width:150px;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?Php foreach ($all_member_info as $v_member) { ?>
                <tr>
                    <td><?php echo $v_member->category; ?></td>

                    <td><?php echo $v_member->name; ?></td>
                    <td><?php echo $v_member->designation; ?></td>
                    <td><?php echo $v_member->company; ?></td>
                    <td><?php echo $v_member->member; ?></td>
                    <td><?php echo $v_member->mobile; ?></td>
                    <td><?php echo $v_member->email; ?></td>
                    <td><?php echo $v_member->adress; ?></td>
                    <td><img style="width: 50px; height: 50px" src="<?php echo base_url() . $v_member->file_name; ?>"></td>

                    <td class="center">          
                        <span><a href="<?php echo base_url() ?>edit-member/<?php echo  $v_member->id; ?>" class="glyphicon glyphicon-edit" > </a></span>
                        <span><a href="<?php echo base_url() ?>delete-member/<?php echo $v_member->id; ?>" onclick="return checkDelete();" class="glyphicon glyphicon-remove"></a></span>
                        
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>



