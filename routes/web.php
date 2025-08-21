<?php

use App\Http\Controllers\LoginWithOTPController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     $readmePath = base_path('README.md');

//     return view('welcome', [
//         'readmeContent' => Str::markdown(file_get_contents($readmePath)),
//     ]);
// });

Route::get('/', function () {
    return view('welcome');
});
// Login with OTP Routes
Route::prefix('/otp')->middleware('guest')->name('otp.')->controller(LoginWithOTPController::class)->group(function(){
    Route::get('/login','login')->name('login');
    Route::post('/generate','generate')->name('generate');
    Route::get('/verification/{userId}','verification')->name('verification');
    Route::post('login/verification','loginWithOtp')->name('loginWithOtp');
});

// Socialite Routes
Route::prefix('oauth/')->group(function(){
    Route::prefix('/github/login')->name('github.')->group(function(){
        Route::get('/',[SocialiteController::class,'redirectToGithub'])->name('login');
        Route::get('/callback',[SocialiteController::class,'HandleGithubCallBack'])->name('callback');
    });

    Route::prefix('/google/login')->name('google.')->group(function(){
        Route::get('/',[SocialiteController::class,'redirectToGoogle'])->name('login');
        Route::get('/callback',[SocialiteController::class,'HandleGoogleCallBack'])->name('callback');        
    });

    Route::prefix('/facebook/login')->name('facebook.')->group(function(){
        Route::get('/',[SocialiteController::class,'redirectToFaceBook'])->name('login');
        Route::get('/callback',[SocialiteController::class,'HandleFaceBookCallBack'])->name('callback');
    });
});

Route::get('/get-degrees/{institution}', [DegreeController::class, 'getByInstitution']);
Route::get('/get-programs/{degree}', [AlumniController::class,'getPrograms'])
->name('get.programs');

Route::get('/rjemch', [HomeController::class, 'Rjemch']);
Route::get('/humch', [HomeController::class, 'Humch']);
Route::get('/hsemch', [HomeController::class, 'Hsemch']);
Route::get('/hpc', [HomeController::class, 'Hpc']);
Route::get('/hub', [HomeController::class, 'Hub']);
Route::get('/hiuam', [HomeController::class, 'Hiuam']);
Route::get('/institutions', [HomeController::class, 'AllInstitutions']);
Route::get('/health', [HomeController::class, 'Health']);
Route::get('/philanthropic', [HomeController::class, 'Philanthropic']);

// Auth routes
require __DIR__.'/auth.php';
// Admin Routes
require('admin.php');
