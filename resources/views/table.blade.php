

  Hellow Darkness my old friend :

<<<<<<< HEAD
<form method="POST" action="{{ @route('store.li') }}">
=======
<form method="POST" action="@route('store.li', [Auth::user()->id])">
@csrf
    <input type="text" name="title" id="title">
    <input type="submit" value="+">

</form>






<div class="container-fluid">
    @foreach ($card as $item)
        <div class="row">
            <div class="col-3-sm">
<<<<<<< HEAD
                yyooyoyoy

=======
                <li>{{ $item->name }}</li>
>>>>>>> 06b89578c387f5e16c2ea62975bba9e032c40c87
            </div>
        </div>
    @endforeach
</div>

<form method="POST" action="@route('store.card')">
>>>>>>> ca6bce660e777af341f27d116c404387b968693d
    @csrf
    <input type="number" name="user_id">
    <input type="submit" value="Envoyer">
</form>
<table>
    <tr>
        <td>

        </td>
    </tr>
</table>


