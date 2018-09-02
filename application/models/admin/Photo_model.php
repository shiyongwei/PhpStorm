<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//用户模型
class Photo_model extends CI_Model{

        const TBL_NAME = 'team_photo';
    //添加
        public function add_name ($data)
        {
            return $this -> db -> insert(self::TBL_NAME, $data);
        }

    //删除
        public function del_name ($data)
        {

            return $this -> db -> delete(self::TBL_NAME, $data);

        }
    //修改
        public function edit_name ($data)
        {

            $this -> db -> set($data);

            $this -> db -> where('photo_id', $data['photo_id']);

            return $this -> db -> update(self::TBL_NAME);
        }

    //查询全部
        public function get_name ($data)
        {

            if ($data == '')
            {
                return $this->db
                    ->join('team','team_photo.team_id=team.id') ->get(self::TBL_NAME)->result_array();
            }
            else
            {
                $query = $this -> db  -> where($data) -> get(self::TBL_NAME);

                return $query -> row_array();
            }

        }

		public function get_name_all ($data)
		{

			if ($data == '')
			{
				$query = $this -> db-> get(self::TBL_NAME);

				return $query -> result_array();
			}
			else
			{
				$query = $this -> db ->limit(7) -> where($data) -> get(self::TBL_NAME);

				return $query -> row_array();
			}

		}

    //倒序排序
        public function get_desc ()
        {
            $query = $this -> db->order_by('id', 'DESC') -> get(self::TBL_NAME);

            return $query -> result_array();

        }


    }