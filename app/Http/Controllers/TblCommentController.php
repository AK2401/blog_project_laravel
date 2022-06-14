<?php

namespace App\Http\Controllers;

use App\Models\tbl_comment;
use App\Models\tbl_post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TblCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = DB::table('tbl_posts')
            ->join('tbl_comments', 'tbl_comments.com_post_id', 'tbl_posts.post_id',)
            ->select('tbl_posts.*', 'tbl_comments.*')
            ->get();
        return view('admin.comment.index',  compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = tbl_post::all();
        return view('admin.comment.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $comment = new tbl_comment;
        $comment->comment_title = $request->comment_title;
        $comment->comment_date = $request->comment_date;
        $comment->com_post_id = $request->com_post_id;
        $comment->save();
        return redirect("/comment/view")->with("msg", "Comment Create successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbl_post  $tbl_post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('tbl_posts')
            ->join('tbl_comments', 'tbl_comments.com_post_id', 'tbl_posts.post_id',)
            ->select('tbl_posts.*', 'tbl_comments.*')
            ->get();
        return view('admin.comment.view',  compact('data'));
    }

    public function edit($id)
    {
        $data = tbl_post::all();
        $post = DB::table('tbl_posts')
            ->join('tbl_comments', 'tbl_comments.com_post_id', 'tbl_posts.post_id',)
            ->select('tbl_posts.*', 'tbl_comments.*')
            ->get();
        return view('admin.comment.edit',  compact('post', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbl_comment  $tbl_comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $data = tbl_comment::find($request->comment_id);
        $data->comment_title = $request->comment_title;
        $data->comment_date = $request->comment_date;
        $data->com_post_id = $request->com_post_id;
        $data->save();
        return redirect("/comment/view")->with('msg', "Comment Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbl_comment  $tbl_comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = tbl_comment::find($id);
        $data->delete();
        return redirect()->back()->with("msg", "Post Delete successfully");
    }

    public function json()
    {
        $data = DB::table('tbl_posts')
            ->join('tbl_comments', 'tbl_comments.com_post_id', 'tbl_posts.post_id',)
            ->select('tbl_posts.*', 'tbl_comments.*')
            ->get();
        dd($data);
    }
}
