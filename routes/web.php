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

Route::get('/', function () {
//    dd(Request::is('/'));
    return view('general.index');
});

Route::get('/login', 'SessionsController@create')->name('login');;

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::get('/register', function () {
    return view('general.register');
});

Route::get('/restore-pwd', function () {
    return view('general.restore-pwd');
});

Route::get('/peminjaman-saya', 'UserController@peminjamanSaya');
Route::get('/peminjaman-saya-ditolak', 'UserController@peminjamanSayaDitolak');
Route::get('/peminjaman-saya-tunggu-setuju', 'UserController@peminjamanSayaTungguSetuju');
Route::get('/peminjaman-saya-tunggu-ambil', 'UserController@peminjamanSayaTungguAmbil');
Route::get('/peminjaman-saya-sedang-dipinjam', 'UserController@peminjamanSayaSedangDipinjam');
Route::get('/peminjaman-saya-sudah-kembali', 'UserController@peminjamanSayaSudahKembali');



Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@index');

    Route::get('/books', 'AdminController@booksIndex');

    Route::get('/manage-loans', 'AdminController@manageLoans');

    Route::get('/loans-request', 'AdminController@loansRequest');

    Route::get('/loans-request/2', 'AdminController@loansRequest2');

    Route::get('/verify-member', 'AdminController@verifyMember');

    Route::get('/list-member', 'AdminController@listMember');

    Route::get('/edit-member', 'AdminController@editMember');

    Route::get('/edit-book/{id}', 'AdminController@editBook');

    Route::get('/add-book', 'AdminController@addBook');

    Route::get('/show-book', 'AdminController@showBook');

    Route::get('/manage-loan-detail', 'AdminController@manageLoanDetail');

    Route::get('/verify-member-detail', 'AdminController@verifyMemberDetail');

    Route::get('/member-details', 'AdminController@memberDetails');

    Route::get('/cari-permohonan-anggota', 'AdminController@cariPermohonanMember');

    Route::get('/cari-permohonan-peminjaman', 'AdminController@cariPermohonanPeminjaman');

    Route::get('denda', 'AdminController@denda_index');
    Route::post('denda', 'AdminController@denda');

    Route::get('/manage-loans-ditolak', function () {
        return view('admin.manage-loans-ditolak');
    });

    Route::get('/manage-loans-dalam-peminjaman', function () {
        return view('admin.manage-loans-dalam-peminjaman');
    });

    Route::get('/manage-loans-sudah-kembali', function () {
        return view('admin.manage-loans-sudah-kembali');
    });

    Route::get('/loans-request-not-found', function () {
        return view('admin.loans-request-not-found');
    });
});

Route::group(['prefix' => 'books'], function() {
    Route::post('/search', 'BooksController@search');
    Route::get('/find', 'BooksController@find');
    Route::get('/show', function () { // ntar diganti jadi '/{id}'
        return view('books.show');
    });
});

Route::get('/verify-member-found', function () {
    return view('admin.verify-member');
});

Route::get('/verify-member-blank', function () {
    return view('admin.verify-member-blank');
});

Route::get('/verify-member-not-found', function () {
    return view('admin.verify-member-not-found');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
