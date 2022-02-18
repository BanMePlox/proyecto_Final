<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $id)
    {
        $products=Product::where('category_id', $id)->get();
        return response()->json($products,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $productº
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$name,$category_id,$price,$description, $stock,$impuesto,$descuento)
    {
        $product = Product::findOrFail($id);
        $product->name = $name;
        $product->category_id = $category_id;
        $product->price =$price;
        $product->description = $description;
        $product->stock = $stock;
        $product->impuesto = $impuesto;
        $product->descuento =$descuento;
        $product->save();
        return response()->json($product,200);
    }

    public function updatebaja($id,$mca_borrado)
    {
        $product = Product::findOrFail($id);
        $product->mca_borrado=$mca_borrado;
        $product->save();
        return response()->json($product,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
