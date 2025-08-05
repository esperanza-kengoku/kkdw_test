<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>
<?//=========↓↓↓↓スライド付きのhead↓↓↓↓=========//?>
<?php include '../../php/head_HallOfFame.php'; ?>

<style>
  .header {
    border-bottom: 0px;
  }

  .bg-firstPlace {
    background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgb(0 0 0)), url(https://official-page-images.s3.ap-northeast-1.amazonaws.com/chara_Info_Sample/images/modules/bg00001.png);
  }

  .bg-secondPlace {
    background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgb(0 0 0)), url(https://official-page-images.s3.ap-northeast-1.amazonaws.com/chara_Info_Sample/images/modules/00077.png);
  }

  .bg-thirdPlace {
    background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgb(0 0 0)), url(https://official-page-images.s3.ap-northeast-1.amazonaws.com/chara_Info_Sample/images/modules/00077.png);
  }

  .bg-position {
    background-size: 100%;
    background-position-y: 20%;
  }

  .flexbox_HF {
    padding: 10px;
  }

  .hallobFame_name {
    text-align: center;
    width: 50%;
  }

  .hallofFame_name img {
    margin: 0 auto;
  }

  .fs-name {
    font-size: 18px;
  }

  .coment {
    text-align: center;
    height: 30%;
  }

  .coment p {
    font-size: 16px;
    font-feature-settings: "palt";
    line-height: 1em;
    word-break: break-all;
    padding: 3%;
    top: 65%;
    left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
  }

  .wid30 {
    background-color: #000000;

    width: 30%;
    overflow: hidden;
    box-shadow: -8px -8px 6px -6px #000000 inset, 8px 8px 6px -6px #000000 inset, 0px 0px 0px 0px rgb(255 139 44), 0px 0px 0px 1px rgb(107 0 0), 0px 0px 0px 2px rgb(255 232 156);
  }

  .wid30-secondPlace {
    background-color: #000000;
    width: 30%;
    overflow: hidden;
    box-shadow: -8px -8px 6px -6px #000000 inset, 8px 8px 6px -6px #000000 inset, 0px 0px 0px 0px rgb(126 126 126), 0px 0px 0px 1px rgb(45 45 45), 0px 0px 0px 2px rgb(209 209 209);
  }

  .wid30-thirdPlace {
    background-color: #000000;
    width: 30%;
    overflow: hidden;
    box-shadow: -8px -8px 6px -6px #000000 inset, 8px 8px 6px -6px #000000 inset, 0px 0px 0px 0px rgb(255 44 44), 0px 0px 0px 1px rgb(107 0 0), 0px 0px 0px 2px rgb(255, 147, 140);
  }

  .fr-hf {
    bottom: 0px;
  }

  .slick-dots li.slick-active button:before {
    opacity: 1;
    color: rgb(24, 0, 245);
    text-shadow: 0 0 0.9em #ffffff, 0 0 0.9em #ffffff, 0 0 0.9em #ffffff, 0 0 0.9em #ffffff;
  }

  .slick-dots li button:before {
    opacity: 1;
    color: rgb(255, 255, 255);
  }

  .slick-dots li{
    margin: 0px;
    width: 10px;
  }

  .secondPlace-hf {
    filter: grayscale(1);
  }

  .thirdPlace-hf{
    filter: hue-rotate(330deg);
  }

.fs16 {
  font-size: 16px;
}

</style>

<?php
    $avatarList = array("07081","07082");
;?>

<body>

  <div id="container">


    <!--編集箇所-->
    <?php
    $name_title = "拳極×BREAKINGDOWNコラボマッチ";
    $ban_image ="/images/Banner/league_banner_0017.png"; 
    $top_image ="/images/NewInfo/240820_league_topimage_003.png"; 
    $times_entry ="8月20日 12:00～8月23日 12:00"; 
    $times_battle ="8月24日 00:00～8月30日 23:59"; 
    ?>
<style>
  


.fs16 {
  font-size: 16px;
}

</style>

<body>

<div id="bridge-wrapper">
      <div id="content" class="clearfix">

        <div id="contentWrapper" class="column0">
          <div id="mainContent">
            <div id="news" class="newsDetail">

              <div class="news-text box-dent">
                <div class="outline-2">


                  <div id="image_padding">
                    <div align="center">
                      <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240802_ban_collab_001.png"
                        alt="BDCPバナー" width="100%" class="header_img">
                    </div>
                  </div>

                  <div class="index-1" id="releasegacha">大好評につき再コラボ決定!!</div>

                  <br>
                  <div class="tabbox mt-20">
                    <?//=========タブ始まり=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver1">
                    <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                    <label for="tabchecksilver1" class="tab1">第１弾</label>

                   <div class="tabsilver" id="tabsilver1">
                    <div class="index-2">開催期間</div>
                    <p class="con-2">8/2 12:00 ～ 9/3 0:00までの間で7日間</p>
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240802_page_collab_001.png"
                        alt="BD01" width="100%" class="header_img">
                    <p class="con-2 ta-c">朝倉未来が再度入手できるチャンス！ ログインボーナスで必ず貰えるぜ!!</p>
                    <p class="con-2 ta-c">さらに!! 専用装備の登場で現環境でもトップクラスの最強アタッカーにすることが可能!! 期間限定のコラボガチャも見逃すな!!</p>
                    
                    <table id="Table01" class="mt-20">
                    <tbody>
                      <tr>
                        <th style="width:20%;">日にち</th>
                        <th style="width:80%;">内容</th>
                      </tr>

                      <!-- ログボ詳細 -->
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">1日目</td>
                        <td valign="middle" style="vertical-align: middle;">★１朝倉未来</td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">2日目</td>
                        <td valign="middle" style="vertical-align: middle;">朝倉未来の魂×10</td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">3日目</td>
                        <td valign="middle" style="vertical-align: middle;">朝倉未来の魂×10</td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">4日目</td>
                        <td valign="middle" style="vertical-align: middle;">朝倉未来の魂×10</td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">5日目</td>
                        <td valign="middle" style="vertical-align: middle;">朝倉未来の魂×10</td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">6日目</td>
                        <td valign="middle" style="vertical-align: middle;">朝倉未来の魂×10</td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">7日目</td>
                        <td valign="middle" style="vertical-align: middle;">進化コイン×50</td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>ログインボーナスは毎時３時更新となります。前回までと仕様が異なりますのでご注意ください</li>
                    <li>※前回のキャンペーンでキャラを入手しているユーザー様は魂の配布になります。ご注意ください</li>
                    </ol>
                  </div>


 
                    </div>
                    <?//=========タブ2END=========//?>
                    
                    <input type="radio" name="tabset" id="tabchecksilver2">
                    <label for="tabchecksilver2" class="tab1">第2弾</label>

                    <div class="tabsilver" id="tabsilver2">
                    <div class="index-2">詳細公開</div>
                    <p class="con-2">8/2 12:00 ～ </p>
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240802_page_collab_002.png"
                        alt="BD01" width="100%" class="header_img">
                    <p class="con-2 ta-c">
                      合計1,000万円分の豪華報酬が当たる！<br>応募券を入手して抽選に参加しろ！<br>
                      <br>
                      </p>
                      
                     <p class="con-2 ta-c"> 【応募券の入手方法】 </p>

                       <table id="Table01" class="mt-20">
                      <tbody>
                        <tr>
                          <th style="width:50%;">応募券</th>
                          <th style="width:50%;">ミッション</th>
                        </tr>

                        <!-- レイド詳細がここに入る -->
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">応募券</td>
                          <td valign="middle" style="vertical-align: middle;">抗争参加1回につき１枚</td>
                        </tr>
                      </tbody>
                    </table>
                      
                    <p class="con-2 ta-c"><span class="txtRed">特にエントリーなどは必要ありません</span>枚数を多く入手していただくことで抽選確率が高くなります。</p><br>
    

                      
			      <p class="con-2 ta-c"> 【報酬】 </p>

                       <table id="Table01" class="mt-20">
                      <tbody>
                        <tr>
                          <th style="width:50%;">項目</th>
                          <th style="width:50%;">点数</th>
                        </tr>

                        <!-- レイド詳細がここに入る -->
                         <tr>
                          <td valign="middle" style="vertical-align: middle;">Amazonギフトカード10,000円分</td>
                          <td valign="middle" style="vertical-align: middle;">100名</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">極石×1,000,000</td>
                          <td valign="middle" style="vertical-align: middle;">1名</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">極石×500,000</td>
                          <td valign="middle" style="vertical-align: middle;">3名</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">極石×100,000</td>
                          <td valign="middle" style="vertical-align: middle;">5名</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">極石×50,000</td>
                          <td valign="middle" style="vertical-align: middle;">10名</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">極石×10,000</td>
                          <td valign="middle" style="vertical-align: middle;">50名</td>
                        </tr>
                        <tr>
                          <td valign="middle" style="vertical-align: middle;">極石×5,000</td>
                          <td valign="middle" style="vertical-align: middle;">1,000名</td>
                        </tr>
                      </tbody>
                    </table>
                      
                         <div class="Att3 mt-20">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">        
                     <li>本キャンペーンは株式会社シャンスの運営アプリ『拳極』による提供です。</li>
                     <li>本キャンペーンは当社が独自に行うものであり、Apple社、Google社は一切関係ありません。</li>
                     <li>当選の権利は当選者ご本人のものとし、他人への譲渡・換金はできません。</li>
                     <li>本キャンペーン中に発生したトラブル等につきましては、当社では一切責任を負いかねます。</li>
                     <li>応募の抽選券はゲームアプリ『拳極』内のミッションをクリアする事で獲得できます。</li>
                     <li>本キャンペーンは、予告なく終了・変更となる場合があります。</li>
                     <li>当選連絡時にお伝えする期限までに当社所定の手続を実施いただけない場合は、当選を取り消すことがあります。</li>
                     <li>Amazon、Amazon.co.jp およびそれらのロゴはAmazon.com, Inc.またはその関連会社の商標です。</li>
                     <li>抽選期日　2024年09月03日0時00分まで</li>
                     <li>賞品の配布/発送は、<span class="fg-Gold">2024年09月20日まで</span>に行う予定です。</li>
                     <li><span class="txtRed">前回お問い合わせを多数頂いておりました為、必ず抽選日程についてご確認ください</span></li>
                    </ol>
                  </div>            
                      
                  <div class="btn01 mt-20 mb-20">
                     <a href="kengokuapp://050_Mission">ミッションはコチラ！</a>
                  </div>
                      
                      
                    </div>
                    <?//=========タブ2END=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver3">
                    <label for="tabchecksilver3" class="tab1">第３弾</label>

                    <div class="tabsilver" id="tabsilver3">
                    <div class="index-2">開催期間</div>
                    <p class="con-2">8/2 12:00 ～ 9/3 0:00</p>
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240802_page_collab_003.png"
                        alt="BD01" width="100%" class="header_img">
                    <p class="con-2 ta-c">
                      コラボ期間限定の限定ミッションを多数開催！ 物語を進める、キャラを強化するなど拳極の世界をより知っていくことで豪華報酬がもらえるぜ！<br>
                      拳極を遊び尽くして豪華報酬も手に入れろ！</p>

                      <div class="btn01 mt-20 mb-20">
                        <a href="kengokuapp://050_Mission">ミッションはコチラ！</a>
                      </div>

                    </div>
                    <?//=========タブ3END=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver4"checked>
                    <label for="tabchecksilver4" class="tab1">第４弾</label>

                    <div class="tabsilver" id="tabsilver4">
                    <div class="index-2">開催期間</div>
                  <div style="    background-color: rgba(0, 0, 0, 0.6);">
                  <p class="index-3">エントリー期間<br>
                    <?php echo $times_entry ?>
                  </p>
                  <p class="index-3">対戦期間<br>
                    <?php echo $times_battle ?>
                  </p><br>
                    
                    </div>
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240802_page_collab_004.png"
                        alt="BD01" width="100%" class="header_img">
                  <div id="image_padding">
                  <!--バナー表示-->
                    <img src="<?php include '../../php/domain.php'; ?><?php echo $ban_image ?>" width="100%" alt="">
                  </div>
                      <div class="Att3">
                    <p class="Att4 ta-c">▼コラボアバター公開中！▼</p>
                  </div>
                    <div class="slider">
                      <ul class="slider-nav">
                     <?//=========↓↓↓↓配列内にあるアバターID分だけループして表示する↓↓↓↓=========//?>
                     <?php foreach($avatarList as $img):?>
                        <li>
                          <div class="flexbox flexbox_HF">
                            <div class="space-reset shadow-drop" style="transform: scale(1)">

                            
                              <?//=========↓↓↓↓アバター画像↓↓↓↓=========//?>
                                <img src="<?php include '../../php/masterdomain.php'; ?>/images/AvatarIcon/<?php echo $img ?>.png">
                            </div>
                          </div>
                        </li>
                        <?php endforeach;?>

                      </ul>
                      </div>
                      <div class="slider">
                      <ul class="slider-for">
                     <?//=========↓↓↓↓配列内にあるアバターID分だけループして表示する↓↓↓↓=========//?>
                     <?php foreach($avatarList as $img):?>
                        <li>
                          <div class="flexbox flexbox_HF2">
                            <div class="space-reset shadow-drop" style="transform: scale(1)">

                            
                              <?//=========↓↓↓↓アバター画像↓↓↓↓=========//?>
                                <img src="<?php include '../../php/masterdomain.php'; ?>/images/AvatarIcon/<?php echo $img ?>.png">
                            </div>
                          </div>
                        </li>
                        <?php endforeach;?>
                        </ul>
                    </div><br>

                      <div class="index-2">開催概要</div>
                  <div style="    background-color: rgba(0, 0, 0, 0.6);">
                  <p class="index-3">
                    <span class="txtYellow">ルーキー限定</span>個人リーグ
                    <span class="red">
                      『
                      <?php echo $name_title ?>』
                    </span>が開催決定!!<br>
                    大会参加者全員に<span class="red">朝倉未来の魂×100</span>を贈呈!!
                  </p>
                    <p class="index-3">
                   大会ブロック<br>
                      <span class="red">Sリーグ</span>　2ブロック<br>
                      <span class="red">Aリーグ</span>　4ブロック<br>
                      <span class="red">Bリーグ</span>　8ブロック<br>
                      <span class="red">Cリーグ</span>　16ブロック<br>
                      <span class="red">Dリーグ</span>　32ブロック<br>
                      <span class="red"> EXリーグ</span>　エントリー数により変動
                    </p>
                   
                  <p class="index-3">
                    更にSリーグ上位３位入賞者には
                    <span class="red">過去のBREAKINGDOWNコラボ限定アバター</span>を贈呈！
                    <ol class="notes-1">
                      <li>大会報酬アバター内容</li>
                      　Sリーグ<br>
                    　　<span class="red">　　１位</span>　<span class="txtYellow">なりきりむらけん/なりきり富澤大智</span><br>
                      　　<span class="red">　　２位</span>　<span class="txtYellow">なりきり富澤大智</span><br>
                      　　<span class="red">　　３位</span>　<span class="txtYellow">なりきり富澤大智</span>
                    </ol>
                  </p>
                    

                  <p class="con-2 ta-c"><span class="red">
                      <span class="fg-Gold">最強の座
                      </span>を掴め!!
                    </span>
                  </p>
                  <br>
                    
                    </div>

                  <p class="ta-c con-3">▼ 個人リーグの詳しい情報は ▼</p>

                  <div class="btn01 mt-0 mb-20">
                    <a href="../page/page_leagueinfo.php">
                      ココをチェック！
                    </a>
                  </div>

                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>本リーグは『
                      <?php echo $name_title ?>』にエントリーをしたユーザー様のうち<span class="txtYellow">6月20日以降登録</span>のユーザー様が対象になります。</li>
                      <li>6月19日以前登録ユーザー様または、6月20日以降登録でもエントリーをされなかったユーザー様は大会から除外されます。<br>
                      <span class="txtYellow">参加希望のユーザー様は必ずエントリーをお願いいたします。</span></li>
                      <li>開催期間や内容は予告なく変更する場合がございます。</li>
                    </ol>
                  </div>


                    </div>
                    <?//=========タブ4END=========//?>
					<input type="radio" name="tabset" id="tabchecksilver5">
                    <label for="tabchecksilver5" class="tab1">第５弾</label>

                    <div class="tabsilver" id="tabsilver5">
                    <div class="index-2">開催期間</div>
                    <p class="con-2">8/11 12:00 ～ </p>
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240802_page_collab_005.png"
                        alt="BD01" width="100%" class="header_img">
                       <div class="con-2">
                          <p class="ta-c">
                            UFC参戦で世界も注目するあの【朝倉海】が襲来イベントの強敵となって登場!!<br>
                            詳細を見逃すな！
                          </p>
                        </div>
                        </div>

                    <br>
                    </div>
                    <?//=========タブ4END=========//?>


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

<script>
    $('.slickscroll').slick({
      autoplat: true, dots: true,
    });

    $('.multiple-items').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
});

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  dots: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  centerMode: true,
  focusOnSelect: true
});
	
  </script>
  </div>

</body>

</html>