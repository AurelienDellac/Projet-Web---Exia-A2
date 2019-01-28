<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Ordered;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("basket");
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
        $validatedData = $request->validate([
            'quantity' => 'Numeric|nullable',
            'submit' => 'Numeric|required',
        ]);

        $data = $request->all();
        $existingOrder = Order::where("id_product",  $data['submit'])
                                ->where("id_user", Auth::user()->id)
                                ->where("date", null)->first();

        if($data["quantity"] == null) {
            $data["quantity"] = 1;
        }

        if($existingOrder == null) {
            Order::create([
                'quantity' => $data['quantity'],
                'id_product' => $data['submit'],
                'id_user' => Auth::user()->id,
            ]);
        } else {
            $this->updateQuantity($data['quantity'], $existingOrder->id);
        }
        
        return \redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $date)
    {
        return view('userBasket');
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

    }

    public function updateQuantity($quantity, $id)
    {
        $order = Order::findOrFail($id);

        $order->quantity = $order->quantity + $quantity;
        $order->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);
        return redirect()->route("showBasket");
    }

    public function confirm() {
        $orders = Order::where("id_user", Auth::user()->id)->where("date", null)->update(['date' => now()]);
        Mail::to("aurelien.dellac@gmail.com")->send(new Ordered(Auth::user(), now()));
        return redirect("boutique");
    }
}
