<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("addProduct", ["categories" => CategoriesController::index()]);
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
            'image' => 'Image|max:1000|nullable',
            'stock' => 'Numeric|required'
        ]);

        $image = $request->file('image');
        $data = $request->all();

        if ($image) {
            $image = $image->store('produits', 'images'); 
            Product::create([
                'label' => $data['label'],
                'description' => $data['description'],
                'price' => $data['price'],
                'id_category' => $data['category'],
                'img_src' => $image,
                'stock' => $data['stock']
            ]);
        } else {
            Product::create([
                'label' => $data['label'],
                'description' => $data['description'],
                'price' => $data['price'],
                'id_category' => $data['category'],
                'stock' => $data['stock']
            ]);
        }
        
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
        return view('product', ["id" => $id]);
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
        $file = Product::findOrFail($id)->img_src;
        Storage::disk('images')->delete($file);
        Product::destroy($id);
        return redirect("boutique");
    }
}
