@extends('Admin.Layout.Layout')
@section('content')
        <span class="x-left" style="line-height:40px;font-size: 30px;">{{$title}}</span>
           <form action="/admin/user" method="post" enctype="multipart/form-data" class="layui-form" >
            {{csrf_field()}}
                <div class="layui-form-item">
                    <label  class="layui-form-label">
                       用户名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="username"   value="" class="layui-input">
                    </div>
                </div>
                 <div class="layui-form-item">
                    <label  class="layui-form-label">
                      头像
                    </label>
                    <div class="layui-input-inline">
                        <input type="file" name="upic" value="" class="layui-input">
                    </div> 
                 </div>
                    <div class="layui-form-item">
                    <label  class="layui-form-label">
                      密码
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="upwd"   value="" class="layui-input">
                    </div>
                </div>
                 <div class="layui-form-item">
                    <label  class="layui-form-label">
                      年龄
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="age"   value="" class="layui-input">
                    </div>
                </div>
                
                <div class="layui-inline">
                        <div class="layui-input-inline">
                             <label  class="layui-form-label">
                                性别
                            </label>
                            <input type="radio" name="sex" value="1"  title="男">
                            <input type="radio" name="sex" value="0" title="女">
                        </div>
                </div>
                <div class="layui-form-item">
                    <label  class="layui-form-label">
                        电话
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="tel"   value="" class="layui-input">
                    </div>
                </div>
                   <div class="layui-form-item">
                    <label  class="layui-form-label">
                      地址
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="uaddr"   value="" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label  class="layui-form-label">
                      邮箱
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="email"   value="" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <input type="submit" class="layui-btn" value="提交" style="margin-left: 110px;">
                </div>
            </form> 
<!-- 右侧主体结束 -->
@endsection


