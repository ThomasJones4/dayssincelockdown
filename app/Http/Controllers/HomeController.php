<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  /**
   * Show the days since template page
   *
   * @return View
   */
    function dayssince() {
        $dt = Carbon::createMidnightDate(2020, 3, 23);
        $dayssincelockdownbegan = $dt->diffInDays(Carbon::now());

        return view('dayssince', compact('dayssincelockdownbegan'));
    }

}
