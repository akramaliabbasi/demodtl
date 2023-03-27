<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
  
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProductController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
	
	Route::controller(AuthController::class)->group(function () {
		Route::post('/register', 'signup')->middleware(['throttle:10,1'])->name('register');
		Route::post('/login','signin')->middleware(['throttle:10,1'])->name('login');    
	});
	

		 
	Route::middleware('auth:sanctum')->group( function () {
		Route::resource('products', ProductController::class);
	});
	
	// check history log as audit by user
	Route::get('/product/{id}/history', [ProductController::class, 'history']);

	// Genrate temporary API token to use for PostMan Debug & test
	Route::post('/api/token', function (Request $request) {
		$credentials = $request->only('email', 'password');

		if (Auth::attempt($credentials)) {
			$token = $request->user()->createToken('api-token')->plainTextToken;
			return ['token' => $token];
		}
	});
