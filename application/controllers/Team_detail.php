<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Team_detail extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Team_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$rent_list = $this->Product_model->get('');
				$id = $_GET['id'];
				$team = $this->Team_model->get($id);
				$navigation = $this->Navigation_model->get_name('');
				$text = $team[0]['schedule'];


//								echo '<pre>';
//								var_dump($text);
//								echo '</pre>';

				$data['rent_list'] = $rent_list;
				$data['team'] = $team;
				$data['navigation'] = $navigation;
//				$data['team_route'] = $team_route;

				$this -> load -> view('common/home/head',$data,$navigation);
				$this -> load -> view('team_detail',$team);
				$this -> load -> view('common/home/foot');
			}
		}





?>