<?php
date_default_timezone_set('Europe/Amsterdam');

require_once '../includes/music-dataarrays.php';

$id = $_GET['id'];

// Redirect back if index not in url or value is empty
if(!isset($_GET['id']) || $_GET['id'] == '')
{
    header('Location: index.php');
    exit;
}

$id = $_GET['id'];

$song = $songs[$id];

?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<meta charset="UTF-8">
    <title>{Song} Details - Luuk's Music Collection</title>  
    <meta name="viewport" content="width=device-width,
    initial-schale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../css/style.css">
</body>
    <div class="container flex">
        <div class="flexitem">
            <h1>Programmeren 2</h1>
            <p><a href="https://github.com/LuukFTF/cmgt-prg02-dev">Github Repository</a></p>
        </div>
        <section class="songdetails">
            <div class="flexitem">
                <div class="item">
                    <h2><?=$song['title']?></h2>
                    <p>#<?=$id?></p>
                </div>
                <div class="item">
                    <p>artist</p>
                    <h3><?=$song['artist']?></h3>
                </div>
                <div class="item">
                    <p>album</p>
                    <h3><?=$song['album']?></h3>
                </div>
                <div class="item">
                    <p>genre</p>
                    <h3><?=$song['genre']?></h3>
                </div>
                <div class="item">
                    <p>year</p>
                    <h3><?=$song['year']?></h3>
                </div>
                <div class="item">
                    <h3><?=$song['plays']?></h3>
                    <p>plays</p>
                </div>
                    <div class="item">
                    <h3><?=$song['length']?></h3>
                    <p>length</p>
                </div>
            </div>
        </section>
        <a href="/musiccollection" class="btn">Back</a>
    </div>
</html>