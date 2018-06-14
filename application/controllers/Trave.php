<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Trave extends CI_Controller{
    public function __construct ()
    {
        parent ::__construct();
        $this -> load -> model('admin/List_model');
        $this -> load -> model('admin/Product_model');
		$this -> load -> model('admin/Navigation_model');
        $this -> load -> helper(array('form', 'url'));
    }
    public function index(){
        $rent_list = $this->Product_model->get('');//热门租赁分类
		$navigation = $this->Navigation_model->get_name('');


        $data['rent_list'] = $rent_list;
		$data['navigation'] = $navigation;

        $this -> load -> view('common/home/head',$data,$navigation);
        $this -> load -> view('trave');
        $this -> load -> view('common/home/foot');
    }
}





?>