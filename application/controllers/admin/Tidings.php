<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tidings extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Tidings_model');
            $this -> load -> helper(array('form', 'url'));
        }
        
        public function tidings_add()
        {
            parse_str($_POST['str'], $arr);

            $data['title'] = $arr['title'];
            $data['text'] = $arr['editorValue'];

            if($arr['title'] !== ''){

                if($this->Tidings_model->add_name($data))
                {
                    echo 200;

                }else{

                    echo 300;

                }
            }else{
                echo 300;
            }

        }

        public function tidings_del()
        {
            $id['id'] = $_POST['id'];

            if ($this -> Tidings_model -> del_name($id))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }


        public function tidings_edit()
        {
            parse_str($_POST['str'], $arr);

            $data['id'] = $arr['id'];
            if(!isset($arr['lang'])){
                $data['title'] = $arr['title'];
                $data['text'] = $arr['editorValue'];
            }else{
                $data['title_en'] = $arr['title'];
                $data['text_en'] = $arr['editorValue'];
            }
            if($this->Tidings_model->edit_name($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }
        
    }