<?php
if($session->userdata('userIsL0gin') == 1) {?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo HOST_NAME . 'siteAssets/' ; ?>" >
    <title><?php echo $title; ?></title>



    <link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assests/animate.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assests/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="assests/nprogress.css" />



    <link rel="stylesheet" href="assests/build.css"/>

    <link rel="stylesheet" href="assests/my-account.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assests/pages-style.css">
    <!--[if IE]>
    <script src="js/html5.js"></script>
    <![endif]-->
</head>
<body>

<?php
require_once 'headerUser.php';
} else { ?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <base href="<?php echo HOST_NAME . 'siteAssets/'  ?>">
    <link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assests/animate.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assests/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="assests/nprogress.css" />
    <link rel="stylesheet" type="text/css" href="assests/pages-style.css">
    <!--[if IE]>
    <script src="js/html5.js"></script>
    <![endif]-->
</head>
<body>
<header class="wow fadeIn">
    <div class="container">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 pull-right">
            <a href="<?php echo HOST_NAME; ?>"><img class="img-responsive" src="images/logo.png" /></a>
        </div>
        <!-- col -->
        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 pull-right"> </div>
        <!-- col -->
        <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 pull-right">
            <?php require_once 'loginForm.php'; ?>
        </div>
        <!-- col -->
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
            <ul>
                <li>
                    <a href="<?php echo $siteInfo->si_facebook_url; ?>" class="fa fa-facebook"></a>
                </li>
                <li>
                    <a href="<?php echo $siteInfo->si_twitter_url; ?>" class="fa fa-twitter"></a>
                </li>
                <li>
                    <a href="<?php echo $siteInfo->si_google_plus_url; ?>" class="fa fa-google-plus"></a>
                </li>
                <li>
                    <a href="<?php echo $siteInfo->si_rss_url; ?>" class="fa fa-rss"></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</header>


<?php

}

?>