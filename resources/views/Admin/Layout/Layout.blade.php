<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{Config::get('app.title')}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="{{url()}}/Admin/css/font.css">
    <link rel="stylesheet" href="{{url()}}/Admin/css/xadmin.css">
	<link rel="stylesheet" href="{{url()}}/Admin/css/pages.css">
    <link rel="stylesheet" href="{{url()}}/Admin/css/swiper.min.css">
    <script type="text/javascript" src="{{url()}}/Admin/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="{{url()}}/Admin/js/swiper.jquery.min.js"></script>
    <script src="{{url()}}/Admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="{{url()}}/Admin/js/xadmin.js"></script>
</head>
<body>
    <div id="div_show">
                <!-- 显示自动验证的错误信息 -->
                @if (count($errors) > 0)
                    <div style="width: 100%;height: 30px;background: green;font-weight: bolder;font-size: 40px;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- 读取模版的提示信息 -->
                @if(session('success'))
                <div style="width: 100%;background:black;font-weight: bolder;font-size: 40px;">
                        温馨提示：{{session('success')}}
                </div>
                @endif        
                @if(session('error'))
                <div style="width: 100%;height: 80px;background:black;font-weight: bolder;font-size: 40px;">
                    {{session('error')}}
                </div>
                @endif
    </div>
    <script>
        var div = document.getElementById('div_show');
        div.onclick = function(){
            div.style.display = 'none';
        };

    </script>
    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo"><a href="javascript:void(0)">蘑菇街 V1.1</a></div>

        <div class="open-nav"><i class="iconfont">&#xe699;</i></div>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">admin</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a href="">个人信息</a></dd>
              <dd><a href="">切换帐号</a></dd>
              <dd><a href="./login.html">退出</a></dd>
            </dl>
          </li>
          <li class="layui-nav-item"><a href="/">前台首页</a></li>
        </ul>
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
    <div class="wrapper">
        <!-- 左侧菜单开始 -->
        <div class="left-nav">
          <div id="side-nav">
            <ul id="nav">
                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        用户管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/admin/user">
                                <i class="iconfont">&#xe6a7;</i>
                                用户列表
                            </a>
                        </li>
                        <li>
                            <a href="/admin/user/create">
                                <i class="iconfont">&#xe6a7;</i>
                                用户添加
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        分类管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/admin/cate">
                                <i class="iconfont">&#xe6a7;</i>
                                分类列表
                            </a>
                        </li>
                        <li>
                            <a href="/admin/cate/create">
                                <i class="iconfont">&#xe6a7;</i>
                                分类添加
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        商品管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="./category.html">
                                <i class="iconfont">&#xe6a7;</i>
                                商品列表
                            </a>
                        </li>
                        <li>
                            <a href="./category.html">
                                <i class="iconfont">&#xe6a7;</i>
                                商品添加
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        订单管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                订单列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        轮播管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        管理员管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        系统设置
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">

                    </ul>
                </li>
                 <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        回收站
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="javascript:void">
                                <i class="iconfont">&#xe6a7;</i>
                                回收站列表
                            </a>
                            <a href="javascript:void">
                                <i class="iconfont">&#xe6a7;</i>
                                清空回收站
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        
        <div class="page-content">
          @section('content')
            
		  @show
        </div>
        <!-- 右侧主体结束 -->
    </div>
    <!-- 中部结束 -->
    <!-- 底部开始 -->
    <div class="footer">
        <div class="copyright" style="text-align:center;'">Copyright ©2017 x-admin v2.3 All Rights Reserved. 蘑菇街</div>  
    </div>
    <!-- 底部结束 -->
    <!-- 背景切换开始 -->
	<div class="bg-changer">
        <div class="swiper-container changer-list">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="item" src="{{url()}}/images/a.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{url()}}/Admin/images/b.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{url()}}/Admin/images/c.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{url()}}/Admin/images/d.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{url()}}/Admin/images/e.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{url()}}/Admin/images/f.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{url()}}/Admin/images/g.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{url()}}/Admin/images/h.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{url()}}/Admin/images/i.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{url()}}/Admin/images/j.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{url()}}/Admin/images/k.jpg" alt=""></div>
                <div class="swiper-slide"><span class="reset">初始化</span></div>
            </div>
        </div>
        <div class="bg-out"></div>
        <div id="changer-set"><i class="iconfont">&#xe696;</i></div>   
    </div>
    <!-- 背景切换结束 -->

</body>
</html>