<?php

namespace App\Http\Controllers\APIs;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::get();
       // return response()->json($products);
       return  response()->json(['data'=>ProductResource::collection($products)]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductRequest $request)
      {
       $product=new ProductResource(Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'quantity' => $request->quantity,
        ]));
         return response()->json(["data"=>$product,"message"=>"product is created"],201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $product = new ProductResource(Product::findOrFail($id));
         return response()->json(['data'=>$product],200);

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
