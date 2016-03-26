<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加分类 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/Js/jquery.js"></script>
    <script>
        $(function () {
            $('textarea[name=attr_value]').attr('disabled',true);   //默认输入框为隐藏状态
            $('input[name=attr_input_type]').click(function () {
                var zhi=$(this).val();
                if(zhi==1){
                    $('textarea[name=attr_value]').attr('disabled',false);
                }else{
                    $('textarea[name=attr_value]').attr('disabled',true);
                }
            })
        })
    </script>

</head>
<body>

<h1>
<span class="action-span"><a href="<?php echo U('Type/lst')?>">商品属性列表</a></span>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 添加属性 </span>
<div style="clear:both"></div>
</h1>

<div class="main-div">
  <form action="/index.php/Admin/Attr/add" method="post" name="theForm" enctype="multipart/form-data">
  <table width="100%" id="general-table">
      <tr>
        <td class="label">属性名称:</td>
        <td>
          <input type='text' name='attr_name' maxlength="20" value='' size='27' /> <font color="red">*</font>
        </td>
      </tr>
      <tr >
          <td class="label">所属商品类型:</td>
          <td>
              <select name="type_id">
                  <option value="0">请选择...</option>
                  <?php foreach($typedata as $v){ if($v['id']==$type_id) $sel='selected=selected'; else $sel=''; ?>
                  <option <?php echo $sel?> value="<?php echo $v['id']?>"><?php echo $v['type_name']?></option>
                  <?php }?>
              </select>
          </td>
      </tr>
      <tr>
          <td class="label">属性类型:</td>
          <td><input type="radio" value="0" name="attr_type" id="">唯一属性 <input type="radio" value="1" name="attr_type" id="">单选属性</td>
      </tr>
      <tr>
          <td class="label">属性录入方式:</td>
          <td><input type="radio" name="attr_input_type" value="0" id="">手工输入 <input type="radio" value="1" name="attr_input_type" id="">列表选择(一行代表一个可选值)</td>
      </tr>
      <tr>
          <td class="label">可选值列表:</td>
          <td><textarea name="attr_value" id="" cols="30" rows="10"></textarea></td>
      </tr>
      </table>
      <div class="button-div">
        <input type="submit" value=" 确定 " />
        <input type="reset" value=" 重置 " />
      </div>
    <input type="hidden" name="act" value="insert" />
    <input type="hidden" name="old_cat_name" value="" />
    <input type="hidden" name="cat_id" value="" />
  </form>
</div>

<div id="footer">
共执行 3 个查询，用时 0.021687 秒，Gzip 已禁用，内存占用 2.081 MB<br />
版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>

</body>
</html>