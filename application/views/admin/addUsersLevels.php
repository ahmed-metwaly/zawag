<?php require_once 'template/header.php'; ?>
<?php //print_r($message); ?>

<?php if(isset($success)) { ?>
    <div class="alert alert-success alert-dismissable" style="text-align: center;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <?php
            echo $success;
        ?>
        <a href="" class="alert-link"></a>

    </div>

    <?php } elseif(isset($error)) {  ?>
    <div class="alert alert-warning alert-dismissable" style="text-align: center;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <?php
            echo $error;
        ?>
        <a href="" class="alert-link"></a>
    </div>
    <?php } ?>
<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<?php
                            $attr = array('id'=>'form_sample_1', 'class'=> 'form-horizontal' );
                           echo form_open('', $attr); ?>
                                <div class="form-body">

                                    <div class="form-group">
                                        <label class="control-label col-md-3"> اسم المستوى
                                        <span class="required">
                                             *
                                        </span>
                                        </label>
                                        <div class="col-md-4">

                                            <input name="ul_name" value="" required data-required="1" placeholder=" " class="form-control" type="text">
                                        </div>
                                    </div>




                                    <table class="table  ">
                                        <tr>
                                            <td>اعدادات الموقع</td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="mainSittings">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>رسائل الاعضاء</td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="usersMessage">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> رسائل الادارة </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="adminMessage">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض مستويات الاعضاء </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="usersLevels">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> اضافة مستوى جديد </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="addUsersLevels">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> تعديل المستويات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="editLevel">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض الاعضاء </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="allUsers">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>اضافة اعضاء</td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="addUsers">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>تعديل اعضاء</td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="usersUpdate">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض الصفحات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="allPages">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> اضافة الصفحات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="addPage">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> تعديل الصفحات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="editPage">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض الاقسام </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="allSections">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> اضافة اقسام </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="addSection">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> تعديل اقسام </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="editSection">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض قصص الاعضاء </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="allStories">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض تفاصيل الصقة </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="viewStories">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض القصص بأنطظار الموافقة </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="unPublishStories">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض الاعلانات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="allAds">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> اضافة الاعلانات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="addAds">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> تعديل الاعلانات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="editAds">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض خدمات الموقع </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="siteFeatures">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> اضافة خدمات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="addSiteFeatures">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> تعديل خدمات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="editSiteFeatures">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض الاسئلة المتداولة </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="faqs">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> اضافة اسئلة متداولة </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="addFaqs">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> تعديل الاسئلة متداولة </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" name="editFaqs">
                                            </td>
                                        </tr>
                                    </table>

                                <div class="form-actions fluid">
                                    <div class="col-md-offset-3 col-md-9">
                                        <input type="submit" name="addLevel" value="أضافة مستوى" class="btn green">
    <!--									    	<button type="button" class="btn default">Cancel</button>-->
                                    </div>
                                </div>

                            <!-- END FORM-->
                        </div>
<?php echo form_close(); ?>
<?php require_once 'template/footer.php'; ?>