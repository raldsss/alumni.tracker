

 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\GmailController;
use App\Http\Controllers\AlumnilogController;


Route::middleware(['redirectIfAuthenticated'])->group(function () {
    Route::get('/register', [UserController::class, 'showRegistrationForm']);
    Route::post('/register', [UserController::class, 'register'])->name('register');
    Route::get('/', [UserController::class, 'showLoginForm'])->name('login');
    Route::post('/', [UserController::class, 'login'])->name('login.submit');
});
Route::get('/forget', [AuthController::class, 'showForgetForm'])->name('forget');
Route::post('/forget', [AuthController::class, 'forget'])->name('forget.submit');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware(['auth', 'preventBackAfterLogout'])->group(function () {

    Route::post('/password', function () {
        return view('password');
    })->name('password');
});
Route::get('/accounts', [UserController::class, 'accounts'])->name('accounts')->middleware('auth');
Route::put('/update-account', [UserController::class, 'updateAccount'])->name('updateAccount');
Route::get('/manageAlumni', [AuthController::class, 'manageAlumni'])->name('manageAlumni');
Route::post('/manageAlumni', [AlumniController::class, 'manageAlumni'])->name('manageAlumni');






Route::get('/manageAlumni', [ManageController::class, 'manageAlumni'])->name('manageAlumni');

Route::put('/update-alumni', [ManageController::class, 'updateAlumni'])->name('updateAlumni');

Route::post('sendmail/', [GmailController::class, 'Send'])->name('sendmail.send');
Route::get('/alumnilog', [AlumnilogController::class, 'showLoginForm'])->name('signin');
Route::post('/signin', [AlumnilogController::class, 'signin'])->name('signin');
Route::get('/surveyform', function () {
    return view('surveyform');
})->name('surveyform')->middleware('auth');
