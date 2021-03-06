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
    <meta name="keywords" content="tim smith math method dyslexia specialist tutor" />
    <meta name="description" content="Tim Smith Math Methods specializes in teaching math to students with dyslexia." />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>
        Tim Smith Math Methods
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
                <a href="#">Tim Smith Math Methods</a>
            </h1>
        </div>
        <div id="login">
            <?=$this->Html->link('Login',array('controller' => 'users', 'action'=>'login'),array('class'=>'button'))?>
            <!--<a class="button" href="#">Login</a>-->
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
    <div id="banner">
        <div class="captions">
            <h2>Filling in the potholes to gain speed on the freeway of math!</h2>
        </div>
        <img src="/img/chalkboard_banner.jpg" alt="Math" />
    </div>
    <div id="main">
        <div id="sidebar">
            <!-- This could be dates, news, etc. -->
            <div class="box">
                <h3>
                    Class Dates
                </h3>
                <div class="dateList">
                    <ul class="linkedList dateList">
                        <li class="first">
                            <span class="date">Sep 15</span> <a href="#">Mesa Math Night</a>
                        </li>
                        <li>
                            <span class="date">Sep 18</span> <a href="#">Tempe Time</a>
                        </li>
                        <li>
                            <span class="date">Sep 23</span> <a href="#">Chandler Calculations</a>
                        </li>
                        <li>
                            <span class="date">Sep 30</span> <a href="#">Phoenix Functions</a>
                        </li>
                        <li>
                            <span class="date">Oct 3</span> <a href="#">Gilbert Geometry</a>
                        </li>
                        <li class="last">
                            <span class="date">Oct 12</span> <a href="#">Scottsdale Science</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- This section is good for different, permanent links (not nav) -->
            <!-- <div class="box">
                <h3>
                    Morbi tortor eget
                </h3>
                <p>
                    Lectus venenatis pharetra mauris nisl cum neque adipiscing. Turpis ridiculus leo scelerisque.
                </p>
                <ul class="linkedList">
                    <li class="first">
                        <a href="#">Luctus curae vitae</a>
                    </li>
                    <li>
                        <a href="#">Duis justo parturient lectus</a>
                    </li>
                    <li>
                        <a href="#">Nullam fermentum cras sociis</a>
                    </li>
                    <li class="last">
                        <a href="#">Natoque sapien suscipit</a>
                    </li>
                </ul>
            </div>     -->
        </div>
        <div id="content">
            <?php echo $this->fetch('content'); ?>
            <br class="clear" />
            <?=$this->Session->flash()?>
        </div><br class="clear" />
    </div>
</div>
<div id="copyright">
    &copy;Copyright 2012 - Tim Smith Dyslexia Specialist. Design by <a href="http://www.freecsstemplates.org/">FCT</a>.
</div>
</body>
</html>