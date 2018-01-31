<?php
namespace app\index\model;

use think\Model;
use think\Db;

class UsersModel extends Model
{
	function getList($p = 0, $num = 10){
		$list = Db::table('users')->limit($p, $num)->select();
		// var_dump($list);
        return $list;
	}

    function getPage($p = 1, $num = 10){
        $sum =  Db::table('users')->count();
        $list = Db::table('users')->paginate($num,$sum,['page'=>$p]);
        // var_dump($list);
        return $list;
    }
}