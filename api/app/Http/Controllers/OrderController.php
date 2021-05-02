<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Order::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator($request->all(), [
            'status' => 'required',
            'amount' => 'required',
            'total_amount' => 'required',
            'delevery_adresse' => 'required',
            'delivery_price' => 'required',
            'user_id' => 'required',
            'customer_id' => 'required',
            'delevery_id' => 'required'
        ]);

        if ($validation->fails()) {
            return response([
                'status' => 'error',
                'errors' => errorsToArray($validation)
            ], 422);
        }

        $order = new Order();
        $order->status = $request->status;
        $order->amount = $request->amount;
        $order->total_amount = $request->total_amount;
        $order->delivery_adresse = $request->delivery_adresse;
        $order->delivery_price = $request->delivery_price;
        $order->user_id = $request->user_id;
        $order->customer_id = $request->customer_id;
        $order->delevery_id = $request->delevery_id;

        // $user->roles()->sync([1 => ['expires' => true], 2, 3]);

        if ($order->save()) {
            $order->products()->sync($request->order_items);
            return response([
                'status' => 'success',
                'message' => 'Commande ajouté avec succès !'
            ], 200);
        } else {
            return response([
                'status' => 'error',
                'errors' => ['Une erreur est survenu lors de l\'enregistrement']
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Order::find($id);
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
        $order = Order::find($id);
        $order->update($request->all());

        return $order;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Order::destroy($id);
    }
}
