<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>

<body>

  <div id="container">


    <!--編集箇所-->
    <?php
    $name_title = "パック内容";
    $ban_image ="/news/pack_ban/230901_pack01_banner.png"; 
    $times ="01月05日12:00～01月08日11:59"; 
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
                    <?php echo $name_title ?><br><?php echo $times ?>
                  </div>


                  <div class="tabbox mt-20">
                    <?//=========タブ始まり=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver1">
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
                              src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/modules/05001.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>進化コイン</p>
                          </div>
                          <div class="item-numberB">
                            <p>44</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?//=========タブ1END=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver2">
                    <label for="tabchecksilver2" class="tab1">5,000円</label>

                    <div class="tabsilver" id="tabsilver2">

                    <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                              src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/modules/05001.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>進化コイン</p>
                          </div>
                          <div class="item-numberB">
                            <p>70</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?//=========タブ2END=========//?>
                    
                    <input type="radio" name="tabset" id="tabchecksilver3">
                    <label for="tabchecksilver3" class="tab1">10,000円</label>

                    <div class="tabsilver" id="tabsilver3">

                    <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                              src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/modules/05001.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>進化コイン</p>
                          </div>
                          <div class="item-numberB">
                            <p>150</p>
                            </div>
                        </div>
                      </div>
                    </div>


                    <?//=========タブ3END=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver4">
                    <label for="tabchecksilver4" class="tab1">15,000円</label>

                    <div class="tabsilver" id="tabsilver4">

                    <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                              src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/modules/05001.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>進化コイン</p>
                          </div>
                          <div class="item-numberB">
                            <p>220</p>
                            </div>
                        </div>
                      </div>
                    </div>


                    <?//=========タブ3END=========//?>
                    
                    <input type="radio" name="tabset" id="tabchecksilver5" checked>
                    <label for="tabchecksilver5" class="tab1">20,000円</label>

                    <div class="tabsilver" id="tabsilver5">

                    <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                              src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/modules/05001.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>進化コイン</p>
                          </div>
                          <div class="item-numberB">
                            <p>330</p>
                            </div>
                        </div>
                      </div>
                    </div>


                    <?//=========タブ3END=========//?>


                    
                  </div>
                  <?//=========tabbox タブ終わり=========//?>


                  <div class="btn01 mt-20 mb-20">
                    <a href="kengokuapp://070_MainShop01">パックを確認する</a>
                  </div>


                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>パック内容は予告なく変更する場合がございます。</li>
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