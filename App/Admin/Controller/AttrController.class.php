<?php
namespace Admin\Controller;
use Think\Controller;
class AttrController extends Controller{
    public function add(){
        if(IS_POST){
            $attrmodel=D('Attr');
            if ($attrmodel->create()){
                $type_id=I('post.type_id');
                if($attrmodel->add()){
                        $this->success('添加成功',U('lst',array('type_id'=>$type_id)));
                        exit;
                }else{
                    $this->error('添加失败');
                }
            }else{
                $this->error($attrmodel->getError());
            }
        }
        //获取商品类型数据
        $type_id=I('get.type_id');  //获取类型ID实现类型默认选择
        $typemodel=D('Type');
        $typedata=$typemodel->select();
        $this->assign('type_id',$type_id);
        $this->assign('typedata',$typedata);
        $this->display();
    }
    public function lst(){
        $typedata=M('Type')->select();
        $attrmodel=D('Attr');
        $type_id=I('get.type_id');
        if($type_id!=0){
            $where="type_id=$type_id";  //拼接where条件
        }else{
            $where=1;   //1为true
        }
        //属性分页部分
        $count=$attrmodel->where($where)->count();  //获取总记录数
        $page=new \Think\Page($count,2);        //实例化分页类，传入总记录数和每页记录数
        $show=$page->show();                    //分页输出
        $attrdata=$attrmodel->field('a.*,b.type_name')->join('a left join sk_type b on a.type_id = b.id')->where($where)->limit($page->firstRow.",".$page->listRows)->select();///取出数据
        $this->assign('type_id',I('get.type_id'));
        $this->assign('show',$show);
        $this->assign('attrdata',$attrdata);
        $this->assign('typedata',$typedata);
        $this->display();
    }
}