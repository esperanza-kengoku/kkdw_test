<!DOCTYPE html>
<html lang="ja">
    <?php include '../../php/head.php'; ?>
  
  
  
<body>
  
  <script>
  document.oncontextmenu = () => {
  return false;
};
</script>
<!--//////////////////////↓↓↓編集箇所↓↓↓//////////////////////--> 
<?php
$top_image ="250315_page_NewCharacter.png";/*トップ画像*/ 
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
<!--//////////////////////↑↑↑編集箇所↑↑↑//////////////////////--> 

<header class="header">
        <!-- TOP画像(事前にS3に画像を投入する必要有)-->
        <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/<?php echo $top_image ?>" alt="">
    </header>
    <main class="main">
        
        <div class="tabbox mt-20">
        <?//=========タブ始まり=========//?>
            <input type="radio" name="tabset" id="tabchecksilver1">
            <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
            <label for="tabchecksilver1" class="tab1">ステータス詳細</label>
                <div class="tabsilver" id="tabsilver1">
                            
                                <div class="second-info">
                                    <div class="second-info__inner inner">
                                        <h2 class="second-info__title info-title">
                                        <img src="<?php include '../../php/masterdomain.php'; ?>/images/banner/<?php echo $top_image ?>" alt="">
                                        </h2>
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
                                        <h2 class="second-info__title info-title">
                                        <img src="<?php include '../../php/masterdomain.php'; ?>/images/banner/<?php echo $top_image ?>" alt="">
                                        </h2>
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
                                        <h2 class="second-info__title info-title">
                                        <img src="<?php include '../../php/masterdomain.php'; ?>/images/banner/<?php echo $top_image ?>" alt="">
                                        </h2>
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
                                        <h2 class="third-info__title info-title -skill">
                                            <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_skill.png" alt="">
                                        </h2>
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
                <?//=========タブ1END=========//?>


        <?//=========タブ始まり=========//?>
            <input type="radio" name="tabset" id="tabchecksilver2" checked>
            <?//=========タブ毎にid="tabchecksilver2"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
            <label for="tabchecksilver2" class="tab1">評価・魅力</label>
            <div class="tabsilver" id="tabsilver2">
                <p class="con-2 fs-12">
                    柔属性の最高峰!! <span class="txtYellow">黒龍との相性抜群</span>!! 同時編成で圧倒的差を見せつけろ!!<br><br>
                    希少なスキル<span class="txtYellow">剛属性特攻</span>で相手の剛属性に大ダメージ!! 同じ蘇生持ちの成瀬ツバキよりも勝率の高い編成を組むことが可能!!<br><br>
                    <span class="txtGreen">【魅力.1】</span>装備スキルで<span class="txtYellow">回避とスキルゲージ上昇を無効化!!</span> 先攻を取れば成瀬ツバキや小泉香織の厄介なスキルに対応可能!!<br><br>
                  	<span class="txtGreen">【魅力.2】</span>剛属性特攻で相手の剛属性に大ダメージ!! 柔属性は元々剛属性に強い為、<span class="txtYellow">黒龍&メイファンで最強の柔属性編成ができる!!</span><br><br>
                    <span class="txtGreen">【魅力.3】</span><span class="txtYellow">全体連続攻撃+蘇生</span>は成瀬ツバキと同等かそれ以上の性能!! 入れ替え候補の筆頭だ!!<br><br>
                    <span class="txtGreen">【魅力.4】</span> <span class="txtYellow">先攻は総合力が高い方が取る!!</span> 最新キャラは総合力が圧倒的に高いぞ!! メイファンを編成すれば先攻率もアップ!!</span>
                </p>
            </div>
                <?//=========タブ2END=========//?>


     </div>
            <?//=========タブ終わり=========//?>
        <div class="notice_text">
        
            ※★5Lv.最大時のステータスになります<br>
            ※実際のステータスとの誤差が発生する場合がございます<br><br>
            
        </div>

        <div class="backbtn01  pb-25 pl-35">
            <?php include '../../php/backbutton.php'; ?>
        </div>

    </main>
</body>
</html>