@extends('Admin.Layout.Layout')
@section('content')
        <span class="x-left" style="line-height:40px;font-size: 30px;">{{$title}}</span>
           <form class="layui-form" method="post" action="/admin/user/{{$data['id']}}" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
                <div class="layui-form-item">
                    <label  class="layui-form-label">
                       用户名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="username" value="{{$data['username']}}" class="layui-input">
                    </div>
                </div>
                 <div class="layui-form-item">
                    <label  class="layui-form-label">
                      
                        头像<br>(<font color="red">点击修改</font>)
                    </label>
                    <div class="layui-input-inline" style="width: 100px;height: 100px;">
                        <img src="{{URL::asset($data['upic'])}}"  width="100px" height="100px"> 
                        <input type="file" name="upic" style="position: absolute; top: 0; height: 90px;width: 90px; z-index: 10; left: 0;opacity: 0;" title="点击修改头像">
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
                    <div class="layui-inline">
                        <div class="layui-input-inline">
                             <label  class="layui-form-label">
                                性别
                            </label>
                            <input type="radio" name="sex" value="1"  title="男">
                            <input type="radio" name="sex" value="0" title="女">
                        </div>
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
                        <div class="layui-input-inline">
                	<select name="auth" >
						<option value="1">超级用户</option>
						<option value="2">普通用户</option>
                	</select>
                </div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label  class="layui-form-label">
                      用户状态
                    </label>
                    <div class="layui-input-inline">
                	<select name="status" >
						<option value="1">激活</option>
						<option value="2">未激活</option>
                	</select>
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
                        <input type="text"  name="created_at" value="{{$data['created_at']}}" class="layui-input" readonly>
                    </div>
                    
                </div>
                <div class="layui-input-inline">
                    	<input type="submit" value="确认修改" class="layui-btn" style="margin-left: 110px;">
                </div>
            </form> 
            
<!-- 右侧主体结束 -->
@endsection


