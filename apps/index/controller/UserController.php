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

	function users($p = 0, $num = 5){// 缺少分页
		$model = new UsersModel();
		$list = $model -> getList($p, $num);
		$this->assign('list', $list);
		return $this->fetch();
	}

	function userslist($p = 1, $num = 5){// 缺少分页
		if($_GET['page']){
			$p = $_GET['page'];
		}
		$model = new UsersModel();
		$list = $model -> getPage($p, $num);
		$page = $list->render();
		// 模板变量赋值
		$this->assign('page', $page);
		$this->assign('list', $list);
		return $this->fetch();
	}

	// 直接使用
	function demo(){
		$list = UsersModel::all();
		// var_dump($list);
		return $list;
	}
}