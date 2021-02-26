<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\KeyDocCategoryController;
use App\Http\Controllers\KeyDocumentController;
use App\Http\Controllers\LegalController;
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

// Route::get('/welcome2', function () {
//     return view('welcome2');
// });

Route::get('change/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return Redirect::back();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);

    Route::resource('manage_key_categories', KeyDocCategoryController::class);
    Route::resource('manage_key', KeyDocumentController::class);
    Route::resource('manage_legal', LegalController::class);

    Route::get('/add_newsitem',[App\Http\Controllers\NewsitemController::class, 'addNewsitem'])->name('addNewsitem');
    Route::post('/add_newsitem', [App\Http\Controllers\NewsitemController::class,'storeNewsitem'])->name('addNews.store');

    Route::get('/add_news',[App\Http\Controllers\NewsController::class, 'addNews'])->name('addNews');
    Route::post('/add_news', [App\Http\Controllers\NewsController::class,'storeNews'])->name('News.store');
    Route::get('/news_list',[App\Http\Controllers\NewsController::class, 'News_list'])->name('News_list');
});


// fron_end

Route::get('/',[App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/',[App\Http\Controllers\WelcomeController::class, 'News_list'])->name('News_list');
Route::get('/key_documents', [App\Http\Controllers\KeyDocumentController::class, 'view'])->name('key_documents');
Route::get('/legal', [App\Http\Controllers\LegalController::class, 'view'])->name('legal');

Route::get('/mission_vision', function () {
    return view('about_us.mission_vision');
})->name('mission_vision');

Route::get('/functions', function () {
    return view('about_us.functions');
})->name('functions');

Route::get('/who_is_ppd', function () {
    return view('about_us.who_is_ppd');
})->name('who_is_ppd');

Route::get('/career_opportunity', function () {
    return view('about_us.career');
})->name('career');

Route::get('/agencies', function () {
    return view('agencies.agencies');
})->name('agencies');