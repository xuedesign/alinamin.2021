<?php require_once('config.php'); ?>
<?php 
 $page="qa";
?>
<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >

    <?php require_once('header.php'); ?>

    <link rel="stylesheet" href="<?php echo $rootURL;?>css/index.css">
    <link rel="stylesheet" href="<?php echo $rootURL;?>css/qa.css?01">
    <link href="<?php echo $rootURL;?>css/swiper.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js" ></script>
    <script src='<?php echo $rootURL;?>scripts/swiper.min.js'></script>

</head>

<body>
    <div id="app" class="wrap">
        <?php require('nav.php'); ?>
        
        <section class="qaPage pageWarp">
           
            <div class="containerBox">
                <h1>Q&A</h1>
                <h4>使用者常有的問題</h4>

                <div class="web">
                    <div class="btns">
                        <button class="btn" v-for="item,key in kinds" :class="kind==key?'btnActive':''" @click.prevent="changeKind(key)">{{item}}</button>
                    </div>
                </div>

                <div class="phone">
                    <div class="searchOption">
                        <div class="menus">
                            <p v-if="select == 'close'"  @click.prevent="changeSelect()">{{kinds[kind]}}</p>
                            <ul v-if="select == 'open'" @click.prevent="changeSelect()">
                                <li v-for="item,key in kinds" :class="kind==key?'choose':''" @click.prevent="changeKind(key)">{{item}}</li>
                            </ul>
                        </div>
                        <button class="btn" :class="select" @click.prevent="changeSelect('auto')"><i class="fas fa-caret-down"></i></button>
                    </div>
                </div>

                <div class="accordion" id="qa" v-if="kind=='all'">
                    <div class="qaBox open">
                        <div class="question qu1" data-toggle="collapse" data-target="#cq1" aria-expanded="true" aria-controls="cq1">
                            <div class="txt">
                                <span>Q <b>1</b></span>
                                <p>A25、EX PLUS與EX GOLD有什麼區別？</p>
                            </div>
                            <!-- <i class="fas fa-minus"></i> -->
                        </div>
                        <div class="answer ollapse show an1" id="cq1" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>合利他命針對維生素B<b class="f-s-em8">1</b>缺乏的不同程度疲勞症狀，提供不同的產品。</p>
                                </div>
                            </div>

                            <div class="compare">
                                <div class="compareFlex">
                                    <ul class="red">
                                        <li>合利他命<br>系列產品</li>
                                        <li>產品名</li>
                                        <li><p>商用B<i class="f-s-em8">1</i><br>缺乏程度</p></li>
                                        <li>產品特色</li>
                                        <li>每日用量</li>
                                        <li class="phone">主要成份</li>
                                    </ul>
                                    <div class="swiperCompare">
                                        <div class="swiper-wrapper">
                                            
                                            <ul class="swiper-slide">
                                                <li class="ptFlex">
                                                    <img src="<?php echo $rootURL;?>images/qa/a25.png" class="photo">
                                                    <a href="<?php echo $rootURL;?>product/a25"class="prod" g-event="Q&A_合利他命全產品_Q1_A25產品介紹">產品介紹</a>
                                                </li>
                                                <li><img src="<?php echo $rootURL;?>images/qa/a25_font.png" class="font"></li>
                                                <li>疲勞</li>
                                                <li>
                                                    <span>有效解決</span>
                                                    <span>身體疲勞</span>
                                                    <span>快速補充活力</span>
                                                </li>
                                                <li>
                                                    <span>1日3-4錠</span>
                                                    <span>分2-3次飯後服用</span>
                                                </li>
                                                <li class="phone decription">
                                                    <div class="item">
                                                        <h3>合利他命-愛A25</h3>
                                                        <div class="title">
                                                            <span>成份</span>
                                                            <span>每錠含</span>
                                                        </div>
                                                        <ol>
                                                            <li>
                                                                <span>Fursultiamine (維生素B<b>1</b>誘導體)</span>
                                                                <span>25mg</span>
                                                            </li>
                                                            <li>
                                                                <span class="small">(Thiamine Tetrahydrofurfuryl Disulfide HCl)</span>
                                                                <span>27.288mg</span>
                                                            </li>
                                                            <li>
                                                                <span>Riboflavin(維生素B<b>2</b>)</span>
                                                                <span>2.5mg</span>
                                                            </li>
                                                            <li>
                                                                <span>Pyridoxine HCl (維生素B<b>6</b>)</span>
                                                                <span>2.5mg</span>
                                                            </li>
                                                            <li>
                                                                <span>Cyanocobalamin (維生素B<b>12</b>)</span>
                                                                <span>5μg</span>
                                                            </li>
                                                        </ol>    
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="swiper-slide">
                                                <li class="ptFlex">
                                                    <img src="<?php echo $rootURL;?>images/qa/plus.png" class="photo photo2">
                                                    <a href="<?php echo $rootURL;?>product/explus"class="prod" g-event="Q&A_合利他命全產品_Q1_EX PLUS產品介紹">產品介紹</a>
                                                </li>
                                                <li><img src="<?php echo $rootURL;?>images/qa/plus_font.png" class="font"></li>
                                                <li>酸痛</li>
                                                <li>
                                                    <span>有效緩解</span>
                                                    <span>眼睛疲勞</span>
                                                    <span>肩頸僵硬</span>
                                                    <span>腰背酸痛</span>
                                                </li>
                                                <li>
                                                    <span>1日2-3錠</span>
                                                    <span>飯後1次服用</span>
                                                </li>
                                                <li class="phone decription">
                                                    <div class="item">
                                                        <h3>合利他命強效錠 EX PLUS</h3>
                                                        <div class="title">
                                                            <span>成份</span>
                                                            <span>每錠含</span>
                                                        </div>
                                                        <ol>
                                                            <li>
                                                                <span>Fursultiamine (維生素B<b class="f-s-em8">1</b>誘導體)</span>    
                                                                <span>33.33mg</span>
                                                            </li>
                                                            <li>
                                                                <span class="small">(Thiamine Tetrahydrofurfuryl Disulfide HCl)</span>
                                                                <span>36.39mg</span>
                                                            </li>
                                                            <li>
                                                                <span>Pyridoxine HCl (維生素B<b class="f-s-em8">6</b>)</span>
                                                                <span>33.33mg</span>
                                                            </li>
                                                            <li>
                                                                <span>Cyanocobalamin (維生素B<b class="f-s-em8">12</b>)</span>
                                                                <span>500μg</span>
                                                            </li>
                                                            <li>
                                                                <span>Tocopherol Calcium Succinate (維生素E)</span>
                                                                <span>34.53mg</span>
                                                            </li>
                                                            <li>
                                                                <span  class="small">(dl-α-Tocopherol)</span>
                                                                <span>33.33mg</span>
                                                            </li>
                                                            <li>
                                                                <span>Calcium Pantothenate (泛酸鈣)</span>
                                                                <span>10mg</span>
                                                            </li>
                                                            <li>
                                                                <span>Gamma-Oryzanol (穀維素)</span>
                                                                <span>3.33mg</span>
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="swiper-slide">
                                                <li class="ptFlex">
                                                    <img src="<?php echo $rootURL;?>images/qa/gold.png" class="photo photo2">
                                                    <a href="<?php echo $rootURL;?>product/exgold" class="prod" g-event="Q&A_合利他命全產品_Q1_EX GOLD產品介紹">產品介紹</a>
                                                </li>
                                                <li><img src="<?php echo $rootURL;?>images/qa/gold_font.png" class="font"></li>
                                                <li>末梢神經發麻</li>
                                                <li>
                                                    <span>有效緩解</span>
                                                    <span>末梢神經發麻</span>
                                                    <span>神經痛</span>
                                                    <span>嚴重肩頸僵硬</span>
                                                    <span>嚴重腰背酸痛</span>
                                                </li>
                                                <li>
                                                    <span>1日3錠</span>
                                                    <span>分3次飯後服用</span>
                                                    <span>1次1錠</span>
                                                </li>
                                                <li class="phone decription">
                                                    <div class="item">
                                                        <h3>合利他命金強效錠 EX GOLD</h3>
                                                        <div class="title">
                                                            <span>成份</span>
                                                            <span>每錠含</span>
                                                        </div>
                                                        <ol>
                                                            <li>
                                                                <span>Fursultiamine (維生素B<b class="f-s-em8">1</b>誘導體)</span>
                                                                <span>33.33mg</span>
                                                            </li>
                                                            <li>
                                                                <span class="small">(Fursultiamine Hydrochloride)</span>
                                                                <span>36.387mg</span>
                                                            </li>
                                                            <li>
                                                                <span>Pyridoxal Phosphate Hydrate (活性維生素B<b class="f-s-em8">6</b>)</span>
                                                                <span>20mg</span>
                                                            </li>
                                                            <li>
                                                                <span>Mecobalamin (活性維生素B<b class="f-s-em8">12</b>)</span>
                                                                <span>500μg</span>
                                                            </li>
                                                            <li>
                                                                <span>d-α- Tocopherol Succinate (天然型維生素E)</span>
                                                                <span>33.3mg</span>
                                                            </li>
                                                            <li>
                                                                <span>Gamma-Oryzanol(<b class="f-kgp">γ</b>穀維素)</span>
                                                                <span>3.33mg</span>
                                                            </li>
                                                            <li>
                                                                <span>Folic Acid (葉酸)</span>
                                                                <span>0.333mg</span>
                                                            </li>
                                                        </ol>
                                                    </div>    
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="btnSwiper nextProd"><i class="fas fa-chevron-right"></i></div>
                                        <div class="btnSwiper prevProd"><i class="fas fa-chevron-left"></i></div>
                                    </div>

                                    

                                </div>


                                <div class="decription web">
                                    <ul>
                                        <li>主成份</li>
                                        <li>
                                            <div class="item">
                                                <h3>合利他命-愛A25</h3>
                                                <div class="title">
                                                    <span>成份</span>
                                                    <span>每錠含</span>
                                                </div>
                                                <ol>
                                                    <li>
                                                        <span>Fursultiamine (維生素B<b class="f-s-em8">1</b>誘導體)</span>
                                                        <span>25mg</span>
                                                    </li>
                                                    <li>
                                                        <span class="small">(Thiamine Tetrahydrofurfuryl Disulfide HCl)</span>
                                                        <span>27.288mg</span>
                                                    </li>
                                                    <li>
                                                        <span>Riboflavin(維生素B<b class="f-s-em8">2</b>)</span>
                                                        <span>2.5mg</span>
                                                    </li>
                                                    <li>
                                                        <span>Pyridoxine HCl (維生素B<b class="f-s-em8">6</b>)</span>
                                                        <span>2.5mg</span>
                                                    </li>
                                                    <li>
                                                        <span>Cyanocobalamin (維生素B<b class="f-s-em8">12</b>)</span>
                                                        <span>5μg</span>
                                                    </li>
                                                </ol>    
                                            </div>

                                            <div class="item">
                                                <h3>合利他命強效錠 EX PLUS</h3>
                                                <div class="title">
                                                    <span>成份</span>
                                                    <span>每錠含</span>
                                                </div>
                                                <ol>
                                                    <li>
                                                        <span>Fursultiamine (維生素B<b class="f-s-em8">1</b>誘導體)</span>    
                                                        <span>33.33mg</span>
                                                    </li>
                                                    <li>
                                                        <span class="small">(Thiamine Tetrahydrofurfuryl Disulfide HCl)</span>
                                                        <span>36.39mg</span>
                                                    </li>
                                                    <li>
                                                        <span>Pyridoxine HCl (維生素B<b class="f-s-em8">6</b>)</span>
                                                        <span>33.33mg</span>
                                                    </li>
                                                    <li>
                                                        <span>Cyanocobalamin (維生素B<b class="f-s-em8">12</b>)</span>
                                                        <span>500μg</span>
                                                    </li>
                                                    <li>
                                                        <span>Tocopherol Calcium Succinate (維生素E)</span>
                                                        <span>34.53mg</span>
                                                    </li>
                                                    <li>
                                                        <span  class="small">(dl-α-Tocopherol)</span>
                                                        <span>33.33mg</span>
                                                    </li>
                                                    <li>
                                                        <span>Calcium Pantothenate (泛酸鈣)</span>
                                                        <span>10mg</span>
                                                    </li>
                                                    <li>
                                                        <span>Gamma-Oryzanol (穀維素)</span>
                                                        <span>3.33mg</span>
                                                    </li>
                                                </ol>
                                            </div>

                                            <div class="item">
                                                <h3>合利他命金強效錠 EX GOLD</h3>
                                                <div class="title">
                                                    <span>成份</span>
                                                    <span>每錠含</span>
                                                </div>
                                                <ol>
                                                    <li>
                                                        <span>Fursultiamine (維生素B<b class="f-s-em8">1</b>誘導體)</span>
                                                        <span>33.33mg</span>
                                                    </li>
                                                    <li>
                                                        <span class="small">(Fursultiamine Hydrochloride)</span>
                                                        <span>36.387mg</span>
                                                    </li>
                                                    <li>
                                                        <span>Pyridoxal Phosphate Hydrate (活性維生素B<b class="f-s-em8">6</b>)</span>
                                                        <span>20mg</span>
                                                    </li>
                                                    <li>
                                                        <span>Mecobalamin (活性維生素B<b class="f-s-em8">12</b>)</span>
                                                        <span>500μg</span>
                                                    </li>
                                                    <li>
                                                        <span>d-α- Tocopherol Succinate (天然型維生素E)</span>
                                                        <span>33.3mg</span>
                                                    </li>
                                                    <li>
                                                        <span>Gamma-Oryzanol(<b class="f-kgp">γ</b>穀維素)</span>
                                                        <span>3.33mg</span>
                                                    </li>
                                                    <li>
                                                        <span>Folic Acid (葉酸)</span>
                                                        <span>0.333mg</span>
                                                    </li>
                                                </ol>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#cq2" aria-expanded="false" aria-controls="cq2">
                            <div class="txt">
                                <span>Q <b>2</b></span>
                                <p>合利他命系列產品的適用對象?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="cq2" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>A25：25-39歲男女，需補充活力 </p>
                                    <p>EX PLUS：40歲以上男女，日常有酸痛問題</p>
                                    <p>EX GOLD：55歲以上男女，因長期B<b class="f-s-em8">1</b>缺乏，導致末梢發麻</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#cq3" aria-expanded="false" aria-controls="cq3">
                            <div class="txt">
                                <span>Q <b>3</b></span>
                                <p>我可以每天服用嗎?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="cq3" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>如果您感覺到效果，可以每天服用。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#cq4" aria-expanded="false" aria-controls="cq4">
                            <div class="txt">
                                <span>Q <b>4</b></span>
                                <p>我可以長時間服用嗎?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="cq4" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>合利他命能有效補充B<b class="f-s-em8">1</b>，您可以長時間服用。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#cq5" aria-expanded="false" aria-controls="cq5">
                            <div class="txt">
                                <span>Q <b>5</b></span>
                                <p>什麼是TTFD?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="cq5" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>武田藥品研發的TTFD是維生素B<b class="f-s-em8">1</b>衍生物(又稱維生素B<b class="f-s-em8">1</b>誘導體)，能令維生素B<b class="f-s-em8">1</b>更容易被吸收，並有效作用於神經與肌肉組織，從根源緩解酸痛。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#cq6" aria-expanded="false" aria-controls="cq6">
                            <div class="txt">
                                <span>Q <b>6</b></span>
                                <p>什麼是維生素B<b class="f-s-em8">1</b>誘導體?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="cq6" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>它是由武田藥品開發的維生素B<b class="f-s-em8">1</b>衍生物，能幫助葡萄糖轉換成細胞需要的熱量，與一般的維生素B<b class="f-s-em8">1</b>相比，可產生高量的維生素B<b class="f-s-em8">1</b>，很好的被人體吸收並到達全身。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#cq7" aria-expanded="false" aria-controls="cq7">
                            <div class="txt">
                                <span>Q <b>7</b></span>
                                <p>合利他命有含大蒜成分嗎?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="cq7" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>合利他命系列：金強效錠、強效錠與合利他命愛A25皆不含大蒜或洋蔥成分，類似大蒜或洋蔥的氣味是來自於合利他命內含的“維生素B<b class="f-s-em8">1</b>誘導體”，其中之二硫化物之特殊氣味。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#cq8" aria-expanded="false" aria-controls="cq8">
                            <div class="txt">
                                <span>Q <b>8</b></span>
                                <p>我懷孕期間可以服用嗎?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="cq8" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>A25有“補充妊娠/哺乳期維生素B<b class="f-s-em8">1</b>”的功效，可以服用。</p>
                                    <p>如欲使用強效錠及金強效錠，建議先洽詢醫師。 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#cq9" aria-expanded="false" aria-controls="cq9">
                            <div class="txt">
                                <span>Q <b>9</b></span>
                                <p>母乳餵養時可以服用?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="cq9" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>A25有“補充妊娠/哺乳期維生素B<b class="f-s-em8">1</b>”的功效，可以服用。</p>
                                    <p>如欲使用強效錠及金強效錠，建議先洽詢醫師。 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#cq10" aria-expanded="false" aria-controls="cq10">
                            <div class="txt">
                                <span>Q <b>10</b></span>
                                <p>幾歲以上可以服用?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="cq10" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>15歲以上。 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#cq11" aria-expanded="false" aria-controls="cq11">
                            <div class="txt">
                                <span>Q <b>11</b></span>
                                <p>素食可食嗎?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="cq11" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>A25含明膠，強效錠及金強效錠含微量蟲膠。</p>
                                    <p>建議素食者可以自行評估是否適合素食者使用。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ol class="tip m-t30">
                        衛署藥製字第030689號   衛署藥輸字第025431號   衛部藥輸字第027584號   北市衛藥廣字第XXXXXXXXX號   C-APROM/TW/THI/0030 DEC 2020   本品為醫師藥師藥劑生指示藥品，使用前請詳閱說明書警語及注意事項
                    </ol>

                    <h2 class="newtitle">認識維生素B</h2>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#cq12" aria-expanded="false" aria-controls="cq12">
                            <div class="txt">
                                <span>Q <b>1</b></span>
                                <p>使用B群會有過量或是成癮的疑慮嗎?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="cq12" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>維生素B群為水溶性，若攝取過量會由尿液排除，故不需太擔憂攝取過量或成癮的問題。</p>
                                    <p>即便如此，請依照武田的仿單/說明書用法服用合利他命，武田不建議任何非仿單之使用方式。</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#cq13" aria-expanded="false" aria-controls="cq13">
                            <div class="txt">
                                <span>Q <b>2</b></span>
                                <p>活性B群跟非活性B群有什麼不同?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="cq13" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>活性維生素 B<b class="f-s-em8">6</b> 為 pyridoxal phosphate hydrate、B<b class="f-s-em8">12</b> 為 methylcobalamin，而非活性之維生素 B<b class="f-s-em8">6</b> 與 B<b class="f-s-em8">12</b> 則為 pyridoxine 與 cobalamin。</p>
                                    <p>活性維生素 B<b class="f-s-em8">6</b> , B<b class="f-s-em8">12</b> 能較快進入細胞發揮作用，改善及維持神經系統 (含末梢神經系統) 的健康。(當非活性維生素 B<b class="f-s-em8">6</b> , B<b class="f-s-em8">12</b> 進入人體後，需要時間進行生物轉化成活性態)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#cq14" aria-expanded="false" aria-controls="cq14">
                            <div class="txt">
                                <span>Q <b>3</b></span>
                                <p>維生素B<b class="f-s-em8">1</b>是否能增強免疫力?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="cq14" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>人體內的免疫細胞，大部分集中在腸道裡的「培氏斑塊（Peyer’s patch）」內，若體內的維生素B<b class="f-s-em8">1</b>不足，會讓培氏斑塊縮小，免疫細胞數量減少的同時連帶讓免疫力下降。維持體內維生素B<b class="f-s-em8">1</b>充足，免疫細胞就能維持一定的數量，同時也能增加免疫力。</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> 

                <div class="accordion" id="qa" v-if="kind=='a25'">
                    <div class="qaBox open">
                        <div class="question" data-toggle="collapse" data-target="#a251" aria-expanded="true" aria-controls="a251">
                            <div class="txt">
                                <span>Q <b>1</b></span>
                                <p>合利他命A25是什麼類型的產品?</p>
                            </div>
                            <!-- <i class="fas fa-minus"></i> -->
                        </div>
                        <div class="answer ollapse show" id="a251" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>日常生活中消除疲勞，快速有效的產品。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#a252" aria-expanded="false" aria-controls="a252">
                            <div class="txt">
                                <span>Q <b>2</b></span>
                                <p>每天一次的劑量，我應該在什麼時候服用?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="a252" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>如果每天服用一次，應在飯後服用，1日3-4錠。</p>
                                    <p>早晨、中午和晚上皆可，效果一樣。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#a253" aria-expanded="false" aria-controls="a253">
                            <div class="txt">
                                <span>Q <b>3</b></span>
                                <p>為什麼我的尿液會變黃?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="a253" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>由於含有維生素B<b class="f-s-em8">2</b>，尿液可能變黃。 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ol class="tip m-t30">
                    衛署藥製字第030689號   北市衛藥廣字第XXXXXXXXX號   C-APROM/TW/THI/0030 DEC 2020   本品為醫師藥師藥劑生指示藥品，使用前請詳閱說明書警語及注意事項
                    </ol>
                </div> 

                <div class="accordion" id="qa" v-if="kind=='plus'">
                    <div class="qaBox open">
                        <div class="question" data-toggle="collapse" data-target="#plus1" aria-expanded="true" aria-controls="plus1">
                            <div class="txt">
                                <span>Q <b>1</b></span>
                                <p>合利他命EX PLUS強效錠是什麼產品？</p>
                            </div>
                            <!-- <i class="fas fa-minus"></i> -->
                        </div>
                        <div class="answer ollapse show" id="plus1" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>針對緩解「眼睛疲勞」、「腰背酸痛」、「肩頸僵硬」等酸痛症狀而設計。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#plus2" aria-expanded="false" aria-controls="plus2">
                            <div class="txt">
                                <span>Q <b>2</b></span>
                                <p>產品在什麼地方製造?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="plus2" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>合利他命EX PLUS強效錠是由日本武田藥品研發，於日本製造及包裝，再原裝進口至台灣，成分與日本出售的相同。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#plus3" aria-expanded="false" aria-controls="plus3">
                            <div class="txt">
                                <span>Q <b>3</b></span>
                                <p>什麼是泛酸鈣?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="plus3" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>維生素B<b class="f-s-em8">5</b>，參與能量代謝，用於燃燒脂肪、膽固醇的合成及胺基酸的代謝，是輔酵素A的成分之一。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#plus4" aria-expanded="false" aria-controls="plus4">
                            <div class="txt">
                                <span>Q <b>4</b></span>
                                <p>什麼是<b class="f-kgp">γ</b>-穀維素?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="plus4" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>可協助維生素B<b>1</b>、B<b>6</b>、B<b>12</b>發揮作用。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#plus5" aria-expanded="false" aria-controls="plus5">
                            <div class="txt">
                                <span>Q <b>5</b></span>
                                <p>每天一次，我應該什麼時候服用?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="plus5" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>請在飯後服用，在早上、中午或晚上，都是有效的。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#plus6" aria-expanded="false" aria-controls="plus6">
                            <div class="txt">
                                <span>Q <b>6</b></span>
                                <p>服用多久才有效?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="plus6" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>服用效果依個人體質及吸收能力而有效果，建議持續服用一個月，若情況未有改善，建議徵詢醫師意見，進一步了解酸痛背後原因。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#plus7" aria-expanded="false" aria-controls="plus7">
                            <div class="txt">
                                <span>Q <b>7</b></span>
                                <p>為何台灣販售的合利他命EX PLUS強效錠所標示的劑量跟日本買的不一樣?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="plus7" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>台灣販售的合利他命EX PLUS強效錠與日本當地販售的EX PLUS成分、劑量、用法用量完全無調整，僅在規格上因應台灣消費者需求，而有包裝錠數之差異，日文版所標示的劑量是3錠的總含量，台灣標示的是每1錠之含量，將該劑量乘以3便等於日文版的劑量。</p>

                                    <div class="photos">
                                        <div class="photo">
                                            <p><i class="fas fa-caret-down"></i>日本同步配方聲明書 中文版</p>
                                            <img src="<?php echo $rootURL;?>images/qa/statement_tw.png">
                                        </div>
                                        <div class="photo">
                                            <p><i class="fas fa-caret-down"></i>日本同步配方聲明書 日文版</p>
                                            <img src="<?php echo $rootURL;?>images/qa/statement_jp.png">
                                        </div>
                                    </div>
                                    <ol class="tip m-t30">
                                    衛署藥製字第030689號   北市衛藥廣字第XXXXXXXXX號   C-APROM/TW/THI/0030 DEC 2020   本品為醫師藥師藥劑生指示藥品，使用前請詳閱說明書警語及注意事項
                                    </ol> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#plus8" aria-expanded="false" aria-controls="plus8">
                            <div class="txt">
                                <span>Q <b>8</b></span>
                                <p>為什麼在一些藥局或是在網路上也可以買到全日文標示的合利他命EX PLUS強效錠?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="plus8" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>請認明包裝上印有台灣武田、有中文標示的合利他命EX PLUS強效錠，才是合法自日本原裝進口的產品，從生產到配送嚴格依照法規管控品質，保障消費者用藥安全。全日文版本之產品並非台灣武田公司進口之包裝，亦非衛福部核准之產品，其商品來源與品質均缺乏保障。</p>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <ol class="tip m-t30">
                        衛署藥輸字第025431號 北市衛藥廣字第XXXXXXXXX號 C-APROM/TW/THI/0030 DEC 2020 本品為醫師藥師藥劑生指示藥品，使用前請詳閱說明書警語及注意事項
                    </ol>
                </div>  

                <div class="accordion" id="qa" v-if="kind=='gold'">
                    <div class="qaBox open">
                        <div class="question" data-toggle="collapse" data-target="#gold1" aria-expanded="true" aria-controls="gold1">
                            <div class="txt">
                                <span>Q <b>1</b></span>
                                <p>合利他命EX GOLD金強效錠是什麼產品？</p>
                            </div>
                            <!-- <i class="fas fa-minus"></i> -->
                        </div>
                        <div class="answer ollapse show" id="gold1" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>針對緩解末梢發麻、神經痛及嚴重酸痛症狀而設計。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#gold2" aria-expanded="false" aria-controls="gold2">
                            <div class="txt">
                                <span>Q <b>2</b></span>
                                <p>產品在什麼地方製造?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="gold2" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>合利他命EX GOLD金強效錠是由日本武田藥品研發，於日本製造及包裝，再原裝進口至台灣，成分與日本出售的相同。 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#gold3" aria-expanded="false" aria-controls="gold3">
                            <div class="txt">
                                <span>Q <b>3</b></span>
                                <p>與市場上類似產品的差異？</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="gold3" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>其他產品普遍成分是銀杏葉萃取物，主要功能是輔助改善血管的流動速率，並無法正常化神經傳導的功能。 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#gold4" aria-expanded="false" aria-controls="gold4">
                            <div class="txt">
                                <span>Q <b>4</b></span>
                                <p>金強效錠的產品最大特色?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="gold4" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>市場唯一有效改善末梢發麻、快速修復神經，臨床實驗證實有效，針對手部末梢發麻，肩頸疼痛證實有效。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#gold5" aria-expanded="false" aria-controls="gold5">
                            <div class="txt">
                                <span>Q <b>5</b></span>
                                <p>使用時機、時間、方式?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="gold5" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>一天三次，每次一顆，建議飯後服用。 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#gold6" aria-expanded="false" aria-controls="gold6">
                            <div class="txt">
                                <span>Q <b>6</b></span>
                                <p>什麼是活性B群?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="gold6" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>Alinamin EX GOLD所含的Pyridoxal Phosphate Hydrate 是活性維生素 B<b>6</b>，能增進神經系統的健康及正常運作；所含的B<b>12</b>為甲基鈷胺素mecobalamin，是活性維生素B<b>12</b>，無須經過生物轉化過程*，能較快進入細胞發揮作用，改善及維持神經系統 (含末梢神經系統) 的健康。(*當非活性B<b>12</b>進入人體後，需要時間進行生物轉化成活性B<b>12</b>)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#gold7" aria-expanded="false" aria-controls="gold7">
                            <div class="txt">
                                <span>Q <b>7</b></span>
                                <p>什麼是天然型維生素E?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="gold7" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>維生素E含有不同化學結構，其中在體內主要由alpha-生育醇(α-tocopherol) 來發揮生理活性，而Alinamin EX GOLD成分即為d-α-Tocopherol Succinate，能緩解末梢血液循環不流暢所造成的肩頸酸痛、手腳發麻等症狀。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#gold8" aria-expanded="false" aria-controls="gold8">
                            <div class="txt">
                                <span>Q <b>8</b></span>
                                <p>葉酸的功用?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="gold8" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>葉酸能幫助及改善紅血球及神經元的形成。 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#gold9" aria-expanded="false" aria-controls="gold9">
                            <div class="txt">
                                <span>Q <b>9</b></span>
                                <p>為何不能一次吃三顆?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="gold9" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>因為金強效錠的活性成分，能讓身體有效吸收，所以建議一次一顆。 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qaBox">
                        <div class="question collapsed" data-toggle="collapse" data-target="#gold10" aria-expanded="false" aria-controls="gold10">
                            <div class="txt">
                                <span>Q <b>10</b></span>
                                <p>為何包裝不是玻璃罐裝?</p>
                            </div>
                            <!-- <i class="fas fa-plus"></i> -->
                        </div>
                        <div class="answer collapse" id="gold10" data-parent="#qa">
                            <div class="answerContent">
                                <i class="fas fa-caret-right"></i>
                                <div class="content">
                                    <p>避光作用，保持活性成分的功效。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ol class="tip m-t30">
                        衛部藥輸字第027584號   北市衛藥廣字第XXXXXXXXX號   C-APROM/TW/THI/0030 DEC 2020   本品為醫師藥師藥劑生指示藥品，使用前請詳閱說明書警語及注意事項
                    </ol>
                </div> 

            </div>
            
        </section>

        <?php require('footer.php'); ?>
    </div>
</body>

</html>
<script src="<?php echo $rootURL;?>scripts/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo $rootURL;?>scripts/global.js?t=0201"></script>
<script type="text/javascript" src="<?php echo $rootURL;?>scripts/index.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script>

<script>
var app = new Vue({
    el: '#app',
    data:{
        select: 'close',
        kind: 'all',
        kinds:{
            'all': '合利他命全產品',
            'a25': '愛 - A25',
            'plus': 'EX PLUS 強效錠',
            'gold': 'EX GOLD 金強效錠'
        }
    },
    methods:{
        changeKind: function(item){
            app.kind = item;
            if(item=="all"){
                sendEvent("Q&A_選單_合利他命全產品","Q&A_選單_合利他命全產品");
            }
            if(item=="a25"){
                sendEvent("Q&A_選單_A25","Q&A_選單_A25");
            }
            if(item=="plus"){
                sendEvent("Q&A_選單_EX PLUS","Q&A_選單_EX PLUS");
            }
            if(item=="gold"){
                sendEvent("Q&A_選單_EX GOLD","Q&A_選單_EX GOLD");
            }
            setTimeout(function(){
                prodSwipe();
            },50)
        },
        changeSelect: function(){

            if(app.select == 'close'){
                app.select = 'open';
            }
            else{
                app.select = 'close';
            }
        },
    },
    mounted: function(){
        prodSwipe();
    }   
})

function prodSwipe(){
    var storeSwiper = new Swiper('.swiperCompare',{
        slidesPerView: 'auto',
        observer: true,
        observeParents: true,   
        loop: ($(window).width()<=800)?true:false,     
        navigation: {
            nextEl: '.nextProd',
            prevEl: '.prevProd',
        },   
    })
    setTimeout(function(){$('.swiper-wrapper').css("transform","translate3d(0,0,0)")},50)
}
var gaArr={"all":"合利他命全產品","a25":"A25","plus":"EX PLUS","gold":"EX GOLD"};
$('.qaPage').on('click',".qaBox",function(){
    if($(this).find('.question').hasClass('collapsed')){
        console.log($(this).index());
        var _event="Q&A_"+gaArr[app.kind]+"_Q"+($(this).index()+1);
        sendEvent(_event,_event);
    }
})
$('.qaBox').on('show.bs.collapse', function () {
    if(app.kind == 'all'){
        if(!$('.qu1').hasClass('collapsed')){
            var id = $(this).find('.question').attr('data-target');
            if(id == '#cq1' || id == '#cq2' || id == '#cq3'){
                $('html,body').animate({scrollTop:$('.accordion').offset().top-200},500);
            }
        }
    }
})
</script>

