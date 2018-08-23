<?php if ( !defined('BASEPATH'))
    exit('No direct script access allowed');


//用户模型
class Activityedit_model extends CI_Model
    {

        const TBL_NAMR = 'activityedit';

        public function add_activityedit ($data)
        {
            return $this -> db -> insert(self::TBL_NAMR, $data);

        }

    //查询
        public function get ($data)
        {
            if ($data == '')
            {
             return $this->db->join('column','activityedit.column_id = column.column_id')->get(self::TBL_NAMR)->result_array();

            }
            else
            {
                $condition['id'] = $data;

                return $this->db->where($condition)->get(self::TBL_NAMR)->row_array();
            }

        }

		//根据选项卡id查询
		public function art_option_get($data){
			$condition['column_id'] = $data;

			return $this->db->where($condition)->get(self::TBL_NAMR)->result_array();
		}



//删除
        public function edit_activityedit ($data)
        {

            return $this -> db -> delete(self::TBL_NAMR, array('id' => $data));

        }
//更新
        public function update_activityedit ($id, $data)
        {
            $this -> db -> set('category_name', $data['category_name']);

            $this -> db -> where('id', $id);

            return $this -> db -> update(self::TBL_NAMR);

        }

        public function update_edit ($data)
        {

            $this -> db -> set($data);
            $this -> db -> where('id', $data['id']);

            return $this -> db -> update(self::TBL_NAMR);
        }
    }