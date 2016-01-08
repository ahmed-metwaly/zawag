<?php require_once 'template/header.php'; ?>

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue">
            <div class="visual">
                <i class="fa fa-users"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?php echo $countUsers; ?>
                </div>
                <div class="desc">
                    عدد الاعضاء
                </div>
            </div>
             
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat green">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?php echo $countAdminMessage; ?>
                </div>
                <div class="desc">
رسائل الادارة
                </div>
            </div>
             
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat purple">
            <div class="visual">
                <i class="fa fa-envelope"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?php echo $countUsersMessage; ?>
                </div>
                <div class="desc">
                    رسائل الاعضاء
                </div>
            </div>
             
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat red ">
            <div class="visual">
                <i class="fa fa-heart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?php echo $countUsersFavorites; ?>
                </div>
                <div class="desc">
                    عدد الاعجابات
                </div>
            </div>
             
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat purple">
            <div class="visual">
                <i class="fa fa-gift"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?php echo $countSuccessStories; ?>
                </div>
                <div class="desc">
قصص الاعضاء
                </div>
            </div>
             
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat red">
            <div class="visual">
                <i class="fa fa-star-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?php echo $likesMaleWomen; ?>
                </div>
                <div class="desc">
اعجابات الذكور بالاناث
                </div>
            </div>
             
        </div>
    </div>


    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat yellow">
            <div class="visual">
                <i class="fa fa-star"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?php echo $likesWomenMale; ?>
                </div>
                <div class="desc">
                    اعجابات الاناث بالذكور
                </div>
            </div>
             
        </div>
    </div>



    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat green">
            <div class="visual">
                <i class="fa fa-send"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?php echo $maleMessagesForWomen; ?>
                </div>
                <div class="desc">
رسائل الزكور للاناث
                </div>
            </div>
             
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue">
            <div class="visual">
                <i class="fa fa-send-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?php echo $womenMessagesForMale; ?>
                </div>
                <div class="desc">
رسائل الاناس للزكور
                </div>
            </div>
             
        </div>
    </div>


    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat green">
            <div class="visual">
                <i class="fa fa-male"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?php echo $countUsersMale; ?>
                </div>
                <div class="desc">
                     عدد الاعضاء الذكور
                </div>
            </div>
             
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat red">
            <div class="visual">
                <i class="fa fa-female"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?php echo $countUsersWomen; ?>
                </div>
                <div class="desc">
عدد الاعضاء الاناث
                </div>
            </div>
             
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat purple">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?php echo $countUsersActive; ?>
                </div>
                <div class="desc">
عدد العضويات المفعلة
                </div>
            </div>
             
        </div>
    </div>

</div>
<?php require_once 'template/footer.php'; ?>

