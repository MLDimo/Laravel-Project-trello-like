@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
                <form  method="post" action="@route('store.table')">
                    @csrf
                    <label for="title"><h4> Créer un nouveau Tableau :</h4></label>
                    <input id="title" name="title" type="text" placeholder="Titre">
                    <label for="description"> description </label>
                    <input type="text" name="description" id="description">
                    <input type="submit" value="+">
                </form>
        </div>
    </div>
</div>
<div class="row">
        @foreach ($tables as $item)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h4 class="card-title"> {{ $item->title }} </h4>
                <h6 class="card-subtitle mb-2"> {{$item->description}} </h6>

<form method="post">
      <a href="@route('rename.table')" class="card-link">Modifier</a>
      <a href="@route('del.table',[$item->id])" class="card-link">Supprimer</a>
      <a href="@route('table',[$item->id])" class="card-link">Voir</a>
</form>

            </div>
            </div>
        @endforeach
    </div>
</div>
</div>

@endsection
<style>
.card {
    margin-left: 95px;
    margin-bottom: 50px;
}
    .card {
        margin-left: 95px;
        margin-bottom: 50px;
    }

</style>



