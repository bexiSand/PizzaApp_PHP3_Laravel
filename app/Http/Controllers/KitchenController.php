<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KitchenController extends Controller
{

    function getKitchenView(Request $request) {

       
        //Kolla om det kommer en post
         if ($request ['state_id']) {
            //Hämta order från databasen
            $selected_order = DB::table('pizza_orders')->where('order_id', '=', $request->input('state_id'))->first();
       
            //Beroende på orderns state sätts nytt state
            $new_state = $selected_order->state;
            if ($selected_order->state == 0) {
                $new_state = 1;
            } else if ($selected_order->state == 1) {
                $new_state = 2;
            }

            //Uppdatera state mot databasen
            DB::table('pizza_orders')->where('order_id', '=', $request->input('state_id'))->update(['state'=>$new_state]);
        }

        $order_state = DB::table('pizza_orders')->get();

        $join_pizzas = DB::table('pizza_orders')
            ->leftJoin('pizza_orders_pizzas', 'pizza_orders_pizzas.order_id', '=', 'pizza_orders.order_id')
            ->join('pizzas', 'pizza_orders_pizzas.pizza_id', '=', 'pizzas.id')
            ->get();

            

        return view('kitchen', [ "states"=>$order_state, "join_pizzas"=>$join_pizzas ]);
    }

}
