<?php
namespace Sumdys\HJunitLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

/**
 * 这是单元测试服务提供者
 * 用来加载 hjunit 组件
 */
class HJunitServiceProvider extends ServiceProvider
{
    public function register()
    {
        // echo '这是hjunit 服务提供者';
        $this->registerRoutes();
        // 加载视图
        $this->loadView();
    }

    public function boot()
    {

    }

    /**
     * Register the package routes.
     *
     * @return void
     */
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

    /**
     * Get the Telescope route group configuration array.
     *
     * @return array
     */
    private function routeConfiguration()
    {
        return [
            //定义访问路由域名
            // 'domain' => config('telescope.domain', null),
            //定义路由命名空间
            'namespace' => 'Sumdys\HJunitLaravel\Http\Controllers',
            //这是前辍
            'prefix' => 'hjunit',
            //这是定义中件间
            'middleware' => 'web',
        ];
    }

    private function loadView()
    {
        // 指定组件的名称，自定义的资源目录地址
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views','hjunit'
        );
    }

}
