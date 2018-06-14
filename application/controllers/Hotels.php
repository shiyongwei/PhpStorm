<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Hotels extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Uriving_model');
				$this -> load -> model('admin/Team_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$rent_list = $this->Product_model->get('');
				$uriving = $this->Uriving_model->get('');
				$team = $this->Team_model->get('');
				$navigation = $this->Navigation_model->get_name('');

//              	echo '<pre>';
//				print_r($uriving);
//				echo '</pre>';


				$data['rent_list'] = $rent_list;
				$data['uriving'] = $uriving;
				$data['team'] = $team;
				$data['navigation'] = $navigation;

				$this -> load -> view('common/home/head',$data,$navigation);
				$this -> load -> view('hotels',$uriving,$team);
				$this -> load -> view('common/home/foot');
			}
		}





?>