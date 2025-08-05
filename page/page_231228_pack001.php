<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>

<body>

  <div id="container">


    <!--編集箇所-->
    <?php
    $name_title = "販売期間";
    $ban_image ="/news/2024_0101_release/ban/240101_ban_NewCharacter_004.png"; 
    $times ="12月28日12:00～12月31日23:59"; 
    ?>


    <div id="bridge-wrapper">
      <div id="content" class="clearfix">

        <div id="contentWrapper" class="column0">
          <div id="mainContent">
            <div id="news" class="newsDetail">

              <div class="news-text box-dent">
                <div class="outline-2">

                  <div id="image_padding" class="shadow-drop">
                    <!--バナー表示-->
                    <img src="<?php include '../../php/domain.php'; ?><?php echo $ban_image ?>" width="100%" alt="">
                  </div>

                  <div class="index-4">
                    <?php echo $name_title ?>
                  </div>


                  <div class="tabbox mt-20">
                    <?//=========タブ始まり=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver1" checked>
                    <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                    <label for="tabchecksilver1" class="tab1">3,000円</label>

                    <div class="tabsilver" id="tabsilver1">

                      <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                              src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/modules/item01.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>極石【有償】</p>
                          </div>
                          <div class="item-numberB">
                            <p>2,000</p>
                          </div>
                        </div>
                      </div>

                    </div>
                    <?//=========タブ1END=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver2">
                    <label for="tabchecksilver2" class="tab1">10,000円</label>

                    <div class="tabsilver" id="tabsilver2">

                      <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                              src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/modules/item01.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>極石【有償】</p>
                          </div>
                          <div class="item-numberB">
                            <p>6,500</p>
                          </div>
                        </div>
                      </div>

                    </div>
                    <?//=========タブ2END=========//?>
                    <input type="radio" name="tabset" id="tabchecksilver3">
                    <label for="tabchecksilver3" class="tab1">15,000円</label>

                    <div class="tabsilver" id="tabsilver3">

                      <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                              src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/modules/item01.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>極石【有償】</p>
                          </div>
                          <div class="item-numberB">
                            <p>10,000</p>
                          </div>
                        </div>
                      </div>

                    </div>
                    <?//=========タブ2END=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver4">
                    <label for="tabchecksilver4" class="tab1">20,000円</label>

                    <div class="tabsilver" id="tabsilver4">

                      <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                              src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/modules/item01.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>極石【有償】</p>
                          </div>
                          <div class="item-numberB">
                            <p>15,000</p>
                          </div>
                        </div>
                      </div>

                    </div>
                    <?//=========タブ2END=========//?>

                  </div>
                  <?//=========tabbox タブ終わり=========//?>


                  <div class="btn01 mt-20 mb-20">
                    <a href="kengokuapp://070_MainShop01">パックを確認する</a>
                  </div>


                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                    <li>15000円はIOSユーザー様のみのご用意となります。</li>
                    <li>20000円はAndroidユーザー様のみのご用意となります。</li>
                    <li>２倍でついてくる極石は全て有償極石となります。各種キャンペーンにてお使い頂けます。</li>
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