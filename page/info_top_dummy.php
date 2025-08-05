<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head_info.php'; ?>
<?php include '../../php/head.php'; ?>
<body>
<div id="container">


    <!--編集箇所-->
    <?php
    $name_title = "最新のお知らせ";
    $ban_image ="/NewImage/190_Help/header_Help001.png"; 
    $times ="9月15日12:00～10月1日12:00"; 
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
                  </div>


                  <div class="tabbox mt-20">
                    <?//=========タブ始まり=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver1" checked>
                    <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                    <label for="tabchecksilver1" class="tab1">キャンペーン</label>

                    <div class="tabsilver" id="tabsilver1">
                    <!--表示したいバナー-->
                    <ul class="newsContent-items">
                      <?php include '../ban/ban_maintenance.php'; ?><!--メンテナンスお知らせ-->
                      <!--1201反映想定-->                      
                      <?php include '../ban/ban_231101_ban_pack001.php'; ?><!--1201パック-->
                      <?php include '../ban/ban_231201_HACP.php'; ?><!--HACP-->　 
                      <?php include '../ban/ban_231201_gujyou_gacha.php'; ?><!--郡上ガチャ-->　
                      <?php include '../ban/ban_231201_gujyou_quest.php'; ?><!--郡上クエスト-->　 
                      <?php include '../ban/ban_230713_story.php'; ?><!--物語開放バナー-->
                      <?php include '../ban/ban_231127_raid001.php'; ?><!--BFレイド-->
                      <?php include '../ban/ban_raidinfo001.php'; ?><!--遊撃隊のお知らせ-->
                      <!--1127反映想定-->
                      <?php include '../ban/ban_231127_story001_gacha.php'; ?><!--物語一章ガチャ-->
                      <?php include '../ban/ban_231127_ban_pack001.php'; ?><!--ガチャ支援パック-->
                      <!--1124反映想定-->
                       <?php include '../ban/ban_231124_ban_VIP.php'; ?><!--VIP紹介-->
                       <?php include '../ban/ban_231123_ban_pack001.php'; ?><!--拳極乱舞支援パック-->
                       <?php include '../ban/ban_231115_naruse_gacha.php'; ?><!--1115_成瀬ガチャ-->
                       <?php include '../ban/ban_231115_naruse_quest.php'; ?><!--1115_成瀬クエスト-->
                       <?php include '../ban/ban_game8.php'; ?><!--拳極の進め方-->
                       <?php include '../ban/ban_operationinfo.php'; ?><!--0000_更新情報--> 
                       <?php include '../ban/ban_raidinfo.php'; ?><!--レイド詳細-->
                       <?php include '../ban/ban_statuseffect.php'; ?><!--状態異常-->
                       <?php include '../ban/ban_231101_element.php'; ?><!--属性紹介-->
                        </ul>
                    </div>
                    <?//=========タブ1END=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver2">
                    <label for="tabchecksilver2" class="tab1">キャラ・アバター</label>

                    <div class="tabsilver" id="tabsilver2">
                    <ul class="newsContent-items">
                   <?php include '../ban/ban_231201_gujyou.php'; ?><!--1201郡上-->
                   <?php include '../ban/ban_231124_kisaragi.php'; ?><!--VIP如月-->
                   <?php include '../ban/ban_231115_naruse.php'; ?><!--1115成瀬-->
                   <?php include '../ban/ban_231103_ban.php'; ?><!--1103バン仲村-->
                   <?php include '../ban/ban_231101_kakihara.php'; ?><!--1101_柿原-->
                   <?php include '../ban/ban_231019_avatar_gacha.php'; ?><!--1019_新アバター-->
                   <?php include '../ban/ban_231001_onigawarahw.php'; ?>
                   <?php include '../ban/ban_230915_hiyuu.php'; ?>
                   <?php include '../ban/ban_230901_nikore.php'; ?>
                   <?php include '../ban/ban_230801_kamiya.php'; ?>
                   <?php include '../ban/ban_230715_usui.php'; ?>
                   <?php include '../ban/230713_ban_NewCharacter_003.php'; ?>
                   <?php include '../ban/ban_230701_noa.php'; ?>
                   <?php include '../ban/ban_230615_fuwa.php'; ?>
                   <?php include '../ban/ban_230601_hawk.php'; ?>
                   <?php include '../ban/ban_230501_araya.php'; ?>
                   <?php include '../ban/ban_230501_saeko.php'; ?>
                   <?php include '../ban/ban_230501_sakaki.php'; ?>
                   <?php include '../ban/ban_230501_hayato.php'; ?>
                   <?php include '../ban/ban_230501_skull.php'; ?>
                </ul>

                    </div>
                    <?//=========タブ2END=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver3">
                    <label for="tabchecksilver3" class="tab1">更新情報</label>

                    <div class="tabsilver" id="tabsilver3">

                    <!--恒常-->
                    <ul class="newsContent-items">
                        <?php include '../ban/ban_231101_ban_leagueinfo001.php'; ?><!--リーグルール改定-->
                        <?php include '../ban/ban_231110_ban_raidinfo001.php'; ?><!--レイドルール改定-->
                        <?php include '../ban/ban_230915_updateinfo.php'; ?><!--0000_更新情報-->
                        <?php include '../ban/ban_gp_cvs_payment.php'; ?><!--android_コンビニ支払い-->
                    </ul>

                    </div>
                    <?//=========タブ3END=========//?>



                  </div>
                  <?//=========tabbox タブ終わり=========//?>


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


  </div>

    <?php include '../../php/foot_info.php'; ?>
</body>
</html>