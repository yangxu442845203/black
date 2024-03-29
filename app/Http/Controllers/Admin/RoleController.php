<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取角色
        $role=DB::table("role")->get();
        return view("Admin.Role.index",['role'=>$role]);
    }
    //分配权限
    public function adminauth($id){
    	//获取角色信息
    	$role = DB::table("role")->where("id","=",$id)->first();
    	//获取所有的权限
    	$auth = DB::table("node")->get();
    	//获取当前角色的权限信息
    	$data = DB::table("role_node")->where("rid","=",$id)->get();
    	if(count($data)){
    		foreach($data as $key=>$value){
    			$nids[]=$value->nid;
    		}
    		return view("Admin.Role.auth",['role'=>$role,'auth'=>$auth,'nids'=>$nids]);
    	}
    	//echo $id;
    	return view("Admin.Role.auth",['role'=>$role,'auth'=>$auth,'nids'=>array()]);
    }
    //保存权限
    public function saveauth(Request $request){
    	$rid=$request->input("rid");
    	//echo $rid;
    	//获取分配的权限
    	$nids=$_POST['nids'];
    	//dd($nids);
    	//删除当前角色之前的权限信息
    	DB::table("role_node")->where("rid","=",$rid)->delete();
    	//入库
    	foreach($nids as $key=>$value){
    		$data['nid']=$value;
    		$data['rid']=$rid;
    		DB::table("role_node")->insert($data);
    	}

    	return redirect("/role")->with("success","权限分配成功");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载添加页面
        return view("Admin.Role.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //数据入库
        //dd($request->all());
        $data=$request->except(['_token']);
        //执行数据库的插入
        if(DB::table("role")->insert($data)){
        	//echo "ok";
        	return redirect("/role")->with("success","添加成功");
        }else{
        	//echo "error";
        	return back()->with("error","添加失败");
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //获取需要修改的数据
        $role=DB::table("role")->where("id","=",$id)->first();
        return view("Admin.Role.edit",['role'=>$role]);
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
        //获取修改数据
        $data=$request->except(['_token','_method']);
        if(DB::table("role")->where("id","=",$id)->update($data)){
            return redirect("/role")->with("success","修改成功");
        }else{
            return back()->with("error","修改失败");
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
        //角色删除
        if(DB::table("role")->where("id","=",$id)->delete()){
            return redirect("/role")->with("success","删除成功");
        }else{
            return back()->with("error","删除失败");
        }
    }
}
