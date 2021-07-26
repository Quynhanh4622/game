<?php

namespace App\Http\Controllers;

use App\Models\Apartments;
use Illuminate\Http\Request;

class ApartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $list = Apartments::all();
        return view('apartments/list',[
            'list'=> $list
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        return view('apartments/create');
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {
        $apartment = new Apartments();
        $apartment->fill($request->all());
        $apartment->save();
        return redirect('apartments/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartments  $apartments
     * @return \Illuminate\Http\Response
     */
    public function show(Apartments $apartments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit($id)
    {
        $detail = Apartments::find($id);
        return view('apartments/edit',[
            'edit' => $detail
        ]);
    }

    /**
     * Update the specified resource in storage.
     *

     */
    public function update(Request $request, $id)
    {
        $detail = Apartments::find($id);
        $detail->update($request->all());
        $detail->save();
        return redirect('apartments/list');
    }

    /**
     * Remove the specified resource from storage.
     *

     */
    public function destroy($id)
    {
        $detail = Apartments::find($id);
        $detail->delete();
        return redirect('apartments/list');
    }
}
