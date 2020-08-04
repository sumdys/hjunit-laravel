# sumdys/hjunit-laravel

这里是对于框架的介绍

# 对于框架的 要求

Laravel >= 5.1 & PHP > 7.2.5

# 安装的方式

```yml
composer require "sumdys/hjunit-laravel"
```

# 配置方式
5.5手动配置laravel对于``Sumdys\HJunitLaravel\Providers\HJunitServiceProvider::class``服务放到config/app.php中

解释路由
```php
<?php
Route::get('/', 'HJunitController@index');
Route::post('/', 'HJunitController@store')->name('junit.store');
?>
```
