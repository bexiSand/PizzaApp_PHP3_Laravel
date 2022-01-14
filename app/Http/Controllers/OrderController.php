<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PizzaOrder;

class Order {
    public $order_id;

function __construct($order_id) {
        $this->order_id = $order_id;
    }

}

class OrderController extends Controller
{
    public function store(Request $request) { 
        $order_id = DB::table('pizza_orders')-> insertGetId(array('order_id' => 0));
      
        //DB::insert('INSERT INTO pizza_orders(order_id) VALUES (?)', [$request->input('order_id')]);
        //$order = PizzaOrder::orderBy('order_id', 'desc')->first();
       
        DB::table('pizza_orders_pizzas')-> insertGetId(array('order_id' => $order_id, 'pizza_id' => $request->input('pizza_id')));

        return view('order', compact('order_id'));
       
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
