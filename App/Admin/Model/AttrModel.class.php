<?php
namespace Admin\Model;
use Think\Model;
class AttrModel extends Model{
    protected $_validate=array(
        array('attr_name','require','属性名称不能为空'),
        array('type_id','number','商品类型不合法'),
        array('attr_type',array(0,1),'属性类型不合法',1,'in'),
        array('attr_input_type',array(0,1),'属性录入方式不合法',1,'in')
    );
}