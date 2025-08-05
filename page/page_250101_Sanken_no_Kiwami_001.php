<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>

<body>

<div id="bridge-wrapper">
      <div id="content" class="clearfix">

        <div id="contentWrapper" class="column0">
          <div id="mainContent">
            <div id="news" class="newsDetail">

              <div class="news-text box-dent">
                <div class="outline-2">


                  <div id="image_padding">
                    <div align="center">
                      <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240401_ban_event_Sanken_no_Kiwami_001.png"
                        alt="BDCPバナー" width="100%" class="header_img">
                    </div>
                  </div>                  
                <div id="image_padding">
                    <div align="center">
                      <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250101_page_Sanken.png"
                        alt="BDCPバナー" width="100%" class="header_img">
                    </div>
                  </div> 
                  

                  <div class="index-2">開催期間</div>                  
                  <p class="con-2 fs-12">01/01 0:00 ～ 01/05 23:59</p>


                  <div class="btn01 mt-20 mb-20" style="position: relative; left: -100px;">
                    <a href="kengokuapp://060_Ranking03_163">対戦勝利</a>
                  </div>

                  <div class="btn01 mt-20 mb-20"style="position: relative; right: -210px;  top: -78px; display: inline-block; background-size: 175px;">
                    <a href="kengokuapp://060_Ranking03_164">【制圧】個人ランキング</a>
                  </div>

                  <div class="btn01 mt-20 mb-20" style="position: relative; top: -100px;">
                    <a href="kengokuapp://060_Ranking03_165">極石消費</a>
                  </div>

                  
                  <?//=========タブ部分=========//?>
        <div class="tabbox">
         <?//=========タブ始まり=========//?>
             <input type="radio" name="tabset" id="tabchecksilver1">
              <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                <label for="tabchecksilver1" class="tab1">対戦勝利</label>
                  <div class="tabsilver" id="tabsilver1">

                        <div class="index-2">ランキング</div>
                        <p class="con-2 fs-12">地下闘技場での勝利数ランキング</p>

                        <div class="index-2 fs-12">目玉報酬 <br><span class="txtYellow">覚醒コイン×2,000!!</span></div>
                        

                  <div class="btn01 mt-20 mb-20">
                    <a href="kengokuapp://060_Ranking03_154">対戦勝利</a>
                  </div>


                    </div>
                    <?//=========タブ1END=========//?>
                    
                     <input type="radio" name="tabset" id="tabchecksilver2">
                    <label for="tabchecksilver2" class="tab1">制圧</label>

                    <div class="tabsilver" id="tabsilver2">
                    <div class="index-2">ランキング</div>
                        <p class="con-2 fs-12">新春！暴走！開運ツーリング総合ランキングpt</p>

                       <div class="index-2 fs-12">目玉報酬 <br><span class="txtYellow">柿原・成瀬ツバキの魂×1,500!!(合算値)</span></div>

                  <div class="btn01 mt-20 mb-20">
                    <a href="kengokuapp://060_Ranking03_155">【制圧】個人ランキングpt</a>
                  </div>



                    </div>
                    <?//=========タブ2END=========//?>
                     
                    <input type="radio" name="tabset" id="tabchecksilver3" checked>
                    <label for="tabchecksilver3" class="tab1">極石消費</label>

                    <div class="tabsilver" id="tabsilver3">
                    <div class="index-2">ランキング</div>
                        <p class="con-2 fs-12">期間中の極石消費数</p>


                        <div class="index-2 fs-12">目玉報酬 <br><span class="txtYellow">★４装備スキルマスター【防ノ書】</span></div>
                                    <div class="second-info mt-20">
                                        <div class="second-info__inner inner">
                                            <div class="param-info_icon">
                                                <div class="param-info_icon_chara">
                                                    <!-- アイコン画像([CharaIcon/○○.png]の部分の数字を変更) -->
                                                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/eq_00102.png" alt=""><br><p>スキルマスター【防ノ書】</p>
                                                    <div class="param-info_icon_frame"> 
                                                        <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/frame/IconFrame_3_chara.png" alt="">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="param-info_status">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/red/txt_icon_physical.png" alt="">
                                                <p class="param-info_text_normal">
                                                800
                                                </p>
                                            </div>
                                            <div class="param-info_status">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/red/txt_icon_attack.png" alt="">
                                                <p class="param-info_text_normal">
                                               0
                                                </p>
                                            </div>
                                            <div class="param-info_status">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/red/txt_icon_defense.png" alt="">
                                                <p class="param-info_text_normal">
                                               400
                                                </p>
                                            </div>
                                            <div class="param-info_status">
                                                <img src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/text/red/txt_icon_agility.png" alt="">
                                                <p class="param-info_text_normal">
                                                0
                                                </p>
                                            </div>
                                        </div>
                                    </div>

<div class="index-2 fs-12">スキル</div>
<?
$eq_skill_effect ="自身に<span class=\"txtYellow fs-12\">スキルゲージ減少無効</span><br>敵１体に<span class=\"txtYellow fs-12\">スキルゲージ増加無効</span><br>15秒間<span class=\"txtYellow fs-12\">50％の鈍化</span>"; /*スキル内容*/
?>

<div class="third-info__item_red-bottom mt-10">  <?php echo $eq_skill_effect ?></div>




<div class="index-2 fs-12">魅力詳細</div>

<p class="con-2 fs-12 mt-10">
                    三拳ノ極ランキング限定の★４装備!!<br>
                    <span class="txtYellow">誰でも装備できる★4装備!!</span><br>
                    <span class="txtYellow">スキル変動系の厄介なスキルに徹底対抗できる!!</span><br>
                    スキルマスター【防ノ書】が登場!!<br><br>
                    <span class="txtGreen">【魅力.1】</span>相手のスキルゲージ増加を無効化できる!! 榊・成瀬・東郷・緋山アケミなどが使うスキルゲージを増加させるスキルを無効化!!<br><br>
                  	<span class="txtGreen">【魅力.2】</span>自身のスキルゲージ減少を無効化できる!! 緋山アケミなどが使うスキルゲージ減少を無効化!!<br><br>
                    <span class="txtGreen">【魅力.3】</span>リーダースキルで鋭化・鈍化を掛けていない場合は<span class="txtYellow">50％の鈍化</span>も付与できる!! 相手からのスキルゲージ変動系を防御しつつ、相手のスキルゲージ増加系も無効化し有利な状況を作る!!<br><br>
                    <span class="txtRed">スキルマスターを入手して最強を目指せ!!</span><br>
                </p>


                <div class="Att3">
                    <p class="Att4">スキルマスターについて</p>
                    <ol class="notes-1">
                    <li>細かな仕様で実装をしておりますが、端的に<span class="txtYellow">厄介なスキル変動系のスキルに対抗できる装備</span>となります</li>
                    <li>先攻・後攻　/　鋭化・鈍化　/　スキルゲージ必要量上昇・スキルゲージ増加などの詳細については公認Wikiなどもご利用頂き、ご確認、ご理解ください</li>
                    <li>リーダースキルにて、永続効果を持つスキルは如何なる場合でも打ち消すことができません。対象キャラは現在実装されておりませんがご了承ください</li>

                    </ol>
                  </div>


                  <div class="btn01 mt-20 mb-20">
                    <a href="kengokuapp://060_Ranking03_156">極石消費</a>
                  </div>



                 </div>
                <?//=========タブ3END=========//?>


                  </div>
                  <?//=========tabbox タブ終わり=========//?>


                  <div class="Att3 mt-20">
                    <p class="Att4">【三拳ノ極】ランキングイベントについて</p>
                    <ol class="notes-1 fs-12">
                      <li>３種のランキングごとに報酬をご用意しております。各種ランキングページにて報酬一覧よりご確認ください</li>
                      <li>獲得pt数や対象期間の詳細など、ランキングページの詳細ボタンよりご確認頂けます。必ずご確認ください</li>
                      <li>イベント限定報酬として、全キャラが装備可能な<span class="txtYellow">★４装備スキルマスター【防ノ書】</span>が入手できます</li>
                      <li>対戦勝利数について、ツールの利用は禁止とさせて頂きます。ログ調査をさせて頂き、使用が確認できた場合、<span class="txtYellow">ランキングから抹消</span>させて頂きます</li>
                      <li>悪質と判断される場合、ペナルティ対象となる場合がございます。ご了承ください</li>
                    </ol>
                  </div>

                  <div class="backbtn01">
                    <div class="pb-30 pl-40">
                      <?php include '../../php/backbutton.php'; ?>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

</body>

</html>