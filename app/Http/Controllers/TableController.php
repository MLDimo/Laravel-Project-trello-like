<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\List;
use App\Card;
use App\Com;


class TableController extends Controller
{

    public function table()
    {
        return view('table');
    }
    public function storeli(Request $request)
    {
        $list= new List();
        $list->title = $request->title;

    }
    public function delli(Request $request, $id)
    {
        $request->user()->statuses()->findOrFail($id)->delete();
    }

    public function renameli(Request $request, $id)
    {
        $list = App\List::find($id);
        $list->title = $request->title;
        $list->save();
    }

    public function storecard(Request $request)
    {
        $card= new Card();
        $card->title = $request->title;
        $card->message = $request->message;
        $card->save();
    }
    public function delcard(Request $request ,$id)
    {
        $request->user()->statuses()->findOrFail($id)->delete();
    }

    public function renamecard(Request $request, $id)
    {
        $card = App\Card::find($id);
        $card->title = $request->title;
        $card->message = $request->message;
        $card->save();
    }

    public function storecom(Request $request)
    {
        $com= new Com();
        $com->title = $request->title;
        $com->message = $request ->message;
        $com->save();


    }
    public function delcom(Request $request,$id)
    {
        $request->user()->statuses()->findOrFail($id)->delete();
    }

    public function renamecom(Request $request, $id)
    {
        $com = App\Com::find($id);
        $com->title = $request->title;
        $com->message = $request->message;
        $com->save();
    }
}
