<?php if ( !defined('BASEPATH'))
    exit('No direct script access allowed');


//用户模型
class Uriving_model extends CI_Model
    {

        const TBL_NAME = 'uriving';

        public function add_uriving ($data)
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
                $condition['id'] = $data;

                return $this->db->where($condition)->get(self::TBL_NAME)->result_array();
            }

        }

		public function getAll($data){

			$query = $this -> db -> where($data) -> get(self::TBL_NAME);

			return $query -> result_array();
		}

//删除
        public function edit_uriving ($data)
        {

            return $this -> db -> delete(self::TBL_NAME, array('id' => $data));

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


            return $this -> db -> update(self::TBL_NAME);

        }

        public function update_edit ($data)
        {

            $this -> db -> set($data);
            $this -> db -> where('id', $data['id']);

            return $this -> db -> update(self::TBL_NAME);
        }

    }