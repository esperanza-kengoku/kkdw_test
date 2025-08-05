<!DOCTYPE html>
<html lang="ja">
<?php // include '../../php/head.php'; ?>
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

<?php
$List = array("001","002","003","004","005") ;
;?>

</style>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>襲来イベント説明</title>
    <meta name=”robots” content=”noindex”>


    <link rel="stylesheet" href="../css/flexslider.css" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../../js/jquery.flexslider.js"></script>


    <!-- original -->
    <link rel="stylesheet" href="../../css/qa/reset.css">
    <link rel="stylesheet" href="../../css/qa/style.css">

    <link rel="stylesheet" type="text/css" href="../../css/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/slick/slick-theme.css"/>
    <script type="text/javascript" src="../../css/slick/slick.js"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/b67fa55137.js" crossorigin="anonymous"></script>
</head>


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
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250601_ban_GarageCP.png" width="100%" alt="">
                  </div>
 
<div class="slider">
                      <ul class="slider-for">
                     <?//=========↓↓↓↓配列内にあるアバターID分だけループして表示する↓↓↓↓=========//?>
                     <?php foreach($List as $img):?>
                        <li>
                          <div class="flexbox flexbox_HF2" style="padding:0px;">
                            <div class="space-reset shadow-drop" style="transform: scale(1)">

                            
                              <?//=========↓↓↓↓アバター画像↓↓↓↓=========//?>
                                <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250601_tips_GarageCP_<?php echo $img ?>.png"width="120%">
                            </div>
                          </div>
                        </li>
                        <?php endforeach;?>

                         <?php foreach($List1 as $img):?>
                        <li>
                          <div class="flexbox flexbox_HF2" style="padding:0px;">
                            <div class="space-reset shadow-drop" style="transform: scale(1)">

                            
                              <?//=========↓↓↓↓アバター画像↓↓↓↓=========//?>
                                <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250601_tips_GarageCP_<?php echo $img ?>.png"width="120%">
                            </div>
                          </div>
                        </li>
                        <?php endforeach;?>

                      </ul>

               


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
</div>
                 </div><!-- .outline -->
                </div><!-- .news-text -->



     <main class="main">

          <div class="qa inner">
            <!-- キャラ -->
            <div class="qa-heading"><span>ガレージ機能とは……？</span></div>
            <div class="qa__content-wrapper">
                <div class="qa__content">
                    <p class="question-txt">基本概要</p>
                    <p class="answer-txt">
                    ガレージ機能は、車や単車を入手し、装備することができる機能です<br><br>
                    車や単車に対し、パーツも装備することができます<br><br>
                    車、単車、パーツは全て強化することができます。強化には【特殊合金】というアイテムが必要です<br><br>
                    特殊合金はガレージガチャ、または各種イベントにて入手できます<br><br>
                    車、単車、パーツはキャラと同じく、<span class="yellow">全て１種類しか所持</span>できません<br><br>
                    既に所持している車、単車、パーツをガチャや交換所で入手した場合、<span class="yellow">特殊合金に自動的に変換</span>されます。ご注意ください<br><br>
                    パーツを変更した場合、<span class="yellow">背景だけは見た目に反映されますが、その他パーツは変更しても見た目は変わりません</span>。ご注意ください<br><br>
                    ガレージランキングは、<span class="yellow">愛車の総合力のみ</span>のランキングです。キャラの総合力は含まれません。ご注意ください<br><br>
                    その他のユーザーのガレージについても、相手のプロフ→ガレージボタンから確認することができます<br><br>
                    </p>
                </div>
                <div class="qa__content">
                    <p class="question-txt">愛車の入手方法</p>
                    <p class="answer-txt">
                        <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250601_tips_GarageCP_002.png" width="100%" alt="">
                        overdriveガチャ：ガレージ専用のガチャです。1枠確定で愛車かパーツが入手できます<br><br>
                        イベント：襲来イベントにて、限定パーツが入手できます<br><br>
                        今後もイベントやガチャ更新などで入手できるようコンテンツを展開して参ります<br><br>
                    </p>
                </div>
                <div class="qa__content">
                    <p class="question-txt">愛車の強化方法</p>
                    <p class="answer-txt">
                        <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250601_tips_GarageCP_003.png" width="100%" alt="">
                        特殊合金を集める：まずはガチャや交換所などで特殊合金を集めましょう。特殊合金と札で強化することができます<br><br>
                        ガレージの強化ボタンを押す：装備←→強化をボタンで切り替えることができます。強化を押す→アイコン選択→強化画面へ進むことができます<br><br>
                        強化成功：強化が成功するとステータスがアップします<br><br>
                        <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250601_tips_GarageCP_006.png" width="100%" alt="">
                        <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250601_tips_GarageCP_007.png" width="100%" alt="">
                    </p>
                </div>
                <div class="qa__content">
                    <p class="question-txt">総合力の反映について</p>
                    <p class="answer-txt">
                        <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250601_tips_GarageCP_003.png" width="100%" alt="">
                        <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250601_tips_GarageCP_004.png" width="100%" alt="">
                        1.愛車の総合力は、戦闘開始時にキャラに分配されて加算されます<br><br>
                        2.愛車の攻撃力が10,000であった場合、5分割されて+2,000ずつ攻撃力が加算されます<br><br>
                        3.その他のステータスについても同様です。体力、防御力、素早さなども全て5分割で分配して加算されます<br><br>
                        4.<span class="red">※必ずご確認ください!!※</span> バランスの観点から、パーティを1人に編成したとしても、愛車の総合力は5分割で反映されます。愛車の攻撃力が10,000であった場合、パーティのキャラが１体でも+2,000攻撃力が加算されます<br><br>
                    </p>
                </div>
                <div class="qa__content">
                    <p class="question-txt">先攻・後攻への影響について</p>
                    <p class="answer-txt">
                        現在総合力が高い方が先攻となりますが、<span class="yellow">愛車の総合力も考慮されます</span>。キャラ総合力+愛車総合力が高い方が先攻になりますので必ずご確認ください<br><br>
                    </p>
                </div>
                <div class="qa__content">
                    <p class="question-txt">愛車強化ランキングについて</p>
                    <p class="answer-txt">
                        <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250601_tips_GarageCP_005.png" width="100%" alt="">
                        マイページ→ランキング→ガレージタブ→愛車ランキングにて、愛車のランキングが確認できます。このランキングは<span class="yellow">愛車の総合力のみのランキングです</span>。キャラ総合力は含まれませんので必ずご確認ください<br><br>
                    </p>
                </div>

                <!-- イベントの種類 -->
                <div class="qa-heading"><span>その他特筆事項</span></div>
                <div class="qa__content">
                    <p class="question-txt">反映されるバトルについて</p>
                    <p class="answer-txt">
                        愛車の強化、総合力は対戦・抗争・制圧・襲来など、<span class="yellow">全てのバトルに反映されます</span>。絆技は襲来には反映されませんが、愛車強化やパーツスキルは襲来イベントにも反映されます<br>
                    </p>
                </div>
                <div class="qa__content">
                    <p class="question-txt">パーツスキルについて</p>
                    <p class="answer-txt">
                        1.★3以上のパーツはスキルを所持しております。装備すれば戦闘開始時にスキルを発動します<br><br>
                        2.スキル発動順番はリーダー ＞ 装備 ＞ 絆技 ＞ パーツスキルの順番です。上位ユーザーさまには非常に重要な情報となりますので必ずご確認ください<br><br>
                        3.今後、パーツの一部にて【抗争スキル】が実装されます。相手の士気を削る、回復時間を遅らせる、士気回復薬を４個以上所持できるなど、激アツスキルが実装されます<br><br>
                    </p>
                </div>
                <div class="qa__content">
                    <p class="question-txt">パーツスキルの強化方法について</p>
                    <p class="answer-txt">
                        1.パーツには鍛技の概念がございません。<span class="yellow">一定の強化値以上でスキルが強化</span>されます<br><br>
                        2.未発動のスキル、強化すると使えるようになるスキルは、ガレージTOPのスキル一覧から確認することができます<br><br>
                         <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250601_tips_GarageCP_008.png" width="100%" alt="">
                        <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250601_tips_GarageCP_009.png" width="100%" alt="">

                    </p>
                </div>




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
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="../../css/qa/script.js"></script>


</body>

</html>