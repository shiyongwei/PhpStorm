<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Side extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Side_model');
            $this -> load -> helper(array('form', 'url'));
        }
        
        public function side_edit()
        {
            parse_str($_POST['str'], $arr);

            $data['id'] = $arr['id'];
            $data['title'] = $arr['title'];
            $data['head'] = $arr['head'];
            $data['foot'] = $arr['foot'];
            $data['central'] = $arr['central'];

            if(!empty($arr['image'])){

                $data['image'] = $arr['image'];

            }

            if($this->Side_model->edit_name($data))
            {
                echo 200;

            }else{

                echo 300;

            }


        }

        
    }