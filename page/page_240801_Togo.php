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
$top_image ="240801_page_NewCharacter.png";/*トップ画像*/ 
$icon_image ="00159.png"; /*アイコン*/

$element_color = "yellow";/*属性(red/blue/green/yellow/purple)*/

$status_hp  = 904;/*耐久力*/
$status_atk = 293;/*攻撃力*/
$status_def = 189;/*防御力*/
$status_spd = 222;/*素早さ*/
$status_sum = $status_hp + $status_atk + $status_def + $status_spd ;/*総合力(自動)*/

$Lskill_name ="滅悪闘魂"; /*リーダースキル名*/
$Lskill_effect="味方全体の悪属性特攻を25％アップ+攻撃力を60秒間30％アップ+味方全体に10秒間20%上昇の鋭化"; /*リーダースキル内容*/

$skill_name ="心頭滅却.3"; /*スキル名*/
$skill_effect ="敵2体に仁属性150%ダメージ+味方2体のスキルゲージを25%増加+戦闘不能の味方1体を攻撃力120%分回復して蘇生(全員生存の場合は回復のみ)"; /*スキル内容*/
$skill_effectMAX ="敵2体に仁属性300%ダメージ+味方2体のスキルゲージを50%増加+戦闘不能の味方1体を攻撃力240%分回復して蘇生(全員生存の場合は回復のみ)"; /*スキル内容*/

?>
<!--//////////////////////↑↑↑編集箇所↑↑↑//////////////////////--> 
    <header class="header">
        <!-- TOP画像(事前にS3に画像を投入する必要有)-->
        <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/<?php echo $top_image ?>" alt="">
    </header>
    
    <main class="main">
        
        <div class="tabbox mt-20">
        <?//=========タブ始まり=========//?>
            <input type="radio" name="tabset" id="tabchecksilver1" checked>
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
                                        
                                    </div>
                                </div>
                </div>
                <?//=========タブ1END=========//?>


        <?//=========タブ始まり=========//?>
            <input type="radio" name="tabset" id="tabchecksilver2">
            <?//=========タブ毎にid="tabchecksilver2"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
            <label for="tabchecksilver2" class="tab1">評価・魅力</label>
            <div class="tabsilver" id="tabsilver2">
                    <!--編成オススメ-->
                    <div class="index-2 mt-20">各種コンテンツ評価</div>
                    <table id="Table01" class="mt-20">
                        <tbody>
                        <tr>
                            <th style="width:20%;">制圧</th>
                            <th style="width:20%;">抗争・対戦</th>
                            <th style="width:20%;">襲来イベント</th>
                        </tr>

                        <tr>
                            <td valign="middle" style="vertical-align: middle;">C</td>
                            <td valign="middle" style="vertical-align: middle;">SS</td>
                            <td valign="middle" style="vertical-align: middle;">S</td>
                        </tr>
                        </tbody>
                    </table>
                    <p class="con-2">
                    <span class="fg-Gold">あらゆる情報を持つ謎の男【東郷竜司】が登場!!</span><br><br>
                    <span class="txtYellow">シンプルだが現環境にブッ刺さる最強の万能キャラ!!</span><br>
                    【魅力.1】リーダー採用で悪属性特攻をかけられる!! 「相手が悪属性」ならダメージがアップ!! 不破麗華【純情可憐】・二階堂龍など悪属性リーダーとの相性抜群!!<br><br>
                    【魅力.2】回復力の高い蘇生を持ち、戦況を立て直すことができる!! 夏見真衣を生かす(殺す)蘇生でどちらにも対応できる!!<br><br>
                    【魅力.3】 さらに!! スキルゲージを+50増加してスキルの発動力まで上げることができ、あらゆる場面で活躍できるぜ!!<br><br>
                    <span class="txtYellow">圧倒的勝率</span>を叩き出すことができる新キャラを仲間にして最強を目指せ!!<br><br>
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