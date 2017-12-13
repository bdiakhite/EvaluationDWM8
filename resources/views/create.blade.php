@extends('layout.base')
@section('title', 'accueil')
@section('main')
<h1>Insertion</h1>
{!! Form::open(['url' => '/player/update', 'class' => 'insertForm']) !!}
      <div class="form-group">
      {{{ Form::label('Nom') }}}
      {{{ Form::text('prenom') }}}
    </div>
      <div class="form-group">
      {{{ Form::label('Nom') }}}
      {{{ Form::text('nom') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Taille') }}}
      {{{ Form::number('taille') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('point') }}}
      {{{ Form::number('point') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Age') }}}
      {{{ Form::number('Age') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Sexe') }}}
      {{{ Form::select('gender', $genders) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Couleur') }}}
      {{{ Form::select('teams[]', $teams) }}}
    </div>
    {{{ Form::submit('updater un chat') }}}
  {!! Form::close() !!}

@endsection
