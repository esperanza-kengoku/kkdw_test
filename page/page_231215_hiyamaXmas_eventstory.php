<!DOCTYPE html>
<html lang="ja">
    <?php include '../../php/head.php'; ?>
    
<body>

  <div id="container">

  
<!--編集箇所--> 
<?php
$name_title = "X’mas LIVE mission";
$ban_image ="/news/2023_1215_release/231215_ban_addition_002.png"; 
$ban_image2 ="/news/2023_1215_release/231215_ban_addition_001.png";
$times ="12月15日12:00～12月25日12:00"; 
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

                  <div class="index-2">開催期間</div>
                  <p class="con-2">
                    <?php echo $times ?>
                  </p><br>

                  <div class="index-2">開催概要</div>
                  <p class="headline_2">
                    期間限定イベント物語
                    <span class="red">
                     『 <?php echo $name_title ?>』
                    </span>が開催!!<br></p>
                    
                  <p class="index-3">    
                    緋山アケミのクリスマスの一日が書かれた物語が読める期間限定イベントが開催!!
                  </p>
                  
                  <br><p class="headline_2"><a href="kengokuapp://240_Scenario">[物語を確認する⇒]</a></p>

                  <p class="index-3">                    
                    イベント物語の開放には<span class="red">『特訓の記憶』</span>が必要になるぞ!!
                    <p class="con-2">『特訓の記憶』は同時開催中の限定制圧<br>「X’mas LIVE mission～麻生海璃のスパルタレッスン～」で獲得可能!!</p>
                <br></p>
                <a href="../page/page_231215_hiyamaXmas_kiokumeguri.php">
                    ▼「X’mas LIVE mission～麻生海璃のスパルタレッスン～」の詳細はコチラ
                     <br><p class="headline_2"><img src="<?php include '../../php/domain.php'; ?><?php echo $ban_image2 ?>" width="100%" alt=""></p></a>
                  <br>
                  <p class="index-3">
                    
                    さらにイベント物語の開催に併せて物語読破ミッションも開催!!<br> </p>
                 
                    <br><p class="headline_2"><a href="kengokuapp://050_Mission">[ミッションを確認する⇒]</a></p>

                  <p class="con-2"><span class="blue">今しか見れない<span class="red">緋山アケミ</span>の活躍を見逃すな!!
                    </span></p><br>

                  <div class="Att-1">
                    <div class="Att-2">
                      <p>【注意事項】</p>
                    </div>
                  </div>


                  <p class="Notes_li mt_10 txt" id="li_bgcolor">
                    開催期間や内容は予告なく変更する場合がございます。<br><br>
                  </p>

                  <br>
                  <br>
                  <?php include '../../php/backbutton.php'; ?>

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