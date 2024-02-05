<?php

use Illuminate\Support\Facades\Route;
use App\Services\IpLocationService;
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


Route::get('/get-location/{ip}', function (IpLocationService $ipLocationService, $ip) {
    $location = $ipLocationService->getLocation($ip);
    dd($location);
    return response()->json($location);
});

Route::get('/', function () {
    return view('welcome');
});
