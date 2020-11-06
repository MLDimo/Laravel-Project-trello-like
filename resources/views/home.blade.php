@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
                <form  method="post" action="@route('store.table')">
                    @csrf
                    <label for="title"><h4> Créer un nouveau Tableau :</h4></label>
                    <input id="title" name="title" type="text" placeholder="Titre">
                    <input type="submit" value="+">
                </form>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        @foreach ($tables as $item)
            <div class="col">
                <h4> {{ $item->title }} </h4>
            </div>
        @endforeach
    </div>
</div>

@endsection




