    
    <meta charset="utf-8">
    <?php 
        if (userAgent($_SERVER['HTTP_USER_AGENT'])=='tablet') {
    ?>
    <meta name="viewport" content="width=1280">
    <?php 
        }else{
    ?>
    <meta name="viewport" content="width=640">
    <?php 
        }
    ?>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    
    <meta name="apple-mobile-web-app-title" content="">
    <!-- OG -->
    <link rel="icon" href="<?php echo $rootURL;?>images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo $rootURL;?>images/favicon.ico" type="image/x-icon" />

    <meta property="og:site_name" content="合利他命">
    <meta content='Alinamin' name='author'>
    <meta property="og:type" content="website" /> 
    <meta property="og:image" content="<?php echo $rootURL;?>images/share.jpg">
    <!-- css start-->
    <link rel="stylesheet" href="<?php echo $rootURL;?>css/aos.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="<?php echo $rootURL;?>css/animation.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-187222482-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-187222482-1');
      gtag('event','click',{'event_category':'全系列產品_緩解因B群不足BTN','event_label':'全系列產品_緩解因B群不足BTN'});
      gtag('event','click',{'event_category':'Q&A_認識維生素B_Q1','event_label':'Q&A_認識維生素B_Q1'});
      gtag('event','click',{'event_category':'Q&A_認識維生素B_Q2','event_label':'Q&A_認識維生素B_Q2'});
      gtag('event','click',{'event_category':'Q&A_認識維生素B_Q3','event_label':'Q&A_認識維生素B_Q3'});
    </script>
    <script>
        var pageName='<?php echo $page;?>';
    </script>
    <script type="application/javascript">(function(w,d,t,r,u){w[u]=w[u]||[];w[u].push({'projectId':'10000','properties':{'pixelId':'10110436'}});var s=d.createElement(t);s.src=r;s.async=true;s.onload=s.onreadystatechange=function(){var y,rs=this.readyState,c=w[u];if(rs&&rs!="complete"&&rs!="loaded"){return}try{y=YAHOO.ywa.I13N.fireBeacon;w[u]=[];w[u].push=function(p){y([p])};y(c)}catch(e){}};var scr=d.getElementsByTagName(t)[0],par=scr.parentNode;par.insertBefore(s,scr)})(window,document,"script","https://s.yimg.com/wi/ytc.js","dotq");</script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MF6LMX9');</script>
    <!-- End Google Tag Manager -->

