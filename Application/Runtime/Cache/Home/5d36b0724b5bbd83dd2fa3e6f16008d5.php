<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>seven baby - app</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/Public/css/home/style.css" rel="stylesheet">
    <link href="/Public/css/home/style-responsive.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 0px;
        padding-bottom:0px;
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
    <li><a href="app.html" onClick="change_bg(this)" class="select">移动应用</a></li>
    <li><a href="download.html" onClick="change_bg(this)">下载</a></li>
    <li><a href="about.html" onClick="change_bg(this)">关于</a></li>
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
          <div class="row-fluid" style="z-index:1;">   
            <div class="app-bar row-fluid">
            <ul>
            <li id="one1" onClick="setTab('one',1,3)"><a href="app.html"><img src="/Public/Img/APP_01.jpg"><p class="title">SEVENBABY电台</p></a></li>
            <li id="one2" onClick="setTab('one',2,3)"><a href="javascript:void(0)"><img src="/Public/Img/APP_02.jpg"><p class="title">意念力Leo</p></a></li>
            <li id="one3" onClick="setTab('one',3,3)"><a href="javascript:void(0)"><img src="/Public/Img/APP_03.jpg"><p class="title"><!--敬请期待 --></p></a></li>
            </ul>
            </div>
          </div><!--/row-->

          <div class="row-fluid"  id="con_one_1"  style="display:none;">         
           <div class="app-about">
           <dl>
           <dt><img src="/Public/Img/APP_1.jpg"></dt>
           <dd class="title">SEVENBABY电台</dd>
           <dd>类别：音视频应用</dd>
           <dd>大小：1.76M</dd>
           <dd>版本：1.0.0</dd>
           <dd><img src="/Public/Img/APP_14.jpg" class="marginlr4"></dd>
           <dd><img src="/Public/Img/APP_14-18.jpg" class="marginlr4"></dd>
           </dl> 
           <dl class="code">
           <dl class="appdownload">
           <dt><img src="/Public/Img/APP_07.jpg"></dt>
           <dd><a href="javascript:void(0);" target="_blank"><img src="/Public/Img/APP_14-15.jpg"></a></dd>
           </dl>
            <dl>
           <dt><img src="/Public/Img/SB_android.jpg"></dt>
           <dd><a href="app/SevenBaby.apk"><img src="/Public/Img/APP_15.jpg"></a></dd>
           </dl>
           </dl>
           <dl class="content">
             <DIV> 宝宝早教首选，辣妈们的育儿专家！<br>
               宝贝爱听，妈妈放心！<br>
              
               免费献给所有的孩子们，祝爸爸妈妈有个健康的宝宝，宝宝有个快乐的童年！<br>
               <br>
               ★&nbsp;应用操作简单，界面清晰一目了然，从此抛弃繁琐的操作说明<br>
               ★&nbsp;无广告，全免费，无内收费！资源丰富全面，内容不断更新。<br>
               ★&nbsp;提供幼教精品故事、儿歌、英语等有声内容。<br>
               <br>
               <b>主要内容</b><br>
          
               童话故事：<br>
               精心收录了适合儿童成长的经典童话，包括好习惯故事、睡前故事、十万个为什么、科普&nbsp;、名人、成语、世界人气童话故事，爸爸妈妈们下载到手机里，可供孩子们随时收听！<br>
               <br>
               音乐儿歌：<br>
起床曲、摇篮曲、钢琴曲，儿歌能培养婴幼儿逻辑思维能力，丰富婴幼儿语言数据库，锻 炼婴幼儿表述能力，启发婴幼儿空间想象力，以及开发婴幼儿创造潜能。

<br><br>
早教百科：<br>
儿童有声百科故事大全! 包含宝宝最爱听的科学探索小故事, 经典启蒙故事等等, 给宝宝 一个有启蒙故事的快乐童年!<br><br>

儿童英文：<br>内含的儿歌根据目前世界各地少儿英文儿歌、英文小故事、英文课文有声材料 记录整理，脍炙人口，词意浅显，曲谱配的是少年儿童最为熟悉的儿歌。<br><br>

同名节目：<br>健康卫视播出sevenbaby同名节目，对幼儿身体成长和认知、情感、性格等方面 发展做到有力引导。<br><br>

宝贝用品：<br>为宝宝提供专业健康的产品。 </DIV>
           </dl>
           </div>
                        
          </div><!--/row-->
          
                    <div class="row-fluid"  id="con_one_2">         
           <div class="app-about">
           <dl>
           <dt><img src="/Public/Img/APP_2.jpg"></dt>
           <dd class="title">意念力Leo</dd>
           <dd>类别：脑波互动游戏</dd>
           <dd>大小：22.22M</dd>
           <dd>版本：1.0.3</dd>
           <dd><img src="/Public/Img/APP_14.jpg" class="marginlr4"></dd>
          <!-- <dd><img src="/Public/Img/APP_14-18.jpg" class="marginlr4"></dd> -->
           </dl> 
           <dl class="code">
<!--           <dl class="appdownload">
           <dt><img src="/Public/Img/APP_07.jpg"></dt>
           <dd><a href="javascript:void(0);" target="_blank"><img src="/Public/Img/APP_14-15.jpg"></a></dd>
           </dl> -->
            <dl>
           <dt><img src="/Public/Img/APP_07-10.jpg"></dt>
           <dd><a href="https://itunes.apple.com/cn/app/yi-nian-lileo/id883542325?mt=8"><img src="/Public/Img/APP_15.jpg"></a></dd>
           </dl>
           </dl>
           <dl class="content">
            <p>*****本游戏需要与宏智力BrainLink智能头箍配套使用，购买链接：www.macrotellect.com*****<br>
                不动手，用意念力激活LEO推动食物<br>
                游戏中，专注力、放松力交替进行，最大强度训练脑波状态；<br>
                新体验、新玩法、真实的脑波数值反馈，创新脱俗的意念力游戏；<br>
                最新加入“家长按钮”，家长可以设置孩子游戏时间、记录孩子每天训练的脑波数据<br>
                查看孩子在全国孩子中的数据排名！</p>
              <p>意念力LEO是一款老少皆宜的脑波互动应用。您只需要用“意念力”就可以操控可爱的小LEO，帮助它顺利的将食物推到目的地。比如说您越专注，LEO推食物的速度就越快；越放松，就可以帮助它变出越漂亮的水果等等。游戏共计24关，您将与小LEO一起历经春夏秋冬的场景变化，一起迎接各种趣味性的意念力挑战，如怪兽追赶、危机浮桥、LEO对推、计时任务等等，让您在丰富、趣味的互动中，训练持续专注和主动放松的能力。<br>
                **放松力魔法，变出漂亮水果**<br>
                大脑无限放松，通过脑波感应技术，水果魔法般的变出来<br>
                **热身训练**<br>
                专注力、放松力的热身训练，让您感受“不动手、用意念力玩游戏”的畅快感觉<br>
                **躲避怪兽**<br>
                怪兽的猛烈追赶，使得游戏变得更加惊险、刺激；专注力、放松力交替进行，训练超强脑波；<br>
                **秋天大丰收**<br>
                唯美的画面，漂亮的水晶果实，感应神奇的脑波、创造奇迹般的大丰收；<br>
                </p>
           </dl>
           </div>      
                      
          </div><!--/row-->


           <div class="row-fluid"  id="con_one_3" style="display:none;">         
           <div class="app-about">
           <dl>
           <dt><img src="/Public/Img/APP_03.jpg" width="200" height="200"></dt>
           <dd class="title">敬请期待</dd>
           <dd>类别：？</dd>
           <dd>大小：？</dd>
           <dd>版本：？</dd>
           <dd><img src="/Public/Img/APP_14.jpg" class="marginlr4"></dd>
           <dd><img src="/Public/Img/APP_14-18.jpg" class="marginlr4"></dd>
           </dl> 
           <dl class="code">
           <dl class="appdownload">
           <dt><img src="/Public/Img/APP_07.jpg"></dt>
           <dd><a href="javascript:void(0);" target="_blank"><img src="/Public/Img/APP_14-15.jpg"></a></dd>
           </dl>
            <dl class="appdownload">
           <dt><img src="/Public/Img/APP_07-10.jpg"></dt>
           <dd><a href="javascript:void(0);"><img src="/Public/Img/APP_15.jpg"></a></dd>
           </dl>
           </dl>
           <dl class="content">
            <p>敬请期待... ...</p>
           </dl>
           </div>      
                      
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