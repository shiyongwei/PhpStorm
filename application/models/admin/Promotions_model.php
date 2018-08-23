<?php if ( !defined('BASEPATH'))
    exit('No direct script access allowed');


//用户模型
class Promotions_model extends CI_Model
    {

        const TBL_NAMR = 'promotions';

        public function add_promotions ($data)
        {
            return $this -> db -> insert(self::TBL_NAMR, $data);

        }
    //查询
        public function get ($data)
        {
            if ($data == '')
            {
             return $this->db->get(self::TBL_NAMR)->result_array();
            }
            else
            {
                $condition['id'] = $data;

                return $this->db->where($condition)->get(self::TBL_NAMR)->row_array();
            }

        }

		public function get_status ($data)
		{
			if ($data == '')
			{
				return $this->db ->where('status',1)->get(self::TBL_NAMR)->result_array();
			}
			else
			{
				$condition['id'] = $data;

				return $this->db->where($condition)->get(self::TBL_NAMR)->result_array();
			}

		}

        public function getAll($data){

            $query = $this -> db -> where($data) -> get(self::TBL_NAMR);

            return $query -> row_array();
        }
//删除
        public function edit_category ($data)
        {

            return $this -> db -> delete(self::TBL_NAMR, array('id' => $data));

        }
//更新
        public function update_category ($id, $data)
        {
            $this -> db -> set('category_name', $data['category_name']);

            $this -> db -> where('id', $id);

            return $this -> db -> update(self::TBL_NAMR);

        }


        public function update_status ($data)
        {
            if($data['status'] == 0){
                $this -> db -> set('status', 1);
                $this -> db -> where('id', $data['id']);
            }else{
                $this -> db -> set('status', 0);
                $this -> db -> where('id', $data['id']);
            }


            return $this -> db -> update(self::TBL_NAMR);

        }
        public function update_edit ($data)
        {

            $this -> db -> set($data);
            $this -> db -> where('id', $data['id']);

            return $this -> db -> update(self::TBL_NAMR);
        }

        public function get_set_all ()

        {

            return  $this -> db->count_all(self::TBL_NAMR);

        }


        public function get_all ($limit,$offset)

        {

            $query = $this -> db->order_by('id', 'DESC')->limit($limit,$offset) -> get(self::TBL_NAMR);



            return $query -> result_array();



        }
    }