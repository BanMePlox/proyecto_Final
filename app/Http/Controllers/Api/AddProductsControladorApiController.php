<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AddProductsControladorApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $product = new Product();
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->description = $request->get('description');
        $product->stock = $request->get('stock');
        $product->file_path = $request->get('file_path');
        $product->impuesto = $request->get('impuesto');
        $product->descuento = $request->get('descuento');
        $product->category_id = $request->get('category_id');
        $product->save();
        return response()->json($product,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddProducts  $addProducts
     * @return \Illuminate\Http\Response
     */
    public function show(AddProducts $addProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddProducts  $addProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddProducts $addProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddProducts  $addProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddProducts $addProducts)
    {
        //
    }
}
