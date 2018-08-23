<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Column extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Column_model');
            $this -> load -> helper(array('form', 'url'));
        }

        //添加
        public function column_add ()
        {
            parse_str($_POST['str'], $arr);

            $data['column_name'] = $arr['column_name'];

            $data['status'] = $arr['status'];

            if ($arr['column_name'] !== '')
            {
                if ($this -> Column_model -> getAll($data))
                {

                    echo 404;

                }
                else
                {
                    if ($this -> Column_model -> add_column($data))
                    {

                        echo 200;
                    }
                    else
                    {

                        echo 444;
                    }
                }

            }
            else
            {
                echo 500;
            }

        }
        //删除
        public function column_del ()
        {


            $data = $_POST['column_id'];

            if ($this -> Column_model -> edit_column($data))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }
        //编辑
        public function column_edit ()
        {
            parse_str($_POST['str'], $arr);
            $data['column_id'] = $arr['column_id'];
            $data['status'] = $arr['status'];
            if(!isset($arr['lang'])){
                $data['column_name'] = $arr['column_name'];
            }else{
                $data['column_name_en'] = $arr['column_name'];
            }
            if ($arr['column_name'] !== '')
            {
                if ($this -> Column_model -> getAll($data))
                {
                    echo 404;

                }
                else
                {

                    if ($this -> Column_model -> update_column($data))
                    {

                        echo 200;
                    }
                    else
                    {

                        echo 444;
                    }
                }


            }
            else
            {

                echo 500;

            }

        }

        public function column_status()
        {
            $data['column_id'] = $_POST['column_id'];
            $data['status'] = $_POST['status'];
            if($this->Column_model->update_status($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }

    }