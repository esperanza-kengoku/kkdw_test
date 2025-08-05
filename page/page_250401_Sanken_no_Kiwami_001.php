<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>



<?php
/*やること*/
//毎週土曜日の0時に時間を変更する
//各種ランキングIDをその週に反映されるIDに変更する(m_ranking_2.id)

/*ランキング更新時間を指定*/
    $weekTime_001 = new DateTime('2025-04-01 00:00:00');/*1週目開始日*/
    $weekTime_002 = new DateTime('2025-04-05 00:00:00');/*2週目開始日*/
    $weekTime_003 = new DateTime('2025-04-12 00:00:00');/*3週目開始日*/
    $weekTime_004 = new DateTime('2025-04-19 00:00:00');/*4週目開始日*/
    $weekTime_005 = new DateTime('2025-04-26 00:00:00');/*5週目開始日*/

//時間が5週目の時間より後なら
    if ($now >= $weekTime_005){

   //各種ランキングIDを指定
      $pvprank_id = 267; 
      $gvgrank_id = 271; 
      $stonerank_id = 280;
      $dailyrank_id = 281;  

//時間が4週目の時間より後なら
    } else if($now >= $weekTime_004){

  //各種ランキングIDを指定
      $pvprank_id = 266; 
      $gvgrank_id = 270; 
      $stonerank_id = 275;
      $dailyrank_id = 279;  

//時間が3週目の時間より後なら
    } else if($now >= $weekTime_003){

  //各種ランキングIDを指定
      $pvprank_id = 265; 
      $gvgrank_id = 269; 
      $stonerank_id = 274; 
      $dailyrank_id = 278; 


//時間が2週目の時間より後なら
    } else if($now >= $weekTime_002){

   //各種ランキングIDを指定
      $pvprank_id = 264; 
      $gvgrank_id = 268; 
      $stonerank_id = 273; 
      $dailyrank_id = 277; 

//時間が1週目の時間より後なら
    } else if($now >= $weekTime_001){

   //各種ランキングIDを指定
      $pvprank_id = 123; //開催しない 
      $gvgrank_id = 123; //開催しない
      $stonerank_id = 272;
      $dailyrank_id = 276; 

    }
?>


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
                      <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250401_ban_weeklymatch.png"
                        alt="BDCPバナー" width="100%" class="header_img">
                    </div>
                  </div>                  
                  <div class="index-2">毎週開催のランキングイベント!!</div> 

                  <div class="frame-1 mt-20 mb-20">
                      <p class="fs-16 fw-b ta-c">お知らせ</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2">
                        <p class="headline_2 fs-12 ta-c">週間・月間ランキングや三拳ノ極イベントを大幅リニューアル!!</p>
                        <p class="headline_2 fs-12 ta-c">なんと最強クラス装備【スキルマスター】を<span class="txtYellow">獲得できるチャンスが毎日あるぞ!!</span></p>
                      <p class="hr_grd2"></p>
                      <p class="headline_2 fs-12 ta-c">月間ランキングを廃止し、全て週間ランキングで統一!! 報酬を獲得できるチャンスが早くなる!! 極石消費だけはデイリーランキングも実装!!</p>
                      <p class="headline_2 fs-14 ta-c txtRed">※要注意!!※ 土曜日の0時〜12時はランキング更新期間となりますので、極石消費も含めて反映されません。ご注意ください</p>
                    </div>
                  <?//=========タブ部分=========//?>



        <div class="tabbox">
         <?//=========タブ始まり=========//?>
             <input type="radio" name="tabset" id="tabchecksilver1">
              <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                <label for="tabchecksilver1" class="tab1">喧嘩スクランブル</label>
                  <div class="tabsilver" id="tabsilver1">

                  <div id="image_padding">
                    <div align="center">
                      <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250401_weeklymatch_topimage_001.png"
                        alt="BDCPバナー" width="100%" class="header_img">
                    </div>
                  </div>

                  <div class="index-2 fs-12">目玉報酬 <br><span class="txtYellow">限定表情・髪型!!</span></div>

                  <div class="frame-1 mt-20 mb-20">
                      <p class="fs16 fw-b ta-c">喧嘩スクランブル基本仕様</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2">
                        <li>週間の<span class="txtRed">対戦</span>ランキングのイベントです。</li>
                        <li>参加者全員が豪華報酬を獲得できます。</li>
                        <li>ランキングはイベント扱いとなります。ランキング->イベントタブ->喧嘩スクランブルでご確認ください。</li>
                        <li>闘技ptのランキングとなります。</li>
                        <li>毎週土曜日にランキングはリセット、更新されます<span class="txtYellow">毎週1回でも対戦で勝利することで、豪華報酬が獲得できます。</span></li>
                      </ol>
                    </div>      

                  <div class="btn01 mt-20 mb-20">
                    <a href="kengokuapp://060_Ranking03_<?php echo $pvprank_id ?>">喧嘩スクランブル</a>
                  </div>


                    </div>
                    <?//=========タブ1END=========//?>
                    
                     <input type="radio" name="tabset" id="tabchecksilver2">
                    <label for="tabchecksilver2" class="tab1">抗争デスマッチ</label>
                    <div class="tabsilver" id="tabsilver2">

                    <div id="image_padding">
                    <div align="center">
                      <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250401_weeklymatch_topimage_002.png"
                        alt="BDCPバナー" width="100%" class="header_img">
                    </div>
                  </div>

                       <div class="index-2 fs-12">目玉報酬 <br><span class="txtYellow">限定称号・背景!!</span></div>

                       <div class="frame-1 mt-20 mb-20">
                      <p class="fs16 fw-b ta-c">抗争デスマッチ基本仕様</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2">
                        <li>週間の<span class="txtRed">抗争</span>ランキングのイベントです。</li>
                        <li>参加者全員が豪華報酬を獲得できます。</li>
                        <li>ランキング->イベントタブ->抗争デスマッチでご確認ください。</li>
                        <li>抗争デスマッチは<span class="txtYellow">勝利数ランキング</span>となます(勝利時のみ、参加人数×1pt)。</li>
                        <li>毎週土曜日にランキングはリセット、更新されます<span class="txtYellow">毎週1回でも抗争で勝利することで、豪華報酬が獲得できます。</span></li>
                      </ol>
                    </div>      

                  <div class="btn01 mt-20 mb-20">
                    <a href="kengokuapp://060_Ranking03_<?php echo $gvgrank_id ?>">抗争デスマッチ</a>
                  </div>



                    </div>
                    <?//=========タブ2END=========//?>
                     
                    <input type="radio" name="tabset" id="tabchecksilver3" checked>
                    <label for="tabchecksilver3" class="tab1">極石フリージー</label>

                    <div class="tabsilver" id="tabsilver3">
                    <div id="image_padding">
                    <div align="center">
                      <img src="<?php include '../../php/masterdomain.php'; ?>/images/NewInfo/250401_weeklymatch_topimage_003.png"
                        alt="BDCPバナー" width="100%" class="header_img">
                    </div>
                  </div>


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
                    イベント限定の★４装備!!<br>
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
                    <a href="kengokuapp://060_Ranking03_<?php echo $stonerank_id ?>">極石フリージー</a>
                  </div>

                  <div class="btn01 mt-20 mb-20">
                    <a href="kengokuapp://060_Ranking03_<?php echo $dailyrank_id ?>">極石フリージー(デイリー)</a>
                  </div>



                 </div>
                <?//=========タブ3END=========//?>


                  </div>
                  <?//=========tabbox タブ終わり=========//?>


                  <div class="Att3 mt-20">
                    <p class="Att4">【トリプルクラウン】ランキングイベントについて</p>
                    <ol class="notes-1 fs-12">
                      <li>対戦の喧嘩デスマッチ・抗争の抗争スクランブル・極石消費の極石フリージーの３種のランキングイベントです</li>
                      <li>獲得pt数や対象期間の詳細など、ランキングページの詳細ボタンよりご確認頂けます。必ずご確認ください</li>
                      <li>イベント限定報酬として、全キャラが装備可能な<span class="txtYellow">★４装備スキルマスター</span>が入手できます</li>
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