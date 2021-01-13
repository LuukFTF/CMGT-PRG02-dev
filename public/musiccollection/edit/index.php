<?php
date_default_timezone_set('Europe/Amsterdam');

require_once '../includes/music-dataarrays.php';

// Redirect back if index not in url or value is empty
if(!isset($_GET['id']) || $_GET['id'] == '')
{
    header('Location: index.php');
    exit;
} else {
    $id = $_GET['id'];
    $song = $songs[$id];

    $title = $song['title'];
    $artist = $song['artist'];
    $album = $song['album'];
    $genre = $song['genre'];
    $year = $song['year'];
    $plays = $song['plays'];
    $length = $song['length'];

}

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $genre = $_POST['genre'];
    $year = $_POST['year'];
    $plays = $_POST['plays'];
    $length = $_POST['length'];

    $errors = [];
    if($title == '') {
        $errors[] = 'Title is required';
    }
    if($artist == '') {
        $errors[] = 'Artist name is required';
    }
    if($album == '') {
        $errors[] = 'Album name is required';
    }

    if(empty($errors))
    {
        echo 'Title is: ' . $title;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Song - Luuk's Music Collection</title>  
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
        <section class="songcreate">
            <div class="flexitem">
                <h2>Add New Song</h2>
                
                <errors class="errors">
                    <?php if(isset($errors)) { ?>
                        <ul class="errors">
                        <?php foreach ($errors as $error) { ?>
                            <li><?= $error ?></li>
                        <?php } ?>
                        </ul>
                    <?php } ?>
                </errors>

                <form action="" method="post">
                    <div class="datafield-item">
                        <label for="title">title</label>
                        <input id="title" type="text" name="text" value="<?= isset($album) ? $title : ''  ?>"/> 
                    </div>
                </form>
                <form action="" method="post">
                    <div class="datafield-item">
                        <label for="artist">artist</label>
                        <input id="artist" type="text" name="text" value="<?= isset($album) ? $artist : '' ?>"/> 
                    </div>
                </form>
                <form action="" method="post">
                    <div class="datafield-item">
                        <label for="album">album</label>
                        <input id="album" type="text" name="text" value="<?= isset($album) ? $album  : '' ?>"/> 
                    </div>
                </form>
                <form action="" method="post">
                    <div class="datafield-item">
                        <label for="genre">genre</label>
                        <input id="genre" type="text" name="text" value="<?= isset($album) ? $genre : ''  ?>"/> 
                    </div>
                </form>
                <form action="" method="post">
                    <div class="datafield-item">
                        <label for="year">year</label>
                        <input id="year" type="text" name="text" value="<?= isset($album) ? $year : ''  ?>"/> 
                    </div>
                </form>
                <form action="" method="post">
                    <div class="datafield-item">
                        <label for="plays">plays</label>
                        <input id="plays" type="text" name="text" value="<?= isset($album) ? $plays : ''  ?>"/> 
                    </div>
                </form>
                <form class="datafield-item" action="" method="post">
                    <label for="length">length</label>
                    <input id="length" type="text" name="text" value="<?= isset($album) ? $length : ''  ?>"/> 
                </form>
                <div class="datasubmit-btn">
                    <input class="btn" type="submit" name="submit" value="Save"/>
                </div>
            </div>
        </section>
        <a href="/musiccollection" class="btn">Back</a>
    </div>
</body>
</html>