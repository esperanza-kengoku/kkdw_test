<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>

<body>

  <div id="container">


    <!--編集箇所-->
    <?php
    $name_title = "物語 ２章「天神祭篇」";
    $ban_image ="/news/2023_1101_release/ban/231101_ban_story.png"; 
    $top_image ="/news/2023_1101_release/img/league_topimage_003.png"; 
    $times_entry ="11月1日"; 
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
                    <?php echo $name_title ?>開放!!
                  </div><br>
                  

                  <div class="index-2">開放時期</div>
                    <?php echo $times_entry ?>

                  <div class="index-2">開催概要</div>
                  <p class="index-3">
                    
                    <span class="red">
                      『
                      <?php echo $name_title ?>』
                    </span>が開放決定!!<br>
                    新たな主人公！<span class="red">"柿原晶"</span>の物語を見逃すな!!
                  </p>

                  <p class="index-3">

                    更に新章開放に合わせて革命戦線も大幅更新!!
                    新規5エリアの追加に加え、革命戦線制圧ミッションに新報酬<span class="red">称号＆背景</span>を追加！<br>
                    </p>
                    <p class="index-3">
                    今ままの制圧ミッションも一部報酬リセットが行われ称号＆背景が獲得出来る様になっているぞ!!
                  </p>

                  <p class="con-2">
                      <?php echo $name_short ?><span class="red">新たな章の開放と共に更に熱くなった物語機能をお見逃しなく!!
                      </span>
                    </span></p><br>
                  <p class="con-2">
                  <a href="kengokuapp://240_Scenario">
                      [物語はココからチェック！]
                    </a>
                  </p>
                  <br>

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