<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends Controller{
    public function add(){
        $catemodel=D('Cate');
        if(IS_POST){
            $cate_name=I('post.cate_name');
            $parent_id=I('post.parent_id');
            if($catemodel->create()){
                if($catemodel->add()){
                    $this->success('分类添加成功');
                    exit;
                }else{
                    $this->error('添加失败');
                }
            }else{
                $this->error($catemodel->getError());
            }
        }
        $catedata=$catemodel->getCateTree();
        $this->assign('catedata',$catedata);
        $this->display();
    }
    public function lst(){
        $catemodel=D('Cate');
        $catedata=$catemodel->getCateTree();
        $this->assign('catedata',$catedata);
        $this->display();
    }
    public function edit(){
        $id=$_GET['id'];
        $catemodel=D('Cate');
        $catedata=$catemodel->getCateTree();
        $info=$catemodel->where("id=$id")->find();
        $this->assign('catedata',$catedata);
        $this->assign('ids',$id);
        $this->assign('info',$info);
        $this->display();
    }
    public function del(){
        $id=$_GET['id']+0;
        $catemodel=D('Cate');
        if($catemodel->delete($id)!=false){
            $this->success('删除成功',U('lst'));
            exit;
        }else{
            $this->error($catemodel->getError());
        }
    }
}