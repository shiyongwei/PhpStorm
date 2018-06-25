<?php if ( !defined('BASEPATH'))
    exit('No direct script access allowed');


//用户模型
class Explore_model extends CI_Model
    {

        const TBL_LIST = 'explore';

        public function add_explore ($data)
        {
            return $this -> db -> insert(self::TBL_LIST, $data);

        }
    //查询
        public function get ($data)
        {
            if ($data == '')
            {
             return $this->db->get(self::TBL_LIST)->result_array();
            }
            else
            {
                $condition['explore_id'] = $data;

                return $this->db->where($condition) ->get(self::TBL_LIST)->result_array();
            }

        }
		
		public function getInfo($data){
            $condition['brand'] = $data;

            return $this->db->where($condition)
                ->join('product_category_add','product_list_add.category=product_category_add.category_id')
                ->join('product_brand_add','product_list_add.brand=product_brand_add.brand_id')
                ->get(self::TBL_LIST)->result_array();

        }

        public function getAll($data){

            $query = $this -> db -> where($data) -> get(self::TBL_LIST);

            return $query -> row_array();
        }
//删除
        public function edit_explore ($data)
        {

            return $this -> db -> delete(self::TBL_LIST, array('explore_id' => $data));

        }
//更新
        public function update_edit ($data)
        {

            $this -> db -> set($data);
            $this -> db -> where('explore_id', $data['explore_id']);

            return $this -> db -> update(self::TBL_LIST);
        }

    }