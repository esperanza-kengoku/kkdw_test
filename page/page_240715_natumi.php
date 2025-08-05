<!DOCTYPE html>
<html lang="ja">
    <?php include '../../php/head.php'; ?>
<body>
<!--//////////////////////↓↓↓編集箇所↓↓↓//////////////////////--> 
<?php
$top_image ="240715_page_NewCharacter.png";/*トップ画像*/ 
$icon_image ="00157.png"; /*アイコン*/

$element_color = "purple";/*属性(red/blue/green/yellow/purple)*/

$status_hp  = 1006;/*耐久力*/
$status_atk = 268;/*攻撃力*/
$status_def = 161;/*防御力*/
$status_spd = 310;/*素早さ*/
$status_sum = $status_hp + $status_atk + $status_def + $status_spd ;/*総合力(自動)*/

$Lskill_name ="ヒラクチ彦齋流 - 奥義・参 -"; /*リーダースキル名*/
$Lskill_effect="味方全体の攻撃力・防御力・素早さを10％アップ+悪属性威力を30％アップ"; /*リーダースキル内容*/

$skill_name ="蜃気楼ノ太刀【３】"; /*スキル名*/
$skill_effect ="自身に5秒間かばうを付与+45％の回避を5回付与+敵全体の封技耐性を5秒間40％減少+敵1体のスキルを5秒間封印+敵全体に悪属性120%ダメージ+敵1体に10％の確率で即死"; /*スキル内容*/
$skill_effectMAX ="自身に5秒間かばうを付与+90％の回避を5回付与+敵全体の封技耐性を5秒間80％減少+敵1体のスキルを5秒間封印+敵全体に悪属性240%ダメージ+敵1体に20％の確率で即死"; /*スキル内容*/

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
                            <td valign="middle" style="vertical-align: middle;">SS</td>
                        </tr>
                        </tbody>
                    </table>
                    <p class="con-2">
                    <span class="fg-Gold">ソロリティ最後の一角【夏見真衣】が登場!!</span><br><br>
                    新実装の<span class="txtYellow">回避・即死</span>を兼ね備えた攻守を同時に行える<span class="txtYellow">最強アタッカー!!</span><br>
                    1.かばうで自分に攻撃を集める!!<br>
                    2.回避で敵の攻撃をかわす!!<br>
                    3.封技で敵のスキルを封じる!!<br>
                    3.カウンター即死が当たれば敵を即戦闘不能に...!!<br>
                    かばう+回避の<span class="txtYellow">守備性能</span>と全体攻撃+即死の<span class="txtYellow">攻撃性能</span>どちらも兼ね備えている!!<br><br>
                    <span class="fg-Gold">ハマれば一人で全ての戦況を覆す程の潜在能力の持ち主!!</span><br>
                    </p>

                    <div class="Att3">
                    <p class="Att4">【夏見のスキル注意点と仕様】</p>
                    <ol class="notes-1">
                      <li>「かばう」や「回避」は状態異常扱いです。重複しませんので、発動している時にもう一度夏見のスキルが発動しても重ね掛けはできません</li>
                      <li>「かばう」が集めるのはあくまで「ダメージ」のみになります。麻痺などの状態異常はかばう事ができません</li>
                      <li>「回避」は確率で敵の攻撃・ダメージスキルをかわします。回避が成功した場合、ダメージは全て0になり、自身のスキルゲージは+10されます</li>
                      <li>「回避」は確率となりますので、失敗する場合もございます。鍛技にて成功率をアップできますが、100％回避ではありません。ご注意ください。</li>
                      <li>回避した場合、「Miss！」と表示されます。即死した場合「Death！」と表示されます</li>
                      <li>今後も利便性アップの為の改修は本ページにて告知させて頂きます。</li>
                    </ol>
                  </div>



            </div>
                <?//=========タブ2END=========//?>


                <input type="radio" name="tabset" id="tabchecksilver3">
            <?//=========タブ毎にid="tabchecksilver2"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
            <label for="tabchecksilver3" class="tab1">回避・即死</label>
            <div class="tabsilver" id="tabsilver3">
                    <div class="index-2 mt-20">回避について</div>
                    <table id="Table01" class="mt-20">
                        <tbody>
                        <tr>
                            <th style="width:20%;">アイコン</th>
                            <th style="width:20%;">カテゴリ</th>
                            <th style="width:20%;">備考</th>
                        </tr>

                        <tr>
                            <td valign="middle" style="vertical-align: middle;">
                            <img src="<?php include '../../php/masterdomain.php'; ?>/images/4_Ignore/240705_icon_evade_statusicon.png" alt="">
                            </td>
                            <td valign="middle" style="vertical-align: middle;">状態異常</td>
                            <td valign="middle" style="vertical-align: middle;">回避が成功した時
                            <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240715_page_miss.png" alt="">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="index-2 mt-20">即死について</div>
                    <table id="Table01" class="mt-20">
                        <tbody>
                        <tr>
                            <th style="width:20%;">アイコン</th>
                            <th style="width:20%;">カテゴリ</th>
                            <th style="width:20%;">備考</th>
                        </tr>

                        <tr>
                            <td valign="middle" style="vertical-align: middle;">なし</td>
                            <td valign="middle" style="vertical-align: middle;">状態異常</td>
                            <td valign="middle" style="vertical-align: middle;">即死が成功した時
                            <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240715_page_death.png" alt=""><br>
                            即死が失敗した時
                            <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240715_page_miss.png" alt="">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="Att3">
                    <p class="Att4">回避</p>
                    <ol class="notes-1">
                    <li>1.回避は相手の通常攻撃・スキルをかわす。回避すると<span class="txtYellow">ダメージを受けない</span><br></li>
                    <li>2.回避は回数制限がある。5回であれば5回は相手の攻撃をかわすことができる<br></li>
                    <li>3.<span class="txtYellow">重複しない</span>為、回避の重ね掛けはできない<br></li>
                    <li>4.回避は確率になる。鍛技で90％まで上げられるが、100％ではないので注意<br></li>
                    <li>5.回避成功するとスキルゲージは10％上昇する<br><br></li>
                    </ol>
                  </div>

                    <div class="Att3">
                    <p class="Att4">即死</p>
                    <ol class="notes-1">
                      <li>1.成功すれば相手が即戦闘不能になる</li>
                      <li>2.失敗した場合はMiss！の表記が出るので注意。<span class="txtYellow">即死が失敗しているだけなので回避している訳ではない</span></li>
                    </ol>
                  </div>



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