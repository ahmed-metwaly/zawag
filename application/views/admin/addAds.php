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
    echo form_open_multipart('Admin/addAds/', $attr);
    ?>
    <div class="form-body">

        <div class="form-group">
            <label class="control-label col-md-2"> رابط الاعلان
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <input name="ads_url" required data-required="1" placeholder="" class="form-control" type="url">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2"> صورة الاعلان
            </label>
            <div class="col-md-8">
                <input class="form-control" type="file" name="userfile">
                <span class="help-block">
                </span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2"> حجم الاعلان
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <select style="" class="form-control" name="ads_size">
                    <option>-- يرجى الاختيار --</option>
                    <option value="736"> 736 &ast; 130 </option>
                    <option value="350"> 350 &ast; 101 </option>
                    <option value="262"> 262 &ast; 300 </option>
                </select>
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