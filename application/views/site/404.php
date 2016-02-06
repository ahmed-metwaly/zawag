<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo HOST_NAME . 'siteAssets/' ; ?>" >
    <title>الرسائل</title>
    


    <link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assests/animate.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assests/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="assests/nprogress.css" />
    
    

    <link rel="stylesheet" href="assests/build.css"/>
   
    <link rel="stylesheet" href="assests/my-account.css" type="text/css" media="screen" />
    <!--[if IE]>
    <script src="js/html5.js"></script>
    <![endif]-->
</head>

<body>
    
    <!--start menu-->
<?php require_once 'template/headerUser.php' ?>
<!--start pepoles-->
<section class="blocks-person">
    <div class="container">
        <div class="row">
         <!--col-->
            <!--col-->

            <?php 
            
            if(!isset($_GET['lang']) && $_GET['lang'] == 'ar') {
                ?>
            <div class=" wow fadeInDown col-lg-12 col-md-12 col-sm-8 col-xs-12">
              <div class="block-per">
                   <div class="title-block-per">ترقية الحساب</div>
                   <div class="body-block-per">
                    <h3>ترقية حسابك الأن</h3>
                    <p>يجب ترقية الحساب لكى تتمكن من المحادثة</p>
                   <a href="<?php echo HOST_NAME . 'dashbord/paypal/' ?>" class="btn btn-success btn-block col-lg-12">رقى حسابك الان</a>
                   </div>
                   <div class="clearfix"></div>
               </div>
           </div>
            <?php } else {?>
            <div class=" wow fadeInDown col-lg-12 col-md-12 col-sm-8 col-xs-12">
              <div class="block-per">
                   <div class="title-block-per">Account Upgrade</div>
                   <div class="body-block-per">
                    <h3>Upgrade your account now</h3>
                    <p>Account must be upgraded in order to be able to chat</p>
                   <a href="<?php echo HOST_NAME . 'dashbord/paypal/' ?>" class="btn btn-success btn-block col-lg-12">رقى حسابك الان</a>
                   </div>
                   <div class="clearfix"></div>
               </div>
           </div>
            <?php } ?>
           
           <!--col-->
        </div>
    </div>
</section>
<!--end pepoles-->
<?php require_once 'template/footer.php'; ?>