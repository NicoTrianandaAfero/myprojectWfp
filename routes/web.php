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
    return view('MyStore');
});


Route::get('wfp/{kelas}',function($kelas) { 
    if($kelas == "C" || $kelas == "c")
        return 'WFP kelas saya ' .$kelas;
    
    else {
        return 'Bukan Kelas Saya';
    }
});
         
 
//Route::view('/welcome', 'welcome');

Route::get('Nico', function(){
    return "Hello WFP C";
});

Route::get('greating', function(){ //greating untuk memanggil di webnya 
    return view ('welcome',['name'=>'Nico']);
});

Route::resource('obat','MedicineController');
Route::resource('kategori_obat','CategoryController');

Route::get('/report/listmedicine/{id}','CategoryController@showlist')->name('reportShowMedicine');
