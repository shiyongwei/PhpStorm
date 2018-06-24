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

        //添加
        public function text_add ()
        {
            parse_str($_POST['str'], $arr);

            $data['title'] = $arr['title'];

            $data['text'] = $arr['editorValue'];

            $data['time'] = date('Y-m-d H:i:s');

            if ($arr['title'] !== '')
            {

                    if ($this -> Text_model -> add_name($data))
                    {

                        echo 200;
                    }
                    else
                    {

                        echo 404;
                    }
            }
        }
        //删除
        public function text_del ()
        {


            $data['id'] = $_POST['id'];

            if ($this -> Text_model -> del_name($data))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }
        //编辑
        public function text_edit ()
        {
            parse_str($_POST['str'], $arr);

            $data['id'] = $arr['id'];

            $data['title'] = $arr['title'];

            $data['text'] = $arr['editorValue'];

            $data['time'] = date('Y-m-d H:i:s');

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