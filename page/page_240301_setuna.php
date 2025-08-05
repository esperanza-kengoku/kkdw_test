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
    $avatarList = array("240301_page_potiev_002","00524","01524","03037","05036","07085","08085","01111","01112","01113","01114","01115","01116","01117","01118","01119","01120","02111","02112","02113","02114","02115","02116","02117","02118","02119","02120");
;?>

<body>


<div id="container">
    <div id="bridge-wrapper">
      <div id="content" class="clearfix">
        <div id="contentWrapper" class="column0">


          <div id="mainContent">
            <div id="news" class="newsDetail">

              <div class="news-text box-dent">


                <div class="outline">
                  <div id="image_padding">
                    <!--バナー表示　画像できたら入れる-->
                    <img src="<?php include '../../php/domain.php'; ?>/news/2024_0301_release/ban/240301_ban_potiev.png" width="100%" alt="">
                  </div><br>

                  <div class="index-1">新アバター獲得イベント!! 【刹那の密約】開催!!</div><br>

                    <p class="index-3"> イベント期間 </p>
                    <p class="con-2"> 3月1日12:00～3月7日12:00 </p>
                    <p class="index-3"> ガチャ可能期間</p>
                    <p class="con-2"> 3月1日12:00～3月9日12:00</p>
                
                   <div class="tabbox mt-20">
                   <?//=========タブ始まり=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver1" checked>
                    <label for="tabchecksilver1" class="tab1">新アバター一覧</label>

                    <div class="tabsilver" id="tabsilver1">
                    <div class="main bg-firstPlace bg-position">
                    <div class="slider">
                      <ul class="slickscroll ">

                     <?//=========↓↓↓↓配列内にあるアバターID分だけループして表示する↓↓↓↓=========//?>
                     <?php foreach($avatarList as $img):?>
                        <li>
                          <div class="flexbox flexbox_HF">
                            <div class="space-reset shadow-drop" style="transform: scale(1)">
                              <?//=========↓↓↓↓アバター画像↓↓↓↓=========//?>
                                <img src="<?php include '../../php/domain.php'; ?>/news/2024_0301_release/img/<?php echo $img ?>.png">
                            </div>
                          </div>
                        </li>
                        <?php endforeach;?>

                      </ul>
                    </div>
                  </div>
                 </div>
                <?//=========タブ1END=========//?>

                     
		          <input type="radio" name="tabset" id="tabchecksilver2" > 
                    <label for="tabchecksilver2" class="tab1">特攻情報</label>

                    <div class="tabsilver" id="tabsilver2">
                      <img src="<?php include '../../php/domain.php'; ?>/news/2024_0301_release/img/240301_page_potiev_001.png" width="100%" alt="">
                        <table id="Table01" class="mt-20">
                        <tbody>
                          <tr>
                            <th style="width:20%;">イベント項目</th>
                            <th style="width:20%;">アイコン</th>
                            <th style="width:60%;">内容</th>
                          </tr>
                          <tr>
                          <td valign="middle" style="vertical-align: middle;">強特攻<br>キャラ</td>
                            <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00171.png" width="100%" alt=""></td>
                            <td valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;"><span class="txtRed">愁毬花</span><br>リーダーに編成していると獲得できるイベントチケットが<span class="fg-Gold">５倍!!</span><br></p>
                            </td>
                          </tr>
                          <tr>
                            <td valign="middle" style="vertical-align: middle;">特攻<br>キャラ</td>
                            <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00170.png" width="100%" alt=""></td>
                            <td valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;"><span class="txtRed">千堂春貴</span><br>リーダーに編成していると獲得できるイベントチケットが<span class="fg-Gold">３倍!!</span><br></p>
                            </td>
                          </tr>

                          </tbody>
                      </table>
                      <br>
                      ※リーダー編成時のみしか発動しない効果になります。ご注意ください。<br>
                      ※また、仕様上助っ人ダチの特攻も反映されますが、自身を対象としない為、愁毬花を２体編成して特攻が掛かった場合は９倍となります。ご注意ください。
                    </div>
                    
                    <?//=========タブ2END=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver3" >
                    <label for="tabchecksilver3" class="tab1">イベント概要</label>

                       <div class="tabsilver" id="tabsilver3">

                       <div class="Att3">
                    <p class="Att4">【イベントの進め方】</p>
                    <ol class="notes-1">
                      <li>イベント制圧「刹那の密約」を進めろ！<br>
                          制圧を進めることでイベントチケット【刹那】が入手できる!!<br><br>
                          特攻キャラをリーダーに編成して制圧するとさらに多くチケットがもらえるぜ!!<br><br>
                      </li>
                      <li>イベント専用ガチャをまわせ！<br>
                          チケット500枚で１回ガチャがまわせるぜ!!<br><br>
                          さらに一気にまわすことでイベント限定アバターが確定!! 確実に狙うなら30連でまわせ!!<br><br>
                      </li>
                    </ol>
                  </div>
                        <table id="Table01" class="mt-20">
                        <tbody>
                          <tr>
                            <th style="width:20%;">ガチャ回数</th>
                            <th style="width:20%;">必要枚数</th>
                            <th style="width:60%;">内容</th>
                          </tr>
                          <tr>
                          <td valign="middle" style="vertical-align: middle;">単発</td>
                            <td valign="middle" style="vertical-align: middle;">500枚</td>
                            <td valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;">通常確率でガチャを実行可能。強化素材は排出されない<br></p>
                            </td>
                          </tr>
                          <tr>
                            <td valign="middle" style="vertical-align: middle;">10連</td>
                            <td valign="middle" style="vertical-align: middle;">5000枚</td>
                            <td valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;"><span class="txtRed">高確率</span>で限定アバターが排出される<br>排出内容に各種強化素材も追加</span><br></p>
                            </td>
                          </tr>
                          <tr>
                            <td valign="middle" style="vertical-align: middle;">30連</td>
                            <td valign="middle" style="vertical-align: middle;">15,000枚</td>
                            <td valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;"><span class="fg-Gold">1つイベント限定アバターが確定!!</span><span class="txtRed">高確率</span>で限定アバターが排出される<br>排出内容に各種強化素材も追加</span><br></p>
                            </td>
                          </tr>
                          </tbody>
                      </table>
                      <br>
                      ※ガチャはイベント終了後の09日までの開催となります。ご注意ください<br>
                      ※30連で実行した場合、スクロールを行うとUIの表示が崩れる不具合を確認しておりますが、次回アップデートでの修正となります。大変恐縮ですがご了承ください。排出内容は正常に反映されております<br>
                      ※ガチャで同じアバターが重複した場合は通常のガチャと同じくアバターptに変換されます。ご注意ください
                      <br>
                      </div>
                       <?//=========タブ3END=========//?>

                </div><!-- .tabbox -->
              </div><!-- .outline -->
            </div><!-- .news-text -->

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
  </script>


</body>

</html>