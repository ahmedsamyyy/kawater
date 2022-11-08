<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Providers\productOrderevent;
use Illuminate\Http\Request;
use Pusher\Pusher;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $product=Product::find(1);
       $string='hello pusher';
       $driver=4;
       $options = array(
        'cluster' => 'eu',
        'useTLS' => true,

       );
       $data=[
        'string'=>$string,
        'driver'=>$driver,
       ];
       $pusher= new \Pusher\Pusher(
        '1475038',
        'd533925544044f9f3d82',
        '44fcd885ce2d75a0fb22',
       $options);
       $pusher->trigger('driver-', 'new-order-assigned', [

        'message' => $string

      ]);
       event(new productOrderevent($data));

       return 'done';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
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




    // public function search(Request $request){
    //     $products=Product::query();
    //     if ($request->keyword) {
    //         $keyword=$request->keyword;

    //        $query= $products->where('name','like','%'.$keyword.'%');
    //        return $query;
    //     //     ->orWhere('description','like','%'.$keyword.'%')
    //     //     ->orWhereHas('brand',function($item) use($keyword){
    //     //         $item->where('name','like','%'.$keyword.'%');
    //     //     })->orWhereHas('category',function($cat)use($keyword){
    //     //         $cat->where('name','like','%'.$keyword.'%');
    //     //     });
    //     //    $result = $query->get();
    //       return response()->json($query);

    //     }
// }
}
