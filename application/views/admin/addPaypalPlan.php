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
                           echo form_open_multipart('Admin/addPaypalPlan/', $attr); ?>
								<div class="form-body">

									<div class="form-group">
										<label class="control-label col-md-2"> اسم الخطة
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-8">
											<input name="name" required data-required="1" placeholder="" class="form-control" type="text">
										</div>
									</div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2"> المده الزمنيه للخطه
                                        <span class="required">
                                             *
                                        </span>
                                        </label>
                                        <div class="col-md-8">
                                            <select name="duration" class="form-control">
                                                <option value="1">شهر</option>
                                                <option value="2">شهرين</option>
                                                <option value="3">ثلاثة اشهر</option>
                                                <option value="4">اربعة اشهر</option>
                                                <option value="5">خمسة اشهر</option>
                                                <option value="6">ستة اشهر</option>
                                                <option value="7">سبعة اشهر</option>
                                                <option value="8">ثمانية اشهر</option>
                                                <option value="9">تسعة اشهر</option>
                                                <option value="10">عشرة اشهر</option>
                                                <option value="11">احدى عشرة شهرا</option>
                                                <option value="12">اثنى عشرة شهرا</option>
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
                                            <input type="text" name="price" class="form-control">
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
                                        </div>
                                    </div>

								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<input type="submit" name="addPaypalPlan" value="اضف" class="btn btn-lg green">
<!--									    	<button type="button" class="btn default">Cancel</button>-->
									</div>
								</div>

							<?php echo form_close(); ?>
							<!-- END FORM-->
						</div>
<?php require_once 'template/footer.php'; ?>