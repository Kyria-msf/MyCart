<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
//use App\Models\Product;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::resource('products',ProductController::class);

// Public routes
Route::post('/login',[AuthController::class, 'login']);
Route::post('/register',[AuthController::class, 'register']);


Route::get('/carts', [CartController::class, 'index']);
Route::get('/carts/{cart_id}', [CartController::class, 'show']);


 // Protected routes
Route::group(['middleware'=> ['auth:sanctum']], function(){
  
    Route::post('/logout',[AuthController::class, 'logout']);

    Route::post('/carts',[CartController::class, 'store']);
    Route::put('/carts/{cart_id}',[CartController::class, 'update']);
    Route::delete('/carts/{cart_id}',[CartController::class, 'destroy']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
