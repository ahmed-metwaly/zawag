<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?> </title>
    <base href="<?php echo HOST_NAME . 'siteAssets/'  ?>">
    <link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assests/animate.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assests/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="assests/nprogress.css" />
    <link rel="stylesheet" href="assests/build.css"/>

    <link rel="stylesheet" href="assests/my-account.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="assests/style-user.css" type="text/css" media="screen" />
    <!--[if IE]>
    <script src="js/html5.js"></script>
    <![endif]-->
</head>

<body>
<?php require_once 'template/headerUser.php'; ?>


<!--    <div class="new-page-title">-->
<!--        <h2 class="wow fadeIn"> عنوان الصفحه-->
<!--            <p class="search-text">وصف مختصر عن الصفحه وصف مختصر عن الصفحه وصف مختصر عن الصفحه </p>-->
<!--        </h2>-->
<!--    </div>-->


    <div class="section-new-pages"><!-- section-new-pages -->
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-xs-12 col-right">
                    <div class="new-right-section">
                        <h3 class="new-title"><?php echo $sittings['mylikesTitle']; ?> </h3>
                        <?php for($i = 0; $i < count($myLikes); $i++) { ?>
                        <div class="col-md-6 col-sm-6 col-xs-12 col-right"><!-- single-like -->

                            <div class="single-like wow fadeInUp">
                                <div class="single-like-photo">
                                    <a href="<?php echo HOST_NAME; ?>profile/index/<?php echo $myLikes[$i]['ur_id']; ?>"><img src="<?php
                                        if(isset($myLikes[$i]['ur_photo']) && $myLikes[$i]['ur_photo'] != '' ) {
                                            echo HOST_NAME . 'upload/' . $myLikes[$i]['ur_photo'];
                                        } else {
                                            if($myLikes[$i]['ur_gender'] == '0') {
                                                echo HOST_NAME . 'upload/mail-defulee.png';
                                            } else {
                                                echo HOST_NAME . 'upload/female-defulte.png';
                                            }

                                        }
                                        ?>" alt=""/></a>
                                </div>
                                <h4><a href="<?php echo HOST_NAME; ?>profile/index/<?php echo $myLikes[$i]['ur_id']; ?>"><?php echo $myLikes[$i]['ur_name']; ?></a></h4>
                                <span>  <?php echo $myLikes[$i]['ur_age']; ?> <?php echo $sittings['year']; ?></span>
                            </div>

                        </div><!-- end single-like -->

                        <?php } ?>



                        </div>

                    </div>

                <div class="col-md-6 col-xs-12 col-left">
                    <div class="new-right-section">
                        <h3 class="new-title"><?php echo $sittings['contentOurMyTikes']; ?> </h3>

                        <?php for($i = 0; $i < count($ourLikes); $i++) { ?>
                            <div class="col-md-6 col-sm-6 col-xs-12 col-right"><!-- single-like -->

                                <div class="single-like wow fadeInUp">
                                    <div class="single-like-photo">
                                        <a href="<?php echo HOST_NAME; ?>profile/index/<?php echo $ourLikes[$i]['ur_id']; ?>"><img src="<?php
                                            if(isset($ourLikes[$i]['ur_photo']) && $ourLikes[$i]['ur_photo'] != '' ) {
                                                echo HOST_NAME . 'upload/' . $ourLikes[$i]['ur_photo'];
                                            } else {
                                                if($ourLikes[$i]['ur_gender'] == '0') {
                                                    echo HOST_NAME . 'upload/mail-defulee.png';
                                                } else {
                                                    echo HOST_NAME . 'upload/female-defulte.png';
                                                }

                                            }
                                            ?>" alt=""/></a>
                                    </div>
                                    <h4><a href="<?php echo HOST_NAME; ?>profile/index/<?php echo $ourLikes[$i]['ur_id']; ?>"><?php echo $ourLikes[$i]['ur_name']; ?></a></h4>
                                    <span>  <?php echo $ourLikes[$i]['ur_age']; ?> <?php echo $sittings['year']; ?></span>
                                </div>

                            </div><!-- end single-like -->

                        <?php } ?>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- end section-new-pages -->


<!-- ******************************* end section new pages****************************************** -->
<?php require_once 'template/footer.php' ?>