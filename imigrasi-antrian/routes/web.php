<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\HomePage;
use App\Livewire\SurveyPage;
use App\Livewire\TicketPage;
use App\Livewire\DisplayQueue;
use App\Livewire\AdminMonitor;

/*
|--------------------------------------------------------------------------
| PUBLIC
|--------------------------------------------------------------------------
*/

Route::get('/', HomePage::class);

Route::get('/survey/{layanan}', SurveyPage::class);

// Route::get('/ticket/{id}', TicketPage::class);
Route::get('/ticket/{id}', TicketPage::class)
    ->name('ticket');

Route::get('/display', DisplayQueue::class);


/*
|--------------------------------------------------------------------------
| ADMIN ONLY
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/admin-monitor', AdminMonitor::class);

});


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';