<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>

<style>
.fl-quest {
  font-size: 2.8vw;
  left: 10%;
}

@media screen and (min-width: 767px) {
  .fl-quest {
    font-size: 22px;
  }

  .ml--5 {
    margin-left: -11px;
  }
}

</style>


<body>

  <div id="container">


    <!--編集箇所-->
    <?php
    $name_long = "柿原晶";
    $name_short = "柿原";
    $ban_image ="/news/2023_1101_release/ban/231101_ban_NewCharacter_003.png"; 
    $times ="11月1日 12:00 ～ 11月15日 12:00"; 
    $info_image = "/ItemIcon/100152.png"; /*魂の画像*/
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

                  <div class="index-1">『決戦闘技』に
                    <?php echo $name_long ?>が登場!!
                  </div><br>

                  <div class="index-2">開催期間</div>
                  <p class="con-2">
                    <?php echo $times ?>
                  </p><br>

                  <div class="index-2">開催概要</div>
                  <p class="index-3">期間限定で強力な
                    <?php echo $name_short ?>と戦えるクエスト<span class="red">『決戦闘技【
                      <?php echo $name_short ?>】』
                    </span>が登場!!
                  </p>
                  <div id="image_padding">
                    <div align="center" class="pos-r">

                      <?//=========fl-questで文言を水平方向に調整可（ソース上部styleタグに記述）=========//?>
                      <p class="pos-a overlap-30 fl-quest ft-quest1">決戦闘技<span class="ml--5">【</span><?php echo $name_short ?>】<span class="ml--5">-</span>上級</p>
                      <p class="pos-a overlap-30 fl-quest ft-quest2">決戦闘技<span class="ml--5">【</span><?php echo $name_short ?>】<span class="ml--5">-</span>超級</p>
                      <p class="pos-a overlap-30 fl-quest ft-quest3">決戦闘技<span class="ml--5">【</span><?php echo $name_short ?>】<span class="ml--5">-</span>絶級</p>
                      <div  class="pos-r overlap-20">
                        <img
                          src="<?php include '../../php/domain.php'; ?>/chara_Info_Sample/images/modules/quest_nikore3.png"
                          alt="ミッション報酬" width="100%">
                      </div>
                      <div class="pos-a backimage-quest overlap-10">
                        <img
                        src="<?php include '../../php/domain.php'; ?><?php echo $info_image ?>"
                        alt="ミッション報酬" width="100%">
                      </div>

                    </div>
                  </div>
                  <p class="con-3">
                    難易度は上級・超級・絶級の3段階があり、ミッション報酬で「魂(
                    <?php echo $name_long ?>)」の入手も可能！<br>
                  </p>

                  <p class="con-2"><span class="blue">超強力な
                      <?php echo $name_short ?>を討伐して、希少アイテム<span class="red">「魂(
                        <?php echo $name_long ?>)」
                      </span>を獲得しろ!!
                    </span></p>

                  <br>

                  <div class="Att-1">
                    <div class="Att-2">
                      <p>【注意事項】</p>
                    </div>
                  </div>

                  <p class="Notes_li mt-10 txt" id="li_bgcolor">
                    開催期間や内容は予告なく変更する場合がございます。<br><br>
                    <span class="red">攻略途中でイベント開催時間を超過してしまった場合、クリアしても制圧失敗となります。ご注意ください。</span><br>
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