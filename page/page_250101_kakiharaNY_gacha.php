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
$days = "250101";
$CharaName = "柿原晶【迎新来轟】";
$GachaName = "柿原晶【迎新来轟】";

$top_image ="250101_page_NewCharacter.png";/*トップ画像*/ 
$top_image2 ="250101_page_kakihara.png";/*登場画像*/ 
$icon_image ="00188.png"; /*アイコン*/
$eqicon_image01 ="eq_00108.png"; /*装備アイコン*/
$eqicon_image02 ="eq_00109.png"; /*装備アイコン*/

$element_color = "gray";/*属性(red/blue/green/yellow/purple/gray)*/

$status_hp  = 2081;/*耐久力*/
$status_atk = 561;/*攻撃力*/
$status_def = 435;/*防御力*/
$status_spd = 220;/*素早さ*/

$eq01_status_hp  = 400;/*耐久力*/
$eq01_status_atk = 00;/*攻撃力*/
$eq01_status_def = 0;/*防御力*/
$eq01_status_spd = 0;/*素早さ*/

$eq02_status_hp  = 1000;/*耐久力*/
$eq02_status_atk = 00;/*攻撃力*/
$eq02_status_def = 400;/*防御力*/
$eq02_status_spd = 0;/*素早さ*/

$status_sum = $status_hp + $status_atk + $status_def + $status_spd ;/*総合力(自動)*/
$eq_status_sum = $eq01_status_hp + $eq01_status_atk + $eq01_status_def + $eq01_status_spd + $eq02_status_hp + $eq02_status_atk + $eq02_status_def + $eq02_status_spd;/*装備総合力(自動)*/

$Lskill_name ="新年大暴走"; /*リーダースキル名*/
$Lskill_effect="味方全体の攻撃力を30％アップ+10秒間必要スキルゲージを10％減少+10秒間20%上昇の鋭化"; /*リーダースキル内容*/

$skill_name ="轟拳"; /*スキル名*/
$skill_effect ="敵2体に無属性300%ダメージ"; /*スキル内容*/
$skill_effectMAX ="敵2体に無属性<span class=\"txtYellow fs-12\">750%</span>ダメージ</span>"; /*スキル内容*/
  
$eq_skill_name ="新年大暴走"; /*スキル名*/
$eq_skill_effect ="味方全体の全属性耐性を30秒間<span class=\"txtYellow fs-12\">30％</span>アップ+自分自身の麻痺耐性を<span class=\"txtYellow fs-12\">100％</span>アップ+足止耐性を<span class=\"txtYellow fs-12\">100％</span>アップ"; /*スキル内容*/


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
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250101_ban_kakihara_01.png" width="100%" alt="">
                  </div>
                </div>

                <div class="index-4" id="releasegacha">新キャラ <? echo $CharaName;?> 登場‼</div>

                <div id="image_padding" class="mt-15">
                  <div align="center">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250101_page_kakihara.png"
                      alt="ガチャ" width="100%">
                  </div>
                </div>

                <div class="tabbox mt-20">
                  <?//=========タブ始まり=========//?>

                  <?//3日間限定ガチャ?>
                  <?//=========タブ始まり=========//?>



                  <input type="radio" name="tabset" id="tabchecksilver10"checked>
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver10" class="tab1">★６について</label>

                  <div class="tabsilver" id="tabsilver10">
                    <div class="mt-20" style="position: relative; left: -30px;">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/00188chara.png"
                        alt="イクトガチャ" width="100%">
                    </div>
                    <p class="con-2 fs-12">
                    ★６は進化不要!!<br> ガチャで入手した段階で★６になっているぞ!! 速攻で環境に入れる事が可能!!<br><br>
                    <span class="txtGreen">【魅力.1】</span>進化不要!! 獲得時から★６!!<br><br>
                  	<span class="txtGreen">【魅力.2】</span>ステータの最大値が桁違い!! <span class="txtYellow">★５の約３倍</span>までステータスが上がる!!<br><br>
                    <span class="txtGreen">【魅力.3】</span>限界を超えた更なる強化が可能!! 鍛技+25 / 限突+40 / 覚醒+40までとことん強化できる!!<br><br>
                    <span class="txtGreen">【魅力.4】</span>ガチャで重複した場合は<span class="txtYellow">魂×1,000!!</span>魂を大量獲得できる!!<br><br>
                </p>

                  </div>
                  <?//=========タブ1END=========//?>



                  <input type="radio" name="tabset" id="tabchecksilver5" >
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver5" class="tab1">極ガチャ</label>

                  <div class="tabsilver" id="tabsilver5">

                    <div class="index-2">開催期間</div>
                    <p class="con-2">01/01 0:00 ~ 01/06 0:00</p>

                    <p class="index-2">3日間&有償極石限定!!</p>
                    <div class="mt-20">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250101_rush_kakihara_02.png"
                        alt="ガチャ" width="100%">
                    </div>
                    <div class="con-2">
                      <p class="fs-12"><br>
                        ・ステップ50の期間限定ガチャ!!<br>
                        ・5ステップごとに<span class="txtYellow">ピックアップ獲得チャンス</span>!!<br>
                        ・<span class="txtYellow"><? echo $CharaName;?> / ★４装備：愛車の鍵 / ★４装備：相棒</span>を狙え!!<br>
                        ・50ステップの確定枠ではいずれかが<span class="txtYellow fs-14">確定</span>!!</p>
                      </p>
                    </div>
                    <div class="frame-1 mt-20 mb-20">
                      <p class="fs16 fw-b ta-c">【極】ガチャについて</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2">
                        <li>ステップアップガチャとなっており、ステップ50で<span class="txtYellow"><? echo $CharaName;?>・愛車の鍵・相棒</span>のいずれかが確定で入手できます。</li>
                        <li>今回の極ガチャはキャラ確定ではございませんのでご注意ください。</li>
                        <li>本ピックアップガチャにつきましても、魂×1-4が実装されております。こちらは仕様となりますのでご了承ください。</li>
                        <li>本ピックアップガチャは5日間限定・有償通貨のみの実装となっております。ご了承ください。</li>
                      </ol>
                    </div>

                  </div>
                  <?//=========タブ1END=========//?>


                  <input type="radio" name="tabset" id="tabchecksilver1">
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver1" class="tab1">通常ガチャ</label>

                  <div class="tabsilver" id="tabsilver1">

                    <div class="index-2">開催期間</div>
                    <p class="con-2">01/01 0:00 ~ 01/15 12:00</p>

                    <p class="index-2">期間限定の<span class="red fs16">ガチャ</span>を開催！</p>
                    <div class="mt-20">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250101_setting_NewCharacter.png"
                        alt="イクトガチャ" width="100%">
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
                            高級懐中時計<br>【謹賀新年.2025Ver】</td>
                          <td valign="middle" style="vertical-align: middle;"><img
                              src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/eq_00110.png"
                              width="100%" alt=""></td>
                          <td valign="middle" style="vertical-align: middle;">80</td>
                          <td valign="middle" style="vertical-align: middle;">80</td>
                          <td valign="middle" style="vertical-align: middle;">80</td>
                          <td valign="middle" style="vertical-align: middle;">60</td>
                        </tr>
                        <tr>
                          <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                            ・戦闘開始時自身の素早さを10秒間20％アップ<br></td>
                        </tr>
                        <tr>
                          <td rowspan="2" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                            高級懐中時計<br>【初日の出】</td>
                          <td valign="middle" style="vertical-align: middle;"><img
                              src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/eq_00111.png"
                              width="100%" alt=""></td>
                          <td valign="middle" style="vertical-align: middle;">80</td>
                          <td valign="middle" style="vertical-align: middle;">60</td>
                          <td valign="middle" style="vertical-align: middle;">60</td>
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
                  <label for="tabchecksilver2" class="tab1">柿原詳細</label>

                  <div class="tabsilver" id="tabsilver2">
            <!-- TOP画像(事前にS3に画像を投入する必要有)-->
            <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/<?php echo $top_image2 ?>" alt="">
       
                                
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


                                    <p class="ta-c fs-16">『ん？あんまり強くなくね？』と思ったそこのあなた!!<br>大間違いです!! 最大総合力比較を刮目せよ!! </p><br>
                                    <p class="ta-c fs-14">▼ 最大総合力比較 ▼</p>
                    <!--アイコンまとめ-->
                    <table id="Table01" class="mt-20 fs-12">
                    <tbody>
                      <tr>
                        <th style="width:35%;">画像</th>
                        <th style="width:20%;">体力</th>
                        <th style="width:15%;">攻撃</th>
                        <th style="width:15%;">防御</th>
                        <th style="width:15%;">素早</th>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_<?php echo $icon_image ?>" width="80%" alt="イクト"><br>柿原晶【迎新来轟】</td>
                        <td valign="middle" style="vertical-align: middle;">12,403</td>
                        <td valign="middle" style="vertical-align: middle;">2,962</td>
                        <td valign="middle" style="vertical-align: middle;">2,707</td>
                        <td valign="middle" style="vertical-align: middle;">308</td>
                      </tr>
                      <tr>
                        <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 1.2rem !important;">
                      総合力：<span class="txtYellow">18,380</span><br></td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00186_A.png" width="80%" alt=""><br>桜庭陽介</td>
                        <td valign="middle" style="vertical-align: middle;">4,178</td>
                        <td valign="middle" style="vertical-align: middle;">1,242</td>
                        <td valign="middle" style="vertical-align: middle;">440</td>
                        <td valign="middle" style="vertical-align: middle;">493</td>
                      </tr>
                      <tr>
                        <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 1.2rem !important;">
                      総合力：<span class="txtYellow">6,353</span><br></td>
                      </tr>
                    </td>
                    </tbody>
                  </table>
                  ※桜庭には「警察手帳」「龍の手がかり」装備想定。<br>※柿原は「愛車の鍵」と「相棒」装備想定。<br>※実際の総合力と誤差がある場合がございます。目安として参照ください。


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