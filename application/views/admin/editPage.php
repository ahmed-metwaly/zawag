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
    $id = $this->uri->segment(3);
    echo form_open_multipart('Admin/editPage/' . $id, $attr);
    ?>
    <div class="form-body">

        <div class="form-group">
            <label class="control-label col-md-2">  اسم الصفحة
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <input name="p_name" value="<?php echo $pageData['p_name']; ?>" required data-required="1" placeholder="" class="form-control" type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2"> عنوان الصفحة
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <input name="p_title" value="<?php echo $pageData['p_title']; ?>"  class="form-control" placeholder="" type="text">
            </div>
        </div>
        <div class="form-group last">
            <label class="control-label col-md-2"> محتوى الصفحة  									<span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <textarea style="direction: rtl !important; text-align: right !important;" class="ckeditor description ckeditor desc" name="p_content"  data-error-container="#editor2_error"><?php echo $pageData['p_content']; ?></textarea>
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
                        echo "<option ";
                        echo $pageData['p_section_id'] == $sections[$i]['se_id'] ? 'selected' : '';
                        echo " value='{$sections[$i]['se_id']}'>{$sections[$i]['se_name']}</option>";
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


<!--    <div class="form-group">
        <label class="control-label col-md-2"> 
        </label>
        <div class="col-md-8">
            <img style="max-width: 700px; height: auto; " src="<?php echo HOST_NAME . 'upload/' . $pageData['p_photo'] ?>" alt="photo"/>
        </div>
    </div>-->
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