<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 商品属性 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />
<script type = 'text/javascript' src = '/Public/Js/jquery.js'></script>
  <script>
    $(function () {
      $('select[name=type_id]').change(function () {
        $('form[name=searchForm]').submit();
      })
    })
  </script>
</head>
<body>

<h1>
<span class="action-span"><a href="<?php echo U('add',array('type_id'=>$type_id))?>">添加属性</a></span>
<span class="action-span1"><a href="#"> 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品属性 </span>
<div style="clear:both"></div>
</h1>
<div class="form-div">

  <form action="/index.php/Admin/Attr/lst" name="searchForm" method="get">
    <img src="/Public/Admin/images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    按商品类型显示：
    <select name="type_id">
      <option value="0">所有商品类型</option>
      <?php foreach($typedata as $v){ if($v['id']==$type_id) $sel='selected=selected'; else $sel=''; ?>
      <option <?php echo $sel?> value="<?php echo $v['id']?>"><?php echo $v['type_name']?></option>
      <?php }?>
    </select>
  </form>
</div>

<form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">

<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
  <tr>
    <th>属性名称</th>
    <th>商品类型</th>
    <th>属性类型</th>
    <th>属性录入方式</th>
    <th>属性值</th>
    <th>操作</th>
  </tr>
  <?php foreach($attrdata as $v){?>
  <tr align="center" class="0" id="0_1" id = 'tr_1'>
    <td align="left" class="first-cell" style = 'padding-left="0"'>
      <img src="/Public/Admin/images/menu_minus.gif" id="icon_0_1" width="9" height="9" border="0" style="margin-left:0em" />
      <span><a href="#" ></a><?php echo $v['attr_name']?></span>
    </td>
    <td width="10%"><?php echo $v['type_name']?></td>
    <td><?php echo $v['attr_type']==0?'唯一':'单选'?></td>
    <td><?php echo $v['attr_input_type']==0?'手工输入':'列表选择'?></td>
    <td><?php echo $v['attr_value']?></td>
    <td width="24%" align="center"> <a href="<?php echo U('edit',array('id'=>$v['id']))?>">编辑</a>|
      <a href="<?php echo U('del',array('id'=>$v['id']))?>" onclick="if(confirm('确定要删除吗？')==false)return false;" title="移除">移除</a>
    </td>
  </tr>

  <?php }?>
  <tr>
    <td  colspan="6" align="right" nowrap="true">
      <div style="margin-right: 50px"><?php echo $show?></div>
    </td>
  </tr>
  </table>


</div>

</form>

<div id="footer">
共执行 1 个查询，用时 0.015927 秒，Gzip 已禁用，内存占用 1.999 MB<br />

版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利
。</div>

</body>
</html>