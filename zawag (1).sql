-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2016 at 03:08 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zawag`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_message`
--

CREATE TABLE IF NOT EXISTS `admin_message` (
  `am_id` int(11) NOT NULL AUTO_INCREMENT,
  `am_name` varchar(50) NOT NULL,
  `am_email` varchar(70) NOT NULL,
  `am_title` varchar(150) NOT NULL,
  `am_message` text NOT NULL,
  `am_user_ip` int(11) NOT NULL,
  `am_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`am_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_photo` varchar(300) NOT NULL,
  `ads_url` varchar(300) NOT NULL,
  `ads_size` int(11) NOT NULL,
  `ads_ceated_by` int(11) NOT NULL,
  `ads_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ads_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ads_id`, `ads_photo`, `ads_url`, `ads_size`, `ads_ceated_by`, `ads_date`) VALUES
(1, 'JImvZS-22101260-1.png', 'https://facebook.github.io/react/blog/2015/12/16/ismounted-antipattern.html', 736, 3, '2016-01-01 13:28:43'),
(2, 'images.png', 'https://facebook.github.io/react/blog/2015/12/16/ismounted-antipattern.html', 350, 3, '2016-01-01 13:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_ur_id` int(11) NOT NULL,
  `c_pp_id` int(11) NOT NULL,
  `c_start` date NOT NULL,
  `c_end` date NOT NULL,
  PRIMARY KEY (`c_id`),
  KEY `c_ur_id` (`c_ur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE IF NOT EXISTS `faqs` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_ur_id` int(11) NOT NULL,
  `f_question` text NOT NULL,
  `f_answer` longtext NOT NULL,
  `f_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`f_id`,`f_ur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`f_id`, `f_ur_id`, `f_question`, `f_answer`, `f_date`) VALUES
(1, 3, 'كيف يتم الاشتراك في الموقع ؟', '<p><span xss=removed>يمكنك الاشتراك في الموقع من خلال الصفحة الرئيسية بالضغط على اشترك الآن وتعبئة المعلومات المطلوبة.</span><br xss=removed>\r\n<span xss=removed>إذا لم تتم تعبئة معلومات التسجيل بالطريقة المطلوبة ستظهر إرشادات باللون الأحمر ما عليك إلا اتباعها وتصحيح ما يجب تصحيحه.</span></p>\r\n', '2016-01-01 05:07:56'),
(2, 3, 'لماذا لم تنجح عملية التسجيل ؟', '<p><span xss=removed>يمكنك الاشتراك في الموقع من خلال الصفحة الرئيسية بالضغط على اشترك الآن وتعبئة المعلومات المطلوبة.</span><br xss=removed>\r\n<span xss=removed>إذا لم تتم تعبئة معلومات التسجيل بالطريقة المطلوبة ستظهر إرشادات باللون الأحمر ما عليك إلا اتباعها وتصحيح ما يجب تصحيحه.</span><br xss=removed>\r\n<span xss=removed>والرجاء أخذ الوقت في إدخال بريد إلكتروني تدخل عليه باستمرار لأن عملية التأكيد وعملية تسجيل الدخول ستتمان من خلاله.</span></p>\r\n', '2016-01-01 05:18:36'),
(3, 3, 'هل بإمكاني تغيير الجنس ؟', '<p><span xss=removed>ما عليك إلاّ تسجيل حساب جديد بالجنس الصحيح هذه المرّة إذ لا يمكن تغيير الجنس الذي اخترته المرة الأولى. وسوف يتم حظر الحساب الخاطئ.</span></p>\r\n', '2016-01-01 05:19:27'),
(4, 3, 'هل يسمح بتسجيل أكثر من حساب واحد في الموقع ؟', '<p><span xss=removed>لا يسمح تسجيل أكثر من حساب واحد في هذا الموقع كما ذكر في شروط الاستخدام. وعند اكتشاف ذلك يحظر حسابك من الموقع.</span></p>\r\n', '2016-01-01 05:20:00'),
(5, 3, 'نسيت كلمة المرور لحسابي ؟', '<p><span xss=removed>يكفي الضغط على &#39;&#39;نسيت كلمة المرور؟&#39;&#39; وكتابة البريد الإلكتروني الذي تسجلت به في موقع صدفة ثم الضغط على أرسل. ستصلك كلمة المرور أوتوماتيكيا على بريدك الإلكتروني.</span></p>\r\n', '2016-01-01 05:20:30'),
(6, 3, 'لم أتوصل بكلمة المرور في بريدي الإلكتروني ؟', '<p><span xss=removed>في بعض الأحيان يستغرق التوصل بكلمة المرور في بريدك الإلكتروني بعض الوقت.</span><br xss=removed>\r\n<span xss=removed>لا تنسى التحقق من صندوق الرسائل الغير هامة (junk/spam) يمكن أن تكون هناك.</span></p>\r\n', '2016-01-01 05:20:59'),
(7, 3, 'ما معنى بريدك الإلكتروني غير مسجل لدينا ؟', '<p><span xss=removed>البريد الإلكتروني المذكور لا يظهر على بياناتنا.</span><br xss=removed>\r\n<span xss=removed>أولا عد كتابة عنوان بريدك الإلكتروني فيمكن أن تكون ارتكبت خطأ في الكتابة في المرة الأولى.</span><br xss=removed>\r\n<span xss=removed>أو يمكن أن تكون غيرت عنوان البريد الإلكتروني الذي تستعمله لتسجيل الدخول على الموقع عادةً وعليك استعمال العنوان الجديد.</span><br xss=removed>\r\n<span xss=removed>أو يمكن أنك نسيت عنوان البريد الإلكتروني الذي تسجلت به، وفي هذه الحالة يمكنك مراسلة الإدارة مع ذكر كل التفاصيل</span><br xss=removed>\r\n<span xss=removed>والمعلومات الدالة على أنه حسابك وليس حساب شخص آخر، لكي نتمكن من العثور عليه.</span><br xss=removed>\r\n<span xss=removed>أو يمكن أنه ليس لديك حساب في هذا الموقع وما عليك إلا الاشتراك الآن من الصفحة الرئيسة للموقع.</span></p>\r\n', '2016-01-01 05:21:22'),
(8, 3, 'فقدت عنوان البريد الإلكتروني الذي أدخل به ؟', '<p><span xss=removed>يمكنك مراسلة الإدارة مع ذكر كل التفاصيل والمعلومات الدالة على أنه حسابك وليس حساب شخص آخر، لكي نتمكن من العثور عليه.</span></p>\r\n', '2016-01-01 05:21:46'),
(9, 3, 'كيف أسجل الخروج من الموقع؟', '<p><span xss=removed>يمكنك تسجيل الخروج من أعلى الصفحة على اليسار في القائمة التي تحمل صورتك ونسبة تقدم ملفك.</span><br xss=removed>\r\n<span xss=removed>بوضع الفأرة على هذه القائمة ستظهر مجموعة من الاختيارات في أسفلها اختيار الخروج</span></p>\r\n', '2016-01-01 05:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(30) NOT NULL,
  `p_title` varchar(150) NOT NULL,
  `p_content` longtext NOT NULL,
  `p_photo` varchar(300) NOT NULL,
  `p_section_id` int(11) NOT NULL,
  `p_created_by` int(11) NOT NULL,
  `p_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`p_id`),
  KEY `p_created_by` (`p_created_by`),
  KEY `p_section_id` (`p_section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`p_id`, `p_name`, `p_title`, `p_content`, `p_photo`, `p_section_id`, `p_created_by`, `p_date`) VALUES
(1, 'مميزات العضوية', 'مميزات العضوية', '<p>مميزات العضوية مميزات العضوية </p>\r\n\r\n<p>مميزات العضوية</p>\r\n\r\n<p>مميزات العضوية</p>\r\n\r\n<p>مميزات العضوية</p>\r\n\r\n<p>مميزات العضوية</p>\r\n\r\n<p>مميزات العضويةر</p>\r\n\r\n<p> </p>\r\n', 'Screenshot_from_2015-12-27_14:55:31.png', 4, 3, '2016-01-01 13:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `paypal_plan`
--

CREATE TABLE IF NOT EXISTS `paypal_plan` (
  `pp_id` int(11) NOT NULL AUTO_INCREMENT,
  `pp_ur_id` int(11) NOT NULL,
  `pp_name` varchar(100) NOT NULL,
  `pp_duration` varchar(30) NOT NULL,
  `pp_price` varchar(10) NOT NULL,
  `pp_photo` varchar(300) NOT NULL,
  `pp_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `paypal_plan`
--

INSERT INTO `paypal_plan` (`pp_id`, `pp_ur_id`, `pp_name`, `pp_duration`, `pp_price`, `pp_photo`, `pp_date`) VALUES
(1, 3, 'العاديه', '3', '50$', 'paypal.png', '2016-01-01 05:25:37');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `se_id` int(11) NOT NULL AUTO_INCREMENT,
  `se_name` varchar(50) NOT NULL,
  `se_description` text NOT NULL,
  `se_created_by` int(11) NOT NULL,
  `se_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`se_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`se_id`, `se_name`, `se_description`, `se_created_by`, `se_date`) VALUES
(4, 'صفحات الفوتر', '<p>صفحات الفوتر</p>\r\n\r\n<p> صفحات الفوتر</p>\r\n\r\n<p>صفحات الفوتر</p>', 3, '2016-01-01 05:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `site_features`
--

CREATE TABLE IF NOT EXISTS `site_features` (
  `sf_id` int(11) NOT NULL AUTO_INCREMENT,
  `sf_title` varchar(300) NOT NULL,
  `sf_photo` varchar(300) NOT NULL,
  `sf_text` text NOT NULL,
  `sf_ceated_by` int(11) NOT NULL,
  `sf_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sf_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `site_features`
--

INSERT INTO `site_features` (`sf_id`, `sf_title`, `sf_photo`, `sf_text`, `sf_ceated_by`, `sf_date`) VALUES
(1, 'موقع تعارف وزواج', 'a1.png', 'تواصل مع آلاف المشتركين وشاطرهم أحلامك ودعهم يكتشفونك.\r\n', 3, '2016-01-01 04:50:34'),
(2, 'بحث شامل وفعَّال', 'a2.png', 'تشرّط كيفما تشاء وفي غضون نقرات صل لمن يجيب رغباتك.', 3, '2016-01-01 04:51:06'),
(3, 'أحدث طرق التراسل', 'a3.png', 'تراسل مع من ترغب بطرق جديدة ومختلفة عن كل المواقع.\r\n', 3, '2016-01-01 04:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `sittings`
--

CREATE TABLE IF NOT EXISTS `sittings` (
  `si_id` int(11) NOT NULL AUTO_INCREMENT,
  `si_site_url` varchar(300) NOT NULL,
  `si_site_name` varchar(200) NOT NULL,
  `si_site_email` varchar(150) NOT NULL,
  `si_welcome_messag` text NOT NULL,
  `si_site_blog_url` varchar(200) NOT NULL,
  `si_facebook_url` varchar(200) NOT NULL,
  `si_twitter_url` varchar(200) NOT NULL,
  `si_google_plus_url` varchar(200) NOT NULL,
  `si_rss_url` varchar(200) NOT NULL,
  `si_inst_url` varchar(200) NOT NULL,
  `si_yot_url` varchar(200) NOT NULL,
  `si_important_links` longtext NOT NULL,
  `si_about_the_site` longtext NOT NULL,
  `si_terms_service` longtext NOT NULL,
  `si_tips_and_suggestions` longtext NOT NULL,
  `si_privacy_policy` longtext NOT NULL,
  `si_last_update_by` int(11) NOT NULL,
  `si_last_update_date` datetime NOT NULL,
  PRIMARY KEY (`si_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sittings`
--

INSERT INTO `sittings` (`si_id`, `si_site_url`, `si_site_name`, `si_site_email`, `si_welcome_messag`, `si_site_blog_url`, `si_facebook_url`, `si_twitter_url`, `si_google_plus_url`, `si_rss_url`, `si_inst_url`, `si_yot_url`, `si_important_links`, `si_about_the_site`, `si_terms_service`, `si_tips_and_suggestions`, `si_privacy_policy`, `si_last_update_by`, `si_last_update_date`) VALUES
(1, 'http://www.zawag.com/Admin/mainSittings/', 'زواج', 'hh@wwhh.dd', 'كل حكاية حب تبدأ بصدفة…\r\nوها أنت امام أحلى صدفة…\r\nاشترك معنا الآن ولا تضيع هذه الفرصة', 'http://www.zawag.com/Admin/mainSittings/', 'http://www.zawag.com/Admin/mainSittings/', 'http://www.zawag.com/Admin/mainSittings/', 'http://www.zawag.com/Admin/mainSittings/', 'http://www.zawag.com/Admin/mainSittings/', 'http://www.zawag.com/Admin/mainSittings/', 'http://www.zawag.com/Admin/mainSittings/', 'http://www.zawag.com/Admin/mainSittings/ http://www.zawag.com/Admin/mainSittings/ http://www.zawag.com/Admin/mainSittings/ ', 'مسلم زواج موقع بطلة جديدة، يوصلك بالوطن العربي والعالم أجمع ليفتح أمامك فرص أكبر للتعارف والتواصل ولإيجاد الشريك المناسب والحب الأمثل. صدفة لقاء فارس الأحلام وتوأم الروح وأصدقاء وشباب وبنات تبدأ من هنا. موقع صدفة تقنية حديثة للدردشة ومراسلة الشات بغية الزواج العادي أو زواج المسيار. فرصتك بين يديك لتكتب قصة عشق وغرام خاصة بك تُتوج بالارتباط الرومانسي. موقع صدفة يتبع حصريا المعايير الأخلاقية التي تتماشى مع القواعد الإسلامية للخطوبة والزواج.', '<p class="marked" style="margin: 0px 0px 15px; padding: 0px; color: rgb(102, 102, 102); font-family: ''Droid Arabic Naskh'', ''Lucida Grande'', Verdana, Tahoma, Arial, sans-serif; font-size: 14px; line-height: 21px;">هذه شروط استخدام الموقع ويجب على كل المشتركين اتباع هذه الشروط بدقة</p>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px; color: rgb(102, 102, 102); font-family: ''Droid Arabic Naskh'', ''Lucida Grande'', Verdana, Tahoma, Arial, sans-serif; font-size: 14px; line-height: 21px;">بزيارتك لموقع صدفة، بغض النظر إن كنت مشتركا على الموقع أو لا، فإنك توافق على الالتزام بشروط الاستخدام التالية. قد نقوم بتغيير هذه الشروط من وقت لآخر. استمرارك في استخدام موقع صدفة يعني أنك تقبل بشروط الاستخدام وأية تغييرات قد تطرأ عليها.</p>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px; color: rgb(102, 102, 102); font-family: ''Droid Arabic Naskh'', ''Lucida Grande'', Verdana, Tahoma, Arial, sans-serif; font-size: 14px; line-height: 21px;">لاستخدام الموقع يجب أن يكون عمرك 18 سنة على الأقل وألا يكون لديك أي عائق قانوني يمنعك من التعاقد.</p>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px; color: rgb(102, 102, 102); font-family: ''Droid Arabic Naskh'', ''Lucida Grande'', Verdana, Tahoma, Arial, sans-serif; font-size: 14px; line-height: 21px;">أثناء استخدامك لموقع صدفة يجب أن تلتزم بما يلي وفي حال مخالفتك هذه الشروط يحق لموقع صدفة إلغاء اشتراكك من دون سابق انذار.</p>\r\n\r\n<ul style="margin: 15px 30px 15px 0px; padding-right: 0px; padding-left: 0px; list-style: none; color: rgb(102, 102, 102); font-family: ''Droid Arabic Naskh'', ''Lucida Grande'', Verdana, Tahoma, Arial, sans-serif; font-size: 14px; line-height: 21px;">\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">يمنع أكثر من اشتراك واحد لكل شخص.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">يجب أن تبقى جميع معلومات تسجيل الدخول، المقدمة لك من طرف موقع صدفة، سرية ولا ينبغي أن تعطى هذه المعلومات لأي شخص آخر.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">يمنع استخدام ألفاظ أو صور أو ما شابه من وسائل لا تتلاءم مع المعايير الأخلاقية والقواعد القانونية لأغلبية مشتركينا؛ الذين هم بالأساس من بلدان مسلمة.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">يمنع أي شكل من أشكال المضايقة أو السلوك المستفز، مثل ودون حصر، التدخلات العنصرية أو الدينية أو السياسية.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">يمنع عرض أو إرسال صور أو مواقع أو رسائل أو غيرها من مواد إباحية من أي نوع، عامة أو خاصة.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">يمنع أي سلوك عدواني كالقذف أو التشهير أثناء التواصل مع المشتركين أو مع إدارة المواقع.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">يمنع التنقيص من جاذبية خدمات موقع صدفة للمشتركين والزوار الآخرين.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">يمنع توزيع رسالة بنفس الصيغة لعدد كبير من المشتركين بغرض نشر معلومة معينة.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">يمنع الترويج لمنتجات أو خدمات خاصة بك أو بطرف ثالث؛ أو استخدام موقع صدفة كأداة للتسويق، مثل ودون حصر، بعث رسائل دعائية أو إعلانات إلى الآخرين.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">يمنع انتهاك حقوق أشخاص آخرين أو حقوق الملكية أو حقوق الخصوصية أثناء استخدام موقع صدفة.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">يمنع توزيع أو تحميل أي فيروس أو القيام بأي شيء آخر يمكن أن يسبب ضررا ما لموقع صدفة أو أنظمته أو أنظمة المشتركين.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">يمنع طلب مبالغ مادية أو ما شابهها من المشتركين لأي سبب من الأسباب.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">يمنع نشر بأي شكل من الأشكال عنوان بريدك الإلكتروني أو رقم هاتفك أو أي معلومات تدل عليك على ملفك الشخصي.</li>\r\n</ul>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px; color: rgb(102, 102, 102); font-family: ''Droid Arabic Naskh'', ''Lucida Grande'', Verdana, Tahoma, Arial, sans-serif; font-size: 14px; line-height: 21px;">محتوى وخدمات وبرامج موقع صدفة محمية بموجب قوانين حقوق التأليف والنشر. لا يجوز بأي شكل من الأشكال أو بأي وسيلة، إعادة إنتاج أو تخزين أو توزيع أو طباعة أو عرض أو نشر أو إنشاء أعمال مشتقة من أي جزء من الموقع بدون إذن كتابي مسبق من الموقع.</p>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px; color: rgb(102, 102, 102); font-family: ''Droid Arabic Naskh'', ''Lucida Grande'', Verdana, Tahoma, Arial, sans-serif; font-size: 14px; line-height: 21px;">لا توجد ضمانات أن المعلومات المعروضة على موقع صدفة (بما في ذلك الملفات الشخصية للمشتركين) موثوقة أو دقيقة أو كاملة أو أن خدمات الموقع تعمل دون انقطاع وفي أي وقت. موقع صدفة لا يتدخل ويخلي مسؤوليته تماما عن أي خسارات أو مشاكل قد تواجهك نتيجة تعاملك مع معلومات أو مشتركين من الموقع. يجب عليك التأكد والتقصي قبل التعامل أو الاعتماد على أي معلومة توصلت بها في الموقع. نتائج تعاملك مع المعلومات ستكون على مسؤوليتك الخاصة.</p>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px; color: rgb(102, 102, 102); font-family: ''Droid Arabic Naskh'', ''Lucida Grande'', Verdana, Tahoma, Arial, sans-serif; font-size: 14px; line-height: 21px;">على الرغم من أن موقع صدفة لا يراجع ولا يستطيع مراجعة كل الرسائل أو غيرها من المواد التي يتم نشرها أو إرسالها بين المشتركين وليس مسؤولا عن محتوى هذه الرسائل أو المواد، إلا أن الموقع يحتفظ، ولكن ليس ملزما، بحق حذف أو نقل أو تعديل كل ما يتداول على الموقع من المواد (بما في ذلك ودون حصر الملفات والرسائل الشخصية) التي قد يراها موقع صدفة، وفي تقديره الخاص، تخترق شروط الاستخدام هاته أو بكل بساطة لا تتماشى مع أهداف الموقع.</p>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px; color: rgb(102, 102, 102); font-family: ''Droid Arabic Naskh'', ''Lucida Grande'', Verdana, Tahoma, Arial, sans-serif; font-size: 14px; line-height: 21px;">موقع صدفة قد يغير أو يوقف أي جانب من جوانب الخدمة في أي وقت، بما في ذلك أي مميزات أو قاعدة بيانات أو محتوى. يحق للموقع أيضا فرض حدود على بعض المميزات أو جوانب الخدمة أو تقييد وصولك إلى أجزاء من الموقع أو الموقع بأشمله، دون أي إشعار أو مسؤولية عن النتائج.</p>\r\n', '<section class="default wrapper">\r\n<div class="typography content" style="overflow: hidden; box-sizing: border-box; padding: 15px; margin-bottom: 20px; color: rgb(102, 102, 102);">\r\n<p class="marked" style="margin: 0px 0px 15px; padding: 0px;">تقدم لك إدارة الموقع بعض تحذيرات الأمان التي ستساعدك على التواصل مع الآخرين بكل آمان حتى لا تقع ضحية نصابين ومخادعين أضحوا مع الأسف جزءا من الإنترنت</p>\r\n\r\n<ul style="margin: 15px 30px 15px 0px; padding-right: 0px; padding-left: 0px; list-style: none;">\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">تذكر تسجيل الخروج كل مرة تنتهي فيها من استخدام الموقع.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">عدم إعطاء كلمة المرور لأي شخص كان فهذه معلومة شخصية ويجب عليك الاحتفاظ بها بكل جدية.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">مهما كان السبب إدارة الموقع لن تطلب منك كلمة المرور وفي حالة الحصول على مثل هذا الطلب يرجى إبلاغ الإدارة فورا.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">إلى أن تتم معرفة الشخص الآخر بصورة أقرب، من الأفضل أن تبقى المراسلة عبر الموقع قبل التواصل بوسيلة أخرى.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">عدم إعطاء أية تفاصيل دقيقة عنك أو أي معلومات شخصية كعنوان السكن أو رقم الهاتف الخاص بك لأي شخص قبل أن تتأكد منه.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">عدم قبول دعوة فتح الكاميرا من شخص لم تتعرف عليه لفترة كافية.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">عدم إرسال أي مبلغ مادي لأيّ شخص كان ولأيّ سبب كان قبل اللقاء الشخصي بالشخص والتأكد التام منه.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">في حال قرارك مقابلة أي مشترك أو مشتركة شخصيا ننصحك بعدم مقابلة الأشخاص بمفردك فمن الأفضل أن تكون برفقة أحد المقربين خصوصا في الفترة الأولى من التعارف وأن تكون اللقاءات في أماكن عامة.</li>\r\n	<li style="margin: 0px 0px 15px; padding: 0px;">تعمل إدارة الموقع بقدرالإمكان على أن تكون معلومات وصور المشتركين صحيحة. بالرغم من ذلك قد تجد بعض المشتركين بمعلومات أو صور وهمية. نرجو عدم التسرع واتخاذ الحذر.</li>\r\n</ul>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">إن كان لديك شكوى على مشترك يمكنك&nbsp;<a href="https://www.soudfa.com/contact" style="border: none; color: rgb(85, 170, 0); outline: none; background: none;">مراسلة الإدارة</a>&nbsp;مع ذكر كل تفاصيل الشكوى وكتابة إسم المشترك نسخا والرابط لصفحة بياناته لكي نتمكن من العثور على حسابه. نتعامل مع كل الشكاوي المرسلة بكل جدية لكن في بعض الأحيان يمكن أن تستغرق هذه العملية وقتا لذا يرجى التحلي بالصبر.</p>\r\n</div>\r\n</section>\r\n', '<p>&nbsp;</p>\r\n\r\n<section class="default wrapper">\r\n<h1 style="margin: 0px 0px 10px; padding: 0px; font-size: 19.6px; font-weight: bold; line-height: 40px;">سياسة الخصوصية</h1>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">في إطار حرصنا الشديد على تقديم صورة أوضح لمستخدمينا عن طبيعة البيانات التي نجمعها عنهم وكيفية تعاملنا معها، وضعنا بيان الخصوصية هذا (سياسة الخصوصية).</p>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">ما سيأتي أسفله يحدد المعلومات المجمعة من طرف موقع صدفة وكيفية استخدام الموقع إياها.</p>\r\n\r\n<div class="hr">&nbsp;</div>\r\n\r\n<h2 style="margin: 0px 0px 10px; padding: 0px; font-size: 16.8px; font-weight: bold;">1. المعلومات التي نجمع</h2>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">هدفنا الأساسي من جمع المعلومات الشخصية، هو أن نقدم لك تجربة سلسة وفعالة، تناسب رغباتك. بجمع هذه المعلومات، نسعى لتوفير خدمات ومميزات تلبي احتياجاتك بطريقة أفضل وتجعل استعمالك للموقع أسهل وأنسب. لفتح فرص أكبر للتعارف، نضع في الرسائل الإخبارية التي نبعثها بين الحين والآخر ملفات بعض المشتركين. يعتبر اسمك وعنوانك ورقم هاتفك معلومات سرية ولن تظهر أبدا على ملفك الشخصي. ملفك الشخصي يظهر للمشتركين الآخرين. يشمل هذا الملف وصفا وصورا ومقالات فردية وغيرها من معلومات التي ترسم ملامح عن شخصيتك. لا يتضمن ملفك الشخصي أي معلومات تحدد هويتك، ما عدا اسم المستخدم الذي اخترته عند التسجيل.</p>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">نتعقب أوتوماتيكيا بعض المعلومات المبنية على سلوكك أثناء استخدامك لموقعنا بواسطة ملفات &quot;الكوكيز&quot; وغيرها من الوسائل. نستخدم هذه المعلومات لتحديد تركيبة مشتركينا واهتماماتهم وسلوكهم حتى نخدم بشكل أفضل احتياجاتك واحتياجات الآخرين. يمكن أن تشمل هذه المعلومات عنوان الموقع الذي أتيت منه (سواء كان هذا العنوان على موقعنا أو لا). عنوان الموقع الذي ستذهب إليه بعد موقعنا (سواء كان هذا العنوان على موقعنا أو لا)، المتصفح الذي تستخدمه، وعنوان برتوكول الإنترنيت الخاص بك.</p>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">نستخدم وسائل جمع البيانات مثل &quot;الكوكيز&quot; أو ما يسمى كذلك بسجلات التصفح على صفحات معينة من موقعنا. الكوكيز هي ملفات صغيرة توضع على القرص الصلب تساعدنا في تقديم محتوى خاص بك. كما أن بعض خدماتنا لا تعمل إلا من خلال استخدام الكوكيز. معظم الكوكيز المستعملة عبارة عن سجلات تصفح دورية، بمعنى أنه يتم حذفها تلقائيا من القرص الصلب الخاص بك في نهاية التصفح. بإمكانك رفض الكوكيز القادمة من موقعنا إن كان متصفحك يسمح بذلك.</p>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">نستخدم طرفا ثالثا عبارة عن شركة إعلانات تتكلف بالإعلان عن خدماتنا عبر الإنترنت. يجوز أن هذا الطرف الثالث أيضا يجمع معلومات بطريقة أوتوماتكية عن زياراتك لموقعنا.</p>\r\n\r\n<h2 style="margin: 0px 0px 10px; padding: 0px; font-size: 16.8px; font-weight: bold;">2. كيف نتعامل مع المعلومات المجمعة</h2>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">قد نستخدم المعلومات المتواجدة في سجلات مشتركينا وغيرها من المعلومات التي نحصل عليها من نشاطاتك الحالية والسابقة على الموقع، لحل النزاعات والأعطاب وفرض شروط استخدام الموقع. في بعض الأحيان، قد نبحث في العديد من ملفات المشتركين لتحديد المشاكل أو حل النزاعات ولكن كذلك لفحص معلومات خاصة بك لكشف مشتركين باشتراكات أو أسماء متعددة.</p>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">قد نستخدم معلومات شخصية عنك، لتحسين خدماتنا التسويقية والترويجية ومنتجاتنا وتحليل استخدام الموقع وتحسين محتواه وطرق عرضه وجعله أكثر فعالية وتناسبا. باستعمال هذه المعلومات نطور موقعنا ونسعى لتلبية احتياجاتك بصورة أفضل.</p>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">قد نستخدم معلوماتك للاتصال بك وتقديم اقتراحات قد تكون بحاجة لها. مثل لافتات الإعلانات المستهدفة والإشعارات الإدارية وعروض لمنتجات وخدمات وبيانات متعلقة باستعمالك للموقع.</p>\r\n\r\n<h2 style="margin: 0px 0px 10px; padding: 0px; font-size: 16.8px; font-weight: bold;">3. الإفصاح عن معلوماتك</h2>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">لا نبيع أو نأجر أي معلومات شخصية عنك إلى أي طرف ثالث وذلك تماشيا مع سياسة موقعنا. ولكن في بعض الحالات قد نفصح عن معلوماتك الشخصية. فيما يلي حالات قد نفصح فيها عن معلوماتك.</p>\r\n\r\n<h3 style="margin: 0px 0px 10px; padding: 0px; font-size: 14px; font-weight: bold;">المُعْلِنون</h3>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">نجمع ما يصلنا من بيانات عبر كل حسابات مشتركينا ونفصح عن هذه المعلومات بطريقة لا تكشف هويتك إلى المعلنين وغيرهم من الأطراف لأهداف تسويقية وترويجية. في هذه الحالات، لا نكشف عن أي معلومات يمكن استخدامها للتعرف عليك شخصيا. معلومات مثل اسمك وعنوان بريدك الإلكتروني وكلمة المرور ورقم بطاقة الائتمان ورقم حسابك المصرفي، لا يتم الإفصاح عنها أبدا للمعلنين. قد نستخدم طرفا ثالثا عبارة عن شركة إعلانات تتكلف بالإعلان عن خدماتنا عبر الإنترنت. يجوز أن هذا الطرف الثالث يستخدم الكوكيز أو غيرها من الأدوات لقياس فعالية الإعلان. أي معلومات تُجمع عبر هذا الطرف بالكوكيز ومثيلاتها تكون مجهولة تماما ولا يمكن تحديد هويتك عن طريقها.</p>\r\n\r\n<h3 style="margin: 0px 0px 10px; padding: 0px; font-size: 14px; font-weight: bold;">الخدمات الخارجية</h3>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">يمكن أن تُقدِّم جهات خارجية مستقلة عنا، خدمات تساعدك على استخدام موقعنا. إذا اخترت استخدام هذه الخدمات الاختيارية وأثناء القيام بذلك، قدمت لهذه الجهات معلوماتك أو منحتهم إذنا لجمع معلومات خاصة بك، يخضع استخدام هذه المعلومات لقوانين سياسة الخصوصية التابعة لهم.</p>\r\n\r\n<h3 style="margin: 0px 0px 10px; padding: 0px; font-size: 14px; font-weight: bold;">الشركات الأخرى</h3>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">نتقاسم الكثير من بياناتنا ومن ضمنها معلومات شخصية عنك، مع شركاتنا الأصلية أو الفرعية والتي تلتزم بخدمة متطلباتك على الإنترنت وما يرافق ذلك، في كافة أرجاء العالم. في حالة إذا ما حصلت هذه الجهات على معلوماتك الخاصة فإنها ستعاملها على أقل تقدير كما تعامل المعلومات التي تحصل عليها من أعضائها الآخرين. شركاتنا الأصلية أو الفرعية تتبع سياسة خصوصية لا تقل حذرا ووقائية، في إطار الحدود التي يسمح بها القانون، عن سياستنا الموصوفة في هذه الوثيقة.</p>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">من الممكن أن نندمج أو تَضُمنا شركات أخرى إليها. إن حدث هذا فتوقع أننا سوف نتقاسم بعض أو جميع المعلومات الخاصة بك معها من أجل الاستمرار في تقديم الخدمة. في حالة إذا ما حصل هذا الحدث سوف تتلقى إشعارا عنه وسوف نطلب من الشريكة الجديدة، اتباع نفس السياسة المفصح عنها في سياسة الخصوصية هاته.</p>\r\n\r\n<h3 style="margin: 0px 0px 10px; padding: 0px; font-size: 14px; font-weight: bold;">الطلبات القانونية</h3>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">نتعاون مع السلطات القانونية وأطراف أخرى لضمان تطبيق قوانين تحمي من النصب والاحتيال وانتهاك الملكية الفكرية وما إلى ذلك. يمكننا الكشف عن أي معلومات عنك للسلطات القانونية وغيرهم من المسؤولين الحكوميين، معلومات نراها، وفي تقديرنا الخاص، ضرورية أو مناسبة ومُتصلة بتحقيق في عملية احتيال أو انتهاك لحقوق الملكية الفكرية أو أي نشاط آخر غير قانوني قد يعرضك أو يعرضنا للمسؤولية القانونية.</p>\r\n\r\n<h2 style="margin: 0px 0px 10px; padding: 0px; font-size: 16.8px; font-weight: bold;">4. دخولك إلى معلوماتك وتعديلها</h2>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">بعد التسجيل، يمكنك مراجعة وتغيير المعلومات التي قدَّمت أثناء التسجيل، بما في ذلك كلمة المرور وعنوان بريدك الإلكتروني. عند تغيير كلمة مرورك أو بريدك الالكتروني فنحن نحتفظ كذلك بكلمة المرور والبريد الإلكتروني القديمين. يمكنك أيضا تغيير معلومات التسجيل الخاصة بك مثل الاسم والعنوان والمدينة والولاية والرمز البريدي والبلد والبيانات والوصف ومعايير البحث المسجلة.</p>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">بناء على طلب كتابي منك، سوف نقوم بإيقاف اشتراكك ومعلومات التواصل معك ومعلوماتك من قواعد بياناتنا النشطة. سيتم إيقاف هذه المعلومات في أسرع وقت ممكن، في حدود المعقول وفق قوانين إيقاف الحساب، الجاري بها العمل في موقعنا.</p>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">سنحتفظ في سجلاتنا بالمعلومات التي طلبت حذفها وذلك لظروف معينة مثل حل النزاعات والأعطاب وفرض شروط استخدام الموقع. علاوة على ذلك، لن يتم أبدا إزالة معلوماتك تماما من قواعد بياناتنا بسبب التزامات تقنية وقانونية مختلفة كقيود أنظمة التخزين الاحتياطية. لذلك، يجب ألا تتوقع أن كل معلوماتك الشخصية سيتم حذفها تماما من قواعد بياناتنا.</p>\r\n\r\n<h2 style="margin: 0px 0px 10px; padding: 0px; font-size: 16.8px; font-weight: bold;">5. الأمان</h2>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">نستخدم المعايير التقنية المتداولة لحماية خصوصية معلوماتك الشخصية، بما في ذلك &quot;جدران الحماية&quot; وبرتوكول طبقة المنافذ الآمنة. نعامل البيانات كقيمة ينبغي حمايتها ضد الخسائر والتلاعب. نوظف العديد من التقنيات الأمنية المختلفة لحماية هذه البيانات من الوصول إليها بطريقة غير مسموح بها، سواء من قبل أفراد داخل شركتنا أو خارجها. ومع ذلك فالأمن المطلق لا وجود له على شبكة الإنترنت.</p>\r\n\r\n<h2 style="margin: 0px 0px 10px; padding: 0px; font-size: 16.8px; font-weight: bold;">6. التغيير</h2>\r\n\r\n<p style="margin: 0px 0px 15px; padding: 0px;">قد نقوم بتغيير سياسة الخصوصية هذه من وقت لآخر بناء على تعليقاتكم وحاجتنا، لتعكس بدقة طريقتنا في جمع البيانات والإفصاح عنها. جميع التغييرات التي قد تطرأ على هذه السياسة تصبح فعالة بمجرد ظهورها على الموقع.</p>\r\n</section>\r\n', 3, '2016-01-01 07:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `success_stories`
--

CREATE TABLE IF NOT EXISTS `success_stories` (
  `ss_id` int(11) NOT NULL AUTO_INCREMENT,
  `ss_ur_id` int(11) NOT NULL,
  `ss_to_ur_id` int(11) NOT NULL,
  `ss_title` varchar(500) NOT NULL,
  `ss_text` longtext NOT NULL,
  `ss_photo` varchar(300) NOT NULL,
  `ss_publish` enum('0','1') NOT NULL,
  `ss_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ss_id`),
  KEY `ss_to_ur_id` (`ss_to_ur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `success_stories`
--

INSERT INTO `success_stories` (`ss_id`, `ss_ur_id`, `ss_to_ur_id`, `ss_title`, `ss_text`, `ss_photo`, `ss_publish`, `ss_date`) VALUES
(1, 21, 13, 'قصة حبنا', 'مسرور جدا أن أقول لكم أني قد وجدت زوجة على هذا الموقع. لم أكن أتوقع يوما أنني سوف أتزوج مع شخص من خارج بلدي وثقافتي. سعيد لهذا الارتباط وكذلك زوجتي الجديدة.', '123images-of-love.jpg', '1', '2016-01-01 12:48:45'),
(2, 5, 19, 'انا في الحقيقة تشرفت بالدخول', 'السلام عليكم، أنا في الحقيقة تشرفت بالدخول والتواصل عبر موقعكم وقد ساعدني في الارتباط بالشريك المناسب. وعن هذا لكم كل الشكر وتقبلوا وافر الاحترام والتقدير.', '1648251_gPHRFR5.jpg', '1', '2016-01-01 12:49:05'),
(3, 6, 20, 'خلاص لقيت', 'خلاص لقيت اللي اخذ قلبي وعقلي فديتها غنيمه\r\n', 'big-love2.jpg', '1', '2016-01-01 12:49:13'),
(4, 7, 17, 'عسى الله ان يخلفك كما خلف لي خيرا', 'السلام عليكم ورحمة الله وبركاته\r\nعقبالكم كلكم جميع من على صدفة اتمنالكم كلكم ما اتمناه لنفسي ولقد من الله عليا بالزوجة الصالحة الجميلة النقية التقية خاصة هذه المرة ربي يعلم بحالي ويعلم بأني اتغدر به فرزقني من حيث لا احتسب بمن سوف يجعلها الله قرة عيني ويجعلني قرة عينيها بعد الله.\r\nانصح الجميع يتقوا الله ويكونون جادين ويحسنوا نوياهم فيرزقهم الله ما يستاهلونه كمان اقول لمن جرب من قبل وفشل عاود وكرر عسى الله ان يخلفك كما خلف لي خيرا منك \r\nفي أمان الله', 'images.jpg', '1', '2016-01-01 12:49:38'),
(5, 16, 9, 'شكرا لكم', 'اني ولله الحمد وجدت نصفي التاني ...وشكرا لكم', 'Love-Wallpapers-love-33002117-1600-1000.jpg', '1', '2016-01-01 12:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `users_about`
--

CREATE TABLE IF NOT EXISTS `users_about` (
  `uab_id` int(11) NOT NULL AUTO_INCREMENT,
  `uab_ur_id` int(11) NOT NULL,
  `uab_myself` text NOT NULL,
  `uab_about_search` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`uab_id`),
  KEY `uab_ur_id` (`uab_ur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users_about`
--

INSERT INTO `users_about` (`uab_id`, `uab_ur_id`, `uab_myself`, `uab_about_search`, `date`) VALUES
(1, 4, 'ستظهر الصورة فى بياناتك بعد تأكد الأدارة من مطابقتها لشروط الخصوصية والحشمة; لذلك الرجاء قرأة التعليمات والشروط أدناة\r\n', 'ستظهر الصورة فى بياناتك بعد تأكد الأدارة من مطابقتها لشروط الخصوصية والحشمة; لذلك الرجاء قرأة التعليمات والشروط أدناة\r\n', '2016-01-01 06:09:40'),
(2, 5, 'السلام عليكم، أنا في الحقيقة تشرفت بالدخول والتواصل عبر موقعكم وقد ساعدني في الارتباط بالشريك المناسب. وعن هذا لكم كل الشكر وتقبلوا وافر الاحترام والتقدير.', 'السلام عليكم، أنا في الحقيقة تشرفت بالدخول والتواصل عبر موقعكم وقد ساعدني في الارتباط بالشريك المناسب. وعن هذا لكم كل الشكر وتقبلوا وافر الاحترام والتقدير.', '2016-01-01 11:08:07'),
(3, 6, 'أنا إنسان عدية حلمي أتوفق في ديراستي وألتقي بشي شب لزواج يرعاني ويقدر قيمتي وأنا بوعدو كون زوجة صاليحة طبعي بحب صراح كتير أكتير بعصب لما شي شخص يكدب عليا .', 'لايهموني لجمال بحب أتجوج شب عاقل ويعرف ييسير أمورو منيح ونا طبعن راح سندو في سراء ودراء', '2016-01-01 11:15:37'),
(4, 7, 'انا احب البحر الاجواء الهادئة يعجبني الحوار الهادف و انا بنت ناس وبعاشق حياة\r\n', 'صادق..انيق..ميسور الحال...شخصيته قوية...يقبل الحوار.. راقي..رومنسي..طموح...يحترمني..يصلي..يخاف الله...يحب الحياة و الاطفال... وسيم نوعا ما', '2016-01-01 11:19:44'),
(5, 8, 'C''est Roumayssaa de Casablanca J''ai 20ans, étudiante, J''aime la lecture dans les loisirs, et avoir l''ambition de bâtir un avenir meilleur...', 'Respectable, sérieux, responsable, stable, élégant et beau\r\n', '2016-01-01 11:24:30'),
(6, 9, 'رائعة هي الأُنثى : في طفولتها تفتح لأبيها بابا في الجنة وفي شبابها تُكمل دين زوجها وفي أمومتها تكون الجنّة تحت قدميها وفي أعين الأطفال وطنُ من البر', 'لا تجادل الانثى فإن غلبتك احتقرتك وان غلبتها كرهتك', '2016-01-01 11:28:43'),
(7, 10, 'جميلة و طيبة و بشوشة و مخلقة و مثقفة\r\n', 'من هو الذي أبحث عنه\r\n', '2016-01-01 11:31:48'),
(8, 11, 'salam 3alikom ana yasmine ou 3omri28ans\r\n', 'inchallh nasfi atni iban 3aila mohtarama ou ikon hanon aktir\r\n', '2016-01-01 11:34:44'),
(9, 12, 'salam 3alikom ana yasmine ou 3omri28ans\r\n', 'salam 3alikom ana yasmine ou 3omri28ans\r\n', '2016-01-01 11:39:46'),
(10, 13, 'je suis une fille sérieuse et de bonne familles j aime bien de trouver mon âme sœur\r\n', 'un homme de bon familles et reste fédérale pour moi et surtout il respecte le femme\r\n', '2016-01-01 11:42:29'),
(11, 14, 'احب المرح وكرة القدم والصداقات والمطالعة انسان غاية في البساطة\r\n', 'جميلة وممتعة في التعامل معها لا تحمل عقد في التعامل لونها قمحي ليست نحيفة ولا سمينة بشدة\r\n', '2016-01-01 12:03:58'),
(12, 15, 'i am very Romantic loveing caring kind and Educated handsom strong mind person\r\n', 'i am looking for very romantic and loveing lady she just looking for Real lover \r\n', '2016-01-01 12:08:11'),
(13, 16, 'un simple personne c''est tout\r\n', 'D’être simple social et belle aussi\r\n', '2016-01-01 12:10:45'),
(14, 17, 'برج الجوزاء هادي حنون أحب الصدق أكره الكذب رومنسي احترم رأي الزوجه بدون فرض\r\n', 'علی قدر من الجمال متدينه حنونه صادقه معتدلة القوام الاحترام بين الزوجين أساس الحياة الزوجيه\r\n', '2016-01-01 12:14:29'),
(15, 18, 'رجل اخاف الله ومحترم وطيب وحنون واحب الفرفشه رومنسي طيب القلب احب الصدق واكره الكذب وأتمنى رجاء حار أي وحده للتسليه أو تفكر للمادة لاتضيع وقتها ووقتي لأن كثير والاغلب لقيتهم كذا انا رجل جاد وابحث عن الي تحافظ على واحتفظ عليها وتكون كل دنيتي وغير كذا لا أحد يتعب نفسه معي واتمنى تختشي ترا مو حلوة\r\n', 'تخاف الله طيبه حنونه متواضعه طيبة القلب رومنسية تحسن التصرف بامور منزلها غير متذمرة تحترمي مثل مااحترمها وماعندي مانع اذا بتكلمل دراستها أو تبي تعمل بس أهم شي الصدق وثم الصدق وثم الصدق\r\n', '2016-01-01 12:17:31'),
(16, 19, 'طباعك normal\r\nمبادئك،islam\r\nأحلامك.voiyage', 'مواصفاتها normal\r\nأخلاقها، normal\r\nحالتها الإجتماعيةnormal', '2016-01-01 12:20:42'),
(17, 20, 'أنا من جده وانا أنسان جاد وﻻ أريد أن العب بقلب أي أنسانه وﻻ أريد أن يلعب أحد بقلبي اﻻ جرح القلوب وأنا أحترم المرأه اللطيفه المحترمه وأحب الرومانسية والحنان والعاطفيه واﻻحضان والقبوﻻت والهدوء وأموت بألحب والرومانسيه في كل شئ بس بالحﻻل وبمايرضي الله ورسوله والحمدلله لدي مشاريع بجده ومستورة والحمدلله\r\n', 'أنسانه محترمة تخاف الله ورسوله في نفسها وعفتها اوﻻ وثانياً طويله او متوسطه الطول بيضاء او حنطيت البشره نحيفه او متوسطة شعرها طويل او للكتف ذات طابع هادء تكون بنت او مطلقه ﻻيهمني فقيرة او غنيه الغنه غني النفس من بنات السعوديه أو من مدن المملكة وترغب بالعيش في جده قريبه من عملي وأعمالي بجده أو من أي دولة عربية أو أسﻻمية ترغب بالاقامة بالمملكة بجده والله الموفق لما فيه الخير\r\n', '2016-01-01 12:24:30'),
(18, 21, 'انا غير سعودي مولود بالسعوديه \r\nوالباقي بعدين', 'انا غير سعودي والباقي بعد التعارف.', '2016-01-01 12:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `users_favorites`
--

CREATE TABLE IF NOT EXISTS `users_favorites` (
  `uf_id` int(11) NOT NULL AUTO_INCREMENT,
  `uf_from_id` int(11) NOT NULL,
  `uf_to_id` int(11) NOT NULL,
  `uf_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`uf_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users_favorites`
--

INSERT INTO `users_favorites` (`uf_id`, `uf_from_id`, `uf_to_id`, `uf_date`) VALUES
(12, 21, 13, '2016-01-01 12:30:41'),
(13, 5, 19, '2016-01-01 12:41:00'),
(14, 6, 20, '2016-01-01 12:42:29'),
(15, 7, 17, '2016-01-01 12:44:07'),
(16, 16, 9, '2016-01-01 12:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `users_levels`
--

CREATE TABLE IF NOT EXISTS `users_levels` (
  `ul_id` int(11) NOT NULL AUTO_INCREMENT,
  `ul_name` varchar(50) NOT NULL,
  `mainSittings` enum('0','1') NOT NULL,
  `usersMessage` enum('0','1') NOT NULL,
  `adminMessage` enum('0','1') NOT NULL,
  `usersLevels` enum('0','1') NOT NULL,
  `addUsersLevels` enum('0','1') NOT NULL,
  `editLevel` enum('0','1') NOT NULL,
  `usersUpdate` enum('0','1') NOT NULL,
  `allUsers` enum('0','1') NOT NULL,
  `addUsers` enum('0','1') NOT NULL,
  `allPages` enum('0','1') NOT NULL,
  `addPage` enum('0','1') NOT NULL,
  `editPage` enum('0','1') NOT NULL,
  `allSections` enum('0','1') NOT NULL,
  `addSection` enum('0','1') NOT NULL,
  `editSection` enum('0','1') NOT NULL,
  `allStories` enum('0','1') NOT NULL,
  `viewStories` enum('0','1') NOT NULL,
  `unPublishStories` enum('0','1') NOT NULL,
  `allAds` enum('0','1') NOT NULL,
  `addAds` enum('0','1') NOT NULL,
  `editAds` enum('0','1') NOT NULL,
  `siteFeatures` enum('0','1') NOT NULL,
  `addSiteFeatures` enum('0','1') NOT NULL,
  `editSiteFeatures` enum('0','1') NOT NULL,
  `faqs` enum('0','1') NOT NULL,
  `addFaqs` enum('0','1') NOT NULL,
  `editFaqs` enum('0','1') NOT NULL,
  PRIMARY KEY (`ul_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_levels`
--

INSERT INTO `users_levels` (`ul_id`, `ul_name`, `mainSittings`, `usersMessage`, `adminMessage`, `usersLevels`, `addUsersLevels`, `editLevel`, `usersUpdate`, `allUsers`, `addUsers`, `allPages`, `addPage`, `editPage`, `allSections`, `addSection`, `editSection`, `allStories`, `viewStories`, `unPublishStories`, `allAds`, `addAds`, `editAds`, `siteFeatures`, `addSiteFeatures`, `editSiteFeatures`, `faqs`, `addFaqs`, `editFaqs`) VALUES
(1, 'مستخدم', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(2, 'رئيس', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users_message`
--

CREATE TABLE IF NOT EXISTS `users_message` (
  `um_id` int(11) NOT NULL AUTO_INCREMENT,
  `um_from_id` int(11) NOT NULL,
  `um_to_id` int(11) NOT NULL,
  `um_text` longtext NOT NULL,
  `um_view` enum('0','1') NOT NULL,
  `um_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`um_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users_message`
--

INSERT INTO `users_message` (`um_id`, `um_from_id`, `um_to_id`, `um_text`, `um_view`, `um_date`) VALUES
(1, 21, 13, 'السلام عليكم', '0', '2016-01-01 12:30:51'),
(2, 5, 19, 'السلام عليكم', '0', '2016-01-01 12:41:12'),
(3, 6, 20, 'السلام عليكم', '0', '2016-01-01 12:42:42'),
(4, 7, 17, 'السلام عليكم', '0', '2016-01-01 12:44:20'),
(5, 16, 9, 'السلام عليكم', '0', '2016-01-01 12:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE IF NOT EXISTS `users_online` (
  `uo_id` int(11) NOT NULL AUTO_INCREMENT,
  `uo_ur_id` int(11) NOT NULL,
  `uo_online_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uo_leave_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`uo_id`),
  KEY `uo_ur_id` (`uo_ur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_photos`
--

CREATE TABLE IF NOT EXISTS `users_photos` (
  `up_id` int(11) NOT NULL AUTO_INCREMENT,
  `up_ur_id` int(11) NOT NULL,
  `up_photo` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`up_id`),
  KEY `up_ur_id` (`up_ur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `users_photos`
--

INSERT INTO `users_photos` (`up_id`, `up_ur_id`, `up_photo`, `date`) VALUES
(1, 5, 'stock-photo-happy-girl-texting-on-a-smart-phone-in-a-train-station-while-is-waiting-270938675.jpg', '2016-01-01 11:10:11'),
(2, 5, 'stock-photo-happy-meeting-of-two-friends-hugging-in-the-street-318255056.jpg', '2016-01-01 11:10:20'),
(3, 5, 'stock-photo-passenger-traveling-and-feeling-dizzy-with-headache-in-a-train-travel-270745160.jpg', '2016-01-01 11:10:30'),
(4, 5, 'stock-photo-sad-woman-or-teenager-girl-looking-through-a-steamy-car-window-270757580.jpg', '2016-01-01 11:10:41'),
(5, 5, 'stock-photo-shopper-woman-buying-online-on-the-smart-phone-in-the-street-268604339.jpg', '2016-01-01 11:10:50'),
(6, 5, 'stock-photo-side-view-of-a-girl-using-a-laptop-while-waiting-in-a-train-station-in-a-sunny-day-270743516.jpg', '2016-01-01 11:11:07'),
(7, 6, 'stock-photo-american-soldier-using-computer-in-her-office-267271361.jpg', '2016-01-01 11:15:54'),
(8, 6, 'stock-photo-pretty-hipster-girl-taking-selfie-and-making-duck-face-sending-kisses-and-holding-peace-sign-2642863101.jpg', '2016-01-01 11:16:05'),
(9, 6, 'stock-photo-smiling-hipster-girl-texting-on-cell-phone-sending-sms-text-message-264286343.jpg', '2016-01-01 11:16:14'),
(10, 6, 'stock-photo-photo-of-a-young-american-soldier-using-her-computer-office-work-skype-time-267271517.jpg', '2016-01-01 11:16:24'),
(11, 6, 'indian_facebook_girls_profile+cute_stylish_(29).jpg', '2016-01-01 11:16:39'),
(12, 7, 'stock-photo-portrait-of-young-pretty-funny-smiling-girl-in-cold-weather-dressed-in-color-clothes-and-warm-hat-129985058.jpg', '2016-01-01 11:20:15'),
(13, 7, 'stock-photo-portrait-of-young-pretty-funny-smiling-girl-in-cold-weather-dressed-in-color-clothes-and-warm-hat-129985079.jpg', '2016-01-01 11:20:24'),
(14, 7, 'stock-photo-portrait-of-young-pretty-funny-smiling-girl-in-cold-weather-dressed-in-color-clothes-and-warm-hat-129985082.jpg', '2016-01-01 11:20:33'),
(15, 7, 'indian_facebook_girls_profile+cute_stylish_(30)1.jpg', '2016-01-01 11:20:42'),
(16, 7, 'stock-photo-portrait-of-young-pretty-funny-smiling-girl-in-cold-weather-dressed-in-color-clothes-and-warm-hat-1299850821.jpg', '2016-01-01 11:20:58'),
(17, 8, 'stock-photo-beautiful-hipster-girl-with-skate-board-wearing-sunglasses-179211242.jpg', '2016-01-01 11:24:41'),
(18, 8, 'stock-photo-beautiful-hipster-girl-with-skate-board-wearing-sunglasses-179211257.jpg', '2016-01-01 11:24:48'),
(19, 8, 'stock-photo-beautiful-hipster-girl-with-skate-board-wearing-sunglasses-179211266.jpg', '2016-01-01 11:24:56'),
(20, 8, 'stock-photo-beautiful-hipster-girl-with-skate-board-wearing-sunglasses-179211269.jpg', '2016-01-01 11:25:04'),
(21, 8, 'stock-photo-beautiful-hipster-girl-with-skate-board-wearing-sunglasses-179211275.jpg', '2016-01-01 11:25:14'),
(22, 11, 'beautiful_business_computer_263219.jpg', '2016-01-01 11:34:55'),
(23, 11, 'christmas_girl_with_hat_186425.jpg', '2016-01-01 11:35:02'),
(24, 11, 'country_girl_with_hat_188656.jpg', '2016-01-01 11:35:09'),
(25, 11, 'girl_with_apple_185235.jpg', '2016-01-01 11:35:18'),
(26, 11, 'girl_with_bubbles_186431.jpg', '2016-01-01 11:35:27'),
(27, 13, 'saint_patrick039s_day_girl_194208.jpg', '2016-01-01 11:42:44'),
(28, 13, 'saint_patrick039s_day_girl_1942081.jpg', '2016-01-01 11:42:53'),
(29, 13, 'saint_patrick039s_day_girl_194210.jpg', '2016-01-01 11:43:00'),
(30, 16, '543148549.jpg', '2016-01-01 12:11:01'),
(31, 16, '543148549_(1).jpg', '2016-01-01 12:11:12'),
(32, 16, '543148587.jpg', '2016-01-01 12:11:21'),
(33, 16, '543148621.jpg', '2016-01-01 12:11:31'),
(34, 17, '543148387.jpg', '2016-01-01 12:14:43'),
(35, 17, '543148463.jpg', '2016-01-01 12:14:50'),
(36, 17, '543148483.jpg', '2016-01-01 12:14:57'),
(37, 18, '543148525.jpg', '2016-01-01 12:17:44'),
(38, 19, '543148523.jpg', '2016-01-01 12:21:00'),
(39, 19, '543148545.jpg', '2016-01-01 12:21:10'),
(40, 19, '543148545_(1).jpg', '2016-01-01 12:21:18'),
(41, 19, '543148579.jpg', '2016-01-01 12:21:25'),
(42, 20, '180003441.jpg', '2016-01-01 12:24:48'),
(43, 20, '180003442.jpg', '2016-01-01 12:24:57'),
(44, 20, '180003443.jpg', '2016-01-01 12:25:06'),
(45, 20, '1800034441.jpg', '2016-01-01 12:25:15'),
(46, 21, '525148523.jpg', '2016-01-01 12:28:29'),
(47, 21, '5251485231.jpg', '2016-01-01 12:28:39'),
(48, 21, '525148579.jpg', '2016-01-01 12:28:48'),
(49, 21, '525148605.jpg', '2016-01-01 12:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `users_register`
--

CREATE TABLE IF NOT EXISTS `users_register` (
  `ur_id` int(11) NOT NULL AUTO_INCREMENT,
  `ur_name` varchar(150) NOT NULL,
  `ur_gender` enum('0','1') NOT NULL,
  `ur_email` varchar(150) NOT NULL,
  `ur_password` varchar(150) NOT NULL,
  `ur_age` tinyint(2) NOT NULL,
  `ur_target` varchar(30) NOT NULL,
  `ur_country` varchar(50) NOT NULL,
  `ur_country_stay` varchar(50) NOT NULL,
  `ur_ip` int(11) NOT NULL,
  `ur_last_login` datetime NOT NULL,
  `ur_is_online` enum('0','1') NOT NULL,
  `ur_is_active` enum('0','1') NOT NULL,
  `ur_acount_done` enum('0','1') NOT NULL,
  `ur_photo` varchar(400) NOT NULL,
  `ur_level_id` int(11) NOT NULL,
  `ur_date` datetime NOT NULL,
  PRIMARY KEY (`ur_id`),
  UNIQUE KEY `ur_email` (`ur_email`),
  UNIQUE KEY `ur_email_2` (`ur_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users_register`
--

INSERT INTO `users_register` (`ur_id`, `ur_name`, `ur_gender`, `ur_email`, `ur_password`, `ur_age`, `ur_target`, `ur_country`, `ur_country_stay`, `ur_ip`, `ur_last_login`, `ur_is_online`, `ur_is_active`, `ur_acount_done`, `ur_photo`, `ur_level_id`, `ur_date`) VALUES
(3, 'admin', '0', 'ahmed@developsw.com', '718c26dcbe5e0fa771ff43d630dfddc8', 33, 'زواج تعدد', 'مصر', 'مصر', 11, '2015-11-18 10:18:18', '1', '1', '1', 'download.jpg', 2, '2015-11-02 07:21:14'),
(4, 'ناهد السيد', '1', 'fla@fla.com', '4264767ab98391e9bdedbdd857751162', 25, 'تعارف وتواصل', 'فلسطين', 'فلسطين', 1270, '2016-01-01 08:01:49', '0', '', '1', 'indian_facebook_girls_profile+cute_stylish_(27).jpg', 1, '2016-01-01 08:01:49'),
(5, 'هالة', '1', 'lala@la.com', 'e09a23f08805d8dd4bed4807bcb44023', 28, 'زواج عادي', 'لبنان', 'لبنان', 1270, '2016-01-01 14:01:46', '0', '', '1', 'stock-photo-woman-smiling-with-perfect-smile-and-white-teeth-in-a-park-and-looking-at-camera-268932410.jpg', 1, '2016-01-01 13:01:03'),
(6, 'رحمة محمد', '1', 'toto@to.com', '6337fc947a14132a40794f9527a91fb3', 32, 'تعارف وتواصل', 'سلطنة عمان', 'تونس', 1270, '2016-01-01 14:01:21', '0', '', '1', 'stock-photo-pretty-hipster-girl-taking-selfie-and-making-duck-face-sending-kisses-and-holding-peace-sign-264286310.jpg', 1, '2016-01-01 13:01:47'),
(7, 'نعيمة السيد', '1', 'koko@ko.com', 'b521951856eb82b79a5145a5907b8eae', 33, 'زواج عادي', 'فلسطين', 'الكويت', 1270, '2016-01-01 14:01:00', '1', '', '1', 'indian_facebook_girls_profile+cute_stylish_(30).jpg', 1, '2016-01-01 13:01:22'),
(8, 'مريم ميرو', '1', 'mor@mo.com', 'aa67b9d9ed798219c5f3a717a8819668', 29, 'زواج عادي', 'المغرب', 'المغرب', 1270, '2016-01-01 13:01:40', '0', '', '1', 'indian_facebook_girls_profile+cute_stylish_(31).jpg', 1, '2016-01-01 13:01:40'),
(9, 'jamela', '1', 'lop@lop.com', 'c0b947619303a7a416c5ba973da7ff4a', 31, 'تعارف وتواصل', 'سوريا', 'لبنان', 1270, '2016-01-01 13:01:54', '0', '', '1', 'Indian_Girl_pa24-_8.jpg', 1, '2016-01-01 13:01:54'),
(10, 'حنان', '1', 'msr@msr.com', 'aa8c61a4db2057c6aa0a9e78e2c0aa8e', 28, 'زواج عادي', 'مصر', 'مصر', 1270, '2016-01-01 13:01:17', '0', '', '1', 'Indian_Girl_pa24-_3.jpg', 1, '2016-01-01 13:01:17'),
(11, 'فرياال', '1', 'tutu@tu.com', 'a53d89077fc85da5835a6ca53db5a492', 30, 'زواج عادي', 'تونس', 'المغرب', 1270, '2016-01-01 13:01:55', '0', '', '1', 'santa_girl_with_tree_187482.jpg', 1, '2016-01-01 13:01:55'),
(12, 'milissa', '1', 'sasa@sa.com', '387643a20930b45537beb31f1f14eba9', 32, 'زواج عادي', 'سوريا', 'سوريا', 1270, '2016-01-01 13:01:44', '0', '', '1', '10474980_801284513333818_219444431_n.jpg', 1, '2016-01-01 13:01:44'),
(13, 'امل', '1', 'errer@er.com', '1e50515a5668e16403d6c9e068721fd9', 24, 'زواج تعدد', 'ليبيا', 'الإمارات', 1270, '2016-01-01 13:01:01', '0', '', '1', 'saint_patrick039s_day_girl_194206.jpg', 1, '2016-01-01 13:01:01'),
(14, 'الوالى', '0', 'al@al.com', 'bf9840efd89338c17d97435c80835724', 34, 'زواج تعدد', 'سوريا', 'قطر', 1270, '2016-01-01 14:01:31', '0', '', '1', 'stock-photo-handsome-young-man-smiling-outdoors-105876797.jpg', 1, '2016-01-01 14:01:31'),
(15, 'Hanif', '0', 'ddd@dws.com', 'bedf82853f19ddd01221e27e9f3238ba', 30, 'زواج تعدد', 'فلسطين', 'سلطنة عمان', 1270, '2016-01-01 14:01:08', '0', '', '1', '528913617.jpg', 1, '2016-01-01 14:01:08'),
(16, 'محمد حماد', '0', 'gog@le.com', '925be1eb6046bc32e92a9617e0eaa81e', 33, 'تعارف وتواصل', 'فلسطين', 'فلسطين', 1270, '2016-01-01 14:01:51', '0', '', '1', '543148385.jpg', 1, '2016-01-01 14:01:24'),
(17, 'عبد الرحمن', '0', 'abd@alr7man.com', 'db4146f4b6f9e9155a870adfd4265caa', 33, 'زواج عادي', 'لبنان', 'سلطنة عمان', 1270, '2016-01-01 14:01:05', '0', '', '1', '543148453.jpg', 1, '2016-01-01 14:01:05'),
(18, 'عمر جمال', '0', 'emr@mk.com', '74b7895adabd081e8aeeec39bd279c6b', 32, 'صداقة عبر النت', 'الإمارات', 'الإمارات', 1270, '2016-01-01 14:01:59', '0', '', '1', '543148513.jpg', 1, '2016-01-01 14:01:59'),
(19, 'محمد', '0', 'ltr@lffl.com', 'b01b3a0ed552299f35e00c5ca381a999', 27, 'زواج تعدد', 'قطر', 'قطر', 1270, '2016-01-01 14:01:11', '0', '', '1', '543148465.jpg', 1, '2016-01-01 14:01:11'),
(20, 'خالد ابراهيم', '0', 'so@so.com', 'bf7a9d3373455282885da7d7ea7c1776', 33, 'تعارف وتواصل', 'اليمن', 'سوريا', 1270, '2016-01-01 14:01:41', '0', '', '1', '180003444.jpg', 1, '2016-01-01 14:01:41'),
(21, 'الراشد حمدان', '0', 'lopwd@df.com', 'e53787af188c5dd5401301e592c64132', 33, 'صداقة عبر النت', 'قطر', 'لبنان', 1270, '2016-01-01 14:01:45', '0', '', '1', '525148519.jpg', 1, '2016-01-01 14:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `users_social_position`
--

CREATE TABLE IF NOT EXISTS `users_social_position` (
  `usp_id` int(11) NOT NULL AUTO_INCREMENT,
  `us_ur_id` int(11) NOT NULL,
  `usp_learn` varchar(30) NOT NULL,
  `usp_work` varchar(30) NOT NULL,
  `usp_work_field` varchar(30) NOT NULL,
  `usp_family_status` varchar(30) NOT NULL,
  `usp_want_children` varchar(30) NOT NULL,
  `usp_housing_case` varchar(50) NOT NULL,
  `usp_ready_move` varchar(30) NOT NULL,
  `usp_weight` varchar(30) NOT NULL,
  `usp_height` varchar(30) NOT NULL,
  `usp_skin_color` varchar(30) NOT NULL,
  `usp_physique` varchar(30) NOT NULL,
  `usp_physical_condition` varchar(30) NOT NULL,
  `usp_monthly_income` varchar(30) NOT NULL,
  `usp_health_status` varchar(30) NOT NULL,
  `usp_religious_commitment` varchar(30) NOT NULL,
  `us_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`usp_id`),
  KEY `us_ur_id` (`us_ur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users_social_position`
--

INSERT INTO `users_social_position` (`usp_id`, `us_ur_id`, `usp_learn`, `usp_work`, `usp_work_field`, `usp_family_status`, `usp_want_children`, `usp_housing_case`, `usp_ready_move`, `usp_weight`, `usp_height`, `usp_skin_color`, `usp_physique`, `usp_physical_condition`, `usp_monthly_income`, `usp_health_status`, `usp_religious_commitment`, `us_date`) VALUES
(1, 4, 'غير محدد', 'غير محدد', 'غير محدد', '', '', 'غير محدد', 'غير محدد', '140', '160', 'بياض الثلج', 'غير محدد', '', '(انا دخلى)', ' الحمد لله حديد ', '', '2016-01-01 06:05:13'),
(2, 5, 'ثانوي', 'أعمال حرة', 'أعمال منزلية', 'مطلق', 'نعم', 'أعيش وحدي', 'داخل منطقتي', '130', '190', 'أبيض', 'ضخم', 'ميسور', '100', ' الحمد لله حديد ', ' بصلى الحمد لله ', '2016-01-01 11:06:44'),
(3, 6, 'درجة البكالوريوس', 'موظف حكومي', 'الإعلانات', 'أعزب', 'لا', 'أعيش مع أصدقاء', 'أريد أن أظل في منزلي', '100', '180', 'بياض الثلج', 'قوام متناسب', 'ميسور', 'لا احب ان اقول', ' الحمد لله حديد ', ' بصلى الحمد لله ', '2016-01-01 11:13:55'),
(4, 7, 'غير محدد', 'غير محدد', 'غير محدد', 'أعزب', 'لا', 'غير محدد', 'غير محدد', 'غير محدد', 'غير محدد', 'غير محدد', 'غير محدد', 'ميسور', '(انا دخلى)', ' الحمد لله حديد ', ' بصلى الحمد لله ', '2016-01-01 11:19:00'),
(5, 8, 'إعدادي', 'طالب', 'أعمال تطوعية', 'أعزب', 'لا', 'أعيش وحدي', 'أريد أن أظل في منزلي', '90', '160', 'أبيض', 'قوام متناسب', 'ميسور', 'لا احب ان اقول', ' الحمد لله حديد ', ' بصلى الحمد لله ', '2016-01-01 11:23:26'),
(6, 9, 'درجة البكالوريوس', 'موظف حكومي', 'الصحافة والإعلام', 'أعزب', 'لا', 'أعيش مع أهلي', 'داخل منطقتي', '80', '160', 'بياض الثلج', 'رياضي', 'ميسور', 'لا احب ان اقول', ' الحمد لله حديد ', ' بصلى الحمد لله ', '2016-01-01 11:27:51'),
(7, 10, 'درجة البكالوريوس', 'موظف قطاع خاص', 'سكرتريا', 'أعزب', 'لا', 'أعيش مع أهلي', 'أريد أن أظل في منزلي', '70', '160', 'أبيض', 'قوام متناسب', '', 'لا احب ان اقول', ' الحمد لله حديد ', ' بصلى الحمد لله ', '2016-01-01 11:31:13'),
(8, 11, 'إبتدائي', 'موظف حكومي', 'غير محدد', 'أعزب', 'لا', 'أعيش وحدي', 'أريد أن أظل في منزلي', '60', '150', 'قمحي فاتح', 'صغير', 'ميسور', 'لا احب ان اقول', ' الحمد لله حديد ', ' بصلى الحمد لله ', '2016-01-01 11:33:34'),
(9, 12, 'إعدادي', 'أعمال حرة', 'مجال المطاعم', 'أعزب', 'لا', 'أعيش مع أهلي', 'إلى بلد آخر', '90', '160', 'بياض الثلج', 'رياضي', '', 'لا احب ان اقول', ' الحمد لله حديد ', 'مقصر', '2016-01-01 11:38:50'),
(10, 13, 'ثانوي', 'أعمال حرة', 'المبيعات', 'أعزب', 'لا', 'أعيش مع أصدقاء', 'أريد أن أظل في منزلي', '90', '160', 'أبيض', 'رياضي', 'ميسور', 'لا احب ان اقول', ' الحمد لله حديد ', ' بصلى الحمد لله ', '2016-01-01 11:41:48'),
(11, 14, 'إعدادي', 'موظف حكومي', 'المبيعات', 'أعزب', 'لا', 'أعيش مع أهلي', 'أريد أن أظل في منزلي', '130', '190', 'أبيض', 'قوام متناسب', 'ميسور', '1000', ' الحمد لله حديد ', ' بصلى الحمد لله ', '2016-01-01 12:03:11'),
(12, 15, 'إعدادي', 'أعمال حرة', 'المجال الفني والإبداعي', 'أعزب', 'لا', 'أعيش مع أهلي', 'داخل منطقتي', '130', '180', 'بياض الثلج', 'ممتلئ', 'ميسور', '500', ' الحمد لله حديد ', ' بصلى الحمد لله ', '2016-01-01 12:07:40'),
(13, 16, 'درجة البكالوريوس', 'موظف قطاع خاص', 'رعاية الأطفال', 'أعزب', 'لا', 'أعيش وحدي', 'داخل منطقتي', '130', '180', 'أبيض', 'زيادة في بعض الكيلوغرامات', 'متوسط', '2000', ' الحمد لله حديد ', ' بصلى الحمد لله ', '2016-01-01 12:10:02'),
(14, 17, 'إبتدائي', 'موظف حكومي', 'أعمال منزلية', 'أعزب', 'لا', 'أعيش مع أسرتي الصغيرة', 'داخل بلدي', '130', '180', 'أبيض', 'قوام متناسب', 'ميسور', '500', ' الحمد لله حديد ', ' بصلى الحمد لله ', '2016-01-01 12:13:37'),
(15, 18, 'إعدادي', 'طالب', 'أعمال تطوعية', 'مطلق', '', 'أعيش مع أصدقاء', 'داخل منطقتي', '130', '150', 'بياض الثلج', 'زيادة في بعض الكيلوغرامات', 'ميسور', '2000', ' الحمد لله حديد ', ' بصلى الحمد لله ', '2016-01-01 12:16:48'),
(16, 19, 'إعدادي', 'موظف حكومي', 'رعاية الأطفال', 'مطلق', 'لا', 'أعيش مع أصدقاء', 'داخل منطقتي', '140', '190', 'بياض الثلج', 'قوام متناسب', 'ميسور', '100', 'مرض متوسط', ' بصلى الحمد لله ', '2016-01-01 12:19:51'),
(17, 20, 'إعدادي', 'موظف قطاع خاص', 'سكرتريا', 'أعزب', 'لا', 'أعيش وحدي', 'أريد أن أظل في منزلي', '130', '150', 'بياض الثلج', 'صغير', 'ميسور', 'لا احب ان اقول', ' الحمد لله حديد ', ' بصلى الحمد لله ', '2016-01-01 12:23:27'),
(18, 21, 'إبتدائي', 'طالب', 'مجال المطاعم', 'أعزب', 'لا', 'أعيش مع أصدقاء', 'داخل بلدي', '140', '190', 'بياض الثلج', 'ضخم', 'ميسور', '1000', ' الحمد لله حديد ', ' بصلى الحمد لله ', '2016-01-01 12:27:19');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_ibfk_1` FOREIGN KEY (`p_section_id`) REFERENCES `sections` (`se_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_social_position`
--
ALTER TABLE `users_social_position`
  ADD CONSTRAINT `users_social_position_ibfk_1` FOREIGN KEY (`us_ur_id`) REFERENCES `users_register` (`ur_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
