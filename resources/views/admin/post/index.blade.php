@extends('layouts.back.master')
@section('content')
<div class="content">
@if(session('msg'))
      <h2 class="alert alert-success">{{session('msg')}}</h2>
      @endif

      <h1>View  Posts</h1>  

      <div class="card">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">Sr.No</th>
                      <th style="width: 40px">Post Name</th>
                      <th style="width: 40px">Post Author</th>
                      <th style="width: 60px">Posted ON</th>
                      <th style="width: 60px">View</th>
                      <th style="width: 60px">Update</th>
                      <th style="width: 60px">Delete</th>

                    </tr>
                   

                  </thead>
                  <tbody>
                    @foreach ($data as $key => $list)
                    <tr>
                        <td> {{ $key + 1 }}</td>
                        <td>{{ $list->post_name }}</td>
                        <td>{{ $list->post_author }}</td>
                        <td>{{ $list->posted_on }}</td>
                        <td><a href="/post/display/{{ $list->post_id }}"
                          class="btn btn-success btn-sm">View</a></td>
                          <td><a href="/post/edit/{{ $list->post_id }}"
                            class="btn btn-primary btn-sm">Update</a></td>
                            <td><a href="/post/delete/{{ $list->post_id }}"
                              class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                    @endforeach

                   
               
                </table>
              
    @endsection