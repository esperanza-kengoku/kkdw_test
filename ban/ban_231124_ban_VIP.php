<!DOCTYPE html>
<html lang="ja">
<body>
<?php
include '../../php/settime.php';
/*表示開始日時*/
$startTime = new DateTime('2023-11-23 11:00:00');
/*表示終了日時*/
$closeTime = new DateTime('2033-11-27 11:59:59');
if ($now >= $startTime && $now < $closeTime): ?>
<li class="newsContent-item">
    <div class="newsContent-itemBox">
        <!--種別-->
        <div class="newsTag tag_orange">キャンペーン</div>
        <!--掲載日-->
        <div class="newsDate">2023.11.24</div>
    </div>
    <!--遷移先URL-->
    <a href="../page/page_231124_VIP.php">
    <!--バナー表示-->
    <img src="<?php include '../../php/domain.php'; ?>/news/2023_1124_release/ban/231124_ban_NewCharacter_002.png" width="100%" alt="">
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