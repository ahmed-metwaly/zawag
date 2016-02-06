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
            <h2 class="register-title"> <?php echo $sittings['registerTitle'][0]; ?> 
                <p class="register-text"> <?php echo $sittings['registerTitle'][1]; ?>  </p>
            </h2>
            <!-- col -->

            <div class="col-lg-12 com-md-12 col-sm-12 col-xs-12">

         <!-- Nav tabs -->
    <div>
    <div class="col-lg-12">
    <ul class="nav my-nav-tab " id="tabb" role="tablist">

    <li class="col-lg-2 col-md-2 col-sm-12 col-xs-12 <?php  echo $session->userdata('userIsRegister') != '1' ? 'active1' : '';  ?> " role="presentation" id="homes"><a class="title-tab"  aria-controls="home" role="tab" data-toggle="tab"><?php echo $sittings['registerUserDataTitle']; ?><i class="icon-tab fa fa-share fa-lg"></i></a></li>

    <li class="col-lg-2 col-md-2 col-sm-12 col-xs-12 <?php  echo $session->userdata('userIsRegister') == '1' && $session->userdata('dataSituation') != '1' ? 'active1' : '';  ?> " role="presentation" id="profiles"><a class="title-tab"  aria-controls="profile" role="tab" data-toggle="tab"> <?php echo $sittings['registerUserDataPostion']; ?> <i class="icon-tab fa fa-newspaper-o fa-lg"></i></a></li>

    <li class="col-lg-2 col-md-2 col-sm-12 col-xs-12 <?php echo $session->userdata('dataSituation') == '1' && $session->userdata('upload') != '1' ? 'active1' : '' ?> " role="presentation" id="messagess"><a class="title-tab"  aria-controls="messages" role="tab" data-toggle="tab"> <?php echo $sittings['registerUserDataPhotoTitle']; ?> <i class="icon-tab fa fa-smile-o fa-lg"></i></a></li>

    <li class="col-lg-2 col-md-2 col-sm-12 col-xs-12 <?php echo $session->userdata('upload') == '1' && $session->userdata('userAbut') != '1' ? 'active1' : ''; ?>" role="presentation" id="settingss"><a class="title-tab"  aria-controls="settings" role="tab" data-toggle="tab"> <?php echo $sittings['registerUserDataDescTitle']; ?> <i class="icon-tab fa fa-pencil fa-lg"></i></a></li>

    <li class="col-lg-2 col-md-2 col-sm-12 col-xs-12 <?php echo $session->userdata('userAbut') == '1' ? 'active1' : ''; ?>" role="presentation" id="mails"><a class="title-tab"  aria-controls="mail" role="tab" data-toggle="tab"> <?php echo $sittings['registerUserDataMailTitle']; ?> <i class="icon-tab fa fa-envelope-o fa-lg"></i></a></li>

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
    <label class="label-title" for="exampleInputEmail1"><?php echo $sittings['registerUserDataType'] ; ?></label><br/>
    <div class="radio radio-info radio-inline">
                        <input required="required" type="radio" <?php echo $session->userdata('gender') == '0' ? 'checked' : ''; ?>  id="inlineRadio1" value="0" name="gender" >
                        <label class="radio-kind" for="inlineRadio1"> <?php echo $sittings['registerUserDataTypeLabil'][0]; ?> </label>
                    </div>
                    <div class="radio radio-inline">
                        <input required="required" type="radio" <?php echo $session->userdata('gender') == '1' ? 'checked' : ''; ?> id="inlineRadio2" value="1" name="gender">
                        <label class="radio-kind" for="inlineRadio2"> <?php echo $sittings['registerUserDataTypeLabil'][1]; ?></label>
                    </div>
        <div class="error" id="errorGender"></div>
    </div>

    <div class="form-group">
        <label class="label-title" for="exampleInputEmail1">العمر</label>
        <select required="required" id="age" class="form-control" name="age">
            <option value="">( عمري )</option>
            <option <?php echo $session->userdata('age') == '18' ? 'selected' : ''; ?> value="18">18  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '19' ? 'selected' : ''; ?> value="19">19  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '20' ? 'selected' : ''; ?> value="20">20  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '21' ? 'selected' : ''; ?> value="21">21  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '22' ? 'selected' : ''; ?> value="22">22  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '23' ? 'selected' : ''; ?> value="23">23  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '24' ? 'selected' : ''; ?> value="24">24  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '25' ? 'selected' : ''; ?> value="25">25  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '26' ? 'selected' : ''; ?> value="26">26  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '27' ? 'selected' : ''; ?> value="27">27  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '28' ? 'selected' : ''; ?> value="28">28  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '29' ? 'selected' : ''; ?> value="29">29  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '30' ? 'selected' : ''; ?> value="30">30  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '31' ? 'selected' : ''; ?> value="31">31  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '32' ? 'selected' : ''; ?> value="32">32  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '33' ? 'selected' : ''; ?> value="33">33  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '34' ? 'selected' : ''; ?> value="34">34  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '35' ? 'selected' : ''; ?> value="35">35  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '36' ? 'selected' : ''; ?> value="36">36  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '37' ? 'selected' : ''; ?> value="37">37  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '38' ? 'selected' : ''; ?> value="38">38  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '39' ? 'selected' : ''; ?> value="39">39  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '40' ? 'selected' : ''; ?> value="40">40  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '41' ? 'selected' : ''; ?> value="41">41  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '42' ? 'selected' : ''; ?> value="42">42  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '43' ? 'selected' : ''; ?> value="43">43  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '44' ? 'selected' : ''; ?> value="44">44  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '45' ? 'selected' : ''; ?> value="45">45  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '46' ? 'selected' : ''; ?> value="46">46  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '47' ? 'selected' : ''; ?> value="47">47  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '48' ? 'selected' : ''; ?> value="48">48  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '49' ? 'selected' : ''; ?> value="49">49  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '50' ? 'selected' : ''; ?> value="50">50  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '51' ? 'selected' : ''; ?> value="51">51  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '52' ? 'selected' : ''; ?> value="52">52  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '53' ? 'selected' : ''; ?> value="53">53  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '54' ? 'selected' : ''; ?> value="54">54  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '55' ? 'selected' : ''; ?> value="55">55  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '56' ? 'selected' : ''; ?> value="56">56  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '57' ? 'selected' : ''; ?> value="57">57  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '58' ? 'selected' : ''; ?> value="58">58  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '59' ? 'selected' : ''; ?> value="59">59  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '60' ? 'selected' : ''; ?> value="60">60  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '61' ? 'selected' : ''; ?> value="61">61  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '62' ? 'selected' : ''; ?> value="62">62  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '63' ? 'selected' : ''; ?> value="63">63  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '64' ? 'selected' : ''; ?> value="64">64  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '65' ? 'selected' : ''; ?> value="65">65  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '66' ? 'selected' : ''; ?> value="66">66  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '67' ? 'selected' : ''; ?> value="67">67  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '68' ? 'selected' : ''; ?> value="68">68  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '69' ? 'selected' : ''; ?> value="69">69  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '70' ? 'selected' : ''; ?> value="70">70  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '71' ? 'selected' : ''; ?> value="71">71  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '72' ? 'selected' : ''; ?> value="72">72  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '73' ? 'selected' : ''; ?> value="73">73  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '74' ? 'selected' : ''; ?> value="74">74  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '75' ? 'selected' : ''; ?> value="75">75  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '76' ? 'selected' : ''; ?> value="76">76  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '77' ? 'selected' : ''; ?> value="77">77  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '78' ? 'selected' : ''; ?> value="78">78  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '79' ? 'selected' : ''; ?> value="79">79  <?php echo  $sittings['year'];  ?> </option>
            <option <?php echo $session->userdata('age') == '80' ? 'selected' : ''; ?> value="80">80+  <?php echo  $sittings['year'];  ?> </option>
        </select>
        <div class="error" id="errorAge"></div>
    </div>


  <div class="form-group">
  <label class="label-title" for="exampleInputEmail1"><?php echo $sittings['registerUserDataTarget']; ?></label>
    <select required="required" id="target" class="form-control" name="target">
        <option value="" >( <?php echo $sittings['ter']; ?>  )</option>
        <option <?php echo $session->userdata('target') == '1' ? 'selected' : ''; ?> value="1" ><?php echo $target[1]; ?></option>
        <option <?php echo $session->userdata('target') == '2' ? 'selected' : ''; ?> value="2"> <?php echo $target[2]; ?> </option>
        <option <?php echo $session->userdata('target') == '3' ? 'selected' : ''; ?> value="3"> <?php echo $target[3]; ?> </option>
        <option <?php echo $session->userdata('target') == '4' ? 'selected' : ''; ?> value="4"> <?php echo $target[4]; ?> </option>
        <option <?php echo $session->userdata('target') == '5' ? 'selected' : ''; ?> value="5"> <?php echo $target[5]; ?> </option>
    </select>
      <div class="error" id="errorTarget"></div>
  </div>
  <div class="form-group">
  <label class="label-title" for="exampleInputEmail1"><?php echo $sittings['storiescontry']; ?></label>
    <select required="required" id="country" class="form-control" name="country">
        <option value=""> (  <?php echo $sittings['rImFrom']; ?> ) </option>
        <option value="JO"><?php echo $contry['JO']; ?></option>
        <option value="AE"><?php echo $contry['AE']; ?></option>
        <option value="BH"><?php echo $contry['BH']; ?></option>
        <option value="DZ"><?php echo $contry['DZ']; ?></option>
        <option value="SA"><?php echo $contry['SA']; ?></option>
        <option value="IQ"><?php echo $contry['IQ']; ?></option>
        <option value="KW"><?php echo $contry['KW']; ?></option>
        <option value="MA"><?php echo $contry['MA']; ?></option>
        <option value="YE"><?php echo $contry['YE']; ?></option>
        <option value="TN"><?php echo $contry['TN']; ?></option>
        <option value="OM"><?php echo $contry['OM']; ?></option>
        <option value="SY"><?php echo $contry['SY']; ?></option>
        <option value="PS"><?php echo $contry['PS']; ?></option>
        <option value="QA"><?php echo $contry['QA']; ?></option>
        <option value="LB"><?php echo $contry['LB']; ?></option>
        <option value="LY"><?php echo $contry['LY']; ?></option>
        <option value="EG"><?php echo $contry['EG']; ?></option>
        <option value="IS"><?php echo $contry['IS']; ?></option>
        <option value="AZ"><?php echo $contry['AZ']; ?></option>
        <option value="AM"><?php echo $contry['AM']; ?></option>
        <option value="AU"><?php echo $contry['AU']; ?></option>
        <option value="FC"><?php echo $contry['FC']; ?></option>
        <option value="AF"><?php echo $contry['AF']; ?></option>
        <option value="AL"><?php echo $contry['AL']; ?></option>
        <option value="DE"><?php echo $contry['DE']; ?></option>
        <option value="AO"><?php echo $contry['AO']; ?></option>
        <option value="UY"><?php echo $contry['UY']; ?></option>
        <option value="UZ"><?php echo $contry['UZ']; ?></option>
        <option value="UG"><?php echo $contry['UG']; ?></option>
        <option value="UA"><?php echo $contry['UA']; ?></option>
        <option value="ET"><?php echo $contry['ET']; ?></option>
        <option value="ER"><?php echo $contry['ER']; ?></option>
        <option value="ES"><?php echo $contry['ES']; ?></option>
        <option value="EE"><?php echo $contry['EE']; ?></option>
        <option value="ID"><?php echo $contry['ID']; ?></option>
        <option value="IR"><?php echo $contry['IR']; ?></option>
        <option value="IT"><?php echo $contry['IT']; ?></option>
        <option value="AR"><?php echo $contry['AR']; ?></option>
        <option value="EC"><?php echo $contry['EC']; ?></option>
        <option value="BR"><?php echo $contry['BR']; ?></option>
        <option value="PT"><?php echo $contry['PT']; ?></option>
        <option value="BA"><?php echo $contry['BA']; ?></option>
        <option value="CZ"><?php echo $contry['CZ']; ?></option>
        <option value="ME"><?php echo $contry['ME']; ?></option>
        <option value="DK"><?php echo $contry['DK']; ?></option>
        <option value="CV"><?php echo $contry['CV']; ?></option>
        <option value="SN"><?php echo $contry['SN']; ?></option>
        <option value="SD"><?php echo $contry['SD']; ?></option>
        <option value="SE"><?php echo $contry['SE']; ?></option>
        <option value="SO"><?php echo $contry['SO']; ?></option>
        <option value="CN"><?php echo $contry['CN']; ?></option>
        <option value="GA"><?php echo $contry['GA']; ?></option>
        <option value="PH"><?php echo $contry['PH']; ?></option>
        <option value="CM"><?php echo $contry['CM']; ?></option>
        <option value="DC"><?php echo $contry['CD']; ?></option>
        <option value="MX"><?php echo $contry['MX']; ?></option>
        <option value="GB"><?php echo $contry['GB']; ?></option>
        <option value="NO"><?php echo $contry['NO']; ?></option>
        <option value="AT"><?php echo $contry['AT']; ?></option>
        <option value="EN"><?php echo $contry['EN']; ?></option>
        <option value="IN"><?php echo $contry['IN']; ?></option>
        <option value="US"><?php echo $contry['US']; ?></option>
        <option value="JP"><?php echo $contry['JP']; ?></option>
        <option value="GR"><?php echo $contry['GR']; ?></option>
        <option value="IE"><?php echo $contry['IE']; ?></option>
        <option value="PY"><?php echo $contry['PY']; ?></option>
        <option value="PK"><?php echo $contry['PK']; ?></option>
        <option value="BE"><?php echo $contry['BE']; ?></option>
        <option value="BG"><?php echo $contry['BG']; ?></option>
        <option value="BD"><?php echo $contry['BD']; ?></option>
        <option value="BW"><?php echo $contry['BW']; ?></option>
        <option value="MM"><?php echo $contry['MM']; ?></option>
        <option value="PL"><?php echo $contry['PL']; ?></option>
        <option value="BO"><?php echo $contry['BO']; ?></option>
        <option value="PE"><?php echo $contry['PE']; ?></option>
        <option value="RE"><?php echo $contry['PRE']; ?></option>
        <option value="PE"><?php echo $contry['PE']; ?></option>
        <option value="BY"><?php echo $contry['BY']; ?></option>
        <option value="TH"><?php echo $contry['TH']; ?></option>
        <option value="TW"><?php echo $contry['TW']; ?></option>
        <option value="TM"><?php echo $contry['TM']; ?></option>
        <option value="TR"><?php echo $contry['TR']; ?></option>
        <option value="TD"><?php echo $contry['TD']; ?></option>
        <option value="CL"><?php echo $contry['CL']; ?></option>
        <option value="TZ"><?php echo $contry['TZ']; ?></option>
        <option value="TG"><?php echo $contry['TG']; ?></option>
        <option value="GL"><?php echo $contry['GL']; ?></option>
        <option value="DO"><?php echo $contry['DO']; ?></option>
        <option value="CG"><?php echo $contry['CG']; ?></option>
        <option value="ZA"><?php echo $contry['ZA']; ?></option>
        <option value="SS"><?php echo $contry['SS']; ?></option>
        <option value="GE"><?php echo $contry['GE']; ?></option>
        <option value="GAR"><?php echo $contry['GAR']; ?></option>
        <option value="DJ"><?php echo $contry['DJ']; ?></option>
        <option value="RW"><?php echo $contry['RW']; ?></option>
        <option value="RU"><?php echo $contry['RU']; ?></option>
        <option value="RO"><?php echo $contry['RO']; ?></option>
        <option value="ZM"><?php echo $contry['ZM']; ?></option>
        <option value="ZW"><?php echo $contry['ZW']; ?></option>
        <option value="CI"><?php echo $contry['CI']; ?></option>
        <option value="LK"><?php echo $contry['LK']; ?></option>
        <option value="SK"><?php echo $contry['SK']; ?></option>
        <option value="SI"><?php echo $contry['SI']; ?></option>
        <option value="SG"><?php echo $contry['SG']; ?></option>
        <option value="CH"><?php echo $contry['CH']; ?></option>
        <option value="RS"><?php echo $contry['RS']; ?></option>
        <option value="TJ"><?php echo $contry['TJ']; ?></option>
        <option value="GM"><?php echo $contry['GM']; ?></option>
        <option value="GH"><?php echo $contry['GH']; ?></option>
        <option value="GY"><?php echo $contry['GY']; ?></option>
        <option value="GN"><?php echo $contry['GN']; ?></option>
        <option value="GW"><?php echo $contry['GW']; ?></option>
        <option value="FR"><?php echo $contry['FR']; ?></option>
        <option value="VE"><?php echo $contry['VE']; ?></option>
        <option value="FI"><?php echo $contry['FI']; ?></option>
        <option value="VN"><?php echo $contry['VN']; ?></option>
        <option value="CY"><?php echo $contry['CY']; ?></option>
        <option value="KG"><?php echo $contry['KG']; ?></option>
        <option value="KZ"><?php echo $contry['KZ']; ?></option>
        <option value="HR"><?php echo $contry['HR']; ?></option>
        <option value="KH"><?php echo $contry['KH']; ?></option>
        <option value="CA"><?php echo $contry['CA']; ?></option>
        <option value="CU"><?php echo $contry['CU']; ?></option>
        <option value="KR"><?php echo $contry['KR']; ?></option>
        <option value="KP"><?php echo $contry['KP']; ?></option>
        <option value="KE"><?php echo $contry['KE']; ?></option>
        <option value="CO"><?php echo $contry['CO']; ?></option>
        <option value="LV"><?php echo $contry['LV']; ?></option>
        <option value="LA"><?php echo $contry['LA']; ?></option>
        <option value="LU"><?php echo $contry['LU']; ?></option>
        <option value="LR"><?php echo $contry['LR']; ?></option>
        <option value="LT"><?php echo $contry['LT']; ?></option>
        <option value="MW"><?php echo $contry['MW']; ?></option>
        <option value="MT"><?php echo $contry['MT']; ?></option>
        <option value="ML"><?php echo $contry['ML']; ?></option>
        <option value="MY"><?php echo $contry['MY']; ?></option>
        <option value="MG"><?php echo $contry['MG']; ?></option>
        <option value="MK"><?php echo $contry['MK']; ?></option>
        <option value="MN"><?php echo $contry['MN']; ?></option>
        <option value="MR"><?php echo $contry['MR']; ?></option>
        <option value="MZ"><?php echo $contry['MZ']; ?></option>
        <option value="MD"><?php echo $contry['MD']; ?></option>
        <option value="NA"><?php echo $contry['NA']; ?></option>
        <option value="NP"><?php echo $contry['NP']; ?></option>
        <option value="NG"><?php echo $contry['NG']; ?></option>
        <option value="NI"><?php echo $contry['NI']; ?></option>
        <option value="NZ"><?php echo $contry['NZ']; ?></option>
        <option value="NT"><?php echo $contry['NT']; ?></option>
        <option value="HN"><?php echo $contry['HN']; ?></option>
        <option value="HU"><?php echo $contry['HU']; ?></option>
        <option value="NL"><?php echo $contry['NL']; ?></option>
        <option value="HK"><?php echo $contry['HK']; ?></option>
        <option value="DRS"><?php echo $contry['DRS']; ?></option>
        <option value="GZR"><?php echo $contry['GZR']; ?></option>

    </select>
    </div>
    <div class="error" id="errorCountry"></div>
  </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">
        <div class="form-group">
        <label class="label-title" for="exampleInputName2"><?php echo $sittings['registerUserDataName']; ?></label>
        <input type="text" required="required" name="name" class="form-control"  id="name" placeholder="<?php echo $sittings['registerUserDataNameLabol']; ?>">
        <div class="error" id="errorName"></div>
    </div>


  <div class="form-group">
    <label class="label-title" for="exampleInputEmail1"><?php echo $sittings['registerUserDataEmail']; ?></label>
    <input type="email" required="required" name="email" class="form-control" id="email" placeholder="">
      <div class="error" id="errorEmail"></div>
  </div>

  <div class="form-group">
    <label class="label-title" for="exampleInputEmail1"> <?php echo $sittings['registerUserDataReEmail']; ?> </label>
    <input type="email" required="required" name="remail" class="form-control" id="remail" placeholder="">
      <div class="error" id="errorRemail"></div>
  </div>
    <div class="form-group">
        <label class="label-title" for="exampleInputEmail1"> <?php echo $sittings['registerUserDataStay']; ?> </label>
        <select class="form-control" id="country_stay" required="required" name="country_stay">
            <option value=""> ( <?php echo $sittings['rImFrom']; ?> ) </option>
        <option value="JO"><?php echo $contry['JO']; ?></option>
        <option value="AE"><?php echo $contry['AE']; ?></option>
        <option value="BH"><?php echo $contry['BH']; ?></option>
        <option value="DZ"><?php echo $contry['DZ']; ?></option>
        <option value="SA"><?php echo $contry['SA']; ?></option>
        <option value="IQ"><?php echo $contry['IQ']; ?></option>
        <option value="KW"><?php echo $contry['KW']; ?></option>
        <option value="MA"><?php echo $contry['MA']; ?></option>
        <option value="YE"><?php echo $contry['YE']; ?></option>
        <option value="TN"><?php echo $contry['TN']; ?></option>
        <option value="OM"><?php echo $contry['OM']; ?></option>
        <option value="SY"><?php echo $contry['SY']; ?></option>
        <option value="PS"><?php echo $contry['PS']; ?></option>
        <option value="QA"><?php echo $contry['QA']; ?></option>
        <option value="LB"><?php echo $contry['LB']; ?></option>
        <option value="LY"><?php echo $contry['LY']; ?></option>
        <option value="EG"><?php echo $contry['EG']; ?></option>
        <option value="IS"><?php echo $contry['IS']; ?></option>
        <option value="AZ"><?php echo $contry['AZ']; ?></option>
        <option value="AM"><?php echo $contry['AM']; ?></option>
        <option value="AU"><?php echo $contry['AU']; ?></option>
        <option value="FC"><?php echo $contry['FC']; ?></option>
        <option value="AF"><?php echo $contry['AF']; ?></option>
        <option value="AL"><?php echo $contry['AL']; ?></option>
        <option value="DE"><?php echo $contry['DE']; ?></option>
        <option value="AO"><?php echo $contry['AO']; ?></option>
        <option value="UY"><?php echo $contry['UY']; ?></option>
        <option value="UZ"><?php echo $contry['UZ']; ?></option>
        <option value="UG"><?php echo $contry['UG']; ?></option>
        <option value="UA"><?php echo $contry['UA']; ?></option>
        <option value="ET"><?php echo $contry['ET']; ?></option>
        <option value="ER"><?php echo $contry['ER']; ?></option>
        <option value="ES"><?php echo $contry['ES']; ?></option>
        <option value="EE"><?php echo $contry['EE']; ?></option>
        <option value="ID"><?php echo $contry['ID']; ?></option>
        <option value="IR"><?php echo $contry['IR']; ?></option>
        <option value="IT"><?php echo $contry['IT']; ?></option>
        <option value="AR"><?php echo $contry['AR']; ?></option>
        <option value="EC"><?php echo $contry['EC']; ?></option>
        <option value="BR"><?php echo $contry['BR']; ?></option>
        <option value="PT"><?php echo $contry['PT']; ?></option>
        <option value="BA"><?php echo $contry['BA']; ?></option>
        <option value="CZ"><?php echo $contry['CZ']; ?></option>
        <option value="ME"><?php echo $contry['ME']; ?></option>
        <option value="DK"><?php echo $contry['DK']; ?></option>
        <option value="CV"><?php echo $contry['CV']; ?></option>
        <option value="SN"><?php echo $contry['SN']; ?></option>
        <option value="SD"><?php echo $contry['SD']; ?></option>
        <option value="SE"><?php echo $contry['SE']; ?></option>
        <option value="SO"><?php echo $contry['SO']; ?></option>
        <option value="CN"><?php echo $contry['CN']; ?></option>
        <option value="GA"><?php echo $contry['GA']; ?></option>
        <option value="PH"><?php echo $contry['PH']; ?></option>
        <option value="CM"><?php echo $contry['CM']; ?></option>
        <option value="DC"><?php echo $contry['CD']; ?></option>
        <option value="MX"><?php echo $contry['MX']; ?></option>
        <option value="GB"><?php echo $contry['GB']; ?></option>
        <option value="NO"><?php echo $contry['NO']; ?></option>
        <option value="AT"><?php echo $contry['AT']; ?></option>
        <option value="EN"><?php echo $contry['EN']; ?></option>
        <option value="IN"><?php echo $contry['IN']; ?></option>
        <option value="US"><?php echo $contry['US']; ?></option>
        <option value="JP"><?php echo $contry['JP']; ?></option>
        <option value="GR"><?php echo $contry['GR']; ?></option>
        <option value="IE"><?php echo $contry['IE']; ?></option>
        <option value="PY"><?php echo $contry['PY']; ?></option>
        <option value="PK"><?php echo $contry['PK']; ?></option>
        <option value="BE"><?php echo $contry['BE']; ?></option>
        <option value="BG"><?php echo $contry['BG']; ?></option>
        <option value="BD"><?php echo $contry['BD']; ?></option>
        <option value="BW"><?php echo $contry['BW']; ?></option>
        <option value="MM"><?php echo $contry['MM']; ?></option>
        <option value="PL"><?php echo $contry['PL']; ?></option>
        <option value="BO"><?php echo $contry['BO']; ?></option>
        <option value="PE"><?php echo $contry['PE']; ?></option>
        <option value="RE"><?php echo $contry['PRE']; ?></option>
        <option value="PE"><?php echo $contry['PE']; ?></option>
        <option value="BY"><?php echo $contry['BY']; ?></option>
        <option value="TH"><?php echo $contry['TH']; ?></option>
        <option value="TW"><?php echo $contry['TW']; ?></option>
        <option value="TM"><?php echo $contry['TM']; ?></option>
        <option value="TR"><?php echo $contry['TR']; ?></option>
        <option value="TD"><?php echo $contry['TD']; ?></option>
        <option value="CL"><?php echo $contry['CL']; ?></option>
        <option value="TZ"><?php echo $contry['TZ']; ?></option>
        <option value="TG"><?php echo $contry['TG']; ?></option>
        <option value="GL"><?php echo $contry['GL']; ?></option>
        <option value="DO"><?php echo $contry['DO']; ?></option>
        <option value="CG"><?php echo $contry['CG']; ?></option>
        <option value="ZA"><?php echo $contry['ZA']; ?></option>
        <option value="SS"><?php echo $contry['SS']; ?></option>
        <option value="GE"><?php echo $contry['GE']; ?></option>
        <option value="GAR"><?php echo $contry['GAR']; ?></option>
        <option value="DJ"><?php echo $contry['DJ']; ?></option>
        <option value="RW"><?php echo $contry['RW']; ?></option>
        <option value="RU"><?php echo $contry['RU']; ?></option>
        <option value="RO"><?php echo $contry['RO']; ?></option>
        <option value="ZM"><?php echo $contry['ZM']; ?></option>
        <option value="ZW"><?php echo $contry['ZW']; ?></option>
        <option value="CI"><?php echo $contry['CI']; ?></option>
        <option value="LK"><?php echo $contry['LK']; ?></option>
        <option value="SK"><?php echo $contry['SK']; ?></option>
        <option value="SI"><?php echo $contry['SI']; ?></option>
        <option value="SG"><?php echo $contry['SG']; ?></option>
        <option value="CH"><?php echo $contry['CH']; ?></option>
        <option value="RS"><?php echo $contry['RS']; ?></option>
        <option value="TJ"><?php echo $contry['TJ']; ?></option>
        <option value="GM"><?php echo $contry['GM']; ?></option>
        <option value="GH"><?php echo $contry['GH']; ?></option>
        <option value="GY"><?php echo $contry['GY']; ?></option>
        <option value="GN"><?php echo $contry['GN']; ?></option>
        <option value="GW"><?php echo $contry['GW']; ?></option>
        <option value="FR"><?php echo $contry['FR']; ?></option>
        <option value="VE"><?php echo $contry['VE']; ?></option>
        <option value="FI"><?php echo $contry['FI']; ?></option>
        <option value="VN"><?php echo $contry['VN']; ?></option>
        <option value="CY"><?php echo $contry['CY']; ?></option>
        <option value="KG"><?php echo $contry['KG']; ?></option>
        <option value="KZ"><?php echo $contry['KZ']; ?></option>
        <option value="HR"><?php echo $contry['HR']; ?></option>
        <option value="KH"><?php echo $contry['KH']; ?></option>
        <option value="CA"><?php echo $contry['CA']; ?></option>
        <option value="CU"><?php echo $contry['CU']; ?></option>
        <option value="KR"><?php echo $contry['KR']; ?></option>
        <option value="KP"><?php echo $contry['KP']; ?></option>
        <option value="KE"><?php echo $contry['KE']; ?></option>
        <option value="CO"><?php echo $contry['CO']; ?></option>
        <option value="LV"><?php echo $contry['LV']; ?></option>
        <option value="LA"><?php echo $contry['LA']; ?></option>
        <option value="LU"><?php echo $contry['LU']; ?></option>
        <option value="LR"><?php echo $contry['LR']; ?></option>
        <option value="LT"><?php echo $contry['LT']; ?></option>
        <option value="MW"><?php echo $contry['MW']; ?></option>
        <option value="MT"><?php echo $contry['MT']; ?></option>
        <option value="ML"><?php echo $contry['ML']; ?></option>
        <option value="MY"><?php echo $contry['MY']; ?></option>
        <option value="MG"><?php echo $contry['MG']; ?></option>
        <option value="MK"><?php echo $contry['MK']; ?></option>
        <option value="MN"><?php echo $contry['MN']; ?></option>
        <option value="MR"><?php echo $contry['MR']; ?></option>
        <option value="MZ"><?php echo $contry['MZ']; ?></option>
        <option value="MD"><?php echo $contry['MD']; ?></option>
        <option value="NA"><?php echo $contry['NA']; ?></option>
        <option value="NP"><?php echo $contry['NP']; ?></option>
        <option value="NG"><?php echo $contry['NG']; ?></option>
        <option value="NI"><?php echo $contry['NI']; ?></option>
        <option value="NZ"><?php echo $contry['NZ']; ?></option>
        <option value="NT"><?php echo $contry['NT']; ?></option>
        <option value="HN"><?php echo $contry['HN']; ?></option>
        <option value="HU"><?php echo $contry['HU']; ?></option>
        <option value="NL"><?php echo $contry['NL']; ?></option>
        <option value="HK"><?php echo $contry['HK']; ?></option>
        <option value="DRS"><?php echo $contry['DRS']; ?></option>
        <option value="GZR"><?php echo $contry['GZR']; ?></option>

        </select>
        <div class="error" id="errorCountry_stay"></div>
    </div>

        </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">

 <div class="form-group">
  <label class="label-title" for="exampleInputPassword1"> <?php echo $validation['filedsPass']; ?> </label>
    <input type="password" name="password" class="form-control" id="password" required="required" placeholder="">
     <div class="error" id="errorPassword"></div>
 </div>
  <div class="form-group">
  <label class="label-title" for="exampleInputPassword1"> <?php echo $validation['filedsRemail']; ?> </label>
    <input type="password" name="repassword" class="form-control" id="repassword" required="required" placeholder="">
      <div class="error" id="errorRepassword"></div>
  </div>
  <div class="form-group">
     <label class="label-title" for="exampleInputPassword1"> <?php echo $pagesTitle['mainTerms']; ?> </label>
        <div class="checkbox checkbox-success">
                        <input required type="radio" name="radio4e" id="radio8" >

                        <label for="radio8">
                            <?php echo $sittings['registerUserDatatramsLabol']; ?>
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
    <label class="label-title" for="exampleInputEmail1"><?php echo $sittings['registerUserDataLearn']; ?></label>
    <select class="form-control" name="learn">
        <option value="0"><?php echo $sittings['registerUserDataLearnCrant'][0]; ?></option>
        <option value="1"><?php echo $sittings['registerUserDataLearnCrant'][1]; ?></option>
        <option value="2"><?php echo $sittings['registerUserDataLearnCrant'][2]; ?></option>
        <option value="3"><?php echo $sittings['registerUserDataLearnCrant'][3]; ?></option>
        <option value="4"><?php echo $sittings['registerUserDataLearnCrant'][4]; ?></option>
        <option value="5"><?php echo $sittings['registerUserDataLearnCrant'][5]; ?></option>
        <option value="6"><?php echo $sittings['registerUserDataLearnCrant'][6]; ?></option>
        <option value="7"><?php echo $sittings['registerUserDataLearnCrant'][7]; ?></option>
        <option value="8"><?php echo $sittings['registerUserDataLearnCrant'][8]; ?></option>
        <option value="9"><?php echo $sittings['registerUserDataLearnCrant'][9]; ?></option>
    </select>
  </div>
  <div class="form-group">
    <label class="label-title" for="exampleInputEmail1"><?php echo $sittings['registerUserDataWork']; ?></label>
    <select class="form-control" name="work">
        <option value="0"><?php echo $sittings['registerUserDataWorkCrnt'][0]; ?></option>
        <option value="1"><?php echo $sittings['registerUserDataWorkCrnt'][1]; ?></option>
        <option value="2"><?php echo $sittings['registerUserDataWorkCrnt'][2]; ?></option>
        <option value="3"><?php echo $sittings['registerUserDataWorkCrnt'][3]; ?></option>
        <option value="4"><?php echo $sittings['registerUserDataWorkCrnt'][4]; ?></option>
        <option value="5"><?php echo $sittings['registerUserDataWorkCrnt'][5]; ?></option>
        <option value="6"><?php echo $sittings['registerUserDataWorkCrnt'][6]; ?></option>
        <option value="7"><?php echo $sittings['registerUserDataWorkCrnt'][7]; ?></option>
    </select>
  </div>
  <div class="form-group">
    <label class="label-title" for="exampleInputEmail1"> <?php echo $sittings['registerUserDataWorkCat']; ?> </label>
    <select class="form-control" name="work_field">
        
        <?php for($i = 0; $i < count($sittings['registerUserDataWorkCrant']); $i++) { ?>        
        <option value="<?php echo $i; ?>"> <?php echo $sittings['registerUserDataWorkCrant'][$i] ?></option>        
        <?php } ?>  
    </select>
  </div>
    <div class="form-group">
        <label class="label-title" for="exampleInputEmail1"> <?php echo $sittings['registerUserDataSalry']; ?> </label>
        <select class="form-control" name="monthly_income">
            <option>( <?php echo $sittings['rMyEnter']; ?> )</option>
            
            <?php foreach ($sittings['registerUserDataSalryCrant'] as $val) { ?>
            <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
            <?php } ?>
           
        </select>
    </div>
        <div class="form-group">
            <label class="label-title" for="exampleInputEmail1"> <?php echo $sittings['registerUserDataBody']; ?> </label>
            <select class="form-control" name="physique">
                <?php for($j = 0; $j < count($sittings['registerUserDataBodyCrant']); $j++) { ?>
                <option value="<?php echo $j; ?>"><?php echo $sittings['registerUserDataBodyCrant'][$j]; ?></option>
                <?php } ?>
                
            </select>
        </div>



        </div>


         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">


    <div class="form-group">
    <label class="label-title" for="exampleInputEmail1"> <?php echo $sittings['registerUserDataLeving']; ?> </label>
    <select class="form-control" name="housing_case">
        <?php for($n = 0; $n < count($sittings['registerUserDataLevingCrant']); $n++) { ?>
        <option value="<?php echo $n; ?>"> <?php echo $sittings['registerUserDataLevingCrant'][$n] ?> </option>
        
        <?php } ?>
        
       
    </select>
  </div>
  <div class="form-group">
    <label class="label-title" for="exampleInputEmail1"> <?php echo $sittings['registerUserDataMove']; ?> </label>
    <select class="form-control"name="ready_move">
<?php for($f = 0; $f < count($sittings['registerUserDataMoveCrant']); $f++) { ?>
        <option value="<?php echo $f; ?>"><?php echo $sittings['registerUserDataMoveCrant'][$f]; ?></option>
<?php } ?>
    </select>
  </div>

 <div class="form-group">
     <label class="label-title" for="exampleInputEmail1">  <?php echo $sittings['registerUserDataSiken']; ?>  </label>
     <select class="form-control" name="skin_color">
         <?php for($d = 0; $d < count($sittings['registerUserDataSikenCrant']); $d++) { ?>
         <option value="<?php echo $d; ?>"> <?php echo $sittings['registerUserDataSikenCrant'][$d]; ?></option>
         <?php } ?>
     </select>
 </div>

     <div class="form-group">
         <label class="label-title" for="exampleInputEmail1"> <?php echo $sittings['registerUserDataWidth']; ?>  </label>
         <select class="form-control" name="weight">
             <option value=""> <?php echo $sittings['noSelected']; ?> </option>
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
             <option value=" 150 + "> 150 + </option>
         </select>
     </div>

     <div class="form-group">
         <label class="label-title" for="exampleInputEmail1"> <?php echo $sittings['registerUserDataHegiht']; ?>  </label>
         <select class="form-control" name="height">
             <option value=""><?php echo $sittings['noSelected']; ?> </option>
             <option value="120">120</option>
             <option value="130">130</option>
             <option value="140">140</option>
             <option value="150">150</option>
             <option value="160">160</option>
             <option value="180">180</option>
             <option value="190">190</option>
             <option value="200 +">200 +</option>
         </select>
     </div>





</div>

   <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">


   <div class="form-group">
    <label class="label-title" for="exampleInputEmail1"> <?php echo $sittings['registerUserDataFamly']; ?> </label><br/>
    <?php for($g = 0; $g < count($sittings['registerUserDataFamlyCrant']); $g++) { ?>
    <div class="radio radio-info radio-inline">
       <input type="radio" id="inlineRadio<?php echo $g; ?>" value="<?php echo $g; ?>" name="family_status" >
        <label class="radio-kind" for="inlineRadio<?php echo $g; ?>"><?php echo $sittings['registerUserDataFamlyCrant'][$g]; ?></label>
    </div>   
    <?php } ?>
   
    </div>
   <div class="form-group">
       <label class="label-title" for="exampleInputEmail1"><?php echo $sittings['registerUserDataChldrn']; ?></label><br/>
       <div class="radio radio-info radio-inline">
           <input type="radio" id="inlineRadioqw1" value="0" name="want_children" >
           <label class="radio-kind" for="inlineRadioqw1"><?php echo $sittings['registerUserDataChldrnCrant'][0]; ?></label>
       </div>
       <div class="radio radio-inline">
           <input type="radio" id="inlineRadioqw2" value="1" name="want_children">
           <label class="radio-kind" for="inlineRadioqw2"><?php echo $sittings['registerUserDataChldrnCrant'][1]; ?></label>
       </div>
       <div class="radio radio-inline">
           <input type="radio" id="inlineRadioqw3" value="2" name="want_children">
           <label class="radio-kind" for="inlineRadioqw3"><?php echo $sittings['registerUserDataChldrnCrant'][2]; ?></label>
       </div>
   </div>


   <div class="form-group">
       <label class="label-title" for="exampleInputEmail1"> <?php echo $sittings['registerUserDataMonyCase']; ?> </label><br/>
       <div class="radio radio-info radio-inline">
           <input type="radio" id="inlineRadiow1" value="0" name="physical_condition">
           <label class="radio-kind" for="inlineRadiow1">غير محدد</label>
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