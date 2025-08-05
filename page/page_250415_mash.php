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
$top_image ="250415_page_NewCharacter.png";/*トップ画像*/ 
$icon_image ="00194.png"; /*アイコン*/
$eqicon_image01 ="eq_00132.png"; /*装備アイコン*/
$eqicon_image02 ="eq_00133.png"; /*装備アイコン*/

$element_color = "purple";/*属性(red/blue/green/yellow/purple/gray)*/

$status_hp  = 2768;/*耐久力*/
$status_atk = 408;/*攻撃力*/
$status_def = 196;/*防御力*/
$status_spd = 180;/*素早さ*/

$eq01_status_hp  = 360;/*耐久力*/
$eq01_status_atk = 0;/*攻撃力*/
$eq01_status_def = 0;/*防御力*/
$eq01_status_spd = 0;/*素早さ*/

$eq02_status_hp  = 1000;/*耐久力*/
$eq02_status_atk = 1000;/*攻撃力*/
$eq02_status_def = 800;/*防御力*/
$eq02_status_spd = 200;/*素早さ*/

$status_sum = $status_hp + $status_atk + $status_def + $status_spd ;/*総合力(自動)*/
$eq_status_sum = $eq01_status_hp + $eq01_status_atk + $eq01_status_def + $eq01_status_spd + $eq02_status_hp + $eq02_status_atk + $eq02_status_def + $eq02_status_spd;/*装備総合力(自動)*/

$Lskill_name ="グレイトウォール"; /*リーダースキル名*/
$Lskill_effect="味方全体の防御力を50％アップ"; /*リーダースキル内容*/

$skill_name ="カナディアンスクリューボマー"; /*スキル名*/
$skill_effect ="敵３体に5秒間20％で発動する麻痺を付与+悪属性300％ダメージ×5"; /*スキル内容*/
$skill_effectMAX ="敵３体に5秒間<span class=\"txtYellow fs-12\">40％で発動する麻痺</span>を付与+<span class=\"txtYellow fs-12\">悪属性600％ダメージ×5</span>"; /*スキル内容*/
  
$eq_skill_name ="ピボット"; /*スキル名*/
$eq_skill_effect ="戦闘開始時、自分自身の即死・封技耐性を<span class=\"txtYellow fs-12\">10秒間100％増加</span>+敵３体の<span class=\"txtYellow fs-12\">属性耐性変動を10秒間無効</span>+味方全体の即死耐性を<span class=\"txtYellow fs-12\">15秒間40％増加</span>+味方全体の毒耐性を<span class=\"txtYellow fs-12\">30秒間100％増加</span>"; /*スキル内容*/

?>
<!--//////////////////////↑↑↑編集箇所↑↑↑//////////////////////--> 
    <header class="header">
        <!-- TOP画像(事前にS3に画像を投入する必要有)-->
        <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/<?php echo $top_image ?>" alt="">
    </header>

<p class="ta-c fs-12">▼ ステアップキャンペーン詳細はコチラ!! ▼</p>
    <a href="../page/page_250415_statusUP.php">
    <!--バナー表示-->
    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250415_ban_StatusUpCP_004.png" width="100%" alt="">
    <!--テキスト表示
    ※ガチャ画面に移動します<br>-->
    </a>


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
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_<?php echo $icon_image ?>" width="100%" alt="マッシュ"><br>マッシュ<br>(限突+30/覚醒+30)</td>
                        <td valign="middle" style="vertical-align: middle;">11,670</td>
                        <td valign="middle" style="vertical-align: middle;">1,715</td>
                        <td valign="middle" style="vertical-align: middle;">815</td>
                        <td valign="middle" style="vertical-align: middle;">351</td>
                      </tr>
                      <tr>
                        <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 1.2rem !important;">
                      総合力：<span class="txtYellow">14,551</span>(バトル時のみ)<br></td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00155.png" width="100%" alt="御堂"><br>セレスティア<br>(限突+40/覚醒+40)</td>
                        <td valign="middle" style="vertical-align: middle;">9,733</td>
                        <td valign="middle" style="vertical-align: middle;">2,209</td>
                        <td valign="middle" style="vertical-align: middle;">1,732</td>
                        <td valign="middle" style="vertical-align: middle;">556</td>
                      </tr>
                      <tr>
                        <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 1.2rem !important;">
                      総合力：<span class="txtYellow">14,230</span><br></td>
                      </tr>
                    </td>

                    </tbody>
                  </table>
                  ※マッシュには「エアパワー」と「ステータスアップキャンペーン」をそれぞれ装備した想定で算出しております。<br>強化値が+30にて、セレスティアのカンスト状態と同等の強さを発揮できます。<br>※実際の総合力と誤差がある場合がございます。目安として参照ください。

                </div>
                <?//=========タブ1END=========//?>


        <?//=========タブ始まり=========//?>
            <input type="radio" name="tabset" id="tabchecksilver2">
            <?//=========タブ毎にid="tabchecksilver2"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
            <label for="tabchecksilver2" class="tab1">評価・魅力</label>
            <div class="tabsilver" id="tabsilver2">
                <p class="con-2 fs-12">
                    一定期間だけステータスが大幅アップ!! 強化しない状態でも強さを発揮できるステータスアップキャンペーンに対応!!<br>
                    <span class="txtYellow">キャラ装備にステータスアップを装備すればなんとステータスが2.5倍に!!</span>入手した段階で使えるぞ!!<br>
                    <span class="txtYellow">現環境では麻痺に対抗する術が無い!!</span>マッシュが持つ麻痺で圧倒的優位に立てる!!<br>
                    新要素を兼ね備えた激強な新キャラが登場!!<br><br>
                    <span class="txtGreen">【魅力.1】</span>ステータスアップキャンペーン対象!! 何も強化しなくてもステータスが<span class="txtYellow">2.5倍</span>に!!<br><br>
                  	<span class="txtGreen">【魅力.2】</span>小泉・黒龍に強い!! 毒や即死に対して長時間の耐性をつけることができる!! 毒で大ダメージを喰らう確率が大幅に低減される!!<br><br>
                    <span class="txtGreen">【魅力.3】</span><span class="txtYellow">麻痺+5回連続攻撃で大ダメージ!!</span>通常スキルがシンプルに強い!!<br><br>
                    <span class="txtGreen">【魅力.4】</span>黒龍同様、柿原の属性耐性に風穴をあけられる!! <span class="txtYellow">先攻が取れれば相手を壊滅状態にできる!!</span>
                </p>
            </div>
            <div class="Att3">
                  <p class="Att4">【注意事項】</p>
                  <ol class="notes-1">
                    <li>ステータスアップキャンペーンの詳細は専用のページをご確認ください</li>
                    <li><span class="txtYellow">ステータスアップの効果が発揮されるのはバトル中のみ</span>です。総合力には反映されませんのでご注意ください</li>
                  </ol>
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