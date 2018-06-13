<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//用户模型
class cx_model extends CI_Model{

        const TBL_USER = 'cx_text';

        public function add_user ($data)
        {
            return $this -> db -> insert(self::TBL_USER, $data);
        }

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
        public function set_user ($username,$password)
        {
            $this->db->set('password', $password);
            $this->db->where('username', $username);

            return $this -> db -> update(self::TBL_USER);

        }
    }