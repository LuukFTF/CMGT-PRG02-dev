<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$song['title']?> Details - Luuk's Music Collection</title>  
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

                <form action="" method="post">
                    <div class="datafield-item">
                        <label for="title">title</label>
                        <input id="title" type="text" name="text" value=""/> 
                    </div>
                </form>
                <form action="" method="post">
                    <div class="datafield-item">
                        <label for="artist">artist</label>
                        <input id="artist" type="text" name="text" value=""/> 
                    </div>
                </form>
                <form action="" method="post">
                    <div class="datafield-item">
                        <label for="album">album</label>
                        <input id="album" type="text" name="text" value=""/> 
                    </div>
                </form>
                <form action="" method="post">
                    <div class="datafield-item">
                        <label for="genre">genre</label>
                        <input id="genre" type="text" name="text" value=""/> 
                    </div>
                </form>
                <form action="" method="post">
                    <div class="datafield-item">
                        <label for="year">year</label>
                        <input id="year" type="text" name="text" value=""/> 
                    </div>
                </form>
                <form action="" method="post">
                    <div class="datafield-item">
                        <label for="plays">plays</label>
                        <input id="plays" type="text" name="text" value=""/> 
                    </div>
                </form>
                <form action="" method="post">
                    <div class="datafield-item">
                        <label for="length">length</label>
                        <input id="length" type="text" name="text" value=""/> 
                    </div>
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