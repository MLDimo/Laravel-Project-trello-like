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
            <div class="col-sm">
                <div class="row">
                    <h4> {{ $item->title }} </h4>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <form method="post" action="@route('rename.table')">
                        <input type="submit" value="ø">
                        </form>
                    </div>
                    <div class="col-sm">
                        <form method="post" action="@route('del.table')">
                        <input type="submit" value="x">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection




