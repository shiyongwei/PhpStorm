<?php if ( !defined('BASEPATH'))
    exit('No direct script access allowed');


//用户模型
class Column_model extends CI_Model
    {

        const TBL_NAME = 'column';

        public function add_column ($data)
        {
            return $this -> db -> insert(self::TBL_NAME, $data);

        }
    //查询
        public function get ($data)
        {
            if ($data == '')
            {
             return $this->db->get(self::TBL_NAME)->result_array();
            }
            else
            {
                $condition['column_id'] = $data;

                return $this->db->where($condition)->get(self::TBL_NAME)->result_array();
            }

        }
        public function getAll($data){

            $query = $this -> db -> where($data) -> get(self::TBL_NAME);

            return $query -> row_array();
        }
//删除
        public function edit_column ($data)
        {

            return $this -> db -> delete(self::TBL_NAME, array('column_id' => $data));

        }
//更新
        public function update_column ($id, $data)
        {
            $this -> db -> set('column_name', $data['column_name']);
            $this -> db -> set('status', $data['status']);
            $this -> db -> where('column_id', $id);

            return $this -> db -> update(self::TBL_NAME);

        }


        public function update_status ($data)
        {
            if($data['status'] == 0){
                $this -> db -> set('status', 1);
                $this -> db -> where('column_id', $data['column_id']);
            }else{
                $this -> db -> set('status', 0);
                $this -> db -> where('column_id', $data['column_id']);
            }


            return $this -> db -> update(self::TBL_NAME);

        }

        public function update_edit ($data)
        {

            $this -> db -> set($data);
            $this -> db -> where('column_id', $data['column_id']);

            return $this -> db -> update(self::TBL_NAME);
        }

    }