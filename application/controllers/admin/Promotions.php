<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotions extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Promotions_model');
            $this -> load -> helper(array('form', 'url'));
        }
        
        public function promotions_add()
        {
            parse_str($_POST['str'], $arr);

            $data['promtitle'] = $arr['promtitle'];
            $data['price'] = $arr['price'];
            $data['worth'] = $arr['worth'];
            $data['discount'] = $arr['discount'];
            $data['save'] = $arr['save'];
            $data['booking'] = $arr['booking'];
            $data['during'] = $arr['during'];
            $data['thecar'] = $arr['thecar'];
            $data['vehicles'] = $arr['vehicles'];
            $data['day'] = $arr['day'];
            $data['terms'] = $arr['terms'];
            $data['city'] = $arr['city'];
            $data['image'] = $arr['image'];
            $data['cartime'] = $arr['cartime'];
            $data['text'] = $arr['text'];
            $data['time'] = date('Y-m-d H:i:s');
            if($arr['promtitle'] !== '' && $arr['image'] !==''){
                if($this->Promotions_model->add_promotions($data))
                {
                    echo 200;

                }else{

                    echo 300;

                }
            }else{
                echo 300;
            }

        }

        public function promotions_del()
        {
            $id = $_POST['id'];

            if ($this -> Promotions_model -> edit_category($id))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }

        public function promotions_status()
        {
            $data['id'] = $_POST['id'];
            $data['status'] = $_POST['status'];
            if($this->Promotions_model->update_status($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }

        public function promotions_edit()
        {
            parse_str($_POST['str'], $arr);
            $data['time'] = date('Y-m-d H:i:s');
            $data['id'] = $arr['id'];
            if(!isset($arr['lang'])){
                $data['promtitle'] = $arr['promtitle'];
                $data['price'] = $arr['price'];
                $data['worth'] = $arr['worth'];
                $data['discount'] = $arr['discount'];
                $data['save'] = $arr['save'];
                $data['booking'] = $arr['booking'];
                $data['during'] = $arr['during'];
                $data['thecar'] = $arr['thecar'];
                $data['vehicles'] = $arr['vehicles'];
                $data['cartime'] = $arr['cartime'];
                $data['day'] = $arr['day'];
                $data['terms'] = $arr['terms'];
                $data['city'] = $arr['city'];
                $data['text'] = $arr['text'];
            }else{
                $data['promtitle_en'] = $arr['promtitle'];
                $data['price_en'] = $arr['price'];
                $data['worth_en'] = $arr['worth'];
                $data['discount_en'] = $arr['discount'];
                $data['save_en'] = $arr['save'];
                $data['booking_en'] = $arr['booking'];
                $data['during_en'] = $arr['during'];
                $data['thecar_en'] = $arr['thecar'];
                $data['vehicles_en'] = $arr['vehicles'];
                $data['cartime_en'] = $arr['cartime'];
                $data['day_en'] = $arr['day'];
                $data['terms_en'] = $arr['terms'];
                $data['city_en'] = $arr['city'];
                $data['text_en'] = $arr['text'];
            }
            if(!empty($arr['image'])){
                $data['image'] = $arr['image'];
            }
            if($this->Promotions_model->update_edit($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }
        
    }