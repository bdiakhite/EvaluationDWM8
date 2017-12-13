<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gender;
use App\team;
class CreateController extends Controller
{

    public function index()
    {
      $genders = gender::all();

      $teams = team::all();

      return view('create', ['genders' => $genders, 'teams' => $teams]);
    }
}
