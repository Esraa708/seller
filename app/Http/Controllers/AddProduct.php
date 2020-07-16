<?php

namespace App\Http\Controllers;

use App\Attribute;
use App\Http\Requests\AddProductValidation;
use App\Product;
use App\ProductImg;
use Illuminate\Http\Request;

class AddProduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::with('attributes')->get();//or paginate
        dd($products);
        return response([
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return redirect()->route('/selectcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddProductValidation $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->brand = $request->brand;
        $product->description = $request->description;
        $product->sku = $request->sku;
        $product->countery = $request->countery;
        $product->quantity = $request->quantity;
        $product->basic_color = $request->basic_color;
        $product->save();
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('avatars');
                $newImage = new ProductImg(['img' => $path]);
                $product->imgs()->save($newImage);
            }
        }

        if ($request->has('weight')) {
            $atrribute = Attribute::where('name', 'weight')->first();

            $product->categories()->attach($atrribute->subCategories[0]->category->id);
            $product->attributes()->attach($atrribute->id, ['value' => $request->weight]);
        }

        if ($request->has('matrial')) {
            $atrribute = Attribute::where('name', 'matrial')->first();
            $product->categories()->attach($atrribute->subCategories[0]->category->id);
            $product->attributes()->attach($atrribute->id, ['value' => $request->matrial]);
        }

        if ($request->has('dimensions')) {
            $atrribute = Attribute::where('name', 'dimensions')->first();
            $product->categories()->attach($atrribute->subCategories[0]->category->id);
            $product->attributes()->attach($atrribute->id, ['value' => $request->dimensions]);
        }
        return response('product added successfully', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id)->attributes;
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
