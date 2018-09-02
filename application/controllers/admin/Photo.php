<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Photo_model');
            $this -> load -> helper(array('form', 'url'));
        }
        
        public function photo_add()
        {
            parse_str($_POST['str'], $arr);

            $data['team_id'] = $arr['team_id'];
            $data['image'] = $arr['editorValue'];

            if($arr['team_id'] !== ''){

                if($this->Photo_model->add_name($data))
                {
                    echo 200;

                }else{

                    echo 300;

                }
            }else{
                echo 300;
            }

        }

        public function photo_del()
        {
            $id['photo_id'] = $_POST['id'];

            if ($this -> Photo_model -> del_name($id))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }


        public function photo_edit()
        {
            parse_str($_POST['str'], $arr);

            $data['photo_id'] = $arr['id'];
            $data['team_id'] = $arr['team_id'];
            $data['image'] = $arr['editorValue'];

            if($this->Photo_model->edit_name($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }
        
    }