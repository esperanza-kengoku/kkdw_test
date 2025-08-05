<!DOCTYPE html>
<html lang="ja">
    <?php include '../../php/head.php'; ?>
    
<body>

  <div id="container">


  <div id="bridge-wrapper">
      <div id="content" class="clearfix">
        <div id="contentWrapper" class="column0">
          <div id="mainContent">
            <div id="news" class="newsDetail">

              <div class="news-text box-dent">
                <div class="outline-2">

                <div class="outline">
                  <div id="image_padding">
                  <!--バナー表示　画像できたら入れる-->
                  <img src="<?php include '../../php/domain.php'; ?>/news/2023_0915_release/ban/230911_ban_addition_003.png" width="100%" alt="">
                    </div>

                  <div class="index-1">2024年6月更新!!<br> 最強を目指す為の極意を伝授!!<br>詳細をチェック!!</div><br>

                  <div class="tabbox mt-20">
                  <?//=========タブ始まり=========//?>

                  <input type="radio" name="tabset" id="tabchecksilver5" checked>
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver5" class="tab1">上級者向け指南</label>
                  <div class="tabsilver" id="tabsilver5">

               <div class="index-2 mt-20">ステータスバフ・状態異常・属性威力・耐性は全て別物！ 区別して考えろ！</div>

                <table id="Table01" class="mt-20">
                    <tbody>
                      <tr>
                        <th style="width:30%;">ステータスバフ・デバフ一例</th>
                        <th style="width:20%;">アイコン</th>
                        <th style="width:50%;">詳細</th>
                      </tr>

                      <tr>
                        <td valign="middle" style="vertical-align: middle;">攻撃力アップ</td>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/4_Ignore/ico_status_attack_up.png" width="100%" alt=""></td>
                        <td valign="middle" style="vertical-align: middle;">
                          <p style="margin: 0;">味方の攻撃力を◯秒間◯％アップ</p>
                        </td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">攻撃力ダウン</td>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/4_Ignore/ico_status_attack_down.png" width="100%" alt=""></td>
                        <td valign="middle" style="vertical-align: middle;">
                          <p style="margin: 0;">敵の攻撃力を◯秒間◯％ダウン</p>
                        </td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">Atk付与耐性</td>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/4_Ignore/ico_shield0011.png" width="100%" alt=""></td>
                        <td valign="middle" style="vertical-align: middle;">
                          <p style="margin: 0;">耐性が付いている時、攻撃力アップダウンのバフ、デバフが指定された比率分掛かりにくくなる。耐性100％で絶対にかからない。</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="Att3">
                  <p class="Att4">【超重要事項！】</p>
                  <ol class="notes-1">
                    <li>ステータスバフ・デバフは<span class="txtYellow">重複する</span>ので、何回も掛ければその分強くも弱くもなる</li>
                    <li>ステータスバフ・デバフは<span class="txtYellow">かかる順番は関係がない</span>。効果が重複するため後でも先でも同じ</li>
                    <li>バフ・デバフのどちらもかかっている場合はどちらも計算される。50％アップ、30％ダウンなら20％アップが適用される</li>
                    <li>「付与耐性」については<span class="txtYellow">掛かりにくくする</span>効果がある。Atk付与耐性が強くなると、攻撃力アップダウンが効かなくなる</li>
                    <li>デバフを解除できるのは現段階では<span class="txtYellow">桜木静</span>のみ</li>
                    
                  </ol>
                </div>                


                <div class="index-2 mt-20">分かりにくい鈍化と鋭化はどちらも「状態異常」</div>

              <!--回復系まとめ-->
              <table id="Table01" class="mt-20">
                      <tbody>
                       <tr>
                        <th style="width:30%;">状態異常一例</th>
                        <th style="width:20%;">アイコン</th>
                        <th style="width:50%;">詳細</th>
                       </tr>

                       <tr>
                        <td valign="middle" style="vertical-align: middle;">鈍化</td>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/4_Ignore/230901_icon_slow_statusicon_001.png" width="100%" alt=""></td>
                        <td valign="middle" style="vertical-align: middle;">
                          <p style="margin: 0;">スキルゲージ増加量を減少させる（スキルが溜まるのが遅くなる）</p>
                        </td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">鋭化</td>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/4_Ignore/230901_icon_slow_statusicon_002.png" width="100%" alt=""></td>
                        <td valign="middle" style="vertical-align: middle;">
                          <p style="margin: 0;">スキルゲージ増加量を増加させる（スキルが溜まるのが早くなる）</p>
                        </td>
                      </tr>
                      <tr>
                        <td valign="middle" style="vertical-align: middle;">必要スキルゲージ増加</td>
                        <td valign="middle" style="vertical-align: middle;"><img src="<?php include '../../php/masterdomain.php'; ?>/images/4_Ignore/230901_icon_skillgauge_statusicon.png" width="100%" alt=""></td>
                        <td valign="middle" style="vertical-align: middle;">
                          <p style="margin: 0;">スキルゲージは通常「100」でMAXだが、最大値を増加させ「160」などに変えてしまう。スキル発動までに必要なゲージ量を増加させる</p>
                        </td>
                      </tr>
                      </tbody>
                </table>

                <div class="Att3">
                  <p class="Att4">【超重要事項！】</p>
                  <ol class="notes-1">
                    <li>状態異常は<span class="txtYellow">重複しない</span>ので、鈍化や鋭化は一つしか掛からない</li>
                    <li>状態異常は<span class="txtYellow">先に掛けたものが適用される</span>。効果が重複しないため、先に掛けた方が優先される</li>
                    <li>状態異常は時間が切れるまで有効な為、その間に受けた同一と判定される状態異常は無効化される。鈍化と鋭化は「同一状態異常」扱いになっている</li>
                    <li>「耐性」については<span class="txtYellow">掛かりにくくする</span>効果がある。鈍化耐性が強くなると、鈍化に掛かる可能性が低くなる</li>
                    <li>状態異常を回復できるのは現状では<span class="txtYellow">不破麗花【純情可憐】</span>のみ。</li>
                  </ol>
                </div>   


                <div class="index-2 mt-20">「属性威力アップ」も別枠扱い。現状で解除するキャラは存在しない</div>

                 </div>
                  <?//=========タブ1END=========//?>


                  <input type="radio" name="tabset" id="tabchecksilver4">
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver4" class="tab1">実用例</label>
                  <div class="tabsilver" id="tabsilver4">
    
                  <div class="frame-1 mt-20 mb-20">
                      <p class="fs16 fw-b ta-c">二階堂・三笠・不破麗花【純情可憐】</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2">
                        <li>こちらから対戦を仕掛ける場合はこちらが先行になります。最優先で発動するのは<span class="txtRed">自身のパーティのリーダースキル</span>です</li>
                        <li>その為、鈍化を使うキャラは沢山いますが、先行で鈍化を掛ける場合は二階堂リーダーの場合は二階堂が最優先で適用されます。対戦相手が不破麗花【純情可憐】や三笠の鈍化を打ってきても<span class="txtYellow">無効化</span>されます</li>
                        <li>榊の専用装備の鋭化についても同様の事が言えます。先に鈍化を掛けていれば<span class="txtYellow">鋭化は無効化</span>されます</li>
                        <li>必要スキルゲージ増加や、スキルゲージそのものを上昇させる緋山アケミ【X'】についてはこの限りではありません。鈍化・鋭化とは別物となります。</li>
                        <li>絆技Blood Covenantの鈍化についてはリーダースキルで打ち合った場合は全て無効化されます（別枠スキル発動順番をご確認ください）</li>
                      </ol>
                    </div>      
                 </div>
                  <?//=========タブ1END=========//?>


                  <input type="radio" name="tabset" id="tabchecksilver3">
                  <?//=========タブ毎にid="tabchecksilver1"、for="tabchecksilver1"、id="tabsilver1"の数字を揃える=========//?>
                  <label for="tabchecksilver3" class="tab1">スキルの発動順番</label>
                  <div class="tabsilver" id="tabsilver3">
    
                  <div class="frame-1 mt-20 mb-20">
                      <p class="fs16 fw-b ta-c">先行の場合のスキル発動順番（挑んだ場合）</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2">
                        <li>自：リーダースキル</li>
                        <li>相：リーダースキル</li>
                        <li>自：装備スキル</li>
                        <li>相：装備スキル</li>
                        <li>自：絆技スキル</li>
                        <li>相：絆技スキル</li>
                      </ol>
                    </div>      
   
                    <div class="frame-1 mt-20 mb-20">
                      <p class="fs16 fw-b ta-c">後攻の場合のスキル発動順番（挑まれた場合）</p>
                      <p class="hr_grd2"></p>
                      <ol class="notes-2">
                        <li>相：リーダースキル</li>
                        <li>自：リーダースキル</li>
                        <li>相：装備スキル</li>
                        <li>自：装備スキル</li>
                        <li>相：絆技スキル</li>
                        <li>自：絆技スキル</li>
                      </ol>
                    </div>    

                    
                 </div>
                  <?//=========タブ1END=========//?>

                 </div>
                  <?//=========タブEND=========//?>

                  <div class="backbtn01 pb-35 pl-40">
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
