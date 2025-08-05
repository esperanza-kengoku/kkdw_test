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

              <div class="outline-2">
                
                  <div id="image_padding">
                    <!--バナー表示　画像できたら入れる-->
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240613_ban_raid.png" width="100%" alt="">
                  </div>
                                    <!--     -->                
                    <div class="frame-1 mt-20 mb-20">
                      <p class="fs-16 fw-b ta-c"><span class="fg-Gold">1周年記念物語連動特別襲来イベント<br>『オロチ襲来』<br>開幕!!</span></p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2">
                        <p class="headline_2 fs-14 ta-c"><span class="yellow">襲来イベントに碓氷・二階堂・三笠の3名が登場!!</span><br><span class="red">Lv91～100で登場する三笠の体力は協力必須の過去最高値!!</span><br><span class="yellow">並みいる強敵を倒しランキング上位を目指せ!!</span></p><br>
                    </div>
                    <p class="index-3"> エントリー期間 </p>
                    <p class="con-2"> 6月13日12:00～6月15日12:00 </p>
                    <p class="index-3"> 挑戦期間</p>
                    <p class="con-2"> 6月15日12:00～6月29日23:59</p>
                    <p class="index-3"> 襲来pt交換期間</p><!--襲来pt交換期間の開始期間は挑戦期間の開始と同じにしてくだせぇ-->
                    <p class="con-2"> 6月29日12:00～6月30日23:59</p>
                    <p class="con-2"> <span class="yellow"> 6月29日00:00～6月30日23:59は<span class="red">襲来ptの交換のみが行える期間</span>となります。<br>強敵への挑戦は行えませんのでご注意ください。</p></span>

                   <div class="tabbox mt-20">
                     
                     
                     
                    <input type="radio" name="tabset" id="tabchecksilver1">
                    <label for="tabchecksilver1" class="tab1">強敵情報</label>

                    <div class="tabsilver" id="tabsilver1">
                    <?php
                   include '../../php/settime.php';
                   /*表示開始日時（強敵情報隠したい時用(スキル確定してなくて内容変わりそうな時用)）*/
                      $startTime = new DateTime('2000-01-01 12:00:00');
                     /*表示終了日時*/
                   $closeTime = new DateTime('2099-12-31 11:59:59');
                   if ($now >= $startTime && $now < $closeTime): ?>

                      <!--アイコンまとめ-->
                      <table id="Table01">
                      <tbody>
                              <tr>
                              <th style="width:50%; background: #ffeb3b;">Lv・属性</th>
                                <th style="width:50%; background: #ffeb3b;">キャラ</th>
                              </tr>
                              <tr>
                                <td valign="middle" style="vertical-align: middle; font-size: 1rem !important;">Lv.1〜15<br>【柔属性】</td>
                                <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00136.png" width="50%" alt=""></td>
                              </tr>
                              <tr>
                              <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                              【耐性】<br>
                              ・なし<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル】<br>
                              ・敵3体に柔属性100%ダメージ+アクションゲージ上昇を1秒間足止<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【残体力による強化】<br>
                              ・なし<br></td>
                              </tr>
                            </tbody>
                           <tbody>
                              <tr>
                              <th style="width:50%; background: #ffeb3b;">Lv・属性</th>
                                <th style="width:50%; background: #ffeb3b;">キャラ</th>
                              </tr>
                              <tr>
                                <td valign="middle" style="vertical-align: middle; font-size: 1rem !important;">Lv.16〜35<br>【柔属性】</td>
                                <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00136.png" width="50%" alt=""></td>
                              </tr>
                              <tr>
                              <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                              【耐性】<br>
                              ・麻痺・封技付与耐性75％<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル】<br>
                              ・敵3体に柔属性100%ダメージ+アクションゲージ上昇を1秒間足止<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【残体力による強化】<br>
                                　<span class="txtYellow">体力50％以下でスキル強化</span><br>
                                 ・敵3体に柔属性110%ダメージ+アクションゲージ上昇を2秒間足止<br><br>
                              </tr>
                            </tbody>
                            <tbody>
                              <tr >
                                <th style="width:50%; background: #322aa5;">Lv・属性</th>
                                <th style="width:50%; background: #322aa5;">キャラ</th>
                              </tr> 
                              <tr>
                                <td valign="middle" style="vertical-align: middle; font-size: 1rem !important;">Lv.36〜50<br>【悪属性】</td>
                                <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00176.png" width="50%" alt=""></td>
                              </tr>
                              <tr>
                              <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                              【耐性】<br>
                              ・麻痺・封技付与耐性100％<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル】<br>
                              ・敵2体に悪属性140%ダメージ+敵4体に15秒間1％の毒を与える<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル強化】<br>
                                　<span class="txtYellow">体力50％以下でスキル強化</span><br>
                                 ・敵3体に悪属性150%ダメージ+敵全体の呪縛付与耐性を3秒間20％ダウン+回復を3秒間呪縛<br><br>
                                 　
                                </td>
                              </tr>
                            </tbody>
                            <tbody>
                            <tr>
                            <th style="width:50%; background: #322aa5;">Lv・属性</th>
                            <th style="width:50%; background: #322aa5;">キャラ</th>
                              </tr>
                              <tr>
                                <td valign="middle" style="vertical-align: middle; font-size: 1rem !important;">Lv.51〜70<br>【悪属性】</td>
                                <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00176.png" width="50%" alt=""></td>
                              </tr>
                              <tr>
                              <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                              【耐性】<br>
                              ・麻痺・封技・鈍化付与耐性100％+毒耐性50％<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル】<br>
                              ・敵2体に悪属性140%ダメージ+敵4体に15秒間1％の毒を与える<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル強化】<br>
                                　<span class="txtYellow">体力70％以下でスキル強化</span><br>
                                 ・敵3体に悪属性150%ダメージ+敵全体の呪縛付与耐性を3秒間20％ダウン+回復を3秒間呪縛<br><br>
                                 　<span class="txtYellow">体力40％以下でスキル強化</span><br>
                                 ・敵3体に悪属性160%ダメージ+敵4体に30秒間3％のダメージを与える毒+呪縛付与耐性を3秒間25％ダウン+回復を5秒間呪縛<br><br><br>

                                </td>
                              </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th style="width:50%;">Lv・属性</th>
                                <th style="width:50%;">キャラ</th>
                              </tr>
                              <tr>
                                <td valign="middle" style="vertical-align: middle; font-size: 1rem !important;">Lv.71〜90<br>【技属性】</td>
                                <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00141.png" width="50%" alt=""></td>
                              </tr>
                              <tr>
                              <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                              【耐性】<br>
                              ・毒・麻痺・封技・足止・呪縛・鈍化付与耐性100％<br>
                              ・自身の攻撃力60秒間50％アップ+Attack付与耐性100％+自身にスキルゲージ減少耐性<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル】<br>
                              ・敵1体に技属性230%ダメージ+1秒足止+5秒呪縛を付与+敵3体のスキルゲージの増加量を10秒間25%減少<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル強化】<br>
                                　<span class="txtYellow">体力80％以下でスキル強化</span><br>
                                ・敵2体に技属性200%ダメージ+敵全体のatk付与耐性を3.5秒間25％アップ+ステータスバフをランダムで5個除去+属性バフをランダムで2個除去<br><br>
                                 　<span class="txtYellow">体力60％以下でスキル強化</span><br>
                                 ・敵2体に技属性220%ダメージ+敵全体の属性威力付与耐性を3.5秒間25％アップ+属性バフをランダムで5個除去+ステータスバフをランダムで2個除去+自身の素早さを5秒間25%アップ<br><br>
                                 　<span class="txtYellow">体力40％以下でスキル強化</span><br>
                                 ・敵3体に技属性230%ダメージ+敵全体に1秒80％の鈍化を付与+柔・悪属性110%ダメージ+ステータスバフを3個除去+属性バフを2個除去<br><br>
                                 <span class="txtYellow">体力20％以下でスキル強化</span><br>
                                 ・敵全体に5秒50％の鈍化を付与+技属性250%ダメージ+ステータスバフを11個除去+属性バフを10個除去<br><br><br>

                                </td>
                              </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th style="width:50%;">Lv・属性</th>
                                <th style="width:50%;">キャラ</th>
                              </tr>
                              <tr>
                                <td valign="middle" style="vertical-align: middle; font-size: 1rem !important;">Lv.91〜<br>【技属性】</td>
                                <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00141.png" width="50%" alt=""></td>
                              </tr>
                              <tr>
                              <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                              【耐性】<br>
                              ・毒・麻痺・封技・足止・呪縛・鈍化付与耐性100％<br>
                              ・自身の攻撃力60秒間50％アップ+Attack付与耐性100％+自身にスキルゲージ減少耐性<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル】<br>
                              ・敵1体に技属性230%ダメージ+1秒足止+5秒呪縛を付与+敵3体のスキルゲージの増加量を10秒間25%減少<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル強化】<br>
                                　<span class="txtYellow">体力80％以下でスキル強化</span><br>
                                 ・敵2体に技属性200%ダメージ+敵全体のatk付与耐性を3.5秒間25％アップ+ステータスバフをランダムで5個除去+属性バフをランダムで2個除去<br><br>
                                 　<span class="txtYellow">体力60％以下でスキル強化</span><br>
                                 ・敵2体に技属性220%ダメージ+敵全体の属性威力付与耐性を3.5秒間25％アップ+属性バフをランダムで5個除去+ステータスバフをランダムで2個除去+自身の素早さを5秒間25%アップ<br><br>
                                 　<span class="txtYellow">体力40％以下でスキル強化</span><br>
                                 ・敵3体に技属性230%ダメージ+敵全体に1秒50％の鈍化を付与+柔・悪属性110%ダメージ+ステータスバフを3個除去+属性バフを2個除去<br><br>
                                 <span class="txtYellow">体力20％以下でスキル強化</span><br>
                                 ・敵全体に5秒50％の鈍化を付与+技属性250%ダメージ+ステータスバフを11個除去+属性バフを10個除去<br><br><br>

                                </td>
                              </tr>
                            </tbody>
                            <br>
                          </table>
                          <?php else: ?>
                            <div class="frame-1 mt-20 mb-20">
                      <p class="fs-16 fw-b ta-c">強敵情報は近日公開!!</p>
                    </div>
                            <?php endif; ?>
                    </div>
                    <?//=========タブ1END=========//?>

                     
		          <input type="radio" name="tabset" id="tabchecksilver2" > 
                    <label for="tabchecksilver2" class="tab1">特攻キャラ情報</label>

                    <div class="tabsilver" id="tabsilver2">
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240520_page_raid.png" width="100%" alt="">
                        <table id="Table01" class="mt-20">
                        <tbody>
                          <tr>
                            <th colspan="5">強特攻キャラ一覧</th>
                          </tr>
                          <tr>
                            <th colspan="5"style="background: #f08080;">神代リョーマ【神鬼代皇】</th>
                          </tr>
                          <tr>
                          <td colspan="1" valign="middle" style="vertical-align: middle;">
                          <img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00173.png"alt=""></td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;">強敵戦時、レアリティに応じてステータス・スキル威力大アップ！<br>
                              <!----> <span class="fg-Gold">特殊特攻補正</span><br><span class="fg-Gold">通常スキルが特攻スキルに変更</span></p>
                            </td>
                          </tr>
                          <tr>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">体力</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">攻撃力</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">防御力</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">素早さ</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">スキル</td>
                          </tr>
                          <tr>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="fg-Gold">500%</span></td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="fg-Gold">300%</span></td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">200%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">100%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="fg-Gold">500%(※1)</span></td>
                          </tr>

                          <!---->
                            <tr>
                            <td colspan="1" valign="middle" style="vertical-align: middle;">
                          特攻<br>スキル</td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;">味方全体の悪属性威力を5秒25％アップ+敵1体に悪属性120%ダメージ+自身の体力を攻撃力75％分回復</p>
                            </td>
                          </tr>
                          

                          <tr>
                            <th colspan="5"style="background: #f08080;">荒谷賢【質実剛拳】</th>
                          </tr>
                          <tr>
                          <td colspan="1" valign="middle" style="vertical-align: middle;">
                          <img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00179.png"alt=""></td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;">強敵戦時、レアリティに応じてステータス・スキル威力大アップ！</p>
                            </td>
                          </tr>
                          <tr>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">体力</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">攻撃力</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">防御力</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">素早さ</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">スキル</td>
                          </tr>
                          <tr>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="fg-Gold">700%</span></td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="fg-Gold">500%</span></td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">200%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">100%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="fg-Gold">300%(※1)</span></td>
                          </tr>

                          <div class="tabsilver" id="tabsilver2">
                      <img src="<?php include '../../php/domain.php'; ?>/news/2024_0301_release/img/240520_page_raid.png" width="100%" alt="">
                        <table id="Table01" class="mt-20">
                        <tbody>
                          <tr>
                            <th colspan="5"style="background: #ffeb3b;">弱特攻キャラ一覧</th>
                          </tr>
                          <tr>
                            <th colspan="5"style="background: #f0e68c;">上谷昂一</th>
                          </tr>
                          <tr>
                          <td colspan="1" valign="middle" style="vertical-align: middle;">
                          <img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_90001.png"alt=""></td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;">強敵戦時、レアリティに応じてステータス・スキル威力アップ！<br></p>
                              <!----> <span class="txtYellow">特殊特攻補正</span><br><span class="txtYellow">通常スキルが特攻スキルに変更</span></p>
                            </td>
                          </tr>
                          <tr>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">体力</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">攻撃力</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">防御力</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">素早さ</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">スキル</td>
                          </tr>
                          <tr>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="txtYellow">700%</span></td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">150%</td>    
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="txtYellow">200%</span></td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="txtYellow">150%</span></td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="txtYellow">250%</span></td>
                          </tr>

                          <tr>
                            <td colspan="1" valign="middle" style="vertical-align: middle;">
                          特攻<br>スキル</td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;">敵2体に剛属性230%ダメージ×2</p>
                            </td>
                          </tr>
                         
                        
                          <tr>
                            <th colspan="5"style="background: #f0e68c;">柿原晶</th>
                          </tr>
                          <tr>
                          <td colspan="1" valign="middle" style="vertical-align: middle;">
                          <img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00152.png"alt=""></td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;">強敵戦時、レアリティに応じてステータス・スキル威力アップ！<br></p>
                               <!----> <span class="txtYellow">特殊特攻補正</span><br><span class="txtYellow">通常スキルが特攻スキルに変更</span></p>
                            </td>
                          </tr>
                          <tr>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">体力</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">攻撃力</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">防御力</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">素早さ</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">スキル</td>
                          </tr>
                          <tr>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="txtYellow">500%</span></td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">150%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">150%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">100%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="txtYellow">300%</span></td>
                          </tr>
                          
                          <tr>
                            <td colspan="1" valign="middle" style="vertical-align: middle;">
                          特攻<br>スキル</td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;">敵1体に悪属性300%ダメージ+敵2体の攻撃力・防御力・素早さ15秒間10％ダウン+味方全体の状態異常をランダムで1つ除去</p>
                            </td>
                          </tr>

                          <tr>
                            <th colspan="5"style="background: #f0e68c;">綉毬花</th>
                          </tr>
                          <tr>
                          <td colspan="1" valign="middle" style="vertical-align: middle;">
                          <img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00105_A.png"alt=""></td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;">強敵戦時、レアリティに応じてステータス・スキル威力アップ！<br></p>
                               <!----> <span class="txtYellow">特殊特攻補正</span><br><span class="txtYellow">通常スキルが特攻スキルに変更</span></p>
                            </td>
                          </tr>
                          <tr>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">体力</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">攻撃力</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">防御力</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">素早さ</td>
                          <td style="width:20%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">スキル</td>
                          </tr>
                          <tr>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="txtYellow">500%</span></td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">150%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">150%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">100%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="txtYellow">300%(※1)</span></td>
                          </tr>
                          
                          <tr>
                            <td colspan="1" valign="middle" style="vertical-align: middle;">
                          特攻<br>スキル</td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;">敵1体のステータスバフをランダムで1個除去する+敵1体に柔属性250%ダメージ+味方全体の剛・柔・悪属性威力を5秒間10％アップ+攻撃力80%分回復</p>
                            </td>
                          </tr>
                          </tbody>
                      </table>


                                
                          

                      <div class="Att3">
                  <p class="Att4">【注意事項】</p>
                  <ol class="notes-1">
                  <li><span class="fg-Gold">※1</span> 神代リョーマ【神鬼代皇】の特攻スキル倍率表記はダメージスキルの倍率となります。その他効果倍率は<span class="txtYellow">150％アップ</span>となります</li>
                  <li><span class="fg-Gold">※2</span> 荒谷賢【質実剛拳】の特攻スキル倍率表記はダメージスキルの倍率となります。攻撃力アップの効果倍率は等倍となります</li>
                  <li><span class="txtYellow">※3</span> 綉毬花の特攻スキル倍率表記はダメージスキルの倍率となります。その他効果倍率は<span class="txtYellow">150％アップ</span>となります</li>
                    <li>表示されているスキル内容及び各種倍率表記は全て最大レアリティ時のものになります</li>
                    <li>特攻による各種ptに増加量はおおよその値となります、複数の特攻倍率が重なった際にはランキング/襲来ptそれぞれ別の特攻計算が適用されます為上記倍率以上のポイント獲得が発生する場合がございます</li>
                    <li>内容は予告なく変更される場合がございます</li>
                  </ol>
                </div>
                    </div>
                    
                    <?//=========タブ2END=========//?>
                    <input type="radio" name="tabset" id="tabchecksilver4" > 
                    <label for="tabchecksilver4" class="tab1">特攻装備情報</label>
                                
                          <div class="tabsilver" id="tabsilver4">
                          <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240520_page_raid_001.png" width="100%" alt="">
                        <table id="Table01" class="mt-20">
                        <tbody>
                          <tr>
                            <th colspan="5"style="background: #4169e1;">特攻装備一覧</th>
                          </tr>
                          <tr>
                          <th colspan="5"style="background: #f08080;">【強特攻】高級懐中時計【龍焉襲来】</th>
                          </tr>
                          <tr>
                          <td colspan="1" valign="middle" style="vertical-align: middle;">
                          <img src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/eq_00076.png"alt=""></td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;">強敵戦時、ステータス大アップ！<br>撃破時、獲得できる襲来/ランキングptがアップ！</p>
                            </td>
                          </tr>
                          <tr>
                          <td style="width:25%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">体力</td>
                          <td style="width:25%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">攻撃力</td>
                          <td style="width:25%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">防御力</td>
                          <td style="width:25%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">素早さ</td>
                          </tr>
                          <tr>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">300%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">300%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">300%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">100%</td>
                          </tr>
                          <tr>
                          <td colspan="2" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">襲来pt</td>
                          <td colspan="3" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">ランキングpt</td>
                          </tr>
                          <tr>
                          <td colspan="2" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">200%</td>
                          <td colspan="3" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">200%</td>
                          </tr>

                          <tr>
                            <th colspan="5"style="background: #f0e68c;">【弱特攻】高級懐中時計【華神会】</th>
                          </tr>
                          <tr>
                          <td colspan="1" valign="middle" style="vertical-align: middle;">
                          <img src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/eq_00077.png"alt=""></td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;">強敵戦時、ステータスアップ！<br>撃破時、獲得できる襲来/ランキングptがアップ！</p>
                            </td>
                          </tr>
                          <tr>
                          <td style="width:25%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">体力</td>
                          <td style="width:25%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">攻撃力</td>
                          <td style="width:25%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">防御力</td>
                          <td style="width:25%;" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">素早さ</td>
                          </tr>
                          <tr>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">150%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">150%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">150%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">100%</td>
                          </tr>
                          <tr>
                          <td colspan="2" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">襲来pt</td>
                          <td colspan="3" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">ランキングpt</td>
                          </tr>
                          <tr>
                          <td colspan="2" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">50%</td>
                          <td colspan="3" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">50%</td>
                          </tr>
                          </tbody>
                      </table>

                      <div class="Att3">
                  <p class="Att4">【注意事項】</p>
                  <ol class="notes-1">
                    <li>表示されているスキル内容及び各種倍率表記は全て最大レアリティ時のものになります</li>
                    <li>特攻による各種ptに増加量はおおよその値となります、複数の特攻倍率が重なった際にはランキング/襲来ptそれぞれ別の特攻計算が適用されます為上記倍率以上のポイント獲得が発生する場合がございます</li>
                    <li>内容は予告なく変更される場合がございます</li>
                  </ol>
                </div>
                    </div>
                    
                    <?//=========タブ2END=========//?>


                    <input type="radio" name="tabset" id="tabchecksilver3"checked >
                    <label for="tabchecksilver3" class="tab1">イベント概要</label>

                       <div class="tabsilver" id="tabsilver3">
                       <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240520_page_raid_002.png" width="100%" alt="">
                       <div class="index-2">イベント種別</div>
                         <p class="headline_2 fs-14"><span class="red">連合</span></p><br><br>
                         <div class="index-2">最大人数</div>
                         <p class="headline_2 fs-14"><span class="red">10名</span></p><br><br>
                         <div class="index-2">ランキング</div>
                         <p class="headline_2 fs-14"><span class="red">個人総合・連合総合・連合デイリー・ダメージ<br><span class="yellow">＋個人デイリー・ルーキーデイリー</span></span></p><br>
                         <span class="txtYellow">※個人/ルーキーデイリーランキングは<br>『マイページ＞ランキング＞イベント』からご確認頂けます<br>(襲来イベント画面からはご確認頂けませんのでご注意ください)</span><br><br>
                         <div class="index-2">開催概要</div>
                         <p class="headline_2">強敵<span class="red">『オロチ』</span>が襲来‼︎<br>襲来キャラに挑戦して豪華報酬を手に入れろ！ レベルが高い強敵程獲得できるポイントが大きく増加するぞ!!<br><span class="red">仲間と共に</span>強敵を迎え撃て!!</p><br><br>
                         <div class="label_3">その他お得情報</div>
                           <p class="headline_1">
                            ・特攻装備は前衛・後衛どちらのキャラに装備しても反映される！<br><br>
                            ・★４以上で２枠装備できる為、<span class="txtYellow">最大20個</span>の特攻装備を装備可能！<br><br>
                            ・300％アップ×20個なら最大<span class="txtYellow">6000％アップ</span>！<br><br>
                            ・特攻倍率が掛かるのは<span class="txtYellow">とどめを刺したユーザーだけ</span>！救援者は通常倍率になるので注意！<br><br>
                            ・ミッションの達成条件も<span class="txtYellow">とどめを刺したユーザーだけ</span>！救援者はミッション対象にならないので注意！<br><br>
                            ・救援時、ダメージ比率が<span class="txtYellow">10％以上貢献していないとpt獲得対象にならない</span>ので注意！<br><br>                            
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