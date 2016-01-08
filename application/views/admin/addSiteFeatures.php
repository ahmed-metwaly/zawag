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
                           echo form_open_multipart('Admin/addSiteFeatures/', $attr); ?>
								<div class="form-body">

									<div class="form-group">
										<label class="control-label col-md-2"> العنوان
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-8">
											<input name="sf_title" required data-required="1" placeholder="" class="form-control" type="text">
										</div>
									</div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2"> الايكونة
                                        </label>
                                        <div class="col-md-8">
                                            <input class="form-control" type="file" name="userfile">
											<span class="help-block">

											</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2"> نص الخدمة
										<span class="required">
											 *
										</span>
                                        </label>
                                        <div class="col-md-8">
                                            <textarea name="sf_text" class="form-control" style="height: 200px;"></textarea>
                                        </div>
                                    </div>


								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<input type="submit" name="addSiteFeatures" value="اضف" class="btn btn-lg green">
<!--									    	<button type="button" class="btn default">Cancel</button>-->
									</div>
								</div>

							<?php echo form_close(); ?>
							<!-- END FORM-->
						</div>
<?php require_once 'template/footer.php'; ?>