<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title>Tim Smith Math</title>
    <script type="text/javascript" src="hide.js"></script>
    <?php
    echo $this->Html->css('style');
    echo $this->Html->script('hide');
    ?>
</head>
<body>
<div id="container" style="" >

    <div id="header">
        <div id='copydiv'>
            &nbsp;
        </div>
        <div name='header' style='margin:5px;'>
            <div id='title'>
                <div id='loginheader' style='float:right;'>
                    <form id='loginheader'>
                        <table>
                            <tr>
                                <td>Username:</td>
                                <td><input type='text' name='uname' /></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type='password' name='pass'/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><input type='button' value='login'/></td>
                            </tr>
                            <tr>
                                <td><a href='forgotpass.php'>Forgot password</a></td>
                                <td>
                            </tr>
                        </table>
                    </form>
                </div>
                <span class='head'>Tim Smith Math Methods<br>Filling in the potholes to gain speed on the freeway of math!</span>
            </div>
        </div>
        <div id='menudiv'>
            <li class='menu menuBorder' style='width:100px;'>
                <a class='menu' href='index.html'>Home</a>
            </li>
            <li class='menu menuBorder' style='width:150px;'>
                <a class='menu' href='ticketingtool/index.html'>Ticketing Tool</a>
            </li>
            <li class='menu menuBorder' style='width:150px;'>
                <a class='menu' href='resourcelibrary/index.html' target='_blank'>Resource Library</a>
            </li>
            <li class='menu menuBorder' style='width:170px;'>
                <a class='menu' href='https://sdprojects.vzbi.com/federal/CCSContactCenter/GSD_DR/default.aspx'>Back to SharePoint</a>
            </li>
            <li class='menu' style='width:151px;'>
                <a class='menu' href='otherresources.html'>Other Resources</a>
            </li>
        </div>
    </div>

    <div id='submenu'>
        <span class='submenutitle'>Quick Links</span>
        <li class='submenu'>
            <a href='index.html'>Project Overview</a>
        </li>
        <li class='submenu'>
            <a href='contact.html'>Helpdesk Contact Info</a>
        </li>
        <li class='submenu'>
            <a href='vzbcontacts.html'>VZB Contacts</a>
        </li>
        <li class='submenu'>
            <a href='jbcontacts.html'>JetBlue Contacts</a>
        </li>
        <li class='submenu'>
            <a href='flowcharts.html'>Flow Charts</a>
        </li>
        <li class='submenu'>
            <a href='importantsites.html'>Important Sites</a>
        </li>
        <li class='submenu'>
            <a href=''>Project Files</a>
        </li>
    </div>

    <div id="bodydiv">
        <?php echo $this->fetch('content'); ?>
    </div>

    <div id='footerdiv'>
        <div class="copydiv">
            <span style='text-align:left; font-size:10px; color:#FFFFFF; padding:5px;'>&nbsp;</span>
        </div>
        <div id='sitemap'>
            <table style='margin-left:250px;'>
                <tr>
                    <td valign='top' style='width:140px; font-size:12px;'>
                        <span class='sitemaptitle'>Other Resources</span></br>
                        <a class='sitemap' href=''>Project Overview</a></br>
                        <a class='sitemap' href=''>Contact Info</a></br>
                        <a class='sitemap' href=''>VZB Contacts</a></br>
                        <a class='sitemap' href=''>JetBlue Contacts</a></br>
                        <a class='sitemap' href=''>Flow Charts</a></br>
                        <a class='sitemap' href=''>Important Sites</a>
                    </td>
                    <td valign='top' style='width:140px; font-size:12px;'>
                        <span class='sitemaptitle'>Sites</span></br>
                        <a class='sitemap' href=''>Ticketing Tool</a></br>
                        <a class='sitemap' href=''>Resource Library</a></br>
                        <a class='sitemap' href=''>Back to SharePoint</a></br>
                    </td>
            </table>
        </div>
        <div class="copydiv">
            <span style='text-align:left; font-size:10px; color:#FFFFFF; float:left;'>
                &copy;Copyright 2012 - Tim Smith Dyslexia Specialist
            </span>
            <span style='float:right; font-size:10px; color:#FFFFFF; padding:5px;'>
                - Click to contact the site Administrators
            </span>
        </div>
    </div>
</div>
</body>
<html>