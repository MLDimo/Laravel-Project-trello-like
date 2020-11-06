<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Card;
use App\Com;
use App\Liste;


class TableController extends Controller
{

    public function table()
    {
        // for each table id
        return view('table');
    }

    public function storeli(Request $request)
    {
        $list = new Liste();
        $list->title = $request->title;
        $list->save();
    }

    public function delli(Request $request, $id)
    {
        $request->user()->statuses()->findOrFail($id)->delete();
    }

    public function renameli(Request $request, $id)
    {
        $id = auth()->id();
        $list = Liste::find($id);
        $list->title = $request->title;
        $list->save();
    }

    public function storecard(Request $request)
    {
        $card = new Card();
        $card->title = $request->title;
        $card->content = $request->content;
        $card->save();
    }
    public function delcard(Request $request, $id)
    {
        $request->user()->statuses()->findOrFail($id)->delete();
    }

    public function renamecard(Request $request, $id)
    {
        $id = auth()->id();
        $card = Card::find($id);
        $card->title = $request->title;
        $card->content = $request->content;
        $card->save();
    }

    public function storecom(Request $request)
    {
        $com = new Com();
        $com->title = $request->title;
        $com->message = $request->message;
        $com->save();
    }
    public function delcom(Request $request, $id)
    {
        $request->user()->statuses()->findOrFail($id)->delete();
    }

    public function renamecom(Request $request, $id)
    {
        $id = auth()->id();
        $com = Com::find($id);
        $com->title = $request->title;
        $com->message = $request->message;
        $com->save();
    }
}
