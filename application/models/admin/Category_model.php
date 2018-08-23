<?php if ( !defined('BASEPATH'))
    exit('No direct script access allowed');


//用户模型
class Category_model extends CI_Model
    {

        const TBL_USER = 'product_category_add';

        public function add_category ($data)
        {
            return $this -> db -> insert(self::TBL_USER, $data);

        }
    //查询
        public function get ($data)
        {
            if ($data == '')
            {
                $query = $this -> db -> get(self::TBL_USER);
                return $query -> result_array();
            }
            else
            {
                $condition['category_id'] = $data;

                $query = $this -> db -> where($condition) -> get(self::TBL_USER);

                return $query -> row_array();
            }

        }
        public function getAll($data){

            $query = $this -> db -> where($data) -> get(self::TBL_USER);

            return $query -> row_array();
        }
//删除
        public function edit_category ($data)
        {

            return $this -> db -> delete(self::TBL_USER, array('category_id' => $data['category_id']));

        }
//更新
        public function update_category ($data)
        {
            $this -> db -> set($data);

            $this -> db -> where('category_id', $data['category_id']);

            return $this -> db -> update(self::TBL_USER);

        }
    }