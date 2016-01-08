<?php require_once 'template/header.php'; ?>
<?php // print_r($ee); ?>
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
            echo validation_errors();
        ?>
        <a href="" class="alert-link"></a>
    </div>
    <?php } ?>
<div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <?php

                            $attr = array('id'=>'form_sample_1', 'class'=> 'form-horizontal' );
                           echo form_open_multipart('Admin/editPaypalPlan/' . $this->uri->segment(3), $attr); ?>
                                <div class="form-body">

                                    <div class="form-group">
                                        <label class="control-label col-md-2"> اسم الخطة
                                        <span class="required">
                                             *
                                        </span>
                                        </label>
                                        <div class="col-md-8">
                                            <input name="pp_name" required data-required="1" placeholder="" value="<?php echo $planData->pp_name; ?>" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2"> المده الزمنيه للخطه
                                        <span class="required">
                                             *
                                        </span>
                                        </label>
                                        <div class="col-md-8">
                                            <select name="pp_duration" class="form-control">
                                                <option <?php echo $planData->pp_duration == '1' ? 'selected' : '' ?> value="1">شهر</option>
                                                <option <?php echo $planData->pp_duration == '2' ? 'selected' : '' ?> value="2">شهرين</option>
                                                <option <?php echo $planData->pp_duration == '3' ? 'selected' : '' ?> value="3">ثلاثة اشهر</option>
                                                <option <?php echo $planData->pp_duration == '4' ? 'selected' : '' ?> value="4">اربعة اشهر</option>
                                                <option <?php echo $planData->pp_duration == '5' ? 'selected' : '' ?> value="5">خمسة اشهر</option>
                                                <option <?php echo $planData->pp_duration == '6' ? 'selected' : '' ?> value="6">ستة اشهر</option>
                                                <option <?php echo $planData->pp_duration == '7' ? 'selected' : '' ?> value="7">سبعة اشهر</option>
                                                <option <?php echo $planData->pp_duration == '8' ? 'selected' : '' ?> value="8">ثمانية اشهر</option>
                                                <option <?php echo $planData->pp_duration == '9' ? 'selected' : '' ?> value="9">تسعة اشهر</option>
                                                <option <?php echo $planData->pp_duration == '10' ? 'selected' : '' ?> value="10">عشرة اشهر</option>
                                                <option <?php echo $planData->pp_duration == '11' ? 'selected' : '' ?> value="11">احدى عشرة شهرا</option>
                                                <option <?php echo $planData->pp_duration == '12' ? 'selected' : '' ?> value="12">اثنى عشرة شهرا</option>
                                            </select>
                                            <span class="help-block">
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2"> سعر الخطة
                                        <span class="required">
                                             *
                                        </span>
                                        </label>
                                        <div class="col-md-8">
                                            <input type="text" value="<?php echo $planData->pp_price; ?>" name="pp_price" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-md-2"> صورة الخطة
                                        <span class="required">
                                             *
                                        </span>
                                        </label>
                                        <div class="col-md-8">
                                            <input type="file" name="userfile" class="form-control">
                                            <img width="300" height="300" src="<?php echo HOST_NAME . 'upload/' . $planData->pp_photo; ?>" alt="no image">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-actions fluid">
                                    <div class="col-md-offset-3 col-md-9">
                                        <input type="submit" name="editPaypalPlan" value="حفظ" class="btn btn-lg green">
<!--                                            <button type="button" class="btn default">Cancel</button>-->
                                    </div>
                                </div>

                            <?php echo form_close(); ?>
                            <!-- END FORM-->
                        </div>
<?php require_once 'template/footer.php'; ?>