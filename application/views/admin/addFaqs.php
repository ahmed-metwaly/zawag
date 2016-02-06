<?php require_once 'template/header.php'; ?>
<?php // print_r($ee);  ?>
<?php if (isset($success)) { ?>
    <div class="alert alert-success alert-dismissable" style="text-align: center;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <?php
        echo $success;
        ?>
        <a href="" class="alert-link"></a>

    </div>

<?php } elseif (isset($error)) { ?>
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
    $attr = array('id' => 'form_sample_1', 'class' => 'form-horizontal');
    echo form_open('Admin/addFaqs/', $attr);
    ?>
    <div class="form-body">

        <div class="form-group">
            <label class="control-label col-md-2">  السؤال عريى
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <input name="question" required data-required="1" placeholder="" class="form-control" type="text">
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-md-2">  السؤال انجليزى
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <input name="question_en" required data-required="1" placeholder="" class="form-control" type="text">
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-md-2">  الجواب عريى
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <textarea class="ckeditor form-control" name="answer" rows="6" data-error-container="#editor2_error"></textarea>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-md-2">  الجواب  انجليزى
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <textarea class="ckeditor form-control" name="answer_en" rows="6" data-error-container="#editor2_error"></textarea>
            </div>
        </div>

    </div>
    <div class="form-actions fluid">
        <div class="col-md-offset-3 col-md-9">
            <input type="submit" name="addAds" value="اضف" class="btn btn-lg green">
            <!--									    	<button type="button" class="btn default">Cancel</button>-->
        </div>
    </div>

    <?php echo form_close(); ?>
    <!-- END FORM-->
</div>
<?php require_once 'template/footer.php'; ?>