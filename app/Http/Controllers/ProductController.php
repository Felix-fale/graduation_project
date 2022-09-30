<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::latest()->paginate(5);

        // return view('home', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);

        $users = User::where('id', 3)->get();
        // $users = User::where('id', 7)->get();
        // dd($users);
        return view('home', [
            'users' => $users
        ]);
    }
    // public function home()
    // {
    //     $products = Product::all();
    //     // dd($products);
    //     return view('home', [
    //         'products' => $products
    //     ]);

    //     // $products = Product::latest()->paginate(5);

    //     // return view('home', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    // }

    public function indexaccueil()
    {
        $products = Product::all();
        // dd($products);
        return view('products.index', [
            'products' => $products
        ]);
    }

    public function montre()
    {
        $categories = Category::where('id', 1)->get();
        // dd($categories);
        return view('montre', [
            'categories' => $categories
        ]);
    }
    public function chaussure()
    {
        $categories = Category::where('id', 2)->get();
        // dd($categories);
        return view('chaussure', [
            'categories' => $categories
        ]);
    }
    public function sac()
    {
        $categories = Category::where('id', 3)->get();
        // dd($categories);
        return view('montre', [
            'categories' => $categories
        ]);
    }
    public function voiture()
    {
        $categories = Category::where('id', 4)->get();
        // dd($categories);
        return view('montre', [
            'categories' => $categories
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>  'required',
            'description'         =>  'required',
            'price'         =>  'required',
            'image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'numero'         =>  'required',
            'category_id' => 'required',
            'user_id' => 'required'

        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $file_name);

        $products = new Product;

        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->image = $file_name;
        $products->numero = $request->numero;
        $products->category_id = $request->category_id;
        $products->user_id = $request->user_id;

        $products->save();

        return redirect()->route('home')->with('success', 'Le produit a été ajouter avec succes.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product  $product)
    {
        // dd($products);
        return view('show', compact('product'));
    }

    public function info($id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('infoProduit', compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product  $product)
    {
        // $products = Product::find($id);
        return view('edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product  $product)
    {
        $request->validate([
            'name'          =>  'required',
            'description'         =>  'required',
            'price'         =>  'required',
            'image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'numero'         =>  'required',
            // 'category_id' => 'required'
        ]);

        $image = $request->hidden_image;

        if ($request->image != '') {
            $image = time() . '.' . request()->image->getClientOriginalExtension();

            request()->image->move(public_path('images'), $image);
        }

        $product = Product::find($request->hidden_id);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $image;
        $product->category_id = $request->category_id;
        $product->numero = $request->numero;
        $product->save();

        return redirect()->route('home')->with('success', 'Product Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product  $product)
    {
        $product->delete();

        return redirect()->route('home')->with('success', 'Product Data deleted successfully');
    }
}
