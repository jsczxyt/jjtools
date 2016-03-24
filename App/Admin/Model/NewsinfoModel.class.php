<?php
namespace Admin\Model;
use Think\Model;
class NewsinfoModel extends Model{
protected function _before_insert(&$data,$options){
    $data['news_addtime']=time();
    }
}