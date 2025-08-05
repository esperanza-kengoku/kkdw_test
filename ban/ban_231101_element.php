<!DOCTYPE html>
<html lang="ja">
<body>
<?php
include '../../php/settime.php';
/*表示開始日時*/
$startTime = new DateTime('2023-08-31 14:30:00');
/*表示終了日時*/
$closeTime = new DateTime('2033-09-15 12:00:00');
if ($now >= $startTime && $now < $closeTime): ?>
<li class="newsContent-item">
    <div class="newsContent-itemBox">
        <!--種別-->
        <div class="newsTag tag_blue">お知らせ</div>
        <!--掲載日-->
        <div class="newsDate">2023.05.15</div>
    </div>
    <!--遷移先URL-->
    <a href="../page/element.php">
    <!--バナー表示-->
    <img src="<?php include '../../php/domain.php'; ?>/news/2023_1101_release/ban/231101_ban_element.png" width="100%" alt="">
    <!--テキスト表示-->
    </a>
    <!--メモ：URL遷移(Web遷移の場合)-->
    <!--<a href="../page/news.php">-->
    <!--メモ：URL遷移(ゲーム内遷移の場合)-->
    <!--<a href="kengokuapp://120_Gacha">-->
</li>


<?php endif; ?>

</body>

</html>