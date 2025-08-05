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
                    <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240321_ban_info001.png" width="100%" alt="">
                  </div><br>

                  <div class="index-1">追加された『新機能』を一挙公開!!</div><br>
                         
                
                   <div class="tabbox mt-20">
                   <?//=========タブ始まり=========//?>
                   
                   <input type="radio" name="tabset" id="tabchecksilver4" checked>
                    <label for="tabchecksilver4" class="tab1">イベントランキング</label>
                       <div class="tabsilver" id="tabsilver4">

                       <div class="Att3">
                      <p class="Att4">【イベントランキングについて】</p>
                      <ol class="notes-1">
                        <li>イベントランキングは、通常のランキングとは別に、個人、連合、ルーキーを対象として特別ランキングを行う機能です</li>
                        <li>マイページ->ランキング->イベントタブとお進み頂きご確認ください</li>
                        <li>今回襲来イベントは「遊撃隊」ですが、「個人デイリーランキング」と「個人ルーキーランキング」が実装されております</li>
                        <li>ルーキーの対象はランキング開始より2ヶ月前以降（01月22日12時以降）にゲームを始められたユーザー様限定です</li>
                        <li>重複してランクインした場合、どちらの報酬も受け取ることができます</li>
                        <li>デイリーとなりますので、報酬は翌日のログイン時に配布されます。付与されない場合は再起動をお試しください</li>
                        <li>今回各種新機能が実装された関係で、<span class="txtYellow">ランキング報酬は大幅に上方修正</span>されております</li>
                      </ol>
                      </div>
                         
                      <div class="btn01 mt-20 mb-20 fs-14">
                       <a href="kengokuapp://060_Ranking03_2">個人デイリー</a>
                      </div>     
                      <div class="btn01 mt-20 mb-20 fs-14">
                       <a href="kengokuapp://060_Ranking03_3">個人ルーキー</a>
                      </div>     
                      
                       </div>
                       <?//=========タブEND=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver1">
                    <label for="tabchecksilver1" class="tab1">スキップチケット</label>

                    <div class="tabsilver" id="tabsilver1">
                    <div class="Att3">
                      <p class="Att4">【スキップチケットについて】</p>
                      <ol class="notes-1">
                        <li>スキップチケットは襲来イベントにて、<span class="txtYellow">バトルをスキップして報酬やptだけ獲得できる</span>アイテムとなります</li>
                        <li>詳細はイベントページにも記載がございます。合わせてご確認ください</li>
                        <li>スキップできる強敵の対象は再挑戦や救援依頼無しで１撃で撃破できているレベルまでとなりますのでご注意ください</li>
                        <li>一度に何枚も使うことができますが、使用するには同じだけの闘志が必要となりますので、最大でも５枚までとなります。ご注意ください</li>
                        <li>特攻についても適用されたポイントが獲得できます</li>
                        <li>助っ人ダチを選択した上でスキップチケットを使うことも仕様上可能ですが、バトルが発生しない以上メリットはございません。ご注意ください</li>
                      </ol>
                      </div>
                         <p class="ta-c mt-15">▼ 詳細はコチラ‼︎ ▼</p>
                           <a href="../page/page_240319_marika_raid.php"><img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240319_ban_raid.png" width="100%" alt=""></a> 
                           <br><br>
                    </div>
                    <?//=========タブ1END=========//?>

                     
		          <input type="radio" name="tabset" id="tabchecksilver2" > 
                    <label for="tabchecksilver2" class="tab1">プレミアムサロン</label>

                    <div class="tabsilver" id="tabsilver2">

                    <div class="Att3">
                      <p class="Att4">【プレミアムサロンについて】</p>
                      <ol class="notes-1">
                        <li>イベントランキングの報酬として今回プレミアムサロンチケットが実装されております</li>
                        <li>このプレミアムサロンチケットでのみ交換できる激レアアバターがプレミアムサロンには実装されております</li>
                        <li>使用期限等は現状ございませんが、ラインナップは予告なく変更となる場合がございます。ご注意ください</li>
                      </ol>
                      </div>
                       <div class="btn01 mt-20 mb-20">
                       <a href="kengokuapp://130_CommonShop01">サロンを確認する</a>
                      </div>     

                    </div>
                    
                    <?//=========タブ2END=========//?>

                    <input type="radio" name="tabset" id="tabchecksilver3" >
                    <label for="tabchecksilver3" class="tab1">たまり場新設項目</label>

                       <div class="tabsilver" id="tabsilver3">
                       <div class="Att3">
                      <p class="Att4">【質問掲示板と雑談掲示板について】</p>
                      <ol class="notes-1">
                        <li>たまり場にて、質問掲示板と雑談掲示板を新設させて頂きました</li>
                        <li>質問掲示板は初心者のユーザー様が分からない事を質問できる掲示板となります。意図に反する書き込みがあった場合は削除させて頂きますのでご注意ください</li>
                        <li>雑談掲示板は特別なお題の無い、ユーザー様どうしのコミュニケーションの場として新設させて頂きました。交流の場としてご利用ください</li>
                        <li>たまり場について、<span class="txtRed">利用規約違反が起きやすいコンテンツと認識しており、取締は行いますが、運営事務局にて不適切と判断した場合、コンテンツ自体を削除させていただく</span>場合がございます。ご注意ください</li>
                        <li>新設の背景といたしまして、利用規約に則りご利用頂けているユーザー様が大多数ではございますので、少しでもコミュニケーションの場を提供できればという判断となります。重ねてとなり恐縮ですが、利用規約違反があった場合は中止させて頂きますので、ご了承ください。</li>
                        <li style="text-decoration: underline;"><a href="https://c-hance.co.jp/kengoku/help/policy/terms.php">利用規約はこちら</a></li>
                      </ol>
                      </div>
                         
                      <div class="btn01 mt-20 mb-20 fs-14">
                       <a href="kengokuapp://160_Board01">たまり場を確認する</a>
                      </div>     
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

<div class="backbtn01">
                    <div class="pb-30 pl-40">
                      <a href="javascript:history.back()"><br>[前の画面に戻る]<br></a>

<!--画像で戻るボタンを表示する時用-->
<!--<a href="../page/info_top.php"><img src="https://official-page-images.s3.ap-northeast-1.amazonaws.com/chara_Info_Sample/txt_icon_backbutton.png" alt="" width=20% ></a>-->
                    </div>
                  </div>


</body>

</html>