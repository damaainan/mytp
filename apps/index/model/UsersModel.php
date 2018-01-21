<?php
namespace app\index\model;

use think\Model;
use think\Db;

class UsersModel extends Model
{
	function getList(){
		$list = Db::table('users')->select();
		var_dump($list);
	}
}