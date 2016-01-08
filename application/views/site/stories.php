<?php require_once'template/pagesHeader.php'; ?>
<div class="new-page-title">
    <h2 class="wow fadeIn">
        <p class="search-text">قصص نجاح الاعضاء فى البحث عن شريك حياتهم</p>
    </h2>
</div>

<div class="section-new-pages"><!-- section-new-pages -->
<div class="container">
<div class="row">
<?php for($i = 0; $i <count($allStories); $i++) { ?>
<div class="col-lg-6 com-md-6 col-sm-12 col-xs-12 block col-right"><!-- single story -->
    <div class="single-story wow fadeInUp">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"><!-- left -->
                <div class="story-user">
                    <h5>الإسم</h5>

                    <h4><?php echo $to[$i]['ur_name']; ?></h4>

                    <h5>العمر</h5>

                    <h4><?php echo $to[$i]['ur_age']; ?></h4>

                    <h5>دولة الأصل</h5>

                    <h4><?php echo $to[$i]['ur_country']; ?></h4>
                </div>

            </div>
            <!-- end left -->

            <div class="col-md-4 col-sm-4 col-xs-12"><!-- center -->
                <div class="story-img">
                    <a href="<?php echo HOST_NAME . 'main/viewStory/' . $allStories[$i]['ss_id']; ?>"><img src="<?php echo HOST_NAME . 'upload/' . $allStories[$i]['ss_photo']; ?>" alt=""/></a>
                </div>
            </div>
            <!-- end center -->

            <div class="col-md-4 col-sm-4 col-xs-12"><!-- right -->
                <div class="story-user">
                    <h5>الإسم</h5>

                    <h4><?php echo $allStories[$i]['ur_name']; ?></h4>

                    <h5>العمر</h5>

                    <h4><?php echo $allStories[$i]['ur_age']; ?></h4>

                    <h5>دولة الأصل</h5>

                    <h4><?php echo $allStories[$i]['ur_country']; ?></h4>
                </div>
            </div>
            <!-- end right -->

        </div>
    </div>
</div>
<!-- end single story -->
<?php } ?>

</div>

<div class="row">
    <!--start nav -->
   
    <nav class="new-pagination">
        <ul class="pagination my-nav">
            <li>
                <?php echo $pagination; ?>
            </li>  
        </ul>
    </nav>
    <!--end nav -->
    <div class="clearfix"></div>
</div>
</div>
</div>

<?php require_once'template/footer.php'; ?>