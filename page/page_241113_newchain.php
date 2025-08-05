<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>


<?php
$skill_effectMAX ="味方全体の悪属性威力を<span class=\"txtYellow fs-12\">10秒間50％</span>アップ<br>防御力を<span class=\"txtYellow fs-12\">10秒間50%</span>アップ<br>敵2体に悪属性<span class=\"txtYellow fs-12\">300%</span>ダメージ<br>剛属性<span class=\"txtYellow fs-12\">300%</span>ダメージ<br>防御力を<span class=\"txtYellow fs-12\">50％</span>ダウン"; /*スキル内容*/
; ?>
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
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/241112_ban_kizuna.png"
                        alt="CPバナー" width="100%" class="header_img">
                       
                      <div align="center">
                      <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/241112_page_kizuna.png"
                        alt="CPバナー" width="100%" class="header_img">
                       
                    </div>

                    
                    </div>
                    
                  </div>

                 
                  <div class="tabbox mt-20">
                   
                     <?//=========タブ2END=========//?>

                  <input type="radio" name="tabset" id="tabchecksilver1"checked>
                  <label for="tabchecksilver1" class="tab1">新絆技</label>
                    <div class="tabsilver" id="tabsilver1">
                    <div class="index-2">実装日</div>
                        <p class>11/13 13:00 〜</p>

                      <div class="index-2">新絆技【天神祭選抜メンバー】実装!!</div>
                       <div id="image_padding">
                   
                       
                    </div>
                    
                    
                  
                    <!--アイコンまとめ-->
                    <table id="Table01" class="mt-20">
                      <tbody>
                        <tr>
                          <th style="width:25%;">名称</th>
                          <th style="width:15%;">画像</th>
                          <th style="width:15%;">画像</th>
                          <th style="width:15%;">画像</th>
                          <th style="width:15%;">防御</th>
                          
                        </tr>
                        <tr>
                          <td rowspan="2" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                            天神祭選抜メンバー</td>
                          <td valign="middle" style="vertical-align: middle;"><img
                              src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00152.png"
                              width="100%" alt=""></td>
                         <td valign="middle" style="vertical-align: middle;"><img
                              src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00117.png"
                              width="100%" alt=""></td>
                         <td valign="middle" style="vertical-align: middle;"><img
                              src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00133.png"
                              width="100%" alt=""></td>
                          <td valign="middle" style="vertical-align: middle;"><img
                              src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00111.png"
                              width="100%" alt=""></td>
                          
                        </tr>
                        <tr>
                          
                      </tbody>
                    </table>

                    <div class="third-info">
                        <div class="third-info__inner inner">
                           <div class="third-info__items">
                              <div class="third-info__item-top">
                                  <div class="third-info__item_<?php echo $element_color ?>-name name-02 " style="background-color: green;">絆技MAX</div>
                            </div>
                            <div class="third-info__item_<?php echo $element_color ?>-bottom"><?php echo $skill_effectMAX ?></div>
                        </div>
                       </div>
                     </div>


                  <p class="ta-c fs-12 txtRed">〜 絆技強化の方法 〜</p>

                  <p class="ta-c fs-12">1.まずは<span class="txtYellow">対象のキャラを仲間</span>にしろ!!</p>
                  <p class="ta-c fs-12">2.全員<span class="txtYellow">★５まで進化</span>させろ!!</p>
                  <p class="ta-c fs-12">3.全員<span class="txtYellow">鍛技+20まで強化</span>しろ!!</p>
                  <p class="ta-c fs-12">4.全員<span class="txtYellow">限突+30まで強化</span>しろ!!</p>
                  <p class="ta-c fs-12">5.全員<span class="txtYellow">覚醒+30まで強化</span>しろ!!</p>
<br><br>
                  <p class="ta-c fs-12 txtRed">〜 段階ごとに強くなる!! 〜</p>

                  <p class="ta-c fs-12">1.全員仲間で<span class="txtYellow">絆技が発動</span>!!</p>
                  <p class="ta-c fs-12">2.全員★５で<span class="txtYellow">［Lv.3］</span>!!</p>
                  <p class="ta-c fs-12">3.全員鍛技+20で<span class="txtYellow">［Lv.9］</span>!!</p>
                  <p class="ta-c fs-12">4.全員限突+30(合計+120以上)で<span class="txtYellow">［Lv.10］</span>!!</p>
                  <p class="ta-c fs-12">5.全員覚醒+30(合計+120以上)で<span class="txtYellow">［Lv.11］</span>!!</p>
                  <br><br>

                  <p class="ta-c fs-14">キャラの強さにもよるが、全員の強化が進んでいれば<span class="txtYellow">バトル開始時に１人はぶっ倒せる威力!!</span> 必ず発動・強化しろ!!</p>


                  <p class="ta-c mt-15">▼ 絆技の詳細はコチラ‼︎ ▼</p>
                           <a href="../page/page_240501_updateinfo.php"><img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/ban_chaininfo.png" width="100%" alt=""></a>

                  </div>
                  <?//=========タブ3END=========//?>
                    <?/*
                     <input type="radio" name="tabset" id="tabchecksilver2">
                    <label for="tabchecksilver2" class="tab1">限突の勾玉</label>

                    <div class="tabsilver" id="tabsilver2">

                        <div class="index-2">実装日</div>
                        <p class="con-2">7/10 12:00 〜</p>

                      <div class="index-2">限突の勾玉実装!!</div>
                       <div class="con-2">
                            限界突破+31以降まで強化できるアイテム【限突の勾玉】が登場！ 今までの強化値を遥かに凌ぎ、+1の強化だけでステータスが爆上がりする仕様!! ライバルに圧倒的な差をつけろ!!<br>
                      </div>                      
 
                    </div>
                    <?//=========タブ2END=========//?>
                     

                    <?/*
                    <input type="radio" name="tabset" id="tabchecksilver3">
                    <label for="tabchecksilver3" class="tab1">その他</label>

                    <div class="tabsilver" id="tabsilver3">
                        <div class="index-2">実装日</div>
                        <p class="con-2">7/11 16:00メンテナンス以降</p>

                      <div class="index-2">その他色々な更新を反映予定!! 詳細を待て!!</div>
                    </div>
                    <?//=========タブ3END=========//?>


                    <?/*

                    <input type="radio" name="tabset" id="tabchecksilver3">
                    <label for="tabchecksilver3" class="tab1">ソウルメイト交換所</label>

                    <div class="tabsilver" id="tabsilver3">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240710_ban_pack_001.png"
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




*/?>
                  </div>
                  <?//=========tabbox タブ終わり=========//?>
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