


<div class="banner-top">
    <img alt="" src="<?php echo base_url()."/assets/site/" ?>img/slider/banner.png">
</div>
</section>

<section class="inner-pages-area">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="txtarea-field">
            <h2>Market Rates</h2>
            <div class="table-responsive table-annual">
                <table class="table-bordered" width="100%" cellspacing="1" cellpadding="5">
                    <tbody>
                        <tr class="head-table">
                            <th>No.</th>
                            <th>Name</th>
                            <th>Price</th>
                        </tr>
                       <?php  foreach($market as $value=>$row){  ?>
                        <tr>
                            <td><b><?php echo $row->number; ?></b></td>
                            <td><?php echo $row->title; ?></td>
                            <td><?php echo $row->price; ?></td>
                        </tr>
                       <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


