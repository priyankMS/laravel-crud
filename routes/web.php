<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegisterController;
use App\Models\Employee;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home', function () {
//     return view('homePage');
// });

Route::get('home/introduction-done', function () {
    return view('homePage');
})->name('about');

Route::get('api/user/{value?}', function ($value = null) {
    return view('homePage')->with(['value' => $value]);
});

//using model
Route::get('model', function () {
    $emp = Employee::all();
    echo "<pre>";
    print_r($emp->toArray());
});

Route::prefix('register')->group(function () {
    Route::get('/form', [RegisterController::class, 'index'])->name('frm');
    Route::get('/term', [RegisterController::class, 'term'])->name('term');
    Route::get('/view', [RegisterController::class, 'view_user']);
    Route::post('/', [RegisterController::class, 'register']);
    Route::put('update/{id}', [RegisterController::class, 'edit_data']);
    Route::delete('delete/{id}', [RegisterController::class, 'destroy']);
});

