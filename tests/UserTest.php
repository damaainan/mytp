<?php 
require_once __DIR__ . '/../vendor/autoload.php';

use app\index\controller\UserController;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{
    function testDemo(){
        $obj = new UserController();
        $ret = $obj -> demo();
        var_dump($ret);
    }
}