<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:80:"G:\phpStudy\WWW\twothink\public/../application/admin/view/default/model\add.html";i:1496373782;s:82:"G:\phpStudy\WWW\twothink\public/../application/admin/view/default/public\base.html";i:1496373782;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $meta_title; ?>|TwoThink管理平台</title>
    <link href="__ROOT__/public/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/base.css" media="all">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/common.css" media="all">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/module.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/<?php echo \think\Config::get('color_style'); ?>.css" media="all">
     <!--[if lt IE 9]>
    <script type="text/javascript" src="__PUBLIC__/static/jquery-1.10.2.min.js"></script>
    <![endif]--><!--[if gte IE 9]><!-->
    <script type="text/javascript" src="__PUBLIC__/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/admin/js/jquery.mousewheel.js"></script>
    <!--<![endif]-->
    
</head>
<body>
    <!-- 头部 -->
    <div class="header">
        <!-- Logo -->
        <span class="logo"></span>
        <!-- /Logo -->

        <!-- 主导航 -->
        <ul class="main-nav">
            <?php if(is_array($__MENU__['main']) || $__MENU__['main'] instanceof \think\Collection || $__MENU__['main'] instanceof \think\Paginator): $i = 0; $__LIST__ = $__MENU__['main'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
                <li class="<?php echo (isset($menu['class']) && ($menu['class'] !== '')?$menu['class']:''); ?>"><a href="<?php echo url($menu['url']); ?>"><?php echo $menu['title']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- /主导航 -->

        <!-- 用户栏 -->
        <div class="user-bar">
            <a href="javascript:;" class="user-entrance"><i class="icon-user"></i></a>
            <ul class="nav-list user-menu hidden">
                <li class="manager">你好，<em title="<?php echo session('user_auth.username'); ?>"><?php echo session('user_auth.username'); ?></em></li>
                <li><a  onclick="go_home();">前台首页</a></li>
                <li><a href="<?php echo url('User/updatePassword'); ?>">修改密码</a></li>
                <li><a href="<?php echo url('User/updateNickname'); ?>">修改昵称</a></li>
                <li><a href="<?php echo url('Admin/delcache'); ?>">更新缓存</a></li>
                <li><a href="<?php echo url('Publics/logout'); ?>">退出</a></li>
            </ul>
        </div>
    </div>
    <!-- /头部 -->

    <!-- 边栏 -->
    <div class="sidebar">
        <!-- 子导航 -->
        
            <div id="subnav" class="subnav">
                <?php if(!(empty($_extra_menu) || (($_extra_menu instanceof \think\Collection || $_extra_menu instanceof \think\Paginator ) && $_extra_menu->isEmpty()))): ?>
                    
                    <?php echo extra_menu($_extra_menu,$__MENU__); endif; if(is_array($__MENU__['child']) || $__MENU__['child'] instanceof \think\Collection || $__MENU__['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $__MENU__['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i;?>
                    <!-- 子导航 -->
                    <?php if(!(empty($sub_menu) || (($sub_menu instanceof \think\Collection || $sub_menu instanceof \think\Paginator ) && $sub_menu->isEmpty()))): if(!(empty($key) || (($key instanceof \think\Collection || $key instanceof \think\Paginator ) && $key->isEmpty()))): ?><h3><i class="icon icon-unfold"></i><?php echo $key; ?></h3><?php endif; ?>
                        <ul class="side-sub-menu">
                            <?php if(is_array($sub_menu) || $sub_menu instanceof \think\Collection || $sub_menu instanceof \think\Paginator): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
                                <li>
                                    <a class="item" href="<?php echo url($menu['url']); ?>"><?php echo $menu['title']; ?></a>
                                </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    <?php endif; ?>
                    <!-- /子导航 -->
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        
        <!-- /子导航 -->
    </div>
    <!-- /边栏 -->

    <!-- 内容区 -->
    <div id="main-content">
        <div id="top-alert" class="fixed alert alert-error" style="display: none;">
            <button class="close fixed" style="margin-top: 4px;">&times;</button>
            <div class="alert-content">这是内容</div>
        </div>
        <div id="main" class="main">
            
            <!-- nav -->
            <?php if(!(empty($_show_nav) || (($_show_nav instanceof \think\Collection || $_show_nav instanceof \think\Paginator ) && $_show_nav->isEmpty()))): ?>
            <div class="breadcrumb">
                <span>您的位置:</span>
                <assign name="i" value="1" />
                <?php if(is_array($_nav) || $_nav instanceof \think\Collection || $_nav instanceof \think\Paginator): if( count($_nav)==0 ) : echo "" ;else: foreach($_nav as $k=>$v): if($i == count($_nav)): ?>
                    <span><?php echo $v; ?></span>
                    <?php else: ?>
                    <span><a href="<?php echo $k; ?>"><?php echo $v; ?></a>&gt;</span>
                    <?php endif; ?>
                    <assign name="i" value="$i+1" />
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <?php endif; ?>
            <!-- nav -->
            

            
	<div class="main-title cf">
		<h2>新增模型</h2>
	</div>

	<!-- 标签页导航 -->
	<div class="tab-wrap">
		<div class="tab-content">
			<!-- 表单 -->
			<form id="form" action="<?php echo url('update'); ?>" method="post" class="form-horizontal doc-modal-form">
				<!-- 基础 -->
				<div id="tab1" class="tab-pane in tab1">
					<div class="form-item cf">
						<label class="item-label">模型标识<span class="check-tips">（请输入文档模型标识）</span></label>
						<div class="controls">
							<input type="text" class="text " name="name" value="">
						</div>
					</div>
					<div class="form-item cf">
						<label class="item-label">模型名称<span class="check-tips">（请输入模型的名称）</span></label>
						<div class="controls">
							<input type="text" class="text " name="title" value="">
						</div>
					</div>
					<div class="form-item cf">
						<label class="item-label">模型类型<span class="check-tips">（选择要继承的模型）</span></label>
						<div class="controls">
							<select name="extend">
								<option value="0">独立模型</option> 
								<?php if(is_array($models) || $models instanceof \think\Collection || $models instanceof \think\Paginator): $i = 0; $__LIST__ = $models;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
									<option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</div>
					</div> 
					<div class="form-item cf">
						<label class="item-label">引擎类型<span class="check-tips"></span></label>
						<div class="controls">
							<select name="engine_type">
								<option value="MyISAM">MyISAM</option>
								<option value="InnoDB">InnoDB</option>
                                <option value="MEMORY">MEMORY</option>
                                <option value="BLACKHOLE">BLACKHOLE</option>
                                <option value="MRG_MYISAM">MRG_MYISAM</option>
                                <option value="ARCHIVE">ARCHIVE</option>
							</select>
						</div>
					</div>
					<div class="form-item cf">
						<label class="item-label">是否需要主键<span class="check-tips">（选“是”则会新建默认的id字段作为主键）</span></label>
						<div class="controls">
							<select name="need_pk">
								<option value="1" selected="selected">是</option>
								<option value="0">否</option>
							</select>
						</div>
					</div>
				</div>

				<!-- 按钮 -->
				<div class="form-item cf">
					<label class="item-label"></label>
					<div class="controls edit_sort_btn">
						<button class="btn submit-btn ajax-posts no-refresh" type="submit" target-form="form-horizontal">确 定</button>
						<button class="btn btn-return" onclick="javascript:history.back(-1);return false;">返 回</button>
					</div>
				</div>
			</form>
		</div>
	</div>

        </div>
        <div class="cont-ft">
            <div class="copyright">
                <div class="fl">感谢使用<a href="http://www.twothink.cn" target="_blank">TwoThink</a>管理平台</div>
                <div class="fr">V<?php echo TWOTHINK_VERSION; ?></div>
            </div>
        </div>
    </div>
    <!-- /内容区 -->
    <script type="text/javascript">
    (function(){
        var ThinkPHP = window.Think = {
            "ROOT"   : "__ROOT__", //当前网站地址
            "APP"    : "__APP__", //当前项目地址
            "PUBLIC" : "__PUBLIC__", //项目公共目录地址
            "DEEP"   : "<?php echo config('pathinfo_depr'); ?>", //PATHINFO分割符
            "MODEL"  : ["3", "<?php echo config('url_convert'); ?>", "<?php echo config('url_html_suffix'); ?>"],//config('URL_MODEL')
            "VAR"    : ["<?php echo config('var_module'); ?>", "<?php echo config('var_controller'); ?>", "<?php echo config('var_action'); ?>"]
        }
    })();
    </script>
    <script type="text/javascript" src="__PUBLIC__/static/think.js"></script>
    <script type="text/javascript" src="__PUBLIC__/admin/js/common.js"></script>
    <script type="text/javascript">
        +function(){
            var $window = $(window), $subnav = $("#subnav"), url;
            $window.resize(function(){
                $("#main").css("min-height", $window.height() - 130);
            }).resize();

            /* 左边菜单高亮 */
            url = window.location.pathname + window.location.search;
            url = url.replace(/(\/(p)\/\d+)|(&p=\d+)|(\/(id)\/\d+)|(&id=\d+)|(\/(group)\/\d+)|(&group=\d+)/, "");
            $subnav.find("a[href='" + url + "']").parent().addClass("current");

            /* 左边菜单显示收起 */
            $("#subnav").on("click", "h3", function(){
                var $this = $(this);
                $this.find(".icon").toggleClass("icon-fold");
                $this.next().slideToggle("fast").siblings(".side-sub-menu:visible").
                      prev("h3").find("i").addClass("icon-fold").end().end().hide();
            });

            $("#subnav h3 a").click(function(e){e.stopPropagation()});

            /* 头部管理员菜单 */
            $(".user-bar").mouseenter(function(){
                var userMenu = $(this).children(".user-menu ");
                userMenu.removeClass("hidden");
                clearTimeout(userMenu.data("timeout"));
            }).mouseleave(function(){
                var userMenu = $(this).children(".user-menu");
                userMenu.data("timeout") && clearTimeout(userMenu.data("timeout"));
                userMenu.data("timeout", setTimeout(function(){userMenu.addClass("hidden")}, 100));
            });

	        /* 表单获取焦点变色 */
	        $("form").on("focus", "input", function(){
		        $(this).addClass('focus');
	        }).on("blur","input",function(){
				        $(this).removeClass('focus');
			        });
		    $("form").on("focus", "textarea", function(){
			    $(this).closest('label').addClass('focus');
		    }).on("blur","textarea",function(){
			    $(this).closest('label').removeClass('focus');
		    });

            // 导航栏超出窗口高度后的模拟滚动条
            var sHeight = $(".sidebar").height();
            var subHeight  = $(".subnav").height();
            var diff = subHeight - sHeight; //250
            var sub = $(".subnav");
            if(diff > 0){
                $(window).mousewheel(function(event, delta){
                    if(delta>0){
                        if(parseInt(sub.css('marginTop'))>-10){
                            sub.css('marginTop','0px');
                        }else{
                            sub.css('marginTop','+='+10);
                        }
                    }else{
                        if(parseInt(sub.css('marginTop'))<'-'+(diff-10)){
                            sub.css('marginTop','-'+(diff-10));
                        }else{
                            sub.css('marginTop','-='+10);
                        }
                    }
                });
            }
        }();
        function go_home() {
          window.open("<?php echo url('/'); ?>");
        }
    </script>
    
<script type="text/javascript" src="__PUBLIC__/static/jquery.dragsort-0.5.1.min.js"></script>
<script type="text/javascript" charset="utf-8">
    //导航高亮
    highlight_subnav('<?php echo url('Model/index'); ?>');

    $(function(){
    	showTab();
    })
//拖曳插件初始化
$(function(){
	$(".dragsort").dragsort({
	     dragSelector:'li',
	     placeHolderTemplate: '<li class="draging-place">&nbsp;</li>',
	     dragBetween:true,	//允许拖动到任意地方
	     dragEnd:function(){
	     	updateVal();
	     }
	 });

	$('#sortUl li b').click(function(){
		$(this).parent().remove();
		updateVal();
	});

	// 更新排序后的隐藏域的值
	function updateVal() {
		var sortVal = [];
		var i = 1;
		var val = '';
	   	$('#base li').each(function(){
	   		sortVal[i++] = $(this).find('em').text();
	   	});
	   	i = -1;
	   	$('#extend li').each(function(){
	   		sortVal[i--] = $(this).find('em').text();
	   	});
	   	//将排序数组拼接成json格式字符串
	   	val += "[";
	   	for (k in sortVal){
	   		val += "\"" + sortVal[k] + "\"" + ":" + k + ",";
	   	}
	   	val = val.substr(0,val.length - 1) + "]";
	    $("input[name='fields']").val(val);
	}
})
</script>

</body>
</html>
