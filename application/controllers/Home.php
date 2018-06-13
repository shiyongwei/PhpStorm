<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
    {
    public function __construct ()
    {
        parent ::__construct();
        $this -> load -> model('admin/List_model');
        $this -> load -> model('admin/Product_model');
        $this -> load -> helper(array('form', 'url'));
    }

        //首页
        public function index ()
        {
            $rent_list = $this->Product_model->get('');//热门租赁分类

            $data['rent_list'] = $rent_list;
            $this -> load -> view('common/home/head',$data);
            $this -> load -> view('home');
            $this -> load -> view('common/home/foot');
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

    }
