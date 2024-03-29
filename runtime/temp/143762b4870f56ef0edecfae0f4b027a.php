<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"G:\phpStudy\WWW\twothink\public/../application/install\view\install\step3.html";i:1496373782;s:76:"G:\phpStudy\WWW\twothink\public/../application/install\view\public\base.html";i:1496373782;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TwoThink 安装</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="__STATIC__/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="__STATIC__/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="__CSS__/install.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
        <![endif]-->
        <script src="__STATIC__/jquery-1.10.2.min.js"></script>
        <script src="__STATIC__/bootstrap/js/bootstrap.js"></script>
    </head>

    <body data-spy="scroll" data-target=".bs-docs-sidebar">
        <!-- Navbar
        ================================================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" target="_blank" href="http://www.twothink.cn">TwoThink</a>
                    <div class="nav-collapse collapse">
                    	<ul id="step" class="nav">
                    		
    <li class="active"><a href="javascript:;">安装协议</a></li>
    <li class="active"><a href="javascript:;">环境检测</a></li>
    <li class="active"><a href="javascript:;">创建数据库</a></li>
    <li class="active"><a href="javascript:;"><?php if(\think\Session::get('update') == '1'): ?>升级<?php else: ?>安装<?php endif; ?></a></li>
    <li><a href="javascript:;">完成</a></li>

                    	</ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron masthead">
            <div class="container">
                
    <h1><?php if(\think\Session::get('update') == '1'): ?>升级<?php else: ?>安装<?php endif; ?></h1>
    <div id="show-list" class="install-database">
    </div>
    <script type="text/javascript">
        var list   = document.getElementById('show-list');
        function showmsg(msg, classname){
            var li = document.createElement('p'); 
            li.innerHTML = msg;
            classname && li.setAttribute('class', classname);
            list.appendChild(li);
            document.scrollTop += 30;
        }
    </script>

            </div>
        </div>


        <!-- Footer
        ================================================== -->
        <footer class="footer navbar-fixed-bottom">
            <div class="container">
                <div>
                	
    <button class="btn btn-warning btn-large disabled">正在<?php if(\think\Session::get('update') == '1'): ?>升级<?php else: ?>安装<?php endif; ?>，请稍后...</button>

                </div>
            </div>
        </footer>
    </body>
</html>
