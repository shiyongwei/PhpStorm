<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//用户模型
class City_model extends CI_Model{

        const TBL_CITY = 'ci_city';

    /**
     * @access public
     * @param $pid 节点的id
     * @param array 返回该节点的所有后代节点
     */
        public function list_cate($pid = 0){
            #获取所有的记录
            $query = $this->db->get(self::TBL_CITY);
            $cates = $query->result_array();
            #对类别进行重组，并返回
            return $this->_tree($cates,$pid);
        }



    /**
     *@access private
     *@param $arr array 要遍历的数组
     *@param $pid 节点的pid，默认为0，表示从顶级节点开始
     *@param $level int 表示层级 默认为0
     *@param array 排好序的所有后代节点
     */
        private function _tree($arr,$pid = 0,$level = 0){
            static $tree = array(); #用于保存重组的结果,注意使用静态变量
            foreach ($arr as $v) {
                if ($v['parent_id'] == $pid){
                    //说明找到了以$pid为父节点的子节点,将其保存
                    $v['level'] = $level;
                    $tree[] = $v;
                    //然后以当前节点为父节点，继续找其后代节点
                    $this->_tree($arr,$v['cit_id'],$level + 1);
                }
            }

            return $tree;
        }

        public function getAll($data){

            $query = $this -> db -> where($data) -> get(self::TBL_CITY);

            return $query -> row_array();
        }

        public function get(){

            $query = $this -> db -> get(self::TBL_CITY);


            return $query -> result_array();
        }

		public function get_limit(){
			$this->db->limit(8);

			$query = $this -> db -> get(self::TBL_CITY);


			return $query -> result_array();
		}

		public function get_limits(){
			$this->db->where('status',1)->limit(8);

			$query = $this -> db -> get(self::TBL_CITY);


			return $query -> result_array();
		}
		public function get_limit_four(){
			$this->db->where('status',1)->limit(4);

			$query = $this -> db -> get(self::TBL_CITY);


			return $query -> result_array();
		}

    #添加分类信息
        public function add_city($data){
            return $this->db->insert(self::TBL_CITY,$data);
        }

    #获取单条信息
        public function get_city($cat_id){
            $condition['cit_id'] = $cat_id;
            $query = $this->db->where($condition)->get(self::TBL_CITY);
            #返回单条记录
            return $query->row_array();
        }

    #更新
        public function update_city($data,$cat_id){
            $condition['cit_id'] = $cat_id;
            return $this->db->where($condition)->update(self::TBL_CITY,$data);
        }
        public function update_status ($data)
        {
            if($data['status'] == 0){
                $this -> db -> set('status', 1);
                $this -> db -> where('cit_id', $data['id']);
            }else{
                $this -> db -> set('status', 0);
                $this -> db -> where('cit_id', $data['id']);
            }


            return $this -> db -> update(self::TBL_CITY);

        }

    #删除
        public function del_city($cat_id){
            $condition['cit_id'] = $cat_id;
            $query = $this->db->where($condition)->delete(self::TBL_CITY);
            if ($query && $this->db->affected_rows() > 0) {
                # code...
                return true;
            } else {
                # code...
                return false;
            }
        }

    #获取某节点下面的直接子分类
        public function child($arr,$pid = 0){
            $child = array();
            foreach ($arr as $k => $v) {
                if ($v['parent_id'] == $pid){
                    $child[] = $v;
                }
            }
            return $child;
        }

    /**
     * 对给定数组，构造三维数组
     * @param $arr array 分类信息
     * @param $pid 父id
     * @return array 构造好的三维数组
     */
        public function cate_list($arr,$pid = 0){
            #获取顶级分类，也就是parent_id=0的类别
            $child = $this->child($arr,$pid);
            #如果为空，则返回null
            if (empty($child)){
                return null;
            }
            #如果不为空，则按照该方法继续找其子节点
            foreach ($child as $k => $v) {
                $current_child = $this->cate_list($arr,$v['cit_id']);
                if ($current_child != null){
                    #说明，该分类节点还有子分类节点,则将子节点作为该节点的一个元素来保存
                    $child[$k]['child'] = $current_child;
                }
            }
            return $child;
        }


    /**
     * 获取前台分类数据，三维数组形式
     */
        public function front_cate(){
            $query = $this->db->get(self::TBL_CITY);
            $cates = $query->result_array();
            return $this->cate_list($cates);
        }


}