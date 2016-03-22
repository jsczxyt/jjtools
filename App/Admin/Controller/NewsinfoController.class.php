<?php
namespace Admin\Controller;
use Think\Controller;
class NewsinfoController extends Controller{
    //新闻添加
    public function add(){
        if(IS_POST){
            $newsmodel=M('newsinfo');
            if($newsmodel->create()){

/*              echo '<pre>';
                var_dump($_POST);
                exit;*/
                   if($newsmodel->add()){
                       $newsinfo=M('newsdetail');
                       $data['news__id']=mysql_insert_id();
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
        $newsmodel=D('News');
        $newsdata=$newsmodel->select();
        $this->assign('newsdata',$newsdata);
        $this->display();
    }
}