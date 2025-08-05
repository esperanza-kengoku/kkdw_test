<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>

<body>

  <div id="container">


    <!--編集箇所-->
    <?php
    $name_title = "第3回 KNUCKLE BOUT";
    $ban_image ="/news/2023_1101_release/ban/league_banner_0001.png"; 
    $top_image ="/news/2023_1101_release/img/league_topimage_001.png"; 
    $times_entry ="11月1日 12:00～11月4日 12:00"; 
    $times_battle ="11月5日 00:00～11月11日 23:59"; 
    ?>


    <div id="bridge-wrapper">
      <div id="content" class="clearfix">

        <div id="contentWrapper" class="column0">
          <div id="mainContent">
            <div id="news" class="newsDetail">

              <div class="news-text box-dent">
                <div class="outline">

                  <div id="image_padding">
                    <!--バナー表示-->
                    <img src="<?php include '../../php/domain.php'; ?><?php echo $ban_image ?>" width="100%" alt="">

                  </div>

                  <div class="index-1">
                    <?php echo $name_title ?>開催!!
                  </div><br>
                  <img src="<?php include '../../php/domain.php'; ?><?php echo $top_image ?>" width="100%" alt="">

                  <div class="index-2">開催期間</div>
                  <p class="index-3">エントリー期間<br>
                    <?php echo $times_entry ?>
                  </p>
                  <p class="index-3">対戦期間<br>
                    <?php echo $times_battle ?>
                  </p><br>

                  <div class="index-2">開催概要</div>
                  <p class="index-3">
                    個人リーグ
                    <span class="red">
                      『
                      <?php echo $name_title ?>』
                    </span>が開催決定!!<br>
                    大会の成績に応じて豪華報酬が獲得できる！
                  </p>

                  <p class="index-3">
                    更にSリーグ上位3名には
                    <span class="red">大会限定アバター</span>を贈呈！
                  </p>

                  <p class="con-2 ta-c"><span class="red">
                      <span class="fg-Gold">最強の座
                      </span>を掴め!!
                    </span>
                  </p>
                  <br>

                  <p class="ta-c con-3">▼ 個人リーグの詳しい情報は ▼</p>

                  <div class="btn01 mt-0 mb-20">
                    <a href="../page/page_leagueinfo.php">
                      ココをチェック！
                    </a>
                  </div>

                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>開催期間や内容は予告なく変更する場合がございます。</li>
                    </ol>
                  </div>

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