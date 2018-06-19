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
				$this -> load -> model('admin/Bottom_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> model('admin/Background_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$rent_list = $this->Product_model->get('');
				$uriving = $this->Uriving_model->get('');
				$team = $this->Team_model->get('');
				$navigation = $this->Navigation_model->get_name('');
				$bottom = $this->Bottom_model->get_name('');
				$city = $this->City_model->get();
				$get_limit = $this->City_model->get_limit();
				$text = $this->Background_model->get_name('');

//              	echo '<pre>';
//				print_r($uriving);
//				echo '</pre>';


				$data['rent_list'] = $rent_list;
				$data['uriving'] = $uriving;
				$data['team'] = $team;
				$data['navigation'] = $navigation;
				$data['bottom'] = $bottom;
				$data['city'] = $city;
				$data['get_limit'] = $get_limit;
				$data['text'] = $text;

				$this -> load -> view('common/home/head',$data,$navigation);
				$this -> load -> view('hotels',$uriving,$team,$bottom,$city,$text);
				$this -> load -> view('common/home/foot',$get_limit);
			}
		}





?>