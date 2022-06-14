@extends('layouts.back.master')
@section('content')

<div class="content">
      @if(session('msg'))
      <h2 class="alert alert-success" >{{session('msg')}}</h2>
      @endif
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Create  Comment</h3>
                  <a href="javascript:void(0);"> </a>
                </div>
              </div>
              <div class="card card-primary">
            
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/comment/create" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="post_id" id="post_id">
                <div class="card-body ">
                    <div class="row">
                    <div class="col-lg-6">
                        <label>Comment </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Comment "
                                name="comment_title">
                        </div>
                    </div>
                
                    <div class="col-lg-6">
                        <label>Comment On Date</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control"
                                name="comment_date">
                        </div>
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label "> Post </label>
                      <select name="com_post_id" id="post_id" class="form-control select2">

                          @foreach ($post as $item)
                              <option value="{{ $item->post_id }}">
                                  {{ $item->post_name }}
                              </option>
                          @endforeach
                      </select>

                  </div>
                
                </div>
                </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
           
            </div>
           
    @endsection