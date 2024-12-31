<?php

use App\Models\Carrusel;
use Laravel\Passport\Bridge\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JWTController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ProfileController;
use Tymon\JWTAuth\Http\Middleware\Authenticate;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
    $carrusel = Carrusel::orderBy('orden','asc')->get();
    return view('welcome',compact('carrusel'));
});
Route::get('/adminDatos/adminDatos', function () {
    return view('adminDatos.adminDatos');
})->name('adminDatos');
Route::get('/map',function(){
    return view('map');
});*/

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
/*Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Route::get('admin/login',[adminController::class,'login'])->name('admin.login');
/*require __DIR__.'/auth.php';
Route::get('/evento',[EventoController::class,'index'])->name('evento.index');
Route::get('/users',[EventoController::class,'index'])->name('user.index');
Route::get('/evento/crear',[EventoController::class,'create'])->name('evento.create');
*/
//Route::get('/indexUser',[UserController::class, 'indexUser']);


//Route::get('auth-profile.component',function(){
  //  return redirect('api/login')->names('userLogin');
//});

/*Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);*/


Route::group(['prefix' => 'users'], function ($router) {
    Route::post('/register', [JWTController::class, 'register']);
    Route::post('/login', [JWTController::class, 'login'])->name('login');
    Route::post('/logout', [JWTController::class, 'logout'])->name('logout');
    Route::post('/refresh', [JWTController::class, 'refresh'])->name('refresh');
    Route::post('/profile', [JWTController::class, 'profile'])->name('profile');
});

