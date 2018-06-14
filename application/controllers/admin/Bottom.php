<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bottom extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Bottom_model');
            $this -> load -> helper(array('form', 'url'));
        }
        
        public function bottom_edit()
        {
            parse_str($_POST['str'], $arr);

            $data['bottom_id'] = $arr['bottom_id'];
            $data['bottom_text'] = $arr['editorValue'];

            if($data['bottom_text'] !== ''){

                if($this->Bottom_model->edit_name($data))
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