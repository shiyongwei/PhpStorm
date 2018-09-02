<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class City extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> helper(array('form', 'url'));
				$this -> load -> model('admin/Text_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> model('admin/Side_model');
			}
			public function index(){
				$rent_list = $this->Product_model->get('');//热门租赁分类
				$city = $this->City_model->get();
				$get_limit = $this->City_model->get_limit();
				$navigation = $this->Navigation_model->get_name('');
				for ($i=0;$i<count($navigation);$i++){
					$navigation_limit['navigation_id'] = $navigation[0]['navigation_id'];
					$navigation_limit['navigation_name'] = $navigation[0]['navigation_name'];
					$navigation_limit['lease_name'] = $navigation[0]['lease_name'];
					$navigation_limit['hotel_name'] = $navigation[0]['hotel_name'];
					$navigation_limit['promotions_name'] = $navigation[0]['promotions_name'];
					$navigation_limit['navigation_name_en'] = $navigation[0]['navigation_name_en'];
					$navigation_limit['lease_name_en'] = $navigation[0]['lease_name_en'];
					$navigation_limit['hotel_name_en'] = $navigation[0]['hotel_name_en'];
					$navigation_limit['promotions_name_en'] = $navigation[0]['promotions_name_en'];
				}
				$bottom_info = $this->Text_model->get_name('');
				$bottom_info_all = $this->Text_model->get_name_all('');
				$side = $this->Side_model->get_name('');

				$data['rent_list'] = $rent_list;
				$data['city'] = $city;
				$data['get_limit'] = $get_limit;
				$data['navigation'] = $navigation;
				$data['bottom_info'] = $bottom_info;
				$data['bottom_info_all'] = $bottom_info_all;
				$data['side'] = $side;
				$data['navigation_limit'] = $navigation_limit;

				$this -> load -> view('common/home/head',$data,$navigation,$bottom_info_all);
				$this -> load -> view('city',$city,$side);
				$this -> load -> view('common/home/foot',$rent_list,$get_limit,$bottom_info,$bottom_info_all,$side);
			}

            public function mobile_City(){

                $data['city'] = $this->City_model->get();

                $this -> load -> view('mobile/mobile_City',$data);

            }
		}





?>