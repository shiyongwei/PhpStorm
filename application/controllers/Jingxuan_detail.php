<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Jingxuan_detail extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> model('admin/Team_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$rent_list = $this->Product_model->get('');//热门租赁分类
				$navigation = $this->Navigation_model->get_name('');
				$get_limit = $this->City_model->get_limit('');
				$city = $this->City_model->get();
				$cit_id['cit_id'] = $_GET['id'];
				$cityinfo = $this->City_model->getAll($cit_id);
				$rentinfo = $this->List_model->get_limit($cit_id);
				$teaminfo = $this->Team_model->getAll($cit_id);

//				echo  '<pre>';
//				print_r($teaminfo);
//				echo  '<pre>';

				$data['rent_list'] = $rent_list;
				$data['navigation'] = $navigation;
				$data['get_limit'] = $get_limit;
				$data['city'] = $city;
				$data['cityinfo'] = $cityinfo;
				$data['rentinfo'] = $rentinfo;
				$data['teaminfo'] = $teaminfo;

				$this -> load -> view('common/home/head',$data,$navigation);
				$this -> load -> view('jingxuan_detail',$city,$cityinfo,$rentinfo,$teaminfo);
				$this -> load -> view('common/home/foot',$rent_list,$get_limit);
			}
		}





?>