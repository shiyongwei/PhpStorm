<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BrandController extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Product_model');
            $this -> load -> helper(array('form', 'url'));
        }

        //添加
        public function product_add ()
        {
            parse_str($_POST['str'], $arr);

            $data['product_brand'] = $arr['name'];

            $data['time'] = date('Y-m-d H:i:s');

            if ($arr['name'] !== '')
            {
                if ($this -> Product_model -> getAll($data))
                {

                    echo 404;

                }
                else
                {
                    if ($this -> Product_model -> add_product($data))
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
        public function product_del ()
        {


            $data['brand_id'] = $_POST['id'];

            if ($this -> Product_model -> edit_product($data))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }
        //编辑
        public function product_edit ()
        {
            parse_str($_POST['str'], $arr);

            $id = $arr['id'];

            $data['product_brand'] = $arr['product_brand'];

            if ($arr['product_brand'] !== '')
            {
                if ($this -> Product_model -> getAll($data))
                {
                    echo 404;

                }
                else
                {

                    if ($this -> Product_model -> update_product($id, $data))
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

        public function product_status()
        {
            $data['brand_id'] = $_POST['id'];
            $data['status'] = $_POST['status'];
            if($this->Product_model->update_status($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }

    }