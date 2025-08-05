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
$top_image ="241001_page_NewCharacter.png";/*トップ画像*/ 
$icon_image ="00185_A.png"; /*アイコン*/

$element_color = "yellow";/*属性(red/blue/green/yellow/purple/gray)*/

$status_hp  = 932;/*耐久力*/
$status_atk = 332;/*攻撃力*/
$status_def = 152;/*防御力*/
$status_spd = 220;/*素早さ*/
$status_sum = $status_hp + $status_atk + $status_def + $status_spd ;/*総合力(自動)*/

$Lskill_name ="HalloweenMagicIII"; /*リーダースキル名*/
$Lskill_effect="味方全体の攻撃力を35%アップ+15秒間、0.5秒で攻撃力120%分回復する恵援を付与"; /*リーダースキル内容*/

$skill_name ="Trick or Treat♡"; /*スキル名*/
$skill_effect ="味方3体の体力を攻撃力100％回復+5秒間、0.5秒で攻撃力100%分回復する恵援を付与+デバフを5つ解除+敵3体に仁属性100％ダメージ"; /*スキル内容*/
$skill_effectMAX ="味方3体の体力を攻撃力200％回復+5秒間、0.5秒で攻撃力200%分回復する恵援を付与+デバフを10つ解除+敵3体に仁属性200％ダメージ"; /*スキル内容*/
  
  
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
                            <td valign="middle" style="vertical-align: middle;">B</td>
                            <td valign="middle" style="vertical-align: middle;">SS</td>
                            <td valign="middle" style="vertical-align: middle;"><span class="txtRed">禁止</span></td>
                        </tr>
                        </tbody>
                    </table>
                <p class="con-2">
                    <span class="fg-Gold">新スキル「恵援(けいえん)」</span>を搭載した<br>新キャラ<span class="txtYellow">麻生 海璃【魔力恵愛】</span>が登場!!
                      <br>
                    直近実装の新キャラとの相性抜群!!<br> 新スキル【恵援】は発動中、0.5秒毎に<span class="txtYellow">味方を自動回復</span>するぞ!!<br><br>
                    スキルが一度発動すれば効果中はずっと自動回復が発動する為、<br><br>久世【気合】→生き残り+麻生【恵援】→自動回復<br>
                    東郷【蘇生】+【スキルゲージ上昇】+麻生【恵援】→戦闘不能回復からの自動回復<br>
                    など、<span class="txtYellow">体制を立て直すスキル</span>との相性が抜群!! 最強ヒーラーを必ず仲間にしろ!!<br>
                    <br><br>
                    <span class="txtGreen">【魅力.1】</span>【恵援】が掛かっている間は0.5秒毎に自動回復!! 攻撃力も高めに設定されている為、気が付けば体力が全快に...！<br><br>
                    <span class="txtGreen">【魅力.2】</span>【気合】や【蘇生】など、直近実装のキャラが持つスキルとの相性が抜群!! 編成必須の最強ヒーラー!!<br><br>
                    <span class="txtGreen">【魅力.3】</span>味方のデバフ除去も過去最大数の<span class="txtYellow">10個解除</span>が可能!! 難敵スタンフィールのデバフに対抗できる!!<br><br>
                    <span class="txtGreen">【魅力.4】</span>攻撃力が高めに設定されている為、回復・恵援・攻撃の値が全て高水準!! パーティの安定感が段違い!!<br><br>
                    <span class="fg-Gold">麻生のみが使えるスキル【恵援】で最強を目指せ!!</span><br>
                </p>


                    </p>

                    <div class="Att3">
                    <p class="Att4">【麻生のスキル注意点と仕様】</p>
                    <ol class="notes-1">
                      <li>「恵援」は状態異常扱いです。重複しませんので、発動している時にもう一度スキルが発動しても重ね掛けはできません</li>
                      <li>「恵援」は回復と同様です。呪縛の影響を受ける為、呪縛に掛かっている場合は回復しません。※呪縛は二階堂や鬼瓦をご確認ください</li>
                      <li>「恵援」のスキル文言について、<span class="txtYellow">毎秒と表示されてしまいます。</span>こちらは後のアップデートで調整予定ですが、0.5秒で発動しますのでご安心ください</li>
                      <li>「恵援」スキルは襲来イベントではバランスブレイカーとなり得ます為、<span class="txtRed">現状禁止とさせて頂きます。</span>こちらも後のアップデートで調整予定です</li>
                    </ol>
                  </div>



            </div>
                <?//=========タブ2END=========//?>

 <input type="radio" name="tabset" id="tabchecksilver3">
            <?//=========タブ毎にid="tabchecksilver2"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
            <label for="tabchecksilver3" class="tab1">恵援</label>
            <div class="tabsilver" id="tabsilver3">
                    <div class="index-2 mt-20">恵援について</div>
                    <table id="Table01" class="mt-20">
                        <tbody>
                        <tr>
                            <th style="width:20%;">アイコン</th>
                            <th style="width:20%;">カテゴリ</th>
                            <th style="width:20%;">備考</th>
                        </tr>

                        <tr>
                            <td valign="middle" style="vertical-align: middle;">
                            <img src="<?php include '../../php/masterdomain.php'; ?>/images/4_Ignore/230515_icon_heart_statusicon_001.png" alt="">
                            </td>
                            <td valign="middle" style="vertical-align: middle;">状態異常(良性)</td>
                            <td valign="middle" style="vertical-align: middle;">恵援時
                            <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/241001_page_intervalheal.png" alt="">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="Att3">
                    <p class="Att4">恵援</p>
                    <ol class="notes-1">
                    <li>1.恵援は効果が発動している間、<span class="txtYellow">自動で体力が回復する</span><br></li>
                    <li>2.<span class="txtYellow">重複しない</span>為、恵援の重ね掛けはできない<br></li>
                    <li>3.回復と扱いが一緒である為、呪縛を受けると回復が0になるので注意<br></li>
                    
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