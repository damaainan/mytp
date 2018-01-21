<?php
namespace app\index\controller;

use think\Controller;
use think\Db;


use app\index\model\UsersModel;
class UserController extends Controller
{

	
	function index(){
		$model = new UsersModel();
		$model -> getList();
	}

	function test(){
		$list = Db::table('users')->select();
		var_dump($list);
	}

	// 直接使用
	function demo(){
		$list = UsersModel::all();
		var_dump($list);
	}
}