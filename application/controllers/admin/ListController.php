<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListController extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/List_model');
            $this -> load -> helper(array('form', 'url'));
        }
        
        public function list_add()
        {
            parse_str($_POST['str'], $arr);

            $data['category'] = $arr['category'];
            $data['brand'] = $arr['brand'];
            $data['productitle'] = $arr['productitle'];
            $data['sorting'] = $arr['sorting'];
            $data['stroke'] = $arr['stroke'];
            $data['displacement'] = $arr['displacement'];
            $data['reartyre'] = $arr['reartyre'];
            $data['fronttire'] = $arr['fronttire'];
            $data['frontbrake'] = $arr['frontbrake'];
            $data['compression'] = $arr['compression'];
            $data['rearbrake'] = $arr['rearbrake'];
            $data['seatheight'] = $arr['seatheight'];
            $data['capacity'] = $arr['capacity'];
            $data['windshield'] = $arr['windshield'];
            $data['image'] = $arr['img'];
            $data['text'] = $arr['text'];
            $data['cit_id'] = $arr['cit_id'];
            $data['day_price'] = $arr['day_price'];
            $data['week_price'] = $arr['week_price'];
            $data['time'] = date('Y-m-d H:i:s');
            if($arr['productitle'] !== '' && $arr['img'] !==''){
                if($this->List_model->add_list($data))
                {
                    echo 200;

                }else{

                    echo 300;

                }
            }else{
                echo 300;
            }

        }

        public function list_del()
        {
            $id = $_POST['id'];

            if ($this -> List_model -> edit_category($id))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }

        public function list_statu()
        {
            $data['id'] = $_POST['id'];
            $data['statu'] = $_POST['statu'];
            if($this->List_model->update_status($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }

        public function list_edit()
        {
            parse_str($_POST['str'], $arr);
            $data['id'] = $arr['id'];
            $data['time'] = date('Y-m-d H:i:s');
            $data['cit_id'] = $arr['cit_id'];
            $data['category'] = $arr['category'];
            $data['brand'] = $arr['brand'];
            if(!isset($arr['lang'])){
                $data['category'] = $arr['category'];
                $data['brand'] = $arr['brand'];
                $data['productitle'] = $arr['productitle'];
                $data['stroke'] = $arr['stroke'];
                $data['displacement'] = $arr['displacement'];
                $data['reartyre'] = $arr['reartyre'];
                $data['fronttire'] = $arr['fronttire'];
                $data['frontbrake'] = $arr['frontbrake'];
                $data['compression'] = $arr['compression'];
                $data['rearbrake'] = $arr['rearbrake'];
                $data['seatheight'] = $arr['seatheight'];
                $data['capacity'] = $arr['capacity'];
                $data['windshield'] = $arr['windshield'];
                $data['text'] = $arr['text'];
                $data['day_price'] = $arr['day_price'];
                $data['week_price'] = $arr['week_price'];
            }else{
                $data['productitle_en'] = $arr['productitle'];
                $data['stroke_en'] = $arr['stroke'];
                $data['displacement_en'] = $arr['displacement'];
                $data['reartyre_en'] = $arr['reartyre'];
                $data['fronttire_en'] = $arr['fronttire'];
                $data['frontbrake_en'] = $arr['frontbrake'];
                $data['compression_en'] = $arr['compression'];
                $data['rearbrake_en'] = $arr['rearbrake'];
                $data['seatheight_en'] = $arr['seatheight'];
                $data['capacity_en'] = $arr['capacity'];
                $data['windshield_en'] = $arr['windshield'];
                $data['text_en'] = $arr['text'];
                $data['day_price_en'] = $arr['day_price'];
                $data['week_price_en'] = $arr['week_price'];
            }
            if(!empty($arr['img'])){
                $data['image'] = $arr['img'];
            }
            if($this->List_model->update_edit($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }
        
    }