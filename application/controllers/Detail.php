<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Detail extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Uriving_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$rent_list = $this->Product_model->get('');
				$id = $_GET['id'];
				$uriving = $this->Uriving_model->get($id);
				$navigation = $this->Navigation_model->get_name('');

//				echo '<pre>';
//				print_r($uriving);
//				echo '</pre>';

				$data['rent_list'] = $rent_list;
				$data['uriving'] = $uriving;
				$data['navigation'] = $navigation;

				$this -> load -> view('common/home/head',$data,$navigation);
				$this -> load -> view('detail',$uriving);
				$this -> load -> view('common/home/foot');
			}
		}





?>