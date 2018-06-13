<?php if ( !defined('BASEPATH'))
    exit('No direct script access allowed');


//用户模型
class List_model extends CI_Model
    {

        const TBL_LIST = 'product_list_add';

        public function add_list ($data)
        {
            return $this -> db -> insert(self::TBL_LIST, $data);

        }
    //查询
        public function get ($data)
        {
            if ($data == '')
            {
             return $this->db
                    ->join('product_category_add','product_list_add.category=product_category_add.category_id')
                    ->join('product_brand_add','product_list_add.brand=product_brand_add.brand_id')
                    ->get(self::TBL_LIST)->result_array();
            }
            else
            {
                $condition['id'] = $data;

                return $this->db->where($condition)
                    ->join('product_category_add','product_list_add.category=product_category_add.category_id')
                    ->join('product_brand_add','product_list_add.brand=product_brand_add.brand_id')
                    ->get(self::TBL_LIST)->result_array();
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

            $query = $this -> db -> where($data) -> get(self::TBL_USER);

            return $query -> row_array();
        }
//删除
        public function edit_category ($data)
        {

            return $this -> db -> delete(self::TBL_LIST, array('id' => $data));

        }
//更新
        public function update_category ($id, $data)
        {
            $this -> db -> set('category_name', $data['category_name']);

            $this -> db -> where('id', $id);

            return $this -> db -> update(self::TBL_LIST);

        }


        public function update_status ($data)
        {
            if($data['statu'] == 0){
                $this -> db -> set('statu', 1);
                $this -> db -> where('id', $data['id']);
            }else{
                $this -> db -> set('statu', 0);
                $this -> db -> where('id', $data['id']);
            }


            return $this -> db -> update(self::TBL_LIST);

        }
        public function update_edit ($data)
        {

            $this -> db -> set($data);
            $this -> db -> where('id', $data['id']);

            return $this -> db -> update(self::TBL_LIST);
        }

        public function list_page()
        {
            return $this->db->count_all(self::TBL_LIST);
        }

    #获取分页数据
        public function page_list($limit,$offset){

            $query = $this->db->limit($limit,$offset)->join('product_category_add','product_list_add.category=product_category_add.category_id')
                ->join('product_brand_add','product_list_add.brand=product_brand_add.brand_id')->get(self::TBL_LIST);

            return $query->result_array();
        }

    }