<!DOCTYPE html>
<html lang="ja">
    <?php include '../../php/head.php'; ?>
<body>
<!--//////////////////////↓↓↓編集箇所↓↓↓//////////////////////--> 
<?php
$top_image ="/news/2023_1115_release/img/231115_page_NewCharacter_002.png";/*トップ画像*/ 
$icon_image ="00117.png"; /*アイコン*/

$element_color = "red";/*属性(red/blue/green/yellow/purple)*/

$status_hp  = 473;/*耐久力*/
$status_atk = 305;/*攻撃力*/
$status_def = 112;/*防御力*/
$status_spd = 250;/*素早さ*/
$status_sum = $status_hp + $status_atk + $status_def + $status_spd ;/*総合力(自動)*/

$Lskill_name ="流転無窮【参の構え】"; /*リーダースキル名*/
$Lskill_effect="味方全体の防御力を<strong>40%</strong>アップ+素早さを<strong>10%</strong>アップ"; /*リーダースキル内容*/

$skill_name ="聖炎嵐撃"; /*スキル名*/
$skill_effect ="敵1体に<strong>剛属性150%</strong>ダメージ+敵1体に<strong>技・仁属性100%</strong>ダメージ"; /*スキル内容*/
?>
<!--//////////////////////↑↑↑編集箇所↑↑↑//////////////////////--> 
    <header class="header">
        <!-- TOP画像(事前にS3に画像を投入する必要有)-->
        <img src="<?php include '../../php/domain.php'; ?><?php echo $top_image ?>" alt="">
    </header>
    
    <div class="tabbox mt-20">
     <?//=========タブ始まり=========//?>
        <input type="radio" name="tabset" id="tabchecksilver1" checked>
          <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
           <label for="tabchecksilver1" class="tab1">ステータス詳細</label>
               <div class="tabsilver" id="tabsilver1">
                        <main class="main">
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
                        <td valign="middle" style="vertical-align: middle;">C</td>
                        <td valign="middle" style="vertical-align: middle;">A</td>
                        <td valign="middle" style="vertical-align: middle;">S</td>
                      </tr>
                    </tbody>
                  </table>
                  <p class="con-2">
                    最大の魅力はなんといっても<span class="txtYellow">複数属性のスキル聖炎嵐撃を持つ事！</span>剛属性のキャラは現状実装されている体数
                    が多い分、相手の編成に柔属性キャラがいると一気に不利になる。成瀬なら相手が柔属性でも悪属性でも<span class="txtYellow">活躍できる場面が増えるぜ！</span><br>
                    さらにリーダースキルの防御力40％アップは過去最強クラスのバフ性能！ <span class="txtYellow">高レベルの強敵撃破に最適！</span><br>
                    バン仲村襲来イベントでは特攻もつくため、剛属性編成が有利なこのイベントでは活躍間違いなし！<br>
                    また、防御が弱点である秋月日優や碓氷巧弥などとの相性も抜群！ 成瀬を編成に加え、最強を目指せ！
                  </p>
                    <br>
                    <br>
                  <!--編成オススメ
                  <div class="index-2 mt-20">各種コンテンツ評価</div>
                  <table id="Table01" class="mt-20">
                    <tbody>
                      <tr>
                        <th style="width:20%;">リーダー</th>
                        <th style="width:20%;">キャラ１</th>
                        <th style="width:20%;">キャラ２</th>
                        <th style="width:20%;">キャラ３</th>
                        <th style="width:20%;">キャラ４</th>
                      </tr>

                      <tr>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00132.png" width="100%" alt=""></td>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00154.png" width="100%" alt=""></td>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00136.png" width="100%" alt=""></td>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00138.png" width="100%" alt=""></td>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/90001.png" width="100%" alt=""></td>
                      </tr>
                      <tr>
                      <td valign="middle" style="vertical-align: middle;">榊 景吾</td>
                      <td valign="middle" style="vertical-align: middle;">秋月 日優</td>
                      <td valign="middle" style="vertical-align: middle;">碓氷 巧弥</td>
                      <td valign="middle" style="vertical-align: middle;">不破 麗花</td>
                      <td valign="middle" style="vertical-align: middle;">上谷 昂一</td>
                      </tr>
                    </tbody>
                  </table>
                  <p class="con-2">
                    榊のリーダースキルで<span class="txtYellow">スキルゲージ60％からスタート</span>させ、先に<span class="txtYellow">封技・足止</span>で敵のスキルや動きを封じる<br>
                    回復+バフの不破を念のため編成し、<span class="txtYellow">上谷の火力で相手を倒す</span>戦略<br>
                  </p>
                    <br>
                    <br>-->

           </div>
            <?//=========タブ2END=========//?>



        <div class="notice_text">
            ※★5Lv.最大時のステータスになります<br>
            ※実際のステータスとの誤差が発生する場合がございます<br><br>
        </div>
        <?php include '../../php/backbutton.php'; ?>

    </main>
</body>
</html>