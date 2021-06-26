<?php

use Illuminate\Support\Facades\Route;

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

    //return asset('storage/event_button.gif');
    return view('welcome');
});
Route::get('student', 'studentcontroller@student')->name('student');

Route::post('student/store', 'studentcontroller@store')->name('student_store')->middleware('age');
//route("admint.first")  X
// url("admin/list") -> admin/list
Route::prefix("admin")->group( function()   
{  
        Route::get('/list',function()  
        {  
            echo "prifx first route";  
        });  
        Route::get('/detail',function()  
        {  
            echo "second route";  
        });  
        Route::get('/edit',function()  
        {  
            echo "third route";  
        });
});

// route("admint.first") // admin/first

// url("admin/first") // admin/first

Route::name("admint.")->prefix("admin")->middleware(['age'])->group( function()   
{  
        Route::get('/first',function()  
        {  
            echo "named first route";  
        })->name("first");  
        Route::get('/second',function()  
        {  
            echo "second route";  
        })->name("second");  
        Route::get('/third',function()  
        {  
            echo "third route";  
        })->name("third");
});


