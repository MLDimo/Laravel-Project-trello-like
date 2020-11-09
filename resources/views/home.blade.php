@extends('layouts.app')

@section('content')
<div class="container-fluid lex-content">
<div class="container-fluid">
    <div class="row">
        <div class="col">
                <form  method="post" action="@route('store.table')">
                    @csrf
                    <label for="title"><h4> Créer un nouveau Tableau :</h4></label>
                    <input id="title" name="title" type="text" placeholder="Titre">
                    <label for="description"><h4> Description :</h4></label>
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
</div>
@endsection
<style>
.card {
    margin-left: 88px;
    margin-bottom: 50px;
}
.card-link1 {
    color: rgb(43, 86, 226);
    padding-left: 10px;
    font-size: 20px;
}
.card-link2 {
    color: crimson;
    padding-left: 10px;
    font-size: 20px;
}
.card-link3 {
    color: green;
    padding-left: 10px;
    font-size: 20px;
}
.card-title {
    color: rgb(0, 0, 0);
    background-position: center;
    font-size: 30px;
    padding-bottom: 25px;
    text-align: center;
}
.card-subtitle {
    padding-bottom:30px;
    font-size: 18px;
    font-style: italic;
    text-align: center;
}
.container-fluid {
    text-align: center;
}
h4 {
    color: rgb(0, 0, 0);
}
.py-4 {
    background-color: rgb(168, 167, 110);
}
.col {
    margin-top: 30px;
    margin-bottom: 30px;
}
</style>



