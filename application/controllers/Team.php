<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Team extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Team_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$rent_list = $this->Product_model->get('');
				$team = $this->Team_model->get('');
				$navigation = $this->Navigation_model->get_name('');
				$city = $this->City_model->get();

//								echo '<pre>';
//								print_r($team);
//								echo '</pre>';

				$data['rent_list'] = $rent_list;
				$data['team'] = $team;
				$data['navigation'] = $navigation;
				$data['city'] = $city;

				$this -> load -> view('common/home/head',$data,$navigation);
				$this -> load -> view('team',$team,$city);
				$this -> load -> view('common/home/foot',$rent_list);
			}
		}





?>