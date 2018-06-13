<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//用户模型
class User_model extends CI_Model{

        const TBL_USER = 'users';
        //添加
        public function add_user ($data)
        {
            return $this -> db -> insert(self::TBL_USER, $data);
        }
        //登录查询
        public function get_user ($username, $password)
        {

            $condition['username'] = $username;
            $condition['password'] = $password;

            $query = $this -> db -> where($condition) -> get(self::TBL_USER);

            return $query -> row_array();
        }

        public function sel_user ($username)
        {

            $condition['username'] = $username;

            $query = $this -> db -> where($condition) -> get(self::TBL_USER);

            return $query -> row_array();
        }
        //编辑更新
        public function set_user ($data)
        {
            $this->db->set('password', $data['password']);
            $this->db->set('username', $data['username']);
            $this->db->where('id', $data['id']);

            return $this -> db -> update(self::TBL_USER);

        }
        //查询全部
        public function get ($data)
        {

            if ($data == '')
            {
                $query = $this -> db -> get(self::TBL_USER);

                return $query -> result_array();
            }
            else
            {
                $query = $this -> db -> where($data) -> get(self::TBL_USER);

                return $query -> row_array();
            }

        }

        //删除
        public function edit_login ($data)
        {

            return $this -> db -> delete(self::TBL_USER, array('id' => $data['id']));

        }
}