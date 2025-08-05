<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>

<style>
  
  table {
    border-collapse: collapse;
    border: 2px solid orange;
  }

  th,
  td {
    border: 1px solid orange;
    padding: 8px;
  }


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
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240708_ban_info001.png"
                        alt="CPバナー" width="100%" class="header_img">
                       
                    </div>
                  </div>

                 
                  <div class="tabbox mt-20">
                    <?//=========タブ始まり=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver1" checked>
                    <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                    <label for="tabchecksilver1" class="tab1">新絆技</label>

                    <div class="tabsilver" id="tabsilver1">

                        <div class="index-2">実装日</div>
                        <p class="con-2">7/08 14:00 〜</p>

                      <div class="index-2">新絆技【惨劇の村松組】実装!!</div>
                       <div class="con-2">
                            あらたな絆技が遂に実装!! 相手の防御力ダウン+柔属性の先制攻撃で圧倒的優位を取れ!!<br>
                      </div>                      
                    <br>
                    </div>
                    <?//=========タブ1END=========//?>
                    
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
                     

                    <input type="radio" name="tabset" id="tabchecksilver3">
                    <label for="tabchecksilver3" class="tab1">スキル各種変更</label>

                    <div class="tabsilver" id="tabsilver3">
                        <div class="index-2">実装日</div>
                        <p class="con-2">7/11 16:00メンテナンス以降</p>

                      <div class="index-2">スキルの表記を一部変更</div>


<table style="text-align: center; margin: 0 auto;">
  <tbody>
    <tr>
      <th>変更前</th>
      <th>変更後</th>
    </tr>

    <tr>
      <td valign="middle" style="vertical-align: middle;">
        <p style="margin: 0;">スキルゲージの増加量を◯秒間◯%減少</p>
      </td>
      <td valign="middle" style="vertical-align: middle;">
        <p style="margin: 0;">◯秒間◯%の<span class="txtYellow">鈍化を付与</span></p>
      </td>
    </tr>

    <tr>
      <td valign="middle" style="vertical-align: middle;">
        <p style="margin: 0;">スキルゲージの増加量を◯秒間◯%増加</p>
      </td>
      <td valign="middle" style="vertical-align: middle;">
        <p style="margin: 0;">◯秒間◯%の<span class="txtYellow">鋭化を付与</span></p>
      </td>
    </tr>

    <tr>
      <td valign="middle" style="vertical-align: middle;">
        <p style="margin: 0;">必要スキルゲージを◯秒間◯%増加</p>
      </td>
      <td valign="middle" style="vertical-align: middle;">
        <p style="margin: 0;"><span class="txtYellow">スキルゲージの最大値</span><br>を◯秒間◯%増加</p>
      </td>
    </tr>


    <tr>
      <td valign="middle" style="vertical-align: middle;">
        <p style="margin: 0;">Attack付与耐性</p>
      </td>
      <td valign="middle" style="vertical-align: middle;">
        <p style="margin: 0;">攻撃力変動耐性</p>
      </td>
    </tr>

    <tr>
      <td valign="middle" style="vertical-align: middle;">
        <p style="margin: 0;">agility付与耐性</p>
      </td>
      <td valign="middle" style="vertical-align: middle;">
        <p style="margin: 0;">素早さ変動耐性</p>
      </td>
    </tr>

    <tr>
      <td valign="middle" style="vertical-align: middle;">
        <p style="margin: 0;">鈍化アイコン<br><img
        src="<?php include '../../php/masterdomain.php'; ?>/images/4_Ignore/230901_icon_slow_statusicon_001.png"></p>
      </td>
      <td valign="middle" style="vertical-align: middle;">
        <p style="margin: 0;">鈍化アイコン<br><img
        src="<?php include '../../php/masterdomain.php'; ?>/images/4_Ignore/240705_icon_dull_statusicon.png" width="20%"></p>
      </td>
    </tr>

    <tr>
      <td valign="middle" style="vertical-align: middle;">
        <p style="margin: 0;">鋭化アイコン<br><img
        src="<?php include '../../php/masterdomain.php'; ?>/images/4_Ignore/230901_icon_slow_statusicon_002.png"></p>
      </td>
      <td valign="middle" style="vertical-align: middle;">
        <p style="margin: 0;">鋭化アイコン<br><img
        src="<?php include '../../php/masterdomain.php'; ?>/images/4_Ignore/240705_icon_sharpen_statusicon.png" width="20%"></p>
      </td>
    </tr>
    


  </tbody>
</table>








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