@extends('layout.base')
@section('title', 'accueil')
@section('main')
<h1>Modification</h1>
{!! Form::open(['url' => '/cat/update', 'class' => 'insertForm']) !!}
      {{{ Form::hidden('id', $player->id)}}}
      <div class="form-group">
      {{{ Form::label('Nom') }}}
      {{{ Form::text('name', $cat->nom) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Taille') }}}
      {{{ Form::number('taille', $cat->size) }}}
    </div>
    <div class="form-group">	
      {{{ Form::label('Poids') }}}
      {{{ Form::number('weight', $cat->weight) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Age') }}}
      {{{ Form::number('Age', $cat->age) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Sexe') }}}
      {{{ Form::select('gender', $genders, $cat->gender->id) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Couleur') }}}
      {{{ Form::select('colors[]', $colors, $cat->colors, ['multiple' => true]) }}}
    </div>
    {{{ Form::submit('updater un chat') }}}
  {!! Form::close() !!}

  $gendersAll = Gender::all();
    $genders = [];
    foreach ($gendersAll as $value) {
      $genders[$value->id] = $value->gender;
    }
    $colorsAll = Color::all();
    $colors = [];
    foreach ($colorsAll as $value) {
      $colors[$value->id] = $value->color;
    }
@endsection
