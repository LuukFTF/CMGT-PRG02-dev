<?php
date_default_timezone_set('Europe/Amsterdam');

// require_once 'datefunctions.php';

function dateDiff($firstDate, $lastDate, $returnType) {
    $diff = strtotime($lastDate) - strtotime($firstDate);

    switch ($returnType) {
        case "days":
            $diff = round( $diff / (24 * 60 * 60) );
        break;
        default: $diff;
    }
    return $diff;
}


$test = "test";
$currentDay = date("d");
$currentMonth = date("m");
$currentMonth_text = date("F");
$currentYear = date("Y");
$currentHour = date("G");
$currentMinute = date("i");
$currentMinute_text;

$currentDate = date("d-m-y");
$lastweekDate = date("d-m-y", strtotime("-1 week"));

$currentDatetime = date("d-m-y H:i");
$lastweekDatetime = date("d-m-y H:i", strtotime("-1 week"));

if($currentMinute == 1) {
    $currentMinute_text = "minuut";
} else {
    $currentMinute_text = "minuten";
}

$greeting;

switch ($currentHour) {
    case ($currentHour >= 6 && $currentHour < 14):
        $greeting = "Goede morgen";
        break;
    case ($currentHour >= 14 && $currentHour < 17):
        $greeting = "Goede middag";
        break;
    case ($currentHour >= 17 && $currentHour < 24):
        $greeting = "Goede avond";
        break;
    case ($currentHour >= 0 && $currentHour < 6):
        $greeting = "Goede nacht";
        break;
    default: $greeting = "Goede dag";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-schale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/style.css">
    <title>Luuk's Datetime</title>
</head>
<body>
    <section class="main">
        <div class="container flex">
            <div class="flexitem">
                <h1>Programmeren 2</h1>
                <p><a href="https://github.com/LuukFTF/cmgt-prg02-dev">Github Repository</a></p>
            </div>
            <div class="flexitem">
                <h3>Luuk's Style Greeting</h3>
                <p><?= $greeting ?>!</p>
            </div>
            <div class="flexitem">
                <p>Het is vandaag <?= $currentDay ?> <?= $currentMonth_text ?> <?= $currentYear ?>.</p>
                <p>Het is vandaag <?= $currentDay ?>/<?= $currentMonth ?>/<?= $currentYear ?>.</p>
                <p>Het is nu <?= $currentHour ?> uur en <?= $currentMinute ?> <?= $currentMinute_text ?>.</p>
            </div>
            <div class="flexitem">
                <p> Datum vandaag: <?= $currentDatetime ?></p>
                <p> Datum vorige week: <?= $lastweekDatetime ?></p>
                <p> Verschil tussen dagen: <?= dateDiff($lastweekDatetime, $currentDatetime, "days") ?></p>
                <p> Nachtjes tot verjaardag</p>
            </div>
        </div>
    </section>
</body>
</html>