<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\user_profile;

Route::get('/', [MainController::class, 'Index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/about/khalaf', [AboutController::class, 'PersonInfo'])->name('about/khalaf');

Route::get('/message/write', [MessageController::class, 'index'])->name('write_message');
Route::post('/message/send', [MessageController::class, 'send_message'])->name('send_message');
Route::get('/messages', [MessageController::class, 'get_message'])->name('messages');
Route::get('/message/model', [MessageController::class, 'model_message'])->name('model_message');
Route::get('/message/full', [MessageController::class, 'full_message']);
// User manage
Route::get('/users', [user_profile::class, 'index'])->name('users');
Route::post('/users/post', [user_profile::class, 'add_user'])->name('add_user');


// Without Controllers
$user_regex = array (
    'name'=>'[A-Za-z]+',
    'age'=>'[0-9]+'
);

Route::get('/user/{name?}/{age?}', function($name=null, $age=null) {
    return "Hello user <br>" . $name . '<br>' . $age;
})->where($user_regex);

