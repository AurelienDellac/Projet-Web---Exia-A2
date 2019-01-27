<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\CategoriesController;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("addProduct", ["categories" => CategoriesController::index()]);;
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
            'label' => 'String|required|max:45',
            'description' => 'String|required|max:500',
            'price' => 'Numeric|required',
            'category' => 'Numeric|required',
            'image' => 'image|max:1000',
            'stock' => 'Numeric|required'
        ]);

        $image = $request->file('image');
        if ($image) {
            $image = $image->store('produits', 'images');
        }

        $data = $request->all();
        Product::create([
            'label' => $data['label'],
            'description' => $data['description'],
            'price' => $data['price'],
            'id_category' => $data['category'],
            'img_src' => $image,
            'stock' => $data['stock']
        ]);

        return redirect("boutique");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('product');
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
