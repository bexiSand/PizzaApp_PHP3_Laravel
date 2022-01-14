<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pizza {
    public $id;
    public $type;
    public $price;

    function __construct($type, $price) {
        $this->type = $type;
        $this->price = $price;
    }
}

class PizzaController extends Controller
{
    

    function getPizzasView(Request $request) {
        $pizzas = DB::table('pizzas')->get();
        
        $pizza_id = $request->input('pizzaid');

        $pizza = DB::table('pizzas')->where('id', '=', $pizza_id)->first();

        return view('pizzas', ['pizzas'=>$pizzas, 'selected_pizza'=>$pizza]);
    }

    function getPizzaView(Request $request) {
        DB::table('pizza_orders')
        ->leftJoin('pizza_orders_pizzas', 'pizza_orders_pizzas.order_id', '=', 'pizza_orders.order_id')
        ->join('pizzas', 'pizza_orders_pizzas.pizza_id', '=', 'pizzas.id')
        ->get();

        $pizza_id = $request->input('pizzaid');

        $pizza = DB::table('pizzas')->where('id', '=', $pizza_id)->first();


        return view('pizza', ['selected_pizza'=>$pizza]);
    }

    /*function store() {
        return view('pizza');
    }*/

     
}


