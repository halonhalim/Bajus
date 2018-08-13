<div class="row">
    <div class="span12">
        <h4 class="title">
            <span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
            <span class="pull-right">
                <a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
            </span>
        </h4>
        <div id="myCarousel" class="myCarousel carousel slide">
            <div class="carousel-inner">
                <div class="active item">
                    <ul class="thumbnails">	
                        <?php foreach ($all_products_published_info_by_category as $row){ ?>
                        <li class="span3">
                            <div class="product-box">
                                <span class="sale_tag"></span>
                                <p><a href="<?php echo base_url() ?>home/product_details/<?php echo $row->product_id ?>"><img src="<?php echo base_url().$row->product_image ?>" alt="" /></a></p>
                                <a href="product_detail.html" class="title"><?php echo $row->product_name ?></a><br/>
                                <a href="<?php echo $row->category_id ?>" class="category"></a>
                                <p class="price"><?php echo $row->product_new_price ?></p>
                            </div>
                        </li>
                        <?php }?>
                     
                    </ul>
                </div>
                <div class="item">
                    <ul class="thumbnails">
                       																											
                    </ul>
                </div>
            </div>							
        </div>
    </div>						
</div>
<br/>
<div class="row">
    <div class="span12">
        <h4 class="title">
            <span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
            <span class="pull-right">
                <a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
            </span>
        </h4>
        <div id="myCarousel-2" class="myCarousel carousel slide">
            <div class="carousel-inner">
                <div class="active item">
                    <ul class="thumbnails">												
                        
                </div>
                <div class="item">
                    <ul class="thumbnails">
                        																											
                    </ul>
                </div>
            </div>							
        </div>
    </div>						
</div> 