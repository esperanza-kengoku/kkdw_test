<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>

<script>
  document.oncontextmenu = () => {
  return false;
};
</script>

<body>

  <div id="bridge-wrapper">
    <div id="content" class="clearfix">

      <div id="contentWrapper" class="column0">
        <div id="mainContent">
          <div id="news" class="newsDetail">

            <div class="news-text box-dent">
              <div class="outline-2">

                <div id="image_padding">
                  <div align="center" class="shadow-drop">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250101_ban_kakihara_01.png" width="100%" alt="">
                  </div>
                </div>

                <div class="tabbox mt-20">
                  <?//=========タブ始まり=========//?>

                  <?//3日間限定ガチャ?>


                  <input type="radio" name="tabset" id="tabchecksilver5" checked>
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver5" class="tab1">ガチャ詳細</label>

                  <div class="tabsilver" id="tabsilver5">

                    <div class="index-2">開催期間</div>
                    <p class="con-2">03/20 12:00~ 03/22 12:00</p>


                <p class="ta-c fs-12">アップグレード仕様で極ガチャが再登場!!</p>

                    <div class="frame-1 mt-20 mb-20 fs-12">
                      <p class="fw-b ta-c">【極】ガチャ</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2 fs-12">
                        <li><span class="txtYellow">★5,★6キャラ・★4専用装備</span>のいずれかが入手できます</li>
                        <li>ガチャ10回でチャンスに突入します</li>
                        <li>チャンスの突破率は10％です。<span class="txtYellow">10％を突破するとキャラが確定</span>で入手できます</li>
                        <li>獲得の期待値は以前までの極ガチャと同様ですが、ステップ50まで挑戦せずにチャンスを得る事ができ、引き次第で時短入手が可能です</li>
                        <li>専用装備が入手できるのは極ガチャのみです</li>
                        <li>本ピックアップガチャは5日間限定・有償通貨のみとの記載がございますが、復刻開催となりますので実際の開催期間は異なります。ご注意ください</li>
                      </ol>
                    </div>


                    <table id="Table01" class="mt-20 fs-10">
                      <tbody>
                        <tr>
                        <th style="width:70%;">復刻ガチャ</th>
                          <th style="width:30%;">対象キャラ</th>
                          
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250101_rush_kakihara_02.png" alt="alt" width="100%" class="header_img"></td>
                        <td valign="middle" style="vertical-align: middle;">柿原晶</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250201_rush_NewCharacter_002.png" alt="alt" width="100%" class="header_img"></td>
                        <td valign="middle" style="vertical-align: middle;">小泉香織</td>
                        </tr>
                        <tr>
                        <td valign="middle" style="vertical-align: middle;"> <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/250215_rush_NewCharacter_002.png" alt="alt" width="100%" class="header_img"></td>
                        <td valign="middle" style="vertical-align: middle;">綾瀬宏</td>
                        </tr>
                        </tbody>
                    </table>




                    <div class="frame-1 mt-20 mb-20 fs-12">
                      <p class="fw-b ta-c">注意事項</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2 fs-12">
                        <li>ページ内の表記のガチャ回数は11連ガチャを1回としてカウントしております。11連=11回ではございません。ご注意ください</li>
                        <li>一括ガチャを実行した場合、獲得内容については確認ができますがどのモードで何が排出されたかは確認ができません。ご注意ください</li>
                        <li>何回ガチャを実行したか？を表示する機能は現状ございません。大変恐縮ですが、ガチャ回数につきましてはご自身でご確認ください</li>
                      </ol>
                    </div>


                <div class="btn01 mt-20 mb-20 ta-c">
                  <a href="kengokuapp://120_Gacha">ガチャを確認する</a>
                </div>


                <div class="Att3">
                  <p class="Att4">【注意事項】</p>
                  <ol class="notes-1">
                    <li>内容は予告なく変更する場合がございます。</li>
                    <li>今後も利便性アップの為の改修は本ページにて告知させて頂きます。</li>
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




</body>

</html>