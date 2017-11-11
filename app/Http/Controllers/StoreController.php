<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class StoreController extends Controller
{
  public function index()
  {
   
     $products = Product::all();
    //dd($products);
    return view('store.index', compact('products'));
    
  }
    
}
