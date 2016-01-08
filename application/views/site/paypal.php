<?php require_once 'template/pagesHeader.php'; ?>





<div class="new-page-title">
    <h2 class="wow fadeIn"> طرق الدفع
        <p class="search-text">طريقة الدفع المتاحه هى الدفع من خلال حساب الباى بال</p>
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
                    <h4 class="selectmethod"><i class="fa fa-angle-left"></i> اختار الخطه التى تناسبـــك ... </h4>
                </div>

                <div>

                    <div class="all-methods">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <?php for($i = 0; $i <count($plans); $i++) { ?>
                            <li role="presentation" class="active">
                                <a href="#home<?php echo $i; ?>" aria-controls="home<?php echo $i;; ?>" role="tab" data-toggle="tab">
                                    <?php echo $plans[$i]['pp_name']; ?>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                        <?php for($i = 0; $i <count($plans); $i++) { ?>

                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12 col-right">
                                        <div class="single-method-payment-1">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6 col-right">
                                                    <h4>المدة </h4>
                                                    <h4>المبلغ </h4>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6 col-left">
                                                    <h4 class="de-method"><?php echo ($plans[$i]['pp_duration'] <= 10 ) ? $plans[$i]['pp_duration'] . ' أشهر ' : $plans[$i]['pp_duration'] . ' شهرا ' ?>  </h4>
                                                    <h4 class="de-method"><?php echo $plans[$i]['pp_price'] ?> دولار </h4>
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
                                            <a href="<?php echo HOST_NAME; ?>dashbord/paypal/<?php echo $plans[$i]['pp_id']; ?>" class="btn btn-primary puy-now"> ادفع الأن </a>
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
                        طريقة الدفع
                    </h3>

                    <p>

                        اضغط على "ادفع" ثم املأ كل الحقول المطلوبة

                        المرجو الملاحظة أن الترقية سوف تتجدد تلقائيا عند نهاية المدة. إذا لم تكن ترغب في التجديد
                        التلقائي يمكنك
                        إلغائه في أية لحظة من خلال صفحة إدارة الحساب.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section-new-pages -->


<?php require_once 'template/footer.php'; ?>