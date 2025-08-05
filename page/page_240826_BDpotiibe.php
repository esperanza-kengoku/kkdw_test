<!DOCTYPE html>
<html lang="ja">
<?php// include '../../php/head.php'; ?>
<?//=========↓↓↓↓スライド付きのhead↓↓↓↓=========//?>
<?php include '../../php/head_HallOfFame.php'; ?>

<style>
  .header {
    border-bottom: 0px;
  }

  .bg-firstPlace {
    background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgb(0 0 0)), url(https://official-page-images.s3.ap-northeast-1.amazonaws.com/chara_Info_Sample/images/modules/bg00001.png);
  }

  .bg-secondPlace {
    background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgb(0 0 0)), url(https://official-page-images.s3.ap-northeast-1.amazonaws.com/chara_Info_Sample/images/modules/00077.png);
  }

  .bg-thirdPlace {
    background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgb(0 0 0)), url(https://official-page-images.s3.ap-northeast-1.amazonaws.com/chara_Info_Sample/images/modules/00077.png);
  }

  .bg-position {
    background-size: 100%;
    background-position-y: 20%;
  }

  .flexbox_HF {
    padding: 10px;
  }

  .flexbox_HF2 {
    padding:5px 50px 55px 55px ;
  }

  .hallobFame_name {
    text-align: center;
    width: 50%;
  }

  .hallofFame_name img {
    margin: 0 auto;
  }

  .fs-name {
    font-size: 18px;
  }

  .coment {
    text-align: center;
    height: 30%;
  }

  .coment p {
    font-size: 16px;
    font-feature-settings: "palt";
    line-height: 1em;
    word-break: break-all;
    padding: 3%;
    top: 65%;
    left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
  }

  .wid30 {
    background-color: #000000;

    width: 30%;
    overflow: hidden;
    box-shadow: -8px -8px 6px -6px #000000 inset, 8px 8px 6px -6px #000000 inset, 0px 0px 0px 0px rgb(255 139 44), 0px 0px 0px 1px rgb(107 0 0), 0px 0px 0px 2px rgb(255 232 156);
  }

  .wid30-secondPlace {
    background-color: #000000;
    width: 30%;
    overflow: hidden;
    box-shadow: -8px -8px 6px -6px #000000 inset, 8px 8px 6px -6px #000000 inset, 0px 0px 0px 0px rgb(126 126 126), 0px 0px 0px 1px rgb(45 45 45), 0px 0px 0px 2px rgb(209 209 209);
  }

  .wid30-thirdPlace {
    background-color: #000000;
    width: 30%;
    overflow: hidden;
    box-shadow: -8px -8px 6px -6px #000000 inset, 8px 8px 6px -6px #000000 inset, 0px 0px 0px 0px rgb(255 44 44), 0px 0px 0px 1px rgb(107 0 0), 0px 0px 0px 2px rgb(255, 147, 140);
  }

  .fr-hf {
    bottom: 0px;
  }

  .slick-dots li.slick-active button:before {
    opacity: 1;
    color: rgb(24, 0, 245);
    text-shadow: 0 0 0.9em #ffffff, 0 0 0.9em #ffffff, 0 0 0.9em #ffffff, 0 0 0.9em #ffffff;
  }

  .slick-dots li button:before {
    opacity: 1;
    color: rgb(255, 255, 255);
  }

  .slick-dots li{
    margin: 0px;
    width: 10px;
  }

  .secondPlace-hf {
    filter: grayscale(1);
  }

  .thirdPlace-hf{
    filter: hue-rotate(330deg);
  }

.fs16 {
  font-size: 16px;
}



</style>

<?php
    $avatarList = array();
;?>

<body>


<div id="container">
    <div id="bridge-wrapper">
      <div id="content" class="clearfix">
        <div id="contentWrapper" class="column0">


          <div id="mainContent">
            <div id="news" class="newsDetail">

              <div class="news-text box-dent">


                <div class="outline-2">
                  <div id="image_padding">
                    <!--バナー表示　画像できたら入れる-->
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240825_ban_BDpotiibe_001.png" width="100%" alt="">
                  </div>

                  <div class="index-1">制圧イベント!! 【1分最強決定戦】開催!!</div>
                   <!--   -->  
                   <div class="frame-1 mt-20 mb-20">
                    <p class="index-3 fs16 fw-b"> 制圧開催期間 </p>
                    <p class="con-2"> 8月26日12:00～9月2日23:59 </p>
                    <p class="index-3 fs16 fw-b"> 交換所期間</p>
                    <p class="con-2"> 8月26日12:00～9月3日23:59</p>
                    <p class="con-2"> <span class="yellow"> 9月3日00:00～9月3日23:59は<span class="red">革命の記憶の交換のみが行える期間</span>となります。<br>制圧への挑戦は行えませんのでご注意ください。</p></span>
                  </div>

                
                   <div class="tabbox mt-20">
 

                     <input type="radio" name="tabset" id="tabchecksilver3"checked>
                    <label for="tabchecksilver3" class="tab1">イベント概要</label>

                       <div class="tabsilver" id="tabsilver3">


                        <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240604_page_kashinkai_003.png" width="100%" alt="">
                       <div class="frame-1 mt-20 mb-20">
                    <p class="fs16 fw-b ta-c">【イベントの進め方】</p>
                      <p class="hr_grd2"></p>
                    <ol class="notes-1">
                      <li>イベント制圧「1分最強決定戦」を進めろ!!<br>制圧をクリアすることで<span class="yellow">革命の記憶とランキングpt</span>が入手できる!!<br>
                      <li>特攻キャラや装備を編成すると編成したアイテムに応じて獲得できる<span class="fg-Gold fs14">革命の記憶やランキングptの獲得数</span>が増加！<br>
                      <li>さらに特攻アイテムを使用する事で<span class="fg-Gold fs14">特別なフロアに挑戦したりランキングptの獲得数を一定時間増加</span>させる事が出来る!!<br>
                       <p class="con-2"> <li><span class="yellow">  攻略アイテムにつきまして<br><span class="red">ケンビタ、極MAP、入場券の次回のイベントの持ち越しはできません<br></span>8月26日12:00～9月2日23:59の期間内にご使用をお願いいたします。
                          <br>攻略アイテムの期間を過ぎた場合の補填など対応出来ない為ご了承ください。</p></span>
                      <li>闘気（制圧）のアイテムにつきまして<br><span class="red">次回のイベントの持ち越しはできません</span>ご了承ください。<br>
                      
                       
                   </li>
                  
                    </ol>
                  </div>
                          
                        <table id="Table01" class="mt-20">
                        <tbody>
                         
                          </tbody>
                      </table>                    
                    </div>
                       <?//=========タブ3END=========//?>
                       
                     
		          <input type="radio" name="tabset" id="tabchecksilver2"> 
                    <label for="tabchecksilver2" class="tab1">特攻キャラ情報</label>

                    <div class="tabsilver" id="tabsilver2">
                      <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240825_page_BDpotiibe_001.png" width="100%" alt="">
                        <table id="Table01" class="mt-20">
                        <tbody>
                          <tr>
                            <th style="width:20%;">特攻強度</th>
                            <th style="width:20%;">アイコン</th>
                            <th style="width:60%;">内容</th>
                          </tr>
                          <tr>
                          <td valign="middle" style="vertical-align: middle;">強特攻<br>キャラ</td>
                            <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00169.png" width="100%" alt=""></td>
                            <td valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;"><span class="txtBlue">朝倉未来</span><br>パーティー編成時、<br>獲得できるランキングpt・<br>革命の記憶が<span class="fg-Gold">５倍!!</span><br><br>
                              <span class="txtYellow">リーダスキルが制圧イベント限定特攻リーダスキルに変更!!</span><br><span class="fg-Gold">特攻リーダスキル：敵全体に柔属性1000％ダメージ</span></p>
                            </td>
                          </tr>
                          <tr>
                            <td valign="middle" style="vertical-align: middle;">弱特攻<br>キャラ</td>
                            <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00177.png" width="100%" alt=""></td>
                            <td valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;"><span class="txtGreen">朝倉海</span><br>パーティー編成時、<br>獲得できるランキングpt・<br>革命の記憶が<span class="txtYellow">３倍!!</span><br></p>
                              <span class="txtYellow">リーダスキルが制圧イベント限定特攻リーダスキルに変更!!</span><br><span class="fg-Gold">特攻リーダスキル：敵全体に技属性1000％ダメージ</span></p>
                            </td>
                          <tr>
                          

                          </tbody>
                      </table>
                      <br>
                     <div class="Att3">
                     <p class="Att4 ta-c">注意事項</p>
                    <ol class="notes-1">
                      <li>上記の特攻倍率は★5時の倍率になります。レアリティによって増加倍率は異なります。<br>
                      <li>リーダー編成だけでなくパーティー編成時・ダチ設定時にも特攻効果は発生いたします。
                      </ol>
                    </div>
                  </div>
                 
                    
                    <?//=========タブ2END=========//?>
                     <input type="radio" name="tabset" id="tabchecksilver4" > 
                    <label for="tabchecksilver4" class="tab1">特攻装備情報</label>

                    <div class="tabsilver" id="tabsilver4">
                      <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240825_page_BDpotiibe_002.png" width="100%" alt="">
                        <table id="Table01" class="mt-20">
                        <tbody>
                          <tr>
                            <th style="width:20%;">特攻強度</th>
                            <th style="width:20%;">アイコン</th>
                            <th style="width:60%;">内容</th>
                          </tr>
                          <tr>
                          <td valign="middle" style="vertical-align: middle;">強特攻<br>装備</td>
                            <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/eq_00080.png" width="100%" alt=""></td>
                            <td valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;"><span class="txtRed">高級懐中時計【密会の夜】</span><br>パーティー編成時、獲得できるランキングptが<span class="fg-Gold">５倍!!</span><br></p>
                            </td>
                          </tr>
                          <tr>
                            <td valign="middle" style="vertical-align: middle;">弱特攻<br>装備</td>
                            <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/eq_00081.png" width="100%" alt=""></td>
                            <td valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;"><span class="txtYellow">高級懐中時計【族の集会】</span><br>パーティー編成時、獲得できるランキングptが<span class="txtYellow">３倍!!</span><br></p>
                            </td>


                          </tbody>
                      </table>

                      <div class="Att3">
                     <p class="Att4 ta-c">注意事項</p>
                    <ol class="notes-1">
                      <li>本イベントでの特攻装備は<span class="txtYellow">ランキングpt獲得数のみ増加いたします</span>、革命の記憶獲得数は増加いたしませんのでご注意ください。<br>
                      <li>リーダー編成だけでなくパーティー編成時にも特攻効果は発生いたします。
                      </ol>
                    </div>
                    </div>
                    
                    <?//=========タブ2END=========//?>
              

                        </div><!-- .tabbox -->
                        </div><!-- .outline -->
                        </div><!-- .news-text -->
                        <div class="backbtn01">
                  <div class="pb-30 pl-40">
                    <?php include '../../php/backbutton.php'; ?>
                  </div>
                </div>

                        </div><!-- .news -->
                        </div><!-- .mainContent -->
                         </div><!-- .contentWrapper -->
                        </div><!-- .content -->
                        </div><!-- .bridge-wrapper -->
                         </div><!-- .container -->

          <script>
    $('.slickscroll').slick({
      autoplat: true, dots: true,
    });

    $('.multiple-items').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
});

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  dots: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  centerMode: true,
  focusOnSelect: true
});
	
  </script>


</body>

</html>