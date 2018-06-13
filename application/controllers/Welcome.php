<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
        function __construct(){
            parent::__construct();
            $this->load->model('cx_model');
            $this->load->library('calendar');
        }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $this->load->helper('form','url');  //加载表单辅助函数
		$this->load->view('welcome_message');
	}

        public function ceshi ()
        {
            #验证 省略
            $text['text'] = $this -> input -> post('content');
            if ($this -> cx_model -> add_user($text))
            {
                echo '1';
            }else{
                echo '2';
            }
        }
}
