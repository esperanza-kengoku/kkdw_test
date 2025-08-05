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
$days = "250315";
$CharaName = "メイファン";
$GachaName = "メイファン";

$top_image ="250315_page_NewCharacter.png";/*トップ画像*/ 
$top_image2 ="250315_page_meifan.png";/*登場画像*/ 
$icon_image ="00153.png"; /*アイコン*/
$eqicon_image01 ="eq_00124.png"; /*装備アイコン*/
$eqicon_image02 ="eq_00125.png"; /*装備アイコン*/

$element_color = "blue";/*属性(red/blue/green/yellow/purple/gray)*/

$status_hp  ="2,387";/*耐久力*/
$status_atk = 277;/*攻撃力*/
$status_def = 326;/*防御力*/
$status_spd = 262;/*素早さ*/

$eq01_status_hp  = 120;/*耐久力*/
$eq01_status_atk = 120;/*攻撃力*/
$eq01_status_def = 120;/*防御力*/
$eq01_status_spd = 0;/*素早さ*/

$eq02_status_hp  = 400;/*耐久力*/
$eq02_status_atk = 800;/*攻撃力*/
$eq02_status_def = 320;/*防御力*/
$eq02_status_spd = 0;/*素早さ*/

$status_sum = $status_hp + $status_atk + $status_def + $status_spd ;/*総合力(自動)*/
$eq_status_sum = $eq01_status_hp + $eq01_status_atk + $eq01_status_def + $eq01_status_spd + $eq02_status_hp + $eq02_status_atk + $eq02_status_def + $eq02_status_spd;/*装備総合力(自動)*/

$Lskill_name ="バレットラッシュ"; /*リーダースキル名*/
$Lskill_effect="味方全体の攻撃力を40％アップ+防御力を10％アップ+素早さを10％アップ"; /*リーダースキル内容*/

$skill_name ="ブラッディ・メアリー"; /*スキル名*/
$skill_effect ="戦闘不能の味方3体を攻撃力100%分回復して蘇生(全員生存の場合は回復のみ)+敵全体のスキルゲージ上昇を5秒間無効+味方全体の剛属性特攻を5秒間100％増加+敵全体に柔属性200％ダメージ×5"; /*スキル内容*/
$skill_effectMAX ="戦闘不能の味方3体を<span class=\"txtYellow fs-12\">攻撃力200%分回復して蘇生</span>(全員生存の場合は回復のみ)+敵全体のスキルゲージ上昇を<span class=\"txtYellow fs-12\">5秒間無効</span>+味方全体の剛属性特攻を<span class=\"txtYellow fs-12\">5秒間200％</span>増加+敵全体に<span class=\"txtYellow fs-12\">柔属性400％ダメージ×5</span>"; /*スキル内容*/
  
$eq_skill_name ="血祭"; /*スキル名*/
$eq_skill_effect ="戦闘開始時、敵全体の回避耐性を<span class=\"txtYellow fs-12\">100％増加(回避無効)</span>+敵全体のスキルゲージ上昇を<span class=\"txtYellow fs-12\">5秒間無効</span>+味方全体の剛属性特攻を<span class=\"txtYellow fs-12\">5秒間200％増加</span>"; /*スキル内容*/


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
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250315_ban_NewCharacter_001.png" width="100%" alt="">
                  </div>
                </div>

                <div class="index-4" id="releasegacha">新キャラ <? echo $CharaName;?> 登場‼</div>

                <div id="image_padding" class="mt-15">
                  <div align="center">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250315_page_NewCharacter.png"
                      alt="ガチャ" width="100%">
                  </div>
                </div>

                <div class="tabbox mt-20">
                  <?//=========タブ始まり=========//?>

                  <?//3日間限定ガチャ?>


                  <input type="radio" name="tabset" id="tabchecksilver5" checked>
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver5" class="tab1">ガチャ詳細</label>

                  <div class="tabsilver" id="tabsilver5">

                    <div class="index-2">開催期間</div>
                    <p class="con-2">03/15 12:00~ 03/20 12:00</p>


                    <div class="mt-20">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/<? echo $days;?>_ban_NewCharacter_001.png"
                        alt="ガチャ" width="100%">
                    </div>

                <p class="ta-c fs-12">▼ ガチャ性能比較 ▼</p>
                  <table id="Table01" class="mt-20 fs-12">
                      <tbody>
                        <tr>
                        <th style="width:25%;">項目</th>
                          <th style="width:25%;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/setting001.png"
                          alt="イクトガチャ" width="100%">【極】</th>
                          <th style="width:25%;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/setting002.png"
                          alt="イクトガチャ" width="100%">【超】</th>
                          <th style="width:25%;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/setting003.png"
                          alt="イクトガチャ" width="100%">キャラガチャ</th>
                          
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">★5</td>
                        <td valign="middle" style="vertical-align: middle;">○</td>
                        <td valign="middle" style="vertical-align: middle;">×</td>
                        <td valign="middle" style="vertical-align: middle;">×</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">専用装備</td>
                        <td valign="middle" style="vertical-align: middle;">○</td>
                        <td valign="middle" style="vertical-align: middle;">×</td>
                        <td valign="middle" style="vertical-align: middle;">×</td>
                      </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;">★3</td>
                        <td valign="middle" style="vertical-align: middle;">×</td>
                        <td valign="middle" style="vertical-align: middle;">◎</td>
                        <td valign="middle" style="vertical-align: middle;">○</td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">通貨</td>
                        <td valign="middle" style="vertical-align: middle;">有償限定</td>
                        <td valign="middle" style="vertical-align: middle;">指定なし</td>
                        <td valign="middle" style="vertical-align: middle;">指定なし</td>
                      </tr>

                      </tbody>
                    </table>
                    ◎・・・確定!!<br>
                    ○・・・高確率!!<br>
                    ×・・・排出ナシ<br>

                    <div class="frame-1 mt-20 mb-20 fs-12">
                      <p class="fw-b ta-c">【極】ガチャ</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2 fs-12">
                        <li><span class="txtYellow"><? echo $CharaName;?>・真紅のピアス・白蝶のネックレス</span>のいずれかが入手できます</li>
                        <li>ガチャ10回でチャンスに突入します</li>
                        <li>チャンスの突破率は10％です。<span class="txtYellow">10％を突破すると★5<? echo $CharaName;?>が確定</span>で入手できます</li>
                        <li>獲得の期待値は以前までの極ガチャと同様ですが、ステップ50まで挑戦せずにチャンスを得る事ができ、引き次第で時短入手が可能です</li>
                        <li>専用装備が入手できるのは極ガチャのみです</li>
                        <li>本ピックアップガチャは5日間限定・有償通貨のみの実装となっております。ご了承ください</li>
                      </ol>
                    </div>
                    <div class="frame-1 mt-20 mb-20 fs-12">
                      <p class="fw-b ta-c">【超】ガチャ</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2 fs-12">
                        <li><span class="txtYellow">100回〜110回以内に確実に★3<? echo $CharaName;?></span>が確定で入手できます</li>
                        <li>50回目前後で<span class="txtYellow">綾瀬かメイファンどちらかが確定する</span>限定モードが発動します</li>
                        <li>超ガチャは<span class="txtYellow">通常極石</span>でも挑戦が可能です</li>
                        <li>超ガチャはキャラを確定で入手できる仕様ですが、専用装備は排出されません。ご注意ください</li>
                        <li>本ピックアップガチャは5日間限定となっております。ご了承ください</li>
                      </ol>
                    </div>
                    <div class="frame-1 mt-20 mb-20 fs-12">
                      <p class="fw-b ta-c">キャラガチャ</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2 fs-12">
                        <li>通常のキャラガチャにメイファンが追加されております</li>
                      </ol>
                    </div>

                    <div class="frame-1 mt-20 mb-20 fs-12">
                      <p class="fw-b ta-c">注意事項</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2 fs-12">
                        <li>ページ内の表記のガチャ回数は11連ガチャを1回としてカウントしております。11連=11回ではございません。ご注意ください</li>
                        <li>一括ガチャを実行した場合、獲得内容については確認ができますがどのモードで何が排出されたかは確認ができません。ご注意ください</li>
                        <li>何回ガチャを実行したか？を表示する機能は現状ございません。大変恐縮ですが、ガチャ回数につきましてはご自身でご確認ください</li>
                      </ol>
                    </div>



                  </div>
                  <?//=========タブ1END=========//?>

                  <?/*  */?>
                  <input type="radio" name="tabset" id="tabchecksilver2">
                  <label for="tabchecksilver2" class="tab1">メイファン詳細</label>

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
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00153.png" width="100%" alt="御堂"><br>メイファン</td>
                        <td valign="middle" style="vertical-align: middle;">8,255</td>
                        <td valign="middle" style="vertical-align: middle;">1,818</td>
                        <td valign="middle" style="vertical-align: middle;">1,497</td>
                        <td valign="middle" style="vertical-align: middle;">354</td>
                      </tr>
                      <tr>
                        <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 1.2rem !important;">
                      総合力：<span class="txtYellow">11,924</span><br></td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00181_A.png" width="100%" alt="御堂"><br>黒龍</td>
                        <td valign="middle" style="vertical-align: middle;">6,852</td>
                        <td valign="middle" style="vertical-align: middle;">1,767</td>
                        <td valign="middle" style="vertical-align: middle;">2,236</td>
                        <td valign="middle" style="vertical-align: middle;">300</td>
                      </tr>
                      <tr>
                        <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 1.2rem !important;">
                      総合力：<span class="txtYellow">11,155</span><br></td>
                      </tr>
                    </td>

                    </tbody>
                  </table>
                  ※メイファンには「真紅のピアス」と「白蝶のネックレス」をそれぞれ装備した想定で算出しております。<br>※黒龍には「青龍刀」と「煙管」それぞれを装備して算出しています。<br>※実際の総合力と誤差がある場合がございます。目安として参照ください。


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