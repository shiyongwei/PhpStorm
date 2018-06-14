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
			}
			public function index(){
				$rent_list = $this->Product_model->get('');//热门租赁分类
				$city = $this->City_model->get();
				$data['rent_list'] = $rent_list;
				$data['city'] = $city;

				$this -> load -> view('common/home/head',$data);
				$this -> load -> view('city',$city);
				$this -> load -> view('common/home/foot');
			}
		}





?>