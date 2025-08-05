<!DOCTYPE html>
<html lang="ja">
<body>
<?php
$now = new DateTime();
/*表示開始日時*/
$startTime = new DateTime('2024-03-29 12:00:00');
/*表示終了日時*/
$closeTime = new DateTime('2024-09-03 11:59:59');
if ($now >= $startTime && $now < $closeTime): ?>
    <!--遷移先URL-->
    <a href="../page/page_allianceinfo.php">

  <li class="newsContent-item">
    <div class="newsContent-itemBox">
        <!--種別-->
        <div class="newsTag tag_green">お知らせ</div>
        <!--掲載日-->
        <div class="newsDate">2024.08.29</div>
    </div>
        <!--バナー表示-->
        <img src="<?php include '../../php/masterdomain.php'; ?>/images/Banner/240822_ban_info.png" width="100%" alt="">
    </a>
    <!--メモ：URL遷移(Web遷移の場合)-->
    <!--<a href="../page/news.php">-->
    <!--メモ：URL遷移(ゲーム内遷移の場合)-->
    <!--<a href="kengokuapp://120_Gacha">-->
</li>


<?php endif; ?>

</body>

</html>