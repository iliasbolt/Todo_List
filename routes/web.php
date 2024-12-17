<?php
use App\Mystuff;
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

Route::get('/', function() {
    return view('BladeTest',[
        'name'=>'ilias',
        'tasks'=>Mystuff\Task::ReturnTasks(),//here i need to put out the data i have
    ]);
});
Route::get('/profile',function (){
   return " u can type ur infos here";
});
Route::get('/{id}',function ($id){
   $Alltasks = Mystuff\Task::ReturnTasks();
   foreach ($Alltasks as $task){
       if($task->id == $id){
           return view('BladeTest',['result'=>$task]);
       }
       else{
           return view('BladeTest',['Result'=>[]]);
       }

   }

});

//Route::get('/Test/{xr}',function ($xr){
//   return "Hello {$xr} OK";
//})->name("withID");
//
//Route::fallback(function (){
//
//   return ('404 Not a link');
//});
