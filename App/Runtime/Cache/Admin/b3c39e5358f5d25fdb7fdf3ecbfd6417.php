<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: goods_info.htm 17126 2010-04-23 10:30:26Z liuhui $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加新闻 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<link href="/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
    $(function(){


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
<span class="action-span"><a href="goods.php?act=list">添加新闻</a></span>
<span class="action-span1"><a href="index.php?act=main">海潜管理中心</a> </span><span id="search_id" class="action-span1"> - 添加新闻 </span>
<div style="clear:both"></div>
</h1>

<!-- start goods form -->
<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab" onclick="charea('general');">通用信息</span>
        <!--<span class="tab-back" id="detail-tab" onclick="charea('detail');">详细描述</span>-->
        <!--<span class="tab-back" id="mix-tab" onclick="charea('mix');">其他信息</span>-->

      </p>
    </div>

    <!-- tab body -->
    <div id="tabbody-div" >
      <form enctype="multipart/form-data" action="/index.php/Admin/News/add" method="post" name="theForm" >
        <!-- 最大文件限制 -->
        <!-- 通用信息 -->
        <table width="90%" id="general-table">
          <tr>
            <td class="label">标题：</td>
            <td><input type="text" name="news_title"style="float:left;" size="30" /></td>
          </tr>
            <tr>
                <td class="label">新闻关键字(逗号分开)：</td>
                <td><input type="text" name="news_key"style="float:left;" size="30" /></td>
            </tr>
            <tr>
                <td class="label">作者：</td>
                <td><input type="text" name="news_author"style="float:left;" size="30" /></td>
            </tr>

        </table>
          <hr/>
          <div style="width: 90%;overflow: hidden">

                    <textarea name="news_detail" id="news_detail" cols="30" rows="10"></textarea>
                    <script id="container" name="news_detail" type="text/plain">
请输入商品详情.....
    </script>
                    <!-- 配置文件 -->
                    <script type="text/javascript" src="/Public/Admin/js/ueditor/ueditor.config.js"></script>
                    <!-- 编辑器源码文件 -->
                    <script type="text/javascript" src="/Public/Admin/js/ueditor/ueditor.all.js"></script>
                    <!-- 实例化编辑器 -->
                    <script type="text/javascript">
                        var ue = UE.getEditor('news_detail',{
                            "initialFrameWidth":"100%",
                            "initialFrameHeight":1000
                        });
                    </script>
                    <!--<textarea id="goods_desc" name="goods_desc"></textarea>--></td>

          </div>

  
        <div class="button-div">
                    <input type="submit" value=" 确定 " class="button" />
          <input type="reset" value=" 重置 " class="button" />
        </div>
      </form>
    </div>
</div>
<!-- end goods form -->

</body>
</html>