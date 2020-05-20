<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{

  /**
   * Show the days since template page
   *
   * @return View
   */
    public function dayssince() {
        $dt = Carbon::createMidnightDate(2020, 3, 23);
        $dayssincelockdownbegan = $dt->diffInDays(Carbon::now());

        return view('dayssince', compact('dayssincelockdownbegan'));
    }

}
