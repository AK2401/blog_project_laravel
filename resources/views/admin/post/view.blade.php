@extends('layouts.back.master')
@section('content')

<div class="content">
      @if(session('msg'))
      <h2 class="alert alert-success" >{{session('msg')}}</h2>
      @endif

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Display Post</h3>
                  <a href="javascript:void(0);"> </a>
                  <a href="/post/view" class="btn btn-info mx-3"><i class="fa fa-eye"
                    aria-hidden="true"></i> View All Post</a>
                </div>
              </div>
              <div class="card card-primary">
            
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body ">
                    <div class="row">
                    <div class="col-lg-6">
                        <label>Post Name</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="post_name" readonly value="{{ $post->post_name }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label>Post Author Name</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control"     name="post_author" readonly value="{{ $post->post_author }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label>Post On Date</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control"
                                name="posted_on" readonly value="{{ $post->posted_on }}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label>Post Discription </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" 
                                name="discription" readonly value="{{ $post->discription }}" >
                        </div>
                    </div>
                
                </div>
                </div>
              
              </form>
            </div>
           
            </div>
           
    @endsection