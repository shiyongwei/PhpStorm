<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
    {
    public function __construct ()
    {
        parent ::__construct();
        $this -> load -> model('admin/List_model');
        $this -> load -> model('admin/Product_model');
        $this -> load -> model('admin/Promotions_model');
        $this -> load -> model('admin/Navigation_model');
        $this -> load -> model('admin/Bottom_model');
		$this -> load -> model('admin/City_model');
		$this -> load -> model('admin/Background_model');
		$this -> load -> model('admin/Side_model');
		$this -> load -> model('admin/Text_model');
        $this -> load -> helper(array('form', 'url'));
    }

        //首页
        public function index ()
        {
            $rent_list = $this->Product_model->get('');
            $promotiom = $this->Promotions_model->get_status('');
            $navigation = $this->Navigation_model->get_name('');
			$bottom = $this->Bottom_model->get_name('');
			$city = $this->City_model->get();
			$get_limit = $this->City_model->get_limit();
			$get_limits = $this->City_model->get_limits();
			$text = $this->Background_model->get_name('');
			$side = $this->Side_model->get_name('');
			$bottom_info = $this->Text_model->get_name('');
			$bottom_info_all = $this->Text_model->get_name_all('');


//			echo  '<pre>';
//			print_r($get_limit);
//			echo  '<pre>';


            $data['rent_list'] = $rent_list;
            $data['promotiom'] = $promotiom;
            $data['navigation'] = $navigation;
            $data['bottom'] = $bottom;
			$data['city'] = $city;
			$data['text'] = $text;
			$data['get_limit'] = $get_limit;
			$data['get_limits'] = $get_limits;
			$data['side'] = $side;
			$data['bottom_info'] = $bottom_info;
			$data['bottom_info_all'] = $bottom_info_all;

            $this -> load -> view('common/home/head',$data,$navigation,$bottom_info_all);
            $this -> load -> view('home',$promotiom,$bottom,$city,$text,$side,$get_limits);
            $this -> load -> view('common/home/foot',$rent_list,$city,$get_limit,$bottom_info,$bottom_info_all,$side);
        }
        //酒店
        public function hotels ()
        {
            $this -> load -> view('common/home/head');
            $this -> load -> view('hotels');
            $this -> load -> view('common/home/foot');
        }
        //登记
        public function reg ()
        {
            $this -> load -> view('common/home/head');
            $this -> load -> view('reg');
            $this -> load -> view('common/home/foot');
        }
        //活动
        public function activity ()
        {
            $this -> load -> view('common/home/head');
            $this -> load -> view('activity');
            $this -> load -> view('common/home/foot');
        }
        //特惠
        public function discounts ()
        {
            $this -> load -> view('common/home/head');
            $this -> load -> view('discounts');
            $this -> load -> view('common/home/foot');
        }
        //城市
        public function city ()
        {
            $this -> load -> view('common/home/head');
            $this -> load -> view('city');
            $this -> load -> view('common/home/foot');
        }
        //旅游
        public function trave ()
        {
            $this -> load -> view('common/home/head');
            $this -> load -> view('trave');
            $this -> load -> view('common/home/foot');
        }
        //租赁页面
        public function rent ()
        {
            $this -> load -> view('common/home/head');
            $this -> load -> view('rent');
            $this -> load -> view('common/home/foot');
        }
        //旅游分类页面
        public function classify ()
        {
            $this -> load -> view('common/home/head');
            $this -> load -> view('classify');
            $this -> load -> view('common/home/foot');
        }
        //旅游详细页面
        public function detail ()
        {
            $this -> load -> view('common/home/head');
            $this -> load -> view('detail');
            $this -> load -> view('common/home/foot');
        }
		//特惠详细页面
		public function promo_detail ()
		{
			$this -> load -> view('common/home/head');
			$this -> load -> view('promo_detail');
			$this -> load -> view('common/home/foot');
		}
		//热门摩托旅行
        public function hot_trave ()
        {
            $this -> load -> view('common/home/head');
            $this -> load -> view('hot_trave');
            $this -> load -> view('common/home/foot');
        }
		//底部信息
		public function bottom_info ()
		{
			$this -> load -> view('common/home/head');
			$this -> load -> view('bottom_info');
			$this -> load -> view('common/home/foot');
		}


    }
