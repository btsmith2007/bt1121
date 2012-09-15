<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Unofficial Channels
Description: A two-column, fixed-width design with a bright color scheme.
Version    : 1.0
Released   : 20120723
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="keywords" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>
        Tim Smith Math Methods - Admin Control Panel
    </title>
    <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
    <?php
    echo $this->Html->css('style2');
    ?>
</head>
<body>
<div id="bg1"></div>
<div id="bg2"></div>
<div id="outer">
    <div id="header">
        <div id="logo">
            <h1>
                <a href="#">Tim Smith Math Methods - Admin Control Panel</a>
            </h1>
        </div>
        <!--<div id="search">
            <form action="" method="post">
                <div>
                    <input class="text" name="search" size="32" maxlength="64" />
                </div>
            </form>
        </div>-->
        <div id="nav">
            <ul>
                <li class="first">
                    <?=$this->Html->link('Home', '/')?>
                </li>
                <li>
                    <?=$this->Html->link('Services', '/home/services')?>
                </li>
                <li>
                    <?=$this->Html->link('About', '/home/about')?>
                </li>
                <li class="last">
                    <?=$this->Html->link('Contact', '/home/contact')?>
                </li>
            </ul><br class="clear" />
        </div>
    </div>
    <div id="main">
        <div id="sidebar">
            <?php echo $this->fetch('sidebar'); ?>
        </div>
        <div id="content">
            <?php echo $this->fetch('content'); ?>
            <br class="clear" />
        </div><br class="clear" />
    </div>
</div>
<div id="copyright">
    &copy;Copyright 2012 - Tim Smith Dyslexia Specialist. Design by <a href="http://www.freecsstemplates.org/">FCT</a>.
</div>
</body>
</html>