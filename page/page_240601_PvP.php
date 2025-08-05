<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>

<body>

  <div id="container">
    <!--編集箇所-->
    <?php
    $name_title = "喧嘩スクランブル";
    $ban_image ="/images/Banner/240601_weeklymatch_banner_001.png"; 
    $top_image ="/images/NewInfo/240601_weeklymatch_topimage_001.png"; 
    $top_image001 ="/images/Banner/240601_page_pvp001.png"; 
    $top_image002 ="/images/Banner/240601_page_pvp002.PNG"; 
    $top_image003 ="/images/Banner/240601_page_pvp003.png"; 
    $top_image004 ="/images/Banner/240601_page_pvp004.png"; 
    $times_entry ="seasonは毎週土曜日更新!!"; 
    $times_battle ="6月6日 00:00～6月12日 23:59"; 
    $times_battle2 ="6月14日 00:00～6月20日 23:59";
    ?>

    <div id="bridge-wrapper">
      <div id="content" class="clearfix">
        <div id="contentWrapper" class="column0">
          <div id="mainContent">
            <div id="news" class="newsDetail">

              <div class="news-text box-dent">
                <div class="outline-2">

                <div id="image_padding">
                    <!--バナー表示-->
                    <img src="<?php include '../../php/masterdomain.php'; ?><?php echo $ban_image ?>" width="100%" alt="">
                  </div>
                  <div class="index-1">
                  <?php echo $times_entry ?>
                  </div>

                  <div class="tabbox mt-20">
                  <?//=========タブ始まり=========//?>

                  <input type="radio" name="tabset" id="tabchecksilver5" checked>
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver5" class="tab1">開催概要</label>
                  <div class="tabsilver" id="tabsilver5">
                  <img src="<?php include '../../php/masterdomain.php'; ?><?php echo $top_image ?>" width="100%" alt="">
    
                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>開催期間や内容は予告なく変更する場合がございます。</li>
                    </ol>
                  </div>
                 </div>
                  <?//=========タブ1END=========//?>


                  <input type="radio" name="tabset" id="tabchecksilver4">
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver4" class="tab1">基本仕様</label>
                  <div class="tabsilver" id="tabsilver4">
    
                  <div class="frame-1 mt-20 mb-20">
                      <p class="fs16 fw-b ta-c">喧嘩スクランブル基本仕様</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2">
                        <li>月間・週間の<span class="txtRed">対戦</span>ランキングのイベントです</li>
                        <li>参加者全員が豪華報酬を獲得できます</li>
                        <li>月間ランキングは今までと同じく、個人闘技場ランキングにて行います</li>
                        <li>週間ランキングはイベント扱いとなります。ランキング->イベントタブ->喧嘩スクランブルseason○でご確認ください</li>
                        <li>月間ランキングは闘技ptのランキング、週間ランキングは<span class="txtYellow">勝利数ランキング</span>となり、異なりますのでご注意ください(1勝で100pt)</li>
                        <li>毎週土曜日に週間ランキングはリセット、更新されます<span class="txtYellow">毎週1回でも対戦で勝利することで、豪華報酬が獲得できます</span></li>
                        <li>事前のお知らせの通り、更新ボタンは非表示とさせて頂いております。ご注意ください</li>
                        <li>6月については週間・月間ランキングの移行期間ということもあり、勝利数ランキングを採用させて頂いていたり、月間ランキングも前月の闘技ptを引き継ぐ仕様で実装させて頂いておりますが、7月以降は月間・週間ランキングでリセットされ、全て闘技ptのランキングとなる想定です。分かりにくく恐縮ですがご了承ください。</li>
                      </ol>
                    </div>      
                 </div>
                  <?//=========タブ1END=========//?>


                  <input type="radio" name="tabset" id="tabchecksilver3">
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver3" class="tab1">詳細</label>
                  <div class="tabsilver" id="tabsilver3">
    
                  <div class="frame-1 mt-20 mb-20">
                      <p class="fs16 fw-b ta-c">反映箇所のご案内</p>
                      <p class="hr_grd2"></p>
                      マイページ->ランキングとお進み頂きご確認ください<br><br>


                      <p class="fs16 fw-b ta-c">月間対戦ランキング</p>
                      <p class="hr_grd2"></p>
                      <img src="<?php include '../../php/masterdomain.php'; ?><?php echo $top_image001 ?>" width="100%" alt=""><br>
                      <p class="fs16 fw-b ta-c">週間対戦ランキング</p>
                      <p class="hr_grd2"></p>
                      <img src="<?php include '../../php/masterdomain.php'; ?><?php echo $top_image002 ?>" width="100%" alt=""><br><br>
                      <p class="fs16 fw-b ta-c">報酬確認方法</p>
                      <p class="hr_grd2"></p>
                      <img src="<?php include '../../php/masterdomain.php'; ?><?php echo $top_image003 ?>" width="100%" alt=""><br>
                      <p class="fs16 fw-b ta-c">毎週豪華報酬がもらえる!!</p>
                      <p class="hr_grd2"></p>
                      <img src="<?php include '../../php/masterdomain.php'; ?><?php echo $top_image004 ?>" width="100%" alt=""><br>


                    </div>      
                 </div>
                  <?//=========タブ1END=========//?>

                 </div>
                  <?//=========タブEND=========//?>

                  <div class="backbtn01 pb-35 pl-40">
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


</body>

</html>