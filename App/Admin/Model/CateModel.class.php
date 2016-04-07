<?php
namespace Admin\Model;
use Think\Model;
class CateModel extends Model{
    protected $_validate=array(
        array('cate_name','require','分类名称不能为空'),
    );
    public function getCateTree(){
        $arr=$this->select();
        return $this->__getCateTree($arr);
    }
    public function __getCateTree($arr,$parent_id=0,$deep=0){
        static $list=array();
        foreach($arr as $v){
            if($v['parent_id']==$parent_id){
                $v['deep']=$deep;
                $list[]=$v;
                $this->__getCateTree($arr,$v['id'],$deep+1);
            }
        }
        return $list;
    }
    //获取当前栏目的子孙栏目
    public function getChild($id){
        $arr=$this->select();
        return $this->__getChild($arr,$id);
    }
    public  function __getChild($arr,$id){
        static $lst=array();
        foreach($arr as $v){
            if($v['parent_id']==$id){
                $lst[]=$v['id'];
                $this->__getChild($arr,$v['id']);
            }
        }
        return $lst;
    }

}