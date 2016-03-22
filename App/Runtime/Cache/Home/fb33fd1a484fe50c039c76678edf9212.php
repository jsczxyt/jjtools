<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>常州市海潜贸易有限公司</title>
    <meta name="description" content="常州市海潜贸易有限公司">
    <meta name="keywords" content="常州市海潜贸易有限公司">
    <LINK href="favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css" tppabs="http://www.haiq.com//Public/Home/css/style.css">
    <script type="text/javascript" src="/Public/Home/js/jquery.min.js" tppabs="http://www.haiq.com//Public/Home/js/jquery.min.js"></script>
    <!--[if lte IE 6]>
    <!--<script type="text/javascript" src="templets/default/style/png.js" tppabs="http://www.haiq.com/templets/default/style/png.js"></script>-->
    <script type="text/javascript">
        PNG.fix('.png')
    </script>
    <![endif]-->
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
    <p  class="ibox-t3"><span  class="en">Purification engineering technology research center of Sichuan Province Natural Medicine</span><br>
      <span  class="zh">织梦58技术研究中心</span></p>
    <p  class="ptname">新闻资讯</p>
  </div>
</div>

<div  class="container clearfix">
  <?php foreach($newslst as $v){?>
  
  <dl  class="newsitem clearfix">
    <dd  class="time">
      <p  class="num">18</p>
      <p  class="year">2014-12</p>
    </dd>
    <dd  class="img"><a  target="_blank"  href="<?php echo U('detail',array('id'=>$v['id']))?>" ><img  src="../../uploads/141218/1-14121Q61SW12.jpg"><span  class="png"  style="display: none;"><img  src="../../templets/default/images/nico.gif" class="vm"  width="37"  height="37"  style="margin-top: 0px;"></span></a></dd>
    <dd  class="con">
      <p  class="t"><a  target="_blank"  href="<?php echo U('detail',array('id'=>$v['id']))?>" ><?php echo $v['news_title']?></a> </p>
      <div  class="c"> 4月13日，在这个春光明媚的日子，樱桃红了，草莓也熟了。公司为丰富广大员工的文化生活，组织全体员工到龙泉万亩果园游玩，大家积极参与自助烧烤，体会着大自然 的乐趣，同时品... </div>
      <a  class="more2 l"  target="_blank"  href="<?php echo U('detail',array('id'=>$v['id']))?>" >[查看详情]</a> </dd>
  </dl>
  <?php }?>

  <div  class="paging">
  <span  class="pageinfo">共 <strong>1</strong>页<strong>3</strong>条记录</span>

     </div>
  <script  type="text/javascript">
        //<![CDATA[ 
        jQuery(function () {
            jQuery(".newsitem").hover(function () {
                jQuery(this).find(".img a .png"/*tpa=http://www.haiq.com/a/xinwenzixun/.img a .png*/).stop().fadeIn(300);
                jQuery(this).find(".img a .png"/*tpa=http://www.haiq.com/a/xinwenzixun/.img a .png*/).children("img").stop().animate({ "margin-top": "-20px" }, 400);
            }, function () {
                jQuery(this).find(".img a .png"/*tpa=http://www.haiq.com/a/xinwenzixun/.img a .png*/).fadeOut(100);
                jQuery(this).find(".img a .png"/*tpa=http://www.haiq.com/a/xinwenzixun/.img a .png*/).children("img").animate({ "margin-top": "0px" }, 200);
            })
        });
        //]]>
    </script> 
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

</body></html>