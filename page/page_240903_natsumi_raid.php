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
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240903_ban_raid.png" width="100%" alt="">
                  </div>
                                    <!--     -->                
                    <div class="frame-1 mt-20 mb-20">
                      <p class="fs-14 fw-b ta-c"><span class="fg-Gold">襲来イベント<br>『夏見真衣襲来』<br>開幕!!</span></p>

                    <p class="index-3"> エントリー期間 </p>
                    <p class="con-2"> 9月3日12:00～9月6日12:00</p>
                    <p class="index-3"> 挑戦期間</p>
                    <p class="con-2"> 9月6日12:00～9月13日23:59</p>
                    <p class="index-3"> 襲来pt交換期間</p><!--襲来pt交換期間の開始期間は挑戦期間の開始と同じにしてくだせぇ-->
                    <p class="con-2"> 9月6日12:00～9月14日23:59</p>
                    <p class="con-2"> <span class="yellow"> 9月14日00:00～9月14日23:59は<span class="red">襲来ptの交換のみが行える期間</span>となります。<br>強敵への挑戦は行えませんのでご注意ください。</p></span>
                    </div>
                   <div class="tabbox mt-20">
                   <input type="radio" name="tabset" id="tabchecksilver1" checked>
                    <label for="tabchecksilver1" class="tab1">強敵情報</label>

                    <div class="tabsilver" id="tabsilver1">
                      
                    <div class="frame-1 mt-20 mb-20">
                      <p class="fs-16 fw-b ta-c">お知らせ</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2">
                        <p class="headline_2 fs-12 ta-c">100レベル撃破者全員に<br><span class="fg-Gold">【限突の勾玉】</span>プレゼント!!</p>
                        <p class="headline_2 fs-12 ta-c">ダメージランキングの同率の場合の順番を<br><span class="fg-Gold">先着順</span>に変更!!</p>
                      <p class="hr_grd2"></p>
                      <p class="headline_2 fs-12 ta-c">夏見といえば【回避・即死・封技】!!<br>存分に回避・即死・封技の威力を味わえる極悪仕様!!<br>対策なしで挑むと即死する上に全くダメージを与えられないぞ!!</p>
                    </div>
                      
                 <div class="Att3">
                  <p class="Att4">【注意事項】</p>
                  <ol class="notes-1">
                    <li clsss="textRed">ダメージランキング１位報酬として限突の勾玉をご用意しております</li>
                    <li>100レベルを救援や再挑戦を使わずに撃破した場合を「撃破」としております。100レベルの強敵の体力は１億となりますので、１億ダメージで撃破となります</li>
                    <li>再挑戦で撃破した場合はダメージが分割されます為、対象外となりますのでご注意ください</li>
                    <li>スキル情報については可読性重視の為、最高レベルのみ表示に変更しました。ご了承ください</li>
                  </ol>
                </div>
                      
                      
                      
                    <div class="index-2"></div>
                      <!--アイコンまとめ-->
                      <table id="Table01">
                      <tbody>
                              <tr>
                              <th style="width:50%; background: #adff2f;">Lv・属性</th>
                                <th style="width:50%; background: #adff2f;">キャラ</th>
                              </tr>
<!--                              <tr>
                                <td valign="middle" style="vertical-align: middle; font-size: 1rem !important;">Lv.1〜30<br>【悪属性】</td>
                                <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00157_A.png" width="50%" alt=""></td>
                              </tr>
                              <tr>
                              <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                              【耐性】<br>
                              ・なし<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル】<br>
                              ・自身に90％の回避を3回付与+敵3体に悪属性105%ダメージ+敵1体に1％の確率で即死<br></td>
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
                                <td valign="middle" style="vertical-align: middle; font-size: 1rem !important;">Lv.31〜50<br>【悪属性】</td>
                                <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00157_A.png" width="50%" alt=""></td>
                              </tr>
                              <tr>
                              <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                              【耐性】<br>
                              ・封技・麻痺・即死無効+毒付与耐性50％+自身の必要スキルゲージを400％上昇<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル】<br>
                              ・自身に90％の回避を5回付与+敵3体に悪属性110%ダメージ+敵1体に5％の確率で即死<br></td>
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
                                <td valign="middle" style="vertical-align: middle; font-size: 1rem !important;">Lv.51〜70<br>【悪属性】</td>
                                <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00157_A.png" width="50%" alt=""></td>
                              </tr>
                              <tr>
                              <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                              【耐性】<br>
                              ・鈍化・封技・麻痺・即死無効+毒耐性95％+自身の必要スキルゲージを400％上昇<br>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル】<br>
                              ・自身に90％の回避を10回付与+敵3体に悪属性120%ダメージ+敵1体に10％の確率で即死<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル強化】<br>
                                　<span class="txtYellow">体力60％以下でスキル強化</span><br>
                                 ・自身に100％の回避を15回付与+敵3体に悪属性130%ダメージ+敵1体のスキルを5秒間封印+敵1体に20％の確率で即死<br><br>
                                　<span class="txtYellow">体力20％以下でスキル強化</span><br>
                                 ・自身に100％の回避を20回付与+敵全体に悪属性110%ダメージ+敵1体のスキルを5秒間封印+敵1体に30％の確率で即死<br><br>
                                </td>
                              </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th style="width:50%;">Lv・属性</th>
                                <th style="width:50%;">キャラ</th>
                              </tr>
-->
                              <tr>
                                <td valign="middle" style="vertical-align: middle; font-size: 1rem !important;">Lv.71〜100<br>【悪属性】</td>
                                <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00157_A.png" width="50%" alt=""></td>
                              </tr>
                              <tr>
                              <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                              【耐性】<br>
                              ・毒・封技・足止・麻痺・鈍化+呪縛無効<br>
                              ・即死無効・攻撃力変動無効(自身)・素早さ変動無効(両者)・スキルゲージ減少無効+自身の必要スキルゲージを400％上昇<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル】<br>
                              ・自身に90％の回避を10回付与+敵3体に悪属性120%ダメージ+敵1体に10％の確率で即死<br></td>
                              </tr>
                              <tr>
                                <td colspan="5" valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">
                                【スキル強化】<br>
                                　<span class="txtYellow">体力80％以下でスキル強化</span><br>
                                 ・自身に100％の回避を15回付与+敵3体に悪属性130%ダメージ+敵1体のスキルを2.5秒間封印+敵1体に20％の確率で即死<br><br>
                                 　<span class="txtYellow">体力60％以下でスキル強化</span><br>
                                 ・自身に100％の回避を20回付与+敵全体に悪属性110%ダメージ+敵1体のスキルを2.5秒間封印+敵1体に30％の確率で即死<br><br>
                                 　<span class="txtYellow">体力40％以下でスキル強化</span><br>
                                 ・自身に100％の回避を25回付与+敵全体に悪属性120%ダメージ+敵1体のスキルを2.5秒間封印+敵1体に50％の確率で即死<br><br>
                                 <span class="txtYellow">体力20％以下でスキル強化</span><br>
                                 ・自身に100％の回避を30回付与+敵3体に悪属性130%ダメージ+敵2体のスキルを2.5秒間封印+敵1体に50％の確率で即死<br><br>
                                 <span class="txtYellow">ランダム20％で発動</span><br>
                                 究極奥義・無<br>
                                 ・敵1体に100％の確率で即死<br><br>


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
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240812_page_raid_001.png" width="100%" alt="">
                        <table id="Table01" class="mt-20">
                        <tbody>
                          <tr>
                            <th colspan="5">強特攻キャラ一覧</th>
                          </tr>
                          <tr>
                            <th colspan="5"style="background: #f08080;">綉毬花</th>
                          </tr>
                          <tr>
                          <td colspan="1" valign="middle" style="vertical-align: middle;">
                          <img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00105_A.png"alt=""></td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                            <p style="margin: 0;">強敵戦時、レアリティに応じてステータス・スキル威力アップ！</p>
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
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="fg-Gold">300%</span></td>
                          </tr>

                          <tr>
                            <th colspan="5"style="background: #f08080;">一ノ瀬真紀【一碧万頃】</th>
                          </tr>
                          <tr>
                          <td colspan="1" valign="middle" style="vertical-align: middle;">
                          <img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00183.png"alt=""></td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                            <p style="margin: 0;">強敵戦時、レアリティに応じてステータス・スキル威力アップ！</p>
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
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="fg-Gold">300%</span></td>
                          </tr>

                          <tr>
                            <td colspan="1" valign="middle" style="vertical-align: middle;">
                          特攻<br>スキル</td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;">味方3体の状態異常をランダムで6個除去+攻撃力200%分回復+味方全体の技属性耐性を5秒間100%アップ+仁・悪属性耐性を5秒間20%アップ+味方全体の柔属性威力を5秒間20%アップ</p>
                            </td>
                          </tr>


                          <div class="tabsilver" id="tabsilver2">
                      <img src="<?php include '../../php/domain.php'; ?>/news/2024_0301_release/img/240304_page_raid.png" width="100%" alt="">
                        <table id="Table01" class="mt-20">
                        <tbody>
                          
                          <tr>
                            <th colspan="5"style="background: #ffeb3b;">弱特攻キャラ一覧</th>
                          </tr>
                          <tr>
                            <th colspan="5"style="background: #f0e68c;">秋月隼人</th>
                          </tr>
                          <tr>
                          <td colspan="1" valign="middle" style="vertical-align: middle;">
                          <img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/00139.png"alt=""></td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;">強敵戦時、レアリティに応じてステータス・スキル威力アップ！</p>
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
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="fg-Gold">300%</span></td>
                          </tr>
                          

                          <tr>
                            <td colspan="1" valign="middle" style="vertical-align: middle;">
                          特攻<br>スキル</td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;">戦闘不能の味方3体を攻撃力100%分回復して蘇生(全員生存の場合は回復のみ)+自身に即死耐性を30秒間60%付与</p>
                            </td>
                          </tr>


                          <tr>
                            <th colspan="5"style="background: #f0e68c;">上谷昂一【迎春来光】</th>
                          </tr>
                          <tr>
                          <td colspan="1" valign="middle" style="vertical-align: middle;">
                          <img src="<?php include '../../php/masterdomain.php'; ?>/images/CharaIcon/ic_00170.png"alt=""></td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                            <p style="margin: 0;">強敵戦時、レアリティに応じてステータス・スキル威力アップ！</p>
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
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="fg-Gold">500%</span></td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">200%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;">100%</td>
                          <td  valign="middle" style="vertical-align: middle; font-size: 0.7rem !important;"><span class="fg-Gold">300%</span></td>
                          </tr>
                          <!--
                            <tr>
                            <td colspan="1" valign="middle" style="vertical-align: middle;">
                          特攻<br>スキル</td>
                            <td colspan="4" valign="middle" style="vertical-align: middle;">
                              <p style="margin: 0;">戦闘不能の味方1体を攻撃力50%分回復して蘇生(全員生存の場合は回復のみ)+味方全体の体力を攻撃力50％分回復</p>
                            </td>
                          </tr>-->
                                
                          <div class="tabsilver" id="tabsilver2">
                        <table id="Table01" class="mt-20">
                        <tbody>
                          <tr>
                            <th colspan="5"style="background: #4169e1;">特攻装備一覧</th>
                          </tr>
                          <tr>
                          <th colspan="5"style="background: #f08080;">【強特攻】高級懐中時計【密会の夜】</th>
                          </tr>
                          <tr>
                          <td colspan="1" valign="middle" style="vertical-align: middle;">
                          <img src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/eq_00080.png"alt=""></td>
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
                            <th colspan="5"style="background: #f0e68c;">【弱特攻】高級懐中時計【族の集会】</th>
                          </tr>
                          <tr>
                          <td colspan="1" valign="middle" style="vertical-align: middle;">
                          <img src="<?php include '../../php/masterdomain.php'; ?>/images/EquipmentIcon/eq_00081.png"alt=""></td>
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
                    <li clsss="textRed">1.5.16の修正にて、特攻スキルがダチのリーダーにも適用されるようになりました。ご確認ください。</li>
                    <li>特攻による各種ptに増加量はおおよその値となります、複数の特攻倍率が重なった際にはランキング/襲来ptそれぞれ別の特攻計算が適用されます為上記倍率以上のポイント獲得が発生する場合がございます</li>
                  </ol>
                </div>
                    </div>
                    
                    <?//=========タブ2END=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver3" >
                    <label for="tabchecksilver3" class="tab1">イベント概要</label>

                       <div class="tabsilver" id="tabsilver3">
                       <div class="index-2">イベント種別</div>
                         <p class="headline_2 fs-14"><span class="red">連合</span></p><br><br>
                         <div class="index-2">最大人数</div>
                         <p class="headline_2 fs-14"><span class="red">10名</span></p><br><br>
                         <div class="index-2">ランキング</div>
                         <p class="headline_2 fs-14"><span class="red">個人総合・連合総合・連合デイリー・ダメージ</span></p><br><br>
                         <div class="index-2">100レベル攻略難易度</div>
                         <p class="headline_2"><span class="txtYellow">『レベル.3.5』</span><br>特攻キャラの育成や強敵のスキル攻略を考案すればクリアできるレベルだが、スキル発動タイミングを意識する必要がある</p><br><br>
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