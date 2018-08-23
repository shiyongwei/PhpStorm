<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Topic_model');
            $this -> load -> helper(array('form', 'url'));
        }
        
        public function topic_add()
        {
            parse_str($_POST['str'], $arr);

            $data['topictitle'] = $arr['topictitle'];
            $data['text'] = $arr['text'];
            $data['image'] = $arr['image'];
            $data['galleryimage'] = $arr['editorValue'];
            $data['time'] = date('Y-m-d H:i:s');

            if($arr['topictitle'] !== '' && $arr['image'] !==''){

                if($this->Topic_model->add_topic($data))
                {
                    echo 200;

                }else{

                    echo 300;

                }
            }else{
                echo 300;
            }

        }

        public function topic_del()
        {
            $id = $_POST['id'];

            if ($this -> Topic_model -> edit_topic($id))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }


        public function topic_edit()
        {
            parse_str($_POST['str'], $arr);

            $data['topic_id'] = $arr['id'];
            $data['time'] = date('Y-m-d H:i:s');
            if(!isset($arr['lang'])){
                $data['topictitle'] = $arr['topictitle'];
                $data['text'] = $arr['text'];
                $data['galleryimage'] = $arr['editorValue'];
            }else{
                $data['topictitle_en'] = $arr['topictitle'];
                $data['text_en'] = $arr['text'];
                $data['galleryimage_en'] = $arr['editorValue'];
            }
            if(!empty($arr['image'])){
                $data['image'] = $arr['image'];
            }
            if($this->Topic_model->update_edit($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }
        
    }