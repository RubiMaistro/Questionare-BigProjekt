<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomepageController;

use Laravel\UI\AuthRouteMethods;

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


Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/questionnaires', [App\Http\Controllers\QuestionnaireListController::class, 'index']);
Route::get('/questionnaire/{id}', [App\Http\Controllers\AnswerQuestionnaireController::class, 'show']);
Route::get('/create/questionnaire', [App\Http\Controllers\CreateQuestionnaireController::class, 'create'])->middleware('auth');
Route::get('/design-review', [App\Http\Controllers\QuestionnaireListController::class, 'review']);
