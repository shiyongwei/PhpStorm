<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Reg extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> model('admin/Text_model');
				$this -> load -> model('admin/Side_model');
				$this -> load -> model('admin/User_info_model');
                $this -> load -> model('admin/Announcement_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$reg_info['num'] = isset($_POST['num']) ? $_POST['num'] : null;
				$reg_info['title'] = isset($_POST['title']) ? $_POST['title'] : null;
				$reg_info['star_city'] = isset($_POST['star_city']) ? $_POST['star_city'] : null;
				$reg_info['end_city'] = isset($_POST['end_city']) ? $_POST['end_city'] : null;
				$reg_info['star_time'] = isset($_POST['star_time']) ? $_POST['star_time'] : null;
				$reg_info['end_time'] = isset($_POST['end_time']) ? $_POST['end_time'] : null;
				$reg_info['travel'] = isset($_POST['travel']) ? $_POST['travel'] : null;
//				echo '<pre>';
//				print_r($reg_info);exit;
				$rent_list = $this->Product_model->get('');//热门租赁分类
				$navigation = $this->Navigation_model->get_name('');
				$get_limit = $this->City_model->get_limit('');
				$bottom_info = $this->Text_model->get_name('');
				$bottom_info_all = $this->Text_model->get_name_all('');
				$side = $this->Side_model->get_name('');
                $notice = $this->Announcement_model->get_name('');




				$data['rent_list'] = $rent_list;
				$data['navigation'] = $navigation;
				$data['get_limit'] = $get_limit;
				$data['bottom_info'] = $bottom_info;
				$data['bottom_info_all'] = $bottom_info_all;
				$data['side'] = $side;
				$data['reg_info'] = $reg_info;
				$data['notice'] = $notice;



				$this -> load -> view('common/home/head',$data,$navigation,$bottom_info_all,$notice);
				$this -> load -> view('reg');
				$this -> load -> view('common/home/foot',$rent_list,$get_limit,$bottom_info,$bottom_info_all,$side);
			}

			public function add(){
				$reg_info['number'] = isset($_POST['num']) ? $_POST['num'] : null;
				$reg_info['name'] = isset($_POST['name']) ? $_POST['name'] : null;
				$reg_info['phone'] = isset($_POST['tel']) ? $_POST['tel'] : null;
				$reg_info['motorcycle'] = isset($_POST['title']) ? $_POST['title'] : null;
				$reg_info['star_city'] = isset($_POST['star_city']) ? $_POST['star_city'] : null;
				$reg_info['end_city'] = isset($_POST['end_city']) ? $_POST['end_city'] : null;
				$reg_info['start_time'] = isset($_POST['star_time']) ? $_POST['star_time'] : null;
				$reg_info['over_time'] = isset($_POST['end_time']) ? $_POST['end_time'] : null;
				$reg_info['travel'] = isset($_POST['travel']) ? $_POST['travel'] : null;
//				echo '<pre>';
//				print_r($reg_info);
//				exit;
				$this->User_info_model->add_name($reg_info);
				echo "<script>alert('登记成功!');window.location.href='/index.php/Reg';</script>";


//				echo '<pre>';
//				print_r($reg_info);
//				exit;
			}

			public function mobile_Reg(){
				$rent_list = $this->Product_model->get('');//热门租赁分类
				$navigation = $this->Navigation_model->get_name('');
				$get_limit = $this->City_model->get_limit('');
				$bottom_info = $this->Text_model->get_name('');
				$bottom_info_all = $this->Text_model->get_name_all('');
				$side = $this->Side_model->get_name('');




				$data['rent_list'] = $rent_list;
				$data['navigation'] = $navigation;
				$data['get_limit'] = $get_limit;
				$data['bottom_info'] = $bottom_info;
				$data['bottom_info_all'] = $bottom_info_all;
				$data['side'] = $side;

				$this -> load -> view('mobile/reg',$data);
			}


		}





?>