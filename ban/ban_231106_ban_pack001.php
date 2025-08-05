<!DOCTYPE html>
<html lang="ja">
<body>
<?php
include '../../php/settime.php';
/*表示開始日時*/
$startTime = new DateTime('2023-11-06 12:00:00');
/*表示終了日時*/
$closeTime = new DateTime('2023-11-09 11:59:59');
if ($now >= $startTime && $now < $closeTime): ?>
<li class="newsContent-item">
    <div class="newsContent-itemBox">
        <!--種別-->
        <div class="newsTag tag_green">購入特典</div>
        <!--掲載日-->
        <div class="newsDate">2023.11.06</div>
    </div>
    <!--遷移先URL-->
    <a href="../page/page_231106_pack001.php">
    <!--バナー表示-->
    <img src="<?php include '../../php/domain.php'; ?>/news/2023_1101_release/ban/ban_231106_pack001.png" width="100%" alt="">
    <!--テキスト表示
    ※ガチャ画面に移動します<br>-->
    </a>
    <!--メモ：URL遷移(Web遷移の場合)-->
    <!--<a href="../page/news.php">-->
    <!--メモ：URL遷移(ゲーム内遷移の場合)-->
    <!--<a href="kengokuapp://120_Gacha">-->
</li>

<?php endif; ?>

</body>

</html>