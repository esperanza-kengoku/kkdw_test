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
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240727_ban_EXE.png"
                        alt="CPバナー" width="100%" class="header_img">
                       
                    </div>
                  </div>

                 
                  <div class="tabbox mt-20">
                    <?//=========タブ始まり=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver9" checked>
                    <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                    <label for="tabchecksilver9" class="tab1">※更新!!※EXE限定キャラ登場!!</label>

                    <div class="tabsilver" id="tabsilver9">

                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250328_page_NewCharacter.png" alt="BD01" width="100%" class="header_img">


                    <div class="Att3">
                    <p class="Att4">【EXE限定!!】★６鬼塚仁登場!!</p>

                    <ol class="notes-1">
                      <li>EXE会員の恩恵がさらに莫大に!! なんとEXEガチャ限定で<span class="txtYellow">★６鬼塚仁</span>が入手できる!!</li>
                      <li>ガチャの仕様も大幅に更新!! EXE.199を廃止し、EXE.319が3,000極石に調整されたぞ!! EXE.319は通常極石で挑戦可能な激アツガチャ!!</li>
                      <li>さらに限定モードまで「時短」できる激アツアイテムも同時に登場!!</li>
                      <li>詳細は各種キャンペーンページをチェック!! 見逃し厳禁!!</li>
                    </ol>
                  </div>

鬼塚紹介
<a href="https://c-hance.co.jp/kengoku/help/news/Character/page_250329_onizuka.php">
<img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250328_ban_NewCharacter.png" width="100%" class="header_img image-link">
</a>

鬼塚ガチャ
<a href="https://c-hance.co.jp/kengoku/help/news/page/page_250329_onizuka_gacha.php">
  <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250328_ban_NewCharacter_001.png"  width="100%" class="header_img">
</a>

購入特典
<a href="https://c-hance.co.jp/kengoku/help/news/page/page_250329_pack001.php">
  <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250329_ban_NewCharacter_002.png" width="100%" alt="">
</a>

                    </div>
                    <?//=========タブ1END=========//?>


                    <input type="radio" name="tabset" id="tabchecksilver6">
                    <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                    <label for="tabchecksilver6" class="tab1">EXEメンバーとは？</label>

                    <div class="tabsilver" id="tabsilver6">

                    <div class="Att3">
                    <p class="Att4">【EXE(エグゼクティブ)メンバーズについて】</p>

                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/03142.png"
                        alt="BD01" width="45%" class="header_img">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/03141.png"
                        alt="BD01" width="45%" class="header_img">


                    <ol class="notes-1">
                      <li>エグゼクティブメンバーズは、30日間恩恵を受けられる<span class="txtYellow">ゴールド</span>と、15日間恩恵が受けられるシルバーがございます</li>
                      <li>限定の購入特典で<span class="txtYellow">メンバーズカード</span>を入手して頂くことで、自動的に各種特典が開放されます</li>
                      <li>エグゼクティブメンバーズは総額50万円分以上お得な限られたユーザー様限定の会員制度となります</li>
                      <li>特典内容については各種タブよりご確認ください</li>
                      <li>EXE会員の有効期限は翌月限りとなります（3月入会の場合は4月に適用）。ご注意ください。アイテム名に適用される月を記載しております</li>
                      <li>ゴールドとシルバーを両方ご購入いただいた場合でも、共通の項目については報酬は倍にはなりません。無料ガチャやイベントアイテムはゴールド分とシルバー分の両方が獲得できます</li>
                      <li>EXE会員限定のコンテンツも今後登場する想定となっております</li>
                    </ol>
                  </div>

                  <div class="index-2">特典一覧</div>
                      <table id="Table01" class="mt-20">
                      <tbody>
                        <tr>
                          <th style="width:50%;">ゴールド</th>
                          <th style="width:50%;">シルバー</th>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">EXE99ガチャ・EXE319ガチャ開放</td>
                        <td valign="middle" style="vertical-align: middle;">EXE99ガチャ開放</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">ガチャ11連毎日無料(30日)</td>
                        <td valign="middle" style="vertical-align: middle;">ガチャ11連毎日無料(15日)</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">追加ログインボーナス(4回)</td>
                        <td valign="middle" style="vertical-align: middle;">追加ログインボーナス(2回)</td>
                       </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">襲来イベント<br>攻略アイテム付与</td>
                        <td valign="middle" style="vertical-align: middle;">襲来イベント<br>攻略アイテム付与(半分)</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">制圧イベント攻略<br>アイテム付与</td>
                        <td valign="middle" style="vertical-align: middle;">制圧イベント攻略<br>アイテム付与(半分)</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">追加デイリーミッション<br>(共通)</td>
                        <td valign="middle" style="vertical-align: middle;">追加デイリーミッション<br>(共通)</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">限定パック開放<br>(共通)</td>
                        <td valign="middle" style="vertical-align: middle;">限定パックの開放<br>(共通)</td>
                        </tr>
                      </tbody>
                    </table>


                  <div class="btn01 mt-20 mb-20">
                    <a href="kengokuapp://070_MainShop01">パックを確認する</a>
                  </div>



                    </div>
                    <?//=========タブ1END=========//?>

                    
                    <input type="radio" name="tabset" id="tabchecksilver8">
                    <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                    <label for="tabchecksilver8" class="tab1">継続特典</label>

                    <div class="tabsilver" id="tabsilver8">
                        
                        <div class="index-2">キャンペーン概要</div>
                       <div class="con-2">
                            3月EXEに入会してくださっていたユーザー様が4月EXEに入会すると<br><span class="fg-Gold">特別報酬として継続特典</span>がもらえる！<br><br>
                            希少なアイテム<span class="txtYellow fs-14">時短ガチャパス.99×10 + 10,000極石</span>が貰えるぞ！<br><br>
                        </div>          
                        
                   <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>時短ガチャパス.99はEXE.99ガチャが10回無料でまわせる新アイテムです。極石換算で15,000極石の価値となります</li>
                      <li>シルバー、ゴールドどちらからの継続でも、継続先がシルバー、ゴールドどちらであっても同一の内容が付与されます。</li>
                      <li>付与は4月4日以降、入会者が確定した段階で付与させて頂きます。お時間を頂戴する場合がございますのでご了承ください。</li>
                    </ol>
                  </div>

                    </div>
                    <?//=========タブ1END=========//?>                    
                    
                    <input type="radio" name="tabset" id="tabchecksilver1">
                    <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                    <label for="tabchecksilver1" class="tab1">特典.1</label>

                    <div class="tabsilver" id="tabsilver1">

                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240727_header_EXE_001.png"
                        alt="BD01" width="100%" class="header_img">
                        
                        <div class="index-2">キャンペーン概要</div>
                       <div class="con-2">
                            EXE【ゴールド】は<br><span class="fg-Gold">EXE.319ガチャ・EXE.99ガチャ11連が30日間</span>1回無料！<br><br>
                            EXE【シルバー】は<br><span class="fg-Gold">EXE.99ガチャ11連が30日間</span>1回無料！<br><br>
                            <span class="fg-Gold">対象ガチャがEXEガチャにグレードアップ!!</span><br><br>
                            入会しているだけで超激アツ特典がついてくる!!<br>
                        </div>          
                        
                   <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>11連ガチャ無料は1日1回、0時更新となります。ご注意ください</li>
                      <li>ガチャの切り替わりが発生する日につきましては、新しいガチャ側に無料ガチャを設置している為、12時に更新となります。ご了承ください</li>
                    </ol>
                  </div>

                    </div>
                    <?//=========タブ1END=========//?>
                    
                     <input type="radio" name="tabset" id="tabchecksilver2">
                    <label for="tabchecksilver2" class="tab1">特典.2</label>

                    <div class="tabsilver" id="tabsilver2">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240727_header_EXE_002.png"
                        alt="BD01" width="100%" class="header_img">


                        <div class="index-2">キャンペーン概要</div>
                       <div class="con-2">
                            EXE【ゴールド】は<br><span class="fg-Gold">7日間×4</span>のログインボーナスが追加で貰える！<br><br>
                            EXE【シルバー】は<br><span class="fg-Gold">7日間×2</span>のログインボーナスが追加で貰える！<br><br>
                            毎日貰える極石が増加!!<br>

                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>ログインボーナスの期間は1日〜14日の14日間となります</li>
                      <li>ゴールドはさらに15日〜28日の14日間が追加となります</li>
                      <li>1日に加入をした場合、既にログインボーナスを受け取っている場合は反映されませんのでご注意ください</li>
                    </ol>
                  </div>

                        </div>

                    </div>
                    <?//=========タブ2END=========//?>
                     
                    <input type="radio" name="tabset" id="tabchecksilver3">
                    <label for="tabchecksilver3" class="tab1">特典.3</label>

                    <div class="tabsilver" id="tabsilver3">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240727_header_EXE_003.png"
                        alt="BD01" width="100%" class="header_img">
                    <div class="index-2">キャンペーン概要</div>
                    <p class="con-2">
                     イベント開始時、攻略アイテムが貰える！<br>
                     スキップチケットや闘気など、イベント攻略に必要なアイテムを大量に獲得できる!!<br>
                     イベントパックを購入するよりもはるかにお得!!</p>

                     <div class="index-2">EXEゴールド</div>
                     <!--アイコンまとめ-->
                       <table id="Table01" class="mt-20">
                       <tbody>
                          <tr>
                            <th style="width:40%;">アイテム</th>
                            <th style="width:60%;">個数</th>
                          </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/00024.png" width="30%" alt=""></td>
                          <td valign="middle" style="vertical-align: middle;">【襲来】闘気×30</td>
                          </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/03049.png" width="30%" alt=""></td>
                          <td valign="middle" style="vertical-align: middle;">【襲来】スキップチケット×10</td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <th style="width:40%;">アイテム</th>
                            <th style="width:60%;">個数</th>
                          </tr>
                         <tr>
                          <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/03049.png" width="30%" alt=""></td>
                          <td valign="middle" style="vertical-align: middle;" class="fs-14">【制圧】スキップチケット×50</td>
                         </tr>
                        </tbody>
                      </table>



                      <div class="index-2">EXEシルバー</div>
                     <!--アイコンまとめ-->
                       <table id="Table01" class="mt-20">
                       <tbody>
                          <tr>
                            <th style="width:40%;">アイテム</th>
                            <th style="width:60%;">個数</th>
                          </tr>
                          <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/00024.png" width="30%" alt=""></td>
                          <td valign="middle" style="vertical-align: middle;">【襲来】闘気×15</td>
                          <tr>
                          <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/03049.png" width="30%" alt=""></td>
                          <td valign="middle" style="vertical-align: middle;">【襲来】スキップチケット×5</td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <th style="width:40%;">アイテム</th>
                            <th style="width:60%;">個数</th>
                          </tr>
                         <tr>
                          <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/ItemIcon/03049.png" width="30%" alt=""></td>
                          <td valign="middle" style="vertical-align: middle;" class="fs-14">【制圧】スキップチケット×25</td>
                         </tr>
                        </tbody>
                      </table>

                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>攻略アイテムはイベント開始時に自動で付与させて頂きます</li>
                      <li>イベント開始毎に付与させて頂きますので、イベントが月間で２回あれば毎回付与されます</li>
                      <li>順次付与させて頂きますため、付与までには多少お時間をいただく場合がございます。ご了承ください</li>
                    </ol>
                  </div>
                        </div>
                        <?//=========タブ3END=========//?>


                    <input type="radio" name="tabset" id="tabchecksilver4">
                    <label for="tabchecksilver4" class="tab1">特典.4</label>

                    <div class="tabsilver" id="tabsilver4">                 

                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240727_header_EXE_004.png"
                        alt="BD01" width="100%" class="header_img">
                    
                    <div class="index-2">キャンペーン概要</div>
                    <p class="con-2">
                      同じデイリーミッションをクリアしてもEXE会員なら報酬が増量!!<br>毎日のデイリーミッションが豪華になる分、最終的に獲得できる報酬は圧倒的差が——!?<br>
                    EXE会員になって豪華報酬を手に入れろ!!<br>※ミッションはゴールド・シルバーどちらかに入会していれば開放されます。報酬の差はございません</p>
                    <br>

                    <div class="index-2">特典一覧(30日分)</div>
                      <table id="Table01" class="mt-20">
                      <tbody>
                        <tr>
                          <th style="width:60%;">追加ミッション</th>
                          <th style="width:40%;">報酬</th>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">【EXE】地下闘技場に１回<br>参加しろ!!</td>
                        <td valign="middle" style="vertical-align: middle;">進化コイン×150</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">【EXE】地下闘技場に３回<br>参加しろ!!</td>
                        <td valign="middle" style="vertical-align: middle;">覚醒コイン×150</td>
                       </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">【EXE】地下闘技場に５回<br>参加しろ!!</td>
                        <td valign="middle" style="vertical-align: middle;">鍛技コイン×150</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">【EXE】地下闘技場に10回<br>参加しろ!!</td>
                        <td valign="middle" style="vertical-align: middle;">極石×3,000</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">【EXE】いずれかの強化鍛錬演習を1回制圧しろ!!</td>
                        <td valign="middle" style="vertical-align: middle;">強化玉(特大)×150</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">【EXE】いずれかの強化鍛錬演習を3回制圧しろ!!</td>
                        <td valign="middle" style="vertical-align: middle;">研磨玉(大)×150</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">【EXE】いずれかの強化鍛錬演習を5回制圧しろ!!</td>
                        <td valign="middle" style="vertical-align: middle;">覚醒書×150</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">【EXE】いずれかの強化鍛錬演習を10回制圧しろ!!</td>
                        <td valign="middle" style="vertical-align: middle;">鍛技書×150</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">【EXE】いずれかの財札強奪計画を1回制圧しろ!!</td>
                        <td valign="middle" style="vertical-align: middle;">札×750,000</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">【EXE】いずれかの財札強奪計画を3回制圧しろ!!</td>
                        <td valign="middle" style="vertical-align: middle;">札×2,400,000</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">【EXE】いずれかの財札強奪計画を5回制圧しろ!!</td>
                        <td valign="middle" style="vertical-align: middle;">札×4,500,000</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">【EXE】いずれかの財札強奪計画を10回制圧しろ!!</td>
                        <td valign="middle" style="vertical-align: middle;">札×9,000,000</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">【EXE】抗争に1回参加しろ!!</td>
                        <td valign="middle" style="vertical-align: middle;">抗争pt×3,000</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">【EXE】抗争に2回参加しろ!!</td>
                        <td valign="middle" style="vertical-align: middle;">抗争pt×3,000</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">【EXE】抗争に3回参加しろ!!</td>
                        <td valign="middle" style="vertical-align: middle;">抗争pt×3,000</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">【EXE】デイリーミッションを<br>30個達成</td>
                        <td valign="middle" style="vertical-align: middle;">極石×30,000</td>
                        </tr>

                      </tbody>
                    </table>


                    <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>表示されている個数は30日分の合計です。１日あたりではございませんのでご注意ください</li>
                      <li>入会者のみ該当のミッションが開放されます。その他ユーザー様には反映されませんのでご注意ください</li>
                      <li>各月の1日に入会した場合、ミッションの反映が午前３時となりますため、翌日からとなる場合がございます。ご注意ください</li>
                    </ol>
                  </div>


                    </div> 
                    
                    <?//=========タブ4END=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver5" >
                    <label for="tabchecksilver5" class="tab1">特典.5</label>

                    <div class="tabsilver" id="tabsilver5">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240727_header_EXE_005.png"
                        alt="BD01" width="100%" class="header_img">

                   <div class="index-2">キャンペーン概要</div>
                    <p class="con-2">
                    EXE会員限定のガチャが登場!!<br>シルバーはEXE.99が、ゴールドはEXE.99とEXE.319が開放!! 加入必須のEXE会員を見逃すな!!</p>
                    <br>

                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250328_setting_NewCharacter _001.png"
                        alt="BD01" width="100%" class="header_img">
                        <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250328_setting_NewCharacter _002.png"
                        alt="BD01" width="100%" class="header_img">


                        <div class="index-2">限定パック</div>
                    <p class="con-2">
                    不定期に販売される購入特典にて、EXE会員だけ増量した限定パックが購入ができる!!<br>拳極乱舞のEXE限定パックのようなパックが随時登場!! 詳細を見逃すな!!</p>
                    <br>


                    </div>
                   <?//=========タブ8END=========//?>

                  </div>
                  <?//=========tabbox タブ終わり=========//?>


                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                    <li>通常決済・プレミアム決済にてゴールドを2枚入手することも可能となりますが、この場合は報酬は重複いたしません。必ずご確認ください。</li>
                       <li>EXEの有効期限は、便宜上30日と記載しておりますが、各月の最終日までは恩恵を受けられます。ご了承ください。</li>
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