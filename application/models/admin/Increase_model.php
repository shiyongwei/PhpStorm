<?php if ( !defined('BASEPATH'))
    exit('No direct script access allowed');


//用户模型
class Increase_model extends CI_Model
    {

        const TBL_NAME = 'increase';

        public function add_increase ($data)
        {
            return $this -> db -> insert(self::TBL_NAME, $data);

        }
    //查询
        public function get ($data)
        {
            if ($data == '')
            {
                $query = $this -> db -> get(self::TBL_NAME);

                return $query -> result_array();
            }
            else
            {
                $condition['increase_id'] = $data;

                $query = $this -> db -> where($condition) -> get(self::TBL_NAME);

                return $query -> row_array();
            }

        }

        public function getAll($data){

            $query = $this -> db -> where($data) -> get(self::TBL_NAME);

            return $query -> row_array();
        }


//删除
        public function edit_increase ($data)
        {

            return $this -> db -> delete(self::TBL_NAME, array('increase_id' => $data['increase_id']));

        }
//更新
        public function update_increase ($data)
        {
            $this -> db -> set('increase_name', $data['increase_name']);
            $this -> db -> where('increase_id', $data['increase_id']);

            return $this -> db -> update(self::TBL_NAME);

        }

    }