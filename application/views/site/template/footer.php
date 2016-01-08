

<section class="steps">

    <div class="container">

        <div class="col-2 col-md-2 col-sm-2 col-xs-6 step  wow  bounceInUp"  data-wow-duration=".5s" data-wow-delay="0.25s">
            <a href="<?php echo HOST_NAME . 'main/stories/' ?>">
                <i class="fa fa-user"></i>
                قصص نجاح
            </a>
        </div>
        <!-- step -->

        <div class="col-2 col-md-2 col-sm-2 col-xs-6 step  wow  bounceInUp"  data-wow-duration=".5s" data-wow-delay=".5s">
            <a href="<?php echo HOST_NAME . 'main/contact/'; ?>">
                <i class="fa fa-phone"></i>
                راسل الادارة
            </a>
        </div>
        <!-- step -->

        <div class="col-2 col-md-2 col-sm-2 col-xs-6 step  wow  bounceInUp"  data-wow-duration=".5s" data-wow-delay=".75s">
            <a href="<?php echo HOST_NAME . 'main/faqs/' ?>">
                <i class="fa fa-question"></i>
                اسئلة متداولة
            </a>
        </div>
        <!-- step -->

        <div class="col-2 col-md-2 col-sm-2 col-xs-6 step  wow  bounceInUp"  data-wow-duration=".5s" data-wow-delay="1s">
            <a href="<?php echo HOST_NAME; ?>main/warning/">
                <i class="fa fa-lock"></i>
                تحذيرات الامان
            </a>
        </div>
        <!-- step -->

        <div class="col-2 col-md-2 col-sm-2 col-xs-6 step  wow  bounceInUp"  data-wow-duration=".5s" data-wow-delay="1.25s">
            <a href="<?php echo HOST_NAME; ?>main/privacy/">
                <i class="fa fa-bars"></i>
                سياسة الخصوصية
            </a>
        </div>
        <!-- step -->

        <div class="col-2 col-md-2 col-sm-2 col-xs-6 step  wow  bounceInUp"  data-wow-duration=".5s" data-wow-delay="1.5s">

            <a href="<?php echo HOST_NAME; ?>main/terms/">
                <i class="fa fa-folder"></i>
                شروط الاستخدام
            </a>
        </div>
        <!-- step -->

        <div class="clearfix">  </div>
    </div>
</section>
<footer class="wow fadeIn">
    <div class="container">
        <div class="col-lg-4 col-md-4 com-sm-4 col-xs-12 block">
            <h4>نبذة عن الموقع</h4>
            <p><?php echo $siteInfo->si_about_the_site; ?></p>
        </div>
        <!-- col -->

        <div class="col-lg-1 col-md-1 com-sm-1 hidden-xs block">

        </div>
        <!-- col -->
        <div class="col-lg-3 col-md-3 com-sm-3 col-xs-12 block">
            <h4> روابط مهمة</h4>
            <ul class="link">

            <?php 
                $pages = $this->Dsw_model->getAll('pages');



                foreach ($pages as $page) { ?>

                <li><a href="<?php echo HOST_NAME . 'main/pages/' . $page['p_id'] ?>"><?php echo $page['p_name'] ?></a></li>
                

                <?php } ?>

            </ul>
        </div>
        <!-- col -->
        <div class="col-lg-1 col-md-1 com-sm-1 hidden-xs block">

        </div>
        <!-- col -->


        <div class="col-lg-3 col-md-3 com-sm-3 col-xs-12 block rights">
            <h4> تواصل معا </h4>
            <ul class="social">
                <li><a class="fa fa-facebook" href="<?php echo $siteInfo->si_facebook_url; ?>"></a></li>
                <li><a class="fa fa-twitter" href="<?php echo $siteInfo->si_twitter_url; ?>"></a></li>
                <li><a class="fa fa-google-plus" href="<?php echo $siteInfo->si_google_plus_url; ?>"></a></li>
                <li><a class="fa fa-instagram" href="<?php echo $siteInfo->si_inst_url; ?>"></a></li>
                <li><a class="fa fa-youtube-play" href="<?php echo $siteInfo->si_yot_url; ?>"></a></li>
            </ul>
            <div class="clearfix"></div>
            جميع الحقوق محفوظة ل موقع مسلم زواج 
            <div class="clearfix"></div>

            تصميم <a href="http://elryad.com" title="مؤسسة" target="_blank">مؤسسة</a>
            <a href="http://elryad.com" title="الرياض" target="_blank">الرياض</a>
        </div>
        <!-- col -->
    </div>

</footer>


<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/nprogress.js"></script>
<script src="js/wow.min.js"></script>
<script src="assests/bootstrap/js/bootstrap.min.js"></script>
<script src="assests/myScript.js"></script>


<script type="text/javascript">
    $(document).ready(function() {

        $("#totop").click(function() {

            $('html, body').animate({
                scrollTop: $("#site").offset().top
            }, 800);

        });
        $("html").niceScroll({
            cursorcolor: "#5a37ac",
            cursorborder:" 0",
            cursorwidth: "8px"
        });




        $('.user-area').owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            dots: false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            loop: true,
            lazyLoad: true,
            rtl: true,
            nav: true,
            margin: 30,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 5
                }
            }
        });


        new WOW().init();
        NProgress.start();
        NProgress.done();

    // chat
    $(".chat-list").niceScroll({
        cursorcolor: "#5a37ac",
        cursorborder: " 0",
        cursorwidth: "3px"
    });

    $(".chat-room").niceScroll({
        cursorcolor: "#5a37ac",
        cursorborder: " 0",
        cursorwidth: "3px"
    });




    });


    (function($) {

        //Function to animate slider captions
        function doAnimations(elems) {
            //Cache the animationend event in a variable
            var animEndEv = 'webkitAnimationEnd animationend';

            elems.each(function () {
                var $this = $(this),
                    $animationType = $this.data('animation');
                $this.addClass($animationType).one(animEndEv, function () {
                    $this.removeClass($animationType);
                });
            });
        }

        //Variables on page load
        var $myCarousel = $('#carousel-example-generic'),
            $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

        //Initialize carousel
        $myCarousel.carousel();

        //Animate captions in first slide on page load
        doAnimations($firstAnimatingElems);

        //Pause carousel
        $myCarousel.carousel('pause');


        //Other slides to be animated on carousel slide event
        $myCarousel.on('slide.bs.carousel', function (e) {
            var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
            doAnimations($animatingElems);
        });

        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            });




    })(jQuery);


</script>


</body>

</html>

