<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Product_model');
            $this -> load -> model('admin/User_model');
            $this -> load -> model('admin/Category_model');
            $this -> load -> model('admin/List_model');
            $this -> load -> model('admin/City_model');
            $this -> load -> model('admin/Promotions_model');
            $this -> load -> model('admin/Column_model');
            $this -> load -> model('admin/Activityedit_model');
            $this -> load -> model('admin/Uriving_model');
            $this -> load -> model('admin/Team_model');
            $this -> load -> model('admin/Topic_model');
            $this -> load -> model('admin/Increase_model');
            $this -> load -> model('admin/Explore_model');
            $this -> load -> model('admin/Navigation_model');
            $this -> load -> model('admin/Bottom_model');
            $this -> load -> model('admin/Background_model');
            $this -> load -> helper(array('form', 'url'));
            $this -> load -> library('session');
            $this -> load -> library('pagination');
        }
        //注册页面
        public function index ()
        {
            //$this -> load -> view('common/header');
            $this -> load -> view('admin/login');
            //$this -> load -> view('common/footer');
        }

        public function login ()
        {
            $user = $this->session->userdata('user');

            $data['username']=$user['username'];

            //$this -> load -> view('common/header');
            $this -> load -> view('admin/index',$data);
            //$this -> load -> view('common/footer');
        }
        //首页
        public function welcome ()
        {
            $this -> load -> view('admin/welcome');
        }
        //管理员
        public function admin_list ()
        {
            $data_add = '';

            $add_list = $this->User_model->get($data_add);

            $data['list'] = $add_list;

            $this -> load -> view('admin/admin_list',$data);
        }

        public function admin_add ()
        {
            if(empty($_GET['id'])){

                $this -> load -> view('admin/admin_add');

            }else{

                $id['id'] = $_GET['id'];

                $id = $this->User_model->get($id);

                $data['content'] = $id;

                $this -> load -> view('admin/admin_add',$data);

            }

        }
        //品牌管理
        public function product_brand ()
        {
            $result= '';

            $product = $this -> Product_model -> get($result);

            $product_brand = array();

            foreach ($product as $key => $value)
            {
                $product_brand[$key] = $value;
            }

            $data['product'] = $product_brand;
            $data['page'] = $this->pagination->create_links();


            $this -> load -> view('admin/product_brand', $data);

        }

        public function product_brand_add ()
        {

            $this -> load -> view('admin/product_brand_add');

        }

        public function product_brand_edit ()
        {
            $result = $_GET['id'];

            $product = $this -> Product_model -> get($result);

            $data['brand_id'] = $product['brand_id'];

            $data['product_brand'] = $product['product_brand'];


            $this -> load -> view('admin/product_brand_edit', $data);

        }
        //类型管理
        public function product_category ()
        {
            $result= '';

            $category = $this -> Category_model -> get($result);

            $data['category'] = $category;

            $this -> load -> view('admin/product_category',$data);

        }

        public function product_category_add ()
        {

            $this -> load -> view('admin/product_category_add');

        }

        public function product_category_edit ()
        {
            $result = $_GET['id'];

            $category = $this -> Category_model -> get($result);

            $data['category_id'] = $category['category_id'];

            $data['category_name'] = $category['category_name'];

            $this -> load -> view('admin/product_category_edit',$data);

        }
        //产品管理
        public function product_list ($offset='')
        {

            $result= '';

            $list = $this -> List_model -> get($result);

            $data['list'] = $list;

            $this -> load -> view('admin/product_list',$data);

        }
        public function product_list_add ()
        {
            $result= '';

            $category = $this -> Category_model -> get($result);

            $brand = $this -> Product_model -> get($result);

            $data['brand'] = $brand;

            $data['category'] = $category;

            $this -> load -> view('admin/product_list_add',$data);

        }

        public function product_list_show ()
        {
            $data['iamge'] = $_GET['image'];

            $this -> load -> view('admin/product_list_show',$data);

        }
        public function product_list_details ()
        {
            $result= $_GET['id'];

            $list = $this -> List_model -> get($result);

            $data['list'] = $list;

            $this -> load -> view('admin/product_list_details',$data);

        }

        public function product_list_edit ()
        {
            $id= $_GET['id'];

            $result= '';

            $list = $this -> List_model -> get($id);

            $category = $this -> Category_model -> get($result);

            $brand = $this -> Product_model -> get($result);

            $data['brand'] = $brand;

            $data['category'] = $category;

            $data['list'] = $list;

            $this -> load -> view('admin/product_list_edit',$data);

        }
        //城市管理
        public function city ()
        {

            $data['cites'] = $this->City_model->get();

            $this -> load -> view('admin/city',$data);

        }
        public function city_add ()
        {

            $this -> load -> view('admin/city_add');

        }
        public function city_edit ()
        {
            $id = $_GET['id'];

            $data['cite_edit'] = $this->City_model->get_city($id);


            $this -> load -> view('admin/city_edit',$data);

        }
        //特惠管理
        public function promotions ()
        {
            $result= '';

            $data['promotions'] = $this -> Promotions_model -> get($result);

            $this -> load -> view('admin/promotions',$data);

        }
        public function promotions_add ()
        {

            $this -> load -> view('admin/promotions_add',$data);

        }

        public function promotions_edit ()
        {
            $id = $_GET['id'];

            $data['promotions'] = $this -> Promotions_model -> get($id);

            $this -> load -> view('admin/promotions_edit',$data);
        }
        //活动管理
        public function column ()
        {
            $result= '';

            $data['column'] = $this -> Column_model -> get($result);

            $this -> load -> view('admin/column', $data);

        }

        public function column_add ()
        {

            $this -> load -> view('admin/column_add');

        }

        public function column_edit ()
        {
            $result = $_GET['id'];

            $data['column'] = $this -> Column_model -> get($result);

            $this -> load -> view('admin/column_edit', $data);

        }

    //活动管理
        public function activityedit ()
        {
            $result= '';

            $data['activityedit'] = $this -> Activityedit_model -> get($result);

            $this -> load -> view('admin/activityedit',$data);

        }
        public function activityedit_add ()
        {
            $result= '';

            $data['column'] = $this -> Column_model -> get($result);

            $this -> load -> view('admin/activityedit_add',$data);

        }

        public function activityedit_edit ()
        {
            $id = $_GET['id'];

            $result= '';

            $data['column'] = $this -> Column_model -> get($result);

            $data['activityedit'] = $this -> Activityedit_model -> get($id);

            $this -> load -> view('admin/activityedit_edit',$data);
        }


        //自驾游管理
        public function uriving ()
        {
            $result= '';

            $data['uriving'] = $this -> Uriving_model -> get($result);

            $this -> load -> view('admin/uriving',$data);

        }
        public function uriving_add ()
        {

            $this -> load -> view('admin/uriving_add');

        }

        public function uriving_edit ()
        {
            $id = $_GET['id'];

            $data['uriving'] = $this -> Uriving_model -> get($id);

            $this -> load -> view('admin/uriving_edit',$data);
        }
        //团队游管理
        public function team ()
        {
            $result= '';

            $data['team'] = $this -> Team_model -> get($result);

            $this -> load -> view('admin/team',$data);

        }
        public function team_add ()
        {

            $this -> load -> view('admin/team_add');

        }

        public function team_edit ()
        {
            $id = $_GET['id'];

            $data['team'] = $this -> Team_model -> get($id);

            $this -> load -> view('admin/team_edit',$data);
        }

        //团队游管理
        public function topic ()
        {
            $result= '';

            $data['topic'] = $this -> Topic_model -> get($result);

            $this -> load -> view('admin/topic',$data);

        }
        public function topic_add ()
        {

            $this -> load -> view('admin/topic_add');

        }

        public function topic_edit ()
        {
            $id = $_GET['id'];

            $data['topic'] = $this -> Topic_model -> get($id);

            $this -> load -> view('admin/topic_edit',$data);
        }
        //探索方式管理
        public function increase ()
        {
            $result= '';

            $data['increase'] = $this -> Increase_model -> get($result);

            $this -> load -> view('admin/increase',$data);

        }
        public function increase_add ()
        {
            if (empty($_GET['id']))
            {
                $this -> load -> view('admin/increase_add');

            }else{

                $id = $_GET['id'];

                $data['increase'] = $this -> Increase_model -> get($id);

                $this -> load -> view('admin/increase_add',$data);

            }

        }
        //探索方式
        public function explore ()
        {
            $result= '';

            $data['explore'] = $this -> Explore_model -> get($result);

            $this -> load -> view('admin/explore',$data);

        }
        public function explore_add ()
        {
            if (empty($_GET['id']))
            {
                $result= '';

                $data['increase'] = $this -> Increase_model -> get($result);

                $this -> load -> view('admin/explore_add',$data);

            }else{

                $id = $_GET['id'];

                $result= '';

                $data['explore'] = $this -> Explore_model -> get($id);

                $data['increase'] = $this -> Increase_model -> get($result);

                $this -> load -> view('admin/explore_add',$data);

            }

        }
        //导航
        public function navigation ()
        {
            $result= '';

            $data['navigation'] = $this -> Navigation_model -> get_name($result);

            $this -> load -> view('admin/navigation',$data);

        }

        public function navigation_edit ()
        {
            $result['navigation_id']= $_GET['id'];

            $data['navigation'] = $this -> Navigation_model -> get_name($result);

            $this -> load -> view('admin/navigation_edit',$data);

        }
        //底部
        public function bottom ()
        {
            $result= '';

            $data['bottom'] = $this -> Bottom_model -> get_name($result);

            $this -> load -> view('admin/bottom',$data);

        }

        public function bottom_edit ()
        {
            $result['bottom_id']= $_GET['id'];

            $data['bottom'] = $this -> Bottom_model -> get_name($result);

            $this -> load -> view('admin/bottom_edit',$data);

        }
        //底部
        public function background ()
        {
            $result= '';

            $data['background'] = $this -> Background_model -> get_name($result);

            $this -> load -> view('admin/background',$data);

        }

        public function background_edit ()
        {
            $result['id']= $_GET['id'];

            $data['background'] = $this -> Background_model -> get_name($result);

            $this -> load -> view('admin/background_edit',$data);

        }
    }