<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function homepage() {
      return view('static-pages.homepage');
    }

    public function hm() {
      return view('static-pages.hm');
    }

    public function bm() {
      return view('static-pages.bm');
    }

    public function kamienie() {
      return view('static-pages.kamienie');
    }

    public function karty() {
      return view('static-pages.karty');
    }
}
