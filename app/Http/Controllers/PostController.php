<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cloudinary;  //use宣言するのを忘れずに
use App\Models\User;

class PostController extends Controller
{
    public function index(Request $request, Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('posts/index')->with(['posts' => $post->getByLimit()]);//$postの中身を戻り値にする。
        
         // ユーザー一覧をページネートで取得
        $users = User::paginate(20);
        $search=$request->input('search');
        $query = User::query();
       // もし検索フォームにキーワードが入力されたら
        if ($search) {

            // 全角スペースを半角に変換
            $spaceConversion = mb_convert_kana($search, 's');

            // 単語を半角スペースで区切り、配列にする（例："山田 翔" → ["山田", "翔"]）
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);


            // 単語をループで回し、ユーザーネームと部分一致するものがあれば、$queryとして保持される
            foreach($wordArraySearched as $value) {
                $query->where('name', 'like', '%'.$value.'%');
            }
            $users = $query->paginate(20);

        }

        // ビューにusersとsearchを変数として渡す
        return view('search')
            ->with([
                'users' => $users,
                'search' => $search,
                'post' => $post,
            ]);
        
    }
    
<<<<<<< HEAD
=======
    
>>>>>>> origin/master
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

