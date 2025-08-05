<!DOCTYPE html>
<html lang="ja">
<?php include '../../php/head.php'; ?>

<style>
  


.fs16 {
  font-size: 16px;
}

</style>

<body>


<div id="container">
    <div id="bridge-wrapper">
      <div id="content" class="clearfix">
        <div id="contentWrapper" class="column0">


          <div id="mainContent">
            <div id="news" class="newsDetail">

              <div class="news-text box-dent">


                <div class="outline">
                  <div id="image_padding">
                    <!--バナー表示　画像できたら入れる-->
                    <img src="<?php include '../../php/domain.php'; ?>/news/2023_1215_release/231215_ban_raid.png" width="100%" alt="">
                  </div><br>

                  <div class="index-1">『襲来』イベント!! vs緋山アケミ【X’】</div><br>

                    <p class="index-3"> エントリー期間 </p>
                    <p class="con-2"> 12月15日12:00～12月18日11:59 </p>
                    <p class="index-3"> 挑戦期間</p>
                    <p class="con-2"> 12月18日12:00～12月25日23:59</p>
                
                   <div class="tabbox mt-20">
                   <?//=========タブ始まり=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver1" checked>
                    <label for="tabchecksilver1" class="tab1">強敵情報</label>

                    <div class="tabsilver" id="tabsilver1">
                      <!--アイコンまとめ-->
                      <table id="Table01">
                           <tbody>
                              <tr>
                              <th style="width:50%; background: #ffeb3b;">Lv・属性</th>
                                <th style="width:50%; background: #ffeb3b;">キャラ</th>
                              </tr>
                              <tr>
                                <td valign="middle" style="vertical-align: middle; font-size: 1rem !important;">Lv.20〜49<br>【技属性】</td>
                                <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00168.png" width="50%" alt=""></td>
                              </tr>
                              <tr>
                              <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                              【耐性】<br>
                              ・封技付与耐性100％+麻痺・鈍化耐性50％<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル】<br>
                              ・敵3体に技属性115%ダメージ+敵1体のスキルゲージを15%減少<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【残体力による強化】<br>
                              ・なし<br></td>
                              </tr>
                            </tbody>
                            <tbody>
                              <tr >
                                <th style="width:50%; background: #322aa5;">Lv・属性</th>
                                <th style="width:50%; background: #322aa5;">キャラ</th>
                              </tr> 
                              <tr>
                                <td valign="middle" style="vertical-align: middle; font-size: 1rem !important;">Lv.50〜69<br>【技属性】</td>
                                <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00168.png" width="50%" alt=""></td>
                              </tr>
                              <tr>
                              <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                              【耐性】<br>
                              ・封技付与耐性100％+麻痺耐性80％+毒・鈍化耐性50％<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル】<br>
                              ・敵3体に技属性115%ダメージ+敵1体のスキルゲージを15%減少<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【残体力による強化】<br>
                                　<span class="txtYellow">体力60％以下でスキル強化</span><br>
                                 ・敵3体に技属性120%ダメージ+敵1体のスキルゲージを20%減少<br><br>
                                 　<span class="txtYellow">体力20％以下でスキル強化</span><br>
                                 ・敵3体に技属性130%ダメージ+敵1体のスキルゲージを20%減少+敵2体に5秒15％鈍化<br><br>
                                </td>
                              </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th style="width:50%;">Lv・属性</th>
                                <th style="width:50%;">キャラ</th>
                              </tr>
                              <tr>
                                <td valign="middle" style="vertical-align: middle; font-size: 1rem !important;">Lv.70〜<br>【技属性】</td>
                                <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00168.png" width="50%" alt=""></td>
                              </tr>
                              <tr>
                              <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                              【耐性】<br>
                              ・鈍化・封技・毒無効+麻痺・Attack付与耐性80％<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル】<br>
                              ・敵3体に技属性115%ダメージ+敵1体のスキルゲージを15%減少<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【残体力による強化】<br>
                                　<span class="txtYellow">体力80％以下でスキル強化</span><br>
                                 ・敵3体に技属性120%ダメージ+敵1体のスキルゲージを20%減少<br><br>
                                 　<span class="txtYellow">体力60％以下でスキル強化</span><br>
                                 ・敵3体に技属性130%ダメージ+敵1体のスキルゲージを20%減少+敵2体に5秒15％鈍化<br><br>
                                 　<span class="txtYellow">体力40％以下でスキル強化</span><br>
                                 ・敵3体に技属性140%ダメージ+敵2体のスキルゲージを20%減少+敵2体に5秒15％鈍化<br><br>
                                 　<span class="txtYellow">体力20％以下でスキル強化</span><br>
                                 ・敵3体に技属性150%ダメージ+敵2体のスキルゲージを30%減少+敵3体に5秒25％鈍化<br><br>
                                </td>
                              </tr>
                            </tbody>
                            <br>
                          </table>
                    </div>
                    <?//=========タブ1END=========//?>
                   
 					          <input type="radio" name="tabset" id="tabchecksilver2" > 
                    <label for="tabchecksilver2" class="tab1">特攻情報</label>

                    <div class="tabsilver" id="tabsilver2">
                      <img src="<?php include '../../php/domain.php'; ?>/news/2023_1215_release/231215_page_raid.png" width="100%" alt="">
                        <table id="Table01" class="mt-20">
                        <tbody>
                          <tr>
                            <th style="width:20%;">イベント項目</th>
                            <th style="width:20%;">アイコン</th>
                            <th style="width:60%;">内容</th>
                          </tr>
                          <tr>
                            <td valign="middle" style="vertical-align: middle;">強特攻<br>キャラ</td>
                            <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00168.png" width="100%" alt=""></td>
                            <td valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;"><span class="txtRed">『緋山アケミ【X’】』</span><br>強敵戦時、ステータス・スキル威力大アップ！</p>
                            </td>
                          </tr>
                          <tr>
                            <td valign="middle" style="vertical-align: middle;">弱特攻<br>キャラ</td>
                            <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00148.png" width="100%" alt=""></td>
                            <td valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;"><span class="txtYellow">『郡上誠二』</span><br>強敵戦時、ステータス・スキル威力アップ！</p>
                            </td>
                          </tr>
                          <tr>
                            <td valign="middle" style="vertical-align: middle;">弱特攻<br>キャラ</td>
                            <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00117.png" width="100%" alt=""></td>
                            <td valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;"><span class="txtYellow">『成瀬ツバキ』</span><br>強敵戦時、ステータス・スキル威力アップ！</p>
                            </td>
                          </tr>
                          <tr>
                            <td valign="middle" style="vertical-align: middle;">強特攻<br>装備</td>
                            <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/eq_00049.png" width="100%" alt=""></td>
                            <td valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;"><span class="txtRed">高級懐中時計【add9】</span><br>強敵戦時、ステータス大アップ！<br>撃破時、獲得できる襲来/ランキングptがアップ！<br>（ランキングpt+200%/襲来pt+3倍）</p>
                            </td>
                          </tr>
                          <tr>
                            <td valign="middle" style="vertical-align: middle;">弱特攻<br>装備</td>
                            <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/eq_00050.png" width="100%" alt=""></td>
                            <td valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;"><span class="txtRed">高級懐中時計【Xmas Live】</span><br>強敵戦時、ステータスアップ！<br>撃破時、獲得できる襲来/ランキングptがアップ！<br>（ランキングpt+50%/襲来pt+2倍）</p>
                            </td>
                          </tr>
                          <tr>
                          <td valign="middle" style="vertical-align: middle;">弱特攻<br>キャラ<br><span class="txtYellow">物語特別特攻</span></td>
                            <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00129.png" width="100%" alt=""></td>
                            <td valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;"><span class="txtYellow">『麻生海璃』</span><br>強敵撃破時、レアリティに応じて獲得できる襲来/ランキングptが大アップ！<br>（★5：ランキングpt+300%/襲来pt+5倍）</p>
                            </td>
                          </tr>
                          </tbody>
                      </table>
                    </div>
                    <?//=========タブ2END=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver3" >
                    <label for="tabchecksilver3" class="tab1">イベント概要</label>
					
                       <div class="tabsilver" id="tabsilver3">
                       <div class="index-2">イベント種別</div>
                         <p class="headline_2 fs-14"><span class="red">個人</span></p><br><br>
                         <div class="index-2">救援対象</div>
                         <p class="headline_2 fs-14"><span class="red">ダチの中からランダムで20名</span></p><br><br>
                         <div class="index-2">ランキング</div>
                         <p class="headline_2 fs-14"><span class="red">個人総合・デイリー・ダメージ</span></p><br><br>
                         <div class="index-2">開催概要</div>
                         <p class="headline_2">強敵<span class="red">『緋山アケミ【X’】』</span>が襲来‼︎<br>クリスマス限定のキャラに挑戦して豪華報酬を手に入れろ！ レベルが高い強敵程獲得できるポイントが大きく増加するぞ!!<br><span class="red">ダチと共に</span>強敵を迎え撃て!!</p><br><br>
                         <div class="label_3">その他お得情報</div>
                           <p class="headline_1">
                            ・特攻装備は前衛・後衛どちらのキャラに装備しても反映される！<br><br>
                            ・★４以上で２枠装備できる為、<span class="txtYellow">最大20個</span>の特攻装備を装備可能！<br><br>
                            ・300％アップ×20個なら最大<span class="txtYellow">6000％アップ</span>！<br><br>
                            ・特攻倍率が掛かるのは<span class="txtYellow">とどめを刺したユーザーだけ</span>！救援者は通常倍率になるので注意！<br><br>
                            ・ミッションの達成条件も<span class="txtYellow">とどめを刺したユーザーだけ</span>！救援者はミッション対象にならないので注意！<br><br>
                            ・今回は緋山アケミの限定物語イベントも同時開催！ 交換所の<span class="txtYellow">特訓の記憶</span>を集めれば限定物語が開放されるぜ！<br><br>
                            ・物語読破ミッションで<span class="txtYellow">特攻装備【add9】</span>など超激アツ報酬が獲得できる！<br><br>
                           </p>
                           <p class="ta-c mt-15">▼ 襲来イベントの詳細はコチラ‼︎ ▼</p>
                           <a href="../page/page_raidinfo.php"><img src="<?php include '../../php/domain.php'; ?>/news/2023_0815_release/ban/230815_ban_raidinfo.png" width="100%" alt=""></a>
                           <p class="ta-c mt-15">▼ 状態異常の詳細はコチラ‼︎ ▼</p>
                           <a href="../page/status%20effect.php"><img src="<?php include '../../php/domain.php'; ?>/news/2023_0601_release/ban/230601_ban_NewCharacter_003.png" width="100%" alt=""></a>                
                           <p class="ta-c mt-15">▼ 編成例やオススメキャラはコチラ‼︎ ▼</p>
                           <a href="../page/page_operationinfo.php"><img src="<?php include '../../php/domain.php'; ?>/news/2023_0915_release/ban/230911_ban_addition_003.png" width="100%" alt=""></a>
                           <p class="ta-c mt-15">▼ キャラ装備一覧はコチラ‼︎ ▼</p>
                           <a href="../page/page_eqinfo.php"><img src="<?php include '../../php/domain.php'; ?>/news/2023_1215_release/ban/231215_ban_eqinfo.png" width="100%" alt=""></a>                
                      </div>
                       <?//=========タブ3END=========//?>

                </div><!-- .tabbox -->
              </div><!-- .outline -->
            </div><!-- .news-text -->

          </div><!-- .news -->
        </div><!-- .mainContent -->

     </div><!-- .contentWrapper -->
    </div><!-- .content -->
  </div><!-- .bridge-wrapper -->
</div><!-- .container -->




</body>

</html>