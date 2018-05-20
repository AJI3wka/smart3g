<?php
session_start();
error_reporting(85);
$utm = array("utm_source", "utm_medium", "utm_campaign", "utm_content", "utm_term");$utm_clean = false; foreach($utm as $v){if(trim($_GET[$v])&&trim($_GET[$v])!=$_SESSION[$v]){$utm_clean = true; break;}}
if($utm_clean){foreach($utm as $v){unset($_SESSION[$v]);}}foreach($utm as $v){if(trim($_GET[$v])&&!$_SESSION[$v]){$_SESSION[$v] = trim($_GET[$v]);}}
?>
 <!DOCTYPE html>
 <html lang="ru">
 <head>
  <!-- Google Tag Manager -->
  <!-- End Google Tag Manager -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>«SMART-MiRROR» - Зеркало Авто-Компьютер 10в1</title>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
   @media screen and (max-width: 530px) {
   #gallery_section .slick-slide>div:last-of-type{
   display:none;}
   .reliable_section{
   display: none;
   }
   .specialoffer_section:before{
   display:none;
   content: 0;
   }
   .visual
   }
  </style>
  <style>
   img{width:initial;height:initial}
  </style>
  <style>
   @media screen and (max-width:600px){h1{font-size:46px;line-height:50px}br{display:none}.text_block>ul{max-width:400px;margin:0 auto 20px}.text_block>ul li{width:50%}a.top_order{padding:10px 15px;margin:-5px 0;font-size:12px}.top_nav_holder ul{display:block;text-align:center;margin:0 0 5px}.popup .close_popup{right:10px;top:10px}}@media screen and (max-width:1170px){nav{position:absolute;width:100%;text-align:center;left:0;top:0;bottom:100%}nav ul{display:none;z-index:1000;position:relative;padding:50px 0 10px;background-color:#171c26;margin-top:-15px;background-position:initial initial;background-repeat:initial initial}nav li{display:block;margin:0 0 15px}.logo{float:left;margin-left:60px}.gen_nav_holder{text-align:center}.burger_menu{display:block;width:30px;height:20px;position:absolute;top:5px;left:20px;z-index:20000}.burger_menu span,.burger_menu::after,.burger_menu::before{background-color:#fff;height:2px;left:0;position:absolute;width:100%;transition:all .4s ease-in-out;-webkit-transition:all .4s ease-in-out;background-position:initial initial;background-repeat:initial initial}.burger_menu span{top:50%;margin-top:-1px}.burger_menu::before{content:'';top:0}.burger_menu::after{content:'';bottom:0}.text_block{margin:0}.master_section{padding:15px 0 60px}}@media screen and (max-width:600px){h1{font-size:46px;line-height:50px}br{display:none}a.top_order{padding:10px 15px;margin:-5px 0;font-size:12px}.top_nav_holder ul{display:block;text-align:center;margin:0 0 5px}.popup .close_popup{right:10px;top:10px}}@media screen and (max-width:530px){h1{font-size:38px;line-height:44px}a.top_order{font-size:10px}.logo{margin:0 0 0 50px}.mini_characteristics{text-align:center;font-size:0;line-height:0;display:none}.mini_characteristics li{width:25%;display:inline-block;vertical-align:middle;box-sizing:border-box;margin:0;padding:0 5px}}@media screen and (max-width:1170px){nav{position:absolute;width:100%;text-align:center;left:0;top:0;bottom:100%}nav ul{display:none;z-index:1000;position:relative;padding:50px 0 10px;background-color:#171c26;margin-top:-15px;background-position:initial initial;background-repeat:initial initial}nav li{display:block;margin:0 0 15px}.logo{float:left;margin-left:60px}.gen_nav_holder{text-align:center}.burger_menu{display:block;width:30px;height:20px;position:absolute;top:5px;left:20px;z-index:20000}.burger_menu span,.burger_menu::after,.burger_menu::before{background-color:#fff;height:2px;left:0;position:absolute;width:100%;transition:all .4s ease-in-out;-webkit-transition:all .4s ease-in-out;background-position:initial initial;background-repeat:initial initial}.burger_menu span{top:50%;margin-top:-1px}.burger_menu::before{content:'';top:0}.burger_menu::after{content:'';bottom:0}.text_block{margin:0}.text_block>ul{max-width:700px}.master_section{padding:15px 0 60px}.text_block p{text-align:center}}@media screen and (max-width:600px){h1{font-size:46px;line-height:50px}br{display:none}.main_price{text-align:center}.text_block>ul{max-width:400px;margin:0 auto 20px}.text_block>ul li{width:50%}a.top_order{padding:10px 15px;margin:-5px 0;font-size:12px}.top_nav_holder ul{display:block;text-align:center;margin:0 0 5px}.popup .close_popup{right:10px;top:10px}}.m1modal{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAE0lEQVQYlWNgYGA4RSQeVUhPhQC+qE7pelpfYgAAAABJRU5ErkJggg==);width:100%;height:100%;position:fixed;display:none;left:0;top:0;background-position:initial initial;background-repeat:repeat repeat;z-index:200001;overflow:auto;font-size:14px;text-align:justify;margin-left:auto;margin-right:auto;background-color:transparent;font-family:'Open Sans',sans-serif;color:#000}.m1modal-block{position:relative;width:600px;-webkit-box-shadow:rgba(0,0,0,.34902) 2px 2px 10px;box-shadow:rgba(0,0,0,.34902) 2px 2px 10px;border:1px solid #3a87ad;background:#fff;-webkit-box-shadow:2px 2px 10px rgba(0,0,0,.35);box-shadow:2px 2px 10px rgba(0,0,0,.35)}.m1modal-block .icon-close{position:absolute;margin:15px 20px;z-index:1000;right:0}.m1modal-block .m1-form-title{text-align:center;line-height:50px;padding:0 100px;font-size:18px;width:auto;height:auto;letter-spacing:0;margin:0!important;background:#4d83c0;text-shadow:1px 1px 0 #3a87ad;border-bottom:1px solid #3a87ad;color:#fff;letter-spacing:0}.icon-close{width:20px;height:19px;cursor:pointer;background:url(http://static.best-gooods.ru/img/icon-close.png) no-repeat}.m1modal p{font-weight:400;width:auto}.m1modal .m1content{width:auto;overflow:hidden;margin:0;-webkit-box-shadow:none;box-shadow:none;background:#fff}@media screen and (max-width:540px){.m1modal-block{width:380px}.m1modal-block .m1-form-title{padding:0 50px;line-height:39px}}@media screen and (max-width:405px){.m1modal-block{width:300px}.m1modal-block .m1-form-title{padding:0}}.m1-form .m1modal-block{-webkit-box-shadow:none;box-shadow:none;-webkit-border-radius:10px;-webkit-border-radius:0}.m1-form .m1modal-block .m1-form-title{text-transform:none;text-transform:uppercase;letter-spacing:1px;padding:20px 0 8px;text-align:center;position:relative;text-transform:uppercase;font-weight:700;letter-spacing:1px;background:#64ca50;text-shadow:none;font-size:22px;border-bottom:0;text-transform:none;line-height:36px!important;color:#fff}.m1-form .m1modal-block .icon-close{margin:10px 8px}.m1-form form{-webkit-box-shadow:none;box-shadow:none}.m1-form form input[type=text]{color:#222;display:inline-block;text-indent:0;background-color:#fff;font-style:normal;-webkit-box-shadow:none;box-shadow:none;position:static;margin:0 0 10px;background-position:initial initial;background-repeat:initial initial;border-radius:3px}.m1-form form input{float:none}.m1-form form input[name=name]{padding-right:10px}.m1-form form input[type=submit]{position:static;cursor:pointer;border:0;padding:0 10px;text-transform:uppercase;vertical-align:top;margin:0;display:inline-block;text-indent:0;font-family:'Open Sans',sans-serif;font-weight:600;opacity:1;text-align:center!important;background-repeat:initial initial}.m1-form .m1modal-block{-webkit-box-shadow:none;box-shadow:none;-webkit-border-radius:10px;-webkit-border-radius:0;margin:0 auto;border:0;-webkit-box-shadow:none;box-shadow:none;font-family:'Open Sans',sans-serif;-webkit-border-radius:10px;border-radius:0;overflow:hidden;color:#222;line-height:1.5!important;width:570px;-webkit-border-radius:0}.m1-form .m1modal-block .m1padding{padding:20px 40px 40px}.m1-form .m1modal-block p{line-height:1.5;font-size:16px;padding:10px 0 0;text-align:left;font-family:'Open Sans',sans-serif;color:rgba(0,0,0,.75)}.m1-form form{margin:20px 0;float:none;-webkit-box-shadow:none;box-shadow:none;text-align:center;width:100%;height:auto;background:0;position:static;padding:0;border:0}.m1-form form *{box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}.m1-form form input[type=text]{border:1px solid #bdbdbd;height:56px;line-height:56px;width:100%;padding:0 15px;font-size:18px;text-align:center}.m1-form form input[type=submit]{width:100%;background-color:#f60;height:70px;line-height:70px;color:#fff;font-size:22px;letter-spacing:1px;margin-top:10px;background-position:initial initial;background-repeat:initial initial;border-bottom:3px solid #d25400;border-radius:2px}.m1-form .m1-form-clock{padding:30px 0 0!important;line-height:33px!important;background:url(http://static.best-gooods.ru/img/line_head.jpg) top center no-repeat}p.m1-form-clock{font-style:italic}.m1-form .m1-form-rectangle{position:absolute;width:450px;height:23px;bottom:-23px;left:0;background:url(http://static.best-gooods.ru/img/corner.jpg) center bottom no-repeat}.animated{-webkit-animation:1s both;animation-duration:1s;animation-fill-mode:both}html{height:100%;-webkit-font-smoothing:antialiased;-webkit-text-size-adjust:none;-moz-osx-font-smoothing:grayscale}body{margin:0;min-width:320px;height:100%;color:#000;font:14px/21px FiraSans-Light,Arial,Helvetica,sans-serif;background:#fff}img{border-style:none;vertical-align:top}a{outline:0;text-decoration:none;color:#000}*{outline:0}fieldset{margin:0;padding:0;border-style:none}header,nav,section{display:block}ul{margin:0;padding:0;list-style:none}p{margin:0 0 30px}h1{margin:0 0 20px;font-weight:400;font-size:49px;line-height:57px;color:#171c26}#wrapper{overflow:hidden}.center{max-width:1170px;margin:0 auto;padding:0 30px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box}.center::after{display:block;clear:both;content:''}#header{font-family:FiraSans-Regular}.top_nav_holder{padding:17px 0 15px;text-transform:uppercase;background:#ecf3f5;color:#d21515;font:13px/15px FiraSans-Regular,Arial,Helvetica,sans-serif}.top_nav_holder a{transition:all .1s ease-in-out;-webkit-transition:all .1s ease-in-out;color:#171c26;-webkit-transition:all .1s ease-in-out;transition:all .1s ease-in-out}.top_nav_holder ul{line-height:0;margin:0 -12px;display:inline-block;vertical-align:middle;font-size:0}.top_nav_holder li{display:inline-block;vertical-align:middle;margin:0 12px;font-size:13px;line-height:15px}.gen_nav_holder .center{position:relative}.gen_nav_holder .center::before{content:'';position:absolute;top:-20px;left:-75px;width:120px;height:68px;background-image:url(images/percent1.png);background-position:50% 50%;background-repeat:no-repeat no-repeat}.gen_nav_holder{text-transform:uppercase;padding:20px 0 16px;transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;background:#1d232d;color:#fff;margin-top:0;-webkit-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.gen_nav_holder a{transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;color:#fff;-webkit-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.logo{width:130px;height:32px;display:inline-block;vertical-align:middle;margin:0 30px 0 0;background:url(images/logoz1.png) center no-repeat}.logo a{display:block;height:100%}nav{display:inline-block;vertical-align:middle;margin:0 18px 0 0}nav ul{line-height:0;margin:0 -15px;font-size:0}nav li{display:inline-block;vertical-align:middle;margin:0 15px;font-size:13px;line-height:15px}a.top_order{float:right;border:1px solid rgba(116,163,199,.6);display:inline-block;padding:16px 60px;margin:-10px 0;font-size:14px;line-height:14px;transition:all .1s ease-in-out;-webkit-transition:all .1s ease-in-out;color:#23b0e0;-webkit-border-radius:3px;border-radius:3px;-webkit-transition:all .1s ease-in-out;transition:all .1s ease-in-out}.master_section{padding:25px 0 50px;position:relative;z-index:1;-webkit-background-size:cover;background:url(images/top_bg.jpg) center top no-repeat}.mini_characteristics{line-height:0;margin:0 -10px;text-align:right;font-size:0}.mini_characteristics li{display:inline-block;vertical-align:middle;height:100px;line-height:100px;text-align:center;margin:0 10px}.master_holder{position:relative}.text_block{margin:-40px 49% 0 0}.carousel_block{text-align:center;line-height:500px}.carousel_block img{display:inline-block;vertical-align:middle;max-width:100%;max-height:100%}.main_carousel{position:absolute;margin:0 -150px 0 0;left:50%;right:0;top:0}.main_carousel_holder{padding:10px 0 34px}.master_section h1{font-family:FiraSans-Medium;margin:15px 0 20px;letter-spacing:-.4px;padding:20px 0 0;letter-spacing:-.4px}.text_block>ul{font-size:0;line-height:0;margin:0 0 15px}.text_block>ul li{position:relative;display:inline-block;vertical-align:top;padding:0 0 0 30px;margin:0 0 15px;font-size:15px;line-height:20px;font-family:FiraSans-Medium;color:#171c26;width:33.33%;box-sizing:border-box}.text_block>ul li::before{content:'';position:absolute;left:0;top:4px;width:20px;height:12px;background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAMCAYAAACEJVa/AAAAg0lEQVQokaXRTQqAIBCGYW8QRda1ulX3ad26PwoqquvYJ8yAWGbZ4t0oPAwzoigrEViOVtT/AQ6kUB0K7AQ0KPoN6PcvQGYALQOMLKhDSQjAyEifE4o9QGcDjKRodkAa2J4AcyfSgEaCTKB3AfZibegVcHcdSYtW1OADXCeWNMnlCq5OUjdlfeFIIOQAAAAASUVORK5CYII=);background-position:50% 50%;background-repeat:no-repeat no-repeat}.text_block p{font-family:FiraSans-Regular;font-size:15px;line-height:22px;margin:0 0 30px}.main_price{color:#181c26}.main_price span{display:block;font-size:21px;line-height:20px;margin:0 0 8px;font-family:FiraSans-Medium;text-transform:uppercase;letter-spacing:1px}.new_price,.old_price{display:inline-block;vertical-align:middle;font-family:FiraSans-Medium;letter-spacing:-2px}.old_price{position:relative;font-size:23px;line-height:26px;letter-spacing:-1px;margin:0 7px 33px 0}.old_price::before{content:'';position:absolute;left:0;top:50%;-webkit-transform:rotate(-10deg);background-color:#f7ac2c;width:calc(100% + 5px);margin-left:-5px;height:2px;background-position:initial initial;background-repeat:initial initial}.new_price{font-size:58px;line-height:62px;margin:0 0 10px;letter-spacing:.4px;color:#181c26;letter-spacing:.4px}.main_btn_list{padding:15px 0 0;margin:0 -10px;font:14px/21px FiraSans-Regular,Arial,Helvetica,sans-serif}.main_btn_list li{display:inline-block;vertical-align:middle;font-size:17px;line-height:20px;margin:0 6px}.main_btn_list a{display:block;height:100%;border:1px solid #74a3c7;padding:20px 40px 20px 50px;position:relative;-webkit-border-radius:30px;border-radius:30px;color:#5087b2}.main_btn_list a i{font-style:normal;transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;border-bottom:1px dotted #5087b2;-webkit-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.main_btn_list li:first-child a{padding:20px 50px 20px 70px;border:none;background-position:initial initial;background-repeat:initial initial;color:#fff;background:rgba(22,179,222,1);background:-webkit-gradient(left top,left bottom,color-stop(0,rgba(22,179,222,1)),color-stop(100%,rgba(7,144,203,1)));background:-webkit-linear-gradient(top,rgba(22,179,222,1) 0,rgba(7,144,203,1) 100%);background:-webkit-gradient(linear,left top,left bottom,from(rgba(22,179,222,1)),to(rgba(7,144,203,1)));background:linear-gradient(to bottom,rgba(22,179,222,1) 0,rgba(7,144,203,1) 100%)}.main_btn_list li:first-child a i{border-bottom:1px dotted transparent}.main_btn_list li:first-child a::before{content:'';position:absolute;top:50%;margin-top:-9px;left:40px;width:18px;height:18px;background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAMAAABhEH5lAAAAZlBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////+Vn2moAAAAIXRSTlMAsDCQwMr3XZRMNycdBvvv3qiGfW5hDN/Zw7m3dlRQRRdzxY0JAAAAg0lEQVQY02WPVxKDMAxEFdwAY5LQ0sve/5JYYigevy/paTUa0U8p1VCCAvBNVT1qmNOBMcoBCYpzuQo2U2RyVSaqY+X2/lJWgZWHYJ+Dp5WzjCc6YNAXG8t3OrtIV/vQgmnv2rGpWryICQa2XkIx/uei2PbewE2KKZ52JLi+IcF3H6IZKLkSeA2wSjUAAAAASUVORK5CYII=);background-position:initial initial;background-repeat:initial initial}.input_sbmt_holder input{width:100%;border:none;text-align:center;font-size:17px;line-height:20px;cursor:pointer;box-sizing:border-box;padding:19px 30px 19px 105px;background-position:initial initial;background-repeat:initial initial;color:#fff;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;-webkit-border-radius:30px;border-radius:30px;background:rgba(22,179,222,1);background:-webkit-gradient(left top,left bottom,color-stop(0,rgba(22,179,222,1)),color-stop(100%,rgba(7,144,203,1)));background:-webkit-linear-gradient(top,rgba(22,179,222,1) 0,rgba(7,144,203,1) 100%);background:-webkit-gradient(linear,left top,left bottom,from(rgba(22,179,222,1)),to(rgba(7,144,203,1)));background:linear-gradient(to bottom,rgba(22,179,222,1) 0,rgba(7,144,203,1) 100%)}.burger_menu{display:none}.popup_holder{position:absolute;width:100%;z-index:7000;top:0;left:0}.popup_holder .bg{position:fixed;opacity:.85;top:0;left:0;right:0;bottom:0;background:#0d101d;opacity:.85;width:100%!important;height:100%!important}.popup{position:absolute;max-width:450px;width:100%;box-sizing:border-box;-webkit-box-shadow:#1d2133 1px 1px 50px 5px;box-shadow:#1d2133 1px 1px 50px 5px;background:#fff;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-shadow:1px 1px 50px 5px #1d2133;box-shadow:1px 1px 50px 5px #1d2133;-webkit-border-radius:4px;border-radius:4px}.popup .close_popup{right:-60px;top:0;width:50px;height:50px;text-decoration:none;position:absolute;color:#000;background-color:#0ba3d6;font-size:32px;line-height:30px;text-indent:-9999px;transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;background-position:initial initial;background-repeat:initial initial;border-radius:50%}.popup .close_popup::after{content:'';position:absolute;top:50%;margin-top:0;left:25%;margin-left:1px;background-color:#fff;width:50%;height:1px;-webkit-transform:scale(1) rotate(45deg);transition:all .2s;-webkit-transition:all .2s;background-position:initial initial;background-repeat:initial initial}.popup .close_popup::before{content:'';position:absolute;top:50%;margin-top:0;left:25%;margin-left:1px;background-color:#fff;width:50%;height:1px;-webkit-transform:scale(1) rotate(-45deg);transition:all .2s;-webkit-transition:all .2s;background-position:initial initial;background-repeat:initial initial}.popup_title{text-align:center;padding:50px 75px 15px;overflow:hidden;color:#fff;background:#0ba3d6}.popup_title strong{font-size:39px;line-height:48px;font-family:FiraSans-Light;font-weight:400;margin:10px 0 5px;display:block;letter-spacing:-.3px;letter-spacing:-.3px}.popup_title p{font-size:15px;line-height:18px;font-family:FiraSans-Light;margin:0 0 20px}.popup_form1{width:100%;margin:0 0 10px}.popup_input_holder{margin:0 0 8px}.popup_form1 input{width:100%;padding:12px 20px;box-sizing:border-box;text-align:center;border:1px solid #d9d9d9;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;-webkit-border-radius:3px;border-radius:3px;color:#222d45}.popup_submit_holder{padding:10px 0;position:relative;overflow:visible}.popup_submit_holder::before{content:'';position:absolute;top:50%;margin-top:-8px;left:50px;width:18px;height:18px;background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAMAAABhEH5lAAAAZlBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////+Vn2moAAAAIXRSTlMAsDCQwMr3XZRMNycdBvvv3qiGfW5hDN/Zw7m3dlRQRRdzxY0JAAAAg0lEQVQY02WPVxKDMAxEFdwAY5LQ0sve/5JYYigevy/paTUa0U8p1VCCAvBNVT1qmNOBMcoBCYpzuQo2U2RyVSaqY+X2/lJWgZWHYJ+Dp5WzjCc6YNAXG8t3OrtIV/vQgmnv2rGpWryICQa2XkIx/uei2PbewE2KKZ52JLi+IcF3H6IZKLkSeA2wSjUAAAAASUVORK5CYII=);background-position:initial initial;background-repeat:initial initial}.popup_form1 input[type=submit]{color:#fff;cursor:pointer;font-size:17px;line-height:20px;padding:20px 10px;transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;border:none;background-image:linear-gradient(#16b3de 0,#0790cb 100%);background-position:initial initial;background-repeat:initial initial;border-radius:30px}.popup_content{padding:30px 75px}.popup_content p{opacity:.8;text-align:center;margin:0 0 2px;font:12px/16px FiraSans-Regular,Arial,Helvetica,sans-serif;color:#181c26;opacity:.8}.text_popup{max-width:620px}.text_popup .popup_title{text-align:left;padding:50px}.text_popup .popup_content{padding:40px 50px}.text_popup .popup_content p{text-align:left;font-size:15px;line-height:19px;margin:0 0 20px;opacity:1;color:#000}@media screen and (max-width:1350px){.gen_nav_holder .center::before{display:none}}@media screen and (max-width:1170px){nav{position:absolute;width:100%;text-align:center;left:0;top:0;bottom:100%}nav ul{display:none;z-index:1000;position:relative;padding:50px 0 10px;background-color:#171c26;margin-top:-15px;background-position:initial initial;background-repeat:initial initial}nav li{display:block;margin:0 0 15px}.logo{float:left;margin-left:60px}.gen_nav_holder{text-align:center}.burger_menu{display:block;width:30px;height:20px;position:absolute;top:5px;left:20px;z-index:20000}.burger_menu span,.burger_menu::after,.burger_menu::before{background-color:#fff;height:2px;left:0;position:absolute;width:100%;transition:all .4s ease-in-out;-webkit-transition:all .4s ease-in-out;background-position:initial initial;background-repeat:initial initial}.burger_menu span{top:50%;margin-top:-1px}.burger_menu::before{content:'';top:0}.burger_menu::after{content:'';bottom:0}.main_carousel,.text_block{margin:0}.main_carousel{position:static}.text_block>ul{max-width:700px}.master_section{padding:15px 0 60px}.main_btn_list,.text_block p{text-align:center}.main_btn_list li{margin:0 5px 10px}.carousel_block{line-height:400px}}@media screen and (max-width:767px){.center{padding:0 15px}.top_nav_holder{padding:8px 10px}.top_nav_holder ul{margin:0 -5px}.top_nav_holder li{font-size:10px;margin:0 5px}}@media screen and (max-width:600px){h1{font-size:46px;line-height:50px}br{display:none}.main_price{text-align:center}.text_block>ul{max-width:400px;margin:0 auto 20px}.text_block>ul li{width:50%}a.top_order{padding:10px 15px;margin:-5px 0;font-size:12px}.top_nav_holder ul{display:block;text-align:center;margin:0 0 5px}.main_carousel{padding:0}.popup .close_popup{right:10px;top:10px}}@media screen and (max-width:530px){h1{font-size:38px;line-height:44px}a.top_order{font-size:10px}.logo{margin:0 0 0 50px}.text_block>ul{max-width:200px}.text_block>ul li{width:100%}.mini_characteristics{text-align:center;font-size:0;line-height:0;display:none}.mini_characteristics li{width:25%;display:inline-block;vertical-align:middle;box-sizing:border-box;margin:0;padding:0 5px}}@media screen and (max-width:400px){.popup_content,.popup_title{padding-left:20px;padding-right:20px}.mini_characteristics{display:none}}@media screen and (max-width:1000px){.mini_characteristics{display:none}}.fadeIn{-webkit-animation:fadeIn;animation-name:fadeIn}.slick-slider{position:relative;display:block;box-sizing:border-box;-webkit-user-select:none;-webkit-tap-highlight-color:transparent;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y}.slick-list{position:relative;display:block;overflow:hidden;margin:0;padding:0}.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.slick-track{position:relative;margin:0 auto;display:block;top:0;left:0}.slick-track::after,.slick-track::before{display:table;content:''}.slick-track::after{clear:both}.slick-slide{display:none;float:left;height:100%;min-height:1px}.slick-initialized .slick-slide,.slick-slide img{display:block}
  </style>
 </head>

 <body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6BZ9NV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <style>
   @media screen and (min-width:200px) and (max-width:550px) {
   .slick-track  .slick-slide img  {
   /*display: none;*/
   }
   .gallery_section p{
   font-size: 20px;
   line-height: 66px;
   margin: 0 0 0px;
   }
   .rewiews_section h2{
   font-size: 37px;
   }
   .ultra_section h2{
   font-size: 42px;
   line-height: 36px;
   }
   }@media screen and (min-width:550px) and (max-width:1990px) {
   .ziblock  {
   display: none;
   }
   }
  </style>
  <div id="wrapper">
   <header id="header">
    <div class="top_nav_holder">
     <div class="center">
      <ul>
       <li><a href="#" class="info_btn_2">Доставка и оплата</a></li>
       <li><a href="#" class="guarantee">Гарантия</a></li>
       <li><a href="#" class="call_back_btn">Заказать звонок</a></li>
      </ul>
     </div>
    </div>
    <div class="gen_nav_wrapper">
     <div class="gen_nav_holder">
      <div class="center"> <strong class="logo"><a href="/"></a></strong>
       <nav>
        <div class="burger_menu"> <span></span> </div>
        <ul>
         <li><a href="#characteristics_section" class="anchor">возможности</a></li>
         <li><a href="#gallery_section" class="anchor">фотографии</a></li>
         <li><a href="#char_comp_section" class="anchor">параметры и комплектация</a></li>
         <li><a href="#rewiews_section" class="anchor">Отзывы</a></li>
        </ul>
       </nav> <a href="#" class="top_order">оформить заказ</a> </div>
     </div>
    </div>
   </header>
   <section class="master_section">
    <div class="center">
     <ul class="mini_characteristics">
      <li class="wow fadeIn" data-wow-delay="1.6s"> </li>
      <li class="wow fadeIn" data-wow-delay="1.8s"> </li>
      <li class="wow fadeIn" data-wow-delay="2s"> </li>
      <!--<li class="wow fadeIn" data-wow-delay="1.6s"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/top-icon-4.png?2" alt="image description"> </li>-->
     </ul>
     <div class="master_holder">
      <div class="text_block">
       <h1 class="wow fadeIn" data-wow-delay="0.8s">Зеркало<br> авто-компьютер<br> в ультратонком корпусе<br> 10в1</h1><img class="ziblock" src="images/new-slider1.png" alt="image description" style="  width: 320px; ">
       <p class="wow fadeIn" data-wow-delay="1s">«SMART-MiRROR» - это самый передовой гаджет для автомобиля, программное ядро разработанное Японскими инженерами, самая последняя версия операционной системы - Android 7.0 Nougat с русскоязычным интуитивно понятным интерфейсом.
        Все это в ультратонком корпусе, приятно дополняющем интерьер автомобиля любого класса.</p>
       <ul class="wow fadeIn" data-wow-delay="1.2s">
        <li>Навигация</li>
        <li>Видеорегистратор</li>
        <li>Видео, Музыка, Фото</li>
        <li>Парковочная камера</li>
        <li>Двойная запись</li>
        <li>Full HD 1080p</li>
        <li>Голосовые звонки</li>
        <li>Wi-Fi и Bluetooth</li>
        <li>На системе Android 7.0</li>
       </ul>
       <div class="wow fadeIn main_price" data-wow-delay="1.4s"> <span>стоимость по акции до
<script type="text/javascript">
Data=new Date();
//Data=(new Date()).getTime() + 2*24*60*60*1000;
Year=Data.getFullYear(); Month=Data.getMonth(); Day=Data.getDate(); // Преобразуем месяца
switch (Month){case 0: fMonth="января"; break; case 1: fMonth="февраля"; break; case 2: fMonth="марта"; break; case 3: fMonth="апреля"; break; case 4: fMonth="мая"; break; case 5: fMonth="июня"; break; case 6: fMonth="июля"; break; case 7: fMonth="августа"; break; case 8: fMonth="сентября"; break; case 9: fMonth="октября"; break; case 10: fMonth="ноября"; break; case 11: fMonth="декабря"; break;}// Вывод
document.write(" "+Day+"&nbsp;"+fMonth+"");
</script>:</span>
        <div class="old_price">5300 грн.</div>
        <div class="new_price">2499 грн.</div>
        <ul class="main_btn_list">
         <li><a href="#" class="order_btn"><i>Оформить заказ</i></a></li>
         <li><a href="#characteristics_section" class="anchor"><i>Подробнее</i></a></li>
        </ul>
       </div>
      </div>
      <div class="wow fadeIn main_carousel" data-wow-delay="0.5s">
       <div class="main_carousel_holder">
        <div class="carousel_block"> <img class="blocno" src="images/new-slider1.png" alt="image description"> </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <section class="light_section">
    <div class="center">
     <ul class="light_list">
      <li class="wow fadeIn" data-wow-delay="0.2s">
       <div class="light_list_block">
        <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/light-2.png" alt="image description"> </div><strong>Доставка 1 день</strong>
        <p>Отправка товара в день заказа</p>
       </div>
      </li>
      <li class="wow fadeIn" data-wow-delay="0.4s">
       <div class="light_list_block">
        <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/light-1.png" alt="image description"> </div><strong>Оплата при получении</strong>
        <p>Возможность проверить товар перед оплатой</p>
       </div>
      </li>
      <li class="wow fadeIn" data-wow-delay="0.6s">
       <div class="light_list_block">
        <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/light-3.png" alt="image description"> </div><strong>Гарантия 3 года</strong>
        <p>Официальная гарантия от магазина</p>
       </div>
      </li>
      <li class="wow fadeIn" data-wow-delay="0.8s">
       <div class="light_list_block">
        <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/light-4.png" alt="image description"> </div><strong>Тест-драйв 14 дней</strong>
        <p>Если не понравится, мы вернем вам деньги!</p>
       </div>
      </li>
     </ul>
    </div>
   </section>
   <section class="specialoffer_section">
    <div class="center">
     <div class="specialoffer_text">
      <h2>выгодное<br> спецпредложение<br> только до
       <script type="text/javascript">
        Data=new Date();
        //Data=(new Date()).getTime() + 2*24*60*60*1000;
        Year=Data.getFullYear(); Month=Data.getMonth(); Day=Data.getDate(); // Преобразуем месяца
        switch (Month){case 0: fMonth="января"; break; case 1: fMonth="февраля"; break; case 2: fMonth="марта"; break; case 3: fMonth="апреля"; break; case 4: fMonth="мая"; break; case 5: fMonth="июня"; break; case 6: fMonth="июля"; break; case 7: fMonth="августа"; break; case 8: fMonth="сентября"; break; case 9: fMonth="октября"; break; case 10: fMonth="ноября"; break; case 11: fMonth="декабря"; break;}// Вывод
        document.write(" "+Day+"&nbsp;"+fMonth+"");
       </script>
      </h2>
      <div class="specialoffer_price_block">
       <div class="big_sale" style="letter-spacing: -5px;">-53%</div>
       <div> <span class="old_price">5300 грн.</span> <span class="new_price">2499 грн.</span> </div>
      </div>
      <p>Выгодное специальное предложение до конца дня.
       <br> Закажите многофункциональное зеркало авто-компьютер с камерой заднего вида 10в1 по специальной цене!</p>
     </div>
     <div class="specialoffer_form_holder">
      <form method="POST" action="send.php" id="lv-formLanding1" onsubmit="if(!this.name.value){this.name.focus(); return false;} if(!this.phone.value){this.phone.focus(); return false;}"> <strong>Оформить заказ</strong>
       <p>Наш оператор свяжется с Вами для
        <br> уточнения деталей заказа.</p>
       <input placeholder="Введите ваше имя" id="lv-formLanding1-fio" class="" name="name" type="text" maxlength="255" required/>
       <input placeholder="Введите ваш контактный телефон" id="lv-formLanding1-phone" class="phone-mask" name="phone" required type="text" maxlength="25" />
       <div class="input_sbmt_holder">
        <input type="hidden" name="theme" value="Заказ тoвара">
        <input type="submit" value="Отправить заявку"> </div><span>Данная заявка Вас ни к чему не обязывает<br> и является конфиденциальной.</span> </form>
     </div>
    </div>
   </section>
   <section class="characteristics_section" id="characteristics_section">
    <div class="center">
     <center>
      <h2>Особенности «SMART-MiRROR»</h2>
     </center>
     <br>
     <ul class="characteristics_list">
      <li>
       <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/characteristics-2.jpg" alt=""> </div>
       <h3>Встроенный GPS-навигатор</h3>
       <p>Благодаря встроенному в зеркало GPS-навигатору, вам больше не нужно вглядываться в названия улиц и номера домов во время поиска нужного адреса. При приближении к выбранному пункту назначения экран переключится в режим камеры,
        и нужное место будет отмечено яркой стрелкой. Установленно две навигационные системы: Navitel (лицензия, последней версии) и Goolge Карты. Возможность установить любые другие навигационные системы через PlayMarket.</p>
      </li>
      <li>
       <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/characteristics-1.jpg" alt=""> </div>
       <h3>Видеорегистратор в зеркале</h3>
       <p>Одним из достоинств «SMART-MIRROR», как видеорегистратора - это качественная фронтальная камера, записывающая в высочайшем формате Full HD с разрешением 1920*1080. При этом угол обзора составляет 170°. Используется качественная
        матрица, которая делает картинку яркой, сочной, четкой, а угол обзора экрана настолько широкий, что изображение не искажается с водительского сиденья.</p>
      </li>
      <li>
       <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/characteristics-3.jpg" alt=""> </div>
       <h3>Oперационная система Android 7.0</h3>
       <p>Сенсорный экран размером в 5.5" дюймов на самой лучшей и самой стабильной операционной системе Android 7.0 Nougat. Возможность установить множество приложений из Google PlayMarket, а также смотреть потоковое видео из интернета
        и осуществлять веб-браузинг по сети.</p>
      </li>
      <li>
       <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/characteristics-4.jpg" alt=""> </div>
       <h3>Камера заднего вида</h3>
       <p>Поможет Вам не только безопасно припарковаться, но и ведёт постоянную видеосъемку в Full HD 1080p качестве.</p>
      </li>
      <li>
       <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/characteristics-5.jpg" alt=""> </div>
       <h3>Режим "Ночная съемка"</h3>
       <p>Основой функции "Ночная съемка" служит датчик, улавливающий световые лучи. Информация обрабатывается и проецируется в виде малоцветного образа в определённом масштабе на монитор. Дальность обзора - 350 метров.</p>
      </li>
      <li>
       <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/characteristics-6.jpg" alt=""> </div>
       <h3>Голосовые звонки (Hands free)</h3>
       <p>Благодаря встроенному модулю Bluetooth версии 5.0, вы можете принимать звонки не отвлекаясь на поиски вашего мобильного телефона.</p>
      </li>
      <li>
       <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/characteristics-7.jpg" alt=""> </div>
       <h3>Full HD 1080p</h3>
       <p>Используется новаторская технология передачи видео Full HD 1080 Prof (повышенная четкость изображения).</p>
      </li>
      <li>
       <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/characteristics-8.jpg" alt=""> </div>
       <h3>Простое крепление и подключение</h3>
       <p>Регистратор незаметен – крепление поверх зеркала делает его разрешенным по новому законодательству, а также он не будет легкой добычей для воров (т. е. отсутствует необходимость постоянно снимать и прятать устройство)</p>
      </li>
     </ul>
    </div>
   </section>
   <section class="for_russia_section">
    <div class="center">
     <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/ukraine.png" alt=""> </div><strong>Разработан для дорог <br> Украины, стран СНГ и Европы</strong>
     <p>Зеркало авто-компьютер 10в1 «SMART-MiRROR»&nbsp;полностью адаптированно под внутренний рынок Украины, стран СНГ и Европы. Русскоязычный интерфейс устройства приятно дополняет интуитивно понятный интерфейс. </p>
     <div class="order_holder"> <a href="#" class="order_btn">Заказать в 1 клик</a> </div>
    </div>
   </section>
   <section class="ultra_section">
    <div class="center">
     <h2>Ультратонкий<br> корпус&nbsp;«SMART-MiRROR»</h2>
     <p>Все оригинальные устройства «SMART-MiRROR» производятся на современном, высокотехнологичном оборудовании, что позволило нам создать уникальный, ультратонкий корпус толщиной всего 8 мм, заключивший в себя самый богатый внутренний функционал
      среди аналогов</p>
     <div class="visual_holder">
      <div class="visual"> <img class="wow fadeIn" data-wow-delay="0.2s" src="images/ultra-12.jpg" alt="image description"></div>
     </div>
    </div>
   </section>
   <section class="gallery_section" id="gallery_section">
    <div class="center">
     <p>Фотографии&nbsp;«SMART-MiRROR»</p>
    </div>
    <div class="gallery_carousel">
     <div>
      <a href="images/f/03.jpg" class="gallery_carousel_visual" rel="group1"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/carousel-3.jpg" alt="image description"> </a>
     </div>
     <div>
      <a href="images/f/04.jpg" class="gallery_carousel_visual" rel="group1"> <img class="mobile_hidden" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/carousel-4.jpg" alt="image description"> </a>
     </div>
     <div>
      <a href="images/f/02.jpg" class="gallery_carousel_visual" rel="group1"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/carousel-2.jpg" alt="image description"> </a>
     </div>
     <div>
      <a href="images/f/10.jpg" class="gallery_carousel_visual" rel="group1"> <img  class="mobile_hidden" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/carousel-10.jpg" alt="image description"> </a>
     </div>
     <div>
      <a href="images/f/01.jpg" class="gallery_carousel_visual" rel="group1"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/carousel-1.jpg" alt="image description"> </a>
     </div>
     <div>
      <a href="images/f/05.jpg" class="gallery_carousel_visual" rel="group1"> <img  class="mobile_hidden" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/carousel-5.jpg" alt="image description"> </a>
     </div>
     <div>
      <a href="images/f/07.jpg" class="gallery_carousel_visual" rel="group1"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/carousel-7.jpg" alt="image description"> </a>
     </div>
     <div>
      <a href="images/f/09.jpg" class="gallery_carousel_visual" rel="group1"> <img  class="mobile_hidden" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/carousel-9.jpg" alt="image description"> </a>
     </div>
     <div>
      <a href="images/f/08.jpg" class="gallery_carousel_visual" rel="group1"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/carousel-8.jpg" alt="image description"> </a>
     </div>
     <div>
      <a href="images/f/06.jpg" class="gallery_carousel_visual" rel="group1"> <img  class="mobile_hidden" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/carousel-6.jpg" alt="image description"> </a>
     </div>
    </div>
   </section>
   <section class="char_comp_section" id="char_comp_section">
    <div class="center">
     <div class="char_comp_block char_block"> <strong>Характеристики</strong> <span></span>
      <p>"SMART-MiRROR" является продуктом разработки Японских инженеров, которые смогли уместить мощность настоящего планшетного компьютера в одном устройстве без потерь в качестве и производительности. Процессор Ambarella A7 совместно
       с оптической системой из 6 линз обеспечивают максимально детализированное изображение с четкой детализацией как днем, так и ночью</p>
      <ul>
       <li> <span>Дисплей</span> <b>5,5 " IPS, сенсорный экран</b> </li>
       <li> <span>Разрешение экрана</span> <b>1920x1080</b> </li>
       <li> <span>Оперативная память</span> <b>2 Гб</b> </li>
       <li> <span>Накопительная память</span> <b>32 Гб</b> </li>
       <li> <span>CPU:</span> <b>Четырехъядерный QUAD COREARM</b> </li>
       <li> <span>Основная камера</span> <b>Full HD 1080 px | 170°</b> </li>
       <li> <span>Камера заднего вида</span> <b>Full HD 1080 px | 170°</b> </li>
       <li> <span>Разрешение видео</span> <b>1920 x 1080 px, 30 fps</b> </li>
       <li> <span>Операционная система</span> <b>Android 7.0 Nougat</b> </li>
       <li> <span>Система навигации</span> <b>GPS</b> </li>
       <li> <span>Сеть и коммуникации</span> <b>Wi-Fi, Bluetooth</b> </li>
       <li> <span>Микрофон</span> <b>Встроенный, шумоподавление</b> </li>
       <li> <span>Совместная запись</span> <b>2 камеры</b> </li>
       <li> <span>G-sensor</span> <b>есть</b> </li>
       <li> <span>Циклическая запись</span> <b>есть</b> </li>
       <li> <span>Разработка устройства</span> <b>Япония</b> </li>
       <li> <span>Производство</span> <b>Южная Корея</b> </li>
      </ul>
     </div>
     <div class="char_comp_block comp_block"> <strong>Комплектация</strong> <span>Простая установка</span>
      <p>Зеркало бортовой компьютер — накладка на штатное зеркало заднего вида. Установка видеорегистратора возможна на штатном зеркале любой толщины. Зеркало SMART-MiRROR просто фиксируется на месте с помощью двух резиновых держателей,
       имеющих регулируемую длину.</p>
      <div class="visual_holder">
       <div class="visual"> <b>6,5 метровый кабель для тыловой камеры</b> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/compl-1.jpg" alt="image description">        </div>
       <div class="visual"> <b>Автомобильное зарядное устройство</b> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/compl-2.jpg" alt="image description">        </div>
       <div class="visual"> <b>USB-кабель</b> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/compl-3.jpg" alt="image description"> </div>
       <div class="visual" style="padding-left:30px;"> <b>Камера заднего вида</b> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/compl-4.jpg" alt="image description"> </div>
       <div class="visual"> <b>Резиновые стяжки - 2 шт.</b> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/compl-5.jpg" alt="image description"> </div>
      </div>
     </div>
    </div>
   </section>
   <section class="full_free_section">
    <div class="center">
     <h2 class="wow fadeIn" data-wow-delay="0.2s">Полная свобода<br> с Android 7.0 Nougat</h2>
     <p class="wow fadeIn" data-wow-delay="0.4s">Самая последняя операционная система - Android 7.0 Nougat, основанная на ядре Linux, в сочетании с интуитивно понятным интерфейсом, открывает для Вас полный доступ ко всем приложениям Google Play и всемирной сети. Слушайте любимую
      музыку, смотрите фильмы, пользуйтесь приложениями и общайтесь с друзьями в социальных сетях. </p>
     <div class="free_list_info">
      <div class="free_list_holder">
       <p class="wow fadeIn" data-wow-delay="0.6s">Топ 10 популярных приложений используемых в салоне автомобиля</p>
       <ul>
        <li class="wow fadeIn" data-wow-delay="0.8s">Whats App</li>
        <li class="wow fadeIn" data-wow-delay="0.9s">Facebook</li>
        <li class="wow fadeIn" data-wow-delay="1s">Яндекс карты</li>
        <li class="wow fadeIn" data-wow-delay="1.1s">Waze</li>
        <li class="wow fadeIn" data-wow-delay="1.2s">2GIS</li>
        <li class="wow fadeIn" data-wow-delay="1.3s">Яндекс. Навигатор</li>
        <li class="wow fadeIn" data-wow-delay="1.4s">Google Maps</li>
        <li class="wow fadeIn" data-wow-delay="1.5s">BlaBlaCar</li>
        <li class="wow fadeIn" data-wow-delay="1.6s">Youtube</li>
        <li class="wow fadeIn" data-wow-delay="1.7s">Navitel</li>
       </ul> <a href="#" class="order_btn">Заказать в 1 клик</a> </div>
      <div class="wow bounceInDown visual" data-wow-delay="2s"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/interface-1.png?2" alt="image description"> </div>
     </div>
    </div>
    <div class="wow fadeIn after_bg" data-wow-delay="2.8s"></div>
   </section>
   <section class="reliable_section">
    <div class="center">
     <h2>Надежный помощник</h2>
     <ul class="characteristics_list">
      <li>
       <div class="visual"> <img class="mobile_hidden" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/reliable-1.jpg" alt=""> </div>
       <h3>Защитит от автоподстав,<br> Поможет доказать Вашу правоту</h3>
       <p>Только четкое изображение Full HD, в сочетании с синхронной записью DualCam (+камера заднего вида) и записью траектории движения GPS, поможет защитить Вас от автоподстав, неправомерных действий сотрудников ГАИ и, самое главное,
        доказать вашу правоту в суде.</p>
      </li>
      <li>
       <div class="visual"> <img class="mobile_hidden" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/reliable-2.jpg" alt=""> </div>
       <h3>Не отвлекает от дороги<br> и не мешает обзору</h3>
       <p>«GOLD-FUSION»&nbsp;обеспечивает безопасное и комфортное вождение. Ультратонкий корпус устройства выполнен в универсальном компактном размере, идеально сочетающемся с салонами различных автомобилей. Зеркало не загромождает салон
        и не закрывает обзор водителя, а специальный зеркальный материал обеспечивает четкий задний обзор.</p>
      </li>
     </ul>
    </div>
   </section>
   <section class="dualcam_section dualcam_section_info">
    <div class="center">
     <p>С 25 апреля 2016 года запись с видеорегистратора является неоспоримым доказательством в суде. </p>
    </div>
   </section>
   <section class="rewiews_section" id="rewiews_section">
    <div class="center">
     <h2>Отзывы<br> автовладельцев</h2>
     <div class="reviews_carousel">
      <div class="reviews_carousel_block">
       <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/reviewer-1.jpg" alt="image description"> </div>
       <p>Очень красивое зеркало. Подключается легко. Вторую камеру поставил под стекло в багажнике, качество супер. В парковочной камере есть метки. Вечером все видно. На экране можно показать картинку сразу с 2-х камер. Спасибо.</p>
       <div class="reviewer_info"> <span>Игорь Еремеев</span>, <span>Киев</span>, 32 года Предприниматель </div>
       <div class="stars_list" style="display: inline-flex;"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/stars.png" alt="image description"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg=="
         data-src="images/stars.png" alt="image description"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/stars.png" alt="image description">        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/stars.png" alt="image description"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg=="
         data-src="images/stars.png" alt="image description"> </div>
      </div>
      <div class="reviews_carousel_block">
       <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/reviewer-2.jpg" alt="image description"> </div>
       <p>До этого был обычный регистратор и отдельно планшет. Позже кое-как воткнул еще и камеру через весь салон. В прикуривателе зарядка телефона и FM трансмитер... Рад что все благополучно сменил Вашим зеркалом. Материал и оптика
        действительно хороши.</p>
       <div class="reviewer_info"> <span>Михаил Брагин</span>, Харьков, 34 года Экспедитор </div>
       <div class="stars_list" style="display: inline-flex;"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/stars.png" alt="image description"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg=="
         data-src="images/stars.png" alt="image description"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/stars.png" alt="image description">        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/stars.png" alt="image description"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg=="
         data-src="images/stars.png" alt="image description"> </div>
      </div>
      <div class="reviews_carousel_block">
       <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/reviewer-3.jpg" alt="image description"> </div>
       <p>Cпасибо за посылку и оперативную работу. Копал интернет неделю, чтобы найти что-нибудь вменяемое по адекватной цене. Очень рад, что попал именно на ваше зеркало. А за камеру заднего вида отдельный поклон!</p>
       <div class="reviewer_info"> <span>Алексей Горшенев</span>, Кривой Рог, 29 лет Персональный тренер </div>
       <div class="stars_list" style="display: inline-flex;"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/stars.png" alt="image description"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg=="
         data-src="images/stars.png" alt="image description"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/stars.png" alt="image description">        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/stars.png" alt="image description"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg=="
         data-src="images/stars.png" alt="image description"> </div>
      </div>
      <div class="reviews_carousel_block">
       <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/reviewer-4.jpg" alt="image description"> </div>
       <p>Благодарю всю вашу команду за вашу работу и этот "компьютер"! Работает отлично. Русский интерфейс и камера паркинга порадовали. Картинку пишет отличную. Спасибо. </p>
       <div class="reviewer_info"> <span>Сергей Краховский</span>, Днепр, 50 лет Дальнобойщик </div>
       <div class="stars_list" style="display: inline-flex;"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/stars.png" alt="image description"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg=="
         data-src="images/stars.png" alt="image description"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/stars.png" alt="image description">        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/stars.png" alt="image description"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg=="
         data-src="images/stars.png" alt="image description"> </div>
      </div>
      <div class="reviews_carousel_block">
       <div class="visual"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/reviewer-5.jpg" alt="image description"> </div>
       <p>Рассказали как автоворы выбивают окна в автомобилях и срывают планшеты, регистраторы и телефоны - не стал рисковать машиной босса и приобрел Ваш "бортовой компьютер". Расстроен только одним - что не купил сразу второй для своей
        машины )</p>
       <div class="reviewer_info"> <span>Станислав Власов</span>, Запорожье, 49 лет Персональный водитель </div>
       <div class="stars_list" style="display: inline-flex;"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/stars.png" alt="image description"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg=="
         data-src="images/stars.png" alt="image description"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/stars.png" alt="image description">        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" data-src="images/stars.png" alt="image description"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg=="
         data-src="images/stars.png" alt="image description"> </div>
      </div>
     </div>
    </div>
   </section>
   <section class="happy_recall_section">
    <div class="center">
     <p>Мы будем рады получить Ваш отзыв. Оставляйте свои комментарии на нашей почте или по бесплатному телефону: </p><a href="mailto:support@auto-quidux.com.ua"><span class="__cf_email__">support@auto-keep.com.ua</span></a> </div>
   </section>
   <section class="specialoffer_section">
    <div class="center">
     <div class="specialoffer_text">
      <h2>выгодное<br> спецпредложение<br> только до
       <script type="text/javascript">
        Data=new Date();
        //Data=(new Date()).getTime() + 2*24*60*60*1000;
        Year=Data.getFullYear(); Month=Data.getMonth(); Day=Data.getDate(); // Преобразуем месяца
        switch (Month){case 0: fMonth="января"; break; case 1: fMonth="февраля"; break; case 2: fMonth="марта"; break; case 3: fMonth="апреля"; break; case 4: fMonth="мая"; break; case 5: fMonth="июня"; break; case 6: fMonth="июля"; break; case 7: fMonth="августа"; break; case 8: fMonth="сентября"; break; case 9: fMonth="октября"; break; case 10: fMonth="ноября"; break; case 11: fMonth="декабря"; break;}// Вывод
        document.write(" "+Day+"&nbsp;"+fMonth+"");
       </script>
      </h2>
      <div class="specialoffer_price_block">
       <div class="big_sale" style="letter-spacing: -5px;">-53%</div>
       <div> <span class="old_price">5300 грн.</span> <span class="new_price">2499 грн.</span> </div>
      </div>
      <p>Выгодное специальное предложение до конца дня.
       <br> Закажите многофункциональное зеркало авто-компьютер с камерой заднего вида 10в1 по специальной цене!</p>
     </div>
     <div class="specialoffer_form_holder">
      <form method="POST" action="send.php" id="lv-formLanding3" onsubmit="if(!this.name.value){this.name.focus(); return false;} if(!this.phone.value){this.phone.focus(); return false;}"> <strong>Оформить заказ</strong>
       <p>Наш оператор свяжется с Вами для
        <br> уточнения деталей заказа.</p>
       <input placeholder="Введите ваше имя" id="lv-formLanding3-fio" class="" name="name" type="text" maxlength="255" required/>
       <input placeholder="Введите ваш контактный телефон" id="lv-formLanding3-phone" class="phone-mask" name="phone" required type="text" maxlength="25" />
       <div class="input_sbmt_holder">
        <input type="hidden" name="theme" value="Заказ тoвара">
        <input type="submit" value="Отправить заявку"> </div><span>Данная заявка Вас ни к чему не обязывает<br> и является конфиденциальной.</span> </form>
     </div>
    </div>
   </section>
   <footer>
    <div class="center">
     <div class="free_call">
      <p>Остались вопросы? Звоните!</p>
     </div><a href="#" class="call_back_btn"><span>Заказать обратный звонок</span></a>
     <p class="identificational_block"> <span></span> <span></span> <span><span style="color: rgb(78, 89, 93); font-family: "Helvetica Neue", Helvetica, Verdana, Arial, sans-serif; font-size: 14px; text-align: start; display: inline !important;"></span></span>
     </p>
     <div class="copy">Copyright © 2018 GOLD-FUSION Inc. All rights reserved.</div>
     <p id="offer-block"><a id="offer-block-link" href="politics.html" target="_blank">Условия соглашения и политика конфиденциальности</a></p>
    </div>
   </footer>
   <div class="popup_holder" id="popup1" style="display: none">
    <div class="bg">&nbsp;</div>
    <div class="popup"> <a href="#" class="close_popup"></a>
     <div class="popup_title"> <strong>Оформить заказ</strong>
      <p>Наш оператор свяжется с Вами для
       <br> уточнения деталей заказа. </p>
     </div>
     <div class="popup_content">
      <form method="POST" action="send.php" id="lv-formLanding4" class="popup_form1" onsubmit="if(!this.name.value){this.name.focus(); return false;} if(!this.phone.value){this.phone.focus(); return false;}">
       <fieldset>
        <div class="popup_input_holder">
         <input placeholder="Введите ваше имя" id="lv-formLanding4-fio" class="" name="name" type="text" maxlength="255" required/> </div>
        <div class="popup_input_holder">
         <input placeholder="Введите ваш контактный телефон" id="lv-formLanding4-phone" class="phone-mask" name="phone" required type="text" maxlength="25" /> </div>
        <div class="popup_submit_holder">
         <input type="hidden" name="theme" value="Заказ тoвара">
         <input type="submit" value="Отправить заказ"> </div>
       </fieldset>
      </form>
      <p>Мы гарантируем конфиденциальность данных.
       <br> Все данные передаются исключительно
       <br> специалисту службы заказов.</p>
     </div>
    </div>
   </div>
   <div class="popup_holder" id="popup2" style="display: none">
    <div class="bg">&nbsp;</div>
    <div class="popup"> <a href="#" class="close_popup"></a>
     <div class="popup_title"> <strong>Заказать звонок</strong>
      <p>Ведущий специалист компании свяжется
       <br> с вами в ближайшее время</p>
     </div>
     <div class="popup_content">
      <form method="POST" action="send.php" id="lv-formLanding5" class="popup_form1" onsubmit="if(!this.name.value){this.name.focus(); return false;} if(!this.phone.value){this.phone.focus(); return false;}">
       <fieldset>
        <div class="popup_input_holder">
         <input placeholder="Введите ваше имя" id="lv-formLanding5-fio" class="" name="name" type="text" maxlength="255" required/> </div>
        <div class="popup_input_holder">
         <input placeholder="Введите ваш контактный телефон" id="lv-formLanding5-phone" class="phone-mask" name="phone" required type="text" maxlength="25" /> </div>
        <div class="popup_submit_holder">
         <input type="hidden" name="theme" value="Заказ звoнка">
         <input type="submit" value="Перезвоните мне"> </div>
       </fieldset>
      </form>
      <p>Мы гарантируем конфиденциальность данных.
       <br> Все данные передаются исключительно
       <br> специалисту службы заказов.</p>
     </div>
    </div>
   </div>
  </div>
  <div class="popup_holder" id="popup4" style="display: none">
   <div class="bg">&nbsp;</div>
   <div class="popup text_popup"> <a href="#" class="close_popup"></a>
    <div class="popup_title"> <strong>Доставка и оплата</strong> </div>
    <div class="popup_content">
     <p>Заказы доставляются компанией "Новая Почта". Оплата за товар - при получении на почте! После отправки вам будет отправлено СМС уведомление с номером накладной заказа, путь посылки можно отслеживать онлайн на сайте "Новая Почта".</p>
     <p>Что необходимо указать при заказе? ФИО (полностью) и Ваш контактный телефон, после чего менеджер свяжется с вами в течении 15 мин.</p>
     <p>Срок доставки: 1-2 дня.</p>
     <p>Стоимость доставки: 54 грн.</p>
    </div>
   </div>
  </div>
  <div class="popup_holder" id="popup5" style="display: none">
   <div class="bg">&nbsp;</div>
   <div class="popup text_popup"> <a href="#" class="close_popup"></a>
    <div class="popup_title"> <strong>Гарантийное обслуживание</strong> </div>
    <div class="popup_content">
     <p>На все устройства, купленные у нас в магазине, распространяются гарантийные обязательства.</p>
     <p>Гарантийное обслуживание включает в себя бесплатный ремонт или замену вышедших из строя комплектующих в течение 3 года с момента приобретения изделия.</p>
     <p>Гарантия распространяется только на элементную базу устройства. Гарантия предоставляется в том случае, если проявляется дефект изготовителя. В рамках гарантийного обслуживания мы восстанавливаем устройство, либо меняем его на новое.
      В крайнем случае (если в наличии нет устройства этого модельного ряда) возвращаем полную стоимость. В любом случае при предъявлении претензии к качеству устройства будет проведена экспертиза. После экспертизы мы извещаем клиента
      о наступлении гарантийного или не гарантийного случая.</p>
     <p>Срок гарантийного ремонта определяется степенью неисправности изделия и может доходить до 15 (пятнадцати) календарных дней, с момента передачи устройства в сервисный центр, если иной срок не определен письменным соглашением. Претензии
      по комплектации и внешнему виду изделия принимаются только при его покупке.</p>
    </div>
   </div>
  </div>
  <script>
   !function(e,t,n){function r(){for(;u[0]&&"loaded"==u[0][l];)o=u.shift(),o[f]=!a.parentNode.insertBefore(o,a)}for(var i,s,o,u=[],a=e.scripts[0],f="onreadystatechange",l="readyState";i=n.shift();)s=e.createElement(t),"async"in a?(s.async=!1,e.head.appendChild(s)):a[l]?(u.push(s),s[f]=r):e.write("<"+t+' src="'+i+'" defer></'+t+">"),s.src=i}(document,"script",["https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js","js/slick.min.js?2","js/fancybox/jquery.fancybox.pack.js","comeback/ComebackerAlert.js?v=2","js/wow.min.js","js/maskinput.js","js/jquery.main.js","js/doc_js.js"])
  </script>
  <script>
   !function(e){for(var t=document.getElementsByTagName("head")[0],s=0;s<e.length;s++){var a=document.createElement("link"),l=document.createAttribute("rel"),n=document.createAttribute("href");l.value="stylesheet",n.value=e[s],a.setAttributeNode(l),a.setAttributeNode(n),t.appendChild(a)}}(["css/fonts.css","css/form.css","css/style1_2.css","css/media.css","comeback/ComebackerAlert.css","https://fonts.googleapis.com/css?family=Fira+Sans","css/animate.css","css/slick.css","js/fancybox/jquery.fancybox.css"])
  </script>
 </body>
</html>