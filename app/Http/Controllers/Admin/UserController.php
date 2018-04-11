<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\user;
use Hash;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       //接收搜索关键字
       $search = $request -> input('search','');//接收的用户名
       $count = DB::table('users')->count();
       $page_count = $request->input('page_count',5);
         $user = DB::table('users');
        if(isset($search) && !empty($search)){
           $user -> where('username','like','%'.$search.'%');
        }
        $data = $user->orderBy('id','asc')->paginate($page_count);
        /*dd($data);*/
       return view('Admin.User.index',['title'=>'用户列表','data'=>$data,'count'=>$count,'search'=>$request->all()]);
    }

    /**
     * 用户添加页面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.User.create',['title'=>'用户添加']);
    }

    /**
     * 执行用户添加方法
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //获取用户输入的信息
        $data = $request -> except('_token');
         //创建文件上传对象
         if($request->hasFile('upic') == true){
            $pic = $request -> file('upic');
            $temp_name = time()+rand(10000,99999);
            $hz = $pic -> getClientOriginalExtension();
            $filename = $temp_name.'.'.$hz;
            $j = $pic -> move('./Admin/Uploads/',$filename);//执行上传
            //处理数据并执行添加
           /* $data['upwd'] = Hash::make($data['upwd']);*/
            $data['upic'] = $j;
        }
        //实例化模型
        $user = new user;
        $user -> username = $data['username'];
        if(!isset($data['upic'])){
            $data['upic'] = './Admin/Uploads/default_img/1523433261.jpg';
        }else{
            $user -> upic = $data['upic'];
        }
        
        $user -> upwd = $data['upwd'];
        $user -> age = $data['age'];
        $user -> sex = $data['sex'];
        $user -> tel = $data['tel'];
        $user -> uaddr = $data['uaddr'];
        $user -> email = $data['email'];
        $res = $user -> save();
         if($res){
            return redirect('/admin/user')->with('success','添加成功'); //跳转 并且附带信息
        }else{
            return back()->with('errors','添加失败');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //接收全部信息
        $data = user::find($id);
      return view('Admin.User.show',['title'=>'用户详情表','data'=>$data]);
    }

    /**
     * 添加修改页面
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = user::find($id);
        return view('Admin.User.edit',['title'=>'用户修改','data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //获取用户输入的信息
        $data = $request -> except('_token');
         //创建文件上传对象
            $upic = $request -> file('upic');
            $temp_name = time()+rand(10000,99999);
            $hz = $upic -> getClientOriginalExtension();
            $filename = $temp_name.'.'.$hz;
            $a = $upic -> move('./Admin/Uploads/',$filename);//执行上传
            //处理数据并执行修改
            $data['upic'] = $a;
        $res = user::find($id)->update(['username' => $data['username'],'upic' => $data['upic'],'age' => $data['age'],'sex' => $data['sex'],'tel' => $data['tel'],'uaddr' => $data['uaddr'],'email' => $data['email'],'status' => $data['status'],'auth' => $data['auth']]);
         if($res){
            return redirect('/admin/user')->with('success','修改成功'); //跳转 并且附带信息
        }else{
            return back()->with('error','修改失败'); //跳转 并且附带信息
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //实例化数据表
        $user = new user;
        $user = user::find($id);
        $res = $user->delete();
        if($res){
            return redirect($_SERVER['HTTP_REFERER'])->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
