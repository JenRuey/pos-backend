<?php

namespace App\Http\Controllers;

use App\OrderItems;
use App\Orders;
use App\Transactions;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(['data' => "Welcome to orders API!"], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Orders([
            "reference_no" => $request->get('referenceNo'),
            "tax" => $request->get('tax'),
            "service_charge" => $request->get('serviceCharge'),
            "total_amount_cents" => $request->get('totalAmount'),
            "is_walkin" => true,
            "status" => "Completed",
        ]);
        $order->save();

        $transaction = new Transactions([
            "payment_method" => $request->get('paymentMethod'),
            "status" => "Completed",
            "paid_amount_cents" => $request->get('paidAmount')
        ]);
        $order->transactions()->save($transaction);


        $orderItems = [];
        foreach ($request->get('items') as $item) {
            array_push($orderItems, new OrderItems([
                "cost_per_item" => $item['cost'],
                "product_name" => $item['product'],
                "quantity" => $item['quantity'],
            ]));
        }
        $order->orderItems()->saveMany($orderItems);

        return response()->json(['data' => "Order saved!"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
