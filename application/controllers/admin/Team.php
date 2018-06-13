<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Team_model');
            $this -> load -> helper(array('form', 'url'));
        }
        
        public function team_add()
        {
            parse_str($_POST['str'], $arr);

            $data['teamtitle'] = $arr['teamtitle'];
            $data['day'] = $arr['day'];
            $data['season'] = $arr['season'];
            $data['price'] = $arr['price'];
            $data['text'] = $arr['text'];
            $data['temperature'] = $arr['temperature'];
            $data['schedule'] = $arr['editorValue'];
            $data['kilometers'] = $arr['kilometers'];
            $data['status'] = $arr['status'];
            $data['image'] = $arr['image'];
            $data['time'] = date('Y-m-d H:i:s');

            if($arr['teamtitle'] !== '' && $arr['image'] !==''){

                if($this->Team_model->add_team($data))
                {
                    echo 200;

                }else{

                    echo 300;

                }
            }else{
                echo 300;
            }

        }

        public function team_del()
        {
            $id = $_POST['id'];

            if ($this -> Team_model -> edit_team($id))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }

        public function team_status()
        {
            $data['id'] = $_POST['id'];
            $data['status'] = $_POST['status'];
            if($this->Team_model->update_status($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }

        public function team_edit()
        {
            parse_str($_POST['str'], $arr);

            $data['id'] = $arr['id'];
            $data['teamtitle'] = $arr['teamtitle'];
            $data['day'] = $arr['day'];
            $data['price'] = $arr['price'];
            $data['text'] = $arr['text'];
            $data['season'] = $arr['season'];
            $data['temperature'] = $arr['temperature'];
            $data['schedule'] = $arr['editorValue'];
            $data['kilometers'] = $arr['kilometers'];
            $data['status'] = $arr['status'];
            $data['time'] = date('Y-m-d H:i:s');

            if(!empty($arr['image'])){
                $data['image'] = $arr['image'];
            }
            if($this->Team_model->update_edit($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }
        
    }