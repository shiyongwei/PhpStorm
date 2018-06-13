<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Team extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Team_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$rent_list = $this->Product_model->get('');
				$team = $this->Team_model->get('');

//								echo '<pre>';
//								print_r($team);
//								echo '</pre>';

				$data['rent_list'] = $rent_list;
				$data['team'] = $team;

				$this -> load -> view('common/home/head',$data);
				$this -> load -> view('team',$team);
				$this -> load -> view('common/home/foot');
			}
		}





?>