<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Video_model');
            $this -> load -> helper(array('form', 'url'));
        }
        
        public function video_add()
        {
            parse_str($_POST['str'], $arr);

            $data['team_id'] = $arr['team_id'];
            $data['video'] = $arr['editorValue'];

            if($arr['team_id'] !== ''){

                if($this->Video_model->add_name($data))
                {
                    echo 200;

                }else{

                    echo 300;

                }
            }else{
                echo 300;
            }

        }

        public function video_del()
        {
            $id['video_id'] = $_POST['id'];

            if ($this -> Video_model -> del_name($id))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }


        public function video_edit()
        {
            parse_str($_POST['str'], $arr);

            $data['video_id'] = $arr['id'];
            $data['team_id'] = $arr['team_id'];
            $data['video'] = $arr['editorValue'];

            if($this->Video_model->edit_name($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }
        
    }