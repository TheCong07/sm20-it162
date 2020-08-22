<?php include "big-config.php" ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../css/forms.css" type="text/css">
    <link href="../css/portal.css" rel="stylesheet" type="text/css">
    <link href="css/nav.css" rel="stylesheet" type="text/css">
    <link href="css/big.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/b59b484783.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="js/big.js"></script>
</head>

<body>
    <header>
        <div class="header-inner">
            <a href="<?=$page?>"><i class="logo fa <?= $logo ?>" <?= $logo_color ?> id=logo></i></a>
            <h1>Web Development by Cong Ho</h1>
        </div>

        <nav id="cssmenu" class="topnav">
            <ul>
                <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> Home</span></a></li>
                <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
                <li><a href="flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
                <li><a href="galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
                <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
                    <ul>
                        <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
                        <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
                        <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
                    </ul>
                </li>
                <li><a href="shoppingcarts.php"><span><i class="fa fa-fw fa-shopping-basket"></i> Shopping Carts</span></a></li>
                <li><a href="siteapp.php"><span><i class="fa fa-fw fa-html5"></i> Site vs App</span></a></li>
                <li><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i> Web Cam</span></a></li>
            </ul>
        </nav>
    </header>

    <div id="wrapper">
    <main>
        <h2 class="pageID"><?=$PageID?></h2>