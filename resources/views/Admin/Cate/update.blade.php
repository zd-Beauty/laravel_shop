@extends('Admin.Layout.Layout')
@section('content')
<div style="text-align: center;font-size: 30px;margin-bottom: 30px"><span>修改分类</span></div>
	<form class="layui-form xbs" action="/admin/cate/{{$data->tid}}"   method="POST">
	   		{{ csrf_field() }}
        {{method_field('PUT') }}
                <div class="layui-form-pane" style="text-align: center;">
                  <div class="layui-form-item" style="display: inline-block;">
                    <label class="layui-form-label xbs768">父级分类</label>
                    <div class="layui-input-inline xbs768">
                        <select class="form-control" name="pid">
							  <option value="0">--请选择--</option>
                @foreach($cate_data as $value)
							  <option value="{{$value['tid']}}" 
								  @if($data->pid == $value['tid']) 
								  selected 
								  @endif>{{$value['tname']}}
							  </option>
							  @endforeach
						</select>

                    </div>    
                    <label class="layui-form-label xbs768">分类名称</label>
                    <div class="layui-input-inline">
                      <input type="text" name="tname"  placeholder="" value="{{$data->tname}}" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <input type="submit" value="确认修改" class="btn">
                    </div>
                  </div>
                </div> 
        </form>

@endsection