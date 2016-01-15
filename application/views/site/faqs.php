<?php require_once 'template/pagesHeader.php'; ?>





    <div class="section-new-pages">
        <!-- section-new-pages -->
        <div class="container">
            <div class="row">


                <div class="col-sm-9 col-xs-12 col-right">
                <?php for ($i = 0; $i < count($faqsData); $i++) { ?>
                    <div class="panel-group" id="accordion-<?php echo $i;?>" role="tablist" aria-multiselectable="false">

                        <div class="panel panel-default">
                            <!-- new tap -->
                            <div class="panel-heading" role="tab" id="headingOne-<?php echo $i;?>">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne-<?php echo $i;?>" aria-expanded="true" aria-controls="collapseOne-<?php echo $i;?>"><?php echo $faqsData[$i]['f_question']; ?></a>
                                </h4>
                            </div>

                            <div id="collapseOne-<?php echo $i;?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne-<?php echo $i;?>">
                                <div class="panel-body"><?php echo $faqsData[$i]['f_answer']; ?></div>
                            </div>
                        </div>

                    </div>
                <?php } ?>

                </div>

                <div class="col-sm-3 col-xs-12 col-left">
                    <div class="adv-sidebar">
                        <?php 
                        
                        foreach ($sideAds as $ads) {
                        ?>
                        <div class="single-adv">
                            <a href="<?php echo $ads['ads_url'];  ?>" target="_blank"><img width="262" height="300" src="<?php echo HOST_NAME . 'upload/' . $ads['ads_photo']; ?>" alt="no image" class="img-responsive"/></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- end section-new-pages -->


<?php require_once 'template/footer.php'; ?>