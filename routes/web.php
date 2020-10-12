<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/how-does-this-work', [HomeController::class, 'how_does_this_work']);
Route::get('/why-do-we-do-this', [HomeController::class, 'why_do_we_de_this']);
Route::get('/other-christmas-fun', [HomeController::class, 'other_christmas_fun']);
Route::get('/send-us-an-email', [HomeController::class, 'send_us_an_email']);

Route::post('/save-command', [HomeController::class, 'save_command']);
Route::post('/send-email', [HomeController::class, 'send_email']);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/get-commands', [AdminController::class, 'commands'])->name('command-list');
    Route::get('/admin/system-on-off-time', [AdminController::class, 'system_on_off_time']);
    Route::get('/admin/setting-time-schedule', [AdminController::class, 'setting_time_schedule']);

    Route::post('/admin/set-system-onoff-time', [AdminController::class, 'set_system_onoff_time']);
    Route::post('/admin/set-schedule-onoff-time', [AdminController::class, 'set_schedule_onoff_time']);

    Route::post('/admin/set-schedule-on-time', [AdminController::class, 'set_schedule_on_time']);
    Route::post('/admin/set-schedule-off-time', [AdminController::class, 'set_schedule_off_time']);
});
