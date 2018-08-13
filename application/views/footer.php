<!----------Start-Footer---------->
            <section class="footer-bajus">
                <p><?php echo $contact->address; ?><br>
                Phone: <?php echo $contact->phone_no; ?><br>
                Email: <?php echo $contact->email; ?><br>
                Website : www.bajus.org</p>
                <div class="social">
                    <ul>
                        <li><a target="_blank" href="<?php echo $contact->facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="<?php echo $contact->youtube; ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i> </a></li>
                        <li><a target="_blank" href="<?php echo $contact->twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="<?php echo $contact->googleplus; ?>"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <h5>Copyright © 2018-Allright Reserved By: 
                    <a href="index.php">Bangladesh Jewellers Samiti.</a>
                    Design & Developed By: 
                    <a target="blank" href="http://wanitltd.com/">WAN IT Ltd.</a>
                </h5>
            </section>
            <section class="news-head-bottom">
                <div class="news-scroll">
                    <h3>News Update:</h3>
                    <marquee onmouseover="this.stop();" onmouseout="this.start();" direction="left" scrolldelay="4" scrollamount="2" behavior="scroll">Addmission Going on for all Classes of School Students, Delivering Forms for Admission</marquee>
                </div>
                <div class="news-scroll last-scroll">
                    <h3>Gold News:</h3> 
                   <?php $gold = $this->gold_model->gold_info() ?>
                    <marquee onmouseover="this.stop();" onmouseout="this.start();" direction="left" scrolldelay="4" scrollamount="2" behavior="scroll"><?php foreach ($gold as $value=>$row ){ ?>
                    
                    <?php echo $row->title; ?>
                    <?php } ?>
                    </marquee>
                </div>
            </section>
        </div>
    </div>
</div>
<!--------------Begin: Javascript---------------->
<script src="<?php echo base_url().'assets/site/';?>js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url().'assets/site/';?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url().'assets/site/';?>js/bootstrap-select.js"></script>

<script src="<?php echo base_url().'assets/site/';?>js/jquery.flexisel.js" type="text/javascript"></script>
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo3").flexisel({
            visibleItems:5,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 4000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });
    });
</script>

</body>
</html>
