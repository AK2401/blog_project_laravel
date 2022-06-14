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
                  <h3 class="card-title">Create  Post</h3>
                  <a href="javascript:void(0);"> </a>
                </div>
              </div>
              <div class="card card-primary">
            
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/post/create" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body ">
                    <div class="row">
                    <div class="col-lg-6">
                        <label>Post Name</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Post Name"
                                name="post_name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label>Post Author Name</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Post Author Name"
                                name="post_author">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label>Post On Date</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control"
                                name="posted_on">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label>Post Discription </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Post Discription "
                                name="discription">
                        </div>
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