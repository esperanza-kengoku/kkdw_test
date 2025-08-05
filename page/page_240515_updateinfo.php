<!DOCTYPE html>
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
  
  <style>
.txtWhite	{ color:#ffffff !important;}
.txtBlack	{ color:#333333 !important;}
.txtRed		{ color:#ff2e2e !important;}
.txtBlue	{ color:#009cff !important;}
.txtOrange	{ color:#ff8a00 !important;}
.txtOrange2	{ color:#ffae00 !important;}
.txtYellow	{ color:#ffff00 !important;}
.txtYellow2	{ color:#ffff99 !important;}
.txtGreen	{ color:#71da00 !important;}
.txtPurple	{ color:#a859df !important;}
.txtPurple2	{ color:#ff5ebd !important;}
  </style>
</head>
<?php include '../../php/head.php'; ?>
<body>

     <main class="main">
     <div id="image_padding">
    <!--バナー表示　画像できたら入れる-->
    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240515_ban_info001.png" width="100%" alt="">
</div>

          <div class="qa inner">
            <!-- キャラ -->
            <div class="qa-heading fs-14"><span>新しいパーティ編成について</span></div>
            <div class="qa__content-wrapper">
                    <p class="question-txt">装備も同時にパーティに保存できる!!</p>
                    <p class="answer-txt">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240510_page_party002.png" width="100%" alt="">    
                    <br><br>
                    「特攻装備を毎回付け替えるのが大変——！」のご要望にお応えする新機能となります<br><br>
                    パーティ毎に装備も保存するよう修正し、襲来の前衛・後衛もパーティ編成から行えるようになりました<br><br>
                    さらにパーティ10まで編成可能な為、キャラは同じで装備だけ付け替えて色々な編成を試したりと利便性が格段に向上します<br><br>
                    <br><br>
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240510_page_party003.png" width="100%" alt="">    


                <!-- イベントの詳細 -->
                <div class="qa-heading fs-14"><span>パーティ編成の注意点</span></div>
                <div class="qa__content">
                    <p class="question-txt">1.襲来「前衛」で使っているキャラは襲来「後衛」では編成できない</p>
                    <p class="answer-txt">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240510_page_party004.png" width="100%" alt="">
                        今回の改修でパーティ編成から襲来編成が行えるようになりましたが、パーティ毎に設定をするため、前衛のパーティを後衛に設定しようとする操作が可能となってしまいます。<br><br>
                        また、前衛にいるキャラが編成されているパーティも後衛に編成できませんので、エラーのご案内はさせて頂いておりますが、少々わかりにくくなっております。ご注意ください。<br><br><br>
                        例：<br>
                        パーティ1：上谷・荒谷・柿原・ノア・サエコ ★前衛<br><br>
                        パーティ2：上谷・カリラ・芹澤・碓氷・榊<br>→<span class="txtYellow">上谷</span>が襲来前衛に編成されているので襲来後衛には設定できない<br><br>
                        パーティ3：郡上・カリラ・芹澤・碓氷・榊<br>→<span class="txtYellow">誰も重複していないので襲来後衛に設定可能</span><br><br>
                    </p>
                </div>
                <div class="qa__content">
                    <p class="question-txt">2.キャラ装備の項目から変更できなくなっている</p>
                    <p class="answer-txt">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240510_page_party006.png" width="100%" alt="">
                        パーティ編成に装備が保存できるようになりました為、キャラ装備からの装備変更は削除されております。ご注意ください。<br><br>
                    </p>
                </div>
                <div class="qa__content">
                    <p class="question-txt">3.襲来デッキが設定されていない場合はイベントに参加できない</p>
                    <p class="answer-txt">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240510_page_party005.png" width="100%" alt="">
                        特に襲来に初めて参加されるユーザー様はご注意ください<br>今までは襲来専用のパーティ編成画面がございましたが、今回の改修からパーティ編成に統一されております<br><br>
                        <span class="txtYellow">襲来前衛・後衛にパーティが編成されていない場合、イベントに参加できません</span><br><br>
                    </p>
                </div>

                    <div class="Att3">
                    <p class="Att4">【確認している不具合につきまして】</p>
                    <ol class="notes-1">
                    <li>キャラ装備Aを複数のデッキにセットした状態で強化しようとするとエラーになってしまう現象を確認しております。<br>実装チェックが不足しており大変恐縮ですが、デッキ1.2.3....など複数のデッキに同じ装備を配置している場合は、強化ができませんのでご注意ください。</li>
                    </ol>
                  </div>

    </main>
    <?php include '../../php/backbutton.php'; ?>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="../../css/qa/script.js"></script>
</body>
</html>