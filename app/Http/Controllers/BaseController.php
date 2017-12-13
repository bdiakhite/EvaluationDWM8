<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\player as player;

class BaseController extends Controller
{
    public function index()
    {
      $players = player::all();
      return view('accueil', ['players' => $players]);
    }
}
