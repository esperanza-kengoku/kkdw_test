<!DOCTYPE html>
<html lang="ja">
    <?php include '../../php/head.php'; ?>
    <style>
  table {
    border-collapse: collapse;
    border: 2px solid orange;
  }

  th,
  td {
    border: 1px solid orange;
    padding: 8px;
  }
</style>
    
<body>

  <div id="container">

  
<!--編集箇所--> 
<?php
$name_title = "X’mas LIVE mission～麻生海璃のスパルタレッスン～";
$ban_image ="/news/2023_1215_release/231215_ban_addition_001.png"; 
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
                    期間限定制圧
                    <span class="red">
                     『 <?php echo $name_title ?>』
                    </span>が開催!!<br></p>
                    
                  <p class="index-3">    
                    期間限定イベント物語「X’mas LIVE mission」の開放に必要なアイテム
                    <span class="red">『特訓の記憶』</span>が獲得できる！
                  </p>
                  
                  <p class="index-3">                    
                    限定制圧の難易度は初級～超級の4段階<br>
                    <span class="red">今回の制圧はWAVE数が多くなっているぞ</span> </p>
                
                    <br><p class="headline_2"><a href="kengokuapp://150_Quest01_main">[制圧に向かう⇒]</a></p>
                  <br>
                  <p class="index-3">
                  
                  <p class="con-2"><span class="blue">特訓の記憶を集めて
                      <?php echo $name_short ?><span class="red">緋山アケミのクリスマス
                      </span>を見届けろ!!
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