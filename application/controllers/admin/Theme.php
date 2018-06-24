<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Theme extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Theme_model');
            $this -> load -> helper(array('form', 'url'));
        }

        //编辑
        public function theme_edit ()
        {
            parse_str($_POST['str'], $arr);

            $data['id'] = $arr['id'];

            $data['name'] = $arr['name'];

            if ($arr['name'] !== '')
            {

                if ($this -> Theme_model -> edit_name( $data))
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