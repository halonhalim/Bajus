

<div class="banner-top">
    <img alt="" src="<?php echo base_url()."/assets/site/" ?>img/slider/banner.png">
</div>
</section>

<section class="inner-pages-area">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="txtarea-field">
            <h2>Govt. Circulars</h2>
            <div class="table-responsive table-annual">
                <table class="table-bordered" width="100%" cellspacing="1" cellpadding="5">
                    <tbody>
                        <tr class="head-table">
                            <th>No.</th>
                            <th>Title</th>
                            <th>View PDF</th>
                        </tr>
                        <tr>
                            <?php foreach ($govt as $value=>$row) { ?>
                            <td><b><?php echo $row->number; ?></b></td>
                            <td><?php echo $row->title; ?></td>
                            <td class="letter"><a target="_blank" href="<?php echo base_url(). $row->file_name; ?>"><img src="<?php echo base_url()."/assets/site/" ?>img/interface/pdf.jpg"></a></td>
                        </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

