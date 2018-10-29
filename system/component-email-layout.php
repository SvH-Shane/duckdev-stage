<?php 

// Component email layout 
// In this document you can chance the layout and content of your e-mail.


// Style component 
$component_email_style =
    '<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300" rel="stylesheet">
    <title>*|MC:SUBJECT|*</title>
    <style type="text/css">

          @font-face {
          font-family: "Roboto Slab";
          font-style: normal;
          font-weight: 400;
          src: local("Roboto Slab Regular"), local("RobotoSlab-Regular"), url(https://fonts.gstatic.com/s/robotoslab/v7/BngMUXZYTXPIvIBgJJSb6ufA5qWr4xCCQ_k.woff2) format("woff2");
          unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        body { 
            display:block;
            font-family: "Roboto Slab", "Lucida Grande", "Lucida Sans Unicode", Tahoma, Sans-Serif;
            background-color: #f3f3f2;
            background-repeat: no-repeat;
            font-size: 14px; 
            font-weight: 100;
            line-height: 125%;
            -webkit-overflow-x: hidden;
            overflow-x: hidden;
            margin: 0 auto;
            } 
        .dpf-background{
            max-width: 700px;
            margin: 0 auto;
            background: #f3f3f2;
            padding: 10px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center 0; }
        .dpf-preHeader{
            display: none;
            font-size: 1px;
            color: #f3f3f3;
        }
        .dpf-container{
            max-width: 900px;
            border: 1px solid #dddddd;
            background-color: #ffffff;
        }
        .dpf-header__first{
            width: 100%;
            height: 80px;
        }
        .header__logo{
            float: left;
            width: 55px;
        }
        .header__cta-visit{
            position: relative;
            width: 120px;
            float: right;
            font-size: 0.75em;
            margin-top: 15px;
            background: #243646;
            padding: 10px;
            text-align: center;
            border: none;
            width: auto;
            min-width: 140px;
            border-radius: 20px;
            color: #ffffff;
            cursor: pointer;
        }
        .cta-visit{
            padding: 10px;
            text-align: center;
            border: none;
            width: auto;
            max-width: 140px;
            border-radius: 20px;
            background-color: #8bc47c;
            color: #ffffff;
            transition: 0.5s;
            cursor: pointer;
            color: #fff;
            margin: 40px auto 50px auto;
        }
        .dpf-header{
            height: 250px;
            overflow: hidden;
            object-fit: cover;
            background-position: center; 
            background-size: cover;
        }
        .full-header{
            background-image: url(http://dutchplanefinders.nl/img_files/dpf_img/inlog-screens/dpf-inlog-screen-2018.png);
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1 {
            margin-top: 50px;
            margin-bottom: 50px;
            text-align: center;
            font-size: 1.8em;
            font-weight: 100;
        }
        h2 {
            text-align: center;
            font-size: 2.5em;
            font-weight: bold;
        }
        h3 {
            text-align: center;
            font-size: 1.3em;
            font-weight: 100;
        }

        p{
            margin:1em 0;
            padding-left: 60px;
            padding-right: 60px;
            line-height: 2;
            text-align: center;
        }
        .counter {
            margin-top: 15px;
            text-align: center;
            padding: 25px;
            max-width: 900px;
            border: 1px solid #dddddd;
            color: #fff;
            background-image: url(http://dutchplanefinders.nl/img_files/dpf_img/inlog-screens/dpf-inlog-screen-2018.png);
            background-size: cover;
            background-position: center; 
        }
        .social-footer {
            margin-top: 15px;
            text-align: center;
            padding: 25px;
            max-width: 900px;
            border: 1px solid #dddddd;
            background-color: #ffffff;
        }
        .btn-social__facebook{
            display: inline-block;
            width: 210px;
            padding: 10px;
            color: #fff;
            margin-right: 2px;
            background-color: #405aa4;
        }
        .btn-social__twitter{
            display: inline-block;
            width: 210px;
            padding: 10px;
            color: #fff;
            margin-right: 2px;
            background-color: #43abe8;
        }
        .btn-social__instagram{
            display: inline-block;
            width: 210px;
            padding: 10px;
            color: #fff;
            background-color: #bc2a8d;
        }
        .social-icons{
            width: 30px;
        }
        .social-icons__span{
            position: relative;
            top: 4px;
        }
        @media only screen and (max-width: 719px) {
            .btn-social__facebook{
                display: inline-block;
                width: 100%%;
                padding: 10px;
                color: #fff;
                margin-right: 2px;
                margin-bottom: 10px;
                background-color: #405aa4;
            }
            .btn-social__twitter{
                display: inline-block;
                width: 100%%;
                padding: 10px;
                color: #fff;
                margin-right: 0;
                margin-bottom: 10px;
                background-color: #43abe8;
            }
            .btn-social__instagram{
                display: inline-block;
                width: 100%;
                padding: 10px;
                color: #fff;
                margin-bottom: 10px;
                background-color: #bc2a8d;
            }
            .social-icons{
                width: 30px;
            }
            p{
                padding-left: 30px;
                padding-right: 30px;
                text-align:center;
                word-break: normal;
            }
        }

        a{
            text-decoration: none;
            color: #fff;
        }
        .footer{
            max-width: 700px;
            text-align: center;
            color: #DDDDDD;
            line-height: 2;
            padding-top: 25px;
            font-size: 12px;
            overflow: hidden;
        }
    </style>
    </head>';

// Body
$component_email_body = 
    '<body style="display: block;font-family: &quot;Roboto Slab&quot;, &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Tahoma, Sans-Serif;background-color: #f3f3f2;background-repeat: no-repeat;font-size: 14px;font-weight: 100;line-height: 125%;-webkit-overflow-x: hidden;overflow-x: hidden;margin: 0 auto;">';

// Background
$component_email_background = 
    '<div class="dpf-background" style="max-width: 700px;margin: 0 auto;background: #f3f3f2;padding: 10px;background-repeat: no-repeat;background-size: cover;background-position: center 0;">';

// Preheader 
$component_email_preheader = 
    '<div class="dpf-preHeader" style="display: none;font-size: 1px;color: #f3f3f3;">
        <p style="margin: 1em 0;padding-left: 60px;padding-right: 60px;line-height: 2;text-align: center;">Hi there, we have mail for you!</p>
    </div>';

// Header
$component_email_top_header = 
    '<div class="dpf-header__first" style="width: 100%;height: 80px;">
        <div class="header__logo" style="float: left;width: 55px;">
            <img src="http://dutchplanefinders.nl/img_files/dpf_img/logo/dpf_logo_icon_17.png" alt="dpf_logo_large" width="100%">
        </div>
        <div class="header__cta-visit" style="position: relative;width: auto;float: right;font-size: 0.75em;margin-top: 15px;background: #243646;padding: 10px;text-align: center;border: none;min-width: 140px;border-radius: 20px;color: #ffffff;cursor: pointer;">
            <a href="http://dutchplanefinders.nl/" style="text-decoration: none;color: #fff;">
                Log in
            </a>
        </div>
    </div>';

// Content 

//        <div class='dpf-container' style='max-width: 900px;border: 1px solid #dddddd;background-color: #ffffff;'>
//            <div class='dpf-header' style='background-image: url(https://scontent-amt2-1.xx.fbcdn.net/v/t31.0-8/15844662_1919107424989244_8175403788981212845_o.jpg?_nc_cat=0&oh=3187973ee42d725b3f256ef9d6db4020&oe=5BAFC775);height: 250px;overflow: hidden;object-fit: cover;background-position: center;background-size: cover;'>
//            </div>
//            <h1 style='margin-top: 50px;margin-bottom: 50px;text-align: center;font-size: 1.8em;font-weight: 100;'>Hi $screenerPhoto_username,</h1>
//            <p style='margin: 1em 0;padding-left: 60px;padding-right: 60px;line-height: 2;text-align: center;'>
//                Congratulations! We have reviewed your picture <b>$screenerPhoto_title</b>, and has been approved on the website.
//                Click on the button below to view your picture. 
//            </p>
//            <div class='cta-visit' style='padding: 10px;text-align: center;border: none;width: auto;max-width: 140px;border-radius: 20px;background-color: #8bc47c;color: #fff;transition: 0.5s;cursor: pointer;margin: 40px auto 50px auto;'>
//                <a href='http://dutchplanefinders.nl/page/photo?id=$screenerPhotoId'' style='text-decoration: none;color: #fff;'>
//                    View picture
//                </a>
//            </div>
//        </div>
//        <div class='counter' style='margin-top: 15px;text-align: center;padding: 25px;max-width: 900px;border: 1px solid #dddddd;color: #fff;background-image: url(http://dutchplanefinders.nl/img_files/dpf_img/inlog-screens/dpf-inlog-screen-2018.png);background-size: cover;background-position: center;'>
//            <p style='margin: 1em 0;padding-left: 60px;padding-right: 60px;line-height: 2;text-align: center;'>
//                We added some points to your profile.
//            </p>
//            <h2 style='text-align: center;font-size: 2.5em;font-weight: bold;'>+{000}</h2>
//            <p style='margin: 1em 0;padding-left: 60px;padding-right: 60px;line-height: 2;text-align: center;'>Your total is now <b>{000}</b> points</p>
//        </div>

// Footer 
$component_email_footer =
    '<div class="footer" style="max-width: 700px;text-align: center;color: #DDDDDD;line-height: 2;padding-top: 25px;font-size: 12px;overflow: hidden;">
        <b>Do you follow us already?</b><br>
        <a href="https://www.facebook.com/DutchPlaneFinders/" style="text-decoration: none;color: #fff;">
            <img src="http://dutchplanefinders.nl/img_files/email_items/social-icons/social-icon-facebook-grey.png" alt="social-facebook-icon">
        </a>
        <a href="https://twitter.com/DPF_NL" style="text-decoration: none;color: #fff;">
            <img src="http://dutchplanefinders.nl/img_files/email_items/social-icons/social-icon-twitter-grey.png" alt="social-facebook-icon">
        </a>
        <a href="http://instagram.com/dutchplanefinders" style="text-decoration: none;color: #fff;">
            <img src="http://dutchplanefinders.nl/img_files/email_items/social-icons/social-icon-instagram-grey.png" alt="social-facebook-icon">
        </a>
        <a href="https://www.youtube.com/channel/UCDeTjgwH-r0KlmraNSIDegw" style="text-decoration: none;color: #fff;">
            <img src="http://dutchplanefinders.nl/img_files/email_items/social-icons/social-icon-youtube-grey.png" alt="social-facebook-icon">
        </a>
        <br>
        <b>Unsubscribe</b> from this email? Go to your profile settings. <br>
        DutchPlaneFinders.nl • info@dutchplanefinders.nl 
    </div>
    </div>
</body>
</html>';
?>