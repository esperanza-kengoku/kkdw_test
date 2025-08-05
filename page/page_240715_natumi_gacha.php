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
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240715_ban_NewCharacter_001.png" width="100%" alt="">
                  </div>
                </div>

                <div class="index-4" id="releasegacha">新キャラ夏見真衣登場‼</div>

                <div id="image_padding" class="mt-15">
                  <div align="center">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240715_page_NewCharacter_001.png"
                      alt="夏見ガチャ" width="100%">
                  </div>
                </div>

                <?//3日間限定ガチャ?>
                <div class="tabbox mt-20">
                  <?//=========タブ始まり=========//?>

                  <input type="radio" name="tabset" id="tabchecksilver5" checked>
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver5" class="tab1">極ガチャ</label>

                  <div class="tabsilver" id="tabsilver5">

                    <div class="index-2">開催期間</div>
                    <p class="con-2">7/15 12:00 ~ 7/18 12:00</p>

                    <p class="index-2">３日間&有償極石限定!!<span class="red fs16">ステップ20で確定する限定ガチャ</span>が登場！</p>
                    <div class="mt-20">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240715_rush_NewCharacter_002.png"
                        alt="夏見ガチャ" width="100%">
                    </div>
                    <div class="con-2">
                      <p><span class="fg-Gold fs16">夏見真衣や次回特攻装備の確率が超絶アップ!!<br>しかも5ステップ毎に夏見の魂だけが排出される激アツモードに突入する特別仕様!!</span>
                        さらに確定枠で夏見を確実に入手可能！ 期間限定の激アツガチャを見逃すな！</p>
                      </p>
                    </div>
                    <div class="frame-1 mt-20 mb-20">
                      <p class="fs16 fw-b ta-c">【極】ガチャについて</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2">
                        <li>ステップアップガチャとなっており、ステップ20で<span class="fg-Gold fs16">夏見が確定</span>で入手できます。</li>
                        <li>ステップアップ毎に夏見の排出確率が上がっていきます</li>
                        <li>本ピックアップガチャにつきましても、魂×1-4が実装されております。こちらは仕様となりますのでご了承ください。</li>
                        <li>本ピックアップガチャは3日間限定・有償通貨のみの実装となっております。ご了承ください。</li>
                      </ol>
                    </div>

                  </div>
                  <?//=========タブ1END=========//?>

                  <?//=========タブ始まり=========//?>

                  <input type="radio" name="tabset" id="tabchecksilver1" checked>
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver1" class="tab1">通常ガチャ</label>

                  <div class="tabsilver" id="tabsilver1">

                    <div class="index-2">開催期間</div>
                    <p class="con-2">7/15 12:00 ~ 8/01 12:00</p>

                    <p class="index-2">期間限定で<span class="red fs16">夏見PUガチャ</span>を開催！</p>
                    <div class="mt-20">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240715_setting_NewCharacter.png"
                        alt="一ノ瀬ガチャ" width="100%">
                    </div>
                    <div class="con-2">
                      <p><span class="fg-Gold fs16">夏見真衣をピックアップ！</span>
                        期間限定の激アツガチャを見逃すな！</p>
                    </div>

                  </div>
                  <?//=========タブ1END=========//?>


                  <input type="radio" name="tabset" id="tabchecksilver2">
                  <label for="tabchecksilver2" class="tab1">確変モード</label>

                  <div class="tabsilver" id="tabsilver2">
                    <div class="index-2 mb-20">蜃気楼ノ太刀</div>
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240715_rush_NewCharacter_001.png"
                      alt="二階堂龍" width="100%" class="header_img">
                    <p class="con-2">★３確率：<span class="fg-Gold">約２.０％</span></p>

                    

                    <div class="frame-1 mt-20 mb-20">
                      <p class="fs16 fw-b ta-c">【確変について】</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2">
                        <li>11連ガチャきっかけで確変モードが発動します。確変中は★３確率が大幅にアップします</li>
                        <li>確変は時間限定です。時間が経過しますと通常モードに切り替わりますのでご注意ください</li>
                      </ol>
                    </div>

                  </div>
                  <?//=========タブ2END=========//?>


                  <input type="radio" name="tabset" id="tabchecksilver3">
                  <label for="tabchecksilver3" class="tab1">次回特攻・新装備紹介</label>
                  <div class="tabsilver" id="tabsilver3">
                    <!--アイコンまとめ-->
                    <table id="Table01" class="mt-20">
                      <tbody>
                        <tr>
                          <th style="width:25%;">名称</th>
                          <th style="width:15%;">画像</th>
                          <th style="width:15%;">体力</th>
                          <th style="width:15%;">攻撃</th>
                          <th style="width:15%;">防御</th>
                          <th style="width:15%;">素早</th>
                        </tr>
                        <tr>
                          <td rowspan="2" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                            高級懐中時計<br>【碧い珊瑚礁】</td>
                          <td valign="middle" style="vertical-align: middle;"><img
                              src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/eq_00078.png"
                              width="100%" alt=""></td>
                          <td valign="middle" style="vertical-align: middle;">100</td>
                          <td valign="middle" style="vertical-align: middle;">40</td>
                          <td valign="middle" style="vertical-align: middle;">20</td>
                          <td valign="middle" style="vertical-align: middle;">80</td>
                        </tr>
                        <tr>
                          <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                            ・戦闘開始時自身の素早さを15秒間20％アップ<br></td>
                        </tr>
                        <tr>
                          <td rowspan="2" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                            高級懐中時計<br>【七夕】</td>
                          <td valign="middle" style="vertical-align: middle;"><img
                              src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/eq_00079.png"
                              width="100%" alt=""></td>
                          <td valign="middle" style="vertical-align: middle;">220</td>
                          <td valign="middle" style="vertical-align: middle;">0</td>
                          <td valign="middle" style="vertical-align: middle;">0</td>
                          <td valign="middle" style="vertical-align: middle;">0</td>
                        </tr>
                        <tr>
                          <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                            ・なし<br></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                  <?//=========タブ3END=========//?>


                </div>
                <?//=========tabbox タブ終わり=========//?>

                <div class="btn01 mt-20 mb-20 ta-c">
                  <a href="kengokuapp://120_Gacha">ガチャを確認する</a>
                </div>


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




</body>

</html>