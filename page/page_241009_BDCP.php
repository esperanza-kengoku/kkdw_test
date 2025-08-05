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
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/ban_241009_BDCP.png"
                        alt="BDCPバナー" width="100%" class="header_img">
                    </div>
                  </div>


                  <div class="tabbox mt-20">
                    <?//=========タブ始まり=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver1"checked>
                    <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                    <label for="tabchecksilver1" class="tab1">PPV</label>

                   <div class="tabsilver" id="tabsilver1">

                   <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/page_241009_BDCP.png"
                        alt="BD01" width="100%" class="header_img">
                    <p class="ta-c fs-12">
                      映画BLUEFIGHT<br>〜蒼き若者たちのブレイキングダウン〜<br>メインスポンサーに拳極が就任!!<br>
                      抽選で<span class="txtYellow">2,000名</span>に<span class="txtYellow">映画のPPVデジタルチケット</span>をプレゼント!! 応募方法の詳細を見逃すな!!<br>
                      <br>
                      </p>
                      
                     <p class="ta-c fs-10 mt-10"> 【応募方法】 </p>

                       <table id="Table01" class="mt-20">
                      <tbody>
                        <tr>
                          <th style="width:50%;">応募方法</th>
                          <th style="width:50%;">獲得方法</th>
                        </tr>

                        <!-- レイド詳細がここに入る -->
                        <tr>
                          <td valign="middle" style="vertical-align: middle;" class="fs-10">抗争に10回参加する</td>
                          <td valign="middle" style="vertical-align: middle;" class="fs-10">抗争参加10回参加ミッションで応募券を入手</td>
                        </tr>
                      </tbody>
                    </table>
                      
                    <p class="ta-c fs-10"><span class="txtRed">特にエントリーなどは必要ありません</span>応募券を入手していただくことで抽選対象となります。</p><br>
                      
                   <div class="Att3 mt-20">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">        
                     <li>PPVの公開日は<span class="txtYellow">11月13日~11月23日</span>・<span class="txtYellow">12月8日</span>の予定となっております</li>
                     <li>賞品の配布は、公開日に合わせ、<span class="fg-Gold">2024年11月13日まで</span>に行う予定です。※公開日や応募数によって多少前後する可能性がございます</li>
                     <li>応募の抽選券はゲームアプリ『拳極』内のミッションをクリアする事で獲得できます</li>
                      <li>応募の抽選券のミッションにつきましては、10/10の18時からになります</li>
                     <li>本キャンペーンは、予告なく終了・変更となる場合があります</li>
                     <li>当選連絡時にお伝えする期限までに当社所定の手続を実施いただけない場合は、当選を取り消すことがあります</li>
                     <li>当選については賞品の配布を以て完了とさせて頂きます</li>

                     <li><span class="txtRed">必ず抽選日程についてご確認ください</span></li>
                    </ol>
                  </div>            
                      
                  <div class="btn01 mt-20 mb-20">
                     <a href="kengokuapp://050_Mission">ミッションはコチラ！</a>
                  </div>   




                    </div>
                    <?//=========タブ2END=========//?>
                    
                    <input type="radio" name="tabset" id="tabchecksilver2">
                    <label for="tabchecksilver2" class="tab1">試写会</label>
                    <div class="tabsilver" id="tabsilver2">

                    
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/page_241024_BDCP.png"
                        alt="BD01" width="100%" class="header_img">
                    <p class="ta-c fs-12">
                      映画BLUEFIGHT<br>〜蒼き若者たちのブレイキングダウン〜<br>抽選プレゼント企画第２弾!!<br>
                      抽選で<span class="txtYellow">５名</span>に<span class="txtYellow">映画の試写会</span>にご招待!! 応募方法の詳細を見逃すな!!<br>
                      <br>
                      </p>
                      
                     <p class="ta-c fs-10 mt-10"> 【応募方法】 </p>

                       <table id="Table01" class="mt-20">
                      <tbody>
                        <tr>
                          <th style="width:50%;">応募方法</th>
                          <th style="width:50%;">獲得方法</th>
                        </tr>

                        <!-- レイド詳細がここに入る -->
                        <tr>
                          <td valign="middle" style="vertical-align: middle;" class=" fs-10">抗争に10回参加する</td>
                          <td valign="middle" style="vertical-align: middle;" class="fs-10">抗争参加10回参加ミッションで応募券を入手</td>
                        </tr>
                      </tbody>
                    </table>
                      
                    <p class="ta-c fs-10"><span class="txtRed">特にエントリーなどは必要ありません</span>応募券を入手していただくことで抽選対象となります。</p><br>
                      
                   <div class="Att3 mt-20">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">        
                     <li>試写会の公開日は<span class="txtYellow">11月17日</span>の予定となっております</li>
                     <li>上映場所は<span class="txtYellow">都内某所</span>を予定しております。※遠方の方におかれましては大変恐縮ですがご了承ください</li>
                     <li>応募の抽選券はゲームアプリ『拳極』内のミッションをクリアする事で獲得できます</li>
                      <li>応募の抽選券のミッションにつきましては、10/24の13時からになります</li>
                     <li>本キャンペーンは、予告なく終了・変更となる場合があります</li>
                     <li>当選連絡時にお伝えする期限までに当社所定の手続を実施いただけない場合は、当選を取り消すことがあります</li>
                     <li>当選については賞品の配布を以て完了とさせて頂きます</li>

                     <li><span class="txtRed">必ず抽選日程についてご確認ください</span></li>
                    </ol>
                  </div>            
                      
                  <div class="btn01 mt-20 mb-20">
                     <a href="kengokuapp://050_Mission">ミッションはコチラ！</a>
                  </div>   
                      
                    </div>
                    <?//=========タブ2END=========//?>
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