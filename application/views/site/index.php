<?php require_once 'template/header.php'; ?>

<body>
<header class="wow fadeIn">
    <div class="container">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 pull-right">
            <a href="<?php echo HOST_NAME; ?>"><img class="img-responsive" src="images/logo.png" /></a>
        </div>
        <!-- col -->
        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 pull-right"> </div>
        <!-- col -->
        <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 pull-right">
            <?php require_once 'template/loginForm.php'; ?>
        </div>
        <!-- col -->
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
            <ul>
                <li>
                    <a href="<?php echo $siteInfo->si_facebook_url; ?>" class="fa fa-facebook"></a>
                </li>
                <li>
                    <a href="<?php echo $siteInfo->si_twitter_url; ?>" class="fa fa-twitter"></a>
                </li>
                <li>
                    <a href="<?php echo $siteInfo->si_google_plus_url; ?>" class="fa fa-google-plus"></a>
                </li>
                <li>
                    <a href="<?php echo $siteInfo->si_rss_url; ?>" class="fa fa-rss"></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</header>

    <section class="intro wow fadeIn">
        <div class="container">
            <div class="pull-right col-lg-6 col-md-6 col-sm-6 hidden-xs wow fadeInUp text ">
                <h1>
        التقي بعزاب
        <div class="clearfix"></div>
<span>مسلمين </span>الآن
    </h1>
                <p>
                    <?php echo $siteInfo->si_welcome_messag; ?>
                </p>
                <div id="totop" class="more"> <?php echo $sittings['goButton']; ?> <i class="fa fa-angle-down"></i></div>
            </div>
            <!-- col -->
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 register wow fadeInDown">
                <form action="" method="post" role="form">
                    <legend><i class="fa fa-user-plus"></i><?php echo $sittings['registerTitle']; ?></legend>
                    <div class="form-group">
                        <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pull-right"><?php echo $sittings['registerType']; ?></label>
                        <select name="gender" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <option>(<?php echo $sittings['me']; ?>)</option>
                            <option value="0"><?php echo $sittings['gMail']; ?></option>
                            <option value="1"><?php echo $sittings['gFmail']; ?></option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pull-right"> <?php echo $validation['filedsAge']; ?> </label>
                        <select name="age" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <option >( <?php echo $sittings['myAge']; ?> )</option>
                            <option value="18">18  <?php echo $sittings['year'];  ?> </option>
                            <option value="19">19  <?php echo $sittings['year'];  ?> </option>
                            <option value="20">20  <?php echo $sittings['year'];  ?> </option>
                            <option value="21">21  <?php echo $sittings['year'];  ?> </option>
                            <option value="22">22  <?php echo $sittings['year'];  ?> </option>
                            <option value="23">23  <?php echo $sittings['year'];  ?> </option>
                            <option value="24">24  <?php echo $sittings['year'];  ?> </option>
                            <option value="25">25  <?php echo $sittings['year'];  ?> </option>
                            <option value="26">26  <?php echo $sittings['year'];  ?> </option>
                            <option value="27">27  <?php echo $sittings['year'];  ?> </option>
                            <option value="28">28  <?php echo $sittings['year'];  ?> </option>
                            <option value="29">29  <?php echo $sittings['year'];  ?> </option>
                            <option value="30">30  <?php echo $sittings['year'];  ?> </option>
                            <option value="31">31  <?php echo $sittings['year'];  ?> </option>
                            <option value="32">32  <?php echo $sittings['year'];  ?> </option>
                            <option value="33">33  <?php echo $sittings['year'];  ?> </option>
                            <option value="34">34  <?php echo $sittings['year'];  ?> </option>
                            <option value="35">35  <?php echo $sittings['year'];  ?> </option>
                            <option value="36">36  <?php echo $sittings['year'];  ?> </option>
                            <option value="37">37  <?php echo $sittings['year'];  ?> </option>
                            <option value="38">38  <?php echo $sittings['year'];  ?> </option>
                            <option value="39">39  <?php echo $sittings['year'];  ?> </option>
                            <option value="40">40  <?php echo $sittings['year'];  ?> </option>
                            <option value="41">41  <?php echo $sittings['year'];  ?> </option>
                            <option value="42">42  <?php echo $sittings['year'];  ?> </option>
                            <option value="43">43  <?php echo $sittings['year'];  ?> </option>
                            <option value="44">44  <?php echo $sittings['year'];  ?> </option>
                            <option value="45">45  <?php echo $sittings['year'];  ?> </option>
                            <option value="46">46  <?php echo $sittings['year'];  ?> </option>
                            <option value="47">47  <?php echo $sittings['year'];  ?> </option>
                            <option value="48">48  <?php echo $sittings['year'];  ?> </option>
                            <option value="49">49  <?php echo $sittings['year'];  ?> </option>
                            <option value="50">50  <?php echo $sittings['year'];  ?> </option>
                            <option value="51">51  <?php echo $sittings['year'];  ?> </option>
                            <option value="52">52  <?php echo $sittings['year'];  ?> </option>
                            <option value="53">53  <?php echo $sittings['year'];  ?> </option>
                            <option value="54">54  <?php echo $sittings['year'];  ?> </option>
                            <option value="55">55  <?php echo $sittings['year'];  ?> </option>
                            <option value="56">56  <?php echo $sittings['year'];  ?> </option>
                            <option value="57">57  <?php echo $sittings['year'];  ?> </option>
                            <option value="58">58  <?php echo $sittings['year'];  ?> </option>
                            <option value="59">59  <?php echo $sittings['year'];  ?> </option>
                            <option value="60">60  <?php echo $sittings['year'];  ?> </option>
                            <option value="61">61  <?php echo $sittings['year'];  ?> </option>
                            <option value="62">62  <?php echo $sittings['year'];  ?> </option>
                            <option value="63">63  <?php echo $sittings['year'];  ?> </option>
                            <option value="64">64  <?php echo $sittings['year'];  ?> </option>
                            <option value="65">65  <?php echo $sittings['year'];  ?> </option>
                            <option value="66">66  <?php echo $sittings['year'];  ?> </option>
                            <option value="67">67  <?php echo $sittings['year'];  ?> </option>
                            <option value="68">68  <?php echo $sittings['year'];  ?> </option>
                            <option value="69">69  <?php echo $sittings['year'];  ?> </option>
                            <option value="70">70  <?php echo $sittings['year'];  ?> </option>
                            <option value="71">71  <?php echo $sittings['year'];  ?> </option>
                            <option value="72">72  <?php echo $sittings['year'];  ?> </option>
                            <option value="73">73  <?php echo $sittings['year'];  ?> </option>
                            <option value="74">74  <?php echo $sittings['year'];  ?> </option>
                            <option value="75">75  <?php echo $sittings['year'];  ?> </option>
                            <option value="76">76  <?php echo $sittings['year'];  ?> </option>
                            <option value="77">77  <?php echo $sittings['year'];  ?> </option>
                            <option value="78">78  <?php echo $sittings['year'];  ?> </option>
                            <option value="79">79  <?php echo $sittings['year'];  ?> </option>
                            <option value="80">80+  <?php echo $sittings['year'];  ?> </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pull-right">الغرض</label>
                        <select name="target" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <option >( <?php echo $sittings['ter']; ?> )</option>
                            <option value="1" ><?php echo $target[1] ; ?></option>
                            <option value="2"><?php echo $target[2] ; ?></option>
                            <option value="3"><?php echo $target[3] ; ?></option>
                            <option value="4"><?php echo $target[4] ; ?></option>
                            <option value="5"><?php echo $target[5] ; ?></option>
                            
                        </select>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <button type="submit" name="sendData" class="btn a1"><?php echo $sittings['registerSubmit']; ?></button>

                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
            <!-- col -->
        </div>
        <div class="clearfix"></div>
    </section>
    <section id="site" class="wow fadeIn blocks">
        <div class="container">
            <h2><?php echo $sittings['featuresTitle']; ?> </h2>

            <?php
            for($i =0; $i < count($siteFuture); $i++){
                ?>

                <div class="col-lg-4 com-md-4 col-sm-4 col-xs-12 block">
                    <img style="border-radius: 50%;" width="72" height="72" src="<?php echo HOST_NAME . 'upload/' . $siteFuture[$i]['sf_photo']; ?>" />
                    <h3><?php echo $siteFuture[$i]['sf_title'];  ?></h3>
                    <p>
                        <?php echo $siteFuture[$i]['sf_text']; ?>
                    </p>
                </div>

            <?php } ?>

            <!-- col -->

            <div class="clearfix"></div>
            <div class="col-lg-4 com-md-4 col-sm-4 col-xs-12 e3lan">
                <a href="<?php echo $ads350['ads_url']; ?>"><img src="<?php echo HOST_NAME . 'upload/' . $ads350['ads_photo']; ?>" /></a>
            </div>
            <!-- col -->
            <div class="col-lg-8 com-md-8 col-sm-8 col-xs-12 e3lan">
                <a href="<?php echo $ads736['ads_url']; ?>"><img src="<?php echo HOST_NAME . 'upload/' . $ads736['ads_photo']; ?>" /></a>
            </div>
            <!-- col -->
        </div>
        <div class="clearfix"></div>
    </section>
    <section class="users wow fadeIn">
        <div class="container">
            <h2><?php echo $sittings['selectedTitle']; ?></h2>
            <div class="user-area">
                <?php
                    for($i = 0; $i < count($users); $i++) {
                ?>
                <div class="item">
                    <div class="info animated  bounceInRight">
                            <i class="fa fa-sign-out"></i>
                            <a href="<?php echo HOST_NAME . 'profile/index/' . $users[$i]['ur_id'] ; ?>"><?php echo $sittings['selectedHover']; ?></a>
                    </div>
                    <a href="<?php echo HOST_NAME . 'profile/index/' . $users[$i]['ur_id'] ; ?>"><img class="owl-lazy" data-src="<?php echo HOST_NAME . 'upload/' . $users[$i]['ur_photo'];  ?>" /></a>
                </div>
                <?php } ?>
            </div>
            <!-- user -->
        </div>
        <div class="clearfix"></div>
    </section>



<?php require_once 'template/footer.php'; ?>
