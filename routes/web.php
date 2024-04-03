<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvatarController;


// Define routes for Avatar Leads
Route::post('/avatar_leads', [AvatarController::class, 'store'])->name('avatar_leads.store');

// Define a route for displaying the welcome page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
 
// Define a route for getting data with parameters
Route::post('/', function (Request $request) {
    //$id = $request->input('id');
    $agent_id = $request->input('agent_id');
    $lead_id = $request->input('lead_id');
    $dialer_id = $request->input('dialer_id');
    $AGE = $request->input('AGE');
    $Smoker = $request->input('Smoker');
    $verifier = $request->input('verifier');
    $center = $request->input('center');
    $phone_number = $request->input('phone_number');

    // Process the data as needed

})->name('welcom');