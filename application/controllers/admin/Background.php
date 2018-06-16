<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Background extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Background_model');
            $this -> load -> helper(array('form', 'url'));
        }
        
        public function background_edit()
        {
            parse_str($_POST['str'], $arr);

            $data['id'] = $arr['id'];

            if($arr['id'] == 1){

                $data['title'] = $arr['title'];

            }elseif ($arr['id'] == 2){

                $data['price'] = $arr['price'];
                $data['head'] = $arr['head'];
                $data['foot'] = $arr['foot'];

            }elseif ($arr['id'] == 3){

                $data['head'] = $arr['head'];
                $data['foot'] = $arr['foot'];
                $data['central'] = $arr['central'];
            }

            if(!empty($arr['image'])){

                $data['image'] = $arr['image'];

            }

            if($this->Background_model->edit_name($data))
            {
                echo 200;

            }else{

                echo 300;

            }


        }

        
    }