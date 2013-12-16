<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */
// ------------------------------------------------------------------------

/**
 * CodeIgniter Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/general/controllers.html
 */
class MY_Controller extends CI_Controller {

    private static $instance;

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }

    public static function &get_instance() {
        return self::$instance;
    }

    public function testfunction() {
        return "this is test code from new hello controller extending Core CI Controller from system";
    }

    public function randomPassword() {
        $lowercase = "qwertyuiopasdfghjklzxcvbnm";
        $uppercase = "ASDFGHJKLZXCVBNMQWERTYUIOP";
        $numbers = "1234567890";
        $specialcharacters = "$@#";
        $randomCode = "";
        $length = 4;
        mt_srand(crc32(microtime()));
        $max = strlen($lowercase) - 1;
        for ($x = 0; $x < abs($length / 2); $x++) {
            $randomCode .= $lowercase{mt_rand(0, $max)};
        }
        $max = strlen($uppercase) - 1;
        for ($x = 0; $x < abs($length / 2); $x++) {
            $randomCode .= $uppercase{mt_rand(0, $max)};
        }
        $max = strlen($specialcharacters) - 1;
        for ($x = 0; $x < abs($length / 2); $x++) {
            $randomCode .= $specialcharacters{mt_rand(0, $max)};
        }
        $max = strlen($numbers) - 1;
        for ($x = 0; $x < abs($length / 2); $x++) {
            $randomCode .= $numbers{mt_rand(0, $max)};
        }
       return str_shuffle($randomCode);
    }

}

// END Controller class

/* End of file Controller.php */
/* Location: ./system/core/Controller.php */