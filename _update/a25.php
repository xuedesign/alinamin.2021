<?php require_once('config.php'); ?>
<?php 
 $page="a25";
?>

<!doctype html>
<html>

<head>
    <?php require_once('header.php'); ?>
    <title>愛A25</title>
    <meta name="title" content="愛A25" />
    <meta name="description" content="含活性維生素B1誘導體，並添加維生素B2、B6、B12，吸收效果佳，一吃有感迅速消除疲勞" />
    <meta name="keywords" content="台灣武田, 合利他命, 醫療級B群,  A25,  Alinamin, 疲勞無力, 日本市佔第一" />
    <meta property="og:title" content="合利他命-醫療級維他命B群專家">
    <meta property="og:description" content="愛A25含活性維生素B1誘導體，並添加維生素B2、B6、B12，吸收效果佳，一吃有感迅速消除疲勞">
    <meta property="og:url" content="<?php echo $rootURL;?>product/a25">
    <link rel="stylesheet" href="<?php echo $rootURL;?>css/style.css">
</head>

<body>
    <div id="app" class="wrap">
        <?php require('nav.php'); ?>
        
        <div class="sideMenu pc">
            <ul>
                <a href="#" scroll-to=".kv"><li>產品特色</li></a>
                <!-- <a href="#" scroll-to=".tv"><li>電視廣告</li></a> -->
                <a href="#" scroll-to=".ingredients"><li>內含成分<br>適用症狀</li></a>
                <a href="#" scroll-to=".path"><li>購買通路</li></a>
            </ul>
        </div>
        <section class="kv">
            <div class="container">
                <div class="kvBg" data-aos="fade-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="300">
                    <div class="flex-c-c">
                        <div class="kvPd" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" data-aos-delay="600">
                            <img src="images/a25/kvPd.png" alt="合利他命愛A25一吃有感迅速消除疲勞">
                        </div>
                        <div class="flex-start flex-col">
                            <div class="kvTitle" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" data-aos-delay="600">
                                <img src="<?php echo $rootURL;?>images/a25/kvTitle.png" alt="" class="pc">
                                <img src="<?php echo $rootURL;?>images/a25/kvTitleM.png" alt="" class="mb">
                            </div>
                            <div class="kvContent" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" data-aos-delay="600">
                                <div class="kvSubTitle">一吃有感 迅速消除疲勞</div>
                                <div class="kvTxt">合利他命-愛A25含活性維生素B<i class="f-s-em8">1</i>誘導體，並添加維生素B<i class="f-s-em8">2</i>、B<i class="f-s-em8">6</i>、B<i class="f-s-em8">12</i>，吸收效果佳，有效消除疲勞症狀</div>
                                <div class="kvTags">
                                    <span>維生素B<i class="f-s-em8">1</i>誘導體</span>
                                    <span>維生素B<i class="f-s-em8">2</i></span>
                                    <span>維生素B<i class="f-s-em8">6</i></span>
                                    <span>維生素B<i class="f-s-em8">12</i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="s1" g-page="Product_A25_USP">
            <div class="container flex-c-c flex-col">
                <div class="s1Title" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="600"><img src="<?php echo $rootURL;?>images/a25/s1Title.png" alt="醫療級B群合利他命" class="img-fluid"></div>
                <div class="s1ContentBox" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="600">
                    <div class="s1Pic">
                        <img src="<?php echo $rootURL;?>images/a25/s1Pic.png" alt="愛A25含活性維生素B1誘導體，並添加維生素B2、B6、B12" class="pc">
                        <img src="<?php echo $rootURL;?>images/a25/s1PicM.png" alt="愛A25含活性維生素B1誘導體，並添加維生素B2、B6、B12" class="mb">
                    </div>
                    <div class="s1Content">
                        <div class="subTitle">三大特點</div>
                        <ul>
                            <li>易由腸道吸收</li>
                            <li>快速作用於神經及肌肉組織</li>
                            <li>產生高量維生素B<i class="f-s-em8">1</i>效果好</li>
                        </ul>
                        <hr>
                        <div class="tips">依據Intage 2013~2018年調查日本11地區，8大銷售通路，隨機取樣3,211店鋪，收集店鋪之維他命B群藥品實際銷售數據進行統計分析。</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="tv" g-page="Product_A25_TVC">
            <div class="container">
                <div class="title">電視廣告</div>
                <div class="tvBox" >
                    <div class="titleArea" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="300">
                        <div class="tvSubTitle">深田恭子 不累常備</div>
                        <div class="tvTitle">一吃有感<span>迅速消除疲勞</span></div>
                    </div>
                    <div id="youtubePlay" class="youtube">
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/g-WyJqnQOrY" autoplay="1" frameborder="0" allowfullscreen data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="300"></iframe>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="ingredients" g-page="Product_A25_ingredient">
            <div class="container">
                <div class="title">內含成分</div>
                <table data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="600">
                    <tr class="labelName">
                        <td class="left mb-center">成分</td>
                        <td class="right mb-center">每錠含量</td>
                    </tr>
                    <tr>
                        <td class="left">Fursultiamine (維生素B<i class="f-s-em8">1</i>誘導體)<br>(Thiamine Tetrahydrofurfuryl Disulfide HCl)</td>
                        <td class="right">25mg<br>27.288mg</td>
                    </tr>
                    <tr>
                        <td class="left">Riboflavin (維生素B<i class="f-s-em8">2</i>)</td>
                        <td class="right">2.5mg</td>
                    </tr>
                    <tr>
                        <td class="left">Pyridoxine HCI (維生素B<i class="f-s-em8">6</i>)</td>
                        <td class="right">2.5mg</td>
                    </tr>
                    <tr>
                        <td class="left">Cyanocobalamin (維生素B<i class="f-s-em8">12</i>)</td>
                        <td class="right">5μg</td>
                    </tr>
                </table>
                <table data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="600">
                    <tr class="labelName">
                        <td>適用症狀</td>
                    </tr>
                    <tr>
                        <td>維生素B<i class="f-s-em8">1</i>、B<i class="f-s-em8">6</i>、B<i class="f-s-em8">12</i>等缺乏所引起之疾患(神經痛、肌肉痛、腰痛、肩膀酸痛、腳氣病)<br class="pc">身體疲勞時、妊娠授乳期、病中病後之營養補充</td>
                    </tr>
                    <tr class="labelName">
                        <td>用法及用量</td>
                    </tr>
                    <tr>
                        <td style="border: 0;">15歲以上每日3-4錠，分2-3次於飯後服用<br>不必咬碎並請立即吞服，可依年齡、症狀適宜增減用量</td>
                    </tr>
                </table>
            </div>
        </section>
        <section class="path" g-page="Product_A25_buy">
            <div class="container">
                <div class="title">購買通路</div>
                <div class="pathBg" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="300">
                    <div class="storeBox" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="600">
                        <div class="storeTitle">哪裡買</div>
                        <div class="storeSubTitle">store</div>
                        <div class="pathBtns">
                            <a href="<?php echo $rootURL;?>buy/#pcs" target="blank" class="pathBtn" g-event="產品頁_A25_購買通路_連鎖通路">
                                <img src="<?php echo $rootURL;?>images/a25/pathBtn01.png" alt="">
                            </a>
                            <a href="<?php echo $rootURL;?>buy/#drugstore" target="blank" class="pathBtn" g-event="產品頁_A25_購買通路_藥局店家">
                                <img src="<?php echo $rootURL;?>images/a25/pathBtn02.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="pathBtnsM">
                        <a href="<?php echo $rootURL;?>buy/#pcs" target="blank" class="pathBtn" g-event="產品頁_A25_購買通路_連鎖通路">
                            <img src="<?php echo $rootURL;?>images/a25/pathBtn01M.png" alt="">
                        </a>
                        <a href="<?php echo $rootURL;?>buy/#drugstore" target="blank" class="pathBtn" g-event="產品頁_A25_購買通路_藥局店家">
                            <img src="<?php echo $rootURL;?>images/a25/pathBtn02M.png" alt="">
                        </a>
                    </div>
                    <img src="images/a25/pathBg.png" alt="愛A25連鎖通路藥局店家購買資訊" width="0" height="0">
                </div>
                <div class="tips02">衛署藥製字第030689號 衛署藥輸字第025431號 衛部藥輸字第027584號 北市衛藥廣字第111060167號 本品為醫師藥師藥劑生指示藥品，使用前請詳閱說明書警語及注意事項</div>
            </div>
        </section>
        <?php require('footer.php'); ?>
        <script src="<?php echo $rootURL;?>scripts/jquery-3.4.1.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script type="text/javascript" src="<?php echo $rootURL;?>scripts/global.js?t=0201"></script>
        <script type="text/javascript" src="<?php echo $rootURL;?>scripts/product.js"></script>
        <script>
            AOS.init();
        </script>
</body>

</html>

