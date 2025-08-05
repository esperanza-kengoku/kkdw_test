<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>

<body>

  <div id="container">


    <!--編集箇所-->
    <?php
    $name_title = "販売期間";
    $ban_image ="/news/2024_0223_release/ban/240223_ban_NewCharacter_002.png"; 
    $times ="08月03日12:00～08月10日22:59"; 
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
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/ban_240604_pack001.png"
                        alt="装備バナー" width="100%" class="header_img">
                  </div><br>
                                    

                  <div class="index-4">
                    <?php echo $name_title ?><br><?php echo $times ?>
                  </div>


                  <div class="tabbox mt-20">
                    <?//=========タブ始まり=========//?>
                    
                    
                    
                    
                    
 

                    <input type="radio" name="tabset" id="tabchecksilver2">
                    <label for="tabchecksilver2" class="tab1">1,200円（スキチケ）</label>

                    <div class="tabsilver" id="tabsilver2">

                    <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                            src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/03049.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>スキップチケット</p>
                          </div>
                          <div class="item-numberB">
                            <p>15</p>
                          </div>
                        </div>
                      </div>
                                            <?//=========☆アイテムフレーム☆=========//?>

                  
                    </div>
                    <?//=========タブ2END=========//?>
                    <input type="radio" name="tabset" id="tabchecksilver3">

                   
                    <label for="tabchecksilver3" class="tab1">3,000円（スキチケ）</label>

                    <div class="tabsilver" id="tabsilver3">


                    <?//=========☆アイテムフレーム☆=========//?>
                        <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                            src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/03049.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>スキップチケット</p>
                          </div>
                          <div class="item-numberB">
                            <p>40</p>
                          </div>
                        </div>
                      </div>
                      <?//=========☆アイテムフレームEND☆=========//?>

                    </div>
                    
                    <?//=========タブ2END=========//?>
                    
                                        <input type="radio" name="tabset" id="tabchecksilver5">
                    <label for="tabchecksilver5" class="tab1">1,200円（入場券）</label>

                    <div class="tabsilver" id="tabsilver5">

                    <?//=========☆アイテムフレーム☆=========//?>
                        <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                           src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/03077.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>エリア入場券</p>
                          </div>
                          <div class="item-numberB">
                            <p>5</p>
                          </div>
                        </div>
                      </div>
                      <?//=========☆アイテムフレームEND☆=========//?>


    </div>
                    <?//=========タブ3END=========//?>
                    

                    <input type="radio" name="tabset" id="tabchecksilver4">
                    <label for="tabchecksilver4" class="tab1">3,000円（入場券）</label>

                    <div class="tabsilver" id="tabsilver4">
                    <?//=========☆アイテムフレーム☆=========//?>
                        <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                              src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/03077.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>エリア入場券</p>
                          </div>
                          <div class="item-numberB">
                            <p>15</p>
                          </div>
                        </div>
                      </div>
                      <?//=========☆アイテムフレームEND☆=========//?>


                    </div>
                                        <?//=========タブ3END=========//?>
                    

                    <input type="radio" name="tabset" id="tabchecksilver7">
                    <label for="tabchecksilver7" class="tab1">3,000円（MIX）</label>

                    <div class="tabsilver" id="tabsilver7">
                    <?//=========☆アイテムフレーム☆=========//?>
                        <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                              src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/03075.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>ケンビタ</p>
                          </div>
                          <div class="item-numberB">
                            <p>5</p>
                          </div>
                        </div>
                      </div>
                  
                      <?//=========☆アイテムフレーム☆=========//?>
                        <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                              src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/03049.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>スキップチケット</p>
                          </div>
                          <div class="item-numberB">
                            <p>5</p>
                          </div>
                        </div>
                      </div>
                      <?//=========☆アイテムフレームEND☆=========//?>

                    </div>
                    <?//=========タブ3END=========//?>
                       
                   
                    

                    <input type="radio" name="tabset" id="tabchecksilver6">
                    <label for="tabchecksilver6" class="tab1">10,000円（MIX）</label>

                    <div class="tabsilver" id="tabsilver6">
                    <?//=========☆アイテムフレーム☆=========//?>
                        <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                              src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/03075.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>ケンビタ</p>
                          </div>
                          <div class="item-numberB">
                            <p>20</p>
                          </div>
                        </div>
                      </div>
                      <?//=========☆アイテムフレームEND☆=========//?>
                                            <?//=========☆アイテムフレーム☆=========//?>
                        <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                              src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/03049.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>スキップチケット</p>
                          </div>
                          <div class="item-numberB">
                            <p>20</p>
                          </div>
                        </div>
                      </div>
                      <?//=========☆アイテムフレームEND☆=========//?>
                      


                    </div>
                    <input type="radio" name="tabset" id="tabchecksilver8"checked>
                    <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                    
                    <label for="tabchecksilver8" class="tab1">「1回限り<span class="red">通常決済のみ</span>」3000円（極MAP）</label>

                    <div class="tabsilver" id="tabsilver8">

                      <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                            src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/03076.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>極MAP</p>
                          </div>
                          <div class="item-numberB">
                            <p>1</p>
                          </div>
                        </div>
                      </div>
                                                                  <?//=========☆アイテムフレーム☆=========//?>
                        <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                           <img
                            src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/03075.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>ケンビタ</p>
                          </div>
                          <div class="item-numberB">
                            <p>1</p>
                          </div>
                        </div>
                      </div>
                                            
                   
                      </div>
               
           
                    <?//=========タブ1END=========//?>
                    <?//=========タブ3END=========//?>



                    
                  </div>
                  <?//=========tabbox タブ終わり=========//?>
                                           </div>

  <div class="con-2 ta-c"><span class="fg-Gold fs-12">▼イベント詳細についてはコチラ▼</span><br><br>
  <a href="../page/page_240803_sorority.php">
 <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240803_ban_Sorority_001.png" width="100%" alt="">
  </a>
                           </div>


                  <div class="btn01 mt-20 mb-20">
                    <a href="kengokuapp://070_MainShop01">パックを確認する</a>
                  </div>


                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li> （3000円１回限り）極MAPつきまして、通常決済のみ、購入できますのでご了承ください。</li>
                      <li> 販売終了は08月10日22:59までとなります</li>
                      <li>通常の特典にさらに上記報酬がついてくるパックとなります。</li>
                      <li>ついてくる極石は全て有償極石となります。各種キャンペーンにてお使い頂けます。</li>
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