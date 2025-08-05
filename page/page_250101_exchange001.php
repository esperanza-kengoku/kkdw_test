<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>
  

<body>

  <div id="container">


    <!--編集箇所-->
    <?php
    $name_title = "販売期間";
    $ban_image ="/images/Banner/page_250101_exchange001.php.png"; 
    $times ="01月01日00:00～01月05日11:59"; 
    ?>

<?//タブに時限をつける場合は下記のコードを使用//?>
<?php include '../../php/settime.php';
      /*表示開始日時*/
      $startTime = new DateTime('2025-01-05 12:00:00');

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
                    <img src="<?php include '../../php/domain.php'; ?><?php echo $ban_image ?>" width="100%" alt="">
                  </div>

                  <div class="index-4">
                    <?php echo $times ?>
                  </div>

                  <div class="index-2"><span class="fg-Gold">新年セール！</span><span class="txtYellow">過去最高クラスにお得な</span>交換所が登場！<br>2025年のスタートダッシュを決めろ！</div>



    <?////?>
    <?php if ($trigger == 1): ?>


                  <!-- 後半交換内容 -->
                  <div class="index-2">有償極石</div>
                    <table id="Table01" class="mt-20">
                    <tbody>
                      <tr>
                        <th style="width:60%;">商品</th>
                        <th style="width:40%;">値段</th>
                      </tr>
                                            <tr>
                        <td valign="middle" style="vertical-align: middle;">限突の勾玉×1</td>
                        <td valign="middle" style="vertical-align: middle;">1,200極石</td>
                      </tr>
                                            <tr>
                        <td valign="middle" style="vertical-align: middle;">覚醒ジッポ×1</td>
                        <td valign="middle" style="vertical-align: middle;">1,200極石</td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">改造工具×1</td>
                        <td valign="middle" style="vertical-align: middle;">600極石</td>
                      </tr>
                                                                 <tr>
                        <td valign="middle" style="vertical-align: middle;">限突の勾玉×10</td>
                        <td valign="middle" style="vertical-align: middle;">12,000極石</td>
                      </tr>
                                            <tr>
                        <td valign="middle" style="vertical-align: middle;">覚醒ジッポ×10</td>
                        <td valign="middle" style="vertical-align: middle;">12,000極石</td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">改造工具×10</td>
                        <td valign="middle" style="vertical-align: middle;">6,000極石</td>
                      </tr>
                                           <tr>
                        <td valign="middle" style="vertical-align: middle;">覚醒書×100</td>
                        <td valign="middle" style="vertical-align: middle;">2,200極石</td>
                      </tr>
                                            <tr>
                        <td valign="middle" style="vertical-align: middle;">鍛技書×100</td>
                        <td valign="middle" style="vertical-align: middle;">3,000極石</td>
                      </tr>
                                                                 <tr>
                        <td valign="middle" style="vertical-align: middle;">進化コイン×100</td>
                        <td valign="middle" style="vertical-align: middle;">860極石</td>
                      </tr>
                                            <tr>
                        <td valign="middle" style="vertical-align: middle;">覚醒コイン×100</td>
                        <td valign="middle" style="vertical-align: middle;">810極石</td>
                      </tr>
                                                                  <tr>
                        <td valign="middle" style="vertical-align: middle;">鍛技コイン×100</td>
                        <td valign="middle" style="vertical-align: middle;">870極石</td>
                      </tr>
                      

                      <tr>
                        <td valign="middle" style="vertical-align: middle;">魂（柿原晶）×1000</td>
                        <td valign="middle" style="vertical-align: middle;">24,000極石</td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">魂（桜庭陽介）×1000</td>
                        <td valign="middle" style="vertical-align: middle;">24,000極石</td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">魂（成瀬ツバキ）×1000</td>
                        <td valign="middle" style="vertical-align: middle;">24,000極石</td>
                      </tr>
          <tr>
                        <td valign="middle" style="vertical-align: middle;">魂（イクト）×1000</td>
                        <td valign="middle" style="vertical-align: middle;">24,000極石</td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">魂（柿原晶）×100</td>
                        <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">魂（桜庭陽介）×100</td>
                        <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">魂（成瀬ツバキ）×100</td>
                        <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                      </tr>
          <tr>
                        <td valign="middle" style="vertical-align: middle;">魂（イクト）×100</td>
                        <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                      </tr>
                    
                    
                    </tbody>
                  </table>




     <?php else: ?>




				    <div class="index-2">有償極石</div>
                      <table id="Table01" class="mt-20">
                      <tbody>
                        <tr>
                          <th style="width:60%;">商品</th>
                          <th style="width:40%;">値段</th>
                        </tr>
                        
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">限突の勾玉×1</td>
                          <td valign="middle" style="vertical-align: middle;">1,200極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（桜庭陽介）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（アンジェロ）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（久世大吾）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（スタンフィール）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（東郷竜司）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（夏見真衣）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（二階堂龍）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（三笠千代子）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（芹澤元嗣）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（カリラ）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（綉毬花）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（千堂春貴）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（巽鷲介）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（桜木静）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（郡上誠二）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（成瀬ツバキ）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（柿原晶）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（秋月日優）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（ニコーレ・ツェペリ）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（上谷昂一）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（碓氷巧弥）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（ノア）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（不破麗花）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（ホーク・エヴァンス）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（秋月隼人）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（スカルクラッシャー）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（榊景吾）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（サエコ）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">魂（荒谷賢）×100</td>
                          <td valign="middle" style="vertical-align: middle;">2,400極石</td>
                        </tr>
                        
                      </tbody>
                    </table>




     <?php endif; ?>





                  <div class="btn01 mt-20 mb-20">
                    <a href="kengokuapp://130_CommonShop01">交換所を確認する</a>
                  </div>


                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>交換所は期間限定開放です。開催期間を過ぎますと交換できなくなります。ご注意ください。</li>
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