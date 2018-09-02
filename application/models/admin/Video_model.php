<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//用户模型
class Video_model extends CI_Model{

        const TBL_NAME = 'team_video';
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

            $this -> db -> where('video_id', $data['video_id']);

            return $this -> db -> update(self::TBL_NAME);
        }

    //查询全部
        public function get_name ($data)
        {

            if ($data == '')
            {
                return $this->db
                    ->join('team','team_video.team_id=team.id') ->get(self::TBL_NAME)->result_array();
            }
            else
            {
                $query = $this -> db  -> where($data) -> get(self::TBL_NAME);

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