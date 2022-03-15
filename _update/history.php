<?php require_once('config.php'); ?>
<?php 
 $page="history";
?>
<!doctype html>
<html>

<head>
    <?php require_once('header.php'); ?>
    <title>合力他命藥品</title>
    <meta name="title" content="合力他命藥品" />
    <meta name="description" content="源自日本，醫療級B群百年安心品牌-合利他命" />
    <meta name="keywords" content="台灣武田，合利他命，醫療級B群，A25，強效錠，金強效錠，Alinamin，疲勞無力，眼睛疲勞，肩頸僵硬，腰背酸痛，手腳發麻，嚴重酸痛，神經痛，日本市佔第一" />
    <meta property="og:title" content="合利他命-醫療級維他命B群專家">
    <meta property="og:description" content="源自日本，醫療級B群百年安心品牌">
    <meta property="og:url" content="<?php echo $rootURL;?>product/history">
    <link rel="stylesheet" href="css/history.css">  
</head>

<body>
    <div id="app" class="wrap nofixed">
        <div class="header-h header-h2"></div>
        <section class="kv">
            <img src="<?php echo $rootURL;?>images/history/kv.jpg">
        </section>
        <?php require('nav.php'); ?>

        <div id="box_history">
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="150">
                <h1>邁向<span>全新的開始</span></h1>
                <img src="images/history/pic_main.jpg" alt="合利他命藥品股份有限公司">
                <p>2021年4月1日起，武田消費者保健公司更名為「合利他命製藥公司」。 </p>
                <p>我們將這次的更名視為一種面對未來的轉換，並將持續挑戰新事物。當然，我們為各位顧客提供健康富足生活的想法從未改變。我們的製程、工廠以及技術人員等生產體制都將一如往常地為各位提供各項產品。</p>
                <p>敬請各位舊雨新知不吝繼續支持與鼓勵。</p>
            </div>

            <div data-aos-duration="1000" data-aos-once="true" data-aos-delay="150">
                <div class="titleBar">關於商標</div>
                <img class="pic_logo" src="images/history/pic_logo.png" alt="合利他命藥品logo">
                <p>在新商標中，蘊含著合利他命製藥公司「<strong class="txt_bold">即將改變的事</strong>」以及「<strong class="txt_bold">承諾不變的事</strong>」兩種含意。 </p>
            </div>

            <div class="box_note box_note1" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="150">
                「即將改變」的是，加緊開拓未來的腳步以及不斷挑戰的心；<br>
                「承諾不變」的是，我們的信念（誠信、公正、正直、不屈）<br>
                <span>以及以客為尊的精神。</span>
            </div>
            
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="150">
                <img src="images/history/pic_logoinfo.png" alt="合利他命藥品logo涵義">
                <div class="box_note">
                    將合利他命製藥的首字母「 <strong class="txt_bold">A</strong> 」符號化<br>
                    對各位關係人以及對於社會的「 <strong class="txt_bold">承諾象徵</strong> 」<br> 
                    間隙表示相互扶持的姿態= <strong class="txt_bold">信賴</strong>
                </div>
                <p>三角形的三個頂點分別象徵著挑戰、信念以及以客為尊的精神; 代表合利他命製藥的A，在其中配置的三角形象徵著面對未來的轉換; 全面換新的這個新商標象徵著對各位關係人以及對於社會的承諾。</p>
            </div>
            
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="150">
                <div class="titleBar">特別影片</div>
                <p>這部影片旨在介紹，新公司啟動時全體員工工作坊的紀錄影像，以及我們凝聚匯集在新商標中的想法。</p>
                <div class="box_film">
                    <div class='main_film'>
                        <iframe src="https://www.youtube.com/embed/oL_xrUzdFmQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
                
        </div>

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