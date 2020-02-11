<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use App\Http\Requests\PeopleFormRequest;

class PeopleController extends Controller
{
    private $itensPerPage = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = People::paginate($this->itensPerPage);

        return view('people.index', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $person = new People();
        return view('people.create', compact('person'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeopleFormRequest $request)
    {
        $person = People::create($request->all());
        return redirect()->route('people.index')->with('success','Peson created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(People $person)
    {
        return view("people.edit", compact("person"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PeopleFormRequest $request, People $person)
    {
        $person->update($request->all());
        return redirect()->route('people.index')->with('success','Person Edit was successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $person)
    {
        $person->delete();
        return redirect()->route('people.index')->with('success',"{$person->name} wasdeleted successfully!");
    }
}
