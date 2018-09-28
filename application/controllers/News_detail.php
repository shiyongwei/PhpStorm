<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class News_detail extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> model('admin/Text_model');
				$this -> load -> model('admin/Side_model');
				$this -> load -> model('admin/Tidings_model');
                $this -> load -> model('admin/Announcement_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$rent_list = $this->Product_model->get('');//热门租赁分类
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
				$get_limit = $this->City_model->get_limit('');
				$bottom_info = $this->Text_model->get_name('');
				$bottom_info_all = $this->Text_model->get_name_all('');
				$side = $this->Side_model->get_name('');

				$news_id['id'] = $_GET['id'];
				$news_detail = $this->Tidings_model->get_name($news_id);
                $notice = $this->Announcement_model->get_name('');


//																echo '<pre>';
//																print_r($news_detail);
//																echo '</pre>';



				$data['rent_list'] = $rent_list;
				$data['navigation'] = $navigation;
				$data['get_limit'] = $get_limit;
				$data['bottom_info'] = $bottom_info;
				$data['bottom_info_all'] = $bottom_info_all;
				$data['side'] = $side;
				$data['navigation_limit'] = $navigation_limit;
				$data['news_detail'] = $news_detail;
				$data['notice'] = $notice;


				$this -> load -> view('common/home/head',$data,$navigation,$bottom_info_all,$notice);
				$this -> load -> view('news_detail',$bottom_info);
				$this -> load -> view('common/home/foot',$rent_list,$get_limit,$bottom_info,$bottom_info_all,$side);
			}
		}





?>