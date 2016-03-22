<?php
namespace Home\Model;
use Think\Model;
class NewsModel extends Model{
    public function getlst(){

    }
    public function getinfo($id){
        return $info=$this->where("id=$id")->find();
    }
}