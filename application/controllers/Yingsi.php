<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Yingsi extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> model('admin/Text_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$rent_list = $this->Product_model->get('');//热门租赁分类
				$navigation = $this->Navigation_model->get_name('');
				$get_limit = $this->City_model->get_limit('');
				$bottom_info = $this->Text_model->get_name('');

				//								echo '<pre>';
				//								print_r($bottom_info);
				//								echo '</pre>';



				$data['rent_list'] = $rent_list;
				$data['navigation'] = $navigation;
				$data['get_limit'] = $get_limit;
				$data['bottom_info'] = $bottom_info;

				$this -> load -> view('common/home/head',$data,$navigation);
				$this -> load -> view('yingsi',$bottom_info);
				$this -> load -> view('common/home/foot',$rent_list,$get_limit,$bottom_info);
			}
		}





?>