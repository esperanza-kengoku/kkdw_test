<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>

<style>
  


.fs16 {
  font-size: 16px;
}

</style>

<body>

<?//タブに時限をつける場合は下記のコードを使用//?>
<?php include '../../php/settime.php';
      /*表示開始日時*/
      $startTime = new DateTime('2024-05-01 12:00:00');

           if ($now >= $startTime){
       
                $trigger = 1;
       
               };

      $startTime = new DateTime('2024-04-28 12:00:00');

      if ($now >= $startTime){
       
        $trigger2 = 1;

       };




;?>

                   <?//1=0501//?>
                   <?php if ($trigger == 1): ?>

                    <?php endif; ?>

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
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_ban_GWCP.png"
                        alt="CPバナー" width="100%" class="header_img">
                       
                    </div>
                  </div>

                 
                  <div class="tabbox mt-20">
                    <?//=========タブ始まり=========//?>

                    <?//1=0501//?>
                   <?php if ($trigger == 1): ?>
                    <input type="radio" name="tabset" id="tabchecksilver1" checked>
                    <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                    <label for="tabchecksilver1" class="tab1">第１弾</label>

                    <div class="tabsilver" id="tabsilver1">

                      
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_header_GWCP_1.png"
                        alt="BD01" width="100%" class="header_img">
                        
                        <div class="index-2">実装日</div>
                        <p class="con-2">5/1 12:00 ～</p>

                        <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_page_NewCharacter_001.png"
                        alt="BD01" width="100%" class="header_img">


                        <div class="index-2">キャンペーン概要</div>
                       <div class="con-2">
                            新キャラ『<span class="fg-Gold">竹内力</span>』が登場！<br><br>
                            技属性有利な現環境に物申す!!<br>剛属性最強クラスのキャラとしてあの竹内力が登場!!<br>
                        </div>

                        <a href="../Character/page_240501_takeutiriki.php">  
                        <p class="con-2 ta-c">▼キャラ詳細はコチラ！▼</p> 
                        <img
                      src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_ban_NewCharacter.png"
                      alt="竹内力登場" width="100%" class="header_img">
                    </a>

                    <a href="../page/page_240501_takeutiriki_gacha.php"> 
                    <p class="con-2 ta-c">▼ガチャの詳細はコチラ！▼</p> 
                        <img
                      src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_ban_NewCharacter_001.png"
                      alt="竹内力ガチャ" width="100%" class="header_img">
                    </a>

                    <br>
                    </div>
                    <?//=========タブ1END=========//?>
                    <?php endif; ?>
                    
                     <input type="radio" name="tabset" id="tabchecksilver2" checked>
                    <label for="tabchecksilver2" class="tab1">第2弾</label>

                    <div class="tabsilver" id="tabsilver2">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_header_GWCP_2.png"
                        alt="BD01" width="100%" class="header_img">
                        
                        <div class="index-2">開催期間</div>
                        <div class="label_3">前半</div>
                        <p class="con-2">4/27 3:00 ～ 5/3 3:00</p>
                        <div class="label_3">後半</div>
                        <p class="con-2">5/3 3:00 ～ 5/10 3:00</p>
                    <div class="index-2">キャンペーン概要</div>
                    <p class="con-2"><span class="txtYellow">毎日1000極石が手に入るゴールデンウィーク限定ログインボーナス開催！</span></p>
                      <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                      <li>ログインボーナスの内容は前半・後半共に同じ内容となります</li>
                      <li>ログインボーナスは毎日３時更新となります。</li>
                    </ol>
                  </div>
 
                    </div>
                    <?//=========タブ2END=========//?>
                     
                    <?//1=0501//?>
                   <?php if ($trigger == 1): ?>
                    <input type="radio" name="tabset" id="tabchecksilver3">
                    <label for="tabchecksilver3" class="tab1">第3弾</label>

                    <div class="tabsilver" id="tabsilver3">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_header_GWCP_3.png"
                        alt="BD01" width="100%" class="header_img">
                        <div class="index-2">開催期間</div>
                    <p class="con-2">5/1 12:00 ～ 5/10 23:59</p>
                    <div class="index-2">キャンペーン概要</div>
                    <p class="con-2">
                      期間限定の特別ミッションを多数開催！<br> ミッションを進めていく事で<br>GWコインを手に入れる事ができる！<br>GW交換所で各種強化コインなどの豪華報酬と交換しろ！<br>
                      ゴールデンウィークも拳極を遊び尽くせ！</p>

                      <div class="btn01 mt-20 mb-20">
                        <a href="kengokuapp://050_Mission">ミッションはコチラ！</a>
                      </div>

                    </div>
                    <?//=========タブ3END=========//?>
                    <?php endif; ?>

                    <?//1=0428//?>
                   <?php if ($trigger2 == 1): ?>
                    <input type="radio" name="tabset" id="tabchecksilver4">
                    <label for="tabchecksilver4" class="tab1">第4弾</label>

                    <div class="tabsilver" id="tabsilver4">                 

                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_header_GWCP_4.png"
                        alt="BD01" width="100%" class="header_img">
                    
                    <div class="index-2">キャンペーン概要</div>
                    <p class="con-2">
                      GW特別リーグ開催!!<br>
                      なんとドンミャンのなりきりアバターが入手できる!!<br>
                      連合アバターはAリーグまで報酬拡大!! GW限定のネタアバターが入手可能!! 新環境最初のリーグで頂点を目指せ!!<br>
                        </p>
                    <br>

                    <a href="../page/page_240501_leagueP.php"> 
                    <p class="con-2 ta-c"><span class="fg-Gold">▼詳細はコチラ！▼</span> </p> 
                        <img
                      src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/league_banner_0029.png"
                      alt="個人リーグ" width="100%" class="header_img">
                    </a>

                    <a href="../page/page_240501_leagueT.php"> 
                    <p class="con-2 ta-c"><span class="txtYellow">▼詳細はコチラ！▼</span> </p> 
                        <img
                      src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/league_banner_0030.png"
                      alt="連合リーグ" width="100%" class="header_img">
                    </a>

                    </div> 
                    
                    <?//=========タブ4END=========//?>
                    <?php endif; ?>

                    <?//1=0501//?>
                   <?php if ($trigger == 1): ?>
                    <input type="radio" name="tabset" id="tabchecksilver5" >
                    <label for="tabchecksilver5" class="tab1">第5弾</label>

                    <div class="tabsilver" id="tabsilver5">

                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_header_GWCP_5.png"
                        alt="BD01" width="100%" class="header_img">
                  
                    
                    
                    <div class="index-2">開催期間</div>
                    <p class="con-2">5/1 12:00 ～ 5/7 23:59</p> 

                    <div class="index-2">キャンペーン概要</div>
                    <p class="con-2">
                      GW限定の <span class="fg-Gold">激アツガチャ</span> が登場!!<br>
                      何と<span class="txtYellow">毎日10回半額!!</span>さらに★３確率も通常の２倍!!<br>
                      激アツガチャを見逃すな!!<br>
                        </p>
                        <img
                      src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_seting_GWCP.png"
                      alt="GWガチャ" width="100%" class="header_img">

                      <div class="btn01 mt-20 mb-20">
                        <a href="kengokuapp://020_Gacha">ガチャはコチラ！</a>
                      </div>


                    </div>
                     <?//=========タブ8END=========//?>
                    <?php endif; ?>

                     <?//1=0501//?>
                   <?php if ($trigger == 1): ?>
                      <input type="radio" name="tabset" id="tabchecksilver6" >
                    <label for="tabchecksilver6" class="tab1">第6弾</label>

                    <div class="tabsilver" id="tabsilver6">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_header_GWCP_6.png"
                        alt="BD01" width="100%" class="header_img">

                    <div class="index-2">実装期間</div>
                    <p class="con-2">5/1 12:00 ～ </p>

                    <div class="index-2">キャンペーン概要</div>
                       <p class="con-2">
                           お待たせいたしました!! 新機能<span class="fg-Gold">絆技</span>実装！<br>
                           指定されたキャラを集めて編成すると特殊スキルを発動することができる！<br><br>
                           まずは絆技の対象キャラ【荒谷&郡上】・【スカル&ニコーレ&マーロン】を入手して絆技を発動させろ!!<br>
                           新環境必須の超激強スキルが発動するぜ!!<br>
                          </p>
                    <br>
                    <a href="../page/page_240501_updateinfo.php"> 
                    <p class="con-2 ta-c"><span class="fg-Gold">▼絆技の詳細はコチラ！▼</span> </p> 
                        <img
                      src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/ban_chaininfo.png"
                      alt="制圧イベント" width="100%" class="header_img">
                    </a>
                    </div>
                     <?//=========タブ8END=========//?>
                    <?php endif; ?>

                   <?//1=0501//?>
                   <?php if ($trigger == 1): ?>
                   <input type="radio" name="tabset" id="tabchecksilver7" >
                    <label for="tabchecksilver7" class="tab1">第7弾</label>

                    <div class="tabsilver" id="tabsilver7">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_header_GWCP_7.png"
                        alt="BD01" width="100%" class="header_img">

                    <div class="index-2">開催期間</div>
                    <p class="con-2">5/1 12:00 ～ 5/7 12:00</p>

                    <div class="index-2">キャンペーン概要</div>
                       <p class="con-2">
                           制圧イベントも大幅アップデート!! 絆技と連携して荒谷・郡上に特化したイベント<span class="fg-Gold">熱血アニキの鬼試練</span>開催！<br>
                           イベント制圧をクリアして荒谷・郡上を確実に入手&強化できるチャンス！<br>
                          </p>
                    <br>
                    <a href="../page/page_240501_aniki.php"> 
                    <p class="con-2 ta-c"><span class="fg-Gold">▼詳細はコチラ！▼</span> </p> 
                        <img
                      src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_ban_event_001.png"
                      alt="制圧イベント" width="100%" class="header_img">
                    </a>
                    <div class="Att3">
                    <p class="Att4">【制圧イベントアップデート内容】</p>
                    <ol class="notes-1">
                      <li>「イベント」に分類されました為、<span class="txtYellow">イベントボタンより挑戦して頂くことが可能</span>になりました。襲来とは異なりますのでご了承ください。</li>
                      <li>イベントとなりました為、闘志が実装されました。挑戦には闘気が必要となります（極石で回復できる点は襲来イベントと同様です）。</li>
                      <li>ランキング機能が実装され、イベントページから確認ができるようになりました。今回個人総合、デイリー、ルーキーが実装されております</li>
                      <li>交換所についてもイベント交換所が実装されました</li>
                      <li>特攻もイベントと同様になりました為、<span class="txtYellow">特攻のアイコンが付く</span>ようになりました</li>
                      <li>襲来イベントのエントリーが開始したタイミングで、どちらのイベントの特攻のアイコンが付く形となりますが、特攻キャラはページでご案内しているキャラとなりますのでご注意ください。</li>
                      
                    </ol>
                  </div>


                    </div>
                     <?//=========タブ8END=========//?>
                    <?php endif; ?>

                   <?//1=0501//?>
                   <?php if ($trigger == 1): ?>
                   <input type="radio" name="tabset" id="tabchecksilver8" >
                    <label for="tabchecksilver8" class="tab1">第8弾</label>

                    <div class="tabsilver" id="tabsilver8">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_header_GWCP_8.png"
                        alt="BD01" width="100%" class="header_img">
                        

                    <div class="index-2">開催期間</div>
                    <p class="con-2">5/1 12:00 ～ 5/7 12:00 </p>
                    <div class="index-2">キャンペーン概要</div>
                    <p class="con-2">
                      <span class="fg-Gold">GWコインで各種素材と交換可能</span>!!<br>
                      さらに無料で毎日極石が入手できるGW特別仕様!! 毎日ログインして必ず極石を受け取れ!!<br><br>
                      GWコインを集めて豪華報酬を手に入れろ!!<br>
                        </p>

                    <div class="btn01 mt-20 mb-20">
                        <a href="kengokuapp://020_Gacha">交換所はコチラ！</a>
                      </div>

                    </div>
                     <?//=========タブ8END=========//?>
                     <?php endif; ?>

                   <?//1=0501//?>
                   <?php if ($trigger == 1): ?>
                    <input type="radio" name="tabset" id="tabchecksilver9" >
                    <label for="tabchecksilver9" class="tab1">第9弾</label>

                    <div class="tabsilver" id="tabsilver9">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_header_GWCP_9.png"
                        alt="BD01" width="100%" class="header_img">

                    <div class="index-2">物語開放時期</div>
                    <p class="con-2">4/30 18:00 ～ </p>
                    <div class="index-2">キャンペーン概要</div>
                    <p class="con-2">
                      <span class="fg-Gold">物語３章『ソロリティ篇』終篇</span> が開放!!<br>
                      ついに暗殺者、綉毬花の過去が語られる––!! ３章堂々完結!!<br><br>
                      制圧を進めて物語を開放しよう!!<br>
                        </p>

                    <br>
                    <a href="../page/page_240501_story.php"> 
                    <p class="con-2 ta-c">▼物語の詳細はコチラ！▼</p> 
                        <img
                      src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240301_ban_story_001.png"
                      alt="制圧イベント" width="100%" class="header_img">
                    </a>

                    </div>
                     <?//=========タブ8END=========//?>
                    <?php endif; ?>

                    <input type="radio" name="tabset" id="tabchecksilver10" >
                    <label for="tabchecksilver10" class="tab1">第10弾</label>

                    <div class="tabsilver" id="tabsilver10">
                    <img
                        src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240501_header_GWCP_10.png"
                        alt="BD01" width="100%" class="header_img">
                        

                    <div class="index-2">実装時期</div>
                    <p class="con-2">5/10 メンテナンス後 ～ </p>
                    <div class="index-2">キャンペーン概要</div>
                    <p class="con-2">
                      <span class="fg-Gold">詳細を待て!!<br>
                        </p>
                    </div>
                     <?//=========タブ8END=========//?>


                  </div>
                  <?//=========tabbox タブ終わり=========//?>


                  <div class="Att3">
                    <p class="Att4">【注意事項】</p>
                    <ol class="notes-1">
                    <li>キャンペーンは全10弾となります。順次公開となりますので、ご了承ください。</li>
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

</body>

</html>