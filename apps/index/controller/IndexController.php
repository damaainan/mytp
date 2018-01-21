<?php
namespace app\index\controller;
use think\Controller;
class IndexController extends Controller
{
    public function index()
    {
        // return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) 2018新年快乐</h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
        return $this->fetch();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
    // http://serverName/index.php（或者其它应用入口文件）/模块/控制器/操作/[参数名/参数值...]
    // http://localhost/mytp/public/index.php/index/Index/test
    public function test(){
        echo "Test";
        return $this->fetch();
    }

    // index.php/index/Index/example/name/grid
    public function example($name = 'table'){
        switch ($name) {
            case 'table':
                return $this->fetch('include/table');
                break;
            case 'form':
                return $this->fetch('include/form');
                break;
            case 'page':
                return $this->fetch('include/page');
                break;
            case 'grid':
                return $this->fetch('include/grid');
                break;
            
            default:
                return $this->fetch('include/table');
                break;
        }
    }
}
