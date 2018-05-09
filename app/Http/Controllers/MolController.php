<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MolController extends Controller
{
  public function main() {
    return view('mol.main');
  }

  public function edycje() {
    return view('mol.edycje');
  }
}
