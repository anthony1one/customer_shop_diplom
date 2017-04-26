<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Product;

class PagesController extends Controller
{
    public function getIndex(){
    	return view('pages.welcome');
    }

    public function getProducts(){

        if (isset($_GET['category'])){
            
            if (isset($_GET['sub'])){
                $products = Product::where('category', '=', $_GET['category'])
                                    ->where('subcategory', '=', $_GET['sub'])
                                    ->paginate(6);   
            }
            else {
                $products = Product::where('category', '=', $_GET['category'])->paginate(6);
            }

        }
        else {
            $products = Product::paginate(6);
        }

    	return view('pages.products_info')->with('products', $products);
    }

    public function getProduct($product_slug){
    	$product = Product::where('name_slug', '=', $product_slug)->first();
        return view('pages.product')->with('product', $product);
    }

    public function getAbout(){
    	return view('pages.about');
    }

    public function getShops(){
    	return view('pages.shops');
    }

    public function getBasket(){
    	return view('pages.basket');
    }
}
