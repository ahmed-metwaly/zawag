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
    echo form_open_multipart('Admin/editAds/' . $this->uri->segment(3), $attr);
    ?>
    <div class="form-body">

        <div class="form-group">
            <label class="control-label col-md-2"> رابط الاعلان
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-8">
                <input name="ads_url" value="<?php echo $adsData['ads_url']; ?>" required data-required="1" placeholder="" class="form-control" type="url">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2"> صورة الاعلان
            </label>
            <div class="col-md-8">
                <input class="form-control" type="file" name="userfile">
                <br>
                <br>
                <img width="500" src="<?php echo HOST_NAME . 'upload/' . $adsData['ads_photo']; ?>" alt="لا يوجد صورة">
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
                <select class="form-control" name="ads_size">
                    <option>-- يرجى الاختيار --</option>
                    <option value="736" <?php echo $adsData['ads_size'] == '736' ? 'selected' : ''; ?> > <span>130</span> &ast; <span>736</span> </option>
                    <option value="350" <?php echo $adsData['ads_size'] == '350' ? 'selected' : ''; ?> > <span>101</span> &ast; <span>350</span> </option>
                    <option value="262" <?php echo $adsData['ads_size'] == '262' ? 'selected' : ''; ?> > 262 &ast; 300 </option>
                </select>
            </div>
        </div>

    </div>
    <div class="form-actions fluid">
        <div class="col-md-offset-3 col-md-9">



            <input type="submit" name="editAds" value="حفظ" class="btn btn-lg green">
            <!--									    	<button type="button" class="btn default">Cancel</button>-->
        </div>
    </div>

    <?php echo form_close(); ?>
    <!-- END FORM-->
</div>
<?php require_once 'template/footer.php'; ?>