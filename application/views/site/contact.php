

<?php require_once 'template/pagesHeader.php'; ?>
<!--<div class="new-page-title">-->
<!--    <h2 class="wow fadeIn"> عنوان الصفحه-->
<!--        <p class="search-text">وصف مختصر عن الصفحه وصف مختصر عن الصفحه وصف مختصر عن الصفحه </p>-->
<!--    </h2>-->
<!--</div>-->


<div class="section-new-pages"><!-- section-new-pages -->
    <div class="container">
        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">

                <div class="wow fadeInUp">
                    <h5 class="Suggestions">
                        <?php echo $sittings['contactTilte']; ?>
                    </h5>
                    <h5 class="error"><?php echo $messageSend; ?></h5>

                    <form action="" method="post" class="new-form-con">

                        <div class="form-group">
                            <label><?php echo $sittings['contactTilteMessage']; ?></label>
                            <input type="text" name="title" class="form-control" value="<?php echo @ $_POST['title']; ?>" placeholder="<?php echo $sittings['contactTilteMessage']; ?> ">
                            <div class="error"><?php echo form_error('title'); ?></div>
                        </div>

                        <div class="form-group">
                            <label><?php echo $sittings['contactNameMessage']; ?></label>
                            <input type="text" name="name" class="form-control" value="<?php echo @ $_POST['name']; ?>" placeholder="<?php echo $sittings['contactNameMessage']; ?>">
                            <div class="error"><?php echo form_error('name'); ?></div>
                        </div>

                        <div class="form-group">
                            <label><?php echo $sittings['contactEmailMessage']; ?></label>
                            <input type="email" name="email" class="form-control" value="<?php echo @ $_POST['email']; ?>" placeholder=" <?php echo $sittings['contactEmailMessage']; ?>">
                            <div class="error"><?php echo form_error('email'); ?></div>
                        </div>

                        <div class="form-group">
                            <label><?php echo $sittings['contactMessage']; ?></label>
                            <textarea class="form-control" name="message" rows="5"><?php echo @ $_POST['message']; ?></textarea>
                            <div class="error"><?php echo form_error('message'); ?></div>
                        </div>
                        <input type="hidden" name="hidden">
                        <button type="submit" name="sendMessage" class="btn btn-primary pull-left"><?php echo $sittings['contactMessageSubmit'] ; ?></button>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>


        </div>
    </div>
</div>
<!-- end section-new-pages -->

<?php require_once 'template/footer.php'; ?>