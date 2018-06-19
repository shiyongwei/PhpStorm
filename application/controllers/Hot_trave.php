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
        $this -> load -> helper(array('form', 'url'));
    }
    public function index(){
        $rent_list = $this->Product_model->get('');
        $topic = $this->Topic_model->get('');
		$get_limit = $this->City_model->get_limit('');
		$navigation = $this->Navigation_model->get_name('');


        $data['rent_list'] = $rent_list;
        $data['topic'] = $topic;
		$data['navigation'] = $navigation;
		$data['get_limit'] = $get_limit;

        $this -> load -> view('common/home/head',$data,$navigation);
        $this -> load -> view('hot_trave',$topic);
        $this -> load -> view('common/home/foot',$rent_list,$get_limit);
    }
}





?>