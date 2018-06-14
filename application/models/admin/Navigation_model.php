<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//用户模型
class Navigation_model extends CI_Model{

        const TBL_NAME = 'navigation';
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

            $this -> db -> set('navigation_name', $data['navigation_name']);
            $this -> db -> set('lease_name', $data['lease_name']);
            $this -> db -> set('hotel_name', $data['hotel_name']);
            $this -> db -> set('promotions_name', $data['promotions_name']);
            $this -> db -> set('activity_name', $data['activity_name']);
            $this -> db -> set('city_name', $data['city_name']);
            $this -> db -> set('online_name', $data['online_name']);

            $this -> db -> where('navigation_id', $data['navigation_id']);

            return $this -> db -> update(self::TBL_NAME);
        }

        //查询全部
        public function get_name ($data)
        {

            if ($data == '')
            {
                $query = $this -> db -> get(self::TBL_NAME);

                return $query -> result_array();
            }
            else
            {
                $query = $this -> db -> where($data) -> get(self::TBL_NAME);

                return $query -> row_array();
            }

        }


}