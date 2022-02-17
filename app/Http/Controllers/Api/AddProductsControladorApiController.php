<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Hash;
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
        if ($request->hasFile('file_path')) {
            $file = request()->file('file_path');
            $hash =  Hash::make($product->name);
            $directoryImg = $file->storeAs('/public/Imagenes',$hash. '.jpg');
            $product->file_path = $hash;
        } else {
            $product->file_path = 'NULL';
        }
// $request->file->hashname(), file_path = $request->file->hashname();
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->description = $request->get('description');
        $product->stock = $request->get('stock');
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
    public function show($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json($product,201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddProducts  $addProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddProducts  $addProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
