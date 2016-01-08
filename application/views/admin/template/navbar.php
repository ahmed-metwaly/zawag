<ul class="nav navbar-nav pull-right">
    <!-- BEGIN USER LOGIN DROPDOWN -->
    <li class="dropdown user">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

            <?php

                if(file_exists(HOST_NAME . 'upload/' . $this->session->userdata('adminPhoto'))) {
                    ?>
                    <img alt="" src="<?php echo HOST_NAME . 'upload/' . $this->session->userdata('adminPhoto');  ?>"/>
            <?php
                } else {
                    if($this->session->userdata('adminGender') == 0) { ?>
                        <img width="28" height="28" alt="" src="<?php echo HOST_NAME . 'upload/male.png';  ?>"/>
                   <?php } elseif($this->session->userdata('adminGender') == 1) { ?>
                        <img width="28" height="28" alt="" src="<?php echo HOST_NAME . 'upload/female.png'?>"/>
                   <?php }
                }
            ?>

					<span class="username">
						 <?php echo $this->session->userdata('adminName') ?>
					</span>
            <i class="fa fa-angle-down"></i>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a href="javascript:;" id="trigger_fullscreen">
                    <i class="fa fa-arrows"></i> ملئ الشاشة
                </a>
            </li>

            <li>
                <a href="Admin/logout/">
                    <i class="fa fa-key"></i> تسجيل الخروج
                </a>
            </li>
        </ul>
    </li>
    <!-- END USER LOGIN DROPDOWN -->
</ul>
<!-- END TOP NAVIGATION MENU -->