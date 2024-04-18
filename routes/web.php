<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\ParameterController;
 





// Define routes for Avatar Leads
Route::get('/avatar_leads', [AvatarController::class, 'store'])->name('avatar_leads.store');

// Define a route for displaying the welcome page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/display', [ParameterController::class, 'display']);

// Define a route for getting data with parameters
 
    Route::get('/avatar_leads/create', [AvatarController::class, 'create'])->name('avatar_leads.create');
    
    // Define a route for storing the submitted data
    Route::post('/avatar_leads', [AvatarController::class, 'store'])->name('avatar_leads.store');
    
    // Define a route for displaying the welcome page
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');