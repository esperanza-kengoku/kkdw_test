<!DOCTYPE html>
<html lang="ja">
<body>衝突の無い優しい世界に変更を加えています
<?php
include '../../php/settime.php';
/*表示開始日時*/
$startTime = new DateTime('2023-12-01 12:00:00');
/*表示終了日時*/
$closeTime = new DateTime('2023-12-20 12:00:00');
if ($now >= $startTime && $now < $closeTime): ?>
    <!--遷移先URL-->
    <a href="../page/page_attachecaseinfo.php">

  <li class="newsContent-item">
    <div class="newsContent-itemBox">
        <!--種別-->
        <div class="newsTag tag_blue">新素材</div>
        <!--掲載日-->
        <div class="newsDate">2023.12.15</div>
    </div>
    <!--バナー表示-->
    <img src="<?php include '../../php/domain.php'; ?>/news/2023_1215_release/ban/231215_ban_attachecaseinfo.png" width="100%" alt="">
    <!--テキスト表示
    ※ガチャ画面に移動します<br>-->
    </a>
    <!--メモ：URL遷移(Web遷移の場合)-->
    <!--<a href="../page/news.php">-->
    <!--メモ：URL遷移(ゲーム内遷移の場合)-->
    <!--<a href="kengokuapp://120_Gacha">-->
</li>
テスト

<?php endif; ?>

</body>

</html>