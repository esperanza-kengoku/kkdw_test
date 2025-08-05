<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>

<body>

  <div id="container">


    <!--編集箇所-->
    <?php
    $name_title = "販売期間";
    $ban_image ="/news/2024_0101_release/ban/240101_ban_newyearCP_001.png"; 
    $times ="01月01日00:00～なくなり次第終了！"; 
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
                    <label for="tabchecksilver1" class="tab1">1,200円</label>

                    <div class="tabsilver" id="tabsilver1">

                      <div class="border01 flexbox">
                        <div class="item-imgB">
                          <div class="space-reset" style="transform: scale(1)">
                            <?//=========transform: scale(1)←の値でアイテム画像が拡大縮小し、余白を埋められる(1が標準、小数点あり)=========//?>
                            <img src="<?php include '../../php/domain.php'; ?>/Ui/frame15.png" alt="フレーム"
                              style="position: absolute;">
                            <?//=========↓↓↓↓アイテム画像↓↓↓↓=========//?>
                            <img
                              src="<?php include '../../php/domain.php'; ?>/ItemIcon/03106.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>2024拳極福袋</p>
                          </div>
                          <div class="item-numberB">
                            <p>1</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?//=========タブ1END=========//?>

             
                   <input type="radio" name="tabset" id="tabchecksilver5"checked>
                    <label for="tabchecksilver5" class="tab1">10,000円</label>

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
                              src="<?php include '../../php/domain.php'; ?>/ItemIcon/03106.png">
                          </div>
                        </div>
                        <div class="item-infoB">
                          <div class="item-nameB">
                            <p>2024拳極福袋</p>
                          </div>
                          <div class="item-numberB">
                            <p>10</p>
                          </div>
                        </div>
                      </div>
                      <?//=========☆アイテムフレームEND☆=========//?>

                 
                        </div>
                         <?//=========タブ3END=========//?>
                    
                  </div>
                  <?//=========tabbox タブ終わり=========//?>


                  <div class="btn01 mt-20 mb-20">
                    <a href="kengokuapp://070_MainShop01">パックを確認する</a>
                  </div>


                  <div class="Att3 mt-20">
                    <p class="Att4">【福袋の仕様について】</p>
                    <ol class="notes-1">        
                     <li>・福袋は本ページにてご案内させて頂いている購入特典にて入手できます</li>
                     <li>・１枚につき、１回専用のガチャをまわすことができます。</li>
                     <li>・ガチャからは特賞 〜 6等が排出されます。</li>
                     <li>・当選の等級に応じて、交換所にて超豪華報酬と交換することができます。</li>
                     <li>・超激アツキャンペーンにつき、先着2024本限定とさせて頂きます。</li>
                     <li>・交換所の開催期間は08日終日までとなっております。売り切れ次第、購入特典は終了となります。ご注意ください。</li>
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