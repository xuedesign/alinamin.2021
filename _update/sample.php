<?php require_once('config.php'); ?>
<?php 
 $page="index";
?>
<!doctype html>
<html>

<head>
    <?php require_once('header.php'); ?>
    <link rel="stylesheet" href="<?php echo $rootURL;?>css/index.css">
</head>

<body>
    <div id="app" class="wrap">
        <?php require('nav.php'); ?>
        
        <section>
            
        </section>
        <section>
            
        </section>
        <footer>
            <div class="content">
                <div class="logo"></div>
                <div class="flex-b-s m-t18">
                    <div>
                        <p>本網站係台灣武田工業股份有限公司所擁有，其內容之著作權亦屬於台灣武田工業股份有限公司，非經同意不得轉載。</p>
                        <p>Copyright©Takeda Pharmaceutical Taiwan Ltd. <br class="mb">2020台灣武田藥品工業股份有限公司版權所有</p>
                    </div>
                    <div class="mm-b15">
                        <div class="txtBox m-r20">
                            <span class="c-red">TEL</span> <span>0800-363-088</span>
                        </div>
                        <div class="txtBox">
                            <span class="c-red">ADDRESS</span> <span>106 台北市大安區敦化南路二段39號3樓</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?php echo $rootURL;?>scripts/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $rootURL;?>scripts/global.js"></script>
        <script type="text/javascript" src="<?php echo $rootURL;?>scripts/index.js"></script>
</body>

</html>