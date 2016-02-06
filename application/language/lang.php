<?php

if (!isset($_GET['lang']) || $_GET['lang'] == 'ar') {
// index page


    $sittings['siteMessage'] = '<h1>
                                التقي بعزاب
                                <div class="clearfix"></div>
                                <span>مسلمين </span>الآن
                            </h1>';

// form login
    $sittings['loginButton'] = 'دخول';
    $sittings['emailHolder'] = 'البريد الالكترونى';

// fixd slider
    $sittings['goButton'] = 'تصفح الموقع';

// register form 

    $sittings['registerTitle'] = 'اشترك معنا الان';
    $sittings['registerType'] = 'النوع';
    $sittings['registerAge'] = 'العمر';
    $sittings['registerPurpose'] = 'الغرض';
    $sittings['registerSubmit'] = 'التسجيل';

// features

    $sittings['featuresTitle'] = 'خدمات ومزايا الموقع';

// Selected users 
    $sittings['selectedTitle'] = 'اعضاء مختارين';
    $sittings['selectedHover'] = 'مشاهدة البروفايل';

//  footer
    $sittings['footerHistory'] = 'قصص نجاح';
    $sittings['footerMessage'] = 'راسل الادارة';
    $sittings['footerFaqs'] = 'اسئلة متداولة';
    $sittings['footerWarnings'] = 'تحذيرات الامان';
    $sittings['footerPrivcy'] = 'سياسة الخصوصية';
    $sittings['footerTerms'] = 'شروط الاستخدام';


// under footer  
    $sittings['footerBrief'] = 'نبذة عن الموقع';
    $sittings['footerUrls'] = 'روابط مهمة';
    $sittings['footerContact'] = 'تواصل معا';

    $sittings['footerCopy'] = 'جميع الحقوق محفوظة ل موقع مسلم زواج';

    $sittings['footerElryad'] = '<a href="http://elryad.com" title="مؤسسة" target="_blank">مؤسسة</a>
                             <a href="http://elryad.com" title="الرياض" target="_blank">الرياض</a>';


// stories

    $sittings['storiesTitle'] = 'قصص نجاح الاعضاء فى البحث عن شريك حياتهم';

    $sittings['storiesName'] = 'الإسم';
    $sittings['storiesAge'] = 'العمر';
    $sittings['storiescontry'] = 'دولة الأصل';

// viewStory

    $sittings['viewStoryTitle'] = 'تفاصيل القصة';
    $sittings['viewStoryContry'] = 'دولة الإقامة';
    $sittings['viewStorySearch'] = 'كنت أبحث عن';

// contact

    $sittings['contactTilte'] = 'يمكنك التواصل معنا في اي وقت في حال لديك اي استفسار او ملاحظات او شكاوي *';

    $sittings['contactTilteMessage'] = 'عنوان الرساله';
    $sittings['contactNameMessage'] = 'اسمك الكريم';
    $sittings['contactEmailMessage'] = 'البريد الالكترونى';
    $sittings['contactMessage'] = 'اكتب الرساله';
    $sittings['contactMessageSubmit'] = 'ارسال';


// dashbord

    $sittings['menuHome'] = 'الرئيسية';
    $sittings['menuMessages'] = 'الرسائل';
    $sittings['menuLikes'] = 'اعجاب';
    $sittings['menuPhotosAlbome'] = 'البوم الصور';

// progress
    $sittings['progressTitle'] = 'لوحة التحكم';
    $sittings['progressProfile'] = 'الملف الشخص';
    $sittings['progressEditProfile'] = 'تعديل الحساب';
    $sittings['progressUpgradProfile'] = 'ترقية الحساب';
    $sittings['upgradNow'] = 'ترقية حسابك الأن';
    $sittings['progressAddStory'] = 'اضف قصة نجاح';
    $sittings['progressLogOut'] = 'تسجيل الخروج';
    $sittings['addStorryCapel'] = 'اضف قصة نجاحك مع شريك حياتك';
    $sittings['upgadeDesc'] = 'للاستفادة التامة من جميع خدمات الموقع ينبغي ترقية الحساب';
    $sittings['upgradeBtn'] = 'رقى حسابك الان';
// content 
    //Search

    $sittings['contentQSearch'] = 'بحث سريع';
    $sittings['contentOnline'] = 'متواجد الأن';
    $sittings['contentHavImg'] = 'لديه صور';
    $sittings['contentMinAge'] = 'العمر الأدنى';
    $sittings['contentMaxAge'] = 'العمر الأقصى';
    $sittings['contentTarget'] = 'الهدف';
    $sittings['contentOrigin'] = 'دولة الأصل';
    $sittings['contentResidence'] = 'دولة الإقامة';
    $sittings['contentSearchSubmit'] = 'بــــحـــث';
    $sittings['updateAcount'] = 'يجب ترقية الحساب لكى تتمكن من المراسلة';
    // stories

    $sittings['contentStoriesTitle'] = 'اخر قصص النجاح';
    $sittings['contentViewStories'] = 'عرض اخر القصص';

    // likes cases
    $sittings['contentTikesTitle'] = 'حالة الاعجابات';
    $sittings['contentMyTikes'] = 'عدد اعجباتى';
    $sittings['contentOurMyTikes'] = 'عدد المعجبون بى';



//Search page

    $sittings['SearchTitle'] = 'نتائج البحث عن الاعضاء';
    $sittings['Searchreresult'] = array(
        'result' => 'عدد نتائج البحث',
        'page' => 'أنت في الصفحة',
        'to' => 'من'
    );

//messages page
    $sittings['messagesSubmit'] = 'ارسال';


//likes page
    $sittings['mylikesTitle'] = 'أعجبت بى';
    $sittings['ourMylikesTitle'] = 'المعجبون بى';

// photos page

    $sittings['photosTitle'] = 'ارفق صور الى البوم صورك';
    $sittings['photosLabol'] = 'اضافة صوره';
    $sittings['photosSubmit'] = 'اضافة الى الالبوم';
    $sittings['manMenu'] = 'القائمة الرئيسية';

    $sittings['photosTitleAlbom'] = 'البوم الصور';

// register page
    $sittings['registerTitle'] = array('إكمال التسجيل', 'عليك إتمام الخطوات التالية');

    $sittings['registerUserDataTitle'] = 'إشترك معنا';
    $sittings['registerUserDataPostion'] = 'الوضع الاجتماعي';
    $sittings['registerUserDataPhotoTitle'] = 'الصورة الشخصية';
    $sittings['registerUserDataDescTitle'] = 'الوصف';
    $sittings['registerUserDataMailTitle'] = 'البريد الإلكتروني';


    $sittings['registerUserDataType'] = 'النوع';
    $sittings['registerUserDataTypeLabil'] = array('أنا ذكر', 'أنا انثى');
    $sittings['registerUserDataAge'] = 'العمر';
    $sittings['registerUserDataTarget'] = 'الهدف';
    $sittings['registerUserDataCrant'] = 'دولة الأصل';
    $sittings['registerUserDataName'] = 'الاسم';
    $sittings['registerUserDataNameLabol'] = 'هذا الاسم سوف يظهر للمشتركين';
    $sittings['registerUserDataEmail'] = 'البريد الالكترونى';
    $sittings['registerUserDataReEmail'] = 'تأكيد البريد الالكترونى';
    $sittings['registerUserDataStay'] = 'دولة الإقامة';
    $sittings['registerUserDataPass'] = 'كلمة المرور';
    $sittings['registerUserDataRePass'] = 'تأكيد كلمة المرور';
    $sittings['registerUserDatatrams'] = 'شروط الاستخدام';
    $sittings['registerUserDatatramsLabol'] = 'قرأت وأقبل بجميع شروط استخدام الموقع وموافق على سياسة الخصوصية';
   



    $sittings['registerUserDataLearn'] = 'التعليم';
    $sittings['registerUserDataLearnCrant'] = array('غير محدد', 'إبتدائي', 'إعدادي', 'ثانوي', 'تكوين مهني', 'درجة البكالوريوس', 'درجة الماجستير', 'درجة الدكتوراه', 'مدرسة الحياة', 'بعض السنوات الجامعية');
    $sittings['registerUserDataWork'] = 'العمل';
    $sittings['registerUserDataWorkCrnt'] = array('غير محدد', 'طالب', 'موظف حكومي', 'موظف قطاع خاص', 'مدير', 'أعمال حرة', 'عاطل عن العمل', 'متقاعد');
    $sittings['registerUserDataWorkCrant'] = array('غير محدد', 'سكرتريا', 'الإدارة', 'الإعلانات', 'التسيير', 'المالي والمصرفي', 'الصحافة والإعلام', 'المجال الفني والإبداعي', 'الترفيه', 'الحلاقة والتجميل', 'المبيعات', 'مجال المطاعم', 'أعمال منزلية', 'رعاية الأطفال', 'أعمال اجتماعية', 'أعمال تطوعية', 'الصيدلة', 'المساعدة الطبية', 'الطب', 'طب الأسنان', 'البيطرة', 'الهندسة', 'التكنولوجيا والتواصل', 'الصناعة', 'البناء', 'الأعمال الحرفية', 'الزراعة والمواشي', 'الشرطة', 'الأمن', 'دفاع مدني', 'المجال العسكري', 'المجال السياسي', 'المجال القانوني', 'التعليم', 'الأكاديمي والبحوث', 'المجال الرياضي', 'المواصلات', 'السياحة');
    $sittings['registerUserDataWorkCat'] = 'مجال العمل';
    $sittings['registerUserDataSalry'] = 'الدخل الشهرى';
    $sittings['registerUserDataSalryCrant'] = array('لا احب ان اقول', '$100', '$500', '$1000', '$2000', '$3000 +');
    $sittings['registerUserDataBody'] = 'بنية الجسم';
    $sittings['registerUserDataBodyCrant'] = array('غير محدد', 'صغير', 'نحيف', 'عادي', 'رياضي', 'قوام متناسب', 'زيادة في بعض الكيلوغرامات', 'ممتلئ', 'ضخم');
    $sittings['registerUserDataLeving'] = 'حالة السكن';
    $sittings['registerUserDataLevingCrant'] = array('غير محدد', 'أعيش وحدي', 'أعيش مع أصدقاء', 'أعيش مع أهلي', 'أعيش مع أسرتي الصغيرة', 'أعيش مع أطفالي', 'غير ذلك');
    $sittings['registerUserDataMove'] = 'الأستعدادية للتنقل';
    $sittings['registerUserDataMoveCrant'] = array('غير محدد', 'أريد أن أظل في منزلي', 'داخل منطقتي', 'داخل بلدي', 'بلد مجاور', 'إلى بلد آخر', 'غير متأكد');
    $sittings['registerUserDataSiken'] = 'لون البشره';
    $sittings['registerUserDataSikenCrant'] = array('غير محدد', 'بياض الثلج', 'أبيض', 'قمحي فاتح', 'قمحي', 'قمحي غامق', 'داكن');
    $sittings['registerUserDataWidth'] = 'الوزن';
    $sittings['registerUserDataHegiht'] = 'الطول';
    $sittings['registerUserDataFamly'] = 'الحالة العائلية';
    $sittings['rMyEnter'] = 'انا دخلى';
    $sittings['pLCat'] = 'المؤهل التعليمي'; 
    $sittings['noSelected'] = 'غير محدد';
    $sittings['pLCatCrant'] = array('غير محدد', 'إبتدائي', 'إعدادي', 'ثانوي', 'تكوين مهني', 'درجة البكالوريوس', 'درجة الماجستير', 'درجة الدكتوراه', 'مدرسة الحياة', 'بعض السنوات الجامعية');
    
    
    $sittings['registerUserDataFamlyCrant'] = array('غير محدد', 'أعزب', 'متزوج', 'منفصل', 'مطلق', 'أرمل');

    $sittings['registerUserDataChldrn'] = 'الأطفال';

    $sittings['registerUserDataChldrnCrant'] = array('غير محدد', 'لا', 'نعم');


    $sittings['registerUserDataMonyCase'] = 'الحاله الماديه';

    $sittings['registerUserDataMonyCaseCrant'] = array('غير محدد', 'ميسور', 'متوسط', 'ضعيف');

    $sittings['registerUserDataHealth'] = 'الحالة الصحية';

    $sittings['registerUserDataHealthCrant'] = array('غير محدد', 'الحمد لله حديد', 'مرض متوسط', 'اعاقة مستمرة');

    $sittings['registerUserDataReligious'] = 'الالتزام الدينى';

    $sittings['registerUserDataReligiousCrant'] = array('غير محدد', 'بصلى الحمد لله', 'مقصر');


    $sittings['registerUserDataSubmit'] = 'حفظ';
    $sittings['registerUserDataNext'] = 'التالى';

    $sittings['registerUserPhotoTitle'] = 'أختر صورتك';

    $sittings['registerUserPhotoDesc'] = 'ستظهر الصورة فى بياناتك بعد تأكد الأدارة من مطابقتها لشروط الخصوصية والحشمة; لذلك الرجاء قرأة التعليمات والشروط أدناة';

    $sittings['registerUserPhotoSubmit'] = 'اضافة حذف';

    $sittings['registerUserDESCTitle'] = 'الوصف هو فرصتك للتعبير وتقديم الصورة اللائقة بيك فى الموقع';
    $sittings['registerUserDESCMyLabol'] = 'تحدث عن نفسك (طباعك - عاداتك - مبادئك - أحلامك)';
    $sittings['registerUserDESCYourLabol'] = 'تحدث عن اللذين تبحث عنهم (مواصفاته - أخلاقة - حالتة )';
    $sittings['registerUserDESCYourLabolDesc'] = 'الوصف لا يجب أن يقل عن 15 حرف';

    $sittings['registerUserDataEmailStressTitle'] = 'تأكيد البريد الالكترونى';
    $sittings['pMySearch'] = 'المواصفات التى ابحث عنها';
    $sittings['pYourSearch'] = 'بالنسبة إلى نفسي';
    $sittings['registerUserDataEmailStressbutton'] = 'تأكيد ';
    $sittings['storyPhoto'] = 'صورة القصة';
    $sittings['registerUserDataEmailStressbuttonNext'] = 'تخطى';
    
    $sittings['rImFrom'] = 'انا من';
    $sittings['me'] = 'انا';
    $sittings['gMail'] = 'انا ذكر';
    $sittings['gFmail'] = 'انا انثى';
    $sittings['myAge'] = 'عمري';
    $sittings['paypalTileDf3'] = 'طرق الدفع';
    $sittings['paypalTitleDesc'] = 'طريقة الدفع المتاحه هى الدفع من خلال حساب الباى بال';
    $sittings['paypalSelect'] = 'اختار الخطه التى تناسبـــك';
    $sittings['paypalDate'] = 'المدة';
    $sittings['paypalMony'] = 'المبلغ';
    $sittings['planMonsses'] = 'أشهر';
    $sittings['planMons'] = 'شهرا';
    $sittings['planDolr'] = 'دولار';
    $sittings['planNow'] = 'ادفع الأن';
    $sittings['palnDescTitle'] = 'طريقة الدفع';
    $sittings['planDecCont'] = '
                        اضغط على "ادفع" ثم املأ كل الحقول المطلوبة

                        المرجو الملاحظة أن الترقية سوف تتجدد تلقائيا عند نهاية المدة. إذا لم تكن ترغب في التجديد
                        التلقائي يمكنك
                        إلغائه في أية لحظة من خلال صفحة إدارة الحساب.';
    $sittings['planRegisterCase'] = 'حالة الاشتراك';
    $sittings['plandStartDate'] = 'تاريخ الاشتراك';
    $sittings['planEndDate'] = 'تاريخ الانتهاء';
    $sittings['mNewMessage'] = 'رسالة جديده';
    $sittings['mTo'] = 'الى';
    $sittings['mClose'] = 'الغاء';
    $sittings['mSend'] = 'ارسال';

    $sittings['pNation'] = 'الجنسية';
    $sittings['pCountry'] = 'بلد الإقامة ';
    $sittings['pTarget'] = 'نوع الزواج';
    $sittings['pFamly'] = 'الحالة الإجتماعية ';
    $sittings['p_children'] = 'الاطفال';
    $sittings['pWigth'] = 'كم';
    $sittings['pTool'] = 'سم';
    $sittings['Ptol'] = 'الطول ';
    $sittings['pSken'] = 'لون البشرة ';

    $sittings['pleasSelect'] = 'يرجى الاختيار';
    $sittings['storyTitle'] = 'عنوان القصة ';
    $sittings['storyPhotoDesc'] = 'يمكنك رفع صوره معبره عن قصتك من خلال الضغط هنـــا .';
    $sittings['storyContent'] = 'محتوى القصة ';
    $sittings['addStorry'] = 'اضافة القصة';
    $sittings['cansel'] = 'لم يتم التسجيل';
    $sittings['sendChat'] = 'ارســـال';
    $sittings['year'] = 'سنة';
    $sittings['ter'] = 'أرغب في';
    // validation messages
    $validation['403'] = 'هذه العمليه غير متاحة';
    $validation['sendMessageTrue'] = 'تم الارسال بنجاح سوف يتم الرد عليك قريبا';
    $validation['sendMessageFalse'] = 'عفوا حدث خطأ ما لم يتم الارسال الى الاميل. حاول مرة اخرى';
    $validation['loginError'] = 'خطأ فى البريد الالكترونى او كلمة المرور';
    $validation['emailMessageTrue'] = 'تفقد بريدك الالكترونى';
    $validation['emailMessageFalse'] = 'حدث خطاء ما لم يتم الارسال';
    $validation['emailFildSession'] = 'تم انتهاء الجلسه. يرجى المحاولة مره اخرى';
    $validation['resultEmailTrue'] = 'تم التفعيل بنجاح';
    $validation['resultEmailFalse'] = 'لم يتم التفعيل. يرجى مراسلة الادارة';
    $validation['photoMessageTrue'] = 'تم اضافة الصوره بنجاح';
    $validation['photoMessageFalse'] = 'خطأ فى الرفع حاول مره اخرى';
    $validation['messageStoriesTrue'] = 'تم الاضافة بنجاح';
    $validation['messageStoriesTrue'] = 'غفوا حدث خطأ ما. يرجى اعاده المحاولة مره اخرى';
    $validation['messageEditTrue'] = 'تم التعديل بنجاح';
    $validation['messageEditFalse'] = 'حدث خطأ ما يرجى اعاده المحاولة';
    $validation['messageDeleteTrue'] = 'تم الحذف بنجاح';
    $validation['messageDeleteFalse'] = 'لم يتم الحذف';
    $validation['gessahePaypalTrue'] = 'تم الاشتراك بنجاح';
    $validation['gessahePaypalFalse'] = 'لم يتم التسجيل بشكل صحيح . يرجى مراسلة الادارة فورا';
    $validation['chatFalse'] = 'تعزر ارسال الرسالة';

    $exSession = 'انتهت الجلسه';

    // filds

    $validation['filedsName'] = 'الاسم';
    $validation['filedsTilte'] = 'عنوان الرسالة';
    $validation['filedsMsg'] = 'نص الرسالة';
    $validation['filedsEmail'] = 'البريد الالكترونى';
    $validation['filedsPass'] = 'كلمة المرور';
    $validation['filedsGender'] = 'النوع';
    $validation['filedsRemail'] = 'تاكيد البريد الاكترونى';
    $validation['filedsRePass'] = 'تأكيد كلمة المرور';
    $validation['filedsAge'] = 'العمر';
    $validation['filedsTarget'] = 'الهدف من التسجيل';
    $validation['filedsCountry'] = 'دولة الاصل';
    $validation['filedsCountryStay'] = 'دولة الاقامة';
    $validation['filedsRadio4e'] = 'الموافقه على الشروط';
    $validation['filedsAboutSearch'] = 'اللذين تبحث عنهم';
    $validation['filedsMyself'] = 'تحدث عن نفسك';
    $validation['filedsStoryTitle'] = 'عنوان القصة';
    $validation['filedsStoryText'] = 'نص القصة';
    $validation['filedsStoryTo'] = 'مع من قصتك';
    $validation['filedsProfileText'] = 'ادخل نص الرسالة';



    // pages title

    $pagesTitle['mainIndex'] = 'مسلم زواج';
    $pagesTitle['mainContact'] = 'اتصل بنا';
    $pagesTitle['mainStories'] = 'قصص النجاح';
    $pagesTitle['mainFaqs'] = 'الاسئلة المكررة';
    $pagesTitle['mainWarning'] = 'تحزيرات الامان';
    $pagesTitle['mainPrivacy'] = 'سياسة الخصوصية';
    $pagesTitle['mainTerms'] = 'شروط الاستخدام';
    $pagesTitle['DashBordIndex'] = 'الرئيسيه';
    $pagesTitle['DashBordliks'] = 'الاعجابات';
    $pagesTitle['DashBordPhotos'] = 'البوم الصور';
    $pagesTitle['DashBordAddStories'] = 'اضافة قصة';
    $pagesTitle['DashBordUpdateInfo'] = 'تعديل الملف البيانات';
    $pagesTitle['DashBordCancel'] = 'الغاء الطلب';
    $pagesTitle['DashBordAddDone'] = 'نجاح الاشتراك';
    $pagesTitle['DashBordPaypal'] = 'تفعيل الحساب';
    $pagesTitle['RegisterIndex'] = 'الاشتراك';
    $pagesTitle['RegisterActiveEmail'] = 'تفعيل الاميل';
    $pagesTitle['RegisterValidateActive'] = 'تم التفعيل بنجاح';
    $pagesTitle['MessagesIndex'] = 'الرسائل';
    $pagesTitle['SearchIndex'] = 'بحث';
    $sittings['imageCansel'] = 'الغاء';




// contry

   
    $contry['select'] = '(اختر)';
    $contry['JO'] = 'الأردن';
    $contry['AE'] = 'الإمارات';
    $contry['BH'] = 'البحرين';
    $contry['DZ'] = 'الجزائر';
    $contry['SA'] = 'السعودية';
    $contry['IQ'] = 'العراق';
    $contry['KW'] = 'الكويت';
    $contry['MA'] = 'المغرب';
    $contry['YE'] = 'اليمن';
    $contry['TN'] = 'تونس';
    $contry['OM'] = 'سلطنة عمان';
    $contry['SY'] = 'سوريا';
    $contry['PS'] = 'فلسطين';
    $contry['QA'] = 'قطر';
    $contry['LB'] = 'لبنان';
    $contry['LY'] = 'ليبيا';
    $contry['EG'] = 'مصر';
    $contry['IS '] = 'آيسلندا';
    $contry['AZ'] = 'أذربيجان';
    $contry['AM'] = 'أرمينيا';
    $contry['AU'] = 'أستراليا';
    $contry['CF'] = 'أفريقيا الوسطى';
    $contry['AF'] = 'أفغانستان';
    $contry['AL'] = 'ألبانيا';
    $contry['DE'] = 'ألمانيا';
    $contry['AO'] = 'أنغولا';
    $contry['UY'] = 'أوروغواي';
    $contry['UZ'] = 'أوزبكستان';
    $contry['UG'] = 'أوغندا';
    $contry['UA'] = 'أوكرانيا';
    $contry['ET'] = 'إثيوبيا';
    $contry['ER'] = 'إريتريا';
    $contry['ES'] = 'إسبانيا';
    $contry['EE'] = 'إستونيا';
    $contry['ID'] = 'إندونيسيا';
    $contry['IR'] = 'إيران';
    $contry['IT'] = 'إيطاليا';
    $contry['AR'] = 'الأرجنتين';
    $contry['EC'] = 'الإكوادور';
    $contry['BR'] = 'البرازيل';
    $contry['PT'] = 'البرتغال';
    $contry['BA'] = 'البوسنة والهرسك';
    $contry['CZ'] = 'التشيك';
    $contry['ME'] = 'الجبل الأسود';
    $contry['DK'] = 'الدنمارك';
    $contry['CV'] = 'الرأس الأخضر';
    $contry['SN'] = 'السنغال';
    $contry['SD'] = 'السودان';
    $contry['SE'] = 'السويد';
    $contry['SO'] = 'الصومال';
    $contry['CN'] = 'الصين';
    $contry['GA'] = 'الغابون';
    $contry['PH'] = 'الفلبين';
    $contry['CM'] = 'الكاميرون';
    $contry['CD'] = 'الكونغو الديمقراطية';
    $contry['MX'] = 'المكسيك';
    $contry['GB'] = 'المملكة المتحدة';
    $contry['NO'] = 'النرويج';
    $contry['AT'] = 'النمسا';
    $contry['NE'] = 'النيجر';
    $contry['IN'] = 'الهند';
    $contry['US'] = 'الولايات المتحدة';
    $contry['JP'] = 'اليابان';
    $contry['GR'] = 'اليونان';
    $contry['IE'] = 'ايرلندا';
    $contry['PY'] = 'باراغواي';
    $contry['PK'] = 'باكستان';
    $contry['BE'] = 'بلجيكا';
    $contry['BG'] = 'بلغاريا';
    $contry['BD'] = 'بنغلاديش';
    $contry['BW'] = 'بوتسوانا';
    $contry['MM'] = 'بورما';
    $contry['PL'] = 'بولندا';
    $contry['BO'] = 'بوليفيا';
    
    $contry['PRN'] = 'بروناي';
    
    $contry['PE'] = 'بيرو';
    $contry['BY'] = 'بيلاروسيا';
    $contry['TH'] = 'تايلاند';
    $contry['TW'] = 'تايوان';
    $contry['TM'] = 'تركمانستان';
    $contry['TR'] = 'تركيا';
    $contry['TD'] = 'تشاد';
    $contry['CL'] = 'تشيلي';
    $contry['TZ'] = 'تنزانيا';
    $contry['TG'] = 'توغو';
    $contry['GL'] = 'جرينلاند';
    $contry['DO'] = 'جمهورية الدومينيكان';
    $contry['CG'] = 'جمهورية الكونغو';
    $contry['ZA'] = 'جنوب أفريقيا';
    $contry['SS'] = 'جنوب السودان';
    $contry['GE'] = 'جورجيا';
    
    $contry['GAR'] = 'جزر القمر';
    
    $contry['DJ'] = 'جيبوتي';
    $contry['RW'] = 'رواندا';
    $contry['RU'] = 'روسيا';
    $contry['RO'] = 'رومانيا';
    $contry['ZM'] = 'زامبيا';
    $contry['ZW'] = 'زيمبابوي';
    $contry['CI'] = 'ساحل العاج';
    $contry['LK'] = 'سريلانكا';
    $contry['SK'] = 'سلوفاكيا';
    $contry['SI'] = 'سلوفينيا';
    $contry['SG'] = 'سنغافورة';
    $contry['CH'] = 'سويسرا';
    $contry['RS'] = 'صربيا';
    $contry['TJ'] = 'طاجيكستان';
    $contry['GM'] = 'غامبيا';
    $contry['GH'] = 'غانا';
    $contry['GY'] = 'غويانا';
    $contry['GN'] = 'غينيا';
    $contry['GW'] = 'غينيا بيساو';
    $contry['FR'] = 'فرنسا';
    $contry['VE'] = 'فنزويلا';
    $contry['FI'] = 'فنلندا';
    $contry['VN'] = 'فيتنام';
    $contry['CY'] = 'قبرص';
    $contry['KG'] = 'قرغيزستان';
    $contry['KZ'] = 'كازاخستان';
    $contry['HR'] = 'كرواتيا';
    $contry['KH'] = 'كمبوديا';
    $contry['CA'] = 'كندا';
    $contry['CU'] = 'كوبا';
    $contry['KR'] = 'كوريا الجنوبية';
    $contry['KP'] = 'كوريا الشمالية';
    $contry['CO'] = 'كولومبيا';
    $contry['KE'] = 'كينيا';
    $contry['LV'] = 'لاتفيا';
    $contry['LA'] = 'لاوس';
    $contry['LU'] = 'لوكسمبورغ';
    $contry['LR'] = 'ليبيريا';
    $contry['LT'] = 'ليتوانيا';
    $contry['MW'] = 'مالاوي';
    $contry['MT'] = 'مالطا';
    $contry['ML'] = 'مالي';
    $contry['MY'] = 'ماليزيا';
    $contry['MG'] = 'مدغشقر';
    $contry['MK'] = 'مقدونيا';
    $contry['MN'] = 'منغوليا';
    $contry['MR'] = 'موريتانيا';
    $contry['MZ'] = 'موزمبيق';
    $contry['MD'] = 'مولدوفا';
    $contry['NA'] = 'ناميبيا';
    $contry['NP'] = 'نيبال';
    $contry['NG'] = 'نيجيريا';
    $contry['NI'] = 'نيكاراجوا';
    $contry['NZ'] = 'نيوزيلندا';
    $contry['HT'] = 'هايتي';
    $contry['HN'] = 'هندوراس';
    $contry['HU'] = 'هنغاريا';
    $contry['NL'] = 'هولندا';
    $contry['HK'] = 'هونغ كونغ';

    
    $contry['DRS'] = 'دار السلام';
    $contry['GZR'] = 'جزر القمر';

// contry

    $target[1] = 'زواج عادي';
    $target[2] = 'زواج تعدد';
    $target[3] = 'زواج مسيار';
    $target[4] = 'تعارف وتواصل';
    $target[5] = '"صداقة عبر النت';
}
