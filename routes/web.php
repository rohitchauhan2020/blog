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


Route::get('test/{xyz?}/{prt?}', function ($xyz,$prt) {
   echo "this is prt param :"; print_r($prt);
   echo "<br />";
    print_r($xyz);die;

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
            echo "first group route";  
        });  
        Route::get('/detail',function()  
        {  
            echo "second group route";  
        });  
        Route::get('/edit',function()  
        {  
            echo "third group route";  
        });
});

Route::resource('posts', PostsController::class)->only(['index']);

// route("admint.first") // admin/first

// url("admin/first") // admin/first

Route::name("admint.")->prefix("admin")->middleware(['age'])->group( function()   
{  
        Route::get('/first',function()  
        {  
            echo "we r in first route using middleware";  
        })->name("first");  
        Route::get('/second',function(Illuminate\Http\Request $request)  
        {  
            print_r($request->all());die;

            echo "we r in second route using middleware";  
        })->name("second");  
        Route::get('/third',function()  
        {  
            echo "we r in third route using middleware";  
        })->name("third");
});


