<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Navigation extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Navigation_model');
            $this -> load -> helper(array('form', 'url'));
        }
        
        public function navigation_edit()
        {
            parse_str($_POST['str'], $arr);
            if(!isset($arr['lang'])){
                $data['navigation_id'] = $arr['navigation_id'];
                $data['navigation_name'] = $arr['navigation_name'];
                $data['lease_name'] = $arr['lease_name'];
                $data['hotel_name'] = $arr['hotel_name'];
                $data['promotions_name'] = $arr['promotions_name'];
                $data['activity_name'] = $arr['activity_name'];
                $data['city_name'] = $arr['city_name'];
                $data['online_name'] = $arr['online_name'];
            }else{
                $data['navigation_id'] = $arr['navigation_id'];
                $data['navigation_name_en'] = $arr['navigation_name'];
                $data['lease_name_en'] = $arr['lease_name'];
                $data['hotel_name_en'] = $arr['hotel_name'];
                $data['promotions_name_en'] = $arr['promotions_name'];
                $data['activity_name_en'] = $arr['activity_name'];
                $data['city_name_en'] = $arr['city_name'];
                $data['online_name_en'] = $arr['online_name'];
                $data['lang'] = $arr['lang'];
            }
            if($arr['navigation_name'] !== ''){

                if($this->Navigation_model->edit_name($data))
                {
                    echo 200;
                }else{
                    echo 300;
                }
            }else{
                echo 300;
            }
        }
    }