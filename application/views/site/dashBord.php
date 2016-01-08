<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo HOST_NAME . 'siteAssets/' ; ?>" >
    <title><?php echo $title; ?></title>
    


    <link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assests/animate.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assests/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="assests/nprogress.css" />
    
    

    <link rel="stylesheet" href="assests/build.css"/>
   
    <link rel="stylesheet" href="assests/my-account.css" type="text/css" media="screen" />
    <!--[if IE]>
    <script src="js/html5.js"></script>
    <![endif]-->
</head>

<body>
    
    <!--start menu-->
<?php require_once 'template/headerUser.php' ?>
<!--end menu-->
<!--start pepoles-->
<section class="img-person">
    <div class="container">
        <div class="row">
            <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list-unstyled ul-img">
                <?php
                    for($i = 0; $i <count($userHeader); $i++) {
                ?>
                <li class="col-lg-2 text-center"><a href="<?php echo HOST_NAME . 'profile/index/' . $userHeader[$i]['ur_id'] ?>"><div class="radio-cir-online"></div><img width="160" height="160" class="" src="<?php echo HOST_NAME  . 'upload/' .  $userHeader[$i]['ur_photo'] ; ?>"></a></li>
<!--                <li class="col-lg-2 text-center"><a href=""><div class="radio-cir-offline"></div><img src="images/img-per.png"></a></li>-->
                <?php } ?>
              </ul>
        </div>
    </div>
</section>
<!--end pepoles-->
<!--start pepoles-->
<section class="blocks-person">
    <div class="container">
        <div class="row">
         <!--col-->
           <div class="wow fadeInRight col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">
               <div class="block-per">
                   <div class="title-block-per">بحث سريع</div>
                   <div class="body-block-per">
                         <form action="<?php echo HOST_NAME; ?>Search/index/" method="post" rol="form">

                 <div class="form-group">
                     <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="is_online" class="styled" id="inlineCheckbox1" value="1">
                        <label for="inlineCheckbox1">متواجد الأن</label>
                    </div>
                    <div class="checkbox checkbox-success checkbox-inline">
                        <input type="checkbox" name="photo" class="styled" id="inlineCheckbox2" value="1" checked>
                        <label for="inlineCheckbox2">لديه صور</label>
                    </div>
                  </div>
                                  <div class="form-group">
                                  <label class="label-title" for="exampleInputEmail1">العمر الأدنى</label>
                                    <select class="form-control" name="min_age">
                                        <option value=""> -- يرجى الاختيار -- </option>
                                        <option value="18">18 سنة</option>
                                        <option value="19">19 سنة</option>
                                        <option value="20">20 سنة</option>
                                        <option value="21">21 سنة</option>
                                        <option value="22">22 سنة</option>
                                        <option value="23">23 سنة</option>
                                        <option value="24">24 سنة</option>
                                        <option value="25">25 سنة</option>
                                        <option value="26">26 سنة</option>
                                        <option value="27">27 سنة</option>
                                        <option value="28">28 سنة</option>
                                        <option value="29">29 سنة</option>
                                        <option value="30">30 سنة</option>
                                        <option value="31">31 سنة</option>
                                        <option value="32">32 سنة</option>
                                        <option value="33">33 سنة</option>
                                        <option value="34">34 سنة</option>
                                        <option value="35">35 سنة</option>
                                        <option value="36">36 سنة</option>
                                        <option value="37">37 سنة</option>
                                        <option value="38">38 سنة</option>
                                        <option value="39">39 سنة</option>
                                        <option value="40">40 سنة</option>
                                        <option value="41">41 سنة</option>
                                        <option value="42">42 سنة</option>
                                        <option value="43">43 سنة</option>
                                        <option value="44">44 سنة</option>
                                        <option value="45">45 سنة</option>
                                        <option value="46">46 سنة</option>
                                        <option value="47">47 سنة</option>
                                        <option value="48">48 سنة</option>
                                        <option value="49">49 سنة</option>
                                        <option value="50">50 سنة</option>
                                        <option value="51">51 سنة</option>
                                        <option value="52">52 سنة</option>
                                        <option value="53">53 سنة</option>
                                        <option value="54">54 سنة</option>
                                        <option value="55">55 سنة</option>
                                        <option value="56">56 سنة</option>
                                        <option value="57">57 سنة</option>
                                        <option value="58">58 سنة</option>
                                        <option value="59">59 سنة</option>
                                        <option value="60">60 سنة</option>
                                        <option value="61">61 سنة</option>
                                        <option value="62">62 سنة</option>
                                        <option value="63">63 سنة</option>
                                        <option value="64">64 سنة</option>
                                        <option value="65">65 سنة</option>
                                        <option value="66">66 سنة</option>
                                        <option value="67">67 سنة</option>
                                        <option value="68">68 سنة</option>
                                        <option value="69">69 سنة</option>
                                        <option value="70">70 سنة</option>
                                        <option value="71">71 سنة</option>
                                        <option value="72">72 سنة</option>
                                        <option value="73">73 سنة</option>
                                        <option value="74">74 سنة</option>
                                        <option value="75">75 سنة</option>
                                        <option value="76">76 سنة</option>
                                        <option value="77">77 سنة</option>
                                        <option value="78">78 سنة</option>
                                        <option value="79">79 سنة</option>
                                        <option value="80">80+ سنة</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                  <label class="label-title" for="exampleInputEmail1">العمر الأقصى</label>
                                    <select class="form-control" name="max_age">
                                        <option value=""> -- يرجى الاختيار -- </option>
                                        <option value="18">18 سنة</option>
                                        <option value="19">19 سنة</option>
                                        <option value="20">20 سنة</option>
                                        <option value="21">21 سنة</option>
                                        <option value="22">22 سنة</option>
                                        <option value="23">23 سنة</option>
                                        <option value="24">24 سنة</option>
                                        <option value="25">25 سنة</option>
                                        <option value="26">26 سنة</option>
                                        <option value="27">27 سنة</option>
                                        <option value="28">28 سنة</option>
                                        <option value="29">29 سنة</option>
                                        <option value="30">30 سنة</option>
                                        <option value="31">31 سنة</option>
                                        <option value="32">32 سنة</option>
                                        <option value="33">33 سنة</option>
                                        <option value="34">34 سنة</option>
                                        <option value="35">35 سنة</option>
                                        <option value="36">36 سنة</option>
                                        <option value="37">37 سنة</option>
                                        <option value="38">38 سنة</option>
                                        <option value="39">39 سنة</option>
                                        <option value="40">40 سنة</option>
                                        <option value="41">41 سنة</option>
                                        <option value="42">42 سنة</option>
                                        <option value="43">43 سنة</option>
                                        <option value="44">44 سنة</option>
                                        <option value="45">45 سنة</option>
                                        <option value="46">46 سنة</option>
                                        <option value="47">47 سنة</option>
                                        <option value="48">48 سنة</option>
                                        <option value="49">49 سنة</option>
                                        <option value="50">50 سنة</option>
                                        <option value="51">51 سنة</option>
                                        <option value="52">52 سنة</option>
                                        <option value="53">53 سنة</option>
                                        <option value="54">54 سنة</option>
                                        <option value="55">55 سنة</option>
                                        <option value="56">56 سنة</option>
                                        <option value="57">57 سنة</option>
                                        <option value="58">58 سنة</option>
                                        <option value="59">59 سنة</option>
                                        <option value="60">60 سنة</option>
                                        <option value="61">61 سنة</option>
                                        <option value="62">62 سنة</option>
                                        <option value="63">63 سنة</option>
                                        <option value="64">64 سنة</option>
                                        <option value="65">65 سنة</option>
                                        <option value="66">66 سنة</option>
                                        <option value="67">67 سنة</option>
                                        <option value="68">68 سنة</option>
                                        <option value="69">69 سنة</option>
                                        <option value="70">70 سنة</option>
                                        <option value="71">71 سنة</option>
                                        <option value="72">72 سنة</option>
                                        <option value="73">73 سنة</option>
                                        <option value="74">74 سنة</option>
                                        <option value="75">75 سنة</option>
                                        <option value="76">76 سنة</option>
                                        <option value="77">77 سنة</option>
                                        <option value="78">78 سنة</option>
                                        <option value="79">79 سنة</option>
                                        <option value="80">80+ سنة</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                  <label class="label-title" for="exampleInputEmail1">الهدف</label>
                                    <select class="form-control" name="target">
                                        <option value=""> -- يرجى الاختيار -- </option>
                                        <option value="زواج عادي" >زواج عادي</option>
                                        <option value="زواج تعدد">زواج تعدد</option>
                                        <option value="تعارف وتواصل">تعارف وتواصل</option>
                                        <option value="صداقة عبر النت">صداقة عبر النت</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                  <label class="label-title" for="exampleInputEmail1">دولة الأصل</label>
                                    <select class="form-control" name="country">
                                        <option value=""> -- يرجى الاختيار -- </option>
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
                                  <div class="form-group">
                                  <label class="label-title" for="exampleInputEmail1">دولة الإقامة</label>
                                    <select class="form-control" name="country_stay">
                                        <option value=""> -- يرجى الاختيار -- </option>
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
                 <button type="submit" class="btn btn-success btn-block col-lg-12">بــــحـــث</button>
                         </form>
                   </div>
                   <div class="clearfix"></div> 
               </div>
                

           </div>
            <!--col-->
         <?php if(!$acountDone) { ?>
           <div class=" wow fadeInDown col-lg-8 col-md-8 col-sm-6 col-xs-12">
              <div class="block-per">
                   <div class="title-block-per">ترقية الحساب</div>
                   <div class="body-block-per">
                    <h3>ترقية حسابك الأن</h3>
                    <p>للاستفادة التامة من جميع خدمات الموقع ينبغي ترقية الحساب</p>
                   <a href="<?php echo HOST_NAME . 'dashbord/paypal/' ?>" class="btn btn-success btn-block col-lg-12">رقى حسابك الان</a>
                   </div>
                   <div class="clearfix"></div>
               </div>
           </div>
         <?php } ?>
         <!--col-->
          <div class=" wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">
              <div class="block-per">
                   <div class="title-block-per">اخر قصص النجاح</div>
                   <div class="body-block-per">
                    <br>
                    <br>
                    <p class="text-center" style="color:#CF2082;"><i class="fa fa-newspaper-o fa-5x"></i></p>
                   <br>
                   <a href="<?php echo HOST_NAME . 'main/stories/' ?>" class="btn btn-success btn-block col-lg-12">غرض اخر القصص</a>
                   </div>
                   <div class="clearfix"></div>
               </div>
               
           </div>
         <!--col-->
            <div class="wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="block-new-relation">
                 <div class="title-block-per">حالة الاعجابات</div>
                 <br>
                   <div class="body-block-per">
                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-center block-1"><a class="link-re" href="<?php echo HOST_NAME . 'dashbord/liks/' ?>"><?php echo $myLikes; ?><i class="fa fa-5x fa-heart"></i><span class="title-re">عدد اعجباتى</span></a></div>
                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-center block-1"><a class="link-re" href="<?php echo HOST_NAME . 'dashbord/liks/' ?>"><?php echo $outherLikes; ?><i class="fa fa-5x fa-heart"></i><span class="title-re">عدد المعجبون بى</span></a></div>
                   </div>
               </div>
               <div class="clearfix">  </div>
           </div>
           <!--col-->
        </div>
    </div>
</section>
<!--end pepoles-->
<?php require_once 'template/footer.php'; ?>