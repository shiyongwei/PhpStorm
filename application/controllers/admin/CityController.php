<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CityController extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/City_model');
            $this -> load -> helper(array('form', 'url'));

        }

        public function city_add()
        {
            parse_str($_POST['str'], $arr);

            $data['cit_name'] = $arr['cit_name'];
            $data['logo'] = $arr['image'];
            $data['address'] = $arr['address'];
            $data['information'] = $arr['information'];
            $data['time'] = $arr['time'];
            $data['status'] = $arr['status'];
            $data['valder'] = $arr['editorValue'];
            $data['text'] = $arr['text'];
            if ($arr['cit_name'] !== '')
            {
                if ($this -> City_model -> getAll($data))
                {

                    echo 404;

                }
                else
                {

                    if ($this -> City_model -> add_city($data))
                    {

                        echo 200;
                    }
                    else
                    {

                        echo 444;
                    }
                }

            }
            else
            {
                echo 500;
            }


        }

        public function city_edit()
        {
            parse_str($_POST['str'],$arr);

            $data['cit_id'] = $arr['id'];
            $data['status'] = $arr['status'];
            if(!isset($arr['lang'])){
                $data['cit_name'] = $arr['cit_name'];
                $data['address'] = $arr['address'];
                $data['information'] = $arr['information'];
                $data['time'] = $arr['time'];
                $data['valder'] = $arr['editorValue'];
                $data['text'] = $arr['text'];
            }else{
                $data['cit_name_en'] = $arr['cit_name'];
                $data['address_en'] = $arr['address'];
                $data['information_en'] = $arr['information'];
                $data['time_en'] = $arr['time'];
                $data['valder_en'] = $arr['editorValue'];
                $data['text_en'] = $arr['text'];
            }
            if(!empty($arr['image'])){
                $data['logo'] = $arr['image'];
            }

            # 进行更新
            if ($arr['cit_name'] !== '')
            {
                if ($this -> City_model -> update_city($data))
                {
                    echo 200;
                }
                else
                {
                    echo 444;
                }
            }else
            {
                echo 444;
            }
        }

        public function city_del()
        {
            $data = $_POST['id'];

            if ($this -> City_model -> del_city($data))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }

        }

        public function city_status()
        {
            $data['id'] = $_POST['id'];
            $data['status'] = $_POST['status'];
            if($this->City_model->update_status($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }
    }