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
        $this->load->model('model_dbpractice');
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

//    public function city() {
//        $city_ap = "Adilabad                         
//Anantapur
//Chittoor
//Kakinada
//Guntur
//Hyderabad
//Karimnagar
//Khammam
//Krishna
//Kurnool
//Mahbubnagar
//Medak
//Nalgonda
//Nizamabad
//Ongole
//Hyderabad
//Srikakulam
//Nellore
//Visakhapatnam
//Vizianagaram
//Warangal
//Eluru
//Kadapa";
//        $city_gj = "Ahmedabad
//Amreli district
//Anand
//Banaskantha
//Bharuch
//Bhavnagar
//Dahod
//The Dangs
//Gandhinagar
//Jamnagar
//Junagadh
//Kutch
//Kheda
//Mehsana
//Narmada
//Navsari
//Patan
//Panchmahal
//Porbandar
//Rajkot
//Sabarkantha
//Surendranagar
//Surat
//Vyara
//Vadodara
//Valsad";
//        $city_array = preg_split("/[\s,]+/", $city_gj);
//                $this->model_dbpractice->insert_city($city_array);
//
//    }
    
    public function listing(){
        $this->load->view("pages/dropdown");
    }

}


?>
