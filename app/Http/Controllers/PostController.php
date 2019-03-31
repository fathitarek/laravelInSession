<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use DB;
class PostController extends Controller
{
    public function __construct() { 
       // $this->middleware('checkAge'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // $users = DB::table('users') 
    // ->join('contacts', 'users.id', '=', 'contacts.user_id') 
    // ->join('orders', 'users.id', '=', 'orders.user_id') 
    // ->select('users.*', 'contacts.phone', 'orders.price') 
    // ->get();
    // $posts= Post::paginate(5);
    //  return response()->json([
    //     'data' => $posts
    // ]);
    // return $posts;
    // return $this->response()->json($posts->toArray(), 'posts retrieved successfully');


       // $posts = DB::table('posts')->first(); 

       $posts= Post::paginate(1);
        //dd( $posts);
    //    return view('city.edit', compact('record')); 

return view('posts/index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //   return $request;
            $st = new Post; 
            $st->post = $request->post;
            // $st->img = $input['image'];
    
            $st->save(); 
            return 1;
            //return $this->index();
           // return redirect('posts/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
