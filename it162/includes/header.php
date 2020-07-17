<?php include 'portal-config.php' ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $title ?>
    </title>
    <link href="css/portal.css" rel="stylesheet" type="text/css">
    <link href="css/nav.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/b59b484783.js"></script>
</head>

<body>
    <header>
        <div class="header-inner">
            <a href="index.php"><i class="logo fa <?= $logo ?>" <?= $logo_color ?> id=logo></i></a>
            <h1>Cong Ho's SCC IT162 Portal</h1>
        </div>

        <div class="topnav" id="myTopnav">
            <?= makeLinks($nav1) ?>
            <!-- <a href="index.php" class="active">Welcome</a>
            <a href="big/index.php">Big</a>
            <a href="aia.php">AIA</a>
            <a href="flowchart.php">Flowchart</a>
            <a href="fp/index.php">Final Project</a>
            <a href="contactme.php">Contact Cong</a> -->
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>