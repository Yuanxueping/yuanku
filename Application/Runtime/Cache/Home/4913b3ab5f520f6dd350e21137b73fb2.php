<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
        <title>让IE浏览器支持CSS3圆角,阴影属性</title>
  <!--<meta name="author" content="yanue" />
  <meta name="copyright" content="www.yanue.net" />-->
  <style type="text/css">
  	.test {
                        width:560px;
                        height:400px;
                background-color: #ccc;
                        padding:10px 8px 6px; 
                        border: 2px solid #C0C0C0; 
                        margin-bottom:10px;
                border-radius: 10px;
                behavior: url(ie-css3.htc);
        }
  </style>
  
   
</head>
<body>
        <div class="test">
                请到ie下观看效果
                这个页面是用以测试主机是否有正确的content-type。
                如果有圆角和阴影，说明支持htc
                说明详解：<a href="http://www.yanue.net/post-16.html">http://www.yanue.net/post-16.html</a>
        </div>
</body>
</html>