<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\People;
use App\Phone;
use App\Order;
use App\OrderItem;
use App\Ship;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $itensPerPage = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $orders = Order::paginate($this->itensPerPage);
    }

    public function show($id)
    {
        return $orders = Order::with('ship', 'orderItem', 'people')->findorFail($id);
    }

    public function ships($id)
    {
        return $ships = Ship::findorFail($id);
    }

    public function orderItems($id)
    {
        return $orderItems = OrderItem::findorFail($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = Order::create($request->all());
        return response()->json($order, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        return response()->json($order, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return response()->json(null, 204);
    }
}
