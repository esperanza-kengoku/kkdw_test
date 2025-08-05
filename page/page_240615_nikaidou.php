<!DOCTYPE html>
<html lang="ja">
    <?php include '../../php/head.php'; ?>
<body>
<!--//////////////////////↓↓↓編集箇所↓↓↓//////////////////////--> 
<?php
$top_image ="240615_page_NewCharacter.png";/*トップ画像*/ 
$icon_image ="00176.png"; /*アイコン*/

$element_color = "purple";/*属性(red/blue/green/yellow/purple)*/

$status_hp  = 781;/*耐久力*/
$status_atk = 291;/*攻撃力*/
$status_def = 98;/*防御力*/
$status_spd = 210;/*素早さ*/
$status_sum = $status_hp + $status_atk + $status_def + $status_spd ;/*総合力(自動)*/

$Lskill_name ="Name of Dragon #3"; /*リーダースキル名*/
$Lskill_effect="30秒間味方全体の必要スキルゲージを<strong>25％</strong>増加+30秒間敵全体の必要スキルゲージを<strong>25％</strong>を増加+スキルゲージの増加量を3.5秒間<strong>75%</strong>減少"; /*リーダースキル内容*/

$skill_name ="Assault Wyvern #3"; /*スキル名*/
$skill_effect ="敵3体に<strong>悪属性180%</strong>ダメージ+敵全体の呪縛付与耐性を<strong>3秒間25％</strong>ダウン+回復を<strong>5秒間呪縛</strong>"; /*スキル内容*/

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
                            <td valign="middle" style="vertical-align: middle;">S</td>
                            <td valign="middle" style="vertical-align: middle;">SS</td>
                            <td valign="middle" style="vertical-align: middle;">B</td>
                        </tr>
                        </tbody>
                    </table>
                    <p class="con-2">
                    <span class="fg-Gold">環境に対応した強力なリーダースキルと敵全体への呪縛を兼ね備えた『二階堂龍』がついに登場!!</span><br><br>
                    スキルでは範囲の広い高倍率のダメージを与えつつ<span class="fg-Gold">敵全体の呪縛付与耐性を下げた上で呪縛を付与するぞ!!</span><br>
                    呪縛付与耐性ダウンは<span class="txtYellow">高級懐中時計【サエコ】等が使用する呪縛付与耐性アップと一部相殺できるので</span><span class="fg-Gold">敵にサエコが編成されていても高い確率で呪縛を付与する事ができるぞ!!</span>も出来る為、
                    <span class="fg-Gold">付与耐性ダウンと呪縛の組み合わせでサエコをはじめとしたヒーラーに優位に立つ事が出来る!!</span><br><br>
                    リーダースキルでは、<span class="txtYellow">互いの必要スキルゲージを増加させる効果や強力な鈍化を持つので先攻でリーダースキルを発動できる環境であれば</span><br>
                    <span class="fg-Gold">不破麗華【純情可憐】のリーダースキルによりスキルゲージ増加効果を重複不可により無効化したり、榊景吾のスキルゲージ上昇効果を激減させるぞ!!</span><br>
                    後攻であっても装備スキルに鈍化の影響が強く出る為、<span class="txtYellow">高級懐中時計【暗殺者】等の効果に大きな影響を与える</span>事が可能だ!!<br><br>
                    <span class="fg-Gold">扱いは特殊だがそれゆえの強力なスキルを兼ね備えたキャラになっているので上手く使いこなして環境の波に乗れ！</span>
                    
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