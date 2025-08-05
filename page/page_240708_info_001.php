<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>

<style>
  


.fs16 {
  font-size: 16px;
}

</style>

<body>

<?//タブに時限をつける場合は下記のコードを使用//?>
<?php include '../../php/settime.php';
      /*表示開始日時*/
      $startTime = new DateTime('2024-07-15 12:00:00');

           if ($now >= $startTime){
       
                $trigger = 1;
       
               };

      $startTime = new DateTime('2024-04-28 12:00:00');

      if ($now >= $startTime){
       
        $trigger2 = 1;

       };




;?>


<div id="bridge-wrapper">
      <div id="content" class="clearfix">

        <div id="contentWrapper" class="column0">
          <div id="mainContent">
            <div id="news" class="newsDetail">

              <div class="news-text box-dent">
                <div class="outline-2">


                  <div id="image_padding">
                    <div align="center">
                      <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240515_ban_1stanniversary_001.png"
                        alt="CPバナー" width="100%" class="header_img">
                       
                    </div>
                  </div>

                 
                  <div class="tabbox mt-20">
                    <?//=========タブ始まり=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver1" checked>
                    <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                    <label for="tabchecksilver1" class="tab1">新絆技</label>

                    <div class="tabsilver" id="tabsilver1">

                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240515_header_1stanniversary_001.png"
                        alt="BD01" width="100%" class="header_img">
                        
                        <div class="index-2">実装日</div>
                        <p class="con-2">7/08 12:00 〜</p>

                      <div class="index-2">新絆技【惨劇の村松組】実装!!</div>
                       <div class="con-2">
                            実装サンプル！<br>
                      </div>                      
                    <br>
                    </div>
                    <?//=========タブ1END=========//?>
                    
                     <input type="radio" name="tabset" id="tabchecksilver2">
                    <label for="tabchecksilver2" class="tab1">限突の勾玉</label>

                    <div class="tabsilver" id="tabsilver2">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240515_page_NewCharacter_001.png"
                        alt="BD01" width="100%" class="header_img">


                        <div class="index-2">実装日</div>
                        <p class="con-2">7/10 12:00 〜</p>

                      <div class="index-2">限突の勾玉実装!!</div>
                       <div class="con-2">
                            実装サンプル！<br>
                      </div>                      
 
                    </div>
                    <?//=========タブ2END=========//?>
                     
                    <input type="radio" name="tabset" id="tabchecksilver3">
                    <label for="tabchecksilver3" class="tab1">ソウルメイト交換所</label>

                    <div class="tabsilver" id="tabsilver3">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240515_header_1stanniversary_003.png"
                        alt="BD01" width="100%" class="header_img">
                        <div class="index-2">実装日</div>
                        <p class="con-2">7/10 12:00 〜</p>

                      <div class="index-2">ソウルメイト実装!!</div>
                       <div class="con-2">
                            実装サンプル！<br>
                      </div>                      
                    </div>
                    <?//=========タブ3END=========//?>


                    <input type="radio" name="tabset" id="tabchecksilver4">
                    <label for="tabchecksilver4" class="tab1">各種アイコンの変更</label>

                    <div class="tabsilver" id="tabsilver4">                 

                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240515_header_1stanniversary_004.png"
                        alt="BD01" width="100%" class="header_img">
                    
                        <div class="index-2">実装日</div>
                        <p class="con-2">7/11 12:00 〜</p>

                      <div class="index-2">鈍化・鋭化のアイコンを変えるぜ!!</div>
                       <div class="con-2">
                            実装サンプル！<br>
                      </div>                      

                    </div> 
                    
                    <?//=========タブ4END=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver5" >
                    <label for="tabchecksilver5" class="tab1">新スキル</label>

                    <div class="tabsilver" id="tabsilver5">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240515_header_1stanniversary_005.png"
                        alt="BD01" width="100%" class="header_img">

                        <div class="index-2">実装日</div>
                        <p class="con-2">7/15 12:00 〜</p>

                      <div class="index-2">詳細は後日公開!!</div>
                       <div class="con-2">
                            新キャラにつくのバレバレ！<br>
                      </div>                      


                    </div>
                     <?//=========タブ8END=========//?>


                  </div>
                  <?//=========tabbox タブ終わり=========//?>


                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                    <li>キャンペーンは全7弾となります。順次公開となりますので、ご了承ください。</li>
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