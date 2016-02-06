


<!-- 
<div class="new-page-title">
    <h2 class="wow fadeIn"> عنوان الصفحه
        <p class="search-text">وصف مختصر عن الصفحه وصف مختصر عن الصفحه وصف مختصر عن الصفحه </p>
    </h2>
</div>
 -->
 <?php 

if(isset($error) && $error != '') {?>

    <div class="messageError">
        <?php  echo $error; ?>
    </div>

<?php } ?>


    <div class="AddPost">
        <form action="" id="sendChat" method="post">
            <div class="form-group">
                <textarea class="form-control" id="textChat" name="text" rows="4"></textarea>
            </div>

            <div class="post-btn">
                <button type="submit" name="sendMessage" class="btn btn-primary"><?php echo $sittings['sendChat']; ?></button>
            </div>
        </form>
    </div>

</div>

</div>
</div>
</div>
<!-- end section-new-pages -->
<script src="chat.js"></script>


