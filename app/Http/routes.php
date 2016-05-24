<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});


Route::get('testCsrf',function(){
    $csrf_field = csrf_field();
    $html = <<<GET
        <form method="POST" action="/testCsrf">
            {$csrf_field}
            <input type="submit" value="Test"/>
        </form>
GET;
    return $html;
});

Route::post('testCsrf',function(){
    return 'Success!';
});


Route::group(['middleware'=>'test:male'],function(){
    Route::get('/write/laravelacademy',function(){
        //使用Test中间件
    });
    Route::get('/update/laravelacademy',function(){
        //使用Test中间件
    });
});

Route::get('/age/refuse',['as'=>'refuse',function(){
    return "18岁以上男子才能访问！";
}]);
