<?php
date_default_timezone_set('Europe/Amsterdam');

require_once 'includes/music-dataarrays.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<meta charset="UTF-8">
    <title>Luuk's Music Collection</title>  
    <meta name="viewport" content="width=device-width,
    initial-schale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/style.css">
</body>
    <div class="container flex">
        <div class="flexitem">
            <h1>Programmeren 2</h1>
            <p><a href="https://github.com/LuukFTF/cmgt-prg02-dev">Github Repository</a></p>
        </div>
        <div class="flexitem">
            <table class="musiccollection">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Album</th>
                    <th>Genre</th>
                    <th>Year</th>
                    <th>Plays</th>
                    <th>Length</th>
                    <th></th>
                    <th></th>
                </thead>
                <tfoot>
                    <td colspan="6">&copy; Luuk's Music Collection 2020 </td>
                </tfoot>
                <tbody>
                    <?php foreach ($songs as $id => $song) { ?>
                    <tr>
                        <td><?= $id ?></th>
                        <td><?= $song['title'] ?></td>
                        <td><?= $song['artist'] ?></td>
                        <td><?= $song['album'] ?></td>
                        <td><?= $song['genre'] ?></td>
                        <td><?= $song['year'] ?></td>
                        <td><?= $song['plays'] ?></td>
                        <td><?= $song['length'] ?></td>
                        <td><a class="btn" href="details?id=<?= $id ?>">Details</a></td>
                    </tr>
                    <?php $id++; } ?>
                </tbody>
            </table> 
        </div>
        <a href="/musiccollection/create" class="btn">Create</a>
    </div>
</html>