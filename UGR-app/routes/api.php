<?php

use App\Http\Controllers\AlertaController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Biblioteca;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\ComunidadController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\JWTController;
use App\Http\Controllers\MapasController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\registerResponsableController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\UserController;
use App\Models\EventoAdverso;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Http\Controllers\AuthorizationController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PdfController;

/*header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization, Accept,charset,boundary,Content-Length');
header('Access-Control-Allow-Origin: *');*/
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
//Route::post('/Auth/AuthenticatedSessionController.php',[AuthenticateSession::class,'login']);
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  //  return $request->user();
//Route::post('/auth/login',[AuthorizationController::class,'loginUser']);
//});


Route::group(['prefix'=>'eventos'],function($router){
    Route::get('evento/{id}',[EventoController::class,'DetailEvento']);
    Route::post('/create',[EventoController::class,'createEvent']);
    Route::get('/read',[EventoController::class,'readEvent']);

    Route::post('/update/{id}',[EventoController::class,'updateEvent']);
    Route::post('/delete/{id}',[EventoController::class,'delete']);
    Route::post('reportEvent',[EventoController::class,'listadeEventos']);
    Route::get('/download-data', [EventoController::class, 'downloadData']);
});
Route::post('/idAlert',[AlertaController::class,'store']);
Route::post('/idRegion',[RegionController::class,'store']);
/*
Route::group(['prefix'=>'responsables'],function($router){
    Route::post('/create',[ResponsableController::class,'createResponsable']);
    Route::post('/read',[ResponsableController::class,'readResponsable']);
    Route::post('/update',[ResponsableController::class,'updateResponsable']);
    Route::post('/delete',[ResponsableController::class,'deleteResponsable']);
});
Route::group(['prefix'=>'comunidades'],function($router){
    Route::post('/create',[ComunidadController::class,'createComunidad']);
    Route::post('/read',[ComunidadController::class,'readComunidad']);
    Route::post('/update',[ComunidadController::class,'updateComunidad']);
    Route::post('/delete',[ComunidadController::class,'deleteComunidad']);
});
Route::group(['prefix'=>'municipios'],function($router){
    Route::post('/create',[MunicipioController::class,'createMunicipio']);
    Route::post('/read',[MunicipioController::class,'readMunicipio']);
    Route::post('/update',[MunicipioController::class,'updateMunicipio']);
    Route::post('/delete',[MunicipioController::class,'deleteMunicipio']);
});
Route::group(['prefix'=>'regiones'],function($router){
    Route::post('/create',[RegionController::class,'createRegion']);
    Route::post('/read',[RegionController::class,'readRegion']);
    Route::post('/update',[RegionController::class,'updateRegion']);
    Route::post('/delete',[RegionController::class,'deleteRegion']);
});
Route::group(['prefix'=>'mapas'],function($router){
    Route::post("report_for_year",[MapasController::class,'listadeMapas']);
});

Route::post('/usuarios',[UserController::class,'store']);
//Route::get('/login',[UserController::class, 'indexUser']);
*/
//Route::post('/login',[JWTController::class,'login']);

Route::group(['prefix' => 'users'], function ($router) {
    Route::post('/register', [JWTController::class, 'register']);
    Route::post('/login', [JWTController::class, 'login'])->name('login');
    Route::post('/logout', [JWTController::class, 'logout'])->name('logout');
    Route::post('/refresh', [JWTController::class, 'refresh'])->name('refresh');
    Route::post('/profile', [JWTController::class, 'profile'])->name('profile');
});
//Route::controller(BibliotecaController::class)->group(function(){
//Route::group(['prefix'=>'biblioteca'],function($router){
   // Route::get('/biblioteca', 'index');
    Route::post('/uploadPdf',[BibliotecaController::class,'store']);
    Route::get('/api/files',[BibliotecaController::class,'listFiles']);
    Route::delete('/files/{id}',[BibliotecaController::class,'destroy']);
    /*function($fileName){
        $pdfUrl = url('Externo/' . $fileName);
        return view('show_pdf', compact('pdfUrl'));
    });*/
    //Route::get('/biblioteca/{id}', 'show');
    //Route::post('/biblioteca/{id}', 'update');
    //Route::delete('/biblioteca/{id}', 'destroy');
//});
Route::get('/eventos',[EventoController::class,'index']);
/*Route::group(['prefix'=>'eventos'],function($router){
    Route::post('/lista', [EventoController::class,'index'])->name('ListaEventos');
});*/
//Route::post('/eventos/crear', 'create');
/* Route::get('/evento-adverso/{id}', 'show');
 Route::post('/evento-adverso/{id}', 'update');
 Route::delete('/evento-adverso/{id}', 'destroy');*/
//Route::resource('eventos', EventoController::class);
Route::post('/upload',[ImageController::class,'store']);
//Route::post('/uploadPdf',[BibliotecaController::class,'store']);
