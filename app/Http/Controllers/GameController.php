<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{

    public function index()
    {
        $list = Game::all();
        return view('list',[
            'list'=> $list
        ]);
    }

    public function create()
    {
        return view('/games/form');
    }

    public function save(Request $request)
    {
        $game = new game();
        $game->fill($request->all());
        $game->save();
        return redirect('/list');
    }


    public function update(Request $request, $id)
    {
        $detail = Game::find($id);
        $detail->update($request->all());
        $detail->save();
        return redirect('/list');
    }

    public function edit($id)
    {
        $detail = Game::find($id);
        return view('edit',[
            'edit' => $detail
        ]);
    }

    public function delete($id)
    {
        $detail = Game::find($id);
        $detail->delete();
        return redirect('/list');
    }
}
