<?php require_once 'template/header.php'; ?>
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
                           echo form_open('Admin/mainSittings/', $attr); ?>
								<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
Your form validation is successful!
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">  اسم الموقع
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
											<input name="site_name" value="<?php echo $sittingsData->si_site_name; ?>" required data-required="1" placeholder="زواج" class="form-control" type="text">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"> اميل الموقع
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
											<input name="site_email" value="<?php echo $sittingsData->si_site_email; ?>" class="form-control" placeholder="demo@demo.com" type="email">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"> رابط الموقع
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
											<input name="site_url" value="<?php echo $sittingsData->si_site_url; ?>" class="form-control" placeholder="http://www.demo.com or http://demo.com" type="url">
											<span class="help-block">

											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"> رابط المدونة
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
											<input name="site_blog_url" value="<?php echo $sittingsData->si_site_blog_url; ?>" class="form-control" placeholder="http://www.demo.com or http://demo.com" type="url">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"> الفيس بوك
										<span class="required">
											 *
										</span>

										</label>
										<div class="col-md-4">
											<input name="facebook_url" value="<?php echo $sittingsData->si_facebook_url; ?>" class="form-control" placeholder="http://www.demo.com or http://demo.com" type="url">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">  تويتر
<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-4">
											<input name="twitter_url" value="<?php echo $sittingsData->si_twitter_url; ?>" class="form-control" placeholder="http://www.demo.com or http://demo.com" type="url">
											<span class="help-block">

</span>
										</div>
									</div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">  جوجل +
<span class="required">
											 *
										</span>
                                        </label>
                                        <div class="col-md-4">
                                            <input name="google_plus_url" value="<?php echo $sittingsData->si_google_plus_url; ?>" class="form-control" placeholder="http://www.demo.com or http://demo.com" type="url">
											<span class="help-block">

</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">   التغزيه الحيه
<span class="required">
											 *
										</span>
                                        </label>
                                        <div class="col-md-4">
                                            <input name="rss_url" value="<?php echo $sittingsData->si_rss_url; ?>" class="form-control" placeholder="http://www.demo.com or http://demo.com" type="url">
											<span class="help-block">

</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3"> انستجرام
<span class="required">
											 *
										</span>
                                        </label>
                                        <div class="col-md-4">
                                            <input name="inst_url" value="<?php echo $sittingsData->si_inst_url; ?>" class="form-control" placeholder="http://www.demo.com or http://demo.com" type="url">
											<span class="help-block">

</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3"> يوت يوب
<span class="required">
											 *
										</span>
                                        </label>
                                        <div class="col-md-4">
                                            <input name="yot_url" value="<?php echo $sittingsData->si_yot_url; ?>" class="form-control" placeholder="http://www.demo.com or http://demo.com" type="url">
											<span class="help-block">

</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3"> رسالة الترحيب
<span class="required">
											 *
										</span>
                                        </label>
                                        <div class="col-md-7">

                                            <textarea name="welcome_messag" class="form-control" required rows="8"><?php echo $sittingsData->si_welcome_messag; ?></textarea>

											<span class="help-block">

</span>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-md-3"> نبذة عن الموقع
<span class="required">
											 *
										</span>
                                        </label>
                                        <div class="col-md-7">

                                            <textarea name="about_the_site" class="form-control" required rows="8"><?php echo $sittingsData->si_about_the_site; ?></textarea>

											<span class="help-block">

</span>
                                        </div>
                                    </div>




                                    <div class="form-group last">
                                        <label class="control-label col-md-3">	شروط الاستخدام									<span class="required">
											 *
										</span>
                                        </label>
                                        <div class="col-md-7">
                                            <textarea class="ckeditor form-control" name="terms_service" rows="6" data-error-container="#editor2_error"><?php echo $sittingsData->si_terms_service; ?></textarea>
                                            <div id="editor2_error">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group last">
                                        <label class="control-label col-md-3">نصائح واقتراحات 									<span class="required">
											 *
										</span>
                                        </label>
                                        <div class="col-md-7">
                                            <textarea class="ckeditor form-control" name="tips_and_suggestions" rows="6" data-error-container="#editor2_error"><?php echo $sittingsData->si_tips_and_suggestions; ?></textarea>
                                            <div id="editor2_error">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group last">
                                        <label class="control-label col-md-3"> سياسة الخصوصية 									<span class="required">
											 *
										</span>
                                        </label>
                                        <div class="col-md-7">
                                            <textarea class="ckeditor form-control" name="privacy_policy" rows="6" data-error-container="#editor2_error"><?php echo $sittingsData->si_privacy_policy; ?></textarea>
                                            <div id="editor2_error">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3"> روابط مهمة
<span class="required">
											 *
										</span>
                                        </label>
                                        <div class="col-md-7">

                                            <textarea name="important_links" class="form-control" required rows="8"><?php echo $sittingsData->si_important_links; ?></textarea>

											<span class="help-block">

</span>
                                        </div>
                                    </div>


								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<input type="submit" name="save" value="تحديث" class="btn green">
<!--									    	<button type="button" class="btn default">Cancel</button>-->
									</div>
								</div>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();  ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
							<?php echo form_close(); ?>
							<!-- END FORM-->
						</div>
<?php require_once 'template/footer.php'; ?>