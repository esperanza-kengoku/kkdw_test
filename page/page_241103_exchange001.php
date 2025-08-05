<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>
  

<body>

  <div id="container">


    <!--編集箇所-->
    <?php
    $name_title = "販売期間";
    $ban_image ="/images/Banner/241028_ban_exchange001.png"; 
    $times ="02月16日21:00～02月16日23:59";
    ?>



<?//タブに時限をつける場合は下記のコードを使用//?>
<?php include '../../php/settime.php';
      /*表示開始日時*/
      $startTime = new DateTime('2025-04-21 21:00:00');

           if ($now >= $startTime){
       
                $trigger = 1;
       
               };


;?>


    <div id="bridge-wrapper">
      <div id="content" class="clearfix">

        <div id="contentWrapper" class="column0">
          <div id="mainContent">
            <div id="news" class="newsDetail">

              <div class="news-text box-dent">
                <div class="outline-2">

                  <div id="image_padding" class="shadow-drop">
                    <!--バナー表示-->
                    <img src="<?php include '../../php/masterdomain.php'; ?><?php echo $ban_image ?>" width="100%" alt="">
                  </div>

                  <div class="index-4">
                    <?php echo $name_title ?>
                    <span class="yellow">※3時間限定！※</span>
                  </div>

                  <div class="index-2"><div style="    background-color: rgba(0, 0, 0, 0.6);">極石と強化素材を交換できる交換所に<br>新しく<span class="fg-Gold">激安ショップ【鈍器・宝亭】</span>が登場！
                  <br><span class="yellow">3時間</span>限定の激安ショップで強化素材を買い漁れ！</div></div>



                  <?php if ($trigger == 1):?>

<?//後半の内容をこちらに記載 ?>
                    <div class="index-2">ラインナップ</div>
                      <table id="Table01" class="mt-20">
                      <tbody>
                        <tr>
                          <th style="width:60%;">商品</th>
                          <th style="width:40%;">値段</th>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（綾瀬宏）×1,000</td>
                          <td valign="middle" style="vertical-align: middle;">30,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（如月いづみ）×1,000</td>
                          <td valign="middle" style="vertical-align: middle;">15,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（秋月隼人）×1,000</td>
                          <td valign="middle" style="vertical-align: middle;">15,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（秋月日優）×1,000</td>
                          <td valign="middle" style="vertical-align: middle;">15,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（荒谷賢）×1,000</td>
                          <td valign="middle" style="vertical-align: middle;">7,500極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（郡上誠二）×1,000</td>
                          <td valign="middle" style="vertical-align: middle;">7,500極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（綾瀬宏）×100</td>
                          <td valign="middle" style="vertical-align: middle;">3,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（如月いづみ）×100</td>
                          <td valign="middle" style="vertical-align: middle;">1,500極石</td>
                        </tr>
						<tr>
                          <td valign="middle" style="vertical-align: middle;">魂（秋月隼人）×100</td>
                          <td valign="middle" style="vertical-align: middle;">1,500極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（秋月日優）×100</td>
                          <td valign="middle" style="vertical-align: middle;">1,500極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（荒谷賢）×100</td>
                          <td valign="middle" style="vertical-align: middle;">750極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（郡上誠二）×100</td>
                          <td valign="middle" style="vertical-align: middle;">750極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">限突の勾玉×1</td>
                          <td valign="middle" style="vertical-align: middle;">4,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">覚醒ジッポ×1</td>
                          <td valign="middle" style="vertical-align: middle;">4,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">改造工具×1</td>
                          <td valign="middle" style="vertical-align: middle;">2,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">覚醒コイン×1,000</td>
                          <td valign="middle" style="vertical-align: middle;">27,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">鍛技コイン×1,000</td>
                          <td valign="middle" style="vertical-align: middle;">30,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">覚醒コイン×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,700極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">鍛技コイン×100</td>
                          <td valign="middle" style="vertical-align: middle;">3,000極石</td>
                        </tr>
      
                      </tbody>
                    </table>



                    <?php else :?>

 <?//前半の内容をこちらに記載 ?>
                  <div class="index-2">ラインナップ</div>
                      <table id="Table01" class="mt-20">
                      <tbody>
                        <tr>
                          <th style="width:60%;">商品</th>
                          <th style="width:40%;">値段</th>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（綾瀬宏）×1,000</td>
                          <td valign="middle" style="vertical-align: middle;">30,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（如月いづみ）×1,000</td>
                          <td valign="middle" style="vertical-align: middle;">15,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（秋月隼人）×1,000</td>
                          <td valign="middle" style="vertical-align: middle;">15,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（秋月日優）×1,000</td>
                          <td valign="middle" style="vertical-align: middle;">15,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（荒谷賢）×1,000</td>
                          <td valign="middle" style="vertical-align: middle;">7,500極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（郡上誠二）×1,000</td>
                          <td valign="middle" style="vertical-align: middle;">7,500極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（綾瀬宏）×100</td>
                          <td valign="middle" style="vertical-align: middle;">3,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（如月いづみ）×100</td>
                          <td valign="middle" style="vertical-align: middle;">1,500極石</td>
                        </tr>
						<tr>
                          <td valign="middle" style="vertical-align: middle;">魂（秋月隼人）×100</td>
                          <td valign="middle" style="vertical-align: middle;">1,500極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（秋月日優）×100</td>
                          <td valign="middle" style="vertical-align: middle;">1,500極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（荒谷賢）×100</td>
                          <td valign="middle" style="vertical-align: middle;">750極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（郡上誠二）×100</td>
                          <td valign="middle" style="vertical-align: middle;">750極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">限突の勾玉×1</td>
                          <td valign="middle" style="vertical-align: middle;">4,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">覚醒ジッポ×1</td>
                          <td valign="middle" style="vertical-align: middle;">4,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">改造工具×1</td>
                          <td valign="middle" style="vertical-align: middle;">2,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">覚醒コイン×1,000</td>
                          <td valign="middle" style="vertical-align: middle;">27,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">鍛技コイン×1,000</td>
                          <td valign="middle" style="vertical-align: middle;">30,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">覚醒コイン×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,700極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">鍛技コイン×100</td>
                          <td valign="middle" style="vertical-align: middle;">3,000極石</td>
                        </tr>
      
                      </tbody>
                    </table>


                    <?php endif ;?>



                  <div class="btn01 mt-20 mb-20">
                    <a href="kengokuapp://130_CommonShop01">交換所を確認する</a>
                  </div>


                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>交換所は期間限定開放です。開催期間を過ぎますと交換できなくなります。ご注意ください。</li>
                      <li>有償極石のみと交換が可能です。</li>
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