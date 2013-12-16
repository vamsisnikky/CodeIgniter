<?php
class MY_Email extends CI_Email {
    
    public function __construct()
            {
                parent::__construct();
            }
    public  function delivary_report(){
        return "Your mail sent Succesfully";
    }
    public  function failed_report(){
        return "Mail not sent, Please try agin";
    }
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
