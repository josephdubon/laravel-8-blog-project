<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        $id = 6;
        // Query Builder Methods
        $posts = DB::table('posts')
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
            ->get();

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
        dd($posts);
    }
}
