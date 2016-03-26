<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 新闻列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />
<script type = 'text/javascript' src = '/Public/Admin//jquery-1.4.2.min.js'></script>
</head>
<body>

<h1>
<span class="action-span"><a href="<?php echo U('add')?>">添加新闻</a></span>
<span class="action-span1"><a href="#"> 管理中心</a> </span><span id="search_id" class="action-span1"> - 新闻列表 </span>
<div style="clear:both"></div>
</h1>
<form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">

<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
  <tr>
    <th>新闻ID</th>
    <th>标题</th>
    <th>内容简介</th>
    <th>作者</th>
    <th>操作</th>
  </tr>
  <?php foreach($newsdata as $v){?>
  <tr align="center" class="0" id="0_1" id = 'tr_1'>
    <td width="5%"><?php echo $v['id']?></td>
    <td align="left" width="10%" style="font-weight: bold">
      <span><a href="#" ><?php echo $v['news_title']?></a></span>
    </td>
    <td width="65%" align="left"><?php echo $v['news_desc']?></td>
    <td width="10%"><span><?php echo $v['news_author']?></span></td>
    <td width="10%" align="center"><a href="<?php echo U('edit',array('id'=>$v['id']))?>">编辑</a> |
      <a href="<?php echo U('del',array('id'=>$v['id']))?>" onclick="if(confirm('确定要删除吗？')==false)return false;" title="移除">移除</a>
    </td>
  </tr>
  <?php }?>
  </table>
</div>
</form>

<div id="footer">
共执行 1 个查询，用时 0.015927 秒，Gzip 已禁用，内存占用 1.999 MB<br />

版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利
。</div>

</body>
</html>