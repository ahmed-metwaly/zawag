<?php require_once 'template/pagesHeader.php'; ?>
<div class="new-page-title">
    <h2 class="wow fadeIn">
        <p class="search-text">تفاصيل القصة</p>
    </h2>
</div>

<div class="section-new-pages"><!-- section-new-pages -->
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-right"></div>
            <div class="col-lg-10 com-md-6 col-sm-12 col-xs-12 block col-right"><!-- single story -->
                <div class="single-story new-single-story wow fadeInUp">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12"><!-- left -->
                            <div class="story-user">
                                <h5>الإسم</h5>

                                <h4><?php echo $to->ur_name; ?></h4>

                                <h5>العمر</h5>

                                <h4><?php echo $to->ur_age; ?></h4>

                                <h5>دولة الأصل</h5>

                                <h4><?php echo $to->ur_country; ?></h4>

                                <h5>دولة الإقامة</h5>

                                <h4><?php echo $to->ur_country_stay; ?></h4>

                                <h5> كنت أبحث عن</h5>

                                <h4><?php echo $to->ur_target; ?></h4>
                            </div>

                        </div>
                        <!-- end left -->

                        <div class="col-md-6 col-sm-4 col-xs-12"><!-- center -->
                            <div class="story-img">
                                <a ><img src="<?php echo HOST_NAME . 'upload/' . $viewStory-> ss_photo; ?>" alt="لايوجد"/></a>
                            </div>
                        </div>
                        <!-- end center -->

                        <div class="col-md-3 col-sm-4 col-xs-12"><!-- right -->
                            <div class="story-user">
                                <h5>الإسم</h5>

                                <h4><?php echo $viewStory->ur_name;  ?></h4>

                                <h5>العمر</h5>

                                <h4><?php echo $viewStory->ur_age; ?></h4>

                                <h5>دولة الأصل</h5>

                                <h4><?php echo $viewStory->ur_country; ?></h4>

                                <h5>دولة الإقامة</h5>

                                <h4><?php echo $viewStory->ur_country_stay; ?></h4>

                                <h5> كنت أبحث عن</h5>

                                <h4><?php echo $viewStory->ur_target; ?></h4>
                            </div>
                        </div>
                        <!-- end right -->

                        <div class="clearfix"></div>

                        <h3><?php echo $viewStory->ss_title ; ?></h3>

                    </div>
                </div>
            </div>
            <!-- end single story -->
            <div class="col-md-1 col-right"></div>

        </div>

        <div class="row">
            <div class="story-content wow fadeInUp">
                <h3><?php echo $viewStory->ss_title ; ?></h3>

               <p><?php echo $viewStory->ss_text; ?></p>
            </div>
        </div>

    </div>
</div>
<?php require_once 'template/footer.php'; ?>