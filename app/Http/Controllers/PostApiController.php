<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostApiController extends Controller
{
    public function index(){

        $posts= Post::paginate(5);
        return response()->json([
           'data' => $posts
       ]);
    }
    public function store(Request $request){
        $st = new Post; 
        $st->post = $request->post;

        $st->save(); 
        return response()->json([
            'data' => "add successfuly"
        ]);
    }
 
    public function destroy($id){
        $post= Post::find($id);
        $post->delete();
        return response()->json([
            'data' => "deleted successfuly"
        ]);
    }

    public function update(Request $request,$id){
      $post=  Post::where('id', $id)
        ->update(['post' => $request->post]);
// return $post;
if ($post) {
    $find_post= Post::find($id);
    return response()->json([
        'data' => $find_post
    ]);
}else{
    return response()->json([
        'data' => "update not  successfuly"
    ]);
}
       
    }
}
