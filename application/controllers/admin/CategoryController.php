<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryController extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Category_model');
            $this -> load -> helper(array('form', 'url'));
        }

        //添加
        public function category_add ()
        {
            parse_str($_POST['str'], $arr);

            $data['category_name'] = $arr['name'];

            $data['time'] = date('Y-m-d H:i:s');

            if ($arr['name'] !== '')
            {
                if ($this -> Category_model -> getAll($data))
                {

                    echo 404;

                }
                else
                {
                    if ($this -> Category_model -> add_category($data))
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
        public function category_del ()
        {


            $data['category_id'] = $_POST['id'];

            if ($this -> Category_model -> edit_category($data))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }
        //编辑
        public function category_edit ()
        {
            parse_str($_POST['str'], $arr);

            $id = $arr['id'];

            $data['category_name'] = $arr['category_name'];

            if ($arr['category_name'] !== '')
            {
                if ($this -> Category_model -> getAll($data))
                {
                    echo 404;

                }
                else
                {

                    if ($this -> Category_model -> update_category($id, $data))
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

    }