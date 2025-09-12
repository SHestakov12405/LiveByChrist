<?php

use App\Exports\AllExport;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Middleware\OnlyFromRedirect;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckPageAccessKey;
use App\Http\Controllers\Conference\ConferenceController;
use App\Http\Controllers\Conference\Export\ExportController;
use App\Mail\ConferenceRegistrationEmail;
use App\Models\ConferenceRegistration;

Route::prefix('/lager')->group(function () {
    Route::get('/', [FormController::class, 'index'])->name('index')->middleware(CheckPageAccessKey::class);
    Route::post('/form', [FormController::class, 'form'])->name('form');
    Route::get('/reglaments', [FormController::class, 'reglaments'])->name('reglaments');
    // ->middleware(CheckPageAccessKey::class);
    Route::get('/rejection', [FormController::class, 'rejection'])->name('rejection');
    // ->middleware(OnlyFromRedirect::class);
    Route::get('/success', [FormController::class, 'success'])->name('success');
    Route::get('/prev', [FormController::class, 'prev'])->name('prev');
});

// ->middleware(OnlyFromRedirect::class);
// Route::get('/email', function(){
//     // dd(ConferenceRegistration::find(4));
//     Mail::to('anton.shestakov.2005@mail.ru')->send(new ConferenceRegistrationEmail(ConferenceRegistration::find(4)));
// })->name('success');

Route::get('/', [ConferenceController::class, 'index']);


Route::post('/conference/registration', [ConferenceController::class, "registration"]);
Route::get('/export/sleep-required', [ExportController::class, 'exportSleepRequired']);
Route::get('/export/sleep-help', [ExportController::class, 'exportSleepHelp']);
Route::get('/export/all', [ExportController::class, 'exportAll']);
Route::get('/conference/success', [ConferenceController::class, "success"]);
Route::get('/conference/fail', [ConferenceController::class, "fail"]);


Route::get('/export', function () {
    return Excel::download(new AllExport, 'Регистрация Бытошь.xlsx');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
