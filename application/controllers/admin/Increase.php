<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Increase extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Increase_model');
            $this -> load -> helper(array('form', 'url'));
        }

        //添加
        public function increase_add ()
        {
            parse_str($_POST['str'], $arr);

            $data['increase_name'] = $arr['increase_name'];

            $data['time'] = date('Y-m-d H:i:s');

            if ($arr['increase_name'] !== '')
            {
                if ($this -> Increase_model -> getAll($data))
                {

                    echo 404;

                }
                else
                {
                    if($arr['id'] == ''){

                        if ($this -> Increase_model -> add_increase($data))
                        {

                            echo 200;
                        }
                        else
                        {

                            echo 444;
                        }
                    }else{

                        $data['increase_id'] = $arr['id'];

                        if ($this -> Increase_model -> update_increase($data))
                        {

                            echo 200;
                        }
                        else
                        {

                            echo 444;
                        }

                    }

                }

            }
            else
            {
                echo 500;
            }

        }
        //删除
        public function increase_del ()
        {


            $data['increase_id'] = $_POST['id'];

            if ($this -> Increase_model -> edit_increase($data))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }


    }