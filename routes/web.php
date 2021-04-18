<?php

use Illuminate\Support\Facades\Route;

use App\SchoolsModel;
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

Route::get('/', 'Main@index');
Route::get('/by_name',function(){
    $allschools=[];
    return view('client.byname', compact('allschools'));
});
Route::get('/by_zip',function(){
    // $allmapdata=SchoolsModel::get('address','lat','long','school_name');
    $allschools=[];
    // $newmap=json_encode($allmapdata);
    return view('client.byzip', compact('allschools'));
});
Route::POST('/get-by-name','Main@ByName');
Route::POST('/get-by-zip','Main@ByZip');
Route::POST('/filter-by-name','Main@FilterByName');


   