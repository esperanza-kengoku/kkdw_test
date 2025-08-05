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
    $avatarList = array("07141","08141","01291","01292","01293","01294","01295","01296","01297","01298","01299","01300","02291","02292","02293","02294","02295","02296","02297","02298","02299","02300","03045","04045","05044","06044");
;?>

<body>

  <div id="container">


    <!--編集箇所-->
    <?php
    $name_title = "剛鬼の興";
    $ban_image ="/images/Banner/league_banner_0050.png"; 
    $top_image ="/images/NewInfo/240917_league_topimage_001.png"; 
    $times_entry ="9月17日 12:00～9月20日 12:00"; 
    $times_battle ="9月21日 00:00～9月27日 23:59"; 
    ?>


    <div id="bridge-wrapper">
      <div id="content" class="clearfix">

        <div id="contentWrapper" class="column0">
          <div id="mainContent">
            <div id="news" class="newsDetail">

              <div class="news-text box-dent">
                <div class="outline-2">

               
                  <div id="image_padding">
                    <!--バナー表示-->
                    <img src="<?php include '../../php/masterdomain.php'; ?><?php echo $ban_image ?>" width="100%" alt="">
                  </div>

                  <div class="index-1">
                    <?php echo $name_title ?>開催!!
                  </div><br>
                  <img src="<?php include '../../php/masterdomain.php'; ?><?php echo $top_image ?>" width="100%" alt="">



                    <!--報酬・ルール・新ルール「剛属性限定」・ブロック・リーグ概要-->
       <div class="tabbox mt-20">
        <?//=========タブ始まり=========//?>

        <input type="radio" name="tabset" id="tabchecksilver1" checked>
            <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
            <label for="tabchecksilver1" class="tab1">報酬</label>
                <div class="tabsilver" id="tabsilver1">
                <div class="Att3">
                    <p class="Att4 ta-c">▼新アバター公開中！▼</p>
                  </div>
                    <div class="slider">
                      <ul class="slider-nav">
                     <?//=========↓↓↓↓配列内にあるアバターID分だけループして表示する↓↓↓↓=========//?>
                     <?php foreach($avatarList as $img):?>
                        <li>
                          <div class="flexbox flexbox_HF">
                            <div class="space-reset shadow-drop" style="transform: scale(1)">

                            
                              <?//=========↓↓↓↓アバター画像↓↓↓↓=========//?>
                                <img src="<?php include '../../php/masterdomain.php'; ?>/images/AvatarIcon/<?php echo $img ?>.png">
                            </div>
                          </div>
                        </li>
                        <?php endforeach;?>

                      </ul>
                      </div>
                      <div class="slider">
                      <ul class="slider-for">
                     <?//=========↓↓↓↓配列内にあるアバターID分だけループして表示する↓↓↓↓=========//?>
                     <?php foreach($avatarList as $img):?>
                        <li>
                          <div class="flexbox flexbox_HF2">
                            <div class="space-reset shadow-drop" style="transform: scale(1)">

                            
                              <?//=========↓↓↓↓アバター画像↓↓↓↓=========//?>
                                <img src="<?php include '../../php/masterdomain.php'; ?>/images/AvatarIcon/<?php echo $img ?>.png">
                            </div>
                          </div>
                        </li>
                        <?php endforeach;?>

                      </ul>
                    </div>

                    <p class="index-3">
                    更にSリーグ連合から<span class="txtYellow">Bリーグ優勝連合</span>まで
                    <span class="red">大会限定アバター</span>を贈呈！<br>上位にいくにつれ、豪華になっていくぞ！<br>
                    <ol class="notes-1">
                    <li>大会報酬アバター内容</li>
                      　Sリーグ<br>
                    　　<span class="red">　　１位</span>　服/<span class="txtYellow">髪型（全色）</span>/セリフ/ミニキャラ<br>
                      　　<span class="red">　　２位</span>　服/<span class="txtYellow">髪型（５色）</span>/セリフ/ミニキャラ<br>
                      　　<span class="red">　　３位</span>　服/<span class="txtYellow">髪型（３色）</span>/セリフ/ミニキャラ<br>
                      　　<span class="red">４～８位</span>　服/<span class="txtYellow">髪型（１色）</span>/セリフ/ミニキャラ<br>
                      　Aリーグ<br>
                      　　<span class="red">１～８位</span>　服/セリフ/ミニキャラ<br>
                      　Bリーグ<br>
                    　　<span class="red">　　１位</span>　セリフ/ミニキャラ<br>
                      　　
                    </ol>
                  </p>


                </div>
        
        <input type="radio" name="tabset" id="tabchecksilver2">
            <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
            <label for="tabchecksilver2" class="tab1">ルール</label>
                <div class="tabsilver" id="tabsilver2">
              
ルールが入るよ

                </div>

            <input type="radio" name="tabset" id="tabchecksilver3">
            <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
            <label for="tabchecksilver3" class="tab1"><span class="txtRed">限定ルール「剛属性」</span></label>
                <div class="tabsilver" id="tabsilver3">
                <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>属性縛りについて</li>
                       エントリーの際は<span class="txtYellow">公式デッキを剛属性のみに変えて</span>エントリーしてください。<br>
                       リーグ期間中は、公式デッキの編成を同属性以外に変えることはできません。
                      <li>大会報酬アバターの髪型について</li>
                      大会終了時に自動付与される髪型は<span class="txtYellow">１色のみ</span>となります。<br>
                      全色/５色/３色の他の色につきましては、後日別途付与いたします。
                      <li>開催期間や内容は予告なく変更する場合がございます。</li>
                    </ol>
                  </div>
                </div>

                <input type="radio" name="tabset" id="tabchecksilver4">
            <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
            <label for="tabchecksilver4" class="tab1">ブロック</label>
                <div class="tabsilver" id="tabsilver4">
                <p class="index-3">
                   大会ブロック<br>
                      <span class="red">Sリーグ</span>　6ブロック<br>
                      <span class="red">Aリーグ</span>　8ブロック<br>
                      <span class="red">Bリーグ</span>　16ブロック<br>
                      <span class="red">Cリーグ</span>　32ブロック<br>
                      <span class="red">Dリーグ</span>　64ブロック<br>
                      <span class="red"> EXリーグ</span>　エントリー数により変動
                    </p><br>

                </div>

                <input type="radio" name="tabset" id="tabchecksilver5">
            <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
            <label for="tabchecksilver5" class="tab1">リーグ基本概要</label>
                <div class="tabsilver" id="tabsilver5">
                <main class="main">

<div class="qa inner">
  <!-- キャラ -->
  <div class="qa-heading"><span>『リーグ』イベントとは……？</span></div>
  <div class="qa__content-wrapper">
      <div class="qa__content">
          <p class="question-txt">イベント概要</p>
          <p class="answer-txt">リーグイベントは、拳極最強のユーザーや連合を決める公式戦の大会となります<br><br>
          対戦日になると実力の近いユーザーとの対戦が始まり、勝敗によってリーグ内順位が確定します<br><br>
          上位に入賞することでリーグ限定アバターや称号など、豪華報酬を獲得することができます<br><br>
          </p>
      </div>
      <div class="qa__content">
          <p class="question-txt">リーグ手順①：エントリー</p>
          <p class="answer-txt">
              大会が開催されると、マイページのリーグボタンに参加できるイベントバナーが出現します<br><br>
              個人・連合で大会の内容は異なりますが、バナーの先でリーグの開催概要を確認する事ができます<br><br>
              TOPページのエントリーボタンを押下する事でエントリー完了となります。<br><br>
          </p>
      </div>
      <div class="qa__content">
          <p class="question-txt">リーグ手順②：対戦開始日・対戦相手の確認</p>
          <p class="answer-txt">
              エントリーが完了すると、対戦開始日の前日に集計が行われます<br>
              集計が完了すると、対戦表が公開されます。翌日から同リーグのユーザーや連合と対戦を行います<br>
          </p>
      </div>
      <div class="qa__content">
          <p class="question-txt">リーグ手順③：対戦開始</p>
          <p class="answer-txt">
              個人の場合はユーザー対戦にて、連合の場合は抗争にて対戦となります。それぞれの対戦方法については別枠にて記載いたします<br><br>
              リーグは最大8名となりますので、7日間開催されます。4名の場合は3日間の開催です<br><br>
          </p>
      </div>
      <div class="qa__content">
          <p class="question-txt">リーグ手順④：結果発表、報酬付与</p>
          <p class="answer-txt">
              リーグ内で順位が確定すると、自動で報酬が付与されます。最速で翌日となりますが、お時間がかかる場合もございますのでご了承ください<br>
              リーグの結果は一定期間閲覧することが可能です<br>
          </p>
      </div>

      <!-- イベントの種類 -->
      <div class="qa-heading"><span>個人リーグのルール</span></div>
      <div class="qa__content">
          <p class="question-txt">対戦方法</p>
          <p class="answer-txt">
              対戦はユーザー対戦となります。お互いに３回ずつ対戦を仕掛け、勝利した回数が多い方が勝ちとなります<br>
              対戦日になるとイベントTOPページが対戦仕様に変わります。イベントTOPページから対戦を行うことができます<br>
          </p>
      </div>
      <div class="qa__content">
          <p class="question-txt">注意点</p>
          <p class="answer-txt">
              一回も対戦を仕掛けなかった場合、自動的に負けとなります。<br><br>
              対戦を仕掛けた側が３回負けていても、相手からの対戦がない場合は、仕掛けた側の勝利です<br><br>
              勝ち点方式となっておりますため、勝利数に応じて勝ち点が加算されます。<br><br>
              勝ち：３点<br><br>
              引分：１点<br><br>
              負け：０点<br><br>
              勝ち点が多い方がリーグ優勝となります。<br><br>
          </p>
      </div>
      <div class="qa__content">
          <p class="question-txt">同率順位の場合の優先度</p>
          <p class="answer-txt">
              勝ち点が同じで同率順位となった場合、以下の優先度で勝者を決定いたします。<br><br>
              1.対戦での勝利回数が多い方<br><br>
              2.同率ユーザーどうしの対戦で勝利している方<br><br>
              3.総合力が高い方<br><br>
              １位であっても、上記理由で同率であった場合は２位になる場合がございます。ご注意ください<br><br>

          </p>
      </div>

      <!-- イベントの詳細 -->
      <div class="qa-heading"><span>連合リーグのルール</span></div>
      <div class="qa__content">
          <p class="question-txt">対戦方法</p>
          <p class="answer-txt">
              22：00台の抗争が公式戦となります。大会の対戦表が確定すると、22:00台の抗争は全てリーグとなります<br><br>
              通常の抗争と対戦方法は変わりません。勝利した方がリーグでも勝ち点を入手できます。<br><br>
          </p>
      </div>
      <div class="qa__content">
          <p class="question-txt">注意点</p>
          <p class="answer-txt">
              どちらも抗争を仕掛けなかった場合、或いは決着がつかなかった場合は引き分けとなります。<br><br>
              勝ち点方式となっておりますため、勝利数に応じて勝ち点が加算されます。<br><br>
              勝ち：３点<br><br>
              引分：１点<br><br>
              負け：０点<br><br>
              勝ち点が多い方がリーグ優勝となります。<br><br>
          </p>
      </div>
      <div class="qa__content">
          <p class="question-txt">同率順位の場合の優先度</p>
          <p class="answer-txt">
              勝ち点が同じで同率順位となった場合、以下の優先度で勝者を決定いたします。<br><br>
              1.対戦での勝利回数が多い方<br><br>
              2.同率連合どうしの対戦で勝利している方<br><br>
              3.大会中、抗争参加人数が多い方<br><br>
              4.全員の総合力の合算が高い方<br><br>
              １位であっても、上記理由で同率であった場合は２位になる場合がございます。ご注意ください<br><br>

          </p>
      </div>
      <div class="qa__content">
          <p class="question-txt">※注意！※ペナルティについて</p>
          <p class="answer-txt">
              連合リーグエントリーが完了した時点からイベント終了までの間に連合に新メンバーの加入あった場合、ペナルティ対象となります。<br><br>
              連合リーグは連合メンバーの総合力を元に対戦表を決定するため、公平性の観点からとなります。万が一加入があった場合は「連合メンバー全員」が報酬獲得権利を失いますのでご了承ください。<br><br>

          </p>
      </div>
  </div>
</div>
                </div>



                    

<!--
                  <div class="index-2">新仕様<span class="red">『属性縛り』</span></div>
                  <div style="    background-color: rgba(0, 0, 0, 0.6);">
                  <p class="index-3"><span class="txtYellow">公式デッキの属性を統一して対戦する</span>新リーグ！<br>
                    普段とは違う編成で挑むため<span class="txtYellow">新たな覇者が誕生するかも！！</span><br>
                    <p class="index-3">今回の属性は<span class="red">剛属性!!</span><br>
                    </div><br>
                
                     -->

                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>大会報酬アバターの髪型について</li>
                      大会終了時に自動付与される髪型は<span class="txtYellow">１色のみ</span>となります。<br>
                      全色/５色/３色の他の色につきましては、後日別途付与いたします。
                      <li>開催期間や内容は予告なく変更する場合がございます。</li>
                    </ol>
                  </div>

                  <div class="backbtn01 pb-35 pl-40">
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

<?php include '../../php/backbutton.php'; ?>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="../../css/qa/script.js"></script>


</body>

</html>