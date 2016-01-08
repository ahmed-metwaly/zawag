<?php require_once 'template/header.php'; ?>
<?php //print_r($post); ?>

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

                            $id = $this->uri->segment(3);

                            echo form_open('Admin/editLevel/' . $id , $attr); ?>

                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="control-label col-md-3"> اسم المستوى
                                    <span class="required">
                                         *
                                    </span>
                                        </label>
                                        <div class="col-md-4">

                                            <input name="ul_name" value="<?php echo $levelData['ul_name'];  ?>" required data-required="1" placeholder=" " class="form-control" type="text">
                                        </div>
                                    </div>


                                    <table class="table  ">
                                        <tr>
                                            <td>اعدادات الموقع</td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['mainSittings'] == '1' ? 'checked' : '';?> name="mainSittings">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>رسائل الاعضاء</td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['usersMessage'] == '1' ? 'checked' : '';?> name="usersMessage">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> رسائل الادارة </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['adminMessage'] == '1' ? 'checked' : '';?> name="adminMessage">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض مستويات الاعضاء </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['usersLevels'] == '1' ? 'checked' : '';?> name="usersLevels">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> اضافة مستوى جديد </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['addUsersLevels'] == '1' ? 'checked' : ''; ?> name="addUsersLevels">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> تعديل المستويات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['editLevel'] == '1' ? 'checked' : '';?> name="editLevel">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض الاعضاء </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['allUsers'] == '1' ? 'checked' : '';?> name="allUsers">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>اضافة اعضاء</td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['addUsers'] == '1' ? 'checked' : '';?> name="addUsers">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>تعديل اعضاء</td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['usersUpdate'] == '1' ? 'checked' : '';?> name="usersUpdate">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض الصفحات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['allPages'] == '1' ? 'checked' : '';?> name="allPages">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> اضافة الصفحات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['addPage'] == '1' ? 'checked' : '';?> name="addPage">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> تعديل الصفحات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['editPage'] == '1' ? 'checked' : '';?> name="editPage">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض الاقسام </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['allSections'] == '1' ? 'checked' : '';?> name="allSections">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> اضافة اقسام </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['addSection'] == '1' ? 'checked' : '';?> name="addSection">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> تعديل اقسام </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['editSection'] == '1' ? 'checked' : '';?> name="editSection">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض قصص الاعضاء </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['allStories'] == '1' ? 'checked' : '';?> name="allStories">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض تفاصيل الصقة </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['viewStories'] == '1' ? 'checked' : '';?> name="viewStories">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض القصص بأنطظار الموافقة </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['unPublishStories'] == '1' ? 'checked' : '';?> name="unPublishStories">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض الاعلانات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['allAds'] == '1' ? 'checked' : '';?> name="allAds">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> اضافة الاعلانات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['addAds'] == '1' ? 'checked' : '';?> name="addAds">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> تعديل الاعلانات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['editAds'] == '1' ? 'checked' : '';?> name="editAds">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> عرض خدمات الموقع </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['siteFeatures'] == '1' ? 'checked' : '';?> name="siteFeatures">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> اضافة خدمات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['addSiteFeatures'] == '1' ? 'checked' : '';?> name="addSiteFeatures">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> تعديل خدمات </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['editSiteFeatures'] == '1' ? 'checked' : '';?> name="editSiteFeatures">
                                            </td>
                                        </tr>
             							<tr>
                                            <td> عرض الاسئلة المتداولة </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['faqs'] == '1' ? 'checked' : '';?> name="faqs" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> اضافة اسئلة متداولة </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['addFaqs'] == '1' ? 'checked' : '';?> name="addFaqs">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> تعديل الاسئلة متداولة </td>
                                            <td>
                                                <input id="" class="make-switch switch-md " type="checkbox" <?php echo $levelData['editFaqs'] == '1' ? 'checked' : '';?> name="editFaqs">
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="form-actions fluid">
                                        <div class="col-md-offset-3 col-md-9">
                                            <input id="editLevel" type="submit" name="editLevel" value="تعديل مستوى" class="btn green">
                                            <!--									    	<button type="button" class="btn default">Cancel</button>-->
                                        </div>
                                    </div>

                                    <!-- END FORM-->
                                </div>

							<?php echo form_close(); ?>
							<!-- END FORM-->

<?php require_once 'template/footer.php'; ?>