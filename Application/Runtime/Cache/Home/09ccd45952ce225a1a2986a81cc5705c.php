<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>seven baby - about</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/Public/css/home/style.css" rel="stylesheet">
    <link href="/Public/css/home/style-responsive.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 0px;
        padding-bottom: 0px;
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
    <li><a href="index.html" onClick="change_bg(this)">首页</a></li>
    <li><a href="http://item.taobao.com/item.htm?spm=686.1000925.1000774.13.UkkziO&id=39652971569" target="_blank"  onClick="change_bg(this)">产品</a></li>
    <li><a href="app.html" onClick="change_bg(this)">移动应用</a></li>
    <li><a href="download.html" onClick="change_bg(this)">下载</a></li>
    <li><a href="about.html" onClick="change_bg(this)"  class="select">关于</a></li>
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
          <div class="hero-unit"><a href="http://www.jkwshk.tv" target="_blank"><img src="/Public/Img/about_01.jpg"></a></div>

          <div class="row-fluid">
            <div class="span5">
              <p class="title1" style="margin-top:30px;">关于SEVEN BABY</p>
              <div class="content1">
                  <?php echo ($about["info"]); ?>
              </div>
            </div><!--/span-->
            
            <div class="span5" style="margin-left:0px;">
              <p class="title1">联系我们</p>
              <div class="content1">
              <?php echo ($about["contact"]); ?>
              </div>
            </div><!--/span-->
           
          </div><!--/row-->

        </div><!--/span-->
      </div><!--/row-->

    </div><!--/.fluid-container-->
	<!-- 51统计 -->
	<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F79d599605188dab511ff914616d676eb' type='text/javascript'%3E%3C/script%3E"));
  </body>
</html>