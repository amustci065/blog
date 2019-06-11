@extends('layouts.backend.main')

@section('title', 'Blog | Add new post' )

@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Blog
            <small> Add new post </small>
          </h1>
          <ol class="breadcrumb">
              <li>
               <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
              </li>
            <li> <a href="{{ url('backend/blog/index') }}">Blog</a></li>
            <li class="active"> Add new </li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
            <div class="row">
              {!! Form::model($post, [
                  'method' => 'POST',
                  'url'    => 'backend/blog',
                  'files'  =>  TRUE,
                  'id' => 'post-form'
            ]) !!}

              <div class="col-xs-12">
                <div class="box">
                  <div class="box-body">  

                  @include('backend.blog.form')

                 {{-- <form method="POST" action="{{ url('blog/store') }}" enctype="multipart/form-data">
                    @csrf()  --}}

                        
                   
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              {!! Form::close() !!}
            </div>
          <!-- ./row -->
        </section>
        <!-- /.content -->
      </div>
@endsection

@include('backend.blog.script')