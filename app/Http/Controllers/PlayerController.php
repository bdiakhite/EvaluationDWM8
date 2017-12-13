<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\player;
use App\gender;
use App\team;

class PlayerController extends Controller
{
    public function insertOne(Request $request)
    {
      $player = new Player;
      $player->nom = $request->nom;
      $player->prenom = $request->prenom;
      $player->taille = $request->taille;
      $player->age = $request->age;
      $player->point = $request->point;
      $player->gender_id = $request->gender;
      $player->team_id = $request->team;
      $player->save();

      return redirect('./');
    }
    public function deleteOne(Request $request, $id)
    {
      $player = player::find($id);
      $player->delete();
      return redirect('/');
    }
    public function updateOne(Request $request, $id)
    {
      $player = player::find($id);

        $genders = gender::all();
        $teams = team::all();
        return view('update', ['genders' => $genders, 'teams' => $teams, 'player' => $player]);
    }

    public function updateOneAction(Request $request)
    {
      $player = player::find($request->id);
      $player->nom = $request->nom;
      $player->prenom = $request->prenom;
      $player->taille = $request->taille;
      $player->age = $request->age;
      $player->point = $request->point;
      $player->gender_id = $request->gender;
      $player->team_id = $request->team;
      $player->save();
      return redirect('/');
    }


}
