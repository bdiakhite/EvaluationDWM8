@extends('layout.base')
@section('title', 'accueil')
@section('main')

<h1>Ma page d'accueil</h1>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Sexe</th>
      <th scope="col">Taille</th>
      <th scope="col">Age</th>
      <th scope="col">point/match</th>
      <th scope="col">Equipe</th>
      <th scope="col">delete</th>
      <th scope="col">update</th>
    </tr>
  </thead>
  <tbody>
@foreach ($players as $player)
  <tr>
      <th scope="row">{{ $player->idplayers }}</th>
      <td>{{ $player->prenom }}</td>
      <td>{{ $player->nom }}</td>
      @if ($player->gender)
        <td>{{ $player->gender->gender }}</td>
      @else
        <td>Hermaphrodite</td>
      @endif
        <td>{{ $player->taille }}cm</td>
        <td>{{ $player->age }}Ans</td>
        <td>{{ $player->point }}pts</td>
      @if($player->team)
        <td>{{$player->team->team}}</td>
      @else
        <td>no team</td>
      @endif
        <td>
          <form action="/player/delete/{{$player->id}}" method="get">
            {{ csrf_field() }}
            <input type="submit">
          </form>
        </td>
        <td>
          <form action="/player/update/{{$player->id}}" method="post">
            {{ csrf_field() }}
            <input type="submit" value="update">
          </form>
        </td>
    </tr>
  @endforeach
</tbody>
</table>

@endsection
