<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?> </title>
    <base href="<?php echo HOST_NAME . 'siteAssets/' ?>">
    <link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assests/animate.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assests/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="assests/nprogress.css" />

    <link rel="stylesheet" href="assests/result-search.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="assests/build.css"/>

    <link rel="stylesheet" href="assests/my-account.css" type="text/css" media="screen" />

    <!--[if IE]>
    <script src="js/html5.js"></script>
    <![endif]-->
</head>

<body>

   <?php require_once 'template/headerUser.php'; ?>


    <section id="site" class="wow fadeIn  search-details">
    <div class="container text-center">
        <h2> نتائج البحث عن الاعضاء
            <p class="search-text">عدد نتائج البحث <span><?php echo $contResult; ?></span> , أنت في الصفحة <span> <?php echo $pageNumber; ?> من <?php echo $contPages; ?><span></p>
        </h2>

        <?php

        for($i = 0; $i < count($dataSearch); $i++) { ?>

        <div class="col-lg-4 com-md-6 col-sm-6 col-xs-12 block" style="height: 200px;">
            <div class="per-block">
                <a href="<?php echo HOST_NAME . 'profile/index/' . $dataSearch[$i]['ur_id'] ?>">
                    <?php
                        if(isset($dataSearch[$i]['ur_photo']) && $dataSearch[$i]['ur_photo'] != '') {?>
                    <img style="width: 150px; height: 150px;" src="<?php echo HOST_NAME . 'upload/' .  $dataSearch[$i]['ur_photo']; ?>" alt="per-img" class="img-responsive img-thumbnail img-per">
                    <?php } else {

                            if($dataSearch[$i]['ur_gender'] == 0) {
                                ?>
                                <img style="width: 150px; height: 150px;" src="<?php echo HOST_NAME . 'upload/mail-defulee.png' ; ?>" alt="per-img" class="img-responsive img-thumbnail img-per">
                                <?php
                            } else {
                                ?>
                                <img style="width: 150px; height: 150px;" src="<?php echo HOST_NAME . 'upload/female-defulte.png' ; ?>" alt="per-img" class="img-responsive img-thumbnail img-per">
                                <?php
                            }


                            ?>

                    <?php } ?>
                </a>
                <ul class="list-unstyled details-per">
                    <li class="det-per"><i class="fa fa-user"></i><span> <?php echo $dataSearch[$i]['ur_name'] ?></span></li>
                    <li class="det-per"><i class="fa fa-user"></i><span> <?php echo $dataSearch[$i]['ur_age'] ?></span></li>
                    <li class="det-per"><i class="fa fa-home"></i><span> <?php echo $dataSearch[$i]['ur_country'] ?></span></li>
                    <li class="det-per"><i class="fa fa-map-marker"></i><span> <?php echo $dataSearch[$i]['ur_country_stay'] ?></span></li>
                    <div class="clearfix"></div>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>

        <?php } ?>

        <!-- col -->

        <div class="clearfix"></div>

        <!--start nav -->
        <nav>

            <ul class="pagination my-nav">
                <?php echo $pagination; ?>
<!--                <a  class="pages-nu" href="#" aria-label="Previous">-->
<!--                    صفحة 1 من 1500-->
<!--                </a>-->
<!--                <li><a href="#">1</a></li>-->
<!--                <li><a href="#">2</a></li>-->
<!--                <li><a href="#">3</a></li>-->
<!--                <li><a href="#">4</a></li>-->
<!--                <li><a href="#">5</a></li>-->
<!--                <li>-->
<!--                    <a href="#" aria-label="Next">-->
<!--                        <i class="fa fa-arrow-circle-o-left"></i>-->
<!--                    </a>-->
<!--                </li>-->
            </ul>
        </nav>
        <!-- end nav -->
        <div class="clearfix"></div>

    </div>
    <div class="clearfix"></div>
    </section>


<?php require_once 'template/footer.php'; ?>