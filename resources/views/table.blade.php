@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        @foreach ($list as $item)
        <div class="col-3-sm">

        </div>
        @endforeach
    </div>
</div>

<form method="POST" action="@route('store.li', [Auth::user()->id])">
@csrf
    <input type="text" name="title" id="title">
    <input type="submit" value="+">

</form>






<div class="container-fluid">
    @foreach ($card as $item)
        <div class="row">
            <div class="col-3-sm">

            </div>
        </div>
    @endforeach
</div>

<form method="POST" action="@route('store.card')">
    @csrf
    <label for="title" > Titre </label>
    <input type="text" name="title" id="title">

    <input type="text" name="content" id="content" placeholder="Entrez le contenu de cette card">

    <input type="submit" value="+">

</form>


<form method="POST" action="@route('store.com')">
@csrf
    <label for="title" > Titre </label>
    <input type="text" name="title" id="title">

    <input type="text" name="message" id="message" placeholder="Entrez votre commentaire">

    <input type="submit" value="ajouter">

</form>
@endsection
