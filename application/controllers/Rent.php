<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Rent extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> helper(array('form', 'url'));
			}
			//热门租赁分类
			public function index(){
				$rent_list = $this->Product_model->get('');//热门租赁分类
				$id = $_GET['id'];
				if($id==0){
					$list = $this->List_model->get('');
				}else{
					$list = $this->List_model->getInfo($id);
				}
				$navigation = $this->Navigation_model->get_name('');

//				echo '<pre>';
//				print_r($list);
//				echo '</pre>';

				$data['rent_list'] = $rent_list;
				$data['list'] = $list;
				$data['navigation'] = $navigation;

				$this -> load -> view('common/home/head',$data,$navigation);
				$this -> load -> view('rent',$list);
				$this -> load -> view('common/home/foot',$rent_list);
			}


		}