<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Discounts extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Promotions_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$rent_list = $this->Product_model->get('');
				$promotion = $this->Promotions_model->get('');
//				echo '<pre>';
//				print_r($promotion);
//				echo '</pre>';




				$data['rent_list'] = $rent_list;
				$data['promotion'] = $promotion;

				$this -> load -> view('common/home/head',$data);
				$this -> load -> view('discounts',$promotion);
				$this -> load -> view('common/home/foot');
			}
		}





?>