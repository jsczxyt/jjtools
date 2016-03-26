<?php
namespace Admin\Model;
use Think\Model;
class TypeModel extends Model{
    protected $_validate=array(
        array('type_name','require','类型名称不能为空')
    );

    protected $insertField=array('type_name');  //限制字段提交
}