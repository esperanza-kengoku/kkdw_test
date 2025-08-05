<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>

<body>

  <div id="container">


    <!--編集箇所-->
    <?php
    $name_title = "販売期間";
    $ban_image ="/news/2023_1101_release/ban/ban_231107_pack001.png"; 
    $times ="11月07日12:00～11月09日12:00"; 
    ?>


    <div id="bridge-wrapper">
      <div id="content" class="clearfix">

        <div id="contentWrapper" class="column0">
          <div id="mainContent">
            <div id="news" class="newsDetail">

              <div class="news-text box-dent">
                <div class="outline-2">

                  <div id="image_padding" class="shadow-drop">
                    <!--バナー表示-->
                    <img src="<?php include '../../php/domain.php'; ?><?php echo $ban_image ?>" width="100%" alt="">
                  </div>

                  <div class="index-4">
                    <?php echo $name_title ?>
                    ※48時間限定！※
                  </div>

                  <div class="index-2">極石と強化素材が交換できる交換所に限定割引商品が登場！<br>48時間限定のチャンスを見逃すな！</div>

                  <div class="tabbox mt-20">
                    <?//=========タブ始まり=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver1" checked>
                    <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                    <label for="tabchecksilver1" class="tab1">有償極石</label>

                    <div class="" id="tabsilver1">
                      <table id="Table01" class="mt-20">
                      <tbody>
                        <tr>
                          <th style="width:50%;">商品</th>
                          <th style="width:50%;">値段</th>
                        </tr>

                        <!-- レイド詳細がここに入る -->
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">進化コイン×100</td>
                          <td valign="middle" style="vertical-align: middle;">3,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">進化コイン×100</td>
                          <td valign="middle" style="vertical-align: middle;">3,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">進化コイン×100</td>
                          <td valign="middle" style="vertical-align: middle;">3,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">進化コイン×100</td>
                          <td valign="middle" style="vertical-align: middle;">3,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">進化コイン×100</td>
                          <td valign="middle" style="vertical-align: middle;">3,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">進化コイン×100</td>
                          <td valign="middle" style="vertical-align: middle;">3,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">進化コイン×50</td>
                          <td valign="middle" style="vertical-align: middle;">1,500極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">進化コイン×10</td>
                          <td valign="middle" style="vertical-align: middle;">300極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">柿原の魂×100</td>
                          <td valign="middle" style="vertical-align: middle;">6,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">サエコの魂×100</td>
                          <td valign="middle" style="vertical-align: middle;">6,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">鬼瓦の魂×100</td>
                          <td valign="middle" style="vertical-align: middle;">6,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">★３確定キャラガチャ券×1</td>
                          <td valign="middle" style="vertical-align: middle;">400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">研磨玉（大）×10</td>
                          <td valign="middle" style="vertical-align: middle;">230極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">鍛技書×10</td>
                          <td valign="middle" style="vertical-align: middle;">1,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">鍛技コイン×10</td>
                          <td valign="middle" style="vertical-align: middle;">300極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">覚醒書×10</td>
                          <td valign="middle" style="vertical-align: middle;">2,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">覚醒コイン×10</td>
                          <td valign="middle" style="vertical-align: middle;">600極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">鍛技書×5</td>
                          <td valign="middle" style="vertical-align: middle;">500極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">鍛技コイン×5</td>
                          <td valign="middle" style="vertical-align: middle;">150極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">覚醒書×5</td>
                          <td valign="middle" style="vertical-align: middle;">1,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">覚醒コイン×5</td>
                          <td valign="middle" style="vertical-align: middle;">300極石</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <?//=========タブ1END=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver2">
                    <label for="tabchecksilver2" class="tab1">無償極石</label>

                    <div class="" id="tabsilver2">

                    <table id="Table01" class="mt-20">
                      <tbody>
                        <tr>
                          <th style="width:50%;">商品</th>
                          <th style="width:50%;">値段</th>
                        </tr>

                        <!-- レイド詳細がここに入る -->
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">進化コイン×100</td>
                          <td valign="middle" style="vertical-align: middle;">7,000極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">進化コイン×50</td>
                          <td valign="middle" style="vertical-align: middle;">3,500極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">進化コイン×10</td>
                          <td valign="middle" style="vertical-align: middle;">1,000極石</td>
                        </tr>
                        
                      </tbody>
                    </table>








                    </div>
                    <?//=========タブ2END=========//?>
                    
                  </div>
                  <?//=========tabbox タブ終わり=========//?>


                  <div class="btn01 mt-20 mb-20">
                    <a href="kengokuapp://070_MainShop01">交換所を確認する</a>
                  </div>


                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>交換所は期間限定開放です。開催期間を過ぎますと交換できなくなります。ご注意ください</li>
                      <li>有償・無償でキャンペーン内容が異なります。ご注意ください。</li>
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