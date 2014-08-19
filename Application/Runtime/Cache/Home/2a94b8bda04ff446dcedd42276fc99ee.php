<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>seven baby - index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/Public/css/home/style.css" rel="stylesheet">
    <link href="/Public/css/home/style-responsive.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding: 0px;
      }
      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
   <script src="/Public/js/home/jquery.js"></script>
   <script src="/Public/js/home/about.js"></script>
   <script src="/Public/js/home/lang.js"></script>
  </head>
 <body>
  <!--头部导航开始 -->
 <div class="navbar navbar-inverse navbar-fixed-top min_width" style="position:fixed;">
      <div class="navbar-inner">
        <div class="container-fluid">
              <ul class="nav" style="margin-top:10px; padding-left:10px;">
              <li><a href="#"><img src="/Public/Img/news_06.png"></a></li>
              <li><a href="#"><img src="/Public/Img/news_08.png"></a></li>
              <li><a href="#"><img src="/Public/Img/news_10.png"></a></li>
              <li><a href="#"><img src="/Public/Img/news_12.png"></a></li>
              <li style="margin:10px 0px 0px 22px;"><img src="/Public/Img/news_03.png"></li>
            </ul>
            <p class="navbar-text pull-right"><span class="topnav-line">&nbsp;</span><a href="http://www.seven-baby.com" target="_blank"><span class="arial">www.<font class="color01">seven-baby</font>.com</span></a> <span class="topnav-line">&nbsp;</span><font class="color02"><a href="javascript:zh_tran('t');" class="zh_click" id="zh_click_t">繁</a></font><span class="topnav-line">&nbsp;</span><a href="javascript:zh_tran('s');" class="zh_click" id="zh_click_s">简</a><span class="topnav-line">&nbsp;</span></p>
        </div>
      </div>
    </div>
  <!--头部导航结束 -->
  <div class="container-fluid">         
      <!-- 左侧导航开始 -->
    <div class="span3 left-bars" style="float:left; z-index:10;">
    <div class="leftbar">
    <div class="leftbar1" >
    <div class="senvenbaby-logo"><a href="#"><img src="/Public/Img/news_20.png" width="170" height="190" alt=""></a></div>
    
    <div class="leftnav">
    <ul>
    <li><a href="index.html" onClick="change_bg(this)" class="select">首页</a></li>
    <li><a href="http://item.taobao.com/item.htm?spm=686.1000925.1000774.38.jnuqv0&id=39847891582" target="_blank"  onClick="change_bg(this)">产品</a></li>
    <li><a href="<?php echo U('Home/Index/app');?>" onClick="change_bg(this)">移动应用</a></li>
    <li><a href="<?php echo U('Home/Index/download');?>" onClick="change_bg(this)">下载</a></li>
    <li><a href="<?php echo U('Home/Index/about');?>" onClick="change_bg(this)">关于</a></li>
    </ul>
    </div>
    
    <div class="copyright-bar">
      <div class="copyright">copyright © 2014 SEVENBABY.<br>All Rights Reserved.<br>
        <br></div>
    </div>
  </div>
  </div>
    </div>
      <!--左侧导航结束 -->  
      <div class="row-fluid">        
        <div class="span9 right-bars" style="margin:40px;">
          <div class="hero-unit"><a href="http://www.jkwshk.tv/sevenbaby/index.html" target="_blank"><img src="/Public/Img/news_23.png"></a></div>
          <div class="row-fluid" style="z-index:1;">   
            <div class="span4" style="margin-left:0px;z-index:1;"><span class="time">2014.08.15</span>
            <a href="#"><img src="/Public/Img/news_27-31.png"></a> </div><!--/span-->
            <div class="span4" style="margin-left:0px;z-index:1;"><span class="time">2014.08.15</span>
            <a href="#"><img src="/Public/Img/news_29-33.png"></a></div><!--/span-->
            <div class="span4" style="margin-left:0px;z-index:1;"><span class="time">2014.08.15</span>
            <a href="#"><img src="/Public/Img/news_31.png"></a></div><!--/span-->
          </div><!--/row-->

          <div class="row-fluid">
          <div class="span5" style="margin-top:20px;"></div>
           <a href="#"><div class="span5">
              <p class="time">2014.07.05</p>
              <p class="title">sevenbaby-意念力LEO游戏App火热上架</p>
              <p class="content">以sevenbaby声光安抚音乐玩具卡通形象Leo为主角设计的专属意念力游戏APP已制作完成，并提供下载试玩。！</p>
            </div></a><!--/span-->
            
            <a href="#"><div class="span5">
              <p class="time">2014.06.26</p>
              <p class="title">sevenbaby-声光安抚音乐故事机火热预定中</p>
              <p class="content">参加sevenbaby评选活动即可获得200元优惠券！</p>
            </div></a><!--/span-->
            
            <a href="#"><div class="span5" style="margin-left:0px;">
              <p class="time">2014.06.25</p>
              <p class="title">sevenbaby声光安抚音乐玩具专属App即将上架</p>
              <p class="content">Sevenbaby声光安抚音乐玩具专属APP即将在App Store上架。家长朋友们下载后将获取童话故事、儿童英文、早教百科、同名节目等海量资源！</p>
            </div></a><!--/span-->
           
            
          </div><!--/row-->

        </div><!--/span-->
      </div><!--/row-->

    </div><!--/.fluid-container-->
	<!-- 51统计 -->
	<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F79d599605188dab511ff914616d676eb' type='text/javascript'%3E%3C/script%3E"));
</script>
  </body>
</html>