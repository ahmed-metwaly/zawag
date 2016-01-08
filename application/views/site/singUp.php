<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <base href="<?php echo HOST_NAME . 'siteAssets/'  ?>">

    <link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assests/animate.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assests/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="assests/nprogress.css" />



    <link rel="stylesheet" href="assests/build.css"/>

    <link rel="stylesheet" href="assests/reg.css" type="text/css" media="screen" />
    <!--[if IE]>
    <script src="js/html5.js"></script>
    <![endif]-->
</head>

<body>


    <header class="wow fadeIn">
        <div class="container">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 pull-right">
                <a href="<?php echo HOST_NAME; ?>"><img class="img-responsive" src="images/logo.png" /></a>
            </div>
            <!-- col -->
            <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 pull-right"> </div>
            <!-- col -->
            <?php
            if($session->userdata('userIsRegister') != 1) {
                ?>
            <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 pull-right">
                <?php require_once 'template/loginForm.php'; ?>
            <?php } ?>
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

    <section id="site" class="wow fadeIn blocks">
        <div class="container">
            <h2 class="register-title">إكمال التسجيل
                <p class="register-text">عليك إتمام الخطوات التالية</p>
            </h2>
            <!-- col -->

            <div class="col-lg-12 com-md-12 col-sm-12 col-xs-12">

         <!-- Nav tabs -->
    <div>
    <div class="col-lg-12">
    <ul class="nav my-nav-tab " id="tabb" role="tablist">

    <li class="col-lg-2 col-md-2 col-sm-12 col-xs-12 <?php  echo $session->userdata('userIsRegister') != '1' ? 'active1' : '';  ?> " role="presentation" id="homes"><a class="title-tab"  aria-controls="home" role="tab" data-toggle="tab">إشترك معنا<i class="icon-tab fa fa-share fa-lg"></i></a></li>

    <li class="col-lg-2 col-md-2 col-sm-12 col-xs-12 <?php  echo $session->userdata('userIsRegister') == '1' && $session->userdata('dataSituation') != '1' ? 'active1' : '';  ?> " role="presentation" id="profiles"><a class="title-tab"  aria-controls="profile" role="tab" data-toggle="tab">الوضع الاجتماعي<i class="icon-tab fa fa-newspaper-o fa-lg"></i></a></li>

    <li class="col-lg-2 col-md-2 col-sm-12 col-xs-12 <?php echo $session->userdata('dataSituation') == '1' && $session->userdata('upload') != '1' ? 'active1' : '' ?> " role="presentation" id="messagess"><a class="title-tab"  aria-controls="messages" role="tab" data-toggle="tab">الصورة الشخصية<i class="icon-tab fa fa-smile-o fa-lg"></i></a></li>

    <li class="col-lg-2 col-md-2 col-sm-12 col-xs-12 <?php echo $session->userdata('upload') == '1' && $session->userdata('userAbut') != '1' ? 'active1' : ''; ?>" role="presentation" id="settingss"><a class="title-tab"  aria-controls="settings" role="tab" data-toggle="tab">الوصف<i class="icon-tab fa fa-pencil fa-lg"></i></a></li>

    <li class="col-lg-2 col-md-2 col-sm-12 col-xs-12 <?php echo $session->userdata('userAbut') == '1' ? 'active1' : ''; ?>" role="presentation" id="mails"><a class="title-tab"  aria-controls="mail" role="tab" data-toggle="tab">البريد الإلكتروني<i class="icon-tab fa fa-envelope-o fa-lg"></i></a></li>

    </ul>
    </div>



  <!-- Tab panes -->
  <div class="tab-content">
  <?php
    if($session->userdata('userIsRegister') != '1') {
  ?>
    <div role="tabpanel" class="tab-pane  <?php  echo $session->userdata('userIsRegister') != '1' ? 'active' : '';  ?> " id="home">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">
<form action="" method="post" novalidate  id="fromRigister" rol="form">
<?php // echo validation_errors(); ?>
    <div class="form-group">
    <label class="label-title" for="exampleInputEmail1">النوع</label><br/>
    <div class="radio radio-info radio-inline">
                        <input required="required" type="radio" <?php echo $session->userdata('gender') == '0' ? 'checked' : ''; ?>  id="inlineRadio1" value="0" name="gender" >
                        <label class="radio-kind" for="inlineRadio1">أنا ذكر</label>
                    </div>
                    <div class="radio radio-inline">
                        <input required="required" type="radio" <?php echo $session->userdata('gender') == '1' ? 'checked' : ''; ?> id="inlineRadio2" value="1" name="gender">
                        <label class="radio-kind" for="inlineRadio2">أنا انثى</label>
                    </div>
        <div class="error" id="errorGender"></div>
    </div>

    <div class="form-group">
        <label class="label-title" for="exampleInputEmail1">العمر</label>
        <select required="required" id="age" class="form-control" name="age">
            <option value="">( عمري )</option>
            <option <?php echo $session->userdata('age') == '18' ? 'selected' : ''; ?> value="18">18 سنة</option>
            <option <?php echo $session->userdata('age') == '19' ? 'selected' : ''; ?> value="19">19 سنة</option>
            <option <?php echo $session->userdata('age') == '20' ? 'selected' : ''; ?> value="20">20 سنة</option>
            <option <?php echo $session->userdata('age') == '21' ? 'selected' : ''; ?> value="21">21 سنة</option>
            <option <?php echo $session->userdata('age') == '22' ? 'selected' : ''; ?> value="22">22 سنة</option>
            <option <?php echo $session->userdata('age') == '23' ? 'selected' : ''; ?> value="23">23 سنة</option>
            <option <?php echo $session->userdata('age') == '24' ? 'selected' : ''; ?> value="24">24 سنة</option>
            <option <?php echo $session->userdata('age') == '25' ? 'selected' : ''; ?> value="25">25 سنة</option>
            <option <?php echo $session->userdata('age') == '26' ? 'selected' : ''; ?> value="26">26 سنة</option>
            <option <?php echo $session->userdata('age') == '27' ? 'selected' : ''; ?> value="27">27 سنة</option>
            <option <?php echo $session->userdata('age') == '28' ? 'selected' : ''; ?> value="28">28 سنة</option>
            <option <?php echo $session->userdata('age') == '29' ? 'selected' : ''; ?> value="29">29 سنة</option>
            <option <?php echo $session->userdata('age') == '30' ? 'selected' : ''; ?> value="30">30 سنة</option>
            <option <?php echo $session->userdata('age') == '31' ? 'selected' : ''; ?> value="31">31 سنة</option>
            <option <?php echo $session->userdata('age') == '32' ? 'selected' : ''; ?> value="32">32 سنة</option>
            <option <?php echo $session->userdata('age') == '33' ? 'selected' : ''; ?> value="33">33 سنة</option>
            <option <?php echo $session->userdata('age') == '34' ? 'selected' : ''; ?> value="34">34 سنة</option>
            <option <?php echo $session->userdata('age') == '35' ? 'selected' : ''; ?> value="35">35 سنة</option>
            <option <?php echo $session->userdata('age') == '36' ? 'selected' : ''; ?> value="36">36 سنة</option>
            <option <?php echo $session->userdata('age') == '37' ? 'selected' : ''; ?> value="37">37 سنة</option>
            <option <?php echo $session->userdata('age') == '38' ? 'selected' : ''; ?> value="38">38 سنة</option>
            <option <?php echo $session->userdata('age') == '39' ? 'selected' : ''; ?> value="39">39 سنة</option>
            <option <?php echo $session->userdata('age') == '40' ? 'selected' : ''; ?> value="40">40 سنة</option>
            <option <?php echo $session->userdata('age') == '41' ? 'selected' : ''; ?> value="41">41 سنة</option>
            <option <?php echo $session->userdata('age') == '42' ? 'selected' : ''; ?> value="42">42 سنة</option>
            <option <?php echo $session->userdata('age') == '43' ? 'selected' : ''; ?> value="43">43 سنة</option>
            <option <?php echo $session->userdata('age') == '44' ? 'selected' : ''; ?> value="44">44 سنة</option>
            <option <?php echo $session->userdata('age') == '45' ? 'selected' : ''; ?> value="45">45 سنة</option>
            <option <?php echo $session->userdata('age') == '46' ? 'selected' : ''; ?> value="46">46 سنة</option>
            <option <?php echo $session->userdata('age') == '47' ? 'selected' : ''; ?> value="47">47 سنة</option>
            <option <?php echo $session->userdata('age') == '48' ? 'selected' : ''; ?> value="48">48 سنة</option>
            <option <?php echo $session->userdata('age') == '49' ? 'selected' : ''; ?> value="49">49 سنة</option>
            <option <?php echo $session->userdata('age') == '50' ? 'selected' : ''; ?> value="50">50 سنة</option>
            <option <?php echo $session->userdata('age') == '51' ? 'selected' : ''; ?> value="51">51 سنة</option>
            <option <?php echo $session->userdata('age') == '52' ? 'selected' : ''; ?> value="52">52 سنة</option>
            <option <?php echo $session->userdata('age') == '53' ? 'selected' : ''; ?> value="53">53 سنة</option>
            <option <?php echo $session->userdata('age') == '54' ? 'selected' : ''; ?> value="54">54 سنة</option>
            <option <?php echo $session->userdata('age') == '55' ? 'selected' : ''; ?> value="55">55 سنة</option>
            <option <?php echo $session->userdata('age') == '56' ? 'selected' : ''; ?> value="56">56 سنة</option>
            <option <?php echo $session->userdata('age') == '57' ? 'selected' : ''; ?> value="57">57 سنة</option>
            <option <?php echo $session->userdata('age') == '58' ? 'selected' : ''; ?> value="58">58 سنة</option>
            <option <?php echo $session->userdata('age') == '59' ? 'selected' : ''; ?> value="59">59 سنة</option>
            <option <?php echo $session->userdata('age') == '60' ? 'selected' : ''; ?> value="60">60 سنة</option>
            <option <?php echo $session->userdata('age') == '61' ? 'selected' : ''; ?> value="61">61 سنة</option>
            <option <?php echo $session->userdata('age') == '62' ? 'selected' : ''; ?> value="62">62 سنة</option>
            <option <?php echo $session->userdata('age') == '63' ? 'selected' : ''; ?> value="63">63 سنة</option>
            <option <?php echo $session->userdata('age') == '64' ? 'selected' : ''; ?> value="64">64 سنة</option>
            <option <?php echo $session->userdata('age') == '65' ? 'selected' : ''; ?> value="65">65 سنة</option>
            <option <?php echo $session->userdata('age') == '66' ? 'selected' : ''; ?> value="66">66 سنة</option>
            <option <?php echo $session->userdata('age') == '67' ? 'selected' : ''; ?> value="67">67 سنة</option>
            <option <?php echo $session->userdata('age') == '68' ? 'selected' : ''; ?> value="68">68 سنة</option>
            <option <?php echo $session->userdata('age') == '69' ? 'selected' : ''; ?> value="69">69 سنة</option>
            <option <?php echo $session->userdata('age') == '70' ? 'selected' : ''; ?> value="70">70 سنة</option>
            <option <?php echo $session->userdata('age') == '71' ? 'selected' : ''; ?> value="71">71 سنة</option>
            <option <?php echo $session->userdata('age') == '72' ? 'selected' : ''; ?> value="72">72 سنة</option>
            <option <?php echo $session->userdata('age') == '73' ? 'selected' : ''; ?> value="73">73 سنة</option>
            <option <?php echo $session->userdata('age') == '74' ? 'selected' : ''; ?> value="74">74 سنة</option>
            <option <?php echo $session->userdata('age') == '75' ? 'selected' : ''; ?> value="75">75 سنة</option>
            <option <?php echo $session->userdata('age') == '76' ? 'selected' : ''; ?> value="76">76 سنة</option>
            <option <?php echo $session->userdata('age') == '77' ? 'selected' : ''; ?> value="77">77 سنة</option>
            <option <?php echo $session->userdata('age') == '78' ? 'selected' : ''; ?> value="78">78 سنة</option>
            <option <?php echo $session->userdata('age') == '79' ? 'selected' : ''; ?> value="79">79 سنة</option>
            <option <?php echo $session->userdata('age') == '80' ? 'selected' : ''; ?> value="80">80+ سنة</option>
        </select>
        <div class="error" id="errorAge"></div>
    </div>


  <div class="form-group">
  <label class="label-title" for="exampleInputEmail1">الهدف</label>
    <select required="required" id="target" class="form-control" name="target">
        <option value="" >( أرغب في )</option>
        <option <?php echo $session->userdata('target') == 'زواج عادي' ? 'selected' : ''; ?> value="زواج عادي" >زواج عادي</option>
        <option <?php echo $session->userdata('target') == 'زواج تعدد' ? 'selected' : ''; ?> value="زواج تعدد">زواج تعدد</option>
        <option <?php echo $session->userdata('target') == 'تعارف وتواصل' ? 'selected' : ''; ?> value="تعارف وتواصل">تعارف وتواصل</option>
        <option <?php echo $session->userdata('target') == 'صداقة عبر النت' ? 'selected' : ''; ?> value="صداقة عبر النت">صداقة عبر النت</option>
    </select>
      <div class="error" id="errorTarget"></div>
  </div>
  <div class="form-group">
  <label class="label-title" for="exampleInputEmail1">دولة الأصل</label>
    <select required="required" id="country" class="form-control" name="country">
        <option value=""> ( انا من ) </option>
        <option value="الأرد">الأردن</option>
        <option value="الإمارات">الإمارات</option>
        <option value="البحرين">البحرين</option>
        <option value="الجزائر">الجزائر</option>
        <option value="السعودية">السعودية</option>
        <option value="العراق">العراق</option>
        <option value="الكويت">الكويت</option>
        <option value="المغرب">المغرب</option>
        <option value="اليمن">اليمن</option>
        <option value="تونس">تونس</option>
        <option value="سلطنة عمان">سلطنة عمان</option>
        <option value="سوريا">سوريا</option>
        <option value="فلسطين">فلسطين</option>
        <option value="قطر">قطر</option>
        <option value="لبنان">لبنان</option>
        <option value="ليبيا">ليبيا</option>
        <option value="مصر">مصر</option>
        <option value="آيسلندا">آيسلندا</option>
        <option value="أذربيجان">أذربيجان</option>
        <option value="أرمينيا">أرمينيا</option>
        <option value="أستراليا">أستراليا</option>
        <option value="أفريقيا الوسطى">أفريقيا الوسطى</option>
        <option value="أفغانستان">أفغانستان</option>
        <option value="ألبانيا">ألبانيا</option>
        <option value="ألمانيا">ألمانيا</option>
        <option value="أنغولا">أنغولا</option>
        <option value="أوروغواي">أوروغواي</option>
        <option value="أوزبكستان">أوزبكستان</option>
        <option value="أوغندا">أوغندا</option>
        <option value="أوكرانيا">أوكرانيا</option>
        <option value="إثيوبيا">إثيوبيا</option>
        <option value="إريتريا">إريتريا</option>
        <option value="إسبانيا">إسبانيا</option>
        <option value="إستونيا">إستونيا</option>
        <option value="إندونيسيا">إندونيسيا</option>
        <option value="إيران">إيران</option>
        <option value="إيطاليا">إيطاليا</option>
        <option value="الأرجنتين">الأرجنتين</option>
        <option value="الإكوادور">الإكوادور</option>
        <option value="البرازيل">البرازيل</option>
        <option value="البرتغال">البرتغال</option>
        <option value="لبوسنة والهرسك">البوسنة والهرسك</option>
        <option value="التشيك">التشيك</option>
        <option value="الجبل الأسود">الجبل الأسود</option>
        <option value="الدنمارك">الدنمارك</option>
        <option value="الرأس الأخضر">الرأس الأخضر</option>
        <option value="السنغال">السنغال</option>
        <option value="السودان">السودان</option>
        <option value="السويد">السويد</option>
        <option value="الصومال">الصومال</option>
        <option value="الصين">الصين</option>
        <option value="الغابون">الغابون</option>
        <option value="الفلبين">الفلبين</option>
        <option value="الكاميرون">الكاميرون</option>
        <option value="الكونغو الديمقراطية">الكونغو الديمقراطية</option>
        <option value="المكسيك">المكسيك</option>
        <option value="المملكة المتحدة">المملكة المتحدة</option>
        <option value="النرويج">النرويج</option>
        <option value="النمسا">النمسا</option>
        <option value="النيجر">النيجر</option>
        <option value="الهند">الهند</option>
        <option value="الولايات المتحدة">الولايات المتحدة</option>
        <option value="اليابان">اليابان</option>
        <option value="اليونان">اليونان</option>
        <option value="ايرلندا">ايرلندا</option>
        <option value="باراغواي">باراغواي</option>
        <option value="باكستان">باكستان</option>
        <option value="بلجيكا">بلجيكا</option>
        <option value="بلغاريا">بلغاريا</option>
        <option value="بنغلاديش">بنغلاديش</option>
        <option value="بوتسوانا">بوتسوانا</option>
        <option value="بورما">بورما</option>
        <option value="بولندا">بولندا</option>
        <option value="بوليفيا">بوليفيا</option>
        <option value="بيرو">بيرو</option>
        <option value="بيلاروسيا">بيلاروسيا</option>
        <option value="تايلاند">تايلاند</option>
        <option value="تايوان">تايوان</option>
        <option value="تركمانستان">تركمانستان</option>
        <option value="تركيا">تركيا</option>
        <option value="تشاد">تشاد</option>
        <option value="تشيلي">تشيلي</option>
        <option value="تنزانيا">تنزانيا</option>
        <option value="توغو">توغو</option>
        <option value="جرينلاند">جرينلاند</option>
        <option value="جمهورية الدومينيكان">جمهورية الدومينيكان</option>
        <option value="جمهورية الكونغو">جمهورية الكونغو</option>
        <option value="جنوب أفريقيا">جنوب أفريقيا</option>
        <option value="جنوب السودان">جنوب السودان</option>
        <option value="جورجيا">جورجيا</option>
        <option value="جيبوتي">جيبوتي</option>
        <option value="رواندا">رواندا</option>
        <option value="روسيا">روسيا</option>
        <option value="رومانيا">رومانيا</option>
        <option value="زامبيا">زامبيا</option>
        <option value="زيمبابوي">زيمبابوي</option>
        <option value="ساحل العاج">ساحل العاج</option>
        <option value="سريلانكا">سريلانكا</option>
        <option value="سلوفاكيا">سلوفاكيا</option>
        <option value="سلوفينيا">سلوفينيا</option>
        <option value="سنغافورة">سنغافورة</option>
        <option value="سويسرا">سويسرا</option>
        <option value="صربيا">صربيا</option>
        <option value="طاجيكستان">طاجيكستان</option>
        <option value="غامبيا">غامبيا</option>
        <option value="غانا">غانا</option>
        <option value="غويانا">غويانا</option>
        <option value="غينيا">غينيا</option>
        <option value="غينيا بيساو">غينيا بيساو</option>
        <option value="فرنسا">فرنسا</option>
        <option value="فنزويلا">فنزويلا</option>
        <option value="فنلندا">فنلندا</option>
        <option value="فيتنام">فيتنام</option>
        <option value="قبرص">قبرص</option>
        <option value="قرغيزستان">قرغيزستان</option>
        <option value="كازاخستان">كازاخستان</option>
        <option value="كرواتيا">كرواتيا</option>
        <option value="كمبوديا">كمبوديا</option>
        <option value="كندا">كندا</option>
        <option value="كوبا">كوبا</option>
        <option value="كوريا الجنوبية">كوريا الجنوبية</option>
        <option value="كوريا الشمالية">كوريا الشمالية</option>
        <option value="كولومبيا">كولومبيا</option>
        <option value="كينيا">كينيا</option>
        <option value="لاتفيا">لاتفيا</option>
        <option value="لاوس">لاوس</option>
        <option value="لوكسمبورغ">لوكسمبورغ</option>
        <option value="ليبيريا">ليبيريا</option>
        <option value="ليتوانيا">ليتوانيا</option>
        <option value="مالاوي">مالاوي</option>
        <option value="مالطا">مالطا</option>
        <option value="مالي">مالي</option>
        <option value="ماليزيا">ماليزيا</option>
        <option value="مدغشقر">مدغشقر</option>
        <option value="مقدونيا">مقدونيا</option>
        <option value="منغوليا">منغوليا</option>
        <option value="موريتانيا">موريتانيا</option>
        <option value="موزمبيق">موزمبيق</option>
        <option value="مولدوفا">مولدوفا</option>
        <option value="ناميبيا">ناميبيا</option>
        <option value="نيبال">نيبال</option>
        <option value="نيجيريا">نيجيريا</option>
        <option value="نيكاراجوا">نيكاراجوا</option>
        <option value="نيوزيلندا">نيوزيلندا</option>
        <option value="هايتي">هايتي</option>
        <option value="هندوراس">هندوراس</option>
        <option value="هنغاريا">هنغاريا</option>
        <option value="هولندا">هولندا</option>
        <option value="هونغ كونغ">هونغ كونغ</option>
    </select>
    </div>
    <div class="error" id="errorCountry"></div>
  </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">
        <div class="form-group">
        <label class="label-title" for="exampleInputName2">الاسم</label>
        <input type="text" required="required" name="name" class="form-control"  id="name" placeholder="هذا الاسم سوف يظهر للمشتركين">
        <div class="error" id="errorName"></div>
    </div>


  <div class="form-group">
    <label class="label-title" for="exampleInputEmail1">البريد الالكترونى</label>
    <input type="email" required="required" name="email" class="form-control" id="email" placeholder="">
      <div class="error" id="errorEmail"></div>
  </div>

  <div class="form-group">
    <label class="label-title" for="exampleInputEmail1">تأكيد البريد الالكترونى</label>
    <input type="email" required="required" name="remail" class="form-control" id="remail" placeholder="">
      <div class="error" id="errorRemail"></div>
  </div>
    <div class="form-group">
        <label class="label-title" for="exampleInputEmail1">دولة الإقامة</label>
        <select class="form-control" id="country_stay" required="required" name="country_stay">
            <option value=""> ( انا مقيم فى )  </option>
            <option value="الأرد">الأردن</option>
            <option value="الإمارات">الإمارات</option>
            <option value="البحرين">البحرين</option>
            <option value="الجزائر">الجزائر</option>
            <option value="السعودية">السعودية</option>
            <option value="العراق">العراق</option>
            <option value="الكويت">الكويت</option>
            <option value="المغرب">المغرب</option>
            <option value="اليمن">اليمن</option>
            <option value="تونس">تونس</option>
            <option value="سلطنة عمان">سلطنة عمان</option>
            <option value="سوريا">سوريا</option>
            <option value="فلسطين">فلسطين</option>
            <option value="قطر">قطر</option>
            <option value="لبنان">لبنان</option>
            <option value="ليبيا">ليبيا</option>
            <option value="مصر">مصر</option>
            <option value="آيسلندا">آيسلندا</option>
            <option value="أذربيجان">أذربيجان</option>
            <option value="أرمينيا">أرمينيا</option>
            <option value="أستراليا">أستراليا</option>
            <option value="أفريقيا الوسطى">أفريقيا الوسطى</option>
            <option value="أفغانستان">أفغانستان</option>
            <option value="ألبانيا">ألبانيا</option>
            <option value="ألمانيا">ألمانيا</option>
            <option value="أنغولا">أنغولا</option>
            <option value="أوروغواي">أوروغواي</option>
            <option value="أوزبكستان">أوزبكستان</option>
            <option value="أوغندا">أوغندا</option>
            <option value="أوكرانيا">أوكرانيا</option>
            <option value="إثيوبيا">إثيوبيا</option>
            <option value="إريتريا">إريتريا</option>
            <option value="إسبانيا">إسبانيا</option>
            <option value="إستونيا">إستونيا</option>
            <option value="إندونيسيا">إندونيسيا</option>
            <option value="إيران">إيران</option>
            <option value="إيطاليا">إيطاليا</option>
            <option value="الأرجنتين">الأرجنتين</option>
            <option value="الإكوادور">الإكوادور</option>
            <option value="البرازيل">البرازيل</option>
            <option value="البرتغال">البرتغال</option>
            <option value="لبوسنة والهرسك">البوسنة والهرسك</option>
            <option value="التشيك">التشيك</option>
            <option value="الجبل الأسود">الجبل الأسود</option>
            <option value="الدنمارك">الدنمارك</option>
            <option value="الرأس الأخضر">الرأس الأخضر</option>
            <option value="السنغال">السنغال</option>
            <option value="السودان">السودان</option>
            <option value="السويد">السويد</option>
            <option value="الصومال">الصومال</option>
            <option value="الصين">الصين</option>
            <option value="الغابون">الغابون</option>
            <option value="الفلبين">الفلبين</option>
            <option value="الكاميرون">الكاميرون</option>
            <option value="الكونغو الديمقراطية">الكونغو الديمقراطية</option>
            <option value="المكسيك">المكسيك</option>
            <option value="المملكة المتحدة">المملكة المتحدة</option>
            <option value="النرويج">النرويج</option>
            <option value="النمسا">النمسا</option>
            <option value="النيجر">النيجر</option>
            <option value="الهند">الهند</option>
            <option value="الولايات المتحدة">الولايات المتحدة</option>
            <option value="اليابان">اليابان</option>
            <option value="اليونان">اليونان</option>
            <option value="ايرلندا">ايرلندا</option>
            <option value="باراغواي">باراغواي</option>
            <option value="باكستان">باكستان</option>
            <option value="بلجيكا">بلجيكا</option>
            <option value="بلغاريا">بلغاريا</option>
            <option value="بنغلاديش">بنغلاديش</option>
            <option value="بوتسوانا">بوتسوانا</option>
            <option value="بورما">بورما</option>
            <option value="بولندا">بولندا</option>
            <option value="بوليفيا">بوليفيا</option>
            <option value="بيرو">بيرو</option>
            <option value="بيلاروسيا">بيلاروسيا</option>
            <option value="تايلاند">تايلاند</option>
            <option value="تايوان">تايوان</option>
            <option value="تركمانستان">تركمانستان</option>
            <option value="تركيا">تركيا</option>
            <option value="تشاد">تشاد</option>
            <option value="تشيلي">تشيلي</option>
            <option value="تنزانيا">تنزانيا</option>
            <option value="توغو">توغو</option>
            <option value="جرينلاند">جرينلاند</option>
            <option value="جمهورية الدومينيكان">جمهورية الدومينيكان</option>
            <option value="جمهورية الكونغو">جمهورية الكونغو</option>
            <option value="جنوب أفريقيا">جنوب أفريقيا</option>
            <option value="جنوب السودان">جنوب السودان</option>
            <option value="جورجيا">جورجيا</option>
            <option value="جيبوتي">جيبوتي</option>
            <option value="رواندا">رواندا</option>
            <option value="روسيا">روسيا</option>
            <option value="رومانيا">رومانيا</option>
            <option value="زامبيا">زامبيا</option>
            <option value="زيمبابوي">زيمبابوي</option>
            <option value="ساحل العاج">ساحل العاج</option>
            <option value="سريلانكا">سريلانكا</option>
            <option value="سلوفاكيا">سلوفاكيا</option>
            <option value="سلوفينيا">سلوفينيا</option>
            <option value="سنغافورة">سنغافورة</option>
            <option value="سويسرا">سويسرا</option>
            <option value="صربيا">صربيا</option>
            <option value="طاجيكستان">طاجيكستان</option>
            <option value="غامبيا">غامبيا</option>
            <option value="غانا">غانا</option>
            <option value="غويانا">غويانا</option>
            <option value="غينيا">غينيا</option>
            <option value="غينيا بيساو">غينيا بيساو</option>
            <option value="فرنسا">فرنسا</option>
            <option value="فنزويلا">فنزويلا</option>
            <option value="فنلندا">فنلندا</option>
            <option value="فيتنام">فيتنام</option>
            <option value="قبرص">قبرص</option>
            <option value="قرغيزستان">قرغيزستان</option>
            <option value="كازاخستان">كازاخستان</option>
            <option value="كرواتيا">كرواتيا</option>
            <option value="كمبوديا">كمبوديا</option>
            <option value="كندا">كندا</option>
            <option value="كوبا">كوبا</option>
            <option value="كوريا الجنوبية">كوريا الجنوبية</option>
            <option value="كوريا الشمالية">كوريا الشمالية</option>
            <option value="كولومبيا">كولومبيا</option>
            <option value="كينيا">كينيا</option>
            <option value="لاتفيا">لاتفيا</option>
            <option value="لاوس">لاوس</option>
            <option value="لوكسمبورغ">لوكسمبورغ</option>
            <option value="ليبيريا">ليبيريا</option>
            <option value="ليتوانيا">ليتوانيا</option>
            <option value="مالاوي">مالاوي</option>
            <option value="مالطا">مالطا</option>
            <option value="مالي">مالي</option>
            <option value="ماليزيا">ماليزيا</option>
            <option value="مدغشقر">مدغشقر</option>
            <option value="مقدونيا">مقدونيا</option>
            <option value="منغوليا">منغوليا</option>
            <option value="موريتانيا">موريتانيا</option>
            <option value="موزمبيق">موزمبيق</option>
            <option value="مولدوفا">مولدوفا</option>
            <option value="ناميبيا">ناميبيا</option>
            <option value="نيبال">نيبال</option>
            <option value="نيجيريا">نيجيريا</option>
            <option value="نيكاراجوا">نيكاراجوا</option>
            <option value="نيوزيلندا">نيوزيلندا</option>
            <option value="هايتي">هايتي</option>
            <option value="هندوراس">هندوراس</option>
            <option value="هنغاريا">هنغاريا</option>
            <option value="هولندا">هولندا</option>
            <option value="هونغ كونغ">هونغ كونغ</option>
        </select>
        <div class="error" id="errorCountry_stay"></div>
    </div>

        </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">

 <div class="form-group">
  <label class="label-title" for="exampleInputPassword1">كلمة المرور</label>
    <input type="password" name="password" class="form-control" id="password" required="required" placeholder="">
     <div class="error" id="errorPassword"></div>
 </div>
  <div class="form-group">
  <label class="label-title" for="exampleInputPassword1">تأكيد كلمة المرور</label>
    <input type="password" name="repassword" class="form-control" id="repassword" required="required" placeholder="">
      <div class="error" id="errorRepassword"></div>
  </div>
  <div class="form-group">
     <label class="label-title" for="exampleInputPassword1">شروط الاستخدام</label>
        <div class="checkbox checkbox-success">
                        <input required type="checkbox" name="radio4e" id="radio8" >

                        <label for="radio8">
                            قرأت وأقبل بجميع شروط استخدام الموقع وموافق على سياسة الخصوصية
                        </label>
                        <div class="error" id="errorRadio8"></div>
                    </div>

  </div>

<!--        <div id="next1">-->
<!--            <button type="submit" id="register" class="btn-next-tab btn-next col-lg-12 col-md-12 col-sm-12 col-xs-12" href="#home">تسجيل</button>-->
<!--            <button type="submit" id="register" class="btn-next-tab btn-next col-lg-12 col-md-12 col-sm-12 col-xs-12" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">التالى ></button>-->
<!--        </div>-->
<div id="load">
    <?php

    if($session->userdata('userIsRegister') == '1') {
        echo '<button type="submit" id="register" class="btn-next-tab btn-next col-lg-12 col-md-12 col-sm-12 col-xs-12" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">التالى ></button>';
    } else {
        echo '<button type="submit" id="register" class="btn-next-tab btn-next col-lg-12 col-md-12 col-sm-12 col-xs-12" href="#home">تسجيل</button>';
    }

    ?>
</div>


</form>
    </div>

    </div>
    <?php } ?>
<?php if($session->userdata('dataSituation') != '1' ) {?>
    <div role="tabpanel" class="tab-pane <?php echo $session->userdata('userIsRegister') == '1' ? 'active' : '' ?>" id="profile">
         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">
    <form action="" method="post" id="socialSituation" rol="form">

    <div class="form-group">
    <label class="label-title" for="exampleInputEmail1">التعليم</label>
    <select class="form-control" name="learn">
        <option value="غير محدد">غير محدد</option>
        <option value="إبتدائي">إبتدائي</option>
        <option value="إعدادي">إعدادي</option>
        <option value="ثانوي">ثانوي</option>
        <option value="تكوين مهني">تكوين مهني</option>
        <option value="درجة البكالوريوس">درجة البكالوريوس</option>
        <option value="درجة الماجستير">درجة الماجستير</option>
        <option value="درجة الدكتوراه">درجة الدكتوراه</option>
        <option value="مدرسة الحياة">مدرسة الحياة</option>
        <option value="بعض السنوات الجامعية">بعض السنوات الجامعية</option>
    </select>
  </div>
  <div class="form-group">
    <label class="label-title" for="exampleInputEmail1">العمل</label>
    <select class="form-control" name="work">
        <option value="غير محدد">غير محدد</option>
        <option value="طالب">طالب</option>
        <option value="موظف حكومي">موظف حكومي</option>
        <option value="موظف قطاع خاص">موظف قطاع خاص</option>
        <option value="مدير">مدير</option>
        <option value="أعمال حرة">أعمال حرة</option>
        <option value="عاطل عن العمل">عاطل عن العمل</option>
        <option value="متقاعد">متقاعد</option>
    </select>
  </div>
  <div class="form-group">
    <label class="label-title" for="exampleInputEmail1">مجال العمل</label>
    <select class="form-control" name="work_field">
        <option value="غير محدد">غير محدد</option>
        <option value="سكرتريا">سكرتريا</option>
        <option value="الإدارة">الإدارة</option>
        <option value="الإعلانات">الإعلانات</option>
        <option value="التسيير">التسيير</option>
        <option value="المالي والمصرفي">المالي والمصرفي</option>
        <option value="الصحافة والإعلام">الصحافة والإعلام</option>
        <option value="المجال الفني والإبداعي">المجال الفني والإبداعي</option>
        <option value="الترفيه">الترفيه</option>
        <option value="الحلاقة والتجميل">الحلاقة والتجميل</option>
        <option value="المبيعات">المبيعات</option>
        <option value="مجال المطاعم">مجال المطاعم</option>
        <option value="أعمال منزلية">أعمال منزلية</option>
        <option value="رعاية الأطفال">رعاية الأطفال</option>
        <option value="أعمال اجتماعية">أعمال اجتماعية</option>
        <option value="أعمال تطوعية">أعمال تطوعية</option>
        <option value="الصيدلة">الصيدلة</option>
        <option value="المساعدة الطبية">المساعدة الطبية</option>
        <option value="الطب">الطب</option>
        <option value="طب الأسنان">طب الأسنان</option>
        <option value="البيطرة">البيطرة</option>
        <option value="الهندسة">الهندسة</option>
        <option value="التكنولوجيا والتواصل">التكنولوجيا والتواصل</option>
        <option value="الصناعة">الصناعة</option>
        <option value="البناء">البناء</option>
        <option value="الأعمال الحرفي">الأعمال الحرفية</option>
        <option value="الزراعة والمواشي">الزراعة والمواشي</option>
        <option value="الشرطة">الشرطة</option>
        <option value="الأمن">الأمن</option>
        <option value="دفاع مدني">دفاع مدني</option>
        <option value="المجال العسكري">المجال العسكري</option>
        <option value="المجال السياسي">المجال السياسي</option>
        <option value="المجال القانوني">المجال القانوني</option>
        <option value="التعليم">التعليم</option>
        <option value="الأكاديمي والبحوث">الأكاديمي والبحوث</option>
        <option value="المجال الرياضي">المجال الرياضي</option>
        <option value="المواصلات">المواصلات</option>
        <option value="السياحة">السياحة</option>
    </select>
  </div>
    <div class="form-group">
        <label class="label-title" for="exampleInputEmail1">الدخل الشهرى</label>
        <select class="form-control" name="monthly_income">
            <option>(انا دخلى)</option>
            <option value="لا احب ان اقول">لا احب ان اقول</option>
            <option value="100">$100</option>
            <option value="500">$500</option>
            <option value="1000">$1000</option>
            <option value="2000">$2000</option>
            <option value="3000">$3000 +</option>
        </select>
    </div>
        <div class="form-group">
            <label class="label-title" for="exampleInputEmail1">  بنية الجسم </label>
            <select class="form-control" name="physique">
                <option value="غير محدد">غير محدد</option>
                <option value="صغير">صغير</option>
                <option value="نحيف">نحيف</option>
                <option value="عادي">عادي</option>
                <option value="رياضي">رياضي</option>
                <option value="قوام متناسب">قوام متناسب</option>
                <option value="زيادة في بعض الكيلوغرامات">زيادة في بعض الكيلوغرامات</option>
                <option value="ممتلئ">ممتلئ</option>
                <option value="ضخم">ضخم</option>
            </select>
        </div>



        </div>


         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">


    <div class="form-group">
    <label class="label-title" for="exampleInputEmail1">حالة السكن</label>
    <select class="form-control" name="housing_case">
        <option value="غير محدد">غير محدد</option>
        <option value="أعيش وحدي">أعيش وحدي</option>
        <option value="أعيش مع أصدقاء">أعيش مع أصدقاء</option>
        <option value="أعيش مع أهلي">أعيش مع أهلي</option>
        <option value="أعيش مع أسرتي الصغيرة">أعيش مع أسرتي الصغيرة</option>
        <option value="أعيش مع أطفالي">أعيش مع أطفالي</option>
        <option value="غير ذلك">غير ذلك</option>
    </select>
  </div>
  <div class="form-group">
    <label class="label-title" for="exampleInputEmail1">الأستعدادية للتنقل</label>
    <select class="form-control"name="ready_move">
        <option value="غير محدد">غير محدد</option>
        <option value="أريد أن أظل في منزلي">أريد أن أظل في منزلي</option>
        <option value="داخل منطقتي">داخل منطقتي</option>
        <option value="داخل بلدي">داخل بلدي</option>
        <option value="بلد مجاور">بلد مجاور</option>
        <option value="إلى بلد آخر">إلى بلد آخر</option>
        <option value="غير متأكد">غير متأكد</option>
    </select>
  </div>

 <div class="form-group">
     <label class="label-title" for="exampleInputEmail1"> لون البشره  </label>
     <select class="form-control" name="skin_color">
         <option value="غير محدد">غير محدد</option>
         <option value="بياض الثلج">بياض الثلج</option>
         <option value="أبيض">أبيض</option>
         <option value="قمحي فاتح">قمحي فاتح</option>
         <option value="قمحي">قمحي</option>
         <option value="قمحي غامق">قمحي غامق</option>
         <option value="داكن">داكن</option>
     </select>
 </div>

     <div class="form-group">
         <label class="label-title" for="exampleInputEmail1"> الوزن  </label>
         <select class="form-control" name="weight">
             <option value="غير محدد">غير محدد</option>
             <option value="50">50</option>
             <option value="60">60</option>
             <option value="70">70</option>
             <option value="80">80</option>
             <option value="90">90</option>
             <option value="100">100</option>
             <option value="110">110</option>
             <option value="120">120</option>
             <option value="130">130</option>
             <option value="140">140</option>
             <option value=" 150 واكثر "> 150 واكثر </option>
         </select>
     </div>

     <div class="form-group">
         <label class="label-title" for="exampleInputEmail1"> الطول  </label>
         <select class="form-control" name="height">
             <option value="غير محدد">غير محدد</option>
             <option value="120">120</option>
             <option value="130">130</option>
             <option value="140">140</option>
             <option value="150">150</option>
             <option value="160">160</option>
             <option value="180">180</option>
             <option value="190">190</option>
             <option value="200 واكثر">200 واكثر</option>
         </select>
     </div>





</div>

   <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">


   <div class="form-group">
    <label class="label-title" for="exampleInputEmail1">الحالة العائلية</label><br/>
    <div class="radio radio-info radio-inline">
       <input type="radio" id="inlineRadio1" value="غير محدد" name="family_status" >
        <label class="radio-kind" for="inlineRadio1">غير محدد</label>
    </div>
    <div class="radio radio-inline">
      <input type="radio" id="inlineRadio2" value="أعزب" name="family_status">
       <label class="radio-kind" for="inlineRadio2">أعزب</label>
    </div>
    <div class="radio radio-inline">
      <input type="radio" id="inlineRadio3" value="متزوج" name="family_status">
        <label class="radio-kind" for="inlineRadio3">متزوج</label>
    </div>

    <div class="radio radio-info radio-inline">
       <input type="radio" id="inlineRadio1" value="منفصل" name="family_status" >
        <label class="radio-kind" for="inlineRadio1">منفصل</label>
    </div>
    <div class="radio radio-inline">
      <input type="radio" id="inlineRadio2" value="مطلق" name="family_status">
       <label class="radio-kind" for="inlineRadio2">مطلق</label>
    </div>
    <div class="radio radio-inline">
      <input type="radio" id="inlineRadio3" value="أرمل" name="family_status">
        <label class="radio-kind" for="inlineRadio3">أرمل</label>
    </div>
    </div>




   <div class="form-group">
       <label class="label-title" for="exampleInputEmail1">الأطفال</label><br/>
       <div class="radio radio-info radio-inline">
           <input type="radio" id="inlineRadio1" value="غير محدد" name="want_children" >
           <label class="radio-kind" for="inlineRadio1">غير محدد</label>
       </div>
       <div class="radio radio-inline">
           <input type="radio" id="inlineRadio2" value="لا" name="want_children">
           <label class="radio-kind" for="inlineRadio2">لا</label>
       </div>
       <div class="radio radio-inline">
           <input type="radio" id="inlineRadio3" value="نعم" name="want_children">
           <label class="radio-kind" for="inlineRadio3">نعم</label>
       </div>
   </div>


   <div class="form-group">
       <label class="label-title" for="exampleInputEmail1">الحاله الماديه</label><br/>
       <div class="radio radio-info radio-inline">
           <input type="radio" id="inlineRadio1" value="غير محدد" name="physical_condition">
           <label class="radio-kind" for="inlineRadio1">غير محدد</label>
       </div>
       <div class="radio radio-info radio-inline">
           <input type="radio" id="inlineRadio1" value="ميسور" name="physical_condition">
           <label class="radio-kind" for="inlineRadio1">ميسور</label>
       </div>
       <div class="radio radio-inline">
           <input type="radio" id="inlineRadio2" value="متوسط" name="physical_condition">
           <label class="radio-kind" for="inlineRadio2">متوسط</label>
       </div>
       <div class="radio radio-inline">
           <input type="radio" id="inlineRadio3" value="ضعيف" name="physical_condition">
           <label class="radio-kind" for="inlineRadio3">ضعيف</label>
       </div>
   </div>

   <div class="form-group">
       <label class="label-title" for="exampleInputEmail1">الحالة الصحية</label><br/>
       <div class="radio radio-info radio-inline">
           <input type="radio" id="inlineRadio1" value=" غير محدد " name="health_status">
           <label class="radio-kind" for="inlineRadio1"> غير محدد </label>
       </div>
       <div class="radio radio-info radio-inline">
           <input type="radio" id="inlineRadio1" value=" الحمد لله حديد " name="health_status">
           <label class="radio-kind" for="inlineRadio1"> الحمد لله حديد </label>
       </div>
       <div class="radio radio-inline">
           <input type="radio" id="inlineRadio2" value="مرض متوسط" name="health_status">
           <label class="radio-kind" for="inlineRadio2">مرض متوسط</label>
       </div>
       <div class="radio radio-inline">
           <input type="radio" id="inlineRadio3" value="اعاقة مستمرة" name="health_status">
           <label class="radio-kind" for="inlineRadio3">اعاقة مستمرة</label>
       </div>
   </div>

   <div class="form-group">
       <label class="label-title" for="exampleInputEmail1">الالتزام الدينى </label><br/>
       <div class="radio radio-info radio-inline">
           <input type="radio" id="inlineRadio1" value="ير محدد " name="religious_commitmen">
           <label class="radio-kind" for="inlineRadio1"> غير محدد </label>
       </div>
       <div class="radio radio-info radio-inline">
           <input type="radio" id="inlineRadio1" value=" بصلى الحمد لله " name="religious_commitmen">
           <label class="radio-kind" for="inlineRadio1"> بصلى الحمد لله </label>
       </div>
       <div class="radio radio-inline">
           <input type="radio" id="inlineRadio2" value="مقصر" name="religious_commitmen">
           <label class="radio-kind" for="inlineRadio2">مقصر</label>
       </div>
   </div>


       <button type="submit" name="socialSituation" id="socialSituationGo" class="btn-next-tab btn-prev col-lg-5 pull-right"> حفظ </button>

       <button type="button" class="btn-next-tab btn-next col-lg-5" href="#messages" aria-controls="messages" role="tab" data-toggle="tab">التالى ></button>
</form>
   </div>
    </div>

<?php } ?>
<?php if($session->userdata('upload') != '1') { ?>
    <div role="tabpanel" class="tab-pane <?php echo $session->userdata('dataSituation') == '1' ? 'active' : '' ?>" id="messages">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">
        <div class="personal-img"><img class="img-responsive" src="images/personal-information.png"></div>
     </div>
     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">
      <form action method="post" rol="form" enctype="multipart/form-data">
        <div class="form-group">
          <label class="label-title" for="exampleInputFile">أختر صورتك</label>
          <input class="choise-img" required name="userfile" type="file" >
        </div>
        <p>ستظهر الصورة فى بياناتك بعد تأكد الأدارة من مطابقتها لشروط الخصوصية والحشمة; لذلك الرجاء قرأة التعليمات والشروط أدناة</p>
         <br/>
      <!--buttons-->
      <button type="submit" name="upload"  class="btn-next-tab btn-prev col-lg-5 pull-right" > اضافة </button>
      <button  class="btn-next-tab btn-next col-lg-5" href="#settings" aria-controls="settings" role="tab" data-toggle="tab">التالى ></button>
      <!--buttons-->
    </form>
     </div>
    </div>
<?php } ?>
<?php if($session->userdata('userAbut') != '1') { ?>
  <div role="tabpanel" class="tab-pane <?php echo $session->userdata('upload') == '1' ? 'active' : '' ?>" id="settings">
      <div class="col-lg-12"><p>الوصف هو فرصتك للتعبير وتقديم الصورة اللائقة بيك فى الموقع:</p></div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
          <form action method="post" rol="form">
              <label class="label-title">تحدث عن نفسك (طباعك - عاداتك - مبادئك - أحلامك)</label>
              <textarea name="myself" class="form-control" rows="3"></textarea>
              <label class="error"><?php echo form_error('myself'); ?></label><br>
              <label class="label-title">الوصف لا يجب أن يقل عن 15 حرف</label>
              <p>ستظهر الصورة فى بياناتك بعد تأكد الأدارة من مطابقتها لشروط الخصوصية والحشمة; لذلك الرجاء قرأة التعليمات والشروط أدناة</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
          <label class="label-title">تحدث عن اللذين تبحث عنهم (مواصفاته - أخلاقة - حالتة )</label>
          <textarea class="form-control" name="about_search" rows="3"></textarea>
          <label class="error"><?php echo form_error('about_search'); ?></label><br>
          <label class="label-title">الوصف لا يجب أن يقل عن 15 حرف</label><br/>
          <!--buttons-->
          <button type="submit" name="abut" class="btn-next-tab btn-prev col-lg-5 pull-right"> حفظ </button>
          <button type="button" class="btn-next-tab btn-next col-lg-5" href="#mail" aria-controls="mail" role="tab" data-toggle="tab">التالى ></button>
          <!--buttons-->
          </form>
      </div>
  </div>
<?php } ?>
  <div role="tabpanel" class="tab-pane <?php echo $session->userdata('userAbut') == '1' ? 'active' : ''; ?>" id="mail">
      <div class="col-lg-6 pull-right">
          <p class="mail-info">تأكيد البريد الالكترونى</p>
          <p class="mail-info"><a href="/register/activeEmail"><?php echo $session->userdata('userEmail') ?></a></p>
          <!--buttons-->
          <style>
              .nt:hover{
                  color: #fff
              }
          </style>
          <a href="<?php echo HOST_NAME; ?>register/activeEmail" class="nt btn-next-tab text-center btn-prev col-lg-5 col-md-6 col-sm-6 col-xs-6 pull-right ">تأكيد</a>
          <a href="<?php echo HOST_NAME; ?>register/exitEmail" class="text-center nt btn-next-tab btn-prev col-lg-5 col-md-6 col-sm-6 col-xs-6 pull-left ">تخطى </a>

          <!--buttons-->
      </div>

</div>
  <!-- Nav tabs -->

            </div>


        </div>
        <div class="clearfix"></div>
    </section>


<?php require_once 'template/footer.php'; ?>