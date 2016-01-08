<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo HOST_NAME . 'siteAssets/' ; ?>" >
    <title><?php echo $title; ?></title>


<!--    <link rel="stylesheet" type="text/css" href="assests/style_upload.css" />-->
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

    <link href="https://rawgithub.com/hayageek/jquery-upload-file/master/css/uploadfile.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="https://rawgithub.com/hayageek/jquery-upload-file/master/js/jquery.uploadfile.min.js"></script>



</head>

<body>
<?php require_once 'template/headerUser.php';

if($messageData != '') {
    echo '<script> alert("' . $messageData . '") </script>';
}

?>
<!--<div id="mulitplefileuploader">Upload</div>-->
<!---->
<!--<div id="status"></div>-->
<!--<script>-->
<!---->
<!--    $(document).ready(function()-->
<!--    {-->
<!---->
<!--        var settings = {-->
<!--            url: "upload.php",-->
<!--            method: "POST",-->
<!--            allowedTypes:"jpg,png,gif,doc,pdf,zip",-->
<!--            fileName: "myfile",-->
<!--            multiple: true,-->
<!--            onSuccess:function(files,data,xhr)-->
<!--            {-->
<!--                $("#status").html("<font color='green'>Upload is success</font>");-->
<!---->
<!--            },-->
<!--            onError: function(files,status,errMsg)-->
<!--            {-->
<!--                $("#status").html("<font color='red'>Upload is Failed</font>");-->
<!--            }-->
<!--        }-->
<!--        $("#mulitplefileuploader").uploadFile(settings);-->
<!---->
<!--    });-->
<!--</script>-->


<div class="section-new-pages"><!-- section-new-pages -->
    <div class="container">
        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">

                <div class="wow fadeInUp AddNewPhoto">
                    <h5 class="Suggestions">
                        ارفق صور الى البوم صورك
                    </h5>
                    <form action="" method="post" class="new-form-con" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputFile">اضافة صوره </label>
                            <input type="file" name="userfile" required id="exampleInputFile">

<!--                            <p class="help-block">يمكنك رفع صورة معبره عنك </p>-->
                        </div>
                        <button type="submit" name="upload" class="btn btn-primary pull-left">اضافة الى الالبوم</button>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
</div>
<!-- end section-new-pages-->






<section class="users wow fadeInUp">
    <div class="container">
        <h2>البوم الصور</h2>
        <div class="user-area">
            <?php
                for($i = 0; $i < count($photos); $i++) {
            ?>

            <div class="item">
                <img class="owl-lazy" data-src="<?php echo HOST_NAME . 'upload/' . $photos[$i]['up_photo']; ?>" alt="4444" />
            </div>

            <?php } ?>

        </div>
        <!-- user -->
    </div>
    <div class="clearfix"></div>
</section>

<?php require_once 'template/footer.php'; ?>