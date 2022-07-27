<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>箸のOEM製造・製作なら 株式会社和心へ - 箸のOEM製造・製作なら 株式会社和心へ</title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="./css/reset.css">
    <script type="text/javascript" src="./js/jquery.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

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
    if ( isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"]) {
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

    <?php if (my_wp_is_mobile()): ?>
        <section class="intro-top-section">
            <div class="container">
                <div class="row">
                    <ul class="list-specs flexbox">
                        <li><span>漆箸</span></li>
                        <li><span>割り箸</span></li>
                        <li><span>料理箸</span></li>
                        <li>etc.</li>
                    </ul>
                    <div class="intro-content flexbox">
                        <div class="img img-left">
                            <img src="./images/img-intro-01-new.png" alt="">
                        </div>
                        <div class="main-content">
                            <div class="bg-txt">
                                <p class="txt-main">低コスト×短納期</p>
                                <p>熟練<span>の</span>職人<span>の</span>腕が光る</p>
                                <p>お箸とパッケージがセットで作れる</p>
                            </div>
                        </div>
                        <div class="img img-right">
                            <img src="./images/img-intro-02-new.png" alt="">
                        </div>
                    </div>
                    <ul class="list-point-intro flexbox">
                        <li>
                            <span>最小ロット<br>１００膳</span>
                        </li>
                        <li>
                            <span>直契約を結んだ<br>熟練の職人が<br>製作</span>
                        </li>
                        <li>
                            <span>最短納期<br>１ヵ月〜</span>
                        </li>
                    </ul>
                </div>

            </div>
        </section>

        <section class="cta bg_photo mincho">
            <div class="wrap">
                <h2><em><span class="kenten">アイデア通り</span>の<span class="kenten">デザイン</span></em><br>で製作したい</h2>
                <p class="text_line01">相見積もりだけでもOK</p>
                <p class="cta_text01">お著グッズ制作のプロである私たちにご相談ください。お見積はもちろん無料！</p>
                <a href="inquiry.php" class="cta_btn01" rel="noopener noreferrer"><span>お問い合わせはこちら</span></a>
            </div>
        </section>

        <section class="list-pd-section">
            <div class="container">
                <div class="row">
                    <div class="list-pd-content">
                        <h2 class="list-pd-title">お取引企業様500社 豊富な製作実績</h2>
                        <div class="list-pd-image">
                            <img src="./images/list-pd-image-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="case-section">
            <h2 class="title-case">
                熟練の職人の高い技術で<br>これまで多くのお箸グッズを制作してきました
            </h2>
            <div class="container">
                <div class="row">
                    <ul class="list-case">
                        <li class="single">
                            <div class="img-case">
                                <span class="case-num">case01</span>
                                <div class="pic-case">
                                    <img src="./images/chopsticks_A1.jpg?ver=20200603220" alt="">
                                </div>
                            </div>
                            <div class="case-content">
                                <h3 class="case-name">天然の漆を使った高級感のあるデザイン</h3>
                                <p class="desc">箸先または、箸全体は口に入れても安心・安全な不純物を含まない天然の漆を使用し仕上げます。</p>
                            </div>
                        </li>
                        <li class="single">
                            <div class="img-case">
                                <span class="case-num">case02</span>
                                <div class="pic-case">
                                    <img src="./images/chopsticks_A2.jpg" alt="">
                                </div>
                            </div>
                            <div class="case-content">
                                <h3 class="case-name">ポップなデザインから伝統工芸品まで幅広い商品製作可能</h3>
                                <p class="desc">「輪島塗」「津軽塗」「若狭塗」などの塗箸『日本の誇る伝統工芸品』に加えて、吉野杉、屋久杉、黒文字などの稀少な木材を原材料に用いた様々な商品の製作実績。</p>
                            </div>
                        </li>
                        <li>
                            <div class="img-case">
                                <span class="case-num">case03</span>
                                <div class="pic-case">
                                    <img src="./images/chopsticks_A3.jpg" alt="">
                                </div>
                            </div>
                            <div class="case-content">
                                <h3 class="case-name">プラスアルファのご提案</h3>
                                <p class="desc">お客様のニーズに合わせたパッケージ、付属カスタム、関連商材のご提案まで幅広くご提案致します。用途に合わせたご希望にも柔軟に対応致します。</p>
                            </div>
                        </li>
                        <li>
                            <div class="img-case">
                                <span class="case-num">case04</span>
                                <div class="pic-case">
                                    <img src="./images/chopsticks_A4.jpg?ver=20200603220" alt="">
                                </div>
                            </div>
                            <div class="case-content">
                                <h3 class="case-name">驚きの短納期対応</h3>
                                <p class="desc">オリジナル作成は最短1ヶ月です。ノベルティ用に、イベントに間に合わせたい、短納期対応が必要な事案にも迅速に対応可能です。</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <hr>

        <section class="list-special-section">
            <div class="container">
                <div class="row">
                    <h2 class="list-special-title">職人の街である石川県で3年かけて交渉した<br>一流の職人の腕が光る至高の逸品</h2>
                    <div class="wrap-intro-list-special flexbox">
                        <div class="desc">
                            <p>和心はより高品質な商品をご提供するために、現地で交渉した一流の職人たちと直契約を結んでいます。大量生産品では出せない品質を担保しながら、低コスト、短納期でお客様の商品を制作する仕組みを整えています。</p>
                        </div>
                        <div class="main-img">
                            <img src="./images/chopsticks_A5.jpg" alt="">
                        </div>
                    </div>
                    <ul class="list-special-pd flexbox">
                        <li>
                            <div class="pd-img"><img src="./images/product-chopstick-01.jpg" alt=""></div>
                            <h4 class="pd-name">輪島塗</h4>
                            <p class="pd-desc">歴史ある伝統工芸「輪島塗」。36回の塗り工程により美しく禿げづらい仕上がりになります。</p>
                        </li>
                        <li>
                            <div class="pd-img"><img src="./images/product-chopstick-02.jpg" alt=""></div>
                            <h4 class="pd-name">若狭塗</h4>
                            <p class="pd-desc">日本でのシェアが80％で最も親しまれている「若狭塗」。漆器の中でも風格と重厚感がある仕上がりです。</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="section03" class="worry01">
            <div class="wrap">
                <h2 class="mincho">理想の商品を作ってくれるのは<br>嬉しいけど、</h2>
                <p><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-pc/sec03_balloon01.png" alt="「商品のイメージはあるんだけど…」「素材や工程に詳しくないから少し不安…」「やっぱりデザインが無いと断られますか…？」"></p>
            </div><!-- .wrap -->
        </section>

        <section id="section04_title">
            <div class="wrap">
                <i><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-pc/sec04_title_balloon01.png" alt="ご安心ください！"></i>
                <h2 class="mincho">
                    <img src="./images/3point-chopstick-sp.png"><br>
                    があれば自社デザイナー<br>がデザインいたします
                </h2>
            </div><!-- .wrap -->
        </section>

        <section id="section04_staff">
            <div class="wrap">
                <p class="staff_header mincho">
                    自社ブランドをもつ私たちには、<br>
                    製作に対して的確なアドバイスができる<br>
                    経験豊富なスタッフが揃っています。<br>
                    貴社の商品イメージを忠実に再現する自信があります。
                </p>
                <ul class="starf_img">
                    <li>
                        <figure><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-pc/sec04_staff_img01.png" alt="（スタッフ写真）"></figure>
                        <h3 class="mincho">
                            素材選定のアドバイス、<br>
                            製作工程の管理はお任せください！
                        </h3>
                        <p>
                            和心では専任の営業担当が1名付き、ご相談からお見積、商品完成までの進行を迅速・丁寧に対応いたします。<br>
                            用途やご要望に合わせて、価格・納期・素材・製造方法を的確にご提案し、製作工程の管理や進捗報告をこまめに行うことでお客様と二人三脚で商品を作り上げるお手伝いいたします。
                        </p>
                    </li>
                    <li>
                        <figure><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-pc/sec04_staff_img02.png" alt="（スタッフ写真）"></figure>
                        <h3 class="mincho">
                            10,700以上のデザインノウハウを<br>
                            持つ自社デザイナー
                        </h3>
                        <p>
                            自社ブランドをもつ私たちは金属アクセサリーのマーケティングデータを豊富に所有しています。<br>
                            そんな売れる商品を理解したプロのデザイナーだから、お客様がイメージする商品のキーワードを3つ伺うだけで理想のデザインを書き上げることが可能です。デザインは弊社にお任せください。
                        </p>
                    </li>
                </ul><!-- .staff_img -->

            </div><!-- .wrap -->
        </section>

        <section class="process-section">
            <div class="container">
                <div class="row">
                    <h2 class="process-title">低コスト高品質な商品をお届けするために<br>生産工程にもこだわっています</h2>
                    <ul class="list-process">
                        <li>
                            <div class="img">
                                <img src="./images/img-process-chopstick.jpg">
                            </div>
                            <div class="process-content">
                                <h3 class="process-name">高品質×低コスト<br>職人の手作りで生産</h3>
                                <p class="desc">直契約を結んでいる現地の職人が一本ずつ手作りで生産を行います。およそ30工房と取引がありますので、高い技術と生産スピードを維持しながら、低コストで制作することが出来ます。</p>
                            </div>
                        </li>
                        <li class="item-order">
                            <div class="img">
                                <img src="./images/chopsticks_A6.jpg" alt="">
                            </div>
                            <div class="process-content">
                                <h3 class="process-name">徹底した品質管理<br>納品前のWチェック</h3>
                                <p class="desc">商品の検品を出荷時、自社倉庫に到着時の２回行っています。この徹底したWチェックのおかげで、製造・輸送過程で発生した商破損などのトラブルにもいち早く対応することができ、お客様のもとにトラブルなくご納品することができます。</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="craftsmen-section">
            <div class="container">
                <h2 class="craftsmen-title">私たちは、箸づくりのプロ集団です。</h2>
                <ul class="craftsmen-list-prop flexbox">
                    <li>加工実績<br>500社</li>
                    <li>デザイン実績<br>10,700以上</li>
                    <li>国内<br>提携工房<br><p class="flexbox"><strong>30</strong>社</p></li>
                    <li>東証マザーズ<br>上場</li>
                </ul>
                <p class="bg-txt">箸づくりの専門家である私たちが<br>最適なご提案をいたします。</p>
            </div>
        </section>

        <section class="cta bg_photo mincho">
            <div class="wrap">
                <h2><em><span class="kenten">アイデア通り</span>の<span class="kenten">デザイン</span></em>で製作したい</h2>
                <p class="text_line01">相見積もりだけでもOK</p>
                <p class="cta_text01">箸グッズ制作のプロである私たちにご相談ください。お見積はもちろん無料！</p>
                <a href="inquiry.php" class="cta_btn01" rel="noopener noreferrer"><span>お問い合わせはこちら</span></a>
            </div><!-- .wrap -->
        </section>

        <section id="section05" class="worry01">
            <div class="wrap">
                <h2 class="mincho">
                    確かにクオリティには<br>
                    こだわりたい・・・
                </h2>
                <p><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-sp/sec05_balloon01.png" alt="「予算が心配だな…」「素材や工程に詳しくないから少し不安…」「費用が高くなってしまうのでは…？」"></p>
            </div><!-- .wrap -->
        </section>

        <section id="section06">
            <div class="wrap">
                <i class="balloon"><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-pc/sec06_balloon01.png" alt="実は"></i>
                <div class="title01 mincho">
                    <h2>価格にも自信があります！</h2>
                    <p>低コストでハイクオリティを実現する3つの理由を大公開</p>
                </div><!-- .title01 -->
            </div><!-- .wrap -->
            <div class="price-by-product">
                <div class="wrap">
                    <div class="title02 mincho">
                        <h2>商品別,価格表</h2>
                        <p>ほんの一例です。詳しくはお問い合わせください。</p>
                    </div><!-- .title02 -->

                    <ul class="item">
                        <li>
                            <div class="item_title">
                                <h3>若狭塗り箸</h3>
                                <p>天然木、アルミ箔1C印刷</p>
                            </div><!-- .item_title -->
                            <div class="item_price">
                                <h4>単価</h4>
                                <table>
                                    <tbody>
                                    <tr>
                                        <th>500膳</th>
                                        <td>242円(税込)</td>
                                    </tr>
                                    <tr>
                                        <th>3000膳</th>
                                        <td>187円(税込)</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- .item_price -->
                            <!-- <div class="item_detail">
                                <h4>素材・サイズ</h4>
                                <ul>
                                    <li>素材：シルバー925</li>
                                    <li>サイズ：約20mm × 10mm </li>
                                </ul>
                            </div> -->
                            <figure><img src="./images/chopsticks_A7.jpg" alt=""></figure>
                        </li>
                        <li>
                            <div class="item_title">
                                <h3>輪島塗り箸</h3>
                                <p>本漆</p>
                            </div><!-- .item_title -->
                            <div class="item_price">
                                <h4>単価</h4>
                                <table>
                                    <tbody>
                                    <tr>
                                        <th>300膳</th>
                                        <td>825円(税込)</td>
                                    </tr>
                                    <tr>
                                        <th>500膳</th>
                                        <td>803円(税込)</td>
                                    </tr>
                                    <tr>
                                        <th>800膳</th>
                                        <td>682円(税込)</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- .item_price -->
                            <!-- <div class="item_detail">
                                <h4>素材・サイズ</h4>
                                <ul>
                                    <li>素材：シルバー925、燻仕上げ、カラーストーン</li>
                                    <li>サイズ：リング幅約3mm</li>
                                </ul>
                            </div> -->
                            <figure><img src="./images/chopsticks_A8.jpg" alt=""></figure>
                        </li>
                        <li class="buki">
                            <div class="item_title">
                                <h3>夫婦箸セット箱入り</h3>
                                <p>天然木、3C印刷</p>
                            </div><!-- .item_title -->
                            <div class="item_price">
                                <h4>単価</h4>
                                <table>
                                    <tbody>
                                    <tr>
                                        <th>1000膳</th>
                                        <td>979円(税込)</td>
                                    </tr>
                                    <tr>
                                        <th>2000膳</th>
                                        <td>902円(税込)</td>
                                    </tr>
                                    <tr>
                                        <th>3000膳</th>
                                        <td>831円(税込)</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- .item_price -->
                            <!-- 		<div class="item_detail">
                                        <h4>素材・サイズ</h4>
                                        <ul>
                                            <li>素材：亜鉛合金</li>
                                            <li>サイズ：約140mm</li>
                                        </ul>
                                    </div> -->
                            <figure><img src="./images/chopsticks_A9.jpg" alt=""></figure>
                        </li>
                    </ul><!-- .item -->

                </div>
            </div>
        </section>

        <section id="section07_title" class="mincho">
            <div class="wrap">
                <h2>商品化までの流れ</h2>
                <p>納期、ロット数、商品の販売方法まで、まずはご相談ください。</p>
            </div><!-- .wrap -->
            <div class="arrow"></div>
        </section>

        <section id="section07_step" class="mincho">
            <div class="wrap">
                <ol>
                    <li><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-sp/sec07_step_img01.png" alt="STEP01：お問い合わせ"></li>
                    <li><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-sp/sec07_step_img02.png" alt="STEP02：打ち合わせ"></li>
                    <li><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-sp/sec07_step_img03.png" alt="STEP03：サンプル製品チェック"></li>
                    <li><img src="./images/step-4-chopstick-sp.png" alt="STEP04：本製品"></li>
                    <li><img src="./images/sec07_step_img05_sp.png" alt="STEP05：納品"></li>
                </ol>
            </div><!-- .wrap -->
        </section>

        <section id="section07_qa" class="mincho">
            <div class="wrap">
                <h2>よくある質問</h2>
                <h3 align="left">Q. 費⽤はどのくらいですか？</h3>
                <p align="left">A.　吉野杉を使った利休箸も330円(税込)で提供可能です。塗箸でも⼤量ロット弊社仕様のカスタムであれば220円(税込)未満での提供も可能です。また輪島塗の箸も2,000本以上でしたら440円(税込)からも可能です。レーザー加⼯のお箸も330円(税込)で提供可能です。</p>
                <hr>

                <h3 align="left">Q.　最⼩ロットはいくつですか？</h3>
                <p align="left">
                    A.　500膳より承ります。国内⽣産の場合、更に⼩ロット対応可能です。仕様によっては塗箸でも300本からオリジナルを承ります。</p>
                <hr>

                <h3 align="left">Q.　納期はどれくらいですか？</h3>
                <p align="left">A.　	デザイン・仕様の完全オリジナルでサンプル最短1ケ⽉、量産最短2ケ⽉です。弊社企画のカスタムであれば上記短縮での対応も可能です。</p>
                <hr>

                <h3 align="left">Q. どんな素材で作れますか？</h3>
                <p align="left">A.　吉野杉、ヒノキ、竹、花梨、翌檜、桜など、多種多様素材対応可能です。また⾦属アクセサリーの⽣産を活かして⾦属のお箸も作成可能です。</p>
                <hr>
            </div>
        </section>

        <!-- Begin: Section inquiry Iop Page -->
        <section id="keyv_bottom" class="mincho">
            <div class="wrap">
                <h2>お問い合わせフォーム</h2>
                <p>具体的なイメージがなくても大歓迎！私たちにご相談ください。</p>
            </div>
        </section>
        <div class="page-inquiry" style="padding-bottom: 100px;">
            <div class="section01_form">
                <div role="form" class="wpcf7" id="wpcf7-f13-p9-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="actionSendMail.php" method="POST" class="wpcf7-form" enctype="multipart/form-data" novalidate="novalidate">
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
                                            <div class="cbb-content"> <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="your-name" aria-required="true" aria-invalid="false" placeholder="山本 太郎" required></span> </div>
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
        <!-- End: Section inquiry Iop Page -->

        <section class="cta bg_photo mincho cta-bottom">
            <div class="wrap">
                <div class="intro-top-section bottom">
                    <ul class="list-specs flexbox">
                        <li><span>漆箸</span></li>
                        <li><span>割り箸</span></li>
                        <li><span>料理箸</span></li>
                        <li>etc.</li>
                    </ul>
                    <div class="intro-content flexbox">
                        <div class="main-content">
                            <div class="bg-txt">
                                <p>低コスト×短納期</p>
                                <p>熟練の職人の腕が光る</p>
                                <p>お箸とパッケージがセットで作れる</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h2><em><span class="kenten">アイデア通り</span>の<span class="kenten">デザイン</span></em>で製作したい</h2>
                <p class="text_line01">相見積もりだけでもOK</p>
                <p class="cta_text01">箸グッズ制作のプロである私たちにご相談ください。お見積はもちろん無料！</p>
                <a href="inquiry.php" class="cta_btn01" rel="noopener noreferrer"><span>お問い合わせはこちら</span></a>
            </div><!-- .wrap -->
        </section>

        <section id="section09">
            <div class="wrap">
                <p><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-sp/sec09_tel01.png" alt="すぐにお見積をご希望でしたら、お電話をご利用ください。 03-5785-3331"></p>
            </div><!-- .wrap -->
        </section>
    <?php else: ?>
        <section class="intro-top-section">
            <div class="container">
                <div class="row">
                    <ul class="list-specs flexbox">
                        <li><span>漆箸</span></li>
                        <li><span>割り箸</span></li>
                        <li><span>料理箸</span></li>
                        <li>etc...</li>
                    </ul>
                    <div class="intro-content flexbox">
                        <div class="img img-left">
                            <img src="./images/img-intro-01-new.png" alt="">
                        </div>
                        <div class="main-content">
                            <div class="bg-txt">
                                <p class="txt-main">低コスト×短納期</p>
                                <p>熟練<span>の</span>職人<span>の</span>腕が光る</p>
                                <p>お箸とパッケージがセットで作れる</p>
                            </div>
                        </div>
                        <div class="img img-right">
                            <img src="./images/img-intro-02-new.png" alt="">
                        </div>
                    </div>
                    <ul class="list-point-intro flexbox">
                        <li>
                            <span>最小ロット<br>１００膳</span>
                        </li>
                        <li>
                            <span>直契約を<br>結んだ熟練の<br>職人が製作</span>
                        </li>
                        <li>
                            <span>最短納期<br>１ヵ月〜</span>
                        </li>
                    </ul>
                </div>

            </div>
        </section>
        <!-- .cta -->
        <section class="cta bg_photo mincho">
            <div class="wrap">
                <h2><em><span class="kenten">アイデア通り</span>の<span class="kenten">デザイン</span></em>で製作したい</h2>
                <p class="text_line01">相見積もりだけでもOK</p>
                <p class="cta_text01">お著グッズ制作のプロである私たちにご相談ください。お見積はもちろん無料！</p>
                <a href="inquiry.php" class="cta_btn01" rel="noopener noreferrer"><span>お問い合わせはこちら</span></a>
            </div><!-- .wrap -->
        </section>
        <!-- .cta END -->
        <section class="list-pd-section">
            <div class="container">
                <div class="row">
                    <div class="list-pd-content">
                        <h2 class="list-pd-title">お取引企業様500社 豊富な製作実績</h2>
                        <div class="list-pd-image">
                            <img src="./images/list-pd-image-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="case-section">
            <h2 class="title-case">
                熟練の職人の高い技術で<br>これまで多くのお箸グッズを制作してきました
            </h2>
            <div class="container">
                <div class="row">
                    <ul class="list-case">
                        <li class="single">
                            <div class="img-case">
                                <span class="case-num">case01</span>
                                <div class="pic-case">
                                    <img src="./images/chopsticks_A1.jpg?ver=20200603220" alt="">
                                </div>
                            </div>
                            <div class="case-content">
                                <h3 class="case-name">天然の漆を使った高級感のあるデザイン</h3>
                                <p class="desc">箸先または、箸全体は口に入れても安心・安全な不純物を含まない天然の漆を使用し仕上げます。</p>
                            </div>
                        </li>
                        <li class="single">
                            <div class="img-case">
                                <span class="case-num">case02</span>
                                <div class="pic-case">
                                    <img src="./images/chopsticks_A2.jpg" alt="">
                                </div>
                            </div>
                            <div class="case-content">
                                <h3 class="case-name">ポップなデザインから伝統工芸品まで幅広い商品製作可能</h3>
                                <p class="desc">「輪島塗」「津軽塗」「若狭塗」などの塗箸『日本の誇る伝統工芸品』に加えて、吉野杉、屋久杉、黒文字などの稀少な木材を原材料に用いた様々な商品の製作実績。</p>
                            </div>
                        </li>
                        <li>
                            <div class="img-case">
                                <span class="case-num">case03</span>
                                <div class="pic-case">
                                    <img src="./images/chopsticks_A3.jpg" alt="">
                                </div>
                            </div>
                            <div class="case-content">
                                <h3 class="case-name">プラスアルファのご提案</h3>
                                <p class="desc">お客様のニーズに合わせたパッケージ、付属カスタム、関連商材のご提案まで幅広くご提案致します。用途に合わせたご希望にも柔軟に対応致します。</p>
                            </div>
                        </li>
                        <li>
                            <div class="img-case">
                                <span class="case-num">case04</span>
                                <div class="pic-case">
                                    <img src="./images/chopsticks_A4.jpg?ver=20200603220" alt="">
                                </div>
                            </div>
                            <div class="case-content">
                                <h3 class="case-name">驚きの短納期対応</h3>
                                <p class="desc">オリジナル作成は最短1ヶ月です。ノベルティ用に、イベントに間に合わせたい、短納期対応が必要な事案にも迅速に対応可能です。</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <hr>
        <section class="list-special-section">
            <div class="container">
                <div class="row">
                    <h2 class="list-special-title">職人の街である石川県で3年かけて交渉した<br>一流の職人の腕が光る至高の逸品</h2>
                    <div class="wrap-intro-list-special flexbox">
                        <div class="desc">
                            <p>和心はより高品質な商品をご提供するために、現地で交渉した一流の職人たちと直契約を結んでいます。大量生産品では出せない品質を担保しながら、低コスト、短納期でお客様の商品を制作する仕組みを整えています。</p>
                        </div>
                        <div class="main-img">
                            <img src="./images/chopsticks_A5.jpg" alt="">
                        </div>
                    </div>
                    <ul class="list-special-pd flexbox">
                        <li>
                            <div class="pd-img"><img src="./images/product-chopstick-01.jpg" alt=""></div>
                            <h4 class="pd-name">輪島塗</h4>
                            <p class="pd-desc">歴史ある伝統工芸「輪島塗」。36回の塗り工程により美しく禿げづらい仕上がりになります。</p>
                        </li>
                        <li>
                            <div class="pd-img"><img src="./images/product-chopstick-02.jpg" alt=""></div>
                            <h4 class="pd-name">若狭塗</h4>
                            <p class="pd-desc">日本でのシェアが80％で最も親しまれている「若狭塗」。漆器の中でも風格と重厚感がある仕上がりです。</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- #section03 -->
        <section id="section03" class="worry01">
            <div class="wrap">
                <h2 class="mincho">理想の商品を作ってくれるのは嬉しいけど、</h2>
                <p><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-pc/sec03_balloon01.png" alt="「商品のイメージはあるんだけど…」「素材や工程に詳しくないから少し不安…」「やっぱりデザインが無いと断られますか…？」"></p>
            </div><!-- .wrap -->
        </section>
        <!-- #section03 END -->
        <!-- #section04_title -->
        <section id="section04_title">
            <div class="wrap">
                <i><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-pc/sec04_title_balloon01.png" alt="ご安心ください！"></i>
                <h2 class="mincho">
                    <img src="./images/3point-chopstick.png"><br>
                    があれば自社デザイナーがデザインいたします
                </h2>
            </div><!-- .wrap -->
        </section>
        <!-- #section04_title END -->
        <!-- #section04_staff -->
        <section id="section04_staff">
            <div class="wrap">
                <p class="staff_header mincho">
                    自社ブランドをもつ私たちには、<br>
                    製作に対して的確なアドバイスができる経験豊富なスタッフが揃っています。<br>
                    貴社の商品イメージを忠実に再現する自信があります。
                </p>
                <ul class="starf_img">
                    <li>
                        <figure><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-pc/sec04_staff_img01.png" alt="（スタッフ写真）"></figure>
                        <h3 class="mincho">
                            素材選定のアドバイス、<br>
                            製作工程の管理はお任せください！
                        </h3>
                        <p>
                            和心では専任の営業担当が1名付き、ご相談からお見積、商品完成までの進行を迅速・丁寧に対応いたします。<br>
                            用途やご要望に合わせて、価格・納期・素材・製造方法を的確にご提案し、製作工程の管理や進捗報告をこまめに行うことでお客様と二人三脚で商品を作り上げるお手伝いいたします。
                        </p>
                    </li>
                    <li>
                        <figure><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-pc/sec04_staff_img02.png" alt="（スタッフ写真）"></figure>
                        <h3 class="mincho">
                            10,700以上のデザインノウハウを<br>
                            持つ自社デザイナー
                        </h3>
                        <p>
                            自社ブランドをもつ私たちは金属アクセサリーのマーケティングデータを豊富に所有しています。<br>
                            そんな売れる商品を理解したプロのデザイナーだから、お客様がイメージする商品のキーワードを3つ伺うだけで理想のデザインを書き上げることが可能です。デザインは弊社にお任せください。
                        </p>
                    </li>
                </ul><!-- .staff_img -->

            </div><!-- .wrap -->
        </section>
        <!-- #section04_staff END -->
        <section class="process-section">
            <div class="container">
                <h2 class="process-title">低コスト高品質な商品をお届けするために<br>生産工程にもこだわっています</h2>
                <ul class="list-process">
                    <li>
                        <div class="img">
                            <img src="./images/img-process-chopstick.jpg">
                        </div>
                        <div class="process-content">
                            <h3 class="process-name">高品質×低コスト<br>職人の手作りで生産</h3>
                            <p class="desc">直契約を結んでいる現地の職人が一本ずつ手作りで生産を行います。およそ30工房と取引がありますので、高い技術と生産スピードを維持しながら、低コストで制作することが出来ます。</p>
                        </div>
                    </li>
                    <li class="item-order">
                        <div class="img">
                            <img src="./images/chopsticks_A6.jpg" alt="">
                        </div>
                        <div class="process-content">
                            <h3 class="process-name">徹底した品質管理<br>納品前のWチェック</h3>
                            <p class="desc">商品の検品を出荷時、自社倉庫に到着時の２回行っています。この徹底したWチェックのおかげで、製造・輸送過程で発生した商破損などのトラブルにもいち早く対応することができ、お客様のもとにトラブルなくご納品することができます。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="craftsmen-section">
            <div class="container">
                <h2 class="craftsmen-title">私たちは、箸づくりのプロ集団です。</h2>
                <ul class="craftsmen-list-prop flexbox">
                    <li>加工実績<br>500社</li>
                    <li>デザイン実績<br>10,700以上</li>
                    <li>国内<br>提携工房<br><p class="flexbox"><strong>30</strong>社</p></li>
                    <li>東証マザーズ<br>上場</li>
                </ul>
                <p class="bg-txt">箸づくりの専門家である私たちが<br>最適なご提案をいたします。</p>
            </div>
        </section>
        <section class="cta bg_photo mincho">
            <div class="wrap">
                <h2><em><span class="kenten">アイデア通り</span>の<span class="kenten">デザイン</span></em>で製作したい</h2>
                <p class="text_line01">相見積もりだけでもOK</p>
                <p class="cta_text01">箸グッズ制作のプロである私たちにご相談ください。お見積はもちろん無料！</p>
                <a href="inquiry.php" class="cta_btn01" rel="noopener noreferrer"><span>お問い合わせはこちら</span></a>
            </div><!-- .wrap -->
        </section>
        <!-- #section05 -->
        <section id="section05" class="worry01">
            <div class="wrap">
                <h2 class="mincho">確かにクオリティにはこだわりたい・・・</h2>
                <p><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-pc/sec05_balloon01.png" alt="「予算が心配だな…」「素材や工程に詳しくないから少し不安…」「費用が高くなってしまうのでは…？」"></p>
            </div><!-- .wrap -->
        </section>
        <!-- #section05 END -->
        <!-- #section06 -->
        <section id="section06">
            <div class="wrap">
                <i class="balloon"><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-pc/sec06_balloon01.png" alt="実は"></i>
                <div class="title01 mincho">
                    <h2>価格にも自信があります！</h2>
                    <p>低コストでハイクオリティを実現する3つの理由を大公開</p>
                </div><!-- .title01 -->
            </div><!-- .wrap -->
            <div class="price-by-product">
                <div class="wrap">
                    <div class="title02 mincho">
                        <h2>商品別,価格表</h2>
                        <p>ほんの一例です。詳しくはお問い合わせください。</p>
                    </div><!-- .title02 -->

                    <ul class="item">
                        <li>
                            <div class="item_title">
                                <h3>若狭塗り箸</h3>
                                <p>天然木、アルミ箔1C印刷</p>
                            </div><!-- .item_title -->
                            <div class="item_price">
                                <h4>単価</h4>
                                <table>
                                    <tbody>
                                    <tr>
                                        <th>500膳</th>
                                        <td>242円(税込)</td>
                                    </tr>
                                    <tr>
                                        <th>3000膳</th>
                                        <td>187円(税込)</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- .item_price -->
                            <!-- <div class="item_detail">
                                <h4>素材・サイズ</h4>
                                <ul>
                                    <li>素材：シルバー925</li>
                                    <li>サイズ：約20mm × 10mm </li>
                                </ul>
                            </div> -->
                            <figure><img src="./images/chopsticks_A7.jpg" alt=""></figure>
                        </li>
                        <li>
                            <div class="item_title">
                                <h3>輪島塗り箸</h3>
                                <p>本漆</p>
                            </div><!-- .item_title -->
                            <div class="item_price">
                                <h4>単価</h4>
                                <table>
                                    <tbody>
                                    <tr>
                                        <th>300膳</th>
                                        <td>825円(税込)</td>
                                    </tr>
                                    <tr>
                                        <th>500膳</th>
                                        <td>803円(税込)</td>
                                    </tr>
                                    <tr>
                                        <th>800膳</th>
                                        <td>682円(税込)</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- .item_price -->
                            <!-- <div class="item_detail">
                                <h4>素材・サイズ</h4>
                                <ul>
                                    <li>素材：シルバー925、燻仕上げ、カラーストーン</li>
                                    <li>サイズ：リング幅約3mm</li>
                                </ul>
                            </div> -->
                            <figure><img src="./images/chopsticks_A8.jpg" alt=""></figure>
                        </li>
                        <li class="buki">
                            <div class="item_title">
                                <h3>夫婦箸セット箱入り</h3>
                                <p>天然木、3C印刷</p>
                            </div><!-- .item_title -->
                            <div class="item_price">
                                <h4>単価</h4>
                                <table>
                                    <tbody>
                                    <tr>
                                        <th>1000膳</th>
                                        <td>979円(税込)</td>
                                    </tr>
                                    <tr>
                                        <th>2000膳</th>
                                        <td>902円(税込)</td>
                                    </tr>
                                    <tr>
                                        <th>3000膳</th>
                                        <td>831円(税込)</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- .item_price -->
                            <!-- 		<div class="item_detail">
                                        <h4>素材・サイズ</h4>
                                        <ul>
                                            <li>素材：亜鉛合金</li>
                                            <li>サイズ：約140mm</li>
                                        </ul>
                                    </div> -->
                            <figure><img src="./images/chopsticks_A9.jpg" alt=""></figure>
                        </li>
                    </ul><!-- .item -->

                </div>
            </div>
        </section>
        <!-- #section06 END -->
        <!-- #section07_title -->
        <section id="section07_title" class="mincho">
            <div class="wrap">
                <h2>商品化までの流れ</h2>
                <p>納期、ロット数、商品の販売方法まで、まずはご相談ください。</p>
            </div><!-- .wrap -->
            <div class="arrow"></div>
        </section>
        <!-- #section07_title END -->
        <!-- #section07_step -->
        <section id="section07_step" class="mincho">
            <div class="wrap">
                <ol>
                    <li><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-pc/sec07_step_img01.png" alt="STEP01：お問い合わせ"></li>
                    <li><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-pc/sec07_step_img02.png" alt="STEP02：打ち合わせ"></li>
                    <li><img src="https://accessory-oem.com/wp-content/themes/accessory/images/images-pc/sec07_step_img03.png" alt="STEP03：サンプル製品チェック"></li>
                    <li><img src="./images/step-4-chopstick.png" alt="STEP04：本製品"></li>
                    <li><img src="./images/sec07_step_img05_new.png" alt="STEP05：納品"></li>
                </ol>
            </div><!-- .wrap -->
        </section>
        <!-- #section07_step END -->
        <!-- #section07_Q&A -->
        <section id="section07_qa" class="mincho">
            <div class="wrap">
                <h2>よくある質問</h2>
                <h3 align="left">Q. 費⽤はどのくらいですか？</h3>
                <p align="left">A.　吉野杉を使った利休箸も330円(税込)で提供可能です。塗箸でも⼤量ロット弊社仕様のカスタムであれば220円(税込)未満での提供も可能です。また輪島塗の箸も2,000本以上でしたら440円(税込)からも可能です。レーザー加⼯のお箸も330円(税込)で提供可能です。</p>
                <hr>

                <h3 align="left">Q.　最⼩ロットはいくつですか？</h3>
                <p align="left">
                    A.　500膳より承ります。国内⽣産の場合、更に⼩ロット対応可能です。仕様によっては塗箸でも300本からオリジナルを承ります。</p>
                <hr>

                <h3 align="left">Q.　納期はどれくらいですか？</h3>
                <p align="left">A.　	デザイン・仕様の完全オリジナルでサンプル最短1ケ⽉、量産最短2ケ⽉です。弊社企画のカスタムであれば上記短縮での対応も可能です。</p>
                <hr>

                <h3 align="left">Q. どんな素材で作れますか？</h3>
                <p align="left">A.　吉野杉、ヒノキ、竹、花梨、翌檜、桜など、多種多様素材対応可能です。また⾦属アクセサリーの⽣産を活かして⾦属のお箸も作成可能です。</p>
                <hr>
            </div>
        </section>
        <!-- #section07_Q&A END-->

        <!-- Begin: Section inquiry Iop Page -->
        <section id="keyv_bottom" class="mincho">
            <div class="wrap">
                <h2>お問い合わせフォーム</h2>
                <p>具体的なイメージがなくても大歓迎！私たちにご相談ください。</p>
            </div>
        </section>
        <div class="page-inquiry" style="padding-bottom: 100px;">
            <div class="section01_form">
                <div role="form" class="wpcf7" id="wpcf7-f13-p9-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="actionSendMail.php" method="post" class="wpcf7-form" enctype="multipart/form-data">
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
                                            <div class="cbb-content"> <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="your-name" aria-required="true" aria-invalid="false" placeholder="山本 太郎" required></span> </div>
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
        <!-- End: Section inquiry Iop Page -->

        <section class="cta bg_photo mincho cta-bottom">
            <div class="wrap">
                <div class="intro-top-section bottom">
                    <ul class="list-specs flexbox">
                        <li><span>漆箸</span></li>
                        <li><span>割り箸</span></li>
                        <li><span>料理箸</span></li>
                        <li>etc.</li>
                    </ul>
                    <div class="intro-content flexbox">
                        <div class="main-content">
                            <div class="bg-txt">
                                <p>低コスト×短納期</p>
                                <p>熟練の職人の腕が光る</p>
                                <p>お箸とパッケージがセットで作れる</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h2><em><span class="kenten">アイデア通り</span>の<span class="kenten">デザイン</span></em>で製作したい</h2>
                <p class="text_line01">相見積もりだけでもOK</p>
                <p class="cta_text01">箸グッズ制作のプロである私たちにご相談ください。お見積はもちろん無料！</p>
                <a href="inquiry.php" class="cta_btn01" rel="noopener noreferrer"><span>お問い合わせはこちら</span></a>
            </div><!-- .wrap -->
        </section>
        <!-- #section09 -->
    <?php endif; ?>

    <p id="copyright">Copyright (c) Wagokoro Co.,Ltd.All Rights Reserved.</p>
    <p id="page-top" style="bottom: 20px;"><a href="#"><svg class="svg-inline--fa fa-arrow-up fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="arrow-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path></svg><!-- <i class="fa fa-arrow-up"></i> --></a></p>
</div>

<script type="text/javascript">
    // Validate reCaptcha
    $("form").submit(function(event) {
        var recaptcha = $("#g-recaptcha-response").val();
        if (recaptcha === "") {
            event.preventDefault();
            $('.error-recaptcha').html('Please check the recaptcha!');
            $('.error-recaptcha').show();
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