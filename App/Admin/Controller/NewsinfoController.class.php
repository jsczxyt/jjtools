<?php
namespace Admin\Controller;
use Think\Controller;
class NewsinfoController extends Controller{
    //新闻添加
    public function add(){
        if(IS_POST){
            $newsmodel=D('newsinfo');
            if($newsmodel->create()){
                   if($key=$newsmodel->add()){
                       $newsinfo=M('newsdetail');
                       $data['news_id']=$key;
                       $data['news_detail']=$_POST['news_detail'];
                       $newsinfo->add($data);
                       $this->success('新闻添加成功',U('lst'));
                       exit;
                   }  else {
                       $this->error('添加失败');
                   }
            }else{
                $this->error($newsmodel->getError());
            }
        }
        $this->display();
    }
    //新闻列表
    public function lst(){
        $newsmodel=D('Newsinfo');
        $newsdata=$newsmodel->select();
        $this->assign('newsdata',$newsdata);
        $this->display();
    }
    //新闻修改
    public function edit(){
        $newsmodel=D('Newsinfo');
        if(IS_POST){
            $id=I('post.id')+0;
            if($newsmodel->create()){
                if($res=$newsmodel->where("id=$id")->save()!==false){
                    $detailmodel=M('Newsdetail');
                    $detailmodel->where("news_id=$id")->setField('news_detail',$_POST['news_detail']);
                    $this->success('新闻修改成功',U('lst'));
                    exit;
                }else{
                    $this->error('修改失败');
                }
            }else{
                $this->error($newsmodel->getError());
            }
        }
        $id=I('get.id');
        $info=$newsmodel->where("id=$id")->find();
        $detail=M('Newsdetail')->where("news_id=$id")->find();
        $this->assign('detail',$detail);
        $this->assign('info',$info);
        $this->display();
    }
    //新闻删除
    public function del(){
        $id=I('get.id');
        $newsmodel=D('Newsinfo');
        if($newsmodel->where("id=$id")->delete()){
            M('Newsdetail')->where("news_id=$id")->delete();
            $this->success('删除成功',U('lst'));
            exit;
        }else{
            $this->error($newsmodel->getError());
        }
    }
}