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
 <div class='container-fluid  mld-body'>
    <h1 class='mld-titre'> yoyoyoyoyo </h1>
    <div class='container'>
        <div class='row mld-div-card'>


        @foreach ( $tables)

{{-- regler soucis foreach + faire un input dans formulaires, avec @route. --}}

    <div class='col-sm-5 mld-pos-card' >
                <form >
                 <div class='mld-card'>
                    <div class='gneu'></div>

                    <h3>{{ $table->title }}</h3>
                    <br><a type='submit' class='mld-card-a' name='$table' value='Voir' href=''>Voir</a><br><div class='gneu'></div>
                    <input type='hidden' value=".$table['id']." name='id'>


                </div>
                </form>
            </div>
            @endforeach
  </div>
    </div>
</div>


@endsection
