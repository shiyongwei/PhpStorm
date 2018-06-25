<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Team_detail extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Team_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> model('admin/Text_model');
				$this -> load -> helper(array('form', 'url'));
			}
			public function index(){
				$rent_list = $this->Product_model->get('');
				$get_limit = $this->City_model->get_limit('');
				$id = $_GET['id'];
				$team = $this->Team_model->get($id);
				$navigation = $this->Navigation_model->get_name('');
				$bottom_info = $this->Text_model->get_name('');
				$bottom_info_all = $this->Text_model->get_name_all('');
				$text = $team[0]['schedule'];


                $text =  str_replace('<br/>','',$text);


                $data = _regex_select($text, '@<p.*?>(.*?)<\/p>@');

                $data = array_filter($data);

               if((count($data) % 5) == 0){
                   $i=1;

                   $date = array();

                   foreach(array_chunk($data, 5) as $val)
                   {

                       $date[$i] = $val;

                       $i++;

                   }
               }else{

                   $date = null;

               }


				$data['rent_list'] = $rent_list;
				$data['team'] = $team;
				$data['navigation'] = $navigation;
				$data['date'] = $date;
				$data['get_limit'] = $get_limit;
				$data['bottom_info'] = $bottom_info;
				$data['bottom_info_all'] = $bottom_info_all;

				$this -> load -> view('common/home/head',$data,$navigation,$bottom_info_all);
				$this -> load -> view('team_detail',$team,$date);
				$this -> load -> view('common/home/foot',$rent_list,$get_limit,$bottom_info,$bottom_info_all);
			}
		}

            function _regex_select ($html, $selector, $remove = false)
            {
                if (@preg_match_all($selector, $html, $out) === false)
                {
                    return false;
                }
                $count = count($out);
                $result = array();
                // 一个都没有匹配到
                if ($count == 0)
                {
                    return false;
                }
                // 只匹配一个，就是只有一个 ()
                else if ($count == 2)
                {
                    // 删除的话取匹配到的所有内容
                    if ($remove)
                    {
                        $result = $out[0];
                    }
                    else
                    {
                        $result = $out[1];
                    }
                }
                else
                {
                    for ($i = 1; $i < $count; $i++)
                    {
                        // 如果只有一个元素，就直接返回好了
                        $result[] = count($out[$i]) > 1 ? $out[$i] : $out[$i][0];
                    }
                }
                if (empty($result))
                {
                    return false;
                }

                return count($result) > 1 ? $result : $result[0];
            }



?>