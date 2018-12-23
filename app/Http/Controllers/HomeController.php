<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::all();
        $data = [
            "products" => $products,
        ];
        return view('home',$data);
    }

    public function create(){
        $categories = Category::all();
        $datacate = [
            "items" => $categories,
        ];
        return view('create',$datacate);
    }

    public function edit($product_id){
        //หน้า edit ข้อมูลในฐานข้อมูล
        $categories = Category::all();
        $product = Product::find($product_id);

        $data = [
            "items" => $categories,
            "product" => $product
        ];

        return view('edit',$data);
    }

    public function update(){
        //การ update ข้อมูลในฐานข้อมูล
//        return request()->all();
        $product = Product::find(request()->product_id);
        $product->product_name = request()->product_name;
        $product->category_id = request()->category_id;
        $product->save();
        return redirect('/');
    }
    public function store(){
//        return $_POST['name'];
//        return request()->all();
        //การ insert ข้อมูลลงในฐานข้อมูล
        $product = new Product();
        $product->product_name = \request()->product_name;
        $product->category_id = \request()->category_id;
        $product->save();
        return redirect('/');
    }
    public function login(){
        return view('login');
    }
}
