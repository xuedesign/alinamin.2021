<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MF6LMX9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
    <div class="content flex-b-c">
        <a href="<?php echo $rootURL;?>." class="logo" g-event="Nav_takeda台灣武田Logo"></a>
        <nav>
            <a href="blogs.html">容易維生素B1缺乏的族群</a>
            <a <?php echo ($page=="cause")?'class="current"':'';?> href="<?php echo $rootURL;?>cause" g-event="Nav_疲酸麻的原因">你的疲。酸。麻原因</a>
            <a <?php echo ($page=="fursultiamine")?'class="current"':'';?> href="<?php echo $rootURL;?>fursultiamine" g-event="Nav_醫療級B1 TTFD">合利他命醫療級B群</a>
            <a href="newpackage.html">合利他命新包裝上市</a>
            <a <?php echo ($page=="lineup")?'class="current"':'';?> href="<?php echo $rootURL;?>lineup" g-event="Nav_全產品列表">全產品列表</a>
            <div class="nav-more" g-event="Nav_了解更多">
                了解更多
                <i class="nav-arrow"></i>
                <div class="dropdown">
                    <a  href="<?php echo $rootURL;?>product/exgold" g-event="Nav_了解更多_EXGOLD金強效錠">EX GOLD 金強效錠</a>
                    <a href="<?php echo $rootURL;?>product/explus" g-event="Nav_了解更多_EXPLUS強效錠">EX PLUS 強效錠</a>
                    <a href="<?php echo $rootURL;?>product/a25" g-event="Nav_了解更多_愛A25">愛A25</a>
                    <a href="<?php echo $rootURL;?>buy/#pcs" g-event="Nav_了解更多_購買通路">購買通路</a>
                 <!--    <a href="<?php //echo $rootURL;?>QA/#all" g-event="Nav_了解更多_常見問題Q&A">常見問題Q&A</a> -->
                    <a href="<?php echo $rootURL;?>history" g-event="Nav_了解更多_合利他命藥品">合利他命藥品</a>
                </div>
            </div>
            <a href="<?php echo $rootURL;?>." class="nav-home" g-event="Nav_HOME">回首頁</a>
        </nav>
        <div class="nav-btn">
            <span></span><span></span><span></span>
        </div>
    </div>
</header>
<div class="menu-list mb">
    <a <?php echo ($page=="cause")?'class="current"':'';?> href="<?php echo $rootURL;?>cause" g-event="Nav_疲酸麻的原因">你的疲。酸。麻原因</a>
    <a <?php echo ($page=="fursultiamine")?'class="current"':'';?> href="<?php echo $rootURL;?>fursultiamine" g-event="Nav_醫療級B1 TTFD">合利他命醫療級B群</a>
    <a <?php echo ($page=="lineup")?'class="current"':'';?> href="<?php echo $rootURL;?>lineup" g-event="Nav_全產品列表">全產品列表</a>
</div>
<div class="menu-wrap">
    <div class="menuBox">
        <a href="blogs.html">維生素B1缺乏的族群</a>
        <a href="<?php echo $rootURL;?>cause"  g-event="Nav_疲酸麻的原因">你的疲。酸。麻原因</a>
        <a href="<?php echo $rootURL;?>fursultiamine"  g-event="Nav_Nav_醫療級B1 TTFD">合利他命醫療級B群</a>
        <a href="newpackage.html">合利他命新包裝上市</a>
        <a href="<?php echo $rootURL;?>lineup"  g-event="Nav_全產品列表">全產品列表</a>
        <a href="<?php echo $rootURL;?>." class="menu-home"  g-event="Nav_HOME">回首頁</a>
    </div>
    <div class="menuBox light">
        <a  href="<?php echo $rootURL;?>product/exgold" g-event="Nav_了解更多_EXGOLD金強效錠">EX GOLD 金強效錠</a>
        <a href="<?php echo $rootURL;?>product/explus" g-event="Nav_了解更多_EXPLUS強效錠">EX PLUS 強效錠</a>
        <a href="<?php echo $rootURL;?>product/a25" g-event="Nav_了解更多_愛A25">愛A25</a>
        <a href="<?php echo $rootURL;?>buy/#pcs" g-event="Nav_了解更多_購買通路">購買通路</a>
<!--         <a href="<?php //echo $rootURL;?>QA/#all" g-event="Nav_了解更多_常見問題Q&A">常見問題Q&A</a> -->
        <a href="<?php echo $rootURL;?>history" g-event="Nav_了解更多_合利他命藥品">合利他命藥品</a>
    </div>
</div>
<div class="header-h"></div>

<div class="portrait" style="display: none;">
    <div><img src="<?php echo $rootURL;?>images/phone.png"></div>
</div>
<div class="landscape" style="display: none;">
    <div><img src="<?php echo $rootURL;?>images/phone2.png"></div>
</div>
<div class="top-btn"></div>
<?php if($ver=='cny'){?>
<div class="fixed-btn fixed1">
    <a href="<?php echo $rootURL;?>cause" g-event="CNY_浮動選單BTN">
        <div class="fixed-sp">
            <div><img src="<?php echo $rootURL;?>images/2021cny/fixed_sp.png" alt=""></div>
        </div>
        <div class="front">
            <div class="front-area">
                
            </div>
            <div class="ribbon"></div>
            <div class="front-txt"></div>
        </div>
    </a>
</div>

<div class="fixed-btn fixed-btn-bottom">
    <a href="<?php echo $rootURL;?>cause" g-event="CNY_浮動選單BTN">
        <div class="fixed-sp">
            <div><img src="<?php echo $rootURL;?>images/2021cny/mb/fixed_sp.png" alt=""></div>
        </div>
        <div class="front">
            <div class="front-area">
                
            </div>
            <div class="ribbon"></div>
            <div class="front-txt"></div>
        </div>
    </a>
</div>
<?php }?>