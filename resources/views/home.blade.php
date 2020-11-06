@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @foreach ( $tables as $table ) --}}

{{-- <h4> {{ Auth::user()->name }} </h4>

<h3> {{ $table->title }} </h3>

 <div class='container-fluid  mld-body'>
    <h1 class='mld-titre'> yoyoyoyoyo </h1>
    <div class='container'>
        <div class='row mld-div-card'>

      <div class='col-sm-5 mld-pos-card' >
                <form >
                 <div class='mld-card'>
                    <div class='gneu'></div>
                    <br><a type='submit' class='mld-card-a' name='$table' value='Voir' href=''>Voir</a><br><div class='gneu'></div>
                    <input type='hidden' value=".$table['id']." name='id'>
                </div> --}}
                <form action="@route('store.table')" method="POST">


                    @csrf

                    <label for="title">Titre</label>
                    <input id="title" name="title" type="text">

                    {{-- <br>
                    <label for="message">Message</label>
                    <input id="message" name="message" type="text">--}}

                    <br>
                    <input type="submit" value=">>>">
                </form>
            </div>
            {{-- <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Afficher</a>
                  <a href="#" class="card-link">Modifier</a>
                  <a href="#" class="card-link">supprimer</a>
                </div>
              </div> --}}

              {{-- @endforeach --}}
   </div>
    </div>
</div>




@endsection

{{-- {{—— @extends('layouts.app')

@section('content')
    <div class='container'>
        <div class="row">
            <div class="col">
                <h3>
                Vos informations :
                </h3>
                <h4>
                    Votre nom : {{ Auth::user()->name }}

                <br>

                    Votre email : {{ Auth::user()->email }}
                </h4>
            </div>

            <div class="col">

                <h3>
                    Entrez de nouvelles valeurs pour modifier :
                </h3>
                <h4>
                    <form method="post" action="@route('store.table')">

                        <label for="name">Nom : </label>
                        <input type="text" name="name" id="name">

                        <br>

                        <label for="email">Email :</label>
                        <input type="text" name="email" id="email">

                        <br>
                    <input type="submit" value="modifier">
                    </form>
                </h4>
            </div>
        </div>
    </div>
@endsection--}}




