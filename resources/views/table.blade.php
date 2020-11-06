@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col">

            <form method="post" action="@route('store.li')">

                @csrf
                <label for="title"><h2> Ajouter une nouvelle liste  : </h2></label>
                <input type="text" name="title" id="title" placeholder="Titre">
                <input type="submit" value="+">

            </form>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        @foreach ($list as $item)
        <div class="col">
            <div class="row">
                <div class="col">
                    <h3> {{ $item->title }} </h3>
                </div>
            </div>
            @foreach ($card as $item)
            <div class="row">
                <div class="col">
                    <h4>   {{ $item->title }} </h4>
                    <button type="button" class="btn" data-toggle="modal" data-taget="">+</button>
                    {{-- quand on click sur + on ouvre le from add com suivant
                        <form method="post" action="@route('store.com')">
                            @csrf
                            <label for="title" > Titre  de votre Com</label>
                            <input type="text" name="title" id="title">

                            <input type="text" name="message" id="message" placeholder="Entrez votre commentaire">

                            <input type="submit" value="ajouter">

                        </form>
                        --}}
                       <div class="row">
                           <div class="col-sm">
                            <form method="post" action="@route('del.card'),['cardId' => $card->id]">
                                <input type="submit" value="x">
                                </form>
                           </div>
                            <div class="col-sm">
                                <form method="post" action="@route('rename.card')">
                                    <input type="submit" value="ø">
                                </form>
                            </div>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col">
                   <p> {{ $item->message }}<p>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col">
                <form method="post" action="@route('store.card')">
                    @csrf

                    <input type="text" name="title" id="title" placeholder="Titre">

                    <input type="text" name="content" id="content" placeholder="Entrez le contenu de cette card">

                    <input type="submit" value="+">

                </form>
            </div>
        </div>

        </div>
    @endforeach
    </div>
</div>






<form method="post" action="@route('store.com')">
    @csrf
        <label for="title" > Titre  de votre Com</label>
        <input type="text" name="title" id="title">

        <input type="text" name="message" id="message" placeholder="Entrez votre commentaire">

        <input type="submit" value="ajouter">

    </form>





@endsection
