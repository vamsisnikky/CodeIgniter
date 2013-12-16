<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" href="http://www.hiddenbrains.com/favicon.ico" type="http://www.hiddenbrains.com/image/x-icon"/>
        <title>::: Day 3  CodeIgniter :::</title>
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
                    <img src="./assets/images/ci_logo_flame.jpg" width="75" height="82">
                </div>
                <div class="title">
                    <a href='day3.html'><h1>Day 3 - CodeIgniter</h1></a>
                </div>

            </div>
            <div class="clear"></div>
            <div id="left-container">
                <h2>Topics Covered</h2>
                <?php
                if (isset($day3) && $day3 != NULL) {
                    echo '<ul>';
                    foreach ($day3 as $topic) {
                        echo '<li>' . $topic . '</li>';
                    }
                    echo '</ul>';
                }
                ?>
            </div>

            <div id="right-container">
                <?
                if (isset($constants) && isset($day3) && $day3 != NULL) {
                    echo '<h2>Using Constants</h2>';
                    echo '<h4>CodeIgniter have some default constants </h4>';
                    echo '<ul>';
                    foreach ($constants as $constant) {
                        echo '<li>' . $constant . '</li>';
                    }
                    echo '</ul>';
                    ?>
                    <p><strong>Note :</strong> Since your controller classes will extend the main application controller you must be careful not to name your functions identically to the ones used by that class, otherwise your local functions will override them. Do not name your controller any of these  above reserved constants</p>

                    <p>Declaration of user defined constants in CodeIgniter </p>
                    <ul>
                        <li>Go to application -> config -> constants.php</li>

                        <li>Here, You can declare like below</li>
                        <ul>
                            <li>define('FROM_EMAIL','admin@newsusers.com');</li>
                            <li>define('FROM_NAME','admin');</li>
                            <li>define('MY_EMAIL','vamsi.testmail@gmail.com');</li>
                        </ul>
                        <li>Then, you can call CONSTANTS in Controller , Model or View ,Where ever you want as,</li>
                        <ul><li>$this->email->from(FROM_EMAIL,FROM_NAME);</li></ul>
                        <li>Which is treated as </li>
                        <ul><li>$this->email->from('admin@newsusers.com','admin');</li></ul>
                    </ul>
                <? } elseif (isset($config_class) && isset($day3) && $day3 != NULL) {
                    ?>
                    <h2>Using Config Class</h2>
                    <h4>Config Class</h4>
                    <article>The Config class provides a means to retrieve configuration preferences. These preferences can come from the default config file (<samp>application/config/config.php</samp>) or from your own custom config files.</article>
                    <p>Note: This class is initialized automatically by the system so there is no need to do it manually</p>
                    <h4>Anatomy of a Config File</h4>
                    <p>You can add your own config items to
                        this file, or if you prefer to keep your configuration items separate (assuming you even need config items),
                        simply create your own file and save it in <dfn>config</dfn> folder.</p>

                    <p><strong>Note:</strong> If you do create your own config files use the same format as the primary one, storing your items in
                        an array called  <var>$config</var>. CodeIgniter will intelligently manage these files so there will be no conflict even though
                        the array has the same name (assuming an array index is not named the same as another).</p>

                    <h4>Loading a Config File</h4>

                    <p><strong>Note:</strong> CodeIgniter automatically loads the primary config file (<samp>application/config/config.php</samp>),
                        so you will only need to load a config file if you have created your own.</p>

                    <p>There are two ways to load a config file:</p>

                    <ol><li><strong>Manual Loading</strong>

                            <p>To load one of your custom config files you will use the following function within the <a href="../general/controllers.html">controller</a> that needs it:</p>

                            <code>$this->config->load('<var>filename</var>');</code>

                            <p>Where <var>filename</var> is the name of your config file, without the .php file extension.</p>

                            <p>If you need to load multiple config files normally they will be merged into one master config array.  Name collisions can occur, however, if
                                you have identically named array indexes in different config files.  To avoid collisions you can set the second parameter to <kbd>TRUE</kbd>
                                and each config file will be stored in an array index corresponding to the name of the config file. Example:</p>

                            <code>
                                // Stored in an array with this prototype: <br>// $this->config['blog_settings'] = $config<br />
                                $this->config->load('<var>blog_settings</var>', <kbd>TRUE</kbd>);</code>

                            <p>Please see the section entitled <dfn>Fetching Config Items</dfn> below to learn how to retrieve config items set this way.</p>

                            <p>The third parameter allows you to suppress errors in the event that a config file does not exist:</p>

                            <code>$this->config->load('<var>blog_settings</var>', <dfn>FALSE</dfn>, <kbd>TRUE</kbd>);</code>

                        </li>
                        <li><strong>Auto-loading</strong>

                            <p>If you find that you need a particular config file globally, you can have it loaded automatically by the system.  To do this,
                                open the <strong>autoload.php</strong> file, located at <samp>application/config/autoload.php</samp>, and add your config file as
                                indicated in the file.</p>
                        </li>
                    </ol>


                    <h4>Fetching Config Items</h4>

                    <p>To retrieve an item from your config file, use the following function:</p>

                    <code>$this->config->item('<var>item name</var>');</code>

                    <p>Where <var>item name</var> is the $config array index you want to retrieve. For example, to fetch your language choice you'll do this:</p>

                    <code>$lang = $this->config->item('language');</code>

                    <p>The function returns FALSE (boolean) if the item you are trying to fetch does not exist.</p>

                    <p>If you are using the second parameter of the <kbd>$this->config->load</kbd> function in order to assign your config items to a specific index
                        you can retrieve it by specifying the index name in the second parameter of the <kbd>$this->config->item()</kbd> function.  Example:</p>

                    <code>
                        // Loads a config file named blog_settings.php and assigns it to an index named "blog_settings"<br />
                        $this->config->load('<var>blog_settings</var>', <kbd>TRUE</kbd>);<br /><br />

                        // Retrieve a config item named site_name contained within the blog_settings array<br />
                        $site_name = $this->config->item('<dfn>site_name</dfn>', '<var>blog_settings</var>');<br /><br />

                        // An alternate way to specify the same item:<br />
                        $blog_config = $this->config->item('<var>blog_settings</var>');<br />
                        $site_name = $blog_config['site_name'];</code>

                    <h4>Setting a Config Item</h4>

                    <p>If you would like to dynamically set a config item or change an existing one, you can do so using:</p>

                    <code>$this->config->set_item('<var>item_name</var>', '<var>item_value</var>');</code>

                    <p>Where <var>item_name</var> is the $config array index you want to change, and <var>item_value</var> is its value.</p>


                    <h4>Environments</h4>

                    <p>
                        You may load different configuration files depending on the current environment.
                        The <kbd>ENVIRONMENT</kbd> constant is defined in index.php, and is described
                        in detail in the <a href="../general/environments.html">Handling Environments</a>
                        section.
                    </p>

                    <p>
                        To create an environment-specific configuration file,
                        create or copy a configuration file in application/config/&#123;ENVIRONMENT&#125;/&#123;FILENAME&#125;.php
                    </p>

                    <p>For example, to create a production-only config.php, you would:</p>

                    <ol>
                        <li>Create the directory application/config/production/</li>
                        <li>Copy your existing config.php into the above directory</li>
                        <li>Edit application/config/production/config.php so it contains your production settings</li>
                    </ol>

                    <p>
                        When you set the <kbd>ENVIRONMENT</kbd> constant to 'production', the settings
                        for your new production-only config.php will be loaded.
                    </p>

                    <p>You can place the following configuration files in environment-specific folders:</p>

                    <ul>
                        <li>Default CodeIgniter configuration files</li>
                        <li>Your own custom configuration files</li>
                    </ul>

                    <p><strong>Note:</strong> CodeIgniter always tries to load the configuration files for the current environment first. If the file does not exist, the global config file (i.e., the one in <samp>application/config/</samp>) is loaded. This means you are not obligated to place <strong>all</strong> of your configuration files in an environment folder &minus; only the files that change per environment.</p>

                    <h4>Helper Functions</h4>

                    <p>The config class has the following helper functions:</p>

                    <h4>$this->config->site_url();</h4>
                    <p>This function retrieves the URL to your site, along with the "index" value you've specified in the config file.</p>

                    <h4>$this->config->base_url();</h4>
                    <p>This function retrieves the URL to your site, plus an optional path such as to a stylesheet or image.</p>

                    <p>The two functions above are normally accessed via the corresponding functions in the <a href="../helpers/url_helper.html">URL Helper.</a></p>

                    <h4>$this->config->system_url();</h4>
                    <p>This function retrieves the URL to your <dfn>system folder</dfn>.</p>

                <? } elseif (isset($database_class) && isset($day3) && $day3 != NULL) { ?>
                    <h2>Using Database Class</h2>
                    <article>CodeIgniter comes with a full-featured and very fast abstracted database class that supports both traditional structures and Active Record patterns. The database functions offer clear, simple syntax.</article>
                    <ul>
                        <?php
                        foreach ($database_class as $topic) {
                            echo '<li>' . $topic . '</li>';
                        }
                        ?>
                    </ul>
                    <? } elseif (isset($doctrine) && isset($day3) && $day3 != NULL) {
                    ?>
                    <h2>Doctrine </h2>
                    <article>Before we get started, first let me explain the reason I am doing this. Doctrine is an Object Relational Mapper for PHP. It’s OK if you don’t know this term. It basically means that you can map your database tables to classes in your web application. And instances of these classes (i.e. objects) represent records in the database.
                        This makes it very easy to create, read, update and delete records from the database, while handling them almost like regular objects, so you don’t even have to write any queries. It will also handle relationships between your tables.
                        Here is an illustration I put together, that might give you a visual picture.</article>
                    <p>If you would like more info right now, <a class="various" data-fancybox-type="iframe" href='http://www.phpandstuff.com/articles/codeigniter-doctrine-from-scratch-day-1-install-and-setup'>Doctrine</a></p>
                    <img src='http://192.168.42.10/CodeIgniter/images/ci_doctrine_day1.png'>
                <?php } else {
                    ?>
                    <p>In Previous sessions we covered topics</p>
                    <ul>
                        <li><a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/index.html">What is CodeIgniter</a></li>
                        <li><a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/installation/index.html">How To Install CodeIgniter</a></li>
                        <li><a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/overview/mvc.html">What is MVC (Model - View - Controller)</a></li>
                        <li><a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/form_validation.html">Implementing validation using Form Validation Class</a></li>
                    </ul>
                    <article>Now, we going learn <b>Constants, Config Class , Database Class &  Doctrine</b></article>
                    <p>Please go through the links for in detail..</p>
                <? } ?>
            </div>
            <div class="clear"></div>
            <div class="copyright"> &copy; 2003-2013 <a href="http://www.hiddenbrains.com/" title="Web and Mobile App Development Company in India">Hidden Brains InfoTech,</a> India </div>
        </div>
    </body>
</html>
