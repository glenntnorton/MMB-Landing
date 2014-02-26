<?php
    require_once("Content.inc.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= title(); ?></title>
    <meta name="description" content="<?= metaDescription(); ?>"/>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/dark-blue.css" />
    <!-- IE scripts and stylesheets -->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/iefixes.js" type="text/javascript"></script>
    <![endif]-->
    
    <?= mailChimp(); ?>
    <?= ga(); ?>

</head>

<body class="home">
    <div id="wrap">
        <header id="header">
            <div class="inner-wrap clearfix">
                <h1 id="logo"><a href="index.html"><?= logoHeader(); ?></a></h1>
                <img src="images/box-small-red.png" width="156" height="128" alt="What's in the Box?" />
                <span style="font-size: 1.2em; font-weight:bold; padding: 3px;">
                    <small><strong><em><?= smallHeaderMsg(); ?></em></strong></small>
                    <!--<em>Your buddy is here to help!</em>-->
                    <a class="button button-arrow" href="#" onclick="openMail();"><?= buttonText(); ?><span class="icon"></span></a>
                </span>
            </div>
        </header>

        <div id="column-container" class="aligncenter">
            <h1><?= topHeaderOneCTA($id="h1mmbyellow"); ?></h1>
            <h2><?= topHeaderTwoCTA(); ?></h2>
        </div>

        <hr>
            
        <div id="main">
            <div class="inner-wrap">
                <div class="column-container clearfix">
                    <?= productOneHeader(); ?>
                    <br>
                    <br>

                    <div class="column half">
                        <div>
                            <img src="images/box-large-white-red-bow.png" width="400" height="400" alt="MyMoveBuddy Box" />
                        </div>
                    </div>

                    <div class="column half">
                        <div>
                            <?= productOneItemList(); ?>  
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="inner-wrap">
                <div class="column-container clearfix">
                    <?= productTwoHeader(); ?>
                    <div class="column half">
                        <div>
                            <?= productTwoItemList(); ?>
                        </div>
                    </div>

                    <div class="column half">
                        <img src="images/HiRes.png" width="400" height="400" alt="MyMoveBuddy App" />
                    </div>
                </div>
            </div>

            <div id="action">
                <div class="inner-wrap">
                    <div class="column-container">
                        <?= bottomCTA(); ?>
                        <a class="button button-arrow" href="#" onclick="openMail();"><?= buttonText(); ?>
                        <span class="icon"></span></a>
                        <br>
                        <?= noSpam(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="aligncenter">
        <div class="column fourth">
            &nbsp;     
        </div>
        <div class="column half aligncenter">
            &copy;2014&nbsp;MyMoveBuddy
            &middot;
            <a href="mailto:support@mymovebuddy.com">support@mymovebuddy.com</a>
        </div>
        <div class="column fourth">
            &nbsp;     
        </div>
    </div>
</body>
</html>
