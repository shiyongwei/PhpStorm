<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Classify extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Uriving_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$rent_list = $this->Product_model->get('');
				$uriving = $this->Uriving_model->get('');

//				echo '<pre>';
//				print_r($uriving);
//				echo '</pre>';

				$data['rent_list'] = $rent_list;
				$data['uriving'] = $uriving;

				$this -> load -> view('common/home/head',$data);
				$this -> load -> view('classify',$uriving);
				$this -> load -> view('common/home/foot');
			}
		}





?>