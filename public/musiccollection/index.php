<?php
date_default_timezone_set('Europe/Amsterdam');

//Multi dimensional array with the music collection data
$albums =
[
    // fill the collection with albums (also arrays)
    [
        'artist'    => 'Muse',
        'album'     => 'Live At Rome Olympic Stadium',
        'genre'     => 'Rock',
        'year'      => '2013',
        'tracks'    => '13'
    ],
    [
        'artist'    => 'Dream Theater',
        'album'     => 'Systematic Chaos',
        'genre'     => 'Progressive Rock',
        'year'      => '2007',
        'tracks'    => '8'
    ],
    [
        'artist'    => 'Hardwell',
        'album'     => 'United We Are',
        'genre'     => 'House',
        'year'      => '2015',
        'tracks'    => '14'
    ],
    [
        'artist'    => 'Robbie Williams',
        'album'     => 'Greatest Hits',
        'genre'     => 'Pop',
        'year'      => '2010',
        'tracks'    => '57'
    ],
    [
        'artist'    => 'Limp Bizkit',
        'album'     => 'Gold Cobra',
        'genre'     => 'Rock / Rap',
        'year'      => '2011',
        'tracks'    => '16'
    ],
    [
        'artist'    => 'Harrie Jekkers',
        'album'     => 'Mijn Ikken',
        'genre'     => 'Nederpop',
        'year'      => '2005',
        'tracks'    => '12'
    ],
    [
        'artist'    => 'Angels & Airwaves',
        'album'     => 'Love Part 1',
        'genre'     => 'Rock',
        'year'      => '2011',
        'tracks'    => '11'
    ],
    [
        'artist'    => 'Joe Satriani',
        'album'     => 'Unstoppable Momentum',
        'genre'     => 'Rock',
        'year'      => '2013',
        'tracks'    => '11'
    ],
    [
        'artist'    => 'Kygo',
        'album'     => 'Cut Your Teeth',
        'genre'     => 'Chillstep',
        'year'      => '2014',
        'tracks'    => '3'
    ],
    [
        'artist'    => '30 Seconds To Mars',
        'album'     => 'This Is War',
        'genre'     => 'Rock',
        'year'      => '2009',
        'tracks'    => '15'
    ]
];
?>


<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-schale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/style.css">
    <title>Luuk's Music Collection</title>
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
                    <th>Artist</th>
                    <th>Album</th>
                    <th>Genre</th>
                    <th>Year</th>
                    <th>Tracks</th>
                </thead>
                <tfoot>
                    <td colspan="6">&copy; Luuk's Music Collection 2020 </td>
                </tfoot>
                <tbody>
                    <?php foreach ($albums as $index => $album) { ?>
                    <tr>
                        <td><?= $index++ ?></th>
                        <td><?= $album['artist'] ?></td>
                        <td><?= $album['album'] ?></td>
                        <td><?= $album['genre'] ?></td>
                        <td><?= $album['year'] ?></td>
                        <td><?= $album['tracks'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table> 
        </div>
    </div>
</html>