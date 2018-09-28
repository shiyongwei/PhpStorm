<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Rent_city extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> model('admin/Text_model');
				$this -> load -> model('admin/Side_model');
                $this -> load -> model('admin/Announcement_model');
				$this -> load -> helper(array('form', 'url'));
			}
		//热门租赁分类
			public function index(){
				$rent_list = $this->Product_model->get('');
				$get_limit = $this->City_model->get_limit('');
				$bottom_info = $this->Text_model->get_name('');
				$bottom_info_all = $this->Text_model->get_name_all('');
				$side = $this->Side_model->get_name('');
                $notice = $this->Announcement_model->get_name('');
				$cit_id['cit_id'] = $_GET['id'];
				$rentinfo = $this->List_model->get_limit($cit_id);
				$cityinfo = $this->City_model->getAll($cit_id);
				$id = $_GET['id'];
				if($id==0){
					$list = $this->List_model->get('');
				}else{
					$list = $this->List_model->getInfo($id);
				}
				$navigation = $this->Navigation_model->get_name('');

//								echo '<pre>';
//								print_r($rentinfo);
//								echo '</pre>';

				$data['rent_list'] = $rent_list;
				$data['list'] = $list;
				$data['get_limit'] = $get_limit;
				$data['navigation'] = $navigation;
				$data['bottom_info'] = $bottom_info;
				$data['bottom_info_all'] = $bottom_info_all;
				$data['side'] = $side;
				$data['rentinfo'] = $rentinfo;
				$data['cityinfo'] = $cityinfo;
				$data['notice'] = $notice;

				$this -> load -> view('common/home/head',$data,$navigation,$bottom_info_all,$notice);
				$this -> load -> view('rent_city',$list,$side,$rentinfo,$cityinfo);
				$this -> load -> view('common/home/foot',$rent_list,$get_limit,$bottom_info,$bottom_info_all,$side);
			}


		}