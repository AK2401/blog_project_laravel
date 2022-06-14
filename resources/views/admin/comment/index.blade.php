@extends('layouts.back.master')
@section('content')
<div class="content">
@if(session('msg'))
      <h2 class="alert alert-success">{{session('msg')}}</h2>
      @endif

      <h1>View  Comment</h1>  

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
                      <th style="width: 60px">Posted ON</th>
                      <th style="width: 60px">View Comment</th>
                      <th style="width: 60px">Update</th>
                      <th style="width: 60px">Delete</th>

                    </tr>
                   

                  </thead>
                  <tbody>
                    @foreach ($data as $key => $list)
                    <tr>
                        <td> {{ $key + 1 }}</td>
                        <td>{{ $list->post_name }}</td>
                        <td>{{ $list->comment_date }}</td>
                        <td><a href="/comment/display/{{ $list->comment_id }}"
                          class="btn btn-success btn-sm">View</a></td>
                          <td><a href="/comment/edit/{{ $list->comment_id }}"
                            class="btn btn-primary btn-sm">Update</a></td>
                            <td><a href="/comment/delete/{{ $list->comment_id }}"
                              class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                    @endforeach

                   
               
                </table>
              
    @endsection