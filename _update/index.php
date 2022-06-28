<?php require_once('config.php'); ?>
<?php 
 $page="index";
?>
<!doctype html>
<html>

<head>
    <?php require_once('header.php'); ?>
    <title>合利他命 - 醫療級維他命B群專家</title>
    <meta name="title" content="合利他命 - 醫療級維他命B群專家" />
    <meta name="keywords" content="台灣武田，合利他命，醫療級B群，A25，強效錠，金強效錠，Alinamin，B1缺乏，疲勞無力，眼睛疲勞，肩頸僵硬，腰背酸痛，手腳發麻，嚴重酸痛，神經痛，日本市佔第一" />
    <meta name="description" content="含活性維生素B1誘導體，有效緩解缺乏維生素B1，產生的疲。酸。麻症狀問題">
    <meta property="og:title" content="合利他命 - 醫療級維他命B群專家">
    <meta property="og:description" content="含活性維生素B1誘導體，有效緩解缺乏維生素B1，產生的疲。酸。麻症狀問題">
    <meta property="og:url" content="<?php echo $rootURL;?>">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div id="app" class="wrap">
        <?php require('nav.php'); ?>
                
        <!--  2021 cny  -->

        
        <!--  2021 cny  -->
        <section class="kv-slide">
            <div class="slide-con">
                <div class="slide-box">
                    <a href="<?php echo $rootURL;?>a25"></a>
                    <img src="<?php echo $rootURL;?>images/intro/kv_slide1.jpg" alt="A25一吃有感迅速消除疲勞" class="pc">
                    <img src="<?php echo $rootURL;?>images/intro/m_kv_slide1.jpg" alt="A25一吃有感迅速消除疲勞" class="mb">
                </div>
                <div class="slide-box sb-2">
                    <a href="<?php echo $rootURL;?>explus"></a>
                    <img src="<?php echo $rootURL;?>images/intro/kv_slide2.jpg" alt="EX PLUS強效錠改善眼睛疲勞肩頸僵硬腰背酸痛" class="pc">
                    <img src="<?php echo $rootURL;?>images/intro/m_kv_slide2.jpg" alt="EX PLUS強效錠改善眼睛疲勞肩頸僵硬腰背酸痛" class="mb">
                </div>
                <div class="slide-box">
                    <a href="<?php echo $rootURL;?>exgold"></a>
                    <img src="<?php echo $rootURL;?>images/intro/kv_slide3.jpg" alt="EX GOLD金強效錠有效緩解末梢發麻神經痛" class="pc">
                    <img src="<?php echo $rootURL;?>images/intro/m_kv_slide3.jpg" alt="EX GOLD金強效錠有效緩解末梢發麻神經痛" class="mb">
                </div>
            </div>
            <div class="info-left">
                <img src="<?php echo $rootURL;?>images/logo_alinamin_b.png" alt="">
            </div>
            <div class="info-right">
                <div class="info-pro pro1">
                    <a href="<?php echo $rootURL;?>a25"></a>
                    <img src="<?php echo $rootURL;?>images/intro/pro1.png" alt="">
                    <p>
                        #消除疲勞
                    </p>
                </div>
                <div class="info-pro pro2 off">
                    <a href="<?php echo $rootURL;?>explus"></a>
                    <img src="<?php echo $rootURL;?>images/intro/pro2.png" alt="">
                    <p>
                        #緩解酸痛
                    </p>
                </div>
                <div class="info-pro pro3 off">
                    <a href="<?php echo $rootURL;?>exgold"></a>
                    <img src="<?php echo $rootURL;?>images/intro/pro3.png" alt="">
                    <p>
                        #緩解末梢發麻
                    </p>
                </div>
            </div>
        </section>

        <section class="s2" g-page="alinamain_main">
            <div class="content flex-c-c m-col">
                <!--//2021-12 修改頁面內容-->
                <div id="mainBox">
                    <div id="mainBox-01">
                        <div class="mainBox-head">
                            <h3><a href="cause" title="你的疲。酸。麻原因">維生素B1是能量轉換關鍵，<br>一旦缺乏，疲、酸、麻就會接著來</a></h3>
                        </div>
                        <picture>
                            <source srcset="images/intro/pic_mainBox-01.png" media="(min-width: 1000px)">
                            <source srcset="images/intro/pic_mainBox-l01.png" media="(min-width: 700px)">
                            <source srcset="images/intro/pic_mainBox-m01.png" media="(min-width: 320px)">
                            <img src="images/intro/pic_mainBox-01.png" alt="細胞能量不足，讓你疲、酸、麻上身">
                        </picture>
                        <figcaption class="myHidden">細胞能量不足，讓你疲、酸、麻上身。</figcaption>
                    </div>
                    <div id="mainBox-02">
                        <div class="mainBox-head">
                            <h3>合利他命醫療級B群</h3>
                            <h4>緩解B1不足造成的疲、酸、麻</h4>
                        </div>
                        <div class="mainBox-body">
                            <div class="mainBox-item">
                                <a href="a25" title="合利他命愛A25">
                                <h5>一吃有感<br>迅速消除疲勞</h5>
                                <img class="item-product" src="images/intro/pro1.png" alt="合利他命愛A25">
                                <img class="item-name" src="images/series/series_pro1_name.png" alt="*">
                                </a>
                            </div>
                            <div class="mainBox-item">
                                <a href="explus" title="合利他命EX PLUS強效錠">
                                <h5>改善眼睛疲勞/<br>肩頸僵硬/腰背酸痛</h5>
                                <img class="item-product" src="images/intro/pro2.png" alt="合利他命EX PLUS強效錠">
                                <img class="item-name" src="images/series/series_pro2_name.png" alt="*"/>
                                </a>
                            </div>
                            <div class="mainBox-item">
                                <a href="exgold" title="合利他命EX GOLD金強效錠">
                                <h5>有效緩解<br>末梢發麻/神經痛</h5>
                                <img class="item-product" src="images/intro/pro3.png" alt="合利他命EX GOLD金強效錠">
                                <img class="item-name" src="images/series/series_pro3_name.png" alt="*">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <ol class="tip m-t30">衛署藥製字第030689號 衛署藥輸字第025431號 衛部藥輸字第027584號<br class="mb"> 北市衛藥廣字第111060105號
            <br class="mb"> 本品為醫師藥師藥劑生指示藥品，使用前請詳閱說明書警語及注意事項</ol>
        </section>

        <?php require('footer.php'); ?>
        <script src="<?php echo $rootURL;?>scripts/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $rootURL;?>scripts/global.js?t=0201"></script>
        <script type="text/javascript" src="<?php echo $rootURL;?>scripts/index.js"></script>
</body>

</html>