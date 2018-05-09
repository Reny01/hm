<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerlinkaController extends Controller
{
  public function main() {
    return view('merlinka.main');
  }

  public function edycje() {
    return view('merlinka.edycje');
  }
}
