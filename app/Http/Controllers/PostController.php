<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cloudinary;  //use宣言するのを忘れずに

class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('posts/index')->with(['posts' => $post->getByLimit()]);//$postの中身を戻り値にする。
    }
    
    public function create()
    {
        return view('/posts/create');  //create.blade.phpを表示
    }

    public function store(Request $request, Post $post)
    {
        //cloudinaryへ画像を送信し、
        $input = $request['post'];
        if($request->file('image')){ //画像ファイルが送られた時だけ処理が実行される
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input += ['image_url' => $image_url];
        }
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
   
}

