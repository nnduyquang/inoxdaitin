<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::orderBy('id', 'DESC')->paginate(5);
        return view('backend.admin.product.index', compact('products'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all()->sortBy('category_order');
        return view('backend.admin.product.create', compact('roles','categories'));
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
        $name = $request->input('name');
        $content = $request->input('content-product');
        $productOrder=$request->input('product_order');
        if($productOrder){
            $product->product_order = $productOrder;
        }else{
            $product->product_order = 1;
        }
        $isActive = $request->input('product_is_active');
        $idCategory=$request->input('idCategory');
        if ($isActive) {
            $product->isActive = 1;
        } else {
            $product->isActive = 0;
        }
        $image = $request->input('image');
        $image = substr($image, strpos($image, 'images'), strlen($image) - 1);
        $product->name = $name;
        $product->path = chuyen_chuoi_thanh_path($name);
        $product->content = $content;
        $product->image = $image;
        $product->category_id=$idCategory;
        $product->user_id = Auth::user()->id;
        $product->save();
        return redirect()->route('product.index')
            ->with('success', 'Tạo Mới Thành Công Sản Phẩm');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::all()->sortBy('category_order');
        $product = Product::find($id);
        return view('backend.admin.product.edit', compact('product','categories'));
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
        $product = Product::find($id);
        $name = $request->input('name');
        $content = $request->input('content-product');
        $productOrder=$request->input('product_order');
        if($productOrder){
            $product->product_order = $productOrder;
        }else{
            $product->product_order = 1;
        }
        $isActive = $request->input('product_is_active');
        $idCategory=$request->input('idCategory');
        if ($isActive) {
            $product->isActive = 1;
        } else {
            $product->isActive = 0;
        }
        $image = $request->input('image');
        $image = substr($image, strpos($image, 'images'), strlen($image) - 1);
        $product->name = $name;
        $product->path = chuyen_chuoi_thanh_path($name);
        $product->content = $content;
        $product->image = $image;
        $product->category_id=$idCategory;
        $product->user_id = Auth::user()->id;
        $product->save();
        return redirect()->route('product.index')
            ->with('success', 'Cập Nhật Thành Công sản Phẩm');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')
            ->with('success', 'Đã Xóa Thành Công');
    }
    public function search(Request $request)
    {
        $keywords = preg_replace('/\s+/', ' ', $request->input('txtSearch'));
        $products = Product::where('name', 'like', '%' . $keywords . '%')->orderBy('id', 'DESC')->paginate(5);
        return view('backend.admin.product.index', compact('products', 'keywords'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
