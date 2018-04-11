@extends('Admin.Layout.Layout')
@section('content')
        <span class="x-left" style="line-height:40px">{{$title}}</span>
           <form class="layui-form" method="post" action="/admin/user">
            {{csrf_field()}}
                <div class="layui-form-item">
                    <label  class="layui-form-label">
                       用户名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="username"   value="{{$data['username']}}" class="layui-input">
                    </div>
                </div>
                 <div class="layui-form-item">
                    <label  class="layui-form-label">
                      头像
                    </label>
                    <div class="layui-input-inline">
                        <img src="{{URL::asset($data['upic'])}}" alt="">
                    </div> 
                 </div>
                    <div class="layui-form-item">
                    <label  class="layui-form-label">
                      密码
                    </label>
                    <div class="layui-input-inline">
                        <input type="password"  name="upwd"   value="{{$data['upwd']}}" class="layui-input">
                    </div>
                </div>
                 <div class="layui-form-item">
                    <label  class="layui-form-label">
                      年龄
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="age"   value="{{$data['age']}}" class="layui-input">
                    </div>
                </div>
                
                <div class="layui-form-item">
                    <label  class="layui-form-label">
                      性别
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="sex"   value=" @if($data['sex'] == 1) 男
                            @elseif($data['sex'] == 0)女
                            @endif" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label  class="layui-form-label">
                        电话
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="tel"   value="{{$data['tel']}}" class="layui-input">
                    </div>
                </div>
                   <div class="layui-form-item">
                    <label  class="layui-form-label">
                      地址
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="uaddr"   value="{{$data['uaddr']}}" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label  class="layui-form-label">
                      邮箱
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="email"   value="{{$data['email']}}" class="layui-input">
                    </div>
                </div> 
                <div class="layui-form-item">
                    <label  class="layui-form-label">
                      权限
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="auth" value="@if($data['auth'] == 1) 超级管理员@elseif($data['auth']  == 2)普通用户 @endif"  class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label  class="layui-form-label">
                      用户状态
                    </label>
                    <div class="layui-input-inline">
                <input type="text"  name="status" value="@if($data['status']  == 1) 激活 @elseif($data['status'] == 2)未激活 @endif" 
                class="layui-input">
                    </div>
                </div>  
                <div class="layui-form-item">
                    <label  class="layui-form-label">
                      可用积分
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="score"   value="{{$data['score']}}" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label  class="layui-form-label">
                      注册时间
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="created_at"   value="{{$data['created_at']}}" class="layui-input">
                    </div>
                </div>
            </form> 
            <a  class="btn btn-success" href="/admin/user/{{$data['id']}}/edit" style="margin-left: 110px;">修改信息</a> 
            
<!-- 右侧主体结束 -->
@endsection


