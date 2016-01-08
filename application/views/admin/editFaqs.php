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
                            $id = $this->uri->segment(3);
                           echo form_open('Admin/editFaqs/' . $id, $attr); ?>
								<div class="form-body">

									<div class="form-group">
										<label class="control-label col-md-2">   السؤال
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-8">
											<input name="f_question" value="<?php echo $faqsData['f_question']; ?>" required data-required="1" placeholder="" class="form-control" type="text">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-2"> الاجابة
										<span class="required">
											 *
										</span>
										</label>
										<div class="col-md-8">
											<textarea class="ckeditor form-control" name="f_answer" rows="6" data-error-container="#editor2_error"><?php echo $faqsData['f_answer']; ?></textarea>
										</div>
									</div>

                                </div>

								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<input type="submit" name="editPage" value="تعديل" class="btn btn-lg green">
<!--									    	<button type="button" class="btn default">Cancel</button>-->
									</div>
								</div>

							<?php echo form_close(); ?>
							<!-- END FORM-->
						</div>
<?php require_once 'template/footer.php'; ?>