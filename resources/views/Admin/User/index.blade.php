@extends('Admin.Layout.Layout')

@section('content')
<div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form xbs" action="/admin/user" method="get" >
                <div class="layui-form-pane" style="text-align: center;">
                  <div class="layui-form-item" style="display: inline-block;">
                    <label class="layui-form-label xbs768">信息显示</label>
                    <div class="layui-input-inline xbs768">
	             <select name="page_count" id="">
		            <option value="5"
		                @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 5)
		                selected 
		                @endif >5条</option>
		            <option value="15"
			            @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 15)
			                selected 
			                @endif >15条</option>
			            <option value="25"
			            @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 25)
			                selected 
			                @endif >25条</option>
			            <option value="35"
			            @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 35)
			                selected 
		                @endif >35条</option>
       		 	</select>
         </div>
                  <div class="layui-input-inline">
                      <input type="text" name="search"  placeholder="请输入用户名" autocomplete="off" class="layui-input" value="{{$search['search'] or ''}}">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                       <input type="submit" value="搜索"  class=" btn btn-success">
                    </div>
                  </div>
                </div> 
            </form>
            <xblock>
            	<span class="x-left" style="line-height:40px;font-size: 30px;">{{$title}}</span>
            	
            	<span class="x-right" style="line-height:40px">共有数据：{{$count}}条</span>
            </xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th>ID</th>
                        <th>用户名</th>
                        <th>头像</th>
                        <th>年龄</th>
                        <th>性别</th>
                        <th>电话</th>
                        <th>邮箱</th>
                        <th>地址</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $k=>$v)
                    <tr>
                        <td>
                            <input type="checkbox" value="1" name="">
                        </td>
                        <td>{{$v['id']}}</td>
                        <td>{{$v['username']}}</td>
                         <td><img src="{{URL::asset($v['upic'])}}"  width="100px" height="100px"></td>
                        <td >{{$v['age']}}</td>
                        <td >
                            @if($v['sex'] == 1)
                                男
                         @elseif($v['sex'] == 0)
                                女
                         @endif

                        </td>
                        <td >{{$v['tel']}}</td>
                        <td>{{$v['email']}}</td>
                        <td>{{$v['uaddr']}}</td>
                        <td class="td-manage" >
              <form action="/admin/user/{{$v['id']}}" method="post" style="display: inline;">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type="submit" class="btn btn-danger" value="删除">
                    </form>
				            <a  class="btn btn-success" href="/admin/user/{{$v['id']}}" style="float: left;">详情</a> 
				         </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
          <div id="pages">
          {!! $data->appends($search)->render() !!}
    	</div>
</div>
@endsection
