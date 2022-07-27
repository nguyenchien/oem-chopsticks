<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>お問い合わせ ありがとうございます - 箸のOEM製造・製作なら 株式会社和心へ</title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="./css/reset.css">
    <script type="text/javascript" src="./js/jquery.min.js"></script>

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
            <section id="inquiry_thanks">
                <div class="wrap">
                    <h1>お問い合わせ<br>
                        ありがとうございます</h1>
                    <div>
                        <p>お問い合わせを受け付け致しました。<br>
                            お問い合わせ頂いた内容を確認の上、<br>
                            担当よりご連絡をさせていただきますので、<br>
                            今しばらくお待ちいただけますよう、お願い致します。<br>
                            この度はお問い合わせいただき、<br>
                            誠にありがとうございました。</p>
                        <p>※ご入力いただいたメールアドレス宛に、<br>
                            お問い合わせ内容のご確認メールをお送りしております</p>
                    </div>
                    <div class="thanks_more">
                        <div class="divlink">
                            <a class="btn01" href="/">TOPへ戻る</a></div>
                    </div>
                </div>
            </section>
            <style>#keyv_bottom{display:none;} .page-inquiry .section01_form .btn01:after{display:none;}</style>
        </div>
    </div>

    <p id="copyright">Copyright (c) Wagokoro Co.,Ltd.All Rights Reserved.</p>
    <p id="page-top" style="bottom: 20px;"><a href="#"><svg class="svg-inline--fa fa-arrow-up fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="arrow-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path></svg><!-- <i class="fa fa-arrow-up"></i> --></a></p>
</div>

<script type="text/javascript">
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