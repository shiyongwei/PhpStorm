<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class promo_detail extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Promotions_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> model('admin/Text_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$rent_list = $this->Product_model->get('');

				$id = $_GET['id'];
				$promotion = $this->Promotions_model->get($id);
				$promotiont = $this->Promotions_model->get('');
				$navigation = $this->Navigation_model->get_name('');
				$get_limit = $this->City_model->get_limit('');
				$bottom_info = $this->Text_model->get_name('');
				$bottom_info_all = $this->Text_model->get_name_all('');

//				echo '<pre>';
//				print_r($promotion);
//				echo '</pre>';




				$data['rent_list'] = $rent_list;
				$data['promotion'] = $promotion;
				$data['promotiont'] = $promotiont;
				$data['navigation'] = $navigation;
				$data['get_limit'] = $get_limit;
				$data['bottom_info'] = $bottom_info;
				$data['bottom_info_all'] = $bottom_info_all;


				$this -> load -> view('common/home/head',$data,$navigation);
				$this -> load -> view('promo_detail',$promotion,$promotiont);
				$this -> load -> view('common/home/foot',$rent_list,$get_limit,$bottom_info,$bottom_info_all);
			}
		}





?>