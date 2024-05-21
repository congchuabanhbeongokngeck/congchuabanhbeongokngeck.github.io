<!-- count days from love-day -->
<?php
$love_day = strtotime("2023-10-20");
$now = time();
$diff = $now - $love_day;
$count_days = floor($diff / (60 * 60 * 24));
$months = floor($count_days / 30);
$years = floor($months / 12);
$days = $count_days - $months * 30;
?>