<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller{
    public function add(){
        if(IS_POST){
            $goodsmodel=D('Goods');
            if($goodsmodel->create()){
                $goodsmodel->add_time=time();
                if($goodsmodel->add()){
                    $this->success('商品添加成功');
                    exit;
                }else{
                    $this->error('添加失败');
                }
            }else{
                $this->error($goodsmodel->getError());
            }
        }
        $catemodel=D('Cate');
        $catedata=$catemodel->getCateTree();
        $this->assign('catedata',$catedata);
        $this->display();
    }
    public function lst(){

    }
    //二级联动获取子栏目
    public function getsel(){
        $id=I('post.id');
        $catemodel=D('Cate');
        $catedata=$catemodel->getChild($id);
        //遍历子类ID,将子类ID与栏目名称放入数组
        $arr=array();
        foreach($catedata as $v){
            $id=$v;
           $arr[]=$catemodel->field('id,cate_name')->where("id=$id")->find();
        }
        echo json_encode($arr);
        exit;
    }
}