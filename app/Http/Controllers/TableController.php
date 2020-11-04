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
    public function delli(Request $request)
    {

    }

    public function modifli(Request $request)
    {

    }

    public function storecard(Request $request)
    {
        $card= new Card();
        $card->title = $request->title;
        $card->message = $request ->message;
        $card->save();
    }
    public function delcard(Request $request)
    {

    }

    public function modifcard(Request $request)
    {

    }

    public function storecom(Request $request)
    {
        $com= new Com();
        $com->title = $request->title;
        $com->message = $request ->message;
        $com->save();


    }
    public function delcom(Request $request)
    {

    }

    public function modifcom(Request $request)
    {

    }
}
