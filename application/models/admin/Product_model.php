<?php if ( !defined('BASEPATH'))
    exit('No direct script access allowed');


//用户模型
class product_model extends CI_Model
    {

        const TBL_USER = 'product_brand_add';

        public function add_product ($data)
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
                $condition['brand_id'] = $data;

                $query = $this -> db -> where($condition) -> get(self::TBL_USER);

                return $query -> row_array();
            }

        }
        public function getAll($data){

            $query = $this -> db -> where($data) -> get(self::TBL_USER);

            return $query -> row_array();
        }
//删除
        public function edit_product ($data)
        {

            return $this -> db -> delete(self::TBL_USER, array('brand_id' => $data['brand_id']));

        }
//更新
        public function update_product ($id, $data)
        {
            $this -> db -> set('product_brand', $data['product_brand']);
            $this -> db -> where('brand_id', $id);

            return $this -> db -> update(self::TBL_USER);

        }
        public function update_status ($data)
        {
            if($data['status'] == 0){
                $this -> db -> set('status', 1);
                $this -> db -> where('brand_id', $data['brand_id']);
            }else{
                $this -> db -> set('status', 0);
                $this -> db -> where('brand_id', $data['brand_id']);
            }


            return $this -> db -> update(self::TBL_USER);

        }

    }