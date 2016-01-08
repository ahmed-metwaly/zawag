<?php $timeLine = $this->Dsw_model->timeLine(); ?>
<!--start menu-->
<section class="menu">
    <div class="container">
        <div class="col-lg-12">
            <div class="img-logo wow fadeInDown col-xs-12 col-sm-3 col-md-3 col-lg-3 pull-right">
                <a href=""><img class="img-responsive" src="images/logo.png" /></a>
            </div>
            <nav class="navbar navbar-default my-navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <p class="p-toggle">القائمة الرئيسية</p>
                        </button>
                    </div>


                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul style="border:none;" class="ak wow my-nav pull-right  fadeInDown nav navbar-nav navbar-right col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <li  class="<?php echo ($uri->segment(1) == 'dashbord' || $uri->segment(2) == 'index') ? 'active' : ''; ?>">
                                <a href="<?php echo HOST_NAME . 'dashbord/' ?>"><i class="fa fa-home fa-lg ic-menu"></i>الرئيسية<span class="sr-only">(current)</span></a></li>
                            <li class="<?php echo ($uri->segment(1) == 'messages') ? 'active' : '';?>"><a href="<?php echo HOST_NAME . 'messages/' ?>"><i class="fa fa-comments fa-lg ic-menu"></i>رسائل</a></li>
                            <li class="<?php echo ($uri->segment(2) == 'liks') ? 'active' : '';?>"><a href="<?php echo HOST_NAME . 'dashbord/' ?>liks"><i class="fa fa-cog fa-lg ic-menu"></i>اعجاب</a></li>
                            <li class="<?php echo ($uri->segment(2) == 'photos') ? 'active' : '';?>"><a href="<?php echo HOST_NAME . 'dashbord/photos' ?>"><i class="fa fa-search fa-lg ic-menu"></i>البوم الصور</a></li>

                        </ul>
                        <ul class="wow fadeInDown user-drop col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">لوحة التحكم</a>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $timeLine; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $timeLine; ?>%">
                                        <span class="sr-only"><?php echo $timeLine; ?>% Complete</span>
                                        <?php echo $timeLine; ?>%
                                    </div>
                                </div>

                                <ul class="dropdown-menu dropdown-menu-user wow fadeInDown">
                                    <li><a href="<?php echo HOST_NAME . 'profile/index/' . $session->userdata('userId'); ?>">الملف الشخصى</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo HOST_NAME ?>dashbord/updateInfo/">تعديل الحساب</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo HOST_NAME;?>dashbord/paypal/">ترقية الحساب</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo HOST_NAME . 'dashbord/addStories/' ?>"> اضف قصة نجاح </a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo HOST_NAME . 'dashbord/' ?>logOut/">تسجيل خروج</a></li>

                                </ul>
                            </li>
                        </ul>


                    </div><!-- /.navbar-collapse -->

                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    <div class="clearfix"></div>
</section>
<!--end menu-->