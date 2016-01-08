
<!-- BEGIN CONTAINER -->
<div class="page-container">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
<div class="page-sidebar navbar-collapse collapse">
<!-- add "navbar-no-scroll" class to disable the scrolling of the sidebar menu -->
<!-- BEGIN SIDEBAR MENU -->
<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
<li class="sidebar-toggler-wrapper">
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <div class="sidebar-toggler hidden-phone">
    </div>
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
</li>
<li class="sidebar-search-wrapper"></li>
    <br>
<!-- start active -->

	<li class="<?php if($uri->segment(1) == null || $uri->segment(1) == 'Admin' && $uri->segment(2) == null ) echo 'start active'; ?>">
        <a href="<?php echo base_url(); ?>Admin/">
            <i class="fa fa-home"></i>
            <span class="title">
                الرئيسية
            </span>
            <span class="selected">
            </span>
        </a>

    </li>
    <li class="<?php if($uri->segment(2) == 'mainSittings' ) echo 'start active open'; ?>">
        <a href="<?php echo base_url(); ?>Admin/mainSittings/">
            <i class="fa fa-wrench"></i>
            <span class="title">
اعدادات الموقع
            </span>
            <span class="arrow"></span>
            <span class="selected">
            </span>
        </a>

        <ul style="<?php echo ($uri->segment(2) == 'mainSittings' ) ? 'display: block !important;' : 'display: none ;'; ?>" class="sub-menu">
            <li class="<?php if ($uri->segment(2) == 'mainSittings' && $uri->segment(3) == null ) echo 'active';  ?>">
                <a href="<?php echo base_url(); ?>Admin/mainSittings/">
                    <i class="fa fa-cogs"></i>
                    الاعدادات  العامة
                </a>
            </li>
        </ul>
</li>
    <li class="<?php if($uri->segment(2) == 'usersMessage' || $uri->segment(2) == 'adminMessage' ) echo 'start active open'; ?> ">
        <a href="">
            <i class="fa fa-cogs"></i>
            <span class="title">
             الرسائل
            </span>
            <span class="arrow"></span>
            <span class="selected">
            </span>
        </a>

        <ul style="<?php echo ($uri->segment(2) == 'usersMessage' || $uri->segment(2) == 'adminMessage' ) ? 'display: block !important;' : 'display: none ;'; ?>" class="sub-menu">
            <li class="<?php if ($uri->segment(2) == 'usersMessage') echo 'active';  ?> ">
                <a href="<?php echo base_url(); ?>Admin/usersMessage/">
                    <i class="fa fa-m"></i>
                    رسائل الاعضاء
                </a>
            </li>
            <li class="<?php if ($uri->segment(2) == 'adminMessage') echo 'active';  ?>">
                <a href="<?php echo base_url(); ?>Admin/adminMessage/">
                    <i class="fa fa-shopping-cart"></i>
                    رسائل الادارة
                </a>
            </li>
        </ul>
    </li>


    <li class="<?php if($uri->segment(2) == 'usersLevels' || $uri->segment(2) == 'addUsersLevels' || $uri->segment(2) == 'editLevel' ) echo 'start active open'; ?> ">
        <a href="">
            <i class="fa fa-cogs"></i>
                <span class="title">
                 صلاحيات الاعضاء
                </span>
            <span class="arrow"></span>
                <span class="selected">
                </span>
        </a>

        <ul style="<?php echo ($uri->segment(2) == 'usersLevels' || $uri->segment(2) == 'addUsersLevels' || $uri->segment(2) == 'editLevel' ) ? 'display: block !important;' : 'display: none ;'; ?>" class="sub-menu">
            <li class="<?php if ($uri->segment(2) == 'usersLevels' || $uri->segment(2) == 'editLevel') echo 'active';  ?> ">
                <a href="<?php echo base_url(); ?>Admin/usersLevels/">
                    <i class="fa fa-m"></i>
                    كافة المستويات
                </a>
            </li>
            <li class="<?php if ($uri->segment(2) == 'addUsersLevels') echo 'active';  ?>">
                <a href="<?php echo base_url(); ?>Admin/addUsersLevels/">
                    <i class="fa fa-shopping-cart"></i>
                    اضافة مستوى جديد
                </a>
            </li>
        </ul>
    </li>

<li class="<?php if($uri->segment(2) == 'allUsers' || $uri->segment(2) == 'addUsers' || $uri->segment(2) == 'usersUpdate' ) echo 'start active open'; ?> ">
    <a href="">
        <i class="fa fa-cogs"></i>
                <span class="title">
                  اعدادات الاعضاء
                </span>
        <span class="arrow"></span>
                <span class="selected">
                </span>
    </a>

    <ul style="<?php echo ($uri->segment(2) == 'allUsers' || $uri->segment(2) == 'addUsers' || $uri->segment(2) == 'usersUpdate' ) ? 'display: block !important;' : 'display: none ;'; ?>" class="sub-menu">
        <li class="<?php if ($uri->segment(2) == 'allUsers' || $uri->segment(2) == 'usersUpdate') echo 'active';  ?> ">
            <a href="<?php echo base_url(); ?>Admin/allUsers/">
                <i class="fa fa-m"></i>
                كافة الاعضاء
            </a>
        </li>
        <li class="<?php if ($uri->segment(2) == 'addUsers') echo 'active';  ?>">
            <a href="<?php echo base_url(); ?>Admin/addUsers/">
                <i class="fa fa-shopping-cart"></i>
اضف عضو جديد
            </a>
        </li>
    </ul>
</li>

<li class="<?php if($uri->segment(2) == 'allPages' || $uri->segment(2) == 'addPage' || $uri->segment(2) == 'editPage' ) echo 'start active open'; ?> ">
    <a href="">
        <i class="fa fa-cogs"></i>
                <span class="title">
                   اعدادات الصفحات
                </span>
        <span class="arrow"></span>
                <span class="selected">
                </span>
    </a>

    <ul style="<?php echo ($uri->segment(2) == 'allPages' || $uri->segment(2) == 'addPage' || $uri->segment(2) == 'editPage' ) ? 'display: block !important;' : 'display: none ;'; ?>" class="sub-menu">
        <li class="<?php if ($uri->segment(2) == 'allPages' || $uri->segment(2) == 'editPage') echo 'active';  ?> ">
            <a href="<?php echo base_url(); ?>Admin/allPages/">
                <i class="fa fa-m"></i>
                كافة الصفحات
            </a>
        </li>
        <li class="<?php if ($uri->segment(2) == 'addPage') echo 'active';  ?>">
            <a href="<?php echo base_url(); ?>Admin/addPage/">
                <i class="fa fa-shopping-cart"></i>
                اضف صفحة جديدة
                         </a>
        </li>
    </ul>
</li>

<li class="<?php if($uri->segment(2) == 'allSections' || $uri->segment(2) == 'addSection' || $uri->segment(2) == 'editSection' ) echo 'start active open'; ?> ">
    <a href="">
        <i class="fa fa-cogs"></i>
                <span class="title">
                    اعدادات الاقسام
                </span>
        <span class="arrow"></span>
                <span class="selected">
                </span>
    </a>

    <ul style="<?php echo ($uri->segment(2) == 'allSections' || $uri->segment(2) == 'addSection' || $uri->segment(2) == 'editSection' ) ? 'display: block !important;' : 'display: none ;'; ?>" class="sub-menu">
        <li class="<?php if ($uri->segment(2) == 'allSections' || $uri->segment(2) == 'editSection') echo 'active';  ?> ">
            <a href="<?php echo base_url(); ?>Admin/allSections/">
                <i class="fa fa-m"></i>
كافة الاقسام
            </a>
        </li>
        <li class="<?php if ($uri->segment(2) == 'addSection') echo 'active';  ?>">
            <a href="<?php echo base_url(); ?>Admin/addSection/">
                <i class="fa fa-shopping-cart"></i>
       اضف قسم جديد
            </a>
        </li>
    </ul>
</li>

<li class="<?php if($uri->segment(2) == 'allStories' || $uri->segment(2) == 'unPublishStories' || $uri->segment(2) == 'viewStories') echo 'start active open'; ?> ">
    <a href="">
        <i class="fa fa-cogs"></i>
                <span class="title">
قصص الاعضاء
                </span>
        <span class="arrow"></span>
                <span class="selected">
                </span>
    </a>

    <ul style="<?php echo ($uri->segment(2) == 'allStories' || $uri->segment(2) == 'unPublishStories' || $uri->segment(2) == 'viewStories') ? 'display: block !important;' : 'display: none ;'; ?>" class="sub-menu">
        <li class="<?php if ($uri->segment(2) == 'allStories' ) echo 'active';  ?> ">
            <a href="<?php echo base_url(); ?>Admin/allStories/">
                <i class="fa fa-m"></i>
كافة القصص
            </a>
        </li>
        <li class="<?php if ($uri->segment(2) == 'unPublishStories' || $uri->segment(2) == 'viewStories') echo 'active';  ?>">
            <a href="<?php echo base_url(); ?>Admin/unPublishStories/">
                <i class="fa fa-shopping-cart"></i>
بأنطظار الموافقة
            </a>
        </li>
    </ul>
</li>



<li class="<?php if($uri->segment(2) == 'siteFeatures' || $uri->segment(2) == 'addSiteFeatures' || $uri->segment(2) == 'editSiteFeatures') echo 'start active open'; ?> ">
    <a href="">
        <i class="fa fa-cogs"></i>
                <span class="title">
خدمات ومزايا الموقع
                </span>
        <span class="arrow"></span>
                <span class="selected">
                </span>
    </a>

    <ul style="<?php echo ($uri->segment(2) == 'siteFeatures' || $uri->segment(2) == 'editSiteFeatures' || $uri->segment(2) == 'addSiteFeatures') ? 'display: block !important;' : 'display: none ;'; ?>" class="sub-menu">
        <li class="<?php if ($uri->segment(2) == 'siteFeatures' || $uri->segment(2) == 'editSiteFeatures'  ) echo 'active';  ?> ">
            <a href="<?php echo base_url(); ?>Admin/siteFeatures/">
                <i class="fa fa-m"></i>
                 كافة الخدمات
            </a>
        </li>
        <li class="<?php if ($uri->segment(2) == 'addSiteFeatures') echo 'active';  ?>">
            <a href="<?php echo base_url(); ?>Admin/addSiteFeatures/">
                <i class="fa fa-shopping-cart"></i>
                 اضف جديد
            </a>
        </li>
    </ul>
</li>



<li class="<?php if($uri->segment(2) == 'allAds' || $uri->segment(2) == 'editAds' || $uri->segment(2) == 'addAds') echo 'start active open'; ?> ">
    <a href="">
        <i class="fa fa-cogs"></i>
                <span class="title">
اعدادات الاعلانات
                </span>
        <span class="arrow"></span>
                <span class="selected">
                </span>
    </a>

    <ul style="<?php echo ($uri->segment(2) == 'allAds' || $uri->segment(2) == 'editAds' || $uri->segment(2) == 'addAds' ) ? 'display: block !important;' : 'display: none ;'; ?>" class="sub-menu">
        <li class="<?php if ($uri->segment(2) == 'allAds' || $uri->segment(2) == 'editAds' ) echo 'active';  ?> ">
            <a href="<?php echo base_url(); ?>Admin/allAds/">
                <i class="fa fa-m"></i>
                كافة الاعلانات
            </a>
        </li>
        <li class="<?php if ($uri->segment(2) == 'addAds') echo 'active';  ?>">
            <a href="<?php echo base_url(); ?>Admin/addAds/">
                <i class="fa fa-shopping-cart"></i>
                اضف اعلان
            </a>
        </li>
    </ul>
</li>


 <li class="<?php if($uri->segment(2) == 'addFaqs' || $uri->segment(2) == 'faqs' || $uri->segment(2) == 'editFaqs') echo 'start active open'; ?>">
        <a href="<?php echo base_url(); ?>Admin/faqs/">
            <i class="fa fa-wrench"></i>
            <span class="title">
            الاسئلة المتداولة
            </span>
            <span class="arrow"></span>
            <span class="selected">
            </span>
        </a>

        <ul style="<?php echo ($uri->segment(2) == 'addFaqs' || $uri->segment(2) == 'faqs' || $uri->segment(2) == 'editFaqs' ) ? 'display: block !important;' : 'display: none ;'; ?>" class="sub-menu">
           
            <li class="<?php if ($uri->segment(2) == 'addFaqs' && $uri->segment(3) == null ) echo 'active';  ?>">
                <a href="<?php echo base_url(); ?>Admin/addFaqs/">
                    <i class="fa fa-cogs"></i>
                      اضف سؤال جديد
                </a>
            </li>
            <li class="<?php if ($uri->segment(2) == 'faqs' && $uri->segment(3) == null || $uri->segment(2) == 'editFaqs' ) echo 'active';  ?>">
                <a href="<?php echo base_url(); ?>Admin/faqs/">
                    <i class="fa fa-cogs"></i>
                      كافة الاسئله
                </a>
            </li>
        </ul>
</li>

<li class="<?php if($uri->segment(2) == 'paypalPlan' || $uri->segment(2) == 'editPaypalPlan' || $uri->segment(2) == 'addPaypalPlan') echo 'start active open'; ?> ">
    <a href="">
        <i class="fa fa-cogs"></i>
                <span class="title">
خطط الدفع
                </span>
        <span class="arrow"></span>
                <span class="selected">
                </span>
    </a>

    <ul style="<?php echo ($uri->segment(2) == 'paypalPlan' || $uri->segment(2) == 'editPaypalPlan' || $uri->segment(2) == 'addPaypalPlan' ) ? 'display: block !important;' : 'display: none ;'; ?>" class="sub-menu">
        <li class="<?php if ($uri->segment(2) == 'paypalPlan' || $uri->segment(2) == 'editPaypalPlan' ) echo 'active';  ?> ">
            <a href="<?php echo base_url(); ?>Admin/paypalPlan/">
                <i class="fa fa-m"></i>
                كافة الخطط
            </a>
        </li>
        <li class="<?php if ($uri->segment(2) == 'addPaypalPlan') echo 'active';  ?>">
            <a href="<?php echo base_url(); ?>Admin/addPaypalPlan/">
                <i class="fa fa-shopping-cart"></i>
                اضف خطة جديدة
            </a>
        </li>
    </ul>
</li>

<li class="<?php if($uri->segment(2) == 'usersIsAcountDone') echo 'start active open'; ?> ">
    <a href="">
        <i class="fa fa-cogs"></i>
                <span class="title">
احصائيات الدفع
                </span>
        <span class="arrow"></span>
                <span class="selected">
                </span>
    </a>

    <ul style="<?php echo ($uri->segment(2) == 'usersIsAcountDone') ? 'display: block !important;' : 'display: none ;'; ?>" class="sub-menu">
        <li class="<?php if ($uri->segment(2) == 'usersIsAcountDone') echo 'active';  ?> ">
            <a href="<?php echo base_url(); ?>Admin/usersIsAcountDone/">
                <i class="fa fa-m"></i>
                كافة الخطط
            </a>
        </li>
    </ul>
</li>




</ul>
<!-- END SIDEBAR MENU -->
</div>
</div>
<!-- END SIDEBAR -->
