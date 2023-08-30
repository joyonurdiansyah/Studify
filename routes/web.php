<?php

use Illuminate\Support\Facades\Auth; // Add this line
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerUsers;
use App\Http\Controllers\EmailController;

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
    return view('auth.login');
});

Auth::routes();

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {
    // ini router home
    Route::get('/home', 'HomeController@index')->name('home');
    // Route::get('/register', 'HomeController@registerAkun')->name('register');

    // ini router users
    Route::get('/datauser', [controllerUsers::class, 'indexuser'])->name('datausers');

    // ini router search users
    Route::get('/search-users', [controllerUsers::class, 'search_users'])->name('search.users');

    //tambah data users
    Route::get('/tambah-users', [ControllerUsers::class, 'get_tambah_users'])->name('tambah.users');
    Route::post('/tambah-users', [ControllerUsers::class, 'tambah_users'])->name('tambah.data.users');

    // edit data users
    Route::get('/edit-user/{id}', [ControllerUsers::class, 'get_edit_users'])->name('edit.user');
    Route::post('/update-user', [ControllerUsers::class, 'update_data_users'])->name('update.user');

    // hapus data users
    Route::get('/hapus-user/{id}', [ControllerUsers::class, 'hapus_user'])->name('hapus.data.user');


    // break point untuk route data tables dan jquery
    Route::get('/datatables-user', [controllerUsers::class, 'getDataKaryawan'])->name('data.hobi');
    Route::get('/karyawan-dashboard', [controllerUsers::class, 'indexKaryawan'])->name('data.karyawan.dashboard');


    // data karyawan
    // route menu karyawan belum dipake 
    Route::get('/data-karyawan', [controllerUsers::class, 'getDataKaryawan'])->name('index.karyawan');
    Route::post('/tambah-karyawan', [controllerUsers::class, 'tambahKaryawan'])->name('tambah.karyawan');
    Route::get('/edit-karyawan/{id}', [controllerUsers::class, 'editKaryawan'])->name('edit.karyawan');
    Route::post('/update-karyawan', [controllerUsers::class, 'getDataKaryawan'])->name('update.karyawan');
    Route::get('/delete-karyawan/{id}', [controllerUsers::class, 'deleteKaryawan'])->name('delete.karyawan');
    // endroutekaryawan


    // route belum dipake 

});


// auth email
Route::post('/send-reset-email', [controllerUsers::class, 'sendEmail'])->name('send.reset.email');


Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
});
