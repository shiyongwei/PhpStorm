<?php if ( !defined('BASEPATH'))
    exit('No direct script access allowed');


//用户模型
class Topic_model extends CI_Model
    {

        const TBL_NAME = 'topic';

        public function add_topic ($data)
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
                $condition['topic_id'] = $data;

                return $this->db->where($condition)->get(self::TBL_NAME)->row_array();
            }

        }

		public function getAll($data){

			$query = $this -> db -> where($data) -> get(self::TBL_NAME);

			return $query -> row_array();
		}

//删除
        public function edit_topic ($data)
        {

            return $this -> db -> delete(self::TBL_NAME, array('topic_id' => $data));

        }


        public function update_edit ($data)
        {

            $this -> db -> set($data);
            $this -> db -> where('topic_id', $data['topic_id']);

            return $this -> db -> update(self::TBL_NAME);
        }

    }