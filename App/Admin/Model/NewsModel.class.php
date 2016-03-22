<?php
namespace Admin\Model;
use Think\Model;
class NewsModel extends Model{
    protected function _before_insert(&$data,$options){
        $data['news_addtime']=time();
    }
}