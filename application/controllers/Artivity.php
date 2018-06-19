<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Artivity extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Column_model');
				$this -> load -> model('admin/Activityedit_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$rent_list = $this->Product_model->get('');
				$column = $this->Column_model->get('');
				$activity = $this->Activityedit_model->get('');
				$navigation = $this->Navigation_model->get_name('');
				$city = $this->City_model->get();
				$get_limit = $this->City_model->get_limit();
				//所属选项卡
				if(!empty($_GET['column_id'])){
					$column_id = $_GET['column_id'];
					//所属选项卡数据
					$activity = $this -> Activityedit_model -> art_option_get($column_id);
				}






				$data['rent_list'] = $rent_list;
				$data['column'] = $column;
				$data['activity'] = $activity;
				$data['navigation'] = $navigation;
				$data['city'] = $city;
				$data['get_limit'] = $get_limit;

				$this -> load -> view('common/home/head',$data,$navigation);
				$this -> load -> view('activity',$column,$activity,$city);
				$this -> load -> view('common/home/foot',$rent_list,$get_limit);
			}
		}





?>