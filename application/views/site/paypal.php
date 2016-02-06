<?php require_once 'template/pagesHeader.php'; ?>





<div class="new-page-title">
    <h2 class="wow fadeIn">  <?php echo $sittings['paypalTileDf3'];  ?>
        <p class="search-text"><?php echo $sittings['paypalTitleDesc']; ?></p>
    </h2>
    <div class="paypal">
        <a href="https://www.paypal.com/cgi-bin/webscr"><img src="images/paypal.png" alt="" class="img-responsive"/></a>
    </div>
</div>


<div class="section-new-pages"><!-- section-new-pages -->
    <div class="section-payment">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="selectmethod"><i class="fa fa-angle-left"></i>  <?php echo $sittings['paypalSelect'] ; ?> ... </h4>
                </div>

                <div>

                    <div class="all-methods">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <?php for($i = 0; $i <count($plans); $i++) { ?>
                            <li role="presentation" <?php echo $i == 0 ? 'class="active"' : ''; ?> >
                                <a href="#home<?php echo $i; ?>" aria-controls="home<?php echo $i; ?>" role="tab" data-toggle="tab">
                                    <?php 
                                        if(isset($_GET['lang']) && $_GET['lang'] == 'en') {
                                            echo $plans[$i]['pp_name_en'];
                                        } else {
                                            echo $plans[$i]['pp_name'];
                                        }
                                    ?>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                        <?php for($i = 0; $i <count($plans); $i++) { ?>

                            <div role="tabpanel" class="tab-pane <?php echo $i == 0 ? 'active' : ''; ?>" id="home<?php echo $i; ?>">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12 col-right">
                                        <div class="single-method-payment-1">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6 col-right">
                                                    <h4> <?php echo $sittings['paypalDate']; ?> </h4>
                                                    <h4> <?php echo $sittings['paypalMony']; ?> </h4>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6 col-left">
                                                    <h4 class="de-method"><?php echo ($plans[$i]['pp_duration'] <= 10 ) ? $plans[$i]['pp_duration'] . $sittings['planMonsses']  : $plans[$i]['pp_duration'] . $sittings['planMons'] ?>  </h4>
                                                    <h4 class="de-method"><?php echo $plans[$i]['pp_price'] . ' ' . $sittings['planDolr']  ?>  </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12 col-right">
                                        <?php if($plans[$i]['pp_photo'] != '') { ?>
                                        <div class="single-method-payment-2">
                                            <img width="366" height="119" src="<?php echo HOST_NAME . 'upload/' . $plans[$i]['pp_photo']; ?>" alt="" class="img-responsive"/>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 col-right">
                                        <div class="single-method-payment-3">
                                            <a href="<?php echo HOST_NAME; ?>dashbord/paypal/<?php echo $plans[$i]['pp_id']; ?>" class="btn btn-primary puy-now">  <?php echo $sittings['planNow']; ?> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php } ?>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <div class="paymentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>
                       <?php echo  $sittings['palnDescTitle'] ; ?> 
                    </h3>

                    <p>
                        <?php echo $sittings['planDecCont']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section-new-pages -->


<?php require_once 'template/footer.php'; ?>