<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Discounts extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Promotions_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> model('admin/Text_model');
                $this -> load -> model('admin/Announcement_model');
				$this -> load -> model('admin/Side_model');
				$this -> load -> helper(array('form', 'url'));
                $this -> load -> library('pagination');
			}
			public function index(){
				$rent_list = $this->Product_model->get('');
				$promotion = $this->Promotions_model->get('');
				$navigation = $this->Navigation_model->get_name('');
				$city = $this->City_model->get();
				$get_limit = $this->City_model->get_limit();
				$bottom_info = $this->Text_model->get_name('');
				$bottom_info_all = $this->Text_model->get_name_all('');
				$side = $this->Side_model->get_name('');
                $notice = $this->Announcement_model->get_name('');
//				echo '<pre>';
//				print_r($promotion);
//				echo '</pre>';




				$data['rent_list'] = $rent_list;
				$data['promotion'] = $promotion;
				$data['navigation'] = $navigation;
				$data['city'] = $city;
				$data['get_limit'] = $get_limit;
				$data['bottom_info'] = $bottom_info;
				$data['bottom_info_all'] = $bottom_info_all;
				$data['side'] = $side;
				$data['notice'] = $notice;

				$this -> load -> view('common/home/head',$data,$navigation,$bottom_info_all,$notice);
				$this -> load -> view('discounts',$promotion,$city);
				$this -> load -> view('common/home/foot',$rent_list,$bottom_info,$bottom_info_all,$side);
			}
            public function mobile_Discount(){

                $data['city'] = $this->City_model->get();

                $offset = '';

                if(!empty($_GET['per_page'])){

                    $offset = $_GET['per_page'];

                }

                $config['page_query_string'] = TRUE;

                $count = $this -> Promotions_model->get_set_all();

                $config['base_url'] = site_url("/Discounts/mobile_Discount");

                $config['total_rows'] = $count;

                $config['per_page'] = 5;

                $config['full_tag_open'] = '<ul>';

                $config['full_tag_close'] = '</ul>';

                $config['first_tag_open'] = '<li>';

                $config['first_tag_close'] = '</li>';

                $config['prev_tag_open'] = '<li>';

                $config['prev_tag_close'] = '</li>';

                $config['next_tag_open'] = '<li>';

                $config['next_tag_close'] = '</li>';

                $config['cur_tag_open'] = '<li class="page active"><a>';

                $config['cur_tag_close'] = '</a></li>';

                $config['last_tag_open'] = '<li>';

                $config['last_tag_close'] = '</li>';

                $config['num_tag_open'] = '<li>';

                $config['num_tag_close'] = '</li>';

                $config['attributes'] = array('class' => 'myclass');//给所有<a>标签加上class

                //每一页显示的数据条数

                $config['first_link']= '首页';

                $config['next_link']= '下一页';

                $config['prev_link']= '上一页';

                $config['last_link']= '末页';



                $this->pagination->initialize($config);



                $data['pageinfo'] = $this->pagination->create_links();



                $limit = $config['per_page'];

                $data['promotion'] = $this -> Promotions_model -> get_all($limit,$offset);

                $this -> load -> view('mobile/mobile_Discounts',$data);

            }
            public function mobile_Discount_info(){

			    $id = $_GET['id'];

                $data['promotion'] = $this->Promotions_model->get($id);

                $this -> load -> view('mobile/mobile_Discounts_info',$data);

            }
	}





?>