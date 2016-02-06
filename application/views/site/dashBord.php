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
                   <div class="title-block-per"><?php echo $sittings['contentQSearch']; ?></div>
                   <div class="body-block-per">
                         <form action="<?php echo HOST_NAME; ?>Search/index/" method="post" rol="form">

                 <div class="form-group">
                     <div class="checkbox checkbox-inline">
                        <input type="checkbox" name="is_online" class="styled" id="inlineCheckbox1" value="1">
                        <label for="inlineCheckbox1"> <?php echo $sittings['contentOnline']; ?> </label>
                    </div>
                    <div class="checkbox checkbox-success checkbox-inline">
                        <input type="checkbox" name="photo" class="styled" id="inlineCheckbox2" value="1" checked>
                        <label for="inlineCheckbox2"> <?php  echo $sittings['contentHavImg']; ?> </label>
                    </div>
                  </div>
                                  <div class="form-group">
                                  <label class="label-title" for="exampleInputEmail1"><?php echo $sittings['contentMinAge'];  ?> </label>
                                    <select class="form-control" name="min_age">
                                        <option value=""> --  <?php echo $sittings['pleasSelect']; ?>  -- </option>
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
                                  <label class="label-title" for="exampleInputEmail1"><?php echo $sittings['contentMaxAge']; ?></label>
                                    <select class="form-control" name="max_age">
                                        <option value=""> --  <?php echo $sittings['pleasSelect']; ?>   -- </option>
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
                                  <label class="label-title" for="exampleInputEmail1"><?php echo $sittings['contentTarget']; ?></label>
                                    <select class="form-control" name="target">
                                        <option value=""> --  <?php echo $sittings['pleasSelect']; ?> -- </option>
                                        <option value="1" > <?php echo $target[1]; ?> </option>
                                        <option value="2"><?php echo $target[2]; ?></option>
                                        <option value="3"><?php echo $target[3]; ?></option>
                                        <option value="4"><?php echo $target[4]; ?></option>
                                        <option value="5"><?php echo $target[5]; ?></option>
                                        
                                    </select>
                                  </div>
                                  <div class="form-group">
                                  <label class="label-title" for="exampleInputEmail1">دولة الأصل</label>
                                    <select class="form-control" name="country">
                                        <option value=""> --  <?php echo $sittings['pleasSelect']; ?> -- </option>
                                        <option value="JO"><?php echo $contry['JO']; ?></option>
                                        <option value="AE"><?php echo $contry['AE']; ?></option>
                                        <option value="BH"><?php echo $contry['BH']; ?></option>
                                        <option value="DZ"><?php echo $contry['DZ']; ?></option>
                                        <option value="AS"><?php echo $contry['SA']; ?></option>
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
                                        <option value="CF"><?php echo $contry['CF']; ?></option>
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
                                        <option value="CD"><?php echo $contry['CD']; ?></option>
                                        <option value="MX"><?php echo $contry['MX']; ?></option>
                                        <option value="GB"><?php echo $contry['GB']; ?></option>
                                        <option value="NO"><?php echo $contry['NO']; ?></option>
                                        <option value="AT"><?php echo $contry['AT']; ?></option>
                                        <option value="NE"><?php echo $contry['NE']; ?></option>
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
                                        <option value="AZ"><?php echo $contry['AZ']; ?></option>
                                        <option value="SS"><?php echo $contry['SS']; ?></option>
                                        <option value="GE"><?php echo $contry['GE']; ?></option>
                                        <option value="DJ"><?php echo $contry['DJ']; ?></option>
                                        <option value="RW"><?php echo $contry['RW']; ?></option>
                                        <option value="RU"><?php echo $contry['RU']; ?></option>
                                        <option value="RO"><?php echo $contry['RO']; ?></option>
                                        <option value="ZM"><?php echo $contry['ZM']; ?></option>
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
                                        <option value="CO"><?php echo $contry['CO']; ?></option>
                                        <option value="KE"><?php echo $contry['KE']; ?></option>
                                        <option value="LV"><?php echo $contry['LV']; ?></option>
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
                                        <option value="HT"><?php echo $contry['HT']; ?></option>
                                        <option value="HN"><?php echo $contry['HN']; ?></option>
                                        <option value="HU"><?php echo $contry['HU']; ?></option>
                                        <option value="NL"><?php echo $contry['NL']; ?></option>
                                        <option value="HK"><?php echo $contry['HK']; ?></option>
                                        <option value="هولندا"><?php echo $contry['']; ?></option>
                                        <option value="هونغ كونغ"><?php echo $contry['']; ?></option>
                                        <option value="GGK"><?php echo $contry['GGK']; ?></option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                  <label class="label-title" for="exampleInputEmail1">دولة الإقامة</label>
                                    <select class="form-control" name="country_stay">
                                        <option value=""> --  <?php echo $sittings['pleasSelect']; ?> -- </option>
                                        <option value="JO"><?php echo $contry['JO']; ?></option>
                                        <option value="AE"><?php echo $contry['AE']; ?></option>
                                        <option value="BH"><?php echo $contry['BH']; ?></option>
                                        <option value="DZ"><?php echo $contry['DZ']; ?></option>
                                        <option value="AS"><?php echo $contry['SA']; ?></option>
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
                                        <option value="CF"><?php echo $contry['CF']; ?></option>
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
                                        <option value="CD"><?php echo $contry['CD']; ?></option>
                                        <option value="MX"><?php echo $contry['MX']; ?></option>
                                        <option value="GB"><?php echo $contry['GB']; ?></option>
                                        <option value="NO"><?php echo $contry['NO']; ?></option>
                                        <option value="AT"><?php echo $contry['AT']; ?></option>
                                        <option value="NE"><?php echo $contry['NE']; ?></option>
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
                                        <option value="AZ"><?php echo $contry['AZ']; ?></option>
                                        <option value="SS"><?php echo $contry['SS']; ?></option>
                                        <option value="GE"><?php echo $contry['GE']; ?></option>
                                        <option value="DJ"><?php echo $contry['DJ']; ?></option>
                                        <option value="RW"><?php echo $contry['RW']; ?></option>
                                        <option value="RU"><?php echo $contry['RU']; ?></option>
                                        <option value="RO"><?php echo $contry['RO']; ?></option>
                                        <option value="ZM"><?php echo $contry['ZM']; ?></option>
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
                                        <option value="CO"><?php echo $contry['CO']; ?></option>
                                        <option value="KE"><?php echo $contry['KE']; ?></option>
                                        <option value="LV"><?php echo $contry['LV']; ?></option>
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
                                        <option value="HT"><?php echo $contry['HT']; ?></option>
                                        <option value="HN"><?php echo $contry['HN']; ?></option>
                                        <option value="HU"><?php echo $contry['HU']; ?></option>
                                        <option value="NL"><?php echo $contry['NL']; ?></option>
                                        <option value="HK"><?php echo $contry['HK']; ?></option>
                                        <option value="هولندا"><?php echo $contry['']; ?></option>
                                        <option value="هونغ كونغ"><?php echo $contry['']; ?></option>
                                        <option value="GGK"><?php echo $contry['GGK']; ?></option>
                                    </select>
                                  </div>
                 <button type="submit" class="btn btn-success btn-block col-lg-12"><?php echo $sittings['contentSearchSubmit']; ?></button>
                         </form>
                   </div>
                   <div class="clearfix"></div> 
               </div>
                

           </div>
            <!--col-->
         <?php if(!$acountDone) { ?>
           <div class=" wow fadeInDown col-lg-8 col-md-8 col-sm-6 col-xs-12">
              <div class="block-per">
                   <div class="title-block-per"><?php echo $sittings['progressUpgradProfile']; ?></div>
                   <div class="body-block-per">
                    <h3><?php echo $sittings['upgradNow']; ?></h3>
                    <p><?php echo $sittings['upgadeDesc']; ?></p>
                   <a href="<?php echo HOST_NAME . 'dashbord/paypal/' ?>" class="btn btn-success btn-block col-lg-12"><?php echo $sittings['upgradeBtn']; ?></a>
                   </div>
                   <div class="clearfix"></div>
               </div>
           </div>
         <?php } ?>
         <!--col-->
          <div class=" wow fadeInDown col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">
              <div class="block-per">
                   <div class="title-block-per"><?php echo $sittings['contentStoriesTitle']; ?></div>
                   <div class="body-block-per">
                    <br>
                    <br>
                    <p class="text-center" style="color:#CF2082;"><i class="fa fa-newspaper-o fa-5x"></i></p>
                   <br>
                   <a href="<?php echo HOST_NAME . 'main/stories/' ?>" class="btn btn-success btn-block col-lg-12"><?php echo $sittings['contentViewStories']; ?></a>
                   </div>
                   <div class="clearfix"></div>
               </div>
               
           </div>
         <!--col-->
            <div class="wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="block-new-relation">
                 <div class="title-block-per"><?php echo $sittings['contentTikesTitle']; ?></div>
                 <br>
                   <div class="body-block-per">
                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-center block-1"><a class="link-re" href="<?php echo HOST_NAME . 'dashbord/liks/' ?>"><?php echo $myLikes; ?><i class="fa fa-5x fa-heart"></i><span class="title-re"><?php echo $sittings['contentMyTikes']; ?></span></a></div>
                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-center block-1"><a class="link-re" href="<?php echo HOST_NAME . 'dashbord/liks/' ?>"><?php echo $outherLikes; ?><i class="fa fa-5x fa-heart"></i><span class="title-re"><?php echo $sittings['contentOurMyTikes']; ?></span></a></div>
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