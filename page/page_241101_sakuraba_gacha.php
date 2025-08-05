<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>

<script>
  document.oncontextmenu = () => {
  return false;
};
</script>
<!--//////////////////////↓↓↓編集箇所↓↓↓//////////////////////--> 
<?php
$days = "241101";
$CharaName = "桜庭陽介";
$GachaName = "桜庭陽介";

$top_image ="241101_page_NewCharacter.png";/*トップ画像*/ 
$icon_image ="00186_A.png"; /*アイコン*/
$eqicon_image01 ="eq_00093.png"; /*装備アイコン*/
$eqicon_image02 ="eq_00094.png"; /*装備アイコン*/

$element_color = "blue";/*属性(red/blue/green/yellow/purple/gray)*/

$status_hp  = 1292;/*耐久力*/
$status_atk = 332;/*攻撃力*/
$status_def = 174;/*防御力*/
$status_spd = 220;/*素早さ*/

$eq01_status_hp  = 480;/*耐久力*/
$eq01_status_atk = 0;/*攻撃力*/
$eq01_status_def = 0;/*防御力*/
$eq01_status_spd = 0;/*素早さ*/

$eq02_status_hp  = 400;/*耐久力*/
$eq02_status_atk = 400;/*攻撃力*/
$eq02_status_def = 0;/*防御力*/
$eq02_status_spd = 200;/*素早さ*/

$status_sum = $status_hp + $status_atk + $status_def + $status_spd ;/*総合力(自動)*/
$eq_status_sum = $eq01_status_hp + $eq01_status_atk + $eq01_status_def + $eq01_status_spd + $eq02_status_hp + $eq02_status_atk + $eq02_status_def + $eq02_status_spd;/*装備総合力(自動)*/

$Lskill_name ="己の正義を貫きし者Ⅲ"; /*リーダースキル名*/
$Lskill_effect="味方全体の攻撃力を30％アップ+防御力を20％アップ+素早さを10％アップ"; /*リーダースキル内容*/

$skill_name ="終わりよければ統べて善し3"; /*スキル名*/
$skill_effect ="自身の攻撃・防御・素早さを10秒間30%アップ+敵１体に柔属性400%ダメージ+敵１体に悪属性50%ダメージ×10"; /*スキル内容*/
$skill_effectMAX ="自身の攻撃・防御・素早さを10秒間60%アップ<br>敵１体に<span class=\"txtYellow fs-12\">柔属性800%</span>ダメージ<br>敵１体に<span class=\"txtYellow fs-12\">悪属性100%ダメージ×10</span>"; /*スキル内容*/
  
$eq_skill_name ="警察の心得"; /*スキル名*/
$eq_skill_effect ="装備キャラの<span class=\"txtYellow fs-12\">麻痺耐性を100%</span>アップ<br><span class=\"txtYellow fs-12\">封技耐性を100%</span>アップ<br><span class=\"txtYellow fs-12\">即死耐性を20%</span>アップ"; /*スキル内容*/



?>

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
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/<? echo $days;?>_ban_NewCharacter_001.png" width="100%" alt="">
                  </div>
                </div>

                <div class="index-4" id="releasegacha">新キャラ<? echo $CharaName;?>登場‼</div>

                <div id="image_padding" class="mt-15">
                  <div align="center">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/<? echo $days;?>_page_NewCharacter_001.png"
                      alt="ガチャ" width="100%">
                  </div>
                </div>

                <div class="tabbox mt-20">
                  <?//=========タブ始まり=========//?>

                  <?//3日間限定ガチャ?>
                  <?//=========タブ始まり=========//?>
                  <input type="radio" name="tabset" id="tabchecksilver5" checked>
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver5" class="tab1">極ガチャ</label>

                  <div class="tabsilver" id="tabsilver5">

                    <div class="index-2">開催期間</div>
                    <p class="con-2">11/01 12:00 ~ 11/03 12:00</p>

                    <p class="index-2">３日間&有償極石限定!!</p>
                    <div class="mt-20">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/<? echo $days;?>_rush_NewCharacter_002.png"
                        alt="ガチャ" width="100%">
                    </div>
                    <div class="con-2">
                      <p class="fs-12"><br>
                        ・ステップ50の期間限定ガチャ!!<br>
                        ・・5ステップごとに<span class="txtYellow">ピックアップ獲得チャンス</span>!!<br>
                        ・<span class="txtYellow"><? echo $CharaName;?> / ★４装備：警察手帳 / ★４装備：龍の手がかり</span>を狙え!!<br>
                        ・50ステップの確定枠ではいずれかが<span class="txtYellow fs-14">確定</span>!!</p>
                      </p>
                    </div>
                    <div class="frame-1 mt-20 mb-20">
                      <p class="fs16 fw-b ta-c">【極】ガチャについて</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2">
                        <li>ステップアップガチャとなっており、ステップ50で<span class="txtYellow"><? echo $CharaName;?>・警察手帳・龍の手がかり</span>のいずれかが確定で入手できます。</li>
                        <li>今回の極ガチャはキャラ確定ではございませんのでご注意ください。</li>
                        <li>本ピックアップガチャにつきましても、魂×1-4が実装されております。こちらは仕様となりますのでご了承ください。</li>
                        <li>本ピックアップガチャは3日間限定・有償通貨のみの実装となっております。ご了承ください。</li>
                      </ol>
                    </div>

                  </div>
                  <?//=========タブ1END=========//?>


                  <input type="radio" name="tabset" id="tabchecksilver1">
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver1" class="tab1">通常ガチャ</label>

                  <div class="tabsilver" id="tabsilver1">

                    <div class="index-2">開催期間</div>
                    <p class="con-2">11/01 12:00 ~ 11/15 12:00</p>

                    <p class="index-2">期間限定で<span class="red fs16"><? echo $CharaName;?>PUガチャ</span>を開催！</p>
                    <div class="mt-20">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/<? echo $days;?>_rush_NewCharacter_001.png"
                        alt="アンジェロガチャ" width="100%">
                    </div>
                    <div class="con-2">
                      <p><span class="txtYellow fs16"><? echo $CharaName;?>をピックアップ！</span>
                        期間限定の激アツガチャを見逃すな！</p>
                    </div>

                  </div>
                  <?//=========タブ1END=========//?>

                  <input type="radio" name="tabset" id="tabchecksilver3">
                  <label for="tabchecksilver3" class="tab1">次回特攻装備紹介</label>
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
                            高級懐中時計<br>【新章開幕】</td>
                          <td valign="middle" style="vertical-align: middle;"><img
                              src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/eq_00095.png"
                              width="100%" alt=""></td>
                          <td valign="middle" style="vertical-align: middle;">60</td>
                          <td valign="middle" style="vertical-align: middle;">100</td>
                          <td valign="middle" style="vertical-align: middle;">60</td>
                          <td valign="middle" style="vertical-align: middle;">60</td>
                        </tr>
                        <tr>
                          <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                            ・自身の悪属性特攻を5秒間30％アップ<br></td>
                        </tr>
                        <tr>
                          <td rowspan="2" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                            高級懐中時計<br>【拳極1.5周年】</td>
                          <td valign="middle" style="vertical-align: middle;"><img
                              src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/eq_00096.png"
                              width="100%" alt=""></td>
                          <td valign="middle" style="vertical-align: middle;">100</td>
                          <td valign="middle" style="vertical-align: middle;">100</td>
                          <td valign="middle" style="vertical-align: middle;">0</td>
                          <td valign="middle" style="vertical-align: middle;">100</td>
                        </tr>
                        <tr>
                          <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                            ・なし<br><br></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                  <?//=========タブ3END=========//?>

                  <?/*  */?>
                  <input type="radio" name="tabset" id="tabchecksilver2">
                  <label for="tabchecksilver2" class="tab1">桜庭詳細</label>

                  <div class="tabsilver" id="tabsilver2">
            <!-- TOP画像(事前にS3に画像を投入する必要有)-->
            <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/<?php echo $top_image ?>" alt="">
        <p class="ta-r">※6,000超は進化・覚醒・限突MAX、装備強化MAX時</p>
                                
                                    <div class="second-info">
                                        <div class="second-info__inner inner">
                                            <div class="param-info_icon">
                                                <div class="param-info_icon_chara">
                                                    <!-- アイコン画像([CharaIcon/○○.png]の部分の数字を変更) -->
                                                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_<?php echo $icon_image ?>" alt="">
                                                    <div class="param-info_icon_frame"> 
                                                        <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/frame/IconFrame_4_chara.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="param-info_total">  
                                                <div class="param-info_icon_total">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_total.png" alt="">
                                            </div>
                                            <div class="param-info_icon_line">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_line.png" alt="">
                                                <p class="param-info_text_normal">
                                                <?php echo $status_sum ?>
                                                </p>
                                            </div>
                                            </div>
                                            <div class="param-info_status">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_physical.png" alt="">
                                                <p class="param-info_text_normal">
                                                <?php echo $status_hp ?>
                                                </p>
                                            </div>
                                            <div class="param-info_status">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_attack.png" alt="">
                                                <p class="param-info_text_normal">
                                                <?php echo $status_atk ?>
                                                </p>
                                            </div>
                                            <div class="param-info_status">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_defense.png" alt="">
                                                <p class="param-info_text_normal">
                                                <?php echo $status_def ?>
                                                </p>
                                            </div>
                                            <div class="param-info_status">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_agility.png" alt="">
                                                <p class="param-info_text_normal">
                                                <?php echo $status_spd ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="ta-c fs-14">▼装備ステータス▼</p>
                                    <div class="second-info">
                                        <div class="second-info__inner inner">
                                            <div class="param-info_icon">
                                                <div class="param-info_icon_chara">
                                                    <!-- アイコン画像([CharaIcon/○○.png]の部分の数字を変更) -->
                                                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/<?php echo $eqicon_image01 ?>" alt="">
                                                    <div class="param-info_icon_frame"> 
                                                        <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/frame/IconFrame_3_chara.png" alt="">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="param-info_status">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_physical.png" alt="">
                                                <p class="param-info_text_normal">
                                                <?php echo $eq01_status_hp ?>
                                                </p>
                                            </div>
                                            <div class="param-info_status">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_attack.png" alt="">
                                                <p class="param-info_text_normal">
                                                <?php echo $eq01_status_atk ?>
                                                </p>
                                            </div>
                                            <div class="param-info_status">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_defense.png" alt="">
                                                <p class="param-info_text_normal">
                                                <?php echo $eq01_status_def ?>
                                                </p>
                                            </div>
                                            <div class="param-info_status">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_agility.png" alt="">
                                                <p class="param-info_text_normal">
                                                <?php echo $eq01_status_spd ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="second-info">
                                        <div class="second-info__inner inner">
                                            <div class="param-info_icon">
                                                <div class="param-info_icon_chara">
                                                    <!-- アイコン画像([CharaIcon/○○.png]の部分の数字を変更) -->
                                                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/<?php echo $eqicon_image02 ?>" alt="">
                                                    <div class="param-info_icon_frame"> 
                                                        <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/frame/IconFrame_3_chara.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="param-info_total">  
                                                <div class="param-info_icon_total">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_total.png" alt="">
                                            </div>
                                            <div class="param-info_icon_line">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_line.png" alt="">
                                                <p class="param-info_text_normal">
                                                <?php echo $eq_status_sum ?>
                                                </p>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="param-info_status">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_physical.png" alt="">
                                                <p class="param-info_text_normal">
                                                <?php echo $eq02_status_hp ?>
                                                </p>
                                            </div>
                                            <div class="param-info_status">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_attack.png" alt="">
                                                <p class="param-info_text_normal">
                                                <?php echo $eq02_status_atk ?>
                                                </p>
                                            </div>
                                            <div class="param-info_status">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_defense.png" alt="">
                                                <p class="param-info_text_normal">
                                                <?php echo $eq02_status_def ?>
                                                </p>
                                            </div>
                                            <div class="param-info_status">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_agility.png" alt="">
                                                <p class="param-info_text_normal">
                                                <?php echo $eq02_status_spd ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="third-info">
                                        <div class="third-info__inner inner">
                                            <div class="third-info__items">
                                                <div class="third-info__item-top">
                                                    <div class="third-info__item_<?php echo $element_color ?>-name name-01">リーダー</div>
                                                    <div class="third-info__item_<?php echo $element_color ?>-detail">
                                                    <?php echo $Lskill_name ?>
                                                    </div>
                                                </div>
                                                <div class="third-info__item_<?php echo $element_color ?>-bottom">
                                                    <?php echo $Lskill_effect ?>                      
                                                </div>
                                            </div>
                                            <div class="third-info__items">
                                                <div class="third-info__item-top">
                                                    <div class="third-info__item_<?php echo $element_color ?>-name name-02">通常1</div>
                                                    <div class="third-info__item_<?php echo $element_color ?>-detail">
                                                    <?php echo $skill_name ?>
                                                </div>
                                                </div>
                                                <div class="third-info__item_<?php echo $element_color ?>-bottom">
                                                <?php echo $skill_effect ?>                    </div>
                                            </div>
                                            <div class="third-info__items">
                                                <div class="third-info__item-top">
                                                    <div class="third-info__item_<?php echo $element_color ?>-name name-02 " style="background-color: green;">鍛技MAX</div>
                                                    <div class="third-info__item_<?php echo $element_color ?>-detail">
                                                    <?php echo $skill_name ?>
                                                </div>
                                                </div>
                                                <div class="third-info__item_<?php echo $element_color ?>-bottom">
                                                <?php echo $skill_effectMAX ?>                    </div>
                                            </div>
                                            <div class="third-info__items">
                                                <div class="third-info__item-top">
                                                    <div class="third-info__item_<?php echo $element_color ?>-name name-02 " style="background-color: purple;">装備スキル</div>
                                                    <div class="third-info__item_<?php echo $element_color ?>-detail">
                                                    <?php echo $eq_skill_name ?>
                                                </div>
                                                </div>
                                                <div class="third-info__item_<?php echo $element_color ?>-bottom">
                                                <?php echo $eq_skill_effect ?>                    </div>
                                            </div>
                                        </div>
                                    </div>



                   <p class="ta-c fs-14">▼ 総合力比較 ▼</p>
                    <!--アイコンまとめ-->
                    <table id="Table01" class="mt-20 fs-12">
                    <tbody>
                      <tr>
                        <th style="width:40%;">画像</th>
                        <th style="width:15%;">体力</th>
                        <th style="width:15%;">攻撃</th>
                        <th style="width:15%;">防御</th>
                        <th style="width:15%;">素早</th>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00186_A.png" width="100%" alt=""><br>桜庭陽介</td>
                        <td valign="middle" style="vertical-align: middle;">4,178</td>
                        <td valign="middle" style="vertical-align: middle;">1,242</td>
                        <td valign="middle" style="vertical-align: middle;">440</td>
                        <td valign="middle" style="vertical-align: middle;">493</td>
                      </tr>
                      <tr>
                        <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 1.2rem !important;">
                      総合力：<span class="txtYellow">6,353</span><br></td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00179.png" width="100%" alt=""><br>荒谷賢【質実剛拳】</td>
                        <td valign="middle" style="vertical-align: middle;">3,677</td>
                        <td valign="middle" style="vertical-align: middle;">914</td>
                        <td valign="middle" style="vertical-align: middle;">269</td>
                        <td valign="middle" style="vertical-align: middle;">426</td>
                      </tr>
                      <tr>
                        <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 1.2rem !important;">
                        総合力：<span class="txtYellow">5,286</span>
                      </tr>
                    </td>

                    </tbody>
                  </table>
                  ※荒谷には一夜の再結成を２つ装備した想定で算出しております。<br>※実際の総合力と誤差がある場合がございます。目安として参照ください


                  </div>
                
                  <?//=========タブ2END=========//?>


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