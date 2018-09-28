<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Announcement extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Announcement_model');
            $this -> load -> helper(array('form', 'url'));
        }
        
        public function announcement_add()
        {
            parse_str($_POST['str'], $arr);

            $data['text'] = $arr['text'];

            if($arr['text'] !== ''){

                if($this->Announcement_model->add_name($data))
                {
                    echo 200;

                }else{

                    echo 300;

                }
            }else{
                echo 300;
            }

        }

        public function announcement_del()
        {
            $id['id'] = $_POST['id'];

            if ($this -> Announcement_model -> del_name($id))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }


        public function announcement_edit()
        {
            parse_str($_POST['str'], $arr);

            $data['id'] = $arr['id'];
            if(!isset($arr['lang'])){
                $data['text'] = $arr['text'];
            }else{
                $data['text_en'] = $arr['text'];
            }
            if($this->Announcement_model->edit_name($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }
        
    }