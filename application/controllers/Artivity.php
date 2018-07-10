<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Artivity extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Column_model');
				$this -> load -> model('admin/Activityedit_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> model('admin/Text_model');
				$this -> load -> helper(array('form', 'url'));
				$this -> load -> model('admin/Side_model');
			}
			public function index(){
				$rent_list = $this->Product_model->get('');
				$column = $this->Column_model->get('');
				$activity = $this->Activityedit_model->get('');
				$navigation = $this->Navigation_model->get_name('');
				$city = $this->City_model->get();
				$get_limit = $this->City_model->get_limit();
				$bottom_info = $this->Text_model->get_name('');
				$bottom_info_all = $this->Text_model->get_name_all('');
				$side = $this->Side_model->get_name('');
				//所属选项卡
				if(!empty($_GET['column_id'])){
					$column_id = $_GET['column_id'];
					//所属选项卡数据
					$activity = $this -> Activityedit_model -> art_option_get($column_id);
				}
				
				$data['rent_list'] = $rent_list;
				$data['column'] = $column;
				$data['activity'] = $activity;
				$data['navigation'] = $navigation;
				$data['city'] = $city;
				$data['get_limit'] = $get_limit;
				$data['bottom_info'] = $bottom_info;
				$data['bottom_info_all'] = $bottom_info_all;
				$data['side'] = $side;

				$this -> load -> view('common/home/head',$data,$navigation,$bottom_info_all);
				$this -> load -> view('activity',$column,$activity,$city,$side);
				$this -> load -> view('common/home/foot',$rent_list,$get_limit,$bottom_info,$bottom_info_all,$side);
			}

            public function mobile_Artivity(){


                $data['column'] =  $this->Column_model->get('');
                $data['city'] = $this->City_model->get();
                if(!empty($_GET['column_id'])){
                    $id = $_GET['column_id'];
                    $column_get =  $this->Column_model->get($id);
                    $data['column_name'] = $column_get[0]['column_name'];

                    $data['activity'] = $this->Activityedit_model->get($id);
                }else{
                    $data['activity'] = $this->Activityedit_model->get('');
                }
                $this -> load -> view('mobile/mobile_Artivity',$data);

            }

		}





?>