<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

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

Route::get('/', function () {
  $dt = Carbon::createMidnightDate(2020, 3, 23);
  $dayssincelockdownbegan = $dt->diffInDays($dt->copy()->addMonth());
  return view('dayssince', compact('dayssincelockdownbegan'));
});
