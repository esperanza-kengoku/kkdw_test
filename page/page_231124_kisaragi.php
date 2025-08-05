<!DOCTYPE html>
<html lang="ja">
    <?php include '../../php/head.php'; ?>
<body>
<!--//////////////////////↓↓↓編集箇所↓↓↓//////////////////////--> 
<?php
$top_image ="/news/2023_1124_release/img/231124_page_NewCharacter_001.png";/*トップ画像*/ 
$icon_image ="00134.png"; /*アイコン*/

$element_color = "yellow";/*属性(red/blue/green/yellow/purple)*/

$status_hp  = 812;/*耐久力*/
$status_atk = 151;/*攻撃力*/
$status_def = 200;/*防御力*/
$status_spd = 160;/*素早さ*/
$status_sum = $status_hp + $status_atk + $status_def + $status_spd ;/*総合力(自動)*/

$Lskill_name ="エンハンスナイト【Third】"; /*リーダースキル名*/
$Lskill_effect="戦闘開始時、強化玉小・中・大の獲得量が<strong>100%</strong>増加する"; /*リーダースキル内容*/

$skill_name ="エンドレスナイト【Third】"; /*スキル名*/
$skill_effect ="戦闘不能の味方2体を<strong>攻撃力25%分</strong>回復して蘇生(全員生存の場合は回復のみ)+味方1体の体力を<strong>攻撃力50%分</strong>回復"; /*スキル内容*/
?>
<!--//////////////////////↑↑↑編集箇所↑↑↑//////////////////////--> 
    <header class="header">
        <!-- TOP画像(事前にS3に画像を投入する必要有)-->
        <img src="<?php include '../../php/domain.php'; ?><?php echo $top_image ?>" alt="">
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
                                            <img src="<?php include '../../php/masterdomain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_status.png" alt="">
                                        </h2>
                                        <div class="param-info_icon">
                                            <div class="param-info_icon_chara">
                                                <!-- アイコン画像([CharaIcon/○○.png]の部分の数字を変更) -->
                                                <img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/<?php echo $icon_image ?>" alt="">
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
                                                <div class="third-info__item_<?php echo $element_color ?>-name name-02">通常</div>
                                                <div class="third-info__item_<?php echo $element_color ?>-detail">
                                                <?php echo $skill_name ?>
                                            </div>
                                            </div>
                                            <div class="third-info__item_<?php echo $element_color ?>-bottom">
                                            <?php echo $skill_effect ?>                    </div>
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
                            <td valign="middle" style="vertical-align: middle;">SS</td>
                            <td valign="middle" style="vertical-align: middle;">S</td>
                            <td valign="middle" style="vertical-align: middle;">S</td>
                        </tr>
                        </tbody>
                    </table>
                    <p class="con-2">
                        VIP限定なだけあって超万能性能!! 制圧ではなんと<span class="txtYellow">強化玉を大量に入手できるリーダースキル</span>を持ち、ドン・ミャン同様周回時には必須のスキルを持つ!!<br>
                        さらに！ 通常スキルでは<span class="txtYellow">２体蘇生+回復</span>という安定感抜群のスキルで味方を支援!! 抗争や対戦でも大活躍するぜ!!<br>
                        襲来イベントでは特定のキャラが特攻になるが、<span class="txtYellow">如月は全襲来イベントで弱特攻がつく！</span>如月が編成にいればptアップの特攻が常に発動するぜ！<br>
                        抗争・対戦のメインに編成しないとしても、仲間にすることで様々な恩恵が得られる超万能キャラ！<br>
                        <span class="txtRed">VIPランク13</span>で必ず入手可能!!
                    </p>
                        <br>
                        <br>

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