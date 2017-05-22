<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\ProductImages;
use App\Models\Colors;
use App\Models\Size;
use App\Models\Factory;
use App\Models\Categories;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ProductRequest;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $categories = DB::table('products')
                      ->join('categories', 'cate_id', '=', 'categories.id')
                      ->join('factories', 'factory_id', '=', 'factories.id')
                      ->select('products.*', 'factories.factory_name', 'categories.cate_name')->get();
       
        return view('admin.product.listproduct', compact('product', 'parent', 'categories'));
    }
    public function create()
    {
        $colors= Colors::all();
        $sizes= Size::all();
        $factories = Factory::select('id', 'factory_name')->pluck('factory_name', 'id');
        $categories = Categories::select('id', 'cate_name', 'parent_id')->pluck('cate_name', 'id');
        
        return view('admin.product.addproduct', compact('colors', 'sizes', 'factories', 'categories'));
    }
    public function edit($id)
    {
        $colors= Colors::all();
        $sizes= Size::all();
        $factories = Factory::select('id', 'factory_name')->pluck('factory_name', 'id');
        $product = Product::find($id);
        $categories = Categories::select('id', 'cate_name')->pluck('cate_name', 'id');
        
        return view('admin.product.editproduct', compact('product', 'categories', 'colors', 'sizes', 'factories'));
    }
  
    public function store(ProductRequest $request)
    {
         $product = new Product;
         $product->cate_id = $request->catparent;
         $product->product_name = $request->product_name;
         $product->price = $request->price;
         $product->factory_id = $request->factory;
         $product->price =$request->price;
         $product->saleoff =$request->saleoff;
         $product->start_sale= date('Y-m-d', strtotime($request->start_sale));
         $product->end_sale= date('Y-m-d', strtotime($request->end_sale));
         $product->factory_id = $request->factory;
         $product->size_id = serialize($request->size) ;
         $product->color_id = serialize($request->color);
         $product->description = $request->description;
         $product->content = $request->content;
         $product->status = $request->status;
         $product->product_image = $request->product_image;
         $product ->save();

         return redirect()->route('product-list.index')
            ->with(['flash_level' => 'primary', 'flash_message' =>trans('backend.addproductsuccess') ]) ;
    }
    public function destroy($id)
    {
          $product = Product::findOrFail($id);
          $product->delete();

          return redirect()->route('product-list.index')
            ->with(['flash_level' => 'primary', 'flash_message' =>trans('backend.deleteproductsuccess')]) ;
    }
    public function update($id, Request $request)
    {
         $product = Product::find($id);
         $product->cate_id = $request->catparent;
         $product->product_name = $request->product_name;
         $product->price = $request->price;
         $product->factory_id = $request->factory;
         $product->price =$request->price;
         $product->saleoff =$request->saleoff;
         $product->start_sale= date('Y-m-d', strtotime($request->start_sale));
         $product->end_sale= date('Y-m-d', strtotime($request->end_sale));
         $product->factory_id =  $request->factory;
         $product->size_id = serialize($request->size);
         $product->color_id = serialize($request->color);
         $product->description = $request->description;
         $product->content = $request->content;
         $product->status = $request->status;
         $product->product_image = $request->product_image;
         $product ->save();

          return redirect()->route('product-list.index')
            ->with(['flash_level' => 'primary', 'flash_message' =>trans('backend.updateproductsuccess')]) ;
    }
    public function show(Request $request)
    {
          $product = Product::where('id', $request->id)
            ->select('product_name', 'product_image', 'price', 'saleoff', 'start_sale', 'end_sale', 'id', 'created_at', 'updated_at', 'status', 'size_id', 'color_id')
            ->get();

         return view('admin.product.viewproduct', compact('product'));
    }
    public function frontend(Request $request)
    {
        $category = Categories::where('parent_id', 0);
        $cate_parent = Categories::where('parent_id', $request->id);

        return view('frontend.blocks.section-menu', compact('category', 'cate_parent'));
    }
}
