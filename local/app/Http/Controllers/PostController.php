<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPostGioiThieuContent(){
        $posts = Post::whereIn('name', ['gioithieu-contents'])->orderBy('order')->get();
        return view('backend.admin.posts.gioithieu', compact('posts'));
    }
    public function savePostGioiThieuContent(Request $request){
        $contentGioiThieu = $request->input('content-gioithieu');
        $post = Post::where('name', 'gioithieu-contents')->first();
        $post->content=$contentGioiThieu;
        $post->save();
        return redirect()->route('posts.gioithieu.index')
            ->with('success', 'Bài Viết Căn Hộ Lưu Thành Công');
    }
}
