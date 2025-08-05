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
    <div id="image_padding">
    <!--バナー表示　画像できたら入れる-->
    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/ban_chaininfo.png" width="100%" alt="">
</div>
</head>
<body>

     <main class="main">

     <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_page_chainskill008.png" width="100%" alt="">

          <div class="qa inner">
            <!-- キャラ -->
            <div class="qa-heading"><span>『絆技』とは……？</span></div>
            <div class="qa__content-wrapper">
                <div class="qa__content">
                    <p class="question-txt">絆技の基本仕様</p>
                    <p class="answer-txt">絆技は指定されたキャラを編成することで特殊なスキルを発動することができる機能です<br><br>
                    例：スキル【漢気一発】　指定キャラ：荒谷、郡上<br><br>
                    メインに編成しなくなったキャラや、絆技への編成の方が活躍できるキャラなど、戦略の幅がさらに広がります<br><br>
                    絆技次第で環境を大きく変えることが可能です<br><br>
                    </p>
                </div>
                <div class="qa__content">
                    <p class="question-txt">絆技の設定方法①</p>
                    <p class="answer-txt">
                        <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_page_chainskill001.png" width="100%" alt="">
                        キャラTOPから「キャラ絆技」を押下します<br><br>
                    </p>
                </div>
                <div class="qa__content">
                    <p class="question-txt">絆技の設定方法②</p>
                    <p class="answer-txt">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_page_chainskill002.png" width="100%" alt="">
                        発動できる絆技（スキル）と、必要なキャラ一覧が表示されております<br><br>
                        アイコンをタップして頂く事でキャラを設定できます<br><br>

                        <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_page_chainskill003.png" width="100%" alt="">

                        発動している絆技については左上に「発動中」のアイコンが表示されます<br><br>
                    </p>
                </div>

                <!-- イベントの種類 -->
                <div class="qa-heading mt-20"><span>絆技の各種ボタン詳細</div>
                <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_page_chainskill003.png" width="100%" alt="">
                <div class="qa__content">
                    <p class="question-txt">絆技スキル</p>
                    <p class="answer-txt">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_page_chainskill004.png" width="100%" alt="">
                    発動しているスキルの内容が確認できます<br>
                        <br>
                    </p>
                </div>
                <div class="qa__content">
                    <p class="question-txt">強化条件</p>
                    <p class="answer-txt">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_page_chainskill005.png" width="100%" alt="">
                        絆技は<span class="txtYellow">設定しているキャラの強化状態に応じて威力がアップします</span><br><br>
                        レアリティについてはどちらのレアリティも★４以上、★５以上などを満たす場合です。片方のレアリティが低い場合は適用されません<br><br>
                        合計鍛技レベルは設定キャラの鍛技レベルの合計値です。荒谷10、郡上5なら合計レベルは15となります<br><br>
                        強化条件を満たした場合は自動でスキルが強化されます。発動しているスキルについては絆技スキルボタンよりご確認ください<br><br>
                    </p>
                </div>
                <div class="qa__content">
                    <p class="question-txt">発動条件</p>
                    <p class="answer-txt">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_page_chainskill006.png" width="100%" alt="">
                        絆技の発動に必要な指定キャラの一覧です<br><br>
                        注意事項にてあらためて記載いたしますが、絆技に編成しているキャラはメインパーティには編成できません。ご注意ください。<br><br>
                        メインパーティに編成した場合は<span class="txtYellow">自動的に絆技設定から解除されます</span>ご注意ください<br><br>
                        設定できるキャラを所持していない場合や、メインパーティに編成しているキャラを編成しようとした場合はエラー表示されます。この場合はどこかのパーティに編成されておりますので、解除してから再度設定してください。<br><br>
                        <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_page_chainskill007.png" width="100%" alt="">

                    </p>
                </div>

                <!-- イベントの詳細 -->
                <div class="qa-heading"><span>絆技の注意点</span></div>
                <div class="qa__content">
                    <p class="question-txt">1.メインパーティと同時編成はできない</p>
                    <p class="answer-txt">
                        発動条件の項目での記載通りですが、メインパーティに編成しているキャラは編成できません。ご注意ください<br><br>
                    </p>
                </div>
                <div class="qa__content">
                    <p class="question-txt">2.襲来イベントでは絆技は発動しない</p>
                    <p class="answer-txt">
                        バランスの観点から、襲来イベントでは絆技は発動致しません。抗争・対戦・制圧のみとなりますのでご注意ください<br><br>
                    </p>
                </div>
                <div class="qa__content">
                    <p class="question-txt">3.絆技の発動順番は一番最後</p>
                    <p class="answer-txt">
                        先日お知らせにて記載させて頂きました通り、戦闘開始時スキルの発動順番が以前までと異なります<br><br>
                        <span class="txtYellow">リーダースキル > 装備スキル > 絆技</span>の順番で発動します<br><br>
                        この発動順は絆技の効果によって大きく戦略を変える実装となりますため、<span class="txtYellow">仕様について必ずご確認頂ください</span>。<br><br>
                    </p>
                </div>

                <div class="qa__content">
                    <p class="question-txt">4.絆技編成キャラはキャラ装備の影響を受けない</p>
                    <p class="answer-txt">
                        絆技に編成しているキャラのキャラ装備スキル等については発動致しません。ご注意ください<br><br>
                    </p>
                </div>

                <div class="qa__content">
                    <p class="question-txt">5.絆技の威力は編成キャラのステータスの平均値</p>
                    <p class="answer-txt">
                        200％ダメージ、などのスキルについては、指定キャラのステータスを合算し、平均値として計算されます。この為、<span class="txtYellow">覚醒や限凸の値が高いキャラの方が威力が上がります</span><br><br>
                    </p>
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