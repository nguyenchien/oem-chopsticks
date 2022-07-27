<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>お問い合わせフォーム - 箸のOEM製造・製作なら 株式会社和心へ</title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="./css/reset.css">

    <!--<script type="text/javascript" src="./js/jquery.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <link rel="stylesheet" href="./css/style.css?ver=20211003">

    <?php if (my_wp_is_mobile()): ?>
        <link rel="stylesheet" href="./css/chopsticks-sp.css">
    <?php else: ?>
        <link rel="stylesheet" href="./css/chopsticks-pc.css">
    <?php endif; ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170265075-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-170265075-1');
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLSMXVS"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KLSMXVS');</script>
    <!-- End Google Tag Manager -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script>
        FontAwesomeConfig = { searchPseudoElements: true };
    </script>
    <link rel="dns-prefetch" href="https://use.fontawesome.com">

</head>
<body>

<?php
    // Handle reCaptcha
    require_once "recaptchalib.php";

    $siteKey = "6LemARUeAAAAABPzEECug-KDhyXk1s2HPSSM49kb";
    $secret = "6LemARUeAAAAAHzlAP4f9_PXPxcxgeXnDqx8vsA3";

    $lang = "en";

    // The response from reCAPTCHA
    $resp = null;
    // The error code from reCAPTCHA, if any
    $error = null;

    $reCaptcha = new ReCaptcha($secret);

    // Was there a reCAPTCHA response?
    if (isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"]) {
        $resp = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
        );
    }
?>

<div id="page" class="site">
    <header>
        <div class="wrap">
            <p class="header_logo"><a href="/" title="和心"><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-pc/header_logo01.png" alt="和心"></a></p>
            <h1>箸のOEM製造・製作なら 株式会社和心へ</h1>
            <?php if (my_wp_is_mobile()) : ?>
                <a href="tel:03-5785-3331" class="header_tel"><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-sp/header_tel01.png" alt="03-5785-3331"></a>
            <?php else: ?>
                <a href="tel:03-5785-3331" class="header_tel"><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-pc/header_tel01.png" alt="03-5785-3331"></a>
            <?php endif; ?>
        </div><!-- .wrap -->
    </header>

    <div class="wrap-inquiry page-inquiry">
        <section id="keyv_bottom" class="mincho">
            <div class="wrap">
                <h2>お問い合わせフォーム</h2>
                <p>具体的なイメージがなくても大歓迎！私たちにご相談ください。</p>
            </div>
        </section>
        <div class="section01_form">
            <div role="form" class="wpcf7" id="wpcf7-f13-p9-o1" lang="en-US" dir="ltr">
                <div class="screen-reader-response"></div>
                <form action="actionSendMail.php" method="POST" class="wpcf7-form" enctype="multipart/form-data">
                    <div class="wrap">
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                        <div class="form01">
                            <div class="header-form">■製作内容についてお聞かせください</div>
                        </div>
                        <div class="form">
                            <div class="form-details">
                                <ul class="form-group">
                                    <li class="item flexbox">
                                        <label class="flexbox" for="text-5"> <span class=""></span> <span class="name-detail">会社名（個人事業主の方は屋号）</span> </label><p></p>
                                        <div class="cbb-content"> <span class="wpcf7-form-control-wrap text-5"><input type="text" name="your-company" value="" size="40" class="wpcf7-form-control wpcf7-text" id="text-5" aria-invalid="false" placeholder="株式会社和心"></span> </div>
                                    </li>
                                    <li class="item flexbox">
                                        <label class="flexbox" for="your-name"> <span class="required">必須</span> <span class="name-detail">ご担当者様</span> </label><p></p>
                                        <div class="cbb-content">
                                            <span class="wpcf7-form-control-wrap your-name">
                                                <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="your-name" aria-required="true" aria-invalid="false" placeholder="山本 太郎" required>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="item flexbox">
                                        <label class="flexbox" for="tel-1"> <span class="required">必須</span> <span class="name-detail">電話番号</span> </label><p></p>
                                        <div class="cbb-content"> <span class="wpcf7-form-control-wrap tel-1"><input type="tel" name="your-tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" id="tel-1" aria-required="true" aria-invalid="false" placeholder="03-5785-3331" required></span> </div>
                                    </li>
                                    <li class="item flexbox">
                                        <label class="flexbox" for="your-email"> <span class="required">必須</span> <span class="name-detail">メール</span> </label><p></p>
                                        <div class="cbb-content"> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="your-email" aria-required="true" aria-invalid="false" placeholder="info@wagokoro.co.jp" required></span> </div>
                                    </li>
                                    <li class="item flexbox">
                                        <label class="flexbox text-other" for="textarea-726"> <span class="name-detail">ご相談内容（アイテム、素材、数量、納期、ご予算等）</span> </label><p></p>
                                        <div class="cbb-content"> <span class="wpcf7-form-control-wrap textarea-726"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" id="textarea-726" aria-invalid="false" placeholder="月〜木曜日のお問い合わせは、24時間以内にご案内いたします。週末、祝日のお問い合わせは翌営業日にご案内いたします。"></textarea></span> </div>
                                    </li>
                                    <li class="item flexbox">
                                        <label class="flexbox" for="file-1"> <span></span><span class="name-detail">デザイン参考資料（１MB以内）</span> </label><p></p>
                                        <div class="flexbox cbb-content other ">
                                            <div class="choose-img">
                                                <span class="wpcf7-form-control-wrap file-1"><input type="file" name="fileToUpload" size="40" class="wpcf7-form-control wpcf7-file" id="file-1" aria-invalid="false"></span>
                                            </div>
                                            <div class="last-item-test name-detail-last-item" id="file_chose">選択されていません</div>
                                        </div>
                                    </li>
                                    <li class="item flexbox">
                                        <label class="flexbox" for="your-email"> &nbsp; </label>
                                        <div class="cbb-content">
                                            <div class="g-recaptcha" data-sitekey="<?php echo $siteKey;?>"></div>
                                            <span class="error-recaptcha" style="display: none;"></span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="btn-submit">
                                    <div class="btn01" id="submit">
                                        <button type="submit" name="submit" class="wpcf7-form-control wpcf7-submit">送信する</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <p id="copyright">Copyright (c) Wagokoro Co.,Ltd.All Rights Reserved.</p>
    <p id="page-top" style="bottom: 20px;"><a href="#"><svg class="svg-inline--fa fa-arrow-up fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="arrow-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path></svg><!-- <i class="fa fa-arrow-up"></i> --></a></p>
</div>

<script type="text/javascript">
    // Validate reCaptcha
    $("form").submit(function(event) {
        var recaptcha = $("#g-recaptcha-response").val();
        if (recaptcha === "") {
            event.preventDefault();
            $('.error-recaptcha').css('display', 'inline-block');
            $('.error-recaptcha').html('Please check the recaptcha!');
            <?php if (my_wp_is_mobile()): ?>
            $('.error-recaptcha').css({'color' : 'red', 'margin' : '0'});
            <?php else: ?>
            $('.error-recaptcha').css({'color' : 'red', 'margin' : '25px'});
            <?php endif; ?>
        }
    });


    document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = "https://oemchopsticks.com/thanks/";
    }, false );
    jQuery(document).ready(function() {
        jQuery('input[type="file"]').on('change', function() {
            var file_chose = jQuery('#file_chose');
            var file_var = jQuery(this).val();
            var filename = file_var.replace(/C:\\fakepath\\/i, '');
            if(file_var === ""){
                jQuery('#file_chose').text("選択されていません");
            }else{
                jQuery('#file_chose').text(filename);
            }
        });
    });
</script>

</body>
</html>

<?php
// Detect is SmartPhone
function my_wp_is_mobile() {
    static $is_mobile;

    if ( isset($is_mobile) )
        return $is_mobile;

    if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
        $is_mobile = false;
    } elseif (
        strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false ) {
        $is_mobile = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false && strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') == false) {
        $is_mobile = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') !== false) {
        $is_mobile = false;
    } else {
        $is_mobile = false;
    }

    return $is_mobile;
}
?>