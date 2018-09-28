<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_info extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/User_info_model');
            $this -> load -> helper(array('form', 'url'));
        }

        public function user_info__del()
        {
            $id['id'] = $_POST['id'];

            if($this->User_info_model->del_name($id))
            {
                echo 200;

            }else{

                echo 404;
            }
        }
        
    }