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
            $this -> load -> model('admin/Explore_model');
            $this -> load -> model('admin/Navigation_model');
            $this -> load -> model('admin/Bottom_model');
            $this -> load -> model('admin/Background_model');
            $this -> load -> model('admin/Side_model');
            $this -> load -> model('admin/Text_model');
            $this -> load -> helper(array('form', 'url'));
            $this -> load -> library('session');
            $this -> load -> library('pagination');
        }
        //注册页面
        public function index ()
        {
            $this -> load -> view('admin/login');
        }

        public function login ()
        {

			if(is_array($_GET)&&count($_GET)>0){//判断是否有Get参数
				if(isset($_GET["lang"])){//判断所需要的参数是否存在，isset用来检测变量是否设置，返回true or false
					$lang=$_GET["lang"];//存在
				}
			}else{
				$lang = 'cn';
			}

			if ($lang == 'cn'){
				$language = 'chinese';
			}else{
				$language = 'english';
			}
			$this -> lang ->load($lang,$language);


            $user = $this->session->userdata('user');
            $data['username']=$user['username'];
            $data['lang']=$lang;
			$data['content'] = $this->lang->line("content");

//			echo '<pre>';
//			print_r($data) ;exit;



            $this -> load -> view('admin/index',$data);
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

            if(!isset($_GET['lang'])){
                $data['product'] = $this -> Product_model -> get($result);
            }else{
                $product = $this -> Product_model -> get($result);
                foreach ($product as $k=>$v)
                {
                    $data['product'][$k]['brand_id'] = $v['brand_id'];
                    $data['product'][$k]['time'] = $v['time'];
                    $data['product'][$k]['product_brand'] = $v['product_brand_en'];
                    $data['product'][$k]['status'] = $v['status'];
                    $data['product'][$k]['lang'] = 'en';
                }
            }
            $this -> load -> view('admin/product_brand', $data);

        }

        public function product_brand_add ()
        {
            $this -> load -> view('admin/product_brand_add');
        }

        public function product_brand_edit ()
        {
            $result = $_GET['id'];
            if(!isset($_GET['lang'])){
                $data['product_brand'] = $this -> Product_model -> get($result);
            }else{
                $product_brand = $this -> Product_model -> get($result);
                $data['product_brand']['brand_id'] = $product_brand['brand_id'];
                $data['product_brand']['product_brand'] = $product_brand['product_brand_en'];
                $data['product_brand']['time'] = $product_brand['time'];
                $data['product_brand']['status'] = $product_brand['status'];
                $data['product_brand']['lang'] = 'en';
            }
            $this -> load -> view('admin/product_brand_edit', $data);

        }
        //类型管理
        public function product_category ()
        {
            $result= '';
            if(!isset($_GET['lang'])){
                $data['category'] = $this -> Category_model -> get($result);
            }else{
                $category = $this -> Category_model -> get($result);
                foreach ($category as $k=>$v)
                {
                    $data['category'][$k]['category_id'] = $v['category_id'];
                    $data['category'][$k]['time'] = $v['time'];
                    $data['category'][$k]['category_name'] = $v['category_name_en'];
                    $data['category'][$k]['lang'] = 'en';
                }
            }


            $this -> load -> view('admin/product_category',$data);

        }

        public function product_category_add ()
        {
            $this -> load -> view('admin/product_category_add',$data);

        }

        public function product_category_edit ()
        {
            $result = $_GET['id'];

            if(!isset($_GET['lang'])){
                $data['category'] = $this -> Category_model -> get($result);
            }else{
                $category = $this -> Category_model -> get($result);
                $data['category']['category_id'] = $category['category_id'];
                $data['category']['time'] = $category['time'];
                $data['category']['category_name'] = $category['category_name_en'];
                $data['category']['lang'] = 'en';
            }

            $this -> load -> view('admin/product_category_edit',$data);

        }
        //产品管理
        public function product_list ()
        {
            $result= '';
            if(!isset($_GET['lang'])){
                $data['list'] = $this -> List_model -> get($result);
            }else{
                $list = $this -> List_model -> get($result);
                foreach ($list as $k=>$v)
                {
                    $data['list'][$k]['id'] = $v['id'];
                    $data['list'][$k]['category'] = $v['category'];
                    $data['list'][$k]['brand'] = $v['brand'];
                    $data['list'][$k]['productitle'] = $v['productitle_en'];
                    $data['list'][$k]['stroke'] = $v['stroke_en'];
                    $data['list'][$k]['displacement'] = $v['displacement_en'];
                    $data['list'][$k]['reartyre'] = $v['reartyre_en'];
                    $data['list'][$k]['fronttire'] = $v['fronttire_en'];
                    $data['list'][$k]['rearbrake'] = $v['rearbrake_en'];
                    $data['list'][$k]['seatheight'] = $v['seatheight_en'];
                    $data['list'][$k]['capacity'] = $v['capacity_en'];
                    $data['list'][$k]['windshield'] = $v['windshield_en'];
                    $data['list'][$k]['text'] = $v['text_en'];
                    $data['list'][$k]['frontbrake'] = $v['frontbrake_en'];
                    $data['list'][$k]['compression'] = $v['compression_en'];
                    $data['list'][$k]['day_price'] = $v['day_price_en'];
                    $data['list'][$k]['week_price'] = $v['week_price_en'];
                    $data['list'][$k]['statu'] = $v['statu'];
                    $data['list'][$k]['product_brand'] = $v['product_brand_en'];
                    $data['list'][$k]['category_name'] = $v['category_name_en'];
                    $data['list'][$k]['cit_id'] = $v['cit_id'];
                    $data['list'][$k]['image'] = $v['image'];
                    $data['list'][$k]['lang'] = 'en';
                }
            }
            $this -> load -> view('admin/product_list',$data);

        }
        public function product_list_add ()
        {
            $result= '';
            $data['category'] = $this -> Category_model -> get($result);
            $data['brand'] = $this -> Product_model -> get($result);
            $data['city'] = $this -> City_model -> get($result);

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
            $data['list'] = $this -> List_model -> get($result);
            if(!isset($_GET['lang'])){
                $data['list'] = $this -> List_model -> get($result);
            }else{
                $list = $this -> List_model -> get($result);
                $data['list']['id'] = $list['id'];
                $data['list']['category'] = $list['category'];
                $data['list']['brand'] = $list['brand'];
                $data['list']['productitle'] = $list['productitle_en'];
                $data['list']['stroke'] = $list['stroke_en'];
                $data['list']['displacement'] = $list['displacement_en'];
                $data['list']['reartyre'] = $list['reartyre_en'];
                $data['list']['fronttire'] = $list['fronttire_en'];
                $data['list']['rearbrake'] = $list['rearbrake_en'];
                $data['list']['seatheight'] = $list['seatheight_en'];
                $data['list']['capacity'] = $list['capacity_en'];
                $data['list']['windshield'] = $list['windshield_en'];
                $data['list']['text'] = $list['text_en'];
                $data['list']['frontbrake'] = $list['frontbrake_en'];
                $data['list']['compression'] = $list['compression_en'];
                $data['list']['day_price'] = $list['day_price_en'];
                $data['list']['week_price'] = $list['week_price_en'];
                $data['list']['statu'] = $list['statu'];
                $data['list']['product_brand'] = $list['product_brand_en'];
                $data['list']['category_name'] = $list['category_name_en'];
                $data['list']['cit_id'] = $list['cit_id'];
                $data['list']['image'] = $list['image'];
                $data['list']['brand_id'] = $list['brand_id'];
                $data['list']['category_id'] = $list['category_id'];
                $data['list']['lang'] = 'en';
            }
            $this -> load -> view('admin/product_list_details',$data);

        }

        public function product_list_edit ()
        {
            $id= $_GET['id'];

            $result= '';
            if(!isset($_GET['lang'])){
                $data['list'] = $this -> List_model -> get($id);
                $data['category'] = $this -> Category_model -> get($result);
                $data['brand'] = $this -> Product_model -> get($result);
                $data['city'] = $this -> City_model -> get($result);
            }else{
                $list = $this -> List_model -> get($id);
                $data['list']['id'] = $list['id'];
                $data['list']['category'] = $list['category'];
                $data['list']['brand'] = $list['brand'];
                $data['list']['productitle'] = $list['productitle_en'];
                $data['list']['stroke'] = $list['stroke_en'];
                $data['list']['displacement'] = $list['displacement_en'];
                $data['list']['reartyre'] = $list['reartyre_en'];
                $data['list']['fronttire'] = $list['fronttire_en'];
                $data['list']['rearbrake'] = $list['rearbrake_en'];
                $data['list']['seatheight'] = $list['seatheight_en'];
                $data['list']['capacity'] = $list['capacity_en'];
                $data['list']['windshield'] = $list['windshield_en'];
                $data['list']['text'] = $list['text_en'];
                $data['list']['frontbrake'] = $list['frontbrake_en'];
                $data['list']['compression'] = $list['compression_en'];
                $data['list']['day_price'] = $list['day_price_en'];
                $data['list']['week_price'] = $list['week_price_en'];
                $data['list']['statu'] = $list['statu'];
                $data['list']['product_brand'] = $list['product_brand_en'];
                $data['list']['category_name'] = $list['category_name_en'];
                $data['list']['cit_id'] = $list['cit_id'];
                $data['list']['image'] = $list['image'];
                $data['list']['brand_id'] = $list['brand_id'];
                $data['list']['category_id'] = $list['category_id'];
                $data['list']['lang'] = 'en';
                $category = $this -> Category_model -> get($result);
                foreach ($category as $k=>$v)
                {
                    $data['category'][$k]['category_id'] = $v['category_id'];
                    $data['category'][$k]['time'] = $v['time'];
                    $data['category'][$k]['category_name'] = $v['category_name_en'];
                    $data['category'][$k]['lang'] = 'en';
                }
                $product = $this -> Product_model -> get($result);
                foreach ($product as $k=>$v)
                {
                    $data['brand'][$k]['brand_id'] = $v['brand_id'];
                    $data['brand'][$k]['time'] = $v['time'];
                    $data['brand'][$k]['product_brand'] = $v['product_brand_en'];
                    $data['brand'][$k]['status'] = $v['status'];
                    $data['brand'][$k]['lang'] = 'en';
                }
                $city = $this -> City_model -> get($result);
                foreach ($city as $k=>$v)
                {
                    $data['city'][$k]['cit_id'] = $v['cit_id'];
                    $data['city'][$k]['cit_name'] = $v['cit_name_en'];
                    $data['city'][$k]['address'] = $v['address_en'];
                    $data['city'][$k]['information'] = $v['information_en'];
                    $data['city'][$k]['time'] = $v['time_en'];
                    $data['city'][$k]['valder'] = $v['valder_en'];
                    $data['city'][$k]['text'] = $v['text_en'];
                    $data['city'][$k]['lang'] = 'en';
                }
            }



            $this -> load -> view('admin/product_list_edit',$data);

        }
        //城市管理
        public function city ()
        {
            $result= '';
            if(!isset($_GET['lang'])){
                $data['cites'] = $this->City_model->get();
            }else
            {
                $city = $this -> City_model -> get($result);
                foreach ($city as $k => $v)
                {
                    $data['cites'][$k]['cit_id'] = $v['cit_id'];
                    $data['cites'][$k]['status'] = $v['status'];
                    $data['cites'][$k]['cit_name'] = $v['cit_name_en'];
                    $data['cites'][$k]['address'] = $v['address_en'];
                    $data['cites'][$k]['information'] = $v['information_en'];
                    $data['cites'][$k]['time'] = $v['time_en'];
                    $data['cites'][$k]['valder'] = $v['valder_en'];
                    $data['cites'][$k]['text'] = $v['text_en'];
                    $data['cites'][$k]['logo'] = $v['logo'];
                    $data['cites'][$k]['lang'] = 'en';
                }
            }
            $this -> load -> view('admin/city',$data);

        }
        public function city_add ()
        {

            $this -> load -> view('admin/city_add');

        }
        public function city_edit ()
        {
            $id = $_GET['id'];
            if(!isset($_GET['lang'])){
                $data['cite_edit'] = $this->City_model->get_city($id);
            }else{
                $cite_edit = $this->City_model->get_city($id);
                $data['cite_edit']['cit_id'] = $cite_edit['cit_id'];
                $data['cite_edit']['status'] = $cite_edit['status'];
                $data['cite_edit']['logo'] = $cite_edit['logo'];
                $data['cite_edit']['cit_name'] = $cite_edit['cit_name_en'];
                $data['cite_edit']['address'] = $cite_edit['address_en'];
                $data['cite_edit']['information'] = $cite_edit['information_en'];
                $data['cite_edit']['time'] = $cite_edit['time_en'];
                $data['cite_edit']['valder'] = $cite_edit['valder_en'];
                $data['cite_edit']['text'] = $cite_edit['text_en'];
                $data['cite_edit']['lang'] ='en';
            }

            $this -> load -> view('admin/city_edit',$data);

        }
        //特惠管理
        public function promotions ()
        {
            $result= '';
            if(!isset($_GET['lang'])){
                $data['promotions'] = $this -> Promotions_model -> get($result);
            }else{
                $promotions = $this -> Promotions_model -> get($result);
                foreach ($promotions as $k=>$v)
                {
                    $data['promotions'][$k]['id'] = $v['id'];
                    $data['promotions'][$k]['promtitle'] = $v['promtitle_en'];
                    $data['promotions'][$k]['price'] = $v['price_en'];
                    $data['promotions'][$k]['worth'] = $v['worth_en'];
                    $data['promotions'][$k]['discount'] = $v['discount_en'];
                    $data['promotions'][$k]['save'] = $v['save_en'];
                    $data['promotions'][$k]['booking'] = $v['booking_en'];
                    $data['promotions'][$k]['during'] = $v['during_en'];
                    $data['promotions'][$k]['thecar'] = $v['thecar_en'];
                    $data['promotions'][$k]['vehicles'] = $v['vehicles_en'];
                    $data['promotions'][$k]['day'] = $v['day_en'];
                    $data['promotions'][$k]['terms'] = $v['terms_en'];
                    $data['promotions'][$k]['city'] = $v['city_en'];
                    $data['promotions'][$k]['text'] = $v['text_en'];
                    $data['promotions'][$k]['cartime'] = $v['cartime_en'];
                    $data['promotions'][$k]['image'] = $v['image'];
                    $data['promotions'][$k]['status'] = $v['status'];
                    $data['promotions'][$k]['lang'] ='en';
                }
            }
            $this -> load -> view('admin/promotions',$data);

        }
        public function promotions_add ()
        {

            $this -> load -> view('admin/promotions_add');

        }

        public function promotions_edit ()
        {
            $id = $_GET['id'];
            if(!isset($_GET['lang'])){
                $data['promotions'] = $this -> Promotions_model -> get($id);
            }else{
                $promotions = $this -> Promotions_model -> get($id);
                $data['promotions']['id'] = $promotions['id'];
                $data['promotions']['promtitle'] = $promotions['promtitle_en'];
                $data['promotions']['price'] = $promotions['price_en'];
                $data['promotions']['worth'] = $promotions['worth_en'];
                $data['promotions']['discount'] = $promotions['discount_en'];
                $data['promotions']['save'] = $promotions['save_en'];
                $data['promotions']['booking'] = $promotions['booking_en'];
                $data['promotions']['during'] = $promotions['during_en'];
                $data['promotions']['thecar'] = $promotions['thecar_en'];
                $data['promotions']['vehicles'] = $promotions['vehicles_en'];
                $data['promotions']['day'] = $promotions['day_en'];
                $data['promotions']['terms'] = $promotions['terms_en'];
                $data['promotions']['city'] = $promotions['city_en'];
                $data['promotions']['text'] = $promotions['text_en'];
                $data['promotions']['cartime'] = $promotions['cartime_en'];
                $data['promotions']['image'] = $promotions['image'];
                $data['promotions']['status'] = $promotions['status'];
                $data['promotions']['lang'] ='en';
            }
            $this -> load -> view('admin/promotions_edit',$data);
        }
        //活动管理
        public function column ()
        {
            $result= '';
            if(!isset($_GET['lang'])){
                $data['column'] = $this -> Column_model -> get($result);
            }else{
                $column = $this -> Column_model -> get($result);
                foreach ($column as $k=>$v)
                {
                    $data['column'][$k]['column_id'] = $v['column_id'];
                    $data['column'][$k]['column_name'] = $v['column_name_en'];
                    $data['column'][$k]['status'] = $v['status'];
                    $data['column'][$k]['lang'] ='en';
                }
            }
            $this -> load -> view('admin/column', $data);

        }

        public function column_add ()
        {

            $this -> load -> view('admin/column_add');

        }

        public function column_edit ()
        {
            $result = $_GET['id'];
            if(!isset($_GET['lang'])){
                $data['column'] = $this -> Column_model -> get($result);
            }else{
                $column = $this -> Column_model -> get($result);
                $data['column']['column_id'] = $column['column_id'];
                $data['column']['column_name'] = $column['column_name_en'];
                $data['column']['status'] = $column['status'];
                $data['column']['lang'] ='en';
            }

            $this -> load -> view('admin/column_edit', $data);

        }

    //活动管理
        public function activityedit ()
        {
            $result= '';
            if(!isset($_GET['lang'])){
                $data['activityedit'] = $this -> Activityedit_model -> get($result);
            }else{
                $activityedit = $this -> Activityedit_model -> get($result);
                foreach ($activityedit as $k=>$v)
                {
                    $data['activityedit'][$k]['id'] = $v['id'];
                    $data['activityedit'][$k]['image'] = $v['image'];
                    $data['activityedit'][$k]['column_id'] = $v['column_id'];
                    $data['activityedit'][$k]['activititle'] = $v['activititle_en'];
                    $data['activityedit'][$k]['starttime'] = $v['starttime_en'];
                    $data['activityedit'][$k]['endtime'] = $v['endtime_en'];
                    $data['activityedit'][$k]['text'] = $v['text_en'];
                    $data['activityedit'][$k]['contact'] = $v['contact_en'];
                    $data['activityedit'][$k]['column_name'] = $v['column_name_en'];
                    $data['activityedit'][$k]['lang'] ='en';
                }
            }
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
            if(!isset($_GET['lang'])){
                $data['column'] = $this -> Column_model -> get($result);
                $data['activityedit'] = $this -> Activityedit_model -> get($id);
            }else
            {
                $column = $this -> Column_model -> get($result);
                foreach ($column as $k=>$v)
                {
                    $data['column'][$k]['column_id'] = $v['column_id'];
                    $data['column'][$k]['column_name'] = $v['column_name_en'];
                    $data['column'][$k]['status'] = $v['status'];
                    $data['column'][$k]['lang'] ='en';
                }
                $activityedit = $this -> Activityedit_model -> get($id);
                $data['activityedit']['id'] = $activityedit['id'];
                $data['activityedit']['image'] = $activityedit['image'];
                $data['activityedit']['column_id'] = $activityedit['column_id'];
                $data['activityedit']['activititle'] = $activityedit['activititle_en'];
                $data['activityedit']['starttime'] = $activityedit['starttime_en'];
                $data['activityedit']['endtime'] = $activityedit['endtime_en'];
                $data['activityedit']['text'] = $activityedit['text_en'];
                $data['activityedit']['contact'] = $activityedit['contact_en'];
                $data['activityedit']['lang'] ='en';
            }


            $this -> load -> view('admin/activityedit_edit',$data);
        }


        //自驾游管理
        public function uriving ()
        {
            $result= '';
            if(!isset($_GET['lang'])){
                $data['uriving'] = $this -> Uriving_model -> get($result);
            }else{
                $uriving = $this -> Uriving_model -> get($result);
                foreach ($uriving as $k=>$v)
                {
                    $data['uriving'][$k]['id'] = $v['id'];
                    $data['uriving'][$k]['urivingtitle'] = $v['urivingtitle_en'];
                    $data['uriving'][$k]['day'] = $v['day_en'];
                    $data['uriving'][$k]['season'] = $v['season_en'];
                    $data['uriving'][$k]['temperature'] = $v['temperature_en'];
                    $data['uriving'][$k]['schedule'] = $v['schedule_en'];
                    $data['uriving'][$k]['kilometers'] = $v['kilometers_en'];
                    $data['uriving'][$k]['text'] = $v['text_en'];
                    $data['uriving'][$k]['time'] = $v['time'];
                    $data['uriving'][$k]['price'] = $v['price'];
                    $data['uriving'][$k]['image'] = $v['image'];
                    $data['uriving'][$k]['cit_id'] = $v['cit_id'];
                    $data['uriving'][$k]['status'] = $v['status'];
                    $data['uriving'][$k]['lang'] ='en';
                }
            }
            $this -> load -> view('admin/uriving',$data);

        }
        public function uriving_add ()
        {
            $result= '';
            $data['city'] = $this -> City_model -> get($result);

            $this -> load -> view('admin/uriving_add',$data);

        }

        public function uriving_edit ()
        {
            $id = $_GET['id'];
            $result= '';
            if(!isset($_GET['lang'])){
                $data['uriving'] = $this -> Uriving_model -> get($id);
                $data['city'] = $this -> City_model -> get($result);
            }else
            {
                $uriving = $this -> Uriving_model -> get($id);
                $data['uriving']['id'] = $uriving['id'];
                $data['uriving']['urivingtitle'] = $uriving['urivingtitle_en'];
                $data['uriving']['day'] = $uriving['day_en'];
                $data['uriving']['season'] = $uriving['season_en'];
                $data['uriving']['temperature'] = $uriving['temperature_en'];
                $data['uriving']['schedule'] = $uriving['schedule_en'];
                $data['uriving']['kilometers'] = $uriving['kilometers_en'];
                $data['uriving']['text'] = $uriving['text_en'];
                $data['uriving']['time'] = $uriving['time'];
                $data['uriving']['price'] = $uriving['price'];
                $data['uriving']['image'] = $uriving['image'];
                $data['uriving']['cit_id'] = $uriving['cit_id'];
                $data['uriving']['status'] = $uriving['status'];
                $data['uriving']['lang'] = 'en';
                $city = $this -> City_model -> get($result);
                foreach ($city as $k => $v)
                {
                    $data['city'][$k]['cit_id'] = $v['cit_id'];
                    $data['city'][$k]['status'] = $v['status'];
                    $data['city'][$k]['cit_name'] = $v['cit_name_en'];
                    $data['city'][$k]['address'] = $v['address_en'];
                    $data['city'][$k]['information'] = $v['information_en'];
                    $data['city'][$k]['time'] = $v['time_en'];
                    $data['city'][$k]['valder'] = $v['valder_en'];
                    $data['city'][$k]['text'] = $v['text_en'];
                    $data['city'][$k]['logo'] = $v['logo'];
                    $data['city'][$k]['lang'] = 'en';
                }
            }
            $this -> load -> view('admin/uriving_edit',$data);
        }
        //团队游管理
        public function team ()
        {
            $result= '';

            if(!isset($_GET['lang'])){
                $data['team'] = $this -> Team_model -> get($result);
            }else{
                $team = $this -> Team_model -> get($result);
                foreach ($team as $k=>$v)
                {
                    $data['team'][$k]['id'] = $v['id'];
                    $data['team'][$k]['teamtitle'] = $v['teamtitle_en'];
                    $data['team'][$k]['day'] = $v['day_en'];
                    $data['team'][$k]['season'] = $v['season_en'];
                    $data['team'][$k]['temperature'] = $v['temperature_en'];
                    $data['team'][$k]['schedule'] = $v['schedule_en'];
                    $data['team'][$k]['kilometers'] = $v['kilometers_en'];
                    $data['team'][$k]['text'] = $v['text_en'];
                    $data['team'][$k]['time'] = $v['time'];
                    $data['team'][$k]['price'] = $v['price'];
                    $data['team'][$k]['image'] = $v['image'];
                    $data['team'][$k]['cit_id'] = $v['cit_id'];
                    $data['team'][$k]['status'] = $v['status'];
                    $data['team'][$k]['lang'] ='en';
                }
            }
            $this -> load -> view('admin/team',$data);

        }
        public function team_add ()
        {
            $result= '';
            $data['city'] = $this -> City_model -> get($result);
            $this -> load -> view('admin/team_add',$data);

        }

        public function team_edit ()
        {
            $id = $_GET['id'];
            $result= '';
            if(!isset($_GET['lang'])){
                $data['team'] = $this -> Team_model -> get($id);
                $data['city'] = $this -> City_model -> get($result);
            }else
            {
                $team = $this -> Team_model -> get($id);
                $data['team']['id'] = $team['id'];
                $data['team']['teamtitle'] = $team['teamtitle_en'];
                $data['team']['day'] = $team['day_en'];
                $data['team']['season'] = $team['season_en'];
                $data['team']['temperature'] = $team['temperature_en'];
                $data['team']['schedule'] = $team['schedule_en'];
                $data['team']['kilometers'] = $team['kilometers_en'];
                $data['team']['text'] = $team['text_en'];
                $data['team']['time'] = $team['time'];
                $data['team']['price'] = $team['price'];
                $data['team']['image'] = $team['image'];
                $data['team']['cit_id'] = $team['cit_id'];
                $data['team']['status'] = $team['status'];
                $data['team']['lang'] = 'en';
                $city = $this -> City_model -> get($result);
                foreach ($city as $k => $v)
                {
                    $data['city'][$k]['cit_id'] = $v['cit_id'];
                    $data['city'][$k]['status'] = $v['status'];
                    $data['city'][$k]['cit_name'] = $v['cit_name_en'];
                    $data['city'][$k]['address'] = $v['address_en'];
                    $data['city'][$k]['information'] = $v['information_en'];
                    $data['city'][$k]['time'] = $v['time_en'];
                    $data['city'][$k]['valder'] = $v['valder_en'];
                    $data['city'][$k]['text'] = $v['text_en'];
                    $data['city'][$k]['logo'] = $v['logo'];
                    $data['city'][$k]['lang'] = 'en';
                }
            }
            $this -> load -> view('admin/team_edit',$data);
        }


        public function topic ()
        {
            $result= '';
            if(!isset($_GET['lang'])){
                $data['topic'] = $this -> Topic_model -> get($result);
            }else{
                $topic = $this -> Topic_model -> get($result);
                foreach ($topic as $k=>$v)
                {
                    $data['topic'][$k]['topic_id'] = $v['topic_id'];
                    $data['topic'][$k]['topictitle'] = $v['topictitle_en'];
                    $data['topic'][$k]['image'] = $v['image'];
                    $data['topic'][$k]['text'] = $v['text_en'];
                    $data['topic'][$k]['galleryimage'] = $v['galleryimage_en'];
                    $data['topic'][$k]['lang'] ='en';
                }
            }
            $this -> load -> view('admin/topic',$data);

        }
        public function topic_add ()
        {

            $this -> load -> view('admin/topic_add');

        }

        public function topic_edit ()
        {
            $id = $_GET['id'];
            if(!isset($_GET['lang'])){
                $data['topic'] = $this -> Topic_model -> get($id);
            }else{
                $topic = $this -> Topic_model -> get($id);
                $data['topic']['topic_id'] = $topic['topic_id'];
                $data['topic']['topictitle'] = $topic['topictitle_en'];
                $data['topic']['image'] = $topic['image'];
                $data['topic']['text'] = $topic['text_en'];
                $data['topic']['galleryimage'] = $topic['galleryimage_en'];
                $data['topic']['lang'] ='en';
            }


            $this -> load -> view('admin/topic_edit',$data);
        }
        //探索方式
        public function explore ()
        {
            $result= '';
            if(!isset($_GET['lang'])){
                $data['explore'] = $this -> Explore_model -> get($result);
            }else{
                $explore = $this -> Explore_model -> get($result);
                foreach ($explore as $k=>$v)
                {
                    $data['explore'][$k]['explore_id'] = $v['explore_id'];
                    $data['explore'][$k]['increase_name'] = $v['increase_name_en'];
                    $data['explore'][$k]['text'] = $v['text_en'];
                    $data['explore'][$k]['motorcycle'] = $v['motorcycle'];
                    $data['explore'][$k]['friendly'] = $v['friendly'];
                    $data['explore'][$k]['customize'] = $v['customize'];
                    $data['explore'][$k]['routes'] = $v['routes'];
                    $data['explore'][$k]['eaglerider'] = $v['eaglerider'];
                    $data['explore'][$k]['support'] = $v['support'];
                    $data['explore'][$k]['spare'] = $v['spare'];
                    $data['explore'][$k]['professional'] = $v['professional'];
                    $data['explore'][$k]['bilingual'] = $v['bilingual'];
                    $data['explore'][$k]['experience'] = $v['experience'];
                    $data['explore'][$k]['breakfast'] = $v['breakfast'];
                    $data['explore'][$k]['gasolin'] = $v['gasolin'];
                    $data['explore'][$k]['banquet'] = $v['banquet'];
                    $data['explore'][$k]['farewell'] = $v['farewell'];
                    $data['explore'][$k]['price'] = $v['price_en'];
                    $data['explore'][$k]['lang'] ='en';
                }
            }
            $this -> load -> view('admin/explore',$data);

        }
        public function explore_add ()
        {
                $id = $_GET['id'];
            if(!isset($_GET['lang'])){
                $data['explore'] = $this -> Explore_model -> get($id);
            }else
            {
                $explore = $this -> Explore_model -> get($id);
                $data['explore']['explore_id'] = $explore['explore_id'];
                $data['explore']['increase_name'] = $explore['increase_name_en'];
                $data['explore']['text'] = $explore['text_en'];
                $data['explore']['motorcycle'] = $explore['motorcycle'];
                $data['explore']['friendly'] = $explore['friendly'];
                $data['explore']['customize'] = $explore['customize'];
                $data['explore']['routes'] = $explore['routes'];
                $data['explore']['eaglerider'] = $explore['eaglerider'];
                $data['explore']['support'] = $explore['support'];
                $data['explore']['spare'] = $explore['spare'];
                $data['explore']['professional'] = $explore['professional'];
                $data['explore']['bilingual'] = $explore['bilingual'];
                $data['explore']['experience'] = $explore['experience'];
                $data['explore']['breakfast'] = $explore['breakfast'];
                $data['explore']['gasolin'] = $explore['gasolin'];
                $data['explore']['banquet'] = $explore['banquet'];
                $data['explore']['farewell'] = $explore['farewell'];
                $data['explore']['price'] = $explore['price_en'];
                $data['explore']['text'] = $explore['text_en'];
                $data['explore']['lang'] = 'en';
            }
                $this -> load -> view('admin/explore_add',$data);
        }
        //导航
        public function navigation ()
        {
            $result= '';
            if(isset($_GET['lang'])){
                $navResult = $this -> Navigation_model -> get_name($result);
                $data['navigation'][0]['navigation_id'] = $navResult[0]['navigation_id'];
                $data['navigation'][0]['navigation_name'] = $navResult[0]['navigation_name_en'];
                $data['navigation'][0]['lease_name'] = $navResult[0]['lease_name_en'];
                $data['navigation'][0]['hotel_name'] = $navResult[0]['hotel_name_en'];
                $data['navigation'][0]['promotions_name'] = $navResult[0]['promotions_name_en'];
                $data['navigation'][0]['activity_name'] = $navResult[0]['activity_name_en'];
                $data['navigation'][0]['city_name'] = $navResult[0]['city_name_en'];
                $data['navigation'][0]['online_name'] = $navResult[0]['online_name_en'];
                $data['navigation'][0]['lang'] = 'en';
            }else{
                $data['navigation'] = $this -> Navigation_model -> get_name($result);
            }
            $this -> load -> view('admin/navigation',$data);

        }

        public function navigation_edit ()
        {
            $result['navigation_id']= $_GET['id'];
            if(!isset($_GET['lang'])){
                $data['navigation'] = $this -> Navigation_model -> get_name($result);
            }else{
                $navigation = $this -> Navigation_model -> get_name($result);
                $data['navigation']['navigation_id'] = $navigation['navigation_id'];
                $data['navigation']['navigation_name'] = $navigation['navigation_name_en'];
                $data['navigation']['lease_name'] = $navigation['lease_name_en'];
                $data['navigation']['hotel_name'] = $navigation['hotel_name_en'];
                $data['navigation']['promotions_name'] = $navigation['promotions_name_en'];
                $data['navigation']['activity_name'] = $navigation['activity_name_en'];
                $data['navigation']['city_name'] = $navigation['city_name_en'];
                $data['navigation']['online_name'] = $navigation['online_name_en'];
                $data['navigation']['lang'] = 'en';
            }


            $this -> load -> view('admin/navigation_edit',$data);

        }
        //底部
        public function bottom ()
        {
            $result= '';
            if(!isset($_GET['lang'])){
                $data['bottom'] = $this -> Bottom_model -> get_name($result);
            }else{
                $bottom = $this -> Bottom_model -> get_name($result);
                foreach ($bottom as $k=>$v)
                {
                    $data['bottom'][$k]['bottom_id'] = $v['bottom_id'];
                    $data['bottom'][$k]['navigation_name'] = $v['navigation_name'];
                    $data['bottom'][$k]['bottom_text'] = $v['bottom_text_en'];
                    $data['bottom'][$k]['lang'] ='en';
                }
            }
            $this -> load -> view('admin/bottom',$data);

        }

        public function bottom_edit ()
        {
            $result['bottom_id']= $_GET['id'];
            if(!isset($_GET['lang'])){
                $data['bottom'] = $this -> Bottom_model -> get_name($result);
            }else{
                $bottom = $this -> Bottom_model -> get_name($result);
                $data['bottom']['bottom_id'] = $bottom['bottom_id'];
                $data['bottom']['navigation_name'] = $bottom['navigation_name'];
                $data['bottom']['bottom_text'] = $bottom['bottom_text_en'];
                $data['bottom']['lang'] ='en';
            }
            $this -> load -> view('admin/bottom_edit',$data);

        }
        //底部
        public function background ()
        {
            $result= '';
            if(!isset($_GET['lang'])){
                $data['background'] = $this -> Background_model -> get_name($result);
            }else{
                $background = $this -> Background_model -> get_name($result);
                foreach ($background as $k=>$v)
                {
                    $data['background'][$k]['id'] = $v['id'];
                    $data['background'][$k]['belongs'] = $v['belongs'];
                    $data['background'][$k]['image'] = $v['image'];
                    $data['background'][$k]['price'] = $v['price_en'];
                    $data['background'][$k]['title'] = $v['title_en'];
                    $data['background'][$k]['head'] = $v['head_en'];
                    $data['background'][$k]['foot'] = $v['foot_en'];
                    $data['background'][$k]['foot'] = $v['foot_en'];
                    $data['background'][$k]['central'] = $v['central_en'];
                    $data['background'][$k]['lang'] = 'en';
                }
            }

            $this -> load -> view('admin/background',$data);

        }

        public function background_edit ()
        {
            $result['id']= $_GET['id'];
            if(!isset($_GET['lang'])){
                $data['background'] = $this -> Background_model -> get_name($result);
            }else{
                $background = $this -> Background_model -> get_name($result);

                $data['background']['id'] = $background['id'];
                $data['background']['belongs'] = $background['belongs'];
                $data['background']['image'] = $background['image'];
                $data['background']['price'] = $background['price_en'];
                $data['background']['title'] = $background['title_en'];
                $data['background']['head'] = $background['head_en'];
                $data['background']['foot'] = $background['foot_en'];
                $data['background']['foot'] = $background['foot_en'];
                $data['background']['central'] = $background['central_en'];
                $data['background']['lang'] = 'en';
            }

            $this -> load -> view('admin/background_edit',$data);

        }

        //底部
        public function side ()
        {
            $result= '';
            if(!isset($_GET['lang'])){
                $data['side'] = $this -> Side_model -> get_name($result);
            }else{
                $side = $this -> Side_model -> get_name($result);
                $data['side'][0]['lang'] = 'en';
                $data['side'][0]['id'] = $side[0]['id'];
                $data['side'][0]['title'] = $side[0]['title_en'];
                $data['side'][0]['head'] = $side[0]['head_en'];
                $data['side'][0]['foot'] = $side[0]['foot_en'];
                $data['side'][0]['image'] = $side[0]['image'];
            }


            $this -> load -> view('admin/side',$data);

        }

        public function side_edit ()
        {
            $result['id']= $_GET['id'];
            if(!isset($_GET['lang'])){
                $data['side'] = $this -> Side_model -> get_name($result);
            }else{
                $side = $this -> Side_model -> get_name($result);
                $data['side']['lang'] = 'en';
                $data['side']['id'] = $side['id'];
                $data['side']['title'] = $side['title_en'];
                $data['side']['head'] = $side['head_en'];
                $data['side']['foot'] = $side['foot_en'];
                $data['side']['image'] = $side['image'];
            }


            $this -> load -> view('admin/side_edit',$data);

        }
    //底部
        public function text ()
        {
            $result= '';
            if(!isset($_GET['lang'])){
                $data['text'] = $this -> Text_model -> get_name_all($result);
            }else{
                $text = $this -> Text_model -> get_name_all($result);
                foreach ($text as $k=>$v)
                {
                    $data['text'][$k]['lang'] = 'en';
                    $data['text'][$k]['id'] = $v['id'];
                    $data['text'][$k]['title'] = $v['title_en'];
                    $data['text'][$k]['text'] = $v['text_en'];
                    $data['text'][$k]['image'] = $v['image'];
                    $data['text'][$k]['time'] = $v['time'];
                }

            }
                $this -> load -> view('admin/text',$data);
        }

        public function text_edit ()
        {
            $result['id']= $_GET['id'];
            if(!isset($_GET['lang'])){
                $data['text'] = $this -> Text_model -> get_name($result);
            }else{
                $text = $this -> Text_model -> get_name_all($result);
                $data['text']['lang'] = 'en';
                $data['text']['id'] = $text['id'];
                $data['text']['title'] = $text['title_en'];
                $data['text']['text'] = $text['text_en'];
                $data['text']['image'] = $text['image'];
                $data['text']['time'] = $text['time'];
            }
            $this -> load -> view('admin/text_edit',$data);

        }
    }