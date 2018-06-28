<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Discounts extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Promotions_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> model('admin/Text_model');
				$this -> load -> model('admin/Side_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$rent_list = $this->Product_model->get('');
				$promotion = $this->Promotions_model->get('');
				$navigation = $this->Navigation_model->get_name('');
				$city = $this->City_model->get();
				$get_limit = $this->City_model->get_limit();
				$bottom_info = $this->Text_model->get_name('');
				$bottom_info_all = $this->Text_model->get_name_all('');
				$side = $this->Side_model->get_name('');
//				echo '<pre>';
//				print_r($promotion);
//				echo '</pre>';




				$data['rent_list'] = $rent_list;
				$data['promotion'] = $promotion;
				$data['navigation'] = $navigation;
				$data['city'] = $city;
				$data['get_limit'] = $get_limit;
				$data['bottom_info'] = $bottom_info;
				$data['bottom_info_all'] = $bottom_info_all;
				$data['side'] = $side;

				$this -> load -> view('common/home/head',$data,$navigation,$bottom_info_all);
				$this -> load -> view('discounts',$promotion,$city);
				$this -> load -> view('common/home/foot',$rent_list,$bottom_info,$bottom_info_all,$side);
			}
		}





?>