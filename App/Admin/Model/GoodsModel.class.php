<?php
namespace Admin\Model;
use Think\Model;
class GoodsModel extends Model{
    protected function _before_insert(&$data,$options){
        //图片及缩略图上传模块
        $res=$this->uploadImage('goods_img','Goods');
        if($res['info']==1){
           $data['goods_ori']=$res['img'][0];
            $data['goods_thumb']=$res['img'][1];
            $data['add_time']=time();
        }
    }
    public function uploadImage($filename,$dir){
        $rootpath=C('UPLOAD_ROOT_PATH');    //取出上传根路径
        $max_file=(int)C('UPLOAD_MAX_FILESIZE');    //上传文件大小
        $upload_max_filesize=(int)ini_get('upload_max_filesize'); //PHP配置文件中上传限制
        $allow_filesize =min($max_file,$upload_max_filesize)*1024*1024; //最终大小限制
        $ext=C('UPLOAD_ALLOW_EXT'); //取出后缀名
        $upload=new \Think\Upload();    //实例化
        $upload->maxSize    =   $allow_filesize;
        $upload->exts       =   $ext;
        $upload->rootPath   =   $rootpath;
        $upload->savePath   =   $dir.'/';   //设置上传相对路径
        //上传
        $info   =  $upload->upload(array("$filename"=>$_FILES[$filename]));
        if($info){
            $goods_ori=$info[$filename]['savepath'].$info[$filename]['savename'];
            $img[]=$goods_ori;
            //缩略图生成
            $image = new \Think\Image();
            $image->open($rootpath.$goods_ori); //打开原图
            $goods_thumb=$info[$filename]['savepath'].'thumb_'.$info[$filename]['savename'];
            $image->thumb(350,350)->save($rootpath.$goods_thumb);
            $img[]=$goods_thumb;
            return array(
                'info'=>1,
                'img'=>$img
            );
        }else{
            return array(
                'info'=>0,
                'img'=>$upload->getError()
            );
        }


    }

}