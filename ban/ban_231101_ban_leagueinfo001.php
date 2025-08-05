<!DOCTYPE html>
<html lang="ja">
<body>
    ぽよヨヨヨヨヨヨーん
<?php
include '../../php/settime.php';
/*表示開始日時*/
$startTime = new DateTime('2023-11-01 12:00:00');
/*表示終了日時*/
$closeTime = new DateTime('2033-11-15 23:59:59');
if ($now >= $startTime && $now < $closeTime): ?>
<li class="newsContent-item">
    <div class="newsContent-itemBox">
        <!--種別-->
        <div class="newsTag tag_red">※重要！※</div>
        <!--掲載日-->
        <div class="newsDate">2023.11.01</div>
    </div>
    <!--遷移先URL-->
    <a href="../page/page_231101_leagueinfo001.php">
    <!--テキスト表示-->
    ※連合リーグルール改定のお知らせ：エントリー後の加入はペナルティ対象<br>
    </a>
    <!--メモ：URL遷移(Web遷移の場合)-->
    <!--<a href="../page/news.php">-->
    <!--メモ：URL遷移(ゲーム内遷移の場合)-->
    <!--<a href="kengokuapp://120_Gacha">-->
</li>

<?php endif; ?>

</body>

</html>