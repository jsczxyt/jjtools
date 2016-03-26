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
        if(I('get.type_id')!=0){
            $type_id=I('get.type_id')+0;
            $attrdata=$attrmodel->field('a.*,b.type_name')->join('a left join sk_type b on a.type_id = b.id')->where("b.id=$type_id")->select();
            $this->assign('type_id',$type_id);
        }else{
            $attrdata=$attrmodel->field('a.*,b.type_name')->join('a left join sk_type b on a.type_id=b.id')->select();
        }
        $this->assign('type_id',I('get.type_id'));
        $this->assign('attrdata',$attrdata);
        $this->assign('typedata',$typedata);
        $this->display();
    }
}