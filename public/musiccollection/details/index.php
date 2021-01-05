<?php
date_default_timezone_set('Europe/Amsterdam');

require_once '../includes/music-dataarrays.php';

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
    <meta charset="UTF-8">
    <title><?=$song['title']?> - Details | Luuk's Music Collection</title>  
    <meta name="viewport" content="width=device-width,
    initial-schale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <div class="container flex">
        <div class="flexitem">
            <h1>Programmeren 2</h1>
            <p><a href="https://github.com/LuukFTF/cmgt-prg02-dev">Github Repository</a></p>
        </div>
        <section class="songdetails">
            <div class="flexitem">
                <div class="item">
                    <h3><?=$song['title']?></h3>
                    <p>#<?=$id?></p>
                </div>
                <div class="item">
                    <p>artist</p>
                    <h4><?=$song['artist']?></h4>
                </div>
                <div class="item">
                    <p>album</p>
                    <h4><?=$song['album']?></h4>
                </div>
                <div class="item">
                    <p>genre</p>
                    <h4><?=$song['genre']?></h4>
                </div>
                <div class="item">
                    <p>year</p>
                    <h4><?=$song['year']?></h4>
                </div>
                <div class="item">
                    <h4><?=$song['plays']?></h4>
                    <p>plays</p>
                </div>
                    <div class="item">
                    <h4><?=$song['length']?></h4>
                    <p>length</p>
                </div>
                <td><a class="btn" href="../edit?id=<?= $id ?>">Edit</a></td>
            </div>
        </section>
        <a href="/musiccollection" class="btn">Back</a>
    </div>
</body>
</html>