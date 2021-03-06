<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uriving extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Uriving_model');
            $this -> load -> helper(array('form', 'url'));
        }
        
        public function uriving_add()
        {
            parse_str($_POST['str'], $arr);

            $data['urivingtitle'] = $arr['urivingtitle'];
            $data['day'] = $arr['day'];
            $data['season'] = $arr['season'];
            $data['price'] = $arr['price'];
            $data['cit_id'] = $arr['cit_id'];
            $data['text'] = $arr['text'];
            $data['temperature'] = $arr['temperature'];
            $data['schedule'] = $arr['editorValue'];
            $data['kilometers'] = $arr['kilometers'];
            $data['status'] = $arr['status'];
            $data['image'] = $arr['image'];
            $data['image_two'] = $arr['image_two'];
            $data['time'] = date('Y-m-d H:i:s');

            if($arr['urivingtitle'] !== '' && $arr['image'] !==''){

                if($this->Uriving_model->add_uriving($data))
                {
                    echo 200;

                }else{

                    echo 300;

                }
            }else{
                echo 300;
            }

        }

        public function uriving_del()
        {
            $id = $_POST['id'];

            if ($this -> Uriving_model -> edit_uriving($id))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }

        public function uriving_status()
        {
            $data['id'] = $_POST['id'];
            $data['status'] = $_POST['status'];
            if($this->Uriving_model->update_status($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }

        public function uriving_edit()
        {
            parse_str($_POST['str'], $arr);
            $data['id'] = $arr['id'];
            $data['cit_id'] = $arr['cit_id'];
            $data['status'] = $arr['status'];
            $data['time'] = date('Y-m-d H:i:s');
            $data['price'] = $arr['price'];
            if(!isset($arr['lang'])){
                $data['urivingtitle'] = $arr['urivingtitle'];
                $data['day'] = $arr['day'];
                $data['price'] = $arr['price'];
                $data['text'] = $arr['text'];
                $data['season'] = $arr['season'];
                $data['temperature'] = $arr['temperature'];
                $data['schedule'] = $arr['editorValue'];
                $data['kilometers'] = $arr['kilometers'];
            }else{
                $data['urivingtitle_en'] = $arr['urivingtitle'];
                $data['day_en'] = $arr['day'];
                $data['text_en'] = $arr['text'];
                $data['season_en'] = $arr['season'];
                $data['temperature_en'] = $arr['temperature'];
                $data['schedule_en'] = $arr['editorValue'];
                $data['kilometers_en'] = $arr['kilometers'];
            }
            if(!empty($arr['image'])){
                $data['image'] = $arr['image'];
            }
            if(!empty($arr['image_two'])){
                $data['image_two'] = $arr['image_two'];
            }
            if($this->Uriving_model->update_edit($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }
        
    }