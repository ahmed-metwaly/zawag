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
    echo form_open_multipart('Admin/addPage/', $attr);
    ?>
    <div class="form-body">

        <div class="form-group">
            <label class="control-label col-md-2">  اسم الصفحة عربى
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <input name="p_name" required data-required="1" placeholder="" class="form-control" type="text">
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-md-2">  اسم الصفحة انجليزى
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <input name="p_name_en" required data-required="1" placeholder="" class="form-control" type="text">
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-md-2"> عنوان الصفحةعربى
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <input name="p_title"  class="form-control" placeholder="" type="text">
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-md-2"> عنوان الصفحةانجليزى
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <input name="p_title_en"  class="form-control" placeholder="" type="text">
            </div>
        </div>
        
        <div class="form-group last">
            <label class="control-label col-md-2"> محتوى الصفحة  									 عربى<span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <textarea style="direction: rtl !important; text-align: right !important;" class="ckeditor description ckeditor desc" name="p_content"  data-error-container="#editor2_error"></textarea>
                <div id="editor2_error">
                </div>
            </div>
        </div>
        
        <div class="form-group last">
            <label class="control-label col-md-2"> محتوى الصفحة  									انجليزى<span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <textarea style="direction: rtl !important; text-align: right !important;" class="ckeditor description ckeditor desc" name="p_content_en"  data-error-container="#editor2_error"></textarea>
                <div id="editor2_error">
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-md-2"> القسم
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <select name="p_section_id" class="form-control">
                    <option>-- يرجى الاختيار --</option>
                    <?php
                    for ($i = 0; $i < count($sections); $i++) {
                        echo "<option value='{$sections[$i]['se_id']}'>{$sections[$i]['se_name']}</option>";
                    }
                    ?>


                </select>
                <span class="help-block">

                </span>
            </div>
        </div>
<!--        <div class="form-group">
            <label class="control-label col-md-2"> الصورة البارزة
            </label>
            <div class="col-md-8">
                <input class="form-control" type="file" name="userfile">
                <span class="help-block">

                </span>
            </div>
        </div>-->
    </div>
    <div class="form-actions fluid">
        <div class="col-md-offset-3 col-md-9">
            <input type="submit" name="addPage" value="اضف" class="btn btn-lg green">
            <!--									    	<button type="button" class="btn default">Cancel</button>-->
        </div>
    </div>

<?php echo form_close(); ?>
    <!-- END FORM-->
</div>
<?php require_once 'template/footer.php'; ?>