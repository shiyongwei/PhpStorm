<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Navigation extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Navigation_model');
            $this -> load -> helper(array('form', 'url'));
        }
        
        public function navigation_edit()
        {
            parse_str($_POST['str'], $arr);

            $data['navigation_name'] = $arr['navigation_name'];
            $data['navigation_id'] = $arr['navigation_id'];

            if($arr['navigation_name'] !== ''){

                if($this->Navigation_model->edit_name($data))
                {
                    echo 200;

                }else{

                    echo 300;

                }
            }else{
                echo 300;
            }

        }

        
    }