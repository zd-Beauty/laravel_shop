@extends('Admin.Layout.Layout')
@section('content')
            <div style="text-align: center;font-size: 30px;margin-bottom: 30px"><span>分类列表</span></div>
            <xblock><span class="x-right" style="line-height:40px">共有数据：{{$n}} 条</span></xblock>
            <table class="layui-table" >
                <thead >
                    <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            父级ID
                        </th>
                        <th>
                            分类名称
                        </th>
                        <th>
                            分类路径
                        </th>
                        <th>
                            创建时间
                        </th>
                        <th>
                            修改时间
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($cate_data as $value)
                    <tr>
                        <td>
                            <input type="checkbox" value="1" name="">
                        </td>
                        <td>
                            {{$value['tid']}}
                        </td>
                        <td>
                            <u style="cursor:pointer" onclick="member_show()">
                               {{$value['pid']}}
                            </u>
                        </td>
                        <td>
                            <u style="cursor:pointer" onclick="member_show()">
                               {{$value['tname']}}
                            </u>
                        </td>
                        <td >
                            {{$value['path']}}
                        </td>
                        <td >
                            {{$value['updated_at']}}
                        </td>
                        <td >
                            {{$value['created_at']}}
                        </td>
                        <td class="td-manage">
                            <form action="/admin/cate/{{$value['tid']}}/edit" style="display: inline" method="get">
                                <input type="submit" value="修改" class="btn">
                            </form>
                             <form action="/admin/cate/{{$value['tid']}}" style="display: inline" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input type="submit" value="删除" class="btn" >
                            </form>
                            <form action="/admin/cate/childcate/{{$value['tid']}}" style="display: inline;" method="get">
                                <input type="submit" value="添加子类" class="btn" >
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

@endsection