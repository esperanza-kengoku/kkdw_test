<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>
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
    $avatarList = array("07081","07082");
;?>

<body>

  <div id="container">


    <!--編集箇所-->
    <?php
    $name_title = "拳極×BREAKINGDOWNコラボマッチ";
    $ban_image ="/images/Banner/league_banner_0017.png"; 
    $top_image ="/images/NewInfo/240820_league_topimage_003.png"; 
    $times_entry ="8月20日 12:00～8月23日 12:00"; 
    $times_battle ="8月24日 00:00～8月30日 23:59"; 
    ?>
<style>
  


.fs16 {
  font-size: 16px;
}

</style>

<body>

<div id="bridge-wrapper">
      <div id="content" class="clearfix">

        <div id="contentWrapper" class="column0">
          <div id="mainContent">
            <div id="news" class="newsDetail">

              <div class="news-text box-dent">
                <div class="outline-2">


                  <div id="image_padding">
                    <div align="center">
                      <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240902_ban_NewCharacter_002.png"
                        alt="BDCPバナー" width="100%" class="header_img">
                    </div>
                  </div>

                  <div class="index-1" id="releasegacha">お待たせいたしました!!<br> 武居由樹がついに拳極に参戦!!</div>

                  <br>
                  <div class="tabbox mt-20">
                    <?//=========タブ始まり=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver1"checked>
                    <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                    <label for="tabchecksilver1" class="tab1">第１弾</label>

                   <div class="tabsilver" id="tabsilver1">
                    <div class="index-2">開催期間</div>
                    <p class="con-2">9/1 12:00 ～ 9/15 12:00まで</p>
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240902_page_NewCharacter.png"
                        alt="BD01" width="100%" class="header_img">
                    <p class="con-2 ta-c">コラボ期間限定!! 武居由樹がキャラとして拳極に登場!!</p>
                    <p class="con-2 ta-c">最強の状態異常スキル、足止を使える上、２種類のスキルを兼ね備えた最強アタッカー!! 期間を過ぎると入手不可能!! 必ず仲間にしろ!!</p>
                    

                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>武居由樹は期間限定です。魂も含め、コラボ期間しか入手できません。ご注意ください</li>
                    <li class="txtRed">※コラボ期間終了後、入手できないことに対するクレームを多く頂いておりますが、ご案内の通り期間限定となりますので必ずご確認をお願いいたします。</li>
                    </ol>
                  </div>


 
                    </div>
                    <?//=========タブ2END=========//?>
                    
                    <input type="radio" name="tabset" id="tabchecksilver2">
                    <label for="tabchecksilver2" class="tab1">第2弾</label>

                    <div class="tabsilver" id="tabsilver2">
                    <div class="index-2">詳細公開</div>
                    <p class="con-2">9/3  </p>
                    <p class="con-2 ta-c">
                    武居選手の初世界タイトル防衛戦を徹底応援！<br>武居選手が勝利した場合、全ユーザー様に5,000極石をプレゼント！<br>
                    みんなで武居選手を応援しよう!!
                      <br>
                      </p>
                      
                     <p class="con-2 ta-c"> 【試合詳細】 </p>
                     <p class="con-2 ta-c">
NTTドコモ Presents Lemino BOXING ダブル世界タイトルマッチ<br>
2024年9月3日（火）有明アリーナ<br>
<br>
<br>
メイン：世界スーパーバンタム級4団体統一世界王者防衛戦12回戦<br>
井上 尚弥（WBA・WBC・IBF・WBO世界スーパーバンタム級王者）vs.テレンス・ジョン・ドヘニー（WBO世界スーパーバンタム級2位）<br>
<br><br>
セミファイナル：WBO世界バンタム級タイトルマッチ12回戦<br>
武居 由樹（WBO世界バンタム級チャンピオン）vs.比嘉 大吾（同級1位）<br><br>
</p>

                    </div>
                    <?//=========タブ2END=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver3">
                    <label for="tabchecksilver3" class="tab1">第３弾</label>

                    <div class="tabsilver" id="tabsilver3">
                    <div class="index-2">開催期間</div>
                    <p class="con-2">詳細は後日公開！</p>

                    </div>
                    <?//=========タブ3END=========//?>

                  </div>
                  <?//=========tabbox タブ終わり=========//?>


                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>内容は予告なく変更する場合がございます。</li>
                      <li>今後も利便性アップの為の改修は本ページにて告知させて頂きます。</li>
                    </ol>
                  </div>

                  <div class="backbtn01">
                    <div class="pb-30 pl-40">
                      <?php include '../../php/backbutton.php'; ?>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>

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
  </div>

</body>

</html>