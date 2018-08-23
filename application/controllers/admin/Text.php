<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Text extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Text_model');
            $this -> load -> helper(array('form', 'url'));
        }
        //编辑
        public function text_edit ()
        {
            parse_str($_POST['str'], $arr);
            $data['id'] = $arr['id'];
            $data['time'] = date('Y-m-d H:i:s');
            if(!isset($arr['lang'])){
                $data['title'] = $arr['title'];
                $data['text'] = $arr['editorValue'];
            }else{
                $data['title_en'] = $arr['title'];
                $data['text_en'] = $arr['editorValue'];
            }
            if(!empty($arr['image'])){
                $data['image'] = $arr['image'];
            }
            if ($arr['title'] !== '')
            {

                if ($this -> Text_model -> edit_name( $data))
                {

                    echo 200;
                }
                else
                {

                    echo 404;
                }

            }
            else
            {

                echo 500;

            }

        }

    }