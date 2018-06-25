<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class HotTrave_detail extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> helper(array('form', 'url'));
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> model('admin/Topic_model');
				$this -> load -> model('admin/Team_model');
				$this -> load -> model('admin/Uriving_model');
				$this -> load -> model('admin/Explore_model');
				$this -> load -> model('admin/Text_model');
			}
			public function index(){
				$rent_list = $this->Product_model->get('');//热门租赁分类
				$city = $this->City_model->get();
				$get_limit = $this->City_model->get_limit();
				$bottom_info = $this->Text_model->get_name('');
				$bottom_info_all = $this->Text_model->get_name_all('');
				$navigation = $this->Navigation_model->get_name('');
				$id['topic_id'] = $_GET['id'];
				$hotreave_detail = $this->Topic_model->getAll($id);
				$team_limit = $this->Team_model->get_limit();
				$uriving_limit = $this->Uriving_model->get_limit();
				$exone_one['explore_id'] =1;
				$data['one'] = $this->Explore_model->getAll($exone_one);
				$exone_two['explore_id'] =2;
                $data['two'] = $this->Explore_model->getAll($exone_two);
				$exone_three['explore_id'] =3;
                $data['three'] = $this->Explore_model->getAll($exone_three);
				$exone_four['explore_id'] =4;
                $data['four'] = $this->Explore_model->getAll($exone_four);



//				echo "<pre>";
//				print_r($exone_four);exit();
//				echo "</pre>";

				$data['rent_list'] = $rent_list;
				$data['city'] = $city;
				$data['get_limit'] = $get_limit;
				$data['navigation'] = $navigation;
				$data['hotreave_detail'] = $hotreave_detail;
				$data['team_limit'] = $team_limit;
				$data['uriving_limit'] = $uriving_limit;
				$data['bottom_info'] = $bottom_info;
				$data['bottom_info_all'] = $bottom_info_all;


				$this -> load -> view('common/home/head',$data,$navigation);
				$this -> load -> view('hotTrave_detail',$city,$hotreave_detail,$team_limit,$uriving_limit);
				$this -> load -> view('common/home/foot',$rent_list,$get_limit,$bottom_info,$bottom_info_all);
			}
		}


?>