<div id="chating" class="section-new-pages" onload="CheckForSession();"><!-- section-new-pages -->
<div class="container">
<div class="row">

<div class="col-md-4 col-sm-5 col-xs-12">
    <ul class="chat-list" id="adideChat"></ul>
</div>
<div class="col-md-8 col-sm-7 col-xs-12">

    <!-- <h4 class="show-msg">مشاهدة كافة الرسائل</h4> -->

    <ul class="chat-room" id="messageContent"></ul>
    <?php echo isset($audio) ? $audio : ''; ?>