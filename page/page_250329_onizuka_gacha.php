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
      $startTime = new DateTime('2024-05-01 12:00:00');

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
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250328_ban_NewCharacter_001.png"
                        alt="CPバナー" width="100%" class="header_img">
                       
                    </div>
                  </div>

                 
                  <div class="tabbox mt-20">
                    <?//=========タブ始まり=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver6" checked>
                    <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                    <label for="tabchecksilver6" class="tab1">EXEガチャ一新!!</label>

                    <div class="tabsilver" id="tabsilver6">


                    <div id="image_padding">
                    <div align="center">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250328_setting_NewCharacter _004.png"
                        alt="CPバナー" width="100%" class="header_img">  
                    </div>
                  </div>


                    <div class="Att3">

                    <ol class="notes-1 fs-12">
                      <li>エグゼクティブメンバーに入会されたユーザー様限定のガチャ<span class="txtYellow">EXEガチャ</span>を大幅にアップデート！</li>
                      <li>通常→チャンスタイム→確変と確率変動が起こり、確変は継続し続ける限りガチャ実行可能!! 大当たりを引き続けろ!!</li>
                      <li>EXE.99はライト向け!! なんと半額の極石1,500で挑戦でき、チャンスタイム突入は最短!!</li>
                      <li>EXE.319はミドル向け!! 挑戦しやすく<span class="txtYellow">極石3,000</span>に調整!! 確変までのハードルは高いがその分排出は超激アツ!! 確変継続はなんと脅威の90％!! 一発逆転を狙え!!</li>
                      <li>EXE会員に入会すると挑戦できるぞ!!</li>
                      <li>EXE限定キャラ<span class="txtYellow">【★６鬼塚仁】</span>が獲得できる！</li>
                    </ol>
                  </div>


                    </div>
                    <?//=========タブ1END=========//?>

                    
                    <input type="radio" name="tabset" id="tabchecksilver8">
                    <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                    <label for="tabchecksilver8" class="tab1">EXE.99</label>

                    <div class="tabsilver" id="tabsilver8">
                        
                        <div class="index-2">EXE.99</div>
                        

                        <div id="image_padding">
                    <div align="center">
                      <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250328_setting_NewCharacter _002.png"
                        alt="CPバナー" width="100%" class="header_img">
                        <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250328_setting_NewCharacter _005.png"
                        alt="CPバナー" width="100%" class="header_img">
                        <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250328_setting_NewCharacter _006.png"
                        alt="CPバナー" width="100%" class="header_img">
                       
                    </div>
                  </div>



                  <p class="ta-c fs-12">▼ ガチャ性能 ▼</p>
                  <table id="Table01" class="mt-20 fs-12">
                      <tbody>
                        <tr>
                          <th style="width:25%;">通常</th>
                          <th style="width:25%;">チャンスタイム</th>
                          <th style="width:25%;">確変<br>(ラッシュ)</th>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;"><span class="txtYellow fs-14">99以内に</span>に必ずチャンスタイムに突入!!</td>
                        <td valign="middle" style="vertical-align: middle;"><span class="txtYellow fs-14">5％</span>の確率で確変突入!!</td>
                        <td valign="middle" style="vertical-align: middle;"><span class="txtYellow fs-14">60％</span>の確率で確変継続!!</td>
                        </tr>
                      </tbody>
                    </table>
※排出内容については提供割合をご確認ください<br>




                    </div>
                    <?//=========タブ1END=========//?>                    
                    
                    <input type="radio" name="tabset" id="tabchecksilver3">
                    <label for="tabchecksilver3" class="tab1">EXE.319</label>

                    <div class="tabsilver" id="tabsilver3">
                    <div class="index-2">EXE.319</div>
                        

                        <div id="image_padding">
                    <div align="center">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250328_setting_NewCharacter _001.png"
                        alt="CPバナー" width="100%" class="header_img">
                        <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250328_setting_NewCharacter _003.png"
                        alt="CPバナー" width="100%" class="header_img">
                        <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250328_setting_NewCharacter _004.png"
                        alt="CPバナー" width="100%" class="header_img">
                       
                    </div>
                  </div>



                  <p class="ta-c fs-12">▼ ガチャ性能 ▼</p>
                  <table id="Table01" class="mt-20 fs-12">
                      <tbody>
                        <tr>
                          <th style="width:25%;">通常</th>
                          <th style="width:25%;">チャンスタイム</th>
                          <th style="width:25%;">確変<br>(バースト)</th>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;"><span class="txtYellow fs-14">319以内に</span>に必ずチャンスタイムに突入!!</td>
                        <td valign="middle" style="vertical-align: middle;"><span class="txtYellow fs-14">50％</span>の確率で確変突入!!</td>
                        <td valign="middle" style="vertical-align: middle;"><span class="txtYellow fs-14">90％</span>の確率で確変継続!!</td>
                        </tr>
                      </tbody>
                    </table>
※排出内容については提供割合をご確認ください<br>
                        </div>
                        <?//=========タブ3END=========//?>
                    
                    
                    <input type="radio" name="tabset" id="tabchecksilver4">
                    <label for="tabchecksilver4" class="tab1">Q&A※追記※</label>

                    <div class="tabsilver" id="tabsilver4">
                    <div class="index-2">告知後に頂いている質問と注意点</div>
                        

                   <div class="Att3 fs-12">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                    <li>通常→チャンスタイム→確変ループで確変から落ちた場合ですが、チャンスタイムではなく通常に移行いたします。チャンスタイムへは通常からしか突入しませんのでご留意ください</li>
                    <li>一括ガチャを使用した場合ですが、ガチャ結果ではあくまで「現在突入しているラッシュ」を表示します。排出内容は相違ございませんが、場合によってエグゼクティブ○○の確変が起きていないように認識できる場合がございます。<br>
                      例:あと１回でチャンスタイムに入る→すぐに確変→確変が５回で終了、この設定の時に一括で10回実行すると通常に遷移する、となります。排出内容は相違ございません。
                      </li>
                    </ol>
                  </div>   
                      

                        </div>
                        <?//=========タブ3END=========//?>

                        <input type="radio" name="tabset" id="tabchecksilver5">
                    <label for="tabchecksilver5" class="tab1">EXEpt交換所</label>

                    <div class="tabsilver" id="tabsilver5">
                    <div class="index-2">鬼塚専用装備は交換所で確定入手可能!!</div>
                        

                   <div class="Att3 fs-12">
                    <p class="Att4">【EXEptの入手方法と内容】</p>
                    <ol class="notes-1">
                    <li>EXEptはEXE.319ガチャ1を1回実行した際に1pt入手できます</li>
                    <li>専用の交換所で鬼塚の★４装備コルテザンやゼウスと交換できます。鬼塚の魂も無制限で交換可能です</li>
                    <li>現状はEXEptの使用期限はございません。期限が設定される際には改めて告知させて頂きます</li>
                    </ol>
                  </div>   


                <div class="btn01 mt-20 mb-20 ta-c">
                  <a href="kengokuapp://130_CommonShop01">交換所を確認する</a>
                </div>


                        </div>
                        <?//=========タブ3END=========//?>


                    

                  </div>
                  <?//=========tabbox タブ終わり=========//?>


                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                    <li>チャンスタイムへの突入率は完全確率ではなく、抽選となります。必ず規定回数以内にチャンスタイムに突入いたします</li>
                    <li>チャンスタイム以降は完全確率となります。抽選自体は行われますが、5％=20回以内に確変に突入とはなりません。ご注意ください</li>
                    <li>各種限定モードには制限時間がございます。制限時間を過ぎると通常に戻りますのでご注意ください</li>
                    <li>シルバー会員様はEXE.99のみ、EXE.319はゴールド会員様のみ開放となります</li>
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