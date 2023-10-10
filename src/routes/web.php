<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CreateFeedbackController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('feedbackform');
});

Route::post('/feedback', [CreateFeedbackController::class, 'store']);

Route::any('/success', function () {
    return view('success');
});


