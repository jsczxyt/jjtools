<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: goods_info.htm 17126 2010-04-23 10:30:26Z liuhui $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加新商品 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<link href="/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
    $(function(){
        //商品类别多级联动
        $("[name='cate_prid']").change(function(){
            $('#cate_id').empty();
            //alert($(this).val());
           //console.log($(this).val());
            $.ajax({
                'type':"POST",
                'url':"<?php echo U('Goods/getsel')?>",
                'data':{id:$(this).val()},
                'dataType':"json",
                'success':function(data){
                    console.log(data);
                    for(var i=0;i<data.length;i++){
                        $('#cate_id').append("<option value='"+data[i].id+"'>"+data[i].cate_name+"</option>");
                    }
                }
            });
        }
        );

        //替换关键字中的逗号为英文符
        $("form").submit(function(e){
            $('input[name=goods_key]').val($('input[name=goods_key]').val().replace(/\，/g,","));
        })
    })
</script>
    <script type="text/javascript">
        function charea(a) {
        var spans = ['general','detail','mix'];
        for(i=0;i<3;i++) {
            var o = document.getElementById(spans[i]+'-tab');
            var tb = document.getElementById(spans[i]+'-table');
            o.className = o.id==a+'-tab'?'tab-front':'tab-back';
            tb.style.display = tb.id==a+'-table'?'block':'none';
        }

    }</script>
</head>
<body>

<h1>
<span class="action-span"><a href="goods.php?act=list">商品列表</a></span>
<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 添加新商品 </span>
<div style="clear:both"></div>
</h1>

<!-- start goods form -->
<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab" onclick="charea('general');">通用信息</span>
        <span class="tab-back" id="detail-tab" onclick="charea('detail');">详细描述</span>
        <!--<span class="tab-back" id="mix-tab" onclick="charea('mix');">其他信息</span>-->

      </p>
    </div>

    <!-- tab body -->
    <div id="tabbody-div" >
      <form enctype="multipart/form-data" action="/index.php/Admin/Goods/add" method="post" name="theForm" >
        <!-- 最大文件限制 -->
        <!-- 通用信息 -->
        <table width="90%" id="general-table" align="center">
          <tr>
            <td class="label">商品名称：</td>
            <td><input type="text" name="goods_name"style="float:left;" size="30" /></td>
          </tr>
            <tr>
                <td class="label">商品关键字(逗号分开)：</td>
                <td><input type="text" name="goods_key"style="float:left;" size="30" /></td>
            </tr>
          <!--<tr>
            <td class="label">
            <a href="#" title="点击此处查看提示信息"><img src="./Public/Admin/images/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 商品货号： </td>
            <td><input type="text" name="goods_sn" value="" size="20"  /><span id="goods_sn_notice"></span><br />
            <span class="notice-span" style="display:block"  id="noticeGoodsSN">如果您不输入商品货号，系统将自动生成一个唯一的货号。</span></td>
          </tr>-->
          <tr>
            <td class="label">商品分类：</td>
            <td><select name="cate_prid"  >
                <option value="0">请选择...</option>
                <?php foreach($catedata as $v){ if($v['parent_id']==0){ ?>
                <option value="<?php echo $v['id'];?>"><?php echo $v['cate_name'];?></option>
                <?php }}?>
            </select>
                <select name="cate_id" id="cate_id">
                    <option value="0">请选择...</option>
                </select>
             </td>
          </tr>
                   <!--<tr>
            <td class="label">本店售价：</td>
            <td><input type="text" name="shop_price" value="0" size="20" /></td>
          </tr>-->
          
          <tr>
            <td class="label">上传图片：</td>
            <td>
              <input type="file" name="goods_img" size="35" />
            </td>
          </tr>
        </table>

        <!-- 详细描述 -->
        <table width="90%" id="detail-table" style="display:none">
          <tr>
            <td>
                <textarea name="goods_desc" id="goods_desc" cols="30" rows="10"></textarea>
                <script id="container" name="goods_desc" type="text/plain">
请输入商品详情.....
    </script>
                <!-- 配置文件 -->
                <script type="text/javascript" src="/Public/Admin/js/ueditor/ueditor.config.js"></script>
                <!-- 编辑器源码文件 -->
                <script type="text/javascript" src="/Public/Admin/js/ueditor/ueditor.all.js"></script>
                <!-- 实例化编辑器 -->
                <script type="text/javascript">
                    var ue = UE.getEditor('goods_desc',{
                        "initialFrameWidth":1000,
                        "initialFrameHeight":1000
                    });
                </script>
                <!--<textarea id="goods_desc" name="goods_desc"></textarea>--></td>
          </tr>
        </table>

        <!-- 其他信息 -->
        <!--<table width="90%" id="mix-table" style="display:none" align="center">
                    <tr>
            <td class="label">商品重量：</td>
            <td><input type="text" name="goods_weight" value="" size="20" /> <select name="weight_unit"><option value="1" selected>千克</option><option value="0.001">克</option></select></td>
          </tr>
          <tr>
            <td class="label"><a href="#" title="点击此处查看提示信息"><img src="./Public/Admin/images/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 商品库存数量：</td>

            <td><input type="text" name="goods_number" value="1" size="20" />
          </tr>
                    <tr>
            <td class="label">加入推荐：</td>
            <td><input type="checkbox" name="is_best" value="1"  />精品 <input type="checkbox" name="is_new" value="1"  />新品 <input type="checkbox" name="is_hot" value="1"  />热销</td>
          </tr>
          <tr id="alone_sale_1">
            <td class="label" id="alone_sale_2">上架：</td>
            <td id="alone_sale_3"><input type="checkbox" name="is_on_sale" value="1" checked="checked" /> 打勾表示允许销售，否则不允许销售。</td>
          </tr>
          <tr>
            <td class="label">商品关键词：</td>
            <td><input type="text" name="keywords" value="" size="40" /> 用空格分隔</td>
          </tr>
          <tr>
            <td class="label">商品简单描述：</td>
            <td><textarea name="goods_brief" cols="40" rows="3"></textarea></td>
          </tr>
          <tr>
            <td class="label">
            <a href="#" title="点击此处查看提示信息"><img src="./Public/Admin/images/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 商家备注： </td>
            <td><textarea name="seller_note" cols="40" rows="3"></textarea><br />
            <span class="notice-span" style="display:block"  id="noticeSellerNote">仅供商家自己看的信息</span></td>
          </tr>
        </table>-->

  
        <div class="button-div">
          <input type="hidden" name="goods_id" value="0" />
                    <input type="submit" value=" 确定 " class="button" />
          <input type="reset" value=" 重置 " class="button" />
        </div>
        <input type="hidden" name="act" value="insert" />
      </form>
    </div>
</div>
<!-- end goods form -->

</body>
</html>