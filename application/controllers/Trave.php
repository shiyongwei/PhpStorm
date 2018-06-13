<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Trave extends CI_Controller{
    public function __construct ()
    {
        parent ::__construct();
        $this -> load -> model('admin/List_model');
        $this -> load -> model('admin/Product_model');
        $this -> load -> helper(array('form', 'url'));
    }
    public function index(){
        $rent_list = $this->Product_model->get('');//热门租赁分类


        $data['rent_list'] = $rent_list;

        $this -> load -> view('common/home/head',$data);
        $this -> load -> view('trave');
        $this -> load -> view('common/home/foot');
    }
}





?>