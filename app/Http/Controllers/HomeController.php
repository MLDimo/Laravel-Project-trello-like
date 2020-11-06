<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Table;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'tables' => Table::all(),
        ]);
    }

    public function store(Request $request)
    {
        $table = new Table();
        $table->title = $request->title;
        $table->save();
        return back();
    }
    public function del(Request $request, $id)
    {
        $request->table()->statuses()->findOrFail($id)->delete();
        return back();
    }

    public function rename(Request $request, $id)
    {
        $id = auth()->id();
        $table = Table::find($id);
        $table->title = $request->title;
        $table->save();
        return back();
    }
}
