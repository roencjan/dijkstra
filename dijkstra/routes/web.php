<?php

use App\Http\Controllers\RoutingController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/api/dijkstra/v1', function() {
    $command = escapeshellcmd('python3 ./app/Http/Python/dijkstra.py');
    var_dump(shell_exec($command));
});

Route::get('/{url?}/{sub1?}/{sub2?}/{sub3?}', [RoutingController::class, 'route']);
