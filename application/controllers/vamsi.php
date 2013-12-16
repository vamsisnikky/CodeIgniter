<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of vamsi
 *
 * @author hb
 */
class Vamsi extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function topics_day3() {
        $day3 = array();
        array_push($day3, '<b><a href="constants.html">Using Constants</a> </b>');
        array_push($day3, '<b><a href="config.html">Using Config Class</a> </b>');
        array_push($day3, '<b><a href="database.html">Using Database Class</a> </b>');
        array_push($day3, '<b><a href="doctrine.html">Explain Doctrine</a> </b>');
        return $day3;
    }

    public function day3() {
        $day3 = $this->topics_day3();
        $this->load->view('pages/view_day3', array('day3' => $day3));
    }

    public function constants() {
        $day3 = $this->topics_day3();
        $constants = array();
        $str = 'ENVIRONMENT EXT FCPATH SELF BASEPATH APPPATH CI_VERSION FILE_READ_MODE FILE_WRITE_MODE DIR_READ_MODE DIR_WRITE_MODE
 FOPEN_READ
 FOPEN_READ_WRITE
 FOPEN_WRITE_CREATE_DESTRUCTIVE
 FOPEN_READ_WRITE_CREATE_DESTRUCTIVE
 FOPEN_WRITE_CREATE
 FOPEN_READ_WRITE_CREATE
 FOPEN_WRITE_CREATE_STRICT
 FOPEN_READ_WRITE_CREATE_STRICT';
        $constants = explode(' ', $str);

        $this->load->view('pages/view_day3', array('constants' => $constants, 'day3' => $day3));
    }

    public function config_class() {
        $day3 = $this->topics_day3();
        $config_class = array();
        $this->load->view('pages/view_day3', array('config_class' => $config_class, 'day3' => $day3));
    }

    public function database_class() {
        $day3 = $this->topics_day3();
        $database_class = array();
        array_push($database_class, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/database/examples.html">Quick Start:  Usage Examples</a>');
        array_push($database_class, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/database/configuration.html">Database Configuration</a>');
        array_push($database_class, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/database/connecting.html">Connecting to a Database</a>');
        array_push($database_class, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/database/queries.html">Running Queries</a>');
        array_push($database_class, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/database/results.html">Generating Query Results</a>');
        array_push($database_class, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/database/helpers.html">Query Helper Functions</a>');
        array_push($database_class, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/database/active_record.html">Active Record Class</a>');
        array_push($database_class, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/database/transactions.html">Transactions</a>');
        array_push($database_class, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/database/table_data.html">Table MetaData</a>');
        array_push($database_class, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/database/fields.html">Field MetaData</a>');
        array_push($database_class, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/database/call_function.html">Custom Function Calls</a>');
        array_push($database_class, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/database/caching.html">Query Caching</a>');
        array_push($database_class, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/database/forge.html">Database manipulation with Database Forge</a>');
        array_push($database_class, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/database/utilities.html">Database Utilities Class</a>');
        $this->load->view('pages/view_day3', array('database_class' => $database_class, 'day3' => $day3));
    }

    public function doctrine() {
        $day3 = $this->topics_day3();
        $doctrine = array();
        $this->load->view('pages/view_day3', array('doctrine' => $doctrine, 'day3' => $day3));
    }

    public function topics_day8() {
        $day8 = array();
        array_push($day8, '<b><a href="libraries.html">Usage of core libraries</a> </b>');
        array_push($day8, '<b><a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/general/creating_libraries.html">Creating custom libraries</a> </b>');
        return $day8;
    }

    public function day8() {
        $day8 = $this->topics_day8();
        $this->load->view('pages/view_day8', array('day8' => $day8));
    }

    public function core_library() {
        $day8 = $this->topics_day8();
        $lib = array();
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/calendar.html">Calender</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/cart.html">Cart</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/general/drivers.html">Drivers</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/email.html">Email</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/encryption.html">Encrypt</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/form_validation.html">Form Validation</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/ftp.html">FTP</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/image_lib.html">Image Library</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/javascript.html">Javascript</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/general/errors.html">Log</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/migration.html">Migration</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/pagination.html">Pagination</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/parser.html">Template Parser</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/general/profiling.html">Profiler</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/sessions.html">Session</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/security.html">Security (SHA1)</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/table.html">Table</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/trackback.html">Trackback</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/typography.html">Typography</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/unit_testing.html">Unit Test</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/xmlrpc.html">Xmlrpc</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/xmlrpc.html">Xmlrpcs</a>');
        array_push($lib, '<a class="various" data-fancybox-type="iframe" href="http://ellislab.com/codeigniter/user-guide/libraries/zip.html">Zip Encoding</a>');
        $this->load->view('pages/view_day8', array('day8' => $day8,'lib'=>$lib));
    }

    public function custom_library() {
        $day8 = $this->topics_day8();
        $this->load->view('pages/view_day8', array('day8' => $day8));
    }

}

?>
