<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>


<body>

  <div id="bridge-wrapper">
    <div id="content" class="clearfix">

      <div id="contentWrapper" class="column0">
        <div id="mainContent">
          <div id="news" class="newsDetail">

            <div class="news-text box-dent">
              <div class="outline-2">

                <div id="image_padding">
                  <div align="center" class="shadow-drop">
                    <img
                      src="<?php include '../../php/domain.php'; ?>/news/2023_1215_release/231215_ban_NewCharacter_003.png"
                      alt="緋山アケミ【X’】登場" width="100%" class="header_img">
                  </div>
                </div>

                <div class="index-4" id="releasegacha">新キャラ「緋山アケミ【X’】」登場‼</div>

                <div id="image_padding" class="mt-15">
                  <div align="center">
                    <img
                      src="<?php include '../../php/domain.php'; ?>/news/2023_1215_release/img/231215_page_NewCharacter.png"
                      alt="緋山アケミ【X’】ガチャ" width="100%">
                  </div>
                </div>

                <div class="tabbox mt-20">
                  <?//=========タブ始まり=========//?>

                  <input type="radio" name="tabset" id="tabchecksilver1" checked>
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver1" class="tab1">詳細</label>

                  <div class="tabsilver" id="tabsilver1">

                    <div class="index-2">開催期間</div>
                    <p class="con-2">12/15 12:00 ~ 12/25 23:59</p>

                    <p class="index-2">期間限定で<span class="red fs16">緋山アケミ【X’】PUガチャ</span>を開催！</p>
                    <div class="mt-20">
                      <img
                        src="<?php include '../../php/domain.php'; ?>/news/2023_1215_release/img/231215_setting_NewCharacter.png"
                        alt="緋山アケミ【X’】ガチャ" width="100%">
                    </div>
                    <div class="con-2">
                    <p><span class="fg-Gold fs16">緋山アケミ【X’】をピックアップ！</span>
                          期間限定の激アツガチャを見逃すな！</p>
                    </div>
                    
                    <br>


                  </div>
                  <?//=========タブ1END=========//?>


                  <input type="radio" name="tabset" id="tabchecksilver2">
                  <label for="tabchecksilver2" class="tab1">確変モード詳細</label>

                  <div class="tabsilver" id="tabsilver2">
                    <div class="index-2 mb-20">X’mas LIVEモード</div>
                    <img
                      src="<?php include '../../php/domain.php'; ?>/news/2023_1215_release/img/231215_rush_NewCharacter_001.png"
                      alt="緋山アケミ【X’】ガチャ" width="100%" class="header_img">
                    <p class="con-2">★３確率：<span class="fg-Gold">３％</span>、確変継続率80％</p>

                    <div class="index-2 mb-20">幻の10人目モード</div>
                    <img
                      src="<?php include '../../php/domain.php'; ?>/news/2023_1215_release/img/231215_rush_NewCharacter_002.png"
                      alt="緋山アケミ【X’】ガチャ" width="100%" class="header_img">
                    <p class="con-2">★３確率排出時、<span class="fg-Gold">緋山アケミ【X’】のみが出現！</span></p>

                    <div class="frame-1 mt-20 mb-20">
                      <p class="fs16 fw-b ta-c">【確変について】</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2">
                        <li>11連ガチャきっかけで確変モードが発動します。確変中は★３確率が大幅にアップします</li>
                        <li>確変は時間限定です。時間が経過しますと通常モードに切り替わりますのでご注意ください</li>
                      </ol>
                    </div>

                  </div>
                  <?//=========タブ2END=========//?>

                  <input type="radio" name="tabset" id="tabchecksilver3">
                  <label for="tabchecksilver3" class="tab1">限定ver.キャラ</label>

                  <div class="tabsilver" id="tabsilver3">

                    <!--恒常-->
                    <ul class="newsContent-items">
                      <div class="index-2">緋山アケミの魂がそのまま使える！</div>
                      <p class="con-2">緋山アケミ【X’】へは、★２の緋山アケミの魂を使用することができます。その他キャラの限定ver.が実装された場合は同様の仕様となりますのでご了承ください。<br>
                      ★３の限定ver.が重複して排出された場合は魂×100が排出されます。ご安心ください。</p>
                    </ul>

                  </div>
                  <?//=========タブ3END=========//?>

                </div>
                <?//=========tabbox タブ終わり=========//?>

                <div class="btn01  mt-20 mb-20">
                  <a href="kengokuapp://120_Gacha">ガチャを確認する</a>
                </div>


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


  </div>

</body>

</html>