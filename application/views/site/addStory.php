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
    <!--[if IE]>
    <script src="js/html5.js"></script>
    <![endif]-->
</head>

<body>
<?php require_once 'template/headerUser.php'; ?>



<?php if($messageDone != '') { ?>
<div class="dataError">
    <?php echo $messageDone; ?>
    <meta http-equiv="refresh" content="2">
</div>
<?php } elseif($messageError != '') {?>

    <div class="messageError">
        <?php  echo $messageError; ?>
    </div>

<?php } ?>


<div class="section-new-pages"><!-- section-new-pages -->
    <div class="container">
        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">

                <div class="wow fadeInUp">
                    <h5 class="Suggestions">
                        اضف قصة نجاحك مع شريك حياتك
                    </h5>

                    <form action="" method="post" class="new-form-con" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>مع من قصتك</label>
                            <select name="to" required="required" class="form-control">
                                <option value="">-- يرجى الاختيار --</option>
                                <?php
                                    for($i= 0; $i < count($toInfo); $i++) {

                                ?>
                                <option value="<?php echo $toInfo[$i]['ur_id']?>"><?php echo $toInfo[$i]['ur_name']?></option>

                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>عنوان القصة </label>
                            <input type="text" required="required" name="title" class="form-control" placeholder="عنوان القصة ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">صورة القصة</label>
                            <input type="file" required="required" name="userfile" id="exampleInputFile">
                            <p class="help-block">يمكنك رفع صوره معبره عن قصتك من خلال الضغط هنـــا .</p>
                        </div>


                        <div class="form-group">
                            <label>محتوى القصة </label>
                            <textarea name="text" required="required" class="form-control" rows="5"></textarea>
                        </div>
                        <input type="hidden" name="hidden">
                        <button type="submit" class="btn btn-primary pull-left">اضافة القصة</button>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>


        </div>
    </div>
</div>
<!-- end section-new-pages -->
<?php require_once 'template/footer.php'; ?>