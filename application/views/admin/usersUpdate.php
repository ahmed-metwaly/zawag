<?php require_once 'template/header.php'; ?>
<?php //print_r($dataUp);  ?>
<?php if (isset($success)) { ?>
    <div class="alert alert-success alert-dismissable" style="text-align: center;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <?php
        echo $success;
        ?>
        <meta http-equiv="refresh" content="2">
        <a href="" class="alert-link"></a>

    </div>

<?php } elseif (isset($error) || validation_errors() != '') { ?>
    <div class="alert alert-warning alert-dismissable" style="text-align: center;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <?php
        echo @$error;
        echo validation_errors();
        ?>
        <a href="" class="alert-link"></a>
    </div>
<?php } ?>
<div class="portlet-body form">
    <!-- BEGIN FORM-->
    <?php
    $id = $this->uri->segment(3);
    $attr = array('id' => 'form_sample_1', 'class' => 'form-horizontal');
    echo form_open_multipart('Admin/usersUpdate/' . $id, $attr);
    ?>
    <div class="form-body">
        <h2> الحساب </h2>
        <div class="form-group">
            <label class="control-label col-md-3">  الاسم
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-4">
                <input name="name" value="<?php echo $usersData['ur_name']; ?>" required data-required="1" placeholder="" class="form-control" type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3"> البريد الالكترونى
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-4">
                <input name="password" class="form-control" placeholder="****" type="password">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3"> كلمة المرور
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-4">
                <input name="email" value="<?php echo $usersData['ur_email']; ?>" class="form-control" placeholder="demo@demo.com" type="email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3"> الجنس
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-4">
                <select name="gender" class="form-control">
                    <option>هل ذكر ام انثى</option>
                    <option value="0" <?php echo $usersData['ur_gender'] == 0 ? 'selected' : ''; ?> >ذكر</option>
                    <option value="1" <?php echo $usersData['ur_gender'] == 1 ? 'selected' : ''; ?> >انثى</option>
                </select>
                <span class="help-block">

                </span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3"> العمر
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-4">
                <select name="age" class="form-control">
                    <option>كم يبلغ عمرك</option>
                    <option <?php echo $usersData['ur_age'] == 18 ? 'selected' : ''; ?> value="18">18 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 19 ? 'selected' : ''; ?>  value="19">19 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 20 ? 'selected' : ''; ?>  value="20">20 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 21 ? 'selected' : ''; ?>  value="21">21 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 22 ? 'selected' : ''; ?>  value="22">22 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 23 ? 'selected' : ''; ?>  value="23">23 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 24 ? 'selected' : ''; ?>  value="24">24 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 25 ? 'selected' : ''; ?>  value="25">25 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 26 ? 'selected' : ''; ?>  value="26">26 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 27 ? 'selected' : ''; ?>  value="27">27 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 28 ? 'selected' : ''; ?>  value="28">28 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 29 ? 'selected' : ''; ?>  value="29">29 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 30 ? 'selected' : ''; ?>  value="30">30 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 31 ? 'selected' : ''; ?>  value="31">31 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 32 ? 'selected' : ''; ?>  value="32">32 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 33 ? 'selected' : ''; ?>  value="33">33 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 34 ? 'selected' : ''; ?>  value="34">34 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 35 ? 'selected' : ''; ?>  value="35">35 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 36 ? 'selected' : ''; ?>  value="36">36 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 37 ? 'selected' : ''; ?>  value="37">37 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 38 ? 'selected' : ''; ?>  value="38">38 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 39 ? 'selected' : ''; ?>  value="39">39 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 40 ? 'selected' : ''; ?>  value="40">40 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 41 ? 'selected' : ''; ?>  value="41">41 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 42 ? 'selected' : ''; ?>  value="42">42 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 43 ? 'selected' : ''; ?>  value="43">43 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 44 ? 'selected' : ''; ?>  value="44">44 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 45 ? 'selected' : ''; ?>  value="45">45 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 46 ? 'selected' : ''; ?>  value="46">46 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 47 ? 'selected' : ''; ?>  value="47">47 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 48 ? 'selected' : ''; ?>  value="48">48 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 49 ? 'selected' : ''; ?>  value="49">49 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 50 ? 'selected' : ''; ?>  value="50">50 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 51 ? 'selected' : ''; ?>  value="51">51 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 52 ? 'selected' : ''; ?>  value="52">52 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 53 ? 'selected' : ''; ?>  value="53">53 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 54 ? 'selected' : ''; ?>  value="54">54 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 55 ? 'selected' : ''; ?>  value="55">55 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 56 ? 'selected' : ''; ?>  value="56">56 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 57 ? 'selected' : ''; ?>  value="57">57 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 58 ? 'selected' : ''; ?>  value="58">58 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 59 ? 'selected' : ''; ?>  value="59">59 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 60 ? 'selected' : ''; ?>  value="60">60 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 61 ? 'selected' : ''; ?>  value="61">61 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 62 ? 'selected' : ''; ?>  value="62">62 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 63 ? 'selected' : ''; ?>  value="63">63 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 64 ? 'selected' : ''; ?>  value="64">64 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 65 ? 'selected' : ''; ?>  value="65">65 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 66 ? 'selected' : ''; ?>  value="66">66 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 67 ? 'selected' : ''; ?>  value="67">67 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 68 ? 'selected' : ''; ?>  value="68">68 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 69 ? 'selected' : ''; ?>  value="69">69 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 70 ? 'selected' : ''; ?>  value="70">70 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 71 ? 'selected' : ''; ?>  value="71">71 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 72 ? 'selected' : ''; ?>  value="72">72 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 73 ? 'selected' : ''; ?>  value="73">73 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 74 ? 'selected' : ''; ?>  value="74">74 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 75 ? 'selected' : ''; ?>  value="75">75 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 76 ? 'selected' : ''; ?>  value="76">76 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 77 ? 'selected' : ''; ?>  value="77">77 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 78 ? 'selected' : ''; ?>  value="78">78 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 79 ? 'selected' : ''; ?> value="79">79 سنة</option>
                    <option <?php echo $usersData['ur_age'] == 80 ? 'selected' : ''; ?> value="80">80+ سنة</option>
                </select>

            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3"> الهدف من التسجيل
                <span class="required">
                    *
                </span>

            </label>
            <div class="col-md-4">
                <select name="target" class="form-control">
                    <option> -- يرجى الاختيار -- </option>
                    <option <?php echo $usersData['ur_target'] == 'زواج عادي' ? 'selected' : ''; ?> value="زواج عادي">زواج عادي</option>
                    <option <?php echo $usersData['ur_target'] == 'زواج مسيار' ? 'selected' : ''; ?> value="زواج مسيار">زواج مسيار</option>
                    <option <?php echo $usersData['ur_target'] == 'زواج تعدد' ? 'selected' : ''; ?> value="زواج تعدد">زواج تعدد</option>
                    <option <?php echo $usersData['ur_target'] == 'تعارف وتواصل' ? 'selected' : ''; ?> value="تعارف وتواصل">تعارف وتواصل</option>
                    <option <?php echo $usersData['ur_target'] == 'صداقة عبر النت' ? 'selected' : ''; ?> value="صداقة عبر النت">صداقة عبر النت</option>
                    <option <?php echo $usersData['ur_target'] == 'زواج مسيار' ? 'selected' : ''; ?> value="زواج مسيار" >زواج مسيار </option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">  دولة الاصل
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-4">
                <select name="country" class="form-control">
                    <option> -- يرجى الاختيار --</option>
                    <option <?php echo $usersData['ur_country'] == 'الأردن' ? 'selected' : ''; ?> value="الأردن">الأردن</option>
                    <option <?php echo $usersData['ur_country'] == 'الإمارات' ? 'selected' : ''; ?> value="الإمارات">الإمارات</option>
                    <option <?php echo $usersData['ur_country'] == 'البحرين' ? 'selected' : ''; ?> value="البحرين">البحرين</option>
                    <option <?php echo $usersData['ur_country'] == 'الجزائر' ? 'selected' : ''; ?> value="الجزائر">الجزائر</option>
                    <option <?php echo $usersData['ur_country'] == 'السعودية' ? 'selected' : ''; ?> value="السعودية">السعودية</option>
                    <option <?php echo $usersData['ur_country'] == 'العراق' ? 'selected' : ''; ?> value="العراق">العراق</option>
                    <option <?php echo $usersData['ur_country'] == 'الكويت' ? 'selected' : ''; ?> value="الكويت">الكويت</option>
                    <option <?php echo $usersData['ur_country'] == 'المغرب' ? 'selected' : ''; ?> value="المغرب">المغرب</option>
                    <option <?php echo $usersData['ur_country'] == 'اليمن' ? 'selected' : ''; ?> value="اليمن">اليمن</option>
                    <option <?php echo $usersData['ur_country'] == 'تونس' ? 'selected' : ''; ?> value="تونس">تونس</option>
                    <option <?php echo $usersData['ur_country'] == 'سلطنة عمان' ? 'selected' : ''; ?> value="سلطنة عمان">سلطنة عمان</option>
                    <option <?php echo $usersData['ur_country'] == 'سوريا' ? 'selected' : ''; ?> value="سوريا">سوريا</option>
                    <option <?php echo $usersData['ur_country'] == 'فلسطين' ? 'selected' : ''; ?> value="فلسطين">فلسطين</option>
                    <option <?php echo $usersData['ur_country'] == 'قطر' ? 'selected' : ''; ?> value="قطر">قطر</option>
                    <option <?php echo $usersData['ur_country'] == 'لبنان' ? 'selected' : ''; ?> value="لبنان">لبنان</option>
                    <option <?php echo $usersData['ur_country'] == 'ليبيا' ? 'selected' : ''; ?> value="ليبيا">ليبيا</option>
                    <option <?php echo $usersData['ur_country'] == 'مصر' ? 'selected' : ''; ?> value="مصر">مصر</option>
                    <option <?php echo $usersData['ur_country'] == 'آيسلندا' ? 'selected' : ''; ?> value="آيسلندا">آيسلندا</option>
                    <option <?php echo $usersData['ur_country'] == 'أذربيجان' ? 'selected' : ''; ?> value="أذربيجان">أذربيجان</option>
                    <option <?php echo $usersData['ur_country'] == 'أرمينيا' ? 'selected' : ''; ?> value="أرمينيا">أرمينيا</option>
                    <option <?php echo $usersData['ur_country'] == 'أستراليا' ? 'selected' : ''; ?> value="أستراليا">أستراليا</option>
                    <option <?php echo $usersData['ur_country'] == 'أفريقيا الوسطى' ? 'selected' : ''; ?> value="أفريقيا الوسطى">أفريقيا الوسطى</option>
                    <option <?php echo $usersData['ur_country'] == 'أفغانستان' ? 'selected' : ''; ?> value="أفغانستان">أفغانستان</option>
                    <option <?php echo $usersData['ur_country'] == 'ألبانيا' ? 'selected' : ''; ?> value="ألبانيا">ألبانيا</option>
                    <option <?php echo $usersData['ur_country'] == 'ألمانيا' ? 'selected' : ''; ?> value="ألمانيا">ألمانيا</option>
                    <option <?php echo $usersData['ur_country'] == 'أنغولا' ? 'selected' : ''; ?> value="أنغولا">أنغولا</option>
                    <option <?php echo $usersData['ur_country'] == 'أوروغواي' ? 'selected' : ''; ?> value="أوروغواي">أوروغواي</option>
                    <option <?php echo $usersData['ur_country'] == 'أوزبكستان' ? 'selected' : ''; ?> value="أوزبكستان">أوزبكستان</option>
                    <option <?php echo $usersData['ur_country'] == 'أوغندا' ? 'selected' : ''; ?> value="أوغندا">أوغندا</option>
                    <option <?php echo $usersData['ur_country'] == 'أوكرانيا' ? 'selected' : ''; ?> value="أوكرانيا">أوكرانيا</option>
                    <option <?php echo $usersData['ur_country'] == 'إثيوبيا' ? 'selected' : ''; ?> value="إثيوبيا">إثيوبيا</option>
                    <option <?php echo $usersData['ur_country'] == 'إريتريا' ? 'selected' : ''; ?> value="إريتريا">إريتريا</option>
                    <option <?php echo $usersData['ur_country'] == 'إسبانيا' ? 'selected' : ''; ?> value="إسبانيا">إسبانيا</option>
                    <option <?php echo $usersData['ur_country'] == 'إستونيا' ? 'selected' : ''; ?> value="إستونيا">إستونيا</option>
                    <option <?php echo $usersData['ur_country'] == 'إندونيسيا' ? 'selected' : ''; ?> value="إندونيسيا">إندونيسيا</option>
                    <option <?php echo $usersData['ur_country'] == 'إيران' ? 'selected' : ''; ?> value="إيران">إيران</option>
                    <option <?php echo $usersData['ur_country'] == 'إيطاليا' ? 'selected' : ''; ?> value="إيطاليا">إيطاليا</option>
                    <option <?php echo $usersData['ur_country'] == 'الأرجنتين' ? 'selected' : ''; ?> value="الأرجنتين">الأرجنتين</option>
                    <option <?php echo $usersData['ur_country'] == 'الإكوادور' ? 'selected' : ''; ?> value="الإكوادور">الإكوادور</option>
                    <option <?php echo $usersData['ur_country'] == 'البرازيل' ? 'selected' : ''; ?> value="البرازيل">البرازيل</option>
                    <option <?php echo $usersData['ur_country'] == 'البرتغال' ? 'selected' : ''; ?> value="البرتغال">البرتغال</option>
                    <option <?php echo $usersData['ur_country'] == 'البوسنة والهرسك' ? 'selected' : ''; ?> value="البوسنة والهرسك">البوسنة والهرسك</option>
                    <option <?php echo $usersData['ur_country'] == 'التشيك' ? 'selected' : ''; ?> value="التشيك">التشيك</option>
                    <option <?php echo $usersData['ur_country'] == 'الجبل الأسود' ? 'selected' : ''; ?> value="الجبل الأسود">الجبل الأسود</option>
                    <option <?php echo $usersData['ur_country'] == 'الدنمارك' ? 'selected' : ''; ?> value="الدنمارك">الدنمارك</option>
                    <option <?php echo $usersData['ur_country'] == 'الرأس الأخضر' ? 'selected' : ''; ?> value="الرأس الأخضر">الرأس الأخضر</option>
                    <option <?php echo $usersData['ur_country'] == 'السنغال' ? 'selected' : ''; ?> value="السنغال">السنغال</option>
                    <option <?php echo $usersData['ur_country'] == 'السودان' ? 'selected' : ''; ?> value="السودان">السودان</option>
                    <option <?php echo $usersData['ur_country'] == 'السويد' ? 'selected' : ''; ?> value="السويد">السويد</option>
                    <option <?php echo $usersData['ur_country'] == 'الصومال' ? 'selected' : ''; ?> value="الصومال">الصومال</option>
                    <option <?php echo $usersData['ur_country'] == 'الصين' ? 'selected' : ''; ?> value="الصين">الصين</option>
                    <option <?php echo $usersData['ur_country'] == 'الغابون' ? 'selected' : ''; ?> value="الغابون">الغابون</option>
                    <option <?php echo $usersData['ur_country'] == 'الفلبين' ? 'selected' : ''; ?> value="الفلبين">الفلبين</option>
                    <option <?php echo $usersData['ur_country'] == 'الكاميرون' ? 'selected' : ''; ?> value="الكاميرون">الكاميرون</option>
                    <option <?php echo $usersData['ur_country'] == 'الكونغو الديمقراطية' ? 'selected' : ''; ?> value="الكونغو الديمقراطية">الكونغو الديمقراطية</option>
                    <option <?php echo $usersData['ur_country'] == 'المكسيك' ? 'selected' : ''; ?> value="المكسيك">المكسيك</option>
                    <option <?php echo $usersData['ur_country'] == 'المملكة المتحدة' ? 'selected' : ''; ?> value="المملكة المتحدة">المملكة المتحدة</option>
                    <option <?php echo $usersData['ur_country'] == 'النرويج' ? 'selected' : ''; ?> value="النرويج">النرويج</option>
                    <option <?php echo $usersData['ur_country'] == 'النمسا' ? 'selected' : ''; ?> value="النمسا">النمسا</option>
                    <option <?php echo $usersData['ur_country'] == 'النيجر' ? 'selected' : ''; ?> value="النيجر">النيجر</option>
                    <option <?php echo $usersData['ur_country'] == 'الهند' ? 'selected' : ''; ?> value="الهند">الهند</option>
                    <option <?php echo $usersData['ur_country'] == 'الولايات المتحدة' ? 'selected' : ''; ?> value="الولايات المتحدة">الولايات المتحدة</option>
                    <option <?php echo $usersData['ur_country'] == 'اليابان' ? 'selected' : ''; ?> value="اليابان">اليابان</option>
                    <option <?php echo $usersData['ur_country'] == 'اليونان' ? 'selected' : ''; ?> value="اليونان">اليونان</option>
                    <option <?php echo $usersData['ur_country'] == 'ايرلندا' ? 'selected' : ''; ?> value="ايرلندا">ايرلندا</option>
                    <option <?php echo $usersData['ur_country'] == 'باراغواي' ? 'selected' : ''; ?> value="باراغواي">باراغواي</option>
                    <option <?php echo $usersData['ur_country'] == 'باكستان' ? 'selected' : ''; ?> value="باكستان">باكستان</option>
                    <option <?php echo $usersData['ur_country'] == 'بلجيكا' ? 'selected' : ''; ?> value="بلجيكا">بلجيكا</option>
                    <option <?php echo $usersData['ur_country'] == 'بلغاريا' ? 'selected' : ''; ?> value="بلغاريا">بلغاريا</option>
                    <option <?php echo $usersData['ur_country'] == 'بنغلاديش' ? 'selected' : ''; ?> value="بنغلاديش">بنغلاديش</option>
                    <option <?php echo $usersData['ur_country'] == 'بوتسوانا' ? 'selected' : ''; ?> value="بوتسوانا">بوتسوانا</option>
                    <option <?php echo $usersData['ur_country'] == 'بورما' ? 'selected' : ''; ?> value="بورما">بورما</option>
                    <option <?php echo $usersData['ur_country'] == 'بولندا' ? 'selected' : ''; ?> value="بولندا">بولندا</option>
                    <option <?php echo $usersData['ur_country'] == 'بوليفيا' ? 'selected' : ''; ?> value="بوليفيا">بوليفيا</option>
                    <option <?php echo $usersData['ur_country'] == 'بيرو' ? 'selected' : ''; ?> value="بيرو">بيرو</option>
                    <option <?php echo $usersData['ur_country'] == 'بيلاروسيا' ? 'selected' : ''; ?> value="بيلاروسيا">بيلاروسيا</option>
                    <option <?php echo $usersData['ur_country'] == 'بروناي' ? 'selected' : ''; ?> value="بروناي">بروناي</option>
                    <option <?php echo $usersData['ur_country'] == 'تايلاند' ? 'selected' : ''; ?> value="تايلاند">تايلاند</option>
                    <option <?php echo $usersData['ur_country'] == 'تايوان' ? 'selected' : ''; ?> value="تايوان">تايوان</option>
                    <option <?php echo $usersData['ur_country'] == 'تركمانستان' ? 'selected' : ''; ?> value="تركمانستان">تركمانستان</option>
                    <option <?php echo $usersData['ur_country'] == 'تركيا' ? 'selected' : ''; ?> value="تركيا">تركيا</option>
                    <option <?php echo $usersData['ur_country'] == 'تشاد' ? 'selected' : ''; ?> value="تشاد">تشاد</option>
                    <option <?php echo $usersData['ur_country'] == 'تشيلي' ? 'selected' : ''; ?> value="تشيلي">تشيلي</option>
                    <option <?php echo $usersData['ur_country'] == 'تنزانيا' ? 'selected' : ''; ?> value="تنزانيا">تنزانيا</option>
                    <option <?php echo $usersData['ur_country'] == 'توغو' ? 'selected' : ''; ?> value="توغو">توغو</option>
                    <option <?php echo $usersData['ur_country'] == 'جرينلاند' ? 'selected' : ''; ?> value="جرينلاند">جرينلاند</option>
                    <option <?php echo $usersData['ur_country'] == 'جمهورية الدومينيكان' ? 'selected' : ''; ?> value="جمهورية الدومينيكان">جمهورية الدومينيكان</option>
                    <option <?php echo $usersData['ur_country'] == 'جمهورية الكونغو' ? 'selected' : ''; ?> value="جمهورية الكونغو">جمهورية الكونغو</option>
                    <option <?php echo $usersData['ur_country'] == 'جنوب أفريقيا' ? 'selected' : ''; ?> value="جنوب أفريقيا">جنوب أفريقيا</option>
                    <option <?php echo $usersData['ur_country'] == 'جنوب السودان' ? 'selected' : ''; ?> value="جنوب السودان">جنوب السودان</option>
                    <option <?php echo $usersData['ur_country'] == 'جورجيا' ? 'selected' : ''; ?> value="جورجيا">جورجيا</option>
                    <option <?php echo $usersData['ur_country'] == 'جزر القمر' ? 'selected' : ''; ?> value="جزر القمر">جزر القمر</option> 
                    <option <?php echo $usersData['ur_country'] == 'جيبوتي' ? 'selected' : ''; ?> value="جيبوتي">جيبوتي</option>
                    <option <?php echo $usersData['ur_country'] == 'رواندا' ? 'selected' : ''; ?> value="رواندا">رواندا</option>
                    <option <?php echo $usersData['ur_country'] == 'روسيا' ? 'selected' : ''; ?> value="روسيا">روسيا</option>
                    <option <?php echo $usersData['ur_country'] == 'رومانيا' ? 'selected' : ''; ?> value="رومانيا">رومانيا</option>
                    <option <?php echo $usersData['ur_country'] == 'زامبيا' ? 'selected' : ''; ?> value="زامبيا">زامبيا</option>
                    <option <?php echo $usersData['ur_country'] == 'زيمبابوي' ? 'selected' : ''; ?> value="زيمبابوي">زيمبابوي</option>
                    <option <?php echo $usersData['ur_country'] == 'ساحل العاج' ? 'selected' : ''; ?> value="ساحل العاج">ساحل العاج</option>
                    <option <?php echo $usersData['ur_country'] == 'سريلانكا' ? 'selected' : ''; ?> value="سريلانكا">سريلانكا</option>
                    <option <?php echo $usersData['ur_country'] == 'سلوفاكيا' ? 'selected' : ''; ?> value="سلوفاكيا">سلوفاكيا</option>
                    <option <?php echo $usersData['ur_country'] == 'سلوفينيا' ? 'selected' : ''; ?> value="سلوفينيا">سلوفينيا</option>
                    <option <?php echo $usersData['ur_country'] == 'سنغافورة' ? 'selected' : ''; ?> value="سنغافورة">سنغافورة</option>
                    <option <?php echo $usersData['ur_country'] == 'سويسرا' ? 'selected' : ''; ?> value="سويسرا">سويسرا</option>
                    <option <?php echo $usersData['ur_country'] == 'صربيا' ? 'selected' : ''; ?> value="صربيا">صربيا</option>
                    <option <?php echo $usersData['ur_country'] == 'طاجيكستان' ? 'selected' : ''; ?> value="طاجيكستان">طاجيكستان</option>
                    <option <?php echo $usersData['ur_country'] == 'غامبيا' ? 'selected' : ''; ?> value="غامبيا">غامبيا</option>
                    <option <?php echo $usersData['ur_country'] == 'غانا' ? 'selected' : ''; ?> value="غانا">غانا</option>
                    <option <?php echo $usersData['ur_country'] == 'غويانا' ? 'selected' : ''; ?> value="غويانا">غويانا</option>
                    <option <?php echo $usersData['ur_country'] == 'غينيا' ? 'selected' : ''; ?> value="غينيا">غينيا</option>
                    <option <?php echo $usersData['ur_country'] == 'غينيا بيساو' ? 'selected' : ''; ?> value="غينيا بيساو">غينيا بيساو</option>
                    <option <?php echo $usersData['ur_country'] == 'فرنسا' ? 'selected' : ''; ?> value="فرنسا">فرنسا</option>
                    <option <?php echo $usersData['ur_country'] == 'فنزويلا' ? 'selected' : ''; ?> value="فنزويلا">فنزويلا</option>
                    <option <?php echo $usersData['ur_country'] == 'فنلندا' ? 'selected' : ''; ?> value="فنلندا">فنلندا</option>
                    <option <?php echo $usersData['ur_country'] == 'فيتنام' ? 'selected' : ''; ?> value="فيتنام">فيتنام</option>
                    <option <?php echo $usersData['ur_country'] == 'قبرص' ? 'selected' : ''; ?> value="قبرص">قبرص</option>
                    <option <?php echo $usersData['ur_country'] == 'قرغيزستان' ? 'selected' : ''; ?> value="قرغيزستان">قرغيزستان</option>
                    <option <?php echo $usersData['ur_country'] == 'كازاخستان' ? 'selected' : ''; ?> value="كازاخستان">كازاخستان</option>
                    <option <?php echo $usersData['ur_country'] == 'كرواتيا' ? 'selected' : ''; ?> value="كرواتيا">كرواتيا</option>
                    <option <?php echo $usersData['ur_country'] == 'كمبوديا' ? 'selected' : ''; ?> value="كمبوديا">كمبوديا</option>
                    <option <?php echo $usersData['ur_country'] == 'كندا' ? 'selected' : ''; ?> value="كندا">كندا</option>
                    <option <?php echo $usersData['ur_country'] == 'كوبا' ? 'selected' : ''; ?> value="كوبا">كوبا</option>
                    <option <?php echo $usersData['ur_country'] == 'كوريا الجنوبية' ? 'selected' : ''; ?> value="كوريا الجنوبية">كوريا الجنوبية</option>
                    <option <?php echo $usersData['ur_country'] == 'كوريا الشمالية' ? 'selected' : ''; ?> value="كوريا الشمالية">كوريا الشمالية</option>
                    <option <?php echo $usersData['ur_country'] == 'كولومبيا' ? 'selected' : ''; ?> value="كولومبيا">كولومبيا</option>
                    <option <?php echo $usersData['ur_country'] == 'كينيا' ? 'selected' : ''; ?> value="كينيا">كينيا</option>
                    <option <?php echo $usersData['ur_country'] == 'لاتفيا' ? 'selected' : ''; ?> value="لاتفيا">لاتفيا</option>
                    <option <?php echo $usersData['ur_country'] == 'لاوس' ? 'selected' : ''; ?> value="لاوس">لاوس</option>
                    <option <?php echo $usersData['ur_country'] == 'لوكسمبورغ' ? 'selected' : ''; ?> value="لوكسمبورغ">لوكسمبورغ</option>
                    <option <?php echo $usersData['ur_country'] == 'ليبيريا' ? 'selected' : ''; ?> value="ليبيريا">ليبيريا</option>
                    <option <?php echo $usersData['ur_country'] == 'ليتوانيا' ? 'selected' : ''; ?> value="ليتوانيا">ليتوانيا</option>
                    <option <?php echo $usersData['ur_country'] == 'مالاوي' ? 'selected' : ''; ?> value="مالاوي">مالاوي</option>
                    <option <?php echo $usersData['ur_country'] == 'مالطا' ? 'selected' : ''; ?> value="مالطا">مالطا</option>
                    <option <?php echo $usersData['ur_country'] == 'مالي' ? 'selected' : ''; ?> value="مالي">مالي</option>
                    <option <?php echo $usersData['ur_country'] == 'ماليزيا' ? 'selected' : ''; ?> value="ماليزيا">ماليزيا</option>
                    <option <?php echo $usersData['ur_country'] == 'مدغشقر' ? 'selected' : ''; ?> value="مدغشقر">مدغشقر</option>
                    <option <?php echo $usersData['ur_country'] == 'مقدونيا' ? 'selected' : ''; ?> value="مقدونيا">مقدونيا</option>
                    <option <?php echo $usersData['ur_country'] == 'منغوليا' ? 'selected' : ''; ?> value="منغوليا">منغوليا</option>
                    <option <?php echo $usersData['ur_country'] == 'موريتانيا' ? 'selected' : ''; ?> value="موريتانيا">موريتانيا</option>
                    <option <?php echo $usersData['ur_country'] == 'موزمبيق' ? 'selected' : ''; ?> value="موزمبيق">موزمبيق</option>
                    <option <?php echo $usersData['ur_country'] == 'مولدوفا' ? 'selected' : ''; ?> value="مولدوفا">مولدوفا</option>
                    <option <?php echo $usersData['ur_country'] == 'ناميبيا' ? 'selected' : ''; ?> value="ناميبيا">ناميبيا</option>
                    <option <?php echo $usersData['ur_country'] == 'نيبال' ? 'selected' : ''; ?> value="نيبال">نيبال</option>
                    <option <?php echo $usersData['ur_country'] == 'نيجيريا' ? 'selected' : ''; ?> value="نيجيريا">نيجيريا</option>
                    <option <?php echo $usersData['ur_country'] == 'نيكاراجوا' ? 'selected' : ''; ?> value="نيكاراجوا">نيكاراجوا</option>
                    <option <?php echo $usersData['ur_country'] == 'نيوزيلندا' ? 'selected' : ''; ?> value="نيوزيلندا">نيوزيلندا</option>
                    <option <?php echo $usersData['ur_country'] == 'هايتي' ? 'selected' : ''; ?> value="هايتي">هايتي</option>
                    <option <?php echo $usersData['ur_country'] == 'هندوراس' ? 'selected' : ''; ?> value="هندوراس">هندوراس</option>
                    <option <?php echo $usersData['ur_country'] == 'هنغاريا' ? 'selected' : ''; ?> value="هنغاريا">هنغاريا</option>
                    <option <?php echo $usersData['ur_country'] == 'هولندا' ? 'selected' : ''; ?> value="هولندا">هولندا</option>
                    <option <?php echo $usersData['ur_country'] == 'هونغ كونغ' ? 'selected' : ''; ?> value="هونغ كونغ">هونغ كونغ</option>
                    <option <?php echo $usersData['ur_country'] == 'دار السلام' ? 'selected' : ''; ?> value="دار السلام">دار السلام</option>
                </select>
                <span class="help-block">

                </span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3">  دولة الاقامة
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-4">
                <select name="country_stay" class="form-control">
                    <option> -- يرجى الاختيار --</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الأردن' ? 'selected' : ''; ?> value="الأردن">الأردن</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الإمارات' ? 'selected' : ''; ?> value="الإمارات">الإمارات</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'البحرين' ? 'selected' : ''; ?> value="البحرين">البحرين</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الجزائر' ? 'selected' : ''; ?> value="الجزائر">الجزائر</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'السعودية' ? 'selected' : ''; ?> value="السعودية">السعودية</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'العراق' ? 'selected' : ''; ?> value="العراق">العراق</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الكويت' ? 'selected' : ''; ?> value="الكويت">الكويت</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'المغرب' ? 'selected' : ''; ?> value="المغرب">المغرب</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'اليمن' ? 'selected' : ''; ?> value="اليمن">اليمن</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'تونس' ? 'selected' : ''; ?> value="تونس">تونس</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'سلطنة عمان' ? 'selected' : ''; ?> value="سلطنة عمان">سلطنة عمان</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'سوريا' ? 'selected' : ''; ?> value="سوريا">سوريا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'فلسطين' ? 'selected' : ''; ?> value="فلسطين">فلسطين</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'قطر' ? 'selected' : ''; ?> value="قطر">قطر</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'لبنان' ? 'selected' : ''; ?> value="لبنان">لبنان</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'ليبيا' ? 'selected' : ''; ?> value="ليبيا">ليبيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'مصر' ? 'selected' : ''; ?> value="مصر">مصر</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'آيسلندا' ? 'selected' : ''; ?> value="آيسلندا">آيسلندا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'أذربيجان' ? 'selected' : ''; ?> value="أذربيجان">أذربيجان</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'أرمينيا' ? 'selected' : ''; ?> value="أرمينيا">أرمينيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'أستراليا' ? 'selected' : ''; ?> value="أستراليا">أستراليا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'أفريقيا الوسطى' ? 'selected' : ''; ?> value="أفريقيا الوسطى">أفريقيا الوسطى</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'أفغانستان' ? 'selected' : ''; ?> value="أفغانستان">أفغانستان</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'ألبانيا' ? 'selected' : ''; ?> value="ألبانيا">ألبانيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'ألمانيا' ? 'selected' : ''; ?> value="ألمانيا">ألمانيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'أنغولا' ? 'selected' : ''; ?> value="أنغولا">أنغولا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'أوروغواي' ? 'selected' : ''; ?> value="أوروغواي">أوروغواي</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'أوزبكستان' ? 'selected' : ''; ?> value="أوزبكستان">أوزبكستان</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'أوغندا' ? 'selected' : ''; ?> value="أوغندا">أوغندا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'أوكرانيا' ? 'selected' : ''; ?> value="أوكرانيا">أوكرانيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'إثيوبيا' ? 'selected' : ''; ?> value="إثيوبيا">إثيوبيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'إريتريا' ? 'selected' : ''; ?> value="إريتريا">إريتريا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'إسبانيا' ? 'selected' : ''; ?> value="إسبانيا">إسبانيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'إستونيا' ? 'selected' : ''; ?> value="إستونيا">إستونيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'إندونيسيا' ? 'selected' : ''; ?> value="إندونيسيا">إندونيسيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'إيران' ? 'selected' : ''; ?> value="إيران">إيران</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'إيطاليا' ? 'selected' : ''; ?> value="إيطاليا">إيطاليا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الأرجنتين' ? 'selected' : ''; ?> value="الأرجنتين">الأرجنتين</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الإكوادور' ? 'selected' : ''; ?> value="الإكوادور">الإكوادور</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'البرازيل' ? 'selected' : ''; ?> value="البرازيل">البرازيل</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'البرتغال' ? 'selected' : ''; ?> value="البرتغال">البرتغال</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'البوسنة والهرسك' ? 'selected' : ''; ?> value="البوسنة والهرسك">البوسنة والهرسك</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'التشيك' ? 'selected' : ''; ?> value="التشيك">التشيك</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الجبل الأسود' ? 'selected' : ''; ?> value="الجبل الأسود">الجبل الأسود</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الدنمارك' ? 'selected' : ''; ?> value="الدنمارك">الدنمارك</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الرأس الأخضر' ? 'selected' : ''; ?> value="الرأس الأخضر">الرأس الأخضر</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'السنغال' ? 'selected' : ''; ?> value="السنغال">السنغال</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'السودان' ? 'selected' : ''; ?> value="السودان">السودان</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'السويد' ? 'selected' : ''; ?> value="السويد">السويد</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الصومال' ? 'selected' : ''; ?> value="الصومال">الصومال</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الصين' ? 'selected' : ''; ?> value="الصين">الصين</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الغابون' ? 'selected' : ''; ?> value="الغابون">الغابون</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الفلبين' ? 'selected' : ''; ?> value="الفلبين">الفلبين</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الكاميرون' ? 'selected' : ''; ?> value="الكاميرون">الكاميرون</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الكونغو الديمقراطية' ? 'selected' : ''; ?> value="الكونغو الديمقراطية">الكونغو الديمقراطية</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'المكسيك' ? 'selected' : ''; ?> value="المكسيك">المكسيك</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'المملكة المتحدة' ? 'selected' : ''; ?> value="المملكة المتحدة">المملكة المتحدة</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'النرويج' ? 'selected' : ''; ?> value="النرويج">النرويج</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'النمسا' ? 'selected' : ''; ?> value="النمسا">النمسا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'النيجر' ? 'selected' : ''; ?> value="النيجر">النيجر</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الهند' ? 'selected' : ''; ?> value="الهند">الهند</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'الولايات المتحدة' ? 'selected' : ''; ?> value="الولايات المتحدة">الولايات المتحدة</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'اليابان' ? 'selected' : ''; ?> value="اليابان">اليابان</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'اليونان' ? 'selected' : ''; ?> value="اليونان">اليونان</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'ايرلندا' ? 'selected' : ''; ?> value="ايرلندا">ايرلندا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'باراغواي' ? 'selected' : ''; ?> value="باراغواي">باراغواي</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'باكستان' ? 'selected' : ''; ?> value="باكستان">باكستان</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'بلجيكا' ? 'selected' : ''; ?> value="بلجيكا">بلجيكا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'بلغاريا' ? 'selected' : ''; ?> value="بلغاريا">بلغاريا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'بنغلاديش' ? 'selected' : ''; ?> value="بنغلاديش">بنغلاديش</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'بوتسوانا' ? 'selected' : ''; ?> value="بوتسوانا">بوتسوانا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'بورما' ? 'selected' : ''; ?> value="بورما">بورما</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'بولندا' ? 'selected' : ''; ?> value="بولندا">بولندا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'بوليفيا' ? 'selected' : ''; ?> value="بوليفيا">بوليفيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'بيرو' ? 'selected' : ''; ?> value="بيرو">بيرو</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'بيلاروسيا' ? 'selected' : ''; ?> value="بيلاروسيا">بيلاروسيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'تايلاند' ? 'selected' : ''; ?> value="تايلاند">تايلاند</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'تايوان' ? 'selected' : ''; ?> value="تايوان">تايوان</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'تركمانستان' ? 'selected' : ''; ?> value="تركمانستان">تركمانستان</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'تركيا' ? 'selected' : ''; ?> value="تركيا">تركيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'تشاد' ? 'selected' : ''; ?> value="تشاد">تشاد</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'تشيلي' ? 'selected' : ''; ?> value="تشيلي">تشيلي</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'تنزانيا' ? 'selected' : ''; ?> value="تنزانيا">تنزانيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'توغو' ? 'selected' : ''; ?> value="توغو">توغو</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'جرينلاند' ? 'selected' : ''; ?> value="جرينلاند">جرينلاند</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'جمهورية الدومينيكان' ? 'selected' : ''; ?> value="جمهورية الدومينيكان">جمهورية الدومينيكان</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'جمهورية الكونغو' ? 'selected' : ''; ?> value="جمهورية الكونغو">جمهورية الكونغو</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'جنوب أفريقيا' ? 'selected' : ''; ?> value="جنوب أفريقيا">جنوب أفريقيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'جنوب السودان' ? 'selected' : ''; ?> value="جنوب السودان">جنوب السودان</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'جورجيا' ? 'selected' : ''; ?> value="جورجيا">جورجيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'جيبوتي' ? 'selected' : ''; ?> value="جيبوتي">جيبوتي</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'رواندا' ? 'selected' : ''; ?> value="رواندا">رواندا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'روسيا' ? 'selected' : ''; ?> value="روسيا">روسيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'رومانيا' ? 'selected' : ''; ?> value="رومانيا">رومانيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'زامبيا' ? 'selected' : ''; ?> value="زامبيا">زامبيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'زيمبابوي' ? 'selected' : ''; ?> value="زيمبابوي">زيمبابوي</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'ساحل العاج' ? 'selected' : ''; ?> value="ساحل العاج">ساحل العاج</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'سريلانكا' ? 'selected' : ''; ?> value="سريلانكا">سريلانكا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'سلوفاكيا' ? 'selected' : ''; ?> value="سلوفاكيا">سلوفاكيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'سلوفينيا' ? 'selected' : ''; ?> value="سلوفينيا">سلوفينيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'سنغافورة' ? 'selected' : ''; ?> value="سنغافورة">سنغافورة</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'سويسرا' ? 'selected' : ''; ?> value="سويسرا">سويسرا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'صربيا' ? 'selected' : ''; ?> value="صربيا">صربيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'طاجيكستان' ? 'selected' : ''; ?> value="طاجيكستان">طاجيكستان</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'غامبيا' ? 'selected' : ''; ?> value="غامبيا">غامبيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'غانا' ? 'selected' : ''; ?> value="غانا">غانا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'غويانا' ? 'selected' : ''; ?> value="غويانا">غويانا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'غينيا' ? 'selected' : ''; ?> value="غينيا">غينيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'غينيا بيساو' ? 'selected' : ''; ?> value="غينيا بيساو">غينيا بيساو</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'فرنسا' ? 'selected' : ''; ?> value="فرنسا">فرنسا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'فنزويلا' ? 'selected' : ''; ?> value="فنزويلا">فنزويلا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'فنلندا' ? 'selected' : ''; ?> value="فنلندا">فنلندا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'فيتنام' ? 'selected' : ''; ?> value="فيتنام">فيتنام</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'قبرص' ? 'selected' : ''; ?> value="قبرص">قبرص</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'قرغيزستان' ? 'selected' : ''; ?> value="قرغيزستان">قرغيزستان</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'كازاخستان' ? 'selected' : ''; ?> value="كازاخستان">كازاخستان</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'كرواتيا' ? 'selected' : ''; ?> value="كرواتيا">كرواتيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'كمبوديا' ? 'selected' : ''; ?> value="كمبوديا">كمبوديا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'كندا' ? 'selected' : ''; ?> value="كندا">كندا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'كوبا' ? 'selected' : ''; ?> value="كوبا">كوبا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'كوريا الجنوبية' ? 'selected' : ''; ?> value="كوريا الجنوبية">كوريا الجنوبية</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'كوريا الشمالية' ? 'selected' : ''; ?> value="كوريا الشمالية">كوريا الشمالية</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'كولومبيا' ? 'selected' : ''; ?> value="كولومبيا">كولومبيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'كينيا' ? 'selected' : ''; ?> value="كينيا">كينيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'لاتفيا' ? 'selected' : ''; ?> value="لاتفيا">لاتفيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'لاوس' ? 'selected' : ''; ?> value="لاوس">لاوس</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'لوكسمبورغ' ? 'selected' : ''; ?> value="لوكسمبورغ">لوكسمبورغ</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'ليبيريا' ? 'selected' : ''; ?> value="ليبيريا">ليبيريا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'ليتوانيا' ? 'selected' : ''; ?> value="ليتوانيا">ليتوانيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'مالاوي' ? 'selected' : ''; ?> value="مالاوي">مالاوي</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'مالطا' ? 'selected' : ''; ?> value="مالطا">مالطا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'مالي' ? 'selected' : ''; ?> value="مالي">مالي</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'ماليزيا' ? 'selected' : ''; ?> value="ماليزيا">ماليزيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'مدغشقر' ? 'selected' : ''; ?> value="مدغشقر">مدغشقر</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'مقدونيا' ? 'selected' : ''; ?> value="مقدونيا">مقدونيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'منغوليا' ? 'selected' : ''; ?> value="منغوليا">منغوليا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'موريتانيا' ? 'selected' : ''; ?> value="موريتانيا">موريتانيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'موزمبيق' ? 'selected' : ''; ?> value="موزمبيق">موزمبيق</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'مولدوفا' ? 'selected' : ''; ?> value="مولدوفا">مولدوفا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'ناميبيا' ? 'selected' : ''; ?> value="ناميبيا">ناميبيا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'نيبال' ? 'selected' : ''; ?> value="نيبال">نيبال</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'نيجيريا' ? 'selected' : ''; ?> value="نيجيريا">نيجيريا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'نيكاراجوا' ? 'selected' : ''; ?> value="نيكاراجوا">نيكاراجوا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'نيوزيلندا' ? 'selected' : ''; ?> value="نيوزيلندا">نيوزيلندا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'هايتي' ? 'selected' : ''; ?> value="هايتي">هايتي</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'هندوراس' ? 'selected' : ''; ?> value="هندوراس">هندوراس</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'هنغاريا' ? 'selected' : ''; ?> value="هنغاريا">هنغاريا</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'هونغ كونغ' ? 'selected' : ''; ?> value="هونغ كونغ">هونغ كونغ</option>
                    <option <?php echo $usersData['ur_country_stay'] == 'هولندا' ? 'selected' : ''; ?> value="هولندا">هولندا</option>
                </select>
                <span class="help-block">

                </span>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-md-3"> مستوى العضوية
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-4">
                <select name="level_id" class="form-control">
                    <?php
                    for ($i = 0; $i < count($usersLevel); $i++) {
                        echo "<option ";
                        echo $usersData['ur_level_id'] == $usersLevel[$i]['ul_id'] ? 'selected' : '';
                        echo " value='{$usersLevel[$i]['ul_id']}'>{$usersLevel[$i]['ul_name']}</option>";
                    }
                    ?>
                </select>
                <span class="help-block">

                </span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3"> مفعل
                <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-4">
                <input type="checkbox"  <?php echo $usersData['ur_is_active'] == '1' ? 'checked' : '' ?> name="is_active">
                <span class="help-block">
                </span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3"> صورة <span class="required">
                    *
                </span>
            </label>
            <div class="col-md-4">
                <input type="file" name="userfile">
                <span class="help-block"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3">  <span class="required">

                </span>
            </label>
            <div class="col-md-4">
                <?php if ($usersData['ur_photo'] != '') { ?>
                    <img alt="not fund" width="200" height="200" src="<?php echo HOST_NAME . 'upload/' . $usersData['ur_photo']; ?>">
                <?php } else {
                    if ($usersData['ur_gender'] == 0) {
                        ?>
                        <img alt="not fund" width="200" height="200" src="<?php echo HOST_NAME . 'upload/mail-defulee.png'; ?>">
                    <?php } else { ?>
                        <img alt="not fund" width="200" height="200" src="<?php echo HOST_NAME . 'upload/female-defulte.png'; ?>">
                    <?php } ?>

                <?php } ?>

            </div>
        </div>

        <h2>البيانات الشخصيه</h2>
        <div class="form-group">
            <label class="label-title control-label col-md-3 " for="exampleInputEmail1">التعليم</label>
            <div class="col-md-4">
                <select class="form-control" name="learn">
                    <option <?php echo $usersData['usp_learn'] == 'غير محدد' ? 'selected' : '' ?> value="غير محدد">غير محدد</option>
                    <option <?php echo $usersData['usp_learn'] == 'إبتدائي' ? 'selected' : '' ?> value="إبتدائي">إبتدائي</option>
                    <option <?php echo $usersData['usp_learn'] == 'إعدادي' ? 'selected' : '' ?> value="إعدادي">إعدادي</option>
                    <option <?php echo $usersData['usp_learn'] == 'ثانوي' ? 'selected' : '' ?> value="ثانوي">ثانوي</option>
                    <option <?php echo $usersData['usp_learn'] == 'تكوين مهني' ? 'selected' : '' ?> value="تكوين مهني">تكوين مهني</option>
                    <option <?php echo $usersData['usp_learn'] == 'درجة البكالوريوس' ? 'selected' : '' ?> value="درجة البكالوريوس">درجة البكالوريوس</option>
                    <option <?php echo $usersData['usp_learn'] == 'درجة الماجستير' ? 'selected' : '' ?> value="درجة الماجستير">درجة الماجستير</option>
                    <option <?php echo $usersData['usp_learn'] == 'درجة الدكتوراه' ? 'selected' : '' ?> value="درجة الدكتوراه">درجة الدكتوراه</option>
                    <option <?php echo $usersData['usp_learn'] == 'مدرسة الحياة' ? 'selected' : '' ?> value="مدرسة الحياة">مدرسة الحياة</option>
                    <option <?php echo $usersData['usp_learn'] == 'بعض السنوات الجامعية' ? 'selected' : '' ?> value="بعض السنوات الجامعية">بعض السنوات الجامعية</option>
                </select>
                <div class="error"><?php echo form_error('learn'); ?></div>
            </div>
        </div>
        <div class="form-group">
            <label class="label-title control-label col-md-3 " for="exampleInputEmail1">العمل</label>
            <div class="col-md-4">
                <select class="form-control" name="work">
                    <option <?php echo $usersData['usp_work'] == 'غير محدد' ? 'selected' : '' ?> value="غير محدد">غير محدد</option>
                    <option <?php echo $usersData['usp_work'] == 'طالب' ? 'selected' : '' ?> value="طالب">طالب</option>
                    <option <?php echo $usersData['usp_work'] == 'موظف حكومي' ? 'selected' : '' ?> value="موظف حكومي">موظف حكومي</option>
                    <option <?php echo $usersData['usp_work'] == 'موظف قطاع خاص' ? 'selected' : '' ?> value="موظف قطاع خاص">موظف قطاع خاص</option>
                    <option <?php echo $usersData['usp_work'] == 'مدير' ? 'selected' : '' ?> value="مدير">مدير</option>
                    <option <?php echo $usersData['usp_work'] == 'أعمال حرة' ? 'selected' : '' ?> value="أعمال حرة">أعمال حرة</option>
                    <option <?php echo $usersData['usp_work'] == 'عاطل عن العمل' ? 'selected' : '' ?> value="عاطل عن العمل">عاطل عن العمل</option>
                    <option <?php echo $usersData['usp_work'] == 'متقاعد' ? 'selected' : '' ?> value="متقاعد">متقاعد</option>
                </select>
            </div>   
            <div class="error"><?php echo form_error('work'); ?></div>
        </div>
        <div class="form-group">
            <label class="label-title control-label col-md-3 " for="exampleInputEmail1">مجال العمل</label>
            <div class="col-md-4">
                <select class="form-control" name="work_field">
                    <option <?php echo $usersData['usp_work_field'] == 'غير محدد' ? 'selected' : '' ?> value="غير محدد">غير محدد</option>
                    <option <?php echo $usersData['usp_work_field'] == 'سكرتريا' ? 'selected' : '' ?> value="سكرتريا">سكرتريا</option>
                    <option <?php echo $usersData['usp_work_field'] == 'الإدارة' ? 'selected' : '' ?> value="الإدارة">الإدارة</option>
                    <option <?php echo $usersData['usp_work_field'] == 'الإعلانات' ? 'selected' : '' ?> value="الإعلانات">الإعلانات</option>
                    <option <?php echo $usersData['usp_work_field'] == 'التسيير' ? 'selected' : '' ?> value="التسيير">التسيير</option>
                    <option <?php echo $usersData['usp_work_field'] == 'المالي والمصرفي' ? 'selected' : '' ?> value="المالي والمصرفي">المالي والمصرفي</option>
                    <option <?php echo $usersData['usp_work_field'] == 'الصحافة والإعلام' ? 'selected' : '' ?> value="الصحافة والإعلام">الصحافة والإعلام</option>
                    <option <?php echo $usersData['usp_work_field'] == 'المجال الفني والإبداعي' ? 'selected' : '' ?> value="المجال الفني والإبداعي">المجال الفني والإبداعي</option>
                    <option <?php echo $usersData['usp_work_field'] == 'الترفيه' ? 'selected' : '' ?> value="الترفيه">الترفيه</option>
                    <option <?php echo $usersData['usp_work_field'] == 'الحلاقة والتجميل' ? 'selected' : '' ?> value="الحلاقة والتجميل">الحلاقة والتجميل</option>
                    <option <?php echo $usersData['usp_work_field'] == 'المبيعات' ? 'selected' : '' ?> value="المبيعات">المبيعات</option>
                    <option <?php echo $usersData['usp_work_field'] == 'مجال المطاعم' ? 'selected' : '' ?> value="مجال المطاعم">مجال المطاعم</option>
                    <option <?php echo $usersData['usp_work_field'] == 'أعمال منزلية' ? 'selected' : '' ?> value="أعمال منزلية">أعمال منزلية</option>
                    <option <?php echo $usersData['usp_work_field'] == 'رعاية الأطفال' ? 'selected' : '' ?> value="رعاية الأطفال">رعاية الأطفال</option>
                    <option <?php echo $usersData['usp_work_field'] == 'أعمال اجتماعية' ? 'selected' : '' ?> value="أعمال اجتماعية">أعمال اجتماعية</option>
                    <option <?php echo $usersData['usp_work_field'] == 'أعمال تطوعية' ? 'selected' : '' ?> value="أعمال تطوعية">أعمال تطوعية</option>
                    <option <?php echo $usersData['usp_work_field'] == 'الصيدلة' ? 'selected' : '' ?> value="الصيدلة">الصيدلة</option>
                    <option <?php echo $usersData['usp_work_field'] == 'المساعدة الطبية' ? 'selected' : '' ?> value="المساعدة الطبية">المساعدة الطبية</option>
                    <option <?php echo $usersData['usp_work_field'] == 'الطب' ? 'selected' : '' ?> value="الطب">الطب</option>
                    <option <?php echo $usersData['usp_work_field'] == 'طب الأسنان' ? 'selected' : '' ?> value="طب الأسنان">طب الأسنان</option>
                    <option <?php echo $usersData['usp_work_field'] == 'البيطرة' ? 'selected' : '' ?> value="البيطرة">البيطرة</option>
                    <option <?php echo $usersData['usp_work_field'] == 'الهندسة' ? 'selected' : '' ?> value="الهندسة">الهندسة</option>
                    <option <?php echo $usersData['usp_work_field'] == 'التكنولوجيا والتواصل' ? 'selected' : '' ?> value="التكنولوجيا والتواصل">التكنولوجيا والتواصل</option>
                    <option <?php echo $usersData['usp_work_field'] == 'الصناعة' ? 'selected' : '' ?> value="الصناعة">الصناعة</option>
                    <option <?php echo $usersData['usp_work_field'] == 'البناء' ? 'selected' : '' ?> value="البناء">البناء</option>
                    <option <?php echo $usersData['usp_work_field'] == 'الأعمال الحرفية' ? 'selected' : '' ?> value="الأعمال الحرفي">الأعمال الحرفية</option>
                    <option <?php echo $usersData['usp_work_field'] == 'الزراعة والمواشي' ? 'selected' : '' ?> value="الزراعة والمواشي">الزراعة والمواشي</option>
                    <option <?php echo $usersData['usp_work_field'] == 'الشرطة' ? 'selected' : '' ?> value="الشرطة">الشرطة</option>
                    <option <?php echo $usersData['usp_work_field'] == 'الأمن' ? 'selected' : '' ?> value="الأمن">الأمن</option>
                    <option <?php echo $usersData['usp_work_field'] == 'دفاع مدني' ? 'selected' : '' ?> value="دفاع مدني">دفاع مدني</option>
                    <option <?php echo $usersData['usp_work_field'] == 'المجال العسكري' ? 'selected' : '' ?> value="المجال العسكري">المجال العسكري</option>
                    <option <?php echo $usersData['usp_work_field'] == 'المجال السياسي' ? 'selected' : '' ?> value="المجال السياسي">المجال السياسي</option>
                    <option <?php echo $usersData['usp_work_field'] == 'المجال القانوني' ? 'selected' : '' ?> value="المجال القانوني">المجال القانوني</option>
                    <option <?php echo $usersData['usp_work_field'] == 'التعليم' ? 'selected' : '' ?> value="التعليم">التعليم</option>
                    <option <?php echo $usersData['usp_work_field'] == 'متقاعد' ? 'selected' : '' ?> value="الأكاديمي والبحوث">الأكاديمي والبحوث</option>
                    <option <?php echo $usersData['usp_work_field'] == 'المجال الرياضي' ? 'selected' : '' ?> value="المجال الرياضي">المجال الرياضي</option>
                    <option <?php echo $usersData['usp_work_field'] == 'المواصلات' ? 'selected' : '' ?> value="المواصلات">المواصلات</option>
                    <option <?php echo $usersData['usp_work_field'] == 'السياحة' ? 'selected' : '' ?> value="السياحة">السياحة</option>
                </select>
            </div>
            <div class="error"><?php echo form_error('work_field'); ?></div>
        </div>
        <div class="form-group">
            <label class="label-title control-label col-md-3 " for="exampleInputEmail1">الدخل الشهرى</label>
            <div class="col-md-4">
                <select class="form-control" name="monthly_income">
                    <option>(انا دخلى)</option>
                    <option <?php echo $usersData['usp_monthly_income'] == 'لا احب ان اقول' ? 'selected' : '' ?> value="لا احب ان اقول">لا احب ان اقول</option>
                    <option <?php echo $usersData['usp_monthly_income'] == '100' ? 'selected' : '' ?> value="100">$100</option>
                    <option <?php echo $usersData['usp_monthly_income'] == '500' ? 'selected' : '' ?> value="500">$500</option>
                    <option <?php echo $usersData['usp_monthly_income'] == '1000' ? 'selected' : '' ?> value="1000">$1000</option>
                    <option <?php echo $usersData['usp_monthly_income'] == '2000' ? 'selected' : '' ?> value="2000">$2000</option>
                    <option <?php echo $usersData['usp_monthly_income'] == '3000' ? 'selected' : '' ?> value="3000">$3000 +</option>
                </select>
            </div>    
            <div class="error"><?php echo form_error('monthly_income'); ?></div>
        </div>
        <div class="form-group">
            <label class="label-title control-label col-md-3 " for="exampleInputEmail1">  بنية الجسم </label>
            <div class="col-md-4">
                <select class="form-control" name="physique">
                    <option <?php echo $usersData['usp_physique'] == 'غير محدد' ? 'selected' : '' ?> value="غير محدد">غير محدد</option>
                    <option <?php echo $usersData['usp_physique'] == 'صغير' ? 'selected' : '' ?> value="صغير">صغير</option>
                    <option <?php echo $usersData['usp_physique'] == 'نحيف' ? 'selected' : '' ?> value="نحيف">نحيف</option>
                    <option <?php echo $usersData['usp_physique'] == 'عادي' ? 'selected' : '' ?> value="عادي">عادي</option>
                    <option <?php echo $usersData['usp_physique'] == 'رياضي' ? 'selected' : '' ?> value="رياضي">رياضي</option>
                    <option <?php echo $usersData['usp_physique'] == 'قوام متناسب' ? 'selected' : '' ?> value="قوام متناسب">قوام متناسب</option>
                    <option <?php echo $usersData['usp_physique'] == 'زيادة في بعض الكيلوغرامات' ? 'selected' : '' ?> value="زيادة في بعض الكيلوغرامات">زيادة في بعض الكيلوغرامات</option>
                    <option <?php echo $usersData['usp_physique'] == 'ممتلئ' ? 'selected' : '' ?> value="ممتلئ">ممتلئ</option>
                    <option <?php echo $usersData['usp_physique'] == 'ضخم' ? 'selected' : '' ?> value="ضخم">ضخم</option>
                </select>
            </div>    
            <div class="error"><?php echo form_error('physique'); ?></div>
        </div>



    </div>





    <div class="form-group">
        <label class="label-title control-label col-md-3 " for="exampleInputEmail1">حالة السكن</label>
        <div class="col-md-4">
            <select class="form-control" name="housing_case">
                <option <?php echo $usersData['usp_housing_case'] == 'غير محدد' ? 'selected' : '' ?> value="غير محدد">غير محدد</option>
                <option <?php echo $usersData['usp_housing_case'] == 'أعيش وحدي' ? 'selected' : '' ?> value="أعيش وحدي">أعيش وحدي</option>
                <option <?php echo $usersData['usp_housing_case'] == 'أعيش مع أصدقاء' ? 'selected' : '' ?> value="أعيش مع أصدقاء">أعيش مع أصدقاء</option>
                <option <?php echo $usersData['usp_housing_case'] == 'أعيش مع أهلي' ? 'selected' : '' ?> value="أعيش مع أهلي">أعيش مع أهلي</option>
                <option <?php echo $usersData['usp_housing_case'] == 'أعيش مع أسرتي الصغيرة' ? 'selected' : '' ?> value="أعيش مع أسرتي الصغيرة">أعيش مع أسرتي الصغيرة</option>
                <option <?php echo $usersData['usp_housing_case'] == 'أعيش مع أطفالي' ? 'selected' : '' ?> value="أعيش مع أطفالي">أعيش مع أطفالي</option>
                <option <?php echo $usersData['usp_housing_case'] == 'غير ذلك' ? 'selected' : '' ?> value="غير ذلك">غير ذلك</option>
            </select>
        </div>
        <div class="error"><?php echo form_error('housing_case'); ?></div>
    </div>
    <div class="form-group">
        <label class="label-title control-label col-md-3 " for="exampleInputEmail1">الأستعدادية للتنقل</label>
        <div class="col-md-4">
            <select class="form-control" name="ready_move">
                <option <?php echo $usersData['usp_ready_move'] == 'غير محدد' ? 'selected' : '' ?> value="غير محدد">غير محدد</option>
                <option <?php echo $usersData['usp_ready_move'] == 'أريد أن أظل في منزلي' ? 'selected' : '' ?> value="أريد أن أظل في منزلي">أريد أن أظل في منزلي</option>
                <option <?php echo $usersData['usp_ready_move'] == 'داخل منطقتي' ? 'selected' : '' ?> value="داخل منطقتي">داخل منطقتي</option>
                <option <?php echo $usersData['usp_ready_move'] == 'داخل بلدي' ? 'selected' : '' ?> value="داخل بلدي">داخل بلدي</option>
                <option <?php echo $usersData['usp_ready_move'] == 'بلد مجاور' ? 'selected' : '' ?> value="بلد مجاور">بلد مجاور</option>
                <option <?php echo $usersData['usp_ready_move'] == 'إلى بلد آخر' ? 'selected' : '' ?> value="إلى بلد آخر">إلى بلد آخر</option>
                <option <?php echo $usersData['usp_ready_move'] == 'غير متأكد' ? 'selected' : '' ?> value="غير متأكد">غير متأكد</option>
            </select>
        </div>    
        <div class="error"><?php echo form_error('ready_move'); ?></div>
    </div>

    <div class="form-group">
        <label class="label-title control-label col-md-3 " for="exampleInputEmail1"> لون البشره  </label>
        <div class="col-md-4">
            <select class="form-control" name="skin_color">
                <option <?php echo $usersData['usp_skin_color'] == 'غير محدد' ? 'selected' : '' ?> value="غير محدد">غير محدد</option>
                <option <?php echo $usersData['usp_skin_color'] == 'بياض الثلج' ? 'selected' : '' ?> value="بياض الثلج">بياض الثلج</option>
                <option <?php echo $usersData['usp_skin_color'] == 'أبيض' ? 'selected' : '' ?> value="أبيض">أبيض</option>
                <option <?php echo $usersData['usp_skin_color'] == 'قمحي فاتح' ? 'selected' : '' ?> value="قمحي فاتح">قمحي فاتح</option>
                <option <?php echo $usersData['usp_skin_color'] == 'قمحي' ? 'selected' : '' ?> value="قمحي">قمحي</option>
                <option <?php echo $usersData['usp_skin_color'] == 'قمحي غامق' ? 'selected' : '' ?> value="قمحي غامق">قمحي غامق</option>
                <option <?php echo $usersData['usp_skin_color'] == 'داكن' ? 'selected' : '' ?> value="داكن">داكن</option>
            </select>
        </div>     
        <div class="error"><?php echo form_error('skin_color'); ?></div>
    </div>

    <div class="form-group">
        <label class="label-title control-label col-md-3 " for="exampleInputEmail1"> الوزن  </label>
        <div class="col-md-4">
            <select class="form-control" name="weight">
                <option <?php echo $usersData['usp_weight'] == 'غير محدد' ? 'selected' : '' ?> value="غير محدد">غير محدد</option>
                <option <?php echo $usersData['usp_weight'] == '50' ? 'selected' : '' ?> value="50">50</option>
                <option <?php echo $usersData['usp_weight'] == '60' ? 'selected' : '' ?> value="60">60</option>
                <option <?php echo $usersData['usp_weight'] == '70' ? 'selected' : '' ?> value="70">70</option>
                <option <?php echo $usersData['usp_weight'] == '80' ? 'selected' : '' ?> value="80">80</option>
                <option <?php echo $usersData['usp_weight'] == '90' ? 'selected' : '' ?> value="90">90</option>
                <option <?php echo $usersData['usp_weight'] == '100' ? 'selected' : '' ?> value="100">100</option>
                <option <?php echo $usersData['usp_weight'] == '110' ? 'selected' : '' ?> value="110">110</option>
                <option <?php echo $usersData['usp_weight'] == '120' ? 'selected' : '' ?> value="120">120</option>
                <option <?php echo $usersData['usp_weight'] == '130' ? 'selected' : '' ?> value="130">130</option>
                <option <?php echo $usersData['usp_weight'] == '140' ? 'selected' : '' ?> value="140">140</option>
                <option <?php echo $usersData['usp_weight'] == '150' ? 'selected' : '' ?> value=" 150 واكثر "> 150 واكثر </option>
            </select>
        </div>    
        <div class="error"><?php echo form_error('weight'); ?></div>
    </div>

    <div class="form-group">
        <label class="label-title control-label col-md-3 " for="exampleInputEmail1"> الطول  </label>
        <div class="col-md-4">
            <select class="form-control" name="height">
                <option <?php echo $usersData['usp_height'] == 'غير محدد' ? 'selected' : '' ?> value="غير محدد">غير محدد</option>
                <option <?php echo $usersData['usp_height'] == '120' ? 'selected' : '' ?> value="120">120</option>
                <option <?php echo $usersData['usp_height'] == '130' ? 'selected' : '' ?> value="130">130</option>
                <option <?php echo $usersData['usp_height'] == '140' ? 'selected' : '' ?> value="140">140</option>
                <option <?php echo $usersData['usp_height'] == '150' ? 'selected' : '' ?> value="150">150</option>
                <option <?php echo $usersData['usp_height'] == '160' ? 'selected' : '' ?> value="160">160</option>
                <option <?php echo $usersData['usp_height'] == '180' ? 'selected' : '' ?> value="180">180</option>
                <option <?php echo $usersData['usp_height'] == '190' ? 'selected' : '' ?> value="190">190</option>
                <option <?php echo $usersData['usp_height'] == '200' ? 'selected' : '' ?> value="200 واكثر">200 واكثر</option>
            </select>
        </div>    
        <div class="error"><?php echo form_error('height'); ?></div>
    </div>






    <br><br><br><br>
    <div class="form-group">
        <label class="label-title control-label col-md-3 " for="exampleInputEmail1">الحالة العائلية</label>
        <div class="col-md-1">    
            <div class="radio radio-info radio-inline">
                <input  <?php echo $usersData['usp_family_status'] == 'غير محدد' ? 'checked' : '' ?> type="radio" id="fbinlineRadio6" value="غير محدد" name="family_status" >
                <label class="radio-kind" for="fbinlineRadio6">غير محدد</label>

            </div>
        </div>
        <div class="col-md-1">
            <div class="radio radio-inline">
                <input type="radio" id="gginlineRadio5" <?php echo $usersData['usp_family_status'] == 'أعزب' ? 'checked' : '' ?> value="أعزب" name="family_status">
                <label class="radio-kind" for="gginlineRadio5">أعزب</label>
            </div>
        </div>    
        <div class="col-md-1">
            <div class="radio radio-inline">
                <input type="radio" id="bbinlineRadio4" <?php echo $usersData['usp_family_status'] == 'متزوج' ? 'checked' : '' ?> value="متزوج" name="family_status">
                <label class="radio-kind" for="bbinlineRadio4">متزوج</label>
            </div>
        </div>
        <div class="col-md-1">
            <div class="radio radio-info radio-inline">
                <input type="radio" id="vvinlineRadio1" <?php echo $usersData['usp_family_status'] == 'منفصل' ? 'checked' : '' ?> value="منفصل" name="family_status" >
                <label class="radio-kind" for="vvinlineRadio1">منفصل</label>
            </div>
        </div>
        <div class="col-md-1">
            <div class="radio radio-inline">
                <input type="radio" id="inlineRadio2" <?php echo $usersData['usp_family_status'] == 'مطلق' ? 'checked' : '' ?> value="مطلق" name="family_status">
                <label class="radio-kind" for="ffinlineRadio2">مطلق</label>
            </div>
        </div>    
        <div class="radio radio-inline">
            <input type="radio" id="inlineRadio3" <?php echo $usersData['usp_family_status'] == 'أرمل' ? 'checked' : '' ?> value="أرمل" name="family_status">
            <label class="radio-kind" for="ffinlineRadio3">أرمل</label>
        </div>
        <div class="error"><?php echo form_error('family_status'); ?></div>
    </div>    

    <br><br><br><br>
    <div class="form-group">
        <label class="label-title control-label col-md-3 " for="exampleInputEmail1">الأطفال</label>
        <div class="col-md-1">
            <div class="radio radio-info radio-inline">
                <input type="radio" id="rfinlineRadio1" <?php echo $usersData['usp_want_children'] == 'غير محدد' ? 'checked' : '' ?> value="غير محدد" name="want_children" >
                <label class="radio-kind" for="rfinlineRadio1">غير محدد</label>
            </div>
        </div>
        <div class="col-md-1">   
            <div class="radio radio-inline">
                <input type="radio" id="4inlineRadio2" <?php echo $usersData['usp_want_children'] == 'لا' ? 'checked' : '' ?> value="لا" name="want_children">
                <label class="radio-kind" for="4inlineRadio2">لا</label>
            </div>
        </div>
        <div class="col-md-1">   
            <div class="radio radio-inline">
                <input type="radio" id="3inlineRadio3" <?php echo $usersData['usp_want_children'] == 'نعم' ? 'checked' : '' ?> value="نعم" name="want_children">
                <label class="radio-kind" for="3inlineRadio3">نعم</label>
            </div>
        </div>   
        <div class="error"><?php echo form_error('want_children'); ?></div>
    </div>
    <br><br><br><br>

    <div class="form-group">
        <label class="label-title control-label col-md-3 " for="exampleInputEmail1">الحاله الماديه</label>
        <div class="col-md-1">
            <div class="radio radio-info radio-inline">
                <input type="radio" id="2inlineRadio1" <?php echo $usersData['usp_physical_condition'] == 'غير محدد' ? 'checked' : '' ?> value="غير محدد" name="physical_condition">
                <label class="radio-kind" for="2inlineRadio1">غير محدد</label>
            </div>
        </div>
        <div class="col-md-1">   
            <div class="radio radio-info radio-inline">
                <input type="radio" id="idnlineRadio1" <?php echo $usersData['usp_physical_condition'] == 'ميسور' ? 'checked' : '' ?> value="ميسور" name="physical_condition">
                <label class="radio-kind" for="idnlineRadio1">ميسور</label>
            </div>
        </div>
        <div class="col-md-1">   
            <div class="radio radio-inline">
                <input type="radio" id="ivnlineRadio2" <?php echo $usersData['usp_physical_condition'] == 'متوسط' ? 'checked' : '' ?> value="متوسط" name="physical_condition">
                <label class="radio-kind" for="ivnlineRadio2">متوسط</label>
            </div>
        </div>   
        <div class="radio radio-inline">
            <input type="radio" id="icnlineRadio3" <?php echo $usersData['usp_physical_condition'] == 'ضعيف' ? 'checked' : '' ?> value="ضعيف" name="physical_condition">
            <label class="radio-kind" for="icnlineRadio3">ضعيف</label>
        </div>
    </div>   
    <div class="error"><?php echo form_error('physical_condition'); ?></div>
</div>
<br><br><br><br>
<div class="form-group">
    <label class="label-title control-label col-md-3 " for="exampleInputEmail1">الحالة الصحية</label>
    <div class="col-md-1">
        <div class="radio radio-info radio-inline">
            <input type="radio" id="winlineRadio1" <?php echo $usersData['usp_health_status'] == ' غير محدد ' ? 'checked' : '' ?> value=" غير محدد " name="health_status">
            <label class="radio-kind" for="winlineRadio1"> غير محدد </label>
        </div>
    </div>
    <div class="col-md-1">   
        <div class="radio radio-info radio-inline">
            <input type="radio" id="qinlineRadio1" <?php echo $usersData['usp_health_status'] == ' الحمد لله حديد ' ? 'checked' : '' ?> value=" الحمد لله حديد " name="health_status">
            <label class="radio-kind" for="qinlineRadio1"> الحمد لله حديد </label>
        </div>
    </div>
    <div class="col-md-1">   
        <div class="radio radio-inline">
            <input type="radio" id="inlinexRadio2" <?php echo $usersData['usp_health_status'] == 'مرض متوسط' ? 'checked' : '' ?> value="مرض متوسط" name="health_status">
            <label class="radio-kind" for="inlinexRadio2">مرض متوسط</label>
        </div>
    </div>
    <div class="col-md-1">   
        <div class="radio radio-inline">
            <input type="radio" id="inlineaRadio3" <?php echo $usersData['usp_health_status'] == 'اعاقة مستمرة' ? 'checked' : '' ?> value="اعاقة مستمرة" name="health_status">
            <label class="radio-kind" for="inlineaRadio3">اعاقة مستمرة</label>
        </div>
    </div>   
    <div class="error"><?php echo form_error('health_status'); ?></div>
</div>
<br><br><br><br>
<div class="clearfix"></div>
<div class="form-group">
    <label class="label-title control-label col-md-3 " for="exampleInputEmail1">الالتزام الدينى </label>
    <div class="col-md-2">
        <div class="radio radio-info radio-inline">
            <input type="radio" id="inlineRadioo1" <?php echo $usersData['usp_religious_commitment'] == 'غير محدد' ? 'checked' : '' ?> value="غير محدد" name="religious_commitmen">
            <label class="radio-kind" for="inlineRadioo1"> غير محدد </label>
        </div>
    </div>
    <div class="col-md-2">   
        <div class="radio radio-info radio-inline">
            <input type="radio" id="inlineRadioa1" value=" بصلى الحمد لله " <?php echo $usersData['usp_religious_commitment'] == ' بصلى الحمد لله ' ? 'checked' : '' ?> name="religious_commitmen">
            <label class="radio-kind" for="inlineRadioa1"> بصلى الحمد لله </label>
        </div>
    </div>
    <div class="col-md-2">   
        <div class="radio radio-inline">
            <input type="radio" id="inlineRadio2" value="مقصر" <?php echo $usersData['usp_religious_commitment'] == 'مقصر' ? 'checked' : '' ?> name="religious_commitmen">
            <label class="radio-kind" for="inlineRadio2">مقصر</label>
        </div>
    </div>   
    <div class="error"><?php echo form_error('religious_commitment'); ?></div>
</div>
<br><br><br><br>

<div class="form-group" style="margin-bottom: 34px;">
    <label class="label-title control-label col-md-3 " for="exampleInputEmail1">تحدث عن نفسك</label>
    <div class="col-md-7" style="margin: 34px 0  ;">
        <textarea name="myself" class="form-control" rows="8"><?php echo $usersData['uab_myself']; ?></textarea>
    </div>
</div>
<div class="clearfix"></div>    
<div class="form-group" style="margin-bottom: 34px;">
    <label class="control-label col-md-3 " for="exampleInputEmail1">تحدث عن اللذين تبحث عنهم</label>
    <div class="col-md-7" style="margin-bottom: 34px;">
        <textarea name="about_search" class="form-control" rows="8"><?php echo $usersData['uab_about_search']; ?></textarea>
    </div>
</div>

<br><br><br><br>
<div class="clearfix"></div>    
<div class="form-actions fluid">
    <div class="col-md-offset-3 col-md-9">
        <input type="submit" name="editUser" value="حفظ" class="btn green">
        <!--                                            <button type="button" class="btn default">Cancel</button>-->
    </div>
</div>

<?php echo form_close(); ?>

<div class="clearfix"></div>
<br><br>    
<h4 class="text-center">البوم الصور</h4>
<form action='' method="post">

    <div class="form-group" style="margin-bottom: 34px;">
        <?php for ($i = 0; $i < count($userPhtos); $i++) { ?>
            <div class="itemPhoto col-md-3">
                <input type="checkbox" id="<?php echo $i; ?>" name="<?php echo $userPhtos[$i]['up_id']; ?>">
                <label for="<?php echo $i; ?>"><img alt="no image" width="200" height="200" class="image-responseve" src="<?php echo HOST_NAME . 'upload/' . $userPhtos[$i]['up_photo']; ?>"></label>
            </div>
        <?php } ?>
    </div>
    <div class="clearfix"></div>

    <div class="form-actions fluid">
        <div class="col-md-offset-3 col-md-9">
            <input type="submit" name="deletePhotos" value="حذف" class="btn red">
            <!--                                            <button type="button" class="btn default">Cancel</button>-->
        </div>
    </div>


    <?php echo form_close(); ?>

    <?php require_once 'template/footer.php'; ?>