<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller{
    public function lst(){
        $newsmodel=D('News');
        $newslst=$newsmodel->select();
        $this->assign('newslst',$newslst);
        $this->display();
    }
    public function detail(){
        $id=(int)$_GET['id'];
        $newsmodel=D('News');
        $newsinfo=$newsmodel->getinfo($id);
        $this->assign('newsinfo',$newsinfo);
        $this->display();
    }
}