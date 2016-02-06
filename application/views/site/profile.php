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
<?php require_once'template/headerUser.php' ?>
    
<!--satrt cover-->
    <section class="cover-img">
        <img class="img-responsive" src="images/bg-user.png" alt="bg-user">
        <div class="clearfix"></div>
    </section>
<!--satrt cover-->
<!--satrt user-header-->
    <section class="header-user">
       <div class="container">
           <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 pull-right">
                  <?php
                    if($usersRegister['ur_photo'] != '') {?>
                    <img class="img-responsive img-user" style="height: 253px; width: 253px;" src="<?php echo HOST_NAME . 'upload/' . $usersRegister['ur_photo']; ?>" alt="bg-user">
                    <?php } else {
                      if($usersRegister['ur_gender'] == '0') { ?>
                      <img class="img-responsive img-user" style="height: 253px; width: 253px;" src="<?php echo HOST_NAME . 'upload/mail-defulee.png';?>" alt="bg-user">
                      <?php } else { ?>
                      <img class="img-responsive img-user" style="height: 253px; width: 253px;" src="<?php echo HOST_NAME . 'upload/female-defulte.png';?>" alt="bg-user">
                    <?php } }?>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
                   <div class="info-user">
                    <h1><?php echo $usersRegister['ur_name']; ?></h1>
                   </div>
                </div>
<?php if($session->userdata('userId') != $uri->segment(3)) { ?>
                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12">
                  <div class="user-add">
                      <a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fa fa-envelope fa-2"></i></i></a>
                      <a id="likeTo"><i class="<?php echo $like; ?> fa fa-heart fa-2"></i></a>
                   </div>
                </div>
                <?php } ?>
              </div>
           </div>
       </div>
     <div class="clearfix"></div>
    </section>


<?php
  if($usersRegister['ur_acount_done'] == '0') {?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"> <?php echo $sittings['progressUpgradProfile']; ?> </h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <section class="blocks-person">
              
                  <div class="row">
                   <!--col-->
                      <!--col-->

                     <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12" style="visibility: visible; animation-name: none;">
                        <div class="block-per">
                             <div class="title-block-per"><?php echo $sittings['progressUpgradProfile']; ?></div>
                             <div class="body-block-per">
                              <h3><?php echo $sittings['upgradNow']; ?></h3>
                              <p><?php echo $sittings['updateAcount'] ; ?></p>
                             <a href="<?php echo HOST_NAME . 'dashbord/paypal/' ?>" class="btn btn-success btn-block col-lg-12"><?php echo $sittings['upgradeBtn']; ?></a>
                             </div>
                             <div class="clearfix"></div>
                         </div>
                     </div>
                     <!--col-->
                  </div>
              
          </section>
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $sittings['imageCansel']; ?></button>
      </div>
       </form>
    </div>
  </div>
</div>


  <?php } else {
    ?>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"><?php echo $sittings['mNewMessage']; ?></h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="message-text" class="control-label"> <?php echo $sittings['mTo']; ?> : <?php echo $usersRegister['ur_name']; ?></label>
            <textarea class="form-control" name="text" rows="6" id="message-text"></textarea>
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $sittings['mClose']; ?></button>
        <button type="submit" name="sendMessage" class="btn btn-primary"><?php echo $sittings['mSend']; ?></button>;
      </div>
       </form>
    </div>
  </div>
</div>

    <?php
  }
  
 ?>



<!--end user-header-->
<!--start user-details-->
   <section class="user-details">
    <div class="container">
        <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
                <div class="user-info">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
                    <ul class="list-unstyled user-info-2">

                    <li> <?php echo $sittings['pNation']; ?> : <span><?php echo $contry[$usersRegister['ur_country']]; ?></span></li>
                    <li> <?php echo $sittings['pCountry']; ?> : <span><?php echo $contryp[$usersRegister['ur_country_stay']]; ?></span></li>
                    <li> <?php echo $sittings['pTarget'] ; ?> : <span><?php echo $target[$usersRegister['ur_target']]; ?></span></li>
                    <li> <?php echo $sittings['pFamly']; ?> : <span><?php echo $sittings['registerUserDataFamlyCrant'][$usersSocialPosition['usp_family_status']]; ?></span></li>
                    <li> <?php echo $validation['filedsAge']; ?> : <span><?php echo $usersRegister['ur_age']; ?> <?php echo $sittings['year']; ?> </span></li>
                    <li> <?php echo $sittings['p_children']; ?>  : <span><?php echo $sittings['registerUserDataChldrnCrant'][$usersSocialPosition['usp_want_children']]; ?></span></li>
                    <li> <?php echo $sittings['registerUserDataWidth']; ?>  : <span><?php echo $usersSocialPosition['usp_weight']; ?>  <?php echo $sittings['pWigth']; ?></span></li>
                    <li> <?php echo $sittings['Ptol']; ?> <span><?php echo $usersSocialPosition['usp_height']; ?> <?php echo $sittings['pTool']; ?> </span></li>
                </ul>
                </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  pull-left">
                    <ul class="list-unstyled user-info-1">
                    <li> <?php echo $sittings['pSken']; ?> : <span><?php echo $usersSocialPosition['usp_skin_color']; ?></span></li>
                    <li> <?php echo $sittings['registerUserDataBody']; ?> : <span><?php echo $sittings['registerUserDataBodyCrant'][$usersSocialPosition['usp_physique']]; ?></span></li>
                    <li> <?php echo $sittings['registerUserDataWork']; ?> : <span><?php echo $sittings['registerUserDataWorkCrant'][$usersSocialPosition['usp_work_field']]; ?></span></li>
                    <li> <?php echo $sittings['pLCat']; ?> : <span><?php echo $sittings['pLCatCrant'][$usersSocialPosition['usp_learn']]; ?></span></li>
                    <li> <?php echo $sittings['registerUserDataMonyCase']; ?> : <span><?php echo $sittings['registerUserDataMonyCaseCrant'][$usersSocialPosition['usp_physical_condition']]; ?></span></li>
                    <li> <?php echo $sittings['registerUserDataSalry']; ?> : <span><?php echo $sittings['registerUserDataSalryCrant'][$usersSocialPosition['usp_monthly_income']]; ?>$</span></li>
                    <li> <?php echo $sittings['registerUserDataHealth']; ?> : <span><?php echo $sittings['registerUserDataHealthCrant'][$usersSocialPosition['usp_health_status']]; ?></span></li>
                    <li> <?php echo $sittings['registerUserDataReligious']; ?> : <span><?php echo $sittings['registerUserDataReligiousCrant'][$usersSocialPosition['usp_religious_commitment']]; ?></span></li>

                   
                </ul>
                </div>

                
                <div class="clearfix"></div>
                </div>

            </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">

                 <!--start group tab-->
                <div class="panel-group text-center" id="accordion" role="tablist" aria-multiselectable="true" >
                      <div class="panel  active">
                    <div class="panel-heading tab1-head" role="tab" id="headingOne" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <h4 class="panel-title">
                        
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $sittings['pMySearch']; ?>
                        </a>
                        <i class="glyphicon glyphicon-menu-up"></i>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        <?php echo $usersAbout['uab_about_search'];?>
                      </div>
                    </div>
                  </div>
                    
                    <div class="panel">
                    <div class="panel-heading tab2-head" role="tab" id="headingTwo" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <h4 class="panel-title">
                        
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                         <?php echo $sittings['pYourSearch']; ?>
                        </a>
                        <i class="glyphicon glyphicon-menu-down"></i>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        <?php echo $usersAbout['uab_myself']; ?>
                      </div>
                    </div>
                  </div>

                </div>
                <!--end group tab--> 



                </div>

        </div>

    </div>

   </section>
<div class="clearfix"></div>
<section class="users wow fadeInUp">
    <div class="container">
        <h2><?php echo $pagesTitle['DashBordPhotos']; ?></h2>
        <div class="user-area">
            <?php
            for($i = 0; $i < count($photos); $i++) {
                ?>

                <div class="item">
                    <img class="owl-lazy" data-src="<?php echo HOST_NAME . 'upload/' . $photos[$i]['up_photo']; ?>" alt="no image" />
                </div>

            <?php } ?>

        </div>
        <!-- user -->
    </div>
    <div class="clearfix"></div>
</section>
<!--end user-details-->

<?php require_once 'template/footer.php'; ?>
