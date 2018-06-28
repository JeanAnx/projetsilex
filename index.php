<?php 

include 'vendor/autoload.php';

use Carbon\Carbon;

$now = Carbon::now();
echo $now;                               // 2018-06-24 12:02:02
$today = Carbon::today();
echo $today;                             // 2018-06-24 00:00:00
$tomorrow = Carbon::tomorrow('Europe/London');
echo $tomorrow;                          // 2018-06-25 00:00:00
$yesterday = Carbon::yesterday();
echo $yesterday;