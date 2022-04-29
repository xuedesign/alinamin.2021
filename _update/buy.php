<?php require_once('config.php'); ?>
<?php 
 $page="store";
?>
<!doctype html>
<html>

<head>
    <?php require_once('header.php'); ?>
    <title>全系列產品</title>
    <meta name="title" content="全系列產品" />
    <meta name="description" content="認明官方授權通路，搜尋最接近您的銷售據點，商品來源與品質皆有保障" />
    <meta name="keywords" content="台灣武田，合利他命，醫療級B群，A25，強效錠，金強效錠，Alinamin，疲勞無力，眼睛疲勞，肩頸僵硬，腰背酸痛，手腳發麻，嚴重酸痛，神經痛，日本市佔第一" />
    <meta property="og:title" content="合利他命-醫療級維他命B群專家">
    <meta property="og:description" content="認明官方授權通路，搜尋最接近您的銷售據點，商品來源與品質皆有保障">
    <meta property="og:url" content="<?php echo $rootURL;?>buy/#pcs">

    <link rel="stylesheet" href="<?php echo $rootURL;?>css/index.css">
    <link rel="stylesheet" href="<?php echo $rootURL;?>css/store.css">
    <link href="<?php echo $rootURL;?>css/swiper.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js" ></script>
    <script src="<?php echo $rootURL;?>scripts/store.js" ></script>
    <script src='<?php echo $rootURL;?>scripts/swiper.min.js'></script>
</head>

<body>
    <div id="app" class="wrap">
        <?php require('nav.php'); ?>
        
        <section class="storePage pageWarp">
           
            <div class="containerBox">
                <h1>Store</h1>
                <h4>哪裡買</h4>

                <div class="searchOption">
                    <div class="menus">
                        <p v-if="search.select == 'close'" :class="search.option=='產品品項'?'noSelect':''" @click.prevent="changeSelect()">{{search.option}}</p>
                        <ul v-if="search.select == 'open'" @click.prevent="changeSelect()">
                            <li v-for="item in options" :class="search.option==item?'choose':''" @click.prevent="setOption(item)">{{item}}</li>
                        </ul>
                    </div>
                    <button class="btn" :class="search.select" @click.prevent="changeSelect('auto')"><i class="fas fa-caret-down"></i></button>
                </div>

                <div class="btns">
                    <button class="btn" :class="kind=='pcs'?'btnActive':''" @click.prevent="changeKind('pcs')" g-event="購買通路_連鎖通路">連鎖通路</button>
                    <button class="btn" :class="kind=='drugstore'?'btnActive':''" @click.prevent="changeKind('drugstore')" g-event="購買通路_藥局店家">藥局店家</button>
                </div>

                <div v-show="kind=='pcs'"  class="storeBox">
                    <div class="swiperBox">
                        <div class="swiperStore">
                            <div class="swiper-wrapper">
                                <a href="https://www.watsons.com.tw/store-finder" target="_blank" class="swiper-slide">
                                    <img src="<?php echo $rootURL;?>images/store/1.png">
                                    <p>Watsons</p>
                                </a>
                                <a href="https://www.cosmed.com.tw/shop.aspx" target="_blank" class="swiper-slide">
                                    <img src="<?php echo $rootURL;?>images/store/2.png">
                                    <p>Cosmed</p>
                                </a>
                                <a href="http://www.yeschain.com.tw/stores.php" target="_blank" class="swiper-slide">
                                    <img src="<?php echo $rootURL;?>images/store/4.png">
                                    <p>躍獅藥局</p>
                                </a>
                                <a href="http://www.tomods.com.tw/stores" target="_blank" class="swiper-slide">
                                    <img src="<?php echo $rootURL;?>images/store/3.png">
                                    <p>Tomods</p>
                                </a>
                                <a href="https://www.greattree.com.tw/stores" target="_blank" class="swiper-slide">
                                    <img src="<?php echo $rootURL;?>images/store/5.png">
                                    <p>大樹藥局</p>
                                </a>
                                <a href="http://www.yourchance.com.tw/index.php?temp=store&lang=cht" target="_blank" class="swiper-slide">
                                    <img src="<?php echo $rootURL;?>images/store/6.png">
                                    <p>佑全健康人生</p>
                                </a>
                                <a href="https://www.norbelbaby.com.tw/TinTin/work.jsp" target="_blank" class="swiper-slide">
                                    <img src="<?php echo $rootURL;?>images/store/7.png">
                                    <p>丁丁藥妝</p>
                                </a>
                                <a href="https://event.medfirst.com.tw/StoreMap/Storelist.aspx?gclid=CjwKCAiA_9r_BRBZEiwAHZ_v1-9gGqZnrM5HQx0QXXel2dXdURFARx7YZ3X0JK16DWtKVDAfPnEmJRoClWgQAvD_BwE" target="_blank" class="swiper-slide">
                                    <img src="<?php echo $rootURL;?>images/store/8.png">
                                    <p>杏一藥局</p>
                                </a>
                                <a href="http://www.sintong.com/tw_profile.php?Kid=103&Aid=103001&PHPSESSID=9609107199ff1341c00bb29c8560fc12" target="_blank" class="swiper-slide">
                                    <img src="<?php echo $rootURL;?>images/store/10.png">
                                    <p>信東藥妝</p>
                                </a>
                                <a href="https://www.woodpecker.com.tw/info/location" target="_blank" class="swiper-slide">
                                    <img src="<?php echo $rootURL;?>images/store/9.png">
                                    <p>啄木鳥藥局</p>
                                </a>
                                <a href="http://www.wellcare.com.tw/wellindex/03map.htm" target="_blank" class="swiper-slide">
                                    <img src="<?php echo $rootURL;?>images/store/11.png">
                                    <p>維康藥局</p>
                                </a>
                                <a href="https://www.fe-amart.com.tw/index.php/store" target="_blank" class="swiper-slide">
                                    <img src="<?php echo $rootURL;?>images/store/12.png">
                                    <p>愛買</p>
                                </a>
                                <a href="https://www.jpmed.com.tw/zh-TW/store" target="_blank" class="swiper-slide">
                                    <img src="<?php echo $rootURL;?>images/store/13.png">
                                    <p>日藥本舖</p>
                                </a>
                                <a href="http://www.mecome.com.tw/front/bin/ptlist.phtml?Category=357323" target="_blank" class="swiper-slide">
                                    <img src="<?php echo $rootURL;?>images/store/14.png">
                                    <p>美康</p>
                                </a>
                                
                            </div>
                            
                        </div>

                        <!-- Add Arrows -->
                        <div class="btnSwiper nexStore"><i class="fas fa-chevron-right"></i></div>
                        <div class="btnSwiper prevStore"><i class="fas fa-chevron-left"></i></div>
                    </div>    
                </div>
                <div v-show="kind=='drugstore'"  class="storeBox">
                    <div class="seletes">
                        <select @change="getDistricts()" v-model="search.city">
                            <option value="">請選擇縣市</option>
                            <option v-for="item in citys" :value="item">{{item}}</option>
                        </select>
                        <select  @change="getView()" v-model="search.district">
                            <option value="">請選擇區域</option>
                            <option v-for="item in districts" :value="item">{{item}}</option>
                        </select>    
                    </div>


                    <div class="swiperBox">
                        <div class="swiperPycial">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" v-for="item,key in stores" :key="key">
                                    <h2>{{item.veeva}}</h2>
                                    <div class="addr">{{item.address}}</div>
                                    <a :href="'tel:'+item.tel" type="tel" >{{item.tel}}</a>
                                </div>
                            </div>
                            
                        </div>

                        <!-- Add Arrows -->
                        <div class="btnSwiper nexPycial"><i class="fas fa-chevron-right"></i></div>
                        <div class="btnSwiper prevPycial"><i class="fas fa-chevron-left"></i></div>
                    </div>   


                </div>
				<ol class="tip t-a-r m-t30 m-r40">C-APROM/TW/THI/0030 DEC 2020</ol>
            </div>
            
        </section>

        <?php require('footer.php'); ?>


    </div>
</body>

</html>
<script src="<?php echo $rootURL;?>scripts/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo $rootURL;?>scripts/global.js?t=0201"></script>
<script type="text/javascript" src="<?php echo $rootURL;?>scripts/index.js"></script>
<script>
var app = new Vue({
    el: '#app',
    data:{
        kind: (location.hash.indexOf("drugstore")>-1)? 'drugstore':'pcs',
        stores: [],
        citys: [],
        districts: [],
        search:{
            city: '台北市',
            district: '信義區',
            option: '產品品項',
            select: 'close'
        },
        options: ['產品品項','愛-A25','EX PLUS 強效錠','EX GOLD 金強效錠'],
        // options: ['產品品項','愛-A25','EX PLUS 強效錠']
    },
    methods:{
        changeKind: function(kind){
            app.kind = kind;
            location.hash = '#'+kind;
            // if(kind=="pcs"){
            //     sendEvent("購買通路_連鎖通路","購買通路_連鎖通路");
            // }else{
            //     sendEvent("購買通路_藥局店家","購買通路_藥局店家");
            // }
            // var url = {title:'',url:''};
            // history.pushState(url,'','buy/#'+kind);
        },
        changeSelect: function(){

            if(app.search.select == 'close'){
                app.search.select = 'open';
            }
            else{
                app.search.select = 'close';
            }
        },
        setOption: function(item){
            app.search.option = item;
            if(item=='愛-A25'){
                sendEvent("購買通路_A25","購買通路_A25");
            }
            if(item=='EX PLUS 強效錠'){
                sendEvent("購買通路_EX PLUS","購買通路_EX PLUS");
            }
            if(item=='EX GOLD 金強效錠'){
                sendEvent("購買通路_EX GOLD","購買通路_EX GOLD");
            }
        },
        getView: function(){
            getData(app.search)
        },
        getDistricts: function(){
            $.ajax({
                url: '<?php echo $rootURL;?>storeAjax.php',
                type: 'POST',
                dataType: 'JSON',
                data: app.search,
                success: function(res){
                    app.districts = res.district;
                    app.search.district = '';
                    app.getView();
                }
            })
        },
       
    },
    mounted: function(){
        getData(this.search)
    }   
})

function getData($search){
    $.ajax({
        url: '<?php echo $rootURL;?>storeAjax.php',
        type: 'POST',
        dataType: 'JSON',
        data: $search,
        error: function(res){

        },
        success: function(res){
            app.citys     = res.city;
            app.districts = res.district;
            app.stores    = res.stores;

            setTimeout(function(){$('.swiper-wrapper').css("transform","translate3d(0,0,0)")},50)
        }
    })
}

jQuery(document).ready(function($) {
    var storeSwiper = new Swiper('.swiperStore',{
        slidesPerView: 3,
        slidesPerColumn: 2,
        navigation: {
            nextEl: '.nexStore',
            prevEl: '.prevStore',
        },    
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 2,
            }
        },    
    })

    var pycialSwiper = new Swiper('.swiperPycial',{
        observer: true,
        observeParents: true,
        initialSlide: 0,
        slidesPerView: 2,
        slidesPerColumn: 3,
        navigation: {
            nextEl: '.nexPycial',
            prevEl: '.prevPycial',
        },    
    }) 
    setTimeout(function(){$('.swiper-wrapper').css("transform","translate3d(0,0,0)")},50)

});

jQuery(document).ready(function($) {

    var temp = location.href.split("#");
    if (temp.length != 1){
        app.changeKind(temp[1])
    }  
    $('.swiperStore a').on('click',function(){
        var linkName=$(this).find('p').html();
        sendEvent("購買通路_連鎖通路_"+linkName,"購買通路_連鎖通路_"+linkName);
    })
});


</script>