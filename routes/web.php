<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'SiakadController@home');
Route::get('/home', 'SiakadController@home');
Route::get('/siakad', 'SiakadController@Siakad');
Route::get('/krs', 'SiakadController@Krs');
Route::get('/khs', 'SiakadController@Khs');
Route::get('/absensi', 'SiakadController@Absensi');
Route::get('/administrasi', 'SiakadController@Administrasi');
Route::get('/struktural', 'SiakadController@Struktural');
Route::get('/jurusan', 'SiakadController@Jurusan');
Route::get('/informasi', 'SiakadController@Informasi');
Route::get('/tentang', 'SiakadController@Tentang');
Route::get('/galeri','SiakadController@Galeri');
//Admin
Route::get('/adminpanel','AdminController@index');
Route::get('/adminpanel/create','AdminController@create');
Route::get('/adminkrs','AdminController@AdminKrs'); 
Route::get('/adminkhs','AdminController@AdminKhs'); 

Route::get('/adminpanel','AdminController@store'); 
Route::get('/adminkrs','AdminController@AdminKrs'); 
Route::get('/adminkhs','AdminController@AdminKhs'); 

//Mata Kuliah
//Route::get('/adminmatakuliah','AdminController@AdminMatakuliah');
Route::get('/adminmatakuliah','AdminController@indexMK');//menampilkan tabel matakuliah
Route::post('/adminmatakuliah','AdminController@tambahMK');//menambah tabel matakuliah
Route::get('/adminmatakuliah/{id_mk}/edit','AdminController@editMK');//mengubah tabel matakuliah
Route::post('/adminmatakuliah/{id_mk}/update','AdminController@updateMK');//mengupdate tabel matakuliah
Route::get('/adminmatakuliah/{id_mk}/destroy','AdminController@destroyMK');//menghapus tabel matakuliah
//Mahasiswa
//Route::get('/adminmahasiswa','AdminController@AdminMahasiswa'); 
Route::get('/adminmahasiswa/createmhs','AdminController@createMHS'); //tambah tabel mahasiswa 
Route::get('/adminmahasiswa','AdminController@indexMHS'); //menampilkan tabel mahasiswa 
Route::get('/adminmahasiswa/{id}','AdminController@destroy');
Route::post('/adminmahasiswa','AdminController@storeMHS'); //menampilkan tabel mahasiswa 