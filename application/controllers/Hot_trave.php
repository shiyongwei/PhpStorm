<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hot_trave extends CI_Controller{
    public function __construct ()
    {
        parent ::__construct();
        $this -> load -> model('admin/List_model');
        $this -> load -> model('admin/Product_model');
        $this -> load -> model('admin/Topic_model');
		$this -> load -> model('admin/Navigation_model');
		$this -> load -> model('admin/City_model');
		$this -> load -> model('admin/Text_model');
        $this -> load -> model('admin/Explore_model');
		$this -> load -> model('admin/Side_model');
        $this -> load -> model('admin/Team_model');
        $this -> load -> model('admin/Uriving_model');
        $this -> load -> helper(array('form', 'url'));
    }
    public function index(){
        $rent_list = $this->Product_model->get('');
        $topic = $this->Topic_model->get('');
		$get_limit = $this->City_model->get_limit('');
		$navigation = $this->Navigation_model->get_name('');
		$bottom_info = $this->Text_model->get_name('');
		$bottom_info_all = $this->Text_model->get_name_all('');
		$side = $this->Side_model->get_name('');

//		echo "<pre>";
//		print_r($topic);
//		echo "</pre>";

        $data['rent_list'] = $rent_list;
        $data['topic'] = $topic;
		$data['navigation'] = $navigation;
		$data['get_limit'] = $get_limit;
		$data['bottom_info'] = $bottom_info;
		$data['bottom_info_all'] = $bottom_info_all;
		$data['side'] = $side;


        $this -> load -> view('common/home/head',$data,$navigation,$bottom_info_all);
        $this -> load -> view('hot_trave',$topic);
        $this -> load -> view('common/home/foot',$rent_list,$get_limit,$bottom_info,$bottom_info_all,$side);
    }

        public function mobile_hot_trave(){


            $data['topic'] = $this->Topic_model->get('');

            $this -> load -> view('mobile/mobile_hot_trave',$data);

        }
        public function mobile_hotTrave_detail(){

            $id['topic_id'] = $_GET['id'];

            $data['topic'] = $this->Topic_model->getAll($id);
            $exone_one['explore_id'] =1;
            $data['one'] = $this->Explore_model->getAll($exone_one);
            $exone_three['explore_id'] =3;
            $data['three'] = $this->Explore_model->getAll($exone_three);
            $exone_four['explore_id'] =4;
            $data['four'] = $this->Explore_model->getAll($exone_four);

            $data['team_limit'] = $this->Team_model->get_limit();
            $data['uriving_limit'] = $this->Uriving_model->get_limit();
            $this -> load -> view('mobile/mobile_hotTrave_detail',$data);

        }
}





?>