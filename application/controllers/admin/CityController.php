<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CityController extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/City_model');
            $this -> load -> helper(array('form', 'url'));

        }

        public function city_add()
        {
            parse_str($_POST['str'], $arr);

            $data['cit_name'] = $arr['cit_name'];


            if ($arr['cit_name'] !== '')
            {
                if ($this -> City_model -> getAll($data))
                {

                    echo 404;

                }
                else
                {

                    if ($this -> City_model -> add_city($data))
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

        public function city_edit()
        {
            parse_str($_POST['str'],$arr);

            $cit_id = $arr['id'];


            # 进行更新
            if ($arr['cit_name'] !== '')
            {
                $data['cit_name'] = $arr['cit_name'];

                if ($this -> City_model -> update_city($data, $cit_id))
                {
                    echo 200;
                }
                else
                {
                    echo 444;
                }
            }else
            {
                echo 444;
            }
        }

        public function city_del()
        {
            $data = $_POST['id'];

            if ($this -> City_model -> del_city($data))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }

        }
    }