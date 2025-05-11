<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\KeyInitiativeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\GeneralController::class, 'index'])->name('welcome');
Route::get('/contact-us', [App\Http\Controllers\GeneralController::class, 'contactus'])->name('contactus');
Route::get('/about-us', [App\Http\Controllers\GeneralController::class, 'aboutus'])->name('aboutus');
Route::get('/me/about', [App\Http\Controllers\GeneralController::class, 'aboutme'])->name('aboutme');
Route::get('/donate', [App\Http\Controllers\GeneralController::class, 'donatenow'])->name('donatenow');
Route::get('/team-single/{slug}', [App\Http\Controllers\GeneralController::class, 'singleteam'])->name('team.single');
Route::get('/ourprograms', [App\Http\Controllers\GeneralController::class, 'ourprograms'])->name('ourprograms');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/event/view/{slug}', [GeneralController::class, 'eventdetails'])->name('events.details');
Route::get('/key/initiative/{slug}', [GeneralController::class, 'key_initiative'])->name('key_initiative.details');
Route::get('/reload-captcha', [ContactController::class, 'reloadCaptcha']);

// Media Routes
Route::get('/medias', [GeneralController::class, 'medias'])->name("medias");
Route::get('/medias/{slug}', [GeneralController::class, 'media'])->name("media.details");
Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('user', 'UserController');

    Route::resource('permission', 'PermissionController');


    Route::get('/profile', 'UserController@profile')->name('user.profile');

    Route::post('/profile', 'UserController@postProfile')->name('user.postProfile');

    Route::get('/password/change', 'UserController@getPassword')->name('userGetPassword');

    Route::post('/password/change', 'UserController@postPassword')->name('userPostPassword');

    Route::prefix('setting')->group(function () {
    Route::get('/website-setting/edit', 'SettingController@edit')->name('website-setting.edit');
    Route::post('/website-setting/update/{id}', 'SettingController@update')->name('website-setting.update');
    // Route::get('/website-setting/edit', 		 [App\Http\Controllers\Admin\SettingController::class, 'edit'])->name('website-setting.edit');
    // Route::post('/website-setting/update/{id}',  [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('website-setting.update');

    // Team Profile :::::::::::::::::::::::::::::::->
    Route::resource('team_profiles', 'TeamProfileController');
    Route::resource('key_focus_areas', 'KeyFocusAreaController');

    // Route::resource('key_focus_areas', ::class);
    // Event Magazine Route Starts Here ::::::::::::::
		Route::get('event/magazine/view', [EventController::class, 'index'])->name("event.index");
		Route::get('event/magazine/create', [EventController::class, 'create'])->name("event.create");
		Route::post('event/magazine/store', [EventController::class, 'store'])->name("event.store");
		Route::get('event/magazine/edit/{id}', [EventController::class, 'edit'])->name("event.edit");
		Route::put('event/magazine/update/{id}', [EventController::class, 'update'])->name("event.update");
		Route::delete('event/magazine/destroy/{id}', [EventController::class, 'destroy'])->name("event.destroy");


        // initiative:
        Route::get('key_initiatives', [KeyInitiativeController::class, 'index'])->name('key_initiatives.index');
        Route::get('key_initiatives/create', [KeyInitiativeController::class, 'create'])->name('key_initiatives.create');
        Route::post('key_initiatives', [KeyInitiativeController::class, 'store'])->name('key_initiatives.store');
        Route::get('key_initiatives/{slug}', [KeyInitiativeController::class, 'show'])->name('key_initiatives.show');
        Route::get('key_initiatives/{slug}/edit', [KeyInitiativeController::class, 'edit'])->name('key_initiatives.edit');
        Route::put('key_initiatives/{slug}', [KeyInitiativeController::class, 'update'])->name('key_initiatives.update');
        Route::delete('key_initiatives/{slug}', [KeyInitiativeController::class, 'destroy'])->name('key_initiatives.destroy');

});

});


Route::group(['middleware' => ['auth', 'role_or_permission:admin|create role|create permission']], function() {

    Route::resource('role', 'RoleController');


});

Auth::routes();


//////////////////////////////// axios request

Route::get('/getAllPermission', 'PermissionController@getAllPermissions');
Route::post("/postRole", "RoleController@store");
Route::get("/getAllUsers", "UserController@getAll");
Route::get("/getAllRoles", "RoleController@getAll");
Route::get("/getAllPermissions", "PermissionController@getAll");

/////////////axios create user
Route::post('/account/create', 'UserController@store');
Route::put('/account/update/{id}', 'UserController@update');
Route::delete('/delete/user/{id}', 'UserController@delete');
Route::get('/search/user', 'UserController@search');

