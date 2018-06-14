<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class promo_detail extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Promotions_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$rent_list = $this->Product_model->get('');

				$id = $_GET['id'];
				$promotion = $this->Promotions_model->get($id);
				$promotiont = $this->Promotions_model->get('');
				$navigation = $this->Navigation_model->get_name('');

//				echo '<pre>';
//				print_r($promotion);
//				echo '</pre>';




				$data['rent_list'] = $rent_list;
				$data['promotion'] = $promotion;
				$data['promotiont'] = $promotiont;
				$data['navigation'] = $navigation;


				$this -> load -> view('common/home/head',$data,$navigation);
				$this -> load -> view('promo_detail',$promotion,$promotiont);
				$this -> load -> view('common/home/foot');
			}
		}





?>