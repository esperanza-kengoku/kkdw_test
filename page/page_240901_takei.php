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
$top_image ="240902_page_NewCharacter001.png";/*トップ画像*/ 
$icon_image ="00184.png"; /*アイコン*/

$element_color = "red";/*属性(red/blue/green/yellow/purple/gray)*/

$status_hp  = 1000;/*耐久力*/
$status_atk = 311;/*攻撃力*/
$status_def = 167;/*防御力*/
$status_spd = 258;/*素早さ*/
$status_sum = $status_hp + $status_atk + $status_def + $status_spd ;/*総合力(自動)*/

$Lskill_name ="夢之力Ⅲ"; /*リーダースキル名*/
$Lskill_effect="敵全体の攻撃力を30%ダウン+戦闘開始時、自身を除く味方２体のスキルゲージを80%増加"; /*リーダースキル内容*/

$skill_name ="不動・ボディブロー.3"; /*スキル名*/
$skill_effect ="敵全体に剛属性120%ダメージ+10秒間スキルゲージ必要量を30％増加+敵３体のアクションゲージ上昇を2秒間足止"; /*スキル内容*/
$skill_effectMAX ="敵全体に剛属性240%ダメージ+10秒間スキルゲージ必要量を60％増加+敵３体のアクションゲージ上昇を4秒間足止"; /*スキル内容*/

$skill_name2 ="フルコンビネーション.3"; /*スキル名*/
$skill_effect2 ="自身に30％の回避を7回付与+敵2体に剛属性100%ダメージ+敵1体に剛属性250%ダメージ"; /*スキル内容*/
$skill_effectMAX2 ="自身に60％の回避を7回付与+敵2体に剛属性200%ダメージ+敵1体に剛属性500%ダメージ"; /*スキル内容*/


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

                                <div class="third-info">
                                    <div class="third-info__inner inner">
                                        <h2 class="third-info__title info-title -skill">
                                            <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/<?php echo $element_color ?>/txt_icon_skill.png" alt="">
                                        </h2>
                                        <div class="third-info__items">
                                            <div class="third-info__item-top">
                                                <div class="third-info__item_<?php echo $element_color ?>-name name-02">通常1</div>
                                                <div class="third-info__item_<?php echo $element_color ?>-detail">
                                                <?php echo $skill_name2 ?>
                                            </div>
                                            </div>
                                            <div class="third-info__item_<?php echo $element_color ?>-bottom">
                                            <?php echo $skill_effect2 ?>                    </div>
                                        </div>
                                        <div class="third-info__items">
                                            <div class="third-info__item-top">
                                                <div class="third-info__item_<?php echo $element_color ?>-name name-02 " style="background-color: green;">鍛技MAX</div>
                                                <div class="third-info__item_<?php echo $element_color ?>-detail">
                                                <?php echo $skill_name2 ?>
                                            </div>
                                            </div>
                                            <div class="third-info__item_<?php echo $element_color ?>-bottom">
                                            <?php echo $skill_effectMAX2 ?>                    </div>
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
                            <td valign="middle" style="vertical-align: middle;">SS</td>
                            <td valign="middle" style="vertical-align: middle;">A</td>
                        </tr>
                        </tbody>
                    </table>
                    <p class="con-2">
                    <span class="fg-Gold">現WBO世界バンタム級王者【武居由樹】が拳極に参戦!!</span><br><br>
                    禁断の<span class="txtYellow">最強状態異常【足止】</span>をなんと敵３体に付与する壊滅的な破壊力のスキルを持つ!!<br>
                    さらに!! もう一つスキルを所持し、まれにフルコンビネーションで回避+大ダメージの攻防一体のスタイルで戦うこともできるぞ!!<br><br>
                    【魅力.1】相手を止める足止のボディブローと、回避+大ダメージを与えるフルコンビネーションの２つのスキルが使える!!<br><br>
                    【魅力.2】足止は<span class="txtYellow">状態異常の中でも最強のスキル!!</span><br>足止になると通常攻撃・スキルどちらも完全に止まる!!<br><br>
                    【魅力.3】敵全体の必要スキルゲージ上昇も兼ね備えている為、ボディブローを喰らった相手はほとんど動けなくなるぞ!!<br> 一ノ瀬や東郷など回復キャラがこのスキルを受けると一気に形勢が傾く!!<br><br>
                    【魅力.4】ダメージでは周年荒谷に匹敵する倍率の攻撃力を持っているぞ!! どちらのスキルが出ても相手を追い込める事間違いなし!!<br><br>
                    </p>

            </div>
                <?//=========タブ2END=========//?>


     </div>
            <?//=========タブ終わり=========//?>
        <div class="notice_text">
        
            ※★5Lv.最大時のステータスになります<br>
            ※実際のステータスとの誤差が発生する場合がございます<br><br>
            ※足止中にスキルゲージがMAXになった場合はスキルが発動しますのでご注意ください<br><br>
        </div>

        <div class="backbtn01  pb-25 pl-35">
            <?php include '../../php/backbutton.php'; ?>
        </div>

    </main>
</body>
</html>