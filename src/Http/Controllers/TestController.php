<?php
namespace Sumdys\HJunitLaravel\Http\Controllers;

use Illuminate\Routing\Controller;

/**
 *
 */
class TestController extends Controller
{
    public function index()
    {
        return '这是测试 junit 的一个测试控制器，测试的目标是 与laravel集成控制器和服务';
    }
}
