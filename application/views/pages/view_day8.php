<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" href="http://www.hiddenbrains.com/favicon.ico" type="http://www.hiddenbrains.com/image/x-icon"/>
        <title>::: Day 8  CodeIgniter :::</title>
        <link href="<?php echo base_url(); ?>css/codeigniter_summary.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/jquery.fancybox.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.fancybox.js"></script>
        <script src="<?php echo base_url(); ?>js/codeigniter_main.js"></script>
    </head>
    <body>
        <div id="main-container">
            <div id="head-container">
                <div class="brand">
                    <img src="<?php echo base_url(); ?>images/ci_logo_flame.jpg" width="75" height="82">
                </div>
                <div class="title">
                    <a href='day8.html'><h1>Day 8 - CodeIgniter</h1></a>
                </div>

            </div>
            <div class="clear"></div>
            <div id="left-container">
                <h2>Topics Covered</h2>
                <?php
                if (isset($day8) && $day8 != NULL) {
                    echo '<ul>';
                    foreach ($day8 as $topic) {
                        echo '<li>' . $topic . '</li>';
                    }
                    echo '</ul>';
                }
                ?>
            </div>

            <div id="right-container">
                <?php
                if (isset($lib) && isset($day8) && $day8 != NULL) {
                    echo '<h2>Using CodeIgniter Libraries</h2>';
                    echo '<p>All of the available libraries are located in your system/libraries folder. In most cases, to use one of these classes involves initializing it within a controller using the following initialization function: </p>';
                    echo '<li>$this->load->library("class name");</li>';
                    echo '<p>Where class name is the name of the class you want to invoke. For example, to load the form validation class you would do this:</p>';
                    echo '<li>$this->load->library("form_validation");</li>';
                    echo '<p>Once initialized you can use it as indicated in the user guide page corresponding to that class.

Additionally, multiple libraries can be loaded at the same time by passing an array of libraries to the load function.</p>';
                    echo '<li>$this->load->library(array("email", "table"));</li>';
                    echo '<h4>Codeigniter Core Libraries</h4>';
                    echo '<ul>';
                    foreach ($lib as $library) {
                        echo '<li>' . $library . '</li>';
                    }
                    echo '</ul>';
                } elseif (isset($ownlib) && isset($day8) && $day8 != NULL) {
                    echo 'own library';
                } else {
                    ?>
                    <p>In Previous sessions we covered Topics</p>
                    <ul>
                        <li><a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/helpers/array_helper.html">What is Helpers</a></li>
                        <li><a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/installation/upgrade_200.html">What is Plugins</a></li>
                        <li><a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/general/autoloader.html">What are Auto-loading Resources</a></li>
                        <li><a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/general/core_classes.html">Usage of core Class</a></li>
                        <li><a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/general/core_classes.html">Creating custom Class</a></li>
                    </ul>
                    <article>Now,Today We going learn <b>Usage of core libraries, How to create a custom library</b></article>
                    <p>Please go through the links for in detail..</p>
                <?php } ?>

            </div>
            <div class="clear"></div>
            <div class="copyright"> &copy; 2003-2013 <a href="http://www.hiddenbrains.com/" title="Web and Mobile App Development Company in India">Hidden Brains InfoTech,</a> India </div>
        </div>
    </body>
</html>
