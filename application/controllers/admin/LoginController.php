<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/User_model');
            $this -> load -> helper(array('form', 'url'));
        }

        public function login ()
        {



            #登录动作
            parse_str($_POST['str'], $arr);

            $username = $arr['username'];

            $password = $arr['password'];

            if ($username !== '' && $password !== '')
            {

                if ($user = $this -> User_model -> get_user($username, $password))
                {

                    #成功，将用户信息保存至session
                    $session['username'] = $user['username'];


                    $this -> session -> set_userdata('user', $session);

                    echo 200;

                }
                else
                {
                    # error
                    echo 404;

                }

            }
            else
            {

                echo 500;
            }


        }

    #注销动作
        public function logout ()
        {
            $this -> session -> unset_userdata('user');

            redirect('/admin/admin/index');
        }

    #注册
        public function Register ()
        {
            date_default_timezone_set("PRC");

            parse_str($_POST['str'], $arr);

            $data['username'] = $arr['adminName'];
            $data['password'] = $arr['password'];
            $data['time'] = date('Y-m-d H:i:s');

            if (empty($arr['id']))
            {
                if ($this -> User_model -> sel_user($data['username']))
                {
                    #密码不可用
                    echo 222;
                }
                else
                {

                    if ( !preg_match('/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9a-zA-Z]+$/', $arr['password']))
                    {
                        #密码不可用
                        echo 404;
                    }
                    else
                    {
                        if ($this -> User_model -> add_user($data))
                        {
                            #成功，将用户信息保存至session

                            $session['username'] = $arr['adminName'];

                            $this -> session -> set_userdata('user', $session);

                            # 注册成功
                            echo 200;
                        }
                        else
                        {
                            # 注册失败
                            echo 404;
                        }
                    }

                }
            }
            else
            {
                $pass = $arr['pass'];
                $id['id'] = $arr['id'];
                $id = $this -> User_model -> get($id);
                if ($id['password'] == $arr['pass'])
                {
                    if ( !preg_match('/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9a-zA-Z]+$/', $arr['password']))
                    {
                        #密码不可用
                        echo 404;
                    }
                    else
                    {
                        $data['id'] = $arr['id'];
                        $data['username'] = $arr['adminName'];
                        $data['password'] = $arr['password'];

                        if ($this -> User_model -> set_user($data))
                        {

                            # 注册成功
                            echo 200;
                        }
                        else
                        {
                            # 注册失败
                            echo 404;
                        }
                    }
                }else{

                    echo 600;

                }
            }


        }

    //删除
        public function login_del ()
        {
            $data['id'] = $_POST['id'];

            if ($data['id'] == 1)
            {
                echo 500;

            }
            else
            {

                if ($this -> User_model -> edit_login($data))
                {

                    echo 200;
                }
                else
                {

                    echo 404;
                }
            }

        }
    }