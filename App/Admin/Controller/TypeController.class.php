<?php
namespace Admin\Controller;
use Think\Controller;
class TypeController extends Controller{
    public function add(){
        if(IS_POST){
            $typemodel=D('Type');
            if($typemodel->create(I('post.'),1)){
                if($typemodel->add()){
                    $this->success('添加成功');
                    exit;
                }else{
                    $this->error('添加失败');
                }
            }else{
                $this->error($typemodel->getError());
            }
        }
        $this->display();
    }
    public function lst(){
        $typemodel=D('Type');
        $typedata=$typemodel->field('a.*,count(b.attr_name) num')->join('a left join sk_attr b on a.id=b.type_id group by a.id')->select();
        $this->assign('typedata',$typedata);
        $this->display();
    }
}