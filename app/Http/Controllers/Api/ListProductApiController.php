<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
class ListProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sql = Product::all()->where('mca_borrado','===', 0);
        $products = DB::select($sql);
        return response()->json($products,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListProduct  $listProduct
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $products=Product::where('category_id', $id)->get();
        return response()->json($products,200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListProduct  $listProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListProduct $listProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListProduct  $listProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListProduct $listProduct)
    {
        //
    }
}
