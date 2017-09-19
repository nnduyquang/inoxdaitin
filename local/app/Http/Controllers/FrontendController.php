<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use App\Post;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function getAllSPTrangChu()
    {
        $categories = Category::all()->sortBy('category_order');
        $news = News::all()->take(4)->sortBy('id');
        $listProduct = [];
        foreach ($categories as $key => $data) {
            $products = Product::where('category_id', '=', $data->id)->take(6)->get();
            if ($products->count() != 0) {
                array_push($listProduct, array(['category' => $data, 'products' => $products]));
            }
        }
        return view('frontend.trangchu.index', compact('listProduct', 'categories', 'news'));
    }

    public function getDetailSP($pathCateGory, $pathProduct)
    {
        $categories = Category::all()->sortBy('category_order');
        $news = News::all()->take(4)->sortBy('id');
        $product = Product::where('path', '=', $pathProduct)->first();
        return view('frontend.chitiet.index', compact('product', 'pathCateGory', 'categories', 'news'));
    }

    public function getListCategory($pathCateGory)
    {
        $categories = Category::all()->sortBy('category_order');
        $news = News::all()->take(4)->sortBy('id');
        $category = Category::where('path', '=', $pathCateGory)->first();
        $products = Product::where('category_id', '=', $category->id)->get();
        return view('frontend.sanpham.index', compact('category', 'products', 'categories', 'news'));
    }

    public function getLienHe()
    {
        $categories = Category::all()->sortBy('category_order');
        $news = News::all()->take(4)->sortBy('id');
        return view('frontend.lienhe.index', compact('categories', 'news'));
    }

    public function getGioiThieu()
    {
        $categories = Category::all()->sortBy('category_order');
        $news = News::all()->take(4)->sortBy('id');
        $post = Post::whereIn('name', ['gioithieu-contents'])->orderBy('order')->first();
        return view('frontend.gioithieu.index', compact('categories', 'news', 'post'));
    }

    public function getAllTinTuc()
    {
        $categories = Category::all()->sortBy('category_order');
        $news = News::all()->take(4)->sortBy('id');
        $newalls = News::all()->sortBy('id');
        foreach ($news as $key => $data) {
            $data->content = cat_chuoi_dai_thanh_ngan(bo_the_html_trong_chuoi($data->content), 400);
        }
        return view('frontend.tintuc.index', compact('categories', 'newalls', '$news'));
    }

    public function getDetailTinTuc($path)
    {
        $newdetais = News::where('path', '=', $path)->first();
        $news = News::all()->take(4)->sortBy('id');
        $categories = Category::all()->sortBy('category_order');
        return view('frontend.tintuc.detail', compact('categories', 'newdetais', 'news'));
    }

    public function getKetQuaTinKiem(Request $request)
    {
        $keySearch = preg_replace('/\s+/', ' ', $request->input('key-search'));
        $categories = Category::all()->sortBy('category_order');
        $news = News::all()->take(4)->sortBy('id');
        $products = Product::where('name', 'like', '%' . $keySearch . '%')->orderBy('id', 'DESC')->get();
//        $products=Product::all();
//        dd($products);
        return view('frontend.timkiem.index', compact('products', 'categories', 'news'));
    }

    public function getFrontendContentCategory()
    {
        $categories =Category::all()->sortBy('category_order');
        return view('frontend.menu.m-category', compact('categories'));
    }
}
