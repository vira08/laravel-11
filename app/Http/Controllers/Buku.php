<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Buku extends Controller
{
   public function add(){
    return view('InputBuku');
   } //
}
