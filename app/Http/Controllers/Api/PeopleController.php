<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\People;
use App\Phone;
use App\Order;
use Illuminate\Http\Request;
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
        return $people = People::paginate($this->itensPerPage);
    }

    public function show($id)
    {
        return $people = People::with('phones', 'orders')->findorFail($id);
    }

    public function personPhones($id)
    {
        return $phones = Phone::findorFail($id);
    }

    public function personOrders($id)
    {
        return $orders = Order::findorFail($id);
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
        return response()->json($person, 201);
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
        return response()->json($person, 200);
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
        return response()->json(null, 204);
    }
}
