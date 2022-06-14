<?php

namespace App\Http\Controllers;

use App\Models\tbl_post;
use Illuminate\Http\Request;

class TblPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tbl_post::all();
        return view('admin.post.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post = new tbl_post;
        $post->post_name = $request->post_name;
        $post->post_author = $request->post_author;
        $post->posted_on = $request->posted_on;
        $post->discription = $request->discription;
        $post->save();
        return redirect("/post/view")->with("msg", "Post Create successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbl_post  $tbl_post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = tbl_post::find($id);
        return view('admin.post.view', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbl_post  $tbl_post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = tbl_post::find($id);
        return view('admin.post.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbl_post  $tbl_post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = tbl_post::find($request->post_id);
        $data->post_name = $request->post_name;
        $data->post_author = $request->post_author;
        $data->posted_on = $request->posted_on;
        $data->discription = $request->discription;
        $data->save();
        return redirect("/post/view")->with('msg', "Post Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbl_post  $tbl_post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = tbl_post::find($id);
        $data->delete();
        return redirect()->back()->with("msg", "Post Delete successfully");
    }

    public function json()
    {
        $data = tbl_post::all();
        dd($data);
    }
}
