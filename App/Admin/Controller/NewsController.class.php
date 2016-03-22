<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller{
    public function add(){
        if(IS_POST){
            $newsmodel=D('News');
            if($newsmodel->create()){
                $newsmodel->data['news_addtime']=time();
/*              echo '<pre>';
                var_dump($_POST);
                exit;*/
                   if($newsmodel->add()){
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
}