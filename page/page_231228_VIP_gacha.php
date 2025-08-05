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
                      src="<?php include '../../php/domain.php'; ?>/news/2023_1123_release/ban/231123_ban_NewCharacter_002.png"
                      alt="郡上誠二登場" width="100%" class="header_img">
                  </div>
                </div>

                <div class="index-4" id="releasegacha">VIP限定ガチャが登場‼</div>

                <div class="tabbox mt-20">
                  <?//=========タブ始まり=========//?>

                  <input type="radio" name="tabset" id="tabchecksilver1" checked>
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver1" class="tab1">詳細</label>

                  <div class="tabsilver" id="tabsilver1">

                    <div class="index-2">開催期間</div>
                    <p class="con-2">12/28 12:00 ~ 12/31 23:59</p>

                    <p class="index-2">期間限定で<span class="red fs16">VIP限定ガチャが登場‼︎</span></p>
                    <div class="mt-20">
                    <img
                      src="<?php include '../../php/domain.php'; ?>/news/2024_0101_release/img/240101_setting_VIP.png"
                      alt="郡上誠二ガチャ" width="100%">
                    </div>
                    <div class="con-2">
                    <p><span class="fg-Gold fs16">★３枠に如月の魂を追加！ 如月を一気に強化できるチャンス！</span>
                          期間限定の激アツガチャを見逃すな！</p>
                    </div>
                    
                    <br>


                  </div>
                  <?//=========タブ1END=========//?>

                </div>
                <?//=========tabbox タブ終わり=========//?>

                <div class="btn01  mt-20 mb-20">
                  <a href="kengokuapp://120_Gacha">ガチャを確認する</a>
                </div>


                <div class="Att3">
                  <p class="Att4">【注意事項】</p>
                  <ol class="notes-1">
                    <li>如月いづみ本体についてはガチャから排出されません。VIP13限定報酬となりますのでご注意ください。</li>
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