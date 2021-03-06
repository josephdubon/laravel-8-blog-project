<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::all();
        return view('posts.index', [
            'posts' => $posts
        ]);

        // Query Builder Methods
//        $posts = DB::table('posts');
//            ->where('created_at', '>', now()->subDay())
//            ->orWhere('title', 'Prof.')
//            ->whereBetween('id', [1, 5])
//            ->whereNotNull('title')
//            ->select('title')
//            ->distinct()
//            ->orderBy('title', 'asc')
//            ->latest()
//            ->orderBy('created_at', 'desc')
        // get first item that matches query
//            ->first();
        // get all items
//            ->get();

//            ->insert([
//                'title' => 'new post',
//                'body' => 'newbody'
//            ]);
//
//            ->where('id', '=', 3)
//            ->update([
//                'title' => 'Updated Post',
//                'body' => 'Updated new body'
//            ]);


//            ->where('id', '=', 3)
//            ->delete();

        // dump and die, dump it all
//        dd($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public
    function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }
}
