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

Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);
Route::get('/about-us', [App\Http\Controllers\HomePageController::class, 'about_us']);
Route::get('/service/consultation', [App\Http\Controllers\HomePageController::class, 'consultation']);
Route::get('/service/software_development/web_development', [App\Http\Controllers\HomePageController::class, 'web_development']);
Route::get('/service/software_development/mobile_development', [App\Http\Controllers\HomePageController::class, 'mobile_development']);
Route::get('/service/software_development/desktop_development', [App\Http\Controllers\HomePageController::class, 'desktop_development']);
Route::get('/service/software_development/game_development', [App\Http\Controllers\HomePageController::class, 'game_development']);
Route::get('/service/it_trainings', [App\Http\Controllers\HomePageController::class, 'it_trainings']);
// Route::get('/service/it_trainings/project_management', [App\Http\Controllers\HomePageController::class, 'project_management']);
Route::get('/service/it_trainings/scrum_program', [App\Http\Controllers\HomePageController::class, 'scrum_program']);
Route::get('/service/it_trainings/quality_management_program', [App\Http\Controllers\HomePageController::class, 'quality_management_program']);
Route::get('/service/it_trainings/risk_management_program', [App\Http\Controllers\HomePageController::class, 'risk_management_program']);
Route::get('/service/it_trainings/prince2_program', [App\Http\Controllers\HomePageController::class, 'prince2_program']);
Route::get('/service/it_trainings/marketing_program', [App\Http\Controllers\HomePageController::class, 'marketing_program']);
Route::get('/service/it_trainings/itil', [App\Http\Controllers\HomePageController::class, 'itil']);
Route::get('/enroll', [App\Http\Controllers\HomePageController::class, 'enroll']);
Route::get('/faqs', [App\Http\Controllers\HomePageController::class, 'faqs']);
Route::get('/contact', [App\Http\Controllers\HomePageController::class, 'contact']);
Route::post('/contact-us', [App\Http\Controllers\HomePageController::class, 'contactConfirm']);
Route::get('/book_consultation', [App\Http\Controllers\HomePageController::class, 'book_consultation']);
Route::post('/book_consultation', [App\Http\Controllers\HomePageController::class, 'post_book_consultation'])->name('user.book.consultation');;
Route::get('/payment/callback', [App\Http\Controllers\HomePageController::class, 'handleGatewayCallback'])->name('user.handleGatewayCallback');
Route::get('/consultation/successfully', [App\Http\Controllers\HomePageController::class, 'consultation_successfully'])->name('consultation.successful');
