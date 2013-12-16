<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbpractice
 *
 * @author hb
 */
class Dbpractice EXTENDS CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
//        $this->load->model('model_dbpractice');
    }

    public function index() {

        $result_obj = $this->model_dbpractice->get_users_object();
        $result_arr = $this->model_dbpractice->get_users_array();
        $this->load->view('pages/view_dbpractice', array('data_obj' => $result_obj, 'data_arr' => $result_arr));
    }

    public function test_rows() {
        $result_rows = $this->model_dbpractice->get_test_users();
        $this->load->view('pages/view_dbpractice', array('data_rows' => $result_rows['results'], 'count' => $result_rows['count']));
    }

    public function get_single_row() {
        $result_single_row = $this->model_dbpractice->get_single_row();
        $this->load->view('pages/view_dbpractice', array('data_single_row' => $result_single_row));
    }

    public function get_news_users() {
        $result_get = $this->model_dbpractice->get_users();
        $this->load->view('pages/view_dbpractice', array('data_get' => $result_get));
    }

    public function get_records_blob() {
        $result_get = $this->model_dbpractice->get_records_blob();
        $this->load->view('pages/view_dbpractice', array('data_get_blob' => $result_get));
    }

    public function ftp_list_files() {
        $this->load->library('ftp');
        $config['hostname'] = "http://iphone5snikky.netne.net";
        $config['username'] = "a2307422";
        $config['password'] = "vamsi543";
        $config['passive'] = FALSE;
        $config['debug'] = TRUE;

        $this->ftp->connect($config);
        //checks whether a file is existing in local or not befor uploading into server
        $locpath = "./images/404error.jpg";
        if (!file_exists($locpath)) {
            echo 'error';
        }
        //$this->ftp->upload($locpath, '/public_html/images/404.error.jpg','ascii', 0777);//IT UPLOADS A A FILE
        //$this->ftp->download('/public_html/images/bg.gif', '/var/www/CodeIgniter/images/bg.gif'); // it downloads a file from remote server
        echo '<pre>';
        print_r($this->ftp->list_files('/public_html/'));
        //$this->ftp->move('/public_html/bg.gif','/public_html/images/bg.gif');
        echo '<pre>';
        print_r($this->ftp->list_files('/public_html/images'));
        $this->ftp->close();
    }

    public function country() {
        $country = array("Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe");
        $this->model_dbpractice->insert_country($country);
    }

    public function state() {
        $states = array("Andaman and Nicobar Islands", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttaranchal", "Uttar Pradesh", "West Bengal");
        $this->model_dbpractice->insert_state($states);
    }

    public function listing() {
        $this->load->view("pages/dropdown");
    }

    public function captcha() {

        $this->load->helper('captcha');
        $vals = array(
            'img_path' => './captcha/',
            'img_url' => 'http://localhost/CodeIgniter/captcha/',
            'img_width' => '150',
            'img_height' => 30,
            'expiration' => 7200
        );

        $cap = create_captcha($vals);

        return $cap;
    }

    public function login() {

        $this->load->library('session');
        $this->load->helper('captcha');

        $vals = array(
            'img_path' => './captcha/',
            'img_url' => 'http://localhost/CodeIgniter/captcha/',
            'img_width' => '150',
            'img_height' => 30,
            'expiration' => 5
        );

        $cap = create_captcha($vals);

        if (isset($_POST) & $_POST != NULL) {
            $max_attempts = 3;
            if ($this->model_dbpractice->login_attempt_count() > $max_attempts) {

                $this->load->view('pages/view_login', array('captcha' => $cap));
                if (isset($_POST['login']) && isset($_POST['captcha'])) {
                    $data = $_POST;
                    $results = $this->model_dbpractice->login($data);
                    if ($results == 1) {
                        $this->session->set_userdata('username', $data['username']);
                        $username = $this->session->userdata('username');
                        $this->load->view('welcome_message', array('user' => $username));
                    } else {
                        $this->load->view('pages/view_login', array('fail' => 'yes', 'captcha' => $cap));
                    }
                }
            } else {
                //post captcha Something else
                if (isset($_POST['login'])) {
                    $data = $_POST;
                    $results = $this->model_dbpractice->login($data);
                    if ($results == 1) {
                        $this->session->set_userdata('username', $data['username']);
                        $username = $this->session->userdata('username');
                        $this->load->view('welcome_message', array('user' => $username));
                    } else {
                        $this->load->view('pages/view_login', array('fail' => 'yes'));
                    }
                }
            }
        } else {
            $this->load->view('pages/view_login');
        }
    }

    public function get_data_host() {

        $this->load->model('model_dbpractice', 'other_host');
        $result = $this->other_host->get_data_host();
        $data = array('employees' => $result);
        $this->load->view('pages/view_dbpractice', $data);
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
        echo str_shuffle($randomCode);
        $this->get_data_host();
    }
    //function getting codeigniter version
    public function get_version() {

        echo CI_VERSION; // echoes something like 1.7.1
    }
    
    public function url(){
        echo base_url().'</br>';
        echo site_url();
    }

}

?>
