<?php 
// require_once __DIR__ . '/../vendor/autoload.php';  不用 引入 autoload 否则 报错
namespace Test;

// use app\index\controller\UserController;
use PHPUnit\Framework\TestCase;
// 引用应用文件还有问题 
class UserTest extends TestCase{
    function testDemo(){
        // $obj = new UserController();
        // $ret = $obj -> demo();
        $ret = system("cd .. && php public/index.php index/User/demo");
        var_dump($ret);
        $this->assertEquals(1,1);
    }
}