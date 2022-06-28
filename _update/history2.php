<?php require_once('config.php'); ?>
<?php 
 $page="history";
?>
<!doctype html>
<html>

<head>
    <?php require_once('header.php'); ?>
    <title>武田歷史</title>
    <meta name="title" content="武田歷史" />
    <meta name="description" content="源自日本，醫療級B群百年安心品牌-合利他命" />
    <meta name="keywords" content="台灣武田，合利他命，醫療級B群，A25，強效錠，金強效錠，Alinamin，疲勞無力，眼睛疲勞，肩頸僵硬，腰背酸痛，手腳發麻，嚴重酸痛，神經痛，日本市佔第一" />
    <meta property="og:title" content="合利他命-醫療級維他命B群專家">
    <meta property="og:description" content="源自日本，醫療級B群百年安心品牌">
    <meta property="og:url" content="<?php echo $rootURL;?>history">
    <link rel="stylesheet" href="<?php echo $rootURL;?>css/history.css">  
</head>

<body>
    <div id="app" class="wrap nofixed">
        <div class="header-h header-h2"></div>
        <section class="kv">
            <img src="<?php echo $rootURL;?>images/history/kv.jpg">
        </section>
        <?php require('nav.php'); ?>

        <section class="history" id="timeline">
            <div class="year">1781</div>
            <div class="year hide"></div>
            <div class="year-nav">
                <ul>
                    <li class="active">
                        <span class="year-txt">1781-1914</span>
                        <div class="circle">
                            <svg>
                                <circle cx="26" cy="26" r="23"></circle>
                                <circle cx="26" cy="26" r="23"></circle>
                            </svg>
                        </div>
                    </li>
                    <li>
                        <span class="year-txt">1915-1949</span>
                        <div class="circle">
                            <svg>
                                <circle cx="26" cy="26" r="23"></circle>
                                <circle cx="26" cy="26" r="23"></circle>
                            </svg>
                        </div>
                    </li>
                    <li>
                        <span class="year-txt">1950-1969</span>
                        <div class="circle">
                            <svg>
                                <circle cx="26" cy="26" r="23"></circle>
                                <circle cx="26" cy="26" r="23"></circle>
                            </svg>
                        </div>
                    </li>
                    <li>
                        <span class="year-txt">1970-2009</span>
                        <div class="circle">
                            <svg>
                                <circle cx="26" cy="26" r="23"></circle>
                                <circle cx="26" cy="26" r="23"></circle>
                            </svg>
                        </div>
                    </li>
                    <li>
                        <span class="year-txt">2010-NOW</span>
                        <div class="circle">
                            <svg>
                                <circle cx="26" cy="26" r="23"></circle>
                                <circle cx="26" cy="26" r="23"></circle>
                            </svg>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="timeline">
                <div class="timeline-area" g-page="History_1781_1914">
                    <div class="timeline-item odd">
                        <div class="timeline__content">
                            <h2 class="timeline__content-title">1781</h2>
                            <h3>創建</h3>
                            <p class="timeline__content-desc">
                                武田藥品工業創辦人武田長兵衛<br>開始在日本的醫藥區大阪道修町出售傳統的日本和中國草藥
                            </p>
                            <img class="timeline__img" src="images/history/story_1.jpg" alt="1781創建" />
                        </div>
                    </div>
                    <div class="timeline-item even" >
                        <div class="timeline__content">
                            <h2 class="timeline__content-title">1895</h2>
                            <h3>製藥業務啟動</h3>
                            <p class="timeline__content-desc">
                                於大阪建立工廠，一躍成為製藥企業
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item odd" >
                        <div class="timeline__content">
                            <h2 class="timeline__content-title">1914</h2>
                            <h3>研究活動從設立研究部門開始</h3>
                            <p class="timeline__content-desc">
                                Calmotin®（鎮靜劑）、Novoroform®（止痛藥）<br>和Lodinon®（D-葡萄糖注射劑）
                            </p>
                            <img class="timeline__img" src="images/history/story_2.jpg" alt="1914研究活動從設立研究部門開始"/>
                        </div>
                    </div>
                </div>
                <div class="timeline-area" g-page="History_1915_1946">
                    <div class="timeline-item even" >
                        <div class="timeline__content">
                            <h2 class="timeline__content-title">1915</h2>
                            <h3>武田藥品工業株式會社成立</h3>
                            <p class="timeline__content-desc">
                                成立測試部門與負責研究開發新藥品的研究部門<br>此時期形成的研發體系成為引領武田成長的基石
                            </p>
                            <img class="timeline__img" src="images/history/story_3.jpg" alt="1915武田藥品工業株式會社成立"/>
                        </div>
                    </div>
                    <div class="timeline-item odd" >
                        <div class="timeline__content">
                            <h2 class="timeline__content-title">1925</h2>
                            <h3>成立Chobei Takeda & Co., Ltd<br>股份有限公司</h3>
                            <p class="timeline__content-desc">公司從私營企業轉型為集研發、<br>製造行銷於一體現代化企業集團<br>1943 更名為武田藥業有限公司
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item even" >
                        <div class="timeline__content">
                            <h2 class="timeline__content-title">1946</h2>
                            <h3>山口縣光市工廠開業</h3>
                            <p class="timeline__content-desc">繼大阪工廠後，於山口縣光市成立武田的第二家工廠<br>主要生產當時社會亟需的疫苗
                            </p>
                            <img class="timeline__img" src="images/history/story_4.jpg" alt="1946山口縣光市工廠開業" />
                        </div>
                    </div>
                </div>
                <div class="timeline-area" g-page="History_1950_1962">
                    <div class="timeline-item odd" >
                        <div class="timeline__content">
                            <h2 class="timeline__content-title">1950</h2>
                            <h3>武田開始在日本販售首批綜合維他命</h3>
                            <p class="timeline__content-desc">
                                PanvitanR 是日本武田生產的首款綜合維他命
                            </p>
                            <img class="timeline__img" src="images/history/story_5.jpg" alt="武田開始在日本販售首批綜合維他命"/>
                        </div>
                    </div>
                    <div class="timeline-item even" >
                        <div class="timeline__content">
                            <h2 class="timeline__content-title">1954</h2>
                            <h3>開始銷售合利他命</h3>
                            <p class="timeline__content-desc">武田成功開發並開始銷售維他命 B<i class="f-s-em8">1</i> 衍生物 Alinamin®<br>
                                在同一時期，也開始供應維他命作為食品營養強化劑<br>
                                以緩解戰後糧食短缺造成的營養不良
                            </p>
                            <img class="timeline__img" src="images/history/story_6.jpg" alt="1954開始銷售合利他命" />
                        </div>
                    </div>
                    <div class="timeline-item odd" >
                        <div class="timeline__content">
                            <h2 class="timeline__content-title">1962</h2>
                            <h3>設立台灣分公司，銷售擴大到亞洲</h3>
                            <p class="timeline__content-desc">除了在台灣建立製造與行銷公司<br>在菲律賓、泰國和印度尼西亞等地<br>也建立製造和行銷公司
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline-area" g-page="History_1988_2011">
                    <div class="timeline-item even" >
                        <div class="timeline__content">
                            <h2 class="timeline__content-title">1978</h2>
                            <h3>銷售擴大至歐洲</h3>
                            <p class="timeline__content-desc">武田在法國建立了藥品行銷合資企業<br>之後在德國和義大利也建立了營運中心
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item odd" >
                        <div class="timeline__content">
                            <h2 class="timeline__content-title">1988</h2>
                            <h3>築波研究實驗室成立</h3>
                            <p class="timeline__content-desc">
                                除大阪的研究基地外<br>築波研究實驗室成為武田的第二個研究基地<br>這些實驗室採用尖端科技進行基礎研究
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item even" >
                        <div class="timeline__content">
                            <h2 class="timeline__content-title">2005</h2>
                            <h3>日本Alinamin A / Alinamin EX PLUS上市</h3>
                            <img class="timeline__img" src="images/history/story_6.png" alt="2005日本Alinamin A與Alinamin EX PLUS上市"/>
                        </div>
                    </div>
                </div>
                <div class="timeline-area" g-page="History_2012_2014">
                    <div class="timeline-item odd" >
                        <div class="timeline__content">
                            <h2 class="timeline__content-title">2011</h2>
                            <h3>支援日本的災後復原</h3>
                            <p class="timeline__content-desc">
                                武田捐贈合利他命的部分利潤<br>
                                支援受東日本大地震影響地區的復原工作<br>
                                集團還積極推行了其他多項長期持續的支援計劃
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item even" >
                        <div class="timeline__content">
                            <h2 class="timeline__content-title">2012</h2>
                            <h3>全球疫苗業務部成立</h3>
                            <p class="timeline__content-desc">
                                疫苗近年來對全球公共衛生產生了巨大影響。<br>
                                武田決定將其在日本已活躍了 60 多年的疫苗業務全球化。
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item odd" >
                        <div class="timeline__content">
                            <h2 class="timeline__content-title">2014</h2>
                            <h3>Alinamin發售60週年</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner" g-page="History_banner">
            <div>
                <div>
                    <a href="<?php echo $rootURL;?>fursultiamine" g-event="武田歷史_醫療級B1 TTFD">
                    <div class="history-btn"><img src="<?php echo $rootURL;?>images/history/btn1.png"></div>
                    </a>
                    <img src="<?php echo $rootURL;?>images/history/banner_1.jpg" alt="醫療級B群提供3大功效作用">
                </div>
                <div>
                    <a href="<?php echo $rootURL;?>lineup" g-event="武田歷史_全產品列表">
                    <div class="history-btn"><img src="<?php echo $rootURL;?>images/history/btn2.png"></div>
                    </a>
                    <img src="<?php echo $rootURL;?>images/history/banner_2.jpg" alt="合利他命全系列產品">
                </div>
            </div>
            <ol class="tip">
                衛署藥製字第030689號   衛署藥輸字第025431號   衛部藥輸字第027584號   北市衛藥廣字第110010079號   C-APROM/TW/THI/0030 DEC 2020   本品為醫師藥師藥劑生指示藥品，使用前請詳閱說明書警語及注意事項
            </ol>
        </section>

        <?php require('footer.php'); ?>
        <script src="<?php echo $rootURL;?>scripts/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $rootURL;?>scripts/global.js?t=0201"></script>
        <script type="text/javascript" src="<?php echo $rootURL;?>scripts/history.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>

</html>