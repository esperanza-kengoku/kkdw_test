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
$top_image ="250301_page_NewCharacter.png";/*トップ画像*/ 
$icon_image ="00181_A.png"; /*アイコン*/
$eqicon_image01 ="eq_00120.png"; /*装備アイコン*/
$eqicon_image02 ="eq_00121.png"; /*装備アイコン*/

$element_color = "blue";/*属性(red/blue/green/yellow/purple/gray)*/

$status_hp  = 1981;/*耐久力*/
$status_atk = 385;/*攻撃力*/
$status_def = 406;/*防御力*/
$status_spd = 222;/*素早さ*/

$eq01_status_hp  = 120;/*耐久力*/
$eq01_status_atk = 120;/*攻撃力*/
$eq01_status_def = 120;/*防御力*/
$eq01_status_spd = 0;/*素早さ*/

$eq02_status_hp  = 200;/*耐久力*/
$eq02_status_atk = 400;/*攻撃力*/
$eq02_status_def = 800;/*防御力*/
$eq02_status_spd = 0;/*素早さ*/

$status_sum = $status_hp + $status_atk + $status_def + $status_spd ;/*総合力(自動)*/
$eq_status_sum = $eq01_status_hp + $eq01_status_atk + $eq01_status_def + $eq01_status_spd + $eq02_status_hp + $eq02_status_atk + $eq02_status_def + $eq02_status_spd;/*装備総合力(自動)*/

$Lskill_name ="杀.3"; /*リーダースキル名*/
$Lskill_effect="味方全体の防御力を30％アップ+素早さを20％アップ"; /*リーダースキル内容*/

$skill_name ="怨殺黒龍刃III"; /*スキル名*/
$skill_effect ="味方全体の悪属性耐性を5秒間25％アップ+敵全体に柔属性300%ダメージ+<span class=\"txtYellow fs-12\">敵1体に25％の確率で即死</span>"; /*スキル内容*/
$skill_effectMAX ="味方全体の悪属性耐性を<span class=\"txtYellow fs-12\">5秒間50％</span>アップ+敵全体に<span class=\"txtYellow fs-12\">柔属性600%</span>ダメージ+<span class=\"txtYellow fs-12\">敵1体に50％の確率で即死</span>"; /*スキル内容*/

$eq_skill_name ="矛盾"; /*スキル名*/
$eq_skill_effect ="戦闘開始時、自分自身の<span class=\"txtYellow fs-12\">即死耐性を10秒間100％増加</span>+味方全体の<span class=\"txtYellow fs-12\">即死耐性を10秒間20％増加</span>+敵全体の柔属性耐性を15秒間50％ダウン+敵３体の<span class=\"txtYellow fs-12\">属性耐性変動を10秒間無効</span>+味方全体の<span class=\"txtYellow fs-12\">属性耐性変動を10秒間無効</span>"; /*スキル内容*/

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
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00181_A.png" width="100%" alt="御堂"><br>黒龍</td>
                        <td valign="middle" style="vertical-align: middle;">6,739</td>
                        <td valign="middle" style="vertical-align: middle;">1,767</td>
                        <td valign="middle" style="vertical-align: middle;">2,236</td>
                        <td valign="middle" style="vertical-align: middle;">300</td>
                      </tr>
                      <tr>
                        <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 1.2rem !important;">
                      総合力：<span class="txtYellow">11,042</span><br></td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00165.png" width="100%" alt="イクト"><br>綾瀬宏</td>
                        <td valign="middle" style="vertical-align: middle;">8,217</td>
                        <td valign="middle" style="vertical-align: middle;">2,158</td>
                        <td valign="middle" style="vertical-align: middle;">808</td>
                        <td valign="middle" style="vertical-align: middle;">446</td>
                      </tr>
                      <tr>
                        <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 1.2rem !important;">
                      総合力：<span class="txtYellow">11,629</span><br></td>
                      </tr>
                    </td>

                    </tbody>
                  </table>
                  ※黒龍には「青龍刀」と「煙管」をそれぞれ装備した想定で算出しております。<br>※綾瀬宏は「スケートボード」と「思い出バンドエイド」それぞれを装備して算出しています。<br>※実際の総合力と誤差がある場合がございます。目安として参照ください。




                </div>
                <?//=========タブ1END=========//?>


        <?//=========タブ始まり=========//?>
            <input type="radio" name="tabset" id="tabchecksilver2" checked>
            <?//=========タブ毎にid="tabchecksilver2"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
            <label for="tabchecksilver2" class="tab1">評価・魅力</label>
            <div class="tabsilver" id="tabsilver2">
                <p class="con-2 fs-12">
                    夏見を超える<span class="txtYellow">高確率【即死】</span>が最大の魅力!!<br><br>
                    なんと<span class="txtYellow">50％</span>の確率で即死させる為、最上位、初心者、中級者問わず入手した時点で圧倒的戦力に・・・!!<br>
                    <span class="txtYellow">柿原+成瀬+小泉+綾瀬+黒龍</span>の最強編成どうしでの勝負になった時、<span class="txtYellow">総合力が高い方</span>が有利になる装備性能!!<br><br>
                    <span class="txtYellow">先攻を取ればその性能を最大限に発揮!!</span> 最強の守りを誇る柿原のスキルに<span class="txtYellow">風穴を開けることができる!!</span><br><br>
 
                    <span class="txtGreen">【魅力.1】</span><span class="txtYellow">50％即死で一発KO!!</span> 面倒な駆け引きは一切無し!! 即死で全員ぶっ倒せ!!<br><br>
                  	<span class="txtGreen">【魅力.2】</span>黒龍VS黒龍になった際、青龍刀を装備していれば即死耐性を上げる事ができる!! <span class="txtYellow">黒龍には青龍刀を装備させろ!!</span><br><br>
                    <span class="txtGreen">【魅力.3】</span>先攻を取れば敵３体の<span class="txtYellow">属性耐性変動を無効化!!</span> 敵の柿原がスキルを打つ前に無効化できる為、全属性耐性自体が効かなくなるぞ!!<br><br>
                    <span class="txtGreen">【魅力.4】</span>さらに!! <span class="txtYellow">味方全体の属性耐性変動も無効化!!</span> 敵から属性耐性ダウンを受ける事が無くなる為、黒龍VS黒龍になったら先攻が圧倒的有利!!</span>
                </p>
            </div>
            <div class="Att3">
                  <p class="Att4">【注意事項】</p>
                  <ol class="notes-1">
            <li>仕様として以下を再度ご確認ください。重要なバランスとなります<br>
                1.スキルの発動順番はリーダースキル→装備スキル→絆技となります<br>
                2.先攻（先にスキルを発動する）のは、<span class="txtYellow">デッキの総合力が高い方</span>です<br>
                3.発動順は先攻のリーダースキル→後攻のリーダースキル→先攻の装備スキル→後攻の装備スキル→先攻の絆技→後攻の絆技となります<br>
                4.その為、先攻を取れる黒龍が有利となります。※勝利をお約束するものではございませんのでご了承ください<br>
            </li>
                    <li>今後も利便性アップの為の改修は本ページにて告知させて頂きます。</li>
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