<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta  charset="utf-8">
<title><?php echo $newsinfo['news_title']?></title>
<meta name="keywords" content="<?php echo $newsinfo['news_key']?>" />
<LINK href="favicon.ico" type="image/x-icon" rel="shortcut icon">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css" >
<script type="text/javascript" src="/Public/Home/js/jquery.min.js" ></script>
</head>
<body>
<div class="inner top clearfix">
    <div class="logo"><a href="index.htm" tppabs="http://www.haiq.com/"><img src="/Public/Home/image/logo12.png" tppabs="/Public/Home/image/logo12.png" class="png vt"></a></div>
    <div class="clearfix">
        <!--<div class="serachbox">
             <input type="hidden" name="kwtype" value="0" />
           <input type="text" name="q" placeholder="关键词搜索" class="search-txt" id="txt_key">
           <input type="button" class="search-btn" onClick="toseach() ">
       </div>--><!--serachbox end-->
        <!--serachbox end-->
    </div>
    <div class="nav" id="nav">
        <ul>
            <li><a href="index.htm" tppabs="http://www.haiq.com/" class="act">首页</a></li>

            <li><a href="<?php echo U('Index/about')?>">关于我们</a></li>

            <li><a href="<?php echo U('News/lst')?>">新闻资讯</a></li>

            <li><a href="a/chanpinzhanshi/index.htm" tppabs="http://www.haiq.com/a/chanpinzhanshi/">产品展示</a></li>

            <li><a href="a/jishufuwu/chanpindingzhi/index.htm" tppabs="http://www.haiq.com/a/jishufuwu/chanpindingzhi">技术服务</a></li>

            <li><a href="a/rencaiziyuan/qiyewenhua/index.htm" tppabs="http://www.haiq.com/a/rencaiziyuan/qiyewenhua">人才资源</a></li>

            <li><a href="a/lianxiwomen/index.htm" tppabs="http://www.haiq.com/a/lianxiwomen/">联系我们</a></li>



        </ul>
    </div>
    <!--nav end-->
</div>
<script type="text/javascript">
    jQuery(function () {
        $('input').keyup(function (event) {

            if (event.keyCode == "13") {
                toseach();
                return false;
            }

        });
    });
</script>
<div  class="pagebox">
  <div  class="inner clearfix">
    <p  class="ptname">新闻资讯</p>
  </div>
</div>
<div  class="container clearfix">
  <div  class="infopaget">
    <p  class="t"><?php echo $newsinfo['news_title']?></p>
    <p  class="info"> 本文来自：<?php echo $newsinfo['news_author'];?>&nbsp;&nbsp;&nbsp;&nbsp;发布时间<?php echo date('Y-m-d H:i:s',$newsinfo['news_addtime']);?></p>
  </div>
  <div  class="page"><?php echo htmlspecialchars_decode($newsinfo['news_detail']);?></div>
<!--  <div  class="nppage">
    <p  class="l">上一篇：没有了 </p>
    <p  class="r">下一篇：<a href="2.html" tppabs="http://www.haiq.com/a/xinwenzixun/20141218/2.html">组织召开可行性专家咨询会</a> </p>
  </div>-->
</div>


    <div class="footbox">
    <dl class="foot clearfix">
        <dl>
            <dd class="finfobox">
                <p class="clearfix num"><span class="i fi1"></span> 18551091152</p>
                <p class="clearfix num"><span class="i fi2"></span>1550901410@qq.com</p>
                <p class="clearfix"><span class="i fi3"></span>江苏省常州市西夏墅镇工具交易中心1-57</p>
            </dd>
            <dd class="frighbox">
                <p class="fnav">
                    <a textvalue="简要介绍" target="_self" href="a/guanyuwomen/jianyaojieshao/index.htm" tppabs="http://www.haiq.com/a/guanyuwomen/jianyaojieshao/">简要介绍</a> &nbsp;
                    <a textvalue="新闻资讯" target="_self" href="a/xinwenzixun/index.htm" tppabs="http://www.haiq.com/a/xinwenzixun/">新闻资讯</a> &nbsp;
                    <a textvalue="产品展示" target="_self" href="a/chanpinzhanshi/index.htm" tppabs="http://www.haiq.com/a/chanpinzhanshi/">产品展示</a> &nbsp;
                    <a href="a/jishufuwu/chanpindingzhi/index.htm" tppabs="http://www.haiq.com/a/jishufuwu/chanpindingzhi">技术服务</a> &nbsp;
                    <a textvalue="人才资源" target="_self" href="a/rencaiziyuan/qiyewenhua/index.htm" tppabs="http://www.haiq.com/a/rencaiziyuan/qiyewenhua">人才资源</a> &nbsp;
                    <a textvalue="联系我们" target="_self" href="a/lianxiwomen/index.htm" tppabs="http://www.haiq.com/a/lianxiwomen/">联系我们</a> &nbsp;</p>
                <p><br />
                </p>
                <p><br />
                </p>
                <p> Copyright &copy; 2015 海潜贸易 版权所有  &nbsp;  苏ICP备15015758号-1 </p>


                <p><br/>
                </p>
                <br />
                <p><br />
                </p>
            </dd>
        </dl>
    </dl>
    <!--foot end-->
</div>



</body>
</html>