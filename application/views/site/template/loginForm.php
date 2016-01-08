
<?php echo form_open(); ?>

    <div class="form-group col-lg-5 pull-right">
        <input type="text" name="email" value="<?php echo @ $_POST['email'] ?>" class="form-control" placeholder="البريد الالكترونى">
        <div class="error"><?php echo form_error('email'); ?> </div>
    </div>
    <div class="form-group col-lg-5 pull-right">
        <input type="password" name="password" class="form-control" placeholder="******">
        <div class="error"><?php echo form_error('password'); ?> </div>

    </div>

    <button type="submit" name="user_login" class="btn  col-lg-2">دخول</button>
    <div class="error col-lg-8 pull-right"><?php echo $errorLogin; ?></div>
<?php echo form_close(); ?>