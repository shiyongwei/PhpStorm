<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activityedit extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Activityedit_model');
            $this -> load -> helper(array('form', 'url'));
        }
        
        public function activityedit_add()
        {
            parse_str($_POST['str'], $arr);

            $data['activititle'] = $arr['activititle'];
            $data['image'] = $arr['image'];
            $data['starttime'] = $arr['starttime'];
            $data['endtime'] = $arr['endtime'];
            $data['text'] = $arr['text'];
            $data['contact'] = $arr['contact'];
            $data['column_id'] = $arr['column_id'];

            if($arr['activititle'] !== '' && $arr['image'] !==''){
                if($this->Activityedit_model->add_activityedit($data))
                {
                    echo 200;

                }else{

                    echo 300;

                }
            }else{
                echo 300;
            }

        }

        public function activityedit_del()
        {
            $id = $_POST['id'];

            if ($this -> Activityedit_model -> edit_category($id))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }


        public function activityedit_edit()
        {
            parse_str($_POST['str'], $arr);
            $data['id'] = $arr['id'];
            $data['column_id'] = $arr['column_id'];
            if(!isset($arr['lang'])){
                $data['activititle'] = $arr['activititle'];
                $data['starttime'] = $arr['starttime'];
                $data['endtime'] = $arr['endtime'];
                $data['text'] = $arr['text'];
                $data['contact'] = $arr['contact'];
            }else{
                $data['activititle_en'] = $arr['activititle'];
                $data['starttime_en'] = $arr['starttime'];
                $data['endtime_en'] = $arr['endtime'];
                $data['text_en'] = $arr['text'];
                $data['contact_en'] = $arr['contact'];
            }
            if(!empty($arr['image'])){

                $data['image'] = $arr['image'];

            }
            if($this->Activityedit_model->update_edit($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }
        
    }