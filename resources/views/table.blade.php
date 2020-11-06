@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        @foreach ($list as $item)
        <div class="col">
            {{ $item->title }}
        </div>
    @endforeach
    </div>
</div>

<form method="post" action="@route('store.li')">

    @csrf
    <label for="title">Titre de votre Liste</label>
    <input type="text" name="title" id="title">
    <input type="submit" value="+">

</form>






<div class="container-fluid">
     @foreach ($card as $item)
        <div class="row">
            <div class="col-3-sm">
                {{ $item->title }}
            </div>
        </div>
    @endforeach
</div>

<form method="post" action="@route('store.card')">
    @csrf
    <label for="title" > Titre de votre Card</label>
    <input type="text" name="title" id="title">

    <input type="text" name="content" id="content" placeholder="Entrez le contenu de cette card">

    <input type="submit" value="+">

</form>


<form method="post" action="@route('store.com')">
@csrf
    <label for="title" > Titre  de votre Com</label>
    <input type="text" name="title" id="title">

    <input type="text" name="message" id="message" placeholder="Entrez votre commentaire">

    <input type="submit" value="ajouter">

</form>
@endsection
