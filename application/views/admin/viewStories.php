<?php require_once 'template/header.php'; ?>
<?php //print_r($receiveUser); ?>
<?php if(isset($success)) { ?>
    <div class="alert alert-success alert-dismissable" style="text-align: center;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <?php
        echo $success;
//        redirect('Admin/unPublishStories/');
        ?>
        <a href="" class="alert-link"></a>

    </div>

<?php } elseif(isset($error)) {  ?>
    <div class="alert alert-warning alert-dismissable" style="text-align: center;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <?php
        echo $error;
        echo '<script>history.back();</script>';
        ?>
        <a href="" class="alert-link"></a>
    </div>
<?php } ?>
<?php
$attr = array('id'=>'form_sample_1', 'class'=> 'form-horizontal' );

$id = $this->uri->segment(3);

echo form_open('Admin/viewStories/' . $id , $attr); ?>
    <div class="row">
        <div id="multiActions" class="col-md-12">

            <table class="table table-striped table-bordered table-hover" >
            <tr>
                <td>المرسل</td>
                <td><?php echo $viewStory['ur_name']; ?></td>
            </tr>
            <tr>
                <td>عنوان القصة</td>
                <td><?php echo $viewStory['ss_title']; ?></td>
            </tr>
            <tr>
                <td>الموضوع</td>
                <td><?php echo $viewStory['ss_text']; ?></td>
            </tr>
            <tr>
                <td>صورة القصة</td>
                <td><img width="200" height="200" src="<?php echo HOST_NAME . 'upload/' . $viewStory['ss_photo'];  ?>" align="لا يوجد صورة"> </td>
            </tr>
            <tr>
                <td>حالة الموافقه</td>
                <td>

                    <input class="make-switch switch-md" type="checkbox" <?php echo $viewStory['ss_publish'] == '1' ? 'checked' : '';  ?> name="ss_publish">

                </td>
            </tr>
            </table>
        </div>
    </div>

    <div class="form-actions fluid">
        <div class="col-md-offset-3 col-md-9">
            <input type="submit" name="active" class="btn green ptn-md" value="حفظ">
            &nbsp; &nbsp;
            <input type="submit" name="delete" class="btn red ptn-md" value="حذف">
            <!--									    	<button type="button" class="btn default">Cancel</button>-->

        </div>
    </div>
<?php echo form_close(); ?>

<?php require_once 'template/footer.php'; ?>